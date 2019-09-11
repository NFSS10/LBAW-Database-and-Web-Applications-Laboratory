
INSERT INTO país (nome) VALUES ('Afeganistão'), ('África do Sul'), ('Akrotiri'), ('Albânia'), ('Alemanha'), ('Andorra'), ('Angola'), ('Anguila'), ('Antárctida'), ('Antígua e Barbuda'), ('Antilhas Neerlandesas'), ('Arábia Saudita'), ('Arctic Ocean'), ('Argélia'), ('Argentina'), ('Arménia'), ('Aruba'), ('Ashmore and Cartier Islands'), ('Atlantic Ocean'), ('Austrália'), ('Áustria'), ('Azerbaijão'), ('Baamas'), ('Bangladeche'), ('Barbados'), ('Barém'), ('Bélgica'), ('Belize'), ('Benim'), ('Bermudas'), ('Bielorrússia'), ('Birmânia'), ('Bolívia'), ('Bósnia e Herzegovina'), ('Botsuana'), ('Brasil'), ('Brunei'), ('Bulgária'), ('Burquina Faso'), ('Burúndi'), ('Butão'), ('Cabo Verde'), ('Camarões'), ('Camboja'), ('Canadá'), ('Catar'), ('Cazaquistão'), ('Chade'), ('Chile'), ('China'), ('Chipre'), ('Clipperton Island'), ('Colômbia'), ('Comores'), ('Congo-Brazzaville'), ('Congo-Kinshasa'), ('Coral Sea Islands'), ('Coreia do Norte'), ('Coreia do Sul'), ('Costa do Marfim'), ('Costa Rica'), ('Croácia'), ('Cuba'), ('Dhekelia'), ('Dinamarca'), ('Domínica'), ('Egipto'), ('Emiratos Árabes Unidos'), ('Equador'), ('Eritreia'), ('Eslováquia'), ('Eslovénia'), ('Espanha'), ('Estados Unidos'), ('Estónia'), ('Etiópia'), ('Faroé'), ('Fiji'), ('Filipinas'), ('Finlândia'), ('França'), ('Gabão'), ('Gâmbia'), ('Gana'), ('Gaza Strip'), ('Geórgia'), ('Geórgia do Sul e Sandwich do Sul'), ('Gibraltar'), ('Granada'), ('Grécia'), ('Gronelândia'), ('Guame'), ('Guatemala'), ('Guernsey'), ('Guiana'), ('Guiné'), ('Guiné Equatorial'), ('Guiné-Bissau'), ('Haiti'), ('Honduras'), ('Hong Kong'), ('Hungria'), ('Iémen'), ('Ilha Bouvet'), ('Ilha do Natal'), ('Ilha Norfolk'), ('Ilhas Caimão'), ('Ilhas Cook'), ('Ilhas dos Cocos'), ('Ilhas Falkland'), ('Ilhas Heard e McDonald'), ('Ilhas Marshall'), ('Ilhas Salomão'), ('Ilhas Turcas e Caicos'), ('Ilhas Virgens Americanas'), ('Ilhas Virgens Britânicas'), ('Índia'), ('Indian Ocean'), ('Indonésia'), ('Irão'), ('Iraque'), ('Irlanda'), ('Islândia'), ('Israel'), ('Itália'), ('Jamaica'), ('Jan Mayen'), ('Japão'), ('Jersey'), ('Jibuti'), ('Jordânia'), ('Kuwait'), ('Laos'), ('Lesoto'), ('Letónia'), ('Líbano'), ('Libéria'), ('Líbia'), ('Listenstaine'), ('Lituânia'), ('Luxemburgo'), ('Macau'), ('Macedónia'), ('Madagáscar'), ('Malásia'), ('Malávi'), ('Maldivas'), ('Mali'), ('Malta'), ('Man, Isle of'), ('Marianas do Norte'), ('Marrocos'), ('Maurícia'), ('Mauritânia'), ('Mayotte'), ('México'), ('Micronésia'), ('Moçambique'), ('Moldávia'), ('Mónaco'), ('Mongólia'), ('Monserrate'), ('Montenegro'), ('Mundo'), ('Namíbia'), ('Nauru'), ('Navassa Island'), ('Nepal'), ('Nicarágua'), ('Níger'), ('Nigéria'), ('Niue'), ('Noruega'), ('Nova Caledónia'), ('Nova Zelândia'), ('Omã'), ('Pacific Ocean'), ('Países Baixos'), ('Palau'), ('Panamá'), ('Papua-Nova Guiné'), ('Paquistão'), ('Paracel Islands'), ('Paraguai'), ('Peru'), ('Pitcairn'), ('Polinésia Francesa'), ('Polónia'), ('Porto Rico'), ('Portugal'), ('Quénia'), ('Quirguizistão'), ('Quiribáti'), ('Reino Unido'), ('República Centro-Africana'), ('República Checa'), ('República Dominicana'), ('Roménia'), ('Ruanda'), ('Rússia'), ('Salvador'), ('Samoa'), ('Samoa Americana'), ('Santa Helena'), ('Santa Lúcia'), ('São Cristóvão e Neves'), ('São Marinho'), ('São Pedro e Miquelon'), ('São Tomé e Príncipe'), ('São Vicente e Granadinas'), ('Sara Ocidental'), ('Seicheles'), ('Senegal'), ('Serra Leoa'), ('Sérvia'), ('Singapura'), ('Síria'), ('Somália'), ('Southern Ocean'), ('Spratly Islands'), ('Sri Lanca'), ('Suazilândia'), ('Sudão'), ('Suécia'), ('Suíça'), ('Suriname'), ('Svalbard e Jan Mayen'), ('Tailândia'), ('Taiwan'), ('Tajiquistão'), ('Tanzânia'), ('Território Britânico do Oceano Índico'), ('Territórios Austrais Franceses'), ('Timor Leste'), ('Togo'), ('Tokelau'), ('Tonga'), ('Trindade e Tobago'), ('Tunísia'), ('Turquemenistão'), ('Turquia'), ('Tuvalu'), ('Ucrânia'), ('Uganda'), ('União Europeia'), ('Uruguai'), ('Usbequistão'), ('Vanuatu'), ('Vaticano'), ('Venezuela'), ('Vietname'), ('Wake Island'), ('Wallis e Futuna'), ('West Bank'), ('Zâmbia'), ('Zimbabué');

