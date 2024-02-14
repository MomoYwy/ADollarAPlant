<?php
$host = 'localhost';
$db   = 'wdtassignment';
$user = 'root';
$pass = '';

$connection = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$eventName = $_POST['EventName'];
$organizer = $_POST['Organizer'];
$eventDate = $_POST['Date'];
$eventTime = $_POST['Time'];
$NumberofVolunteer = $_POST['NumberofVolunteer'];
$venue = $_POST['Venue'];
$organizerID = $_POST['organizerID'];

$sql = "INSERT INTO `event` (`EventName`, `organizer`, `Date`, `Time`, `NumberofVolunteer`, `Venue`, `organizerID`) VALUES ('$eventName', '$organizer', '$eventDate', '$eventTime', '$NumberofVolunteer', '$venue', '$organizerID')";

if ($conn->query($sql) === TRUE) {
    echo "Event saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>