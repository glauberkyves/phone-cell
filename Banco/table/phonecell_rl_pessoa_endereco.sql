CREATE DATABASE  IF NOT EXISTS `phonecell` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `phonecell`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: 107.180.21.19    Database: phonecell
-- ------------------------------------------------------
-- Server version	5.5.42-cll-lve

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
-- Table structure for table `rl_pessoa_endereco`
--

DROP TABLE IF EXISTS `rl_pessoa_endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rl_pessoa_endereco` (
  `id_pessoa_endereco` int(11) NOT NULL AUTO_INCREMENT,
  `id_pessoa` int(11) NOT NULL,
  `id_endereco` int(11) NOT NULL,
  `st_endereco_cobranca` int(11) NOT NULL DEFAULT '0',
  `dt_cadastro` datetime NOT NULL,
  PRIMARY KEY (`id_pessoa_endereco`),
  KEY `fk_solicitacaoendereco_solicitacao_idx` (`id_endereco`),
  KEY `fk_pessoaendereco_pessoa_idx` (`id_pessoa`),
  CONSTRAINT `fk_pessoaendereco_endereco` FOREIGN KEY (`id_endereco`) REFERENCES `tb_endereco` (`id_endereco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pessoaendereco_pessoa` FOREIGN KEY (`id_pessoa`) REFERENCES `tb_pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rl_pessoa_endereco`
--

LOCK TABLES `rl_pessoa_endereco` WRITE;
/*!40000 ALTER TABLE `rl_pessoa_endereco` DISABLE KEYS */;
/*!40000 ALTER TABLE `rl_pessoa_endereco` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-28 13:38:25
