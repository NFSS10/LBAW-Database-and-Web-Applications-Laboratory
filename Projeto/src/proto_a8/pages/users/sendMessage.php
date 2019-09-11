<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/users.php');


if(!isset($_SESSION['username']))
{
    $smarty->assign('UserLoggedIn', false);
    $_SESSION['error_messages'][] = "Tens de estar logado para poder enviar uma mensagem";
    header("Location:	$BASE_URL");
    die;
}
else
{
    $smarty->assign('UserLoggedIn', true);

    if (!isset($_GET['id']))
    {
        $_SESSION['error_messages'][] = "Utilizador não especificado!";
        header("Location:	$BASE_URL");
        die;
    }
    $user_idDestinatario = trim($_GET['id']);


    try {
        $username_Destinatario = getUserName($user_idDestinatario)['username'];
        $user_idLogado = getUser($_SESSION['username'])['idutilizador'];
    } catch (PDOException $e) {
        die($e->getMessage());
    }


    if($user_idLogado == $user_idDestinatario)
    {
        $_SESSION['error_messages'][] = "Não é possível enviar mensagem privada para você próprio";
        header("Location:	$BASE_URL");
        die;
    }



    $smarty->assign('idRemetente',$user_idLogado);
    $smarty->assign('usernameDestinatario', $username_Destinatario);
    $smarty->assign('idDestinatario', $user_idDestinatario);


    $smarty->display('users/sendMessage.tpl');
}




?>