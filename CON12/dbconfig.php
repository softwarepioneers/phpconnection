
<?php

/*
// PDO 
$pdo = new PDO("mysql:host=localhost;dbname=database", 'username', 'password');
// mysqli, procedural way 
$mysqli = mysqli_connect('localhost','username','password','database');
// mysqli, object oriented way 
$mysqli = new mysqli('localhost','username','password','database');
 */



 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "ibrahim";
 
 try {
 
     $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // set the PDO error mode to exception
     echo "Connected Successfully";
     
 } catch(PDOException $e) {
 
     echo "No Connection";
 }
 


 
 
?>
