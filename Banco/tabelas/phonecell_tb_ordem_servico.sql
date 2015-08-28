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
-- Table structure for table `tb_ordem_servico`
--

DROP TABLE IF EXISTS `tb_ordem_servico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_ordem_servico` (
  `id_ordem_servico` int(11) NOT NULL AUTO_INCREMENT,
  `id_situacao` int(11) NOT NULL,
  `id_pessoa` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_tipo_ordem_servico` int(11) NOT NULL,
  `id_velocidade` int(11) DEFAULT NULL,
  `nu_ordem_servico` varchar(20) DEFAULT NULL,
  `ds_local` varchar(45) DEFAULT NULL,
  `st_os_assinada` int(11) NOT NULL,
  `nu_contrato_oi` varchar(45) DEFAULT NULL,
  `nu_ordem_servico_oi` varchar(45) DEFAULT NULL,
  `nu_protocolo_oi_tv` varchar(45) DEFAULT NULL,
  `nu_ordem_servico_oi_tv` varchar(45) DEFAULT NULL,
  `dt_venda` datetime DEFAULT NULL,
  `dt_cadastro` datetime NOT NULL,
  `ds_velocidade_outra` varchar(45) DEFAULT NULL,
  `ds_plano_outro` varchar(45) DEFAULT NULL,
  `nu_numero_portado` int(11) DEFAULT NULL,
  `no_operadora_origem` varchar(45) DEFAULT NULL,
  `st_portabilidade` int(11) DEFAULT NULL,
  `tp_terminal_fixo_instalacao` int(11) DEFAULT NULL,
  `nu_terminal_fixo_existente` int(8) DEFAULT NULL,
  `nu_taxa_habilitacao` int(11) DEFAULT NULL,
  `st_taxa_habilitacao` int(11) DEFAULT NULL,
  `nu_quantidade_parcela` int(11) DEFAULT NULL,
  `tp_figuracao_em_lista` int(11) NOT NULL,
  `no_banco` varchar(45) DEFAULT NULL,
  `nu_conta` varchar(45) DEFAULT NULL,
  `nu_agencia` varchar(45) DEFAULT NULL,
  `tp_dacc` int(11) DEFAULT NULL,
  `dt_vencimento` datetime DEFAULT NULL,
  `nu_ponto_adicional` int(11) DEFAULT NULL,
  `tp_pagamento` int(11) DEFAULT NULL,
  `st_debito_automatico` int(11) DEFAULT NULL,
  `ds_outro_pacote` varchar(45) DEFAULT NULL,
  `tp_produto` int(11) DEFAULT NULL,
  `nu_valor_parcela` int(11) DEFAULT NULL,
  `tp_forma_pagamento` int(11) DEFAULT NULL,
  `tp_fidelizacao` int(11) DEFAULT NULL,
  `no_url` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_ordem_servico`),
  KEY `fk_ordemservico_situacao_idx` (`id_situacao`),
  KEY `fk_ordemservico_pessoa_idx` (`id_pessoa`),
  KEY `fk_ordemservico_usuario_idx` (`id_usuario`),
  KEY `fk_ordemservico_tipoordemservico_idx` (`id_tipo_ordem_servico`),
  KEY `fk_ordemservico_velocidade_idx` (`id_velocidade`),
  CONSTRAINT `fk_ordemservico_pessoa` FOREIGN KEY (`id_pessoa`) REFERENCES `tb_pessoa` (`id_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ordemservico_situacao` FOREIGN KEY (`id_situacao`) REFERENCES `tb_situacao` (`id_situacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ordemservico_tipoordemservico` FOREIGN KEY (`id_tipo_ordem_servico`) REFERENCES `tb_tipo_ordem_servico` (`id_tipo_ordem_servico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ordemservico_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ordemservico_velocidade` FOREIGN KEY (`id_velocidade`) REFERENCES `tb_velocidade` (`id_velocidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_ordem_servico`
--

LOCK TABLES `tb_ordem_servico` WRITE;
/*!40000 ALTER TABLE `tb_ordem_servico` DISABLE KEYS */;
INSERT INTO `tb_ordem_servico` VALUES (4,1,7,1,1,1,NULL,'213123',0,NULL,NULL,NULL,NULL,'2015-05-09 19:32:54','2015-05-09 19:32:54',NULL,NULL,1231232132,'12321',NULL,1,123123,NULL,1,NULL,0,'3123','312','12',1,'2015-05-09 19:32:54',NULL,NULL,NULL,NULL,1,0,NULL,NULL,''),(5,1,8,1,1,1,NULL,'213123',0,NULL,NULL,NULL,NULL,'2015-05-09 19:33:02','2015-05-09 19:33:02',NULL,NULL,1231232132,'12321',NULL,1,123123,NULL,1,NULL,0,'3123','312','12',1,'2015-05-09 19:33:02',NULL,NULL,NULL,NULL,1,0,NULL,NULL,'/ordem-servico/8f346c7637b369174e7f9ed4c16ecc5d.jpg'),(6,1,9,1,1,1,NULL,'213123',0,NULL,NULL,NULL,NULL,'2015-05-09 19:33:31','2015-05-09 19:33:31',NULL,NULL,1231232132,'12321',NULL,1,123123,NULL,1,NULL,0,'3123','312','12',1,'2015-05-09 19:33:31',NULL,NULL,NULL,NULL,1,0,NULL,NULL,''),(7,6,10,2,1,1,NULL,'brasilia 2ewwewe',0,NULL,NULL,'1111111111','11111111111111111111','2015-06-29 13:11:01','2015-06-29 13:11:01',NULL,NULL,1111111111,'claro',NULL,1,1111111111,NULL,1,NULL,0,'12312','123','3123',1,'2015-06-29 13:11:01',NULL,NULL,NULL,NULL,1,0,NULL,NULL,'/ordem-servico/cdb870804425d64b6e16bd85af44fda2.jpg'),(8,2,12,3,1,4,NULL,'Iguatemi',0,NULL,NULL,NULL,NULL,'2015-07-02 20:53:14','2015-07-02 20:53:14',NULL,NULL,2147483647,'Claro',NULL,1,2147483647,NULL,1,NULL,0,'Unibanco','1783304','3344',1,'2015-07-02 20:53:14',NULL,NULL,NULL,NULL,1,0,NULL,NULL,NULL),(9,8,12,3,2,NULL,'999999999999999','Park Shopping',0,'0999999999999',NULL,NULL,NULL,'2015-07-02 21:06:38','2015-07-02 21:06:38',NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,'','','',0,'2015-07-02 21:06:38',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'/ordem-servico/5414bdcc07aac846f35819d03ecb0f83.jpg'),(10,6,15,4,1,6,NULL,'pla',0,NULL,NULL,'123456','123456','2015-07-04 14:16:00','2015-07-04 14:16:00',NULL,NULL,2147483647,'gvt',NULL,2,2147483647,NULL,2,NULL,0,'itau','123445','1234',1,'2015-07-04 14:16:00',NULL,NULL,NULL,NULL,1,10,NULL,NULL,'/ordem-servico/409ad903ce459c23eacd358cbe9601d5.png');
/*!40000 ALTER TABLE `tb_ordem_servico` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-28 13:50:16
