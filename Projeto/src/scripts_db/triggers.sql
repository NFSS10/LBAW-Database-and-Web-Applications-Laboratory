
DROP TRIGGER IF EXISTS xoradmin ON administrador;
DROP TRIGGER IF EXISTS xoruser ON utilizadorautenticado;
DROP TRIGGER IF EXISTS question ON questão;
DROP TRIGGER IF EXISTS answer ON resposta;
DROP TRIGGER IF EXISTS statechange ON leilão;
DROP TRIGGER IF EXISTS newbid ON licitação;
DROP TRIGGER IF EXISTS newfavorite ON favorito;
DROP TRIGGER IF EXISTS refreshtime ON licitação;
DROP TRIGGER IF EXISTS createNotification ON leilão;
DROP TRIGGER IF EXISTS refresh_mat_view_leilao ON leilão;
DROP TRIGGER IF EXISTS refresh_mat_view_categoria ON categoria;
DROP TRIGGER IF EXISTS refresh_mat_view_categoriaMae ON categoriaMae;

CREATE OR REPLACE FUNCTION notuser()
  RETURNS TRIGGER AS
$BODY$
BEGIN

  IF NEW.idutilizador IN (SELECT idutilizador FROM utilizadorautenticado) THEN
    RAISE EXCEPTION 'User cannot be admin and authenticated user at the same time';
  END IF;
  RETURN NEW;

END;
$BODY$
LANGUAGE plpgsql VOLATILE
COST 100;

CREATE TRIGGER xoradmin
BEFORE INSERT ON administrador
FOR EACH ROW
EXECUTE PROCEDURE notuser();

CREATE OR REPLACE FUNCTION notadmin()
  RETURNS TRIGGER AS
$BODY$
BEGIN

  IF NEW.idutilizador IN (SELECT idutilizador FROM administrador) THEN
    RAISE EXCEPTION 'User cannot be admin and authenticated user at the same time';
  END IF;
  RETURN NEW;

END;
$BODY$
LANGUAGE plpgsql VOLATILE
COST 100;

CREATE TRIGGER xoruser
BEFORE INSERT ON utilizadorautenticado
FOR EACH ROW
EXECUTE PROCEDURE notadmin();

CREATE OR REPLACE FUNCTION update_question_date() RETURNS TRIGGER AS
$BODY$
BEGIN
  UPDATE questão SET DATA=now() WHERE idquestão=NEW.idquestão;
  RETURN NEW;
END;
$BODY$
LANGUAGE plpgsql;

CREATE TRIGGER question
AFTER INSERT ON questão
FOR EACH ROW
EXECUTE PROCEDURE update_question_date();

CREATE OR REPLACE FUNCTION update_answer_date() RETURNS TRIGGER AS
$BODY$
BEGIN
  UPDATE resposta SET DATA=now() WHERE idresposta=NEW.idresposta;
  RETURN NEW;
END;
$BODY$
LANGUAGE plpgsql;

CREATE TRIGGER answer
AFTER INSERT ON resposta
FOR EACH ROW
EXECUTE PROCEDURE update_answer_date();

CREATE OR REPLACE FUNCTION checkNewBid()
  RETURNS TRIGGER AS
$BODY$
BEGIN
  IF NEW.valor < (SELECT MAX(valor) FROM leilão INNER JOIN licitação
      ON leilão.idleilão = licitação.idleilão AND leilão.idleilão = NEW.idLeilão) THEN
    RAISE EXCEPTION 'Licitation must be higher than the last one.';
  ELSEIF (SELECT (COUNT(*)) FROM licitação
  WHERE  licitação.idLeilão = NEW.idLeilão) >= 1 THEN

    INSERT INTO notlicitaçãoultrapassada(DATA, info, visualizada, idLeilão)
    VALUES (now(), 'Licitação ultrapassada', FALSE, NEW.idLeilão);

    INSERT INTO utilizadorlicultrapassada(idNotificação, idUtilizador)
    VALUES ((SELECT last_value FROM notlicitaçãoultrapassada_idnotificação_seq), (SELECT idutilizador FROM (SELECT MAX(valor) AS max_value FROM licitação WHERE licitação.idLeilão = NEW.idLeilão) AS maxBid, licitação
    WHERE valor = max_value AND licitação.idLeilão = NEW.idLeilão));
  END IF;
  RETURN NEW;
