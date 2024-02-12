<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/eventorganizer.css">
    <title>Create Event</title>
</head>
<body>
    <div class="event-form-container">
        <h2>Create an Event</h2>
        <form id="event-form">
            <label for="eventName">Event Name:</label>
            <input type="text" id="eventName" name="eventName" required>

            <label for="organizer">Organizer:</label>
            <input type="text" id="organizer" name="organizer" required>

            <label for="eventDate">Date:</label>
            <input type="date" id="eventDate" name="eventDate" required>

            <label for="eventTime">Time:</label>
            <input type="time" id="eventTime" name="eventTime" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>

            <button type="button" onclick="submitEvent()">Submit Event</button>
        </form>
    </div>

    <script src="../javasript/eventorganizer.js"></script>

    <script src="scripts.js"></script>
</body>
</html>

<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$eventName = $_POST['eventName'];
$organizer = $_POST['organizer'];
$eventDate = $_POST['eventDate'];
$eventTime = $_POST['eventTime'];
$description = $_POST['description'];

$sql = "INSERT INTO events (name, organizer, date, time, description) VALUES ('$eventName', '$organizer', '$eventDate', '$eventTime', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "Event saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>