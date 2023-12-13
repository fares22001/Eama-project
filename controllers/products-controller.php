<?php
require_once '../models/products-model.php';
require_once '../helpers/session-helper.php';
class products
{
    private $productModel;
    public function __construct()
    {
        $this->productModel = new product();
    }

    private function saveImage($file)
    {
        // Check if the file is set and not empty
        if (!isset($file) || empty($file)) {
            // File wasn't inputted in the form

            return false;
        }

        $uploadDir = '../public/img/';
        $imageFileType = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        // Generate a unique name for the image
        $imageName = uniqid('image_') . '.' . $imageFileType;
        $targetPath = $uploadDir . $imageName;

        // Create the category subfolder if it doesn't exist
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755);
        }

        // Move the uploaded file to the destination subfolder
        if (move_uploaded_file($file['tmp_name'], $targetPath))
            return $targetPath;
        else
            return false;
    }

    public function addproducts()
    {
        var_dump($_POST);
        var_dump($_FILES);

        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $selectedCategory = $_POST['pcategory'];
        $data = [

            'pname' => trim($_POST['pname']),
            'pquantity' => trim($_POST['pquantity']),
            'pdescription' => trim($_POST['pdescription']),
            'pbrand' => trim($_POST['pbrand']),
            'pcategory' => trim($_POST['pcategory']),
            'pprice' => trim($_POST['pprice']),
            'pprice' => trim($_POST['psize']),
        ];
        echo $data;
        if (
            empty($data['pname']) || empty($data['pquantity']) || empty($data['pdescription']) || empty($data['pbrand']) ||
            empty($data['pcategory']) || empty($data['pprice']) || empty($data['psize'])
        ) {
            redirec_t("../views/product-create.php", "please fill out all inputs");
        }
        if ($data['pquantity'] > 50) {
            redirec_t("../views/product-create.php", "Max 10 products");
        }
        $imagePath = $this->saveImage($_FILES['pimage']);
        if ($this->productModel->addproducts($data, $imagePath)) {
            redirec_t("../views/product-create.php", 'product added ');
        } else {
            die("something went wrong");
        }
    }
    public function getAllProducts()
    {
        return $this->productModel->getAllProducts();
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
