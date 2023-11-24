<?php
require_once '../libraries/Database.php';
class product
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function addproducts($data)
    {
        $this->db->query('INSERT INTO products (pname,pquantity,pdescription,pbrand,pcategory,pprice,psize)
        VALUES(:name,:quantity,:description,:brand,:category,:price,:size)');
        $this->db->bind(':name', $data['pname']);
        $this->db->bind(':quantity', $data['pquantity']);
        $this->db->bind(':description', $data['pdescription']);
        $this->db->bind(':brand', $data['pbrand']);
        $this->db->bind(':category', $data['pcategory']);
        $this->db->bind(':price', $data['pprice']);
        $this->db->bind(':size', $data['psize']);
        // $this->db->bind(':pimage', $data['image']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
