<?php 
class Event extends AppModel{
    public $hasAndBelongsToMany = array(
    'Member' =>
            array(
                'className' => 'Member',
                'joinTable' => 'events_members',
                'foreignKey' => 'event_id',
                'associationForeignKey' => 'member_id'
            )
    );
}
?>