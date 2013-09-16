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
  `id_daftar_training` int(5) NOT NULL AUTO_INCREMENT,
  `nama_peserta` varchar(25) NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  `harga` double NOT NULL,
  `status` enum('BELUM_LUNAS','SUDAH_LUNAS') NOT NULL,
  PRIMARY KEY (`id_daftar_training`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `daftar_training`
--

LOCK TABLES `daftar_training` WRITE;
/*!40000 ALTER TABLE `daftar_training` DISABLE KEYS */;
INSERT INTO `daftar_training` VALUES (4,'Dadang Iswanto','Java Desktop',2000000,'SUDAH_LUNAS'),(5,'Dadang Iswanto','PHP',300000,'SUDAH_LUNAS'),(6,'Dadang Iswanto','PHP',300000,'SUDAH_LUNAS'),(7,'Budi Sudarsono','Java Desktop',2000000,'BELUM_LUNAS'),(8,'Andi Pratama','Java Web',2000000,'BELUM_LUNAS'),(9,'Andi Pratama','Java Web',2000000,'BELUM_LUNAS'),(10,'Agus','Java Web',2000000,'BELUM_LUNAS'),(11,'Jimmy Rengga','Java Web',2000000,'BELUM_LUNAS');
/*!40000 ALTER TABLE `daftar_training` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_jadwal`
--

DROP TABLE IF EXISTS `m_jadwal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_jadwal` (
  `id_jadwal` int(5) NOT NULL AUTO_INCREMENT,
  `start_date` date NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_jadwal`
--

LOCK TABLES `m_jadwal` WRITE;
/*!40000 ALTER TABLE `m_jadwal` DISABLE KEYS */;
INSERT INTO `m_jadwal` VALUES (2,'0000-00-00','Java Desktop','0000-00-00'),(3,'0000-00-00','Java Web','0000-00-00'),(4,'0000-00-00','HTML','0000-00-00'),(5,'0000-00-00','Java Web','0000-00-00'),(6,'0000-00-00','Java Web','0000-00-00'),(7,'0000-00-00','Java Web','0000-00-00'),(8,'0000-00-00','Java Web','0000-00-00'),(9,'0000-00-00','Java Web','0000-00-00'),(10,'0000-00-00','Java Web','0000-00-00'),(11,'0000-00-00','Java Web','0000-00-00');
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
  `harga` double NOT NULL,
  PRIMARY KEY (`kode_paket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_paket`
--

LOCK TABLES `m_paket` WRITE;
/*!40000 ALTER TABLE `m_paket` DISABLE KEYS */;
INSERT INTO `m_paket` VALUES ('JW','Java Web','- Senin :<br>\r\n09.00 WIB - 12.00 WIB = Git Toolkits<br>\r\n12.00 WIB - 13.00 WIB = Break<br>\r\n13.00 WIB - 16.00 WIB = Maven<br><br>\r\n- Selasa',2000000);
/*!40000 ALTER TABLE `m_paket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `register` (
  `nama_lengkap` varchar(25) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `akses` enum('admin','user') NOT NULL COMMENT 'menentukan hak akses',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register`
--

LOCK TABLES `register` WRITE;
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` VALUES ('Agus','agus','123','agus@gmail.com','32432434','user'),('Andi Pratama','andi','123','andi@gmail.com','234234324','user'),('Budi Sudarsono','budi','123','budi@gmail.com','213231231','user'),('','dadang','123','dadang@yahoo.com','1234','admin'),('','dadang1','123','dadang@gmail.com','021932329','admin'),('Jimmy Rengga','jimmy','123','dadad@fdfff.com','2342342424','user');
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

-- Dump completed on 2013-09-16 14:11:36
