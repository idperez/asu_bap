<?php
class MembersController extends AppController{
    
        //All pages that are visible to regular users
    public function beforeFilter()
    {
        $this->Auth->allow('index', 'view', 'add');
    }
    
    public function index()
    {
        //returns all members to the view
        $memberdata = $this->Member->find('all', 
            array('order' => 'last_name'));
            
        $this->set('members', $memberdata);
    }
    
    public function add()
    {
        if($this->request->is('post'))
        {
            $this->Member->create();
            
            if($this->Member->save($this->request->data))
            {
                $this->redirect('index');
            }
        }
    }
    
    public function view($id = null)
    {
        //returns a single member
        if(!$id)
        {
           throw new  NotFoundException(__('The Id was not found.'));
        }
        
        $member = $this->Member->findById($id);
        
        if(!$member)
        {
            throw new NotFoundException(__('This member does not exist.'));
        }
        
        $this->set('member', $member);
    }
    
    public function edit($id = null)
    {
        //returns a single member
        if(!$id)
        {
           throw new  NotFoundException(__('The Id was not found.'));
        }
        
        $member = $this->Member->findById($id);
        
        if(!$member)
        {
            throw new NotFoundException(__('This member does not exist.'));
        }    
        
        //save new inputs to member
        if($this->request->is('post') || $this->request->is('put'))
        {       
            $this->Member->id = $id; //set member id = to id caught
            if($this->Member->save($this->request->data))
            {
                $this->redirect('index');
            }
        }
        
        $this->request->data = $member;    
    }
    
    public function delete($id = null)
    {
        $data = $this->Member->findById($id);
        
        if($this->Member->exists($id))
        {
            if($this->Member->delete($id)) //success
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
                return $this->redirect($this->Auth->redirectUrl());
            }
            
            $this->Session->setFlash(_('Invalid username or password.'));
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