<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Central Suites</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<header class="green-box-header">
    <div class="header-links">
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

<div class= "register-background">  
<header class="register">
    <div class="register-info">
        <h1>Sign up</h1><br>
        <form>
            <input type="text" placeholder="First Name" id="regfirstname" name="regfirstname"><br><br>
            <input type="text" placeholder="Last Name" id="reglastname" name="reglastname"><br><br>
            <input type="text" placeholder="Email" id="regemail" name="regemail"><br><br>
            <input type="text" placeholder="Phone Number" id="regpnumber" name="regpnumber"><br><br>
            <input type="text" placeholder="Password" id="regpassword" name="regpassword"><br><br>
            <input type="text" placeholder="Confirm Password" id="confpassword" name="confpassword"><br><br>
            <input type="submit" value="Sign up">
        </form>
    </div>
</header>
</div>
</body>
</html>