<?php
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdImpecx";
*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bdmacarrao";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>