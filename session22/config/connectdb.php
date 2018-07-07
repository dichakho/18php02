<?php
$servername = "localhost"; //$servername = "127.0.0.1";
$username = "root";
$password = ""; //$password = "";
$database = "18php02_shop";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
$conn->set_charset("utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 