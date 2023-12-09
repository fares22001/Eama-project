<?php
// require_once 'connection.php';
// $sql_cart = "SELECT * FROM cart "; 
// $res = mysqli_query($conn, $sql_cart);

?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/css/cart.css">
    <title>In Cart Products</title>
    <script src="https://kit.fontawesome.com/a98ac1f71c.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include '../views/header.php';
    ?>
    <?php

    require_once '../controllers/cart-controller.php';
    require_once '../helpers/session-helper.php';

   $cartController = new CartController();
   $carts = $cartController->getAllCarts();
    ?>
    <main>  
    <?php if (!empty($carts)) : ?>     
        <h1><?php echo count($carts); ?> Items</h1>
        <hr>
        <?php foreach ($carts as $cart) { ?>
            <div class="card">
                <div class="images">
                    <img src="<?php echo $row_cart["pimage"]; ?>" alt="">
                </div>
                <div class="caption">
                    <p class="rate">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </p>
                    <p class="product_name"><?php echo $row_cart["Pname"]; ?></p>
                    <p class="price"><b>$<?php echo $row_cart["pprice"]; ?></b></p>
                    <p class="discount"><b><del>$<?php echo $row_cart["discount"]; ?></del></b></p>
                    <button class="remove" data-id="<?php echo $row_cart["id"]; ?>">Remove From Cart</button>
                </div>
            </div>
         <?php } ?>
         <?php else : ?>
        <p>No items in the cart.</p>
    <?php endif; ?>
    </main>










     <script>
        var remove = document.getElementsByClassName("remove");
        for (var i = 0; i < remove.length; i++) {
            remove[i].addEventListener("click", function(event) {
                var target = event.target;
                var cart_id = target.getAttribute("data-id");
                var xml = new XMLHttpRequest();
                xml.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        target.innerHTML = this.responseText;
                        target.style.opacity = .3;
                    }
                }
                xml.open("GET", "" + cart_id, true);
                xml.send();
            })
        }
    </script> 
    <?php
    include '../views/footer.php';
    ?>
</body>

</html>