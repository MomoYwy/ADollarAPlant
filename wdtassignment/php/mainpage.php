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
        <div class='logo'><a href=""><img id ="logo"src="../image/ADAPLogo.png" alt="ADAPLogo"></a></div>

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
                    <td width="50%" bgcolor="greenyellow">
                        <img src="../image/tree2.avif" height="100%" width="100%" alt="image_1"></td>
                    <td>
                        <h1>What We Do</h1>
                        <br>
                        <p>We are a organisation to help spread awareness about the importance of conservation of the environment</p>
                        <a class="LearnMore" href="/ADollarAPlant/wdtassignment/html/AboutUs.html">Learn More>></a>
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
                        <p>Name: Outdoor Adventure Challenge</p>
                        <p>Date: 20 Nov 2023</p>
                        <p>Location: Bukit Bintang</p>
                        <p>Organizer: Aisha Subramanian</p>
                        <p>Description: Get ready to blaze new trails and cultivate a deeper connection with nature at our Outdoor Adventure Challenge event. This unique experience combines the thrill of outdoor exploration with the mission of nurturing environmental stewardship through a plant charity initiative.</p>
                        <a class="LearnMore" href="">Learn More>></a>
                    </figcaption>
                </figure>
                <figure class="eventbox">
                    <img class="event_image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRr6v1TkMKtKGLQTDkjNN_DZ1DOFQatt1GeSgvf0D-O72OLf621s0-Cz_ePqHG7iujGbTU&usqp=CAU" alt="event_image">
                    <figcaption>
                        <p>Name: Culinary Arts Showcase for Charity</p>
                        <p>Date: 12 Dec 2023</p>
                        <p>Location: Johor Bahru</p>
                        <p>Organizer: Kavi Kumar Abdullah</p>
                        <p>Description: This eagerly anticipated event brings together renowned chefs, food enthusiasts, and philanthropists for an unforgettable evening of gourmet cuisine, fine wine, and charitable giving.</p>
                        <a class="LearnMore" href="">Learn More>></a>
                    </figcaption>
                </figure>
                <figure class="eventbox">
                    <img class="event_image" src="https://timelyapp-static.time.ly/images/54704601/Sustainable%20living_bJwo.JPG" alt="event_image">
                    <figcaption>
                        <p>Name: Sustainable Living Workshop Series</p>
                        <p>Date: 11 Jan 2024</p>
                        <p>Location: Bukit Bintang</p>
                        <p>Organizer: Aisha Subramanian</p>
                        <p>Description: This is a transformative workshop series hosted by our Plant Charity Initiative, dedicated to equipping individuals with the knowledge and skills needed to embrace sustainable living practices. Join us on our journey to a greener, greener future.</p>
                        <a class="LearnMore" href="">Learn More>></a>
                    </figcaption>
                </figure>
                <a float="right" href="http://localhost/ADollarAPlant/wdtassignment/php/eventpage.php">More Events>></a>
            </div>
        </div>

            <!--Pass Events-->
            <div id="PassEvents">
                <h1>Historical Events</h1>

                <div class="HistoricalEvent">
                    <img src="https://sammamishindependent.com/wp-content/uploads/2023/01/BollySteps-e1674094415390.jpg" alt="Historical Event 1">
                    <div class="event-details">
                        <h3>Event Achievement</h3>
                        <p>Total participant: 12500</p>
                        <p>Total donation amount: RM120000</p>
                        <p>Details</p>
                        <p>
                            Event Name: Bollywood Dance Night for Diversity<br>
                            Date: 5 Sept 2023<br>
                            Location: Johor Bahru<br>
                            Organizer: Kavi Kumar Abdullah
                        </p>
                    </div>
                </div>

                <div class="HistoricalEvent">
                    <img src="https://blog.fetc.org/wp-content/uploads/fetc22_Facebook_1200X630_expo-1024x538.jpg" alt="Historical Event 2">
                    <div class="event-details">
                        <h3>Event Achievement</h3>
                        <p>Total participant: 21400</p>
                        <p>Total donation amount: RM200000</p>
                        <p>Details</p>
                        <p>
                            Event Name: Tech Expo for Education<br>
                            Date: 20 Oct 2023<br>
                            Location: Bukit Jalil<br>
                            Organizer: Muhammad Patel
                        </p>
                    </div>
                </div>

                <div class="HistoricalEvent">
                    <img src="https://www.uchicagomedicine.org/-/media/images/ucmc/forefront/channel-pages/news/universal/nascar-universal-832x469.jpg?h=385&as=1&hash=29013F3C74296465195EDF02D1B9F1F7" alt="Historical Event 3">
                    <div class="event-details">
                        <h3>Event Achievement</h3>
                        <p>Total participant: 13500</p>
                        <p>Total donation amount: RM150000</p>
                        <p>Details</p>
                        <p>
                            Event Name: Motorsports Weekend for Medical Research<br>
                            Date: 1 Nov 2023<br>
                            Location: Semenyih<br>
                            Organizer: Farah Krishnan
                        </p>
                    </div>
                </div>
            </div>

            <div id="donation">
                <h1>Donation</h1>
                <form id="donationForm" action="">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
            
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
            
                    <label for="contact">Contact No:</label>
                    <input type="tel" id="contact" name="contact" required>
            
                    <button id="Donate"class="donate" onclick='toDonate()'>Submit</button>
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