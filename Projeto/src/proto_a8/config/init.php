<?php
  error_reporting(E_ALL & ~E_NOTICE);

  session_set_cookie_params(3600, '/~lbaw1646/up201404380/src/proto_a8/');
  session_start();

  $BASE_DIR = '/opt/lbaw/lbaw1646/public_html/up201404380/src/proto_a8/';
  $BASE_URL = 'https://gnomo.fe.up.pt/~lbaw1646/up201404380/src/proto_a8/';
  $EMAIL = 'jorge_17ferreira@hotmail.com';

  $conn = new PDO('pgsql:host=dbm.fe.up.pt;dbname=lbaw1646', 'lbaw1646', 'iq28ms42');
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  include_once($BASE_DIR . 'lib/smarty/Smarty.class.php');

  $smarty = new Smarty;
  $smarty->template_dir = $BASE_DIR . 'templates/';
  $smarty->compile_dir = $BASE_DIR . 'templates_c/';


  $smarty->assign('BASE_URL', $BASE_URL);

  include_once($BASE_DIR . 'database/auctions.php');
  include_once($BASE_DIR . 'pages/templates/auctions/categories.php');


  $smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);
  $smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
  $smarty->assign('USERNAME', $_SESSION['username']);
  $smarty->assign('AVATAR', $_SESSION['avatar']);
  $smarty->assign('IDUTILIZADOR', $_SESSION['idutilizador']);
  $smarty->assign('ADMIN', $_SESSION['admin']);
  $smarty->assign('FORM_VALUES', $_SESSION['form_values']);
  $smarty->assign('CATEGORIES', $categories);

  unset($_SESSION['success_messages']);
  unset($_SESSION['error_messages']);
  unset($_SESSION['form_values']);

?>
