<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profile.css">
    <title>Document</title>
</head>

<style>
    body {
        background: rgb(99, 39, 120)
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #BA68C8
    }

    .profile-button {
        background: rgb(99, 39, 120);
        box-shadow: none;
        border: none
    }

    .profile-button:hover {
        background: #682773
    }

    .profile-button:focus {
        background: #682773;
        box-shadow: none
    }

    .profile-button:active {
        background: #682773;
        box-shadow: none
    }

    .back:hover {
        color: #682773;
        cursor: pointer
    }

    .labels {
        font-size: 11px
    }

    .add-experience:hover {
        background: #BA68C8;
        color: #fff;
        cursor: pointer;
        border: solid 1px #BA68C8
    }
</style>

<body>
    <h1>Profile</h1>
    <?php
$host = 'localhost';
$db   = 'wdtassignment';
$user = 'root';
$pass = '';

$connection = new mysqli($host, $user, $pass, $db);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


$sql = 'SELECT * FROM `member`';
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
        echo '<form action="join_event.php" method="post">';
        echo '<input type="hidden" name="event_id" value="' . $row['EventID'] . '">';
        echo '<button type="submit" name="join_button">Join</button>';
        echo '</form>';
        echo '</div>';
    }
} else {
    echo 'No events found.';
}

$connection->close();
?>
</div>
</body>
</html>