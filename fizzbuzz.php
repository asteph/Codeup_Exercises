<?php
for($i = 1; $i <= 100; $i++){
	//checks if divisible by 15
	if(!($i % 15)){
		echo "FizzBuzz" . PHP_EOL;
	}
	//checks if divisible by 5
	elseif(!($i % 5)){
		echo "Buzz" . PHP_EOL;
	}
	//checks if divisible by 3
	elseif (!($i % 3)) {
		echo "Fizz" . PHP_EOL;
	}
	//prints number
	else{
		echo $i . PHP_EOL;
	}
}
?>