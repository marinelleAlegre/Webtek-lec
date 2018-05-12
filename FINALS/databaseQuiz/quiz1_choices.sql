-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: quiz1
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.31-MariaDB

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
-- Table structure for table `choices`
--

DROP TABLE IF EXISTS `choices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `choices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `choices`
--

LOCK TABLES `choices` WRITE;
/*!40000 ALTER TABLE `choices` DISABLE KEYS */;
INSERT INTO `choices` VALUES (1,1,1,'PHP: Hypertext Preprocessor'),(2,1,0,'Personal Hypertext Processor'),(3,1,0,'Private Home Page'),(4,2,0,'\"Hello World\";'),(6,2,0,'Document.Write(\"Hello World\");'),(7,2,1,'echo \"Hello World\";'),(8,3,0,'Arrays'),(9,3,1,'Strings'),(10,3,0,'Resources'),(11,3,0,'Objects'),(12,4,0,'Unlike with variables, you do not need to have a constant with a $.'),(13,4,0,'Only scalar data (boolean, integer, float and string) can be contained in constants.'),(14,4,1,'Both of the above'),(15,4,0,'None of the above.'),(16,5,1,'strlen()'),(17,5,0,'size()'),(18,5,0,'length'),(19,5,0,'None of the above.'),(20,6,1,'rsort()'),(21,6,0,'sort()\r\n'),(22,6,0,'shuffle()'),(23,6,0,'reset()\r\n'),(24,7,0,'extract()'),(25,7,1,'in_array()'),(26,7,0,'key()'),(27,7,0,'krsort()'),(28,8,0,'session_start() function'),(29,8,0,'$_SESSION[]'),(30,8,1,'isset() function'),(31,8,0,'session_destroy() function'),(32,9,0,'session_start() function'),(33,9,0,'$_SESSION[]'),(34,9,0,'isset() function'),(35,9,1,'session_destroy() function'),(36,10,1,'mysql_connect()'),(37,10,0,'mysql_query()'),(38,10,0,'mysql_close()'),(39,10,0,'None of the above');
/*!40000 ALTER TABLE `choices` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-12 14:54:33
