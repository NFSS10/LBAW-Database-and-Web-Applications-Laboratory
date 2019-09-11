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
    include_once($BASE_DIR . 'pages/templates/pagination/handlePageID.php');

    $bids_per_page = 10;

    $current_user = $_SESSION['username'];

    if (!isset($_GET['id'])) {
        $username = $current_user;
        $smarty->assign('my_auctions', 'true');

        try {
            $user_id = getUser($username)['idutilizador'];
            $userBids = getUserBids($user_id);

            $isAdmin = isAdmin($user_id);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    } else {
        $username = getUserInfo($_GET['id'])['username'];

        try {
            $user_id = getUser($username)['idutilizador'];
            $userBids = getUserBids($user_id);

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    $smarty->assign('usernameBids', $username);
    $smarty->assign('userIdBids', $user_id);


    if (($numberOfBids = count($userBids)) == 0)
        $smarty->assign('noBids', 'true');
    else {
        $pageNo = ceil($numberOfBids / $bids_per_page);
        $offset = ($page_index - 1) * $bids_per_page;

        if ($page_index > $pageNo || $page_index < 1) {
            $_SESSION['error_messages'][] = "Tentou aceder a uma página de listagem de licitações que não existe!";
            header("Location:	$BASE_URL");
            die;
        }
        else
        {
            include_once($BASE_DIR . 'pages/templates/pagination/paginationRange.php');

            $pagination = array('atualPage' => $page_index, 'lowerBound' => $page_lower, 'upperBound' => $page_upper, 'pageNo' => $pageNo);

            $smarty->assign('pagination', $pagination);
            $smarty->assign('limit_per_page', $bids_per_page);
            $smarty->assign('offset', $offset);

            foreach ($userBids as $key => $value)
            {
                $delta_time = strtotime($value['data_final']) - time();
                $hours = floor($delta_time / 3600);
                $delta_time %= 3600;
                $minutes = floor($delta_time / 60);
                $delta_time %= 60;
                $seconds = floor($delta_time);

                if($minutes < 10)
                    $minutes = '0' . $minutes;
                if($seconds < 10)
                    $seconds = '0' . $seconds;

                $userBids[$key]['tempo_restante'] = $hours.':'.$minutes.':'.$seconds;
                $userBids[$key]['width_bar'] = (strtotime($value['data_final'])-time())/(strtotime($value['data_final'])-strtotime($value['data_inicio']))*100;


            }
            $userBidsAux = array_slice($userBids, $offset, $bids_per_page);
            $smarty->assign('myBids', $userBidsAux);
        }
    }
    $smarty->display('users/myBids.tpl');
}