<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Central Suites</title>
  <link rel="stylesheet" href="paula-style.css">
  <script src="script.js" defer></script>
  <style>
   
  </style>
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

<div id="manage-profile" class="manage-profile">
  <h2>Manage Profile</h2>
  <form>
    <div class="profile-info">
        <p> CONTACT INFORMATION</p>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br><br>
        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="contact">
        <label for="payment-method">Preferred Payment Method:</label>
        <input type="text" id="payment-method" name="payment-method"><br><br>
        <p> ADDRESS</p>
        <label for="country">Country:</label>
        <input type="text" id="country" name="country">
        <label for="city">City:</label>
        <input type="text" id="city" name="city"><br><br>
        <label for="address1">Address 1:</label>
        <input type="text" id="address1" name="address1">
        <label for="address2">Address 2:</label>
        <input type="text" id="address2" name="address2"><br><br>
        <input type="submit" value="Next">
    </div>
  </form>
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
