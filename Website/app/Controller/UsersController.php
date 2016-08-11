<?php
class UsersController extends AppController {
    
        //All pages that are visible to regular users
    public function beforeFilter()
    {
        $this->Auth->allow('index', 'view');
    }
    
    public function index()
    {
        //returns all users to the view
        $userdata = $this->User->find('all', 
            array('order' => 'last_name'));
            
        $this->set('users', $userdata);
        
        $this->layout = 'hero-ish';
        $this->Session->write('Page', 'Members');
    }
    
    public function add()
    {
        //if user is not admin
        if($this->Auth->user('level') != "Officer")
            $this->redirect('profilehub/' . $this->Auth->user('id'));
            
        if($this->request->is('post'))
        {
            $data = $this->request->data;
            $this->User->create();
                
            if($this->User->save($this->request->data))
            {
                $this->redirect('index');
            }
        }
        
        $this->layout = 'hero-ish';
        $this->Session->write('Page', 'Hub');
    }
    
    public function view($id = null)
    {
        //returns a single user
        if(!$id || !user)
        {
           $this->redirect('index');
        }
        
        $user = $this->User->findById($id);
        
        $this->set('user', $user);
        
        $this->layout = 'hero-ish';
        $this->Session->write('Page', 'Members');
    }
    
    public function edit($id = null)
    {
        if($this->Auth->user('id') == $id) //if user id matches requested
            $this->editHelper($id);
        else if($this->Auth->user('id') != null) //else if user is logged in
            $this->edit($this->Auth->user('id'));   
        else //else no user is logged in
            $this->redirect('login');
        
        $this->layout = 'hero-ish';
        $this->Session->write('Page', 'Hub');
    }
    
    public function fulledit($id = null)
    {
        //if user is admin
        if($this->Auth->user('level') != "Member" && $this->Auth->user('level') != "Candidate")
            $this->editHelper($id);
        //else if user is not admin
        else if($this->Auth->user('id') != null)
            $this->editHelper($this->Auth->user('id'));
        //else user is not logged in    
        else
            $this->redirect('login');
        
        $this->layout = 'hero-ish';
        $this->Session->write('Page', 'Hub');
    }
    
    public function profilehub($id = null)
    {
        if(!$id)
            $this->redirect('login');
              
        if($this->Auth->user('id') != $id)
            $this->redirect('profilehub/' . $this->Auth->user('id'));
        
        $this->loadmodel('Event');  
        
        $allRsvps = $this->Event->EventsUser->find('all', array(
            'conditions' => array('user_id' => $id)
        ));
          
        //returns all events to the view
        $eventdata = $this->Event->find('all', 
            array(
                'order' => array('Event.time' => 'DESC')
        ));
        
        $this->set('rsvps', $allRsvps);    
        
        $numOfEvents = 0;
        $numOfMisses = 0;
        $numOfHours = 0;
        
        //count number of events, hours, and missed events
        foreach($allRsvps as $rsvp):
            if($rsvp['EventsUser']['present'] == TRUE)
            {
                $numOfEvents++;
                foreach($eventdata as $event):
                    if($event['Event']['id'] == $rsvp['EventsUser']['event_id'])
                        $numOfHours += $event['Event']['hours'];
                endforeach;
            }
            else
            {
                foreach($eventdata as $event):
                    if($event['Event']['id'] == $rsvp['EventsUser']['event_id'] && $event['Event']['closed'])
                        $numOfMisses++;
                endforeach;
            }    
        endforeach;
        
        $eventdata = $this->Event->find('all', 
            array(
                'order' => array('Event.time' => 'DESC'),
                'limit' => 3
        ));
        
        $this->set('allRsvps', $allRsvps);
        $this->set('numOfEvents', $numOfEvents);
        $this->set('numOfHours', $numOfHours);
        $this->set('numOfMisses', $numOfMisses);   
        $this->set('events', $eventdata);
        
        $user = $this->User->findById($id);
        
        $this->set('user', $user);
        
        $this->layout = 'hero-ish';
        $this->Session->write('Page', 'Hub');
    }
    
    //Helper used across common views
    public function editHelper($id)
    {
        //returns a single member
        if(!$id)
        {
           throw new  NotFoundException(__('The Id was not found.'));
        }
        
        $user = $this->User->findById($id);
        
        if(!$user)
        {
            throw new NotFoundException(__('This member does not exist.'));
        }    
        
        //save new inputs to member
        if($this->request->is('post') || $this->request->is('put'))
        {       
            $this->User->id = $id; //set member id = to id caught

            if($this->User->save($this->request->data))
            {
                $this->redirect('index');
            }
        }
        
        $this->request->data = $user;
    }
    
    public function profile_pic($id = null) 
    {
        $user = $this->User->findById($id);
        
        $this->set('user', $user);
        
        if($this->request->is('post'))
        {
             $data = $this->request->data;
             
             echo $_FILES[$data['url']];
        }          
        
        $this->layout = 'hero-ish';
        $this->Session->write('Page', 'Hub');
    }
    
    
    public function delete($id = null)
    {
        //if user is not admin
        if($this->Auth->user('level') != 'Officer')
            $this->redirect('profilehub/' . $this->Auth->user('id'));
        
        $data = $this->User->findById($id);
        
        if($this->User->exists($id))
        {
            if($this->User->delete($id)) //success
                $this->redirect('index');
            else //unsuccessful
                throw new NotFoundException(__('This deletion was unsuccessful.'));
        }
        else
        {
            //Member does not exist
            $this->redirect('profilehub');
        }
    }
    
    public function login()
    {
        if($this->request->is('post'))
        {
            $data = $this->request->data;
            $username = $data['username'];
            $password = Security::hash($data['password'], 'md5', false);
            
            $user = $this->User->find('first', array(
                'conditions' => array(
                    'user.username' => $username,
                    'user.password' => $password
                ),
                'recursive' => -1
            ));
            
            if(!empty($user) && $this->Auth->login($user['User']))
            {
                $this->Session->setFlash('Connection Successful');
                return $this->redirect('profilehub/' . $this->Auth->user('id'));
            }
            else 
            {
                $this->Session->setFlash('Invalid username and/or password');
            }
        }
        $this->Session->write('Page', 'Hub');
    }
    
    public function logout()
    {
        $this->Auth->logout();
        $this->redirect('login');
    }
     
    public function manage_members()
    {
        //if user is not admin
        if($this->Auth->user('level') != 'Officer')
            $this->redirect('profilehub/' . $this->Auth->user('id'));
            
        $this->loadModel('Event');
        
        //returns all users to the view
        $users = $this->User->find('all', 
            array('order' => array('level' => 'DESC')));
        
        $allRsvps = $this->Event->EventsUser->find('all');
        $events = $this->Event->find('all');
        
        $this->set('users', $users);
        $this->set('allRsvps', $allRsvps);
        $this->set('events', $events);
        
        $this->layout = 'hero-ish';
        $this->Session->write('Page', 'Hub');
    }
    
    public function manage_prospective_members()
    {
        //if user is not admin
        if($this->Auth->user('level') != 'Officer')
            $this->redirect('profilehub/' . $this->Auth->user('id'));
            
        $this->loadModel('Prospective');
        
        $prospective_members_data = $this->Prospective->find('all');
        
        $this->set('prospective_members', $prospective_members_data);
        
        $this->layout = 'hero-ish';
        $this->Session->write('Page', 'Hub');
    }
}
?>