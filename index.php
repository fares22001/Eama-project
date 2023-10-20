<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Products</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <section class="hero">
        <h1>Welcome to Our Beauty Products Store</h1>
        <p>Discover the best in beauty and skincare.</p>
        <a href="products.php" class="btn">Shop Now</a>
    </section>

    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="image.jpg" alt="Image 1" class="slideimages">
        </div>

        <div class="mySlides fade">
            <img src="image2.avif" alt="Image 2" class="slideimages">
        </div>

        <div class="mySlides fade">
            <img src="image3.webp" alt="Image 3" class="slideimages">
        </div>

        <div class="mySlides fade">
            <img src="image4.webp" alt="Image 4" class="slideimages">
        </div>
    </div>

    <section class="featured-products">
        <h2>Featured Products</h2>
        <div class="product">
            <img src="image.jpg" alt="Product 1">
            <h3>Silvercare</h3>
            <p>Product 1 Description</p>
            <a href="#">Shop Now</a>
        </div>
        <div class="product">
            <img src="product2.jpg" alt="Product 2">
            <h3>Product 2 Name</h3>
            <p>Product 2 Description</p>
            <a href="#">Shop Now</a>
        </div>
        <div class="product">
            <img src="product3.jpg" alt="Product 3">
            <h3>Product 3 Name</h3>
            <p>Product 3 Description</p>
            <a href="#">Shop Now</a>
        </div>
    </section>

    <!-- <section class="featured-products">
        <h2>Featured Products</h2>
        <?php
        // Connect to your database or data source
        // Query to fetch featured products
        // Example: $products = getFeaturedProducts();
        // foreach ($products as $product) {
        //     echo '<div class="product">';
        //     echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
        //     echo '<h3>' . $product['name'] . '</h3>';
        //     echo '<p>' . $product['description'] . '</p>';
        //     echo '<a href="#">Shop Now</a>';
        //     echo '</div>';
        // }
        ?>
    </section> -->

    <section class="about">
        <h2>About Us</h2>
        <p>Learn more about our commitment to providing high-quality beauty products that enhance your natural beauty.</p>
        <a href="about.php" class="btn">Read More</a>
    </section>

    <?php include 'footer.php'; ?>
    <script src="slideshow.js"></script>
</body>

</html>