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
<?php
include '../views/header.php';
include_once('../controllers/cart-controller.php');
include_once('../models/cart-model.php');
include_once('../helpers/session-helper.php');
$cartController = new CartController;
$cartmodel = new Cart();
$userId = $_SESSION['UsersUid'];
$carts = $cartController->displayCart($userId);
?>

<body>


    <main>
        <?php if (!empty($carts)) : ?>
            <h1> Items</h1>
            <hr>
            <?php foreach ($carts as $cart) { ?>
                <div class="card">
                    <div class="images">
                        <img src="<?php echo $cart->pimage ?>" alt="">
                    </div>
                    <div class="caption">
                        <label for=""><?php echo $cart->Pname ?></label>
                        <label for=""><?php $cart->pprice; ?></label> 
                        <button class="remove" data-id="<?php echo $cart->id ?>">Remove From Cart</button>
                    </div>
                </div>
            <?php } ?>
        <?php else : ?>
            <p>No items in the cart.</p>
            <label for=""><?php echo $_SESSION['UsersUid']; ?>u id // </label>

        <?php endif; ?>
    </main>










    <!-- <script>
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
    </script>  -->
    <?php
    include '../views/footer.php';
    ?>
</body>

</html>