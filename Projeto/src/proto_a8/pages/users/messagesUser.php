<?php

	include_once('../../config/init.php');
	include_once($BASE_DIR . 'database/users.php');

	if(!isset($_SESSION['username']))
	{
		$smarty->assign('UserLoggedIn', false);
		$_SESSION['error_messages'][] = "Tens de estar logado para poder ver as mensagens";
		header("Location:	$BASE_URL");
		die;
	}
	else
	{
		$username = $_SESSION['username'];
		$smarty->assign('UserLoggedIn', true);

		$user_id = getUser($username)['idutilizador'];

		try
		{
			$msgRecebidas = getUserMessages_received($user_id);
			$msgEnviadas = getUserMessages_sent($user_id);

			foreach($msgRecebidas as $key => $value)
				$msgRecebidas[$key]['extrato'] = substr($msgRecebidas[$key]['mensagem'],0,21).' ...';

			foreach($msgEnviadas as $key => $value)
				$msgEnviadas[$key]['extrato'] = substr($msgEnviadas[$key]['mensagem'],0,21).' ...';

		} catch (PDOException $e) {
			die($e->getMessage());
		}


		$smarty->assign('msgRecebidas', $msgRecebidas);
		$smarty->assign('msgEnviadas', $msgEnviadas);

		$smarty->display('users/messagesUser.tpl');
	}

?>