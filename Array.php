<?php

$name=array('Faysal','Limon','Mumin','Mithu');//array
for($x=0;$x<count($name);$x++){
    echo $name[$x] , ' ';
}
echo "\n";
$id=array('35024','35030','35026','35022');
echo $id[1];//print a value of index
echo "\n";
$studentResults = array('Faysal'=>2.75,'Hafiz'=>3.50,'Suhag'=>3.70);//associtive array

foreach ($studentResults as $stdName=>$result) 
{
  echo $stdName ,"=",$result;
  echo "\n";
}

$student = array(
    array('Name  .','ID .','CGPA.'),
    array('Faysal ',35024,'  2.75'),
    array('Limon ',35030,'  3.75'),
    array('Mumin ',35026,'  3.50'),
    array('Mithu ',35022,'  3.01')
);
$count= count($student);
for($i = 0; $i < $count; $i++) {
  
    foreach($student[$i] as $value){
      echo $value;
  
    }
    echo "\n";
}
?>