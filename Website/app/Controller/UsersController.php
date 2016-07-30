<?php
class UsersController extends AppController{
    
        //All pages that are visible to regular users
    public function beforeFilter()
    {
        $this->Auth->allow('index', 'view', 'add');
    }
    
    public function index()
    {
        //returns all users to the view
        $userdata = $this->User->find('all', 
            array('order' => 'last_name'));
            
        $this->set('users', $userdata);
    }
    
    public function add()
    {
        if($this->request->is('post'))
        {
            $data = $this->request->data;
            $this->User->create();
            
            if($this->User->save($this->request->data))
            {
                $this->redirect('index');
            }
        }
    }
    
    public function view($id = null)
    {
        //returns a single user
        if(!$id)
        {
           throw new  NotFoundException(__('The Id was not found.'));
        }
        
        $user = $this->User->findById($id);
        
        if(!$user)
        {
            throw new NotFoundException(__('This member does not exist.'));
        }
        
        $this->set('user', $user);
    }
    
    public function edit($id = null)
    {
        if($this->Auth->user('id') == $id)
            $this->editHelper($id);
        else
            throw new NotFoundException(_('You must be an administrator to perform this action.'));   
    }
    
    public function adminedit($id = null)
    {
        if($this->Auth->user('level') != "Member" && $this->Auth->user('level') != "Candidate")
            $this->editHelper($id);
        else
            throw new NotFoundException(__('You must be an administrator to perform this action.'));
    }
    
    public function profilehub($id = null)
    {
      
        $user = $this->User->findById($id);
        
        $this->set('user', $user);
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
    
    public function rsvp($id = null)
    {
        $user = $this->User->findById($id);
        
        $this->set('user', $user);
    }
    
    public function my_events($id = null)
    {
        $user = $this->User->findById($id);
        
        $this->set('user', $user);
    }
    
    public function delete($id = null)
    {
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
            throw new NotFoundException(__('This member does not exist.'));
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
    }
    
    public function logout()
    {
        $this->Auth->logout();
        $this->redirect('login');
    }
}
?>