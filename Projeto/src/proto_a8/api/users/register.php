<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/users.php');

	if (!$_POST['username'] || !$_POST['password'] || !$_POST['email'] || !$_POST['bday'] || !$_POST['rdate'])
	{
		$_SESSION['error_messages'][] = 'Tentativa de registo inválido!';
		header('Location: ' . $_SERVER['HTTP_REFERER']);
		exit;
	}

	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$email = trim($_POST['email']);
	$bday = trim($_POST['bday']);
	$rdate = trim($_POST['rdate']);

	try {
		$countUsername = checkIfUsernameExists(($username));
		$countEmail = checkIfEmailExists(($email));
	} catch (PDOException $e) {
		$_SESSION['error_messages'][] = 'Tentativa de registo inválido!';
		die($e->getMessage());
	}


	if($countUsername)
	{
		echo json_encode(array("reason" => "O username introduzido já existe!"));
	}
	else if ($countEmail){
		echo json_encode(array("reason" => "O email introduzido já existe!"));
	}
	else
	{
		try {
			createUser($username, password_hash($password, PASSWORD_BCRYPT), $email, $bday, $rdate);
		} catch (PDOException $e) {
			$_SESSION['error_messages'][] = "Erro na criação de um utilizador!";
			die($e->getMessage());
		}

		$empty = array();
		echo json_encode($empty);
	}
?>