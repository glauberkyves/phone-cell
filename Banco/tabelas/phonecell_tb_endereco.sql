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
-- Table structure for table `tb_endereco`
--

DROP TABLE IF EXISTS `tb_endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_endereco` (
  `id_endereco` int(11) NOT NULL AUTO_INCREMENT,
  `id_municipio` int(11) NOT NULL,
  `id_pessoa` int(11) NOT NULL,
  `id_bairro` int(11) DEFAULT NULL,
  `no_bairro` varchar(100) DEFAULT NULL,
  `no_logradouro` varchar(150) NOT NULL,
  `nu_endereco` varchar(45) NOT NULL,
  `ds_complemento` varchar(100) DEFAULT NULL,
  `nu_cep` int(8) DEFAULT NULL,
  `ds_referencia` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_endereco`),
  KEY `fk_endereco_municipio_idx` (`id_municipio`),
  KEY `fk_endereco_bairro_idx` (`id_bairro`),
  KEY `fk_endereco_pessoa_idx` (`id_pessoa`),
  CONSTRAINT `fk_endereco_bairro` FOREIGN KEY (`id_bairro`) REFERENCES `tb_bairro` (`id_bairro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_endereco_municipio` FOREIGN KEY (`id_municipio`) REFERENCES `tb_municipio` (`id_municipio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_endereco_pessoa` FOREIGN KEY (`id_pessoa`) REFERENCES `tb_pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_endereco`
--

LOCK TABLES `tb_endereco` WRITE;
/*!40000 ALTER TABLE `tb_endereco` DISABLE KEYS */;
INSERT INTO `tb_endereco` VALUES (1,2620,4,NULL,'123','312','12312','213',123123123,'3123'),(2,2620,5,NULL,'123','312','12312','213',123123123,'3123'),(3,2620,6,NULL,'123','312','12312','213',123123123,'3123'),(4,2620,7,NULL,'123','312','12312','213',123123123,'3123'),(5,2620,8,NULL,'123','312','12312','213',123123123,'3123'),(6,2620,9,NULL,'123','312','12312','213',123123123,'3123'),(7,2620,9,NULL,'123','312','12312','213',123123123,'3123'),(8,2620,9,NULL,'123','312','12312','213',123123123,'3123'),(9,2620,9,NULL,'123','312','12312','213',123123123,'3123'),(10,2620,9,NULL,'123','312','12312','213',123123123,'3123'),(11,2620,9,NULL,'123','312','12312','213',123123123,'3123'),(12,2620,9,NULL,'123','312','12312','213',123123123,'3123'),(13,2620,7,NULL,'123','312','12312','213',123123123,'3123'),(14,2620,7,NULL,'123','312','12312','213',123123123,'3123'),(15,2285,10,NULL,'setor leste','quq ','38','',73752040,'operto'),(16,2285,10,NULL,'setor leste','quq ','38','',73752040,'operto'),(17,2285,10,NULL,'setor leste','quq ','38','',73752040,'operto'),(18,2285,10,NULL,'setor leste','quq ','38','',73752040,'operto'),(19,2285,10,NULL,'setor leste','quq ','38','',73752040,'operto'),(20,2285,10,NULL,'setor leste','quq ','38','',73752040,'operto'),(21,2285,10,NULL,'setor leste','quq ','38','',73752040,'operto'),(22,2285,10,NULL,'setor leste','quq ','38','',73752040,'operto'),(23,2285,12,NULL,'Jardim Paquetá','QUADRA 70','04','',73755070,'escola municipal'),(24,2285,12,NULL,'Jardim Paquetá','QUADRA 70','04','',73755070,'escola municipal'),(25,2060,12,NULL,'Jardim Paquetá','QUADRA 70','04','',73755070,'escola municipal'),(26,2060,12,NULL,'Jardim Paquetá','QUADRA 70','04','',73755070,'escola municipal'),(27,2060,12,NULL,'Jardim Paquetá','QUADRA 70','04','',73755070,'escola municipal'),(28,1778,15,NULL,'srl','qd 3 conj d casa 15','1','',73350203,'qd');
/*!40000 ALTER TABLE `tb_endereco` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-28 13:48:50
