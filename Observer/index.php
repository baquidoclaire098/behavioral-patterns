<?php 

require_once 'GradeSystem.php';
require_once 'StudentPortal.php';
require_once 'EmailNotification.php';
require_once 'ParentNotification.php';
require_once 'SMSNotification.php';

$gradeSystem = new GradeSystem();

$studentPortal = New StudentPortal();
$emailNotification = New EmailNotification();
$parentNotification = New ParentNotification();
$smsNotification = New SMSNotification();

$gradeSystem->attach($studentPortal);
$gradeSystem->attach($emailNotification);
$gradeSystem->attach($parentNotification);
$gradeSystem->attach($smsNotification);

$gradeSystem->updateGrade("1.75");


