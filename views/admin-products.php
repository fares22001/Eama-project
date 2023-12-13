<?php include('admin-header.php'); ?>


<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    products list
                    <a href="product-create.php" class="btn btn-primary float-end">Add product</a>
                </h4>
            </div>
            <div class="card-body">
               

                <table class="table table-borderedo table-striped">
                    <thead>
                        <tr>
                            <!-- <th>image</th> -->
                            <th>image</th>
                            <th>name</th>
                            <th>brand</th>
                            <th>regular price</th>
                            <th>resellerprice</th>
                            <th>quantity</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                                <tr>
                                    <td><img src="../uploades/1698279757.jpeg" alt=""></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>


                                    <td>
                                        <a class="btn btn-success btn-sm" href="product-edit.php">edit</a>
                                        <a class="btn btn-danger btn-sm" href="product-delete.php" onclick="return confirm('are you want to delete data ')">

                                            delete</a>
                                    </td>
                                </tr>
                          
                            <tr>
                                <td colspan="7">no record found</td>
                            </tr>
                        

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<?php include('admin-footer.php'); ?>