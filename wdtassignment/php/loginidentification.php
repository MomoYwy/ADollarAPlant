<?php
$host = 'localhost';
$db   = 'wdtassignment';
$user = 'root';
$pass = '';

$connection = new mysqli($host, $user, $pass, $db);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Get user input from the form
$username = $_POST["username"];
$password = $_POST["password"];

// SQL query to check if the username and password match
$sql = "SELECT * FROM `member` WHERE `username` = '$username' AND `password` = '$password'";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    $response = array("success" => true, "username" => $username);
} else {
    $response = array("success" => false, "message" => "Incorrect username or password");
}

$connection->close();


header("Content-Type: application/json");
echo json_encode($response);
?>