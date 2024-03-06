<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nexustech";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>