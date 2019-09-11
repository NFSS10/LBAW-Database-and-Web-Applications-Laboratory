<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/users.php');
include_once($BASE_DIR . 'database/auctions.php');

if (isset($_SESSION['username']) && $_SERVER["REQUEST_METHOD"] == "POST")
{
        $submitPressed = $_POST['cc_submit'];
        if(isset($submitPressed))
        {
            $username = $_SESSION['username'];
            $auction_id = strip_tags($_POST['idleilao']);
            $title = strip_tags($_POST['titulo']);
            $description = strip_tags($_POST['descricao']);
            $starter_price = strip_tags($_POST['preco_inicial']);
            $final_date = strip_tags($_POST['end_date']);

            $format = 'Y-m-d\TH:i';
            $date = DateTime::createFromFormat($format, $final_date);
            $final_date = $date->format('Y-m-d H:i:s');


            try {
                updateInfo($title, $description, $starter_price, $final_date, $auction_id);
            } catch (PDOException $e) {
                die($e->getMessage());
            }

            $_SESSION['success_messages'][] = "Informação atualizada com sucesso!";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            die;

        }
        else
        {
            $_SESSION['error_messages'][] = "Atualização da informação do leilão falhou!";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            die;
        }
}
else{
    $_SESSION['error_messages'][] = "Não tens permissão para aceder a esta página!";
    header("Location:	$BASE_URL");
    die;
}