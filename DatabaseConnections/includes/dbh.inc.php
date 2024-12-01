<?php

$dsn = "mysql:host=localhost;port=3307;dbname=practice";
$dbUserName = "root";
$dbPassword = "";

try {
    $pdo = new PDO($dsn, $dbUserName, $dbPassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connction Failed" . $e->getMessage();
}