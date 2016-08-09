<?php
App::uses('AppModel', 'Model');
class User extends AppModel{
   
   //Actions to modify model item before adding to model 
   public function beforeSave($options = array())
   {
        $this->data['User']['password'] = md5($this->data['User']['password']);//AuthComponent::password($this->data['User']['password']); 
        return true;
   }
   
   public $belongsTo = 'Photo';
   public $hasAndBelongsToMany = array(
    'Event' =>
            array(
                'className' => 'Event',
                'joinTable' => 'events_users',
                'foreignKey' => 'user_id',
                'associationForeignKey' => 'event_id'
            )
    );
    
    public $validate = array(
        'username' => array(
        'ValidEmailRule' => array(
            'rule' => 'email',
            'message' => 'Please enter a valid email address.',
        ),
        'UniqueEmailRegistration' => array(
            'rule' => 'isUnique',
            'message' => 'This email has already been registered.'
    )),
        'password' => array(
        'rule' => array('minlength', '8'),
        'message' => 'Minimum length is 8 characters.'
    ),
        'first_name' => array(
            'rule' => '/^[a-zA-Z]*$/', //regex for exluding all numberic and special chars
            'message' => 'Please enter a valid First Name.'    
    ),
        'last_name' => array(
            'rule' => '/^[a-zA-Z]*$/', //regex for exluding all numberic and special chars
            'message' => 'Please enter a valid Last Name.'    
    ),
        'major' => array(
            'rule' => '/[a-zA-Z]*$/', //regex for exluding all numberic and special chars
            'message' => 'Please enter a valid Major.'
    ), 
        'minor' => array(
            'rule' => '/^[a-zA-Z]*$/', //regex for exluding all numberic and special chars
            'message' => 'Please enter a valid Minor.'
    ), 
        'phone' => array(
            'rule' => 'phone',
            'allowEmpty' => true,
            'message' => 'Please use a valid 10 digit phone number.'    
    ),
        'linkedin' => array(
            'rule' => 'url',
            'allowEmpty' => true,
            'message' => 'Please include a valid url (ex: https://www.linkedin.com).'
    ));
}
?>