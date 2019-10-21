<?php
require ('class.phpmailer.php');
include("class.smtp.php");

class Email extends PHPMailer {

   var $sender_mail;
   var $sender_name;
   var $sender_pass;

   public function __construct($sender_name,$sender_mail,$sender_pass) {
      $this->IsSMTP();                                         //Protocolo SMTP
      $this->Host = 'smtp.gmail.com';                          //Utilizando los servidores de Gmail
      $this->Port = 465;                                       //Puerto 465
      $this->SMTPAuth = true;                                  //
      $this->Username = $this->sender_mail=$sender_mail;       //Correo de Gmail
      $this->Password = $this->sender_pass=$sender_pass;       //Contraseña 
      $this->SMTPSecure = 'ssl';                               //Seguridad SSL
      $this->From = $this->sender_mail;                        //Correo remitente
      $this->FromName = $this->sender_name=$sender_name;       //Nombre remitente
      $this->CharSet='UTF8';                                   //
   }                                                                                

   public function sendm($subject , $body) {
      $this->WordWrap = 50;                                    //Ajuste
      $this->IsHTML(true);                                     //Contenido como HTML
      $this->Subject =$subject;                                //Asunto
      $this->Body    =  $body;                                 //Contenido normal
      $this->AltBody =  strip_tags($body);                     //Contenido en texto plano
      $this->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 
                                                  'verify_peer_name' => false, 
                                                  'allow_self_signed' => true 
                                                ));
      return $this->Send() ;
   }
   
   public function add_address($mail,$username = '') {
      $this->addAddress($mail,$username);                      //Se añade un correo y nombre a los destinatarios
   }
}
?>