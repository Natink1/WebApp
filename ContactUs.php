<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-us</title>
    <link rel="stylesheet" href="ContactUs.css">
</head>

<body>

    <div class="headera">


        <div class="mainnav">
            <div class="navbar">
                <a href="Index.php" class="imgl"><img class="logoimg" src="Images/Logo.png"></a>


                <ul class="navonlyul">
                    <li><a href="Index.php">Home</a></li>
                    <li><a href="facilities.php">Facilities</a></li>
                    <li><a href="rooms.php">Rooms</a></li>
                    <li><a href="ContactUs.php" class="active">Contact-us</a></li>
                    <li><a href="#">Reservation</a></li>
                </ul>


            </div>
        </div>

        <div class="firstTitle">
            <h2>Welcome to</h2>
            <h1><b>Nova Hotel</b></h1>
            <p>Discover luxury and comfort</p>

        </div>
        
        <!-- <div class="scrollbutton">
            <h3>Scroll</h3>
            <img class="scrollbuttonimg" src="/Images/Scroll button.png">
        </div> -->

    </div>
<h1 class="Header_contact">Contact-US</h1>
<div class="cont11">
    <div class="container">
        <h2>WE ARE HERE FOR YOU</h2>
        <p>AT NOVA Hotel, we take our customers seriously. Do you have any enquiries, complaints or requests, please forward it to our support desk and we will get back to you as soon as possible.</p>
        <form>
            <label for="name">Name</label>
            <input class=" Text_area_contact_small" type="text" id="name" name="name" required>

            <label  for="email">Email Address</label>
            <input class=" Text_area_contact_small" type="email" id="email" name="email" required>

            <label for="message">Message</label>
            <textarea class="Text_area_contact" id="message" name="message" required></textarea>
            <div class="Subbutcont">
                <button class="Subbut" type="submit">Submit</button>
            </div>
        </form>
          
    </div>

</div>


<?php include('first.php'); ?>



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
                <form>
                    <input type="email" placeholder="Email Address" required>
                    <button class="Footer_button" type="submit">OK</button>
                </form>
            </div>
        </div>
        <h4 class="copy">&copy;2022 Nova Hotel. All Rights Reserved. Powerd By Nati</h3>
    </footer>

</body>

</html>