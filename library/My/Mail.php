<?php


class My_Mail {
    public function sendMessage($to ,$subject, $txt){
        $config = array(
            'ssl' => 'ssl',
            'port' => 465,
            'auth' => 'login',
            'username' => 'systemzglaszaniausterek@gmail.com',
            'password' => 'szuadmin123',
        );
        $transport = new Zend_Mail_Transport_Smtp('smtp.gmail.com', $config);
        Zend_Mail::setDefaultTransport($transport);
        
        $mail = new Zend_Mail('UTF-8');
        $mail->setBodyText('Wiadmość z Systemu Zgłoszeń Usterek: ');
        
        $mail->setBodyHtml($txt);
        $mail->addTo($to);
        $mail->setFrom('systemzglaszaniausterek@gmail.com','SYSTEM ZGŁOSZEŃ USTEREK');
        $mail->setSubject($subject);
        
        $mail->send();
    }
    
    
}
