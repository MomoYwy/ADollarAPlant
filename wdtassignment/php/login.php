<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/root.css">
    <title>Login/Register Page</title>

</head>
<body>
    <!--Login Button-->
    <header>
        <button class="back-button" onclick="redirectToMain()">Back</button>
    </header>
    <div class="login-container">
        <form id="loginForm" action="/ADollarAPlant/wdtassignment/php/loginidentification.php" method="POST">
            <h2>Login</h2>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" onclick="validateLogin()">Login</button>
        </form>
    </div>

    <div class="register-container">
        <form id="registerForm" action="/ADollarAPlant/wdtassignment/php/register.php" method="POST">
            <h2>Register</h2>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="age">Age</label>
            <input type="number" id="age" name="age" required>

            <label for="gender">Male</label>
            <input type="radio" id="gender" name="gender" value="Male" required>
            <label for="gender">Female</label>
            <input type="radio" id="gender" name="gender" value="Female" required>

            <label for="phone">Phone No.</label>
            <input type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="password">Confirm Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" onclick="validateLogin()">Register</button>
        </form>
    </div>

</body>

<script src="/ADollarAPlant/wdtassignment/javasript/login.js"></script>

</html>