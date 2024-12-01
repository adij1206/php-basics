<?php

class Signup extends Dbh{
    private $userName;
    private $pwd;
    
    public function __construct($userName, $pwd, $host, $dbName, $dbUserName, $dbPassword) 
    {
        parent::__construct($host, $dbName, $dbUserName, $dbPassword);
        $this->userName = $userName;
        $this->pwd = $pwd;
    }

    private function insertUser() {
        try {
            $query = "INSERT INTO users (username, pwd) VALUES (:username, :pwd);";

            $stmt = parent::connect()->prepare($query);
            $stmt->bindParam(":username", $this->userName);
            $stmt->bindParam(":pwd", $this->pwd);

            $stmt->execute();
        } catch(PDOException $e) {
            die("Query failed " . $e->getMessage());
        }
    }

    private function isEmptySubmit() {
        if (isset($this->userName) && isset($this->pwd)) {
            return false;
        } else {
            return true;
        }
    }

    public function signupUser() {
        $check = $this->isEmptySubmit();

        if ($check) {
            header("Location: " . $_SERVER["DOCUMENT_ROOT"] . "/index.php");

            die();
        }

        $this->insertUser();
    }

}