<?php
require_once '../libraries/Database.php';
class product
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function addproducts($data, $imagePath)
    {
        $this->db->query('INSERT INTO products (pname,pquantity,pdescription,pbrand,pcategory,pprice,psize,pimage)
        VALUES(:name,:quantity,:description,:brand,:category,:price,:size,:pimage)');
        $this->db->bind(':name', $data['pname']);
        $this->db->bind(':quantity', $data['pquantity']);
        $this->db->bind(':description', $data['pdescription']);
        $this->db->bind(':brand', $data['pbrand']);
        $this->db->bind(':category', $data['pcategory']);
        $this->db->bind(':price', $data['pprice']);
        $this->db->bind(':size', $data['psize']);
        $this->db->bind(':pimage', $imagePath);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function editProduct($data)
    {
        $this->db->query('UPDATE products SET pname = :name, pquantity = :quantity, pdescription = :description, pbrand = :brand, pcategory = :category, pprice = :price, psize = :size WHERE id = :product_id');
        $this->db->bind(':product_id', $data['product_id']);
        $this->db->bind(':name', $data['pname']);
        $this->db->bind(':quantity', $data['pquantity']);
        $this->db->bind(':description', $data['pdescription']);
        $this->db->bind(':brand', $data['pbrand']);
        $this->db->bind(':category', $data['pcategory']);
        $this->db->bind(':price', $data['pprice']);
        $this->db->bind(':size', $data['psize']);

        return $this->db->execute();
    }
    public function getProductDetailsById($product_id)
    {
        $this->db->query('SELECT * FROM products WHERE id=:id');
        $this->db->bind(':id', $product_id);
        $row = $this->db->single();
        return $row;
    }

    public function deleteProduct($product_id)
    {
        $this->db->query('DELETE FROM products WHERE id = :product_id');
        $this->db->bind(':product_id', $product_id);

        return $this->db->execute();
    }
    public function getAllProducts()
    {
        try {
            $this->db->query('SELECT * FROM products');
            return $this->db->resultSet(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }
}
