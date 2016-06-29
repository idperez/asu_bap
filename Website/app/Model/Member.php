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
}
?>