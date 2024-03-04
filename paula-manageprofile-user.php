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
        <p> USER PROFILE</p>
        <label for="username">USERNAME:</label>
        <input type="text" id="username" name="username"><br>
        <label for="password">PASSWORD:</label>
        <input type="text" id="password" name="password"><br>
        <label for="recoveryemail">RECOVERY E-MAIL:</label>
        <input type="text" id="recoveryemail" name="recoveryemail"><br>
        <input type="submit" value="Submit">
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
