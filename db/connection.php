<?php
include "utils/get_dotenv.php";

$dotenv = Dotenv\Dotenv::createImmutable('./');
$dotenv->load();

$db_hostname = $_ENV['DB_HOSTNAME'];
$db_username = $_ENV['DB_USERNAME'];
$db_password = $_ENV['DB_PASSWORD'];
$db_name = $_ENV['DB_NAME'];

$conn = new mysqli($db_hostname, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
