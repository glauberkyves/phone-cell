CREATE DATABASE  IF NOT EXISTS `phonecell` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `phonecell`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: phonecell
-- ------------------------------------------------------
-- Server version	5.5.39

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_perfil`
--

DROP TABLE IF EXISTS `tb_perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_perfil` (
  `id_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `no_perfil` varchar(100) NOT NULL,
  `sg_perfil` varchar(45) NOT NULL,
  `st_ativo` int(11) NOT NULL,
  `dt_cadastro` datetime NOT NULL,
  `dt_atualizacao` datetime DEFAULT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_perfil`
--

LOCK TABLES `tb_perfil` WRITE;
/*!40000 ALTER TABLE `tb_perfil` DISABLE KEYS */;
INSERT INTO `tb_perfil` VALUES (1,'Usuario','ROLE_USER',1,'2015-02-10 21:15:35','2015-02-10 21:15:36'),(2,'Administrador','ROLE_SUPER',1,'2015-02-14 17:31:03','2015-02-14 17:31:04'),(3,'Vendedor','ROLE_VENDEDOR',1,'2015-03-21 20:21:40','2015-05-09 09:29:01'),(4,'Imputador','ROLE_INPUTADOR',1,'2015-05-09 09:26:42','2015-05-09 09:29:04'),(5,'Auditor','ROLE_AUDITOR',1,'2015-05-09 09:27:01','2015-05-09 09:29:06'),(6,'Acompanhador','ROLE_ACOMPANHADOR',1,'2015-05-09 09:27:16','2015-05-09 09:29:08');
/*!40000 ALTER TABLE `tb_perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pessoa_juridica`
--

DROP TABLE IF EXISTS `tb_pessoa_juridica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pessoa_juridica` (
  `id_pessoa` int(11) NOT NULL,
  `nu_cnpj` int(14) NOT NULL,
  `no_fantansia` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_pessoa`),
  KEY `FK_PESSOAJURIDICA_PESSOA_idx` (`id_pessoa`),
  CONSTRAINT `FK_PESSOAJURIDICA_PESSOA` FOREIGN KEY (`id_pessoa`) REFERENCES `tb_pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pessoa_juridica`
--

