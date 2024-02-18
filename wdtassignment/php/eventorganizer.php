<?php
session_start();

$host = 'localhost';
$db   = 'wdtassignment';
$user = 'root';
$pass = '';

$connection = new mysqli($host, $user, $pass, $db);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $eventName = $_POST['EventName'];
    $date = $_POST['Date'];
    $time = $_POST['Time'];
    $numVolunteers = $_POST['NumberofVolunteer'];
    $venue = $_POST['Venue'];

    $sqlOrganizer = "INSERT INTO `organizer` (`OrganizerID`) VALUES (NULL)";
    if ($connection->query($sqlOrganizer) === TRUE) {
        $organizerID = $connection->insert_id;

        $sqlEvent = "INSERT INTO `event` (`EventName`, `Date`, `Time`, `NumberofVolunteer`, `Venue`, `OrganizerID`) VALUES ('$eventName', '$date', '$time', '$numVolunteers', '$venue', '$organizerID')";

        if ($connection->query($sqlEvent) === TRUE) {
            header("Location: /ADollarAPlant/wdtassignment/php/eventpage.php");
            exit();
        } else {
            echo "Error: " . $sqlEvent . "<br>" . $connection->error;
        }
    } else {
        echo "Error: " . $sqlOrganizer . "<br>" . $connection->error;
    }
}

$connection->close();
?>