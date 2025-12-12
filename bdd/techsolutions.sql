-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: techsolutions
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `components`
--

DROP TABLE IF EXISTS `components`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `components` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `components`
--

LOCK TABLES `components` WRITE;
/*!40000 ALTER TABLE `components` DISABLE KEYS */;
INSERT INTO `components` VALUES (15,'i5-10400F','Processeur'),(16,'i9-14900K','Processeur'),(17,'i7-13700K','Processeur'),(18,'i5-6600K','Processeur'),(19,'i7-7700','Processeur'),(20,'i3-6100','Processeur'),(21,'i3-12100F','Processeur'),(22,'i5-12400F','Processeur'),(23,'i9-14900KS','Processeur'),(24,'Ryzen 9 9950X3D','Processeur AMD'),(25,'Ryzen 7 7800X3D','Processeur AMD'),(26,'GT 730','Carte graphique Nvidia 2Go'),(27,'RTX 3090ti','Carte graphique Nvidia'),(28,'RTX 3090 Founder Edition','Carte graphique Nvidia'),(29,'GTX 750 ti','Carte graphique Nvidia'),(30,'RTX A6000','Carte graphique Nvidia'),(31,'A5000','Carte graphique Nvidia'),(32,'Radeon RX 9070 XT','Carte graphique AMD'),(33,'RX 7600','Carte graphique AMD'),(34,'ProArt X670E','Carte mère ASUS'),(35,'B650 Pro','Carte mère ASRock'),(36,'PRO WS W880-ACE SE','Carte mère ASUS'),(37,'A620AM-X','Carte mère ASRock'),(38,'Kingston FURRY BEAST 2x16Go','RAM DDR5 6000MHz CL30'),(39,'Textorm 2x8Go','DRR4 3200MHz CL16'),(40,'G.Skill Flare X5 Series Low Porfile 2x64Go','RAM DDR5 6000MHz CL32'),(41,'Corsair Vengeance 2x32Go','RAM DDR4 3200MHz CL16'),(42,'Corsair CX550 80Plus Bronze','Alimentation'),(43,'Be quiet! System Power 11 450W 80Plus Bronze','Alimentation'),(44,'MSI MAG A650BN 650W 80+ Bronze','Alimentation'),(45,'Corsair RM750eATX 750W ATX12V 80+Gold','Alimentation'),(46,'ASUS PRO Workstation 2200W ATX 80+ Platinum','Alimentation'),(47,'Samsung SSD 990EVO Plus 1To','Disque dure SSD'),(48,'Seagate BarraCuda 4To','Disque dure HDD'),(49,'Kingston KC3000 512Go','Disque dure SSD'),(50,'Seagate BarraCuda 2To','Disque dure HDD'),(51,'Lian Li O11 Dynmic','Boitier'),(52,'be quit! Silent BASE 601','Boitier apparence professionnel'),(53,'ASUS PCE-AXE5400','Carte réseau'),(54,'Corsair iCUE RX140 Dual Pack','2 ventilateurs 140mm'),(55,'Corsair iCUE RX120 MAX','3 ventilateurs 120mm'),(56,'be quit! Pure Loop 3 240mm','Watercooling'),(57,'Artic Liquid FreezerIII Pro','Watercooling'),(58,'ASUS TUF Z790-PLUS','Carte mere LGA1700'),(59,'Apple 2021 MacBook Pro','Pc portable (14 Pouces, Puce M1 Pro avec CPU 10 cœurs et GPU 16 cœurs, 16 Go RAM, 1 to SSD) - Gris sidéral'),(60,'iMac','iMac fixe');
/*!40000 ALTER TABLE `components` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form`
--

DROP TABLE IF EXISTS `form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form` (
  `ID` int(255) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `vu` varchar(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form`
--

LOCK TABLES `form` WRITE;
/*!40000 ALTER TABLE `form` DISABLE KEYS */;
INSERT INTO `form` VALUES (1,'','0','0','0'),(2,'','test','test','0'),(3,'[value-2]','[value-3]','[value-4]','0'),(4,'[value-1]','[value-2]','[value-3]','0'),(5,'aze','aze','aez','0'),(6,'aze','aze','aze','0'),(7,'test','test','tet','0'),(8,'test','test','tet','0'),(9,'aze','aze','aze','0'),(10,'yanael.brt@gmail.com','Contact','Bonjour, j\'aimerais être en contact avec vous pour pouvoir configurer ma propre entreprise,\r\nMerci bien!\r\n','0');
