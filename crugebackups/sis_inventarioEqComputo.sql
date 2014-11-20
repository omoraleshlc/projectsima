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
-- Table structure for table `sis_inventarioEqComputo`
--

DROP TABLE IF EXISTS `sis_inventarioEqComputo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sis_inventarioEqComputo` (
  `keyIE` int(11) NOT NULL AUTO_INCREMENT,
  `registro` bigint(20) NOT NULL,
  `departamento` char(50) COLLATE utf8_spanish2_ci NOT NULL,
  `keyTE` int(3) NOT NULL,
  `keyMA` int(3) NOT NULL,
  `motherboard` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `drives` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `harddisk` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `memoriaRam` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `keyMAM` int(4) NOT NULL,
  `descripcionUbicacion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `monitor` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `usuario` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `hora` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `entidad` char(2) COLLATE utf8_spanish2_ci NOT NULL,
  `status` char(1) COLLATE utf8_spanish2_ci NOT NULL,
  `solicitud` bigint(20) NOT NULL,
  `descripcionEntidad` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcionAlmacen` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `tipoProcesador` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `velocidadProcesador` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `codigo` varchar(15) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `keyP` int(11) DEFAULT NULL,
  `meses_mantenimiento` int(11) DEFAULT NULL,
  `next_mantenimiento` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`keyIE`),
  KEY `registro` (`registro`),
  KEY `entidad` (`entidad`),
  KEY `solicitud` (`solicitud`),
  KEY `departamento` (`departamento`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sis_inventarioEqComputo`
--

LOCK TABLES `sis_inventarioEqComputo` WRITE;
/*!40000 ALTER TABLE `sis_inventarioEqComputo` DISABLE KEYS */;
INSERT INTO `sis_inventarioEqComputo` VALUES (40,0,'HADM',2,10,'Integrada','0','128Gb','8Gb',3,'Área de certificación (Cecia Penniecook)','13\'','admin','2014-09-17','08:49 am','01','A',0,'Hospital La Carlota','ADMISIONES','Intel','2.6 GHz','001-c010001',746,6,'2014-10-01'),(41,0,'HADM',2,7,'0','0','500Gb','4Gb',1,'Laptop para credenciales lic. Nancy','13\'','cmoncada','2014-09-08','05:01 pm','01','A',0,'Hospital La Carlota','ADMISIONES','Intel','-','001-c020002',747,6,'2014-10-01'),(42,0,'HADM',3,4,'Integrada','0','500Gb','4Gb',7,'Consulta externa','22\" FullHD Wide','admin','2014-10-03','08:30 am','01','A',0,'Hospital La Carlota','ADMISIONES','Intel core i3','3.5 GHz','001-c030001',747,6,'2014-10-01'),(43,0,'HADM',3,4,'Integrada','0','500Gb','4Gb',7,'Consulta externa','22\" Full HD Wide','admin','2014-10-03','08:31 am','01','A',0,'Hospital La Carlota','ADMISIONES','Intel core i3','3.5 GHz','001-c030002',747,6,'2014-10-01'),(44,0,'HADM',4,7,'Integrada','0','500Gb','4Gb',1,'Esposa del doctor Cano','13\'','admin','2014-09-19','09:45 am','01','A',0,'Hospital La Carlota','ADMISIONES','Intel core i3','3.5 GHz','001-c040001',NULL,6,'2014-10-01'),(45,0,'HADM',3,4,'Integrada','0','1Tb','4Gb',3,'Vida sana, Ana Gama','0','admin','2014-09-19','08:54 am','01','A',0,'Hospital La Carlota','ADMISIONES','Intel core i3','3.5 GHz','001-c030003',NULL,6,'2014-10-01'),(48,0,'HADM',8,9,'0','0','0','0',3,'Powerlite s18 plus para enseñanza','0','admin','2014-10-06','10:57 am','01','A',0,'Hospital La Carlota','ADMISIONES','0','0','001-c080001',747,6,'2015-04-06'),(49,0,'HCEX',1,4,'ProXpress m4020nd','0','IMPRESORA SAMSUNG','0',1,'Paco Flores','0','admin','2014-11-11','05:58 pm','01','A',0,'Hospital La Carlota','CONSULTA EXTERNA','0','0','001-c010002',NULL,6,'2015-05-11'),(50,0,'HADM',1,4,'ProXpress m4020nd','0','IMPRESORA SAMSUNG','0',1,'Con Fanny. proveedor: NOe','0','admin','2014-11-13','10:47 am','01','A',0,'Hospital La Carlota','ADMISIONES','0','0','001-c010003',NULL,1,'2014-12-13');
/*!40000 ALTER TABLE `sis_inventarioEqComputo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-11-20 10:17:05
