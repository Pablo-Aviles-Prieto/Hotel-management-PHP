<?php
include "utils/blade_connection.php";
include "utils/throw_alert.php";
include "db/connection.php";

$get_all_rooms = "SELECT * FROM rooms";
$result_all_rooms = $conn->query($get_all_rooms)->fetch_all(MYSQLI_ASSOC);

if (isset($_GET['id'])) {
  $get_single_room = "SELECT * FROM rooms WHERE id = '" . $_GET['id'] . "';";
  $result_selected_room = $conn->query($get_single_room)->fetch_assoc();

  if (isset($_GET['checkin']) && isset($_GET['checkout'])) {
    $get_room_bookings = "SELECT rooms.id FROM rooms INNER JOIN bookings ON rooms.id = bookings.roomId WHERE rooms.id = '" . $_GET['id'] . "' AND (bookings.checkIn BETWEEN '" . $_GET['checkin'] . "' AND '" . $_GET['checkout'] . "' OR bookings.checkOut BETWEEN '" . $_GET['checkin'] . "' AND '" . $_GET['checkout'] . "');";
    $result_room_bookings = $conn->query($get_room_bookings);

    echo $result_room_bookings->num_rows > 0
      ? throw_alert('Sorry, the room is not available for the selected dates')
      : throw_alert('The room is available. Book it now!');
  }
  echo $blade->run("rooms-details", array("room" => $result_selected_room));
} else {
  echo $blade->run("rooms-details", array("room" => $result_all_rooms[0]));
}

?>