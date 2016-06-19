<?php

class Member {
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $jobtitle; //job title
    private $linkedInUrl;
    private $phoneNumber;
    private $imagePath;
    private $hasGraduated;
    private $graduationYear;
    private $graduationSemester;
    private $majors; //array of majors - max of 3
    private $password;
    private $level;
    
    //will be useful when showing the 'brothers' page and navigation between profiles
    private $nextMember;
    private $previousMember;
    
    private $databaseService;
    
    //todo - add in param for graduationSemester and update SQL database table (and all records)
    //??todo?? - add param for short biography or maybe short questions and update SQL database table (and all records)
    function Member($id, $firstName, $lastName, $email, $jobtitle, $linkedInUrl, $phoneNumber, $imagePath, 
        $hasGraduated, $graduationYear, $major, $major2, $major3, $password, $level)
    {
        $this->id = $id;
        $this->firstName = $this->setFirstName($firstName);
        $this->lastName = $lastName;
        $this->email = $email;
        $this->jobtitle = $jobtitle; //job title
        $this->linkedInUrl = $linkedInUrl;
        $this->phoneNumber = $phoneNumber;
        $this->imagePath = $imagePath;
        $this->hasGraduated = $hasGraduated;
        $this->graduationYear = $graduationYear;
        //this->$graduationSemester = $graduationSemester;
        $this->majors = array($major, $major2, $major3); //array of majors - max of 3
        $this->password = $password;
        $this->level = $level;
        
        $this->databaseService = new DatabaseService;
    }
    
    //todo - add SQL queries through database service performQuery() for all set functions to update fields at $this->id
    function getId()
    {
        return $this->id;
    }
    
    function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    
    function getFirstName()
    {
        return $this->firstName;
    }
    
    function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    
    function getLastName()
    {
        return $this->lastName;
    }
    
    function getFullName()
    {
        return $this->firstName." ".$this->lastName;
    }
    
    function setEmail($email)
    {
        $this->email = $email;
    }
    
    function getEmail()
    {
        return $this->email;
    }
    
    function setLinkedInUrl($url)
    {
        $this->linkedInUrl = $url;
    }
    
    function getLinkedInUrl()
    {
        return $this->linkedInUrl;
    }
    
    function setPhone($phoneNumber)
    {
        //remove dashes for db
        //todo
        $this->phoneNumber = $phoneNumber;
    }
    
    function getPhone($phoneNumber, $returnWithFormat)
    {
        //return phone number with '-' if returnWithFormat = true, else return 
        //todo
        if($returnWithFormat)
        {
            
        }
        else
        {
            return $this->phoneNumber;
        }
    }
    
    function setImagePath($imagePath)
    {
        $this->imagePath = $imagePath;
    }
    
    function getImagePath()
    {
        return $this->imagePath;
    }
    
    function setHasGraduated($hasGraduated)
    {
        //if 0, has not graduated
        //todo - test for both string and int after '==' 
        if($hasGraduated == "1") //has graduated, is alumni
        {
            $this->hasGraduated = true;
        }
        else //has not graduated
        {
            $this->hasGraduated = false;
        }
    }
    
    private function getHasGraduated()
    {
        //return bool
        return $this->hasGraduated;
    }
    
    function isAlumni()
    {
        //returns true if hasGraduated = true
        return $this->getHasGraduated();
    }
    
    function setGraduationYear($year)
    {
        $this->graduationYear = $year;
    }
    
    function setGraduationSemester($semester)
    {
        $this->graduationSemester = $semester;
    }
    
    function getGraduation()
    {
        if($this->graduationSemester != null) //return accurate graduation date
        {
            return $this->graduationSemester." ".$this->graduationYear;
        }
        else //return just year
        {
            return $this->graduationYear;
        }
    }
    
    //1, 2, 3 declared majors
    function setMajor($major)
    {
        $this->majors = array($major); //return array to keep consistency
    }
    
    function setTwoMajors($major, $major2)
    {
        $this->majors = array($major, $major2);
    }
    
    function setThreeMajors($major, $major2, $major3)
    {
        $this->majors = array($major, $major2, $major3);
    }
    
    function getMajors()
    {
        return $this->majors; //returns array with the member's list of majors
    }
    
    //todo - add hashing before updating password/setting in database
    function setPassword($password)
    {
        $this->password = $password;
    }
    
    //todo - add reverse hashing before returning password
    function getPassword()
    {
        //return $this->password;
    }  
    
    function setLevel($level)
    {
        $this->level = $level;
    }
    
    function getLevel()
    {
        return $this->level;
    }   
}
?>