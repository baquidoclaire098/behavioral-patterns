<?php 

require_once 'Student.php';
require_once 'StudentCollection.php';

$students = new StudentCollection();

$students->add(new Student ("2024-001", "Elaiza"));
$students->add(new Student ("2024-002", "Claire"));
$students->add(new Student ("2024-003", "Baquido"));

echo "Students List \n\n";

foreach ($students as $students){
    echo $students->getStudentId() . " - ";
    echo $students->getName() . "\n";
}