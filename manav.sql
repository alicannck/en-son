-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: manav
-- ------------------------------------------------------
-- Server version	8.0.33

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `count` int DEFAULT NULL,
  `price` double DEFAULT NULL,
  `description` text,
  `image_url` varchar(205) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Elma',5,5,'sdfdsfsdfsdfsdf','img\\products\\1.jpg'),(2,'Muz',5,4,'dsfsdfsdfsdf','img\\products\\2.jpg'),(3,'Karpuz',5,8,'sdfsdfsdfsd','img\\products\\3a.jpg'),(4,'Portakal',5,9,'sdfsdfsdfsdf','img\\products\\4a.jpg'),(5,'Ananas',5,5,'sdfdsfsdfsdfsdf','img\\products\\5.jpg'),(6,'Çilek',5,4,'dsfsdfsdfsdf','img\\products\\6.jpg'),(7,'Üzüm',5,8,'sdfsdfsdfsd','img\\products\\7.jpg'),(8,'Domates',5,9,'sdfsdfsdfsdf','img\\products\\8.jpg'),(9,'Havuç',5,5,'sdfdsfsdfsdfsdf','img\\products\\9.jpg'),(10,'Limon',5,4,'dsfsdfsdfsdf','img\\products\\10.jpg'),(11,'Biber',5,8,'sdfsdfsdfsd','img\\products\\11a.jpg'),(12,'Kabak',5,9,'sdfsdfsdfsdf','img\\products\\12.jpg'),(13,'Pırasa',5,5,'sdfdsfsdfsdfsdf','img\\products\\13.jpg'),(14,'Lahana',5,4,'dsfsdfsdfsdf','img\\products\\14.jpg');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `hashed_password` varchar(255) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `phone_number` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'asdasdas@gmail.com','$2y$10$Zl8U2U6JiPrYLx38hEMHcuyuqcWpv4k2.X2/kstH/iDzIiQda5sDm',NULL,NULL),(2,'asdasdas@gmail.com','$2y$10$LaGEHwjzi96F/YKpLg82ruXHv97PkaCjJjBwnDcMCAjE22j9ODGHq',NULL,NULL),(3,'admin@gmail.com','$2y$10$sYu2jRXmK90eUJrFROV2EuuFjZ9UuC47Oh4A6RXK/OxeGn2Tkioe6',NULL,NULL),(4,'admin@gmail.com','$2y$10$5JFRKHBlyBcK634Yr9g0/eNeogeh0vxLNPSGJVJdWryQlnX1Z83Fi',NULL,NULL),(5,'admin@gmail.com','$2y$10$hJhfjgEM63Dh1zd07jAVIOdLvURLwx7kb3HL7LMuJRXgkQYwy71Oi',NULL,NULL),(6,'','$2y$10$a08n60Ur3NMrbD35hOhFue5kqIL1q7Qo3YEG7lVvAKv5hJ5Oj4mcG',NULL,NULL),(7,'admin','$2y$10$s.2Qcbei8W3wFVm2PHmIO.3Tjzja9rm7B/dY7V/eTXmpzQ7RWS8HG',NULL,NULL),(8,'admin','$2y$10$AYeTGU6EgmPqNr.lE1Abi./S5rC4y/UtkV1UnWqh.oBjazRS5kyuG','admin',NULL),(9,'admin@gmail.com','$2y$10$coVShJTXdPzzitDwbceS1ucfADlQCVTEY0pmQ9pG5JR.VTebRINXi',NULL,NULL),(10,'microrachel64@gmail.com','$2y$10$FnNdHlbbqZ1ifndN2URXoeeUxpWy62zvnUavFeqXCEjm4YdkTUz0G','',NULL),(11,'microrachel64@gmail.com','$2y$10$nWHNRYqoL0EbEawLWgQSxOMFyCrzH.LcAtiJr.JC.X/RMIYSrISua','admin1','+90357456951');
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

-- Dump completed on 2023-11-15 22:12:05
