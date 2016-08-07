<?php

class Prospective extends AppModel {
    
    public $validate = array(
        'email' => array(
        'ValidEmailRule' => array(
            'rule' => 'email',
            'message' => 'Please enter a valid email address.',
        ),
        'UniqueEmailRegistration' => array(
            'rule' => 'isUnique',
            'message' => 'This email has already been registered.'
    )));
}

