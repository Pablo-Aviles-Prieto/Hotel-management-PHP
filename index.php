<?php
include "utils/blade_connection.php";
include "db/connection.php";
// echo $blade->run("landpage",array("variable1"=>"Testing value"));

$sql = "SELECT * FROM rooms";
$result = $conn->query($sql);

echo $blade->run("landpage", array("rooms" => $result->fetch_all(MYSQLI_ASSOC)));

?>