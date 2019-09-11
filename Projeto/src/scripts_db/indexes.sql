
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