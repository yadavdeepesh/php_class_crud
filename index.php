<?php
include 'database.php';

$obj = new Database();
// $obj -> insert("students",['student_name'=>'Shubham','age'=>'23','city'=>'mzn']);
// echo "Inserted Result is ::";
// echo "<br>";
// print_r($obj->getResult());

// next functionality is updated  ";

// $obj -> update("students",['student_name'=>'Shubham Sharma','age'=>'23','city'=>'mzn'],'id="7"');
// $obj -> update("students",['student_name'=>'dk','age'=>'24','city'=>'mzn'],'student_name="deepesh"');
// echo "<br>Updated Result is ::";
// echo "<br>";
// print_r($obj->getResult());


// $obj -> delete("students",'id="10"');
// echo "<br>Deleted Record is ::";
// echo "<br>";
// print_r($obj->getResult());

// $obj -> sql('select * from students');
// echo "<br>select Record is ::";
// echo "<br>";
// echo "<pre>";
// print_r($obj->getResult());
// echo "</pre>";

// $obj -> select('students','*',null,null,null,null);
$obj -> select('students','student_name,age',null,null,null,null);
echo "<br>select Record is ::";
echo "<br>";
echo "<pre>";
print_r($obj->getResult());
echo "</pre>";
?>