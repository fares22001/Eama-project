<?php include 'header.php';
    include_once '../helpers/session-helper.php';
    session_start(); 
    ?>
 

<h1 id="index-text">Welcome, <?php if(isset($_SESSION['usersId'])){
        echo explode(" ", $_SESSION['usersName'])[0];
    }else{
        echo 'Guest';
    } 
    ?> </h1>
    <a href="../controllers/Users-controller.php?q=logout"><li>Logout</li></a>
     <?php include 'footer.php'; ?>