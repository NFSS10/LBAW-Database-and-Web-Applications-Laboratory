<?php

function getAuctionInfo($auction_id)
{
    global $conn;
    $stmt = $conn->prepare(
    "SELECT * FROM
        (SELECT leilão.vendedor, leilão.idLeilão, titulo, descrição, data_inicio, data_final FROM
          leilão INNER JOIN utilizador
            ON leilão.vendedor = utilizador.idutilizador) AS leilaoUtilizador
    INNER JOIN licitação
    ON leilaoUtilizador.idleilão = licitação.idleilão
    WHERE leilaoUtilizador.idleilão = ?
    ORDER BY licitação.valor DESC
    LIMIT 1;");
    $stmt->execute(array($auction_id));
    return $stmt->fetchAll();
}

function getAuctionInfoWOBids($auction_id)
{
    global $conn;
    $stmt = $conn->prepare(
        "SELECT leilão.vendedor, leilão.idLeilão, titulo, descrição, preco_inicial, data_inicio, data_final FROM
          leilão INNER JOIN utilizador
            ON leilão.vendedor = utilizador.idutilizador
            WHERE leilão.idleilão = ?;");

    $stmt->execute(array($auction_id));
    return $stmt->fetchAll();
}

function getAuctionPhotos($auction_id) {
    global $conn;
    $stmt = $conn->prepare(
        "SELECT imagepath, foto.idfoto FROM leilão, foto
          WHERE leilão.idleilão = foto.idleilão AND foto.idleilão = ?");
    $stmt->execute(array($auction_id));
    return $stmt->fetchAll();
}

function hasBids($auction_id){

    global $conn;
    $stmt = $conn->prepare("SELECT *
							  FROM leilão INNER JOIN licitação
							  ON leilão.idleilão = licitação.idleilão
							  WHERE leilão.idleilão = ?");
    $stmt->execute(array($auction_id));
    return $stmt->fetch() == true;
}

function hasFinished($auction_id)
{
    global $conn;
    $stmt = $conn->prepare("SELECT *
							  FROM leilão
							  WHERE leilão.idleilão = ? AND estado = 'Terminado';");
    $stmt->execute(array($auction_id));
    return $stmt->fetch() == true;
}

function isTOwner($user_id, $auction_id)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM utilizador INNER JOIN leilão ON vendedor = idutilizador
                              WHERE vendedor = ? AND idleilão = ?");
    $stmt->execute(array($user_id, $auction_id));
    return $stmt->fetch() == true;
}

function getQuestionsAndPhotos($auction_id)
{
    global $conn;
    $stmt = $conn->prepare(
        "SELECT idquestão AS idquestao,questão AS questao, foto, username, data, questaoInfo.idutilizador FROM
          (SELECT idquestão ,questão, questão.idutilizador, questão.data FROM questão INNER JOIN leilão
            ON leilão.idleilão = questão.idleilão
            WHERE  leilão.idleilão = ?) AS questaoInfo INNER JOIN utilizador
          ON questaoInfo.idutilizador = utilizador.idutilizador");
    $stmt->execute(array($auction_id));
    return $stmt->fetchAll();
}

function getAnswerToQuestion($question_id, $auction_id)
{
    global $conn;
    $stmt = $conn->prepare(
        "SELECT resposta, foto, data, username, idutilizador FROM
  (SELECT resposta, idleilão, resposta.data FROM resposta, questão
  WHERE  resposta.idquestão = questão.idquestão AND resposta.idquestão = ?) AS respostaInfo INNER JOIN
  (SELECT foto, idleilão, username, idutilizador FROM leilão INNER JOIN utilizador
      ON leilão.vendedor = idutilizador) AS leilaoFoto
    ON leilaoFoto.idleilão = respostaInfo.idleilão
    WHERE leilaoFoto.idleilão = ?");
    $stmt->execute(array($question_id, $auction_id));
    return $stmt->fetch();
}

function getNoAuctions()
{
    global $conn;
    $stmt = $conn->prepare("SELECT count(*) FROM leilão WHERE estado = 'Em progresso'");
    $stmt->execute();
    return $stmt->fetch();
}

function getAuctionsFromPageX($limit, $offset)
{
    global $conn;
    $stmt = $conn->prepare(
        "SELECT idleilão as idleilao, titulo, preco_inicial FROM leilão
                  WHERE estado = 'Em progresso'
                              ORDER BY data_inicio DESC
                              LIMIT ?
                              OFFSET ?");
    $stmt->execute(array($limit, $offset));
    return $stmt->fetchAll();
}

function getOnePhoto($auction_id)
{
    global $conn;
    $stmt = $conn->prepare(
        "SELECT imagepath as photo FROM leilão
          INNER JOIN foto ON foto.idleilão = leilão.idleilão
          WHERE leilão.idleilão = ?
          LIMIT 1");
    $stmt->execute(array($auction_id));
    return $stmt->fetch();
}

function getMaxBid($auction_id)
{
    global $conn;
    $stmt = $conn->prepare("SELECT max(valor)
							  FROM leilão INNER JOIN licitação
							  ON leilão.idleilão = licitação.idleilão
							  WHERE leilão.idleilão = ?");
    $stmt->execute(array($auction_id));
    return $stmt->fetch();
}

function getMaxBidAndUser($auction_id)
{
    global $conn;
    $stmt = $conn->prepare("SELECT max(valor), licitação.idutilizador as user
FROM leilão INNER JOIN licitação
    ON leilão.idleilão = licitação.idleilão
WHERE leilão.idleilão = ?
GROUP BY licitação.idutilizador, valor
ORDER BY max(valor) DESC
LIMIT 1;");
    $stmt->execute(array($auction_id));
    return $stmt->fetch();
}


function addBid($valor, $data, $id_leilao, $id_utilizador)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO licitação(valor, DATA, idLeilão, idUtilizador) VALUES(?, ?, ?, ?)");
    $stmt->execute(array($valor, $data, $id_leilao, $id_utilizador));
}

function addAuction($titulo, $descrição, $preco_inicial, $data_inicio, $data_final, $idCategoria, $estado, $vendedor)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO leilão(titulo, descrição, preco_inicial, data_inicio, data_final, idCategoria, estado, vendedor) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute(array($titulo, $descrição, $preco_inicial, $data_inicio, $data_final, $idCategoria, $estado, $vendedor));
}

function addQuestion($date, $question, $auction_id, $user_id)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO questão(DATA, questão, idLeilão, idUtilizador) VALUES(?, ?, ?, ?)");
    $stmt->execute(array($date, $question, $auction_id, $user_id));
}

function addAnswer($date, $answer, $question_id)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO resposta(DATA, resposta, idQuestão) VALUES(?, ?, ?)");
    $stmt->execute(array($date, $answer, $question_id));
}

function getUserAuctions($user_id)
{
	global $conn;
	$stmt = $conn->prepare("SELECT leilão.idleilão as idleilao, leilão.titulo, leilão.data_final, leilão.data_inicio, valor from leilão
									  LEFT JOIN (SELECT max(valor) as valor, idleilão
												 FROM licitação
												 GROUP BY idleilão) as lic
										ON leilão.idleilão = lic.idleilão
									WHERE leilão.vendedor = ? AND leilão.estado = 'Em progresso'
									ORDER BY valor DESC;");
	$stmt->execute(array($user_id));
	return $stmt->fetchAll();
}


    function deleteAuction($auction_id)
    {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM leilão WHERE idleilão = ?;");
        $stmt->execute(array($auction_id));
    }

    function getAuctionByIdAndSeller($auction_id, $seller_id)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM leilão WHERE idleilão = ? AND vendedor = ?");
        $stmt->execute(array($auction_id, $seller_id));
        return $stmt->fetchAll();
    }

    function getNumberOfBids($auction_id)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT count(*) AS total FROM leilão
                                          INNER JOIN licitação
                                            ON leilão.idleilão = licitação.idleilão
                                        WHERE leilão.idleilão = ?
                                        GROUP BY leilão.idleilão;");
        $stmt->execute(array($auction_id));
        return $stmt->fetch();
    }

    function addPhoto($auction_id, $path)
    {
        global $conn;
        $stmt = $conn->prepare("INSERT INTO foto(imagepath, idLeilão) VALUES (?, ?)");
        $stmt->execute(array($path, $auction_id,));
    }

    function deletePhoto($auction_id, $photo_id)
    {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM foto WHERE idleilão = ? AND foto.idfoto = ?");
        $stmt->execute(array($auction_id, $photo_id));
    }

    function getRewritableInfo($auction_id)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT titulo, descrição, preco_inicial, data_final, data_inicio FROM leilão WHERE idleilão = ?");
        $stmt->execute(array($auction_id));
        return $stmt->fetch();
    }

    function updateInfo($title, $description, $starter_price, $final_date, $auction_id)
    {
        global $conn;
        $stmt = $conn->prepare("UPDATE leilão SET titulo = ?, descrição = ?, preco_inicial = ?, data_final = ? WHERE idleilão = ?; ");
        $stmt->execute(array($title, $description, $starter_price, $final_date, $auction_id));
        return $stmt->fetch();
    }

    function getUpdatableInfo($auction_id)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT preco_inicial, data_inicio, data_final FROM leilão WHERE idleilão = ?");
        $stmt->execute(array($auction_id));
        return $stmt->fetch();
    }



    function getCategories()
    {
        global $conn;
        $stmt = $conn->prepare("SELECT categoria.nome as categoria, categoria.idcategoria, categoriamae.nome as categoriaMae FROM categoria
                                              INNER JOIN categoriamae
                                              ON categoria.idcategoriamae = categoriamae.idcategoriamae;");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getMainCategories()
    {
        global $conn;
        $stmt = $conn->prepare("SELECT nome FROM categoriamae;");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getSubCategoryByID($sub_category)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT idCategoria FROM categoria WHERE nome = ?");
        $stmt->execute(array($sub_category));
        return $stmt->fetch();
    }

    function getSubCategories($main_category)
    {
        global $conn;
        $stmt = $conn->prepare("SELECT categoria.nome FROM categoria INNER JOIN categoriamae ON categoria.idCategoriaMae = categoriamae.idCategoriaMae WHERE categoriamae.nome = ?");
        $stmt->execute(array($main_category));
        return $stmt->fetchAll();
    }

    function sellerAlreadyDFeedback($auction_id)
    {
        global $conn;
        $stmt = $conn->prepare("
            SELECT * FROM feedback WHERE idleilão = ? AND origem = 'Vendedor' ");
        $stmt->execute(array($auction_id));
        return $stmt->fetch() == true;
    }

    function clientAlreadyDFeedback($auction_id)
    {
        global $conn;
        $stmt = $conn->prepare("
                SELECT * FROM feedback WHERE idleilão = ? AND origem = 'Comprador' ");
        $stmt->execute(array($auction_id));
        return $stmt->fetch() == true;
    }






?>
