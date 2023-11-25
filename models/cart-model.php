<?php 
require_once '../libraries/Database.php';

class Cart{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    
}

?>