<?php
header("refresh:0");
// PDO (PHP Data Objects)
// Database credentials
$host = "localhost"; // Hostname
$username = "root"; // MySQL username
$password = ""; // MySQL password
$database = "IBRAHIM"; // Database name

try {
    // Create a PDO instance
    $conn = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";
} catch (PDOException $e) {
    die("No Connection");
}
?>