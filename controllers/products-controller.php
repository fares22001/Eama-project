<?php
require_once '../models/products-model.php';
require_once '../helpers/session-helper.php';
class products
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = new product();
    }
    public function addproducts()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
            'pname' => trim($_POST['pname']),
            'pquantity' => trim($_POST['pquantity']),
            'pdescription' => trim($_POST['pdescription']),
            'pbrand' => trim($_POST['pbrand']),
            'pcategory' => trim($_POST['pcategory']),
            'pprice' => trim($_POST['pprice']),
            'psize' => trim($_POST['psize'])
            // 'pimage' => trim($_POST['image'])
        ];
        if ($this->userModel->addproducts($data)) {
            redirect("../admin/product-create.php");
        } else {
            die("something went wrong");
        }
    }
}
$init = new products;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    switch ($_POST['type']) {
        case 'addproducts':
            $init->addproducts();
            break;
    }
}
