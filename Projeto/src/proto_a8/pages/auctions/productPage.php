<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/auctions.php');
include_once($BASE_DIR . 'database/users.php');

    if (!isset($_GET['id'])) {
        $smarty->display('common/notFound.tpl');
    } else {
        $auction_id = trim($_GET['id']);

        try {
            if (hasBids($auction_id)) {
                $auction_info = getAuctionInfo($auction_id);
                $smarty->assign('ValorAtual', $auction_info[0]['valor']);
                $smarty->assign('NoBids', false);
            } else {
                $auction_info = getAuctionInfoWOBids($auction_id);
                $smarty->assign('ValorAtual', $auction_info[0]['preco_inicial']);
                $smarty->assign('NoBids', true);
            }


            if(sellerAlreadyDFeedback($auction_id))
                $smarty->assign("sellerFeedback", true);
            else
                $smarty->assign("sellerFeedback", false);



            if(clientAlreadyDFeedback($auction_id))
                $smarty->assign("clientFeedback", true);
            else
                $smarty->assign("clientFeedback", false);



            if(isset($_SESSION['username']))
            {
                $username = $_SESSION['username'];
                $smarty->assign('UserLoggedIn', true);
            }
            else
                $smarty->assign('UserLoggedIn', false);

            $user_id = getUser($username)['idutilizador'];
            if(alreadyGotProductInWL($user_id, $auction_id))
                $smarty->assign("isOnWL", true);
            else
                $smarty->assign("isOnWL", false);


            $max_bid_user = getMaxBidAndUser($auction_id)['user'];

            if($max_bid_user != $user_id)
                $smarty->assign('Comprador', false);
            else
                $smarty->assign('Comprador', true);

            $smarty->assign('buyer_id', $max_bid_user);

            $smarty->assign("username", $username);
            $auction_seller = getUserName($auction_info[0]['vendedor']);
            $auction_photos = getAuctionPhotos($auction_id);
            $auction_questions_photo = getQuestionsAndPhotos($auction_id);
            $auction_seller_photo = getUserPhoto($auction_info[0]['vendedor']);
            $atual_user_photo = getUserPhotoByUserName($username);
            $hasFinished = hasFinished($auction_id);

        } catch (PDOException $e) {
            die($e->getMessage());
        }

        $auction_info_container = array('Titulo' => $auction_info[0]['titulo'],'Descricao' => $auction_info[0]['descrição'], 'NomeVendedor' => $auction_seller['username'],
            'IdVendedor' => $auction_info[0]['vendedor'], 'FotoVendedor' => $auction_seller_photo, 'DataInicio' => $auction_info[0]['data_inicio'], 'DataFinal' => $auction_info[0]['data_final']);


        $smarty->assign('auctInfoContainer', $auction_info_container);
        $smarty->assign('Fotos', $auction_photos);
        $smarty->assign('QuestionsInfo', $auction_questions_photo);
        $smarty->assign('AtualUserFoto', $atual_user_photo);
        $smarty->assign('Finished', $hasFinished);
        $smarty->assign('SellerID', $auction_info[0]['vendedor']);



        if ($auction_seller['username'] === $username)
            $smarty->assign('eOVendedor', 'true');

        $answersArray = array();
        foreach ($auction_questions_photo as $key => $value) {
            try {
                $answersToQuestion = getAnswerToQuestion($value['idquestao'], $auction_id);
                array_push($answersArray, $answersToQuestion);

            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }


        $smarty->assign('AnswersToQuestion', $answersArray);
        $smarty->assign('auction_id', $auction_id);
        $smarty->display('auctions/product.tpl');
} ?>



