<?php
	include_once('../../config/init.php');
	include_once ($BASE_DIR . 'database/search.php');

    $auctions_per_page = 12;

	include_once($BASE_DIR . 'pages/templates/pagination/handlePageID.php');

    if($page_index < 1)
    {
        $_SESSION['error_messages'][] = "Tentou aceder a uma página inexistente!";
        header("Location:	$BASE_URL");
        die;
    }

    if(isset($_GET['categoria']) && $_GET['categoria'] != "")
    {
        $category = $_GET['categoria'];
        try {
            $auctions = getAuctionsByCategory($category);
        } catch (PDOException $e) {
            die($e->getMessage());
        }

        $auctionsNo = count($auctions);

        $pageNo = ceil(min($auctionsNo/$auctions_per_page, 60/$auctions_per_page));
        $offset = ($page_index - 1)  * $auctions_per_page;

        $auctions = array_slice($auctions, $offset, $auctions_per_page);

        $smarty->assign('query', "");

    } else if(isset($_GET['query']) && $_GET['query'] != "")
    {
        $query = $_GET['query'];
        $order = "rank";

        if(isset($_GET['sort']))
        {
            $sort = $_GET['sort'];
            if(isset($_GET['order']))
            {
                $order = $_GET['order'];
                if(!($order  == "rank" || $order  == "data_final" || $order  == "preco_inicial"|| $order  == "categoria"))
                {
                    $_SESSION['error_messages'][] = "Parametros de pesquisa inválidos!";
                    header("Location: $BASE_URL");
                    die;
                }
            }

            try {
                if ($sort == "DESC")
                    $auctions = getSearchInfoDesc($query, $order);
                else if ($sort == "ASC")
                    $auctions = getSearchInfoAsc($query, $order);
                else {
                    $_SESSION['error_messages'][] = "Parametros de pesquisa inválidos!";
                    header("Location: $BASE_URL");
                    die;
                }
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        else
        {
            if(isset($_GET['order']))
            {
                $order = $_GET['order'];
                if(!($order  == "rank" || $order  == "data_final" || $order  == "preco_inicial"|| $order  == "categoria"))
                {
                    $_SESSION['error_messages'][] = "Parametros de pesquisa inválidos!";
                    header("Location: $BASE_URL");
                    die;
                }
            }

            try {
                $auctions = getSearchInfoDesc($query, $order);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }

        $auctionsNo = count($auctions);

        $pageNo = ceil(min($auctionsNo/$auctions_per_page, 60/$auctions_per_page));
        $offset = ($page_index - 1)  * $auctions_per_page;

        $auctions = array_slice($auctions, $offset, $auctions_per_page);

        $smarty->assign('query', $query);
        $smarty->assign('sort', $sort);
        $smarty->assign('order', $order);
    }
    else
    {
        try {
            $auctionsNo = getNoAuctions()['count'];

            $pageNo = ceil(min($auctionsNo/$auctions_per_page, 60/$auctions_per_page));
            $offset = ($page_index - 1)  * $auctions_per_page;

            $auctions = getAuctionsFromPageX($auctions_per_page, $offset);

        } catch (PDOException $e) {
            die($e->getMessage());
        }

        $smarty->assign('query', "");
    }

	if($auctionsNo == 0)
    {
        $smarty->assign('hasNothing', 'true');
    }
    else if($page_index > $pageNo)
    {
        $_SESSION['error_messages'][] = "Tentou aceder a uma página inexistente!";
        header("Location:	$BASE_URL");
        die;
    }

    foreach($auctions as $key => $value)
    {
        $max_bid = getMaxBid($value['idleilao'])['max'];
        $photo = getOnePhoto($value['idleilao'])['photo'];
        $auctions[$key]['photo'] = $photo;

        unset($auctions[$key]['preco_inicial']);
        if($max_bid != NULL)
            $auctions[$key]['max_licit'] = $max_bid;
        else
            $auctions[$key]['max_licit'] = $value['preco_inicial'];
    }

	$smarty->assign('pageNo', $pageNo);
	$smarty->assign('atualPage', $page_index);
	$smarty->assign('auctionsToDisplay', $auctions);

	$smarty->display('auctions/search.tpl');

?>
