<?php
require_once '../models/cart-model.php';
require_once '../helpers/session-helper.php';

class CartController{
    private $cart;

    public function __construct()
    {
        $this->cart = new Cart();
    }

    public function orders(){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
            'id' => trim($_POST['id']),
            'Usersid' => trim($_POST['Usersid']),
        ];
    }

    public function displayCart() {
        $carts = $this->cart->getAllCarts();
        if (is_array($carts)) {
            include '../views/cart.php';
        } else {
            echo "Error fetching cart data.";
        }
    }

    public function getAllCarts()
    {
        return $this->cart->getAllcarts();
    }
}
$init = new CartController;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    switch ($_POST['type']) {
        case 'orders':
            $init->orders();
            break;
    }
}

    


?>