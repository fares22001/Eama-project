<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Products</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/a98ac1f71c.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'header.php'; ?>

    <section aria-label="Newest Photos" class="slideshow">
        <div class="carousel" data-carousel>
            <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
            <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
            <ul data-slides>
                <li class="slide" data-active>
                    <div class="slide-text">
                        <p></p>
                    </div>
                    <img src="homeimage6.jpg" alt="Nature Image #2">

                </li>
                <li class="slide">
                    <div class="slide-text">
                        <p>Nature's Beauty</p>
                    </div>
                    <img src="cotoneve2.png" alt="Nature Image #1">
                </li>
                <li class="slide">
                    <div class="slide-text">
                        <p>Beautiful Scenery</p>
                    </div>
                    <img src="https://source.unsplash.com/ndN00KmbJ1c" alt="Nature Image #3">
                </li>
            </ul>
        </div>
    </section>


    <div>
        <h1 class="feauteredproducts">feautered products</h1>
    </div>

    <div class="product-container">
        <div class="product-card">
            <img src="user/assets/img/image.jpg" alt="Product 1" class="images">
            <h3>Product 1</h3>
            <p>Description of Product 1.</p>
            <a href="#" class="btn">Buy Now</a>
        </div>
        <div class="product-card">
            <img src="user/assets/img/image2.avif" alt="Product 2" class="images">
            <h3>Product 2</h3>
            <p>Description of Product 2.</p>
            <a href="#" class="btn">Buy Now</a>
        </div>
        <div class="product-card">
            <img src="user/assets/img/image3.webp" alt="Product 3" class="images">
            <h3>Product 3</h3>
            <p>Description of Product 3.</p>
            <a href="#" class="btn">Buy Now</a>
        </div>
        <div class="product-card">
            <img src="user/assets/img/image4.webp" alt="Product 4" class="images">
            <h3>Product 4</h3>
            <p>Description of Product 4.</p>
            <a href="#" class="btn">Buy Now</a>
        </div>
        <div class="product-card">
            <img src="user/assets/img/image4.webp" alt="Product 4" class="images">
            <h3>Product 4</h3>
            <p>Description of Product 4.</p>
            <a href="#" class="btn">Buy Now</a>
        </div>
    </div>









    <section class="about">
        <h2>About Us</h2>
        <p>Learn more about our commitment to providing high-quality beauty products that enhance your natural beauty.</p>
        <a href="about.php" class="btn">Read More</a>
    </section>

    <?php include 'footer.php'; ?>
    <script src="slideshow.js"></script>
    <script src="scroll.js"></script>
</body>

</html>