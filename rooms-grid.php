<?php
include "utils/blade_connection.php";
include "db/connection.php";

$sql = "SELECT * FROM rooms";
$result = $conn->query($sql);

echo $blade->run("rooms-grid", array("rooms" => $result->fetch_all(MYSQLI_ASSOC), "rooms_length" => $result->num_rows));
