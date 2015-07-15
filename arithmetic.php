<?php
$a = 6;
$b = 3;
function add($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		return $a + $b;
	}else{
		return "ERROR: Both arguments must be numbers.";
	}
}
function subtract($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		return $a - $b;
	}else{
		return "ERROR: Both arguments must be numbers.";
	}
}
function multiply($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		return $a * $b;
	}else{
		return "ERROR: Both arguments must be numbers.";
	}
}
function divide($a, $b){
	if(!$b){
		return "ERROR: Can not divide by 0. Undefined.";
	}else if (is_numeric($a) && is_numeric($b)){
		return $a / $b;
	}else{
		return "ERROR: Both arguments must be numbers.";
	}
}
function modulus($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		return $a % $b;
	}else{
		return "ERROR: Both arguments must be numbers.";
	}
}


echo add(1, 2) . PHP_EOL;
echo subtract(4, 2) . PHP_EOL;
echo multiply($a, $b) . PHP_EOL;
echo divide($a, 0) . PHP_EOL;
echo modulus($a, $b) . PHP_EOL;