<?php
include 'databaseservice.php';
include 'Member.php';

class MemberList 
{
    private $size;
    private $databaseService;
    private $head;
    private $tail;
    
    function MemberList()
    {
           $this->databaseService = new DatabaseService;
           $members = $this->databaseService->performQuery("
           SELECT * FROM member
           ");
           
           //create new members and append to list
           while ($row = mysql_fetch_assoc($members)) 
           {
               $tempMember = new Member($row['id']);
               $tempMember->setFirstName($row['firstname']);
               $tempMember->setLastName($row['lastname']);
                echo $tempMember->getFullName();
                echo " ";
           }
           
           $this->databaseService->freeResource($members);
    }    
}
?>