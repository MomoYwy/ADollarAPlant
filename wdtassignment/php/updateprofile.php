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

if (!isset($_SESSION["user_data"])) {
    header("Location: login.html");
    exit();
}

$user = $_SESSION["user_data"];

$name = $_POST["Name"];
$age = $_POST["Age"];
$email = $_POST["Email"];
$gender = $_POST["Gender"];
$phoneNumber = $_POST["PhoneNumber"];
$icOrPassport = $_POST["ICorPassport"];
$password = $_POST["Password"];

$user["Name"] = $name;
$user["Age"] = $age;
$user["Email"] = $email;
$user["Gender"] = $gender;
$user["PhoneNumber"] = $phoneNumber;
$user["ICorPassport"] = $icOrPassport;
$user["Password"] = $password;

$name = $connection->real_escape_string($name);
$age = $connection->real_escape_string($age);
$email = $connection->real_escape_string($email);
$gender = $connection->real_escape_string($gender);
$phoneNumber = $connection->real_escape_string($phoneNumber);
$icOrPassport = $connection->real_escape_string($icOrPassport);
$password = $connection->real_escape_string($password);


$sqlMember = "UPDATE `member` SET `Name`='$name', `Age`='$age', `Email`='$email', `Gender`='$gender', `PhoneNumber`='$phoneNumber', `ICorPassport`='$icOrPassport', `Password`='$password' WHERE `MemberID`='$user[MemberID]'";
$connection->query($sqlMember);

$sqlOrganizer = "UPDATE `organizer` SET `Name`='$name', `Email`='$email', `PhoneNumber`='$phoneNumber' WHERE `MemberID`='$user[MemberID]'";
$connection->query($sqlOrganizer);

$sqlDoner = "UPDATE `doner` SET `Name`='$name', `Email`='$email' WHERE `MemberID`='$user[MemberID]'";
$connection->query($sqlDoner);


$connection->close();

header("Location: /ADollarAPlant/wdtassignment/php/profile.php");
exit();
?>