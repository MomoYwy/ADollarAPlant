document.addEventListener('DOMContentLoaded', function () {
    const loginBtn = document.getElementById('loginBtn');

    // Check if the user is logged in (you need to implement this logic)
    const isUserLoggedIn = false; // Replace with your actual logic

    if (isUserLoggedIn) {
        loginBtn.innerHTML = 'Profile';
        loginBtn.addEventListener('click', function () {
            // Redirect to the profile page
            window.location.href = '/ADollarAPlant/wdtasignment/php/profile.php';
        });
    } else {
        loginBtn.innerHTML = 'Login';
        loginBtn.addEventListener('click', function () {
            // Redirect to the login page
            window.location.href = '/ADollarAPlant/wdtasignment/php/login.php';
        });
    }
});