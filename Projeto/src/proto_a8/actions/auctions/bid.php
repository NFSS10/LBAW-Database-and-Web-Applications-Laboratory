<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/auctions.php');
include_once($BASE_DIR . 'database/users.php');

if (!isset($_SESSION['username']))
{
  $_SESSION['error_messages'][] = "Não tens permissões para licitar num leilão!";
  header("Location:	$BASE_URL");
  die;
}
else
{
  $username = $_SESSION['username'];
  $valor_licitacao = $_POST["valor_licitacao"];
  $id_leilao = $_POST["id_leilao"];

  try
  {
      $id_utilizador = getUser($username)['idutilizador'];
      $data = date("Y-m-d H:i:s");

      addBid($valor_licitacao, $data, $id_leilao, $id_utilizador);

  } catch (PDOException $e)
  {
    if(strcmp($e->getMessage(),"SQLSTATE[P0001]: Raise exception: 7 ERROR: Licitation must be higher than the last one."))
    {
      $_SESSION['error_messages'][] = "Não tens permissões para licitar num leilão!";
      header("Location:	" .$BASE_URL. "pages/auctions/productPage.php?id=$id_leilao");
    }
    else
    {
      die($e->getMessage());
    }
  }

  header("Location:	" .$BASE_URL. "pages/auctions/productPage.php?id=$id_leilao");
  die;

}


?>
