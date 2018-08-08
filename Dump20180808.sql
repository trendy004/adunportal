-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (i386)
--
-- Host: 127.0.0.1    Database: adun
-- ------------------------------------------------------
-- Server version	5.7.19

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
-- Table structure for table `candidates`
--

DROP TABLE IF EXISTS `candidates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `candidates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(225) NOT NULL,
  `middlename` varchar(225) NOT NULL,
  `surname` varchar(225) NOT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `candidates`
--

LOCK TABLES `candidates` WRITE;
/*!40000 ALTER TABLE `candidates` DISABLE KEYS */;
INSERT INTO `candidates` VALUES (1,'Theodore','Victor','Martins','08027357251','2018-07-02',NULL,'2018-07-09 12:54:02','2018-07-09 12:54:02'),(2,'Omotola','Victor','Martins','08027357251','2018-07-02',NULL,'2018-07-09 12:55:52','2018-07-09 12:55:52'),(3,'Omotola','Ayedun','Collins','09031232832','2018-07-02',NULL,'2018-07-09 13:00:55','2018-07-09 13:00:55'),(4,'Damilola','Shobaje','Usman','08276739808','2018-06-27',NULL,'2018-07-09 13:12:51','2018-07-09 13:12:51'),(5,'Lateef','Ayedun','Popoola','08276739808','2018-07-01',NULL,'2018-07-09 13:17:03','2018-07-09 13:17:03'),(6,'Lateefat','Eng','Omoola','08276739808','2018-06-28',NULL,'2018-07-09 13:18:02','2018-07-09 13:18:02'),(7,'Latifat','Eugene','Omolola','08037391808','2018-06-28',NULL,'2018-07-09 13:19:57','2018-07-09 13:19:57'),(8,'Latieifat','Eugenes','Omolayo','08011391808','2018-06-28',NULL,'2018-07-09 13:21:53','2018-07-09 13:21:53'),(9,'Latieifat','Shobaje','Usman','08011391808','2018-07-02',NULL,'2018-07-09 13:22:29','2018-07-09 13:22:29'),(10,'Lateef','Eugenes','Martins','07088634343','2018-07-01',NULL,'2018-07-09 15:04:32','2018-07-09 15:04:32'),(11,'Omotola','Rukayat','Akinbowale','08011391808','2018-06-26',NULL,'2018-07-09 15:08:58','2018-07-09 15:08:58'),(12,'Damilola','Eugene','Martins','08027357251','2018-07-03',NULL,'2018-07-09 15:24:37','2018-07-09 15:24:37'),(13,'Theodore','Shobaje','Akinbowale','08027357251','2018-06-27',NULL,'2018-07-09 15:35:05','2018-07-09 15:35:05'),(14,'Omotola','Shobaje','Collins','08011391808','2018-07-03',NULL,'2018-07-09 15:37:27','2018-07-09 15:37:27'),(15,'Omotola','Shobaje','Collins','08011391808','2018-07-03',NULL,'2018-07-09 15:37:39','2018-07-09 15:37:39'),(16,'Theodore','Victor','Martins','08027357251','2018-06-25',NULL,'2018-07-09 17:36:49','2018-07-09 17:36:49'),(17,'Damilola','Oluboyede','Mattew','08011391808','2018-06-24',NULL,'2018-07-10 08:18:23','2018-07-10 08:18:23'),(18,'omijeh','peter','edeoghon','07034107070','1974-07-25',NULL,'2018-07-10 08:27:55','2018-07-10 08:27:55'),(19,'Omolola','Hoyindasola','Akinboro','07088634343','2018-06-25',NULL,'2018-07-10 11:45:44','2018-07-10 11:45:44'),(20,'Omolola','Hoyindasola','Akinboro','07088634343','2018-06-25',NULL,'2018-07-10 11:46:31','2018-07-10 11:46:31'),(21,'Omotola','Owoseni','Imoleayo','07030906521','2018-06-25',NULL,'2018-07-10 13:23:01','2018-07-10 13:23:01'),(22,'Omotola','Owoseni','Imoleayo','07030906521','2018-06-25',NULL,'2018-07-10 13:24:00','2018-07-10 13:24:00'),(23,'Omotola','Owoseni','Imoleayo','07030906521','2018-06-25',NULL,'2018-07-10 13:25:37','2018-07-10 13:25:37'),(24,'Omotola','Owoseni','Imoleayo','07030906521','2018-06-25',NULL,'2018-07-10 13:32:42','2018-07-10 13:32:42'),(25,'Omotola','Owoseni','Imoleayo','07030906521','2018-06-25',NULL,'2018-07-10 13:35:03','2018-07-10 13:35:03'),(26,'Omotola','Owoseni','Imoleayo','07030906521','2018-06-25',NULL,'2018-07-10 13:36:56','2018-07-10 13:36:56'),(27,'Omotola','Owoseni','Imoleayo','07030906521','2018-06-25',NULL,'2018-07-10 13:38:34','2018-07-10 13:38:34'),(28,'Omotola','Owoseni','Imoleayo','07030906521','2018-06-25',NULL,'2018-07-10 13:38:57','2018-07-10 13:38:57'),(29,'Omotola','Owoseni','Imoleayo','07030906521','2018-06-25',NULL,'2018-07-10 13:39:25','2018-07-10 13:39:25'),(30,'Omotola','Owoseni','Imoleayo','07030906521','2018-06-25',NULL,'2018-07-10 13:39:39','2018-07-10 13:39:39'),(31,'omijeh','hhh','ndusbi','0803388888','1970-07-22',NULL,'2018-07-10 15:33:29','2018-07-10 15:33:29'),(32,'Test','Tester','Testest','08027357251','2018-07-02',NULL,'2018-07-11 07:32:14','2018-07-11 07:32:14'),(36,'Omotola','Owoseni','Popoola','08011391808','2018-07-05',3,'2018-07-12 17:02:07','2018-07-12 17:02:07'),(40,'Omotola','Eugenes','Imoleayo','08011391808','2018-07-03',2,'2018-07-13 07:15:59','2018-07-13 07:15:59'),(41,'Lateef','Eugenes','Popoola','08011391808','2018-07-12',1,'2018-07-13 08:34:46','2018-07-13 08:34:46'),(42,'Lateefat','Eugenes','Popoola','08011391808','2018-07-12',1,'2018-07-13 08:43:29','2018-07-13 08:43:29'),(43,'Theodore','Victor','Martins','07088634343','2018-07-02',3,'2018-07-13 09:43:29','2018-07-13 09:43:29'),(50,'Omotola','Rukayat','Akinbowale','08027357251','2018-07-31',2,'2018-07-13 15:37:07','2018-07-13 15:37:07'),(51,'Omotola','Rukayat','Akinbowale','08027357251','2018-07-31',2,'2018-07-13 15:51:43','2018-07-13 15:51:43'),(52,'Omotola','Rukayat','Akinbowale','08027357251','2018-07-02',2,'2018-07-13 15:58:24','2018-07-13 15:58:24'),(53,'Omotola','Owoseni','Popoola','08027357251','2018-07-16',2,'2018-07-13 16:06:22','2018-07-13 16:06:22'),(54,'Omotola','Owoseni','Popoola','08027357251','2018-07-16',2,'2018-07-13 16:07:09','2018-07-13 16:07:09'),(55,'Omotola','Rukayat','Collins','07088634343','2018-07-09',2,'2018-07-13 16:08:44','2018-07-13 16:08:44'),(56,'Omotola','Rukayat','Akinbowale','07088634343','2018-06-26',2,'2018-07-13 16:58:21','2018-07-13 16:58:21'),(57,'Omotola','Rukayat','Akinbowale','08011391808','2018-06-25',2,'2018-07-13 17:04:07','2018-07-13 17:04:07'),(58,'Akinbowale','Rukayat','Akinbowale','08011391808','2018-07-08',3,'2018-07-16 08:25:22','2018-07-16 08:25:22'),(59,'Akinbowale','Rukayat','Akinbowale','08011391808','2018-07-08',3,'2018-07-16 08:26:27','2018-07-16 08:26:27'),(60,'Akinbowale','Rukayat','Akinbowale','08011391808','2018-07-08',3,'2018-07-16 11:01:51','2018-07-16 11:01:51');
/*!40000 ALTER TABLE `candidates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course_lists`
--

DROP TABLE IF EXISTS `course_lists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_lists` (
  `id` int(11) NOT NULL,
  `faculty_id` varchar(45) DEFAULT NULL,
  `course` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_lists`
--

LOCK TABLES `course_lists` WRITE;
/*!40000 ALTER TABLE `course_lists` DISABLE KEYS */;
INSERT INTO `course_lists` VALUES (1,'1','English Literature'),(2,'1','Political Science'),(3,'1','Performing Arts'),(4,'1','Sociology'),(5,'2','Banking and Finance'),(6,'2','Entrepreneurship'),(7,'2','Marketing'),(8,'2','Industrial Relations and Personnel Management'),(9,'3','Microbiology'),(10,'3','Industrial Chemistry'),(11,'3','Petroleum Chemistry'),(12,'3','Information Systems'),(13,'3','Information Technology'),(14,'3','Industrial Physics'),(15,'4','Automotive Engineering'),(16,'4','Computer Engineering'),(17,'4','Electrical and Electronics Engineering'),(18,'4','Mechanical Engineering'),(19,'4','Naval Architecture and Ship Construction'),(20,'4','Petroleum and Gas Engineering'),(21,'4','Welding Engineering'),(22,'5','LL.B.'),(23,'5','Concentrations'),(24,'5','Jurisprudence and Legal Theory'),(25,'5','Private and Business Law'),(26,'5','Property Law'),(27,'5','Public and Constitutional Law'),(28,'6','Nautical Science'),(29,'6','Navigation Technology'),(30,'6','Port Management');
/*!40000 ALTER TABLE `course_lists` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,36,4,3,'2018-07-12 11:48:39','2018-07-12 11:48:39'),(2,36,3,2,'2018-07-12 12:03:46','2018-07-12 12:03:46'),(3,48,1,2,'2018-07-13 12:13:30','2018-07-13 12:13:30'),(4,64,3,2,'2018-07-13 17:36:16','2018-07-13 17:36:16'),(5,64,4,3,'2018-07-13 17:36:31','2018-07-13 17:36:31');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exam_details`
--

DROP TABLE IF EXISTS `exam_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exam_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) DEFAULT NULL,
  `exam_type` varchar(45) NOT NULL,
  `exam_year` varchar(45) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exam_details`
--

LOCK TABLES `exam_details` WRITE;
/*!40000 ALTER TABLE `exam_details` DISABLE KEYS */;
INSERT INTO `exam_details` VALUES (1,35,'WACE','2018','2018-07-11 10:44:21','2018-07-11 10:44:21'),(2,35,'NECO','2001','2018-07-11 12:10:17','2018-07-11 12:10:17'),(3,35,'NECO','2003','2018-07-11 12:10:28','2018-07-11 12:10:28'),(4,35,'GCE WACE','2003','2018-07-11 12:13:26','2018-07-11 12:13:26'),(5,35,'NECO','2002','2018-07-11 15:05:17','2018-07-11 15:05:17'),(6,35,'GCE WACE','2002','2018-07-11 15:05:46','2018-07-11 15:05:46'),(7,35,'NECO','2001','2018-07-11 16:25:02','2018-07-11 16:25:02'),(8,35,'WACE','2000','2018-07-11 16:25:05','2018-07-11 16:25:05'),(9,35,'GCE WACE','2017','2018-07-11 16:26:03','2018-07-11 16:26:03'),(10,38,'GCE WACE','2001','2018-07-12 13:00:10','2018-07-12 13:00:10'),(11,NULL,'GCE WACE','2002','2018-07-12 21:45:40','2018-07-12 21:45:40'),(12,45,'NECO','2016','2018-07-13 10:08:57','2018-07-13 10:08:57'),(13,64,'NECO','2018','2018-07-13 17:06:02','2018-07-13 17:06:02');
/*!40000 ALTER TABLE `exam_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faculties`
--

DROP TABLE IF EXISTS `faculties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faculties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faculties`
--

LOCK TABLES `faculties` WRITE;
/*!40000 ALTER TABLE `faculties` DISABLE KEYS */;
INSERT INTO `faculties` VALUES (1,'Faculty of Arts and Social Sciences'),(2,'Faculty of Management Sciences'),(3,'Faculty of Science'),(4,'Faculty of Engineering and Technology'),(5,'Faculty of Law'),(6,'Faculty of Maritime Studies');
/*!40000 ALTER TABLE `faculties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grades`
--

DROP TABLE IF EXISTS `grades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grade` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grades`
--

LOCK TABLES `grades` WRITE;
/*!40000 ALTER TABLE `grades` DISABLE KEYS */;
INSERT INTO `grades` VALUES (1,'A1'),(2,'B2'),(3,'B3'),(4,'C4'),(5,'C5'),(6,'C6'),(7,'D7'),(8,'E8'),(9,'F9');
/*!40000 ALTER TABLE `grades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jamb_scores`
--

DROP TABLE IF EXISTS `jamb_scores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jamb_scores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `jamb_result` varchar(225) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jamb_scores`
--

LOCK TABLES `jamb_scores` WRITE;
/*!40000 ALTER TABLE `jamb_scores` DISABLE KEYS */;
INSERT INTO `jamb_scores` VALUES (1,18,3,50,NULL,'2018-07-09 17:37:23','2018-07-09 17:37:23'),(2,18,5,20,'1531159779.jpg','2018-07-09 18:09:39','2018-07-09 18:09:39'),(3,20,5,34,NULL,'2018-07-10 08:30:34','2018-07-10 08:30:34'),(4,20,4,56,NULL,'2018-07-10 08:31:12','2018-07-10 08:31:12'),(5,20,2,50,NULL,'2018-07-10 10:44:24','2018-07-10 10:44:24'),(6,20,1,60,NULL,'2018-07-10 10:49:27','2018-07-10 10:49:27'),(7,22,4,50,NULL,'2018-07-10 12:07:35','2018-07-10 12:07:35'),(8,22,2,60,'1531227148.jpg','2018-07-10 12:52:28','2018-07-10 12:52:28'),(9,22,4,56,'1531227555.jpg','2018-07-10 12:59:15','2018-07-10 12:59:15'),(10,33,5,55,NULL,'2018-07-10 15:34:24','2018-07-10 15:34:24'),(11,33,7,66,NULL,'2018-07-10 15:35:22','2018-07-10 15:35:22'),(12,33,5,777,NULL,'2018-07-10 15:35:30','2018-07-10 15:35:30'),(13,33,6,88,NULL,'2018-07-10 15:35:57','2018-07-10 15:35:57'),(14,33,8,88,NULL,'2018-07-10 15:36:03','2018-07-10 15:36:03'),(15,35,NULL,NULL,'1531298736.jpg','2018-07-11 08:45:36','2018-07-11 08:45:36'),(16,35,2,56,NULL,'2018-07-11 09:53:20','2018-07-11 09:53:20'),(17,35,NULL,NULL,'1531305037.jpg','2018-07-11 10:30:37','2018-07-11 10:30:37'),(18,35,NULL,NULL,'1531305087.jpg','2018-07-11 10:31:27','2018-07-11 10:31:27'),(19,35,2,60,NULL,'2018-07-11 13:13:30','2018-07-11 13:13:30'),(20,35,4,60,NULL,'2018-07-11 13:13:42','2018-07-11 13:13:42'),(21,35,4,30,NULL,'2018-07-11 13:15:27','2018-07-11 13:15:27'),(22,35,6,12,NULL,'2018-07-11 13:45:20','2018-07-11 13:45:20'),(23,35,2,56,NULL,'2018-07-11 16:41:24','2018-07-11 16:41:24'),(24,35,1,56,NULL,'2018-07-11 16:55:40','2018-07-11 16:55:40'),(25,38,2,54,NULL,'2018-07-12 12:49:27','2018-07-12 12:49:27'),(26,38,3,21,NULL,'2018-07-12 12:49:38','2018-07-12 12:49:38'),(27,38,5,12,NULL,'2018-07-12 12:49:45','2018-07-12 12:49:45'),(28,38,1,12,NULL,'2018-07-12 12:49:54','2018-07-12 12:49:54'),(29,40,2,21,NULL,'2018-07-12 17:20:54','2018-07-12 17:20:54'),(30,40,1,56,NULL,'2018-07-12 17:21:44','2018-07-12 17:21:44'),(31,40,5,78,NULL,'2018-07-12 17:41:47','2018-07-12 17:41:47'),(32,40,8,43,NULL,'2018-07-12 17:41:58','2018-07-12 17:41:58'),(33,51,1,87,NULL,'2018-07-13 14:46:02','2018-07-13 14:46:02'),(34,51,2,34,NULL,'2018-07-13 14:46:10','2018-07-13 14:46:10'),(35,51,4,67,NULL,'2018-07-13 14:46:23','2018-07-13 14:46:23'),(36,51,5,98,NULL,'2018-07-13 14:46:30','2018-07-13 14:46:30'),(37,64,3,89,NULL,'2018-07-13 17:04:56','2018-07-13 17:04:56'),(38,64,4,45,NULL,'2018-07-13 17:05:10','2018-07-13 17:05:10'),(39,64,1,86,NULL,'2018-07-13 17:05:31','2018-07-13 17:05:31'),(40,64,2,46,NULL,'2018-07-13 17:05:42','2018-07-13 17:05:42');
/*!40000 ALTER TABLE `jamb_scores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `description` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (1,'Abuja','No 13 Mambila Street, Off Aso Drive, Asokoro'),(2,'Lagos State','Events Centre, Ikeja Lagos'),(3,'Ibusa/Asaba','Administrative Building, Admiralty University of Nigeria, KM .. Uguchukwu Ibusa Road, Ibusa.'),(4,'Kano','Pinnacle Educational Services, No 6, Yusuf Road, Bompai, Kano'),(5,'Port Harcourt',NULL),(6,'Gombe',NULL);
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `olevels`
--

DROP TABLE IF EXISTS `olevels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `olevels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `olevels`
--

LOCK TABLES `olevels` WRITE;
/*!40000 ALTER TABLE `olevels` DISABLE KEYS */;
INSERT INTO `olevels` VALUES (1,18,2,1,'2018-07-09 17:45:59','2018-07-09 17:45:59'),(2,18,3,5,'2018-07-09 18:05:58','2018-07-09 18:05:58'),(3,18,2,5,'2018-07-09 18:06:18','2018-07-09 18:06:18'),(4,18,6,3,'2018-07-09 18:06:44','2018-07-09 18:06:44'),(5,18,3,3,'2018-07-09 18:09:07','2018-07-09 18:09:07'),(6,20,2,2,'2018-07-10 09:09:55','2018-07-10 09:09:55'),(7,20,2,2,'2018-07-10 10:36:53','2018-07-10 10:36:53'),(8,20,3,2,'2018-07-10 10:37:19','2018-07-10 10:37:19'),(9,22,11,2,'2018-07-10 12:11:56','2018-07-10 12:11:56'),(10,22,3,3,'2018-07-10 12:12:11','2018-07-10 12:12:11'),(11,22,3,1,'2018-07-10 12:12:27','2018-07-10 12:12:27'),(12,22,1,2,'2018-07-10 12:54:36','2018-07-10 12:54:36'),(13,22,2,2,'2018-07-10 12:54:50','2018-07-10 12:54:50'),(14,22,5,3,'2018-07-10 12:55:05','2018-07-10 12:55:05'),(15,22,1,2,'2018-07-10 12:55:48','2018-07-10 12:55:48'),(16,32,6,3,'2018-07-10 14:37:34','2018-07-10 14:37:34'),(17,32,1,2,'2018-07-10 14:39:09','2018-07-10 14:39:09'),(18,32,1,1,'2018-07-10 14:39:34','2018-07-10 14:39:34'),(19,32,1,1,'2018-07-10 14:39:47','2018-07-10 14:39:47'),(20,32,4,1,'2018-07-10 14:40:10','2018-07-10 14:40:10'),(21,33,5,6,'2018-07-10 15:36:51','2018-07-10 15:36:51'),(22,33,6,6,'2018-07-10 15:37:09','2018-07-10 15:37:09'),(23,33,4,1,'2018-07-10 15:43:08','2018-07-10 15:43:08'),(24,35,2,4,'2018-07-11 12:16:08','2018-07-11 12:16:08'),(25,35,3,3,'2018-07-11 12:20:21','2018-07-11 12:20:21'),(26,35,2,3,'2018-07-11 12:34:14','2018-07-11 12:34:14'),(27,35,4,4,'2018-07-11 15:42:14','2018-07-11 15:42:14'),(28,35,3,2,'2018-07-11 15:42:38','2018-07-11 15:42:38'),(29,35,5,2,'2018-07-11 15:49:26','2018-07-11 15:49:26'),(30,35,8,1,'2018-07-11 16:55:02','2018-07-11 16:55:02'),(31,45,2,3,'2018-07-13 10:09:04','2018-07-13 10:09:04'),(32,45,8,1,'2018-07-13 10:09:09','2018-07-13 10:09:09'),(33,45,9,1,'2018-07-13 10:09:13','2018-07-13 10:09:13'),(34,45,1,1,'2018-07-13 10:09:23','2018-07-13 10:09:23'),(35,45,12,1,'2018-07-13 10:09:27','2018-07-13 10:09:27'),(36,45,5,1,'2018-07-13 10:09:33','2018-07-13 10:09:33'),(37,45,4,1,'2018-07-13 10:09:41','2018-07-13 10:09:41'),(38,45,15,1,'2018-07-13 10:09:47','2018-07-13 10:09:47'),(39,45,6,1,'2018-07-13 10:09:56','2018-07-13 10:09:56'),(40,64,1,3,'2018-07-13 17:06:12','2018-07-13 17:06:12'),(41,64,5,1,'2018-07-13 17:06:16','2018-07-13 17:06:16'),(42,64,3,1,'2018-07-13 17:06:21','2018-07-13 17:06:21'),(43,64,4,4,'2018-07-13 17:06:28','2018-07-13 17:06:28'),(44,64,14,1,'2018-07-13 17:06:39','2018-07-13 17:06:39'),(45,64,11,1,'2018-07-13 17:06:43','2018-07-13 17:06:43'),(46,64,18,1,'2018-07-13 17:06:50','2018-07-13 17:06:50'),(47,64,17,1,'2018-07-13 17:06:54','2018-07-13 17:06:54'),(48,64,6,6,'2018-07-13 17:07:14','2018-07-13 17:07:14'),(49,64,10,5,'2018-07-13 17:07:20','2018-07-13 17:07:20'),(50,64,12,1,'2018-07-13 17:07:33','2018-07-13 17:07:33');
/*!40000 ALTER TABLE `olevels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` VALUES (1,22,'1531228295.jpg','2018-07-10 13:11:35','2018-07-10 13:11:35'),(2,32,'1531232141.jpg','2018-07-10 14:15:41','2018-07-10 14:15:41'),(3,35,'1531328380.jpg','2018-07-11 16:59:40','2018-07-11 16:59:40');
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `result_uploads`
--

DROP TABLE IF EXISTS `result_uploads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `result_uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) NOT NULL,
  `first_sitting` varchar(225) DEFAULT NULL,
  `second_sitting` varchar(225) DEFAULT NULL,
  `jamb_result` varchar(225) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `result_uploads`
--

LOCK TABLES `result_uploads` WRITE;
/*!40000 ALTER TABLE `result_uploads` DISABLE KEYS */;
INSERT INTO `result_uploads` VALUES (1,0,NULL,'1531325945.jpg',NULL,'2018-07-11 16:19:05','2018-07-11 16:19:05'),(2,35,NULL,'1531326080.jpg',NULL,'2018-07-11 16:21:20','2018-07-11 16:21:20'),(3,35,NULL,'1531327231.jpg',NULL,'2018-07-11 16:40:31','2018-07-11 16:40:31'),(4,35,NULL,NULL,'1531327502.jpg','2018-07-11 16:45:02','2018-07-11 16:45:02'),(5,64,NULL,NULL,'1531501550.jpg','2018-07-13 17:05:50','2018-07-13 17:05:50');
/*!40000 ALTER TABLE `result_uploads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `second_exam_details`
--

DROP TABLE IF EXISTS `second_exam_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `second_exam_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) NOT NULL,
  `exam_type` varchar(45) NOT NULL,
  `exam_year` varchar(45) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `second_exam_details`
--

LOCK TABLES `second_exam_details` WRITE;
/*!40000 ALTER TABLE `second_exam_details` DISABLE KEYS */;
INSERT INTO `second_exam_details` VALUES (4,35,'NECO','2001','2018-07-11 15:49:10','2018-07-11 15:49:10'),(5,35,'NECO','2018','2018-07-11 16:26:27','2018-07-11 16:26:27'),(6,38,'GCE WACE','2017','2018-07-12 13:01:43','2018-07-12 13:01:43'),(7,64,'NECO','2002','2018-07-13 17:14:00','2018-07-13 17:14:00');
/*!40000 ALTER TABLE `second_exam_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `second_sittings`
--

DROP TABLE IF EXISTS `second_sittings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `second_sittings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `grade_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `second_sittings`
--

LOCK TABLES `second_sittings` WRITE;
/*!40000 ALTER TABLE `second_sittings` DISABLE KEYS */;
INSERT INTO `second_sittings` VALUES (1,35,2,1,'2018-07-11 15:51:13','2018-07-11 15:51:13'),(2,35,1,1,'2018-07-11 16:09:03','2018-07-11 16:09:03'),(3,35,4,3,'2018-07-11 16:17:47','2018-07-11 16:17:47'),(4,35,9,5,'2018-07-11 16:27:16','2018-07-11 16:27:16'),(5,64,3,5,'2018-07-13 17:23:38','2018-07-13 17:23:38'),(6,64,5,1,'2018-07-13 17:23:59','2018-07-13 17:23:59'),(7,64,9,5,'2018-07-13 17:24:07','2018-07-13 17:24:07');
/*!40000 ALTER TABLE `second_sittings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `olevel` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjects`
--

LOCK TABLES `subjects` WRITE;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` VALUES (1,'English Language'),(2,'Mathematics'),(3,'Literature in  English'),(4,'Chemistry'),(5,'Biology'),(6,'Physics'),(7,'Geography'),(8,'Economics'),(9,'Commerce'),(10,'Food and Nutrition'),(11,'Further Mathematics'),(12,'Technical Drawing'),(13,'Civic Education'),(14,'Government'),(15,'Computer Science'),(16,'Agricultural Science'),(17,'History'),(18,'Nigerian Language'),(19,'Trade Subject');
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tellers`
--

DROP TABLE IF EXISTS `tellers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tellers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) NOT NULL,
  `teller_no` int(11) NOT NULL,
  `payment_date` date NOT NULL,
  `depositors_no` varchar(45) NOT NULL,
  `teller` varchar(225) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tellers`
--

LOCK TABLES `tellers` WRITE;
/*!40000 ALTER TABLE `tellers` DISABLE KEYS */;
INSERT INTO `tellers` VALUES (1,38,23234,'2018-07-02','09028362387','1531413917.jpg','2018-07-12 16:45:17','2018-07-12 16:45:17'),(2,51,7236,'2018-07-01','0936368289','1531493283.jpg','2018-07-13 14:48:03','2018-07-13 14:48:03'),(3,51,7236,'2018-07-01','0936368289','1531493456.jpg','2018-07-13 14:50:56','2018-07-13 14:50:56'),(4,51,347236,'2018-07-01','0936368289','1531493598.jpg','2018-07-13 14:53:18','2018-07-13 14:53:18'),(5,51,868434,'2018-06-25','08076577654','1531493851.jpg','2018-07-13 14:57:31','2018-07-13 14:57:31'),(6,51,868434,'2018-06-25','08076577654','1531493897.jpg','2018-07-13 14:58:17','2018-07-13 14:58:17'),(7,51,12312,'2018-06-25','07037373821','1531493919.jpg','2018-07-13 14:58:39','2018-07-13 14:58:39');
/*!40000 ALTER TABLE `tellers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `email` varchar(225) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `remember_token` varchar(225) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'Theodore667','the@odo.re','$2y$10$1kmsSnnEoCxRmpEdSVrO.ehULzy4puLhWIONqg8A5dPz353VHU4lq',NULL,'2018-07-09 12:54:02','2018-07-09 12:54:02'),(4,'Omotola130','b.baka@nas.com','$2y$10$8vPObalGb2upztYOfXh9t.BmZAAVm7q41IjNMFXsq9KlYouOBdLgy',NULL,'2018-07-09 13:00:55','2018-07-09 13:00:55'),(64,'Omotola56','omotolat12@gmail.com','$2y$10$Me/iYjuzlYP7q5rUZ6B/zOybT7Wc/R6RXt.xBtXJgkBA6t2JHoo/6',NULL,'2018-07-13 17:04:07','2018-07-13 17:04:07'),(67,'Akinbowale888','rukkyomotola004@gmail.com','$2y$10$JmLg8AQxjlgsjHwwtu0kk.TtXV.mjNxi6iPWv/8rJBTm.18QBEn52',NULL,'2018-07-16 11:01:51','2018-07-16 11:01:51');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'adun'
--

--
-- Dumping routines for database 'adun'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-08  1:03:36
