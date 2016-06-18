<?php
class DatabaseService
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $databaseName = "bap";
    
    public function DatabaseService()
    {
        //	Connection
        global $test_db;

        $test_db = new mysqli();
        $test_db->connect($host, $username, $password, $databaseName);
        $test_db->set_charset("utf8");

        //	Check Connection
        if ($test_db->connect_errno) 
        {
            printf("Connect failed: %s\n", $test_db->connect_error);
            exit();
        }
        else
        {
            connect();
        }
    }
    
    public function connect()
    {
        $conn = mysqli_connect($host, $username, $password);

        mysqli_select_db($conn, $databaseName);
    }
    
    public function login($email, $password)
    {
        
    }
}
?>