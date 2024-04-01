<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Central Suites</title>
  <link rel="stylesheet" href="custom-style.css">
</head>
<body>
<header class="green-box-header">
  <div class="header-links">
    <div class="vertical-links">
      <a href="#" class="profile-link">Profile</a>
      <a href="#" class="search-link">Search</a> 
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
  </div>
  <h1 class="header-title"><?php echo "Central Suites"; ?></h1>
</header>


<div class="red-box">
  <div class="white-box">
    <h2 class="reservation-info">RESERVATION INFORMATION</h2>
    <p>ORDER NUMBER: <?php echo $order_number = "12345"; ?></p>
    <p>CHECK IN DATE: <?php echo $check_in_date = "2024-04-01"; ?></p>
    <p>CHECK OUT DATE: <?php echo $check_out_date = "2024-04-05"; ?></p>
    <p>ROOM TYPE: <?php echo $room_type = "Deluxe"; ?></p>
    <p>NUMBER OF GUESTS: <?php echo $number_of_guests = 2; ?></p>
    <p>DISCOUNT CODE: <?php echo $discount_code = "SPRING20"; ?></p>
    <p class="total">TOTAL: <?php echo $total = "$500"; ?></p>
  </div>
  <div class="right-box">
    <input type="text" class="input-box" placeholder="NAME" name="name">
    <input type="email" class="input-box" placeholder="EMAIL" name="email">
    <input type="text" class="input-box" placeholder="CONTACT" name="contact">
    <div class="contact-box payment-dropdown-container">
  <select id="payment-method" class="input-box dropdown-toggle" name="payment_method">
    <option value="">Select Payment Method</option>
    <option value="Credit Card">Credit Card</option>
    <option value="PayPal">PayPal</option>
    <option value="Bank Transfer">Bank Transfer</option>
  </select>
</div>
    <div class="button-container">
      <button class="payment-button" name="pay">PAY</button>
      <button class="cancel-button" name="cancel">CANCEL</button>
    </div>
  </div>
</div>

<footer class="footer">
  <div class="footer-content">
    <p class="footer-item">Follow us on Social</p>
    <p class="footer-item">Contact Us<br> +63912 345 6789</p>
    <p class="footer-item">Send us a message <br> centralsuites@gmail.com </p>
  </div>
</footer>

<script src="custom-script.js"></script> <!-- Include JavaScript file -->
</body>
</html>






