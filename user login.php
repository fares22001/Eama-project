<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user Login</title>
    <!-- <link rel="stylesheet" href="user\assets\css\header.css">
    <link rel="stylesheet" href="user\assets\css\footer.css"> -->
    <link rel="stylesheet" href=" user login.css">
    <script src="user\assets\js\user login.js"></script>
</head> 
<body>   
<?php include 'header.php'; ?>
</html>
<div class="container">
    <b><h2> User Login</h2></b> 
 <form action="" method="post" onsubmit="return validateForm()">
     <input type="text" id="username" name="username" placeholder="Enter your username" required>
     <input type="password" id="password" name="password" placeholder="Enter your password" required>
     
     <b> <button type="submit"  >Login </button></b> <br><br>
    
     <div id="error" class="error"></div>
 </form>
</div>
<?php include 'footer.php'; ?>
</body>
</html>