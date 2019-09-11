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

    $id_destinatario = $_POST['iddestinatario'];
    $data = date("Y-m-d H:i:s");
    try {
        addPrivateMessage($_POST['titulo'], $_POST['message'], $data, $id_destinatario, $_POST['idremetente']);
    } catch (PDOException $e) {
        die($e->getMessage());
    }

    $_SESSION['success_messages'][] = "Mensagem enviada com sucesso !";
    header("Location:	" .$BASE_URL. "pages/users/viewProfile.php?id=$id_destinatario");
    die;
}


?>