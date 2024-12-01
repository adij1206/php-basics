<?php

 /*
              Scopes
         */
        echo "</br>";
        $globalTest = "Aditya";
        
        // There are different ways to use the global variable inside the function
        // 1.
        function test() {
           global $globalTest;

           echo "Hi@" . $globalTest;
        }

        // 2.
        function test1() {
           echo "Hi !" . $GLOBALS["globalTest"];
        }
        // 3. Recommended
        function test2($globalTest) {
           echo "HI -" . $globalTest;
        }

        test();
        echo "</br>";
        test1();
        echo "</br>";
        test2($globalTest);

        
        // static
        function test3() {
           static $a;

           $a++;

           return $a;
        }

       // If we would not define the variable inside the function and if we run the function 
       // multiple times, we will always get the same value, but since we have used the static keyword
       // if we call it multiple times, the value will get incremented.
        echo test3();
        echo test3();

