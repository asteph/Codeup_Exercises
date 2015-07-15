<?php
$a = 6;
$b = 3;
function add($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		return $a + $b;
	}else{
		return "ERROR: Both arguments must be numbers \n";
	}
}
function subtract($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		return $a - $b;
	}else{
		return "ERROR: Both arguments must be numbers \n";
	}
}
function multiply($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		return $a * $b;
	}else{
		return "ERROR: Both arguments must be numbers \n";
	}
}
function divide($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		return $a / $b;
	}else{
		return "ERROR: Both arguments must be numbers \n";
	}
}
function modulus($a, $b){
	if (is_numeric($a) && is_numeric($b)){
		return $a % $b;
	}else{
		return "ERROR: Both arguments must be numbers \n";
	}
}


echo add(4, 2) . PHP_EOL;
echo subtract(4, 2) . PHP_EOL;
echo multiply($a, $b) . PHP_EOL;
echo divide($a, $b) . PHP_EOL;
echo modulus($a, $b) . PHP_EOL;