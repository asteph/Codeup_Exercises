<?php
$firstTry = true;
do{
	if(!$firstTry){
		fwrite(STDOUT, 'Make sure you are using numbers and start value is less than end.' . PHP_EOL);
	}
	fwrite(STDOUT, 'Starting number: ');
	$startNumber = trim(fgets(STDIN));
	fwrite(STDOUT, 'Ending number: ');
	$endNumber = trim(fgets(STDIN));
	$firstTry = false;
}while(!is_numeric($startNumber) || !is_numeric($endNumber) || !($startNumber < $endNumber));

fwrite(STDOUT, 'Increment by: ');
$increment = (int)fgets(STDIN);
if($increment == 0){
	$increment = 1;
}
for($i = (int)$startNumber; $i <= (int)$endNumber; $i += $increment){
	echo $i . PHP_EOL;
}
?>