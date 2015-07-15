<?php
$a = 6;
$b = 3;
function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
	return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}
function modulus($a, $b)
{
    return $a % $b;
}
echo add(4, 2) . PHP_EOL;
echo subtract(4, 2) . PHP_EOL;
echo multiply($a, $b) . PHP_EOL;
echo divide($a, $b) . PHP_EOL;
echo modulus($a, $b) . PHP_EOL;