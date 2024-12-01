<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST["username"];
    $pwd = $_POST["pwd"];

    require_once "../Classes/Dbh.php";
    require_once "../Classes/Signup.php";

    $signUpUSer = new Signup($userName, $pwd, "localhost", "practice", "root", "");
    $signUpUSer->signupUser();

}