<?php 

$i = 2;

do{
	echo $i . PHP_EOL;
	$i *= $i;

}while ($i < 1000000);

?>