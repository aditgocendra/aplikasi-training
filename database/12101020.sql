-- MySQL dump 10.13  Distrib 5.5.24, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: tugas_akhir_12101020
-- ------------------------------------------------------
-- Server version	5.5.24-0ubuntu0.12.04.1

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
-- Table structure for table `daftar_training`
--

DROP TABLE IF EXISTS `daftar_training`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `daftar_training` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama_peserta` varchar(255) NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  `harga` decimal(19,0) NOT NULL,
  `status` enum('BELUM_LUNAS','SUDAH_LUNAS') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daftar_training`
--

LOCK TABLES `daftar_training` WRITE;
/*!40000 ALTER TABLE `daftar_training` DISABLE KEYS */;
INSERT INTO `daftar_training` VALUES (2,'2','2',2,'SUDAH_LUNAS'),(3,' Dodi Sanjaya','PHP',300000,'SUDAH_LUNAS'),(4,'Dadang Iswanto','Java Desktop',2000000,'BELUM_LUNAS');
/*!40000 ALTER TABLE `daftar_training` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_jadwal`
--

DROP TABLE IF EXISTS `m_jadwal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_jadwal` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(30) NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_jadwal`
--

LOCK TABLES `m_jadwal` WRITE;
/*!40000 ALTER TABLE `m_jadwal` DISABLE KEYS */;
INSERT INTO `m_jadwal` VALUES (1,'07/01/2013 - 07/06/2013','PHP'),(2,'07/23/2013 - 07/25/2013','Java Desktop');
/*!40000 ALTER TABLE `m_jadwal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_paket`
--

DROP TABLE IF EXISTS `m_paket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_paket` (
  `kode_paket` varchar(12) NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  `isi_materi` text NOT NULL,
  `harga` decimal(19,0) NOT NULL,
  PRIMARY KEY (`kode_paket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_paket`
--

LOCK TABLES `m_paket` WRITE;
/*!40000 ALTER TABLE `m_paket` DISABLE KEYS */;
INSERT INTO `m_paket` VALUES ('12345','PHP','- Dreamweaver<br>\r\n- MySQL',300000),('jd','Java Desktop','- Swing<br>\r\n- Hibernate',2000000);
/*!40000 ALTER TABLE `m_paket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `register` (
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `akses` enum('admin','user') NOT NULL COMMENT 'menentukan hak akses',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register`
--

LOCK TABLES `register` WRITE;
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` VALUES ('Adi Sulistiono','adi1','123','adi@gmail.com','2134242342345','user'),('','asdasdas','wewqeqwe','asdadas@dsfdsg','123123','admin'),('dadang iswanto','dadang','123','dadang@gmail.com','083878056121','admin'),('','dadang1','123','dadang@gmail.com','021932329','admin'),('Dadang Iswanto','dadang90','123','dadang@gmail.com','32423423454353','user'),(' Dodi Sanjaya','dodi01','01','dodi@gmail.com','2423423423','user'),('','Iswan','123','iswan@gmail.com','0813243455334','admin');
/*!40000 ALTER TABLE `register` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-07-06 13:57:47
