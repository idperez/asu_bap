<?php
class EventsController extends AppController{
    
    public function beforeFilter()
    {
        $this->Auth->allow('events', 'announcements', 'opportunities');
    }
    
    public function add()
    {
        //if user is not admin
        if($this->Auth->user('level') != "Officer")
            $this->redirect(
                array('controller' => 'Users', 'action' => 'profilehub/' . $this->Auth->user('id')));
                
        if($this->request->is('post'))
        {
            $this->Event->create();
                
            if($this->Event->save($this->request->data))
            {
                $this->redirect('announcements');
            }
        }
            
        $this->loadModel('User');
        $users = $this->User->find('all');

        $this->set('user', $users);
    }
    
    public function edit($id = null)
    {
        //if user is admin
        if($this->Auth->user('level') != "Member" && $this->Auth->user('level') != "Candidate")
        {                        
           //returns a single event, if present
           $event = $this->Event->findById($id);   

            if(!$id || !$event)
            {
                $this->redirect(
                    array('controller' => 'Users', 'action' => 'profilehub/' .$this->Auth->user('id'))
                );
            }
            
            //save new inputs to event
            if($this->request->is('post') || $this->request->is('put'))
            {       
                $this->Event->id = $id; //set event id = to id caught

                if($this->Event->save($this->request->data))
                {
                    $this->redirect('announcements');
                }
            }
            
            $this->request->data = $event;
        }
        //else if user is not admin
        else if ($this->Auth->user('id') != null) 
        {
           $this->redirect(
               array('controller' => 'Users', 'action' => 'profilehub'));
        }
        //else if user is not logged in
        else 
        {
            $this->redirectToLogin();
        }
    }
    
    public function delete($id = null)
    {
        //if user is not admin
        if($this->Auth->user('level') != "Officer")
            $this->redirect(
                array('controller' => 'Users', 'action' => 'profilehub/' . $this->Auth->user('id')));
                
        $data = $this->Event->findById($id);
        
        if($this->Event->exists($id))
        {
            if($this->Event->delete($id)) //success
                $this->redirect('announcements');
            else //unsuccessful
                throw new NotFoundException(__('This deletion was unsuccessful.'));
        }
        else
        {
            //Member does not exist
            $this->redirect(
               array('controller' => 'Users', 'action' => 'profilehub/' . $this->Auth->user('id')));
        }
    }
    
    public function announcements()
    {
        $this->EventHelper();
        $this->assignUserToView($this->Auth->user('id'));
    }
    
    public function opportunities()
    {
        //returns all opportunities to the view
        $eventdata = $this->Event->find('all', 
            array(
                'order' => array('Event.time' => 'DESC'),
                'condition' => array('type' => 'Opportunity')
        ));
            
        $this->set('events', $eventdata);
    }
    
    public function events()
    {
        //returns all true events to the view
        $eventdata = $this->Event->find('all', 
            array(
                'order' => array('Event.time' => 'DESC'),
                'condition' => array('type' => 'Event')
        ));
            
        $this->set('events', $eventdata);
        
        $this->assignUserToView($this->Auth->user('id'));
    }
    
    public function EventHelper()
    {
        //returns all events to the view
        $eventdata = $this->Event->find('all', 
            array(
                'order' => array('Event.time' => 'DESC')
        ));
            
        $this->set('events', $eventdata); 
    }
    
    public function redirectToLogin()
    {
        $this->redirect(array(
            'controller' => 'Users', 'action' => 'login'
        ));
    }
    
    public function manage_events()
    {
        //if user is not admin
        if($this->Auth->user('level') != "Officer")
            $this->redirect(
                array('controller' => 'Users', 'action' => 'profilehub/' . $this->Auth->user('id')));
            
        $allRsvps = $this->Event->EventsUser->find('all');
        $this->set('rsvps', $allRsvps);
                
        $this->EventHelper();    
    }
    
    public function past_events()
    {
    //if user is not admin
    if($this->Auth->user('level') != "Officer")
        $this->redirect(
            array('controller' => 'Users', 'action' => 'profilehub/' . $this->Auth->user('id')));
                
    $allRsvps = $this->Event->EventsUser->find('all');
    $this->set('rsvps', $allRsvps);
                
    $this->EventHelper();
    }
    
    public function manage_members()
    {
        //if user is not admin
        if($this->Auth->user('level') != "Officer")
            $this->redirect(
                array('controller' => 'Users', 'action' => 'profilehub/' . $this->Auth->user('id')));
                
    }
    
    public function view($id = null)
    {
        $event = $this->Event->findById($id);
        if($event == null || $id == null)
            $this->redirect(array(
                'controller' => 'Users', 'action' => 'profilehub/' . $this->Auth->user('id')));
        
        $allRsvps = $this->Event->EventsUser->find('all', array(
            'conditions' => array('event_id' => $id)
        ));
        
        $this->loadModel('User');
        $users = $this->User->find('all');
        
        $this->set('rsvps', $allRsvps);
        $this->set('users', $users);
        $this->set('event', $event);
    }
    
    public function sign_in($id = null, $email = null)
    {         
        if($email != null)
        {
            $this->loadModel('User');
            $user = $this->User->find('first', array(
                'conditions' => array('username' => $email)    
            ));
            
            $event = $this->Event->EventsUser->find('first', array(
                'conditions' => array('event_id' => $id, 'user_id' => $user['User']['id'])
            ));
            
            $this->loadModel('EventsUser');
            $this->EventsUser->id = $event['EventsUser']['id'];
            $this->EventsUser->set(array('present' => 1));
            $this->EventsUser->save();
            
            $this->redirect('view/' . $id);
        }
    }
    
    public function close_event($id = null)
    {
        //if user is not admin
        if($this->Auth->user('level') != "Officer")
            $this->redirect(
                array('controller' => 'Users', 'action' => 'profilehub/' . $this->Auth->user('id')));
                
        $this->Event->id = $id;
        $this->Event->set(array('closed' => 1));
        $this->Event->save();
        $this->redirect('view/'. $id);
    }
    
    public function open_event($id = null)
    {
        //if user is not admin
        if($this->Auth->user('level') != "Officer")
            $this->redirect(
                array('controller' => 'Users', 'action' => 'profilehub/' . $this->Auth->user('id')));
                
        $this->Event->id = $id;
        $this->Event->set(array('closed' => 0));
        $this->Event->save();
        $this->redirect('view/'. $id);
    }
    
    public function officer_view($id = null)
    {
        //if user is not admin
        if($this->Auth->user('level') != "Officer")
            $this->redirect(
                array('controller' => 'Users', 'action' => 'profilehub/' . $this->Auth->user('id')));
                
        $this->assignUserToView($id); //user
        
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
        
        $this->set('allRsvps', $allRsvps);
        $this->set('numOfEvents', $numOfEvents);
        $this->set('numOfHours', $numOfHours);
        $this->set('numOfMisses', $numOfMisses);   
        $this->set('events', $eventdata);
    }
    
    public function my_events($id = null)
    {
        if(!$id)
            $this->redirect('my_events/' .$this->Auth->user('id'));
        
        $this->assignUserToView($id);
    }
    
    public function assignUserToView($id)
    {            
        $this->loadModel('User');
        $user = $this->User->findById($id);
        
        $this->set('user', $user);
    }
    
    public function rsvpTo($userId = null, $eventId = null)
    {       
        if(!$userId || !$eventId)
            $this->redirect('announcements');
         
        $this->Event->EventsUser->create();
        $data = array("user_id" => $userId, "event_id" => $eventId);
        $this->Event->EventsUser->save($data);
        
        $this->redirect('announcements');
    }
}
?>