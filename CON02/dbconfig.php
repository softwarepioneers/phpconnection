<?php
// PDO (PHP Data Objects)
// Database credentials
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','ibrahim');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS);
echo "Connected successfully";
}
catch (PDOException $e)
{
die();
}
?>