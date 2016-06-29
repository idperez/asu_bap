<?php
class Major extends AppModel{
   public $hasAndBelongsToMany = array(
    'Member' =>
            array(
                'className' => 'Member',
                'joinTable' => 'majors_members',
                'foreignKey' => 'major_id',
                'associationForeignKey' => 'member_id'
            )
    );
}
?>