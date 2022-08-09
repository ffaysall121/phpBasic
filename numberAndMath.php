<?php
 $x=10; //integer
 var_dump($x);//check data types.
 var_dump(is_int($x));//make sure integer or not.
 $y=10.5;//float
 var_dump(is_float($y));//make sure float or not.
$z=10.611;
var_dump($z);//to check finite or infinite .
$positive=acos(10);
var_dump($positive);

$a=100;
$b="100";
$c="hello";

var_dump(is_numeric($a));
var_dump(is_numeric($b));
var_dump(is_numeric($c));

$x=550.2525;//float value.
$int_x=(int)$x;//replace float to integer.
echo $int_x;
echo "\n";
$string_x="1000";
$intger_x=(int)$string_x;//replace string to integer
echo $intger_x;
echo "\n";

echo(pi());//return pi value.
echo "\n";
echo(min(10, 50, 120, 200, -8, -100));  // returns minimum value of array element or argument.
echo "\n";
echo(max(10, 50, 120, 200, -8, -100));  // returns maximum value of array element or argument

echo(abs(-5.5));  // replace positive value from argument
echo "\n";
echo(sqrt(16));  // returns scqueued root value of argument.
echo "\n";
echo(round(5.5));  // if argument is <=.5 rounding next integer number.
echo "\n";
echo(round(5.4));  // if argument is >.5 rounding itself as integer number
echo "\n";
echo(rand());// use for random number 
echo "\n";
echo(rand(1, 6));//random number 1 to 6 .1st argument is starting number and 2nd argument for ending number
?>