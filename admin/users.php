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
                        <tr>
                            <td>id</td>
                            <td>name</td>
                            <td>email</td>
                            <td>address</td>
                            <td>role</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="user-edit.php">edit</a>
                                <a class="btn btn-danger btn-sm" href="user-delete.php">delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<?php include('includes/footer.php'); ?>