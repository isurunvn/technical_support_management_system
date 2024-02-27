<?php
$db_host = 'localhost'; // or your database host
$db_name = 'nexustech'; // your database name
$db_user = 'root'; // your database username
$db_pass = ''; // your database password

// Attempt to connect to the database
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>