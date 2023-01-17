<?php
// require_once 'libs/dotenv/Repository/Adapter/WriterInterface.php';
// require_once 'libs/dotenv/Repository/Adapter/ReaderInterface.php';
// require_once 'libs/dotenv/Repository/Adapter/AdapterInterface.php';
// require_once 'libs/dotenv/Repository/RepositoryBuilder.php';
// require_once 'libs/dotenv/Repository/Adapter/ServerConstAdapter.php';
require_once 'libs/dotenv/Dotenv.php';

// $repository = Dotenv\Repository\RepositoryBuilder::createWithDefaultAdapters()->immutable()->make();
// $dotenv = Dotenv\Dotenv::create($repository, '../');
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();

// $hostname= $_ENV['DB_HOSTNAME'];
$servername = "localhost:3306";
$username = "root";
$password = "abc123.";
$db_name = "hotel_miranda";

$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
