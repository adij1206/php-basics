<?php

/*
            Condition and control statement 
*/

        $result = match ($a) {
            1,3,5 => "Odd Number",
            2 => "Even Number",
            default => "Default Value"
       };
       echo $result;

       switch ($a) {
           case 1:
               echo "Hi Aditya";
               break;
           case 2 : 
               echo "Hi Aditya Jain";
               break;
           default:
               echo "Default Value";
               break;
       }
