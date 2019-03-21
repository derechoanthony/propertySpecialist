-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: realstate
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

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
-- Table structure for table `lot_properties`
--

DROP TABLE IF EXISTS `lot_properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lot_properties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lot_lotArea` bigint(20) NOT NULL,
  `lot_clasification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lot_subdivisionname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lot_blckunitnumber` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lot_properties`
--

LOCK TABLES `lot_properties` WRITE;
/*!40000 ALTER TABLE `lot_properties` DISABLE KEYS */;
/*!40000 ALTER TABLE `lot_properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (5,'2014_10_12_000000_create_users_table',1),(6,'2014_10_12_100000_create_password_resets_table',1),(7,'2018_07_10_150600_create_property_tables_table',1),(8,'2018_07_10_154157_create_lot_properties_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `properties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slct_offerType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slct_propertyType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slct_propertySubTypeHouse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slct_propertySubTypeLot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slct_propertySubTypeCommercial` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_orig_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txt_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txtArea_description` longtext COLLATE utf8mb4_unicode_ci,
  `txt_bedrooms` int(11) NOT NULL DEFAULT '0',
  `txt_bathrooms` int(11) NOT NULL DEFAULT '0',
  `txt_totalrooms` int(11) NOT NULL DEFAULT '0',
  `txt_flrarea` int(11) NOT NULL DEFAULT '0',
  `txt_carspace` int(11) NOT NULL DEFAULT '0',
  `slct_yearbuilt` int(11) NOT NULL DEFAULT '0',
  `slct_clasification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slct_fullyfurnished` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txt_lotarea` int(11) NOT NULL DEFAULT '0',
  `txt_subdivisionname` longtext COLLATE utf8mb4_unicode_ci,
  `txt_blckunitnumber` int(11) NOT NULL DEFAULT '0',
  `txt_com_bedrooms` int(11) NOT NULL DEFAULT '0',
  `txt_com_bathrooms` int(11) NOT NULL DEFAULT '0',
  `txt_com_totalrooms` int(11) NOT NULL DEFAULT '0',
  `txt_com_flrarea` int(11) NOT NULL DEFAULT '0',
  `txt_com_flrtotal` int(11) NOT NULL DEFAULT '0',
  `txt_com_carspace` int(11) NOT NULL DEFAULT '0',
  `slct_com_yearbuilt` int(11) NOT NULL DEFAULT '0',
  `slct_com_clasification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slct_com_fullyfurnished` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txt_com_lotarea` int(11) NOT NULL DEFAULT '0',
  `txt_com_subdivisionname` longtext COLLATE utf8mb4_unicode_ci,
  `txt_com_blckunitnumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txt_lot_lotArea` int(11) NOT NULL DEFAULT '0',
  `slct_lot_clasification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txt_lot_subdivisionname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txt_lot_blckunitnumber` int(11) NOT NULL DEFAULT '0',
  `txt_price` decimal(12,2) NOT NULL DEFAULT '0.00',
  `txt_objectid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txt_youtubeurl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txt_province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txt_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txt_brngy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txt_address` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `properties`
--

LOCK TABLES `properties` WRITE;
/*!40000 ALTER TABLE `properties` DISABLE KEYS */;
INSERT INTO `properties` VALUES (1,'sell','lot',NULL,'agriculture',NULL,'SZwmsgU3iLhh50QJg45B7eoCnqKXbSdfq0SaUBNH','test','test',0,0,0,0,0,2018,NULL,NULL,0,NULL,0,0,0,0,0,0,0,2018,NULL,NULL,0,NULL,NULL,1,'pre-selling','1',1,100000.00,'1','e93OU5R1lohxt8vSwg1m0lgybEaDKBTcGF04V7wk.jpeg',NULL,'danao','cebu',NULL,NULL,'2018-07-29 05:57:55','2018-07-29 05:57:55'),(2,'rent','lot',NULL,'commercial',NULL,'SZwmsgU3iLhh50QJg45B7eoCnqKXbSdfq0SaUBNH','test','test',0,0,0,0,0,2018,NULL,NULL,0,NULL,0,0,0,0,0,0,0,2018,NULL,NULL,0,NULL,NULL,1,'pre-selling','1',1,1000.00,'1','rjF7AiKAzHvrDNnoi51IGPIED76ryAvz9dkASHYf.jpeg','1','mandau','cebu',NULL,NULL,'2018-07-29 06:26:41','2018-07-29 06:26:41');
/*!40000 ALTER TABLE `properties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'anth','anthony','derechoanthony@gmail.com','$2y$10$bLpOMoVwEfbcG5.EnsONCeNanEvSfbsxISX87BwIVaEu39GAKXjKC','daOSEYOXxSVgN8hhjV1fm4gRKZfuYrAGYHFNGswIv0BDmmPcZDpuj1WreltN','2018-07-29 05:57:10','2018-07-29 05:57:10');
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

-- Dump completed on 2018-10-27 10:09:58
