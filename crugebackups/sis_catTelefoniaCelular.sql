-- MySQL dump 10.13  Distrib 5.5.38, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: sima
-- ------------------------------------------------------
-- Server version	5.5.38-0ubuntu0.14.04.1

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
-- Table structure for table `sis_catTelefoniaCelular`
--

DROP TABLE IF EXISTS `sis_catTelefoniaCelular`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sis_catTelefoniaCelular` (
  `keyCTC` int(4) NOT NULL AUTO_INCREMENT,
  `precioEquipo` decimal(6,2) NOT NULL,
  `cantidadAutorizada` decimal(6,2) NOT NULL,
  `costoRenta` decimal(6,2) NOT NULL,
  `fechaContratacion` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `plazoForzoso` int(2) NOT NULL,
  `keySW` int(2) NOT NULL,
  `modelo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `chip` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `imei` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `keyMA` int(4) NOT NULL,
  `usuarioCelular` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcionUbicacion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `almacen` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `codigoEntidad` char(2) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `hora` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `entidad` char(2) COLLATE utf8_spanish2_ci NOT NULL,
  `ruta` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `nTelefonico` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `registro` int(11) NOT NULL,
  `solicitud` int(11) NOT NULL,
  `fechaInicial` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `fechaFinal` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `minutos` int(4) NOT NULL,
  `red` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `sms` varchar(4) COLLATE utf8_spanish2_ci NOT NULL,
  `internet` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `roaming` char(2) COLLATE utf8_spanish2_ci NOT NULL,
  `plan` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `moduloAdicional` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `company` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `keyP` int(11) DEFAULT NULL,
  `meses_mantenimiento` int(11) DEFAULT NULL,
  `next_mantenimiento` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`keyCTC`),
  KEY `solicitud` (`solicitud`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sis_catTelefoniaCelular`
--

LOCK TABLES `sis_catTelefoniaCelular` WRITE;
/*!40000 ALTER TABLE `sis_catTelefoniaCelular` DISABLE KEYS */;
INSERT INTO `sis_catTelefoniaCelular` VALUES (1,0.00,750.00,750.00,'2013-10-16',24,1,'Galaxy S4','123456789','1234567890',5,'Andres Carballo','Sistemas','HSIST','01','acarballo','2013-08-21','10:18 am','01','700','8262615804',138,136,'2013-08-21','2014-08-21',1000,'5000','30','600','1','Abierto','ninguno','1','001-t010001',NULL,6,'2014-02-21');
/*!40000 ALTER TABLE `sis_catTelefoniaCelular` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-11-20 10:20:20
