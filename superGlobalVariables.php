<?php

/*
            Super Global Variables : It can be accessed from anywhere in the code
 */
      echo $_SERVER["DOCUMENT_ROOT"];
      echo "<br>";                  // Code for line break
      echo $_SERVER["PHP_SELF"];
      echo "<br>";                  // Code for line break
      echo $_SERVER["SERVER_NAME"];
      echo "<br>";                  
      echo $_SERVER["REQUEST_METHOD"];

      // Way to get the request params value from the url, Here name is the request params
      echo "<br>";                  
      echo $_GET["name"]; 
      // example url : http://localhost/MyWebsite/index.php?name=Aditya

      // Other way : _REQUEST, it looks for GET, POST and Cookies
      echo "<br>";
      echo $_REQUEST["name"]; 

      // echo $_FILES["name"];    // To Read the files 
      // echo $_COOKIE["name"];   // To get the details or small file of cookies
      // echo $_SESSION["name"];  // To get the details of the session

      // In this way we can store the things inside the session
      $_SESSION["username"] = "Aditya";
      echo $_SESSION["username"];    
      
     