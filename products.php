<?php

require_once 'connection.php';


?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Beauty Products</title>
    <link rel="stylesheet" href="products.css">
    <script src="user/assets/js/products.js"></script>
</head>

<body>
     <?php include 'header.php'; ?> 

    <div id="menubody" onclick="favorites(event.target)">

        <div class="menu_items"><img src="user/assets/img/image.jpg" alt="" width="100%" height="100%" class="menu_img">
            <div class="descr_and_add">
                <img src="user/assets/img/favourite.png" class="favrs" alt="" title="remove from favourite">
                <img src="user/assets/img/love.png" class="favs" alt="" title="add to favourite">
                <img src="user/assets/img/add.png" alt="" class="icons">
                <div class="description">
                    <span class="names"> Signal</span>
                    <br>
                    <p class="ingred">Our Recommended World Wide Teeth Brushs</p>
                    <span class="prices">Price : 20$</span>
                </div>
            </div>

        </div>


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
<?php //include 'header.php'; ?>
<?php 
// $sql = "SELECT * FROM products ORDER BY product_id DESC";
// $res = mysqli_query($conn, $sql);

// if (mysqli_num_rows($res) > 0) {
//     while ($row = mysqli_fetch_assoc($res)) {
//         echo '<div id="menu_items" onclick="favorites(event.target)">
//         <div class="menu_items">
//             <img src="' . $row["image"] . '" alt="" width="100%" height="100%" class="menu_img">
//             <div class="descr_and_add">
//                 <img src="user/assets/img/favourite.png" class="favrs" alt="" title="remove from favorite">
//                 <img src="user/assets/img/love.png" class="favs" alt="" title="add to favorite">
//                 <img src="user/assets/img/add.png" alt="" class="icons">
//                 <div class="description">
//                     <span class="names">' . $row["name"] . '</span><br>
//                     <p class="ingred">' . $row["description"] . '</p>
//                     <span class="prices">Price: ' . $row["price"] . ' $</span>
//                 </div>
//             </div>
//         </div>
//     </div>';
//     }
// }
?>

    
    <!-- <div class="menu_items"><img src="user/assets/img/electronic.jpg" alt="" width="100%" height="100%" class="menu_img">
        <div class="descr_and_add">
            <img src="user/assets/img/favourite.png" class="favrs" alt=""title="remove from favourite">
            <img src="user/assets/img/love.png" class="favs" alt=""title="add to favourite">
            <img src="user/assets/img/add.png" alt="" 
            class="icons">
       <div class="description">
        <span class="names">Oral B </span>
        <br>
        <p class="ingred">Our Recommended World Wide Teeth Brushs </p>
        <span class="prices">Price : 24$</span>
       </div></div></div>
    
    
    
    <div class="menu_items">
        
        <img src="user/assets/img/babies.webp" alt="" width="100%" height="100%" class="menu_img">  <div class="descr_and_add">
            <img src="user/assets/img/favourite.png" class="favrs" alt=""title="remove from favourite">
             <img src="user/assets/img/love.png" class="favs" alt=""title="add to favourite">
            <img src="user/assets/img/add.png" alt="" 
        class="icons">
    <div class="description">
        <span class="names">Oral B</span>
        <br>
        <p class="ingred">Our Recommended World Wide Teeth Brushs </p>
        <span class="prices">Price : 20$</span>
    </div></div></div>
    <div class="menu_items">
       
        <img src="user/assets/img/teeth.jpg" alt="" width="100%" height="100%" class="menu_img">  <div class="descr_and_add">
            <img src="user/assets/img/favourite.png" class="favrs" alt=""title="remove from favourite">
            <img src="user/assets/img/love.png" class="favs" alt=""title="add to favourite">
            <img src="user/assets/img/add.png" alt="" 
        class="icons">
    <div class="description"> 
        <span class="names">Oral B</span>
        <br>
        <p class="ingred">Our Recommended World Wide Teeth Brushs</p>
        <span class="prices">Price : 24$</span>
       </div></div></div>
    <div class="menu_items">
        
        <img src="user/assets/img/doctor.webp" alt="" width="100%" height="100%" class="menu_img">  <div class="descr_and_add">
            <img src="user/assets/img/favourite.png" class="favrs" alt=""title="remove from favourite">
            <img src="user/assets/img/love.png" class="favs" alt=""title="add to favourite">
            <img src="user/assets/img/add.png" alt="" 
        class="icons">
    <div class="description"> 
        <span class="names" > Oral B</span>
        <br>
        <p class="ingred">Our Recommended World Wide Teeth Brushs </p>
        <span class="prices">Price : 200$</span>
       </div></div></div>
       <div class="menu_items">
       
        <img src="user/assets/img/kids.jpg" alt="" width="100%" height="100%" class="menu_img">  <div class="descr_and_add">
            <img src="user/assets/img/favourite.png" class="favrs" alt=""title="remove from favourite">
            <img src="user/assets/img/love.png" class="favs" alt=""title="add to favourite">
            <img src="user/assets/img/add.png" alt="" 
        class="icons">
    <div class="description">
        <span  class="names">Oral B</span>
        <br>
        <p class="ingred">Our Recommended World Wide Teeth Brushs </p>
        <span class="prices">Price : 20$</span>
       </div></div></div>
       <div class="menu_items">
        
        <img src="user/assets/img/oral.jpg" alt="" width="100%" height="100%" class="menu_img">  <div class="descr_and_add">
            <img src="user/assets/img/favourite.png" class="favrs" alt=""title="remove from favourite">
            <img src="user/assets/img/love.png" class="favs" alt=""title="add to favourite">
            <img src="user/assets/img/add.png" alt="" 
        class="icons">
    <div class="description">
        <span  class="names">Oral B</span>
        <br>
        <p class="ingred">Our Recommended World Wide Teeth Brushs </p>
        <span class="prices">Price : 20$</span>
       </div></div></div>
       <div class="menu_items">
       
        <img src="user/assets/img/sens.jpg" alt="" width="100%" height="100%" class="menu_img">  <div class="descr_and_add">
            <img src="user/assets/img/favourite.png" class="favrs" alt=""title="remove from favourite">
            <img src="user/assets/img/love.png" class="favs" alt=""title="add to favourite">
            <img src="user/assets/img/add.png" alt="" 
        class="icons">
    <div class="description"> 
        <span  class="names">Sensodyne</span>
        <br>
        <p class="ingred">Our Recommended World Wide Teeth Brushs </p>
        <span class="prices">Price : 20$</span>
       </div></div></div>
  
       
       <?php 
    
?> -->
<?php include 'footer.php'; ?>





</body>

</html>