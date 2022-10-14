-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: bd_tecnostoria
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.25-MariaDB

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auditoria_tbl_agenda`
--

LOCK TABLES `auditoria_tbl_agenda` WRITE;
/*!40000 ALTER TABLE `auditoria_tbl_agenda` DISABLE KEYS */;
INSERT INTO `auditoria_tbl_agenda` VALUES (1,'2022-09-29','8:15','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Estado...','','2022-09-29','8:15','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Cumplida','cumpio',1,'2022-09-29 16:40:09','root@localhost','Actualizacion de Agenda'),(2,'2022-09-29','8:15','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Cumplida','cumpio','2022-09-29','8:15','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Cumplida','cumpio',1,'2022-09-29 16:48:13','root@localhost','Actualizacion de Agenda'),(3,'2022-09-29','8:15','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Cumplida','cumpio','2022-09-29','8:15','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Cumplida','cumpio',1,'2022-09-29 16:48:15','root@localhost','Actualizacion de Agenda'),(4,'2022-09-29','8:15','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Cumplida','cumpio','2022-09-29','8:15','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Cumplida','cumpio',1,'2022-09-29 16:48:16','root@localhost','Actualizacion de Agenda'),(5,'2022-09-29','8:15','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Cumplida','cumpio','2022-09-29','8:15','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Cumplida','cumpio',1,'2022-09-29 16:48:17','root@localhost','Actualizacion de Agenda'),(6,'2022-09-29','8:15','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Cumplida','cumpio','2022-09-29','8:15','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Cancelada','cumpio',1,'2022-09-29 16:48:22','root@localhost','Actualizacion de Agenda'),(7,'2022-09-29','8:15','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Cancelada','cumpio','2022-09-29','8:15','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Cumplida','cumpio',1,'2022-09-29 16:48:26','root@localhost','Actualizacion de Agenda'),(8,'2022-09-29','8:15','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Cumplida','cumpio','2022-09-29','8:15','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Cancelada','cumpio',1,'2022-09-29 16:53:22','root@localhost','Actualizacion de Agenda'),(9,'2022-09-29','8:15','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Cancelada','cumpio','2022-09-29','8:15','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Cancelada','cumpio',1,'2022-09-29 16:53:30','root@localhost','Actualizacion de Agenda'),(10,'2022-09-29','8:15','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Cancelada','cumpio','2022-09-29','8:15','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Asignada','cumpio',1,'2022-09-29 16:53:39','root@localhost','Actualizacion de Agenda'),(11,'2022-09-30','8:00','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Asignada','','2022-09-30','8:00','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Cumplida','',2,'2022-09-29 17:04:01','root@localhost','Actualizacion de Agenda');
/*!40000 ALTER TABLE `auditoria_tbl_agenda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auditoria_tbl_hclinica`
--

DROP TABLE IF EXISTS `auditoria_tbl_hclinica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auditoria_tbl_hclinica` (
  `idauditoria_tbl_hclinica` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_old` date DEFAULT NULL,
  `hora_old` varchar(30) DEFAULT NULL,
  `tipodocumento_old` varchar(30) DEFAULT NULL,
  `paciente_old` varchar(300) DEFAULT NULL,
  `documento_old` varchar(60) DEFAULT NULL,
  `direccion_old` varchar(200) DEFAULT NULL,
  `telefono_old` varchar(60) DEFAULT NULL,
  `edad_old` int(30) DEFAULT NULL,
  `fechan_old` varchar(60) DEFAULT NULL,
  `causaexterna_old` varchar(100) DEFAULT NULL,
  `finalidadconsulta_old` varchar(100) DEFAULT NULL,
  `motivodelaconsulta_old` text DEFAULT NULL,
  `enfermedadactual_old` text DEFAULT NULL,
  `revisionxsistema_old` text DEFAULT NULL,
  `uanticonceptivos_old` varchar(30) DEFAULT NULL,
  `menarquia_old` varchar(30) DEFAULT NULL,
  `fum_old` varchar(30) DEFAULT NULL,
  `g_old` varchar(30) DEFAULT NULL,
  `a_old` int(30) DEFAULT NULL,
  `p_old` int(30) DEFAULT NULL,
  `c_old` int(30) DEFAULT NULL,
  `feultparto_old` date DEFAULT NULL,
  `cardvasculares_old` varchar(500) DEFAULT NULL,
  `pulmonares_old` varchar(500) DEFAULT NULL,
  `digestivos_old` varchar(500) DEFAULT NULL,
  `diabetes_old` varchar(500) DEFAULT NULL,
  `renales_old` varchar(500) DEFAULT NULL,
  `quirurgicos_old` varchar(500) DEFAULT NULL,
  `traumaticos_old` varchar(500) DEFAULT NULL,
  `alergicos_old` varchar(500) DEFAULT NULL,
  `transfusiones_old` varchar(500) DEFAULT NULL,
  `medicamentos_old` varchar(500) DEFAULT NULL,
  `alcohol_old` varchar(500) DEFAULT NULL,
  `drogas_old` varchar(500) DEFAULT NULL,
  `cigarrillo_old` varchar(500) DEFAULT NULL,
  `inmunizaciones_old` varchar(500) DEFAULT NULL,
  `otros_old` varchar(500) DEFAULT NULL,
  `antfam_old` text DEFAULT NULL,
  `cabeza_old` varchar(500) DEFAULT NULL,
  `cara_old` varchar(500) DEFAULT NULL,
  `cuello_old` varchar(500) DEFAULT NULL,
  `torax_old` varchar(500) DEFAULT NULL,
  `corazon_old` varchar(500) DEFAULT NULL,
  `pulmones_old` varchar(500) DEFAULT NULL,
  `abdypel_old` varchar(500) DEFAULT NULL,
  `genext_old` varchar(500) DEFAULT NULL,
  `colvert_old` varchar(500) DEFAULT NULL,
  `neurologico_old` varchar(500) DEFAULT NULL,
  `miemsup_old` varchar(500) DEFAULT NULL,
  `mieminf_old` varchar(500) DEFAULT NULL,
  `pielyfaneras_old` varchar(500) DEFAULT NULL,
  `artic_old` varchar(500) DEFAULT NULL,
  `fuerzmus_old` varchar(500) DEFAULT NULL,
  `reflejos_old` varchar(500) DEFAULT NULL,
  `parescraneales_old` varchar(500) DEFAULT NULL,
  `psicoemocional_old` varchar(500) DEFAULT NULL,
  `fc_old` varchar(60) DEFAULT NULL,
  `fr_old` varchar(60) DEFAULT NULL,
  `ta_old` varchar(60) DEFAULT NULL,
  `t_old` varchar(60) DEFAULT NULL,
  `so2_old` varchar(60) DEFAULT NULL,
  `pesokg_old` varchar(60) DEFAULT NULL,
  `tallacm_old` varchar(60) DEFAULT NULL,
  `imc_old` varchar(60) DEFAULT NULL,
  `resultadoimc_old` varchar(100) DEFAULT NULL,
  `impdiag_old` varchar(300) DEFAULT NULL,
  `condseguir_old` varchar(500) DEFAULT NULL,
  `incapacidad_old` varchar(500) DEFAULT NULL,
  `usuario_old` varchar(300) DEFAULT NULL,
  `docusuario_old` varchar(100) DEFAULT NULL,
  `fecha_new` date DEFAULT NULL,
  `hora_new` varchar(30) DEFAULT NULL,
  `tipodocumento_new` varchar(30) DEFAULT NULL,
  `paciente_new` varchar(300) DEFAULT NULL,
  `documento_new` varchar(60) DEFAULT NULL,
  `direccion_new` varchar(200) DEFAULT NULL,
  `telefono_new` varchar(60) DEFAULT NULL,
  `edad_new` int(30) DEFAULT NULL,
  `fechan_new` varchar(60) DEFAULT NULL,
  `causaexterna_new` varchar(100) DEFAULT NULL,
  `finalidadconsulta_new` varchar(100) DEFAULT NULL,
  `motivodelaconsulta_new` text DEFAULT NULL,
  `enfermedadactual_new` text DEFAULT NULL,
  `revisionxsistema_new` text DEFAULT NULL,
  `uanticonceptivos_new` varchar(30) DEFAULT NULL,
  `menarquia_new` varchar(30) DEFAULT NULL,
  `fum_new` varchar(30) DEFAULT NULL,
  `g_new` varchar(30) DEFAULT NULL,
  `a_new` int(30) DEFAULT NULL,
  `p_new` int(30) DEFAULT NULL,
  `c_new` int(30) DEFAULT NULL,
  `feultparto_new` date DEFAULT NULL,
  `cardvasculares_new` varchar(500) DEFAULT NULL,
  `pulmonares_new` varchar(500) DEFAULT NULL,
  `digestivos_new` varchar(500) DEFAULT NULL,
  `diabetes_new` varchar(500) DEFAULT NULL,
  `renales_new` varchar(500) DEFAULT NULL,
  `quirurgicos_new` varchar(500) DEFAULT NULL,
  `traumaticos_new` varchar(500) DEFAULT NULL,
  `alergicos_new` varchar(500) DEFAULT NULL,
  `transfusiones_new` varchar(500) DEFAULT NULL,
  `medicamentos_new` varchar(500) DEFAULT NULL,
  `alcohol_new` varchar(500) DEFAULT NULL,
  `drogas_new` varchar(500) DEFAULT NULL,
  `cigarrillo_new` varchar(500) DEFAULT NULL,
  `inmunizaciones_new` varchar(500) DEFAULT NULL,
  `otros_new` varchar(500) DEFAULT NULL,
  `antfam_new` text DEFAULT NULL,
  `cabeza_new` varchar(500) DEFAULT NULL,
  `cara_new` varchar(500) DEFAULT NULL,
  `cuello_new` varchar(500) DEFAULT NULL,
  `torax_new` varchar(500) DEFAULT NULL,
  `corazon_new` varchar(500) DEFAULT NULL,
  `pulmones_new` varchar(500) DEFAULT NULL,
  `abdypel_new` varchar(500) DEFAULT NULL,
  `genext_new` varchar(500) DEFAULT NULL,
  `colvert_new` varchar(500) DEFAULT NULL,
  `neurologico_new` varchar(500) DEFAULT NULL,
  `miemsup_new` varchar(500) DEFAULT NULL,
  `mieminf_new` varchar(500) DEFAULT NULL,
  `pielyfaneras_new` varchar(500) DEFAULT NULL,
  `artic_new` varchar(500) DEFAULT NULL,
  `fuerzmus_new` varchar(500) DEFAULT NULL,
  `reflejos_new` varchar(500) DEFAULT NULL,
  `parescraneales_new` varchar(500) DEFAULT NULL,
  `psicoemocional_new` varchar(500) DEFAULT NULL,
  `fc_new` varchar(60) DEFAULT NULL,
  `fr_new` varchar(60) DEFAULT NULL,
  `ta_new` varchar(60) DEFAULT NULL,
  `t_new` varchar(60) DEFAULT NULL,
  `so2_new` varchar(60) DEFAULT NULL,
  `pesokg_new` varchar(60) DEFAULT NULL,
  `tallacm_new` varchar(60) DEFAULT NULL,
  `imc_new` varchar(60) DEFAULT NULL,
  `resultadoimc_new` varchar(100) DEFAULT NULL,
  `impdiag_new` varchar(300) DEFAULT NULL,
  `condseguir_new` varchar(500) DEFAULT NULL,
  `incapacidad_new` varchar(500) DEFAULT NULL,
  `usuario_new` varchar(300) DEFAULT NULL,
  `docusuario_new` varchar(100) DEFAULT NULL,
  `idauditoria` int(11) DEFAULT NULL,
  `fecha_modificacion_hc` timestamp NULL DEFAULT current_timestamp(),
  `usuario_modificacion_hc` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT 'CURRENT_USER()',
  `evento_auditoria_hc` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idauditoria_tbl_hclinica`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auditoria_tbl_hclinica`
--

LOCK TABLES `auditoria_tbl_hclinica` WRITE;
/*!40000 ALTER TABLE `auditoria_tbl_hclinica` DISABLE KEYS */;
/*!40000 ALTER TABLE `auditoria_tbl_hclinica` ENABLE KEYS */;
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
-- Table structure for table `auditoria_tbl_parametros`
--

