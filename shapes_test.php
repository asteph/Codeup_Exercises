<?php 
require_once 'rectangle.php';
require_once 'square.php';

$rectangle = new Rectangle(4, 3);
echo 'rectangle height: ' . $rectangle->height . PHP_EOL;
echo 'rectangle width: ' . $rectangle->width . PHP_EOL;
echo 'rectangle area: ' . $rectangle->area() . PHP_EOL;
echo 'rectangle perimeter: ' . $rectangle->perimeter() . PHP_EOL;

$square = new Square(2);
echo 'square height: ' . $square->height . PHP_EOL;
echo 'square width: ' . $square->width . PHP_EOL;
echo 'square area: ' . $square->area() . PHP_EOL;
echo 'square perimeter: ' . $square->perimeter() . PHP_EOL;