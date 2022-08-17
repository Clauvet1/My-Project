<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin_dashboard</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="content">
      <div class="navbar">
        <h2>ADMIN</h2>
        <nav>
          
          <ul class="menu-list">
            <input type="text" placeholder="Search" title="Type in a category" id="search">
              <li><a href="index.php" class="nav-link">Dashboard</a><img src="CSS/Images/arrow.png" class="nav-arrow"></li>
              <li><a href="manageTickets.php" class="nav-link">Manage Ticket</a><img src="CSS/Images/arrow.png" class="nav-arrow"></li>
              <li><a href="normalTickets.php" class="nav-link">Normal Ticket</a><img src="CSS/Images/arrow.png" class="nav-arrow"></li>
              <li><a href="foreignerTickets.php" class="nav-link">Foreigner Ticket</a><img src="CSS/Images/arrow.png" class="nav-arrow"></li>
              <li><a href="Report.html" class="nav-link">Reports</a><img src="CSS/Images/arrow.png" class="nav-arrow"></li>
              <li><a href="login.php" class="nav-link">Logout</a><img src="CSS/Images/arrow.png" class="nav-arrow"></li>
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
     <div class="n-bar">
      <div class="menu-l">
     <h2>Welcome</h2>
    </div>
     </div>
     <div class="container_body">
      <h2>Park Ticketing System</h2>
      <h3>Dashboard</h3>
      <div class="row">
       <div class="col-1">
        <div class="col-1row">
        <div>
        <h3>50</h3>
        <p>Total &numero; <br> Foreigners Today</p>
      </div>
        <img src="CSS/Images/booking.png" class="div-image">
        </div>
       <button id="btn">More info</button>
       </div>
       <div class="col-2">
        <div class="col-3row">
        <div>
        <h3>100</h3>
        <p>Total &numero; <br> Foreigners Yesterday</p>
      </div>
        <img src="CSS/Images/packing.jpg" class="div-image">
        </div>
        
       </div>
       <div class="col-3">
        <div class="col-3row">
        <div>
        <h3>53</h3>
        <p>Total &numero; <br> Indians Today</p>
      </div>
        <img src="CSS/Images/car-icon.jpg" class="div-image">
        </div>
       
       </div>
       <div class="col-4">
        <div class="col-4row">
        <div>
        <h3>70</h3>
        <p>Total &numero; <br>Indians Yesterday</p>
      </div>
        <img src="CSS/Images/people.jpg" class="div-image">
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