<?php
class MembersController extends AppController{
    
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
    
    public function adminview()
    {
        //returns all members to the view
        $memberdata = $this->Member->find('all', 
            array('order' => 'last_name'));
            
        $this->set('members', $memberdata);
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
}
?>