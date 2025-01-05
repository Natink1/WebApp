<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
    <link rel="stylesheet" href="rooms.css">
</head>

<body>
    <!--  navigation bar and Headers-->
    <div class="headera" style=" background-image: url('Images/RoomsBackground.png'), linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.718));">

    <button class="menu-toggle" onclick="toggleMenu()">☰</button>

        <div class="mainnav">
            <div class="navbar">
                <a href="index.php" class="imgl">
                    <img class="logoimg" src="Images/Logo.png"></a>


                <ul class="navonlyul">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="facilities.php">Facilities</a></li>
                    <li><a href="rooms.php" class="active">Rooms</a></li>
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


    </div>


    <div class="Facpar">
        <div class="tocen">
            <h1>ROOMS AND RATES</h1>
            <p>Each of our bright, light-flooded rooms come with everything you could possibly need for a comfortable stay. And yes,
                comfort isn’t our only objective, we also value good design, sleek contemporary furnishing complemented
                by the rich tones of nature’s palette as visible from our rooms’ sea-view windows and terraces. </p>
        </div>
    </div>

    </div>


    <div class="Content_image">
        <h1>Single Room</h1>
        <div class="Content_Border">
            <img class="Content_img" src="Images/SingleRoom.png" alt="Single Room">
            <ul>
                <li>Ideal for solo travelers seeking comfort and convenience.</li>
                <li>Features a cozy queen or full-size bed.</li>                   
                <li class="hidet" id="hidden">Equipped with a private bathroom and essential amenities.<br>
                Perfect for business trips or leisure escapes.</li>
            </ul>
            <button class="downbut" id="morebut">&#9660</button>
        </div>
    </div>

    <div class="Content_image">
    
        <h1>Double Room</h1>
        <div class="Content_Border">
        <img class="Content_img" src="Images/DoubleRoom.png" alt="Double Room">
        <ul>
                <li>Ideal for solo travelers seeking comfort and convenience.</li>
                <li>Features a cozy queen or full-size bed.</li>                   
                <li class="hidet" id="hidden2">Equipped with a private bathroom and essential amenities.<br>
                Perfect for business trips or leisure escapes.</li>
            </ul>
            <button class="downbut" id="morebut2">&#9660</button>
        </div>
    </div>

    <div class="Content_image">
        <h1>Twin Room</h1>
        <div class="Content_Border">
        <img class="Content_img" src="Images/TwinRoom.png" alt="Twin Room">
        <ul>
                <li>Ideal for friends or colleagues traveling together.</li>
                <li>Ideal for friends or colleagues traveling together.</li>                   
                <li class="hidet" id="hidden3">Provides comfort and privacy for each guest.<br>
                Perfect for groups or those who prefer their own space.</li>
            </ul>
            <button class="downbut" id="morebut3">&#9660</button>
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
<script src="Rooms.js"></script>

</html>