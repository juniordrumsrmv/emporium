-- Script oficial de criaçao das tabelas do sistema One English

-- Tabela de tipo de usuários
create table user_type
(
  user_type                 smallint unsigned   not null,
  name_type                 varchar(30),
  primary key (user_type)
);

-- Inserindo tipos padrões
insert into user_type values (1, 'ALUNO');
insert into user_type values (2, 'PROFESSOR(A)');
insert into user_type values (3, 'FUNCIONÁRIO ADM');

-- Tabela de usuários
create table users
(
  user_key                  bigint   unsigned   not null auto_increment,
  user_type                 smallint unsigned   not null,
  username                  varchar(60),
  user_email                varchar(60),
  password                  varchar(100),
  user_status               smallint unsigned   not null,
  user_level                smallint unsigned   not null,
  user_address              varchar(60),
  user_number               varchar(20),
  user_comple               varchar(20),
  user_neig                 varchar(20),
  user_city                 varchar(20),
  user_state                varchar(20),
  user_zip                  varchar(12),
  user_country              varchar(60),
  user_phone_area_code      varchar(16),
  user_phone_number         varchar(16),
  cad_date                  datetime,
  primary key (user_key, user_type, user_id)
);

--Inserindo usário inicial
insert into users (user_type, username, password, user_status, user_level) values (3, '123', '$2y$10$A69ALs3P0sdmMb34MoccnOBpLPnHjK5Xf53vk.4NGbhYXAaxqc97O', 0,0);

-- Tabela de nível do aluno
create table user_level
(
  user_level                 smallint unsigned   not null,
  name_level                 varchar(30),
  primary key (user_level)
);

-- Inserindo level
insert into user_level values (1, 'INTRO');
insert into user_level values (2, 'A1');
insert into user_level values (3, 'A2');
insert into user_level values (4, 'B1');
insert into user_level values (5, 'B2');
insert into user_level values (6, 'C1');
insert into user_level values (7, 'C2');


-- Tabela de nível do aluno
create table user_status
(
  user_status                 smallint unsigned   not null,
  name_status                 varchar(30),
  primary key (user_status)
);

-- Inserindo status
insert into user_status values (0, 'Liberado');
insert into user_status values (1, 'Bloqueado');
insert into user_status values (2, 'Desativado');
insert into user_status values (3, 'Pendências');

-- Tabela de Estados
create table state (
  acronym                   char(4) not null,
  name                      varchar(255) default null,
  timezone                  tinyint(4) default null,
  dls_timezone              tinyint(4) default null,
  state_code                char(10) default null,
  primary key (acronym)
);

-- Inserindo estados
INSERT INTO state VALUES ('AC','Acre',-5,-5,'12'),('AL','Alagoas',-3,-3,'27'),('AP','Amapá',-3,-3,'16'),('AM','Amazonas',-5,-5,'13'),('BA','Bahia',-3,-3,'29'),('CE','Ceará',-3,-3,'23'),('DF','Distrito Federal',-3,-2,'53'),('ES','Espírito Santo',-3,-2,'32'),('GO','Goiás',-3,-2,'52'),('MA','Maranhão',-3,-3,'21'),('MT','Mato Grosso',-4,-4,'51'),('MS','Mato Grosso do Sul',-4,-3,'50'),('MG','Minas Gerais',-3,-2,'31'),('PA','Pará',-3,-3,'15'),('PB','Paraíba',-3,-3,'25'),('PR','Paraná',-3,-2,'41'),('PE','Pernambuco',-3,-3,'26'),('PI','Piaui',-3,-3,'22'),('RJ','Rio de Janeiro',-3,-2,'33'),('RN','Rio Grande do Norte',-3,-3,'24'),('RS','Rio Grande do Sul',-3,-2,'43'),('RO','Rondônia',-4,-4,'11'),('RR','Roráima',-4,-4,'14'),('SP','São Paulo',-3,-2,'35'),('SE','Sergipe',-3,-3,'28'),('SC','Santa Catarina',-3,-2,'42'),('TO','Tocantins',-3,-3,'17');

-- Tabela de paises
create table country (
  country_code mediumint(8) unsigned not null,
  country_name varchar(80) default null,
  primary key (country_code),
  key index_country_name (country_name)
);

