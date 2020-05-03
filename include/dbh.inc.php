<?php

$servername = "localhost";
$username = "id13504856_admin";
$password = "JX^5iRJ*l#ALa/}Q";
$database = "id13504856_cgpaa";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>
