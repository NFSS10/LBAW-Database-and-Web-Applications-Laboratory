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

        $auctions_per_page = 10;

        $current_user = $_SESSION['username'];

        if (!isset($_GET['id'])) {
            $username = $current_user;
            $smarty->assign('my_auctions', 'true');

            try {
                $user_id = getUser($username)['idutilizador'];
                $userSales = getUserAuctions($user_id);

                $isAdmin = isAdmin($user_id);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        } else {
            $username = getUserInfo($_GET['id'])['username'];

            try {
                $user_id = getUser($username)['idutilizador'];
                $userSales = getUserAuctions($user_id);

                $current_user_id = getUser($current_user)['idutilizador'];
                $isAdmin = isAdmin($current_user_id);
            } catch (PDOException $e) {
                die($e->getMessage());
            }

            if($_GET['id'] == $current_user_id)
                $smarty->assign('my_auctions', 'true');
            else
                $smarty->assign('my_auctions', 'false');
        }

        $smarty->assign('usernameAuctions', $username);
        $smarty->assign('userIdAuctions', $user_id);

        if (count($isAdmin) != 0)
            $smarty->assign('isAdmin', 'true');
        else
            $smarty->assign('isAdmin', 'false');

		if (($numberOfAuctions = count($userSales)) == 0)
			$smarty->assign('noAuctions', 'true');
		else {
			$pageNo = ceil($numberOfAuctions / $auctions_per_page);
			$offset = ($page_index - 1) * $auctions_per_page;

			if ($page_index > $pageNo || $page_index < 1) {
				$_SESSION['error_messages'][] = "Tentou aceder a uma página de listagem de leilões que não existe!";
				header("Location:	$BASE_URL");
				die;
			}
			else
			{
				include_once($BASE_DIR . 'pages/templates/pagination/paginationRange.php');

				$pagination = array('atualPage' => $page_index, 'lowerBound' => $page_lower, 'upperBound' => $page_upper, 'pageNo' => $pageNo);

				$smarty->assign('pagination', $pagination);

				foreach ($userSales as $key => $value)
				{
					$delta_time = strtotime($value['data_final']) - time();
					$hours = floor($delta_time / 3600);
					$delta_time %= 3600;
					$minutes = floor($delta_time / 60);
					$delta_time %= 60;
					$seconds = floor($delta_time);

					$userSales[$key]['tempo_restante'] = $hours.':'.$minutes.':'.$seconds;
					$userSales[$key]['width_bar'] = (strtotime($value['data_final'])-time())/(strtotime($value['data_final'])-strtotime($value['data_inicio']))*100;


				}
                $userSalesAux = array_slice($userSales, $offset, $auctions_per_page);
				$smarty->assign('auctions', $userSalesAux);
			}
		}
		$smarty->display('users/user_auctions.tpl');
	}