LOCK TABLES `tb_pessoa_juridica` WRITE;
/*!40000 ALTER TABLE `tb_pessoa_juridica` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_pessoa_juridica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_historico`
--

DROP TABLE IF EXISTS `tb_historico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_historico` (
  `id_historico` int(11) NOT NULL AUTO_INCREMENT,
  `id_ordem_servico` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_situacao` int(11) NOT NULL,
  `dt_cadastro` datetime NOT NULL,
  PRIMARY KEY (`id_historico`),
  KEY `fk_historico_usuario_idx` (`id_usuario`),
  KEY `fk_historico__idx` (`id_ordem_servico`),
  KEY `fk_historico_situacao_idx` (`id_situacao`),
  CONSTRAINT `fk_historico_ordem` FOREIGN KEY (`id_ordem_servico`) REFERENCES `tb_ordem_servico` (`id_ordem_servico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_historico_situacao` FOREIGN KEY (`id_situacao`) REFERENCES `tb_situacao` (`id_situacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_historico_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_historico`
--

LOCK TABLES `tb_historico` WRITE;
/*!40000 ALTER TABLE `tb_historico` DISABLE KEYS */;
INSERT INTO `tb_historico` VALUES (1,4,1,1,'2015-05-09 19:32:54'),(2,5,1,1,'2015-05-09 19:33:02'),(3,6,2,1,'2015-05-09 19:33:31');
/*!40000 ALTER TABLE `tb_historico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_plano`
--

DROP TABLE IF EXISTS `tb_plano`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_plano` (
  `id_plano` int(11) NOT NULL AUTO_INCREMENT,
  `no_plano` varchar(45) NOT NULL,
  `st_ativo` int(11) NOT NULL,
  PRIMARY KEY (`id_plano`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_plano`
--

LOCK TABLES `tb_plano` WRITE;
/*!40000 ALTER TABLE `tb_plano` DISABLE KEYS */;
INSERT INTO `tb_plano` VALUES (1,'Fixo Ilimitado',0),(2,'Fixo Controle Ilimitado',0),(3,'Voz Total',0),(4,'Fixo Ilimitado com DDD',0),(5,'Ligações para Celular Oi',0),(6,'Fixo 300',0);
/*!40000 ALTER TABLE `tb_plano` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_pessoa` int(11) NOT NULL,
  `no_email` varchar(100) NOT NULL,
  `no_senha` varchar(32) NOT NULL,
  `st_ativo` int(11) NOT NULL DEFAULT '0',
  `dt_cadastro` datetime NOT NULL,
  `dt_atualizacao` datetime DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `FK_USUARIO_PESSAO_idx` (`id_pessoa`),
  CONSTRAINT `FK_USUARIO_PESSAO` FOREIGN KEY (`id_pessoa`) REFERENCES `tb_pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_usuario`
--

LOCK TABLES `tb_usuario` WRITE;
/*!40000 ALTER TABLE `tb_usuario` DISABLE KEYS */;
INSERT INTO `tb_usuario` VALUES (1,1,'glauberkyves@gmail.com','e10adc3949ba59abbe56e057f20f883e',1,'2015-03-05 13:55:09',NULL),(2,3,'asdf@asdf.com','123456',1,'2015-03-21 20:23:19',NULL);
/*!40000 ALTER TABLE `tb_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_velocidade`
--

DROP TABLE IF EXISTS `tb_velocidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_velocidade` (
  `id_velocidade` int(11) NOT NULL AUTO_INCREMENT,
  `no_velocidade` varchar(45) NOT NULL,
  PRIMARY KEY (`id_velocidade`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_velocidade`
--

LOCK TABLES `tb_velocidade` WRITE;
/*!40000 ALTER TABLE `tb_velocidade` DISABLE KEYS */;
INSERT INTO `tb_velocidade` VALUES (1,'300 Kbps'),(2,'600 Kbps'),(3,'1Mb'),(4,'2Mb'),(5,'5Mb'),(6,'10Mb');
/*!40000 ALTER TABLE `tb_velocidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_tipo_ordem_servico`
--

DROP TABLE IF EXISTS `tb_tipo_ordem_servico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_tipo_ordem_servico` (
  `id_tipo_ordem_servico` int(11) NOT NULL AUTO_INCREMENT,
  `no_tipo_ordem_servico` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tipo_ordem_servico`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_tipo_ordem_servico`
--

LOCK TABLES `tb_tipo_ordem_servico` WRITE;
/*!40000 ALTER TABLE `tb_tipo_ordem_servico` DISABLE KEYS */;
INSERT INTO `tb_tipo_ordem_servico` VALUES (1,'Oi Fixo / Oi Banda Larga'),(2,'Oi Tv');
/*!40000 ALTER TABLE `tb_tipo_ordem_servico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rl_ordem_servico_plano`
--

DROP TABLE IF EXISTS `rl_ordem_servico_plano`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rl_ordem_servico_plano` (
  `id_ordem_servico_plano` int(11) NOT NULL AUTO_INCREMENT,
  `id_ordem_servico` int(11) NOT NULL,
  `id_plano` int(11) NOT NULL,
  `dt_cadastro` datetime NOT NULL,
  PRIMARY KEY (`id_ordem_servico_plano`),
  KEY `id_solicitacaoplano_plano_idx` (`id_plano`),
  KEY `id_solicitacaoplano_solicitacao_idx` (`id_ordem_servico`),
  CONSTRAINT `id_ordemservicoplano_ordemservico` FOREIGN KEY (`id_ordem_servico`) REFERENCES `tb_ordem_servico` (`id_ordem_servico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_ordemservicoplano_plano` FOREIGN KEY (`id_plano`) REFERENCES `tb_plano` (`id_plano`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rl_ordem_servico_plano`
--

LOCK TABLES `rl_ordem_servico_plano` WRITE;
/*!40000 ALTER TABLE `rl_ordem_servico_plano` DISABLE KEYS */;
INSERT INTO `rl_ordem_servico_plano` VALUES (23,6,6,'2015-05-09 19:56:36'),(24,6,4,'2015-05-09 19:56:36'),(29,4,6,'2015-05-09 20:30:25'),(30,4,2,'2015-05-09 20:30:25'),(31,4,4,'2015-05-09 20:30:25'),(32,4,5,'2015-05-09 20:30:25');
/*!40000 ALTER TABLE `rl_ordem_servico_plano` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rl_ordem_servico_instalacao`
--

DROP TABLE IF EXISTS `rl_ordem_servico_instalacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rl_ordem_servico_instalacao` (
  `id_ordem_servico_instalacao` int(11) NOT NULL,
  `id_ordem_servico` int(11) NOT NULL,
  `id_instalacao` int(11) NOT NULL,
  `st_segunda_opcao` int(11) NOT NULL DEFAULT '0',
  `dt_cadastro` datetime NOT NULL,
  PRIMARY KEY (`id_ordem_servico_instalacao`),
  KEY `fk_solicitacaoinstalacao_instalacao_idx` (`id_instalacao`),
  KEY `fk_solicitacaoinstalacao_solicitacao_idx` (`id_ordem_servico`),
  CONSTRAINT `fk_solicitacaoinstalacao_instalacao` FOREIGN KEY (`id_instalacao`) REFERENCES `tb_instalacao` (`id_instalacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_solicitacaoinstalacao_solicitacao` FOREIGN KEY (`id_ordem_servico`) REFERENCES `tb_ordem_servico` (`id_ordem_servico`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rl_ordem_servico_instalacao`
--

LOCK TABLES `rl_ordem_servico_instalacao` WRITE;
/*!40000 ALTER TABLE `rl_ordem_servico_instalacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `rl_ordem_servico_instalacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_endereco`
--

DROP TABLE IF EXISTS `tb_endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_endereco` (
  `id_endereco` int(11) NOT NULL AUTO_INCREMENT,
  `id_municipio` int(11) NOT NULL,
  `id_pessoa` int(11) NOT NULL,
  `id_bairro` int(11) DEFAULT NULL,
  `no_bairro` varchar(100) DEFAULT NULL,
  `no_logradouro` varchar(150) NOT NULL,
  `nu_endereco` varchar(45) NOT NULL,
  `ds_complemento` varchar(100) DEFAULT NULL,
  `nu_cep` int(8) DEFAULT NULL,
  `ds_referencia` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_endereco`),
  KEY `fk_endereco_municipio_idx` (`id_municipio`),
  KEY `fk_endereco_bairro_idx` (`id_bairro`),
  KEY `fk_endereco_pessoa_idx` (`id_pessoa`),
  CONSTRAINT `fk_endereco_bairro` FOREIGN KEY (`id_bairro`) REFERENCES `tb_bairro` (`id_bairro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_endereco_municipio` FOREIGN KEY (`id_municipio`) REFERENCES `tb_municipio` (`id_municipio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_endereco_pessoa` FOREIGN KEY (`id_pessoa`) REFERENCES `tb_pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_endereco`
--

LOCK TABLES `tb_endereco` WRITE;
/*!40000 ALTER TABLE `tb_endereco` DISABLE KEYS */;
INSERT INTO `tb_endereco` VALUES (1,2620,4,NULL,'123','312','12312','213',123123123,'3123'),(2,2620,5,NULL,'123','312','12312','213',123123123,'3123'),(3,2620,6,NULL,'123','312','12312','213',123123123,'3123'),(4,2620,7,NULL,'123','312','12312','213',123123123,'3123'),(5,2620,8,NULL,'123','312','12312','213',123123123,'3123'),(6,2620,9,NULL,'123','312','12312','213',123123123,'3123'),(7,2620,9,NULL,'123','312','12312','213',123123123,'3123'),(8,2620,9,NULL,'123','312','12312','213',123123123,'3123'),(9,2620,9,NULL,'123','312','12312','213',123123123,'3123'),(10,2620,9,NULL,'123','312','12312','213',123123123,'3123'),(11,2620,9,NULL,'123','312','12312','213',123123123,'3123'),(12,2620,9,NULL,'123','312','12312','213',123123123,'3123'),(13,2620,7,NULL,'123','312','12312','213',123123123,'3123'),(14,2620,7,NULL,'123','312','12312','213',123123123,'3123');
/*!40000 ALTER TABLE `tb_endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_situacao`
--

DROP TABLE IF EXISTS `tb_situacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_situacao` (
  `id_situacao` int(11) NOT NULL AUTO_INCREMENT,
  `no_situacao` varchar(45) NOT NULL,
  `st_ativo` int(11) NOT NULL,
  PRIMARY KEY (`id_situacao`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_situacao`
--

LOCK TABLES `tb_situacao` WRITE;
/*!40000 ALTER TABLE `tb_situacao` DISABLE KEYS */;
INSERT INTO `tb_situacao` VALUES (1,'Coletada',1),(2,'Validada',1),(3,'Imputada',1),(4,'Cancelada',1),(5,'Instalada',1),(6,'Comissionada',1),(7,'Reprovada',1);
/*!40000 ALTER TABLE `tb_situacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rl_ordem_servico_pacote`
--

DROP TABLE IF EXISTS `rl_ordem_servico_pacote`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rl_ordem_servico_pacote` (
  `id_ordem_servico_pacote` int(11) NOT NULL AUTO_INCREMENT,
  `id_ordem_servico` int(11) NOT NULL,
  `id_pacote` int(11) NOT NULL,
  `st_fidelizacao` int(11) NOT NULL DEFAULT '0',
  `dt_cadastro` datetime NOT NULL,
  PRIMARY KEY (`id_ordem_servico_pacote`),
  KEY `fk_solicitacaopacote_solicitacao_idx` (`id_ordem_servico`),
  KEY `fk_solicitacaopacote_pacote_idx` (`id_pacote`),
  CONSTRAINT `fk_ordemservicopacote_ordemservico` FOREIGN KEY (`id_ordem_servico`) REFERENCES `tb_ordem_servico` (`id_ordem_servico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ordemservicopacote_pacote` FOREIGN KEY (`id_pacote`) REFERENCES `tb_pacote` (`id_pacote`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rl_ordem_servico_pacote`
--

LOCK TABLES `rl_ordem_servico_pacote` WRITE;
/*!40000 ALTER TABLE `rl_ordem_servico_pacote` DISABLE KEYS */;
/*!40000 ALTER TABLE `rl_ordem_servico_pacote` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pacote`
--

DROP TABLE IF EXISTS `tb_pacote`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pacote` (
  `id_pacote` int(11) NOT NULL AUTO_INCREMENT,
  `no_pacote` varchar(45) NOT NULL,
  `st_ativo` int(11) NOT NULL,
  PRIMARY KEY (`id_pacote`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pacote`
--

LOCK TABLES `tb_pacote` WRITE;
/*!40000 ALTER TABLE `tb_pacote` DISABLE KEYS */;
INSERT INTO `tb_pacote` VALUES (1,'Oi Tv Start HD',1),(2,'Oi Tv Mix HD',1),(3,'Oi Tv Mix HBO HD',1),(4,'Oi Tv Mix Telecine HD',1),(5,'Oi Tv Mix Cinema HD',1),(6,'Oi Tv Mix Futebol HD',1),(7,'Oi TV Mix Futebol Cinema HD',1),(8,'Oi TV Total HD',1),(9,'Oi TV Total HBO HD',1),(10,'Oi TV Total Telecine HD',1),(11,'Oi Tv Total Cinema HD',1),(12,'Oi TV Total Futebol HD',1),(13,'Oi TV Total Futebol Cinema HD',1),(14,'Oi TV Total HD DVR',1),(15,'Oi TV Total Telecine DVR',1),(16,'Oi TV Total HD HBO DVR',1),(17,'Oi Tv Total HD Cinema DVR',1);
/*!40000 ALTER TABLE `tb_pacote` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pessoa`
--

DROP TABLE IF EXISTS `tb_pessoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pessoa` (
  `id_pessoa` int(11) NOT NULL AUTO_INCREMENT,
  `no_pessoa` varchar(150) NOT NULL,
  `st_ativo` int(11) NOT NULL,
  `dt_cadastro` datetime NOT NULL,
  `dt_atualizacao` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pessoa`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pessoa`
--

LOCK TABLES `tb_pessoa` WRITE;
/*!40000 ALTER TABLE `tb_pessoa` DISABLE KEYS */;
INSERT INTO `tb_pessoa` VALUES (1,'Glauber Kyves ',1,'2015-03-05 13:54:25',NULL),(3,'Guilherme',1,'2015-03-21 20:23:19',NULL),(4,'Teste',1,'2015-05-09 19:32:31',NULL),(5,'Teste',1,'2015-05-09 19:32:42',NULL),(6,'Teste',1,'2015-05-09 19:32:46',NULL),(7,'Teste',1,'2015-05-09 19:32:54','2015-05-09 20:22:56'),(8,'Teste',1,'2015-05-09 19:33:02',NULL),(9,'Teste',1,'2015-05-09 19:33:31',NULL);
/*!40000 ALTER TABLE `tb_pessoa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_ordem_servico`
--

DROP TABLE IF EXISTS `tb_ordem_servico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_ordem_servico` (
  `id_ordem_servico` int(11) NOT NULL AUTO_INCREMENT,
  `id_situacao` int(11) NOT NULL,
  `id_pessoa` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_tipo_ordem_servico` int(11) NOT NULL,
  `id_velocidade` int(11) DEFAULT NULL,
  `nu_ordem_servico` varchar(20) DEFAULT NULL,
  `ds_local` varchar(45) DEFAULT NULL,
  `st_os_assinada` int(11) NOT NULL,
  `nu_contrato_oi` varchar(45) DEFAULT NULL,
  `nu_ordem_servico_oi` varchar(45) DEFAULT NULL,
  `nu_protocolo_oi_tv` varchar(45) DEFAULT NULL,
  `nu_ordem_servico_oi_tv` varchar(45) DEFAULT NULL,
  `dt_venda` datetime DEFAULT NULL,
  `dt_cadastro` datetime NOT NULL,
  `ds_velocidade_outra` varchar(45) DEFAULT NULL,
  `ds_plano_outro` varchar(45) DEFAULT NULL,
  `nu_numero_portado` int(11) DEFAULT NULL,
  `no_operadora_origem` varchar(45) DEFAULT NULL,
  `st_portabilidade` int(11) DEFAULT NULL,
  `tp_terminal_fixo_instalacao` int(11) DEFAULT NULL,
  `nu_terminal_fixo_existente` int(8) DEFAULT NULL,
  `nu_taxa_habilitacao` int(11) DEFAULT NULL,
  `st_taxa_habilitacao` int(11) DEFAULT NULL,
  `nu_quantidade_parcela` int(11) DEFAULT NULL,
  `tp_figuracao_em_lista` int(11) NOT NULL,
  `no_banco` varchar(45) DEFAULT NULL,
  `nu_conta` varchar(45) DEFAULT NULL,
  `nu_agencia` varchar(45) DEFAULT NULL,
  `tp_dacc` int(11) DEFAULT NULL,
  `dt_vencimento` datetime DEFAULT NULL,
  `nu_ponto_adicional` int(11) DEFAULT NULL,
  `tp_pagamento` int(11) DEFAULT NULL,
  `st_debito_automatico` int(11) DEFAULT NULL,
  `ds_outro_pacote` varchar(45) DEFAULT NULL,
  `tp_produto` int(11) DEFAULT NULL,
  `nu_valor_parcela` int(11) DEFAULT NULL,
  `tp_forma_pagamento` int(11) DEFAULT NULL,
  `tp_fidelizacao` int(11) DEFAULT NULL,
  `no_url` varchar(100) NOT NULL,
  PRIMARY KEY (`id_ordem_servico`),
  KEY `fk_ordemservico_situacao_idx` (`id_situacao`),
  KEY `fk_ordemservico_pessoa_idx` (`id_pessoa`),
  KEY `fk_ordemservico_usuario_idx` (`id_usuario`),
  KEY `fk_ordemservico_tipoordemservico_idx` (`id_tipo_ordem_servico`),
  KEY `fk_ordemservico_velocidade_idx` (`id_velocidade`),
  CONSTRAINT `fk_ordemservico_pessoa` FOREIGN KEY (`id_pessoa`) REFERENCES `tb_pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ordemservico_situacao` FOREIGN KEY (`id_situacao`) REFERENCES `tb_situacao` (`id_situacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ordemservico_tipoordemservico` FOREIGN KEY (`id_tipo_ordem_servico`) REFERENCES `tb_tipo_ordem_servico` (`id_tipo_ordem_servico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ordemservico_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ordemservico_velocidade` FOREIGN KEY (`id_velocidade`) REFERENCES `tb_velocidade` (`id_velocidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_ordem_servico`
--

LOCK TABLES `tb_ordem_servico` WRITE;
/*!40000 ALTER TABLE `tb_ordem_servico` DISABLE KEYS */;
INSERT INTO `tb_ordem_servico` VALUES (4,1,7,1,1,1,NULL,'213123',0,NULL,NULL,NULL,NULL,'2015-05-09 19:32:54','2015-05-09 19:32:54',NULL,NULL,1231232132,'12321',NULL,1,123123,NULL,1,NULL,0,'3123','312','12',1,'2015-05-09 19:32:54',NULL,NULL,NULL,NULL,1,0,NULL,NULL,''),(5,1,8,1,1,1,NULL,'213123',0,NULL,NULL,NULL,NULL,'2015-05-09 19:33:02','2015-05-09 19:33:02',NULL,NULL,1231232132,'12321',NULL,1,123123,NULL,1,NULL,0,'3123','312','12',1,'2015-05-09 19:33:02',NULL,NULL,NULL,NULL,1,0,NULL,NULL,''),(6,1,9,1,1,1,NULL,'213123',0,NULL,NULL,NULL,NULL,'2015-05-09 19:33:31','2015-05-09 19:33:31',NULL,NULL,1231232132,'12321',NULL,1,123123,NULL,1,NULL,0,'3123','312','12',1,'2015-05-09 19:33:31',NULL,NULL,NULL,NULL,1,0,NULL,NULL,'');
/*!40000 ALTER TABLE `tb_ordem_servico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_instalacao`
--

DROP TABLE IF EXISTS `tb_instalacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_instalacao` (
  `id_instalacao` int(11) NOT NULL AUTO_INCREMENT,
  `dt_instalacao` datetime DEFAULT NULL,
  `no_periodo_instalacao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_instalacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_instalacao`
--

LOCK TABLES `tb_instalacao` WRITE;
/*!40000 ALTER TABLE `tb_instalacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_instalacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rl_usuario_perfil`
--

DROP TABLE IF EXISTS `rl_usuario_perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rl_usuario_perfil` (
  `id_usuario_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_perfil` int(11) NOT NULL,
  `st_ativo` int(11) NOT NULL,
  `dt_cadastro` datetime NOT NULL,
  PRIMARY KEY (`id_usuario_perfil`),
  KEY `FK_USUAIROPERFIL_PERFIL_idx` (`id_perfil`),
  KEY `fk_usuarioperfil_usuario_idx` (`id_usuario`),
  CONSTRAINT `FK_USUAIROPERFIL_PERFIL` FOREIGN KEY (`id_perfil`) REFERENCES `tb_perfil` (`id_perfil`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarioperfil_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rl_usuario_perfil`
--

LOCK TABLES `rl_usuario_perfil` WRITE;
/*!40000 ALTER TABLE `rl_usuario_perfil` DISABLE KEYS */;
INSERT INTO `rl_usuario_perfil` VALUES (14,2,3,1,'2015-03-21 20:23:19'),(26,1,4,1,'2015-05-09 20:32:57');
/*!40000 ALTER TABLE `rl_usuario_perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pessoa_fisica`
--

DROP TABLE IF EXISTS `tb_pessoa_fisica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pessoa_fisica` (
  `id_pessoa` int(11) NOT NULL,
  `nu_cpf` varchar(11) DEFAULT NULL,
  `dt_nascimento` datetime DEFAULT NULL,
  `sg_sexo` varchar(1) DEFAULT NULL,
  `no_nascionalidade` varchar(45) DEFAULT NULL,
  `nu_rg` varchar(45) DEFAULT NULL,
  `ds_orgao_expedido` varchar(45) DEFAULT NULL,
  `dt_expedicao` datetime DEFAULT NULL,
  `no_mae` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_pessoa`),
  KEY `FK_PESSOAFISICA_PESSOA_idx` (`id_pessoa`),
  CONSTRAINT `FK_PESSOAFISICA_PESSOA` FOREIGN KEY (`id_pessoa`) REFERENCES `tb_pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pessoa_fisica`
--

LOCK TABLES `tb_pessoa_fisica` WRITE;
/*!40000 ALTER TABLE `tb_pessoa_fisica` DISABLE KEYS */;
INSERT INTO `tb_pessoa_fisica` VALUES (4,'12345678909','2015-05-09 00:00:00','1','123','3123','2123','2015-05-09 00:00:00','212312'),(5,'12345678909','2015-05-09 00:00:00','1','123','3123','3123','2015-05-09 00:00:00','212312'),(6,'12345678909','2015-05-09 00:00:00','1','12','3123','12312','2015-05-09 00:00:00','212312'),(7,'12345678909','2015-05-09 00:00:00','1','12312','3123','312','2015-05-09 00:00:00','212312'),(8,'12345678909','2015-05-09 00:00:00','1','12','3123','3123','2015-05-09 00:00:00','212312'),(9,'12345678909','2015-05-09 00:00:00','1','212','3123','13','2015-05-09 00:00:00','212312');
/*!40000 ALTER TABLE `tb_pessoa_fisica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_contato`
--

DROP TABLE IF EXISTS `tb_contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_contato` (
  `id_contato` int(11) NOT NULL AUTO_INCREMENT,
  `id_pessoa` int(11) NOT NULL,
  `no_contato` varchar(100) DEFAULT NULL,
  `nu_telefone` int(11) DEFAULT NULL,
  `st_fixo` int(11) NOT NULL,
  PRIMARY KEY (`id_contato`),
  KEY `fk_contato_pessoa_idx` (`id_pessoa`),
  CONSTRAINT `fk_contato_pessoa` FOREIGN KEY (`id_pessoa`) REFERENCES `tb_pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_contato`
--

LOCK TABLES `tb_contato` WRITE;
/*!40000 ALTER TABLE `tb_contato` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_email_error`
--

DROP TABLE IF EXISTS `tb_email_error`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_email_error` (
  `id_email_error` int(11) NOT NULL AUTO_INCREMENT,
  `no_destinatario` varchar(100) NOT NULL,
  `ds_assunto` varchar(250) NOT NULL,
  `ds_mensagem` text NOT NULL,
  `dt_cadastro` datetime NOT NULL,
  `dt_envio` datetime DEFAULT NULL,
  `st_envio` int(11) NOT NULL,
  PRIMARY KEY (`id_email_error`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_email_error`
--

LOCK TABLES `tb_email_error` WRITE;
/*!40000 ALTER TABLE `tb_email_error` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_email_error` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-05-16 12:22:50
