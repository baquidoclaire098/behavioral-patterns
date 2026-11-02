<?php 
require_once 'Report.php';

class EnrollmentReport extends Report 
{
    protected function retrieveData()
    {
        return [
            'studentId' => '2024-001',
            'name' => 'Elaiza Claire Baquido',
            'program' => 'BSIT',
            'semester' => 'Firts Semester',
            'status' => 'Enrolled'

        ];
    }

    protected function formatData($data)
    {
        echo "ENROLLMENT REPORT \n";
        echo "====================\n";
        echo "Student ID: " . $data['studentId'] . "\n";
        echo "Name: " . $data['name'] . "\n";
        echo "Program: " . $data['program'] . "\n";
        echo "Semester: " . $data['semester'] . "\n";
         echo "Status: " . $data['status'] . "\n";
        
    }
}