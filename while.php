<?php 
	$test = 5;
	$multiple1 = 5;
	$multiple2 = 2;
	while ($test <= 15) {
		if($test % $multiple1 == 0 && $test % $multiple2 == 0){
			echo "{$test} is divisible by both {$multiple1} and {$multiple2}\n";
		}elseif($test % $multiple1 == 0){
			echo "{$test} is divisible by {$multiple1}\n";
		}elseif($test % $multiple2 == 0){
			echo "{$test} is divisible by {$multiple2}\n";
		}else{
	    	echo "{$test}\n";
		}
	    $test++;
	}
?>