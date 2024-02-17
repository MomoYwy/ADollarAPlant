<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Dollar A Plant</title>
    <link rel="stylesheet" href="../css/mainnav.css">
    <link rel="stylesheet" href="../css/root.css">

</head>
<body>
    <div id="wrapper">
        <div><a href=""><img id ="logo"src="../image/ADAPLogo.png" alt="ADAPLogo"></a></div>

        <!--Header and main nav-->
        <header id="mainnav">

            <nav><hr>
                <ul>
                    <li><a href="#AboutUs">About Us</a></li>
                    <li><a href="/ADollarAPlant/wdtassignment/php/eventpage.php">Events</a></li>
                    <li><a href="/ADollarAPlant/wdtassignment/html/Community.html">Community</a></li>
                    <li><a href="/ADollarAPlant/wdtassignment/html/ContactUs.html">Contact</a></li>
                </ul>
            <hr></nav>
        </header>

        <!--Login Button-->
        <div id="loginButton">
            <header>
                <?php 
                session_start();
                function isLoggedIn() {
                    if (isset($_SESSION["user_data"])) {
                        return true;
                    } else {
                        return false;
                    }
                }
                if (isLoggedin()) {
                    echo '<button class="profile-button" onclick="redirectToProfile()">Profile</button>';
                } else {
                    echo '<button class="login-button" onclick="redirectToLogin()">Login</button>';
                }
                ?>
            </header>
        </div>
        <!--Donate Button-->
        <div id="DonateButton">
            <div class="swiper">
                <img src="../image/tree1.jpg" alt="Image 1">
                <img src="https://res.cloudinary.com/janfeldmann/image/upload/w_1440,c_fill,f_auto,q_auto:eco/v1652349551/bettersoil/website/growth_172936d1c9.jpg" alt="Image 2">
                <img src="../image/tree.jpg" alt="Image 3">
                <button class="imgDonate" onclick="goDonate()">Donate</button>
            </div>
        </div>

        <!--About Us-->
        <div id="AboutUs" >
            <table height="600" width="85%">
                <tr>
                    <td width="45%" bgcolor="greenyellow">
                        <img src="../image/tree2.avif" height="100%" width="100%" alt="image_1"></td>
                    <td bgcolor="greenyellow">
                        <h1>What We Do</h1>
                        <br>
                        <p>We are a organisation to help spread awareness about the importance of conservation of the environment</p>
                        <a class="LearnMore" href="http://127.0.0.1:5501/wdtassignment/html/aboutustest.html">Learn More>></a>
                    </td>
                </tr>
            </table>
        </div>

        <!--Events-->
        <div id="Events" class="Events">
            <h1 id="Event">Upcoming Events</h1>
            <div class="container">
                <figure class="eventbox">
                    <img class="event_image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSj6ggI0FvRNTIuzjHs3gHoS05tEqULCDoU0fMFDOSr6tpuIDK8Q6KiVcn-NsamFKRzEho&usqp=CAU" alt="event_image">
                    <figcaption>
                        <p>Name:</p>
                        <p>Date:</p>
                        <p>Location:</p>
                        <p>Organizer:</p>
                        <p>Description:</p>
                        <a class="LearnMore" href="">Learn More>></a>
                    </figcaption>
                </figure>
                <figure class="eventbox">
                    <img class="event_image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRr6v1TkMKtKGLQTDkjNN_DZ1DOFQatt1GeSgvf0D-O72OLf621s0-Cz_ePqHG7iujGbTU&usqp=CAU" alt="event_image">
                    <figcaption>
                        <p>Name:</p>
                        <p>Date:</p>
                        <p>Location:</p>
                        <p>Organizer:</p>
                        <p>Description:</p>
                        <a class="LearnMore" href="">Learn More>></a>
                    </figcaption>
                </figure>
                <figure class="eventbox">
                    <img class="event_image" src="https://timelyapp-static.time.ly/images/54704601/Sustainable%20living_bJwo.JPG" alt="event_image">
                    <figcaption>
                        <p>Name:</p>
                        <p>Date:</p>
                        <p>Location:</p>
                        <p>Organizer:</p>
                        <p>Description:</p>
                        <a class="LearnMore" href="">Learn More>></a>
                    </figcaption>
                </figure>
                <a float="right" href="">More Events>></a>
        </div>

            <!--Pass Events-->
            <div id="PassEvents">
                <h1>Historical Events</h1>
                <div class="HistoricalEvent">
                    <img src="https://sammamishindependent.com/wp-content/uploads/2023/01/BollySteps-e1674094415390.jpg" alt="Historical Event 1">
                    <p>Event Achievement, Details</p>
                </div>
                <div class="HistoricalEvent">
                    <img src="https://blog.fetc.org/wp-content/uploads/fetc22_Facebook_1200X630_expo-1024x538.jpg" alt="Historical Event 2">
                    <p>Event Achievement, Details</p>
                </div>
                <div class="HistoricalEvent">
                    <img src="https://www.uchicagomedicine.org/-/media/images/ucmc/forefront/channel-pages/news/universal/nascar-universal-832x469.jpg?h=385&as=1&hash=29013F3C74296465195EDF02D1B9F1F7" alt="Historical Event 3">
                    <p>Event Achievement, Details</p>
                </div>
                </div>
            </div>

            <div id="donation">
                <h1>Donation</h1>
                <form id="donationForm" action="http://127.0.0.1:5501/wdtassignment/html/donation.html">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
            
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
            
                    <label for="contact">Contact No:</label>
                    <input type="tel" id="contact" name="contact" required>
            
                    <button id="donate"class="donate">Submit</button>
                </form>
            </div>
        </div>
        <footer>
            <div class="footer-content">
                <div class="footer-section about">
                    <h2>About Us</h2>
                    <p>Your charity organization's description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="footer-section contact">
                    <h2>Contact Us</h2>
                    <p>Email: adollaraplant@charity.org</p>
                    <p>Phone: 010-888 7777</p>
                </div>
                <div class="footer-section social">
                    <h2>Follow Us</h2>
                    <a href="#" class="social-icon"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Facebook_logo_%28square%29.png/240px-Facebook_logo_%28square%29.png" alt="Facebook"></a>
                    <a href="#" class="social-icon"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Logo_of_Twitter.svg/292px-Logo_of_Twitter.svg.png" alt="Twitter"></a>
                    <a href="#" class="social-icon"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/600px-Instagram_icon.png" alt="Instagram"></a>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; 2024 Charity Organization. All rights reserved.
            </div>
        </footer>
    </div>

</body>

    <script src="../javasript/mainpage.js"></script>

</html>