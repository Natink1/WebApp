<!DOCTYPE html>
<html>

<head>
  <title>Booking Form</title>
  <link rel="stylesheet" href="reservation.css">
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
          <li><a href="ContactUs.php">Contact-us</a></li>
          <li><a href="reservation.php" class="active">Reservation</a></li>
        </ul>


      </div>
    </div>
  </div>


  <h1 class="reservationtitle">Reservation</h1>


  <form>
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

</body>

</html>