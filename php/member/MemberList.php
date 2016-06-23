<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]); 
include $root.'/bap/php/databaseservice.php';
//include $root.'/bap/php/member/Member.php';
include $root.'/bap/php/member/Officer.php';

class MemberList 
{
    private $size;
    private $databaseService;
    private $firstMember;
    private $lastMember;
    private $tableName;
    
    function MemberList($tableName)
    {
        //reduce the amount of hardcoding for queries
        $this->tableName = $tableName;
        
        $this->databaseService = new DatabaseService;
        
        $members = $this->databaseService->performQuery("
        SELECT * FROM ".$tableName." 
        ORDER BY lastname
        ");
        
        //??todo?? - Should Officers be in a separate lists? May be easier to add a new param isOfficer and reflect that by a WHERE in SQL
        //create new members and append them to end of list
        while ($row = mysql_fetch_assoc($members)) 
        {                
            //param 'fieldname' the way it appears in the sql database
            $tempMember = new Member($row['id'], $row['firstname'], $row['lastname'], $row['email'],
            $row['title'], $row['linkedin'], $row['phone'], $row['picture_path'], $row['graduated'], 
            $row['gradYear'], $row['gradSemester'], $row['major1'], $row['major2'], $row['major3'], $row['password'], 
            $row['level'], $row['state'], $row['city'], $row['bio']
            );
            
            if($this->firstMember == null)
            {
                $this->firstMember = $tempMember;
                $this->lastMember = $tempMember;
            }
            else
            {              
                //Append newest Member to end of list
                $this->lastMember->nextMember = $tempMember;
                $oldMember = $this->lastMember;
                $this->lastMember = $tempMember;
                $this->lastMember->previousMember = $oldMember;
            }
            
            $this->size++;
        }
        
        //free resources   
        $this->databaseService->freeResource($members);
    }
    
    function addMemberPartial($firstName, $lastName, $email, $password, $level)
    {
        $member = $this->databaseService->performQuery("
        INSERT INTO ".$this->tableName." (firstname, lastname, email, password, level) 
        VALUES (".$firstName.",".$lastName.",".$email.",".$password.",".$level.")
        ");
        
        $tempMember = new Member($member['id'], $member['firstname'], $member['lastname'], $member['email'],
            $member['password'], $member['level']
        );
            
        if($this->firstMember == null)
        {
            $this->firstMember = $tempMember;
            $this->lastMember = $tempMember;
        }
        else
        {
            $currentMember = $this->firstMember;
            //Add newest Member to the appropriate spot in the list
            while($currentMember->nextMember != null && 
                strcmp($currentMember->nextMember->lastname, $tempMember->lastname) < 0)
            {
                //strcmp() returns < 0 if str1 is less than str2; > 0 if str1 is greater than str2; 0 if they are equal.
                $currentMember = $currentMember->nextMember;  
            }
            
            //insert member to list, in-between $currentMember->next
            $tempMember->nextMember = $currentMember->nextMember;
            $tempMember->previousMember = $currentMember;
            $currentMember->next = $tempMember;            
        }
                        
        $this->size++;
        
        //free resource
        $this->databaseService->freeResource($tempMember);
    }
    
    function addMemberFull($firstName, $lastName, $email, $jobTitle, $linkedInUrl, $phoneNumber, $imagePath, 
        $hasGraduated, $graduationYear, $major, $major2, $major3, $password, $level, $state, $city, $bio)
    {
        $member = $this->databaseService->performQuery("
        INSERT INTO ".$this->tableName." (firstname, lastname, email, title, linkedin, phone, picture_path, 
        graduated, gradYear, major1, major2, major3, password, level, state, city, bio) 
        VALUES (".$firstName.",".$lastName.",".$email.",".$jobTitle.",".$linkedInUrl.",".$phoneNumber.
        ",".$imagePath.",".$hasGraduated.",".$graduationYear.",".$major.",".$major2.",".$major3.",".
        $password.",".$level.",".$state.",".$city.",".$bio.")
        ");
        
        $tempMember = new Member($member['id'], $member['firstname'], $member['lastname'], $member['email'],
            $member['title'], $member['linkedin'], $member['phone'], $member['picture_path'], $member['graduated'], 
            $member['gradYear'], $member['major1'], $member['major2'], $member['major3'], $member['password'],
            $member['level'], $member['state'], $member['city'], $member['bio']
        );
        
        if($this->firstMember == null)
        {
            $this->firstMember = $tempMember;
            $this->lastMember = $tempMember;
        }
        else
        {
            $currentMember = $this->firstMember;
            //Add newest Member to the appropriate spot in the list
            while($currentMember->nextMember != null && 
                strcmp($currentMember->nextMember->lastname, $tempMember->lastname) < 0)
            {
                //strcmp() returns < 0 if str1 is less than str2; > 0 if str1 is greater than str2; 0 if they are equal.
                $currentMember = $currentMember->nextMember;  
            }
            
            //insert member to list, in-between $currentMember->next
            $tempMember->nextMember = $currentMember->nextMember;
            $tempMember->previousMember = $currentMember;
            $currentMember->next = $tempMember;            
        }
        
        $this->size++;
        
        //free resource
        $this->databaseService->freeResource($tempMember);
    }
    
    //if delete head/tail, special case
    function deleteMember($id)
    {
        //using a LinkedList is perfect because there should not be too many deletions other than for testing purposes
        //todo - traverse through MembersList and delete where the id matches.
    }     
}