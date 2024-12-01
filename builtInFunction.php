<?php

        /* 
            Built-in functions 
        */

        // Built in function for string
        $name = "Aditya";
        echo "</br>";
        echo strlen($name);
        
        echo "</br>";
        echo strpos($name, "d");
        
        echo "</br>";
        echo str_replace("a", "a Jain", $name);
        
        echo "</br>";
        echo strtolower($name);

        echo "</br>";
        echo substr($name, 2, 4);
        echo "</br>";
        //echo substr($name, 4 -3);

        // Split String
        echo "</br>";
        print_r(explode(" ", "Aditya Kumar Jain"));

        // Math function
        $number = -5.5;

        echo "</br>";
        echo abs($number);

        echo "</br>";
        echo round($number);
        
        echo "</br>";
        echo pow($number, 3);

        echo "</br>";
        echo sqrt($number);

        
        echo "</br>";
        echo rand(1, 100);

        // Array Function
        $array = [
            "Apple",
            "Banana",
            "Orange"
        ];
        
        echo "</br>";
        print_r(count($array));

        echo "</br>";
        print_r(array_push($array, "Kiwi"));
        
        echo "</br>";
        print_r(array_pop($array));
        
        echo "</br>";
        print_r(array_reverse($array));

        echo "</br>";
        print_r(array_merge($array, ["Kiwi", "Guava"])); // It will add at the end (different from splice)


        // Date Funxtions
        echo "</br>";
        echo date("Y-m-d H-i-s");

        echo "</br>";
        echo time(); // Will give time in milliseconds;

        $date = "2024-12-30 12:00:00";
        echo "</br>";
        echo strtotime($date); // Convert date to milliseconds.


