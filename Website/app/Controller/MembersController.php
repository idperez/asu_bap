<?php
class MembersController extends AppController{
    
    public function index()
    {
        //return all members to the view
        $memberdata = $this->Member->find('all', 
            array('order' => 'last_name'));
            
        $member = $this->Member->find('first', 
            array('conditions' => 
                array('id' => 12)));
            
        $this->set('members', $memberdata);
        $this->set('member', $member);
    }
    
    public function search()
    {
        
    }
    
    public function _getId()
    {
        
    }
}
?>