<?php
class ConnectDB
{
    public $conn;
    
    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        $this->conn = new mysqli('localhost', 'root', '', '18php02_mvc_oop_full');
        mysqli_set_charset($this->conn,"utf8");
        
        return $this->conn;
    }
}