DROP TABLE IF EXISTS `auditoria_tbl_parametros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auditoria_tbl_parametros` (
  `idauditoria_tbl_parametros` int(11) NOT NULL AUTO_INCREMENT,
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
  `fecha_modificacion_par` timestamp NULL DEFAULT current_timestamp(),
  `usuario_modificacion_par` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT 'CURRENT_USER()',
  `evento_auditoria_par` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`idauditoria_tbl_parametros`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auditoria_tbl_parametros`
--

LOCK TABLES `auditoria_tbl_parametros` WRITE;
/*!40000 ALTER TABLE `auditoria_tbl_parametros` DISABLE KEYS */;
INSERT INTO `auditoria_tbl_parametros` VALUES (1,'Alcaldia de Girardot','123456789','Cra 10 20- 30','3205896589','ejemplo@correo.com','fotospr/java.png','2022-10-05 11:39:38','Girardot','Cundinamarca','45','sec girardot','Alcaldia de Girardot','123456789','Cra 10 20- 30','3205896589','ejemplo@correo.com','fotospr/java.png','2022-10-05 11:39:38','Girardot','Cundinamarca','40','sec girardot',5,'2022-09-27 11:01:26','root@localhost','Actualizacion de Parametros'),(2,'Alcaldia de Girardot','123456789','Cra 10 20- 30','3205896589','ejemplo@correo.com','fotospr/java.png','2022-10-05 11:39:38','Girardot','Cundinamarca','40','sec girardot','Alcaldia de Girardot','123456789','Cra 10 20- 30','3205896589','ejemplo@correo.com','fotospr/java.png','2022-10-05 11:39:38','Girardot','Cundinamarca','40','sec girardot',5,'2022-09-27 11:01:44','root@localhost','Actualizacion de Parametros'),(3,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','','','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:31:53','root@localhost','Actualizacion de Parametros'),(4,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:34:19','root@localhost','Actualizacion de Parametros'),(5,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:34:28','root@localhost','Actualizacion de Parametros'),(6,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:34:35','root@localhost','Actualizacion de Parametros'),(7,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:34:41','root@localhost','Actualizacion de Parametros'),(8,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:36:43','root@localhost','Actualizacion de Parametros'),(9,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:36:44','root@localhost','Actualizacion de Parametros'),(10,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:42:02','root@localhost','Actualizacion de Parametros'),(11,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:42:58','root@localhost','Actualizacion de Parametros'),(12,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:42:59','root@localhost','Actualizacion de Parametros'),(13,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:43:16','root@localhost','Actualizacion de Parametros'),(14,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:43:25','root@localhost','Actualizacion de Parametros'),(15,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:43:26','root@localhost','Actualizacion de Parametros'),(16,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:43:26','root@localhost','Actualizacion de Parametros'),(17,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:43:29','root@localhost','Actualizacion de Parametros'),(18,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:43:47','root@localhost','Actualizacion de Parametros'),(19,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:43:48','root@localhost','Actualizacion de Parametros'),(20,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:43:48','root@localhost','Actualizacion de Parametros'),(21,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:43:48','root@localhost','Actualizacion de Parametros'),(22,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:43:58','root@localhost','Actualizacion de Parametros'),(23,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:43:58','root@localhost','Actualizacion de Parametros'),(24,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:43:58','root@localhost','Actualizacion de Parametros'),(25,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:44:05','root@localhost','Actualizacion de Parametros'),(26,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:44:06','root@localhost','Actualizacion de Parametros'),(27,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:44:15','root@localhost','Actualizacion de Parametros'),(28,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:44:16','root@localhost','Actualizacion de Parametros'),(29,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:44:16','root@localhost','Actualizacion de Parametros'),(30,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:44:33','root@localhost','Actualizacion de Parametros'),(31,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:45:11','root@localhost','Actualizacion de Parametros'),(32,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:45:23','root@localhost','Actualizacion de Parametros'),(33,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:45:24','root@localhost','Actualizacion de Parametros'),(34,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:45:36','root@localhost','Actualizacion de Parametros'),(35,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:45:36','root@localhost','Actualizacion de Parametros'),(36,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:45:37','root@localhost','Actualizacion de Parametros'),(37,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:47:48','root@localhost','Actualizacion de Parametros'),(38,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:47:49','root@localhost','Actualizacion de Parametros'),(39,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:48:16','root@localhost','Actualizacion de Parametros'),(40,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:48:17','root@localhost','Actualizacion de Parametros'),(41,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32',7,'2022-09-27 11:48:17','root@localhost','Actualizacion de Parametros'),(42,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:50:55','root@localhost','Actualizacion de Parametros'),(43,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:53:04','root@localhost','Actualizacion de Parametros'),(44,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:54:01','root@localhost','Actualizacion de Parametros'),(45,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:54:02','root@localhost','Actualizacion de Parametros'),(46,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:54:03','root@localhost','Actualizacion de Parametros'),(47,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:54:11','root@localhost','Actualizacion de Parametros'),(48,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:54:12','root@localhost','Actualizacion de Parametros'),(49,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:54:12','root@localhost','Actualizacion de Parametros'),(50,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:54:24','root@localhost','Actualizacion de Parametros'),(51,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:54:25','root@localhost','Actualizacion de Parametros'),(52,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:54:25','root@localhost','Actualizacion de Parametros'),(53,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:54:26','root@localhost','Actualizacion de Parametros'),(54,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:54:26','root@localhost','Actualizacion de Parametros'),(55,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:57:32','root@localhost','Actualizacion de Parametros'),(56,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:57:34','root@localhost','Actualizacion de Parametros'),(57,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:57:46','root@localhost','Actualizacion de Parametros'),(58,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 11:57:47','root@localhost','Actualizacion de Parametros'),(59,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 12:01:41','root@localhost','Actualizacion de Parametros'),(60,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 12:02:02','root@localhost','Actualizacion de Parametros'),(61,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 12:02:02','root@localhost','Actualizacion de Parametros'),(62,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 12:02:02','root@localhost','Actualizacion de Parametros'),(63,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32',7,'2022-09-27 12:02:03','root@localhost','Actualizacion de Parametros'),(64,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','32','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','40',7,'2022-09-27 12:30:42','root@localhost','Actualizacion de Parametros'),(65,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','BOGOTA','CUNDINAMARCA','15','40','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','40',7,'2022-09-27 12:31:03','root@localhost','Actualizacion de Parametros'),(66,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','TOLIMA','CUNDINAMARCA','15','40','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','CALI','CUNDINAMARCA','15','40',7,'2022-09-27 14:47:22','root@localhost','Actualizacion de Parametros'),(67,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','CALI','CUNDINAMARCA','15','40','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','tolima','CUNDINAMARCA','15','40',7,'2022-09-27 18:18:31','root@localhost','Actualizacion de Parametros'),(68,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','tolima','CUNDINAMARCA','15','40','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','tolima','CUNDINAMARCA','15','40',7,'2022-09-27 18:26:00','root@localhost','Actualizacion de Parametros'),(69,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','tolima','CUNDINAMARCA','15','40','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','tolima1','CUNDINAMARCA','15','40',7,'2022-09-27 18:26:05','root@localhost','Actualizacion de Parametros'),(70,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','tolima1','CUNDINAMARCA','15','40','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','tolima','CUNDINAMARCA','15','40',7,'2022-09-27 18:29:10','root@localhost','Actualizacion de Parametros'),(71,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','tolima','CUNDINAMARCA','15','40','CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','tolima1','CUNDINAMARCA','15','40',7,'2022-09-27 18:35:08','root@localhost','Actualizacion de Parametros'),(72,'Alcaldia de Girardot','123456789','Cra 10 20- 30','3205896589','ejemplo@correo.com','fotospr/java.png','2022-10-05 11:39:38','Girardot','Cundinamarca','40','sec girardot','Alcaldia de Girardot','123456789','Cra 10 20- 30','3205896589','ejemplo@correo.com','fotospr/java.png','2022-10-05 11:39:38','Girardot','Cundinamarca','40','sec girardot',5,'2022-09-29 16:52:00','root@localhost','Actualizacion de Parametros'),(73,'CONSULTORIO CAMARADAS DEL SUR','2937293761','Carrera 15 Calle 26 #2','3892910882','ejemplo@gmail.com','fotospr/a ver.jpg','2022-10-05 11:39:38','tolima1','CUNDINAMARCA','15','40',NULL,NULL,NULL,NULL,NULL,NULL,'2022-10-05 11:39:38',NULL,NULL,NULL,NULL,7,'2022-10-02 16:53:40','root@localhost','Eliminacion de Parametros'),(74,'Alcaldia de Girardot','123456789','Cra 10 20- 30','3205896589','ejemplo@correo.com','fotospr/java.png','2022-10-05 11:39:38','Girardot','Cundinamarca','40','sec girardot',NULL,NULL,NULL,NULL,NULL,NULL,'2022-10-05 11:39:38',NULL,NULL,NULL,NULL,5,'2022-10-02 17:16:47','root@localhost','Eliminacion de Parametros'),(75,'CONSULTORIO TEST','asjkdnak','ajsdjasdjh','2378362','kabsdjhbasjh@gmail.com','fotospr/A eso se le llama estrategia.jpg','2022-10-13 15:41:31','JHBASJHDBA','KBADJHSBDJH','iashdui','bfhsdf',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,9,'2022-10-14 11:20:13','root@localhost','Eliminacion de Parametros'),(76,'CONSULTORIO TEST','asjkdnak','ajsdjasdjh','2378362','kabsdjhbasjh@gmail.com','fotospr/A eso se le llama estrategia.jpg','2022-10-13 15:41:33','JHBASJHDBA','KBADJHSBDJH','iashdui','bfhsdf',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,10,'2022-10-14 11:20:22','root@localhost','Eliminacion de Parametros'),(77,'CONSULTORIO LAS AMERICAS','kjasd','kabsdkhabsdh','23748263','HBASDHAS@GMAIL.COM','fotospr/A eso se le llama poner la basura en su lugar.jpg','2022-10-14 11:21:29','KBASDHBAS','HKBASDJHASB','skjdfnds','kjskdas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,11,'2022-10-14 11:23:10','root@localhost','Eliminacion de Parametros'),(78,'CONSULTORIO LAS AMERICAS','asdb','asbdjasb','38945373','skhdbasd@gmail.com','fotospr/A eso se le llama poner la basura en su lugar.jpg','2022-10-14 11:23:36','BASJHDBAJHS','HBAJHSD','dasdasd','sdfsdf',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,12,'2022-10-14 11:23:41','root@localhost','Eliminacion de Parametros'),(79,'ABSDASHKB','jhbasjdh','hkbasjhdbas','2347236781','kasdjka@gmail.com','fotospr/A eso se le llama estrategia.jpg','2022-10-14 11:38:12','JBASJHDBAJ','JHB','asdas','asdasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,'2022-10-14 11:38:15','root@localhost','Eliminacion de Parametros'),(80,'CONSULTORIO TEST','NIT TEST\\','BBJBFASDKBBFB','3984263237','test@gmail.com','fotospr/A eso se le llama poner la basura en su lugar.jpg','2022-10-14 12:48:21','TEST','KBJABSDFBA','jhbsdfajh','kasbdas','CONSULTORIO TEST','NIT TEST\\ 123','BBJBFASDKBBFB','3984263237','test@gmail.com','fotospr/A eso se le llama poner la basura en su lugar.jpg','2022-10-14 13:42:18','TEST','KBJABSDFBA','jhbsdfajh','kasbdas',14,'2022-10-14 13:42:18','root@localhost','Actualizacion de Parametros'),(81,'CONSULTORIO TEST','NIT TEST\\ 123','BBJBFASDKBBFB','3984263237','test@gmail.com','fotospr/A eso se le llama poner la basura en su lugar.jpg','2022-10-14 13:42:18','TEST','KBJABSDFBA','jhbsdfajh','kasbdas','CONSULTORIO TEST','NIT TEST\\ 123','BBJBFASDKBBFB','3984263237','test@gmail.com','fotospr/A eso se le llama poner la basura en su lugar.jpg','2022-10-14 13:42:18','TEST','KBJABSDFBA','jhbsdfajh','kasbdas',14,'2022-10-14 13:42:18','root@localhost','Actualizacion de Parametros'),(82,'CONSULTORIO TEST','NIT TEST\\ 123','BBJBFASDKBBFB','3984263237','test@gmail.com','fotospr/A eso se le llama poner la basura en su lugar.jpg','2022-10-14 13:42:18','TEST','KBJABSDFBA','jhbsdfajh','kasbdas','CONSULTORIO TEST 123','NIT TEST\\ 123','BBJBFASDKBBFB','3984263237','test@gmail.com','fotospr/A eso se le llama poner la basura en su lugar.jpg','2022-10-14 13:42:23','TEST','KBJABSDFBA','jhbsdfajh','kasbdas',14,'2022-10-14 13:42:23','root@localhost','Actualizacion de Parametros'),(83,'CONSULTORIO TEST 123','NIT TEST\\ 123','BBJBFASDKBBFB','3984263237','test@gmail.com','fotospr/A eso se le llama poner la basura en su lugar.jpg','2022-10-14 13:42:23','TEST','KBJABSDFBA','jhbsdfajh','kasbdas','CONSULTORIO TEST 123','NIT TEST\\ 123','BBJBFASDKBBFB','3984263237','test@gmail.com','fotospr/A eso se le llama poner la basura en su lugar.jpg','2022-10-14 13:42:23','TEST','KBJABSDFBA','jhbsdfajh','kasbdas',14,'2022-10-14 13:42:23','root@localhost','Actualizacion de Parametros'),(84,'CONSULTORIO TEST 123','NIT TEST\\ 123','BBJBFASDKBBFB','3984263237','test@gmail.com','fotospr/A eso se le llama poner la basura en su lugar.jpg','2022-10-14 13:42:23','TEST','KBJABSDFBA','jhbsdfajh','kasbdas','CONSULTORIO TEST 123','NIT TEST','BBJBFASDKBBFB','3984263237','test@gmail.com','fotospr/A eso se le llama poner la basura en su lugar.jpg','2022-10-14 13:43:12','TEST','KBJABSDFBA','jhbsdfajh','kasbdas',14,'2022-10-14 13:43:12','root@localhost','Actualizacion de Parametros'),(85,'CONSULTORIO TEST 123','NIT TEST','BBJBFASDKBBFB','3984263237','test@gmail.com','fotospr/A eso se le llama poner la basura en su lugar.jpg','2022-10-14 13:43:12','TEST','KBJABSDFBA','jhbsdfajh','kasbdas','CONSULTORIO TEST 123','NIT TEST','BBJBFASDKBBFB','3984263237','test@gmail.com','fotospr/A eso se le llama poner la basura en su lugar.jpg','2022-10-14 13:43:12','TEST','KBJABSDFBA','jhbsdfajh','kasbdas',14,'2022-10-14 13:43:12','root@localhost','Actualizacion de Parametros'),(86,'CONSULTORIO TEST 123','NIT TEST','BBJBFASDKBBFB','3984263237','test@gmail.com','fotospr/A eso se le llama poner la basura en su lugar.jpg','2022-10-14 13:43:12','TEST','KBJABSDFBA','jhbsdfajh','kasbdas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,14,'2022-10-14 13:43:18','root@localhost','Eliminacion de Parametros'),(87,'CONSULTORIOBUEN MEDICO','123456','Cra 20 20 No 80-35','3120212355','consultorio@gmail.com','fotospr/pausa128.png','2022-10-05 11:39:38','GIRARDOT','CUNDINAMARCA','1212','121214','CONSULTORIOBUEN MEDICO','12345678','Cra 20 20 No 80-35','3120212355','consultorio@gmail.com','fotospr/pausa128.png','2022-10-14 13:43:25','GIRARDOT','CUNDINAMARCA','1212','121214',8,'2022-10-14 13:43:25','root@localhost','Actualizacion de Parametros'),(88,'CONSULTORIOBUEN MEDICO','12345678','Cra 20 20 No 80-35','3120212355','consultorio@gmail.com','fotospr/pausa128.png','2022-10-14 13:43:25','GIRARDOT','CUNDINAMARCA','1212','121214','CONSULTORIOBUEN MEDICO','12345678','Cra 20 20 No 80-35','3120212355','consultorio@gmail.com','fotospr/pausa128.png','2022-10-14 13:43:25','GIRARDOT','CUNDINAMARCA','1212','121214',8,'2022-10-14 13:43:25','root@localhost','Actualizacion de Parametros'),(89,'CONSULTORIOBUEN MEDICO','12345678','Cra 20 20 No 80-35','3120212355','consultorio@gmail.com','fotospr/pausa128.png','2022-10-14 13:43:25','GIRARDOT','CUNDINAMARCA','1212','121214','CONSULTORIO BUEN MEDICO','12345678','Cra 20 20 No 80-35','3120212355','consultorio@gmail.com','fotospr/pausa128.png','2022-10-14 13:46:43','GIRARDOT','CUNDINAMARCA','1212','121214',8,'2022-10-14 13:46:43','root@localhost','Actualizacion de Parametros'),(90,'CONSULTORIO BUEN MEDICO','12345678','Cra 20 20 No 80-35','3120212355','consultorio@gmail.com','fotospr/pausa128.png','2022-10-14 13:46:43','GIRARDOT','CUNDINAMARCA','1212','121214','CONSULTORIO BUEN MEDICO','12345678','Cra 20 20 No 80-35','3120212355','consultorio@gmail.com','fotospr/pausa128.png','2022-10-14 13:46:43','GIRARDOT','CUNDINAMARCA','1212','121214',8,'2022-10-14 13:46:43','root@localhost','Actualizacion de Parametros'),(91,'CONSULTORIO SAQUESE2','saquese2','kasjdbhkas','172831268','saquese2@Gamil.com','fotospr/A trabajar.jpg','2022-10-14 13:52:07','SAQUSE2','BASHKDB','asdasdaw','jhabsddfbrgbr',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,16,'2022-10-14 13:52:23','root@localhost','Eliminacion de Parametros'),(92,'CONSULTORIO SAQUESE','saquese','kasjdbhkas','172831268','kasdajh@gmail.com','fotospr/A eso se le llama poner la basura en su lugar.jpg','2022-10-14 13:51:21','SAQUSE','BASHKDB','basd','jhabsd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,15,'2022-10-14 13:52:25','root@localhost','Eliminacion de Parametros'),(93,'CREACIOn','creacion','asjkdskadk','345234123','dasdhbas@gmail.com','fotospr/Agradecido con el de arriba Jotaro.jpg','2022-10-14 13:52:45','KHBASHDABS','HBJHASDASD','lsdfnasjkd','sdfsdw',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,17,'2022-10-14 13:53:48','root@localhost','Eliminacion de Parametros'),(94,'CREACION123123','creacion123123','asjkdskadk','345234123','asdasd@gmail.com','fotospr/A eso se le llama poner la basura en su lugar.jpg','2022-10-14 13:53:25','KHBASHDABS1231232','HBJHASDASD','lsdfnasjkd','sdfsdw',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,18,'2022-10-14 13:53:50','root@localhost','Eliminacion de Parametros');
/*!40000 ALTER TABLE `auditoria_tbl_parametros` ENABLE KEYS */;
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
) ENGINE=MyISAM AUTO_INCREMENT=152 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auditoria_tbl_usuarios`
--

LOCK TABLES `auditoria_tbl_usuarios` WRITE;
/*!40000 ALTER TABLE `auditoria_tbl_usuarios` DISABLE KEYS */;
INSERT INTO `auditoria_tbl_usuarios` VALUES (1,'CARLOS ANTONIO MARTINEZ','mateo210904@gmail.com','$2y$10$58kLSVx1fkeH5EMTSXFvKuTrN9o28PNcV7WA0ZZCVz5DnB1lphEQO',1,'1031643818','2022-10-05 11:39:38','','0000-00-00','',NULL,NULL,NULL,NULL,NULL,'2022-10-05 11:39:38',NULL,NULL,NULL,38,'2022-09-27 11:28:53','root@localhost','Eliminacion de Usuarios'),(2,'JESUS MATEO SANCHEZ DIAZ','medico@gmail.com','$2y$10$S5MMIxXzflLoQx.d0bzvdOHW1p7VpA1EtEPG/L2DPZfv3EB1GdNbm',2,'123','2022-10-05 11:39:38','123','2022-09-21','firmasus/Firma (1).png',NULL,NULL,NULL,NULL,NULL,'2022-10-05 11:39:38',NULL,NULL,NULL,37,'2022-09-29 16:17:05','root@localhost','Eliminacion de Usuarios'),(3,'CAMILO CESAR DIAZ MACONDO','medico2@gmail.com','$2y$10$Jv01wF7ivdoitlCS1mnjdut6nAtR7Sfk5FBxKIKrImlcZyduepQda',2,'1574839756','2022-10-05 11:39:38','3338478283','2022-09-26','firmasus/Firma.png','CAMILO CESAR DIAZ MACONDO','medico@gmail.com','$2y$10$Jv01wF7ivdoitlCS1mnjdut6nAtR7Sfk5FBxKIKrImlcZyduepQda',2,'1574839756','2022-10-05 11:39:38','3338478283','2022-09-26','firmasus/Firma.png',39,'2022-10-02 16:58:07','root@localhost','Actualizacion de Usuarios'),(4,'ADMINISTRADOR LARAVEL','admin2@gmail.com','123',1,'1038297643','2022-10-06 11:46:41','A','0000-00-00','A',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,41,'2022-10-06 12:34:53','root@localhost','Eliminacion de Usuarios'),(5,'EDFADFSD','ieieie@kskd.coos','$2y$10$LKNPvFMYvGOPfMSDyC1z7OoD0dLWxma0Ch7kkp8a7gqjITsqrjYOK',2,'8896','2022-10-07 14:43:36','7D7J','2022-10-07','C:\\xampp\\tmp\\phpBD3.tmp',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,42,'2022-10-07 16:29:37','root@localhost','Eliminacion de Usuarios'),(6,'EDFADFSD','ieieie@kskd.coos','$2y$10$YKqkx9cl.8x9I8ZNIkNQSu0Ziz1yq/WPY2WAdIMS7GQjSxc/TnHiK',2,'8896','2022-10-07 14:46:56','7D7J','2022-10-07','C:\\xampp\\tmp\\php1B17.tmp',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,43,'2022-10-07 16:29:37','root@localhost','Eliminacion de Usuarios'),(7,'EDFADFSD','ieieie@kskd.coos','$2y$10$sdVDySByETaZoItMkfqxa.HJVAM9gQ5Y75JE13hjTKSwq701e6VMS',2,'8896','2022-10-07 14:47:22','7D7J','2022-10-07','C:\\xampp\\tmp\\php7F7F.tmp',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,44,'2022-10-07 16:29:37','root@localhost','Eliminacion de Usuarios'),(8,'REY','rey@gmail.com','$2y$10$GESeCGGQojQ3E9cnPWtqsOCEL/hwzzdJychclYjroc4L2xCEbCBoG',2,'4567876','2022-10-07 14:55:26','9DIOSO','2022-10-14','C:\\xampp\\tmp\\phpE1E2.tmp',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,45,'2022-10-07 16:29:37','root@localhost','Eliminacion de Usuarios'),(9,'REY','rey@gmail.com','$2y$10$zYb.9BfhwZ6PxCCEgyoTwOL6Mf6GhAa.PRDWwAFCdGT4x81Q/3Y4q',2,'4567876','2022-10-07 14:56:25','9DIOSO','2022-10-14','C:\\xampp\\tmp\\phpC9E2.tmp',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,46,'2022-10-07 16:29:37','root@localhost','Eliminacion de Usuarios'),(10,'REY','rey@gmail.com','$2y$10$1O3WtYfM/f0RfEc3Ag8kCOa99Z9D/TYddC8bZCKnQ1P7.14.yVWxi',2,'4567876','2022-10-07 14:56:28','9DIOSO','2022-10-14','C:\\xampp\\tmp\\phpD230.tmp',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,47,'2022-10-07 16:29:37','root@localhost','Eliminacion de Usuarios'),(11,'REY','rey@gmail.com','$2y$10$SvQL6FNGBf0YOk7d1O9Ph.CdfHc1MchQ2rvBdKZhgLODtvov3EEVK',2,'4567876','2022-10-07 14:57:30','9DIOSO','2022-10-14','C:\\xampp\\tmp\\phpC480.tmp',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,48,'2022-10-07 16:29:37','root@localhost','Eliminacion de Usuarios'),(12,'REY','rey@gmail.com','$2y$10$R3uknIISAvxV33RI5DZ.lufHwd2xZqRwOehzdDqWIrTHkJaYD8SA6',2,'4567876','2022-10-07 14:57:59','9DIOSO','2022-10-14','C:\\xampp\\tmp\\php36E2.tmp',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,49,'2022-10-07 16:29:37','root@localhost','Eliminacion de Usuarios'),(13,'ASDASD','gmail@gmail.com','$2y$10$rkeZ2u60Xhhp38YesE2v3.b5BzuCe0txoZcW/e/NqygRMKNEYtjpW',3,'123123','2022-10-07 16:28:30','34234234','2022-10-20','C:\\xampp\\tmp\\php1492.tmp',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,50,'2022-10-07 16:29:37','root@localhost','Eliminacion de Usuarios'),(14,'ADMIN','admin@gmail.com','$2y$10$dtMtB4L.tGxpHZr3Pv55LOICJ3uxW2DJPDiHpdpuhWFcYb1otcmJq',1,'123','2022-10-05 11:39:39','','0000-00-00','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,40,'2022-10-10 11:10:13','root@localhost','Eliminacion de Usuarios'),(15,'SDFASD','gmail@gmail.com','$2y$10$Kt3a3RMPy.tewa9LrpVj9unvTE6bQRadiCeJF3jIJEKPtEaSCo5iG',2,'123124','2022-10-10 11:00:41','SDASDA','2022-10-13','C:\\xampp\\tmp\\phpB3F.tmp',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,53,'2022-10-10 11:10:40','root@localhost','Eliminacion de Usuarios'),(16,'SDFASD','gmail@gmail.com','$2y$10$RCggSr4L4.vO1m4OPM5RtOMQrosf2FLmiYljD2QmgINVO2mJvOboa',2,'123124','2022-10-07 16:31:03','SDASDA','2022-10-13','C:\\xampp\\tmp\\php6C60.tmp',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,52,'2022-10-10 11:10:40','root@localhost','Eliminacion de Usuarios'),(17,'ASDASD','gmail@gmail.com','$2y$10$KNZ7Zghi1PpJOvlO603aVOYrRThgiPu4yPv0ZuBWp9z8tNGcodQYa',3,'345346','2022-10-07 16:29:57','ASDASDAS123','2022-10-21','C:\\xampp\\tmp\\php69B4.tmp',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,51,'2022-10-10 11:10:40','root@localhost','Eliminacion de Usuarios'),(18,'MARIA CAMILA SANCHEZ DIAZ','asistente@gmail.com','$2y$10$Hkp77noroEiiVXucywmIfeF8C8s4M8q0r5DM/t8eXz8GTNiU0huma',3,'123','2022-10-05 11:39:39','','2022-09-21','firmasus/Firma.png','MARIA CAMILA SANCHEZ DIAZ','asistente@gmail.com','$2y$10$Hkp77noroEiiVXucywmIfeF8C8s4M8q0r5DM/t8eXz8GTNiU0huma',3,'123','2022-10-10 11:26:32','','2022-09-21','../views/img/firmasus/Firma.png',36,'2022-10-10 11:26:32','root@localhost','Actualizacion de Usuarios'),(19,'CAMILO CESAR DIAZ MACONDO','medico@gmail.com','$2y$10$Jv01wF7ivdoitlCS1mnjdut6nAtR7Sfk5FBxKIKrImlcZyduepQda',2,'1574839756','2022-10-05 11:39:39','3338478283','2022-09-26','firmasus/Firma.png','CAMILO CESAR DIAZ MACONDO','medico@gmail.com','$2y$10$Jv01wF7ivdoitlCS1mnjdut6nAtR7Sfk5FBxKIKrImlcZyduepQda',2,'1574839756','2022-10-10 11:26:39','3338478283','2022-09-26','../views/img/firmasus/Firma.png',39,'2022-10-10 11:26:39','root@localhost','Actualizacion de Usuarios'),(20,'TEST PARA RICOS','sdad@gmail.com','$2y$10$ZJDujeKQHy3547wJIM3i8.gRYmYO1cH5jj6a2vf7KXLqz96zWoUUu',3,'123124','2022-10-10 13:08:16','AJSDBASK2','2022-09-28','C:\\xampp\\tmp\\phpD846.tmp',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,56,'2022-10-10 13:08:27','root@localhost','Eliminacion de Usuarios'),(21,'TEST PARA RICOS','sdad@gmail.com','$2y$10$su37u3gMgzuTZXXFlOYPS.iQlx1lHEhffMZDOK9uhYLzOouO6cNR2',3,'123124','2022-10-10 13:09:50','AJSDBASK2','2022-09-28','C:\\xampp\\tmp\\php4804.tmp',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,57,'2022-10-10 13:09:58','root@localhost','Eliminacion de Usuarios'),(22,'TEST PARA POBRES','asbdab@gmail.com','$2y$10$nNAc.qy5hZs5iUWUpCcGOOsQJLmUHiGcc2o0AY3O3kMwj7Alkpvpa',2,'12381239','2022-10-10 12:56:44','ASNDKASB23','2022-10-15','C:\\xampp\\tmp\\php4934.tmp',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,54,'2022-10-10 13:12:04','root@localhost','Eliminacion de Usuarios'),(23,'TEST PARA RICOS','sdad@gmail.com','$2y$10$OEhY5vl7B.ghw0SOkilqWecm93Sk4iLURk1Aj0TlRSCjw1ic/kusC',3,'123124','2022-10-10 13:01:32','AJSDBASK2','2022-09-28','C:\\xampp\\tmp\\phpAB56.tmp',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,55,'2022-10-10 13:12:04','root@localhost','Eliminacion de Usuarios'),(24,'ESTO ES UNA PRUEBA','asjdnajnksd@gmail.com','$2y$10$WIz6NqFOzY6qqKwPqF4Efu8fup/MOsAGYM9j1.PnJLdr9cO3u.40.',2,'193820482','2022-10-10 13:10:29','AKSDBAJHS123','2022-10-07','C:\\xampp\\tmp\\phpDE69.tmp',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,58,'2022-10-10 13:12:04','root@localhost','Eliminacion de Usuarios'),(25,'USUARIO TEST','jkdbjka2@gmail.com','$2y$10$5fnQnUVFmcBuRZwN4MwcxOrMVXK9miDHsDFsvhBtFzdOt1MBUL/Xi',2,'12397492','2022-10-10 13:15:05','KJASBDHKABK','2022-10-21','firmasus/Abeja mirando.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,60,'2022-10-10 13:15:15','root@localhost','Eliminacion de Usuarios'),(26,'USUARIO TEST','jkdbjka2@gmail.com','$2y$10$96NSSWgUoe1WViYxG/OOPOOOvUzdRngye.D5pbt1T9lcPULB.qK7q',2,'12397492','2022-10-10 13:18:35','KJASBDHKABK','2022-10-21','firmasus/Abeja mirando.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,61,'2022-10-10 13:18:43','root@localhost','Eliminacion de Usuarios'),(27,'WFSDFSDF','asdasd@gmail.com','$2y$10$STpD0len0DrJVkKRbyz6/utPtQI4CoEl2dsX54n5fW4d/wMHC9oqO',2,'123123','2022-10-13 11:06:52','SDASDAS','2022-10-07','firmasus/f66359dc41808f6490b11039cb7e88a481ef8c29r5-480-270_00.gif',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,66,'2022-10-13 11:10:13','root@localhost','Eliminacion de Usuarios'),(28,'WFSDFSDF','asdasd@gmail.com','$2y$10$bYN5tTPYgtnkwg2PNBQpZO7Rhwx.wTZ7nHJyN7kQLnINCkorW65JG',2,'123123','2022-10-13 11:06:42','SDASDAS','2022-10-07','firmasus/f66359dc41808f6490b11039cb7e88a481ef8c29r5-480-270_00.gif',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,65,'2022-10-13 11:10:15','root@localhost','Eliminacion de Usuarios'),(29,'WFSDFSDF','asdasd@gmail.com','$2y$10$ng94dWr29xYeXU5LOqtT/O8SHwlsq5Q8rLeLD/Enu9Fj5PSeXb9yS',2,'123123','2022-10-13 11:03:22','SDASDAS','2022-10-07','firmasus/f66359dc41808f6490b11039cb7e88a481ef8c29r5-480-270_00.gif',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,63,'2022-10-13 11:10:17','root@localhost','Eliminacion de Usuarios'),(30,'WFSDFSDF','asdasd@gmail.com','$2y$10$vi1hENL.IatBwtrrTpxqpOS1QtuN3.y0r.2SmPgODITR96nktE9r6',2,'123123','2022-10-13 11:03:19','SDASDAS','2022-10-07','firmasus/f66359dc41808f6490b11039cb7e88a481ef8c29r5-480-270_00.gif',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,62,'2022-10-13 11:10:18','root@localhost','Eliminacion de Usuarios'),(31,'WFSDFSDF','asdasd@gmail.com','$2y$10$JdF2q9Q3sWBG02WMK1Ailu3dEnYmwi0tX8jENbs.u0GNagTO7.aTO',2,'123123','2022-10-13 11:06:33','SDASDAS','2022-10-07','firmasus/f66359dc41808f6490b11039cb7e88a481ef8c29r5-480-270_00.gif',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,64,'2022-10-13 11:10:20','root@localhost','Eliminacion de Usuarios'),(32,'ASDASDA','ksbdahsd@gmail.com','$2y$10$WWXNsHyOEBwJX0qUWLWuS.Qiez0XVI.LixYis9v27.jTz2Pec.d8C',2,'jahvsdhaj','2022-10-13 11:12:14','JAVSDGJA','2022-10-07','firmasus/Bites za Dust 2 gif.gif',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,69,'2022-10-13 11:14:18','root@localhost','Eliminacion de Usuarios'),(33,'ASDASDA','ksbdahsd@gmail.com','$2y$10$axqhlQiBWiOH.wfDQrvxTO2gaC8sHxJuMIylFsOS30aMKf7hB.M1O',2,'jahvsdhaj','2022-10-13 11:14:00','JAVSDGJA','2022-10-07','firmasus/Bites za Dust 2 gif.gif',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,71,'2022-10-13 11:14:20','root@localhost','Eliminacion de Usuarios'),(34,'USUARIO TEST','jkdbjka2@gmail.com','$2y$10$fv0zdpTnjTrGB6MkSDd3qe1G28d6L0fMiLi6zVowFKlbKQ84jyf/C',2,'12397492','2022-10-10 13:12:32','KJASBDHKABK','2022-10-21','firmasus/Abeja mirando.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,59,'2022-10-13 11:14:21','root@localhost','Eliminacion de Usuarios'),(35,'ASDASDA','ksbdahsd@gmail.com','$2y$10$NMNAzq6Th/FKoOpa1XkwIeKuuYqK7Om0mB5XKcGel4Ut0NaWKwrIe',2,'jahvsdhaj','2022-10-13 11:12:22','JAVSDGJA','2022-10-07','firmasus/Bites za Dust 2 gif.gif',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,70,'2022-10-13 11:14:23','root@localhost','Eliminacion de Usuarios'),(36,'DKABHSDJHA','1kabhsdas@gmail.com','$2y$10$rd5V6jfMv4T9DWJdBE7j7exO82IBryI5PqN/eWqkgTqN1N.7.ZXTe',3,'jasvda','2022-10-13 11:10:04','JAHVSDJGA','2022-10-07','firmasus/EmbarrassedWarmAmericankestrel-size_restricted.gif',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,67,'2022-10-13 11:14:24','root@localhost','Eliminacion de Usuarios'),(37,'DKABHSDJHA','1kabhsdas@gmail.com','$2y$10$kAWqjeJU3pYBk6VwLSpF.ORNfrvbPXDBrUQY3JRHA5yFclgH6Ucka',3,'jasvda','2022-10-13 11:10:09','JAHVSDJGA','2022-10-07','firmasus/EmbarrassedWarmAmericankestrel-size_restricted.gif',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,68,'2022-10-13 11:14:25','root@localhost','Eliminacion de Usuarios'),(38,'ASBHDHABJ','ahsdbs@gmail.com','$2y$10$EeiDqv5nSU5pQfyk8.Hq5OxMMDAhQFeUhhnRxMIWYsaJsW/ZsVrSe',2,'jhvjasdv','2022-10-13 12:08:09','JHASVDJASV','2022-10-15','firmasus/Arriverdechi.gif',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,72,'2022-10-13 12:12:19','root@localhost','Eliminacion de Usuarios'),(39,'CAMILO CESAR DIAZ MACONDO','medico@gmail.com','$2y$10$Jv01wF7ivdoitlCS1mnjdut6nAtR7Sfk5FBxKIKrImlcZyduepQda',2,'1574839756','2022-10-10 11:26:39','3338478283','2022-09-26','../views/img/firmasus/Firma.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,39,'2022-10-13 12:12:21','root@localhost','Eliminacion de Usuarios'),(40,'ASBHDHABJ','ahsdbs@gmail.com','$2y$10$DYqD.4syV5mo7FnL7WyGnOkCJt/AfttOcuwIBxNcmPz0/6rPqfK5G',2,'jhvjasdv','2022-10-13 12:10:56','JHASVDJASV','2022-10-15','firmasus/Arriverdechi.gif',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,73,'2022-10-13 12:12:25','root@localhost','Eliminacion de Usuarios'),(41,'ASBHDHABJ','ahsdbs@gmail.com','$2y$10$x6sj8WQRpeh/wmm7R9eUFORZorMzX5grfk4TZoULnSW.8R3EScITO',2,'jhvjasdv','2022-10-13 12:12:13','JHASVDJASV','2022-10-15','firmasus/Arriverdechi.gif',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,75,'2022-10-13 12:12:28','root@localhost','Eliminacion de Usuarios'),(42,'BDHASBDJ','jhasdvj@gmail.com','$2y$10$QZpF9zRC45Fn1BZnf.xjXe6dvzbG9iWMYx/CweGUpceMSDjUjJ6hi',2,'hasjhdv','2022-10-13 12:26:17','JAHVSDG','2022-10-08','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,79,'2022-10-13 12:29:20','root@localhost','Eliminacion de Usuarios'),(43,'KJDHFSV','hasdjvhas@gmail.com','$2y$10$lsMVQp.Gqvz68FAEDY9cUuS9nsZRd2IuKlSOBfEa.0Vi35VK4hZlS',3,'jhvjahsvd','2022-10-13 12:25:51','JHVASJHD','2022-10-14','firmasus/f66359dc41808f6490b11039cb7e88a481ef8c29r5-480-270_00.gif',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,78,'2022-10-13 12:29:22','root@localhost','Eliminacion de Usuarios'),(44,'KJDHFSV','hasdjvhas@gmail.com','$2y$10$vbF9EbzD1eAiNjuVM6BAOOaDqqVfzNxQx17w.8bPo9RSkh9jt2kWO',3,'jhvjahsvd','2022-10-13 12:25:36','JHVASJHD','2022-10-14','firmasus/f66359dc41808f6490b11039cb7e88a481ef8c29r5-480-270_00.gif',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,77,'2022-10-13 12:29:23','root@localhost','Eliminacion de Usuarios'),(45,'BDHASBDJ','jhasdvj@gmail.com','$2y$10$83lTidPBxE4kJ/0Z4FlrA.eKSp09i0BQdhhegq/2rgkeUgUMNmE1u',2,'hasjhdv','2022-10-13 12:18:19','JAHVSDG','2022-10-08','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,76,'2022-10-13 12:29:26','root@localhost','Eliminacion de Usuarios'),(46,'ASBHDHABJ','ahsdbs@gmail.com','$2y$10$LlofRu1MBgjPZWUH6QpX4eeD.O0JAtf6Cj5O2N1IJeSkDfW16ifqi',2,'jhvjasdv','2022-10-13 12:12:05','JHASVDJASV','2022-10-15','firmasus/Arriverdechi.gif',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,74,'2022-10-13 12:29:47','root@localhost','Eliminacion de Usuarios'),(47,'BDHASBDJ','jhasdvj@gmail.com','$2y$10$0j8eQSI6whuNj83kIAXzpuZST3HYb6FdVsEvk0UaWM50U8SOX9SNu',2,'hasjhdv','2022-10-13 12:26:41','JAHVSDG','2022-10-08','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,80,'2022-10-13 12:29:53','root@localhost','Eliminacion de Usuarios'),(48,'BDHASBDJ','jhasdvj@gmail.com','$2y$10$nJfwa1SUjS45d79yfQ8LsetJ6OSLeWqhLseJ2WmsgSqeaWBaVLVk2',2,'hasjhdv','2022-10-13 12:27:55','JAHVSDG','2022-10-08','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,81,'2022-10-13 12:29:55','root@localhost','Eliminacion de Usuarios'),(49,'BDHASBDJ','jhasdvj@gmail.com','$2y$10$T2ZmOrhXat64PjeCms5NJOzTvuDzFJZSAIO0jNzB06hjabbePK4la',2,'hasjhdv','2022-10-13 12:28:36','JAHVSDG','2022-10-08','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,82,'2022-10-13 12:29:56','root@localhost','Eliminacion de Usuarios'),(50,'SDASD','asdasd@gmail.com','$2y$10$pznBewTU75z5hXlp/5Ye9O1nOxLJ7AdekEqVewIgVAJCfeggTzxsi',2,'asdasd','2022-10-13 12:29:42','ASDAS','2022-10-14','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,83,'2022-10-13 12:29:56','root@localhost','Eliminacion de Usuarios'),(51,'FFFFFF','fffff@fffff.fff','$2y$10$gUGVvOXmjqBxRlGnWblEHuSSOZfUlsucfGQ950TL5ni/gt6yfJgZy',2,'44444','2022-10-13 12:40:03','FFFR4344','2022-10-06','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,91,'2022-10-13 14:07:39','root@localhost','Eliminacion de Usuarios'),(52,'GGGGG','gggg@ggg.ggg','$2y$10$iu/irh.sa6PW8AO5Dc0fgulnqNTQ6p6erwyoj6V99AJQvVRonsNry',2,'3333','2022-10-13 12:37:13','4343FFF','2022-10-13','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,90,'2022-10-13 14:07:39','root@localhost','Eliminacion de Usuarios'),(53,'TEST2','test2@gmail.com','$2y$10$baYy/F65FWghOJQj/Dkc9eXCFc8nUMxsivbl6qjDnoRLZcDPw5uo.',2,'aksdbajhsdb','2022-10-13 12:34:56','KBASDBA','2022-10-08','firmasus/A eso se le llama estrategia.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,87,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(54,'TEST2','test2@gmail.com','$2y$10$f20AvM8Uo/z9S8hk5m4wmeJ9LEIWwqOZCS92f1AEtlz4KpdM8hdDO',2,'aksdbajhsdb','2022-10-13 12:35:03','KBASDBA','2022-10-08','firmasus/A eso se le llama estrategia.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,88,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(55,'TEST2','test2@gmail.com','$2y$10$K31IGky59mqGycPB80Fwy..GSF9qTBFeOjH0zeBnvuSerz1ZxqNlq',2,'aksdbajhsdb','2022-10-13 12:36:14','KBASDBA','2022-10-08','firmasus/A eso se le llama estrategia.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,89,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(56,'TEST','test@gmail.com','$2y$10$CVjeUdZwaWhLmzC950VpGOloEStwDleiPNgaPwDEzbX7/FXuPAG42',2,'123127','2022-10-13 12:30:30','EBSFBASDJHB','2022-10-07','firmasus/A eso se le llama estrategia.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,84,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(57,'TEST','test@gmail.com','$2y$10$.pCBuSJ2FMxR3esfZnnqeO5EJ2f/mas6anbj7oUUakR1vbOwuuYOW',2,'123127','2022-10-13 12:31:18','EBSFBASDJHB','2022-10-07','firmasus/A eso se le llama estrategia.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,85,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(58,'','','$2y$10$L5yKhugpFCfUjXzYmEhggejPOGDlUtM3Vk1n9wzFSU9AEd0rItUgm',0,'','2022-10-13 12:34:02','','1970-01-01','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,86,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(59,'BBBBBBBBER','BBB@BBB.BBB','$2y$10$uJVpkTuS1OSy4rBaQNsnb.ZlJ5HKnVwmUaFk64pAZjXRwy4YBQXwa',2,'76777','2022-10-13 12:42:28','HHHH55','2022-10-12','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,94,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(60,'FFFFFF','fffff@fffff.fff','$2y$10$mf.dKKQ1UIwCw/p0rcoT2ue07ytJ2Vf.MRFeMuhGGp9N8taaZ6CKS',2,'44444','2022-10-13 12:41:31','FFFR4344','2022-10-06','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,92,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(61,'FFFFFF','fffff@fffff.fff','$2y$10$UmlqUxuT6kYVbjh6sjocLuwY8Z5To0zSgkeT03adv5W8Uw7ktKkQy',2,'44444','2022-10-13 12:41:41','FFFR4344','2022-10-06','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,93,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(62,'DNASDBH','ashdasvjd@gmail.com','$2y$10$WBZwzxawnEAwClwVRuJqiOIj6cctpdvmWHsAjiZTBoNdmj0kBN9tm',2,'basdasv','2022-10-13 12:57:48','VDGASDHGA','2022-10-06','firmasus/A levantarse.mp4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,95,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(63,'ASDFGHJK','sdfg@kjhgf.sdfgh','$2y$10$jzeb1HulKz9mrDVLWTwax.4YLovh.F3kMe.nrSk7msxLzM.YTL8QG',2,'987654','2022-10-13 13:01:21','DFGH987','2022-10-13','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,96,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(64,'ASDFGHJK','sdfg@kjhgf.sdfgh','$2y$10$U/RI.ehXPN7gGGg.LDTKVOJIeZ3KNI67ssqtytJbQ2zPU.NrCqeSK',2,'987654','2022-10-13 13:01:54','DFGH987','2022-10-13','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,97,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(65,'','','$2y$10$X4Oo2tGmWdmAUMfrV6ddpuK8qBxZ.cVwQzpnSwyn10RessxQUZIYW',0,'','2022-10-13 13:05:09','','1970-01-01','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,98,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(66,'','','$2y$10$eEnVp3E5w5iXJ7XAHdGbaer93i/qA77QRL.y/9J17kOvJy6KyxsSm',0,'','2022-10-13 13:07:58','','1970-01-01','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,99,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(67,'','','$2y$10$5aaRKXK.A.XG14imuQCsGOmK6MYHszn9smiyeJqMcQfokR8TiN7ue',0,'','2022-10-13 13:08:54','','1970-01-01','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,100,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(68,'','','$2y$10$1X0/KXrsRsBWShDQjlGC0O/vdjpJNF3Qs.u.wb9qvulKlMr0hYHsm',0,'','2022-10-13 13:45:40','','1970-01-01','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,101,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(69,'','','$2y$10$wFpBnmSi0mpX0r16BVINLeSJmM9QuJtYnMjYA8NGFIGJHDXChCsz2',0,'','2022-10-13 13:46:33','','1970-01-01','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,102,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(70,'','','$2y$10$O/l3IN6aocyeQwVqRrfVBuelCvmxxXNG64u3h0fcnZheKo4QH/9ja',0,'','2022-10-13 13:46:43','','1970-01-01','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,103,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(71,'WWWWWWWWW','wwwww@www.www','$2y$10$F1CKlQJbrQzutL7acP7E6.uoHXqzBCjcAwsl4QqH3q2GpLrbuOkKm',2,'66666','2022-10-13 13:48:12','74747HDHD','2022-10-19','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,104,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(72,'ASDFGHJK','sdfg@kjhgf.sdfgh','$2y$10$ZgIX2MAi8QoYnUlYAUHqdurUF2Xkoou1I7m86zUzI9PmUN3XwCuhi',2,'987654','2022-10-13 13:49:28','DFGH987','2022-10-13','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,105,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(73,'WWWWWWWWW','wwwww@www.www','$2y$10$G/8IzMjAsdmE0LDUV4FLLufUs/gBe6qbOZCpCdTBQ2rMA3Ibk8vGO',2,'66666','2022-10-13 13:54:23','74747HDHD','2022-10-19','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,106,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(74,'WWWWWWWWW','wwwww@www.www','$2y$10$Zapbv4nEg.P1fZh/Ge3tnO.Ezi6lnpeCGiDmpXL1SEql4ZZQfDYzi',2,'66666','2022-10-13 13:59:29','74747HDHD','2022-10-19','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,107,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(75,'WWWWWWWWW','wwwww@www.www','$2y$10$hHIFXGkEJHn3kNi.Q5RQ6OBS2kkossct9ZIHuh9cnICMwA.GUgV6m',2,'66666','2022-10-13 14:00:17','74747HDHD','2022-10-19','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,108,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(76,'WWWWWWWWW','wwwww@www.www','$2y$10$T7n9IbYhEzNyA44jS.9RKukPNCSy6BRQGBIwKbHOVgFB6PHfF59YO',2,'66666','2022-10-13 14:02:51','74747HDHD','2022-10-19','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,109,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(77,'RRRRRRRRRRRRRRR','rrrr@rrrr.rrr','$2y$10$wStZi8xdzqgOV.aHweVjeO4z3YQ1EOybsKLY3mXWWu76U0m1nrefS',3,'343434','2022-10-13 14:05:05','3435EERE','2022-10-13','firmasus/A ver pendejos.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,110,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(78,'RRRRRRRRRRRRRRR','rrrr@rrrr.rrr','$2y$10$G/eNDEvi23R9GGy3c/oqXufrAxAbBIHfAGaf.ugi0SQYDgijtYnpq',3,'343434','2022-10-13 14:06:55','3435EERE','2022-10-13','firmasus/A ver pendejos.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,111,'2022-10-13 14:07:40','root@localhost','Eliminacion de Usuarios'),(79,'KJDKASDJH','gjvsda@gmail.com','$2y$10$arPzSkEBWSTAcmwxkWk7geSLP7Mz5dPpzjYtX9hTekkNAsn.zYJ8W',3,'jvasdgja','2022-10-13 15:13:59','JVADVSD','2022-10-06','firmasus/A ver pendejos.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,125,'2022-10-13 15:14:31','root@localhost','Eliminacion de Usuarios'),(80,'ERTY','rtyuiop@oiuytr.coo','$2y$10$IvAO7wVndKlHF6dVZYeCXuhb7MIjfXBhKqkQkB6O6DqmgQnaNt9TO',2,'45678','2022-10-13 15:05:05','JHGF678','2022-10-13','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,124,'2022-10-13 15:14:31','root@localhost','Eliminacion de Usuarios'),(81,'RTYUI','rtyui@rtyui.ty','$2y$10$gMBNZcRct7UzNiwiw4aFwuVLbW4pf9M0QUSerWUZUyOjWiOzz25E2',2,'56789','2022-10-13 14:30:00','RTYU67','2022-10-13','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,123,'2022-10-13 15:14:31','root@localhost','Eliminacion de Usuarios'),(82,'RTYUI','rtyui@rtyui.ty','$2y$10$7UdJ3DQ4IxZ8AHRoGhhXauoavF6JZFszLGqmdMuYZ7vKdo3gNHhsm',2,'56789','2022-10-13 14:29:22','RTYU67','2022-10-13','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,122,'2022-10-13 15:14:31','root@localhost','Eliminacion de Usuarios'),(83,'WERTYUI','iweioio@jsdjk.ckck','$2y$10$qvqd/6rtcKZy0gUtCkbdve6h9I1hFK7MHqpphtztFE8P0C9BMqaqu',2,'8944','2022-10-13 14:21:43','KLSKL39','2022-10-13','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,121,'2022-10-13 15:14:31','root@localhost','Eliminacion de Usuarios'),(84,'WERTYUI','iweioio@jsdjk.ckck','$2y$10$08VMOJrPAZc417PrE7DgtOPfvUPJaU1gE43ZLmSU1uU.Avh1qin7W',2,'8944','2022-10-13 14:21:35','KLSKL39','2022-10-13','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,120,'2022-10-13 15:14:31','root@localhost','Eliminacion de Usuarios'),(85,'WERTYUI','iweioio@jsdjk.ckck','$2y$10$iV2Wc3YBRYdjf3ep/as2re6TTR5JjjcIXnEZl9nmyab0rZ0JJIk9a',2,'8944','2022-10-13 14:17:49','KLSKL39','2022-10-13','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,119,'2022-10-13 15:14:31','root@localhost','Eliminacion de Usuarios'),(86,'WERTYUI','iweioio@jsdjk.ckck','$2y$10$CWB3x8r9tivWAu1Z/xR2N.qjBy4iTSKiMNiFnDkZupLYCnCfZ.Lye',2,'8944','2022-10-13 14:16:24','KLSKL39','2022-10-13','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,118,'2022-10-13 15:14:31','root@localhost','Eliminacion de Usuarios'),(87,'RRRRRRRRRRR','rrrrr@rrr.rrr','$2y$10$bjgKoMVOfzTocnVutgNj6.Zvg0oWFJGMa/9joKi.dBBEu.EZeCV0q',3,'34343','2022-10-13 14:13:13','343ERE','2022-10-13','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,117,'2022-10-13 15:14:31','root@localhost','Eliminacion de Usuarios'),(88,'RRRRRRRRRRR','rrrrr@rrr.rrr','$2y$10$cInYmi95XDQCPyBxBXss6eL3n98666nZFNQQlJPnT82GmSfNmsXiG',3,'34343','2022-10-13 14:13:12','343ERE','2022-10-13','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,116,'2022-10-13 15:14:31','root@localhost','Eliminacion de Usuarios'),(89,'RRRRRRRRRRR','rrrrr@rrr.rrr','$2y$10$NqxbUcaxbCLsY/6M4zj9fep901x9Ucc20z9deAiWc9YNj9418oBWi',3,'34343','2022-10-13 14:13:11','343ERE','2022-10-13','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,115,'2022-10-13 15:14:31','root@localhost','Eliminacion de Usuarios'),(90,'RRRRRRRRRRR','rrrrr@rrr.rrr','$2y$10$fPIjfJsMnMz2y/8fDfpo3eaO9.peFBt15Gn7RsQyQQU5u7f4Xa7iW',3,'34343','2022-10-13 14:12:35','343ERE','2022-10-13','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,114,'2022-10-13 15:14:32','root@localhost','Eliminacion de Usuarios'),(91,'WWWWWWWW','www@www.www','$2y$10$msOqU8Npkgh8RakOIEeT2.XnS.nJo6YF9dcXPBQ0sDAic3XpMSD.W',2,'123455','2022-10-13 14:11:20','SDFD33','2022-10-13','firmasus/A trabajar.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,113,'2022-10-13 15:14:32','root@localhost','Eliminacion de Usuarios'),(92,'WWWWWWWW','www@www.www','$2y$10$tf9ne9aroiv2Mb8ruptII.H.VORVbTU9JvcwpyBEcFzke6JoygWPm',2,'123455','2022-10-13 14:08:39','SDFD33','2022-10-13','firmasus/A trabajar.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,112,'2022-10-13 15:14:32','root@localhost','Eliminacion de Usuarios'),(93,'ASDASD','khabsd@gmail.com','$2y$10$4ZS0mnBmq1JtG939IvwOX.DR5ya7UHy8LwHqQvOIczz0Rbqkv9o5.',3,'kabhsdhkas','2022-10-13 15:14:57','KABSDHK','2022-10-22','firmasus/A ver A ver que paso.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,126,'2022-10-13 15:20:32','root@localhost','Eliminacion de Usuarios'),(94,'SBDJK','badjsda@gmail.com','$2y$10$8wJ7otxYf5MZ.dZpmeYLnuCgBt.EvprOz/tyqM1OeNhzqdcjCwCDa',3,'kabskdaj','2022-10-13 15:25:06','KBUIDHASBD','2022-09-30','firmasus/A ver pendejos.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,131,'2022-10-13 15:25:12','root@localhost','Eliminacion de Usuarios'),(95,'SBDJK','badjsda@gmail.com','$2y$10$ztws4BUKixjC4Zk1pBsccuSIzbCDRTNmeoDOSFB1yLgrUpqsUf8bm',3,'kabskdaj','2022-10-13 15:24:24','KBUIDHASBD','2022-09-30','firmasus/A ver pendejos.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,130,'2022-10-13 15:25:13','root@localhost','Eliminacion de Usuarios'),(96,'SBDJK','badjsda@gmail.com','$2y$10$./uM7k./PD7wSrzB5c4DcOD0SFgRbaCOdPDojxZ46UZ1XZ3IECVdm',3,'kabskdaj','2022-10-13 15:24:21','KBUIDHASBD','2022-09-30','firmasus/A ver pendejos.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,129,'2022-10-13 15:25:14','root@localhost','Eliminacion de Usuarios'),(97,'SBDJK','badjsda@gmail.com','$2y$10$NxNVQRadgtfRAM6fzSCfdeTmlCzSqQiv7jVVFQ17//hDe/PgZBsd.',3,'kabskdaj','2022-10-13 15:24:19','KBUIDHASBD','2022-09-30','firmasus/A ver pendejos.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,128,'2022-10-13 15:25:15','root@localhost','Eliminacion de Usuarios'),(98,'BBBBBBBBB','asdasd@gmail.com','$2y$10$kdULvXJ7A9EePcfhh4jT1eokUzqecuX7GKKsepCoHhDZc5Ehrpu26',3,'hbasdjh','2022-10-13 15:26:20','ASDASD','2022-10-14','firmasus/A ver pendejos.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,133,'2022-10-13 15:30:58','root@localhost','Eliminacion de Usuarios'),(99,'ASDBASJH','jhbajhsdb@gmail.com','$2y$10$T4XFCRTvzltpreEbxmjpM.AEgdcoWBiG/O.2I6lwSvwMT6Tm1Ium.',2,'bjhdbajhsbd','2022-10-13 15:25:28','JHBASJHD','2022-10-08','firmasus/A ver pendejos.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,132,'2022-10-13 15:30:59','root@localhost','Eliminacion de Usuarios'),(100,'ADMIN','admin@gmail.com','$2y$10$TqCsQWu6dF39ioBDqylkWOlslcLW8BFw5dnDUCxKRGb7umehgMtn2',1,'123456','2022-10-13 15:33:17','','2022-10-13','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,135,'2022-10-13 15:33:20','root@localhost','Eliminacion de Usuarios'),(101,'ADMIN','admin@gmail.com','$2y$10$3H3yTOYnGDKjigLhr6J/9ebq4tjhraKNk/2KigI8TYavHkd08G4cG',1,'123456','2022-10-13 15:33:12','','2022-10-13','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,134,'2022-10-13 15:37:28','root@localhost','Eliminacion de Usuarios'),(102,'ADMIN','admin@gmail.com','$2y$10$iZyHP5HDSMGB55ZWe9D7dubswjdzRQf0UW6Qjt02m5xqnnDAPYhru',1,'123','2022-10-13 15:37:36','','2022-10-13','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,136,'2022-10-13 15:37:40','root@localhost','Eliminacion de Usuarios'),(103,'ADMIN','admin@gmail.com','$2y$10$O.Pokd4IWMXKMCxvOnSKbONsSDGPu6eoqMHJicJOoj6Jr2dEcvS6O',1,'123345','2022-10-13 15:39:16','','2022-10-13','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,138,'2022-10-13 15:39:17','root@localhost','Eliminacion de Usuarios'),(104,'ADMIN','admin@gmail.com','$2y$10$ZUmHRWsNBrMO2TcGkYsjjeR9yOE441bXAPE1qQT723a6Vwk.xWPQO',1,'123345','2022-10-13 15:39:14','','2022-10-13','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,137,'2022-10-13 15:40:24','root@localhost','Eliminacion de Usuarios'),(105,'REPETICIOn','rp@gmail.com','$2y$10$7Ke8iG8vBH8vm3o2rPxCx.I9iycGhzF.hnsxQtqlyutgiA8JNMIvi',1,'123','2022-10-13 15:48:30','','2022-10-13','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,142,'2022-10-13 15:48:32','root@localhost','Eliminacion de Usuarios'),(106,'REPETICIOn','rp@gmail.com','$2y$10$eoKQwPTd0cpGDoNeMu4MteH4C9Q64s3RtLMsvQH6f25rZq4VQxYi.',1,'123','2022-10-13 15:48:31','','2022-10-13','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,143,'2022-10-13 15:48:33','root@localhost','Eliminacion de Usuarios'),(107,'REPETICIOn','rp@gmail.com','$2y$10$FAY27IG0tEAZEKUDs2VH7O.4qcdMHdH8xlnhxp1ywKfm1.AVNiBsu',1,'123','2022-10-13 15:48:26','','2022-10-13','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,140,'2022-10-13 15:48:34','root@localhost','Eliminacion de Usuarios'),(108,'REPETICIOn','rp@gmail.com','$2y$10$O7Um6D/SFNO5r7byqW4eAecvWHtNpV2OMgV9RWCMkuz5DsAy2NAWK',1,'123','2022-10-13 15:48:29','','2022-10-13','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,141,'2022-10-13 15:50:07','root@localhost','Eliminacion de Usuarios'),(109,'REPETICION','repeticion@gmi.com','$2y$10$08UF7wpiw5cGU2groi5wJuYJevXTeV/Lme58D08KI/X8R/bbplWFi',1,'123','2022-10-13 15:50:31','','2022-10-13','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,146,'2022-10-13 15:50:33','root@localhost','Eliminacion de Usuarios'),(110,'REPETICION','repeticion@gmi.com','$2y$10$6YLRftRSIe48YpNX208/Guao6sNTgHa1t5hzRB5qgjUfzjFUMuc5.',1,'123','2022-10-13 15:50:30','','2022-10-13','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,145,'2022-10-13 15:50:34','root@localhost','Eliminacion de Usuarios'),(111,'REPETICION','repeticion@gmi.com','$2y$10$X6xpUA3aJLoZx1TJAgS/OOJzaO8pGiUMH1GwWINGPtLTQNE.s3RSy',1,'123','2022-10-13 15:50:32','','2022-10-13','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,147,'2022-10-13 15:50:35','root@localhost','Eliminacion de Usuarios'),(112,'REPETICION','repeticion@gmi.com','$2y$10$H8obVRyF7j317LiCcO4xtOhJ4CLjZbAKqhgMqXh0NeZdyoSAqpOte',1,'123','2022-10-13 15:50:29','','2022-10-13','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,144,'2022-10-13 15:50:36','root@localhost','Eliminacion de Usuarios'),(113,'REPETICION','repe@gmail.com','$2y$10$08KbzmefSwh42G49hR1.qubS6UkcsyG6DaEQUkEvZf6FMu6o0BA/C',1,'123456','2022-10-13 15:53:09','','2022-10-13','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,149,'2022-10-13 15:53:11','root@localhost','Eliminacion de Usuarios'),(114,'REPETICION','repe@gmail.com','$2y$10$isB9RUSVm0IheWeoYzspwuH2B/.H3yf3S/7KAJ99t9RSzTMbkL1ui',1,'123456','2022-10-13 15:53:07','','2022-10-13','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,148,'2022-10-13 15:53:16','root@localhost','Eliminacion de Usuarios'),(115,'MODULO','modulo@gmail.com','$2y$10$LqVPAI.4TojN2j5VAWabou.C6/RzEtM4okooNQCwXOcMdNXuylVHm',1,'123','2022-10-13 15:55:25','','2022-10-13','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,151,'2022-10-13 15:55:28','root@localhost','Eliminacion de Usuarios'),(116,'MODULO','modulo@gmail.com','$2y$10$bTCUdsbFxcBTA4THPU3TOOOqm8KwnutvICR9j5H/TbnTvGPTzcJaK',1,'123','2022-10-13 15:55:23','','2022-10-13','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,150,'2022-10-13 15:55:28','root@localhost','Eliminacion de Usuarios'),(117,'TEST','tse@gmail.com','$2y$10$Z1Ud0k6V6kaCklb1VZmkqegRQo50.y6d8h/9asFgWVHKEjQb7H4k2',1,'123','2022-10-13 15:57:08','','2022-10-13','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,152,'2022-10-13 15:57:12','root@localhost','Eliminacion de Usuarios'),(118,'TEST','tse@gmail.com','$2y$10$mZpdgvottpG/ngwqHB2YCur5zOI1gUzv97aXej0dNswdNBVtpWiNu',1,'123','2022-10-13 15:57:11','','2022-10-13','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,153,'2022-10-13 15:57:13','root@localhost','Eliminacion de Usuarios'),(119,'REPETICIOn','ashbds@gmail.com','$2y$10$CuRGNnWyW3HpdkOR/o/dRO88.qeF/0q9PtQp3r.pY36VAa1NFuCf2',3,'12736','2022-10-13 15:58:03','B76','2022-10-08','firmasus/A ver A ver que paso.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,155,'2022-10-13 15:58:21','root@localhost','Eliminacion de Usuarios'),(120,'REPETICIOn','ashbds@gmail.com','$2y$10$dq/lbn2rz4MPDGH117yGyOh6DdeoL6QMXxkxf.h1V/W1qLxAZ2.6u',3,'12736','2022-10-13 15:58:19','B76','2022-10-08','firmasus/A ver A ver que paso.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,156,'2022-10-13 15:58:23','root@localhost','Eliminacion de Usuarios'),(121,'REPETICIOn','ashbds@gmail.com','$2y$10$ICGKI8jIviYXu5crFmosbuBkgdZFkh.TNr0.EV2.IA8eJYKkmX3RC',3,'12736','2022-10-13 15:58:02','B76','2022-10-08','firmasus/A ver A ver que paso.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,154,'2022-10-13 15:58:24','root@localhost','Eliminacion de Usuarios'),(122,'SDBAH','jhabsda@gmail.com','$2y$10$zGoReoiH5QWJ4AlLrAcg5Oml6MVrlKmDrXR8idBptfTpy5m0SUvPm',3,'khasbdjh123','2022-10-13 15:58:50','KASDHJA','2022-10-08','firmasus/A ver pendejos.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,158,'2022-10-13 15:58:52','root@localhost','Eliminacion de Usuarios'),(123,'SDBAH','jhabsda@gmail.com','$2y$10$PbjL29s1whnQBMj43aoDpufwkEgqCrA5cXhlSLixCz3CWrzSSWVMi',3,'khasbdjh123','2022-10-13 15:58:49','KASDHJA','2022-10-08','firmasus/A ver pendejos.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,157,'2022-10-13 15:59:02','root@localhost','Eliminacion de Usuarios'),(124,'ASDABJH','jhavsd@gmail.com','$2y$10$yia5ByIcrdFRmS/LvPGn/uDR59QKNiJT5/LyptPSMdG7zAHtDv9JS',2,'jhasdj','2022-10-13 15:59:51','JHAJHSDV','2022-10-08','firmasus/A ver si esto es de tu talla.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,159,'2022-10-13 16:00:04','root@localhost','Eliminacion de Usuarios'),(125,'ASDABJH','jhavsd@gmail.com','$2y$10$4KyrbL2koDj1gkkLTxmipeMvMVHRMz07ciXi8AvG4ECRMJU95vy7G',2,'jhasdj','2022-10-13 15:59:52','JHAJHSDV','2022-10-08','firmasus/A ver si esto es de tu talla.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,160,'2022-10-13 16:00:05','root@localhost','Eliminacion de Usuarios'),(126,'ASDKAB','jhbasdjh@gmail.com','$2y$10$KPsCN60.dPqyvkLH6vbvXuupbdaGCtirOB0zKI8GnBUFSWEQhKkm.',3,'khabsda','2022-10-13 16:01:19','KHABSDH','2022-10-07','firmasus/A eso se le llama estrategia.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,162,'2022-10-13 16:01:21','root@localhost','Eliminacion de Usuarios'),(127,'ASDKAB','jhbasdjh@gmail.com','$2y$10$ykPjvEgHkRl/4yJvVTX48eqfsjOCl0mtm/Rk3svY9Pj7D4xJmRUuG',3,'khabsda','2022-10-13 16:01:18','KHABSDH','2022-10-07','firmasus/A eso se le llama estrategia.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,161,'2022-10-13 16:01:22','root@localhost','Eliminacion de Usuarios'),(128,'ASDASD','asdasd@gmail.com','$2y$10$oJw5HUD/4fSv1SqCiMNJHO6hO7dmv933U1dSjh4k15jCmMS86GCgm',3,'asdasd','2022-10-13 16:02:59','123SDFA','2022-10-08','firmasus/A ver pendejos.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,165,'2022-10-13 16:03:03','root@localhost','Eliminacion de Usuarios'),(129,'ASDASD','asdasd@gmail.com','$2y$10$s6px0PuKStiS067UcB/YSOERJ0tL4tT4qfKy.cM1prd5c5XYwB852',3,'asdasd','2022-10-13 16:02:56','123SDFA','2022-10-08','firmasus/A ver pendejos.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,164,'2022-10-13 16:03:07','root@localhost','Eliminacion de Usuarios'),(130,'AASDASD','asdasd@gmail.com','$2y$10$eoWm4sN/OLafsiZ3qkfkBOjUQe6Pf7SRAdK9rfGX.Uc3eM35WfO1G',3,'asdasd','2022-10-13 16:02:26','ASDASD','2022-10-06','firmasus/A ver si esto es de tu talla.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,163,'2022-10-13 16:03:08','root@localhost','Eliminacion de Usuarios'),(131,'REPETICIOn','alsjdna@gmail.com','$2y$10$cKJ3EYjQ0d7/SGDC2Zn9wePb7BCNGfYHq7aNwut.PtV3oioMcEase',2,'asjndak','2022-10-13 16:03:24','KASBD','2022-10-01','firmasus/A eso se le llama poner la basura en su lugar.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,166,'2022-10-13 16:03:28','root@localhost','Eliminacion de Usuarios'),(132,'REPETICIOn','alsjdna@gmail.com','$2y$10$8fT8IGgU1iUoDAyo1YgSMOqaqtx7j.4p6Emd1sj1rR6ze5H4Esgd6',2,'asjndak','2022-10-13 16:03:26','KASBD','2022-10-01','firmasus/A eso se le llama poner la basura en su lugar.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,167,'2022-10-13 16:03:29','root@localhost','Eliminacion de Usuarios'),(133,'ASDKABS','jhbasjhdbasj@gmail.com','$2y$10$oSbOk6CXvBTiZ//u.QQz6.hIm5ftbAUJR3bXu3XooI4GMMm2I8b.2',3,'kbasdjh','2022-10-13 16:05:36','JHBASDJHBA','2022-09-30','firmasus/A trabajar.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,171,'2022-10-13 16:05:39','root@localhost','Eliminacion de Usuarios'),(134,'ASDKABS','jhbasjhdbasj@gmail.com','$2y$10$.pxHF7XUDXv2U6a3y23ereNgGxYTHagB.U34DEVaC.quuOvUIswgS',3,'kbasdjh','2022-10-13 16:05:33','JHBASDJHBA','2022-09-30','firmasus/A trabajar.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,170,'2022-10-13 16:05:40','root@localhost','Eliminacion de Usuarios'),(135,'ASDKABS','jhbasjhdbasj@gmail.com','$2y$10$l09e/br5udpIlwHFz1WehOKSwN4JxnxsNOo8ZcNKSovRLKoWrj6.q',3,'kbasdjh','2022-10-13 16:05:30','JHBASDJHBA','2022-09-30','firmasus/A trabajar.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,169,'2022-10-13 16:05:44','root@localhost','Eliminacion de Usuarios'),(136,'REPETICION','jhbashd@gmail.com','$2y$10$.hAsUZCzzh8c3LNeHdKbJezW70b/VNGdPEmVgfC1pgmFYRgHk4HHq',3,'asdhba','2022-10-13 16:06:14','JBASDJHA','2022-10-01','firmasus/A eso se le llama poner la basura en su lugar.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,174,'2022-10-13 16:06:16','root@localhost','Eliminacion de Usuarios'),(137,'REPETICION','jhbashd@gmail.com','$2y$10$4Y1vIiwZXGUZe3m8r1jNxewD2EZM0w7PMujmfKC4yMWo4DUrorVHG',3,'asdhba','2022-10-13 16:06:10','JBASDJHA','2022-10-01','firmasus/A eso se le llama poner la basura en su lugar.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,172,'2022-10-13 16:06:17','root@localhost','Eliminacion de Usuarios'),(138,'REPETICION','jhbashd@gmail.com','$2y$10$W4bJa3MhaGJ5X0sBc/UqxeOn56iEFYwAjl4JPQXsi.SRFHQbm4D4q',3,'asdhba','2022-10-13 16:06:12','JBASDJHA','2022-10-01','firmasus/A eso se le llama poner la basura en su lugar.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,173,'2022-10-13 16:06:19','root@localhost','Eliminacion de Usuarios'),(139,'ASDASD','123@gmail.com','$2y$10$wvCaT7FnHyqtgHMU9Uyxf.uANwvLIDvF6MYUrKnTWOd/8hIYsoRr.',3,'asdasd','2022-10-13 16:04:32','ASDASD','2022-09-28','firmasus/A eso se le llama estrategia.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,168,'2022-10-13 16:06:21','root@localhost','Eliminacion de Usuarios'),(140,'REPETICIOn','kjansdjk@gmail.com','$2y$10$c8bL5GMZh.wxkelT3f8UYOeVsCKhW0bvWEas7nfli/KH6Ktg1Xbre',3,'asjkdna','2022-10-13 16:06:49','KJNASDJK','2022-10-07','firmasus/A nu ma si cierto.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,175,'2022-10-13 16:07:19','root@localhost','Eliminacion de Usuarios'),(141,'REPETICION','kbahsd@gmail.com','$2y$10$Y8xo6kzX2hVGguGXxHV5ue/Xaftz71mHHJzGZjYpD2lDe4rcfm2nq',3,'asdjkad','2022-10-13 16:07:34','KASHKDB','2022-10-08','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,176,'2022-10-13 16:07:39','root@localhost','Eliminacion de Usuarios'),(142,'REPETICION','kbahsd@gmail.com','$2y$10$Mn1xhoRa.SRayl./w3zBxeg25LxoiINrme8N6ogG9pWEWyhyWN9cq',3,'asdjkad','2022-10-13 16:07:37','KASHKDB','2022-10-08','firmasus/A cabron.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,177,'2022-10-13 16:07:40','root@localhost','Eliminacion de Usuarios'),(143,'HEADER','kasdasd@gmail.com','$2y$10$peKdzx8CkhitFou2y.4DM.BnQ7Dps.WUdt0PEykybwj2N21aOVFEu',2,'jhasdbaj','2022-10-13 16:08:13','JBAJHSD','2022-10-08','firmasus/A levantarse.mp4',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,178,'2022-10-13 16:08:19','root@localhost','Eliminacion de Usuarios'),(144,'REPETICIOn','akjsdn@gmail.com','$2y$10$AXT8ojHhcEv7O15MNl0eqOd79dn3jF6IKggudhLaBgBIooqDLBOOO',1,'123','2022-10-13 16:16:50','','2022-10-13','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,180,'2022-10-13 16:16:55','root@localhost','Eliminacion de Usuarios'),(145,'REPETICION','habsda@gmail.com','$2y$10$5GfRnT.zm8z/ERUJsAeoE.ipmDHkGJ.vUEnng0il4unghNPmd5sB2',3,'aksdba','2022-10-13 16:16:09','BASDH','2022-10-08','firmasus/A bueno te me cuidas.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,179,'2022-10-13 16:17:55','root@localhost','Eliminacion de Usuarios'),(146,'REPETICIOn','jhbasdas@gmail.com','$2y$10$YTm9gPBo.As4n/OHblX9vOkg12jq.yabofYuQtpQcEaANZJNO2q3.',2,'aksd','2022-10-13 16:18:09','AHBSDJH','2022-10-01','firmasus/A eso se le llama poner la basura en su lugar.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,181,'2022-10-13 16:19:34','root@localhost','Eliminacion de Usuarios'),(147,'POOTIS','kbHKSD@GMAIL.COM','$2y$10$qGnIs8WqZuBAWU.O1nuG7.1kZZe0jgs1G6b1o9v5p1jOYTtx5R3m.',3,'kjasjkdkja','2022-10-13 16:19:49','KNKAJSBDJ','2022-10-01','firmasus/A eso se le llama estrategia.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,182,'2022-10-13 16:19:55','root@localhost','Eliminacion de Usuarios'),(148,'ADMIN','admin@gmail.com','$2y$10$B9B1SqDIuDyeUceqjhaTA.VMMQHExThGreCnvJcY8Sj0kcxj6H61W',1,'123456','2022-10-13 15:39:29','','2022-10-13','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,139,'2022-10-13 16:24:14','root@localhost','Eliminacion de Usuarios'),(149,'REPETICIOn','asdnajks@gmail.com','$2y$10$muGwQQAB5kYJLJAVyGn3Uu./5sAchHB846sETJUSjgyWc3qFstlJ.',1,'asdasd','2022-10-13 16:24:07','','2022-10-13','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,183,'2022-10-13 16:24:15','root@localhost','Eliminacion de Usuarios'),(150,'REPETICION','kjnaksd@gmail.com','$2y$10$AtJUyX6XoGSpN3aY3RJ0Me4n9CzqZVt1PsnYpuwPivUC6NgP3i3NG',3,'kjasndk','2022-10-13 16:26:38','KJNASKDNA','2022-10-01','firmasus/A eso se le llama estrategia.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,184,'2022-10-13 16:27:00','root@localhost','Eliminacion de Usuarios'),(151,'ASDASD','asdasd@gmail.com','$2y$10$ymWKjYt3ZSd2NN0YCpYmtOIrBn3fgPFR6U6voLk9uK1MXwBZ9mezW',1,'123','2022-10-14 11:11:03','','2022-10-14','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,186,'2022-10-14 11:11:05','root@localhost','Eliminacion de Usuarios');
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_agenda`
--

LOCK TABLES `tbl_agenda` WRITE;
/*!40000 ALTER TABLE `tbl_agenda` DISABLE KEYS */;
INSERT INTO `tbl_agenda` VALUES (1,'2022-09-29','8:15','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Asignada','cumpio'),(2,'2022-09-30','8:00','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Cumplida',''),(3,'2022-10-02','0','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Asignada',''),(4,'2022-10-02','8:00','CAMILO CESAR DIAZ MACONDO','3338478283','MARY YOLIMA DIAZ CORTES','52560022','32565999','Asignada','');
/*!40000 ALTER TABLE `tbl_agenda` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `tbl_agenda_BEFORE_UPDATE` BEFORE UPDATE ON `tbl_agenda` FOR EACH ROW BEGIN
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
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `tbl_agenda_BEFORE_DELETE` BEFORE DELETE ON `tbl_agenda` FOR EACH ROW BEGIN
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
-- Table structure for table `tbl_causaexterna`
--

DROP TABLE IF EXISTS `tbl_causaexterna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_causaexterna` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(10) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_causaexterna`
--

LOCK TABLES `tbl_causaexterna` WRITE;
/*!40000 ALTER TABLE `tbl_causaexterna` DISABLE KEYS */;
INSERT INTO `tbl_causaexterna` VALUES (1,'13','Enfermedad General'),(2,'02','Accidente de Tránsito'),(3,'03','Accidente Rábico'),(4,'04','Accidente Ofídico'),(5,'05','Otro Tipo de Accidente'),(6,'06','Evento Catastrófico'),(7,'07','Lesión por Agresión'),(8,'08','Lesión auto Infligida'),(9,'09','Sospecha de Maltrato Físico'),(10,'10','Sospecha de abuso sexual'),(11,'11','Sospecha de violencia sexual'),(12,'12','Sospecha de maltrato emocional'),(13,'01','Accidente de Trabajo'),(14,'14','Enfermedad laboral'),(15,'15','Otra');
/*!40000 ALTER TABLE `tbl_causaexterna` ENABLE KEYS */;
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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_consultorios`
--

LOCK TABLES `tbl_consultorios` WRITE;
/*!40000 ALTER TABLE `tbl_consultorios` DISABLE KEYS */;
INSERT INTO `tbl_consultorios` VALUES (8,'CONSULTORIO BUEN MEDICO','12345678','Cra 20 20 No 80-35','3120212355','consultorio@gmail.com','fotospr/pausa128.png','2022-10-14 13:46:43','GIRARDOT','CUNDINAMARCA','1212','121214');
/*!40000 ALTER TABLE `tbl_consultorios` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `tbl_parametros_BEFORE_UPDATE` BEFORE UPDATE ON `tbl_consultorios` FOR EACH ROW BEGIN
	INSERT INTO auditoria_tbl_parametros VALUES(NULL, old.nombre, old.nit, 
    old.direccion, old.telefono, old.correo, old.foto, old.creado, old.ciudad, old.depto,
    old.capb, old.napb,	new.nombre, new.nit, new.direccion, new.telefono, new.correo, 
    new.foto, new.creado, new.ciudad, new.depto, new.capb, new.napb,
    old.id, now(), current_user(), 'Actualizacion de Parametros');
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `tbl_parametros_BEFORE_DELETE` BEFORE DELETE ON `tbl_consultorios` FOR EACH ROW BEGIN
	INSERT INTO auditoria_tbl_parametros VALUES(NULL, old.nombre, old.nit, 
    old.direccion, old.telefono, old.correo, old.foto, old.creado, old.ciudad, old.depto,
    old.capb, old.napb,	NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,
    old.id, now(), current_user(), 'Eliminacion de Parametros');
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
-- Table structure for table `tbl_finalidadc`
--

DROP TABLE IF EXISTS `tbl_finalidadc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_finalidadc` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(10) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_finalidadc`
--

LOCK TABLES `tbl_finalidadc` WRITE;
/*!40000 ALTER TABLE `tbl_finalidadc` DISABLE KEYS */;
INSERT INTO `tbl_finalidadc` VALUES (1,'01','Atención del parto (puerperio)'),(2,'02','Atención del recién nacido'),(3,'03','Atención en planificación familiar'),(4,'04','Detección de alteraciones de crecimiento y desarrollo del menor de diez años'),(5,'05','Detección de alteración del desarrollo joven'),(6,'06','Detección de alteraciones del embarazo'),(7,'07','Detección de alteraciones del adulto'),(8,'08','Detección de Alteraciones de Agudeza Visual'),(9,'09','Detección de enfermedad profesional'),(10,'10','No aplica');
/*!40000 ALTER TABLE `tbl_finalidadc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_hclinica`
--

DROP TABLE IF EXISTS `tbl_hclinica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_hclinica` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `hora` varchar(30) NOT NULL,
  `tipodocumento` varchar(30) NOT NULL,
  `paciente` varchar(300) NOT NULL,
  `documento` varchar(60) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(60) NOT NULL,
  `edad` int(30) NOT NULL,
  `fechan` varchar(60) NOT NULL,
  `causaexterna` varchar(100) NOT NULL,
  `finalidadconsulta` varchar(100) NOT NULL,
  `motivodelaconsulta` text NOT NULL,
  `enfermedadactual` text NOT NULL,
  `revisionxsistema` text NOT NULL,
  `uanticonceptivos` varchar(30) NOT NULL,
  `menarquia` varchar(30) NOT NULL,
  `fum` varchar(30) NOT NULL,
  `g` varchar(30) NOT NULL,
  `a` int(30) NOT NULL,
  `p` int(30) NOT NULL,
  `c` int(30) NOT NULL,
  `feultparto` date NOT NULL,
  `cardvasculares` varchar(500) NOT NULL,
  `pulmonares` varchar(500) NOT NULL,
  `digestivos` varchar(500) NOT NULL,
  `diabetes` varchar(500) NOT NULL,
  `renales` varchar(500) NOT NULL,
  `quirurgicos` varchar(500) NOT NULL,
  `traumaticos` varchar(500) NOT NULL,
  `alergicos` varchar(500) NOT NULL,
  `transfusiones` varchar(500) NOT NULL,
  `medicamentos` varchar(500) NOT NULL,
  `alcohol` varchar(500) NOT NULL,
  `drogas` varchar(500) NOT NULL,
  `cigarrillo` varchar(500) NOT NULL,
  `inmunizaciones` varchar(500) NOT NULL,
  `otros` varchar(500) NOT NULL,
  `antfam` text NOT NULL,
  `cabeza` varchar(500) NOT NULL,
  `cara` varchar(500) NOT NULL,
  `cuello` varchar(500) NOT NULL,
  `torax` varchar(500) NOT NULL,
  `corazon` varchar(500) NOT NULL,
  `pulmones` varchar(500) NOT NULL,
  `abdypel` varchar(500) NOT NULL,
  `genext` varchar(500) NOT NULL,
  `colvert` varchar(500) NOT NULL,
  `neurologico` varchar(500) NOT NULL,
  `miemsup` varchar(500) NOT NULL,
  `mieminf` varchar(500) NOT NULL,
  `pielyfaneras` varchar(500) NOT NULL,
  `artic` varchar(500) NOT NULL,
  `fuerzmus` varchar(500) NOT NULL,
  `reflejos` varchar(500) NOT NULL,
  `parescraneales` varchar(500) NOT NULL,
  `psicoemocional` varchar(500) NOT NULL,
  `fc` varchar(60) NOT NULL,
  `fr` varchar(60) NOT NULL,
  `ta` varchar(60) NOT NULL,
  `t` varchar(60) NOT NULL,
  `so2` varchar(60) NOT NULL,
  `pesokg` varchar(60) NOT NULL,
  `tallacm` varchar(60) NOT NULL,
  `imc` varchar(60) NOT NULL,
  `resultadoimc` varchar(100) NOT NULL,
  `impdiag` varchar(300) NOT NULL,
  `condseguir` varchar(500) NOT NULL,
  `incapacidad` varchar(500) NOT NULL,
  `usuario` varchar(300) NOT NULL,
  `docusuario` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_hclinica`
--

LOCK TABLES `tbl_hclinica` WRITE;
/*!40000 ALTER TABLE `tbl_hclinica` DISABLE KEYS */;
INSERT INTO `tbl_hclinica` VALUES (12,'2022-10-02','17:13:40','CC','MARY YOLIMA DIAZ CORTES','52560022','Manzana 14 Casa 11','32565999',47,'1973-07-15','11','06','','','','NO','NO','NO','',0,0,0,'0000-00-00','NO REFIERE','NO REFIERE','NO REFIERE','NO REFIERE','NO REFIERE','NO REFIERE','NO REFIERE','NO REFIERE','NO REFIERE','NO REFIERE','NO REFIERE','NO REFIERE','NO REFIERE','NO REFIERE','NO REFIERE','','NORMAL','NORMAL','NORMAL','NORMAL','NORMAL','NORMAL','NORMAL','NORMAL','NORMAL','NORMAL','NORMAL','NORMAL','NORMAL','NORMAL','NORMAL','NORMAL','NORMAL','NORMAL','NO','NO','NO','NO','NO','','','','','','','','CAMILO CESAR DIAZ MACONDO','1574839756');
/*!40000 ALTER TABLE `tbl_hclinica` ENABLE KEYS */;
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
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bd_tecnostoria`.`tbl_hclinica_BEFORE_UPDATE` 
BEFORE UPDATE ON `tbl_hclinica` FOR EACH ROW
BEGIN
	INSERT INTO auditoria_tbl_hclinica VALUES(NULL, old.fecha, old.hora, 
    old.tipodocumento, old.paciente, old.documento, old.direccion, old.telefono, old.edad,
    old.fechan, old.causaexterna, old.finalidadconsulta, old.motivodelaconsulta, old.enfermedadactual,
    old.revisionxsistema, old.uanticonceptivos, old.menarquia, old.fum , old.g, old.a,
    old.p, old.c, old.feultparto, old.cardvasculares, old.pulmonares, old.digestivos,
    old.diabetes, old.renales, old.quirurgicos, old.traumaticos, old.alergicos, old.transfusiones,
    old.medicamentos, old.alcohol, old.drogas, old.cigarrillo, old.inmunizaciones, old.otros,
    old.antfam, old.cabeza, old.cara, old.cuello, old.torax, old.corazon, old.pulmones, 
    old.abdypel, old.genext, old.colvert, old.neurologico, old.miemsup, old.mieminf, 
    old.pielyfaneras, old.artic, old.fuerzmus, old.reflejos, old.parescraneales, old.psicoemocional,
    old.fc, old.fr, old.ta, old.t, old.so2, old.pesokg, old.tallacm, old.imc, old.resultadoimc, 
    old.impdiag, old.condseguir, old.incapacidad, old.usuario, old.docusuario,
    new.fecha, new.hora, new.tipodocumento, new.paciente, new.documento, new.direccion, 
    new.telefono, new.edad, new.fechan, new.causaexterna, new.finalidadconsulta, 
    new.motivodelaconsulta, new.enfermedadactual, new.revisionxsistema, new.uanticonceptivos, 
    new.menarquia, new.fum , new.g, new.a, new.p, new.c, new.feultparto, new.cardvasculares,
    new.pulmonares, new.digestivos, new.diabetes, new.renales, new.quirurgicos, new.traumaticos,
    new.alergicos, new.transfusiones, new.medicamentos, new.alcohol, new.drogas, new.cigarrillo,
    new.inmunizaciones, new.otros, new.antfam, new.cabeza, new.cara, new.cuello, new.torax, 
    new.corazon, new.pulmones, new.abdypel, new.genext, new.colvert, new.neurologico, new.miemsup,
    new.mieminf, new.pielyfaneras, new.artic, new.fuerzmus, new.reflejos, new.parescraneales,
    new.psicoemocional, new.fc, new.fr, new.ta, new.t, new.so2, new.pesokg, new.tallacm, 
    new.imc, new.resultadoimc, new.impdiag, new.condseguir, new.incapacidad, new.usuario, 
    new.docusuario, old.id, now(), current_user(), 'Actualizacion de la Historia Clinica');
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
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `bd_tecnostoria`.`tbl_hclinica_BEFORE_DELETE` 
BEFORE DELETE ON `tbl_hclinica` FOR EACH ROW
BEGIN
	INSERT INTO auditoria_tbl_hclinica VALUES(NULL, old.fecha, old.hora, 
    old.tipodocumento, old.paciente, old.documento, old.direccion, old.telefono, old.edad,
    old.fechan, old.causaexterna, old.finalidadconsulta, old.motivodelaconsulta, old.enfermedadactual,
    old.revisionxsistema, old.uanticonceptivos, old.menarquia, old.fum , old.g, old.a,
    old.p, old.c, old.feultparto, old.cardvasculares, old.pulmonares, old.digestivos,
    old.diabetes, old.renales, old.quirurgicos, old.traumaticos, old.alergicos, old.transfusiones,
    old.medicamentos, old.alcohol, old.drogas, old.cigarrillo, old.inmunizaciones, old.otros,
    old.antfam, old.cabeza, old.cara, old.cuello, old.torax, old.corazon, old.pulmones, 
    old.abdypel, old.genext, old.colvert, old.neurologico, old.miemsup, old.mieminf, 
    old.pielyfaneras, old.artic, old.fuerzmus, old.reflejos, old.parescraneales, old.psicoemocional,
    old.fc, old.fr, old.ta, old.t, old.so2, old.pesokg, old.tallacm, old.imc, old.resultadoimc, 
    old.impdiag, old.condseguir, old.incapacidad, old.usuario, old.docusuario,
    NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,
    NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,
    NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,
    NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,
    NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, old.id, now(),
    current_user(), 'Actualizacion de la Historia Clinica');
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

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
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `tbl_pacientes_BEFORE_UPDATE` BEFORE UPDATE ON `tbl_pacientes` FOR EACH ROW BEGIN
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
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `tbl_pacientes_BEFORE_DELETE` BEFORE DELETE ON `tbl_pacientes` FOR EACH ROW BEGIN
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
) ENGINE=MyISAM AUTO_INCREMENT=187 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuarios`
--

LOCK TABLES `tbl_usuarios` WRITE;
/*!40000 ALTER TABLE `tbl_usuarios` DISABLE KEYS */;
INSERT INTO `tbl_usuarios` VALUES (27,'JESUS MATEO SANCHEZ DIAZ','acmysistemas@gmail.com','$2y$10$LqJ7GMYmXSKxuM.UfrNaLedX3j7bu3d2Q.zArIBFslIF//JDS8AW6',1,'79057182','2022-10-05 11:39:39','RM123565','2020-08-18',''),(36,'MARIA CAMILA SANCHEZ DIAZ','asistente@gmail.com','$2y$10$Hkp77noroEiiVXucywmIfeF8C8s4M8q0r5DM/t8eXz8GTNiU0huma',3,'123','2022-10-10 11:26:32','','2022-09-21','../views/img/firmasus/Firma.png'),(185,'ADMIN','admin@gmail.com','$2y$10$y8vNhOhdnncw0n2fzToMJ.VqY66lLLwDYdA/UQTw4aHPtQo1pUZPu',1,'123','2022-10-14 11:08:29','','2022-10-14',''),(127,'JORGE CAMILO SALAZAR','medico@gmail.com','$2y$10$EVxtDhqeUx/bOWIK3qBR6epY6MjI2RtgkhjG6jvf2XgmFr/KLFt7m',3,'1237647823','2022-10-13 15:17:11','SKDBFS231','2022-10-07','firmasus/A eso se le llama estrategia.jpg');
/*!40000 ALTER TABLE `tbl_usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `tbl_usuarios_BEFORE_UPDATE` BEFORE UPDATE ON `tbl_usuarios` FOR EACH ROW BEGIN
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
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `tbl_usuarios_BEFORE_DELETE` BEFORE DELETE ON `tbl_usuarios` FOR EACH ROW BEGIN
	INSERT INTO auditoria_tbl_usuarios VALUES(null, old.nombre, old.correo, 
    old.clave, old.nivel, old.documento, old.creado, old.registro, old.fecha, old.foto,
	NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, old.id,
    now(), current_user(), 'Eliminacion de Usuarios');
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Dumping events for database 'bd_tecnostoria'
--

--
-- Dumping routines for database 'bd_tecnostoria'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-14  9:27:59
