<?php 

require_once "Observer.php";

class SMSNotification implements Observer 
{
    public function update($message)
    {
        echo "SMS Notification: \n";
        echo "Your grade has been updated trough SMS. \n\n";
    }
}