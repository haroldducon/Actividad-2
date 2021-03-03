<?php 

class OrderService
{
    private EmailService $emailService;

    public function __construct(EmailService $emailService) 
    {
        $this->$emailService = $emailService;
    }

    public function add(Order $order) : void
    {
        // 01. Código para crear la orden

        // 02. Notificar al cliente
        $to = "hduconab@ibero.edu.co";
        $subject = "Se creado su orden de compra #2020-2365901";
        $body = "Su orden de compra se ha creado satisfactoriamente";

        $this->emailService($to, $subject, $body);
    }
}


?>
