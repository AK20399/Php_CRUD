<?php 
$servername = "localhost";
$username = "aakash";
$password = "ak1234";
$database = 'mydb';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>