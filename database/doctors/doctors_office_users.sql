CREATE DATABASE  IF NOT EXISTS `doctors_office` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `doctors_office`;
-- MySQL dump 10.13  Distrib 5.6.17, for osx10.6 (i386)
--
-- Host: 127.0.0.1    Database: doctors_office
-- ------------------------------------------------------
-- Server version	5.6.21

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'fernando','ballesteros','fernando@hotmail.com','PAS',1,'2015-08-05 00:00:00','2015-08-05 00:00:00'),(2,'samai','vazquez','samai.vazquez@hotmail.com','PAS',1,'2015-08-05 00:00:00','2015-08-05 00:00:00'),(3,'susana','gamiz','susana.gamiz@hotmail.com','PAS',1,'2015-08-05 00:00:00','2015-08-05 00:00:00'),(4,'claudia','silva','claudia.silva@hotmail.com','PAS',1,'2015-08-05 00:00:00','2015-08-05 00:00:00'),(5,'horacio','villalobos','horasitu@hotmail.com','PAS',1,'2015-08-05 00:00:00','2015-08-05 00:00:00'),(6,'pilar','voliver','pilar.voliver@hotmail.com','PAS',1,'2015-08-05 00:00:00','2015-08-05 00:00:00'),(7,'luis','ovando esquivel','luis.ovando@hotmail.com','PAS',1,'2015-08-05 00:00:00','2015-08-05 00:00:00'),(8,'graciela','vazquez','gabriela.vazquez@hotmail.com','PAS',1,'2015-08-05 00:00:00','2015-08-05 00:00:00'),(9,'yadira','sanchez ventura','ysanchez.1187@gmail.com','PAS',1,'2015-07-07 17:53:42','2015-07-07 17:53:42'),(10,'alter','sanchez ventura','ysanchez.1187@gmail.com','PAS',1,'2015-07-07 17:53:42','2015-07-07 17:53:42'),(11,'Morzan','Gutierres','gerardo@indextijuana.org.mx','PAS',1,'2015-08-06 08:00:50','2015-08-06 08:00:50'),(12,'Morzan','Gutierres','gerardo@indextijuana.org.mx','PAS',1,'2015-08-06 08:01:54','2015-08-06 08:01:54'),(13,'Fernando','Ballesteros Arreguin','fernando.ballesteros@mariabonita.com','PAS',1,'2015-08-06 08:02:18','2015-08-06 08:02:18'),(14,'yadira','sanchez ventura','ysanchez.1187@gmail.com','PAS',1,'2015-08-06 08:04:49','2015-08-06 08:04:49'),(15,'Sonia','vazquez Gonzales','test@morzan.com','PAS',1,'2015-08-06 08:18:13','2015-08-06 08:18:13'),(16,'Sonia','vazquez Gonzales','test@morzan.com','PAS',1,'2015-08-06 08:18:30','2015-08-06 08:18:30'),(17,'Sonia','vazquez vazuez','test@morzan.com','PAS',1,'2015-08-06 08:18:48','2015-08-06 08:18:48'),(18,'Yadira ','SÃ¡nchez Ventura','yaa.sanchez@morzan.com','PAS',1,'2015-08-06 14:07:11','2015-08-06 14:07:11'),(19,'Yadira ','SÃ¡nchez Ventura','yadira.test@morzan.com','PAS',1,'2015-08-06 15:57:35','2015-08-06 15:57:35');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-06 16:03:41
