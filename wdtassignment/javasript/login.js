function redirectToMain() {
    window.location.href = '/ADollarAPlant/wdtassignment/php/mainpage.php';
}

function validateLogin() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    sessionStorage.setItem('previousPage', window.location.href);

    if (username.trim() === "") {
        alert("Please enter a username.");
        return false; 
    }

    if (password.trim() === "") {
        alert("Please enter a password.");
        return false;
    }

    return true;
}

window.addEventListener('load', function() {
    if (isUserLoggedIn()) {
        document.body.classList.add('logged-in');
        document.getElementById('loginButton').style.display = 'none';
        document.getElementById('profileButton').style.display = 'block';
    }
});

function onLoginSuccess() {
    var previousPage = sessionStorage.getItem('previousPage');
    if (previousPage) {
        window.location.href = previousPage;
    } else {
        window.location.href = '/ADollarAPlant/wdtassignment/php/mainpage.php';
    }
}

function checkPasswordMatch() {
    console.log("Function called");
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("Confirmpassword").value;
    console.log("Password:", password);
    console.log("Confirm Password:", confirmPassword);

    var matchSpan = document.getElementById("passwordMatch");

    if (confirmPassword.length === 0) {
        matchSpan.innerHTML = "";
    } else if (password === confirmPassword) {
        matchSpan.innerHTML = "Passwords match!";
        matchSpan.style.color = "green";
    } else {
        matchSpan.innerHTML = "Passwords do not match.";
        matchSpan.style.color = "red";
    }
}

function validateForm() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("Confirmpassword").value;

    if (password !== confirmPassword) {
        alert("Passwords do not match. Please check and try again.");
        return false; 
    }

    return true;
}