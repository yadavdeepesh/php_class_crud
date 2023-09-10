<?php
include 'database.php';

$obj = new Database();
$obj -> insert("students",['student_name'=>'Shubham','age'=>'23','city'=>'mzn']);
echo "Inserted Result is ::";
echo "<br>";
print_r($obj->getResult());

// next functionality is update";

?>