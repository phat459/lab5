<?php
$servername = "localhost";
$username = "phat";
$password = "cick55ka";
$db = "phat";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>