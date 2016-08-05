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
}
?>