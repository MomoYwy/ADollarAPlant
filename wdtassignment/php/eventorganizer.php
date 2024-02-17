<?php
session_start();

if (isset($_SESSION["MemberID"])) {
    $memberID = $_SESSION["MemberID"];

    $host = 'localhost';
    $db   = 'wdtassignment';
    $user = 'root';
    $pass = '';

    $connection = new mysqli($host, $user, $pass, $db);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $organizerCheckQuery = "SELECT * FROM organizer WHERE MemberID = $memberID";
    $result = $connection->query($organizerCheckQuery);

    if ($result->num_rows == 0) {
        $memberInfoQuery = "SELECT `Name`, `Email`, `PhoneNumber` FROM `member` WHERE `MemberID` = $memberID";
        $memberInfoResult = $connection->query($memberInfoQuery);

        if ($memberInfoResult->num_rows > 0) {
            $row = $memberInfoResult->fetch_assoc();
            $name = $row["Name"];
            $email = $row["Email"];
            $phoneNumber = $row["PhoneNumber"];

            $insertOrganizerQuery = "INSERT INTO organizer (Name, Email, PhoneNumber, MemberID) 
                                        VALUES ('$name', '$email', '$phoneNumber', $memberID)";
            $connection->query($insertOrganizerQuery);
        }
    }

    // Now, retrieve the OrganizerID for the current member
    $organizerIDQuery = "SELECT OrganizerID FROM organizer WHERE MemberID = $memberID";
    $organizerIDResult = $connection->query($organizerIDQuery);

    if ($organizerIDResult->num_rows > 0) {
        $row = $organizerIDResult->fetch_assoc();
        $organizerID = $row["OrganizerID"];

        $eventName = $_POST['EventName'];
        $eventDate = $_POST['Date'];
        $eventTime = $_POST['Time'];
        $NumberofVolunteer = $_POST['NumberofVolunteer'];
        $venue = $_POST['Venue'];


        // Insert the event details into the event table
        $insertEventQuery = "INSERT INTO `event` (`EventName`, `Date`, `Time`, `NumberofVolunteer`, `Venue`, `OrganizerID`) 
                                VALUES ('$eventName', '$date', '$time', $numberofVolunteer, '$venue', $organizerID)";
        
        if ($connection->query($insertEventQuery) === TRUE) {
            echo "Event created successfully";
        } else {
            echo "Error creating event: " . $connection->error;
        }
    }

    $connection->close();
} else {
    echo "Member not logged in";
}
?>