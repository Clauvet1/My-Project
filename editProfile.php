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
        <form class="e-content">
            <div class="edits">
                <label>Profile Photo:</label>
                <input type="file" id="image" name="profilePhoto" placeholder="photo">
            </div>
         <div class="edits">
          <label class="names">First Name</label>
          <input type="text"  name="firstName" class="l-space" placeholder="Enter first name">
         </div>
         <div class="edits">
         <label class="names">Last Name</label>
          <input type="text"  name="lastName" class="l-space" placeholder="Enter last name">
         </div>
         <div class="edits">
          <label class="names">Email</label>
          <input type="email"  name="email" class="l-space" placeholder="Enter Email">
         </div>
         <div class="edits">
         <label class="names">My Bio</label>
          <input type="text"  name="myBio" class="ll-space" placeholder="write about your self, for example your skills">
         </div>
         <input type="submit" class="save" value="Registration">
</form>
        </div> 
</body>
</html>