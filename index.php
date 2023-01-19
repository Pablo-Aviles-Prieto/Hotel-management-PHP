<?php
include "utils/blade_connection.php";
include "db/connection.php";

$sql = "SELECT * FROM rooms";
$result = $conn->query($sql);

echo $blade->run("landpage", array("rooms" => $result->fetch_all(MYSQLI_ASSOC)));

?>