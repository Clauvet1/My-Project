<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin_login</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="l-container">
        <div class="l-content">
            <img src="CSS/Images/user.jpg" alt="user-icon" class="user-icon">
            <h2>ADMIN</h2>
            <div class="down">
          <div class="l-row">
            <img src="CSS/Images/personal.jpg" class="l-icon">
            <input type="text" name="userName" placeholder="Enter Username" class="l-space">
          </div>
          <div class="l-row">
            <img src="CSS/Images/lock.jpg" class="l-icon">
            <input type="password" name="password" placeholder="*******************" class="l-space">
          </div>
          <div class="lp-row">
            <a href="#"><input type="checkbox"> Remember me</a>
            <a href="recoverPassword.php" target="_blank">Forgot Password?</a>
          </div>
          </div>
         <button><a href="index.php">Login</a></button>
         <h4><a href="editProfile">Signup</a></h4>
            </div>
    </div>
</body>
</html>