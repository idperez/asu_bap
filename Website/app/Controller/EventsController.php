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
        //if user is admin
        if($this->Auth->user('level') != "Member" && $this->Auth->user('level') != "Candidate")
        {
            //returns a single event
            if(!$id)
            {
                throw new  NotFoundException(__('The Id was not found.'));
            }
            
            $event = $this->Event->findById($id);
            
            if(!$event)
            {
                throw new NotFoundException(__('This event does not exist.'));
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
            $this->redirect('login');
        }
    }
    
    public function delete($id = null)
    {
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
               array('controller' => 'Users', 'action' => 'profilehub'));
        }
    }
    
    public function view($id = null)
    {
        
    }
    
    public function announcements()
    {
        
    }
    
    public function opportunities()
    {
        
    }
    
    public function events()
    {
        
    }
}
?>