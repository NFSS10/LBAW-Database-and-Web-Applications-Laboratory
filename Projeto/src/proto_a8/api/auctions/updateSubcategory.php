<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/auctions.php');

if (!$_POST['main_category'])
{
    $_SESSION['error_messages'][] = 'Erro na categoria!';
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
else{

    $main_category = trim($_POST['main_category']);

    try{
        $categories = getSubCategories($main_category);
    } catch (PDOException $e) {
        die($e->getMessage());
    }


    echo json_encode($categories);
}

?>