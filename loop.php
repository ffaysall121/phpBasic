<?php
$x = 0;
echo "even number 0 to 10";
while($x <= 10)//check condition enter the block
 {
  echo $x;
  echo "\n";
  $x+=2;//for increment
}

$x=15;
do {
 echo "hello world";
 echo "\n";
  } while ($x <= 10);//first exicution then condition check.
 

  for ($i = 0; $i <= 2; $i++) //1st argument starting position.2nd argument condition check.3rd argument increment or decrement
  {
    echo "good bye";
    echo "\n";
  }

  $student = array('Faysal','Limon','Subro','Hafiz','Suhag');

  foreach ($student as $name) {
    echo $name;
    echo "\n";
  }
  $studentResults = array('Faysal'=>2.75,'Hafiz'=>3.50,'Suhag'=>3.70);

  foreach ($studentResults as $stdName=>$result) {
    echo $stdName ,"=",$result;
    echo "\n";
  }

  for ($i = 0; $i < 5; $i++) {
    if ($i == 2) {
      echo "busy";
      echo "\n";
      continue;

    }
    echo "work with us";
    echo "\n";
  }

  for ($j = 0; $j< 10; $j++) {
    if ($j == 3) {
      echo "solved";
      echo "\n";
      break;
    }
    echo "problem";
    echo "\n";
  }
  ?>
