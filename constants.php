<?php

 /*
                CONSTANTS
         */

         define("PI", 3.14);
         define("NAME", "Aditya");
         
         function test4() {
            // For constant we don't need to define the global.
            // We can directly use the constant anywhere in the file
            echo NAME;
         }

         test4();
