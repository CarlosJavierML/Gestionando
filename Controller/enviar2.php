<?php

if(isset($POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['msg'])
    && !empty($_POST['email'])){
        $name = $_POST['name'];
        $message = $_POST['asunto'];
        $subjet =$_POST['msg'];
        $email = $_POST['email'];
        $header = "From: mamaya850@misena.edu.co". "\r\n";
        $header.= "Replay-To: mamaya850@misena.edu.co"."\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail= mail($email,$asunto,$msg,$header);
        if ($mail){
            echo "<h4>¡Mail enviado exitosamente!</h4>";
        }
    }
}
?>