INSERT INTO categoriaMae (nome) VALUES
  ('Computadores'),
  ('Consolas'),
  ('Periféricos'),
  ('Armazenamento'),
  ('Comunicações');

INSERT INTO categoria (nome, idCategoriaMae) VALUES
  ('Desktop', 1),
  ('Híbridos', 1),
  ('Portáteis', 1),
  ('Xbox 360', 2),
  ('Xbox One', 2),
  ('PlayStation 3', 2),
  ('PlayStation 4', 2),
  ('Ratos', 3),
  ('Tapetes', 3),
  ('Teclados', 3),
  ('Auriculares', 3),
  ('Colunas', 3),
  ('Auscultadores', 3),
  ('Microfones', 3),
  ('Monitores', 3),
  ('SSD', 4),
  ('HDD', 4),
  ('SD', 4),
  ('Micro SD', 4),
  ('Pen Drives', 4),
  ('Telemóveis', 5);

INSERT INTO utilizador (nome, dataRegisto, password, email, username, dataNascimento, país, género)
VALUES ('Jorge Ferreira', '2017-03-22', '$2y$10$hmWEB4.ud8KZ1i5Qp4XWQ.x2xpnmaArbIwnYMqfW6LYvOub8MYo7G', 'jorge_17ferreira@hotmail.com', 'Leave', '1994-10-22', 1, 'Masculino'),
  ('José Alberto', '2016-03-10', '$2y$10$hmWEB4.ud8KZ1i5Qp4XWQ.x2xpnmaArbIwnYMqfW6LYvOub8MYo7G', 'jose_alberto@hotmail.com', 'Zé', '1990-05-05', 14, 'Masculino'),
  ('Margarida Silva', '2017-01-30', '$2y$10$hmWEB4.ud8KZ1i5Qp4XWQ.x2xpnmaArbIwnYMqfW6LYvOub8MYo7G', 'margarida_silva@hotmail.com', 'MSilva', '1991-07-02', 2, 'Feminino'),
  ('Pedro Lima', '2016-12-21', '$2y$10$hmWEB4.ud8KZ1i5Qp4XWQ.x2xpnmaArbIwnYMqfW6LYvOub8MYo7G', 'pdrlima96@hotmail.com', 'Arkit', '1996-05-03', 3, 'Masculino'),
  ('Matheus Miranda', '2015-01-05', '$2y$10$hmWEB4.ud8KZ1i5Qp4XWQ.x2xpnmaArbIwnYMqfW6LYvOub8MYo7G', 'zizamt@hotmail.com', 'Oshnira', '1989-04-02', 4, 'Masculino'),
  ('Ricardo Santos', '2016-09-19', '$2y$10$hmWEB4.ud8KZ1i5Qp4XWQ.x2xpnmaArbIwnYMqfW6LYvOub8MYo7G', 'ricardoJM93@hotmail.com', 'Rtfscar', '1993-07-03', 4,  'Masculino'),
  ('Joao Miguel', '2017-03-29', '$2y$10$hmWEB4.ud8KZ1i5Qp4XWQ.x2xpnmaArbIwnYMqfW6LYvOub8MYo7G', 'joao_star02@hotmail.com', 'migas02', '1997-11-23', 13,  'Masculino'),
  ('Jose Luis', '2016-07-01', '$2y$10$hmWEB4.ud8KZ1i5Qp4XWQ.x2xpnmaArbIwnYMqfW6LYvOub8MYo7G', 'josepispis@hotmail.com', 'josechafariz', '1965-06-16', 13,  'Masculino'),
  ('Jessica Arnilde', '2017-02-18', '$2y$10$hmWEB4.ud8KZ1i5Qp4XWQ.x2xpnmaArbIwnYMqfW6LYvOub8MYo7G', 'Jessicartf@hotmail.com', 'JessAstar', '1988-05-03', 4,  'Feminino'),
  ('Gonçalo Amaral', '2014-08-11', '$2y$10$hmWEB4.ud8KZ1i5Qp4XWQ.x2xpnmaArbIwnYMqfW6LYvOub8MYo7G', 'goncalo05_amar@hotmail.com', 'Lethalpanda', '1995-10-22', 8,  'Masculino'),
  ('Catarina Alves', '2016-04-07', '$2y$10$hmWEB4.ud8KZ1i5Qp4XWQ.x2xpnmaArbIwnYMqfW6LYvOub8MYo7G', 'cat_makeup_03@hotmail.com', 'CuteAFA', '1996-12-26', 11,  'Feminino'),
  ('Maria Correia', '2015-10-02', '$2y$10$hmWEB4.ud8KZ1i5Qp4XWQ.x2xpnmaArbIwnYMqfW6LYvOub8MYo7G', 'mar_corr7887@hotmail.com', 'moribunda933132180', '1978-06-20', 11,  'Feminino'),
  ('Manuel Ferreira', '2017-02-10', '$2y$10$hmWEB4.ud8KZ1i5Qp4XWQ.x2xpnmaArbIwnYMqfW6LYvOub8MYo7G', 'manuel_ferreira@hotmail.com', 'Ferreira', '1989-08-06', 5,  'Masculino');

