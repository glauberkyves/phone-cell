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
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rl_ordem_servico_plano`
--

LOCK TABLES `rl_ordem_servico_plano` WRITE;
/*!40000 ALTER TABLE `rl_ordem_servico_plano` DISABLE KEYS */;
INSERT INTO `rl_ordem_servico_plano` VALUES (23,6,6,'2015-05-09 19:56:36'),(24,6,4,'2015-05-09 19:56:36'),(29,4,6,'2015-05-09 20:30:25'),(30,4,2,'2015-05-09 20:30:25'),(31,4,4,'2015-05-09 20:30:25'),(32,4,5,'2015-05-09 20:30:25'),(47,7,6,'2015-06-29 13:39:38'),(48,7,4,'2015-06-29 13:39:38'),(52,8,6,'2015-07-02 21:10:53'),(53,8,2,'2015-07-02 21:10:53'),(54,8,3,'2015-07-02 21:10:53'),(55,10,6,'2015-07-04 14:16:00');
/*!40000 ALTER TABLE `rl_ordem_servico_plano` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-28 13:48:37
