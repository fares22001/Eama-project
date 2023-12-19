<?php
require_once('../libraries/Database.php');
require_once("../models/model.php");

class Cart extends Model
{
    protected $id;
    protected $Usersid;
    public $productsQuantity;

    public function __construct($id = null, $Usersid = "")
    {
        $this->id = $id;
        $this->db = $this->connect();
        $this->Usersid = $Usersid;
    }

    public function addcart($data)
    {
        $this->db->query('INSERT INTO cart(UsersUid)
        VALUES( :UsersUid)');
        $this->db->bind(':UsersUid', $data['UsersUid']);

        if ($this->db->execute()) {
            return true;
        } else {

            return false;
        }
    }
    public function productExists($productId)
    {
        $this->db->query('SELECT id FROM products WHERE id = :productId');
        $this->db->bind(':productId', $productId);
        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }


    // In your model
    public function addProductToCart($cartId, $productId)
    {
        $this->db->query('INSERT INTO cart_product(cart_id, id) VALUES(:cartId, :productId)');
        $this->db->bind(':cartId', $cartId);
        $this->db->bind(':productId', $productId);

        return $this->db->execute();
    }


    public function getCartId($userid)
    {
        $this->db->query('SELECT * FROM cart where UsersUid=:UsersUid');
        $this->db->bind(':UsersUid', $userid);
        $row = $this->db->single();
        return $row;
    }
    public function checkcart($userid)
    {
        $this->db->query('SELECT * FROM cart where UsersUid=:userid');
        $this->db->bind(':userid', $userid);
        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }

    // public function delete($data)
    // {
    //     $sql = "DELETE FROM cart WHERE id=$this->id;";
    //     $this->db->query($sql);
    //     $this->db->bind(':id', $this->id);
    //     if ($this->db->execute()) {
    //         echo "deleted successfully.";
    //     } else {
    //         echo "ERROR: Could not able to execute" . $this->db->error();
    //     }
    // }

    public function DeleteCartProduct($cartId, $productId)
    {
        $this->db->query('DELETE FROM cart_product WHERE cart_id = :cartId AND id = :productId');
        $this->db->bind(':cartId', $cartId);
        $this->db->bind(':productId', $productId);

        return $this->db->execute();
    }

    public function getCartProductsByUserId($data)
    {
        $this->db->query('SELECT products.id, products.Pname,products.pdescription,products.pbrand,products.pprice ,products.pimage,products.comp_discount,products.regular_discount,cart_product.cart_id
        FROM users
        JOIN cart ON users.UsersUid = cart.UsersUid
        JOIN cart_product ON cart.cart_id = cart_product.cart_id
        JOIN products ON cart_product.id = products.id
        WHERE users.UsersUid = :userId');
        $this->db->bind(':userId', $data);
        $this->db->execute();

        if ($this->db->rowCount() > 0) {
            return $this->db->resultSet();
        } else {
            // Print SQL errors
            print_r($this->db->errorInfo());
            return false;
        }
    }
}
