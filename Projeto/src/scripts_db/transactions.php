-- 	Introdução de utilizador na tabela utilizador e na tabela utilizador autenticado
BEGIN;
  INSERT INTO utilizador (dataregisto, password, email, username, datanascimento) VALUES (?, ?, ?, ?, ?);
  INSERT INTO utilizadorautenticado (idutilizador) VALUES (currval(pg_get_serial_sequence('utilizador', 'idutilizador')));
COMMIT;