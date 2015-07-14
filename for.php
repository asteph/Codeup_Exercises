<?php
fwrite(STDOUT, 'Starting number: ');
$startNumber = (int)fgets(STDIN);
fwrite(STDOUT, 'Ending number: ');
$endNumber = (int)fgets(STDIN);
for($i = $startNumber; $i <= $endNumber; $i++){
	echo $i . PHP_EOL;
}
?>