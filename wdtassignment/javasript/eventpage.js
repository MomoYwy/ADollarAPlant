function redirectToEventorganizerform() {
    window.location.href = '/ADollarAPlant/wdtassignment/php/eventorganizerform.php';
}

document.addEventListener('DOMContentLoaded', function () {
    const loginButton = document.getElementById('loginButton');
    const isLoggedIn = false; 
    loginBtn.addEventListener('click', function () {
        if (isLoggedIn) {
            window.location.href = 'login.php';
        } else {
            window.location.href = 'profile.php'; 
        }
    });
});

function isLoggedIn() {
    if (isset($_SESSION["user_data"])) {
        return true;
    } else {
        return false;
    }
}

function redirectUser() {
    if (isLoggedIn()) {
        return true;
    } else {
        window.location.href = '/ADollarAPlant/wdtassignment/php/login.php';
    }
}

function handleEventButtonClick() {
    redirectToEventOrganizerForm();
    redirectUser();
}