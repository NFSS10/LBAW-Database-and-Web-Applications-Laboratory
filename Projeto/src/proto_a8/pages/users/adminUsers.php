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
				$users = getAllUsers();
			} 
			catch (PDOException $e) 
			{
			die($e->getMessage());
			}
			
			$smarty->assign('Users', $users);
			$smarty->display('users/adminUsers.tpl');
		}
		else
		{
			$_SESSION['error_messages'][] = "Não tens permissão para aceder!";
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