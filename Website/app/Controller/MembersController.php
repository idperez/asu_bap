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
        
    }
    
    public function delete($id = null)
    {
        
    }
}
?>