<?php
class DatabaseService
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $databaseName = "bap";
    private $conn;
    
    public function DatabaseService()
    {
        //	Connection
        //$this->test_db = new mysqli();
        //$this->test_db->connect($this->host, $this->username, $this->password);
        $this->conn = mysql_connect($this->host, $this->username, $this->password);
        mysql_select_db("bap");

        //	Check Connection
        if (! $this->conn)
        {
            printf("Connect failed: %s\n", $this->test_db->connect_error);
            exit();
        }
        else
        {
            //$test_db->connect();
            printf("Connection success");
        }
    }
    
    public function login($email, $password)
    {
        
    }
    
    public function performQuery($sentQuery)
    {
        //formulate/setup
        $query = $sentQuery;
        //perform
        $result = mysql_query($query);
        // Check result
        // This shows the actual query sent to MySQL, and the error. Useful for debugging.
        if (!$result) 
        {
            $message  = 'Invalid query: ' . mysql_error() . "\n";
            $message .= 'Whole query: ' . $query;
            die($message);
        }
        return $result;
    }
    
    //call after done with sql data
    public function freeResource($result)
    {
        //free results
        mysql_free_result($result);
    }
}
?>