<?php
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/users.php');

if(isset($_SESSION['username'])) {

    include_once($BASE_DIR . 'pages/templates/pagination/handlePageID.php');

    $people_per_page = 10;
    $displaynumber = 5;
    $username = $_SESSION['username'];

    try {
        $user_id = getUser($username)['idutilizador'];
        $followingAux = getPeopleIFollow($user_id);

    } catch (PDOException $e) {
        die($e->getMessage());
    }


    if(($peopleNo =  count($followingAux)) == 0)
        $smarty->assign('noFollowingResults', 'true');
    else{
        $pageNo = ceil($peopleNo/$people_per_page);
        $offset = ($page_index - 1)  * $people_per_page;


        if($page_index > $pageNo || $page_index < 1)
        {
            $_SESSION['error_messages'][] = "Tentou aceder a uma página inexistente!";
            header("Location:	$BASE_URL");
            die;
        }
        else {
            include_once($BASE_DIR . 'pages/templates/pagination/paginationRange.php');

            $following = array_slice($followingAux, $offset, $people_per_page);
            $pagination = array('atualPage' => $page_index, 'lowerBound' => $page_lower, 'upperBound' => $page_upper, 'pageNo' => $pageNo);

            $smarty->assign('pagination', $pagination);
            $smarty->assign('following', $following);
        }
    }

    $smarty->display('users/following.tpl');
}
else
{
    $_SESSION['error_messages'][] = "Não tens permissão para aceder a esta página!";
    header("Location:	$BASE_URL");
    die;
}
