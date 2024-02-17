<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
	<link rel="stylesheet" type="text/css" href="/ADollarAPlant/wdtassignment/css/eventpage.css">
    <link rel="stylesheet" href="/ADollarAPlant/wdtassignment/css/root.css">
</head>
<body>
	<h1>Upcoming Events</h1>
    <a href="/ADollarAPlant/wdtassignment/php/mainpage.php">Back</a>
	<div class="event-box-container">
		<?php
session_start();

function isLoggedIn() {
    if (isset($_SESSION["user_data"])) {
        return true;
    } else {
        return false;
    }
}

$host = 'localhost';
$db   = 'wdtassignment';
$user = 'root';
$pass = '';

$connection = new mysqli($host, $user, $pass, $db);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = 'SELECT * FROM `event` inner join `organizer` on `event`.`organizerID` = `organizer`.`organizerID`';
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="event-box">';
        echo '<h2>' . $row['EventName'] . '</h2>';
        echo '<p>Organizer: ' . $row['Name'] . '</p>';
        echo '<p>Time: ' . $row['Time'] . '</p>';
        echo '<p>Date: ' . $row['Date'] . '</p>';
        echo '<p>Number of Volunteer: ' . $row['NumberofVolunteer'] . '</p>';
        echo '<p>Venue: ' .$row['Venue']. '</p>';
        echo '<form action="/ADollarAPlant/wdtassignment/php/joinevent.php" method="post">';
        echo '<input type="hidden" name="event_id" value="' . $row['EventID'] . '">';
        echo '<button id="loginButton" type="submit" name="join_button" onclick="redirectUser()">Join</button>';
        echo '</form>';
        echo '</div>';
    }
} else {
    echo 'No events found.';
}

$connection->close();
?>
    <button class="createEvent" onclick="handleEventButton()">Create Event</button>
	</div>
	<script>
        document.addEventListener('DOMContentLoaded', function () {
            const loginButton = document.getElementById('loginButton');
            const isLoggedIn = <?php echo isset($_SESSION["user_data"]) ? 'true' : 'false'; ?>;
            
            loginButton.addEventListener('click', function () {
                if (isLoggedIn) {
                    window.location.href = 'login.php';
                } else {
                    window.location.href = 'profile.php';
                }
            });
        });

        function redirectUser() {
            const isLoggedIn = <?php echo isset($_SESSION["user_data"]) ? 'true' : 'false'; ?>;
            
            if (!isLoggedIn) {
                window.location.href = '/ADollarAPlant/wdtassignment/php/login.php';
            }
        }

        function redirectToEventOrganizerForm() {
            window.location.href = '/ADollarAPlant/wdtassignment/php/eventorganizerform.php';
        }

        function handleEventButton() {
            redirectToEventOrganizerForm();
            redirectUser();
        }
    </script>
</body>
</html>