<?php 
require_once ('../libraries/Database.php');
require_once ("../models/model.php");

class Cart extends Model{
    protected $id;
    protected $Usersid;
    public $productsQuantity;

    public function __construct($id=null,$Usersid="")
    {
        $this->id = $id;
        $this->db = $this->connect();
        $this->Usersid=$Usersid;
    }

    public function addProductToCart($productId, $quantity)
    {
        // Assuming you have a table named 'cart_products' to store products in the cart
        $this->db->query('INSERT INTO cart(cart_id, id, quantity)
        VALUES(:cart_id, :id, :quantity)');
        $this->db->bind(':cart_id', $this->id); // Assuming you have a cart_id in your cart table
        $this->db->bind(':id', $productId);
        $this->db->bind(':quantity', $quantity);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getTotalQuantity()
    {
        return array_sum($this->productsQuantity);
    }

    public function getProductDetailsById($id)
    {
        $this->db->query('SELECT * FROM products WHERE id = :id');
        $this->db->bind(':id', $id);
    
        $result = $this->db->single(); 

        if ($result) {
            return [
                'id' => $result['id'],
                'Pname' => $result['Pname'],
                'pprice' => $result['pprice'],
                'pquantity' => $result['pquantity'],
                'pimage' => $result['pimage'],
            ];
        } else {
            return false; 
        }
    }

    public function getProductPriceById($id){
    $this->db->query('SELECT pprice FROM products WHERE id = :id');
    $this->db->bind(':id', $id);
    
    $result = $this->db->single();

    if ($result) {
        return $result['pprice'];
    } else {
        return false; 
    }
    }

    public function getTotalPrice()
    {
        $totalPrice = 0;

        foreach ($this->productsQuantity as $id => $quantity) {
            $productPrice = $this->getProductPriceById($id);
            $totalPrice += $productPrice * $quantity;
        }

        return $totalPrice;
    }

    

    public function displayCartContent()
    {
        echo "<h2>Shopping Cart</h2>";

        foreach ($this->productsQuantity as $id => $quantity) {
            $productDetails = $this->getProductDetailsById($id);

            echo "<p>{$productDetails['Pname']} - Quantity: $quantity - Price: {$productDetails['pprice']}</p>";
        }

        echo "<p>Total Quantity: {$this->getTotalQuantity()}</p>";
        echo "<p>Total Price: {$this->getTotalPrice()}</p>";
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
    function addProduct($productID,$q){		
		if(array_key_exists((string)$productID,$this->productsQuantity)){
			$this->productsQuantity[(string)$productID] += $q;
		}
		else{
			$this->productsQuantity[(string)$productID] = $q;
		}
	}

	function removeProduct($productID){
		unset($this->productsQuantity[(string)$productID]);
	}
    
    function emptyCart(){
		unset($this->productsQuantity);
		$this->productsQuantity=array();
	}
}

