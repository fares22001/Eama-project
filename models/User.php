<?php
require_once '../libraries/Database.php';

class User {

    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    //Find user by email or username
    public function findUserByEmailOrUsername($email, $username){
        $this->db->query('SELECT * FROM users WHERE UsersUid = :username OR UsersEmail = :email');
        $this->db->bind(':username', $username);
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        //Check row
        if($this->db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }
    }

    //Register User
    public function register($data){
        $this->db->query('INSERT INTO users (UsersName, UsersEmail, UsersUid, UsersPwd,UsersRole) 
        VALUES (:name, :email, :Uid, :password,:role)');
        //Bind values
        $this->db->bind(':name', $data['UsersName']);
        $this->db->bind(':email', $data['UsersEmail']);
        $this->db->bind(':Uid', $data['UsersUid']);
        $this->db->bind(':password', $data['UsersPwd']);
        $this->db->bind(':role', $data['UsersRole']);


        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    //Login user
    public function login($nameOrEmail, $password){
        $row = $this->findUserByEmailOrUsername($nameOrEmail, $nameOrEmail);

        if($row == false) return false;

        $hashedPassword = $row->usersPwd;
        if(password_verify($password, $hashedPassword)){
            return $row;
        }else{
            return false;
        }
    }

    //Reset Password
    // public function resetPassword($newPwdHash, $tokenEmail){
    //     $this->db->query('UPDATE users SET usersPwd=:pwd WHERE usersEmail=:email');
    //     $this->db->bind(':pwd', $newPwdHash);
    //     $this->db->bind(':email', $tokenEmail);

    //     //Execute
    //     if($this->db->execute()){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }
}