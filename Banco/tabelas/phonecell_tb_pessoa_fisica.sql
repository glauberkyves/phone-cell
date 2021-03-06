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
INSERT INTO `tb_pessoa_fisica` VALUES (4,'12345678909','2015-05-09 00:00:00','1','123','3123','2123','2015-05-09 00:00:00','212312'),(5,'12345678909','2015-05-09 00:00:00','1','123','3123','3123','2015-05-09 00:00:00','212312'),(6,'12345678909','2015-05-09 00:00:00','1','12','3123','12312','2015-05-09 00:00:00','212312'),(7,'12345678909','2015-05-09 00:00:00','1','12312','3123','312','2015-05-09 00:00:00','212312'),(8,'12345678909','2015-05-09 00:00:00','1','12','3123','3123','2015-05-09 00:00:00','212312'),(9,'12345678909','2015-05-09 00:00:00','1','212','3123','13','2015-05-09 00:00:00','212312'),(10,'42193655324','2015-06-29 00:00:00','1',NULL,'2500',NULL,'2015-06-29 00:00:00','mae'),(11,'','2015-07-02 20:46:47',NULL,NULL,NULL,NULL,'2015-07-02 20:46:47',NULL),(12,'03159266192','2015-07-02 00:00:00','2',NULL,'000000',NULL,'2013-07-02 00:00:00','Lucia Maria Veras Silva'),(13,'','2015-07-04 13:02:35',NULL,NULL,NULL,NULL,'2015-07-04 13:02:35',NULL),(14,'','2015-07-04 14:07:01',NULL,NULL,NULL,NULL,'2015-07-04 14:07:01',NULL),(15,'72360313134','2015-07-04 00:00:00','1',NULL,'33333333333333',NULL,'2015-07-04 00:00:00','Simone Moreira da silva'),(16,'','2015-07-04 14:20:11',NULL,NULL,NULL,NULL,'2015-07-04 14:20:11',NULL),(17,'','2015-07-04 15:07:18',NULL,NULL,NULL,NULL,'2015-07-04 15:07:18',NULL);
/*!40000 ALTER TABLE `tb_pessoa_fisica` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-28 13:50:33
