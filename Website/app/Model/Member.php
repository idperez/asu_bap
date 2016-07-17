<?php
class Member extends AppModel{
   public $belongsTo = 'Photo';
   public $hasAndBelongsToMany = array(
    'Major' =>
            array(
                'className' => 'Major',
                'joinTable' => 'majors_members',
                'foreignKey' => 'member_id',
                'associationForeignKey' => 'major_id'
            ),
    'Event' =>
            array(
                'className' => 'Event',
                'joinTable' => 'events_members',
                'foreignKey' => 'member_id',
                'associationForeignKey' => 'event_id'
            )
    );
    public $validate = array(
        'password' => array(
        'rule' => array('minlength', '8'),
        'message' => 'Minimum length is 8 characters.'
    ),
        'email' => array(
        'ValidEmailRule' => array(
            'rule' => 'email',
            'message' => 'Please enter a valid email address.',
        ),
        'UniqueEmailRegistration' => array(
            'rule' => 'isUnique',
            'message' => 'This email has already been registered.'
    )),
        'first_name' => array(
            'rule' => '/^[a-zA-Z]*$/', //regex for exluding all numberic and special chars
            'message' => 'Please enter a valid First Name.'    
    ),
        'last_name' => array(
            'rule' => '/^[a-zA-Z]*$/', //regex for exluding all numberic and special chars
            'message' => 'Please enter a valid Last Name.'    
    ),
        'phone' => array(
            'rule' => 'phone',
            'message' => 'Please use a valid 10 digit phone number.'    
    ),
        'linkedin' => array(
            'rule' => 'url',
            'message' => 'Please include a valid url (ex: https://linkedin.com).'
    ));
}
?>