END;
$BODY$
LANGUAGE plpgsql VOLATILE
COST 100;

CREATE TRIGGER newbid
BEFORE INSERT ON licitação
FOR EACH ROW
EXECUTE PROCEDURE checkNewBid();


CREATE OR REPLACE FUNCTION checkNewFavorite()
  RETURNS TRIGGER AS
$BODY$
BEGIN

  IF NEW.idUtilizador IN (SELECT vendedor FROM leilão
  WHERE leilão.idleilão = NEW.idleilão) THEN
    RAISE EXCEPTION 'You cannot add your item to your favorite list.';
  END IF;
  RETURN NEW;

END;
$BODY$
LANGUAGE plpgsql VOLATILE
COST 100;

CREATE TRIGGER newfavorite
BEFORE INSERT ON favorito
FOR EACH ROW
EXECUTE PROCEDURE checkNewFavorite();


CREATE OR REPLACE FUNCTION isunderOneMinute()
  RETURNS TRIGGER AS
$BODY$
BEGIN
  IF NEW.data + interval '5' minute >= (SELECT data_final FROM leilão
  WHERE leilão.idleilão = NEW.idleilão) THEN
    UPDATE leilão SET data_final = (SELECT data_final FROM leilão
  WHERE leilão.idleilão = NEW.idleilão) + '00:10:00' WHERE NEW.idLeilão = idleilão;
  END IF;
  RETURN NEW;
END;
$BODY$
LANGUAGE plpgsql VOLATILE
COST 100;

CREATE TRIGGER refreshtime
AFTER INSERT ON licitação
FOR EACH ROW
EXECUTE PROCEDURE isunderOneMinute();

CREATE OR REPLACE FUNCTION createEndAuctionNotification() RETURNS TRIGGER AS $createEndAuctionNotification$
DECLARE
  r RECORD;
BEGIN
  IF NEW.estado = 'Terminado' THEN
    FOR r IN
    SELECT DISTINCT idutilizador FROM licitação
	  INNER JOIN leilão
		ON licitação.idleilão = leilão.idleilão
	WHERE leilão.idleilão = NEW.idleilão
    LOOP
      INSERT INTO notleilãoterminado (DATA, info, visualizada, idLeilão)
      VALUES (CURRENT_TIMESTAMP, 'Leilão terminado', FALSE, NEW.idLeilão);
      INSERT INTO notUtilizadorLeilão (idnotificação, idutilizador)
      VALUES (currval(pg_get_serial_sequence('notleilãoterminado', 'idnotificação')), r.idutilizador);
    END LOOP;
  END IF;
  RETURN NEW;
END;
$createEndAuctionNotification$ LANGUAGE plpgsql;

CREATE TRIGGER createNotification
BEFORE UPDATE ON leilão
FOR EACH ROW
EXECUTE PROCEDURE createEndAuctionNotification();

CREATE OR REPLACE FUNCTION refresh_mat_view()
  RETURNS TRIGGER AS
$BODY$
BEGIN
  REFRESH MATERIALIZED VIEW CONCURRENTLY procurar_leilao;
  RETURN NEW;
END
$BODY$
LANGUAGE plpgsql;

CREATE TRIGGER refresh_mat_view_leilao
AFTER INSERT OR UPDATE OR DELETE OR TRUNCATE
  ON leilão for each statement
EXECUTE PROCEDURE refresh_mat_view();

CREATE TRIGGER refresh_mat_view_categoria
AFTER INSERT OR UPDATE OR DELETE OR TRUNCATE
  ON categoria for each statement
EXECUTE PROCEDURE refresh_mat_view();

CREATE TRIGGER refresh_mat_view_categoriaMae
AFTER INSERT OR UPDATE OR DELETE OR TRUNCATE
  ON categoriaMae for each statement
EXECUTE PROCEDURE refresh_mat_view();