-- Inserindo paises
INSERT INTO `country` VALUES (9946,'A DESIGNAR'),(132,'AFEGANISTAO'),(7560,'AFRICA DO SUL'),(175,'ALBANIA, REPUBLICA DA'),(230,'ALEMANHA'),(370,'ANDORRA'),(400,'ANGOLA'),(418,'ANGUILLA'),(434,'ANTIGUA E BARBUDA'),(477,'ANTILHAS HOLANDESAS'),(531,'ARABIA SAUDITA'),(590,'ARGELIA'),(639,'ARGENTINA'),(647,'ARMENIA, REPUBLICA DA'),(655,'ARUBA'),(698,'AUSTRALIA'),(728,'AUSTRIA'),(736,'AZERBAIJAO, REPUBLICA DO'),(779,'BAHAMAS, ILHAS'),(809,'BAHREIN, ILHAS'),(9950,'BANCOS CENTRAIS'),(817,'BANGLADESH'),(833,'BARBADOS'),(850,'BELARUS, REPUBLICA DA'),(876,'BELGICA'),(884,'BELIZE'),(2291,'BENIN'),(906,'BERMUDAS'),(973,'BOLIVIA'),(981,'BOSNIA-HERZEGOVINA, REPUBLICA DA'),(1015,'BOTSUANA'),(1058,'BRASIL'),(1082,'BRUNEI'),(1112,'BULGARIA, REPUBLICA DA'),(310,'BURKINA FASO'),(1155,'BURUNDI'),(1198,'BUTAO'),(1279,'CABO VERDE, REPUBLICA DE'),(1457,'CAMAROES'),(1414,'CAMBOJA'),(1490,'CANADA'),(1511,'CANARIAS, ILHAS'),(1546,'CATAR'),(1376,'CAYMAN, ILHAS'),(1538,'CAZAQUISTAO, REPUBLICA DO'),(7889,'CHADE'),(1589,'CHILE'),(1600,'CHINA, REPUBLICA POPULAR'),(1635,'CHIPRE'),(5118,'CHRISTMAS,ILHA (NAVIDAD)'),(7412,'CINGAPURA'),(1651,'COCOS(KEELING),ILHAS'),(1694,'COLOMBIA'),(1732,'COMORES, ILHAS'),(1775,'CONGO'),(8885,'CONGO, REPUBLICA DEMOCRATICA DO'),(1830,'COOK, ILHAS'),(1872,'COREIA, REP.POP.DEMOCRATICA'),(1902,'COREIA, REPUBLICA DA'),(1937,'COSTA DO MARFIM'),(1961,'COSTA RICA'),(1988,'COVEITE'),(1953,'CROACIA (REPUBLICA DA)'),(1996,'CUBA'),(2321,'DINAMARCA'),(7838,'DJIBUTI'),(2356,'DOMINICA,ILHA'),(2402,'EGITO'),(6874,'EL SALVADOR'),(2445,'EMIRADOS ARABES UNIDOS'),(2399,'EQUADOR'),(2437,'ERITREIA'),(2470,'ESLOVACA, REPUBLICA'),(2461,'ESLOVENIA, REPUBLICA DA'),(2453,'ESPANHA'),(2496,'ESTADOS UNIDOS'),(2518,'ESTONIA, REPUBLICA DA'),(2534,'ETIOPIA'),(2550,'FALKLAND (ILHAS MALVINAS)'),(2593,'FEROE, ILHAS'),(8702,'FIJI'),(2674,'FILIPINAS'),(2712,'FINLANDIA'),(1619,'FORMOSA (TAIWAN)'),(2755,'FRANCA'),(2810,'GABAO'),(2852,'GAMBIA'),(2895,'GANA'),(2917,'GEORGIA, REPUBLICA DA'),(2933,'GIBRALTAR'),(2976,'GRANADA'),(3018,'GRECIA'),(3050,'GROENLANDIA'),(3093,'GUADALUPE'),(3131,'GUAM'),(3174,'GUATEMALA'),(1504,'GUERNSEY, ILHA DO CANAL'),(3379,'GUIANA'),(3255,'GUIANA FRANCESA'),(3298,'GUINE'),(3344,'GUINE-BISSAU'),(3310,'GUINE-EQUATORIAL'),(3417,'HAITI'),(3450,'HONDURAS'),(3514,'HONG KONG'),(3557,'HUNGRIA, REPUBLICA DA'),(3573,'IEMEN'),(3611,'INDIA'),(3654,'INDONESIA'),(3727,'IRA, REPUBLICA ISLAMICA DO'),(3697,'IRAQUE'),(3751,'IRLANDA'),(3794,'ISLANDIA'),(3832,'ISRAEL'),(3867,'ITALIA'),(3913,'JAMAICA'),(3999,'JAPAO'),(1508,'JERSEY, ILHA DO CANAL'),(3964,'JOHNSTON, ILHAS'),(4030,'JORDANIA'),(4111,'KIRIBATI'),(4200,'LAOS, REP.POP.DEMOCR.DO'),(4260,'LESOTO'),(4278,'LETONIA, REPUBLICA DA'),(4316,'LIBANO'),(4340,'LIBERIA'),(4383,'LIBIA'),(4405,'LIECHTENSTEIN'),(4421,'LITUANIA, REPUBLICA DA'),(4456,'LUXEMBURGO'),(4472,'MACAU'),(4499,'MACEDONIA, ANT.REP.IUGOSLAVA'),(4502,'MADAGASCAR'),(4525,'MADEIRA, ILHA DA'),(4553,'MALASIA'),(4588,'MALAVI'),(4618,'MALDIVAS'),(4642,'MALI'),(4677,'MALTA'),(3595,'MAN, ILHA DE'),(4723,'MARIANAS DO NORTE'),(4740,'MARROCOS'),(4766,'MARSHALL,ILHAS'),(4774,'MARTINICA'),(4855,'MAURICIO'),(4880,'MAURITANIA'),(4936,'MEXICO'),(930,'MIANMAR (BIRMANIA)'),(4995,'MICRONESIA'),(4901,'MIDWAY, ILHAS'),(5053,'MOCAMBIQUE'),(4944,'MOLDAVIA, REPUBLICA DA'),(4952,'MONACO'),(4979,'MONGOLIA'),(4985,'MONTENEGRO'),(5010,'MONTSERRAT,ILHAS'),(5070,'NAMIBIA'),(5088,'NAURU'),(5177,'NEPAL'),(5215,'NICARAGUA'),(5258,'NIGER'),(5282,'NIGERIA'),(5312,'NIUE,ILHA'),(5355,'NORFOLK,ILHA'),(5380,'NORUEGA'),(5428,'NOVA CALEDONIA'),(5487,'NOVA ZELANDIA'),(5568,'OMA'),(9970,'ORGANIZACOES INTERNACIONAIS'),(5665,'PACIFICO,ILHAS DO (POSSESSAO DOS EUA)'),(5738,'PAISES BAIXOS (HOLANDA)'),(5754,'PALAU'),(5800,'PANAMA'),(5452,'PAPUA NOVA GUINE'),(5762,'PAQUISTAO'),(5860,'PARAGUAI'),(5894,'PERU'),(5932,'PITCAIRN,ILHA'),(5991,'POLINESIA FRANCESA'),(6033,'POLONIA, REPUBLICA DA'),(6114,'PORTO RICO'),(6076,'PORTUGAL'),(9903,'PROVISAO DE NAVIOS E AERONAVES'),(6238,'QUENIA'),(6254,'QUIRGUIZ, REPUBLICA'),(6289,'REINO UNIDO'),(6408,'REPUBLICA CENTRO-AFRICANA'),(6475,'REPUBLICA DOMINICANA'),(6602,'REUNIAO, ILHA'),(6700,'ROMENIA'),(6750,'RUANDA'),(6769,'RUSSIA, FEDERACAO DA'),(6858,'SAARA OCIDENTAL'),(6781,'SAINT KITTS E NEVIS'),(6777,'SALOMAO, ILHAS'),(6904,'SAMOA'),(6912,'SAMOA AMERICANA'),(6971,'SAN MARINO'),(7102,'SANTA HELENA'),(7153,'SANTA LUCIA'),(6955,'SAO CRISTOVAO E NEVES,ILHAS'),(7005,'SAO PEDRO E MIQUELON'),(7200,'SAO TOME E PRINCIPE, ILHAS'),(7056,'SAO VICENTE E GRANADINAS'),(7285,'SENEGAL'),(7358,'SERRA LEOA'),(7370,'SERVIA'),(7315,'SEYCHELLES'),(7447,'SIRIA, REPUBLICA ARABE DA'),(7480,'SOMALIA'),(7501,'SRI LANKA'),(7544,'SUAZILANDIA'),(7595,'SUDAO'),(7641,'SUECIA'),(7676,'SUICA'),(7706,'SURINAME'),(7722,'TADJIQUISTAO, REPUBLICA DO'),(7765,'TAILANDIA'),(7803,'TANZANIA, REP.UNIDA DA'),(7919,'TCHECA, REPUBLICA'),(7820,'TERRITORIO BRIT.OC.INDICO'),(7951,'TIMOR LESTE'),(8001,'TOGO'),(8109,'TONGA'),(8052,'TOQUELAU,ILHAS'),(8150,'TRINIDAD E TOBAGO'),(8206,'TUNISIA'),(8230,'TURCAS E CAICOS,ILHAS'),(8249,'TURCOMENISTAO, REPUBLICA DO'),(8273,'TURQUIA'),(8281,'TUVALU'),(8311,'UCRANIA'),(8338,'UGANDA'),(8451,'URUGUAI'),(8478,'UZBEQUISTAO, REPUBLICA DO'),(5517,'VANUATU'),(8486,'VATICANO, EST.DA CIDADE DO'),(8508,'VENEZUELA'),(8583,'VIETNA'),(8630,'VIRGENS,ILHAS (BRITANICAS)'),(8664,'VIRGENS,ILHAS (E.U.A.)'),(8737,'WAKE, ILHA'),(8907,'ZAMBIA'),(6653,'ZIMBABUE'),(8958,'ZONA DO CANAL DO PANAMA');
