<?php
class ConnectDB{
	private $server   = 'localhost';
	private $username = 'root';
	private $password = '';
	private $database = '18php02_mvc_oop';
	function __construct(){
		$this->connectDB();
	}
	function connectDB(){
		$conn = new mysqli($this->server, $this->username, $this->password, $this->database);
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		mysqli_set_charset($conn,'utf-8');
		return $conn;
	}
}
?>