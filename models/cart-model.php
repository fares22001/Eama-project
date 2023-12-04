<?php 
require_once ('../libraries/Database.php');
require_once ("../models/model.php");

class Cart extends Model{
    private $id;
    private $user_id;

    public function __construct($id,$user_id="")
    {
        $this->id = $id;
        $this->db = $this->connect();
        $this->user_id=$user_id;
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

    public function delete($data){
        $sql="delete from cart where id=$this->id;";
	  if($this->db->query($sql) === true){
      echo "deletet successfully.";
    } else{
    //   echo "ERROR: Could not able to execute $sql. " . $conn->error;
    }
    }

    public function checkout($data){

    }
}

class CartModel {
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function getAllCarts() {
        try {
            $this->db->query('SELECT * FROM cart');
            return $this->db->resultSet();
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>