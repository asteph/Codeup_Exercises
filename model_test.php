<?php 
require_once 'Model.php';
require_once 'User.php';

$data = new Model();
$data->name = 'Arthur Dent';
$data->group = 'Codeup';
$data->age = 42;
echo $data->name . PHP_EOL;
echo $data->group . PHP_EOL;
echo $data->age . PHP_EOL;
echo User::getTableName() . PHP_EOL;
