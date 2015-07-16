<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function isFound($item, $array){
	$result = array_search($item, $array);
	if($result === false){
		return 'FALSE' . PHP_EOL;
	}else{
		return 'TRUE' . PHP_EOL;
	}
}

echo isFound('Mel', $names);
echo isFound('Mel', $compare);