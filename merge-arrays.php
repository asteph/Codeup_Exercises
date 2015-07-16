<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael', 'Andrew'];

function isFound($item, $array){
	$result = array_search($item, $array);
	if($result === false){
		return false;
	}else{
		return true;
	}
}
function numberOfMatches($array1, $array2){
	$matches = 0;
	foreach ($array1 as $value) {
		$match = array_search($value, $array2);
		if($match !== false){
			$matches++;
		}
	}
	return $matches . PHP_EOL;
}
function combine_arrays($array1, $array2){
	if(count($array1) > count($array2)){
		$arrayBig = $array1;
		$arrayLittle = $array2;
	}else{
		$arrayBig = $array2;
		$arrayLittle = $array1;
	}
	$i = 0;
	$combinedArray = [];
	foreach($arrayBig as $value){
		if($arrayBig[$i] == $arrayLittle[$i]){
			$combinedArray[] = $arrayBig[$i];
			$i++;
		}else{
			$combinedArray[] = $arrayLittle[$i];
			$combinedArray[] = $arrayBig[$i];
			$i++;
		}
	}
	$combinedArray = array_filter($combinedArray);
	return $combinedArray;
}

if(isFound('Mel', $names)){
	echo 'True' . PHP_EOL;
}else{
	echo 'False' . PHP_EOL;
}
if(isFound('Mel', $compare)){
	echo 'True' . PHP_EOL;
}else{
	echo 'False' . PHP_EOL;
}

echo numberOfMatches($names, $compare);
print_r(combine_arrays($names, $compare));
?>