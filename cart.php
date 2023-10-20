<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>                                                                 
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
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