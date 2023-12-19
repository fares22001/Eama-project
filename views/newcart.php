<?php
include './nheader.php';
?>
<?php
include '../views/header.php';
include_once('../controllers/cart-controller.php');
include_once('../models/cart-model.php');
include_once('../helpers/session-helper.php');
$cartController = new CartController;
$cartmodel = new Cart();
$userId = $_SESSION['UsersUid'];
$carts = $cartController->displayCart($userId);
?>
<br><br><br><br><br>
<section class="h-100 h-custom" style="background-color: #eee;">

    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">

                        <div class="row">
                            <div class="col-lg-7">
                                <h5 class="mb-3"><a href="./products.php" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                                <hr>

                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div>
                                        <p class="mb-1">Shopping cart</p>
                                    </div>
<?alertmessage();?>

                                </div>
                                <?php if (!empty($carts)) : ?>
                                    <?php foreach ($carts as $cart) { ?>

                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex flex-row align-items-center">
                                                        <div>
                                                            <img src="<?php echo $cart->pimage ?>" class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                                        </div>

                                                        <div class="ms-3">
                                                            <label for=""><?php echo $cart->Pname ?></label>

                                                            <p class="small mb-0"><?php echo $cart->pdescription ?></p>
                                                            <p class="small mb-0"><?php echo $cart->pbrand ?></p>
                                                            <p class="small mb-0"><?php echo $cart->cart_id?></p>

                                                        </div>
                                                    </div>
                                                    <div class="d-flex flex-row align-items-center">
                                                        <div style="width: 50px;">
                                                            <form action="/action_page.php">
                                                                <label for="quantity">quantity</label>
                                                                <input type="number" id="quantity" name="quantity" min="1" max="5">
                                                                <input type="submit" class="btn btn-success btn-sm" value="Submit">
                                                            </form>
                                                        </div>
                                                        <div style="width: 80px;">
                                                            <h5 class="mb-0"><?php $cart->pprice; ?></h5>
                                                        </div>
                                                        <form action="../controllers/cart-controller.php" method="post">
                                                            <input type="hidden" name="type" value="DeleteCartProduct">
                                                            <input type="hidden" name="id" value="<?php echo $cart->id ?>">
                                                            <input type="hidden" name="UsersUid" value="<?php echo $userId ?>">
                                                            <input type="hidden" name="cart_id" value="<?php echo $cart->cart_id ?>">

                                                            <button type="submit" name="submit" style="color: #cecece;"><i class="fas fa-trash-alt"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } ?>
                                <?php else : ?>
                                    <p>No items in the cart.</p>

                                <?php endif; ?>
                            </div>
                            <div class="col-lg-5">

                                <div class="card bg-primary text-white rounded-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <h5 class="mb-0">address</h5>
                                        </div>

                                    
                                        <form class="mt-4">
                                            <div class="form-outline form-white mb-4">
                                                <input type="text" id="typeName" class="form-control form-control-lg" siez="17" value="<?php echo$userId; ?>" />
                                                <label class="form-label" for="typeName">address</label>
                                            </div>


                                        </form>

                                        <hr class="my-4">

                                      
                                        <button type="button" class="btn btn-info btn-block btn-lg">
                                            <div class="d-flex justify-content-between">
                                                <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                                            </div>
                                        </button>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>