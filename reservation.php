<?php
include('reservation_data.php')
  ?>

<!DOCTYPE html>
<html>


  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOVA HOTEL</title>
    <link rel="stylesheet" href="reservation.css">
    
</head>

<body>

  <button class="menu-toggle" onclick="toggleMenu()">☰</button>

  <div class="headera">

    </script>

    <div class="mainnav">
      <div class="navbar">
        <a href="index.php" class="imgl"><img class="logoimg" src="Images/Logo.png"></a>


        <ul class="navonlyul">
          <li><a href="index.php">Home</a></li>
          <li><a href="facilities.php">Facilities</a></li>
          <li><a href="rooms.php">Rooms</a></li>
          <li><a href="ContactUs.php">Contact-us</a></li>
          <li><a href="reservation.php" class="active">Reservation</a></li>
        </ul>

        <a href="login.php"><button class="reservation_login">View Reservations</button></a>

      </div>
    </div>
    <script>

      function toggleMenu() {
        const navbar = document.querySelector('.navbar');
        navbar.classList.toggle('show');
      }
    </script>

  </div>


  <h1 class="reservationtitle">Reservation</h1>

  <form class="reservation_form" method="post">
    <div class="form-container">
      <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Full Name">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Email">

        <label for="checkIn">Check-in Date:</label>
        <input type="date" id="checkIn" name="checkIn">

        <label for="roomType">Room Type:</label>
        <select id="roomType" name="roomType">
          <option value="Single">Single Room</option>
          <option value="Double">Double Room</option>
          <option value="Twin">Twin Room</option>
        </select>
      </div>

      <div>
        <label for="phone">Telephone:</label>
        <input type="text" id="phone" name="phone" placeholder="Telephone">

        <label for="checkOut">Check-out Date:</label>
        <input type="date" id="checkOut" name="checkOut">

        <label for="message">Special Message:</label>
        <textarea id="message" name="message" placeholder="Put your message that you want."></textarea>
      </div>
    </div>
    <button class="booknow" type="submit">BOOK NOW</button>
  </form>

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
        <!-- <p>Subscribe to our newsletter</p>
        <form method="post">
          <input type="email" placeholder="Email Address" name="email1" required>
          <button class="Footer_button" type="submit">OK</button>
        </form> -->
      </div>
    </div>
    <h4 class="copy">&copy;2022 Nova Hotel. All Rights Reserved. Powerd By Nati</h3>
  </footer>

</body>

<script src="reservation.js"></script>

</html>