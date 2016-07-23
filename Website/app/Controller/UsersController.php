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
            if($this->Auth->login())
            {
                echo 'test';
                return $this->redirect($this->Auth->redirectUrl());
            }
            
            $this->Session->setFlash(_('Invalid username or password.'));
            pr($this->Auth->user());
        }
    }
    
    public function logout()
    {
        $this->Auth->logout();
        $this->redirect('login');
    }
    
    public function profilehub()
    {
        
    }
}
?>