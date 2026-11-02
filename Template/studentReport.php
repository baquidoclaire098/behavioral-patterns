
<?php

require_once 'Report.php';

class StudentReport extends Report
{
    protected function retrieveData()
    {
        return [
            'studentId' => '2024-001',
            'name' => 'Elaiza Claire Baquido ',
            'program' => 'BSIT'
        ];
    }

    protected function formatData($data)
    {
        echo "STUDENT REPORT\n";
        echo "========================\n";
        echo "Student ID: " . $data['studentId'] . "\n";
        echo "Name: " . $data['name'] . "\n";
        echo "Program: " . $data['program'] . "\n";
    }
}
