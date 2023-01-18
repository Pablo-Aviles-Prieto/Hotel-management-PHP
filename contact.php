<?php
include "utils/blade_connection.php";
include "utils/throw_alert.php";
// include "utils/get_dotenv.php";
include "db/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$contact = array(
		"date" => date("Y-m-d"),
		"user_name" => $_POST["name"],
		"user_email" => $_POST["email"],
		"user_phone" => $_POST["phone"],
		"message_subject" => $_POST["subject"],
		"message_body" => $_POST["message"]
	);

	$sql = "INSERT INTO contacts(date, userName, userEmail, userPhone, messageSubject, messageBody, archived) VALUES ('" . $contact["date"] . "', '" . $contact["user_name"] . "', '" . $contact["user_email"] . "', '" . $contact["user_phone"] . "', '" . $contact["message_subject"] . "', '" . $contact["message_body"] . "', '0');";
	
	$conn->query($sql);
	throw_alert("Contact saved on DB");
}

$maps_api = $_ENV['MAPS_API'];

echo $blade->run("contact", array("maps_api" => $maps_api));

?>
