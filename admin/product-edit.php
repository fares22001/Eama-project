<?php include('includes/header.php'); ?>


<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    edit product
                    <a href="products.php" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="code.php" method="post">
                    <?= alertmessage() ?>
                    <?php
                    $paramresult =  checkparamid('id');
                    if (!is_numeric($paramresult)) {
                        echo '<h5>' . $paramresult . '</h5?';
                        return false;
                    }
                    $product = getbyid('products', checkparamid('id'));
                    if ($product['status'] == 200) {
                    ?>
                        <input type="hidden" required name="userid" value="<?= $product['data']['id']; ?>">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>name</label>
                                    <input type="text" value="<?= $product['data']['name']; ?>" name=name class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>price</label>
                                    <input type="text" value="<?= $product['data']['price']; ?>" name=price class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>select category </label>
                                    <select name="category" class="form-select" id="">
                                        <option value="">Select category</option>
                                        <option value="">tooth prush</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>quantity</label>
                                    <input type="text" value="<?= $product['data']['quantity']; ?>" name="quantity" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>size</label>
                                    <input type="text" value="<?= $product['data']['size']; ?>" name="size" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>brand</label>
                                    <input type="text" value="<?= $product['data']['brand']; ?>" name="brand" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>description</label>
                                    <input type="textbox" value="<?= $product['data']['description']; ?>" name="description" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>

                        <?php
                    } else {
                        echo '<h5>' . $product['message'] . '</h5>';
                    }
                        ?>
                        <div class="col-md-6">
                            <div class="mb-3 text-end">
                                <br> <button type="submit" name="updateproduct" class="btn btn-primary">save</button>
                            </div>
                        </div>
                        </div>

                </form>
            </div>
        </div>
    </div>

</div>


<?php include('includes/footer.php'); ?>