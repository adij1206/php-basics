<?php 
    declare(strict_types = 1);

    // Implemented Session security in config.php
    require_once 'config.php';

    // session_start();

    // $_SESSION["username"] = "Aditya";

    // // ways to unset the sessions
    // // unset($_SESSION["username"]);

    //  session_unset();
    //  session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="username" placeholder="USername">
        <input type="password" name="pwd" placeholder="Password">
        <button>Sign Up</button>
    </form>

    <!-- <?php 
        //include 'formhandler.php';
         
        // Session
         echo $_SESSION["username"];

         require_once 'Classes/Car.php';

         $car3 = new Car("Audi", "White");
         echo "<br>" . $car3->getColor();
    ?> -->


</body>
</html>