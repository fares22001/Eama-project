<?php include('includes/header.php'); ?>


<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    edit user
                    <a href="users.php" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <?= alertmessage(); ?>
                <form action="code.php" method="post">

                    <?php
                    $paramresult =  checkparamid('id');
                    if (!is_numeric($paramresult)) {
                        echo '<h5>' . $paramresult . '</h5?';
                        return false;
                    }
                    $user = getbyid('user', checkparamid('id'));
                    if ($user['status'] == 200) {
                    ?>

                        <input type="hidden" required name="userid" value="<?= $user['data']['id']; ?>">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>name</label>
                                    <input type="text" required name="name" value="<?= $user['data']['name']; ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>email</label>
                                    <input type="email" value="<?= $user['data']['email']; ?>" required name="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>password</label>
                                    <input type="password" value="<?= $user['data']['password']; ?>" required name="password" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>confirm password</label>
                                    <input type="confirmpassword" required value="<?= $user['data']['password']; ?>" name="confirmpassword" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>address</label>
                                    <input type="text" required value="<?= $user['data']['address']; ?>" name="address" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>phone number</label>
                                    <input type="text" required value="<?= $user['data']['mobile']; ?>" name="mobile" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label>select role </label>
                                    <select name="role" required value="<?= $user['data']['role']; ?>" class="form-select" id="">
                                        <option value="">Select Role</option>
                                        <option value="regular">Regular Customr</option>
                                        <option value="reseller">Reseller</option>
                                        <option value="pharmacy">Phrmacy</option>
                                    </select>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="mb-3 text-end">
                                    <br> <button type="submit" name="updateuser" class="btn btn-primary">update</button>
                                </div>
                            </div>
                        </div>

                    <?php
                    } else {
                        echo '<h5>' . $user['message'] . '</h5>';
                    }
                    ?>


                </form>
            </div>
        </div>
    </div>

</div>


<?php include('includes/footer.php'); ?>