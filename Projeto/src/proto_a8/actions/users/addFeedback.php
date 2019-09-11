<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/users.php');
include_once($BASE_DIR . 'database/auctions.php');

if (isset($_SESSION['username']) && $_SERVER["REQUEST_METHOD"] == "POST")
{
    $submitPressed = $_POST['feedback_submit'];
    if(isset($submitPressed))
    {
        $username = $_SESSION['username'];
        $auction_id = strip_tags($_POST['idleilao']);
        $client = strip_tags($_POST['comprador']);
        $comment = strip_tags($_POST['comment']);
        $score = strip_tags($_POST['score']);

        try {
            $user_id = getUser($username)['idutilizador'];

            if($user_id != $client)
                $origin = 'Vendedor';
            else
                $origin = 'Comprador';

            addFeedback($score, $comment, $origin, $client, $auction_id);
        } catch (PDOException $e) {
            die($e->getMessage());
        }

        $_SESSION['success_messages'][] = "Feedback enviado!";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        die;

    }
    else
    {
        $_SESSION['error_messages'][] = "Envio do feedback falhou!";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        die;
    }
}
else{
    $_SESSION['error_messages'][] = "Não tens permissão para aceder a esta página!";
    header("Location:	$BASE_URL");
    die;
}