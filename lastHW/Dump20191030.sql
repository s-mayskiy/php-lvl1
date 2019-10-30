CREATE DATABASE  IF NOT EXISTS `php_lvl1` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `php_lvl1`;
-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: php_lvl1
-- ------------------------------------------------------
-- Server version	5.6.43-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `feedback` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `text` varchar(500) DEFAULT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Author` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idfeedback_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` VALUES (1,'Мы на Луне!','John','Анатолий'),(2,'Мама мыла раму','John','Вася'),(3,'Делаю полседнее ДЗ','Анатолий','John'),(4,'Выпал первый снег','Вася','John'),(5,'Погода, конечно, мерзкая','Анатолий','Вася'),(6,'Пошёл готовить ужин','John','Анатолий');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `images` (
  `idimages` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `imageFile` varchar(500) NOT NULL,
  `popularity` int(10) unsigned zerofill NOT NULL,
  PRIMARY KEY (`idimages`),
  UNIQUE KEY `idimages_UNIQUE` (`idimages`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'chicken-4474176_640.jpg',0000000001),(2,'dog-4504013_640.jpg',0000000011),(3,'road-4450611_640.jpg',0000000003),(4,'zebra-283869_640.jpg',0000000023),(5,'yet-another-flower-1399208-640x425.jpg',0000000012),(6,'ladybird-1367182-640x480.jpg',0000000054),(7,'effi-1-1366221-639x479.jpg',0000000112),(8,'volcanic-mt-ngauruhoe-1378772-640x480.jpg',0000000003),(9,'horse-1393073-639x426.jpg',0000000021),(10,'cat-1364386-640x480.jpg',0000000008);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `idUsers` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userLogin` varchar(45) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `pass` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idUsers`),
  UNIQUE KEY `idUsers_UNIQUE` (`idUsers`),
  UNIQUE KEY `Name_UNIQUE` (`userLogin`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Вася','vasya@maill.com','$2y$12$m8KET.9wOoIiInLQb5xL0umlm0eN4u3ivBsMDvbhiaDBFBDyP/1T.'),(2,'Анатолий','tolya@mail.com','$2y$12$xovNKoa/8LKXTxp61HM7XeLqoNxKW9TWrGUeD3Tox7YIHHpd6sV3i'),(3,'John','john@mai.com','$2y$12$eKKTyN9izgIzgi88Rg9/KuUOHFR6wcJKBAob5I6lN2FhlQL4CdE7q');
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

-- Dump completed on 2019-10-30 20:27:00
