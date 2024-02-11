<?php
$host = 'localhost';
$db   = '';
$user = '';
$pass = '';

// Create a new connection to the MySQL database
$connection = new mysqli($host, $user, $pass, $db);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Retrieve the events from the database
$sql = 'SELECT * FROM events';
$result = $connection->query($sql);

// Display the events in boxes
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="event-box">';
        echo '<h2>' . $row['name'] . '</h2>';
        echo '<p>Organizer: ' . $row['organizer'] . '</p>';
        echo '<p>Time: ' . $row['time'] . '</p>';
        echo '<p>Date: ' . $row['date'] . '</p>';
        echo '<p>Description: ' . $row['description'] . '</p>';
        echo '</div>';
    }
} else {
    echo 'No events found.';
}

// Close the connection
$connection->close();
?>