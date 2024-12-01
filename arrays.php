<?php

        /*
            Arrays 
        */

        // Ways to declare arrays
        $fruits = array("Mango", "Banana", "Apple");
        $fruits1 = ["Mango", "Apple", "Orange"];

        echo $fruits[1];

        // Add element in the array,. it will add at the end
        $fruits[] = "Orange";
        echo $fruits[3];

        array_push($fruits, "Guava"); // This method only work on index array not on associative array
        print_r($fruits);

        // Delete elemet from array
        unset($fruits[1]);
        echo $fruits[1]; // After unsetting the element if we try to access it , it will give error
                         // as it is not updating the array
        
        // Another way , params : 1. array variable, 2. from which index we need to remove the element
        // 3. how many elements needs to be removed
        array_splice($fruits, 1, 1);
        echo "Fruits" . $fruits[1];
        echo "</br>";

        // Another way to add element in the array, Here in the 3rd params we mentioned 0 as element to be removed
        // So it will add the element after the index we have mentioned in the 2nd param
        array_splice($fruits, 2, 0, "Papaya");
        print_r($fruits);
        echo "</br";

        
        // We can even add the complete array
        array_splice($fruits, 3, 0, $fruits1);
        print_r($fruits);
        echo "</br>";


        // Associative Arrays : instead of integer index , we can define the key (index) for a value
        $tasks = [
            "backend" => "Aditya",
            "machineLearning" => "Abhigyan",
            "frontend" => "Satyam"
        ];

        echo $tasks["machineLearning"];
        print_r($tasks);

        echo count($tasks);
        sort($tasks);
        echo "</br>";
        print_r($tasks);

        // To add element in the associative array
        $tasks["devops"] = "Manish"; // Here devops is the key 
        echo "</br>";
        print_r($tasks);

        // Multi-dimensional array
        $notes = [
            ["Chemistry", "Physics"],
            "Maths",
            array("Hindi", "Sanskrit")
        ];
        echo $notes[0][1];
        echo "</br>";

        // Multi-Dimensional Associative array
        $notes = [
            "Science" => ["Chemistry", "Physics"],
            "Literature" => array("hindi" => "Hindi"),
            "Maths"
        ];
        // Here we can define the Multi-Dimensional array as combination of index and associative array.
        print_r($notes);
        echo "</br>";
        echo $notes["Science"][0];
        echo "</br>";
        echo $notes["Literature"]["hindi"];


