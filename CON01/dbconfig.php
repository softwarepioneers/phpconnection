<?php
// Procedural Connection
// Database credentials
$Server['host']='localhost';
$UserName['UserName']='root';
$UserPassword['UserPassword']='';
$Database['Database']='ibrahim';
// Establish database connection  . mysqli_connect_error()or die(mysqli_connect_error());.
try
{
$Con=mysqli_connect(
$Server['host'],
$UserName['UserName'],
$UserPassword['UserPassword'],
$Database['Database']); 
echo "Connected successfully";
}
catch (PDOException $e)
{
die();
}
?>