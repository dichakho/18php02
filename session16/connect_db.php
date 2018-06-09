<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "18php02";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    //var_dump();
    //exit;
} 
echo "Connected successfully";

//INSERT INTO users (name, email, phone)
// VALUES ('Khoi', 'dichakho@gmail.com', '0981234899')
?>