<?php
include('subscribe.php');
?>

<!DOCTYPE html>

<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOVA HOTEL</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    
    <!--  navigation bar and Headers-->
        
    <button class="menu-toggle" onclick="toggleMenu()">☰</button>
    <div class="headera" >

        <div class="mainnav">
            <div class="navbar">
                <a href="index.php" class="imgl"><img class="logoimg" src="Images/Logo.png"></a>

                <ul class="navonlyul">
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="facilities.php">Facilities</a></li>
                    <li><a href="rooms.php">Rooms</a></li>
                    <li><a href="ContactUs.php">Contact-us</a></li>
                    <li><a href="reservation.php">Reservation</a></li>
                   
                </ul>
                
           

            </div>
        </div>
       
        <script>
    function toggleMenu() {
        const navbar = document.querySelector('.navbar');
        navbar.classList.toggle('show');
    }
</script>

    <!-- <div class="headera">
        <div class="mainnav">
            <div class="navbar">
                <a href="index.php" class="imgl">
                    <img class="logoimg" src="Images/Logo.png" alt="Nova Hotel Logo">
                </a>
                <ul class="navonlyul">
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="facilities.php">Facilities</a></li>
                    <li><a href="rooms.php">Rooms</a></li>
                    <li><a href="ContactUs.php">Contact-us</a></li>
                    <li><a href="reservation.php">Reservation</a></li>
                </ul>
            </div>
        </div>
    </div>
</body> -->




        <div class="firstTitle">
            <h2>Welcome to</h2>
            <h1><b>Nova Hotel</b></h1>
            <p>Discover luxury and comfort</p>

        </div>
        <div class="scrollbutton">
            <h3>Scroll</h3>
            <a href="#testimonial-holder2"><img class="scrollbuttonimg" src="Images/Scroll button.png">
               
            </a>
        </div>


    </div>

    <div class="Welcometxt" id ="hovered">
        <p>
            Welcome to NOVA Hotel where comfort meets luxury at an affordable price.
            Discover the perfect blend of elegance and convenience at our tranquil oasis
            in the heart of Addis Ababa Whether you're here for business or leisure , our
            warm hospitality, sophisticated accommodations, and top-notch amenities ensure
            a memorable stay. Relax in our beautifully appointed rooms, savor gourmet dining
            experiences, and unwind in our luxurious spa. We pride ourselves on providing
            unparalleled service and exceptional value, making your stay truly unforgettable.
            Welcome to a haven of comfort, luxury, and affordability.
        </p>

    </div>
    
    <hr class="break">

    <div class="cont1">
        <div class="cont1text">
            <h1>Luxury Redefined</h1>
            <p>Our rooms are designed to transport
                you into an environment made for leisure.
                Take your mind off the day-to-day of home
                life and find a private paradise for yourself.</p>
            <a href="rooms.php"> <button class="butReadmore">Read More</button></a>

        </div>


        <div class="cont1img">


            <img class="bed1img" src="Images/Bed1.png">
        </div>

    </div>
    
    <div class="cont2">
        <div class="cont2text">
            <h1>Leave your worries in 
                the sand</h1>
            <p>We love life at the beach. Being close
                to the ocean with access to endless sandy
                beach ensures a relaxed state of mind.</p>
            <p id="hiddenText">It seems like time stands still watching the 
                ocean. .</p>
                <button id="toggle-Button" class= "butReadmore" on></button>
        </div>



        <div class="cont2img">
            <img class="bed2img" src="Images/Vac.png">
        </div>

    </div>

    <hr class="break">
    <div class="counter-holder">
    <div class="counter-container">
        <div class="counter">
            <h2>Customers</h2>
            <p id="customer-count">234</p>
        </div>
        <div class="counter">
            <h2>Average Rating</h2>
            <p id="rating-count">4.8</p>
        </div>
    </div>
    </div>

    <hr class="break">
    <div class="testimonial-holder" id="testimonial-holder2">
    <div class="testimonial-container">
        <h2>Testimonials</h2>
        <p id="testimonial-text"></p>
        <p id="testimonial-author"></p>
        <div class="buttons"> 
            <button class="button" id="prevButton" >&#9664;</button>
            <button class="button" id="nextButton">&#9654;</button> 
        </div>
    </div>
    </div>
    





    <footer class="footer">
        <div class="footer-container">


            <div class="footer-section-company-info">
                <h2>NOVA Hotel</h2>
                <p>4 Kilo Street</p>
                <p>+1 234 567 890</p>
                <p>4kilo@aau.edu.et</p>
            </div>


            <div class="footer-section links-social">
                <div class="links">
                    <p><a href="#">About Us</a></p>
                    <p><a href="#">Contact</a></p>
                    <p><a href="#">Terms & Conditions</a></p>
                </div>
                <div class="social-media">
                    <p><a href="#">Facebook</a></p>
                    <p><a href="#">Twitter</a></p>
                    <p><a href="#">Instagram</a></p>
                </div>
            </div>

            <div class="footer-section newsletter">
                <p>Subscribe to our newsletter</p>
                <form method="post" action="">
                    <input type="email" placeholder="Email Address" name="email1" required>
                    <button type="submit">OK</button>
                </form>
            </div>
        </div>
        <h4 class="copy">&copy;2022 Nova Hotel. All Rights Reserved. Powerd By Nati</h3>
    </footer>

<script src="script.js"></script>
</body>

</html>

