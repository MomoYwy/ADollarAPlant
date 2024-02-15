<?php
$host = 'localhost';
$db   = 'wdtassignment';
$user = 'root';
$pass = '';

$connection = new mysqli($host, $user, $pass, $db);

if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$eventName = $_POST['EventName'];
$organizer = $_POST['Organizer'];
$eventDate = $_POST['Date'];
$eventTime = $_POST['Time'];
$NumberofVolunteer = $_POST['NumberofVolunteer'];
$venue = $_POST['Venue'];

$sql = "INSERT INTO `event` (`EventName`, `organizer`, `Date`, `Time`, `NumberofVolunteer`, `Venue`) VALUES ('$eventName', '$organizer', '$eventDate', '$eventTime', '$NumberofVolunteer', '$venue')";

if ($connection->query($sql) === TRUE) {
    echo "Event saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>