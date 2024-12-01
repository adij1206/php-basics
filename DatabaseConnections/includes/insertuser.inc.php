<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $pwd = $_POST["password"];
    $email = $_POST["email"];

    try {

        require_once "dbh.inc.php";

        // Passing variables in the statement can be done in 2 ways.
        // 1. by having ? in the insert statement and 
        // then pass those values in execute function
       
        // $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";

        // $stmt = $pdo->prepare($query);
        
       
        // $stmt->execute([$username, $pwd, $email]);

        // 2. instead of adding ?, we will use :<fieldname> 
        // and then using bindParam method, we will map the fields.
        $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":email", $email);
        $stmt->execute();


        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        //exit(); - Use exit when there is no connection involved, 
        // if there are connection then use die
        die();
    } catch (PDOException $e) {
         die("Query failed " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}