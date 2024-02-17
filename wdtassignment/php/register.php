<?php
$host = 'localhost';
$db   = 'wdtassignment';
$user = 'root';
$pass = '';

$connection = new mysqli($host, $user, $pass, $db);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['Username'];
    $name = $_POST['Name'];
    $age = $_POST['Age'];
    $email = $_POST['Email'];
    $gender = $_POST['Gender'];
    $phoneNumber = $_POST['PhoneNumber'];
    $icOrPassport = $_POST['ICorPassport'];
    $password = $_POST['Password'];

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // SQL query to insert data into the 'member' table
    $sql = "INSERT INTO `member` (`Username`, `Name`, `Age`, `Email`, `Gender`, `PhoneNumber`, `ICorPassport`, `Password`) 
            VALUES ('$username', '$name', '$age', '$email', '$gender', '$phoneNumber', '$icOrPassport', '$hashedPassword')";

    // Execute the SQL query
    if ($connection->query($sql) === TRUE) {
        header("Location: /ADollarAPlant/wdtassignment/php/login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $connnection->error;
    }
}

$connection->close();
?>
