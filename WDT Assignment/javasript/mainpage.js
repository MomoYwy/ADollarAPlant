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

const body = document.body;
const initialColor = getComputedStyle(body).backgroundColor;

window.addEventListener('scroll', () => {
    if (window.scrollY > 0) {
        body.style.backgroundColor = '#f0f0f0';
    } else {
        body.style.backgroundColor = initialColor;
    }
});