DROP TABLE IF EXISTS categoriaMae CASCADE;
CREATE TABLE categoriaMae (
  idCategoriaMae SERIAL PRIMARY KEY,
  nome TEXT NOT NULL
);

DROP TABLE IF EXISTS categoria CASCADE;
CREATE TABLE categoria (
  idCategoria SERIAL PRIMARY KEY,
  idCategoriaMae INT REFERENCES categoriaMae(idCategoriaMae) ON DELETE CASCADE,
  nome TEXT NOT NULL
);

DROP TABLE IF EXISTS país CASCADE;
CREATE TABLE país (
  idPaís SERIAL PRIMARY KEY,
  nome TEXT NOT NULL
);

DROP TYPE IF EXISTS géneroUtilizador CASCADE;
CREATE TYPE géneroUtilizador AS ENUM ('Masculino', 'Feminino');

DROP TABLE IF EXISTS utilizador CASCADE;
CREATE TABLE utilizador (
  idUtilizador SERIAL PRIMARY KEY,
  nome TEXT DEFAULT '',
  dataRegisto DATE NOT NULL,
  password TEXT NOT NULL,
  email TEXT UNIQUE NOT NULL,
  username TEXT UNIQUE NOT NULL,
  dataNascimento DATE NOT NULL,
  país INT REFERENCES país(idPaís) ON DELETE CASCADE DEFAULT NULL,
  foto TEXT DEFAULT 'resources/default_avatar.png',
  género géneroUtilizador DEFAULT 'Masculino',
  CHECK (date_part('year', AGE(dataNascimento)) >= 18)
);

DROP TABLE IF EXISTS utilizadorautenticado CASCADE;
CREATE TABLE utilizadorautenticado (
  idUtilizador INT REFERENCES utilizador(idUtilizador) ON DELETE CASCADE,
  bloqueado BOOLEAN DEFAULT FALSE,
  PRIMARY KEY(idUtilizador)
);

DROP TABLE IF EXISTS administrador CASCADE;
CREATE TABLE administrador (
  idUtilizador INT REFERENCES utilizador(idUtilizador) ON DELETE CASCADE,
  PRIMARY KEY(idUtilizador)
);

DROP TYPE IF EXISTS estadoleilao CASCADE;
CREATE TYPE estadoleilao AS ENUM ('Em progresso', 'Terminado');

DROP TABLE IF EXISTS leilão CASCADE;
CREATE TABLE leilão (
  idLeilão SERIAL PRIMARY KEY,
  titulo TEXT NOT NULL,
  descrição TEXT NOT NULL,
  preco_inicial REAL DEFAULT 0,
  data_inicio TIMESTAMP NOT NULL,
  data_final TIMESTAMP NOT NULL,
  idCategoria INT REFERENCES categoria(idCategoria) ON DELETE CASCADE,
  estado estadoleilao NOT NULL,
  vendedor INT REFERENCES utilizadorautenticado(idUtilizador) ON DELETE CASCADE
);

DROP TABLE IF EXISTS notleilãoterminado CASCADE;
CREATE TABLE notleilãoterminado (
  idNotificação SERIAL PRIMARY KEY,
  DATA TIMESTAMP NOT NULL,
  info TEXT NOT NULL,
  visualizada BOOLEAN NOT NULL DEFAULT FALSE,
  idLeilão INT REFERENCES leilão(idLeilão) ON DELETE CASCADE
);

DROP TYPE IF EXISTS origemFeedback CASCADE;
CREATE TYPE origemFeedback AS ENUM ('Comprador', 'Vendedor');

DROP TABLE IF EXISTS feedback CASCADE;
CREATE TABLE feedback (
  idFeedback SERIAL PRIMARY KEY,
  pontuação INT NOT NULL,
  comentário TEXT DEFAULT '',
  origem origemFeedback NOT NULL,
  comprador INT REFERENCES utilizadorautenticado(idUtilizador) ON DELETE CASCADE,
  idLeilão INT REFERENCES leilão(idLeilão) ON DELETE CASCADE
);

DROP TABLE IF EXISTS foto CASCADE;
CREATE TABLE foto (
  idFoto SERIAL PRIMARY KEY,
  imagepath TEXT NOT NULL,
  idLeilão INT REFERENCES leilão(idLeilão) ON DELETE CASCADE
);

DROP TABLE IF EXISTS questão CASCADE;
CREATE TABLE questão (
  idQuestão SERIAL PRIMARY KEY,
  DATA TIMESTAMP NOT NULL,
  questão TEXT NOT NULL,
  idLeilão INT REFERENCES leilão(idLeilão) ON DELETE CASCADE,
  idUtilizador INT REFERENCES utilizadorautenticado(idUtilizador) ON DELETE CASCADE
);

DROP TABLE IF EXISTS resposta CASCADE;
CREATE TABLE resposta (
  idResposta SERIAL PRIMARY KEY,
  DATA TIMESTAMP NOT NULL,
  resposta TEXT NOT NULL,
  idQuestão INT REFERENCES questão(idQuestão) ON DELETE CASCADE
);

DROP TABLE IF EXISTS licitação CASCADE;
CREATE TABLE licitação (
  idLicitação SERIAL PRIMARY KEY,
  valor REAL NOT NULL,
  DATA TIMESTAMP NOT NULL,
  idLeilão INT REFERENCES leilão(idLeilão) ON DELETE CASCADE,
  idUtilizador INT REFERENCES utilizadorautenticado(idUtilizador) ON DELETE CASCADE
);

