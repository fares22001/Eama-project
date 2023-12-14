<?php
include_once '../helpers/session-helper.php';
include('admin-header.php');
include_once('../models/products-model.php');
include_once('../controllers/products-controller.php');
$init=new Users();
$productId = isset($_GET['id']) ? $_GET['id'] : '';
$pname = isset($_GET['name']) ? $_GET['name'] : '';
$product = isset($_GET['email']) ? $_GET['email'] : '';
$product = isset($_GET['role']) ? $_GET['role'] : '';
// Assuming you have the product data for editing, you can retrieve it here
// For example, if you have a product ID in the URL, you can fetch the product details from the database
// Assuming you have a product ID in the URL
 $productDetails = getProductDetailsById($productId); // You need to implement this function

?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Edit Product
                    <a href="products.php" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <?php flash('editproduct') ?>
                <form action="../controllers/products-controller.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="type" value="editproduct">
                    <!-- Assuming you have the product data, you can pre-fill the form fields -->
                    <input type="hidden" name="product_id" value="<?php echo $productDetails['id']; ?>">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="pname" class="form-control" value="<?php echo $productDetails['pname']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Price</label>
                                <input type="text" name="pprice" class="form-control" value="<?php echo $productDetails['pprice']; ?>">
                            </div>
                        </div>
                        <!-- Add similar fields for other product details (category, quantity, size, brand, description) and pre-fill them with the corresponding values -->

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="pimage">Image</label>
                                <input type="file" name="pimage" accept=".jpg, .jpeg, .png" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3 text-end">
                                <br> <button type="submit" name="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('admin-footer.php'); ?>
