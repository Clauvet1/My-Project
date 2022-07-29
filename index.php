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
      <?php include('header.php') ?>
     <div class="container">
     <div class="bar">
      <div class="menu-l">
      <a href="#" target="_blank"><img src="CSS/Images/menu3.png" alt="" class="menu-icon"></a>
     <h2>Welcome</h2>
    </div>
     <div class="drop-link">
      <h4><a href="changePassword.php">Administrator<img src="CSS/Images/drop_down_menu1.png" class="arrow-d"></a></h4>
      <div class="drop">
        <h4><a href="changePassword.php">Change Password</a></h4>
        <h4><a href="editProfile.php">Edit Profile</a></h4>
      </div>
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
        <div class="more-info">
          <a href="#" target="_blank"><p> More info</p>
          <img src="CSS/Images/double_arrow.png" class="info-icon"></a>
        </div>
       </div>
       <div class="col-2">
        <div class="col-3row">
        <div>
        <h3>100</h3>
        <p>Total &numero; <br> Foreigners Yesterday</p>
      </div>
        <img src="CSS/Images/packing.jpg" class="div-image">
        </div>
        <div class="more-info">
         <a href="#" target="_blank"><p> More info</p>
          <img src="CSS/Images/double_arrow.png" class="info-icon"></a>
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
        <div class="more-info">
         <a href="#" target="_blank"><p> More info</p>
          <img src="CSS/Images/double_arrow.png" class="info-icon"></a>
        </div>
       </div>
       <div class="col-4">
        <div class="col-4row">
        <div>
        <h3>70</h3>
        <p>Total &numero; <br> Indians Yesterday</p>
      </div>
        <img src="CSS/Images/people.jpg" class="div-image">
        </div>
        <div class="more-info">
        <a href="#" target="_blank"><p> More info</p>
          <img src="CSS/Images/double_arrow.png" class="info-icon"></a>
        </div>
       </div>
      </div>
    </div>
    <?php include('footer.php') ?>
    </div>
    </div>
</body>
</html>