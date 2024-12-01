<?php 
// we don't need to close the file with angular bracket 
//as this file will contain complete PHP Code only.


//var_dump($_SERVER["REQUEST_METHOD"])

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // htmlspecialchars() : this method is used to detect if any code has been enter 
    // in the field which can break our system. There is another method for the same 
    //usecase htmlentities()
    $firstName  = htmlspecialchars($_POST["firstName"]);
    $lastName  = htmlspecialchars($_POST["lastName"]);
    $favouritePet  = htmlspecialchars($_POST["favouritePet"]);

    // To check if values are empty or not. 
    // There is another way to do it like put required field in html or css file
    // But it is not recommended as it can be changed but insepcting the page
    if (empty($firstName)) {
        exit();
        header("Location: ../index.php");
    }
    
    echo "The details which we have received in the form are : ";
    echo "<br>";
    echo $firstName;
    echo "<br>";
    echo $lastName;
    echo "<br>";
    echo $favouritePet;

    // This line whill take us to the page index.php
    header("Location: ../index.php");
} else {
    header("Location: ../index.php");
}