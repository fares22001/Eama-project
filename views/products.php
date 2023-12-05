<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Beauty Products</title>
    <link rel="stylesheet" href="../public/css/products.css">
    <script src="../public/js/products.js"></script>
</head>

<body>
    <?php include '../views/header.php'; ?>
    <?php

    require_once '../controllers/products-controller.php';
    require_once '../helpers/session-helper.php';

    $productController = new products();
    $productController->getAllProducts();

    ?>
    <div id="menubody" onclick="favorites(event.target)">
        <?php foreach ($products as $product) { ?>
            <div class="menu_items"><img src="user/assets/img/image.jpg" alt="" width="100%" height="100%" class="menu_img">
                <div class="descr_and_add">
                    <img src="user/assets/img/favourite.png" class="favrs" alt="" title="remove from favourite">
                    <img src="user/assets/img/love.png" class="favs" alt="" title="add to favourite">
                    <img src="user/assets/img/add.png" alt="" class="icons">
                    <div class="description">
                        <span class="names">echo '<td>' . $product['pname'] . '</td>';</span>
                        <br>
                        <p class="ingred">Our Recommended World Wide Teeth Brushs</p>
                        <span class="prices">Price : 20$</span>
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="menu_items"><img src="user/assets/img/electronic.jpg" alt="" width="100%" height="100%" class="menu_img">
            <div class="descr_and_add">
                <img src="user/assets/img/favourite.png" class="favrs" alt="" title="remove from favourite">
                <img src="user/assets/img/love.png" class="favs" alt="" title="add to favourite">
                <img src="user/assets/img/add.png" alt="" class="icons">
                <div class="description">
                    <span class="names">Oral B </span>
                    <br>
                    <p class="ingred">Our Recommended World Wide Teeth Brushs </p>
                    <span class="prices">Price : 24$</span>
                </div>
            </div>
        </div>



        <div class="menu_items">

            <img src="user/assets/img/babies.webp" alt="" width="100%" height="100%" class="menu_img">
            <div class="descr_and_add">
                <img src="user/assets/img/favourite.png" class="favrs" alt="" title="remove from favourite">
                <img src="user/assets/img/love.png" class="favs" alt="" title="add to favourite">
                <img src="user/assets/img/add.png" alt="" class="icons">
                <div class="description">
                    <span class="names">Oral B</span>
                    <br>
                    <p class="ingred">Our Recommended World Wide Teeth Brushs </p>
                    <span class="prices">Price : 20$</span>
                </div>
            </div>
        </div>
        <div class="menu_items">

            <img src="user/assets/img/teeth.jpg" alt="" width="100%" height="100%" class="menu_img">
            <div class="descr_and_add">
                <img src="user/assets/img/favourite.png" class="favrs" alt="" title="remove from favourite">
                <img src="user/assets/img/love.png" class="favs" alt="" title="add to favourite">
                <img src="user/assets/img/add.png" alt="" class="icons">
                <div class="description">
                    <span class="names">Oral B</span>
                    <br>
                    <p class="ingred">Our Recommended World Wide Teeth Brushs</p>
                    <span class="prices">Price : 24$</span>
                </div>
            </div>
        </div>
        <div class="menu_items">

            <img src="user/assets/img/doctor.webp" alt="" width="100%" height="100%" class="menu_img">
            <div class="descr_and_add">
                <img src="user/assets/img/favourite.png" class="favrs" alt="" title="remove from favourite">
                <img src="user/assets/img/love.png" class="favs" alt="" title="add to favourite">
                <img src="user/assets/img/add.png" alt="" class="icons">
                <div class="description">
                    <span class="names"> Oral B</span>
                    <br>
                    <p class="ingred">Our Recommended World Wide Teeth Brushs </p>
                    <span class="prices">Price : 200$</span>
                </div>
            </div>
        </div>
        <div class="menu_items">

            <img src="user/assets/img/kids.jpg" alt="" width="100%" height="100%" class="menu_img">
            <div class="descr_and_add">
                <img src="user/assets/img/favourite.png" class="favrs" alt="" title="remove from favourite">
                <img src="user/assets/img/love.png" class="favs" alt="" title="add to favourite">
                <img src="user/assets/img/add.png" alt="" class="icons">
                <div class="description">
                    <span class="names">Oral B</span>
                    <br>
                    <p class="ingred">Our Recommended World Wide Teeth Brushs </p>
                    <span class="prices">Price : 20$</span>
                </div>
            </div>
        </div>
        <div class="menu_items">

            <img src="user/assets/img/oral.jpg" alt="" width="100%" height="100%" class="menu_img">
            <div class="descr_and_add">
                <img src="user/assets/img/favourite.png" class="favrs" alt="" title="remove from favourite">
                <img src="user/assets/img/love.png" class="favs" alt="" title="add to favourite">
                <img src="user/assets/img/add.png" alt="" class="icons">
                <div class="description">
                    <span class="names">Oral B</span>
                    <br>
                    <p class="ingred">Our Recommended World Wide Teeth Brushs </p>
                    <span class="prices">Price : 20$</span>
                </div>
            </div>
        </div>
        <div class="menu_items">

            <img src="user/assets/img/sens.jpg" alt="" width="100%" height="100%" class="menu_img">
            <div class="descr_and_add">
                <img src="user/assets/img/favourite.png" class="favrs" alt="" title="remove from favourite">
                <img src="user/assets/img/love.png" class="favs" alt="" title="add to favourite">
                <img src="user/assets/img/add.png" alt="" class="icons">
                <div class="description">
                    <span class="names">Sensodyne</span>
                    <br>
                    <p class="ingred">Our Recommended World Wide Teeth Brushs </p>
                    <span class="prices">Price : 20$</span>
                </div>
            </div>
        </div>

        <div class="menu_items"><img src="user/assets/img/philips.webp" alt="" width="100%" height="100%" class="menu_img">
            <div class="descr_and_add">
                <img src="user/assets/img/favourite.png" class="favrs" alt="" title="remove from favourite">
                <img src="user/assets/img/love.png" class="favs" alt="" title="add to favourite">
                <img src="user/assets/img/add.png" alt="" class="icons">
                <div class="description">
                    <span class="names">Oral B </span>
                    <br>
                    <p class="ingred">Our Recommended World Wide Teeth Brushs </p>
                    <span class="prices">Price : 24$</span>
                </div>
            </div>
        </div>
        <div class="menu_items"><img src="user/assets/img/pick.jpg" alt="" width="100%" height="100%" class="menu_img">
            <div class="descr_and_add">
                <img src="user/assets/img/favourite.png" class="favrs" alt="" title="remove from favourite">
                <img src="user/assets/img/love.png" class="favs" alt="" title="add to favourite">
                <img src="user/assets/img/add.png" alt="" class="icons">
                <div class="description">
                    <span class="names">Oral B </span>
                    <br>
                    <p class="ingred">Our Recommended World Wide Teeth picks </p>
                    <span class="prices">Price : 10$</span>
                </div>
            </div>
        </div>
    </div>


    <?php include '../views/footer.php'; ?>





</body>

</html>