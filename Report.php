<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="content_b">
      <div class="navbar">
        <h2>ADMIN</h2>
        <nav>
          <ul class="menu-list">
            
              <li><a href="index.php">Dashboard</a><img src="CSS/Images/arrow.png" class="nav-arrow"></li>
              <li><a href="manageTickets.php">Manage Ticket</a><img src="CSS/Images/arrow.png" class="nav-arrow"></li>
              <li><a href="normalTickets.php">Normal Ticket</a><img src="CSS/Images/arrow.png" class="nav-arrow"></li>
              <li><a href="foreignerTickets.php">Foreigner Ticket</a><img src="CSS/Images/arrow.png" class="nav-arrow"></li>
              <li><a href="Report.html">Reports</a><img src="CSS/Images/arrow.png" class="nav-arrow"></li>
              <li><a href="login.php">Logout</a><img src="CSS/Images/arrow.png" class="nav-arrow"></li>
              <div class="drop-link">
                <h4><a href="changePassword.php">Change Password</a></h4>
                <h4><a href="editProfile.php">Edit Profile</a></h4>
             </div>
          </ul>
          <div class="hambuger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </div>

        </nav>
</div>
     <div class="container">
     <div class="container_body">
      <h2>Reports</h2>
      <div class="row">
       <div class="col-1">
        <div class="col-1row">
        <div>
        <h3>50</h3>
        <p>&numero; Tickets generated <br> in last 24hrs</p>
      </div>
        <img src="CSS/Images/booking.png" class="div-image">
        </div>
        <div class="more-info_b">
          <a href="#" target="_blank"><p> More info</p>
          <img src="CSS/Images/double_arrow.png" class="info-icon"></a>
        </div>
       </div>
       <div class="col-2">
        <div class="col-3row">
        <div>
        <h3>100</h3>
        <p> &numero; Tickets generated <br> for the pass 1week</p>
      </div>
        <img src="CSS/Images/packing.jpg" class="div-image">
        </div>
        <div class="more-info_b">
         <a href="#" target="_blank"><p> More info</p>
          <img src="CSS/Images/double_arrow.png" class="info-icon"></a>
        </div>
       </div>
       <div class="col-3">
        <div class="col-3row">
        <div>
        <h3>53</h3>
        <p> Number of tickets generated <br>for the apss 1month</p>
      </div>
        <img src="CSS/Images/car-icon.jpg" class="div-image">
        </div>
        <div class="more-info_b">
         <a href="#" target="_blank"><p> More info</p>
          <img src="CSS/Images/double_arrow.png" class="info-icon"></a>
        </div>
       </div>
       <div class="col-4b">
        <div class="col-4brow">
        <div>
        <h3>70</h3>
        <p> Enter the date you want to get the number <br> of tickets generated for</p>
      </div>
      <input type="text" placeholder="Enter number of days here" class="box">
        <img src="CSS/Images/ticket.jpg" class="div-image">
        </div>
        <div class="more-info_b">
        <a href="#" target="_blank"><p> More info</p>
          <img src="CSS/Images/double_arrow.png" class="info-icon"></a>
        </div>
       </div>
      </div>
    </div>
    <?php include('footer.php') ?>
    </div>
    </div>
    <script>
      const hambuger = document.querySelector('.hambuger');
      const navMenu = document.querySelector('.menu-list');
    
      hambuger.addEventListener("click", mobileMenu);
    
      function mobileMenu() {
        hambuger.classList.toggle("active");
        navMenu.classList.toggle("active");
      }
    
      const navLink = document.querySelectorAll('.nav-link');
      navLink.forEach((n) => n.addEventListener("click", closeMenu));
    
      function closeMenu(){
        hambuger.classList.remove("active");
        navMenu.classList.remove("active");
      }
    </script>
    
</body>
</html>