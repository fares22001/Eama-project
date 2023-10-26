<?php include('includes/header.php'); ?>


<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    user list
                    <a href="user-create.php" class="btn btn-primary float-end">Add user</a>
                </h4>
            </div>
            <div class="card-body">
                <?= alertmessage() ?>

                <table class="table table-borderedo table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>email</th>
                            <th>address</th>
                            <th>role</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?PHP
                        $users = getall('user');

                        if (mysqli_num_rows($users) > 0) {


                            foreach ($users as $userItem) {
                        ?>
                                <tr>
                                    <td><?= $userItem['id']; ?></td>
                                    <td><?= $userItem['name']; ?></td>
                                    <td><?= $userItem['email']; ?></td>
                                    <td><?= $userItem['address']; ?></td>
                                    <td><?= $userItem['role']; ?></td>
                                    <td>
                                        <a class="btn btn-success btn-sm" href="user-edit.php?id=<?= $userItem['id']; ?>">edit</a>
                                        <a class="btn btn-danger btn-sm" href="user-delete.php?id=<?= $userItem['id']; ?>" onclick="return confirm('are you want to delete data ')">

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