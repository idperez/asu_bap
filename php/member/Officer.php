<?php
include 'member.php';

class Officer extends Member
{   
    //should automatically call constructor of base class
    
    function addMemberPartial($firstName, $lastName, $email, $password)
    {
        
    }
    
    function addMember($firstName, $lastName, $email, $title, $linkedInUrl, $phone, $imagePath, $hasGraduated, $expectedGraduationYear, $expectedGraduationSemester, $majorsId, $password, $level)
    {
        
    }
    
    function setLevel($memberId, $level)
    {
        
    }
}
?>