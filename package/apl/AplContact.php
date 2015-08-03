<?php
    /*@include_once('conf/conf.php');
    @include_once('../../conf/conf.php');
    require_once(__PATH__.'/autoload.php');*/


    class AplContact {
        public function __construct(){}
        public function __destruct(){}


        static public function sendContactToAdmin( $contact, $response=null )
        {
            $response->status = CgdContact::saveContact( $contact );

            if( $response->status ){
                $response->message = "Mensagem de contato enviada com sucesso.";

                $mail = new PHPMailer;

                //$mail->SMTPDebug = 3;                               // Enable verbose debug output

                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = '';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = '';                 // SMTP username
                $mail->Password = '';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to
                $mail->setLanguage('br');

                $mail->From = '';
                $mail->FromName = '';
                $mail->addAddress('', '');     // Add a recipient
                $mail->addReplyTo( $contact->email );
                //$mail->addCC('cc@example.com');
                //$mail->addBCC('bcc@example.com');

                //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
                $mail->isHTML(true);                                  // Set email format to HTML

                $mail->Subject = $contact->subject;
                $mail->Body    = $contact->email.'<br><br>'.$contact->message;
                $mail->AltBody = $contact->email.' | '.$contact->message;

                if(!$mail->send()) {
                    //echo 'Message could not be sent.';
                    //echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    //echo 'Message has been sent';
                }
            }
            else{
                $response->message = "Falhou, tente novamente.";
            }
        }
    }