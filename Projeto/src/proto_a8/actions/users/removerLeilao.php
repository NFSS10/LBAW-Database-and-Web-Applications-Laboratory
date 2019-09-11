<?php

	include_once('../../config/init.php');
	include_once($BASE_DIR . 'database/users.php');
	if(isset($_SESSION['username']) && isset($_POST['idleilao']))
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
			removeLeilao($_POST['idleilao']);
			if (isset($_SERVER["HTTP_REFERER"])) {
				header("Location: " . $_SERVER["HTTP_REFERER"]);
			}
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