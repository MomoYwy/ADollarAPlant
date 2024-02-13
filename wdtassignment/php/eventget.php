<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
	<link rel="stylesheet" type="text/css" href="../css/eventpage.css">
</head>
<body>
	<h1>Upcoming Events</h1>
	<div class="event-box-container">
		<?php
        $host = 'localhost';
        $db   = '';
        $user = '';
        $pass = '';

        $connection = new mysqli($host, $user, $pass, $db);

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        $sql = 'SELECT * FROM events';
        $result = $connection->query($sql);

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

        $connection->close();
        ?>
	</div>
	<script src="scripts.js"></script>
</body>
</html>