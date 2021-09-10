-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: fyp_ncs
-- ------------------------------------------------------
-- Server version	8.0.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `album`
--

DROP TABLE IF EXISTS `album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `album` (
  `album_id` int NOT NULL AUTO_INCREMENT,
  `album_name` varchar(50) DEFAULT NULL,
  `album_year` int DEFAULT NULL,
  `album_popularity` int DEFAULT NULL,
  `album_lang` int NOT NULL,
  `album_art_path` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `album`
--

LOCK TABLES `album` WRITE;
/*!40000 ALTER TABLE `album` DISABLE KEYS */;
INSERT INTO `album` (`album_id`, `album_name`, `album_year`, `album_popularity`, `album_lang`, `album_art_path`) VALUES (1,'Single',NULL,NULL,0,'resources\\storage\\art\\album\\1.jpg');
/*!40000 ALTER TABLE `album` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `artist`
--

DROP TABLE IF EXISTS `artist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `artist` (
  `artist_id` int NOT NULL AUTO_INCREMENT,
  `artist_name` varchar(50) DEFAULT NULL,
  `artist_popularity` int NOT NULL,
  `artist_img_path` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`artist_id`)
) ENGINE=InnoDB AUTO_INCREMENT=204 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artist`
--

LOCK TABLES `artist` WRITE;
/*!40000 ALTER TABLE `artist` DISABLE KEYS */;
INSERT INTO `artist` (`artist_id`, `artist_name`, `artist_popularity`, `artist_img_path`) VALUES (1,'Gameboy Tetris',1000,'resources\\storage\\art\\artist\\1.jpg'),(2,'nublu',1000,'resources\\storage\\art\\artist\\1.jpg'),(3,'Cartoon',1000,'resources\\storage\\art\\artist\\1.jpg'),(4,'Sub Urban',1000,'resources\\storage\\art\\artist\\1.jpg'),(5,'Lost Sky',1000,'resources\\storage\\art\\artist\\1.jpg'),(6,'Chris Linton',1005,'resources\\storage\\art\\artist\\1.jpg'),(7,'Alisky',1000,'resources\\storage\\art\\artist\\1.jpg'),(8,'Dax',1000,'resources\\storage\\art\\artist\\1.jpg'),(9,'VinDon',1000,'resources\\storage\\art\\artist\\1.jpg'),(10,'Unknown Brain',1000,'resources\\storage\\art\\artist\\1.jpg'),(11,'Janji',1000,'resources\\storage\\art\\artist\\1.jpg'),(12,'Johnning',1000,'resources\\storage\\art\\artist\\1.jpg'),(13,'Simbai',1000,'resources\\storage\\art\\artist\\1.jpg'),(14,'Frizzy The Streetz',1000,'resources\\storage\\art\\artist\\1.jpg'),(15,'Diviners',1000,'resources\\storage\\art\\artist\\1.jpg'),(16,'Azertion',1000,'resources\\storage\\art\\artist\\1.jpg'),(17,'THYKIER',1000,'resources\\storage\\art\\artist\\1.jpg'),(18,'Clarx',1000,'resources\\storage\\art\\artist\\1.jpg'),(19,'Halvorsen',1000,'resources\\storage\\art\\artist\\1.jpg'),(20,'Abandoned',1000,'resources\\storage\\art\\artist\\1.jpg'),(21,'Mendum',1000,'resources\\storage\\art\\artist\\1.jpg'),(22,'Modern Revolt',1000,'resources\\storage\\art\\artist\\1.jpg'),(23,'M.I.M.E',1000,'resources\\storage\\art\\artist\\1.jpg'),(24,'N3WPORT',1000,'resources\\storage\\art\\artist\\1.jpg');
/*!40000 ALTER TABLE `artist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `file`
--

