
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/header.css">
    <script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
    <script src='../public/js/search.js'></script>

    <title>YourStore - Online Shopping</title>
    <?php 
    include_once '../helpers/session-helper.php';
    ?>
</head>


<body>
    <header class="animated-header">
        <div class="header-content">
            <div class="logo">
                <a href="index.php" class="text-logo animated-text">Eama Group</a>
            </div>
            <nav class="navigation">
            <ul class="nav-links">
            <li><a href="../views/index.php">Home</a></li>
                    <li><a href="../views/products.php">Products</a></li>
                    <?php if(!isset($_SESSION['UsersUid'])) : ?>
                    <li><a href="../views/user login.php">Login</a></li>
                    <li><a href="../views/Register.php">Register</a></li>
                    <?php else: ?>
                        <li><a href="../views/newcart.php">Cart</a></li>
                    <a href="../controllers/Users-controller.php?q=logout"><li>Logout</li></a>
                    <?php endif; ?>   
   
       
    
</ul>
            </nav>

        </div>
        <div>
            <input type='text' name='search_text' id='search_text' placeholder='Search...' />
        </div>
        <div id='result'></div>

    </header>
</body>
</html>