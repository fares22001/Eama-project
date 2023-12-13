<?php
require_once '../libraries/Database.php';
class product
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function addproducts($data,$imagePath)
    {
        $this->db->query('INSERT INTO products (pname,pquantity,pdescription,pbrand,pcategory,pprice,psize,pimage)
        VALUES(:pname,:pquantity,:pdescription,:pbrand,:pcategory,:pprice,:psize,:pimage)');
        $this->db->bind(':pname', $data['pname']);
        $this->db->bind(':pquantity', $data['pquantity']);
        $this->db->bind(':pdescription', $data['pdescription']);
        $this->db->bind(':pbrand', $data['pbrand']);
        $this->db->bind(':pcategory', $data['pcategory']);
        $this->db->bind(':pprice', $data['pprice']);
        $this->db->bind(':psize', $data['psize']);
        $this->db->bind(':pimage', $imagePath);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function getAllProducts()
    {
        try {
            $this->db->query('SELECT * FROM products');
            return $this->db->resultSet();
        } catch (PDOException $e) {
            return false;
        }
    }
}
