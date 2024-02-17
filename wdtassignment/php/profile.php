<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ADollarAPlant/wdtassignment/css/profile.css">
    <link rel="stylesheet" href="../css/root.css">
    <title>Document</title>
</head>


<body>
    <h1>Profile</h1>
    <?php
    session_start();

    // Check if the user is logged in
    if (!isset($_SESSION["user_data"])) {
        header("Location: login.html");
        exit();
    }

// Retrieve user data from the session
    $user = $_SESSION["user_data"];
    ?>
    <div class="container">
    <a href="/ADollarAPlant/wdtassignment/php/editprofile.php">Back</a>
        <div class="profile">
            <img src="" alt="ProfileImage">
            <p>Username: <?php echo $user["Username"]; ?></p>
        </div>
        <div class="ProfileDetails">
            <p>Member ID: <?php echo "MB" . str_pad($user["MemberID"], 3, "0", STR_PAD_LEFT); ?></p>
            <p>Name: <?php echo $user["Name"]; ?></p>
            <p>Age: <?php echo $user["Age"]; ?></p>
            <p>Email: <?php echo $user["Email"]; ?></p>
            <p>Gender: <?php echo $user["Gender"]; ?></p>
            <p>Phone Number: <?php echo $user["PhoneNumber"]; ?></p>
            <p>IC/Passport: <?php echo $user["ICorPassport"]; ?></p>
            <p>Password: <?php echo $user["Password"]; ?></p>
        </div>
            <a href="/ADollarAPlant/wdtassignment/php/editprofile.php">Edit</a></br>
            <a href="/ADollarAPlant/wdtassignment/php/logout.php">Logout</a>
    </div>
</body>
</html>