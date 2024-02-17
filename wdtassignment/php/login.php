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

            <button id="loginButton" type="submit" onclick="validateLogin()">Login</button>
            
        </form>
    </div>

    <div class="register-container">
    <form id="registerForm" action="/ADollarAPlant/wdtassignment/php/register.php" method="POST">
        <h2>Register</h2>

        <label for="email">Email</label>
        <input type="email" id="email" name="Email" placeholder="example@example.com" required>

        <label for="name">Name</label>
        <input type="text" id="name" name="Name" placeholder="John Doe" required>

        <label for="username">Username</label>
        <input type="text" id="username" name="Username" placeholder="john_doe123" required>

        <label for="age">Age</label>
        <input type="number" id="age" name="Age" placeholder="25" required>

        <label for="gender">Gender</label>
        <label for="male">Male</label>
        <input type="radio" id="male" name="Gender" value="Male" required>
        <label for="female">Female</label>
        <input type="radio" id="female" name="Gender" value="Female" required>

        <label for="phone">Phone No.</label>
        <input type="tel" id="phone" name="PhoneNumber" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>

        <label for="Confirmpassword">Confirm Password</label>
        <input type="password" id="Confirmpassword" name="Confirmpassword" placeholder="Confirm your password" oninput="checkPasswordMatch()" required>
        <span id="passwordMatch"></span>

        <label for="ICorPassport">IC/Passport</label>
        <input type="text" id="ICorPassport" name="ICorPassport" placeholder="012345-67-8901" required>

        <button type="submit" onclick="validateLogin()">Register</button>
    </form>
</div>


</body>

<script src="/ADollarAPlant/wdtassignment/javasript/login.js"></script>

</html>