DROP TABLE IF EXISTS mensagemprivada CASCADE;
CREATE TABLE mensagemprivada (
  idMP SERIAL PRIMARY KEY,
  titulo TEXT NOT NULL,
  conteúdo TEXT NOT NULL,
  DATA TIMESTAMP NOT NULL,
  visualizada BOOLEAN NOT NULL DEFAULT FALSE,
  idDestinatário INT REFERENCES utilizador(idUtilizador) ON DELETE CASCADE,
  idRemetente INT REFERENCES utilizador(idUtilizador) ON DELETE CASCADE
);

DROP TABLE IF EXISTS favorito CASCADE;
CREATE TABLE favorito (
  idUtilizador INT REFERENCES utilizadorautenticado(idUtilizador) ON DELETE CASCADE,
  idLeilão INT REFERENCES leilão(idLeilão) ON DELETE CASCADE,
  PRIMARY KEY (idUtilizador, idLeilão)
);

DROP TABLE IF EXISTS notutilizadorleilão CASCADE;
CREATE TABLE notutilizadorleilão (
  idNotificação INT REFERENCES notleilãoterminado(idNotificação) ON DELETE CASCADE,
  idUtilizador INT REFERENCES utilizadorautenticado(idUtilizador) ON DELETE CASCADE,
  PRIMARY KEY (idNotificação, idUtilizador)
);

DROP TABLE IF EXISTS notlicitaçãoultrapassada CASCADE;
CREATE TABLE notlicitaçãoultrapassada (
  idNotificação SERIAL PRIMARY KEY,
  DATA TIMESTAMP NOT NULL,
  info TEXT NOT NULL,
  visualizada BOOLEAN NOT NULL DEFAULT FALSE,
  idLeilão INT REFERENCES leilão(idLeilão) ON DELETE CASCADE
);

DROP TABLE IF EXISTS seguidor CASCADE;
CREATE TABLE seguidor (
  idSeguidor1 INT REFERENCES utilizadorautenticado(idUtilizador) ON DELETE CASCADE,
  idSeguidor2 INT REFERENCES utilizadorautenticado(idUtilizador) ON DELETE CASCADE,
  PRIMARY KEY (idSeguidor1, idSeguidor2),
  CHECK(idSeguidor1 <> idSeguidor2)
);

DROP TABLE IF EXISTS utilizadorlicultrapassada CASCADE;
CREATE TABLE utilizadorlicultrapassada (
  idNotificação INT REFERENCES notlicitaçãoultrapassada(idNotificação) ON DELETE CASCADE,
  idUtilizador INT REFERENCES utilizadorautenticado(idUtilizador) ON DELETE CASCADE,
  PRIMARY KEY (idNotificação, idUtilizador)
);

DROP MATERIALIZED VIEW IF EXISTS procurar_leilao CASCADE;
CREATE MATERIALIZED VIEW procurar_leilao AS
  (SELECT
     leilãoAux.idleilão,
     setweight(to_tsvector('portuguese', leilãoAux.titulo), 'A') ||
     setweight(to_tsvector('portuguese', leilãoAux.descrição), 'B') ||
     setweight(to_tsvector('portuguese', coalesce(string_agg(DISTINCT leilãoAux.categoria, ' '), '')), 'B') ||
     setweight(to_tsvector('portuguese', coalesce(string_agg(DISTINCT categoriaMae, ' '), '')), 'B') as documento
   FROM
     (SELECT
        leilão.idleilão, leilão.titulo, leilão.descrição,
        coalesce(string_agg(categoria.nome, ' '), '') AS categoria,
        coalesce(string_agg(categoriaMae.nome, ' '), '') AS categoriaMae
      FROM leilão
        LEFT JOIN categoria ON categoria.idcategoria = leilão.idcategoria
        LEFT JOIN categoriaMae ON categoria.idcategoriaMae = categoriaMae.idcategoriaMae
      GROUP BY leilão.idleilão) AS leilãoAux
   GROUP BY leilãoAux.idleilão, leilãoAux.titulo, leilãoAux.descrição, leilãoAux.categoria, leilãoAux.categoriaMae);
   
DROP INDEX IF EXISTS leiloes_indx;
CREATE INDEX leiloes_indx ON leilão (idcategoria);

DROP INDEX IF EXISTS leiloes_indx_cat;
CREATE INDEX leiloes_indx_cat ON categoria (idCategoriaMae);

DROP INDEX IF EXISTS feedback_indx;
CREATE INDEX feedback_indx ON feedback (pontuação);

DROP INDEX IF EXISTS foto_indx;
CREATE INDEX foto_indx ON foto (idleilão);

DROP INDEX IF EXISTS questão_indx;
CREATE INDEX questão_indx ON questão (idleilão);

DROP INDEX IF EXISTS resposta_indx;
CREATE INDEX resposta_indx ON resposta (idquestão);

DROP INDEX IF EXISTS favorito_indx;
CREATE INDEX favorito_indx ON favorito (idleilão);

DROP INDEX IF EXISTS licitação_indx;
CREATE INDEX licitação_indx ON licitação (idleilão);

DROP INDEX IF EXISTS utilizador_indx;
CREATE INDEX utilizador_indx ON utilizador (username);

DROP INDEX IF EXISTS procurar_leilao_idx CASCADE;
CREATE INDEX procurar_leilao_idx ON procurar_leilao USING gin(documento);

DROP INDEX IF EXISTS procurar_leilao_id_idx CASCADE;
CREATE UNIQUE INDEX procurar_leilao_id_idx ON procurar_leilao(idleilão);

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