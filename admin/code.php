<?php

require '../config/function.php';
if (isset($_POST['saveuser'])) {
    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $address = validate($_POST['address']);
    $mobile = validate($_POST['mobile']);
    $role = validate($_POST['role']);

    if ($name != '' || $email != '' || $address != '' || $mobile != '' || $role) {
        $query = "insert into user(name,address,email,password,mobile,role) 
        values ('$name','$address','$email','$password','$mobile','$role') ";
        $result = mysqli_query($con, $query);


        if ($result) {
            redirect('users.php', 'user addedd successfully');
        } else {
            redirect('user-create.php', 'something went wrong');
        }
    } else {
        redirect('user-create.php', 'please fill all input field');
    }
}

if (isset($_POST['updateuser'])) {
    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $address = validate($_POST['address']);
    $mobile = validate($_POST['mobile']);
    $role = validate($_POST['role']);

    $userid = validate($_POST['userid']);
    $user = getbyid('user', $userid);

    if ($user['status'] != 200) {
        redirect('user-edit.php?id=' . $userid, 'no such id found ');
    }



    if ($name != '' || $email != '' || $address != '' || $mobile != '' || $role) {
        // Assuming you have a user ID available in $_POST['user_id'], adjust as needed
        $user_id = validate($_POST['userid']);
        $query = "UPDATE user SET 
                   name='$name', 
                   address='$address', 
                   email='$email', 
                   password='$password', 
                   mobile='$mobile', 
                   role='$role' 
                   WHERE id = '$user_id'";


        $result = mysqli_query($con, $query);

        if ($result) {
            redirect('user-edit.php?id=' . $userid, 'user updated successfully');
        } else {
            redirect('user-edit.php', 'something went wrong');
        }
    } else {
        redirect('user-edit.php', 'please fill all input field');
    }
}




if (isset($_POST['saveproduct'])) {

    $name = validate($_POST['name']);
    $price = validate($_POST['price']);
    $category = validate($_POST['category']);
    $quantity = validate($_POST['quantity']);
    $size = validate($_POST['size']);
    $brand = validate($_POST['brand']);
    $description = validate($_POST['description']);

    $image = validate($_POST['image']);
    if ($_FILES['image']['size'] > 0) {
        $image = $_FILES['image']['name'];
        $path = "../uploades/";
        $imgext = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time() . '.' . $imgext;
        $fileimage = 'uploades/' . $filename;
    } else {
        $fileimage = NULL;
    }

    if ($name != '' || $price != '' || $category != '' || $quantity != '' || $size != '' || $brand != '') {
        $query = "INSERT INTO products(name, price, quantity, size, brand, description,image) 
          VALUES ('$name', '$price', '$quantity', '$size', '$brand', '$description','$image') ";

        $result = mysqli_query($con, $query);

        if ($result) {
            move_uploaded_file($_FILES['image']['tmp_name'], $path . $filename);
            redirect('products.php', 'Product added successfully');
        } else {
            redirect('product-create.php', 'Something went wrong');
        }
    } else {
        redirect('product-create.php', 'Please fill all input fields');
    }
}


//------------------------------------------------------------
if (isset($_POST['updateproduct'])) {

    $id = validate($_POST['id']);
    $name = validate($_POST['name']);
    $price = validate($_POST['price']);
    $quantity = validate($_POST['quantity']);
    $size = validate($_POST['size']);
    $brand = validate($_POST['brand']);
    $description = validate($_POST['description']);



    $productid = validate($_POST['userid']);
    $product = getbyid('products', $productid);

    if ($name != '' || $price != '' || $quantity != '' || $size != '' || $brand != '') {
        $query = "UPDATE `products` SET 
        `name` = '$name', 
        `price` = '$price', 
        `quantity` = '$quantity', 
        `size` = '$size', 
        `brand` = '$brand', 
        `description` = '$description' 
        WHERE `id` = '$productid'";


        $result = mysqli_query($con, $query);

        if ($result) {
            redirect('products.php', 'Product updated successfully');
        } else {
            redirect('edit-product.php?id=' . $id, 'Something went wrong');
        }
    } else {
        redirect('edit-product.php?id=' . $id, 'Please fill all input fields');
    }
}
