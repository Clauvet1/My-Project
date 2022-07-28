<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editProfile</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="p-container">
    <h1>Admin Account</h1>
    <div class="links">
          <h2><a href="editProfile.php">Edit Profile</a></h2>
          <h2><a href="changePassword.php">Change Password</a></h2>
         </div>
        <div class="p-content">
         <div class="edits">
          <div class="names">Current Password</div>
          <input type="password"  name="password" class="l-space" placeholder="***************">
         </div>
         <div class="edits">
         <div class="names">New Password</div>
          <input type="password"  name="password" class="l-space" placeholder="***************">
         </div>
         <div class="edits">
         <div class="names">Confirm Password</div>
          <input type="password"  name="password" class="l-space" placeholder="***************">
         </div>
         <button>save</button>
        </div>
        </div> 
</body>
</html>