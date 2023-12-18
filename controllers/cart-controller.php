<?php
require_once '../models/cart-model.php';
require_once '../helpers/session-helper.php';

class CartController
{
    private $cart;

    public function __construct()
    {
        $this->cart = new Cart();
    }

    public function orders()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
            'id' => trim($_POST['id']),
            'Usersid' => trim($_POST['Usersid']),
        ];
    }

    public function displayCart($userId)
    {
       // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    //     $data = [
    //         'UsersUid' => trim($_POST['UsersUid']),
    // //        'id' => trim($_POST['id'])
    //     ];
    //     $userId = $data['UsersUid'];
    //    // $productId = trim($_POST['id']);
       return $this->cart->getCartProductsByUserId($userId);
        
    }



    public function AddProductToCart($data)
    {
    }


    public function addcart()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Init data
        $data = [
            'UsersUid' => trim($_POST['UsersUid']),
            'id' => trim($_POST['id'])
        ];
        $userId = $data['UsersUid'];
        $productId = trim($_POST['id']);


        // Check if the user has a cart
        if ($cartData = $this->cart->checkcart($userId)) {
            if ($this->cart->productExists($productId)) {
                if ($this->cart->addProductToCart($cartData->cart_id, $productId)) {
                    redirec_t('../views/products.php', 'Added to cart.');
                } else {
                    redirec_t('../views/products.php', 'Something went wrong while adding the product to cart.');
                }
            } else {
                redirec_t('../views/products.php', 'The selected product does not exist.');
            }
        } else {
            // User does not have a cart, create a new cart and add the product
            $cartId = $this->cart->addcart($data);
            // Check if the cart creation was successful
            if ($cartId) {
                sleep(1);

                if ($this->cart->productExists($productId)) {
                    if ($this->cart->addProductToCart($cartId, $productId)) {
                        redirec_t('../views/products.php', 'Added to cart.');
                    } else {
                        redirec_t('../views/products.php', 'Something went wrong while adding the product to cart.');
                    }
                } else {
                    redirec_t('../views/products.php', 'Something went wrong while creating a new cart.');
                }
            } else {
                redirec_t('../views/products.php', 'Something went wrong while creating a new cart.');
            }
        }
    }


    // public function addcart()
    // {
    //     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    //     // Init data
    //     $data = [
    //         'UsersUid' => trim($_POST['UsersUid']),
    //         'id' => trim($_POST['id'])
    //     ];
    //     $userId = $data['UsersUid'];

    //     if ($this->cart->checkcart($userId)) {
    //         redirec_t('../views/products.php', 'You already have a cart.');
    //     } else {
    //         // return $this->AddProductToCart($data);
    //         if ($this->cart->addcart($data)) {
    //             redirec_t('../views/products.php', 'Added to cart.');
    //         } else {
    //             redirec_t('../views/products.php', 'Something went wrong.');
    //         }
    //     }
    // }

}
$init = new CartController;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    switch ($_POST['type']) {
        case 'addtocart':
            $init->addcart();
            break;
    }
}
