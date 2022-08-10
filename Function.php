<?php

function message()//without parameter.
{
    echo 'Hello World';
    echo "\n";
}
message();

function wish($name,$wish)//with parameter
{
   echo $wish, " ",$name;
   echo "\n";
}

wish("tamim","Good job");

function who($name='AI')//default value argument
{
   echo " I am ",$name;
   echo "\n";
}

who("Faysal");
who();


?>