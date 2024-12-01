<?php

$dsn = "mysql:host=localhost;dbName=practice";
$dbUSerName = "root";
$dbPassword = "1234";

try {
    $pdo = new PDO($dsn, $dbUSerName, $dbPassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch ( PDOException $e) {
    echo "COnnection Failed " . $e->getMessage();
}   