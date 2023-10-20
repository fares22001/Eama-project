<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Beauty Products</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <section class="product-list">
        <?php
        // Connect to your database or data source
        // Query to fetch products, e.g., $products = getAllProducts();
        // Loop through products and display each one
        // Example:
        foreach ($products as $product) {
            echo '<div class="product">';
            echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
            echo '<h3>' . $product['name'] . '</h3>';
            echo '<p>' . $product['description'] . '</p>';
            echo '<p>Price: $' . $product['price'] . '</p>';
            echo '<a href="product-details.php?id=' . $product['id'] . '" class="btn">Details</a>';
            echo '</div>';
        }
        ?>
    </section>

    <?php include 'footer.php'; ?>
</body>

</html>