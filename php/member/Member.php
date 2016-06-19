<?php
class Member {
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    private $linkedInUrl;
    private $phoneNumber;
    private $imagePath;
    private $hasGraduated;
    private $graduationYear;
    private $graduationSemester;
    private $majors; //array of majors - max of 3
    private $password;
    private $level;
    
    private $nextMember;
    private $previousMember;
    
    function Member($id)
    {
        $this->id = $id;
    }
    
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
    
    function setPassword($password)
    {
        $this->password = $password;
    }
    
    function getPassword()
    {
        return $this->password;
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