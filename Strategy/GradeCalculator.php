<?php 

require_once 'GradeStrategy.php';

class GradeCalculator 
{
    private $strategy;

    public function setStrategy(GradeStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function calculate($grades)
    {
        return $this->strategy->calculateGrade($grades);
    }
}