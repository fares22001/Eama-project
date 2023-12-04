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
        $selectedCategory = $_POST['pcategory'];
        $data = [
           
            'pname' => trim($_POST['pname']),
            'pquantity' => trim($_POST['pquantity']),
            'pdescription' => trim($_POST['pdescription']),
            'pbrand' => trim($_POST['pbrand']),
            'pcategory' => trim($_POST['pcategory']),
            'pprice' => trim($_POST['pprice']),
            'psize' => trim($_POST['psize']),
            'pimage' => trim($_POST['pimage'])
        ];
        if (
            empty($data['pname']) || empty($data['pquantity']) || empty($data['pdescription']) || empty($data['pbrand']) ||
            empty($data['pcategory']) || empty($data['pprice']) || empty($data['psize'])
        ) {
            flash("addproducts", "please fill out all inputs");
            redirect("../admin/product-create.php");
        }
        if ($data['pquantity'] > 50) {
            flash("addproducts", "Max 10 products");
            redirect("../admin/product-create.php");
        }
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


class ProductController
{
    private $productModel;

    public function __construct()
    {
        require_once '../controllers/products-controller.php';
        $this->productModel = new ProductModel();
    }

    public function getAllProducts()
    {
        $products = $this->productModel->getAllProducts();

        if ($products) {
            require_once('ProductView.php');
            ProductView::showProducts($products);
        } else {
            echo 'Error retrieving products.';
        }
    }
}
