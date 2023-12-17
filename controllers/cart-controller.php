<?php
require_once '../models/cart-model.php';
require_once '../helpers/session-helper.php';

class CartController{
    private $cart;
    protected $db;
    
    public function __construct()
    {
        $this->cart = new Cart();
        $this->db = new Database();
    }

    public function orders(){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
            'id' => trim($_POST['id']),  
            'Usersid' => trim($_POST['Usersid']),  
        ];
            if ($this->cart->addcart($data)) {
                redirec_t('your_redirect_url', 'Item added to the cart successfully');
            } else {
                
                redirec_t('your_redirect_url', 'Error adding item to the cart');
            }
    }

    public function displayCart() {
        try {
            $this->db->query('SELECT * FROM cart');
            $carts = $this->db->resultSet();
    
            if (is_array($carts)) {
                include '../views/cart.php';
            } else {
                echo "Error fetching cart data.";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function addToCart($productId, $quantity)
    {
        $data = [
            'id' => 1,  // Replace with the actual user ID
            'Usersid' => 'user123',  // Replace with the actual user ID
        ];
        $this->cart->addcart($data);
        $result = $this->cart->addProductToCart($productId, $quantity);

    return $result;
    }

    public function getAllCarts()
    {
        try {
            $this->db->query('SELECT * FROM cart');
            return $this->db->resultSet();
        } catch (PDOException $e) {
            return false;
        }
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

$cartController = new CartController();
$cart = new Cart();


?>