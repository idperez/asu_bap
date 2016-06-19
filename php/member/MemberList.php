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
               //param 'fieldname' the way it appears in the sql database
               //??todo?? - consider updating title to jobtitle in database
               //??todo?? - consider matching sql field names to match php code or vice versa
               $tempMember = new Member($row['id'], $row['firstname'], $row['lastname'], $row['email'],
                    $row['title'], $row['linkedin'], $row['phone'], $row['picture_path'], $row['graduated'], 
                    $row['gradYear'], $row['major1'], $row['major2'], $row['major3'], $row['password'], $row['level']
               );
                echo $tempMember->getJobTitle();
                echo " ";
           }
           
           $this->databaseService->freeResource($members);
    }    
}
?>