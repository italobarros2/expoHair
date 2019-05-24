<?php

    require 'mailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;     
    $mail->isSMTP();
    $mail->Host = 'mail.congressoexpohair.com.br';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'vendas@congressoexpohair.com.br';
    $mail->Password = 'VendasExpO';
    $mail->Port = 587;
    $mail->setFrom('vendas@congressoexpohair.com.br', 'Ticket House');
    $mail->addAddress('variavel email do cliente aqui');
     
    $mail->isHTML(true);
     
    $mail->Subject = "E-ticket - Seu ingresso aqui!";
    $mail->Body    = nl2br("Mensagem que será enviada aqui");
     
    if(!$mail->send()) {
        echo 'Não foi possível enviar a mensagem.<br>';
        echo 'Erro: ' . $mail->ErrorInfo;
    }