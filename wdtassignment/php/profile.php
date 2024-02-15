<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/root.css">
    <title>Document</title>
</head>


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