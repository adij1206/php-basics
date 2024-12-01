<?php

/*
            Operators
        */

        // String operator
        $a = "Aditya";
        $b = "Jain";
        $c = $a . " " . $b;
        echo $c;

        // Comparison Operator
        $a = 2;
        $b = "2";

        // Here the if condition will print the statement as in PHP when we use 
        // == operator it only checks the value not the datatypes
        if ($a == $b) {
            echo "This is true statement";
        }

        // When we used === opertaor, now it will also match the datatypes.
        if ($a===$b) {
            echo "This is the true statement";
        }

        // This will check for datatype and value to be not equal
        if ($a!==$b) {
            echo "This is the true statement";
        }

        // Logical OPerator

        $c = 3;
        $d = 4;

        if ($a==$b or $c!=$d) {
            echo "This is true statement";
        }

        if ($a==$b and $c!=$d) {
            echo "This is true statement";
        }
