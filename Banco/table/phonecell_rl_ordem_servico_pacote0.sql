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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rl_ordem_servico_pacote`
--

LOCK TABLES `rl_ordem_servico_pacote` WRITE;
/*!40000 ALTER TABLE `rl_ordem_servico_pacote` DISABLE KEYS */;
INSERT INTO `rl_ordem_servico_pacote` VALUES (2,9,5,0,'2015-07-02 21:19:25'),(3,9,12,0,'2015-07-02 21:19:25'),(4,9,17,0,'2015-07-02 21:19:25'),(5,9,14,0,'2015-07-02 21:19:25'),(6,9,15,0,'2015-07-02 21:19:25'),(7,9,10,0,'2015-07-02 21:19:25');
/*!40000 ALTER TABLE `rl_ordem_servico_pacote` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-28 13:39:46
