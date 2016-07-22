<?php
class Major extends AppModel{
    public $hasAndBelongsToMany = array(
    'User' =>
            array(
                'className' => 'User',
                'joinTable' => 'majors_users',
                'foreignKey' => 'major_id',
                'associationForeignKey' => 'user_id'
            )
    );
}
?>