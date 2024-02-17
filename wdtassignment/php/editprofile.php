<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ADollarAPlant/wdtassignment/css/editprofile.css">
    <link rel="stylesheet" href="../css/root.css">
    <title>Edit Profile</title>
</head>

<body>
    <h1>Edit Profile</h1>
    
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
        <form action="/ADollarAPlant/wdtassignment/php/updateprofile.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="Name" value="<?php echo $user["Name"]; ?>" required>

            <label for="age">Age:</label>
            <input type="text" id="age" name="Age" value="<?php echo $user["Age"]; ?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="Email" value="<?php echo $user["Email"]; ?>" required>

            <label for="gender">Gender:</label>
            <input type="text" id="gender" name="Gender" value="<?php echo $user["Gender"]; ?>" required>

            <label for="phone">Phone Number:</label>
            <input type="text" id="phone" name="PhoneNumber" value="<?php echo $user["PhoneNumber"]; ?>" required>

            <label for="ic">IC/Passport:</label>
            <input type="text" id="ic" name="ICorPassport" value="<?php echo $user["ICorPassport"]; ?>" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="Password" value="<?php echo $user["Password"]; ?>" required>

            <button type="submit">Update Profile</button>
        </form>

        <a href="/ADollarAPlant/wdtassignment/php/profile.php">Back to Profile</a>
    </div>
</body>
</html>