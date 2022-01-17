<?php
class DBController{
protected $hostName = "localhost";
protected $DB_Name = "ordering_system";
protected $username = "root";
protected $password = "Jordanlee_11";
    
public $con = null;
    
public function __construct(){
    $this->con = new mysqli($this->hostName,
    $this->username, $this->password, $this->DB_Name);

    if ($this->con->connect_error){
        echo "Fail " . $this->con->connect_error;
    }    
    }
    
function __destruct(){
            $this->closeConnection();
        }
    
function closeConnection(){
        if ($this->con != null ){
            $this->con->close();
            $this->con = null;
            }
        }
}