<?php 

require_once 'Student.php';
require_once 'StudentIterator.php';

class StudentCollection implements IteratorAggregate 
{
    private $students = [];

    public function add (Student $student)
    {
        $this->students[] = $student;
    }

    public function getIterator(): Traversable 
    {
        return new StudentIterator($this->students);
    }
}

