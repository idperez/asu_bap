<?php
class EventsController extends AppController{

    public function add()
    {
        //if user is admin
        if($this->Auth->user('level') != "Member" && $this->Auth->user('level') != "Candidate")
        {
            if($this->request->is('post'))
            {
                $data = $this->request->data;
                $this->Event->create();
                
                if($this->Event->save($this->request->data))
                {
                    $this->redirect('announcements');
                }
            }
        }
        //user is not an admin
        else
            $this->redirect('login');
    }
    
    public function edit($id = null)
    {
        
    }
    
    public function delete($id = null)
    {
        
    }
    
    public function view($id = null)
    {
        
    }
}
?>