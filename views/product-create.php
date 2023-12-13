<?php include('admin-header.php'); 
include_once('../helpers/session-helper.php')
?>


<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    add product
                    <a href="productss.php" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <?php  
            alertmessage()
            
            ?>
            <div class="card-body">
                <form action="../controllers/products-controller.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="type" value="addproducts">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" value="" name="pname" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Quantity</label>
                                <input type="text" value="" name="pquantity" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>description</label>
                                <input type="text" value="" name="pdescription" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>brand</label>
                                <input type="text" value="" name="pbrand" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Select Category</label>
                                <select name="pcategory" class="form-select" id="">
                                    <option value="">Select Category</option>
                                    <option value="toothbrush">Toothbrush</option>
                                    <!-- Add more  options as needed -->
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Size</label>
                                <input type="text" value="" name="psize" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Price</label>
                                <input type="text" value="" name="pprice" class="form-control">
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="mb-3">
                                <label>Reseller Price</label>
                                <input type="text" value="" name="reseller_price" class="form-control">
                            </div>
                        </div> -->





                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Image</label>
                                <input type="file" name="pimage	" multiple class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3 text-end">
                                <br> <button type="submit" name="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>

</div>


<?php include('admin-footer.php'); ?>