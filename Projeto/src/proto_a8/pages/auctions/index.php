<?php
	include_once ('../../config/init.php');
	include_once ($BASE_DIR . 'database/auctions.php');

	$auctions_per_page = 12;

	include_once($BASE_DIR . 'pages/templates/pagination/handlePageID.php');

	if($page_index < 1)
	{
		$_SESSION['error_messages'][] = "Tentou aceder a uma página inexistente!";
		header("Location:	$BASE_URL");
		die;
	}

	try {
		$auctionsNo = getNoAuctions()['count'];

		$pageNo = ceil(min($auctionsNo/$auctions_per_page, 60/$auctions_per_page));
		$offset = ($page_index - 1)  * $auctions_per_page;

		$auctionsPageX = getAuctionsFromPageX($auctions_per_page, $offset);

	} catch (PDOException $e) {
		die($e->getMessage());
	}

	if($page_index > $pageNo)
	{
		$_SESSION['error_messages'][] = "Tentou aceder a uma página inexistente!";
		header("Location:	$BASE_URL");
		die;
	}

	foreach($auctionsPageX as $key => $value)
	{
		$max_bid = getMaxBid($value['idleilao'])['max'];
		$photo = getOnePhoto($value['idleilao'])['photo'];
		$auctionsPageX[$key]['photo'] = $photo;

		unset($auctionsPageX[$key]['preco_inicial']);
		if($max_bid != NULL)
			$auctionsPageX[$key]['max_licit'] = $max_bid;
		else
			$auctionsPageX[$key]['max_licit'] = $value['preco_inicial'];
	}

	$smarty->assign('pageNo', $pageNo);
	$smarty->assign('atualPage', $page_index);
	$smarty->assign('auctionsToDisplay', $auctionsPageX);

	$smarty->display('auctions/index.tpl');

?>
