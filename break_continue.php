<?php
	//shows even numbers between 1 and 100
	echo "USING CONTINUE" . PHP_EOL;
	for($i = 1; $i <= 100; $i++){
		if(!($i % 2)){
			echo $i . PHP_EOL;
		}else{
			continue;
		}
	}
	//counts from 1-100 but stops after 10
	echo "USING BREAK" . PHP_EOL;
	for($i = 1; $i <= 100; $i++){
		if($i > 10){
			break;
		}else{
			echo $i . PHP_EOL;
		}
	}
?>