<?php 

class StudentIterator implements Iterator 
{
    private $students;
    private $position = 0;

    public function __construct ($students)
    {
        $this->students = $students;
        $this->position = 0;
    }

    public function current(): mixed
    {
        return $this->students[$this->position];
    }
    
    public function key(): mixed
    {
        return $this->position;
    }

    public function next(): void 
    {
       $this->position++; 
    }

    public function rewind(): void 
    {
        $this->position = 0; 
    }

     public function valid(): bool 
    {
        return isset ($this->students[$this->position]);
    }

    

}