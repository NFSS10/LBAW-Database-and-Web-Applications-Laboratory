<?php
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/auctions.php');
include_once ($BASE_DIR . 'database/users.php');

if(isset($_SESSION['username'])) {

    $username = $_SESSION['username'];

    if (!isset($_GET['id']) || !isset($_GET['edit'])) {
        $smarty->display('common/notFound.tpl');
    } else {

        $auction_id =  trim($_GET['id']);
        $edit_opt = trim($_GET['edit']);

        try {
            $user_id = getUser($username)['idutilizador'];
            if(!isTOwner($user_id, $auction_id))
            {
                $_SESSION['error_messages'][] = "Não tens permissão para aceder a esta página!";
                header("Location:	$BASE_URL");
                die;
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }

        $smarty->assign('editOption', $edit_opt);
        $smarty->assign('auction_id', $auction_id);

        if($edit_opt == 1)
            $smarty->display("auctions/edit/addImage.tpl");
        else if($edit_opt == 2)
        {
            try {
                $auctions_photos = getAuctionPhotos($auction_id);
            } catch (PDOException $e) {
                die($e->getMessage());
            }

            $smarty->assign('photos', $auctions_photos);

            $smarty->display("auctions/edit/deleteImage.tpl");
        }
        else if($edit_opt == 3)
        {
            try {
                $auction_rinfo = getRewritableInfo($auction_id);
            } catch (PDOException $e) {
                die($e->getMessage());
            }


            $date = date("Y-m-d\TH:i", strtotime($auction_rinfo['data_final']));

            $smarty->assign('rinfo', $auction_rinfo);
            $smarty->assign('date', $date);
            $smarty->display("auctions/edit/changeChar.tpl");
        }
        else
            $smarty->display('common/notFound.tpl');

    }
}
else
{
    $_SESSION['error_messages'][] = "Não tens permissão para aceder a esta página!";
    header("Location:	$BASE_URL");
    die;
}