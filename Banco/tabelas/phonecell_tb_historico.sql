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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_historico`
--

LOCK TABLES `tb_historico` WRITE;
/*!40000 ALTER TABLE `tb_historico` DISABLE KEYS */;
INSERT INTO `tb_historico` VALUES (1,4,1,1,'2015-05-09 19:32:54'),(2,5,1,1,'2015-05-09 19:33:02'),(3,6,2,1,'2015-05-09 19:33:31'),(4,7,2,1,'2015-06-29 13:11:01'),(5,7,1,1,'2015-06-29 13:29:51'),(6,7,1,1,'2015-06-29 13:36:44'),(7,7,1,1,'2015-06-29 13:39:38'),(8,7,1,2,'2015-06-29 13:49:34'),(9,7,1,2,'2015-06-29 14:57:01'),(10,7,1,3,'2015-06-29 14:58:37'),(11,7,1,3,'2015-06-29 14:58:37'),(12,7,1,3,'2015-06-29 14:58:58'),(13,7,1,4,'2015-06-30 14:48:47'),(14,7,1,6,'2015-06-30 14:53:21'),(15,7,1,6,'2015-06-30 14:53:42'),(16,7,1,4,'2015-06-30 14:56:29'),(17,7,1,6,'2015-06-30 14:58:09'),(18,7,1,7,'2015-06-30 15:03:07'),(19,7,1,6,'2015-06-30 15:03:20'),(20,8,3,1,'2015-07-02 20:53:15'),(21,8,3,1,'2015-07-02 20:58:15'),(22,9,3,1,'2015-07-02 21:06:38'),(23,8,3,1,'2015-07-02 21:10:53'),(24,9,1,1,'2015-07-02 21:19:25'),(25,9,1,2,'2015-07-02 21:21:22'),(26,9,3,3,'2015-07-02 21:23:58'),(27,9,3,4,'2015-07-02 21:29:04'),(28,9,3,7,'2015-07-02 21:30:11'),(29,9,3,6,'2015-07-02 21:30:37'),(30,9,1,8,'2015-07-04 12:14:58'),(31,10,4,1,'2015-07-04 14:16:00'),(32,10,6,2,'2015-07-04 14:23:09'),(33,10,2,3,'2015-07-04 14:50:47'),(34,8,6,2,'2015-07-04 14:52:53'),(35,10,7,4,'2015-07-04 15:17:11'),(36,10,7,6,'2015-07-04 15:17:33'),(37,9,1,8,'2015-07-04 15:28:12');
/*!40000 ALTER TABLE `tb_historico` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-28 13:46:56
