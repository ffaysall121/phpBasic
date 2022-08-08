<?php
// use "$" symbol before the variables name to declaring all kinds of variables in php.
# $variables-Names = values.
$name="Faysal Ahmed"; //string
$id=35024; //integer
$section='A';//character 
$cgpa=2.95; //float
//those variables are global variables.


echo "Name =" ,$name  ,"\n"," ID =" ,$id  ,"\n", " Section =", $section, "\n", " CGPA =", $cgpa ,"\n";

function mySelf(){
    global $name,$birthday ;
   $fullName =$name;//it is global variable and accessible
   $birth=$birthday;//it is global variable .
    $university ="Sylhet International University";//it is local variable and accessible only this function.
echo"hello ...My name is ",$fullName,"\n";
echo"Student of ",$university,"\n";//it is local variable And it is use only for this function or block
}

mySelf();

function nextYear(){
    static $year=2022; //static variable.
    $shal=1429;

echo $year,"\n";
$year++;//static variable and global variable.
echo $shal,"\n";
$shal++;//global variable
}

nextYear();
nextYear();
nextYear();

print" Alhamdulillah "//also use for display purposes
?>