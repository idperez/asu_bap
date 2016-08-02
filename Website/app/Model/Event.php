<?php 
class Event extends AppModel{
    public $hasAndBelongsToMany = array(
    'User' =>
            array(
                'className' => 'User',
                'joinTable' => 'events_users',
                'foreignKey' => 'event_id',
                'associationForeignKey' => 'user_id'
            )
    );
    
    public function addUser($userId, $eventId)
    {
        $this->data['User']['id'] = $userId;
        $this->data['Event']['id'] = $eventId;
        
        $this->save($this->data);
    }
    
    public function deleteUser($userId, $eventId)
    {
        $this->data['User']['id'] = $userId;
        $this->data['Event']['id'] = $eventId;
        
        $this->delete(array('event_id' => 
            $eventId, 'user_id' => $userId), false);         
    }
}
?>