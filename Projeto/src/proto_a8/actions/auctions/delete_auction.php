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
            $_SESSION['error_messages'][] = "Id do leilão que pretende ser removido não foi especificado!";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            die;
        }

        $auction_id = $_GET['id'];

        if (isset($_SESSION['admin'])) {
            try {
                deleteAuction($auction_id);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        } else {
            $username = $_SESSION['username'];

            try {
                $user_id = getUser($username)['idutilizador'];
                $isSeller = getAuctionByIdAndSeller($auction_id, $user_id);
                $numberOfBids = getNumberOfBids($auction_id);
            } catch (PDOException $e) {
                die($e->getMessage());
            }

            if(count($isSeller) != 0 && $numberOfBids['total'] == 0)
            {
                try {
                    deleteAuction($auction_id);
                } catch (PDOException $e) {
                    die($e->getMessage());
                }
            }

        }
    }
    $_SESSION['success_messages'][] = "Leilão removido com sucesso do sistema!";
    header('Location: ' . $_SERVER['HTTP_REFERER']);

?>