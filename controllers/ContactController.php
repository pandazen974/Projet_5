<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactController extends Controller{
    
    public function __construct(){
        
        $this->smarty=parent::useSmartyFonctions();
        
    }
    
    public function openContactForm(){
        $this->smarty->display('view/contact.tpl');
    }
    
    public function contactAdmin(){
        $mail = new PHPMailer(true);
                        try {
                            $mail->charSet = "UTF-8";
                                                                 
                            $mail->isSMTP();                                            
                            $mail->Host       = 'smtp.sfr.fr';  
                            $mail->SMTPAuth   = true;                                   
                            $mail->Username   = 'audreythomas72@sfr.fr';                     
                            $mail->Password   = 'kevtsun01SFR';                              
                            $mail->SMTPSecure = 'tls';                                  
                            $mail->Port       = 587;
                            //Parametres
                            $mail->setFrom('audreythomas72@sfr.fr', $_POST['email']);
                            $mail->addAddress('audreythomas72@sfr.fr');     
                            $mail->addReplyTo('noreply@sfr.fr', 'Noreply');
                            // Contenu
                            $mail->isHTML(true);                                 
                            $mail->Subject = $_POST['object'];
                            $mail->Body    = $_POST['message'];
                            $mail->AltBody = $_POST['message'];
                            $mail->send();
                            $checked="\"Votre message a été envoyé\"";
                            $this->smarty->assign('checked', $checked);
                            $this->smarty->display('view/contact.tpl');
    
    
                        } catch (Exception $e) {
                        echo "Le message n'a pas pu être envoyé: {$mail->ErrorInfo}";
                        $error="Un problème est survenu lors de l'envoi de l'email";
                        $this->smarty->assign('error', $error);
                        $this->smarty->display('view/contact.tpl');
                        }
    }

}