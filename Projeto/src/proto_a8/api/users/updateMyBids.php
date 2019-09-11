<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/users.php');

if (!$_POST['user_id'] || !$_POST['limit'] || $_POST['offset'])
{
    $_SESSION['error_messages'][] = 'Update das licitações não foi possivel!';
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
else{

    $user_id = trim($_POST['user_id']);
    $limit = trim($_POST['limit']);
    $offset = trim($_POST['offset']);

    try{
        $userBidsAux = getUserBids($user_id);
    } catch (PDOException $e) {
        die($e->getMessage());
    }

    $userBids = array_slice($userBidsAux, $offset, $bids_per_page);

    echo json_encode($userBids);

}

?>