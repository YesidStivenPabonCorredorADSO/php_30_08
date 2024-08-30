<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

class Mail{

    public $mail;
    public $mensaje;
    public $body;
    public $subject;

    public function __construct($mail,$mensaje,$subject,$body)
    {
        $this->mail=$mail;
        $this->mensaje=$mensaje;
        $this->subject=$subject;
        $this->body=$body;
    }

    public function send()
    {
        try {
            //Server settings
            $phpmailer = new PHPMailer();
            $phpmailer->isSMTP();
            $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
            $phpmailer->SMTPAuth = true;
            $phpmailer->Port = 2525;
            $phpmailer->Username = '186bdde7027a37';
            $phpmailer->Password = 'bbd33974931ce2';                                //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $phpmailer->setFrom($this->mail, 'Mailer');
            $phpmailer->addAddress('joe@example.net', 'Joe User');     //Add a recipient
            $phpmailer->addAddress('ellen@example.com');               //Name is optional
            $phpmailer->addReplyTo('info@example.com', 'Information');
            $phpmailer->addCC('cc@example.com');
            $phpmailer->addBCC('bcc@example.com');
        
            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        
            //Content
            $phpmailer->isHTML(true);                                  //Set email format to HTML
            $phpmailer->Subject = $this->subject;
            $phpmailer->Body    = $this->body;
            $phpmailer->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
            $phpmailer->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    
}
