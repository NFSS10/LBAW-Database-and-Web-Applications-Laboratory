<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/users.php');

	if (isset($_SESSION['username']) && !isset($_SESSION['admin']) && $_POST['idNotificacao'] && $_POST['tipo']) {

		$notificationid = $_POST['idNotificacao'];
		$tipo = $_POST['tipo'];

		try {
			setNotificationRead($notificationid, $tipo);
		} catch (PDOException $e) {
			die($e->getMessage());
		}

		echo json_encode();
	}