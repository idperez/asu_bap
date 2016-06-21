<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
include $root.'/bap/php/databaseservice.php';
include $root.'/bap/php/member/Member.php';
include $root.'bap/php/member/Officer.php';

class MemberList 
{
    private $size;
    private $databaseService;
    private $head;
    private $tail;
    private $tableName;
    
    function MemberList($tableName)
    {
        //reduce the amount of hardcoding for queries
        $this->tableName = $tableName;
        
        $this->databaseService = new DatabaseService;
        
        $members = $this->databaseService->performQuery("
        SELECT * FROM member
        ");
           
        //create new members and append to list
        while ($row = mysql_fetch_assoc($members)) 
        {
            //param 'fieldname' the way it appears in the sql database
            $tempMember = new Member($row['id'], $row['firstname'], $row['lastname'], $row['email'],
            $row['title'], $row['linkedin'], $row['phone'], $row['picture_path'], $row['graduated'], 
            $row['gradYear'], $row['major1'], $row['major2'], $row['major3'], $row['password'], 
            $row['level'], $row['state'], $row['city'], $row['bio']
            );
            
            //todo - add $tempMember to MembersList
            $size++;
        }
        
        //free resources   
        $this->databaseService->freeResource($members);
    }
    
    function addMemberPartial($tableName, $firstName, $lastName, $email, $password, $level)
    {
        $tempMember = $this->databaseService->performQuery("
        INSERT INTO ".$tableName." (firstname, lastname, email, password, level) 
        VALUES (".$firstName.",".$lastName.",".$email.",".$password.",".$level.")
        ");
        
        //todo - create new Member object based on $tempMember['id']
        //todo - append Member object to end of MembersList
        $size++;
        
        //free resource
        $this->databaseService->freeResource($tempMember);
    }
    
    function addMemberFull($firstName, $lastName, $email, $jobTitle, $linkedInUrl, $phoneNumber, $imagePath, 
        $hasGraduated, $graduationYear, $major, $major2, $major3, $password, $level, $state, $city, $bio)
    {
        $tempMember = $this->databaseService->performQuery("
        INSERT INTO ".$tableName." (firstname, lastname, email, title, linkedin, phone, picture_path, 
        graduated, gradYear, major1, major2, major3, password, level, state, city, bio) 
        VALUES (".$firstName.",".$lastName.",".$email.",".$jobTitle.",".$linkedInUrl.",".$phoneNumber.
        ",".$imagePath.",".$hasGraduated.",".$graduationYear.",".$major.",".$major2.",".$major3.",".
        $password.",".$level.",".$state.",".$city.",".$bio.")
        ");
        
        //todo - create new Member object based on $tempMember['id']
        //todo - append Member object to end of MembersList
        $size++;
        
        //free resource
        $this->databaseService->freeResource($tempMember);
    }
    
    function deleteMember($id)
    {
        //using a LinkedList is perfect because there should not be too many deletions other than for testing purposes
        //todo - traverse through MembersList and delete where the id matches.
    }     
}