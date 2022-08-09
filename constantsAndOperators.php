<?php

define("wish","Best of luck",true);//1st argument stored variable and 2nd argument stored value and 3rd argument stored ture or false for case-sensitive or case-insensitive value.defult value false .
echo Wish;
echo "\n";
define("WISH","Have a nice time");//1st argument stored variable and 2nd argument stored value.if without 3rd argument assigning then it case-sensitive.
echo WISH;//case-sensitive 
echo "\n";
 
define("department",["CSE","ENGLISH","LLB","ECE"]);
echo department[0];
echo "\n";
function myCheck() {
echo WISH;//GLOBAL constants
}

myCheck();

$x=10;
$y=20;
$z=$x+$y;//	Addition
$z+=$x;// also way to Addition
$a=$x-$y;//Subtraction and "-=" also use it
$b=$x*$y;//Multiplication and "*=" also use it
$c=$x/$y;//Division and "/=" also use it
$d=$x%$y;//Modulus and "/=" also use it
$e=$x**$y;//Exponentiation
++$d;//	Pre-increment
$d++;//	Post-increment
--$d;//	Pre-decrement
$d--;//	Post-decrement

if  ($x==$y) //equal 
{
    echo 'false';
    echo "\n";
}
if  ($x!=$y) //not equal
{
    echo 'right';
    echo "\n";
}
if  ($x===$y) //equal and check for same data types 
{
    echo 'right';
    echo "\n";
}
if  ($x!==$y) //equal but  not same data types 
{
    echo 'right';
    echo "\n";
}
if  ($x<$y) //geater than
{
    echo 'right';
    echo "\n";
}
if  ($x>=$y) //geater than equal
{
    echo 'right';
    echo "\n";
}

if  ($x<$y) //less than
{
    echo 'right';
    echo "\n";
}
if  ($x<=$y) //less than equal
{
    echo 'right';
    echo "\n";
}

if  ($x<=$y&&$a==$b) //'&&'and operator
{
    echo 'right';
    echo "\n";
}
if  ($x<=$y||$a!=$b) //'||' or operator 
{
    echo 'right';
    echo "\n";
}

?>
