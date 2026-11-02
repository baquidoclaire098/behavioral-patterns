<?php 
require_once 'GradeStrategy.php';

class WeightedAverageStrategy implements GradeStrategy
{
    public function calculateGrade($grades)
    {
        $total = 0;

        foreach ($grades as $grade) {

        $total += $grade ['score'] * $grade['weight'];
        }

        return $total;
    }
}
