
<?php
//MySQLi Object-Oriented

$localhost="localhost";
$username="root";
$password="";
$dbname="IBRAHIM";

//pdo
//mysqli
$conn = new mysqli($localhost,$username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>



