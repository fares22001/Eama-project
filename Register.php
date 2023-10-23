<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="user\assets\css\header.css">
    <link rel="stylesheet" href="user\assets\css\footer.css"> -->
    <link rel="stylesheet" href="register.css">
    <script src="user\assets\js\register.js"></script>
    <title> User Sign Up </title>
    <script src="https://kit.fontawesome.com/a98ac1f71c.js" crossorigin="anonymous"></script>
</head>
<body>

<?php include 'header.php'; ?>
    <div class="container">
        
        <h1>Sign Up Now</h1>
        <form action='#' method='post' onsubmit='return validateForm()'>
       
        <input type="text" id="inputfname" name="firstname" placeholder="Enter your first name" size="15" required>
        
        
        <input type="text"  id="inputlname" name="lastname" placeholder="Enter your last name" size="15"  required>
       
        
        <input type="tel" id="inputphone" name="phone" placeholder="Enter 11-digit phone number" pattern="[0-9]{11}" required>
       
        
        <input type="email" id="inputmail" placeholder="Enter your email" name="Enter your email" required>
       
        
        <input type="password"name="psw" id="inputpass" placeholder="Enter your Password"required>
       
        
        <input type="password" name="psw-confirmt" id="inputcpass" placeholder="Confirm your Password"required>
        <div class="role">
        <label for="role">Role:</label>
        </div>
        <select id="role" name="role"required>
        <option value="">Select Role</option>
    <option value="company">Company</option>
    <option value="pharmacy">Pharmacy</option>
    <option value="user">User</option>
  </select>
        
        
    
        
          <a href="user login.html"></a>
           <b> <button type="submit" >Sign Up </button></b> <br><br>
           <div class="account">
            <div class="aa">
            Already have an account? <a href="user login.php"><b>Login</b>
            </div>
                           </p>
                        </div>
    
        </div>
        
    </form>
    
    <?php include 'footer.php'; ?>
</body>
</html>