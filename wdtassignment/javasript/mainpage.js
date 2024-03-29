/*document.getElementById('donationForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const contact = document.getElementById('contact').value;
    const donate = document.getElementById('donate').value;

console*/

        let images = document.querySelectorAll('.swiper img');
        let currentIndex = 0;

        function showImage() {
            images[currentIndex].classList.add('active');
        }

        function hideImage() {
            images[currentIndex].classList.remove('active');
        }

        function nextImage() {
            hideImage();
            currentIndex = (currentIndex + 1) % images.length;
            showImage();
        }

        function startSwiper() {
            showImage();
            setInterval(nextImage, 3000);
        }

        startSwiper();

const body = document.body;
const initialColor = getComputedStyle(body).backgroundColor;

window.addEventListener('scroll', () => {
    if (window.scrollY > 0) {
        body.style.backgroundColor = '#f0f0f0';
    } else {
        body.style.backgroundColor = initialColor;
    }
});

function redirectToLogin() {
    window.location.href = '/ADollarAPlant/wdtassignment/php/login.php';
}

function redirectToProfile() {
    window.location.href = '/ADollarAPlant/wdtassignment/php/profile.php';
}

function toDonate() {
    // Redirect to the donation page
    window.location.href = '/ADollarAPlant/wdtassignment/html/donation.html';
}

window.addEventListener('load', function() {
    if (isUserLoggedIn()) {
        document.body.classList.add('logged-in');
        document.getElementById('loginButton').style.display = 'none';
        document.getElementById('profileButton').style.display = 'block';
    }
    });

startSwiper()

function goDonate() {
    window.location.href = '#donation';
}
