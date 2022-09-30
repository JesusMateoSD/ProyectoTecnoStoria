-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: bd_tecnostoria
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.24-MariaDB

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
-- Table structure for table `auditoria_tbl_agenda`
--

DROP TABLE IF EXISTS `auditoria_tbl_agenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auditoria_tbl_agenda` (
  `idauditoria_tbl_agenda` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_old` date DEFAULT NULL,
  `horag_old` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `nprofesional_old` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `dprofesional_old` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `npaciente_old` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `dpaciente_old` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `tpaciente_old` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `estado_old` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `obs_old` text CHARACTER SET latin1 DEFAULT NULL,
  `fecha_new` date DEFAULT NULL,
  `horag_new` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `nprofesional_new` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `dprofesional_new` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `npaciente_new` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `dpaciente_new` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `tpaciente_new` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `estado_new` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `obs_new` text CHARACTER SET latin1 DEFAULT NULL,
  `idauditoria` int(11) DEFAULT NULL,
  `fecha_modificacion_ag` timestamp NULL DEFAULT current_timestamp(),
  `usuario_modificacion_ag` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT 'CURRENT_USER()',
  `evento_auditoria_ag` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idauditoria_tbl_agenda`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auditoria_tbl_agenda`
--

LOCK TABLES `auditoria_tbl_agenda` WRITE;
/*!40000 ALTER TABLE `auditoria_tbl_agenda` DISABLE KEYS */;
/*!40000 ALTER TABLE `auditoria_tbl_agenda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auditoria_tbl_consultorios`
--

DROP TABLE IF EXISTS `auditoria_tbl_consultorios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auditoria_tbl_consultorios` (
  `idauditoria_tbl_consultorios` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_old` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `nit_old` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `direccion_old` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `telefono_old` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `correo_old` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `foto_old` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `creado_old` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ciudad_old` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `depto_old` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `capb_old` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `napb_old` varchar(600) CHARACTER SET latin1 DEFAULT NULL,
  `nombre_new` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `nit_new` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `direccion_new` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `telefono_new` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `correo_new` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `foto_new` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `creado_new` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ciudad_new` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `depto_new` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `capb_new` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `napb_new` varchar(600) CHARACTER SET latin1 DEFAULT NULL,
  `idauditoria` int(11) DEFAULT NULL,
  `fecha_modificacion_cn` timestamp NULL DEFAULT current_timestamp(),
  `usuario_modificacion_cn` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT 'CURRENT_USER()',
  `evento_auditoria_cn` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idauditoria_tbl_consultorios`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auditoria_tbl_consultorios`
--

LOCK TABLES `auditoria_tbl_consultorios` WRITE;
/*!40000 ALTER TABLE `auditoria_tbl_consultorios` DISABLE KEYS */;
INSERT INTO `auditoria_tbl_consultorios` VALUES (1,'Alcaldia de Girardot','123456789','Cra 10 20- 30','3205896589','ejemplo@correo.com','fotospr/java.png','2022-09-23 11:03:47','Girardot','Cundinamarca','45','sec girardot','Alcaldia de Girardot','123456789','Cra 10 20- 30','3205896589','ejemplo@correo.com','fotospr/java.png','2022-09-27 11:01:26','Girardot','Cundinamarca','40','sec girardot',5,'2022-09-27 11:01:26','root@localhost','Actualizacion de Parametros'),(2,'Alcaldia de Girardot','123456789','Cra 10 20- 30','3205896589','ejemplo@correo.com','fotospr/java.png','2022-09-27 11:01:26','Girardot','Cundinamarca','40','sec girardot','Alcaldia de Girardot','123456789','Cra 10 20- 30','3205896589','ejemplo@correo.com','fotospr/java.png','2022-09-27 11:01:44','Girardot','Cundinamarca','40','sec girardot',5,'2022-09-27 11:01:44','root@localhost','Actualizacion de Parametros'),(3,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:31:30','BOGOTA','CUNDINAMARCA','','','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:31:53','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:31:53','root@localhost','Actualizacion de Parametros'),(4,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:31:53','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:34:19','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:34:19','root@localhost','Actualizacion de Parametros'),(5,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:31:53','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:34:28','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:34:28','root@localhost','Actualizacion de Parametros'),(6,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:31:53','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:34:35','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:34:35','root@localhost','Actualizacion de Parametros'),(7,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:31:53','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:34:41','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:34:41','root@localhost','Actualizacion de Parametros'),(8,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:31:53','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:36:43','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:36:43','root@localhost','Actualizacion de Parametros'),(9,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:31:53','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:36:44','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:36:44','root@localhost','Actualizacion de Parametros'),(10,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:31:53','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:42:02','root@localhost','Actualizacion de Parametros'),(11,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:58','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:42:58','root@localhost','Actualizacion de Parametros'),(12,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:59','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:42:59','root@localhost','Actualizacion de Parametros'),(13,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:43:16','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:43:16','root@localhost','Actualizacion de Parametros'),(14,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:43:25','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:43:25','root@localhost','Actualizacion de Parametros'),(15,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:43:26','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:43:26','root@localhost','Actualizacion de Parametros'),(16,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:43:26','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:43:26','root@localhost','Actualizacion de Parametros'),(17,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:43:29','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:43:29','root@localhost','Actualizacion de Parametros'),(18,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:43:47','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:43:47','root@localhost','Actualizacion de Parametros'),(19,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:43:48','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:43:48','root@localhost','Actualizacion de Parametros'),(20,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:43:48','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:43:48','root@localhost','Actualizacion de Parametros'),(21,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:43:48','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:43:48','root@localhost','Actualizacion de Parametros'),(22,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:43:58','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:43:58','root@localhost','Actualizacion de Parametros'),(23,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:43:58','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:43:58','root@localhost','Actualizacion de Parametros'),(24,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:43:58','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:43:58','root@localhost','Actualizacion de Parametros'),(25,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:44:05','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:44:05','root@localhost','Actualizacion de Parametros'),(26,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:44:06','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:44:06','root@localhost','Actualizacion de Parametros'),(27,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:44:15','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:44:15','root@localhost','Actualizacion de Parametros'),(28,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:44:16','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:44:16','root@localhost','Actualizacion de Parametros'),(29,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:44:16','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:44:16','root@localhost','Actualizacion de Parametros'),(30,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:44:33','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:44:33','root@localhost','Actualizacion de Parametros'),(31,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:45:11','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:45:11','root@localhost','Actualizacion de Parametros'),(32,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:45:23','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:45:23','root@localhost','Actualizacion de Parametros'),(33,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:45:24','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:45:24','root@localhost','Actualizacion de Parametros'),(34,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:45:36','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:45:36','root@localhost','Actualizacion de Parametros'),(35,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:45:36','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:45:36','root@localhost','Actualizacion de Parametros'),(36,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:45:37','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:45:37','root@localhost','Actualizacion de Parametros'),(37,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:47:48','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:47:48','root@localhost','Actualizacion de Parametros'),(38,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:47:49','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:47:49','root@localhost','Actualizacion de Parametros'),(39,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:48:16','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:48:16','root@localhost','Actualizacion de Parametros'),(40,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:48:17','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:48:17','root@localhost','Actualizacion de Parametros'),(41,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:48:17','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:48:17','root@localhost','Actualizacion de Parametros'),(42,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:42:02','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:50:55','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:50:55','root@localhost','Actualizacion de Parametros'),(43,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:50:55','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:53:04','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:53:04','root@localhost','Actualizacion de Parametros'),(44,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:50:55','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:54:01','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:54:01','root@localhost','Actualizacion de Parametros'),(45,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:50:55','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:54:02','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:54:02','root@localhost','Actualizacion de Parametros'),(46,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:50:55','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:54:03','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:54:03','root@localhost','Actualizacion de Parametros'),(47,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:50:55','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:54:11','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:54:11','root@localhost','Actualizacion de Parametros'),(48,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:50:55','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:54:12','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:54:12','root@localhost','Actualizacion de Parametros'),(49,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:50:55','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:54:12','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:54:12','root@localhost','Actualizacion de Parametros'),(50,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:50:55','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:54:24','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:54:24','root@localhost','Actualizacion de Parametros'),(51,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:50:55','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:54:25','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:54:25','root@localhost','Actualizacion de Parametros'),(52,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:50:55','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:54:25','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:54:25','root@localhost','Actualizacion de Parametros'),(53,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:50:55','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:54:26','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:54:26','root@localhost','Actualizacion de Parametros'),(54,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:50:55','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:54:26','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:54:26','root@localhost','Actualizacion de Parametros'),(55,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:50:55','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:57:32','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:57:32','root@localhost','Actualizacion de Parametros'),(56,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:50:55','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:57:34','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:57:34','root@localhost','Actualizacion de Parametros'),(57,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:50:55','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:57:46','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:57:46','root@localhost','Actualizacion de Parametros'),(58,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:50:55','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:57:47','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:57:47','root@localhost','Actualizacion de Parametros'),(59,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:50:55','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 12:01:41','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 12:01:41','root@localhost','Actualizacion de Parametros'),(60,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:50:55','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 12:02:02','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 12:02:02','root@localhost','Actualizacion de Parametros'),(61,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:50:55','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 12:02:02','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 12:02:02','root@localhost','Actualizacion de Parametros'),(62,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:50:55','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 12:02:02','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 12:02:02','root@localhost','Actualizacion de Parametros'),(63,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:50:55','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 12:02:03','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 12:02:03','root@localhost','Actualizacion de Parametros'),(64,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 11:50:55','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 12:30:42','BOGOTA','CUNDINAMARCA','15','40',7,'2022-09-27 12:30:42','root@localhost','Actualizacion de Parametros'),(65,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 12:30:42','BOGOTA','CUNDINAMARCA','15','40','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 12:31:03','TOLIMA','CUNDINAMARCA','15','40',7,'2022-09-27 12:31:03','root@localhost','Actualizacion de Parametros'),(66,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 12:31:03','TOLIMA','CUNDINAMARCA','15','40','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 14:47:22','CALI','CUNDINAMARCA','15','40',7,'2022-09-27 14:47:22','root@localhost','Actualizacion de Parametros'),(67,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-27 14:47:22','CALI','CUNDINAMARCA','15','40','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-28 11:16:07','TOLIMA','CUNDINAMARCA','15','40',7,'2022-09-28 11:16:07','root@localhost','Actualizacion de Consultorios'),(68,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-28 11:16:07','TOLIMA','CUNDINAMARCA','15','40','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-28 11:17:10','BUCARAMANGA','CUNDINAMARCA','15','40',7,'2022-09-28 11:17:10','root@localhost','Actualizacion de Consultorios'),(69,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-28 11:17:10','BUCARAMANGA','CUNDINAMARCA','15','40','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-28 11:17:32','BOGOTA','CUNDINAMARCA','15','40',7,'2022-09-28 11:17:32','root@localhost','Actualizacion de Consultorios');
/*!40000 ALTER TABLE `auditoria_tbl_consultorios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auditoria_tbl_pacientes`
--

DROP TABLE IF EXISTS `auditoria_tbl_pacientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auditoria_tbl_pacientes` (
  `idauditoria_tbl_pacientes` int(11) NOT NULL AUTO_INCREMENT,
  `paciente_old` varchar(600) CHARACTER SET latin1 DEFAULT NULL,
  `tipodocumento_old` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `documento_old` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `fecha_old` date DEFAULT NULL,
  `fechan_old` date DEFAULT NULL,
  `edad_old` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `sexo_old` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `direccion_old` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `telefono_old` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `correo_old` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `ocupacion_old` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `eps_old` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `dpto_old` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `municipio_old` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `acudiente_old` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `direcciona_old` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `telefonoa_old` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `usuario_old` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `docusuario_old` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `paciente_new` varchar(600) CHARACTER SET latin1 DEFAULT NULL,
  `tipodocumento_new` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `documento_new` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `fecha_new` date DEFAULT NULL,
  `fechan_new` date DEFAULT NULL,
  `edad_new` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `sexo_new` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `direccion_new` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `telefono_new` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `correo_new` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `ocupacion_new` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `eps_new` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `dpto_new` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `municipio_new` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `acudiente_new` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `direcciona_new` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `telefonoa_new` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `usuario_new` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `docusuario_new` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `idauditoria` int(11) DEFAULT NULL,
  `fecha_modificacion_pa` timestamp NULL DEFAULT current_timestamp(),
  `usuario_modificacion_pa` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT 'CURRENT_USER()',
  `evento_auditoria_pa` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idauditoria_tbl_pacientes`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auditoria_tbl_pacientes`
--

LOCK TABLES `auditoria_tbl_pacientes` WRITE;
/*!40000 ALTER TABLE `auditoria_tbl_pacientes` DISABLE KEYS */;
INSERT INTO `auditoria_tbl_pacientes` VALUES (1,'EDGAR ALBERTO CRUZ DOMINGUEZ','CC','1736409085','2022-09-27','2010-02-11','12','M','M 35 C 25','3859710265','ejemplo2@gmail.com','Respirar','EPS Colsubsidio','47','258','NINGUNO','Ninguno','3859710265','JESUS MATEO SANCHEZ DIAZ','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,11,'2022-09-27 14:16:48','root@localhost','Eliminacion de Paciente');
/*!40000 ALTER TABLE `auditoria_tbl_pacientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auditoria_tbl_usuarios`
--

DROP TABLE IF EXISTS `auditoria_tbl_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auditoria_tbl_usuarios` (
  `idauditoria_tbl_usuarios` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_old` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `correo_old` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `clave_old` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `nivel_old` int(6) DEFAULT NULL,
  `documento_old` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `creado_old` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `registro_old` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `fecha_old` date DEFAULT NULL,
  `foto_old` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `nombre_new` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `correo_new` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `clave_new` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `nivel_new` int(6) DEFAULT NULL,
  `documento_new` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `creado_old_new` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `registro_old_new` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `fecha_old_new` date DEFAULT NULL,
  `foto_old_new` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `idauditoria` int(11) DEFAULT NULL,
  `fecha_modificacion_us` timestamp NULL DEFAULT current_timestamp(),
  `usuario_modificacion_us` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT 'CURRENT_USER()',
  `evento_auditoria_us` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idauditoria_tbl_usuarios`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auditoria_tbl_usuarios`
--

LOCK TABLES `auditoria_tbl_usuarios` WRITE;
/*!40000 ALTER TABLE `auditoria_tbl_usuarios` DISABLE KEYS */;
INSERT INTO `auditoria_tbl_usuarios` VALUES (1,'CARLOS ANTONIO MARTINEZ','mateo210904@gmail.com','$2y$10$58kLSVx1fkeH5EMTSXFvKuTrN9o28PNcV7WA0ZZCVz5DnB1lphEQO',1,'1031643818','2022-09-27 11:03:50','','0000-00-00','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,38,'2022-09-27 11:28:53','root@localhost','Eliminacion de Usuarios'),(2,'ADMIN','admin@gmail.com','$2y$10$dtMtB4L.tGxpHZr3Pv55LOICJ3uxW2DJPDiHpdpuhWFcYb1otcmJq',1,'123','2022-09-27 14:17:00','','0000-00-00','','ADMIN','admin@gmail.com','$2y$10$dtMtB4L.tGxpHZr3Pv55LOICJ3uxW2DJPDiHpdpuhWFcYb1otcmJq',1,'123','2022-09-28 13:36:34','','2022-09-26','',40,'2022-09-28 13:36:34','root@localhost','Actualizacion de Usuarios'),(3,'ADMIN','admin@gmail.com','$2y$10$dtMtB4L.tGxpHZr3Pv55LOICJ3uxW2DJPDiHpdpuhWFcYb1otcmJq',1,'123','2022-09-28 13:36:34','','2022-09-26','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,40,'2022-09-28 13:44:56','root@localhost','Eliminacion de Usuarios'),(4,'ADMIN','admin@gmail.com','$2y$10$RFtRyGRV07kANMVda.Gsf.BuZF6xB1oo/3HjBPSMQaTAZu0BCorKS',1,'123pormi','2022-09-28 13:45:06','','0000-00-00','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,41,'2022-09-28 13:46:05','root@localhost','Eliminacion de Usuarios'),(5,'ADMIN','admin@gmail.com','$2y$10$6qMUtgiUqf/iO8nRBG5/E.70SvEl1G08POXuPHIeE/0aDcEjbKmhu',1,'123pormi','2022-09-28 13:47:29','2022-09-28','0000-00-00','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,42,'2022-09-28 13:47:50','root@localhost','Eliminacion de Usuarios');
/*!40000 ALTER TABLE `auditoria_tbl_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_agenda`
--

DROP TABLE IF EXISTS `tbl_agenda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_agenda` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `horag` varchar(20) NOT NULL,
  `nprofesional` varchar(60) NOT NULL,
  `dprofesional` varchar(60) NOT NULL,
  `npaciente` varchar(60) NOT NULL,
  `dpaciente` varchar(60) NOT NULL,
  `tpaciente` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `obs` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_agenda`
--

LOCK TABLES `tbl_agenda` WRITE;
/*!40000 ALTER TABLE `tbl_agenda` DISABLE KEYS */;
INSERT INTO `tbl_agenda` VALUES (1,'2022-09-12','8:45','CAMILO CESAR DIAZ MACONDO','3338478283','JESUS MATEO SANCHEZ DIAZ','123456','3134907212','Cumplida','cvsdfsdfsd');
/*!40000 ALTER TABLE `tbl_agenda` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bd_tecnostoria`.`tbl_agenda_BEFORE_UPDATE` 
BEFORE UPDATE ON `tbl_agenda` FOR EACH ROW
BEGIN
	INSERT INTO auditoria_tbl_agenda VALUES(NULL, old.fecha, old.horag, old.nprofesional, 
    old.dprofesional, old.npaciente, old.dpaciente, old.tpaciente, old.estado, old.obs,
	new.fecha, new.horag, new.nprofesional, new.dprofesional, new.npaciente, 
    new.dpaciente, new.tpaciente, new.estado, new.obs, old.id, now(),
    current_user(), 'Actualizacion de Agenda');
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bd_tecnostoria`.`tbl_agenda_BEFORE_DELETE` 
BEFORE DELETE ON `tbl_agenda` FOR EACH ROW
BEGIN
	INSERT INTO auditoria_tbl_agenda VALUES(NULL, old.fecha, old.horag, old.nprofesional, 
    old.dprofesional, old.npaciente, old.dpaciente, old.tpaciente, old.estado, old.obs,
	NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, old.id, now(),
    current_user(), 'Actualizacion de Agenda');
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `tbl_agendap`
--

DROP TABLE IF EXISTS `tbl_agendap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_agendap` (
  `idh` int(30) NOT NULL,
  `hora` varchar(30) NOT NULL,
  `id` varchar(30) DEFAULT NULL,
  `fecha` varchar(30) DEFAULT NULL,
  `hora1` varchar(30) DEFAULT NULL,
  `nprofesional` varchar(300) DEFAULT NULL,
  `dprofesional` varchar(60) DEFAULT NULL,
  `npaciente` varchar(300) DEFAULT NULL,
  `dpaciente` varchar(60) DEFAULT NULL,
  `tpaciente` varchar(100) DEFAULT NULL,
  `estado` varchar(60) DEFAULT NULL,
  `obs` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_agendap`
--

LOCK TABLES `tbl_agendap` WRITE;
/*!40000 ALTER TABLE `tbl_agendap` DISABLE KEYS */;
INSERT INTO `tbl_agendap` VALUES (1,'8:00','','','','','','','','','',''),(2,'8:15','','','','','','','','','',''),(3,'8:30','','','','','','','','','',''),(4,'8:45','','','','','','','','','',''),(5,'9:00','','','','','','','','','',''),(6,'9:15','','','','','','','','','',''),(7,'9:30','','','','','','','','','',''),(8,'9:45','','','','','','','','','',''),(9,'10:00','','','','','','','','','',''),(10,'10:15','','','','','','','','','',''),(11,'10:30','','','','','','','','','',''),(12,'10:15','','','','','','','','','',''),(13,'11:00','','','','','','','','','',''),(14,'11:15','','','','','','','','','',''),(15,'11:30','','','','','','','','','',''),(16,'11:45','','','','','','','','','',''),(17,'12:00','','','','','','','','','',''),(18,'12:15','','','','','','','','','',''),(19,'12:30','','','','','','','','','',''),(20,'12:45','','','','','','','','','',''),(21,'13:00','','','','','','','','','',''),(22,'13:15','','','','','','','','','',''),(23,'13:30','','','','','','','','','',''),(24,'13:45','','','','','','','','','',''),(25,'14:00','','','','','','','','','',''),(26,'14:15','','','','','','','','','',''),(27,'14:30','','','','','','','','','',''),(28,'14:45','','','','','','','','','',''),(29,'15:00','','','','','','','','','',''),(30,'15:15','','','','','','','','','',''),(31,'15:30','','','','','','','','','',''),(32,'15:45','','','','','','','','','',''),(33,'16:00','','','','','','','','','',''),(34,'16:15','','','','','','','','','',''),(35,'16:30','','','','','','','','','',''),(36,'16:45','','','','','','','','','',''),(37,'17:00','','','','','','','','','',''),(38,'17:15','','','','','','','','','',''),(39,'17:30','','','','','','','','','',''),(40,'17:45','','','','','','','','','',''),(41,'18:00','','','','','','','','','',''),(42,'18:15','','','','','','','','','',''),(43,'18:30','','','','','','','','','',''),(44,'18:45','','','','','','','','','',''),(45,'19:00','','','','','','','','','',''),(46,'19:15','','','','','','','','','',''),(47,'19:30','','','','','','','','','',''),(48,'19:45','','','','','','','','','',''),(49,'20:00','','','','','','','','','',''),(50,'20:15','','','','','','','','','',''),(51,'20:30','','','','','','','','','',''),(52,'20:45','','','','','','','','','',''),(53,'21:00','','','','','','','','','','');
/*!40000 ALTER TABLE `tbl_agendap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_consultorios`
--

DROP TABLE IF EXISTS `tbl_consultorios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_consultorios` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) NOT NULL,
  `nit` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ciudad` varchar(300) NOT NULL,
  `depto` varchar(300) NOT NULL,
  `capb` varchar(100) NOT NULL,
  `napb` varchar(600) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_consultorios`
--

LOCK TABLES `tbl_consultorios` WRITE;
/*!40000 ALTER TABLE `tbl_consultorios` DISABLE KEYS */;
INSERT INTO `tbl_consultorios` VALUES (5,'Alcaldia de Girardot','123456789','Cra 10 20- 30','3205896589','ejemplo@correo.com','fotospr/java.png','2022-09-27 11:01:26','Girardot','Cundinamarca','40','sec girardot'),(7,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-09-28 11:17:32','BOGOTA','CUNDINAMARCA','15','40');
/*!40000 ALTER TABLE `tbl_consultorios` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bd_tecnostoria`.`tbl_consultorios_BEFORE_UPDATE` 
BEFORE UPDATE ON `tbl_consultorios` FOR EACH ROW
BEGIN
	INSERT INTO auditoria_tbl_consultorios VALUES(NULL, old.nombre, old.nit, 
    old.direccion, old.telefono, old.correo, old.foto, old.creado, old.ciudad, old.depto,
    old.capb, old.napb,	new.nombre, new.nit, new.direccion, new.telefono, new.correo, 
    new.foto, new.creado, new.ciudad, new.depto, new.capb, new.napb,
    old.id, now(), current_user(), 'Actualizacion de Consultorios');
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bd_tecnostoria`.`tbl_consultorios_BEFORE_DELETE` 
BEFORE DELETE ON `tbl_consultorios` FOR EACH ROW
BEGIN
	INSERT INTO auditoria_tbl_consultorios VALUES(NULL, old.nombre, old.nit, 
    old.direccion, old.telefono, old.correo, old.foto, old.creado, old.ciudad, old.depto,
    old.capb, old.napb,	NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,
    old.id, now(), current_user(), 'Eliminacion de Consultorios');
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `tbl_departamentos`
--

DROP TABLE IF EXISTS `tbl_departamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_departamentos` (
  `id_departamento` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `departamento` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_departamento`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_departamentos`
--

LOCK TABLES `tbl_departamentos` WRITE;
/*!40000 ALTER TABLE `tbl_departamentos` DISABLE KEYS */;
INSERT INTO `tbl_departamentos` VALUES (8,'ATLÁNTICO'),(5,'ANTIOQUIA'),(13,'BOLÍVAR'),(15,'BOYACÁ'),(17,'CALDAS'),(18,'CAQUETÁ'),(19,'CAUCA'),(20,'CESAR'),(23,'CÓRDOBA'),(25,'CUNDINAMARCA'),(27,'CHOCÓ'),(41,'HUILA'),(44,'LA GUAJIRA'),(47,'MAGDALENA'),(50,'META'),(52,'NARIÑO'),(54,'NORTE DE SANTANDER'),(63,'QUINDIO'),(66,'RISARALDA'),(68,'SANTANDER'),(70,'SUCRE'),(73,'TOLIMA'),(76,'VALLE DEL CAUCA'),(81,'ARAUCA'),(85,'CASANARE'),(86,'PUTUMAYO'),(88,'ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA'),(91,'AMAZONAS'),(94,'GUAINÍA'),(95,'GUAVIARE'),(97,'VAUPÉS'),(99,'VICHADA'),(11,'BOGOTA D.C');
/*!40000 ALTER TABLE `tbl_departamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_horas`
--

DROP TABLE IF EXISTS `tbl_horas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_horas` (
  `idh` int(30) NOT NULL AUTO_INCREMENT,
  `hora` varchar(30) NOT NULL,
  PRIMARY KEY (`idh`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_horas`
--

LOCK TABLES `tbl_horas` WRITE;
/*!40000 ALTER TABLE `tbl_horas` DISABLE KEYS */;
INSERT INTO `tbl_horas` VALUES (1,'8:00'),(2,'8:15'),(3,'8:30'),(4,'8:45'),(5,'9:00'),(6,'9:15'),(7,'9:30'),(8,'9:45'),(9,'10:00'),(10,'10:15'),(11,'10:30'),(12,'10:15'),(13,'11:00'),(14,'11:15'),(15,'11:30'),(16,'11:45'),(17,'12:00'),(18,'12:15'),(19,'12:30'),(20,'12:45'),(21,'13:00'),(22,'13:15'),(23,'13:30'),(24,'13:45'),(25,'14:00'),(26,'14:15'),(27,'14:30'),(28,'14:45'),(29,'15:00'),(30,'15:15'),(31,'15:30'),(32,'15:45'),(33,'16:00'),(34,'16:15'),(35,'16:30'),(36,'16:45'),(37,'17:00'),(38,'17:15'),(39,'17:30'),(40,'17:45'),(41,'18:00'),(42,'18:15'),(43,'18:30'),(44,'18:45'),(45,'19:00'),(46,'19:15'),(47,'19:30'),(48,'19:45'),(49,'20:00'),(50,'20:15'),(51,'20:30'),(52,'20:45'),(53,'21:00');
/*!40000 ALTER TABLE `tbl_horas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_municipios`
--

DROP TABLE IF EXISTS `tbl_municipios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_municipios` (
  `id_municipio` int(6) unsigned NOT NULL,
  `municipio` varchar(255) NOT NULL DEFAULT '',
  `id_departamento` int(2) unsigned NOT NULL,
  KEY `departamento_id` (`id_departamento`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_municipios`
--

LOCK TABLES `tbl_municipios` WRITE;
/*!40000 ALTER TABLE `tbl_municipios` DISABLE KEYS */;
INSERT INTO `tbl_municipios` VALUES (1,'MEDELLIN',5),(2,'ABEJORRAL',5),(4,'ABRIAQUI',5),(21,'ALEJANDRIA',5),(30,'AMAGA',5),(31,'AMALFI',5),(34,'ANDES',5),(36,'ANGELOPOLIS',5),(38,'ANGOSTURA',5),(40,'ANORI',5),(42,'SANTAFE DE ANTIOQUIA',5),(44,'ANZA',5),(45,'APARTADO',5),(51,'ARBOLETES',5),(55,'ARGELIA',5),(59,'ARMENIA',5),(79,'BARBOSA',5),(86,'BELMIRA',5),(88,'BELLO',5),(91,'BETANIA',5),(93,'BETULIA',5),(101,'CIUDAD BOLIVAR',5),(107,'BRICE',5),(113,'BURITICA',5),(120,'CACERES',5),(125,'CAICEDO',5),(129,'CALDAS',5),(134,'CAMPAMENTO',5),(138,'CA',5),(142,'CARACOLI',5),(145,'CARAMANTA',5),(147,'CAREPA',5),(148,'EL CARMEN DE VIBORAL',5),(150,'CAROLINA',5),(154,'CAUCASIA',5),(172,'CHIGORODO',5),(190,'CISNEROS',5),(197,'COCORNA',5),(206,'CONCEPCION',5),(209,'CONCORDIA',5),(212,'COPACABANA',5),(234,'DABEIBA',5),(237,'DON MATIAS',5),(240,'EBEJICO',5),(250,'EL BAGRE',5),(264,'ENTRERRIOS',5),(266,'ENVIGADO',5),(282,'FREDONIA',5),(284,'FRONTINO',5),(306,'GIRALDO',5),(308,'GIRARDOTA',5),(310,'GOMEZ PLATA',5),(313,'GRANADA',5),(315,'GUADALUPE',5),(318,'GUARNE',5),(321,'GUATAPE',5),(347,'HELICONIA',5),(353,'HISPANIA',5),(360,'ITAGUI',5),(361,'ITUANGO',5),(364,'JARDIN',5),(368,'JERICO',5),(376,'LA CEJA',5),(380,'LA ESTRELLA',5),(390,'LA PINTADA',5),(400,'LA UNION',5),(411,'LIBORINA',5),(425,'MACEO',5),(440,'MARINILLA',5),(467,'MONTEBELLO',5),(475,'MURINDO',5),(480,'MUTATA',5),(483,'NARI',5),(490,'NECOCLI',5),(495,'NECHI',5),(501,'OLAYA',5),(541,'PE',5),(543,'PEQUE',5),(576,'PUEBLORRICO',5),(579,'PUERTO BERRIO',5),(585,'PUERTO NARE',5),(591,'PUERTO TRIUNFO',5),(604,'REMEDIOS',5),(607,'RETIRO',5),(615,'RIONEGRO',5),(628,'SABANALARGA',5),(631,'SABANETA',5),(642,'SALGAR',5),(647,'SAN ANDRES DE CUERQUIA',5),(649,'SAN CARLOS',5),(652,'SAN FRANCISCO',5),(656,'SAN JERONIMO',5),(658,'SAN JOSE DE LA MONTA',5),(659,'SAN JUAN DE URABA',5),(660,'SAN LUIS',5),(664,'SAN PEDRO',5),(665,'SAN PEDRO DE URABA',5),(667,'SAN RAFAEL',5),(670,'SAN ROQUE',5),(674,'SAN VICENTE',5),(679,'SANTA BARBARA',5),(686,'SANTA ROSA DE OSOS',5),(690,'SANTO DOMINGO',5),(697,'EL SANTUARIO',5),(736,'SEGOVIA',5),(756,'SONSON',5),(761,'SOPETRAN',5),(789,'TAMESIS',5),(790,'TARAZA',5),(792,'TARSO',5),(809,'TITIRIBI',5),(819,'TOLEDO',5),(837,'TURBO',5),(842,'URAMITA',5),(847,'URRAO',5),(854,'VALDIVIA',5),(856,'VALPARAISO',5),(858,'VEGACHI',5),(861,'VENECIA',5),(873,'VIGIA DEL FUERTE',5),(885,'YALI',5),(887,'YARUMAL',5),(890,'YOLOMBO',5),(893,'YONDO',5),(895,'ZARAGOZA',5),(1,'BARRANQUILLA',8),(78,'BARANOA',8),(137,'CAMPO DE LA CRUZ',8),(141,'CANDELARIA',8),(296,'GALAPA',8),(372,'JUAN DE ACOSTA',8),(421,'LURUACO',8),(433,'MALAMBO',8),(436,'MANATI',8),(520,'PALMAR DE VARELA',8),(549,'PIOJO',8),(558,'POLONUEVO',8),(560,'PONEDERA',8),(573,'PUERTO COLOMBIA',8),(606,'REPELON',8),(634,'SABANAGRANDE',8),(638,'SABANALARGA',8),(675,'SANTA LUCIA',8),(685,'SANTO TOMAS',8),(758,'SOLEDAD',8),(770,'SUAN',8),(832,'TUBARA',8),(849,'USIACURI',8),(1,'BOGOTA, D.C.',11),(1,'CARTAGENA',13),(6,'ACHI',13),(30,'ALTOS DEL ROSARIO',13),(42,'ARENAL',13),(52,'ARJONA',13),(62,'ARROYOHONDO',13),(74,'BARRANCO DE LOBA',13),(140,'CALAMAR',13),(160,'CANTAGALLO',13),(188,'CICUCO',13),(212,'CORDOBA',13),(222,'CLEMENCIA',13),(244,'EL CARMEN DE BOLIVAR',13),(248,'EL GUAMO',13),(268,'EL PE',13),(300,'HATILLO DE LOBA',13),(430,'MAGANGUE',13),(433,'MAHATES',13),(440,'MARGARITA',13),(442,'MARIA LA BAJA',13),(458,'MONTECRISTO',13),(468,'MOMPOS',13),(490,'NOROSI',13),(473,'MORALES',13),(549,'PINILLOS',13),(580,'REGIDOR',13),(600,'RIO VIEJO',13),(620,'SAN CRISTOBAL',13),(647,'SAN ESTANISLAO',13),(650,'SAN FERNANDO',13),(654,'SAN JACINTO',13),(655,'SAN JACINTO DEL CAUCA',13),(657,'SAN JUAN NEPOMUCENO',13),(667,'SAN MARTIN DE LOBA',13),(670,'SAN PABLO',13),(673,'SANTA CATALINA',13),(683,'SANTA ROSA',13),(688,'SANTA ROSA DEL SUR',13),(744,'SIMITI',13),(760,'SOPLAVIENTO',13),(780,'TALAIGUA NUEVO',13),(810,'TIQUISIO',13),(836,'TURBACO',13),(838,'TURBANA',13),(873,'VILLANUEVA',13),(894,'ZAMBRANO',13),(1,'TUNJA',15),(22,'ALMEIDA',15),(47,'AQUITANIA',15),(51,'ARCABUCO',15),(87,'BELEN',15),(90,'BERBEO',15),(92,'BETEITIVA',15),(97,'BOAVITA',15),(104,'BOYACA',15),(106,'BRICE',15),(109,'BUENAVISTA',15),(114,'BUSBANZA',15),(131,'CALDAS',15),(135,'CAMPOHERMOSO',15),(162,'CERINZA',15),(172,'CHINAVITA',15),(176,'CHIQUINQUIRA',15),(180,'CHISCAS',15),(183,'CHITA',15),(185,'CHITARAQUE',15),(187,'CHIVATA',15),(189,'CIENEGA',15),(204,'COMBITA',15),(212,'COPER',15),(215,'CORRALES',15),(218,'COVARACHIA',15),(223,'CUBARA',15),(224,'CUCAITA',15),(226,'CUITIVA',15),(232,'CHIQUIZA',15),(236,'CHIVOR',15),(238,'DUITAMA',15),(244,'EL COCUY',15),(248,'EL ESPINO',15),(272,'FIRAVITOBA',15),(276,'FLORESTA',15),(293,'GACHANTIVA',15),(296,'GAMEZA',15),(299,'GARAGOA',15),(317,'GUACAMAYAS',15),(322,'GUATEQUE',15),(325,'GUAYATA',15),(332,'GsICAN',15),(362,'IZA',15),(367,'JENESANO',15),(368,'JERICO',15),(377,'LABRANZAGRANDE',15),(380,'LA CAPILLA',15),(401,'LA VICTORIA',15),(403,'LA UVITA',15),(407,'VILLA DE LEYVA',15),(425,'MACANAL',15),(442,'MARIPI',15),(455,'MIRAFLORES',15),(464,'MONGUA',15),(466,'MONGUI',15),(469,'MONIQUIRA',15),(476,'MOTAVITA',15),(480,'MUZO',15),(491,'NOBSA',15),(494,'NUEVO COLON',15),(500,'OICATA',15),(507,'OTANCHE',15),(511,'PACHAVITA',15),(514,'PAEZ',15),(516,'PAIPA',15),(518,'PAJARITO',15),(522,'PANQUEBA',15),(531,'PAUNA',15),(533,'PAYA',15),(537,'PAZ DE RIO',15),(542,'PESCA',15),(550,'PISBA',15),(572,'PUERTO BOYACA',15),(580,'QUIPAMA',15),(599,'RAMIRIQUI',15),(600,'RAQUIRA',15),(621,'RONDON',15),(632,'SABOYA',15),(638,'SACHICA',15),(646,'SAMACA',15),(660,'SAN EDUARDO',15),(664,'SAN JOSE DE PARE',15),(667,'SAN LUIS DE GACENO',15),(673,'SAN MATEO',15),(676,'SAN MIGUEL DE SEMA',15),(681,'SAN PABLO DE BORBUR',15),(686,'SANTANA',15),(690,'SANTA MARIA',15),(693,'SANTA ROSA DE VITERBO',15),(696,'SANTA SOFIA',15),(720,'SATIVANORTE',15),(723,'SATIVASUR',15),(740,'SIACHOQUE',15),(753,'SOATA',15),(755,'SOCOTA',15),(757,'SOCHA',15),(759,'SOGAMOSO',15),(761,'SOMONDOCO',15),(762,'SORA',15),(763,'SOTAQUIRA',15),(764,'SORACA',15),(774,'SUSACON',15),(776,'SUTAMARCHAN',15),(778,'SUTATENZA',15),(790,'TASCO',15),(798,'TENZA',15),(804,'TIBANA',15),(806,'TIBASOSA',15),(808,'TINJACA',15),(810,'TIPACOQUE',15),(814,'TOCA',15),(816,'TOGsI',15),(820,'TOPAGA',15),(822,'TOTA',15),(832,'TUNUNGUA',15),(835,'TURMEQUE',15),(837,'TUTA',15),(839,'TUTAZA',15),(842,'UMBITA',15),(861,'VENTAQUEMADA',15),(879,'VIRACACHA',15),(897,'ZETAQUIRA',15),(1,'MANIZALES',17),(13,'AGUADAS',17),(42,'ANSERMA',17),(50,'ARANZAZU',17),(88,'BELALCAZAR',17),(174,'CHINCHINA',17),(272,'FILADELFIA',17),(380,'LA DORADA',17),(388,'LA MERCED',17),(433,'MANZANARES',17),(442,'MARMATO',17),(444,'MARQUETALIA',17),(446,'MARULANDA',17),(486,'NEIRA',17),(495,'NORCASIA',17),(513,'PACORA',17),(524,'PALESTINA',17),(541,'PENSILVANIA',17),(614,'RIOSUCIO',17),(616,'RISARALDA',17),(653,'SALAMINA',17),(662,'SAMANA',17),(665,'SAN JOSE',17),(777,'SUPIA',17),(867,'VICTORIA',17),(873,'VILLAMARIA',17),(877,'VITERBO',17),(1,'FLORENCIA',18),(29,'ALBANIA',18),(94,'BELEN DE LOS ANDAQUIES',18),(150,'CARTAGENA DEL CHAIRA',18),(205,'CURILLO',18),(247,'EL DONCELLO',18),(256,'EL PAUJIL',18),(410,'LA MONTA',18),(460,'MILAN',18),(479,'MORELIA',18),(592,'PUERTO RICO',18),(610,'SAN JOSE DEL FRAGUA',18),(753,'SAN VICENTE DEL CAGUAN',18),(756,'SOLANO',18),(785,'SOLITA',18),(860,'VALPARAISO',18),(1,'POPAYAN',19),(22,'ALMAGUER',19),(50,'ARGELIA',19),(75,'BALBOA',19),(100,'BOLIVAR',19),(110,'BUENOS AIRES',19),(130,'CAJIBIO',19),(137,'CALDONO',19),(142,'CALOTO',19),(212,'CORINTO',19),(256,'EL TAMBO',19),(290,'FLORENCIA',19),(300,'GUACHENE',19),(318,'GUAPI',19),(355,'INZA',19),(364,'JAMBALO',19),(392,'LA SIERRA',19),(397,'LA VEGA',19),(418,'LOPEZ',19),(450,'MERCADERES',19),(455,'MIRANDA',19),(473,'MORALES',19),(513,'PADILLA',19),(517,'PAEZ',19),(532,'PATIA',19),(533,'PIAMONTE',19),(548,'PIENDAMO',19),(573,'PUERTO TEJADA',19),(585,'PURACE',19),(622,'ROSAS',19),(693,'SAN SEBASTIAN',19),(698,'SANTANDER DE QUILICHAO',19),(701,'SANTA ROSA',19),(743,'SILVIA',19),(760,'SOTARA',19),(780,'SUAREZ',19),(785,'SUCRE',19),(807,'TIMBIO',19),(809,'TIMBIQUI',19),(821,'TORIBIO',19),(824,'TOTORO',19),(845,'VILLA RICA',19),(1,'VALLEDUPAR',20),(11,'AGUACHICA',20),(13,'AGUSTIN CODAZZI',20),(32,'ASTREA',20),(45,'BECERRIL',20),(60,'BOSCONIA',20),(175,'CHIMICHAGUA',20),(178,'CHIRIGUANA',20),(228,'CURUMANI',20),(238,'EL COPEY',20),(250,'EL PASO',20),(295,'GAMARRA',20),(310,'GONZALEZ',20),(383,'LA GLORIA',20),(400,'LA JAGUA DE IBIRICO',20),(443,'MANAURE',20),(517,'PAILITAS',20),(550,'PELAYA',20),(570,'PUEBLO BELLO',20),(614,'RIO DE ORO',20),(621,'LA PAZ',20),(710,'SAN ALBERTO',20),(750,'SAN DIEGO',20),(770,'SAN MARTIN',20),(787,'TAMALAMEQUE',20),(1,'MONTERIA',23),(68,'AYAPEL',23),(79,'BUENAVISTA',23),(90,'CANALETE',23),(162,'CERETE',23),(168,'CHIMA',23),(182,'CHINU',23),(189,'CIENAGA DE ORO',23),(300,'COTORRA',23),(350,'LA APARTADA',23),(417,'LORICA',23),(419,'LOS CORDOBAS',23),(464,'MOMIL',23),(466,'MONTELIBANO',23),(500,'MO',23),(555,'PLANETA RICA',23),(570,'PUEBLO NUEVO',23),(574,'PUERTO ESCONDIDO',23),(580,'PUERTO LIBERTADOR',23),(586,'PURISIMA',23),(660,'SAHAGUN',23),(670,'SAN ANDRES SOTAVENTO',23),(672,'SAN ANTERO',23),(675,'SAN BERNARDO DEL VIENTO',23),(678,'SAN CARLOS',23),(686,'SAN PELAYO',23),(807,'TIERRALTA',23),(855,'VALENCIA',23),(1,'AGUA DE DIOS',25),(19,'ALBAN',25),(35,'ANAPOIMA',25),(40,'ANOLAIMA',25),(53,'ARBELAEZ',25),(86,'BELTRAN',25),(95,'BITUIMA',25),(99,'BOJACA',25),(120,'CABRERA',25),(123,'CACHIPAY',25),(126,'CAJICA',25),(148,'CAPARRAPI',25),(151,'CAQUEZA',25),(154,'CARMEN DE CARUPA',25),(168,'CHAGUANI',25),(175,'CHIA',25),(178,'CHIPAQUE',25),(181,'CHOACHI',25),(183,'CHOCONTA',25),(200,'COGUA',25),(214,'COTA',25),(224,'CUCUNUBA',25),(245,'EL COLEGIO',25),(258,'EL PE',25),(260,'EL ROSAL',25),(269,'FACATATIVA',25),(279,'FOMEQUE',25),(281,'FOSCA',25),(286,'FUNZA',25),(288,'FUQUENE',25),(290,'FUSAGASUGA',25),(293,'GACHALA',25),(295,'GACHANCIPA',25),(297,'GACHETA',25),(299,'GAMA',25),(307,'GIRARDOT',25),(312,'GRANADA',25),(317,'GUACHETA',25),(320,'GUADUAS',25),(322,'GUASCA',25),(324,'GUATAQUI',25),(326,'GUATAVITA',25),(328,'GUAYABAL DE SIQUIMA',25),(335,'GUAYABETAL',25),(339,'GUTIERREZ',25),(368,'JERUSALEN',25),(372,'JUNIN',25),(377,'LA CALERA',25),(386,'LA MESA',25),(394,'LA PALMA',25),(398,'LA PE',25),(402,'LA VEGA',25),(407,'LENGUAZAQUE',25),(426,'MACHETA',25),(430,'MADRID',25),(436,'MANTA',25),(438,'MEDINA',25),(473,'MOSQUERA',25),(483,'NARI',25),(486,'NEMOCON',25),(488,'NILO',25),(489,'NIMAIMA',25),(491,'NOCAIMA',25),(506,'VENECIA',25),(513,'PACHO',25),(518,'PAIME',25),(524,'PANDI',25),(530,'PARATEBUENO',25),(535,'PASCA',25),(572,'PUERTO SALGAR',25),(580,'PULI',25),(592,'QUEBRADANEGRA',25),(594,'QUETAME',25),(596,'QUIPILE',25),(599,'APULO',25),(612,'RICAURTE',25),(645,'SAN ANTONIO DEL TEQUENDAMA',25),(649,'SAN BERNARDO',25),(653,'SAN CAYETANO',25),(658,'SAN FRANCISCO',25),(662,'SAN JUAN DE RIO SECO',25),(718,'SASAIMA',25),(736,'SESQUILE',25),(740,'SIBATE',25),(743,'SILVANIA',25),(745,'SIMIJACA',25),(754,'SOACHA',25),(758,'SOPO',25),(769,'SUBACHOQUE',25),(772,'SUESCA',25),(777,'SUPATA',25),(779,'SUSA',25),(781,'SUTATAUSA',25),(785,'TABIO',25),(793,'TAUSA',25),(797,'TENA',25),(799,'TENJO',25),(805,'TIBACUY',25),(807,'TIBIRITA',25),(815,'TOCAIMA',25),(817,'TOCANCIPA',25),(823,'TOPAIPI',25),(839,'UBALA',25),(841,'UBAQUE',25),(843,'VILLA DE SAN DIEGO DE UBATE',25),(845,'UNE',25),(851,'UTICA',25),(862,'VERGARA',25),(867,'VIANI',25),(871,'VILLAGOMEZ',25),(873,'VILLAPINZON',25),(875,'VILLETA',25),(878,'VIOTA',25),(885,'YACOPI',25),(898,'ZIPACON',25),(899,'ZIPAQUIRA',25),(1,'QUIBDO',27),(6,'ACANDI',27),(25,'ALTO BAUDO',27),(50,'ATRATO',27),(73,'BAGADO',27),(75,'BAHIA SOLANO',27),(77,'BAJO BAUDO',27),(99,'BOJAYA',27),(135,'EL CANTON DEL SAN PABLO',27),(150,'CARMEN DEL DARIEN',27),(160,'CERTEGUI',27),(205,'CONDOTO',27),(245,'EL CARMEN DE ATRATO',27),(250,'EL LITORAL DEL SAN JUAN',27),(361,'ISTMINA',27),(372,'JURADO',27),(413,'LLORO',27),(425,'MEDIO ATRATO',27),(430,'MEDIO BAUDO',27),(450,'MEDIO SAN JUAN',27),(491,'NOVITA',27),(495,'NUQUI',27),(580,'RIO IRO',27),(600,'RIO QUITO',27),(615,'RIOSUCIO',27),(660,'SAN JOSE DEL PALMAR',27),(745,'SIPI',27),(787,'TADO',27),(800,'UNGUIA',27),(810,'UNION PANAMERICANA',27),(1,'NEIVA',41),(6,'ACEVEDO',41),(13,'AGRADO',41),(16,'AIPE',41),(20,'ALGECIRAS',41),(26,'ALTAMIRA',41),(78,'BARAYA',41),(132,'CAMPOALEGRE',41),(206,'COLOMBIA',41),(244,'ELIAS',41),(298,'GARZON',41),(306,'GIGANTE',41),(319,'GUADALUPE',41),(349,'HOBO',41),(357,'IQUIRA',41),(359,'ISNOS',41),(378,'LA ARGENTINA',41),(396,'LA PLATA',41),(483,'NATAGA',41),(503,'OPORAPA',41),(518,'PAICOL',41),(524,'PALERMO',41),(530,'PALESTINA',41),(548,'PITAL',41),(551,'PITALITO',41),(615,'RIVERA',41),(660,'SALADOBLANCO',41),(668,'SAN AGUSTIN',41),(676,'SANTA MARIA',41),(770,'SUAZA',41),(791,'TARQUI',41),(797,'TESALIA',41),(799,'TELLO',41),(801,'TERUEL',41),(807,'TIMANA',41),(872,'VILLAVIEJA',41),(885,'YAGUARA',41),(1,'RIOHACHA',44),(35,'ALBANIA',44),(78,'BARRANCAS',44),(90,'DIBULLA',44),(98,'DISTRACCION',44),(110,'EL MOLINO',44),(279,'FONSECA',44),(378,'HATONUEVO',44),(420,'LA JAGUA DEL PILAR',44),(430,'MAICAO',44),(560,'MANAURE',44),(650,'SAN JUAN DEL CESAR',44),(847,'URIBIA',44),(855,'URUMITA',44),(874,'VILLANUEVA',44),(1,'SANTA MARTA',47),(30,'ALGARROBO',47),(53,'ARACATACA',47),(58,'ARIGUANI',47),(161,'CERRO SAN ANTONIO',47),(170,'CHIBOLO',47),(189,'CIENAGA',47),(205,'CONCORDIA',47),(245,'EL BANCO',47),(258,'EL PI',47),(268,'EL RETEN',47),(288,'FUNDACION',47),(318,'GUAMAL',47),(460,'NUEVA GRANADA',47),(541,'PEDRAZA',47),(545,'PIJI',47),(551,'PIVIJAY',47),(555,'PLATO',47),(570,'PUEBLOVIEJO',47),(605,'REMOLINO',47),(660,'SABANAS DE SAN ANGEL',47),(675,'SALAMINA',47),(692,'SAN SEBASTIAN DE BUENAVISTA',47),(703,'SAN ZENON',47),(707,'SANTA ANA',47),(720,'SANTA BARBARA DE PINTO',47),(745,'SITIONUEVO',47),(798,'TENERIFE',47),(960,'ZAPAYAN',47),(980,'ZONA BANANERA',47),(1,'VILLAVICENCIO',50),(6,'ACACIAS',50),(110,'BARRANCA DE UPIA',50),(124,'CABUYARO',50),(150,'CASTILLA LA NUEVA',50),(223,'CUBARRAL',50),(226,'CUMARAL',50),(245,'EL CALVARIO',50),(251,'EL CASTILLO',50),(270,'EL DORADO',50),(287,'FUENTE DE ORO',50),(313,'GRANADA',50),(318,'GUAMAL',50),(325,'MAPIRIPAN',50),(330,'MESETAS',50),(350,'LA MACARENA',50),(370,'URIBE',50),(400,'LEJANIAS',50),(450,'PUERTO CONCORDIA',50),(568,'PUERTO GAITAN',50),(573,'PUERTO LOPEZ',50),(577,'PUERTO LLERAS',50),(590,'PUERTO RICO',50),(606,'RESTREPO',50),(680,'SAN CARLOS DE GUAROA',50),(683,'SAN JUAN DE ARAMA',50),(686,'SAN JUANITO',50),(689,'SAN MARTIN',50),(711,'VISTAHERMOSA',50),(1,'PASTO',52),(19,'ALBAN',52),(22,'ALDANA',52),(36,'ANCUYA',52),(51,'ARBOLEDA',52),(79,'BARBACOAS',52),(83,'BELEN',52),(110,'BUESACO',52),(203,'COLON',52),(207,'CONSACA',52),(210,'CONTADERO',52),(215,'CORDOBA',52),(224,'CUASPUD',52),(227,'CUMBAL',52),(233,'CUMBITARA',52),(240,'CHACHAGsI',52),(250,'EL CHARCO',52),(254,'EL PE',52),(256,'EL ROSARIO',52),(258,'EL TABLON DE GOMEZ',52),(260,'EL TAMBO',52),(287,'FUNES',52),(317,'GUACHUCAL',52),(320,'GUAITARILLA',52),(323,'GUALMATAN',52),(352,'ILES',52),(354,'IMUES',52),(356,'IPIALES',52),(378,'LA CRUZ',52),(381,'LA FLORIDA',52),(385,'LA LLANADA',52),(390,'LA TOLA',52),(399,'LA UNION',52),(405,'LEIVA',52),(411,'LINARES',52),(418,'LOS ANDES',52),(427,'MAGsI',52),(435,'MALLAMA',52),(473,'MOSQUERA',52),(480,'NARI',52),(490,'OLAYA HERRERA',52),(506,'OSPINA',52),(520,'FRANCISCO PIZARRO',52),(540,'POLICARPA',52),(560,'POTOSI',52),(565,'PROVIDENCIA',52),(573,'PUERRES',52),(585,'PUPIALES',52),(621,'ROBERTO PAYAN',52),(678,'SAMANIEGO',52),(683,'SANDONA',52),(685,'SAN BERNARDO',52),(687,'SAN LORENZO',52),(693,'SAN PABLO',52),(694,'SAN PEDRO DE CARTAGO',52),(696,'SANTA BARBARA',52),(699,'SANTACRUZ',52),(720,'SAPUYES',52),(786,'TAMINANGO',52),(788,'TANGUA',52),(835,'SAN ANDRES DE TUMACO',52),(838,'TUQUERRES',52),(885,'YACUANQUER',52),(1,'CUCUTA',54),(3,'ABREGO',54),(51,'ARBOLEDAS',54),(99,'BOCHALEMA',54),(109,'BUCARASICA',54),(125,'CACOTA',54),(128,'CACHIRA',54),(172,'CHINACOTA',54),(174,'CHITAGA',54),(206,'CONVENCION',54),(223,'CUCUTILLA',54),(239,'DURANIA',54),(245,'EL CARMEN',54),(250,'EL TARRA',54),(261,'EL ZULIA',54),(313,'GRAMALOTE',54),(344,'HACARI',54),(347,'HERRAN',54),(377,'LABATECA',54),(385,'LA ESPERANZA',54),(398,'LA PLAYA',54),(405,'LOS PATIOS',54),(418,'LOURDES',54),(480,'MUTISCUA',54),(498,'OCA',54),(518,'PAMPLONA',54),(520,'PAMPLONITA',54),(553,'PUERTO SANTANDER',54),(599,'RAGONVALIA',54),(660,'SALAZAR',54),(670,'SAN CALIXTO',54),(673,'SAN CAYETANO',54),(680,'SANTIAGO',54),(720,'SARDINATA',54),(743,'SILOS',54),(800,'TEORAMA',54),(810,'TIBU',54),(820,'TOLEDO',54),(871,'VILLA CARO',54),(874,'VILLA DEL ROSARIO',54),(1,'ARMENIA',63),(111,'BUENAVISTA',63),(130,'CALARCA',63),(190,'CIRCASIA',63),(212,'CORDOBA',63),(272,'FILANDIA',63),(302,'GENOVA',63),(401,'LA TEBAIDA',63),(470,'MONTENEGRO',63),(548,'PIJAO',63),(594,'QUIMBAYA',63),(690,'SALENTO',63),(1,'PEREIRA',66),(45,'APIA',66),(75,'BALBOA',66),(88,'BELEN DE UMBRIA',66),(170,'DOSQUEBRADAS',66),(318,'GUATICA',66),(383,'LA CELIA',66),(400,'LA VIRGINIA',66),(440,'MARSELLA',66),(456,'MISTRATO',66),(572,'PUEBLO RICO',66),(594,'QUINCHIA',66),(682,'SANTA ROSA DE CABAL',66),(687,'SANTUARIO',66),(1,'BUCARAMANGA',68),(13,'AGUADA',68),(20,'ALBANIA',68),(51,'ARATOCA',68),(77,'BARBOSA',68),(79,'BARICHARA',68),(81,'BARRANCABERMEJA',68),(92,'BETULIA',68),(101,'BOLIVAR',68),(121,'CABRERA',68),(132,'CALIFORNIA',68),(147,'CAPITANEJO',68),(152,'CARCASI',68),(160,'CEPITA',68),(162,'CERRITO',68),(167,'CHARALA',68),(169,'CHARTA',68),(176,'CHIMA',68),(179,'CHIPATA',68),(190,'CIMITARRA',68),(207,'CONCEPCION',68),(209,'CONFINES',68),(211,'CONTRATACION',68),(217,'COROMORO',68),(229,'CURITI',68),(235,'EL CARMEN DE CHUCURI',68),(245,'EL GUACAMAYO',68),(250,'EL PE',68),(255,'EL PLAYON',68),(264,'ENCINO',68),(266,'ENCISO',68),(271,'FLORIAN',68),(276,'FLORIDABLANCA',68),(296,'GALAN',68),(298,'GAMBITA',68),(307,'GIRON',68),(318,'GUACA',68),(320,'GUADALUPE',68),(322,'GUAPOTA',68),(324,'GUAVATA',68),(327,'GsEPSA',68),(344,'HATO',68),(368,'JESUS MARIA',68),(370,'JORDAN',68),(377,'LA BELLEZA',68),(385,'LANDAZURI',68),(397,'LA PAZ',68),(406,'LEBRIJA',68),(418,'LOS SANTOS',68),(425,'MACARAVITA',68),(432,'MALAGA',68),(444,'MATANZA',68),(464,'MOGOTES',68),(468,'MOLAGAVITA',68),(498,'OCAMONTE',68),(500,'OIBA',68),(502,'ONZAGA',68),(522,'PALMAR',68),(524,'PALMAS DEL SOCORRO',68),(533,'PARAMO',68),(547,'PIEDECUESTA',68),(549,'PINCHOTE',68),(572,'PUENTE NACIONAL',68),(573,'PUERTO PARRA',68),(575,'PUERTO WILCHES',68),(615,'RIONEGRO',68),(655,'SABANA DE TORRES',68),(669,'SAN ANDRES',68),(673,'SAN BENITO',68),(679,'SAN GIL',68),(682,'SAN JOAQUIN',68),(684,'SAN JOSE DE MIRANDA',68),(686,'SAN MIGUEL',68),(689,'SAN VICENTE DE CHUCURI',68),(705,'SANTA BARBARA',68),(720,'SANTA HELENA DEL OPON',68),(745,'SIMACOTA',68),(755,'SOCORRO',68),(770,'SUAITA',68),(773,'SUCRE',68),(780,'SURATA',68),(820,'TONA',68),(855,'VALLE DE SAN JOSE',68),(861,'VELEZ',68),(867,'VETAS',68),(872,'VILLANUEVA',68),(895,'ZAPATOCA',68),(1,'SINCELEJO',70),(110,'BUENAVISTA',70),(124,'CAIMITO',70),(204,'COLOSO',70),(215,'COROZAL',70),(221,'COVE',70),(230,'CHALAN',70),(233,'EL ROBLE',70),(235,'GALERAS',70),(265,'GUARANDA',70),(400,'LA UNION',70),(418,'LOS PALMITOS',70),(429,'MAJAGUAL',70),(473,'MORROA',70),(508,'OVEJAS',70),(523,'PALMITO',70),(670,'SAMPUES',70),(678,'SAN BENITO ABAD',70),(702,'SAN JUAN DE BETULIA',70),(708,'SAN MARCOS',70),(713,'SAN ONOFRE',70),(717,'SAN PEDRO',70),(742,'SAN LUIS DE SINCE',70),(771,'SUCRE',70),(820,'SANTIAGO DE TOLU',70),(823,'TOLU VIEJO',70),(1,'IBAGUE',73),(24,'ALPUJARRA',73),(26,'ALVARADO',73),(30,'AMBALEMA',73),(43,'ANZOATEGUI',73),(55,'ARMERO',73),(67,'ATACO',73),(124,'CAJAMARCA',73),(148,'CARMEN DE APICALA',73),(152,'CASABIANCA',73),(168,'CHAPARRAL',73),(200,'COELLO',73),(217,'COYAIMA',73),(226,'CUNDAY',73),(236,'DOLORES',73),(268,'ESPINAL',73),(270,'FALAN',73),(275,'FLANDES',73),(283,'FRESNO',73),(319,'GUAMO',73),(347,'HERVEO',73),(349,'HONDA',73),(352,'ICONONZO',73),(408,'LERIDA',73),(411,'LIBANO',73),(443,'MARIQUITA',73),(449,'MELGAR',73),(461,'MURILLO',73),(483,'NATAGAIMA',73),(504,'ORTEGA',73),(520,'PALOCABILDO',73),(547,'PIEDRAS',73),(555,'PLANADAS',73),(563,'PRADO',73),(585,'PURIFICACION',73),(616,'RIOBLANCO',73),(622,'RONCESVALLES',73),(624,'ROVIRA',73),(671,'SALDA',73),(675,'SAN ANTONIO',73),(678,'SAN LUIS',73),(686,'SANTA ISABEL',73),(770,'SUAREZ',73),(854,'VALLE DE SAN JUAN',73),(861,'VENADILLO',73),(870,'VILLAHERMOSA',73),(873,'VILLARRICA',73),(1,'CALI',76),(20,'ALCALA',76),(36,'ANDALUCIA',76),(41,'ANSERMANUEVO',76),(54,'ARGELIA',76),(100,'BOLIVAR',76),(109,'BUENAVENTURA',76),(111,'GUADALAJARA DE BUGA',76),(113,'BUGALAGRANDE',76),(122,'CAICEDONIA',76),(126,'CALIMA',76),(130,'CANDELARIA',76),(147,'CARTAGO',76),(233,'DAGUA',76),(243,'EL AGUILA',76),(246,'EL CAIRO',76),(248,'EL CERRITO',76),(250,'EL DOVIO',76),(275,'FLORIDA',76),(306,'GINEBRA',76),(318,'GUACARI',76),(364,'JAMUNDI',76),(377,'LA CUMBRE',76),(400,'LA UNION',76),(403,'LA VICTORIA',76),(497,'OBANDO',76),(520,'PALMIRA',76),(563,'PRADERA',76),(606,'RESTREPO',76),(616,'RIOFRIO',76),(622,'ROLDANILLO',76),(670,'SAN PEDRO',76),(736,'SEVILLA',76),(823,'TORO',76),(828,'TRUJILLO',76),(834,'TULUA',76),(845,'ULLOA',76),(863,'VERSALLES',76),(869,'VIJES',76),(890,'YOTOCO',76),(892,'YUMBO',76),(895,'ZARZAL',76),(1,'ARAUCA',81),(65,'ARAUQUITA',81),(220,'CRAVO NORTE',81),(300,'FORTUL',81),(591,'PUERTO RONDON',81),(736,'SARAVENA',81),(794,'TAME',81),(1,'YOPAL',85),(10,'AGUAZUL',85),(15,'CHAMEZA',85),(125,'HATO COROZAL',85),(136,'LA SALINA',85),(139,'MANI',85),(162,'MONTERREY',85),(225,'NUNCHIA',85),(230,'OROCUE',85),(250,'PAZ DE ARIPORO',85),(263,'PORE',85),(279,'RECETOR',85),(300,'SABANALARGA',85),(315,'SACAMA',85),(325,'SAN LUIS DE PALENQUE',85),(400,'TAMARA',85),(410,'TAURAMENA',85),(430,'TRINIDAD',85),(440,'VILLANUEVA',85),(1,'MOCOA',86),(219,'COLON',86),(320,'ORITO',86),(568,'PUERTO ASIS',86),(569,'PUERTO CAICEDO',86),(571,'PUERTO GUZMAN',86),(573,'LEGUIZAMO',86),(749,'SIBUNDOY',86),(755,'SAN FRANCISCO',86),(757,'SAN MIGUEL',86),(760,'SANTIAGO',86),(865,'VALLE DEL GUAMUEZ',86),(885,'VILLAGARZON',86),(1,'SAN ANDRES',88),(564,'PROVIDENCIA',88),(1,'LETICIA',91),(263,'EL ENCANTO',91),(405,'LA CHORRERA',91),(407,'LA PEDRERA',91),(430,'LA VICTORIA',91),(460,'MIRITI - PARANA',91),(530,'PUERTO ALEGRIA',91),(536,'PUERTO ARICA',91),(540,'PUERTO NARI',91),(669,'PUERTO SANTANDER',91),(798,'TARAPACA',91),(1,'INIRIDA',94),(343,'BARRANCO MINAS',94),(663,'MAPIRIPANA',94),(883,'SAN FELIPE',94),(884,'PUERTO COLOMBIA',94),(885,'LA GUADALUPE',94),(886,'CACAHUAL',94),(887,'PANA PANA',94),(888,'MORICHAL',94),(1,'SAN JOSE DEL GUAVIARE',95),(15,'CALAMAR',95),(25,'EL RETORNO',95),(200,'MIRAFLORES',95),(1,'MITU',97),(161,'CARURU',97),(511,'PACOA',97),(666,'TARAIRA',97),(777,'PAPUNAUA',97),(889,'YAVARATE',97),(1,'PUERTO CARRE',99),(524,'LA PRIMAVERA',99),(624,'SANTA ROSALIA',99),(773,'CUMARIBO',99),(0,'',0),(483,'NARIÑOC',25);
/*!40000 ALTER TABLE `tbl_municipios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_pacientes`
--

DROP TABLE IF EXISTS `tbl_pacientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_pacientes` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `paciente` varchar(600) NOT NULL,
  `tipodocumento` varchar(30) NOT NULL,
  `documento` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `fechan` date NOT NULL,
  `edad` varchar(30) NOT NULL,
  `sexo` varchar(30) NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `ocupacion` varchar(300) NOT NULL,
  `eps` varchar(30) NOT NULL,
  `dpto` varchar(100) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `acudiente` varchar(300) NOT NULL,
  `direcciona` varchar(100) NOT NULL,
  `telefonoa` varchar(30) NOT NULL,
  `usuario` varchar(300) NOT NULL,
  `docusuario` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pacientes`
--

LOCK TABLES `tbl_pacientes` WRITE;
/*!40000 ALTER TABLE `tbl_pacientes` DISABLE KEYS */;
INSERT INTO `tbl_pacientes` VALUES (9,'MARY YOLIMA DIAZ CORTES','CC','52560022','2021-05-01','1973-07-15','47','F','Manzana 14 Casa 11','32565999','yoli@gmail.com','Hogar','Sisben','25','307','JESUS SANCHEZ','Manzana 14 Casa 11','32565999','ANGEL ANDRES SANCHEZ DIAZ','79057182'),(8,'JESUS MATEO SANCHEZ DIAZ','CC','123456','2021-05-01','2003-09-21','17','M','manzana 14 casa 11','3134907212','mateo@gmail.com','Ingeniero','Famisanar','25','307','JESUS SANCHEZ','manzana 14 casa 11','3134907212','ANGEL ANDRES SANCHEZ DIAZ','79057182');
/*!40000 ALTER TABLE `tbl_pacientes` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bd_tecnostoria`.`tbl_pacientes_BEFORE_UPDATE` 
BEFORE UPDATE ON `tbl_pacientes` FOR EACH ROW
BEGIN
	INSERT INTO auditoria_tbl_pacientes VALUES(NULL, old.paciente, old.tipodocumento, 
    old.documento, old.fecha, old.fechan, old.edad, old.sexo, old.direccion, old.telefono,
    old.correo, old.ocupacion, old.eps , old.dpto , old.municipio, old.acudiente,
    old.direcciona, old.telefonoa, old.usuario, old.docusuario,
	new.paciente, new.tipodocumento, new.documento, new.fecha, new.fechan, new.edad,
    new.sexo, new.direccion, new.telefono, new.correo, new.ocupacion, new.eps , new.dpto,
    new.municipio, new.acudiente, new.direcciona, new.telefonoa, new.usuario, 
    new.docusuario, old.id, now(), current_user(), 'Actualizacion de Paciente');
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bd_tecnostoria`.`tbl_pacientes_BEFORE_DELETE`
 BEFORE DELETE ON `tbl_pacientes` FOR EACH ROW
BEGIN
	INSERT INTO auditoria_tbl_pacientes VALUES(NULL, old.paciente, old.tipodocumento, 
    old.documento, old.fecha, old.fechan, old.edad, old.sexo, old.direccion, old.telefono,
    old.correo, old.ocupacion, old.eps , old.dpto , old.municipio, old.acudiente,
    old.direcciona, old.telefonoa, old.usuario, old.docusuario,
	NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,
    NULL, NULL, NULL, NULL, NULL, old.id, now(), current_user(), 'Eliminacion de Paciente');
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `tbl_tipodocumento`
--

DROP TABLE IF EXISTS `tbl_tipodocumento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_tipodocumento` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(10) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tipodocumento`
--

LOCK TABLES `tbl_tipodocumento` WRITE;
/*!40000 ALTER TABLE `tbl_tipodocumento` DISABLE KEYS */;
INSERT INTO `tbl_tipodocumento` VALUES (1,'CC','Cédula Ciudadanía'),(2,'CE','Cédula de Extranjería'),(5,'CD','Carné Diplomático'),(6,'PA','Pasaporte'),(9,'SC','Salvoconducto'),(10,'PE','Permiso Especial de Permanencia'),(13,'RC','Registro civil'),(14,'TI','Tarjeta de Identidad'),(15,'CN','Certificado de Nacido Vivo'),(16,'AS','Adulto Sin Identificar'),(17,'MS','Menor Sin Identificar');
/*!40000 ALTER TABLE `tbl_tipodocumento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuarios`
--

DROP TABLE IF EXISTS `tbl_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_usuarios` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(500) NOT NULL,
  `nivel` int(6) NOT NULL,
  `documento` varchar(30) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `registro` varchar(300) NOT NULL,
  `fecha` date NOT NULL,
  `foto` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuarios`
--

LOCK TABLES `tbl_usuarios` WRITE;
/*!40000 ALTER TABLE `tbl_usuarios` DISABLE KEYS */;
INSERT INTO `tbl_usuarios` VALUES (27,'JESUS MATEO SANCHEZ DIAZ','acmysistemas@gmail.com','$2y$10$LqJ7GMYmXSKxuM.UfrNaLedX3j7bu3d2Q.zArIBFslIF//JDS8AW6',1,'79057182','2022-09-23 12:38:32','RM123565','2020-08-18',''),(37,'JESUS MATEO SANCHEZ DIAZ','medico@gmail.com','$2y$10$S5MMIxXzflLoQx.d0bzvdOHW1p7VpA1EtEPG/L2DPZfv3EB1GdNbm',2,'123','2022-09-23 11:03:47','123','2022-09-21','firmasus/Firma (1).png'),(36,'MARIA CAMILA SANCHEZ DIAZ','asistente@gmail.com','$2y$10$Hkp77noroEiiVXucywmIfeF8C8s4M8q0r5DM/t8eXz8GTNiU0huma',3,'123','2022-09-23 11:03:47','','2022-09-21','firmasus/Firma.png'),(39,'CAMILO CESAR DIAZ MACONDO','medico2@gmail.com','$2y$10$Jv01wF7ivdoitlCS1mnjdut6nAtR7Sfk5FBxKIKrImlcZyduepQda',2,'1574839756','2022-09-27 12:24:38','3338478283','2022-09-26','firmasus/Firma.png'),(43,'ADMIN','admin@gmail.com','$2y$10$N0wAvtE3AffAT2knqv01suGM.u.MlgleYM3gyCExb9WpQWpx9V/IK',1,'123pormi','2022-09-28 13:48:23','','2022-09-28','');
/*!40000 ALTER TABLE `tbl_usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bd_tecnostoria`.`tbl_usuarios_BEFORE_UPDATE` 
BEFORE UPDATE ON `tbl_usuarios` FOR EACH ROW
BEGIN
	INSERT INTO auditoria_tbl_usuarios VALUES(NULL, old.nombre, old.correo, 
    old.clave, old.nivel, old.documento, old.creado, old.registro, old.fecha, old.foto,
	new.nombre, new.correo, new.clave, new.nivel, new.documento, 
    new.creado, new.registro, new.fecha, new.foto, old.id,
    now(), current_user(), 'Actualizacion de Usuarios');
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bd_tecnostoria`.`tbl_usuarios_BEFORE_DELETE` 
BEFORE DELETE ON `tbl_usuarios` FOR EACH ROW
BEGIN
	INSERT INTO auditoria_tbl_usuarios VALUES(NULL, old.nombre, old.correo, 
    old.clave, old.nivel, old.documento, old.creado, old.registro, old.fecha, old.foto,
	NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, old.id,
    now(), current_user(), 'Eliminacion de Usuarios');
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-28 10:40:29
