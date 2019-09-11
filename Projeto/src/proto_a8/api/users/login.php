<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/users.php');

	if (!$_POST['username'] || !$_POST['password'])
	{
		$_SESSION['error_messages'][] = 'Login Inválido!';
		$_SESSION['form_values'] = $_POST;
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}

$input = trim($_POST['username']);
	$password = trim($_POST['password']);

    try {
        $user = getLoginUser($input);
    } catch (PDOException $e) {
        $_SESSION['error_messages'][] = 'Tentativa de login inválido!';
        die($e->getMessage());
    }

    if (!($user && password_verify($password, $user['password']))) {
		$nothing = array ();
		echo json_encode($nothing);
	}
	else {
		$_SESSION['username'] = $user['username'];
		$_SESSION['avatar'] = $user['foto'];
		$_SESSION['idutilizador'] = $user['idutilizador'];

		if (isAdmin($user['idutilizador']))
			$_SESSION['admin'] = $user['idutilizador'];

		echo json_encode($user);
	}
?>