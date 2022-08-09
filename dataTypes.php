<?php
//we use "var_dump()" function for print values and data types in php.

$x = 10;//integer value.
$y=10.5;//float value.
$decision = true;//boolean value.

var_dump($x,$y,$decision);

$student = array('Faysal','Limon','Subro','Hafiz','Suhag');//array
var_dump($student);

class Student{
    public $university;
    public $department;

    public function __construct($uni,$dep) {
        $this->university = $uni;
        $this->department = $dep;
    }

    public function printMessage()
     {
        return "Student of ".$this->university ." and Department of ".$this->department.'. ' ."\n";
    }

}
 $newStudent = new Student('Sylhet International university','CSE');
 $newStudent -> printMessage();
 echo $newStudent->printMessage();
 $futures = null;//  data types 
 var_dump($futures);
?>