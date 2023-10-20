<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cart.css">
    <title>In Cart Products</title>
</head>
<body>
    <?php
        include 'header.php'; 
    ?>
    <main>
        <h1>0 Items</h1>
        <hr>
        <div class="card">
            <div class="images">
                <img src="image.jpg" alt="">
            </div>
            
            <div class="caption">
                <p class="rate">
                    <i class="star"><span>&#9733;</span></i>
                    <i class="star"><span>&#9733;</span></i>                                                                 
                    <i class="star"><span>&#9733;</span></i>
                    <i class="star"><span>&#9733;</span></i>
                    <i class="star"><span>&#9733;</span></i>
                </p>
                <p class="product_name">Product Name</p>
                <p class="price"><b>$3</b></p>
                <p class="discount"><b><del>$4</del></b></p>
                <button class="remove">Remove From Cart</button>
            </div>
        </div>
    </main>
</body>
</html>