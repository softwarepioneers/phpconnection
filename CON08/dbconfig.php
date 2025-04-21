

<?php
// Object-Oriented Connection NOT BROKEN
// Database credentials
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'ibrahim';

$conn = new mysqli($host, $user, $password, $database);

if (mysqli_connect_error())  {
    die("Database connection failed: " . mysqli_connect_error());
}




  /* 
  Note on the object-oriented example above:

$connect_error was broken until PHP 5.2.9 and 5.3.0. 
If you need to ensure compatibility with PHP versions prior to 5.2.9 and 5.3.0, use the following code instead:
  // Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
  }
   */
?>