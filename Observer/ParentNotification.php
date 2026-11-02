<?php 

require_once "Observer.php";

class ParentNotification implements Observer 
{
    public function update($message)
    {
        echo "Parent Notification: \n";
        echo "Students grade has been posted. \n\n";
    }
}