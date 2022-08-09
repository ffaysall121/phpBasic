<?php

$mark=60;
if($mark>0&&$mark<=100)//conditions
{

if($mark>=40&&$mark<50)//nested conditions
{
    echo "3rd class";
    echo "\n";
}
else if($mark>50&&$mark<60)
{
    echo "2nd class";
    echo "\n";
}
else if($mark>=60&&$mark<=100)
{
    echo "1st class";
    echo "\n";
}
else{
    echo"sorry!! try again...";
}

}

else{
    echo"wrong input";
}

$time=6.00;
switch($time){

case($time<11.00&&$time>5.30)://switch conditions
{
    echo "Good Mornings";
    break;//for stopping 
}

case($time<15.00&&$time>11.00):
{
    echo "Good afternoon";
    break;
}
case($time<20.00&&$time>15.00):
{
    echo "Good Evening";
    break;
}
case($time<6.00&&$time>20.00):
{
    echo "Good night";
    break;
}
default:{
    echo "Good day";
}

}
?>