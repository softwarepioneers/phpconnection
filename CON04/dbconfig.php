<?php
header("refresh:0");
// Procedural Connection
// Database credentials
$host = "localhost"; // Hostname
$username = "root"; // MySQL username
$password = ""; // MySQL password
$database = "IBRAHIM"; // Database name
$conn="";
try {
    // Create connection
    $conn = mysqli_connect($host, $username, $password, $database);

} catch (mysqli_sql_exception) {
    echo "No Connection";
}

// Check connection
if ($conn) {
    echo "Connected successfully";
}



?>