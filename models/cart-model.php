<?php 
require_once ('../libraries/Database.php');
require_once ("../models/model.php");

class Cart extends Model{
    protected $id;
    protected $Usersid;

    public function __construct($id=null,$Usersid="")
    {
        $this->id = $id;
        $this->db = $this->connect();
        $this->Usersid=$Usersid;
    }

    public function addcart($data){
        $this->db->query('INSERT INTO cart(id, Usersid)
        VALUES(:id, :Usersid)');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':Usersid', $data['Usersid']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($data){
        $sql="DELETE FROM cart WHERE id=$this->id;";
        $this->db->query($sql);
        $this->db->bind(':id', $this->id);
	  if($this->db->execute()){
      echo "deleted successfully.";
    } else{
        echo "ERROR: Could not able to execute" . $this->db->error();
    }
    }

    public function checkout($data){

    }

    public function getAllCarts() {
        try {
            $this->db->query('SELECT * FROM cart');
            return $this->db->resultSet();
            return $this->db->result();
        } catch (PDOException $e) {
            return false;
        }
    }
}

