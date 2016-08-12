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
    public $validate = array(
        'name' => array(
            'rule' => '/^[a-zA-Z]*$/',
            'message' => 'Please enter a valid title.',
        ),
        'description' => array(
            'rule' => array('minlength', '8'),
            'message' => 'You must have a description.'
        )
    );  
}
?>