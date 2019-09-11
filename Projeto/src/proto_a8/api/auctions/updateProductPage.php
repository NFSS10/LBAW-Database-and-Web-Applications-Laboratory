<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/auctions.php');

if (!$_POST['auct_id'])
{
    $_SESSION['error_messages'][] = 'Update não foi possivel!';
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
else{


    $auction_id = trim($_POST['auct_id']);

    try{
        $atual_bid = getMaxBid($auction_id);
        $time = getUpdatableInfo($auction_id);
    } catch (PDOException $e) {
        die($e->getMessage());
    }

    $updatable_info = array_merge($atual_bid, $time);

    echo json_encode($updatable_info);

}

?>