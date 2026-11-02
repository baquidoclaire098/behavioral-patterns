<?php 

require_once 'GradeStrategy.php';

class SimpleAverageStrategy implements GradeStrategy 
{
    public function calculateGrade($grades)
    {
        if (empty($grades)) {
            return 0;
        }

        $scores = [];

        foreach ($grades as $grade) {
            if (is_array($grade)) {
                $scores [] = $grade ['score'];
            }else {
                $scores[] = $grade;
            }
        }

        return array_sum($scores) / count($scores);
    }
}