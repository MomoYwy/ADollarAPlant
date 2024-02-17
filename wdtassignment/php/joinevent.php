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

if (isset($_POST['join_button'])) {
    $event_id = $_POST['event_id'];

    $update_sql = "UPDATE `event` SET `NumberofVolunteer` = `NumberofVolunteer` + 1 WHERE `EventID` = $event_id";
    $connection->query($update_sql);

    header("Location: eventpage.php");
    exit();
}

$connection->close();
?>