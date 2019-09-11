<?php
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/users.php');

if(isset($_SESSION['username'])) {

    include_once($BASE_DIR . 'pages/templates/pagination/handlePageID.php');

    $product_per_page = 20;
    $displaynumber = 5;
    $username = $_SESSION['username'];

    try {
        $user_id = getUser($username)['idutilizador'];
        $wishListAux = getWishList($user_id);
    } catch (PDOException $e) {
        die($e->getMessage());
    }

    if(($productNo =  count($wishListAux)) == 0)
        $smarty->assign('noWishListResults', 'true');
    else{
        $pageNo = ceil($productNo/$product_per_page);
        $offset = ($page_index - 1)  * $product_per_page;


        if($page_index > $pageNo || $page_index < 1)
        {
            $_SESSION['error_messages'][] = "Tentou aceder a uma página inexistente!";
            header("Location:	$BASE_URL");
            die;
        }
        else {
            include_once($BASE_DIR . 'pages/templates/pagination/paginationRange.php');

            $wishList = array_slice($wishListAux, $offset, $product_per_page);
            $pagination = array('atualPage' => $page_index, 'lowerBound' => $page_lower, 'upperBound' => $page_upper, 'pageNo' => $pageNo);

            $smarty->assign('pagination', $pagination);
            $smarty->assign('wishlist', $wishList);
        }
    }

    $smarty->display('users/wishlist.tpl');
}
else
{
    $_SESSION['error_messages'][] = "Não tens permissão para aceder a esta página!";
    header("Location:	$BASE_URL");
    die;
}