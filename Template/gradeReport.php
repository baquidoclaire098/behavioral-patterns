<?php 

require_once 'Report.php';

class GradeReport extends Report
{
    protected function retrieveData() 
    {
        return [
            'studentId' => '2024-001',
            'name' => 'Elaiza Claire Baquido',
            'subject' => 'ITPE 130',
            'grade' => '1.75'

        ];
    }
         protected function formatData($data)
    {
        echo "GRADE REPORT \n";
        echo "====================\n";
        echo "Student ID: " . $data['studentId'] . "\n";
        echo "Name: " . $data['name'] . "\n";
        echo "Subject: " . $data['subject'] . "\n";
        echo "Grade: " . $data['grade'] . "\n";
        
    }
    }
