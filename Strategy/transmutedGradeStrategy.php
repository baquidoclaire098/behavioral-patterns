<?php 

require_once 'GradeStrategy.php';

class TrasmutedGradeStrategy implements GradeStrategy
{
public function calculateGrade($grades) 
{
    $average = array_sum($grades) / count($grades);

    if ($average >= 90){
        return 1.00;
    }elseif ($average >= 85) {
        return 1.50;
    }elseif ($average >= 80) {
    return 2.00; 
    } elseif ($average >= 75) {
    return 2.50; 
    }else {
        return 5.00;
    }
}

}