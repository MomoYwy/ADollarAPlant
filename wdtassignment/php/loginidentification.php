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

// Get user input from the form
$username = $_POST["username"];
$password = $_POST["password"];

// SQL query to check if the username and password match
$sql = "SELECT * FROM `member` WHERE `username` = '$username' AND `password` = '$password'";
$result = $connection->query($sql);

//fetch and store user data
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $_SESSION["user_data"] = $user;
    $_SESSION["login_success"] = true;
    header("Location: /ADollarAPlant/wdtassignment/php/mainpage.php");
    exit();
} else {
    echo "<script>";
    echo "alert('Login unsuccessful. Please check your credentials.');";
    echo "window.location.href='/ADollarAPlant/wdtassignment/html/loginUnsuccessful.html';";
    echo "</script>";
    exit();
}

$connection->close();

header("Content-Type: application/json");
echo json_encode($response);
?>