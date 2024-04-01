<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Green Box Header</title>
  <link rel="stylesheet" href="room-availability-css.css">
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

  <!--<div class="top-container-dropdown">

    <div class="top-dropdown">
      <button class="top-dropbtn">Guests</button>
      <div class="top-dropdown-content">
          <select id="guests">
            <option value="1">1 Adult</option>
            <option value="2">2 Adults</option>
            <option value="1">1 Adult, 1 Child</option>
            <option value="1">1 Adult, 2 Children</option>
            <option value="2">2 Adults, 1 Child</option>
            <option value="2">2 Adults, 2 Children</option>
          </select>
      </div>
    </div>

    <div class="top-dropdown">
      <button class="top-dropbtn">Check-in Date</button>
        <div class="top-dropdown-content">
          <input type="date" id="check-in-date">
        </div>
    </div>

    <div class="top-dropdown">
      <button class="top-dropbtn">Check-out Date</button>
        <div class="top-dropdown-content">
          <input type="date" id="check-out-date">
        </div>
    </div> 

    <div class="top-box">
      Discount Code
      <input type="text" id="discount-code" placeholder="Enter discount code">
    </div> 

    </div> -->

    <div class="select-header-container">
      <h1>Select Check-in and Check-out Dates</h1>
    </div>

    <div class="main-container">

      <div class="cal-background">

            <p class="month-header" align="center">
              April 2024
            </p>
            <br/>
            
            <table class="cal-center" bgcolor="#dadada" align="center"
                cellspacing="40" cellpadding="40">
        
                <caption align="top">
                </caption>
                
                <thead>
                    <tr>
                        <th>Sun</th>
                        <th>Mon</th>
                        <th>Tue</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>
                        <th>Sat</th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td></td>
                        <td><button class="cal-button">1</button></td>
                        <td><button class="cal-button">2</button></td>
                        <td><button class="cal-button">3</button></td>
                        <td><button class="cal-button">4</button></td>
                        <td><button class="cal-button">5</button></td>
                        <td><button class="cal-button">6</button></td>
                    </tr>
                    <tr>
                        <td><button class="cal-button">7</button></td>
                        <td><button class="cal-button">8</button></td>
                        <td><button class="cal-button">9</button></td>
                        <td><button class="cal-button">10</button></td>
                        <td><button class="cal-button">11</button></td>
                        <td><button class="cal-button">12</button></td>
                        <td><button class="cal-button">13</button></td>
                    </tr>
                    <tr>
                        <td><button class="cal-button">14</button></td>
                        <td><button class="cal-button">15</button></td>
                        <td><button class="cal-button">16</button></td>
                        <td><button class="cal-button">17</button></td>
                        <td><button class="cal-button">18</button></td>
                        <td><button class="cal-button">19</button></td>
                        <td><button class="cal-button">20</button></td>
                    </tr>
                    <tr>
                        <td><button class="cal-button">21</button></td>
                        <td><button class="cal-button">22</button></td>
                        <td><button class="cal-button">23</button></td>
                        <td><button class="cal-button">24</button></td>
                        <td><button class="cal-button">25</button></td>
                        <td><button class="cal-button">26</button></td>
                        <td><button class="cal-button">27</button></td>
                    </tr>
                    <tr>
                        <td><button class="cal-button">28</button></td>
                        <td><button class="cal-button">29</button></td>
                        <td><button class="cal-button">30</button></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
      </div>    

      <div class="room-container">

        <div class="room-header" align="center">
          Available Rooms
        </div>

        <div class="room-box" align="center">
          <p class="room-text-title">Central Suites</p>
          <p class="room-text-room">Standard</p>
          <p class="room-text-available">AVAILABLE</p>
        </div>

        <div class="room-box" align="center">
          <p class="room-text-title">Central Suites</p>
          <p class="room-text-room">Deluxe</p>
          <p class="room-text-available">AVAILABLE</p>
        </div>

        <div class="room-box" align="center">
          <p class="room-text-title">Central Suites</p>
          <p class="room-text-room">Suite</p>
          <p class="room-text-notavailable">NOT AVAILABLE</p>
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
