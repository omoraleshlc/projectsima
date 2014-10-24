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
-- Table structure for table `cruge_session`
--

DROP TABLE IF EXISTS `cruge_session`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cruge_session` (
  `idsession` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `created` bigint(30) DEFAULT NULL,
  `expire` bigint(30) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `ipaddress` varchar(45) DEFAULT NULL,
  `usagecount` int(11) DEFAULT '0',
  `lastusage` bigint(30) DEFAULT NULL,
  `logoutdate` bigint(30) DEFAULT NULL,
  `ipaddressout` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idsession`),
  KEY `crugesession_iduser` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=446 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cruge_session`
--

LOCK TABLES `cruge_session` WRITE;
/*!40000 ALTER TABLE `cruge_session` DISABLE KEYS */;
INSERT INTO `cruge_session` VALUES (1,1,1400624024,1400625824,0,'127.0.0.1',1,1400624024,1400624195,'127.0.0.1'),(2,2,1400624222,1400626022,1,'127.0.0.1',1,1400624222,NULL,NULL),(3,1,1400624231,1400626031,0,'127.0.0.1',1,1400624231,NULL,NULL),(4,1,1400626090,1400627890,1,'127.0.0.1',1,1400626090,NULL,NULL),(5,1,1400707910,1400709710,0,'127.0.0.1',1,1400707910,NULL,NULL),(6,1,1400712370,1400714170,0,'127.0.0.1',1,1400712370,1400712374,'127.0.0.1'),(7,1,1400713869,1400715669,0,'127.0.0.1',1,1400713869,1400714063,'127.0.0.1'),(8,1,1400714080,1400715880,0,'127.0.0.1',1,1400714080,1400714181,'127.0.0.1'),(9,1,1400714190,1400715990,1,'127.0.0.1',1,1400714190,NULL,NULL),(10,1,1400772616,1400774416,0,'127.0.0.1',1,1400772616,1400772776,'127.0.0.1'),(11,1,1400772781,1400774581,0,'127.0.0.1',1,1400772781,1400774357,'127.0.0.1'),(12,1,1400774369,1400776169,1,'127.0.0.1',1,1400774369,NULL,NULL),(13,11,1400779853,1400781653,0,'127.0.0.1',1,1400779853,1400779853,'127.0.0.1'),(14,11,1400779856,1400781656,0,'127.0.0.1',1,1400779856,1400779858,'127.0.0.1'),(15,11,1400779859,1400781659,0,'127.0.0.1',1,1400779859,1400781291,'127.0.0.1'),(16,1,1400781320,1400783120,0,'127.0.0.1',1,1400781320,1400781399,'127.0.0.1'),(17,11,1400781406,1400783206,1,'127.0.0.1',1,1400781406,NULL,NULL),(18,1,1400788823,1400790623,0,'127.0.0.1',1,1400788823,1400789757,'127.0.0.1'),(19,11,1400789768,1400791568,0,'127.0.0.1',1,1400789768,1400789849,'127.0.0.1'),(20,1,1400790563,1400792363,0,'127.0.0.1',1,1400790563,1400791240,'127.0.0.1'),(21,11,1400791247,1400793047,0,'127.0.0.1',1,1400791247,1400791269,'127.0.0.1'),(22,1,1400791276,1400793076,0,'127.0.0.1',1,1400791276,1400791296,'127.0.0.1'),(23,11,1400791299,1400793099,0,'127.0.0.1',1,1400791299,1400791316,'127.0.0.1'),(24,1,1400791323,1400793123,0,'127.0.0.1',1,1400791323,1400791360,'127.0.0.1'),(26,1,1400791527,1400793327,0,'127.0.0.1',1,1400791527,1400791689,'127.0.0.1'),(27,11,1400791694,1400793494,0,'127.0.0.1',1,1400791694,1400791734,'127.0.0.1'),(28,1,1400791744,1400793544,0,'127.0.0.1',1,1400791744,1400791758,'127.0.0.1'),(29,11,1400791762,1400793562,0,'127.0.0.1',1,1400791762,1400791816,'127.0.0.1'),(30,1,1400791822,1400793622,0,'127.0.0.1',1,1400791822,1400792527,'127.0.0.1'),(31,11,1400792528,1400794328,0,'127.0.0.1',1,1400792528,1400792531,'127.0.0.1'),(32,1,1400792543,1400794343,0,'127.0.0.1',1,1400792543,1400792563,'127.0.0.1'),(33,11,1400792564,1400794364,0,'127.0.0.1',1,1400792564,1400792747,'127.0.0.1'),(34,1,1400792757,1400794557,0,'127.0.0.1',1,1400792757,1400792929,'127.0.0.1'),(35,11,1400792930,1400794730,0,'127.0.0.1',1,1400792930,1400793153,'127.0.0.1'),(36,1,1400793160,1400794960,0,'127.0.0.1',1,1400793160,1400793177,'127.0.0.1'),(37,11,1400793178,1400794978,0,'127.0.0.1',1,1400793178,1400793213,'127.0.0.1'),(38,1,1400793221,1400795021,0,'127.0.0.1',1,1400793221,1400793316,'127.0.0.1'),(39,1,1400793334,1400795134,0,'127.0.0.1',1,1400793334,1400794170,'127.0.0.1'),(40,1,1400794188,1400795988,0,'127.0.0.1',1,1400794188,1400794237,'127.0.0.1'),(41,11,1400794239,1400796039,0,'127.0.0.1',1,1400794239,1400794268,'127.0.0.1'),(42,1,1400794273,1400796073,1,'127.0.0.1',1,1400794273,NULL,NULL),(43,11,1401115720,1401117520,1,'127.0.0.1',1,1401115720,NULL,NULL),(44,11,1401221953,1401223753,0,'127.0.0.1',2,1401222141,1401222191,'127.0.0.1'),(45,1,1401221995,1401223795,0,'127.0.0.1',1,1401221995,1401222140,'127.0.0.1'),(46,1,1401222196,1401223996,0,'127.0.0.1',1,1401222196,NULL,NULL),(47,11,1401292536,1401294336,0,'127.0.0.1',1,1401292536,NULL,NULL),(48,11,1401295367,1401297167,0,'127.0.0.1',1,1401295367,NULL,NULL),(49,11,1401307867,1401309667,0,'127.0.0.1',1,1401307867,1401307896,'127.0.0.1'),(50,1,1401307902,1401309702,0,'127.0.0.1',1,1401307902,NULL,NULL),(51,11,1401310238,1401312038,1,'127.0.0.1',1,1401310238,NULL,NULL),(52,1,1401310251,1401312051,0,'127.0.0.1',1,1401310251,1401311309,'127.0.0.1'),(53,1,1401311310,1401313110,0,'127.0.0.1',1,1401311310,NULL,NULL),(54,1,1401313447,1401315247,0,'127.0.0.1',1,1401313447,NULL,NULL),(55,1,1401316134,1401317934,1,'127.0.0.1',1,1401316134,NULL,NULL),(56,1,1401375343,1401377143,0,'127.0.0.1',1,1401375343,1401376576,'127.0.0.1'),(57,1,1401376578,1401378378,0,'127.0.0.1',1,1401376578,NULL,NULL),(58,1,1401379051,1401380851,0,'127.0.0.1',1,1401379051,NULL,NULL),(59,1,1401383115,1401384915,0,'127.0.0.1',1,1401383115,NULL,NULL),(60,1,1401393229,1401395029,0,'127.0.0.1',1,1401393229,1401394947,'127.0.0.1'),(61,1,1401394948,1401396748,0,'127.0.0.1',1,1401394948,NULL,NULL),(62,1,1401403076,1401404876,1,'127.0.0.1',1,1401403076,NULL,NULL),(63,1,1401458498,1401460298,0,'127.0.0.1',1,1401458498,NULL,NULL),(64,1,1401460893,1401462693,0,'127.0.0.1',1,1401460893,NULL,NULL),(65,1,1401463775,1401465575,1,'127.0.0.1',1,1401463775,NULL,NULL),(66,1,1401716901,1401718701,0,'127.0.0.1',1,1401716901,NULL,NULL),(67,1,1401718750,1401720550,0,'127.0.0.1',1,1401718750,NULL,NULL),(68,1,1401721812,1401723612,0,'127.0.0.1',1,1401721812,NULL,NULL),(69,1,1401747636,1401749436,0,'127.0.0.1',1,1401747636,NULL,NULL),(70,1,1401750064,1401751864,1,'127.0.0.1',1,1401750064,NULL,NULL),(71,1,1401802659,1401804459,1,'127.0.0.1',1,1401802659,NULL,NULL),(72,1,1401806105,1401807905,0,'127.0.0.1',1,1401806105,NULL,NULL),(73,1,1401808874,1401810674,0,'127.0.0.1',1,1401808874,NULL,NULL),(74,1,1401811354,1401813154,1,'127.0.0.1',1,1401811354,NULL,NULL),(75,1,1401828088,1401829888,1,'127.0.0.1',1,1401828088,NULL,NULL),(76,1,1401888425,1401890225,0,'127.0.0.1',2,1401889493,NULL,NULL),(77,1,1401890491,1401892291,0,'127.0.0.1',3,1401891495,NULL,NULL),(78,1,1401892642,1401894442,1,'127.0.0.1',2,1401892766,NULL,NULL),(79,11,1401892752,1401894552,1,'127.0.0.1',1,1401892752,NULL,NULL),(80,1,1401896518,1401898318,0,'127.0.0.1',2,1401896543,NULL,NULL),(81,1,1401899898,1401901698,0,'127.0.0.1',1,1401899898,1401899905,'127.0.0.1'),(82,1,1401899914,1401901714,1,'127.0.0.1',1,1401899914,NULL,NULL),(83,1,1401902664,1401904464,0,'127.0.0.1',1,1401902664,NULL,NULL),(84,1,1401974844,1401976644,0,'127.0.0.1',1,1401974844,1401974924,'127.0.0.1'),(85,1,1401974958,1401976758,0,'127.0.0.1',1,1401974958,1401974971,'127.0.0.1'),(86,1,1401974976,1401976776,0,'127.0.0.1',1,1401974976,1401974978,'127.0.0.1'),(87,1,1401974980,1401976780,0,'127.0.0.1',1,1401974980,1401974982,'127.0.0.1'),(88,1,1401974988,1401976788,0,'127.0.0.1',2,1401974990,1401974991,'127.0.0.1'),(89,1,1401975014,1401976814,0,'127.0.0.1',1,1401975014,NULL,NULL),(90,1,1401981060,1401982860,1,'127.0.0.1',1,1401981060,NULL,NULL),(91,1,1401983464,1401985264,0,'127.0.0.1',1,1401983464,NULL,NULL),(92,1,1401985613,1401987413,0,'127.0.0.1',1,1401985613,NULL,NULL),(93,1,1401988410,1401990210,0,'127.0.0.1',1,1401988410,NULL,NULL),(94,1,1402004053,1402005853,0,'127.0.0.1',1,1402004053,NULL,NULL),(95,1,1402066262,1402068062,0,'127.0.0.1',2,1402066275,NULL,NULL),(96,1,1402070423,1402072223,0,'127.0.0.1',1,1402070423,NULL,NULL),(97,1,1402413976,1402415776,1,'127.0.0.1',1,1402413976,NULL,NULL),(98,1,1402419465,1402421265,0,'127.0.0.1',1,1402419465,NULL,NULL),(99,1,1402421630,1402423430,1,'127.0.0.1',2,1402421859,NULL,NULL),(100,11,1402421935,1402423735,0,'127.0.0.1',1,1402421935,1402421940,'127.0.0.1'),(101,11,1402421947,1402423747,0,'127.0.0.1',2,1402422687,NULL,NULL),(102,1,1402428791,1402430591,1,'127.0.0.1',3,1402429995,NULL,NULL),(103,11,1402428840,1402430640,0,'127.0.0.1',1,1402428840,1402429336,'127.0.0.1'),(104,11,1402429352,1402431152,0,'127.0.0.1',1,1402429352,1402430381,'127.0.0.1'),(105,1,1402431640,1402433440,0,'127.0.0.1',1,1402431640,NULL,NULL),(106,11,1402432110,1402433910,0,'127.0.0.1',1,1402432110,NULL,NULL),(107,1,1402433553,1402435353,1,'127.0.0.1',1,1402433553,NULL,NULL),(108,11,1402437556,1402439356,0,'127.0.0.1',1,1402437556,1402437559,'127.0.0.1'),(109,11,1402437928,1402439728,0,'127.0.0.1',1,1402437928,1402438607,'127.0.0.1'),(110,11,1402438659,1402440459,0,'127.0.0.1',1,1402438659,1402438667,'127.0.0.1'),(111,11,1402438668,1402440468,0,'127.0.0.1',1,1402438668,1402439422,'127.0.0.1'),(112,11,1402439428,1402441228,0,'127.0.0.1',1,1402439428,1402439468,'127.0.0.1'),(113,1,1402439475,1402441275,1,'127.0.0.1',1,1402439475,NULL,NULL),(114,11,1402493290,1402495090,0,'127.0.0.1',1,1402493290,1402494364,'127.0.0.1'),(115,1,1402494373,1402496173,0,'127.0.0.1',1,1402494373,NULL,NULL),(116,11,1402496238,1402498038,0,'127.0.0.1',1,1402496238,1402497708,'127.0.0.1'),(117,1,1402496418,1402498218,0,'127.0.0.1',3,1402497948,NULL,NULL),(118,1,1402498271,1402500071,0,'127.0.0.1',2,1402498505,1402499047,'127.0.0.1'),(119,11,1402499679,1402501479,0,'127.0.0.1',1,1402499679,NULL,NULL),(120,11,1402501949,1402503749,1,'127.0.0.1',1,1402501949,NULL,NULL),(121,1,1402502645,1402504445,0,'127.0.0.1',1,1402502645,NULL,NULL),(122,1,1402517104,1402518904,0,'127.0.0.1',1,1402517104,1402517131,'127.0.0.1'),(123,1,1402517133,1402518933,0,'127.0.0.1',1,1402517133,NULL,NULL),(124,1,1402520813,1402522613,0,'127.0.0.1',1,1402520813,NULL,NULL),(125,1,1402579253,1402581053,1,'127.0.0.1',2,1402579304,NULL,NULL),(126,1,1402582982,1402584782,1,'127.0.0.1',1,1402582982,NULL,NULL),(127,11,1402586886,1402588686,0,'127.0.0.1',1,1402586886,1402586894,'127.0.0.1'),(128,1,1402586899,1402588699,1,'127.0.0.1',1,1402586899,NULL,NULL),(129,1,1402589537,1402591337,0,'127.0.0.1',1,1402589537,NULL,NULL),(130,1,1402595961,1402597761,1,'127.0.0.1',1,1402595961,NULL,NULL),(131,1,1402605756,1402607556,0,'127.0.0.1',2,1402606882,NULL,NULL),(132,1,1402607661,1402609461,1,'127.0.0.1',1,1402607661,NULL,NULL),(133,1,1402611135,1402612935,1,'127.0.0.1',2,1402611140,NULL,NULL),(134,1,1402614833,1402616633,1,'127.0.0.1',1,1402614833,NULL,NULL),(135,1,1402670165,1402671965,0,'127.0.0.1',1,1402670165,NULL,NULL),(136,1,1402681347,1402683147,1,'127.0.0.1',1,1402681347,NULL,NULL),(137,1,1402959424,1402961224,0,'127.0.0.1',1,1402959424,NULL,NULL),(138,1,1403017477,1403019277,0,'127.0.0.1',1,1403017477,NULL,NULL),(139,1,1403024802,1403026602,0,'127.0.0.1',1,1403024802,NULL,NULL),(140,1,1403045258,1403047058,0,'127.0.0.1',1,1403045258,NULL,NULL),(141,1,1403047621,1403049421,1,'127.0.0.1',1,1403047621,NULL,NULL),(142,1,1403099307,1403101107,0,'127.0.0.1',1,1403099307,NULL,NULL),(143,1,1403102777,1403104577,1,'127.0.0.1',1,1403102777,NULL,NULL),(144,1,1403106837,1403108637,1,'127.0.0.1',1,1403106837,NULL,NULL),(145,1,1403111356,1403113156,1,'127.0.0.1',1,1403111356,NULL,NULL),(146,1,1403113399,1403115199,1,'127.0.0.1',1,1403113399,NULL,NULL),(147,1,1403130088,1403131888,0,'127.0.0.1',1,1403130088,NULL,NULL),(148,1,1403185062,1403186862,0,'127.0.0.1',1,1403185062,NULL,NULL),(149,1,1403187618,1403189418,0,'127.0.0.1',1,1403187618,NULL,NULL),(150,1,1403535736,1403537536,1,'127.0.0.1',1,1403535736,NULL,NULL),(151,1,1403631433,1403633233,1,'127.0.0.1',1,1403631433,NULL,NULL),(152,1,1403791632,1403793432,1,'127.0.0.1',1,1403791632,NULL,NULL),(153,1,1403795184,1403796984,0,'127.0.0.1',1,1403795184,NULL,NULL),(154,1,1403798718,1403800518,1,'127.0.0.1',1,1403798718,NULL,NULL),(155,1,1403814295,1403816095,0,'127.0.0.1',1,1403814295,NULL,NULL),(156,1,1403820231,1403822031,1,'127.0.0.1',1,1403820231,NULL,NULL),(157,1,1403822775,1403824575,0,'127.0.0.1',1,1403822775,NULL,NULL),(158,1,1403876776,1403878576,1,'127.0.0.1',1,1403876776,NULL,NULL),(159,1,1403881134,1403882934,0,'127.0.0.1',3,1403882356,NULL,NULL),(160,1,1403883296,1403885096,1,'127.0.0.1',1,1403883296,NULL,NULL),(161,1,1404136186,1404137986,1,'127.0.0.1',1,1404136186,NULL,NULL),(162,1,1404138219,1404140019,0,'127.0.0.1',1,1404138219,1404138300,'127.0.0.1'),(163,11,1404138308,1404140108,1,'127.0.0.1',1,1404138308,NULL,NULL),(164,11,1404142027,1404143827,0,'127.0.0.1',1,1404142027,NULL,NULL),(165,11,1404144158,1404145958,0,'127.0.0.1',1,1404144158,1404145824,'127.0.0.1'),(166,11,1404145826,1404147626,0,'127.0.0.1',1,1404145826,1404146700,'127.0.0.1'),(167,11,1404146701,1404148501,0,'127.0.0.1',1,1404146701,NULL,NULL),(168,11,1404149217,1404151017,0,'127.0.0.1',1,1404149217,1404150552,'127.0.0.1'),(169,11,1404150556,1404152356,1,'127.0.0.1',1,1404150556,NULL,NULL),(170,11,1404159436,1404161236,0,'127.0.0.1',1,1404159436,1404160826,'127.0.0.1'),(171,11,1404160827,1404162627,1,'127.0.0.1',1,1404160827,NULL,NULL),(172,11,1404164973,1404166773,0,'127.0.0.1',1,1404164973,NULL,NULL),(173,11,1404168354,1404170154,0,'127.0.0.1',1,1404168354,NULL,NULL),(174,11,1404170397,1404172197,1,'127.0.0.1',1,1404170397,NULL,NULL),(175,1,1404230927,1404232727,0,'127.0.0.1',1,1404230927,1404231210,'127.0.0.1'),(176,11,1404231234,1404233034,1,'127.0.0.1',1,1404231234,NULL,NULL),(177,11,1404234557,1404236357,1,'127.0.0.1',1,1404234557,NULL,NULL),(178,1,1404246125,1404247925,0,'127.0.0.1',2,1404246344,NULL,NULL),(179,1,1404247962,1404249762,0,'127.0.0.1',2,1404249345,NULL,NULL),(180,1,1404249830,1404251630,1,'127.0.0.1',2,1404250476,NULL,NULL),(181,1,1404309095,1404310895,0,'127.0.0.1',2,1404309571,NULL,NULL),(182,1,1404311081,1404312881,0,'127.0.0.1',1,1404311081,1404312301,'127.0.0.1'),(183,1,1404312305,1404314105,0,'127.0.0.1',1,1404312305,1404312392,'127.0.0.1'),(184,11,1404312397,1404314197,0,'127.0.0.1',1,1404312397,1404312843,'127.0.0.1'),(185,1,1404312847,1404314647,0,'127.0.0.1',1,1404312847,NULL,NULL),(186,1,1404315348,1404317148,0,'127.0.0.1',2,1404317048,1404317064,'127.0.0.1'),(187,11,1404317067,1404318867,0,'127.0.0.1',1,1404317067,1404317276,'127.0.0.1'),(188,1,1404317279,1404319079,1,'127.0.0.1',1,1404317279,NULL,NULL),(189,1,1404319850,1404321650,0,'127.0.0.1',1,1404319850,NULL,NULL),(190,1,1404321938,1404323738,0,'127.0.0.1',1,1404321938,1404323454,'127.0.0.1'),(191,11,1404323459,1404325259,0,'127.0.0.1',1,1404323459,1404323480,'127.0.0.1'),(192,1,1404323484,1404325284,1,'127.0.0.1',1,1404323484,NULL,NULL),(193,1,1404334794,1404336594,0,'127.0.0.1',1,1404334794,1404335301,'127.0.0.1'),(194,11,1404335308,1404337108,0,'127.0.0.1',1,1404335308,NULL,NULL),(195,1,1404337388,1404339188,0,'127.0.0.1',1,1404337388,NULL,NULL),(196,11,1404339942,1404341742,0,'127.0.0.1',1,1404339942,NULL,NULL),(197,1,1404342110,1404343910,0,'127.0.0.1',1,1404342110,1404342133,'127.0.0.1'),(198,1,1404342134,1404343934,0,'127.0.0.1',1,1404342134,1404342154,'127.0.0.1'),(199,11,1404342163,1404349363,1,'127.0.0.1',1,1404342163,NULL,NULL),(200,11,1404394096,1404401296,0,'127.0.0.1',1,1404394096,NULL,NULL),(201,11,1404401439,1404408639,1,'127.0.0.1',2,1404404752,NULL,NULL),(202,1,1404405484,1404412684,1,'127.0.0.1',1,1404405484,NULL,NULL),(203,1,1404419893,1404427093,0,'127.0.0.1',2,1404426398,NULL,NULL),(204,1,1404427144,1404434344,1,'127.0.0.1',1,1404427144,NULL,NULL),(205,1,1404479817,1404487017,1,'127.0.0.1',1,1404479817,NULL,NULL),(206,11,1404486370,1404493570,1,'127.0.0.1',1,1404486370,NULL,NULL),(207,1,1404740493,1404747693,0,'127.0.0.1',2,1404744576,NULL,NULL),(208,11,1404746164,1404753364,0,'127.0.0.1',2,1404748578,1404751250,'127.0.0.1'),(209,1,1404751259,1404758459,0,'127.0.0.1',1,1404751259,1404751840,'127.0.0.1'),(210,11,1404751850,1404759050,1,'127.0.0.1',1,1404751850,NULL,NULL),(211,1,1404766228,1404773428,0,'127.0.0.1',1,1404766228,1404771797,'127.0.0.1'),(212,11,1404771803,1404779003,1,'127.0.0.1',1,1404771803,NULL,NULL),(213,1,1404826002,1404833202,0,'127.0.0.1',1,1404826002,NULL,NULL),(214,1,1404833561,1404840761,0,'127.0.0.1',1,1404833561,1404833863,'127.0.0.1'),(215,11,1404833871,1404841071,0,'127.0.0.1',1,1404833871,1404833880,'127.0.0.1'),(216,1,1404833881,1404841081,0,'127.0.0.1',1,1404833881,1404833917,'127.0.0.1'),(217,1,1404833919,1404841119,0,'127.0.0.1',1,1404833919,1404833937,'127.0.0.1'),(218,11,1404833944,1404841144,0,'127.0.0.1',1,1404833944,1404834174,'127.0.0.1'),(219,1,1404834175,1404841375,0,'127.0.0.1',1,1404834175,1404834744,'127.0.0.1'),(220,27,1404834751,1404841951,0,'127.0.0.1',1,1404834751,1404834816,'127.0.0.1'),(221,1,1404834817,1404842017,0,'127.0.0.1',1,1404834817,1404834846,'127.0.0.1'),(222,27,1404834853,1404842053,0,'127.0.0.1',1,1404834853,1404834868,'127.0.0.1'),(223,11,1404834877,1404842077,0,'127.0.0.1',1,1404834877,1404834911,'127.0.0.1'),(224,1,1404834912,1404842112,0,'127.0.0.1',1,1404834912,1404834929,'127.0.0.1'),(225,11,1404834938,1404842138,0,'127.0.0.1',1,1404834938,1404835619,'127.0.0.1'),(226,1,1404835621,1404842821,0,'127.0.0.1',1,1404835621,1404835634,'127.0.0.1'),(227,27,1404835642,1404842842,0,'127.0.0.1',1,1404835642,1404835649,'127.0.0.1'),(228,1,1404835650,1404842850,0,'127.0.0.1',1,1404835650,1404835707,'127.0.0.1'),(229,27,1404835715,1404842915,1,'127.0.0.1',1,1404835715,NULL,NULL),(230,1,1404849616,1404856816,0,'127.0.0.1',1,1404849616,1404850116,'127.0.0.1'),(231,11,1404850122,1404857322,0,'127.0.0.1',1,1404850122,1404850130,'127.0.0.1'),(232,27,1404850136,1404857336,1,'127.0.0.1',1,1404850136,NULL,NULL),(233,1,1404852137,1404859337,0,'127.0.0.1',2,1404857979,NULL,NULL),(234,1,1404859492,1404866692,1,'127.0.0.1',1,1404859492,NULL,NULL),(235,1,1404916681,1404923881,1,'127.0.0.1',2,1404923608,NULL,NULL),(236,1,1404928060,1404935260,1,'127.0.0.1',1,1404928060,NULL,NULL),(237,1,1404935680,1404942880,0,'127.0.0.1',1,1404935680,NULL,NULL),(238,1,1404943685,1404950885,1,'127.0.0.1',1,1404943685,NULL,NULL),(239,1,1404998953,1405006153,0,'127.0.0.1',1,1404998953,1404998975,'127.0.0.1'),(240,1,1404999473,1405006673,1,'127.0.0.1',2,1405003428,NULL,NULL),(241,1,1405007942,1405015142,0,'127.0.0.1',1,1405007942,1405010736,'127.0.0.1'),(242,1,1405012709,1405019909,1,'127.0.0.1',1,1405012709,NULL,NULL),(243,1,1405025320,1405032520,1,'127.0.0.1',1,1405025320,NULL,NULL),(244,1,1405089666,1405096866,1,'127.0.0.1',1,1405089666,NULL,NULL),(245,1,1405099913,1405107113,1,'127.0.0.1',1,1405099913,NULL,NULL),(246,1,1405360482,1405367682,1,'127.0.0.1',1,1405360482,NULL,NULL),(247,1,1405369716,1405376916,0,'127.0.0.1',2,1405374298,1405374617,'127.0.0.1'),(248,11,1405374624,1405381824,0,'127.0.0.1',1,1405374624,1405374656,'127.0.0.1'),(249,1,1405374680,1405381880,0,'127.0.0.1',1,1405374680,1405374790,'127.0.0.1'),(250,11,1405374799,1405381999,0,'127.0.0.1',1,1405374799,1405374809,'127.0.0.1'),(251,1,1405374810,1405382010,0,'127.0.0.1',1,1405374810,1405375483,'127.0.0.1'),(252,11,1405375489,1405382689,0,'127.0.0.1',1,1405375489,1405375631,'127.0.0.1'),(253,1,1405375633,1405382833,0,'127.0.0.1',1,1405375633,1405375648,'127.0.0.1'),(254,1,1405375649,1405382849,0,'127.0.0.1',1,1405375649,1405375675,'127.0.0.1'),(255,27,1405375681,1405382881,0,'127.0.0.1',1,1405375681,1405376380,'127.0.0.1'),(256,1,1405376382,1405383582,0,'127.0.0.1',1,1405376382,1405376510,'127.0.0.1'),(257,27,1405376516,1405383716,0,'127.0.0.1',1,1405376516,1405376611,'127.0.0.1'),(258,1,1405376612,1405383812,0,'127.0.0.1',1,1405376612,1405376629,'127.0.0.1'),(259,27,1405376637,1405383837,0,'127.0.0.1',1,1405376637,1405377899,'127.0.0.1'),(260,1,1405377901,1405385101,1,'127.0.0.1',1,1405377901,NULL,NULL),(261,1,1405433016,1405440216,0,'127.0.0.1',2,1405440195,NULL,NULL),(262,1,1405441416,1405448616,1,'127.0.0.1',1,1405441416,NULL,NULL),(263,1,1405455653,1405462853,0,'127.0.0.1',1,1405455653,1405458954,'127.0.0.1'),(264,11,1405458961,1405466161,0,'127.0.0.1',1,1405458961,1405459005,'127.0.0.1'),(265,1,1405459006,1405466206,0,'127.0.0.1',1,1405459006,1405459054,'127.0.0.1'),(266,11,1405459060,1405466260,0,'127.0.0.1',1,1405459060,1405463798,'127.0.0.1'),(267,27,1405463803,1405471003,1,'127.0.0.1',1,1405463803,NULL,NULL),(268,1,1405522302,1405529502,0,'127.0.0.1',1,1405522302,NULL,NULL),(269,1,1405529707,1405536907,1,'127.0.0.1',1,1405529707,NULL,NULL),(270,1,1405623667,1405630867,1,'127.0.0.1',2,1405626345,NULL,NULL),(271,1,1405633157,1405640357,1,'127.0.0.1',1,1405633157,NULL,NULL),(272,1,1405700911,1405708111,1,'127.0.0.1',2,1405705217,NULL,NULL),(273,1,1405952810,1405960010,1,'127.0.0.1',2,1405957371,NULL,NULL),(274,1,1406036052,1406043252,0,'127.0.0.1',1,1406036052,1406037906,'127.0.0.1'),(275,11,1406037913,1406045113,0,'127.0.0.1',1,1406037913,1406037946,'127.0.0.1'),(276,1,1406037948,1406045148,1,'127.0.0.1',1,1406037948,NULL,NULL),(277,1,1406048161,1406055361,1,'127.0.0.1',1,1406048161,NULL,NULL),(278,1,1406060396,1406067596,0,'127.0.0.1',2,1406067088,NULL,NULL),(279,1,1406067643,1406074843,1,'127.0.0.1',1,1406067643,NULL,NULL),(280,1,1406123496,1406130696,0,'127.0.0.1',1,1406123496,NULL,NULL),(281,1,1406131441,1406138641,1,'127.0.0.1',1,1406131441,NULL,NULL),(282,1,1406233645,1406240845,0,'127.0.0.1',1,1406233645,NULL,NULL),(283,1,1406240968,1406248168,1,'127.0.0.1',1,1406240968,NULL,NULL),(284,1,1406296563,1406303763,0,'127.0.0.1',2,1406302708,NULL,NULL),(285,1,1406304696,1406311896,0,'127.0.0.1',2,1406308366,1406309345,'127.0.0.1'),(286,1,1406309689,1406316889,1,'127.0.0.1',1,1406309689,NULL,NULL),(287,1,1406555751,1406562951,0,'127.0.0.1',2,1406560169,NULL,NULL),(288,1,1406562958,1406570158,1,'127.0.0.1',3,1406568740,NULL,NULL),(289,1,1406576701,1406583901,1,'127.0.0.1',1,1406576701,NULL,NULL),(290,1,1406640411,1406647611,1,'127.0.0.1',1,1406640411,NULL,NULL),(291,1,1406653875,1406661075,1,'127.0.0.1',1,1406653875,NULL,NULL),(292,1,1406664506,1406671706,0,'127.0.0.1',2,1406666545,1406667608,'127.0.0.1'),(293,11,1406667620,1406674820,0,'127.0.0.1',1,1406667620,1406667628,'127.0.0.1'),(294,1,1406667629,1406674829,0,'127.0.0.1',1,1406667629,1406667654,'127.0.0.1'),(295,1,1406668545,1406675745,0,'127.0.0.1',1,1406668545,1406668552,'127.0.0.1'),(296,11,1406668557,1406675757,0,'127.0.0.1',1,1406668557,1406669111,'127.0.0.1'),(297,1,1406669112,1406676312,1,'127.0.0.1',2,1406673576,NULL,NULL),(298,1,1406760914,1406768114,1,'127.0.0.1',1,1406760914,NULL,NULL),(299,1,1406822972,1406830172,1,'127.0.0.1',1,1406822972,NULL,NULL),(300,1,1406903222,1406910422,1,'127.0.0.1',1,1406903222,NULL,NULL),(301,1,1407162646,1407169846,1,'127.0.0.1',2,1407167262,NULL,NULL),(302,1,1407173776,1407180976,1,'127.0.0.1',1,1407173776,NULL,NULL),(303,1,1407254627,1407261827,1,'172.16.2.205',4,1407260509,NULL,NULL),(304,28,1407254816,1407262016,1,'172.16.3.58',2,1407254923,NULL,NULL),(305,1,1407273825,1407281025,1,'127.0.0.1',1,1407273825,NULL,NULL),(306,1,1407342408,1407349608,1,'127.0.0.1',3,1407343165,NULL,NULL),(307,1,1407362686,1407369886,0,'127.0.0.1',1,1407362686,1407362691,'127.0.0.1'),(308,11,1407362697,1407369897,0,'127.0.0.1',1,1407362697,1407362800,'127.0.0.1'),(309,1,1407362801,1407370001,0,'127.0.0.1',1,1407362801,1407363150,'127.0.0.1'),(310,1,1407363168,1407370368,1,'127.0.0.1',1,1407363168,NULL,NULL),(311,1,1407428673,1407435873,1,'127.0.0.1',1,1407428673,NULL,NULL),(312,1,1407446310,1407453510,1,'127.0.0.1',2,1407452299,NULL,NULL),(313,1,1407505894,1407513094,1,'127.0.0.1',1,1407505894,NULL,NULL),(314,1,1407765681,1407772881,1,'127.0.0.1',1,1407765681,NULL,NULL),(315,1,1408549868,1408557068,0,'192.168.1.2',1,1408549868,NULL,NULL),(316,1,1408557290,1408564490,1,'192.168.1.2',1,1408557290,NULL,NULL),(317,1,1409171244,1409178444,1,'192.168.1.2',2,1409171651,NULL,NULL),(318,1,1409178967,1409186167,1,'192.168.1.2',1,1409178967,NULL,NULL),(319,1,1409264192,1409271392,1,'192.168.1.2',1,1409264192,NULL,NULL),(320,1,1409606970,1409614170,1,'192.168.1.2',1,1409606970,NULL,NULL),(321,1,1409664387,1409671587,0,'192.168.1.2',1,1409664387,NULL,NULL),(322,1,1409672113,1409679313,1,'192.168.1.2',2,1409676422,NULL,NULL),(323,1,1409699257,1409706457,1,'192.168.1.2',1,1409699257,NULL,NULL),(324,1,1409772559,1409779759,1,'192.168.1.2',1,1409772559,NULL,NULL),(325,1,1409868912,1409876112,1,'192.168.1.2',1,1409868912,NULL,NULL),(326,1,1410183299,1410190499,0,'192.168.1.2',2,1410189904,NULL,NULL),(327,1,1410191899,1410199099,1,'192.168.1.2',2,1410196359,NULL,NULL),(328,1,1410209911,1410217111,0,'192.168.1.2',1,1410209911,1410209939,'192.168.1.2'),(329,29,1410209945,1410217145,0,'192.168.1.2',1,1410209945,1410213316,'192.168.1.2'),(330,1,1410213318,1410220518,0,'192.168.1.2',1,1410213318,1410213561,'192.168.1.2'),(331,29,1410213569,1410220769,0,'192.168.1.2',2,1410214808,1410214811,'192.168.1.2'),(332,1,1410214813,1410222013,1,'192.168.1.2',1,1410214813,NULL,NULL),(333,1,1410358301,1410365501,1,'192.168.1.2',1,1410358301,NULL,NULL),(334,1,1410446007,1410453207,1,'192.168.1.2',2,1410450580,NULL,NULL),(335,1,1410533832,1410541032,0,'192.168.1.2',1,1410533832,1410533856,'192.168.1.2'),(336,11,1410533862,1410541062,0,'192.168.1.2',1,1410533862,1410534018,'192.168.1.2'),(337,1,1410534019,1410541219,0,'192.168.1.2',1,1410534019,1410534164,'192.168.1.2'),(338,11,1410534169,1410541369,0,'192.168.1.2',1,1410534169,1410534451,'192.168.1.2'),(339,1,1410534452,1410541652,0,'192.168.1.2',1,1410534452,1410534872,'192.168.1.2'),(340,11,1410534878,1410542078,0,'192.168.1.2',2,1410538823,1410538828,'192.168.1.2'),(341,1,1410538829,1410546029,0,'192.168.1.2',1,1410538829,1410538869,'192.168.1.2'),(342,11,1410538874,1410546074,0,'192.168.1.2',1,1410538874,1410539022,'192.168.1.2'),(343,1,1410539023,1410546223,0,'192.168.1.2',1,1410539023,1410539114,'192.168.1.2'),(344,11,1410539119,1410546319,0,'192.168.1.2',1,1410539119,1410539137,'192.168.1.2'),(345,29,1410539142,1410546342,0,'192.168.1.2',1,1410539142,1410539162,'192.168.1.2'),(346,1,1410539166,1410546366,0,'192.168.1.2',1,1410539166,1410539195,'192.168.1.2'),(347,29,1410539199,1410546399,0,'192.168.1.2',1,1410539199,1410539208,'192.168.1.2'),(348,1,1410539210,1410546410,0,'192.168.1.2',1,1410539210,1410539233,'192.168.1.2'),(349,29,1410539237,1410546437,0,'192.168.1.2',1,1410539237,1410539288,'192.168.1.2'),(350,29,1410539310,1410546510,0,'192.168.1.2',1,1410539310,1410540805,'192.168.1.2'),(351,11,1410539318,1410546518,0,'192.168.1.2',1,1410539318,1410540959,'192.168.1.2'),(352,1,1410540812,1410548012,0,'192.168.1.2',1,1410540812,1410540853,'192.168.1.2'),(353,29,1410540859,1410548059,1,'192.168.1.2',2,1410541228,NULL,NULL),(354,30,1410540859,1410548059,1,'192.168.1.2',1,1410540859,NULL,NULL),(355,1,1410540960,1410548160,0,'192.168.1.2',1,1410540960,1410542771,'192.168.1.2'),(356,11,1410542776,1410549976,0,'192.168.1.2',1,1410542776,1410543642,'192.168.1.2'),(357,1,1410543643,1410550843,1,'192.168.1.2',1,1410543643,NULL,NULL),(358,1,1410960670,1410961570,0,'192.168.1.2',1,1410960670,NULL,NULL),(359,1,1410961754,1410962654,1,'192.168.1.2',1,1410961754,NULL,NULL),(360,1,1410967926,1410968826,0,'192.168.1.2',1,1410967926,NULL,NULL),(361,1,1410968852,1410969752,0,'192.168.1.2',1,1410968852,1410968870,'192.168.1.2'),(362,29,1410968877,1410969777,0,'192.168.1.2',1,1410968877,NULL,NULL),(363,29,1410969870,1410970770,0,'192.168.1.2',1,1410969870,NULL,NULL),(364,29,1410973855,1410974755,1,'192.168.1.2',1,1410973855,NULL,NULL),(365,29,1410976181,1410977081,1,'192.168.1.2',1,1410976181,NULL,NULL),(366,1,1410993250,1410994150,0,'192.168.1.2',1,1410993250,NULL,NULL),(367,30,1410993461,1410994361,1,'192.168.1.2',1,1410993461,NULL,NULL),(368,1,1410994186,1410995086,0,'192.168.1.2',1,1410994186,NULL,NULL),(369,1,1410995841,1410996741,1,'192.168.1.2',1,1410995841,NULL,NULL),(370,1,1411048582,1411049482,0,'192.168.1.2',1,1411048582,1411049364,'192.168.1.2'),(371,30,1411048903,1411049803,1,'192.168.1.2',2,1411049651,NULL,NULL),(372,1,1411049571,1411050471,1,'192.168.1.2',1,1411049571,NULL,NULL),(373,30,1411051904,1411052804,1,'192.168.1.2',1,1411051904,NULL,NULL),(374,30,1411053290,1411054190,1,'192.168.1.2',1,1411053290,NULL,NULL),(375,1,1411057148,1411058048,1,'192.168.1.2',1,1411057148,NULL,NULL),(376,30,1411080124,1411081024,1,'192.168.1.2',1,1411080124,NULL,NULL),(377,1,1411080455,1411081355,1,'192.168.1.2',1,1411080455,NULL,NULL),(378,1,1411134817,1411135717,1,'192.168.1.2',1,1411134817,NULL,NULL),(379,1,1411137911,1411138811,1,'192.168.1.2',1,1411137911,NULL,NULL),(380,30,1411149736,1411150636,1,'192.168.1.2',1,1411149736,NULL,NULL),(381,1,1411418094,1411418994,1,'192.168.1.2',1,1411418094,NULL,NULL),(382,1,1411420859,1411421759,0,'192.168.1.2',1,1411420859,1411420869,'192.168.1.2'),(383,29,1411420874,1411421774,0,'192.168.1.2',1,1411420874,1411420886,'192.168.1.2'),(384,30,1411422105,1411423005,1,'192.168.1.2',1,1411422105,NULL,NULL),(385,1,1411423639,1411424539,1,'192.168.1.2',3,1411424158,NULL,NULL),(386,1,1411425989,1411426889,1,'192.168.1.2',1,1411425989,NULL,NULL),(387,30,1411479820,1411480720,0,'192.168.1.2',1,1411479820,NULL,NULL),(388,1,1411480755,1411481655,0,'192.168.1.2',1,1411480755,1411480794,'192.168.1.2'),(389,29,1411480800,1411481700,0,'192.168.1.2',1,1411480800,1411481097,'192.168.1.2'),(390,1,1411481098,1411481998,0,'192.168.1.2',1,1411481098,1411481152,'192.168.1.2'),(391,29,1411481164,1411482064,0,'192.168.1.2',1,1411481164,1411481207,'192.168.1.2'),(392,29,1411481214,1411482114,0,'192.168.1.2',1,1411481214,1411481218,'192.168.1.2'),(393,1,1411481219,1411482119,0,'192.168.1.2',1,1411481219,NULL,NULL),(394,30,1411481561,1411482461,0,'192.168.1.2',1,1411481561,NULL,NULL),(395,29,1411482417,1411483317,0,'192.168.1.2',1,1411482417,NULL,NULL),(396,30,1411482745,1411483645,0,'192.168.1.2',1,1411482745,NULL,NULL),(397,30,1411484103,1411485003,0,'192.168.1.2',2,1411484353,NULL,NULL),(398,1,1411484165,1411485065,0,'192.168.1.2',1,1411484165,NULL,NULL),(399,30,1411485054,1411485954,0,'192.168.1.2',2,1411485401,NULL,NULL),(400,1,1411485127,1411486027,0,'192.168.1.2',1,1411485127,NULL,NULL),(401,30,1411486116,1411487016,0,'192.168.1.2',2,1411486831,NULL,NULL),(402,1,1411486120,1411487020,0,'192.168.1.2',1,1411486120,NULL,NULL),(403,1,1411487044,1411490044,1,'192.168.1.2',2,1411488490,NULL,NULL),(404,1,1411509676,1411512676,1,'192.168.1.2',1,1411509676,NULL,NULL),(405,1,1411576443,1411579443,1,'192.168.1.2',1,1411576443,NULL,NULL),(406,1,1411579579,1411582579,1,'192.168.1.2',1,1411579579,NULL,NULL),(407,30,1411590386,1411593386,1,'192.168.1.2',1,1411590386,NULL,NULL),(408,30,1411598364,1411601364,0,'192.168.1.2',1,1411598364,1411598686,'192.168.1.2'),(409,1,1411598639,1411601639,1,'192.168.1.2',2,1411598709,NULL,NULL),(410,1,1411653776,1411656776,0,'192.168.1.2',1,1411653776,1411653859,'192.168.1.2'),(411,1,1411654458,1411657458,1,'192.168.1.2',1,1411654458,NULL,NULL),(412,1,1411683369,1411686369,1,'192.168.1.2',2,1411683717,NULL,NULL),(413,1,1411750284,1411753284,1,'192.168.1.2',1,1411750284,NULL,NULL),(414,1,1412001775,1412004775,1,'192.168.1.2',1,1412001775,NULL,NULL),(415,1,1412264056,1412267056,0,'192.168.1.2',2,1412264443,1412264490,'192.168.1.2'),(416,1,1412264493,1412267493,0,'192.168.1.2',1,1412264493,1412264879,'192.168.1.2'),(417,31,1412264498,1412267498,0,'192.168.1.2',1,1412264498,1412264837,'192.168.1.2'),(418,31,1412264870,1412267870,1,'192.168.1.2',2,1412265178,NULL,NULL),(419,1,1412265170,1412268170,0,'192.168.1.2',1,1412265170,NULL,NULL),(420,30,1412265548,1412268548,0,'192.168.1.2',1,1412265548,1412268216,'192.168.1.2'),(421,1,1412268181,1412271181,0,'192.168.1.2',1,1412268181,1412268181,'192.168.1.2'),(422,1,1412268183,1412271183,1,'192.168.1.2',2,1412269923,NULL,NULL),(423,30,1412268247,1412271247,1,'192.168.1.2',1,1412268247,NULL,NULL),(424,28,1412268316,1412271316,0,'192.168.1.2',1,1412268316,1412270325,'192.168.1.2'),(425,31,1412268493,1412271493,0,'192.168.1.2',2,1412269541,1412270156,'192.168.1.2'),(426,31,1412270166,1412273166,0,'192.168.1.2',1,1412270166,1412271035,'192.168.1.2'),(427,28,1412270368,1412273368,1,'192.168.1.2',1,1412270368,NULL,NULL),(428,30,1412281226,1412284226,0,'192.168.1.2',1,1412281226,1412282358,'192.168.1.2'),(429,1,1412285000,1412288000,0,'192.168.1.2',1,1412285000,1412285020,'192.168.1.2'),(430,29,1412285027,1412288027,0,'192.168.1.2',1,1412285027,1412285052,'192.168.1.2'),(431,1,1412285053,1412288053,0,'192.168.1.2',1,1412285053,1412287597,'192.168.1.2'),(432,1,1412287599,1412290599,1,'192.168.1.2',1,1412287599,NULL,NULL),(433,1,1412342924,1412345924,1,'192.168.1.2',1,1412342924,NULL,NULL),(434,1,1412357903,1412360903,1,'192.168.1.2',1,1412357903,NULL,NULL),(435,1,1412610717,1412613717,1,'192.168.1.2',1,1412610717,NULL,NULL),(436,1,1412628394,1412631394,1,'192.168.1.2',1,1412628394,NULL,NULL),(437,1,1412787259,1412790259,1,'192.168.1.2',1,1412787259,NULL,NULL),(438,1,1412865612,1412868612,1,'192.168.1.2',1,1412865612,NULL,NULL),(439,1,1413836197,1413839197,0,'192.168.1.2',1,1413836197,1413838827,'192.168.1.2'),(440,1,1413838829,1413841829,0,'192.168.1.2',1,1413838829,1413839942,'192.168.1.2'),(441,11,1413839947,1413842947,0,'192.168.1.2',1,1413839947,1413839976,'192.168.1.2'),(442,1,1413839977,1413842977,0,'192.168.1.2',1,1413839977,1413840026,'192.168.1.2'),(443,11,1413840032,1413843032,0,'192.168.1.2',1,1413840032,1413840114,'192.168.1.2'),(444,29,1413840120,1413843120,0,'192.168.1.2',1,1413840120,1413840404,'192.168.1.2'),(445,1,1413840405,1413843405,1,'192.168.1.2',1,1413840405,NULL,NULL);
/*!40000 ALTER TABLE `cruge_session` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-10-20 16:39:43
