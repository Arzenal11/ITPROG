<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Green Box Header</title>
  <link rel="stylesheet" href="paula-style.css">
</head>
<body>
  <header class="green-box-header">
    <div class="header-links">
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
    <h1 class="header-title"><?php echo "Central Suites"; ?></h1>
  </header>
  <img src="/Users/paulapineda/Downloads/hotel.webp" alt="Hotel" class="yellow-box-image">
  <div class="yellow-box-text">
    <h2>Come Home to <br>Harmony<br><br><br></h2>
    <p>Celebrate your genuine five-star experience - <br>unwind, indulge, feast, and enjoy the true essence<br> of coming home</p>
  </div>
  <div class="promo-box">
    <h2>DEALS OF THE MONTH</h2>
    <div class="deals-container">
      <div class="deal">
        <h3>Double Room Discount</h3>
        <p>Get 10% discount off the original rate of a Double Room if two or more Double Rooms are reserved in a single booking. Each room becomes eligible for a discount.</p>
        <p class="code">DR10</p>
      </div>
      <div class="deal">
        <h3>Free Buffet</h3>
        <p>Book any room type with us this month and indulge in a delectable FREE buffet for two. Savor a delightful array of culinary delights on the house.</p>
        <p class="code">FB02</p>
      </div>
      <!-- New Red Box -->
      <div class="deal">
        <h3>Suite Room Discount</h3>
        <p>Get 15% discount off the original rate of a Double Room if two or more Suite Rooms are reserved in a single booking. Each room becomes eligible for a discount.</p>
        <p class="code">SR15</p>
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
</body>
</html>
