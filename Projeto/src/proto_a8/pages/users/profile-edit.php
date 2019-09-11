<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/users.php');


if(!isset($_SESSION['username']))
{
	$smarty->assign('UserLoggedIn', false);
	$_SESSION['error_messages'][] = "Tens de estar logado para poder editar o perfil";
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
		$user_info = getUserInfo($user_id);
		$arrayPaises = getPaises();
	} catch (PDOException $e) {
		die($e->getMessage());
	}

	$smarty->assign('ImgSrc', $user_info['foto']);
	$smarty->assign('Username', $username);
	$smarty->assign('Nome', $user_info['nome']);
    $smarty->assign('UserPais', $user_info['país']);
	$smarty->assign('Pais', $arrayPaises);
	$smarty->assign('Genero', $user_info['género']);
	$smarty->assign('Email', $user_info['email']);


	$smarty->display('users/profile-edit.tpl');
}


?>
