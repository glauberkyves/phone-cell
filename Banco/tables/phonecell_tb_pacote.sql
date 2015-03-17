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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pacote`
--

LOCK TABLES `tb_pacote` WRITE;
/*!40000 ALTER TABLE `tb_pacote` DISABLE KEYS */;
INSERT INTO `tb_pacote` VALUES (1,'Oi Tv Start HD',1),(2,'Oi Tv Mix HD',1),(3,'Oi Tv Mix HBO HD',1),(4,'Oi Tv Mix Telecine HD',1),(5,'Oi Tv Mix Cinema HD',1),(6,'Oi Tv Mix Futebol HD',1),(7,'Oi TV Mix Futebol Cinema HD',1),(8,'Oi TV Total HD',1),(9,'Oi TV Total HBO HD',1),(10,'Oi TV Total Telecine HD',1),(11,'Oi Tv Total Cinema HD',1),(12,'Oi TV Total Futebol HD',1),(13,'Oi TV Total Futebol Cinema HD',1),(14,'Oi TV Total HD DVR',1),(15,'Oi TV Total Telecine DVR',1),(16,'Oi TV Total HD HBO DVR',1),(17,'Oi Tv Total HD Cinema DVR',1),(18,'À La carte',1);
/*!40000 ALTER TABLE `tb_pacote` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-03-16 23:59:35
