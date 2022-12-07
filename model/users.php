<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

include __DIR__ . "/../data/userDAO.php";

class User {

    // ========================= FIELDS =========================

    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $password;
    

    public function __construct($id, $firstname, $lastname, $email, $password,){

        $this->id = $id;
        $this->fname = $firstname;
        $this->lname = $lastname;
        $this->email = $email;
        $this->password = $password;

    }

    // ========================= METHODS =========================

    public static function userRegister() {
        $result = UserDAO::createUser();
        
        if ($result == true) {
            
        echo "New user created successfully";

        header("Location: ../shop.php");
        exit();

        }
    }

    public static function userLogin() {
        $userLogin = UserDAO::fetchLogin();
        
        if ($userLogin == true) {
            
        echo "Matched password, logging in...";

        header("Location: ../shop.php");
        exit();

        }
    }

    public static function userLogout() {
        if(session_destroy()) {
            header("Location: ./login.php");
         }
    }








    // ==================== GETTERS & SETTERS ====================

    




}