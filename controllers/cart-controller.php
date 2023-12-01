<?php
require_once '../models/cart-model.php';
require_once '../helpers/session-helper.php';

class CartController{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new cart();
    }

    public function orders(){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
            'id' => trim($_POST['id']),
            'user_id' => trim($_POST['user_id']),
        ];
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