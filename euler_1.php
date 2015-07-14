<?php
	//sum of multiples of 3 or 5 between 1 and 1000
	$sum = 0;
	for($i = 1; $i <= 1000; $i++){
		if(!($i % 3) || !($i % 3)){
			$sum += $i;
		}
	}
	echo $sum . PHP_EOL;
?>