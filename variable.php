<?php
// echo "We talk about variables".'<br>';
$name = 'Vy'; //string
$age = 22; //integer
// echo $age;
$has_mercedes = false;
//echo $has_mercedes;
//var_dump($has_mercedes);
$product_price = 22.45; //Float
//var_dump($product_price);
echo "<br>";
//string concatenation
//echo $name.' is '.$age.' years old'."<br>";
//this is better
//echo "${name} is ${age} years old...";
//expression
//echo '1' + '2';
$sum = '2' + '3';
var_dump($sum);
//echo 5 * 3;
//echo 10 / 2;
//echo 5 / 0;
//remains
// echo 10 % 3; 
//constants
define('SERVER_NAME', 'localhost');
define('DATABASE_NAME', 'db');
echo "server: " . SERVER_NAME . ', db : ' . DATABASE_NAME;
