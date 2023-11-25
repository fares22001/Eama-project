<?php

class ProductView {
    public static function showProducts($products) {
        echo '<h1>Product List</h1>';

        foreach ($products as $product) {
            $pname = isset($product->Pname) ? $product->Pname : 'Unknown Product Name';
            echo '<p> Product Name :' . $product->Pname. '</p>';
            echo '<p> Product Quantity :' . $product->pquantity . '</p>';
            echo '<p> Product Description :' . $product->pdescription . '</p>';
            echo '<p> Product Brand :' . $product->pbrand. '</p>';
            echo '<p> Product Category :' . $product->pcategory . '</p>';
            echo '<p> Product Price :' . $product->pprice . '</p>';
            echo '<p> Product Size :' . $product->psize . '</p>';
            echo '<p> Product image :' . $product->pimage. '</p>';





        }
    }
}

?>

