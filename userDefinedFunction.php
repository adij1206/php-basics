<?php


        /* 
            User defined Functions
         */

         function functionWithoutParamsAndReturn() {
            echo "Hello";
         }
         
         function functionWithoutParams() {
            return "Hello";
         }

         function functionWithParamsnAndReturn($name) {
            return "Hello" . $name;
         }

         function functionWithDefaultValueInParams($name = "Jain") {
            return "Hello" . $name;
         }

         functionWithoutParamsAndReturn();
         echo functionWithoutParams();
         $test = functionWithParamsnAndReturn("Aditya");
         echo $test;

         echo "</br>";
         echo functionWithDefaultValueInParams();
         echo functionWithDefaultValueInParams("Aditya");

         // We can define the datatypes for the function in the params
         // To enable this feature we need to add some line in the top of the file
         /*
            <?php 
            declare(strict_types = 1);
            ?>
         */
         function functionWithDatypeDefinedInParams(string $name) {
            return "Hello" . $name;
         }
         echo functionWithDatypeDefinedInParams("Aditya");
         // echo functionWithDatypeDefinedInParams(true); // This line will give error
