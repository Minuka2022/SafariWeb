<?php

// Database configuration
$dbHost = 'localhost'; // Change this to your MySQL hostname
$dbUsername = 'safa_root'; // Change this to your MySQL username
$dbPassword = 'y7@Ewx8LnFs%wHl2'; // Change this to your MySQL password
$dbName = 'park'; // Change this to your MySQL database name

// Create a connection to the database
$connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

?>
