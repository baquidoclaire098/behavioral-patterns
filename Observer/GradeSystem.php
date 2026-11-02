<?php 

require_once 'Subject.php';

class GradeSystem implements Subject
{
    private $observers = [];
    private $grade; 

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }


    public function  detach (Observer $observer)

{
    foreach ($this->observers as $key => $item){
        if ($item === $observer) {
            unset ($this->observer[$key]);
        }
    }
}
public function notify ()
{
    foreach ($this->observers as $observer){
        $observer->update("New grade posted.");
    }
}

public function updateGrade ($grade)
{
    $this->grade = $grade;

    echo "Grade updated: ". $this->grade . "\n\n";

    $this->notify();
    }
}