DROP TABLE IF EXISTS `file`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `file` (
  `file_id` int NOT NULL AUTO_INCREMENT,
  `file_name` varchar(100) NOT NULL,
  `file_path` varchar(5000) DEFAULT NULL,
  `file_art_path` varchar(5000) DEFAULT NULL,
  PRIMARY KEY (`file_id`),
  CONSTRAINT `file_id` FOREIGN KEY (`file_id`) REFERENCES `track` (`track_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file`
--

LOCK TABLES `file` WRITE;
/*!40000 ALTER TABLE `file` DISABLE KEYS */;
INSERT INTO `file` (`file_id`, `file_name`, `file_path`, `file_art_path`) VALUES (1,'Cartoon x nublu x Gameboy Tetris - Biology [NCS Release]','resources\\storage\\NCS\\','resources\\storage\\art\\singles\\1.jpg'),(2,'Sub Urban - Cradles [NCS Release]','resources\\storage\\NCS\\','resources\\storage\\art\\singles\\1.jpg'),(3,'TULE - Fearless pt.II (feat. Chris Linton) [NCS Release]','resources\\storage\\NCS\\','resources\\storage\\art\\singles\\1.jpg'),(4,'Alisky - On [NCS Release]','resources\\storage\\NCS\\','resources\\storage\\art\\singles\\1.jpg'),(5,'Unknown Brain & Hoober - Phenomenon (ft. Dax & VinDon) [NCS Release]','resources\\storage\\NCS\\','resources\\storage\\art\\singles\\1.jpg'),(6,'Janji - Heroes Tonight (feat. Johnning) [NCS Release]','resources\\storage\\NCS\\','resources\\storage\\art\\singles\\2.jpg'),(7,'Simbai & Frizzy The Streetz - Crazy [NCS Release]','resources\\storage\\NCS\\','resources\\storage\\art\\singles\\2.jpg'),(8,'Unknown Brain - Superhero (feat. Chris Linton) [NCS Release]','resources\\storage\\NCS\\','resources\\storage\\art\\singles\\2.jpg'),(9,'Diviners & Azertion - Feelings [NCS Release]','resources\\storage\\NCS\\','resources\\storage\\art\\singles\\2.jpg'),(10,'THYKIER - Shimmer [NCS Release]','resources\\storage\\NCS\\','resources\\storage\\art\\singles\\2.jpg'),(11,'Clarx - Done (feat. Halvorsen) [NCS Release]','resources\\storage\\NCS\\','resources\\storage\\art\\singles\\2.jpg'),(12,'Mendum & Abandoned - Voyage (Feat. DNAKM) [NCS Release]','resources\\storage\\NCS\\','resources\\storage\\art\\singles\\3.jpg'),(13,'Modern Revolt - VOLT [NCS Release]','resources\\storage\\NCS\\','resources\\storage\\art\\singles\\3.jpg'),(14,'N3WPORT x M.I.M.E - Touchdown [NCS Release]','resources\\storage\\NCS\\','resources\\storage\\art\\singles\\3.jpg');
/*!40000 ALTER TABLE `file` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lang`
--

DROP TABLE IF EXISTS `lang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lang` (
  `lang_id` int NOT NULL AUTO_INCREMENT,
  `language` varchar(50) NOT NULL,
  PRIMARY KEY (`lang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lang`
--

LOCK TABLES `lang` WRITE;
/*!40000 ALTER TABLE `lang` DISABLE KEYS */;
INSERT INTO `lang` (`lang_id`, `language`) VALUES (1,'English'),(2,'Hindi');
/*!40000 ALTER TABLE `lang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `track`
--

DROP TABLE IF EXISTS `track`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `track` (
  `track_id` int NOT NULL AUTO_INCREMENT,
  `track_title` varchar(50) NOT NULL,
  `track_artist1` varchar(10) NOT NULL,
  `track_artist2` int DEFAULT NULL,
  `track_album` int DEFAULT NULL,
  `track_genre` varchar(20) DEFAULT NULL,
  `track_year` int DEFAULT NULL,
  `track_artist3` int DEFAULT NULL,
  `track_artist4` int DEFAULT NULL,
  `track_popularity` int NOT NULL,
  `track_likes` int DEFAULT NULL,
  `track_lang` int NOT NULL,
  `track_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `last_modified` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`track_id`),
  KEY `track_album` (`track_album`),
  CONSTRAINT `track_album` FOREIGN KEY (`track_album`) REFERENCES `album` (`album_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `track`
--

LOCK TABLES `track` WRITE;
/*!40000 ALTER TABLE `track` DISABLE KEYS */;
INSERT INTO `track` (`track_id`, `track_title`, `track_artist1`, `track_artist2`, `track_album`, `track_genre`, `track_year`, `track_artist3`, `track_artist4`, `track_popularity`, `track_likes`, `track_lang`, `track_date`, `last_modified`) VALUES (1,'Biology','1',2,1,NULL,2021,3,NULL,700,0,1,'2021-09-01 02:32:35','2021-09-03 01:04:33'),(2,'Cradles','4',NULL,1,NULL,2019,NULL,NULL,700,0,1,'2021-09-01 02:37:28','2021-09-03 01:04:33'),(3,'Fearless','5',6,1,NULL,2017,NULL,NULL,1000,0,1,'2021-09-01 02:37:28','2021-09-03 01:04:33'),(4,'On','7',NULL,1,NULL,2021,NULL,NULL,700,0,1,'2021-09-01 02:37:28','2021-09-03 01:04:34'),(5,'Phenomenon','8',9,1,NULL,2021,10,NULL,700,0,1,'2021-09-01 02:37:28','2021-09-03 01:04:34'),(6,'Heroes Tonight','11',12,1,NULL,2015,NULL,NULL,700,0,1,'2021-09-01 02:37:28','2021-09-03 01:04:34'),(7,'Crazy','13',14,1,NULL,2021,NULL,NULL,700,0,1,'2021-09-01 02:37:28','2021-09-03 01:04:34'),(8,'Superhero','10',6,1,NULL,2016,NULL,NULL,705,0,1,'2021-09-01 02:37:28','2021-09-03 01:04:34'),(9,'Feelings','15',16,1,NULL,2021,NULL,NULL,700,0,1,'2021-09-01 02:37:28','2021-09-03 01:04:34'),(10,'Shimmer','17',NULL,1,NULL,2021,NULL,NULL,700,0,1,'2021-09-01 02:37:28','2021-09-03 01:04:34'),(11,'Done','18',19,1,NULL,2021,NULL,NULL,700,0,1,'2021-09-01 02:37:28','2021-09-03 01:04:34'),(12,'Voyage','20',21,1,NULL,2021,NULL,NULL,700,0,1,'2021-09-01 02:37:28','2021-09-03 01:04:33'),(13,'VOLT','22',NULL,1,NULL,2019,NULL,NULL,702,0,1,'2021-09-01 02:37:28','2021-09-03 01:04:33'),(14,'Touchdown','23',24,1,NULL,2021,NULL,NULL,700,0,1,'2021-09-01 02:37:28','2021-09-03 01:04:33');
/*!40000 ALTER TABLE `track` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-03  1:05:41