INSERT INTO administrador (idUtilizador) VALUES (1);

INSERT INTO utilizadorautenticado (idUtilizador, bloqueado) VALUES
  (2, FALSE),
  (3, FALSE),
  (4, FALSE),
  (5, FALSE),
  (6, TRUE),
  (7, FALSE),
  (8, FALSE),
  (9, TRUE),
  (10, FALSE),
  (11, FALSE),
  (12, TRUE),
  (13, FALSE);

INSERT INTO leilão (titulo, descrição, preco_inicial, data_inicio, data_final, idCategoria, estado, vendedor)
VALUES ('Consola PS3', 'Consola PS3 em excelente estado! Pouco usada.', 10, '2017-05-29 00:00:00', '2017-06-03 00:00:00', 6, 'Em progresso' , 2),
  ('Computador Asus', 'Computador Asus com 5 anos mas extremamente funcional', 500, '2017-05-28 05:00:00', '2017-06-05 00:00:00', 3, 'Em progresso', 4),
  ('Desktop Gaming MSI','O computador MSI Aegis 033EU foi desenhado com o mesmo cuidado com que antigos mestres ferreiros japoneses concebiam espadas de samurai, estando predestinado a ser a melhor arma e o melhor escudo de qualquer gamer. Os adversários mais temíveis vão implorar por misericórdia quando defrontarem o poder e a velocidade proporcionados pelo processador Quad Core Intel Core i5-6400 a 2,7 GHz e pelos 8 GB de memória RAM DDR4. Explosões brilhantes, raios laser, feitiços e as mais alucinantes e perigosas ultrapassagens a alta velocidade – tudo é exibido com a máxima naturalidade e fluidez graças à placa gráfica NVidia GeForce GTX1070 com 8 GB de memória GDDR5 dedicados. Também as unidades de armazenamento assumem um papel de destaque, com um disco SSD de 256 GB capaz de carregar os jogos mais exigentes com a máxima velocidade e um disco HDD de 1 TB que permite guardar todos os filmes, vídeos e outros ficheiros de forma segura. Outras características: preparado para realidade virtual; placa de som compatível com sistema de 7.1 canais; otimização Nahimic; placa de rede Gigabit; Bluetooth 4.1; Wi-Fi; iluminação LED personalizável; sistema de refrigeração Silent Storm 2; USB 3.1 Type-C; 4x USB 2.0; 4x USB 3.0; HDMI; DisplayPort. Garantia de dois anos.<br><ul>
<li>Windows 10 Home</li>
<li>DDR4 2133HMz 2 slots, up to 32GB</li>
<li>The world‘s smallest VR ready gaming PC</li>
<li>MSI GeForce® GTX 1060 3GB/6GB GDDR5</li>
<li>Latest 6th Gen. Intel® Core™ processor</li>
<li>Compact, light weight and easy to transport case</li>
<li>Full performance in extra-compact 4.72-liter case</li>
<li>Exclusive cooling system, Silent storming cooling 2</li>
<li>VR Link; optimal VR experience</li>
<li>Choose to place your Gaming PC horizontally or vertically</li>
<li>Carefully though connection ports to fit your needs as a gamer</li>
<li>Custom MSI Gaming Graphics Card for better performance</li>
<li>Audio Boost 3: Reward your ears with studio grade sound quality</li>
<li>Nahimic 2.0 Audio Enhancer</li>
<li>Mystic Light RGB LED design, customize your look</li>
<li>Supports 4K video</li>
<li>Supports matrix display</li>
<li>High quality and durable Military Class 5 components</li>
<li>Super Charger 2: fast charge you mobile device</li>
<li>Enrich your experience with included MSI software</li>
</ul>', 0, '2017-05-29 06:47:00', '2017-06-02 11:55:00', 1, 'Em progresso', 8),
  ('COMPUTADOR OMEN BY HP 870-202NP','COMPUTADOR OMEN BY HP 870-202NP com Computador OMEN by HP 870-202np com Intel Core i7 7700, 8GB RAM, GeForce GTX 1060 3GB e 1TB HDD + 128GB SSD.', 1349, '2017-05-15 05:00:00', '2017-05-20 05:00:00', 1, 'Em progresso', 8),
  ('Auscultadores PS4','Auscultadores PS4 Turtle Beach Recon 60P White', 59.99,'2017-06-01 10:00:00', '2017-06-02 10:00:00', 13, 'Em progresso', 11),
  ('PLEXTONE PC780','PLEXTONE PC780 gaming headset fone de ouvido com microfone, usb, luz LED', 14.59,'2017-05-02 23:00:00', '2017-06-05 23:00:00', 13, 'Em progresso',  4),
  ('Teclado Gaming DRAGON WAR','Teclado Gaming DRAGON WAR Pro Dark Sector', 34.99, '2017-05-02 23:00:00','2017-06-10 10:00:00', 10, 'Em progresso', 5),
  ('Rato Gaming ASUS','Rato Gaming ASUS ROG Gladius II', 89.99, '2017-05-02 23:00:00', '2017-05-30 00:00:00', 8, 'Em progresso', 7),
  ('Tapete HyperX', 'Tapete HyperX como novo!', 19.99, '2017-05-02 23:00:00', '2017-06-09 00:00:00', 9, 'Em progresso', 12),
  ('Razer Rato Deathadder Chroma','Rato gaming para obter os melhores resultados', 81.93, '2017-05-02 23:00:00','2017-06-09 00:00:00', 8, 'Em progresso', 2),
  ('Microfone Gaming TRUST USB GXT 210', 'Microfone em excelente estado', 19.99, '2017-05-02 23:00:00', '2017-05-10 05:00:00', 14, 'Terminado', 5),
  ('Microfone Condensador OQAN QMC20 Studio', 'Microfone perfeito para estudio', 90.99, '2017-05-02 23:00:00', '2017-06-11 00:40:00', 14, 'Em progresso',  8),
  ('Desktop PC Lenovo ThinkCentre M73 Tiny', 'Ótimo desktop', 499.99, '2017-05-02 23:00:00', '2017-02-07 00:23:00', 1, 'Em progresso', 4),
  ('Desktop PC HP 280 G2 MT', 'Melhor desktop no mercado', 459.99, '2017-05-02 23:00:00', '2017-04-11 00:46:00', 1, 'Em progresso', 4),
  ('Tapete MAD CATZ GLIDE 4', 'Tapete muito resistente e ótimo para movimentos suaves', 10.99, '2017-05-02 23:00:00', '2017-04-23 03:00:00', 9, 'Em progresso',  6),
  ('Tapete de Rato Gaming OZONE Groundlevel M', 'Tapete gaming de tamanho M', 9.99, '2017-05-02 23:00:00', '2017-05-07 06:00:00', 9, 'Em progresso', 10),
  ('Consola Playstation 4', 'Slim 500 GB - PS4, Chasis D', 299.99, '2017-02-05 23:00:00', '2017-04-21 00:57:00', 7, 'Em progresso', 9),
  ('XBOX 360', 'XBOX 360 como nova. Motivo da venda: Vou sair do país.', 50.99, '2017-05-02 23:00:00', '2017-06-05 00:00:00', 4, 'Em progresso', 12),
  ('XBOX One','XBOX One como garantia. Motivo da venda: Vou sair do país.', 81.93, '2017-05-02 23:00:00', '2017-07-28 00:00:00', 5, 'Em progresso', 2),
  ('PEN USB 32GB', 'A unidade flash Simply USB 2.0 de 16 GB garante uma forma segura e prática de partilhar, armazenar e transferir os seus ficheiros, fotografias, música e vídeos mais importantes.', 2.99, '2017-05-02 23:00:00', '2017-08-05 05:00:00', 20, 'Em progresso', 5),
  ('Colunas Stéreo 2.1', 'Colunas de alta qualidade e com pouco uso.', 10.99, '2017-05-02 23:00:00', '2017-06-07 00:40:00', 12, 'Em progresso',  8),
  ('Auscultador Level Over-ear', 'Os auscultadores Samsung Level-Over utilizam uma unidade de transmissão de 50 mm e ímanes de neodímio de elevada qualidade para reproduzir um som profundo, intenso e realista. O equalizador Sound Alive da Samsung permite ao utilizador personalizar os efeitos sonoros para serviços de streaming e todas as outras fontes multimédia.', 20.99, '2017-05-02 23:00:00', '2017-06-07 00:23:00', 13, 'Em progresso', 4),
  ('Samsung S6 Edge', 'O Galaxy S6 Edge tem um ecrã de 5.1" QuadHD Super Amoled com 551 ppi. No interior do chassis de alumínio está um SoC (System on a Chip) Exynos 7420 que inclui dois processadores de 64 bits com quatro núcleos. O processador gráfico é um Mali-T760. Com 3 GB de memória RAM DDR4b e 32 GB de memória Flash, o carregamento é super-rápido e sem fios (10 minutos de recarga/quatro horas de utilização). A câmara frontal tem um sensor de 5 MP e a traseira de 16 MP – ambas de arranque quase instantâneo. ', 200.99, '2017-05-02 23:00:00', '2017-06-03 00:46:00', 21, 'Em progresso', 4),
  ('Honor 7', 'Excelente design e componentes belamente harmonizados proporcionam uma experiência de utilização intuitiva sem esforço. Compartilhe os seus momentos mais bonitos no ecrã de 5.2" e capture imagens impressionantes com a câmara de 20 megapixels.', 100.99, '2017-05-02 23:00:00','2017-06-23 03:00:00', 21, 'Em progresso',  6),
  ('Honor 8', 'Com um design ergonómico e contorno de encaixe para uma sensação suave e aperto firme o Honor 8 transmite uma ótima sensação ao agarrar. A somar a isto o corte de diamante sofisticado unido por alumínio contemporâneo. O seu efeito prisma 3D está envolto em 15 camadas de acabamento em vidro.', 200, '2017-05-02 23:00:00', '2017-06-04 06:00:00', 21, 'Em progresso', 10),
  ('Monitor Asus VX229H', 'A Qualidade de Imagem Superior com um Design Utra-Fino Elegante.', 20.99, '2017-05-02 23:00:00','2017-06-05 00:57:00', 15, 'Em progresso', 12);


INSERT INTO notleilãoterminado(DATA, info, visualizada, idLeilão) VALUES
  ('2017-01-03 00:00:00', 'Leilão terminado', FALSE, 11);

INSERT INTO notUtilizadorLeilão(idNotificação, idUtilizador) VALUES
  (1, 13);

INSERT INTO favorito(idUtilizador, idLeilão) VALUES
  (2, 5),
  (3, 6),
  (3, 1),
  (3, 4),
  (6, 3),
  (11, 3),
  (11, 2),
  (13, 6);

INSERT INTO seguidor(idSeguidor1, idSeguidor2) VALUES
  (2, 4),
  (2, 5),
  (2, 8),
  (2, 9),
  (3, 4),
  (3, 7),
  (3, 12),
  (5, 6),
  (9, 4),
  (9, 7),
  (9, 8),
  (12, 11),
  (12, 13);

INSERT INTO feedback(pontuação, comentário, origem, comprador, idLeilão) VALUES
  (4, 'Produto excelente deste senhor!', 'Comprador', 2, 4),
  (3, '', 'Comprador', 3, 4),
  (0, 'Muito mau serviço, não recomendo', 'Comprador', 4, 1),
  (2, 'Mau serviço, não aconselho', 'Comprador', 13, 1),
  (5, 'Ótimo serviço, espero no futuro comprar mais produtos a este senhor!', 'Comprador', 2, 6),
  (1, 'Só dou pontuação de 1 por piedade!!', 'Comprador', 9, 5);

INSERT INTO questão(DATA, questão, idLeilão, idUtilizador) VALUES
  ('2017-01-20 00:00:00', 'O produto encontra-se em boas condições?', 6, 11),
  ('2016-05-13', 'É de qualidade? responda-me com franqueza.', 3, 2),
  ('2016-12-21', 'Tem algum tipo de garantia?', 1, 3),
  ('2017-03-16', 'As fotos do leilão correspondem realmente ao produto?', 4, 8),
  ('2017-05-14', 'Os portes de envio ficam encarregues por si?', 3, 4);

INSERT INTO resposta(DATA, resposta, idQuestão) VALUES
  ('2016-05-13 00:00:00', 'Sim, é de extrema qualidade! Pode confiar.', 2),
  ('2017-03-17 00:00:00', 'Sim, são. Se quiser posso colocar mais imagens para comprovar.', 4),
  ('2017-05-14', 'Sim,', 5);

INSERT INTO licitação(valor, DATA, idLeilão, idUtilizador) VALUES
  (399.99, '2017-02-24 00:00:00', 3, 5),
  (423.99, '2017-02-24 00:00:00', 3, 11),
  (450, '2017-02-24 00:00:00', 3, 9),
  (500, '2017-02-24 00:00:00', 3, 5),
  (550, '2017-02-24 00:00:00', 3, 9),
  (750.99, '2017-02-24 00:00:00', 3, 2),
  (10.99, '2017-03-06 00:00:00', 5, 2),
  (20, '2017-03-06 00:00:00', 5, 6),
  (49.99, '2017-03-06 00:00:00', 5, 7),
  (83.99, '2017-05-29 00:00:00', 8, 4),
  (86, '2017-05-29 00:00:00', 8, 7),
  (90, '2017-05-29 00:00:00', 8, 2),
  (9.99, '2017-05-28 00:00:00', 1, 3),
  (16.50, '2017-05-29 00:00:00', 1, 12),
  (550, '2017-02-06 00:00:00', 13, 13),
  (689.99, '2017-02-06 00:00:00', 13, 4),
  (899.99, '2017-02-06 00:00:00', 11, 13),
  (950, '2017-02-06 00:00:00', 13, 4),
  (999.99, '2017-02-06 00:00:00', 13, 13),
  (299.99, '2017-03-20 00:00:00', 17, 6),
  (110, '2017-05-29 00:00:00', 24, 7),
  (120, '2017-05-30 00:00:00', 24, 2),
  (125, '2017-05-31 00:00:00', 24, 3),
  (210, '2017-02-01 00:00:00', 25, 12),
  (220, '2017-02-02 00:00:00', 25, 13),
  (230, '2017-03-02 14:00:00', 25, 4),
  (20.99, '2017-02-06 13:00:00', 26, 13),
  (25, '2017-02-06 15:00:00', 26, 4),
  (35, '2017-02-06 17:00:00', 26, 13),
  (50, '2017-02-06 17:50:00', 26, 6);


INSERT INTO foto(imagepath, idLeilão) VALUES
  ('resources/products/1/1.jpg', 1),
  ('resources/products/2/1.jpg', 2),
  ('resources/products/3/1.jpg', 3),
  ('resources/products/4/1.jpg', 4),
  ('resources/products/5/1.jpg', 5),
  ('resources/products/6/1.jpg', 6),
  ('resources/products/7/1.jpg', 7),
  ('resources/products/8/1.jpg', 8),
  ('resources/products/9/1.jpg', 9),
  ('resources/products/10/1.jpg', 10),
  ('resources/products/11/1.jpg', 11),
  ('resources/products/12/1.jpg', 12),
  ('resources/products/13/1.jpg', 13),
  ('resources/products/14/1.jpg', 14),
  ('resources/products/15/1.jpg', 15),
  ('resources/products/16/1.jpg', 16),
  ('resources/products/17/1.jpg', 17),
  ('resources/products/17/2.jpg', 17),
  ('resources/products/18/1.jpg', 18),
  ('resources/products/19/1.jpg', 19),
  ('resources/products/20/1.jpg', 20),
  ('resources/products/21/1.jpg', 21),
  ('resources/products/22/1.jpg', 22),
  ('resources/products/23/1.jpg', 23),
  ('resources/products/24/1.jpg', 24),
  ('resources/products/25/1.jpg', 25),
  ('resources/products/26/1.jpg', 26);

INSERT INTO mensagemprivada(titulo, conteúdo, DATA, visualizada, idDestinatário, idRemetente) VALUES
  ('Acordo', 'Boa tarde, como quer fazer para trocarmos?', '2017-01-26 00:00:00', FALSE, 11, 7),
  ('RE:Acordo', 'Boa tarde, já vi que mora relativamente perto aqui de Matosinhos, se lhe convém podemos fazer a troca em mão. Cumprimentos Catarina Alves.', '2017-01-26', FALSE, 7, 11);