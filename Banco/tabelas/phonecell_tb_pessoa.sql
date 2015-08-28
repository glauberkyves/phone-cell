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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pessoa`
--

LOCK TABLES `tb_pessoa` WRITE;
/*!40000 ALTER TABLE `tb_pessoa` DISABLE KEYS */;
INSERT INTO `tb_pessoa` VALUES (1,'Glauber Kyves ',1,'2015-03-05 13:54:25',NULL),(3,'Guilherme',1,'2015-03-21 20:23:19',NULL),(4,'Teste',1,'2015-05-09 19:32:31',NULL),(5,'Teste',1,'2015-05-09 19:32:42',NULL),(6,'Teste',1,'2015-05-09 19:32:46',NULL),(7,'Teste',1,'2015-05-09 19:32:54','2015-05-09 20:22:56'),(8,'Teste',1,'2015-05-09 19:33:02',NULL),(9,'Teste',1,'2015-05-09 19:33:31',NULL),(10,'Teset ',1,'2015-06-29 13:11:01',NULL),(11,'Geysse Veras',1,'2015-07-02 20:46:47',NULL),(12,'Geysse Veras Silva',1,'2015-07-02 20:53:14',NULL),(13,'Vendedor',1,'2015-07-04 13:02:35',NULL),(14,'Guilherme Tabosa',1,'2015-07-04 14:07:01',NULL),(15,'Guilherme da Silva Tabosa',1,'2015-07-04 14:16:00',NULL),(16,'Auditor',1,'2015-07-04 14:20:11',NULL),(17,'Acompanhador',1,'2015-07-04 15:07:18',NULL);
/*!40000 ALTER TABLE `tb_pessoa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-28 13:50:09
