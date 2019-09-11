<?php
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/auctions.php');
include_once ($BASE_DIR . 'database/users.php');

if (isset($_SESSION['username']) && $_SERVER["REQUEST_METHOD"] == "POST")
{
    $submitPressed = $_POST['new_submit'];
    if(isset($submitPressed))
    {
        $username = $_SESSION['username'];
        $title = strip_tags($_POST['titulo']);
        $description = strip_tags($_POST['descricao']);
        $starter_price = strip_tags($_POST['preco_inicial']);
        $final_date = strip_tags($_POST['end_date']);
        $main_category = strip_tags($_POST['categoria']);
        $sub_category = strip_tags($_POST['sub_categoria']);

        $format = 'Y-m-d\TH:i';
        $date = DateTime::createFromFormat($format, $final_date);
        $final_date = $date->format('Y-m-d H:i:s');

        $initial_date = date("Y-m-d H:i:s");

        try {
            $vendedor = getUser($username)['idutilizador'];
            $sub_category_id = getSubCategoryByID($sub_category)['idcategoria'];
            addAuction($title, $description, $starter_price, $initial_date, $final_date, $sub_category_id, 'Em progresso', $vendedor);
        } catch (PDOException $e) {
            die($e->getMessage());
        }

        $_SESSION['success_messages'][] = "Leilão criado com sucesso!";
        header("Location:	$BASE_URL");
        die;

    }
    else
    {
        $_SESSION['error_messages'][] = "Criação do leilão falhou!";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        die;
    }
}
else{
    $_SESSION['error_messages'][] = "Não tens permissão para aceder a esta página!";
    header("Location:	$BASE_URL");
    die;
}