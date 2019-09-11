<?php

	include_once('../../config/init.php');
	include_once($BASE_DIR . 'database/users.php');
	if(isset($_SESSION['username']))
	{
		$username = $_SESSION['username'];
		try 
		{
			$session_id = getUser($username)['idutilizador'];
			$isAdmin = isAdminBool($session_id);
		} 
		catch (PDOException $e) 
		{
			die($e->getMessage());
		}
		if($isAdmin)
		{
			try 
			{
				$leiloes = getAllLeiloes();
			} 
			catch (PDOException $e) 
			{
			die($e->getMessage());
			}
			$idLeilaoKey;
			foreach($leiloes[0] as $key => $value)
			{
				$idLeilaoKey=$key;
				break;
			}
		
			$smarty->assign('IdLeilaoKey', $idLeilaoKey);
			$smarty->assign('Leiloes', $leiloes);
			$smarty->display('users/adminLeiloes.tpl');
		}
		else
		{
			$_SESSION['error_messages'][] = "Não tens permiss�o para aceder!";
			header("Location:	$BASE_URL");
			die;
		}
		
	}
	else
	{
		 $_SESSION['error_messages'][] = "Não tens permissão para aceder!";
		 header("Location:	$BASE_URL");
		 die;
	}
	

?>