<?php
	function getSearchInfoDesc($query, $order)
	{
		global $conn;
		$stmt = $conn->prepare(
			"SELECT leilão.idleilão as idleilao, leilão.titulo, leilão.descrição, leilão.preco_inicial, leilão.data_final, leilão.estado, leilão.vendedor,
						  COALESCE(string_agg(DISTINCT categoria.nome, ', '), '') AS categoria,
						  COALESCE(string_agg(DISTINCT categoriamae.nome, ', '), '') AS categoriamae,
						  COALESCE(string_agg(utilizador.username, ', '), '') AS username
						FROM leilão
						  INNER JOIN (SELECT idleilão, ts_rank(documento, plainto_tsquery('portuguese', ?)) AS rank
									  FROM procurar_leilao
									  WHERE documento @@ plainto_tsquery('portuguese', ?)) AS procurar
							ON leilão.idleilão = procurar.idleilão
						  LEFT JOIN categoria ON categoria.idcategoria = leilão.idcategoria
						  LEFT JOIN categoriamae ON categoria.idcategoriamae = categoriamae.idcategoriamae
						  LEFT JOIN utilizador ON utilizador.idutilizador = leilão.vendedor
						WHERE leilão.estado = 'Em progresso'
						GROUP BY leilão.idleilão, procurar.rank
						ORDER BY ".$order. " DESC;");
		$stmt->execute(array($query, $query));
		return $stmt->fetchAll();
	}

    function getSearchInfoAsc($query, $order)
    {
        global $conn;
        $stmt = $conn->prepare(
            "SELECT leilão.idleilão as idleilao, leilão.titulo, leilão.descrição, leilão.preco_inicial, leilão.data_final, leilão.estado, leilão.vendedor,
                              COALESCE(string_agg(DISTINCT categoria.nome, ', '), '') AS categoria,
                              COALESCE(string_agg(DISTINCT categoriamae.nome, ', '), '') AS categoriamae,
                              COALESCE(string_agg(utilizador.username, ', '), '') AS username
                            FROM leilão
                              INNER JOIN (SELECT idleilão, ts_rank(documento, plainto_tsquery('portuguese', ?)) AS rank
                                          FROM procurar_leilao
                                          WHERE documento @@ plainto_tsquery('portuguese', ?)) AS procurar
                                ON leilão.idleilão = procurar.idleilão
                              LEFT JOIN categoria ON categoria.idcategoria = leilão.idcategoria
                              LEFT JOIN categoriamae ON categoria.idcategoriamae = categoriamae.idcategoriamae
                              LEFT JOIN utilizador ON utilizador.idutilizador = leilão.vendedor
                            WHERE leilão.estado = 'Em progresso'
                            GROUP BY leilão.idleilão, procurar.rank
                            ORDER BY ".$order. " ASC;");
        $stmt->execute(array($query, $query));
        return $stmt->fetchAll();
    }

    function getAuctionsByCategory($category)
    {
        global $conn;
        $stmt = $conn->prepare(
            "SELECT leilão.idleilão as idleilao, leilão.titulo, leilão.descrição, leilão.preco_inicial, leilão.data_final, leilão.estado, leilão.vendedor
FROM leilão WHERE leilão.idcategoria = ? AND estado = 'Em progresso';");
        $stmt->execute(array($category));
        return $stmt->fetchAll();
    }
