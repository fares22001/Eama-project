<?php include('includes/header.php'); ?>


<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Add user
                    <a href="users.php" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>name</label>
                                <input type="text" name=username class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>email</label>
                                <input type="email" name=username class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>password</label>
                                <input type="password" name=password class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>confirm password</label>
                                <input type="confirmpassword" name=confirmpassword class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>address</label>
                                <input type="text" name=username class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>phone number</label>
                                <input type="text" name=username class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>select role </label>
                                <select name="role" class="form-select" id="">
                                    <option value="">Select Role</option>
                                    <option value="">Regular Customr</option>
                                    <option value="">Reseller</option>
                                    <option value="">Phrmacy</option>
                                </select>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="mb-3 text-end">
                                <br> <button class="btn btn-primary">save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>


<?php include('includes/footer.php'); ?>