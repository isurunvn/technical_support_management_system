<?php
$db_host = 'localhost'; 
$db_name = 'nexustech'; 
$db_user = 'root'; 
$db_pass = ''; 

// Attempt to connect to the database
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>