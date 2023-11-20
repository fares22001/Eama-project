<?php include('includes/header.php'); ?>


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
                <?= alertmessage() ?>

                <table class="table table-borderedo table-striped">
                    <thead>
                        <tr>
                            <!-- <th>image</th> -->
                            <th>image</th>
                            <th>name</th>
                            <th>brand</th>
                            <th>price</th>
                            <th>quantity</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?PHP
                        $users = getall('products');

                        if (mysqli_num_rows($users) > 0) {


                            foreach ($users as $userItem) {
                        ?>
                                <tr>
                                    <td><img src="../uploades/1698279757.jpeg" alt=""></td>
                                    <td><?= $userItem['name']; ?></td>
                                    <td><?= $userItem['brand']; ?></td>
                                    <td><?= $userItem['price']; ?></td>
                                    <td><?= $userItem['quantity']; ?></td>


                                    <td>
                                        <a class="btn btn-success btn-sm" href="product-edit.php?id=<?= $userItem['id']; ?>">edit</a>
                                        <a class="btn btn-danger btn-sm" href="product-delete.php?id=<?= $userItem['id']; ?>" onclick="return confirm('are you want to delete data ')">

                                            delete</a>
                                    </td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="7">no record found</td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<?php include('includes/footer.php'); ?>