-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 01, 2013 at 06:46 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahan`
--

CREATE TABLE IF NOT EXISTS `bahan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nama` (`nama`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bahan`
--

INSERT INTO `bahan` (`id`, `nama`) VALUES
(4, 'Belladona'),
(1, 'Katun'),
(2, 'Sutra'),
(3, 'Tahan Air');

-- --------------------------------------------------------

--
-- Table structure for table `bahanp`
--

CREATE TABLE IF NOT EXISTS `bahanp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bahanid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bahanid` (`bahanid`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `bahanp`
--

INSERT INTO `bahanp` (`id`, `bahanid`, `pid`) VALUES
(1, 1, 1),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `brandp`
--

CREATE TABLE IF NOT EXISTS `brandp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brandid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `brandid_2` (`brandid`,`pid`),
  KEY `brandid` (`brandid`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE IF NOT EXISTS `img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `nama`) VALUES
(1, 'a.jpg'),
(2, '1359166893-Lighthouse.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `imgp`
--

CREATE TABLE IF NOT EXISTS `imgp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imgid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pid_2` (`pid`,`imgid`),
  KEY `imageid` (`imgid`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `motif`
--

CREATE TABLE IF NOT EXISTS `motif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nama` (`nama`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `motif`
--

INSERT INTO `motif` (`id`, `nama`) VALUES
(2, 'Anak'),
(3, 'Angela Kids'),
(46, 'Belladona'),
(4, 'Belladona Kids'),
(65, 'Character'),
(43, 'Dewasa'),
(45, 'Family'),
(47, 'FATA'),
(5, 'FATA Kids'),
(6, 'Glow in the dark'),
(48, 'Impression'),
(66, 'Jepang Bhe-Bhe'),
(67, 'Jepang Modern'),
(44, 'Keluarga'),
(7, 'Kendra Kids'),
(49, 'Kendra Platinum'),
(50, 'Kendra Signature'),
(1, 'Kids'),
(51, 'Kintakun'),
(8, 'Kintakun Kids'),
(52, 'Kintakun RBB'),
(9, 'My Love Disney Edition'),
(53, 'my love double New Look Edition'),
(54, 'My Love Luxury Edition'),
(55, 'My Love Panel'),
(56, 'My Love Rumbai Bantal Busa (RBB)'),
(10, 'My Love Single'),
(11, 'my love Teen'),
(12, 'My Star'),
(60, 'New Season Bola'),
(61, 'Olah Raga'),
(68, 'Organik'),
(64, 'Rosanna Soft Panel'),
(57, 'Saputra'),
(13, 'Saputra Kids'),
(63, 'Sepak Bola'),
(58, 'Shyra'),
(14, 'Shyra Kids'),
(59, 'Shyra Polos'),
(62, 'Sport');

-- --------------------------------------------------------

--
-- Table structure for table `motifp`
--

CREATE TABLE IF NOT EXISTS `motifp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `motifid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pid_2` (`pid`,`motifid`),
  KEY `motifid` (`motifid`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `motifp`
--

INSERT INTO `motifp` (`id`, `motifid`, `pid`) VALUES
(2, 47, 1),
(1, 65, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nav`
--

CREATE TABLE IF NOT EXISTS `nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `nav`
--

INSERT INTO `nav` (`id`, `name`, `url`, `sort`) VALUES
(1, 'Home', '#', 1),
(2, 'Brand', '#', 2),
(3, 'Product', '#', 3),
(4, 'Motif', '#', 4);

-- --------------------------------------------------------

--
-- Table structure for table `navc`
--

CREATE TABLE IF NOT EXISTS `navc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `navid` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `model` tinyint(4) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `url` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `navid` (`navid`),
  KEY `navid_2` (`navid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `navc`
--

INSERT INTO `navc` (`id`, `navid`, `name`, `model`, `sort`, `url`) VALUES
(1, 2, 'Kintakun Youth', 1, 2, '#'),
(2, 2, 'Belladona', 1, 3, '#'),
(3, 2, 'FATA', 1, 4, '#'),
(4, 2, 'Shyra', 1, 5, '#'),
(5, 2, 'Kendra', 1, 6, '#'),
(6, 2, 'My Love', 1, 7, '#'),
(7, 2, 'My Star', 1, 8, '#'),
(8, 3, 'Disney Edition', 1, 2, '#'),
(9, 3, '3 Dimensi(3D)', 1, 3, '#'),
(10, 3, 'Kids', 1, 4, '#'),
(11, 3, 'Wedding', 1, 5, '#'),
(12, 3, 'Modern', 1, 6, '#'),
(13, 3, 'Clasic', 1, 7, '#'),
(14, 3, 'Kartun', 1, 8, '#'),
(15, 3, 'Natural', 1, 9, '#');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `rating` tinyint(4) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nama`, `status`, `rating`, `ket`, `img`) VALUES
(1, 'Product 1', 3, 5, 'Tanpa Keterangan', '1359416971-Koala.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `tlp` varchar(50) DEFAULT NULL,
  `bb` varchar(20) DEFAULT NULL,
  `ket1` varchar(100) DEFAULT NULL,
  `ket2` varchar(100) DEFAULT NULL,
  `urllogo` varchar(255) NOT NULL,
  `imglogo` varchar(255) NOT NULL,
  `namaweb` varchar(255) NOT NULL,
  `jargon` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `nama`, `tlp`, `bb`, `ket1`, `ket2`, `urllogo`, `imglogo`, `namaweb`, `jargon`) VALUES
(1, 'www.spreitrendy.com', '0857 33 287 285 (Atic)', '21F871D1', 'Buka jam : 09:00-19:00 WIB', 'Hari Minggu/Libur/Tanggal Merah tutup.', 'localhost', 'logo sprei trendy.jpg', 'spreitrendy', 'Toko Online yang menjual Sprei, Bed Cover dan Perlengkapan keluarga Anda.');

-- --------------------------------------------------------

--
-- Table structure for table `ptype`
--

CREATE TABLE IF NOT EXISTS `ptype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ptype`
--

INSERT INTO `ptype` (`id`, `nama`) VALUES
(1, 'Sprai Dan Bed Cover'),
(2, 'Selimut / Blanket'),
(3, 'Sprai Made by Order'),
(4, 'Aplikasi Flanel');

-- --------------------------------------------------------

--
-- Table structure for table `pu`
--

CREATE TABLE IF NOT EXISTS `pu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ukuranid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `hg1` decimal(12,2) DEFAULT NULL,
  `hg2` decimal(12,2) DEFAULT NULL,
  `kethg1` varchar(50) DEFAULT NULL,
  `kethg2` varchar(50) DEFAULT NULL,
  `diskonphg1` decimal(3,2) DEFAULT NULL,
  `diskonphg2` decimal(3,2) DEFAULT NULL,
  `diskonhg1` decimal(12,2) DEFAULT NULL,
  `diskonhg2` decimal(12,2) DEFAULT NULL,
  `imgid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ukuranid` (`ukuranid`),
  KEY `imgid` (`imgid`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pu`
--

INSERT INTO `pu` (`id`, `ukuranid`, `pid`, `hg1`, `hg2`, `kethg1`, `kethg2`, `diskonphg1`, `diskonphg2`, `diskonhg1`, `diskonhg2`, `imgid`) VALUES
(1, 3, 1, 500000.00, 700000.00, 'Harga Sprei', 'Harga Paket Bad Cover', 0.00, 0.00, NULL, NULL, NULL),
(2, 2, 1, 400000.00, 700000.00, 'Harga Sprei', 'Harga Paket Bad Cover', 0.00, 0.00, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ukuran`
--

CREATE TABLE IF NOT EXISTS `ukuran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `short` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `ukuran`
--

INSERT INTO `ukuran` (`id`, `nama`, `short`) VALUES
(1, 'Ukuran 120x120', 1),
(2, 'Ukuran 120x200x30', 2),
(3, 'Ukuran 150x200', 3),
(4, 'Ukuran 150x200x30', 4),
(5, 'Ukuran 160x180', 5),
(6, 'Ukuran 160x200', 6),
(7, 'Ukuran 160x200x30', 7),
(8, 'Ukuran 180x200x30', 8),
(9, 'Ukuran 200x200x30', 9),
(10, 'Ukuran SSS', 10),
(11, 'Ukuran SS', 11),
(12, 'Ukuran S', 12),
(13, 'Ukuran M', 13),
(14, 'Ukuran L', 14),
(15, 'Ukuran XL', 15),
(16, 'Ukuran Dewasa', 16);

-- --------------------------------------------------------

--
-- Table structure for table `warna`
--

CREATE TABLE IF NOT EXISTS `warna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `code` varchar(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `warna`
--

INSERT INTO `warna` (`id`, `nama`, `code`) VALUES
(1, 'Oranye', '#FFA500'),
(2, 'Hitam', '#000000'),
(3, 'Biru Tua/Biru Laut', '#000080'),
(4, 'Hijau', '#008000'),
(5, 'Hijau Telur', '#008080'),
(6, 'Merah Tua/Marun', '#800000'),
(7, 'Ungu', '#800080'),
(8, 'Coklat Zaitun', '#808000'),
(9, 'Perak', '#C0C0C0'),
(10, 'Abu-Abu', '#808080'),
(11, 'Biru', '#0000FF'),
(12, 'Hijau Muda/Limau', '#00FF00'),
(13, 'Biru Muda/Akua', '#00FFFF'),
(14, 'Merah', '#FF0000'),
(15, 'Magenta Muda', '#FF00FF'),
(16, 'Kuning', '#FFFF00'),
(17, 'Putih', '#FFFFFF');

-- --------------------------------------------------------

--
-- Table structure for table `warnap`
--

CREATE TABLE IF NOT EXISTS `warnap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `warnaid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pid_2` (`pid`,`warnaid`),
  KEY `warnaid` (`warnaid`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `warnap`
--

INSERT INTO `warnap` (`id`, `warnaid`, `pid`) VALUES
(1, 2, 1),
(2, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wbenner`
--

CREATE TABLE IF NOT EXISTS `wbenner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `wbenner`
--

INSERT INTO `wbenner` (`id`, `img`, `link`) VALUES
(1, 'b1.jpg', '#'),
(2, 'b2.jpg', '#'),
(3, 'b3.jpg', '#'),
(4, 'b4.jpg', '#'),
(5, 'b5.jpg', '#'),
(6, 'b6.jpg', '#');

-- --------------------------------------------------------

--
-- Table structure for table `wpartner`
--

CREATE TABLE IF NOT EXISTS `wpartner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `wpartner`
--

INSERT INTO `wpartner` (`id`, `name`, `link`) VALUES
(1, 'Griya Cetak', '#'),
(2, 'Griya Steel', '#'),
(3, 'Green Cool', '#'),
(4, 'Amc Comp', '#');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bahanp`
--
ALTER TABLE `bahanp`
  ADD CONSTRAINT `bahanp_ibfk_1` FOREIGN KEY (`bahanid`) REFERENCES `bahan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bahanp_ibfk_3` FOREIGN KEY (`pid`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `brandp`
--
ALTER TABLE `brandp`
  ADD CONSTRAINT `brandp_ibfk_1` FOREIGN KEY (`brandid`) REFERENCES `brand` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `brandp_ibfk_3` FOREIGN KEY (`pid`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `imgp`
--
ALTER TABLE `imgp`
  ADD CONSTRAINT `imgp_ibfk_1` FOREIGN KEY (`imgid`) REFERENCES `img` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `imgp_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `motifp`
--
ALTER TABLE `motifp`
  ADD CONSTRAINT `motifp_ibfk_1` FOREIGN KEY (`motifid`) REFERENCES `motif` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `motifp_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `navc`
--
ALTER TABLE `navc`
  ADD CONSTRAINT `navc_ibfk_1` FOREIGN KEY (`navid`) REFERENCES `nav` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pu`
--
ALTER TABLE `pu`
  ADD CONSTRAINT `pu_ibfk_1` FOREIGN KEY (`ukuranid`) REFERENCES `ukuran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pu_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `warnap`
--
ALTER TABLE `warnap`
  ADD CONSTRAINT `warnap_ibfk_1` FOREIGN KEY (`warnaid`) REFERENCES `warna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `warnap_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
