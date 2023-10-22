<?php
// require_once '';
// $sql_cart = "SELECT * FROM cart";
// $all_cart = $conn->query($sql_cart);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../user/assets/css/cart.css">
    <title>In Cart Products</title>
    <script src="https://kit.fontawesome.com/a98ac1f71c.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include '../../user/includes/header.php';
    ?>
    <main>
        <?php //echo mysqli_num_rows($all_cart);
        ?>
        <h1>0 Items</h1>
        <hr>
        <?php
        // while($row_cart = mysqli_fetch_assco($all_cart)){
        //     $sql = "SELECT * FROM products WHERE product_id=".$row_cart["product_id"];
        //     $all_product = $conn->query($sql);
        //     while($row = mysqli_fetch_assco($all_product)){
        ?>
        <div class="card">
            <div class="images">
                "<?php //echo $row["product_image"]; 
                    ?>"
                <img src="../../user/" alt="">
            </div>

            <div class="caption">
                <p class="rate">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </p>
                <?php //echo $row["name"]; 
                ?>
                <p class="product_name">Product Name</p>
                <?php //echo $row["price"]; 
                ?>
                <p class="price"><b>$3</b></p>
                <?php //echo $row["dicount"]; 
                ?>
                <p class="discount"><b><del>$4</del></b></p>
                <button class="remove" data-id="<?php echo $row["product_id"]; ?>">Remove From Cart</button>
            </div>
        </div>
        <?php
        //     }
        // }
        ?>
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
    include '../../user/includes/footer.php';
    ?>
</body>

</html>