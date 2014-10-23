-- MySQL dump 10.13  Distrib 5.5.40, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sima
-- ------------------------------------------------------
-- Server version	5.5.40-0ubuntu0.14.04.1

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
-- Table structure for table `cruge_user`
--

DROP TABLE IF EXISTS `cruge_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cruge_user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `regdate` bigint(30) DEFAULT NULL,
  `actdate` bigint(30) DEFAULT NULL,
  `logondate` bigint(30) DEFAULT NULL,
  `username` varchar(64) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL COMMENT 'Hashed password',
  `authkey` varchar(100) DEFAULT NULL COMMENT 'llave de autentificacion',
  `state` int(11) DEFAULT '0',
  `totalsessioncounter` int(11) DEFAULT '0',
  `currentsessioncounter` int(11) DEFAULT '0',
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cruge_user`
--

LOCK TABLES `cruge_user` WRITE;
/*!40000 ALTER TABLE `cruge_user` DISABLE KEYS */;
INSERT INTO `cruge_user` VALUES (1,NULL,NULL,1414105227,'admin','admin@tucorreo.com','907b9970bdcf5afb6e0f5d4b71227e8f',NULL,1,0,0),(2,NULL,NULL,NULL,'invitado','invitado','nopassword',NULL,1,0,0),(11,NULL,NULL,1414099934,'emartinez','emartinez@lacarlota.um.edu.mx','c28742692e4ac2ddf3bad0f08deae6bb',NULL,1,0,0),(23,NULL,NULL,NULL,'SANDRA','','9d063fd981d506e4f8fe3bda502935df',NULL,1,0,0),(24,NULL,NULL,NULL,'silvia','','6e3f560530f160dc58dcd01aabb2e9c2',NULL,1,0,0),(25,NULL,NULL,NULL,'vianey','','6e057cba65464d5627c3a7bbd06a50f9',NULL,1,0,0),(26,NULL,NULL,NULL,'sofia','','dbc3c50848d0018bc557251940feade3',NULL,1,0,0),(27,1404834513,NULL,1405463803,'qwerty','q@a.a','907b9970bdcf5afb6e0f5d4b71227e8f','6d45d791d5158b79b6bc697f36f3fbc8',1,0,0),(28,NULL,NULL,1412270368,'wake','dake@lacarlota.um.edu.mx','78ce4c2cd8e412c7692901e9f0a3e216',NULL,1,0,0),(29,NULL,NULL,1414105149,'cmoncada','cmoncada@lacarlota.um.edu.mx','c28742692e4ac2ddf3bad0f08deae6bb',NULL,1,0,0),(30,NULL,NULL,1414099776,'acarballo','acarballo@lacarlota.um.edu.mx','c28742692e4ac2ddf3bad0f08deae6bb',NULL,1,0,0),(31,NULL,NULL,1412270166,'omorales','omorales@lacarlota.um.edu.mx','50d296cdd865ac8a12b99417c4519608',NULL,1,0,0);
/*!40000 ALTER TABLE `cruge_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-10-23 18:16:10
