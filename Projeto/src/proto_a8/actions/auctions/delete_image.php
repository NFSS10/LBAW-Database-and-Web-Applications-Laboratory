<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/auctions.php');

if (isset($_SESSION['username']))
{
    $username = $_SESSION['username'];

        if(!isset($_GET['id']) || !isset($_GET['photo']))
            $smarty->display('common/notFound.tpl');
        else
        {
            $auction_id = trim($_GET['id']);
            $photo_id = trim($_GET['photo']);

            try
            {
                deletePhoto($auction_id, $photo_id);
            } catch (PDOException $e) {
                die($e->getMessage());
            }

            $_SESSION['success_messages'][] = "Imagem removida com sucesso!";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            die;
        }
}
else{
    $_SESSION['error_messages'][] = "Não tens permissão para aceder a esta página!";
    header("Location:	$BASE_URL");
    die;
}