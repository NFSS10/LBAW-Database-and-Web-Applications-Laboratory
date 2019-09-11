<?php
    include_once ('../../config/init.php');
    include_once ($BASE_DIR . 'database/users.php');

    if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];

        try {
            $user_id = getUser($username);
        } catch (PDOException $e) {
            die($e->getMessage());
        }

        $smarty->assign('email', $user_id['email']);

        if($user_id['nome'] != null)
            $smarty->assign('nome', $user_id['nome']);
    }

    $smarty->display('users/contact.tpl');

?>