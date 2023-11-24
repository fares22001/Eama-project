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
    <main>
        <?php //echo mysqli_num_rows($res);
        ?>
        <h1>1 Items</h1>
        <hr>
        <?php
        // while ($row_cart = mysqli_fetch_assoc($res)) {
            // $product_id = $row_cart["product_id"];
            // $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = ?");
            // $stmt->bind_param("i", $product_id);
            // $stmt->execute();
            // $result = $stmt->get_result();
        
            // while ($row = $result->fetch_assoc()) {
        ?>
        <div class="card">
            <div class="images">
                <?php //echo $row["image"]; 
                ?>
                <img src="user/assets/img/image.jpg" alt="">
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
                <p class="product_name">Signal</p>
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
            //$stmt->close();
        // }
        ?>
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
    </script> -->
    <?php
    include '../views/footer.php';
    ?>
</body>

</html>