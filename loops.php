<?php

/*
                Loops
         */

         // For Loop
         for ($i = 0; $i<10;$i++) {
            echo $i . "<br>";
         }

         // While Loop
         $a = 5;
         while ($a <10) {
            echo "Number" . $a . "<br>";
            $a++;
         }

         // DO While Loop
         do {
            echo "Do While Loop <br>";
         } while ($a <10);

         // For Each Loop
         $fruitArray = ["Mango", "Orange", "Apple"];
         foreach ($fruitArray as $fruit) {
            echo "Fruit Name is" . $fruit . "<br>";
         }

         $associativeFruitArray = ["Apple" => "Red", "Orange" => "Orange", "Mango"=>"Yello"];
         foreach ($associativeFruitArray as $fruit => $color) {
            echo "Fruit Name is " . $fruit . " with color " . $color . "<br>";
         }

         // In below scenario it will print the color 
         // as the value of the arrays are color and indexes are the name of the fruits.
         foreach ($associativeFruitArray as $fruit) {
            echo "Fruit Color is" . $fruit . "<br>";
         }