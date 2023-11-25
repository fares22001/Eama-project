<?php
require_once '../models/cart-model.php';
require_once '../helpers/session-helper.php';

class Carts{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new cart();
    }

    public function orders(){

    }
}
$init = new Carts;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    switch ($_POST['type']) {
        case 'orders':
            $init->orders();
            break;
    }
}

?>