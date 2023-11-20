<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cart.css">
    <title>In Cart Products</title>
    <script src="https://kit.fontawesome.com/a98ac1f71c.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <main>
        <?php //echo mysqli_num_rows($all_cart);
        ?>
        <h1>3 Items</h1>
        <hr>
        <?php
        // while($row_cart = mysqli_fetch_assco($all_cart)){
        //     $sql = "SELECT * FROM products WHERE product_id=".$row_cart["product_id"];
        //     $all_product = $conn->query($sql);
        //     while($row = mysqli_fetch_assco($all_product)){
        ?>
        <div class="card">
            <div class="images">
                <?php //echo $row["product_image"]; 
                    ?>
                <img src="user/assets/img/image.jpg" alt="">
            </div>

            <div class="caption">
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




        <div class="card">
            <div class="images">
<<<<<<< HEAD
                <?php 
                    ?>
=======
                <?php
                ?>
>>>>>>> 5a4f7c808b5181a096c247df6dae5b99a7951bab
                <img src="user/assets/img/electronic.jpg" alt="">
            </div>

            <div class="caption">
<<<<<<< HEAD
                <p class="rate">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </p>
                <p class="product_name">Oral</p>
                
                <p class="price"><b>$9</b></p>
                
=======
                <p class="product_name">Oral</p>

                <p class="price"><b>$9</b></p>

>>>>>>> 5a4f7c808b5181a096c247df6dae5b99a7951bab
                <p class="discount"><b><del>$10</del></b></p>
                <button class="remove" data-id="<?php echo $row["product_id"]; ?>">Remove From Cart</button>
            </div>
        </div>


        <div class="card">
            <div class="images">
<<<<<<< HEAD
                <?php 
                    ?>
=======
                <?php
                ?>
>>>>>>> 5a4f7c808b5181a096c247df6dae5b99a7951bab
                <img src="user/assets/img/image3.webp" alt="">
            </div>

            <div class="caption">
<<<<<<< HEAD
                <p class="rate">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </p>
                <p class="product_name">Oral</p>
                
                <p class="price"><b>$2</b></p>
                
=======
                <p class="product_name">Oral</p>

                <p class="price"><b>$2</b></p>

>>>>>>> 5a4f7c808b5181a096c247df6dae5b99a7951bab
                <p class="discount"><b><del>$3</del></b></p>
                <button class="remove" data-id="<?php echo $row["product_id"]; ?>">Remove From Cart</button>
            </div>
        </div>














        <?php
        //     }
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
    include 'footer.php';
    ?>
</body>

</html>