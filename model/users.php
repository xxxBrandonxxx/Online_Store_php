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

    





    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}