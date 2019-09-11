<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/users.php');
include_once($BASE_DIR . 'database/auctions.php');

if (isset($_SESSION['username']))
{
    $username = $_SESSION['username'];

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        if(!isset($_POST['leilaoID']) || !isset($_POST['idquestao']))
            $smarty->display('common/notFound.tpl');
        else
        {
            $auction_id = strip_tags($_POST['leilaoID']);
            $question_id = strip_tags($_POST['idquestao']);

            if(!isset($_POST['resposta']))
            {   $_SESSION['error_messages'][] = "Não tens permissão para aceder a esta página!";
                header("Location:	" .$BASE_URL. "pages/auctions/productPage.php?id=$auction_id");
                die;
            }

            $answer = strip_tags($_POST['resposta']);
            $date = date("Y-m-d H:i:s");

            try
            {
                addAnswer($date, $answer, $question_id);
            } catch (PDOException $e) {
                die($e->getMessage());
            }

            header("Location:	" .$BASE_URL. "pages/auctions/productPage.php?id=$auction_id");
            die;
        }
    }

}
else{
    $smarty->display('common/notFound.tpl');
}