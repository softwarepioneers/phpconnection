<?php
header("refresh:0");
// Object-Oriented Connection
// Database credentials
$host = "localhost"; // Hostname
$username = "root"; // MySQL username
$password = ""; // MySQL password
$database = "IBRAHIM"; // Database name
try {
    // Create connection
   $conn = new mysqli($host, $username, $password, $database);
   // Check connection
if ($conn) {
    echo "Connected successfully";
}

} catch (mysqli_sql_exception) {
    echo "No Connection";
}
?>