<?php
$servername = "localhost:3306";
$username = "root";
$password = "abc123.";
$db_name = "hotel_miranda";

$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>