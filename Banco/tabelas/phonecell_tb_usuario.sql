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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_usuario`
--

LOCK TABLES `tb_usuario` WRITE;
/*!40000 ALTER TABLE `tb_usuario` DISABLE KEYS */;
INSERT INTO `tb_usuario` VALUES (1,1,'glauberkyves@gmail.com','e10adc3949ba59abbe56e057f20f883e',1,'2015-03-05 13:55:09',NULL),(2,3,'asdf@asdf.com','e10adc3949ba59abbe56e057f20f883e',1,'2015-03-21 20:23:19',NULL),(3,11,'geysseveras@gmail.com','e10adc3949ba59abbe56e057f20f883e',1,'2015-07-02 20:46:48',NULL),(4,13,'vendedor@phonecell.com.br','e10adc3949ba59abbe56e057f20f883e',1,'2015-07-04 13:02:35',NULL),(5,14,'gtabosa@gmail.com','e10adc3949ba59abbe56e057f20f883e',1,'2015-07-04 14:07:01',NULL),(6,16,'auditor@phonecell.com.br','e10adc3949ba59abbe56e057f20f883e',1,'2015-07-04 14:20:11',NULL),(7,17,'acompanhador@phonecell.com','e10adc3949ba59abbe56e057f20f883e',1,'2015-07-04 15:07:18',NULL);
/*!40000 ALTER TABLE `tb_usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-28 13:47:34
