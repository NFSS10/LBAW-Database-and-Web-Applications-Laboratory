<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR . 'database/users.php');
	
	if(isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
		$user_id;
		if (!isset($_GET['id'])) {
			
			$user_id = getUser($username)['idutilizador'];
		} 
		else 
		{
			$user_id = trim($_GET['id']);
			
			
		}
		try {
				$session_id = getUser($username)['idutilizador'];
				$user_info = getUserInfo($user_id);
				$country = getCountryById($user_info['país']);
				$rating = getUserFeedback($user_id,$rateCounts);
				$feedbacks = getUserFeed($user_id);
				$isFollower = isFollowing($session_id,$user_id);
				$isAdmin = isAdminBool($session_id);
			} catch (PDOException $e) {
				die($e->getMessage());
			}
			
			
			foreach($feedbacks as &$feed)
			{
				$feedUser =  getUserName($feed['comprador']);
				$feed['compradorname']=$feedUser['username'];
			}
			
			$smarty->assign('Nome', $user_info['username']);
			$smarty->assign('Email', $user_info['email']);
			$smarty->assign('Pais', $country['nome']);
			$smarty->assign('Foto', $user_info['foto']);
			$smarty->assign('Rating', $rating);
			$smarty->assign('Count', $rateCounts);
			$smarty->assign('Feedbacks', $feedbacks);
			$smarty->assign('UserId', $user_id);
			$smarty->assign('IsFollower', $isFollower);
			$smarty->assign('IsAdmin', $isAdmin);			
			$smarty->assign('YourUsername', $_SESSION['username']);
			
			$smarty->display('users/viewProfile.tpl');
	}
	else
	{
		 $_SESSION['error_messages'][] = "Não tens permissão para visualizar o perfil do utilizador!";
		 header("Location:	$BASE_URL");
		 die;
	}
	
?>