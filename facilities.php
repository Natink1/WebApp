<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilities</title>
    <link rel="stylesheet" href="facilities.css">
</head>

<body>
    <!--  navigation bar and Headers-->

    <div class="headera" style=" background-image: url('Images/FacilitiesBackground.png'), linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.718));">



        <div class="mainnav">
            <div class="navbar">
                <a href="index.php" class="imgl"><img class="logoimg" src="Images/Logo.png"></a>


                <ul class="navonlyul">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="facilities.php" class="active">Facilities</a></li>
                    <li><a href="rooms.php">Rooms</a></li>
                    <li><a href="ContactUs.php">Contact-us</a></li>
                    <li><a href="reservation.php">Reservation</a></li>
                </ul>


            </div>
        </div>

        <!-- <div class="firstTitle">
            <h2>Welcome to</h2>
            <h1><b>Nova Hotel</b></h1>
            <p>Discover luxury and comfort</p>

        </div> -->

        <!-- <div class="scrollbutton">
            <h3>Scroll</h3>
            <img class="scrollbuttonimg" src="/Images/Scroll button.png">
        </div> -->

    </div>



    <div class="Facpar">
        <div class="tocen">
            <h1 class="Factitle">FACILITIES</h1>
            <p>We want your stay at our lush hotel to be truly unforgettable. That is why we give special attention to
                all of your needs so
                that we can ensure an experience quite uniquw. Luxury hotels offers the perfect setting with stunning
                views for leisure
                and our modern luxury resort facilities will help you enjoy the best of all. </p>
        </div>
    </div>
    <h1 class="Fatit">The GYM</h1>

    <div class="Content_image">
        <div class="Content_image1">
            <img class="Content_img" src="Images/Gym.png" alt="THE GYM">

            <div class="img_overlay">
                <h1>Quality GYM</h1>
                <p>Our fitness center offers a variety of machines and free weights for a complete workout.</p>
            </div>

        </div>
    </div>

    <h1 class="Fatit">POOLSIDE BAR</h1>
    <div class="Content_image">
        <div class="Content_image1">
            <img class="Content_img" src="Images/Pool.png" alt="POOLSIDE BAR">
            <div class="img_overlay">
                <h1>Amazing Bar</h1>
                <p>Unwind by the pool with refreshing cocktails and a relaxed atmosphere at our poolside bar.</p>
            </div>

        </div>
    </div>
    
    <h1 class="Fatit">THE SPA</h1>
    <div class="Content_image">
        <div class="Content_image1">
        <img class="Content_img" src="Images/spa.png" alt="THE SPA">
        <div class="img_overlay">
            <h1>Spa</h1>
            <p>Escape to our tranquil spa and indulge in rejuvenating treatments designed to restore your body and mind.</p>
        </div>
    </div>
</div>

    <h1 class="Fatit">SWIMMING POOL</h1>
    <div class="Content_image">
        <div class="Content_image1">
        <img class="Content_img" src="Images/SWIMMING.png" alt="SWIMMING POOL">
        <div class="img_overlay">
            <h1>Clean Warm Pool</h1>
            <p>Enjoy a leisurely swim or simply relax by the poolside in our tranquil oasis.</p>
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
                <form method="post" >
                    <input type="email" placeholder="Email Address" name="email1" required>
                    <button class="Footer_button" type="submit">OK</button>
                </form>
            </div>
        </div>
        <h4 class="copy">&copy;2022 Nova Hotel. All Rights Reserved. Powerd By Nati</h3>
    </footer>

    <script src="fac.js"></script>
</body>


</html>
<?php
include('subscribe.php');
?>