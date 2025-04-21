<?php

// Object-Oriented Connection
// Database credentials
$host = "localhost"; // Hostname
$username = "root"; // MySQL username
$password = ""; // MySQL password
$database = "IBRAHIM"; // Database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die();
}
echo "Connected successfully";
?>