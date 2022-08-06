<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>changePassword</title>
   <link rel="stylesheet" href="">
</head>
<body>
    <div class="p-container">
    <h1>Admin Account</h1>
    <div class="links">
          <h2><a href="editProfile.php">Edit Profile</a></h2>
          <h2><a href="changePassword.php">Change Password</a></h2>
         </div>
        <form class="p-content">
         <div class="edits">
          <label class="names">Current Password</label>
          <input type="password"  name="password" class="l-space" placeholder="***************">
         </div>
         <div class="edits">
         <label class="names">New Password</label>
          <input type="password"  name="password" class="l-space" placeholder="***************">
         </div>
         <div class="edits">
         <label class="names">Confirm Password</label>
          <input type="password"  name="password" class="l-space" placeholder="***************">
         </div>
         <input type="submit" class="save" value="Password">
</form>
    </div>
        
</body>
</html>