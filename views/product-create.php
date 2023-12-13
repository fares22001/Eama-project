<?php include('admin-header.php'); ?>


<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    add product
                    <a href="productss.php" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="../controllers/products-controller.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" required name="product_id" value="">
                    <input type="hidden" name="type" value="addproduct">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" value="" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Price</label>
                                <input type="text" value="" name="regular_price" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Reseller Price</label>
                                <input type="text" value="" name="reseller_price" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Select Category</label>
                                <select name="category" class="form-select" id="">
                                    <option value="">Select Category</option>
                                    <option value="toothbrush">Toothbrush</option>
                                    <!-- Add more  options as needed -->
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Quantity</label>
                                <input type="text" value="" name="quantity" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Size</label>
                                <input type="text" value="" name="size_name[]" class="form-control">
                            </div>
                        </div>
                      
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Image</label>
                                <input type="file" name="image_url	" multiple class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3 text-end">
                                <br> <button type="submit" name="addproduct" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>

</div>


<?php include('admin-footer.php'); ?>