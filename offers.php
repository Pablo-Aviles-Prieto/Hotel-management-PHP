<?php
include "utils/blade_connection.php";
include "db/connection.php";

$sql = "SELECT * FROM rooms WHERE offerPrice IS NOT NULL";
$result = $conn->query($sql);
$sql_all_rooms = "SELECT * FROM rooms";
$result_all_rooms = $conn->query($sql_all_rooms);

echo $blade->run("offers", array("offer_rooms" => $result->fetch_all(MYSQLI_ASSOC), "rooms" => $result_all_rooms->fetch_all(MYSQLI_ASSOC)));

?>