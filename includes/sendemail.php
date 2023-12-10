<?php
require 'vendor/autoload.php';

class sendEmail{

    public static function sendMail($to,$subject,$content){
        $key = "SG QytlQzD7TbK1BBcSlq02uw.18hDIfWL6YqYUsDqqQ02gZ7NSxKQYDkyoF07PTsm-Qo";

        $email = new \SendGrid\Mail\mail();
        $email->setFrom("ma.smith@hotmail.com", "Maxine Smith");
        $email->setSubject($subject);
        $email->addTo($to);
        //$email->addContent("text/plain", $content);

        $sendgrid = new \SendGrid($key);

        try{
            $response = $sendgrid->send($email);
            return $response;
        }catch(Exception $e){
            echo 'Email exception Caught : '. $e->getMessage() ."\n";
            return false;

        }


    }
}
?>