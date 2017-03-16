-- MySQL dump 10.15  Distrib 10.0.28-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	10.0.28-MariaDB

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
-- Table structure for table `dica`
--

DROP TABLE IF EXISTS `dica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dica` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `dica` varchar(45) DEFAULT NULL,
  `cod_palavra` int(11) NOT NULL,
  PRIMARY KEY (`cod`),
  KEY `fk_dica_palavra1_idx` (`cod_palavra`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dica`
--

/*!40000 ALTER TABLE `dica` DISABLE KEYS */;
INSERT INTO `dica` VALUES (2,'brinquedo',23),(3,'redondo',23),(4,'brinquedo',22),(5,'pano',22),(8,'Verbo',1),(9,'1º Conjugação ',1);
/*!40000 ALTER TABLE `dica` ENABLE KEYS */;

--
-- Table structure for table `palavra`
--

DROP TABLE IF EXISTS `palavra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `palavra` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `palavra` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cod`),
  UNIQUE KEY `palavra` (`palavra`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `palavra`
--

/*!40000 ALTER TABLE `palavra` DISABLE KEYS */;
INSERT INTO `palavra` VALUES (23,'bola'),(22,'boneca'),(1,'cantar'),(18,'carlos'),(19,'falar'),(21,'lousa'),(20,'pulando'),(2,'voar');
/*!40000 ALTER TABLE `palavra` ENABLE KEYS */;

--
-- Table structure for table `pontucao`
--

DROP TABLE IF EXISTS `pontucao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pontucao` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `acertos` int(11) DEFAULT NULL,
  `erros` int(11) DEFAULT NULL,
  `palavra` varchar(45) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pontucao`
--

/*!40000 ALTER TABLE `pontucao` DISABLE KEYS */;
INSERT INTO `pontucao` VALUES (1,'Carlos',1,3,'0'),(3,'Carlos',4,0,'voar'),(4,'Carlos',6,0,'carlos'),(5,'Eduardo',6,0,'boneca'),(6,NULL,0,1,'jhçl'),(7,'Carlos',5,3,'falar'),(8,'João',6,0,'boneca'),(9,'elo',4,0,'bola');
/*!40000 ALTER TABLE `pontucao` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-16 18:25:49
