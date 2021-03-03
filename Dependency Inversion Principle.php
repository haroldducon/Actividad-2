<?php


interface IMailService 
{
    function send(): void;
}

class MailChimpService implements IMailService
{
    public function send(): void
    {
        // Todo: código para enviar el correo
    }
}

class SendGridService implements IMailService
{
    public function send(): void
    {
        // Todo: código para enviar el correo
    }
}


class OrderService 
{
    private IMailService $mailService;

    public function __constructor (IMailService $mailService) 
    {
        $this->mailService = $mailService;
    }

    public function create(Order $order) : void
    {
        // ToDo: código para crear la orden

        // Enviar notificación de la orden creada
        $this->mailService.Send();
    }
}



?>