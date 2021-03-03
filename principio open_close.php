<?php

interface INotification 
{
    function send() : void;
}

class NotificationService
{
    public function send(Array $notifications) : void
    {
        foreach($notifications as $notification) 
        {
            $notification->send();
        }
    }
}

class NotificationEmailService implements INotification
{
    private string $to;
    private string $subject;

    public function __construct(string $to, string $subject)
    {
        $this->to = $to;
        $this->subject = $subject;
    }

    public function send() : void
    {
        // Lógica para enviar la ntoification por e-mail
    }
}

class NotificationSMSService implements INotification
{
    private string $phoneNumber;
    private string $subject;

    public function __construct(string $phoneNumber, string $subject)
    {
        $this->phoneNumber = $to;
        $this->subject = $subject;
    }

    public function send() : void
    {
        // Lógica para enviar la ntoification por e-mail
    }
}

?>