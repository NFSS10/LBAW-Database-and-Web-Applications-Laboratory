<?php
include_once ('../../config/init.php');

include_once ($BASE_DIR . 'database/auctions.php');
include_once ($BASE_DIR . 'database/users.php');

if(!isset($_SESSION['username']))
{
    $_SESSION['error_messages'][] = "Não tens permissão para aceder à página pretendida!";
    header("Location:	$BASE_URL");
    die;
}
else {
    if (!isset($_GET['id'])) {
        $_SESSION['error_messages'][] = "Id do leilão que pretende remover dos favoritos não foi especificado!";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        die;
    }

        $auction_id = $_GET['id'];
        $username = $_SESSION['username'];

        try {
            $user_id = getUser($username)['idutilizador'];
            deleteWishedProduct($user_id, $auction_id);
        } catch (PDOException $e) {
            die($e->getMessage());
        }

}
$_SESSION['success_messages'][] = "Leilão removido com sucesso dos seus favoritos!";
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>