<?php

// Database configuration
$dbHost = 'localhost'; // Change this to your MySQL hostname
$dbUsername = 'root'; // Change this to your MySQL username
$dbPassword = ''; // Change this to your MySQL password
$dbName = 'park'; // Change this to your MySQL database name

// Create a connection to the database
$connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

?>
