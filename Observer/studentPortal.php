<?php

require_once 'Observer.php';

class StudentPortal implements Observer 

{
    public function update($message)
    {
        echo "Students Portal: \n";
        echo "New grade posted. \n\n";
    }
}