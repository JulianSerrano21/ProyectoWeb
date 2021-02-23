<?php
$servername = "localhost";
$username = "root";
$password = "";
$dBname = 'chocolate';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dBname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>