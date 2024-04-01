<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Green Box Header</title>
  <link rel="stylesheet" href="reserve-style.css">

</head>
<body>
  <header class="green-box-header">
  <div class="header-links">
      <a href="#" class="profile-link">Profile</a>
      <a href="#" class="message-link">Message</a>
      <div class="dropdown">
        <button class="dropbtn">Book Now</button>
        <div class="dropdown-content">
          <a href="#">Book Now</a>
          <a href="#">Contact Us</a>
          <a href="#">View Available Rooms</a>
        </div>
      </div>
    </div>
  <h1 class="header-title"><?php echo "Central Suites"; ?></h1>
</header>

<div class="reservation-container">
  <div class="reservation-info">
    <div class="small-red-box">Number of Guests :</div>
    <div class="small-red-box">Check-in Date :</div>
    <div class="small-red-box">Check-out Date :</div>
    <div class="small-red-box">Discount Code :</div>
	 <div class="img-rooms">
    <div class="med-red-box"></div>
    <div class="med-red-box"></div>
    <div class="med-red-box"></div>
  </div>
  <div class="suite-rooms">
    <div class="med-yellow-box" style="font-size: 40px;">Central Suites - Standard | Php 5000 per night
	<p style="font-size: 16px;">2 guests allowed | 1 king | 85 sqm</p>
    <p style="font-size: 20px;">Room Accommodation | Complimentary WiFi access </p>
	<p style="font-size: 20px;">Complimentary use of hotel facilities | Complimentary Valet Service </p>
	<button class="book-now-btn2">Select</button>
	</div>
    <div class="med-yellow-box"style="font-size: 40px">Central Suites - Deluxe | Php 6000 per night
	<p style="font-size: 16px;">4 guests allowed | 2 Kings | 150 sqm</p>
    <p style="font-size: 20px;">Room Accommodation | Complimentary WiFi access </p>
	<p style="font-size: 20px;">Complimentary use of hotel facilities | Complimentary Valet Service </p>
	<button class="book-now-btn2">Select</button>
	
	</div>
    <div class="med-yellow-box"style="font-size: 40px">Central Suites - Suite | Php 7000 per night
	<p style="font-size: 16px;">6 guests allowed | 1 King | 300 sqm</p>
    <p style="font-size: 20px;">Room Accommodation | Complimentary WiFi access </p>
	<p style="font-size: 20px;">Complimentary use of hotel facilities | Complimentary Valet Service </p>
	<button class="book-now-btn2">Select</button>
	
	</div>
  </div>
  </div>
  
  
  

  <div class="reservation-details">
    <div class="red-box">
      <p>No. of Guests</p>
      <label for="adults">Adults:</label>
      <input type="number" id="adults" name="adults" value="1">
      <label for="children">Children:</label>
      <input type="number" id="children" name="children" value="0">
    </div>
    <div class="red-box">
      <p>CHECK IN DATE</p>
      <input type="date" id="checkin" name="checkin">
    </div>
    <div class="red-box">
      <p>CHECK OUT DATE</p>
      <input type="date" id="checkout" name="checkout">
    </div>
    <div class="red-box">
      <p>ROOM CATEGORY</p>
      <select id="room-category" name="room-category">
        <option value="standard">Standard</option>
        <option value="deluxe">Deluxe</option>
        <option value="suite">Suite</option>
      </select>
    </div>
    <div class="red-box">
      <p>DISCOUNT CODE</p>
      <input type="text" id="discount-code" name="discount-code">
    </div>
	<button class="book-now-btn">Book Now</button>
  </div>
  
  
</div>



<footer class="footer">
  <div class="footer-content">
    <p class="footer-item">Follow us on Social</p>
    <p class="footer-item">Contact Us<br> +63912 345 6789</p>
    <p class="footer-item">Send us a message <br> centralsuites@gmail.com </p>
  </div>
</footer>
</body>

</html>