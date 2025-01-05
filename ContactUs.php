<?php
include('subscribe.php');
include('contactus_data.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-us</title>
    <link rel="stylesheet" href="ContactUs.css">
</head>

<body>

<button class="menu-toggle" onclick="toggleMenu()">☰</button>

    <div class="headera">


        <div class="mainnav">
            <div class="navbar">
                <a href="index.php" class="imgl"><img class="logoimg" src="Images/Logo.png"></a>


                <ul class="navonlyul">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="facilities.php">Facilities</a></li>
                    <li><a href="rooms.php">Rooms</a></li>
                    <li><a href="ContactUs.php" class="active">Contact-us</a></li>
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


    </div>
<h1 class="Header_contact">Contact-US</h1>
<div class="cont11">
    <div class="container">
        <h2>WE ARE HERE FOR YOU</h2>
        <p>AT NOVA Hotel, we take our customers seriously. Do you have any enquiries, complaints or requests, please forward it to our support desk and we will get back to you as soon as possible.</p>
        <form method="post" action="">
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

</body>

</html>