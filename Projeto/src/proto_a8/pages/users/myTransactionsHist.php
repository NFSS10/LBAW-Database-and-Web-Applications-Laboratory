<?php
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/users.php');

if(isset($_SESSION['username'])) {
    include_once($BASE_DIR . 'pages/templates/pagination/handlePageID.php');

    if(!isset($_GET['vendaChecked']))
        $vendaChecked = 1;
    else
    {
        $vendaChecked = trim($_GET['vendaChecked']);
        if($vendaChecked != 0 && $vendaChecked != 1)
            $vendaChecked = 1;
    }

    if(!isset($_GET['compraChecked']))
        $compraChecked = 1;
    else
    {
        $compraChecked = trim($_GET['compraChecked']);
        if($compraChecked != 0 && $compraChecked != 1)
            $compraChecked = 1;
    }

    $transactions_per_page = 10;
    $displaynumber = 5;
    $username = $_SESSION['username'];

    try {

        $user_id = getUser($username)['idutilizador'];
        $mySales = getMySales($user_id);
        $myShoppings = getMyShoppings($user_id);

    } catch (PDOException $e) {
        die($e->getMessage());
    }

    if(($transactionsNo =  count($mySales) + count($myShoppings)) == 0)
        $smarty->assign('noHistoryResults', 'true');
    else {
        $pageNo = ceil($transactionsNo/$transactions_per_page);
        $offset = ($page_index - 1)  * $transactions_per_page;

        if($page_index > $pageNo || $page_index < 1)
        {
            $_SESSION['error_messages'][] = "Tentou aceder a uma página inexistente!";
            header("Location:	$BASE_URL");
            die;
        }
        else {
            include_once($BASE_DIR . 'pages/templates/pagination/paginationRange.php');

            foreach ($mySales as $key => $value) {
                $mySales[$key]['tipo'] = 'Venda';
            }

            foreach ($myShoppings as $key => $value) {
                $myShoppings[$key]['tipo'] = 'Compra';
            }

            $transactionsAux = array();
            if($vendaChecked == 1)
                $transactionsAux = $mySales;

            if($compraChecked == 1){
                foreach ($myShoppings as $key => $value) {
                    array_push($transactionsAux, $myShoppings[$key]);
                }
            }

            $transactions = array_slice($transactionsAux, $offset, $transactions_per_page);

            function date_compare($a, $b)
            {
                $t1 = strtotime($a['data_final']);
                $t2 = strtotime($b['data_final']);
                return $t2 - $t1;
            }
            usort($transactions, 'date_compare');
            $pagination = array('atualPage' => $page_index, 'lowerBound' => $page_lower, 'upperBound' => $page_upper, 'pageNo' => $pageNo);
            $typeExchange = array('vendaChecked' => $vendaChecked, 'compraChecked' => $compraChecked);

            $smarty->assign('pagination', $pagination);
            $smarty->assign('transactions', $transactions);
            $smarty->assign('typeExchange', $typeExchange);
        }
    }
    $smarty->display('users/myTransactionsHist.tpl');

}
else
{
    $_SESSION['error_messages'][] = "Não tens permissão para aceder a esta página!";
    header("Location:	$BASE_URL");
    die;
}