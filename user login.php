<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user Login</title>
    <!-- <link rel="stylesheet" href="user\assets\css\header.css">
    <link rel="stylesheet" href="user\assets\css\footer.css"> -->
    <link rel="stylesheet" href=" user login.css">
    <!-- <script src="user\assets\js\user login.js"></script> -->
</head> 
<body>   
<?php include 'header.php'; ?>

<?php      
session_start();
    include('dbh.php');  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['email'];  
    $password = $_POST['password'];  
      
         
      
        $sql = "select *from user where email = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        
    
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
            header("Location:products.php");

        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
    }
?>
</html>
<div class="container">
    <b><h2> User Login</h2></b> 
 <form action="" method="post">
     <input type="text" id="username" name="email" placeholder="Enter your username" required>
     <input type="password" id="password" name="password" placeholder="Enter your password" required>
     
     <b> <button type="submit"  >Login </button></b> <br><br>
    
     <div id="error" class="error"></div>
 </form>
</div>
<?php include 'footer.php'; ?>   

</body>
</html>