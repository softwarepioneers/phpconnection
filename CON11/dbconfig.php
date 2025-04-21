
<?php
//MySQLi Procedural

$localhost="localhost";
$username="root";
$password="";
$dbname="IBRAHIM";


@$conn=mysqli_connect($localhost,$username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>






