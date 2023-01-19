<?php
include "utils/blade_connection.php";
include "db/connection.php";

$get_all_rooms = "SELECT * FROM rooms";
$result_all_rooms = $conn->query($get_all_rooms);

if (isset($_GET['checkin']) && isset($_GET['checkout'])) {
  $get_booked_rooms = "SELECT DISTINCT rooms.id FROM rooms INNER JOIN bookings ON rooms.id = bookings.roomId WHERE bookings.checkIn BETWEEN '" . $_GET['checkin'] . "' AND '" . $_GET['checkout'] . "' OR bookings.checkOut BETWEEN '" . $_GET['checkin'] . "' AND '" . $_GET['checkout'] . "';";
  $result = $conn->query($get_booked_rooms);

  $fetched_ids = array();
  while ($row = mysqli_fetch_assoc($result)) {
    $fetched_ids[] = $row['id'];
  }
  if (!empty($fetched_ids)) {
    $ids_string = implode(",", $fetched_ids);
    $get_available_rooms = "SELECT * FROM rooms WHERE id NOT IN (" . $ids_string . ")";
  } else {
    $get_available_rooms = "SELECT * FROM rooms";
  }

  $result_available_rooms = $conn->query($get_available_rooms);
  $available_rooms_rows = mysqli_num_rows($result_available_rooms);


  echo !empty($available_rooms_rows)
    ? $blade->run("rooms-list", array("rooms" => $result_available_rooms->fetch_all(MYSQLI_ASSOC), "rooms_length" => $result_available_rooms->num_rows))
    : $blade->run("rooms-list", array("rooms" => $result_all_rooms->fetch_all(MYSQLI_ASSOC), "rooms_length" => $result_all_rooms->num_rows));
} else {
  echo $blade->run("rooms-list", array("rooms" => $result_all_rooms->fetch_all(MYSQLI_ASSOC), "rooms_length" => $result_all_rooms->num_rows));
}
