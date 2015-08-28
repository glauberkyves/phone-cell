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
-- Table structure for table `tb_comissao`
--

DROP TABLE IF EXISTS `tb_comissao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_comissao` (
  `id_comissao` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_ordem_servico` int(11) NOT NULL,
  `nu_valor` int(11) NOT NULL,
  `dt_cadastro` datetime NOT NULL,
  PRIMARY KEY (`id_comissao`),
  KEY `fk_comissao_usuairo_idx` (`id_usuario`),
  KEY `fk_comissao_ordemservico_idx` (`id_ordem_servico`),
  CONSTRAINT `fk_comissao_ordemservico` FOREIGN KEY (`id_ordem_servico`) REFERENCES `tb_ordem_servico` (`id_ordem_servico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_comissao_usuairo` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_comissao`
--

LOCK TABLES `tb_comissao` WRITE;
/*!40000 ALTER TABLE `tb_comissao` DISABLE KEYS */;
INSERT INTO `tb_comissao` VALUES (1,3,9,100,'2015-07-04 12:11:37'),(2,3,9,100,'2015-07-04 12:11:46'),(3,3,9,100,'2015-07-04 12:11:48'),(4,3,9,100,'2015-07-04 12:12:03'),(5,3,9,100,'2015-07-04 12:14:34'),(6,3,9,100,'2015-07-04 12:14:58'),(7,3,9,100,'2015-07-04 15:28:12');
/*!40000 ALTER TABLE `tb_comissao` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-28 13:37:18
