<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Beauty Products</title>
    <link rel="stylesheet" href="../public/css/products.css">
    <script src="../public/js/products.js"></script>
</head>
<?php
include '../views/header.php';
include_once('../controllers/products-controller.php');
include_once('../models/products-model.php');
$productController = new products;
?>

<body>
    <div id="menubody" onclick="favorites(event.target)">
        <?php $products = $productController->getAllProducts(); ?>
        <?php if (!empty($products)) : ?>
            <?php foreach ($products as $product) : ?>
                <div class="menu_items">
                    <img src="<?php echo $product->pimage ?>" alt="" width="100%" height="100%" class="menu_img">
                    <div class="descr_and_add">
                        <img src="../public/img/favourite.png" class="favrs" alt="" title="remove from favourite">
                        <img src="../public/img/love.png" class="favs" alt="" title="add to favourite">
                        <img src="../public/img/add.png" alt="" class="icons" data-id="<?php echo $product->id; ?>">>
                        <div class="description">
                            <span class="names"><?php echo $product->Pname ?></span>
                            <br>
                            <p class="ingred"><?php echo $product->pdescription ?></p>
                            <span class="prices"><?php echo $product->pprice ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>No products available.</p>
        <?php endif; ?>
        <br>
        <script src="../public/js/products.js"></script>
        <?php include '../views/footer.php'; ?>





</body>
<script>
    var addToCartButtons = document.querySelectorAll('.icons');

    addToCartButtons.forEach(function (button) {
        button.addEventListener('click', function (event) {
        var id = event.target.getAttribute('data-id');
        var xml = new XMLHttpRequest();
        xml.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText);
                console.log(data);
            }
        };

            xml.open("GET", "cart-controller.php?action=addCart&id=" + id, true);
            xml.send();
        });
    });
   </script>
</html>