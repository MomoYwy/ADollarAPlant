function redirectToMain() {
    window.location.href = '/ADollarAPlant/wdtassignment/html/mainpage.html';
}

function validateLogin() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

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