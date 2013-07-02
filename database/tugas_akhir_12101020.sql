-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 27, 2013 at 04:32 PM
-- Server version: 5.5.31
-- PHP Version: 5.3.10-1ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tugas_akhir_12101020`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_training`
--

CREATE TABLE IF NOT EXISTS `daftar_training` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama_peserta` varchar(255) NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  `harga` decimal(19,0) NOT NULL,
  `status` enum('BELUM_LUNAS','SUDAH_LUNAS') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `daftar_training`
--

INSERT INTO `daftar_training` (`id`, `nama_peserta`, `nama_paket`, `harga`, `status`) VALUES
(13, 'Dadang Iswancot', 'fuad', 90900, 'BELUM_LUNAS'),
(14, 'Dadang Iswancot', 'kancut', 90090, 'BELUM_LUNAS');

-- --------------------------------------------------------

--
-- Table structure for table `m_jadwal`
--

CREATE TABLE IF NOT EXISTS `m_jadwal` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `tanggal` varchar(30) NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `m_jadwal`
--

INSERT INTO `m_jadwal` (`id`, `tanggal`, `nama_paket`) VALUES
(8, '06/15/2013 - 06/16/2013', 'dadang'),
(11, '06/19/2013 - 06/20/2013', 'wrarwrew'),
(12, ' - ', 'kancut');

-- --------------------------------------------------------

--
-- Table structure for table `m_paket`
--

CREATE TABLE IF NOT EXISTS `m_paket` (
  `kode_paket` varchar(12) NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  `isi_materi` text NOT NULL,
  `harga` decimal(19,0) NOT NULL,
  PRIMARY KEY (`kode_paket`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_paket`
--

INSERT INTO `m_paket` (`kode_paket`, `nama_paket`, `isi_materi`, `harga`) VALUES
('dadang1', 'kancut', 'kancut wanita', 90090),
('dadang2', 'bh', 'bh wanita', 1500),
('fuad', 'fuad', 'fuad', 90900);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `akses` enum('admin','user') NOT NULL COMMENT 'menentukan hak akses',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`nama_lengkap`, `username`, `password`, `email`, `no_hp`, `akses`) VALUES
('Dadang Iswancot', 'dadang2', '123', 'email@email', '0234234234', 'user'),
('mohamad sholihin', 'test', 'test', 'test@test', '023423432', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
