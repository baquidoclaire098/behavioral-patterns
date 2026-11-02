<?php 

require_once 'StudentReport.php';
require_once 'GradeReport.php';
require_once 'EnrollmentReport.php';

$studentReport = new StudentReport();
$gradeReport = new GradeReport();
$enrollmentReport = new EnrollmentReport();

$studentReport->generateReport();
$gradeReport->generateReport();
$enrollmentReport->generateReport();

?>
