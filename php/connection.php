<?php
$server="localhost";
$username="root";
$password="";
$dbase="red_cheese_pizza";

// Create connection
$conn = new mysqli($server, $username, $password, $dbase);
// Check connection
if ($conn->connect_error) {
die("Failed to Connect to MySql: " . $conn->connect_error);

}
$conn->set_charset("utf8");
?>

