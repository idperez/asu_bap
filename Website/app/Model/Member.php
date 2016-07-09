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
    ));
}
?>