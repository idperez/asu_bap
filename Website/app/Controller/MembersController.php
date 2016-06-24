<?php
class MembersController extends AppController{
    
    public function index()
    {
        $data = $this->Member->find('all',
            array('order' => 'last_name'));
        $this->set('members', $data);
    }
    
    public function search()
    {
        
    }
    
    public function _getId()
    {
        
    }
}
?>