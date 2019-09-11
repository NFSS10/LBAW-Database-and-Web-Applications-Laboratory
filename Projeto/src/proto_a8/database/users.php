<?php

  function createUser($username, $password, $email, $bday, $rdate)
  {
	  global $conn;

      $conn->beginTransaction();
      try {
          $sql = "SET TRANSACTION ISOLATION LEVEL READ UNCOMMITTED;";
          $stmt = $conn->prepare($sql);
          $stmt->execute();


          $sql = "WITH ROWS AS (
				  INSERT INTO utilizador (dataregisto, password, email, username, datanascimento) VALUES (?, ?, ?, ?, ?) RETURNING utilizador.idutilizador
				)
				INSERT INTO utilizadorautenticado (idutilizador)
				  SELECT idutilizador
				  FROM ROWS;";
          $stmt = $conn->prepare($sql);
          $stmt->execute(array($rdate, $password, $email, $username, $bday));

          $conn->commit();

      } catch (Exception $e) {
          $conn->rollBack();
          echo "Failed: " . $e->getMessage();
      }
  }

  function getUser($username) {
	  global $conn;
	  $stmt = $conn->prepare("SELECT *
							  FROM utilizador
							  WHERE username = ?");
      $stmt->execute(array($username));
      return $stmt->fetch();
	}

	function getLoginUser($input) {
		global $conn;
		$stmt = $conn->prepare("SELECT utilizador.idutilizador as idutilizador, bloqueado, foto, username, password
				FROM utilizador LEFT JOIN utilizadorautenticado ON utilizador.idutilizador = utilizadorautenticado.idutilizador
				  LEFT JOIN administrador ON utilizador.idutilizador = administrador.idutilizador
				WHERE username = ? OR email = ?;");
		$stmt->execute(array($input, $input));
		return $stmt->fetch();
	}

function getUserInfo($id)
{
  global $conn;
  $stmt = $conn->prepare("SELECT *
                FROM utilizador
                WHERE idutilizador = ?");
  $stmt->execute(array($id));
  return $stmt->fetch();
}

function updateUserInfo($nome, $email, $país, $foto, $genero, $id)
{
  global $conn;
  $stmt = $conn->prepare(
    "UPDATE utilizador
    SET nome = ?, email = ?, país = ?, género = ?
    WHERE idutilizador = ?");
  $stmt->execute(array($nome, $email, $país, $genero, $id));
}

function updateUserPhoto($foto, $id)
{
	global $conn;
  $stmt = $conn->prepare(
      "UPDATE utilizador
    SET foto = ?
    WHERE idutilizador = ?");
  $stmt->execute(array($foto, $id));
}


function updatePassword($password, $id)
{
    global $conn;
    $stmt = $conn->prepare(
        "UPDATE utilizador
    				SET password = ?
    				WHERE idutilizador = ?");
    $stmt->execute(array($password, $id));
}

function addPrivateMessage($titulo, $conteudo, $data, $idDestinatario, $idRemetente)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO mensagemprivada(titulo, conteúdo, DATA, visualizada, idDestinatário, idRemetente) VALUES(?, ?, ?, ?, ?, ?)");
    $stmt->execute(array($titulo, $conteudo, $data, 0, $idDestinatario, $idRemetente));
}


function getCountryById($id)
{
  global $conn;
  $stmt = $conn->prepare("SELECT *
                FROM país
                WHERE idPaís = ?");
  $stmt->execute(array($id));
  return $stmt->fetchAll();
}

function getPaises()
{
  global $conn;
  $stmt = $conn->prepare("SELECT *
                FROM país");
  $stmt->execute(array());
  return $stmt->fetchAll();
}

	function checkIfUsernameExists($username) {
		global $conn;
		$stmt = $conn->prepare("SELECT *
								  FROM utilizador
								  WHERE username = ?");
		$stmt->execute(array($username));
		return $stmt->fetchAll();
	}

	function checkIfEmailExists($email) {
		global $conn;
		$stmt = $conn->prepare("SELECT *
									  FROM utilizador
									  WHERE email = ?");
		$stmt->execute(array($email));
		return $stmt->fetchAll();
	}

function getUserName($user_id) {
    global $conn;
    $stmt = $conn->prepare("SELECT username
							  FROM utilizador
							  WHERE idutilizador = ?");
    $stmt->execute(array($user_id));
    return $stmt->fetch();
}

function getUserPhoto($user_id)
{
    global $conn;
    $stmt = $conn->prepare("SELECT foto
							  FROM utilizador
							  WHERE idutilizador = ?");
    $stmt->execute(array($user_id));
    return $stmt->fetch();
}

function getUserPhotoByUserName($username)
{
    global $conn;
    $stmt = $conn->prepare("SELECT foto
							  FROM utilizador
							  WHERE username = ?");
    $stmt->execute(array($username));
    return $stmt->fetch();
}

	function isAdmin($id) {
		global $conn;
		$stmt = $conn->prepare("SELECT *
							  FROM administrador
							  WHERE idutilizador = ?");
	  $stmt->execute(array($id));
	  return $stmt->fetchAll();
	}


	function getAdminInfo($id)
	{
		global $conn;
		$stmt = $conn->prepare("SELECT *
								  FROM administrador
								  WHERE idutilizador = ?");
		$stmt->execute(array($id));
		return $stmt->fetchAll();
	}

function getUserFeedback($id,&$count)
{
	global $conn;
	$media=0;
	$sum = 0;
	$stmt = $conn->prepare("SELECT *
								  FROM feedback JOIN leilão ON leilão.idLeilão=feedback.idLeilão JOIN utilizador ON leilão.vendedor=utilizador.idutilizador 
								  WHERE idutilizador = ?");
	$stmt->execute(array($id));
	$feedbacks = $stmt->fetchAll();
	foreach ($feedbacks as $feedback)
	{
		$sum = $sum + $feedback['pontuação'];
	}
	$count = count($feedbacks);
	if(count($feedbacks)!=0)
	{
		$media = $sum / count($feedbacks);
	}
	return $media;
}
function getUserFeed($id)
{
	global $conn;
	$media=0;
	$sum = 0;
	$stmt = $conn->prepare("SELECT *
								  FROM feedback 
								  JOIN leilão ON leilão.idLeilão=feedback.idLeilão 
								  JOIN utilizador ON leilão.vendedor=utilizador.idutilizador 
								  WHERE idutilizador = ?");
	$stmt->execute(array($id));
	return $stmt->fetchAll();
}

	function getUserMessages_received($id_destinatario)
	{
        global $conn;
        $stmt = $conn->prepare("SELECT idmp, titulo, conteúdo as mensagem, data, visualizada, username
								  FROM mensagemprivada INNER JOIN utilizador ON mensagemprivada.idremetente = utilizador.idutilizador
								  WHERE idDestinatário = ?");
        $stmt->execute(array($id_destinatario));
        return $stmt->fetchAll();
	}

	function getUserMessages_sent($id_remetente)
	{
		global $conn;
		$stmt = $conn->prepare("SELECT idmp, titulo, conteúdo as mensagem, data, username
FROM mensagemprivada INNER JOIN utilizador ON mensagemprivada.iddestinatário = utilizador.idutilizador
WHERE idremetente = ?");
		$stmt->execute(array($id_remetente));
		return $stmt->fetchAll();
	}


	function getMyBidsInfo($user_id)
	{
		global $conn;
		$stmt = $conn->prepare("SELECT titulo, data_final, mymaxbid, MAX(valor) AS maxbid
			FROM (SELECT leilão.idleilão, titulo, data_final, MAX(valor) AS mymaxbid
					  FROM licitação INNER JOIN leilão
					  ON licitação.idleilão = leilão.idleilão
					  WHERE licitação.idutilizador = ?
					  GROUP BY licitação.idleilão, leilão.titulo, data_final, leilão.idleilão) AS myBidsInfo INNER JOIN
			  licitação
			  ON licitação.idleilão = myBidsInfo.idleilão
			  GROUP BY titulo, data_final, mymaxbid");
		$stmt->execute(array($user_id));
		return $stmt->fetchAll();
	}

	function getMyAuctionsInfo($user_id)
	{
		global $conn;
		$stmt = $conn->prepare("SELECT titulo, data_final, MAX(valor) AS maxbid
								FROM (
									SELECT titulo, data_final, idleilão
									 FROM leilão
									  WHERE vendedor = ?) AS leilInfo
							  	INNER JOIN licitação
									ON licitação.idleilão = leilInfo.idleilão
								GROUP BY titulo, data_final");
		$stmt->execute(array($user_id));
		return $stmt->fetchAll();
	}

function getMyShoppings($user_id)
{
	global $conn;
	$stmt = $conn->prepare("SELECT idleilão as auction_id, titulo, data_final, maxbid, username, utilizador.idutilizador
	FROM (
       SELECT aux.idleilão, titulo, data_final, maxbid, vendedor
       FROM (
              SELECT max(valor) as maxbid, leilão.idleilão
              FROM leilão INNER JOIN licitação
                  ON leilão.idleilão = licitação.idleilão
              GROUP BY leilão.idleilão
              ORDER BY leilão.idleilão ASC) AS aux INNER JOIN
         (SELECT titulo, data_final, max(valor) as max_user_bid, leilão.idleilão, leilão.vendedor
          FROM licitação INNER JOIN leilão
              ON licitação.idleilão = leilão.idleilão
          WHERE idutilizador = ? AND leilão.estado = 'Terminado'
          GROUP BY licitação.idleilão, leilão.idleilão, titulo, data_final
         ) AS aux2
           ON aux.idleilão = aux2.idleilão
       WHERE maxbid = max_user_bid) AS finalAux INNER JOIN utilizador
    ON utilizador.idutilizador = finalAux.vendedor");
	$stmt->execute(array($user_id));
	return $stmt->fetchAll();
}

	function getMySales($user_id)
	{
		global $conn;
		$stmt = $conn->prepare("
			SELECT idleilão as auction_id, titulo, data_final, maxbid, username, utilizador.idutilizador
			FROM (SELECT leilão.idleilão, titulo, data_final, valor as maxbid, idutilizador  FROM leilão INNER JOIN licitação
				ON leilão.idleilão = licitação.idleilão
			WHERE leilão.estado = 'Terminado' AND leilão.idleilão IN (SELECT leilão.idleilão FROM leilão WHERE vendedor = ?)
			GROUP BY leilão.idleilão, valor, idutilizador
				  ORDER BY valor DESC
		    LIMIT 1) AS auctionInfo INNER JOIN utilizador
		ON auctionInfo.idutilizador = utilizador.idutilizador");
		$stmt->execute(array($user_id));
		return $stmt->fetchAll();
	}


	function getPeopleIFollow($user_id){

		global $conn;
		$stmt = $conn->prepare("
			SELECT username, idutilizador FROM utilizador INNER JOIN
			  (SELECT idseguidor2 FROM seguidor
			  WHERE idseguidor1 = ?) AS seguidos
 			 ON idseguidor2 = idutilizador;");
		$stmt->execute(array($user_id));
		return $stmt->fetchAll();
	}

	function getWishList($user_id){
		global $conn;
		$stmt = $conn->prepare("
			SELECT titulo, username, vendedor, idleilao FROM (
				SELECT titulo, vendedor, favorito.idleilão as idleilao FROM favorito INNER JOIN leilão
				  ON favorito.idleilão = leilão.idleilão
				WHERE idutilizador = ?) AS wishInfo INNER JOIN utilizador
			  ON utilizador.idutilizador = vendedor");
		$stmt->execute(array($user_id));
		return $stmt->fetchAll();
	}

	function deleteWishedProduct($user_id, $auction_id)
	{
		global $conn;
		$stmt = $conn->prepare("DELETE FROM favorito WHERE idUtilizador = ? AND idLeilão = ?");
		$stmt->execute(array($user_id, $auction_id));
	}

	function addWishedProduct($user_id, $auction_id) {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO favorito(idUtilizador, idLeilão) VALUES(?, ?)");
        $stmt->execute(array($user_id, $auction_id));
    }

    function alreadyGotProductInWL($user_id, $auction_id)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM favorito WHERE idutilizador = ? AND idleilão = ?");
        $stmt->execute(array($user_id, $auction_id));
        return $stmt->fetch() == true;
    }

	function getAllNotifications($user_id)
	{
		global $conn;
		$stmt = $conn->prepare("SELECT DATA, info, visualizada, titulo_leilão, notLei.idleilão, notLei.idnotificação FROM
  (SELECT DATA, info, visualizada, titulo AS titulo_leilão, leilão.idleilão, idnotificação
   FROM notleilãoterminado INNER JOIN leilão ON
                                               notleilãoterminado.idleilão = leilão.idleilão) AS notLei INNER JOIN
  notutilizadorleilão ON notutilizadorleilão.idnotificação = notLei.idnotificação
WHERE notutilizadorleilão.idutilizador = ? AND visualizada = false
UNION
SELECT DATA, info, visualizada, titulo AS titulo_leilão, leilão.idLeilão, idnotificação FROM
  (SELECT DATA, info, visualizada, idleilão, idutilizador, notlicitaçãoultrapassada.idnotificação FROM
    utilizadorlicultrapassada INNER JOIN notlicitaçãoultrapassada
      ON utilizadorlicultrapassada.idnotificação = notlicitaçãoultrapassada.idnotificação) AS notLic INNER JOIN
  leilão ON leilão.idLeilão = notLic.idleilão
WHERE notLic.idutilizador = ? AND visualizada = false
ORDER BY DATA;");
		$stmt->execute(array($user_id, $user_id));
		return $stmt->fetchAll();
	}

	function setNotificationRead($notificationid, $tipo)
	{
		global $conn;

		if($tipo == "Leilão terminado") {
			$stmt = $conn->prepare("UPDATE notleilãoterminado SET visualizada = true WHERE idnotificação = ?");
			$stmt->execute(array($notificationid));
		}
		else
		{
			$stmt = $conn->prepare("UPDATE notlicitaçãoultrapassada SET visualizada = true WHERE idnotificação = ?");
			$stmt->execute(array($notificationid));
		}
	}

	function getUserBids($user_id)
	{
		global $conn;
		$stmt = $conn->prepare("
		SELECT my_max_bids.idleilao as idleilao, titulo, data_final, data_inicio, max_valor, my_bid FROM
	
	  (SELECT max(valor) as my_bid, leilão.idleilão as idleilao
	   FROM leilão INNER JOIN licitação
		   ON licitação.idleilão = leilão.idleilão
	   WHERE licitação.idutilizador = ?
	   GROUP BY leilão.idleilão) AS my_max_bids INNER JOIN
	
	  (SELECT leilão.idleilão as idleilao, leilão.titulo, leilão.data_final, leilão.data_inicio, valor as max_valor from leilão
	  LEFT JOIN (SELECT max(valor) as valor, idleilão
				 FROM licitação
				 GROUP BY idleilão) as lic
		ON leilão.idleilão = lic.idleilão
	WHERE leilão.estado = 'Em progresso'
	ORDER BY valor DESC) AS max_auct_bids
	  ON max_auct_bids.idleilao = my_max_bids.idleilao");
		$stmt->execute(array($user_id));
		return $stmt->fetchAll();
	}

	function getNumberOfUnreadPMs($user_id)
	{
		global $conn;
		$stmt = $conn->prepare("SELECT count(*) from mensagemprivada WHERE visualizada = false AND iddestinatário = ?;");
		$stmt->execute(array($user_id));
		return $stmt->fetch();
	}

	function addFeedback($score, $comment, $origin, $client, $auction_id)
	{

		global $conn;
		$stmt = $conn->prepare("INSERT INTO feedback(pontuação, comentário, origem, comprador, idLeilão) VALUES(?, ?, ?, ?, ?)");
		$stmt->execute(array($score, $comment, $origin, $client, $auction_id));
	}

	function updateMessageSetRead($id, $destinatário)
	{
		global $conn;
		$stmt = $conn->prepare("UPDATE mensagemprivada SET
					  visualizada = TRUE
					WHERE idmp = ? AND iddestinatário = ?;");
		$stmt->execute(array($id, $destinatário));
	}

function isAdminBool($id) {
	global $conn;
	$stmt = $conn->prepare("SELECT *
							  FROM administrador
							  WHERE idutilizador = ?");
	$stmt->execute(array($id));
	$results = $stmt->fetchAll();
	if(count($results)>0)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function follow($followerId, $user_id)
{
	global $conn;
	$stmt = $conn->prepare("INSERT INTO seguidor (idSeguidor1 , idSeguidor2) VALUES (?, ?)");
	$stmt->execute(array($followerId, $user_id));
}

function unfollow($followerId, $user_id)
{
	global $conn;
	$stmt = $conn->prepare("DELETE FROM seguidor WHERE idSeguidor1 = ? AND idSeguidor2 = ?");
	$stmt->execute(array($followerId, $user_id));
}

function isFollowing($followerId, $user_id)
{
	global $conn;
	$stmt = $conn->prepare("SELECT * FROM seguidor WHERE idSeguidor1= ? AND idSeguidor2= ?");
	$stmt->execute(array($followerId, $user_id));
	$results = $stmt->fetchAll();

	if(count($results)>0)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function get4users()
{
	global $conn;
	$stmt = $conn->prepare("SELECT * FROM utilizador 
								ORDER BY idUtilizador DESC 
								LIMIT 4");
	$stmt->execute();
	return $stmt->fetchAll();
}

function get4leiloes()
{
	global $conn;
	$stmt = $conn->prepare("SELECT leilão.idLeilão, titulo, username, email, data_final, descrição, imagepath FROM leilão 
								INNER JOIN utilizador
								ON utilizador.idutilizador = leilão.vendedor
								JOIN foto
								ON leilão.idLeilão = foto.idLeilão
								ORDER BY leilão.idLeilão DESC
								LIMIT 4");
	$stmt->execute();
	return $stmt->fetchAll();
}

function get4mensagens($user_id)
{
	global $conn;
	$stmt = $conn->prepare("SELECT idMP, titulo , idDestinatário, idRemetente , username FROM mensagemprivada
								JOIN utilizador
								ON mensagemprivada.idRemetente = utilizador.idUtilizador
								WHERE idDestinatário = ?
								ORDER BY idMP DESC 
								LIMIT 4");
	$stmt->execute(array($user_id));
	return $stmt->fetchAll();
}

function getAllUsers()
{
	global $conn;
	$stmt = $conn->prepare("SELECT * FROM utilizadorautenticado 
								JOIN utilizador
								ON utilizadorautenticado.idUtilizador = utilizador.idUtilizador
								");
	$stmt->execute();
	return $stmt->fetchAll();
}

function banUser($user_id)
{
	global $conn;
	$stmt = $conn->prepare("UPDATE utilizadorautenticado
								SET bloqueado = true
								WHERE idUtilizador = ?
								");
	$stmt->execute(array($user_id));
}

function unbanUser($user_id)
{
	global $conn;
	$stmt = $conn->prepare("UPDATE utilizadorautenticado
								SET bloqueado = false
								WHERE idUtilizador = ?
								");
	$stmt->execute(array($user_id));
}

function getAllLeiloes()
{
	global $conn;
	$stmt = $conn->prepare("SELECT * FROM leilão  
								JOIN utilizador
								ON leilão.vendedor = utilizador.idUtilizador
								JOIN foto
								ON leilão.idLeilão = foto.idLeilão
								");
	$stmt->execute();
	return $stmt->fetchAll();
}

function removeLeilao($idleilao)
{
	global $conn;
	$stmt = $conn->prepare("DELETE FROM leilão  WHERE idLeilão = ?");
	$stmt->execute(array($idleilao));
}

function getAllComments()
{
	global $conn;
	$stmt = $conn->prepare("SELECT idQuestão, questão, leilão.idLeilão, questão.idUtilizador, username, titulo, imagepath FROM questão  
								JOIN utilizador
								ON questão.idUtilizador = utilizador.idUtilizador
								JOIN leilão
								ON questão.idLeilão = leilão.idLeilão
								JOIN foto
								ON questão.idLeilão = foto.idLeilão
								");
	$stmt->execute();
	return $stmt->fetchAll();
}


function getRespostas($idComment)
{
	global $conn;
	$stmt = $conn->prepare("SELECT * FROM resposta WHERE idQuestão = ? ");
	$stmt->execute(array($idComment));
	return $stmt->fetchAll();
}

function removeQuestao($idQuestao)
{
	global $conn;
	$stmt = $conn->prepare("DELETE FROM questão  WHERE idQuestão = ?");
	$stmt->execute(array($idQuestao));
	$stmt = $conn->prepare("DELETE FROM resposta  WHERE idQuestão = ?");
	$stmt->execute(array($idQuestao));
}



?>
