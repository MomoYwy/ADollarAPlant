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
        <div class="profile">
            <img src="" alt="ProfileImage">
            <p>Member ID: <?php echo $user["member_id"]; ?></p>
        </div>
        <div class="ProfileDetails">
            <p>Member ID: <?php echo $user["member_id"]; ?></p>
            <p>Username: <?php echo $user["username"]; ?></p>
            <p>Name: <?php echo $user["name"]; ?></p>
            <p>Age: <?php echo $user["age"]; ?></p>
            <p>Email: <?php echo $user["email"]; ?></p>
            <p>Gender: <?php echo $user["gender"]; ?></p>
            <p>Phone Number: <?php echo $user["phone_number"]; ?></p>
            <p>IC: <?php echo $user["ic"]; ?></p>
        </div>
            <a href="logout.php">Logout</a>
    </div>
</body>
</html>