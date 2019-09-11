<?php
    include_once('../../config/init.php');

    if (!$_POST['name'] || !$_POST['email'] || !$_POST['subject'] || !$_POST['message'])
    {
        $_SESSION['error_messages'][] = 'Algo está em falta no formulário de contacto!';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }

    if($_POST['subject'] == 'na')
    {
        $_SESSION['error_messages'][] = 'Não foi escolhida nenhuma opção para o motivo!';
        $_SESSION['form_values'] = $_POST;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }

    require_once $BASE_DIR.'lib/PHPMailer/PHPMailerAutoload.php';

    $name = $_POST['name'];
    $sender_email = strip_tags($_POST['email']);
    $subject = $_POST['subject'];
    $subject = $subject;
    $message = htmlspecialchars($_POST['message']);

    if($sender_email == $EMAIL)
    {
        $_SESSION['error_messages'][] = 'O email introduzido não pode ser igual ao email do sistema!';
        $_SESSION['form_values'] = $_POST;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }

    //PHPMailer Object
    $mail = new PHPMailer;

    //Mail CharSet
    $mail->CharSet = 'UTF-8';

    //From email address and name
    $mail->From = $sender_email;
    $mail->FromName = $name;

    //To address and name
    $mail->addAddress($EMAIL, "ForBid");

    //Address to which recipient will reply
    $mail->addReplyTo($sender_email, $name);

    //Send HTML or Plain Text email
    $mail->isHTML(false);

    $mail->Subject = $subject;
    $mail->Body = $message;

    if(!$mail->send())
    {
        $_SESSION['error_messages'][] = 'Ocorreu um erro ao enviar o email. Por favor tente novamente mais tarde!';
        $_SESSION['form_values'] = $_POST;
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
    else
    {
        $_SESSION['success_messages'][] = 'Email enviado com sucesso!';
        header("Location:	$BASE_URL");
        exit;
    }
?>