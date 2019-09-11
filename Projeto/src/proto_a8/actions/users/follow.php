<?
include_once('../../config/init.php');
include_once($BASE_DIR . 'database/auctions.php');
include_once($BASE_DIR . 'database/users.php');

	if(isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
		if (!isset($_POST['id'])) {
			$_SESSION['error_messages'][] = "Utilizador não especificado!";
			header("Location:	$BASE_URL");
			die;
		} 
		else
		{
			$user_id = trim($_POST['id']);
			
			try {
				$follower_id = getUser($username)['idutilizador'];
				if(isAdminBool($follower_id))
				{
					$_SESSION['error_messages'][] = "Não podes seguir.";
					header("Location:	$BASE_URL");
					die;
				}
				follow($follower_id,$user_id);
				
			} catch (PDOException $e) {
				die($e->getMessage());
			}
			if (isset($_SERVER["HTTP_REFERER"])) {
				header("Location: " . $_SERVER["HTTP_REFERER"]);
			}
		}
		
	}
	else
	{
		 $_SESSION['error_messages'][] = "Não tens permissão para visualizar o perfil do utilizador!";
		 header("Location:	$BASE_URL");
		 die;
	}
?>