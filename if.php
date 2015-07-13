<?php

 $a = 5;
 $b = 10;
 $c = '10';

 if ($a < $b) {
     // output the appropriate result
     echo "$a is less than $b\n";
 }

 if ($b > $a) {
     // output the appropriate result
     echo "$b is greater than $a\n";
 }

 if ($b >= $c) {
     // output the appropriate result
     echo "$b is greater than or equal to $c\n";
 }

 if ($b <= $c) {
     // output the appropriate result
     echo "$b is less than or equal to $c\n";
 }

 if ($b == $c) {
     // output the appropriate result
     echo "$b is equal to $c\n";
 }

 if ($b === $c) {
     // output the appropriate result
     echo "$b is identical to $c\n";
 }

 // output the appropriate result
 if ($b != $c) {
     echo "$b is not equal to $c\n";
 }

 // output the appropriate result
 if ($b !== $c) {
     echo "$b is not identical to $c\n";
 }

 echo 'ELSE EXERCISES' . PHP_EOL; 

 // Shorten the next 2 statements into an if/else
 if ($a < $b) {
     echo "$a is less than $b\n";
 }else{
     echo "$b is greater than or equal to $a\n";   
 }

 // Shorten the next 2 statements into an if/else
 if ($b >= $c) {
     // output the appropriate result
     echo "$b is greater than or equal to $c\n";
 }else{
     echo "$b is less than $c\n";
 }

 // combine the next 4 conditionals into
 // one if/else/elseif block that checks in order for:
 // identical, equal, not identical, not equal
 if ($b === $c) {
     // output the appropriate result
     echo "$b is identical to $c\n";
 }else if($b == $c){
     echo "$b is equal to $c\n";
 }else if ($b !== $c) {
     // output the appropriate result
     echo "$b is not identical to $c\n";
 }else if ($b != $c) {
     // output the appropriate result
     echo "$b is not equal to $c\n";
 }


 ?>
