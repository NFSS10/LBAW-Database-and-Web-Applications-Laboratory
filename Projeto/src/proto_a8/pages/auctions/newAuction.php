<?php
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/auctions.php');

if(isset($_SESSION['username'])) {

    $main_categories = getMainCategories();

    $smarty->assign('main_categories', $main_categories);
    $smarty->display("auctions/newAuction.tpl");
}
else
{
    $_SESSION['error_messages'][] = "Não tens permissão para aceder a esta página!";
    header("Location:	$BASE_URL");
    die;
}