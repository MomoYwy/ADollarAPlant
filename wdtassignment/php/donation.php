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
    $Name = $_POST['Name'];
    $DonationAmount = $_POST['DonationAmount'];
    $DonationMethod = $_POST['DonationMethod'];
    $Email = $_POST['Email'];

    $sql1 = "SELECT * FROM `member` WHERE `Name` = '$Name'";
    $result = $connection->query($sql1);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $memberID = $row["MemberID"];
    } else {
        $memberID = null;
    }

    $donerInsertQuery = "INSERT INTO `doner` (`Name`, `Email`) VALUES ('$Name', '$Email')";
    $connection->query($donerInsertQuery);

    if ($connection->query($donerInsertQuery) === TRUE) {
        $donerID = $connection->insert_id;

        $donationInsertQuery = "INSERT INTO `donation` (`DonationAmount`, `DonationMethod`, `DonerID`) VALUES ('$DonationAmount', '$DonationMethod', '$donerID')";

        if ($connection->query($donationInsertQuery) === TRUE) {
            header("Location: /ADollarAPlant/wdtassignment/html/payment.html");
            exit();
        } else {
            echo "Error inserting into donation table: " . $connection->error;
        }
    } else {
        echo "Error inserting into doner table: " . $connection->error;
    }
}

$connection->close();
?>