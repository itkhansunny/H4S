-- MySQL dump 10.13  Distrib 5.7.24, for Win64 (x86_64)
--
-- Host: localhost    Database: ankur
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classname` varchar(20) NOT NULL,
  `classid` int(11) NOT NULL,
  `section` int(11) NOT NULL,
  `group` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `cdate` int(11) NOT NULL,
  `udate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classes`
--

LOCK TABLES `classes` WRITE;
/*!40000 ALTER TABLE `classes` DISABLE KEYS */;
INSERT INTO `classes` VALUES (1,'Class 6',6,0,0,0,1566727858,0),(2,'Class 7',7,0,0,0,1566803032,0);
/*!40000 ALTER TABLE `classes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cocuact`
--

DROP TABLE IF EXISTS `cocuact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cocuact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `cdate` int(11) NOT NULL,
  `udate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cocuact`
--

LOCK TABLES `cocuact` WRITE;
/*!40000 ALTER TABLE `cocuact` DISABLE KEYS */;
INSERT INTO `cocuact` VALUES (1,'Scouting',1566803421,0);
/*!40000 ALTER TABLE `cocuact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `depname` varchar(20) NOT NULL,
  `depid` int(11) NOT NULL,
  `cdate` int(11) NOT NULL,
  `udate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES (1,'CSE',1,1566803507,0);
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `examinations`
--

DROP TABLE IF EXISTS `examinations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `examinations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `examid` int(11) NOT NULL,
  `preexamid` int(11) NOT NULL,
  `cdate` int(11) NOT NULL,
  `udate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `examinations`
--

LOCK TABLES `examinations` WRITE;
/*!40000 ALTER TABLE `examinations` DISABLE KEYS */;
INSERT INTO `examinations` VALUES (1,'1st Tram',1,0,1566804501,0),(2,'2nd Tram',2,1,1566804514,0);
/*!40000 ALTER TABLE `examinations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grpname` varchar(20) NOT NULL,
  `grpid` int(11) NOT NULL,
  `cdate` int(11) NOT NULL,
  `udate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'Science',1,1566803494,0);
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quota`
--

DROP TABLE IF EXISTS `quota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `cdate` int(11) NOT NULL,
  `udate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quota`
--

LOCK TABLES `quota` WRITE;
/*!40000 ALTER TABLE `quota` DISABLE KEYS */;
INSERT INTO `quota` VALUES (1,'Freedom fighter',1566803439,0);
/*!40000 ALTER TABLE `quota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `sectionid` int(11) NOT NULL,
  `groupid` int(11) NOT NULL,
  `depid` int(11) NOT NULL,
  `examinationid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `cq` int(11) NOT NULL,
  `mcq` int(11) NOT NULL,
  `prac` int(11) NOT NULL,
  `cdate` int(11) NOT NULL,
  `udate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `result`
--

LOCK TABLES `result` WRITE;
/*!40000 ALTER TABLE `result` DISABLE KEYS */;
/*!40000 ALTER TABLE `result` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `result601`
--

DROP TABLE IF EXISTS `result601`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `result601` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `sid` varchar(10) NOT NULL DEFAULT '0',
  `roll` varchar(10) NOT NULL DEFAULT '0',
  `sessionid` varchar(10) NOT NULL DEFAULT '0',
  `examinationid` varchar(10) NOT NULL DEFAULT '0',
  `classid` varchar(10) NOT NULL DEFAULT '0',
  `sectionid` varchar(10) NOT NULL DEFAULT '0',
  `departmentid` varchar(10) NOT NULL DEFAULT '0',
  `groupid` varchar(10) NOT NULL DEFAULT '0',
  `fourth` varchar(5) NOT NULL DEFAULT '0',
  `name` varchar(150) NOT NULL DEFAULT '0',
  `total` varchar(150) NOT NULL DEFAULT '0',
  `banfstCQ` varchar(10) NOT NULL DEFAULT '0',
  `banfstMCQ` varchar(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `result601`
--

LOCK TABLES `result601` WRITE;
/*!40000 ALTER TABLE `result601` DISABLE KEYS */;
/*!40000 ALTER TABLE `result601` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sections`
--

DROP TABLE IF EXISTS `sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sectionname` varchar(20) NOT NULL,
  `sectionid` int(11) NOT NULL,
  `cdate` int(11) NOT NULL,
  `udate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections`
--

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
INSERT INTO `sections` VALUES (1,'A',4,1566802666,0);
/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `cdate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'name','School',155530);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sid` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '0',
  `class` int(11) NOT NULL DEFAULT '0',
  `section` int(11) DEFAULT '0',
  `group` int(11) DEFAULT '0',
  `department` int(11) DEFAULT '0',
  `roll` int(11) NOT NULL DEFAULT '0',
  `gender` varchar(10) NOT NULL DEFAULT '0',
  `religion` varchar(50) NOT NULL DEFAULT '0',
  `bloodgroup` varchar(10) NOT NULL DEFAULT '0',
  `fname` varchar(100) NOT NULL DEFAULT '0',
  `mname` varchar(100) NOT NULL DEFAULT '0',
  `mobile` varchar(20) NOT NULL DEFAULT '0',
  `preaddress` text NOT NULL,
  `paraddress` text NOT NULL,
  `cocuact` varchar(255) NOT NULL DEFAULT '0',
  `quota` varchar(255) NOT NULL DEFAULT '0',
  `path` varchar(255) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `cdate` int(11) NOT NULL DEFAULT '0',
  `udate` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (7,19007,'Khan Sunny',6,NULL,NULL,NULL,1001,'male','Islam','A-','Khan','dfsd','01768072680','93/A, Bashir Uddin Road, Kolabagan, Dhanmondi','93/A, Bashir Uddin Road, Kolabagan, Dhanmondi','N;','N;','250820191566759783','$2y$10$IWfwP68msA54NJUImDF42OedfQpt5i8j3KRpiG8KdQwQlXYb9LjTC',1,1566759782,0),(8,19008,'Khan Sunny',6,NULL,NULL,NULL,1001,'male','Hinduism','A-','Khan','dfsd','01768072680','93/A, Bashir Uddin Road, Kolabagan, Dhanmondi','93/A, Bashir Uddin Road, Kolabagan, Dhanmondi','N;','N;','250820191566760032','$2y$10$iyoeD3.e9pLN907b7KGo8uPkhGjtyHWpJy.Lhg.fnhLEcgyD48Spe',1,1566760032,0),(9,19009,'Khan Sunny',6,0,0,0,1001,'male','Islam','A+','Khan','Shema','01768072680','93/A, Bashir Uddin Road, Kolabagan, Dhanmondi','93/A, Bashir Uddin Road, Kolabagan, Dhanmondi','a:1:{i:0;s:1:\"1\";}','a:1:{i:0;s:1:\"1\";}','260820191566804043.jpg','$2y$10$.47E9KC4.FGKgoovHsBErOgsf6TV77IaM4JgX3fhTEOZQlUPalFCm',1,1566804042,0);
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject_assign`
--

DROP TABLE IF EXISTS `subject_assign`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subject_assign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classid` int(11) NOT NULL,
  `sectionid` int(11) NOT NULL,
  `groupid` int(11) NOT NULL,
  `examinationid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `fourth` int(11) NOT NULL,
  `cdate` int(11) NOT NULL,
  `udate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject_assign`
--

LOCK TABLES `subject_assign` WRITE;
/*!40000 ALTER TABLE `subject_assign` DISABLE KEYS */;
INSERT INTO `subject_assign` VALUES (1,6,0,0,1,1,70,0,1,1567267698,0);
/*!40000 ALTER TABLE `subject_assign` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `slug` varchar(20) NOT NULL,
  `cdate` int(11) NOT NULL,
  `udate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjects`
--

LOCK TABLES `subjects` WRITE;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` VALUES (1,'Bangla 1st',1,100,'banfst',1567267601,0);
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-31 22:41:22
