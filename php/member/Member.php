<?php

class Member {
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $jobTitle; //job title
    private $linkedInUrl;
    private $phoneNumber;
    private $imagePath;
    private $hasGraduated;
    private $graduationYear;
    private $graduationSemester;
    private $majors; //array of majors - max of 3
    private $password;
    private $level;
    private $state;
    private $city;
    private $bio;
    
    //will be useful when showing the 'brothers' page and navigation between profiles
    //todo - make private variable to getNext and prev
    public $nextMember;
    public $previousMember;
    
    private $databaseService;
    
    //todo - add in param for graduationSemester and update SQL database table (and all records)
    //todo - add bio, city, and state
    //todo - uncomment and successfully add graduationSemester
    function Member($id, $firstName, $lastName, $email, $password, $level)
    {
        $this->id = $id;
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setEmail($email);
        $this->setPassword($password);
        $this->setLevel($level);
        
        $this->databaseService = new DatabaseService;
    }
    
    //this serves as an overloaded constructor because PHP does not support method overloading...
    function MemberFull($jobTitle, $linkedInUrl, $phoneNumber, $imagePath, $hasGraduated, $graduationYear, 
        $graduationSemester, $major, $major2, $major3, $password, $state, $city, $bio)
    {
        $this->setJobTitle($jobTitle); //job title
        $this->setLinkedInUrl($linkedInUrl);
        $this->setPhoneNumber($phoneNumber);
        $this->setImagePath($imagePath);
        $this->setHasGraduated($hasGraduated);
        $this->setGraduationYear($graduationYear);
        $this->setGraduationSemester($graduationSemester);
        $this->setThreeMajors($major, $major2, $major3); //array of majors - max of 3
        $this->setState($state);
        $this->setCity($city);
        $this->setBio($bio);
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
    
    function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;
    }
    
    function getJobTitle()
    {
        return $this->jobTitle;
    }
    
    function setLinkedInUrl($url)
    {
        $this->linkedInUrl = $url;
    }
    
    function getLinkedInUrl()
    {
        return $this->linkedInUrl;
    }
    
    function setPhoneNumber($phoneNumber)
    {
        //remove dashes for db
        //todo
        $this->phoneNumber = $phoneNumber;
    }
    
    function getPhoneNumber($phoneNumber, $returnWithFormat)
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
        if($hasGraduated == 1) //has graduated, is alumni
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
    
    //use to get graduation information regardless of null values
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
    
    function findNumberOfMajors()
    {
        $numberOfMajors = 0;
        if($major3 != null)
            $numberOfMajors = 3;
        else if($major2 != null)
            $numberOfMajors = 2;
        else //$major != null
            $numberOfMajors = 1;
            
        return $numberOfMajors;   
    }
    
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
    
    //make sure state and city get parsed as capital letters
    function setState($state)
    {
        $this->state = $state;
    }   
    
    function getState()
    {
        return $this->state;
    }
    
    function setCity($city)
    {
        $this->city = $city;
    }   
    
    function getCity()
    {
        return $this->city;
    }
    
    function setBio($bio)
    {
        $this->bio = $bio;
    }   
    
    function getBio()
    {
        return $this->bio;
    }
}
?>