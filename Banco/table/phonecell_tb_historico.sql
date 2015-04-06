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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_historico`
--

LOCK TABLES `tb_historico` WRITE;
/*!40000 ALTER TABLE `tb_historico` DISABLE KEYS */;
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

-- Dump completed on 2015-03-21 12:41:57
