<?php 
require_once '../libraries/Database.php';

class Cart{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addcart($data){
        $this->db->query('INSERT INTO cart(id, user_id)
        VALUES(:id, :user_id)');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':user_id', $data['user_id']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function remove($data){
        
    }

    public function checkout($data){

    }
}

?>