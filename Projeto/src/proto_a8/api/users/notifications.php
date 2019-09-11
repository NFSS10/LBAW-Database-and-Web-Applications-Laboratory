<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/users.php');

	if (isset($_SESSION['username']) && !isset($_SESSION['admin'])) {

		$username = trim($_SESSION['username']);

		try {
			$user_id = getUser($username)['idutilizador'];
			$notifications = getAllNotifications($user_id);
		} catch (PDOException $e) {
			die($e->getMessage());
		}

		echo json_encode($notifications);
	}