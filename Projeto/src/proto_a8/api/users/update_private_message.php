<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/users.php');

	if (isset($_SESSION['username']) && isset($_GET['id']))
	{
		$username = trim($_SESSION['username']);
		$id = $_GET['id'];

		try {
			$user_id = getUser($username)['idutilizador'];
			updateMessageSetRead($id, $user_id);
		} catch (PDOException $e) {
			die($e->getMessage());
		}

		echo json_encode();
	}