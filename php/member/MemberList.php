<?php
include 'databaseservice.php';

class MembersList 
{
    private $size;
    private $members; //array of all member objects
    
    function MembersList($size)
    {
        $this->size = size;    
    }    
}
?>