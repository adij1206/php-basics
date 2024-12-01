<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = $_POST["usersearch"];
    
        try {
    
            require_once "includes/dbh.inc.php";
    
            $query = "SELECT * FROM comments WHERE user_id = :usersearch;";
    
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":usersearch", $username);

            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            $pdo = null;
            $stmt = null;
        } catch (PDOException $e) {
             die("Query failed " . $e->getMessage());
        }
    } else {
        header("Location: ../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section>
    <h3>Search Result</h3>
    <?php 
        if (empty($result)) {
            echo "<div>";
            echo "There is no search result";
            echo "</div>";
        } else {
            foreach($result as $row) {
                echo "<div>";
                echo htmlspecialchars($row["comment_text"]);
                echo htmlspecialchars($row["created_at"]);
                echo "</div>";
            }
        }
    ?>
    
</section>
    
</body>
</html>