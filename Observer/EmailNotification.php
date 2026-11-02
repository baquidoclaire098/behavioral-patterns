<?php 

require_once "Observer.php";

class EmailNotification implements Observer 
{
    public function update($message)
    {
        echo "Email Notification: \n";
        echo "Your grade has been updated. \n\n";
    }
}