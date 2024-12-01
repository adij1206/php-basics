<?php

class Dbh {
    private $host;
    private $dbName;
    private $dbUserName;
    private $dbPassword;

    public function __construct($host, $dbName, $dbUserName, $dbPassword)
    {
        $this->host = $host;
        $this->dbName = $dbName;
        $this->dbUserName = $dbUserName;
        $this->dbPassword = $dbPassword;
    }

    protected function connect() {
        try {
            $connection = "mysql:host=" . $this->host . ";port=3307;dbname=" . $this->dbName;
            $pdo = new PDO($connection, $this->dbUserName, $this->dbPassword);

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Connection Failed" . $e->getMessage());
        }

    }
}