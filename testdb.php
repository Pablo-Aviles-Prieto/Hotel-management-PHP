<?php
include "db/connection.php";

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  // while ($row = $result->fetch_assoc()) {
  // echo "id: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
  // }

  $row = $result->fetch_all(MYSQLI_ASSOC);
  echo json_encode($row) . "</br>";
} else {
  echo "0 results";
}
