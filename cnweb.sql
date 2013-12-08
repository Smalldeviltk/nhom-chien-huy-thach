-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2013 at 07:24 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cnweb`
--
CREATE DATABASE IF NOT EXISTS `cnweb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cnweb`;

-- --------------------------------------------------------

--
-- Table structure for table `catalogue`
--

CREATE TABLE IF NOT EXISTS `catalogue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hinhanh` text,
  `masanpham` text NOT NULL,
  `tensanpham` text NOT NULL,
  `thongtin` text,
  `gia` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `catalogue`
--

INSERT INTO `catalogue` (`id`, `hinhanh`, `masanpham`, `tensanpham`, `thongtin`, `gia`) VALUES
(1, 'MAU_1.jpg', '1', 'Nhuc Bo Doan', 'NBD', '5000'),
(2, 'MAU_1.jpg', '2', 'Kim Binh Mai', 'kim-binh-mai', '50000'),
(3, 'MAU_1.jpg', '1', 'Kim Binh Mai', 'kim-binh-mai', '50000'),
(4, 'MAU_1.jpg', '1', 'Kim Binh Mai', 'kim-binh-mai', '50000'),
(5, 'MAU_1.jpg', '1', 'clgt', 'ádsadsadasda', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `email`, `pass`, `name`, `phone`, `address`) VALUES
(1, 'lephuocthach@gmail.com', '12345', 'Thach', '01655xxxxxx', '129/27'),
(2, 'dogvanthan@gmail.com', '12345', 'Than', '01655xxxxxx', '129/27');

-- --------------------------------------------------------

--
-- Table structure for table `lich`
--

CREATE TABLE IF NOT EXISTS `lich` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hinhanh` text,
  `masanpham` text NOT NULL,
  `tensanpham` text NOT NULL,
  `thongtin` text,
  `gia` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `lich`
--

INSERT INTO `lich` (`id`, `hinhanh`, `masanpham`, `tensanpham`, `thongtin`, `gia`) VALUES
(1, 'MAU_1.jpg', '1', 'Nhuc Bo Doan', 'NBD', '5000'),
(2, 'MAU_1.jpg', '2', 'Kim Binh Mai', 'kim-binh-mai', '50000'),
(3, 'MAU_1.jpg', '1', 'Kim Binh Mai', 'kim-binh-mai', '50000'),
(4, 'MAU_1.jpg', '1', 'Kim Binh Mai', 'kim-binh-mai', '50000'),
(5, 'MAU_1.jpg', '1', 'clgt', 'ádsadsadasda', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `namecard`
--

CREATE TABLE IF NOT EXISTS `namecard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hinhanh` text,
  `masanpham` text NOT NULL,
  `tensanpham` text NOT NULL,
  `thongtin` text,
  `gia` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `namecard`
--

INSERT INTO `namecard` (`id`, `hinhanh`, `masanpham`, `tensanpham`, `thongtin`, `gia`) VALUES
(1, 'MAU_1.jpg', '1', 'Nhuc Bo Doan', 'NBD', '5000'),
(2, 'MAU_1.jpg', '2', 'Kim Binh Mai', 'kim-binh-mai', '50000'),
(3, 'MAU_1.jpg', '1', 'Kim Binh Mai', 'kim-binh-mai', '50000'),
(4, 'MAU_1.jpg', '1', 'Kim Binh Mai', 'kim-binh-mai', '50000'),
(5, 'MAU_1.jpg', '1', 'clgt', 'ádsadsadasda', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `thiep`
--

CREATE TABLE IF NOT EXISTS `thiep` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hinhanh` text,
  `masanpham` text NOT NULL,
  `tensanpham` text NOT NULL,
  `thongtin` text,
  `gia` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `thiep`
--

INSERT INTO `thiep` (`id`, `hinhanh`, `masanpham`, `tensanpham`, `thongtin`, `gia`) VALUES
(1, 'MAU_1.jpg', '1', 'Nhuc Bo Doan', 'NBD', '5000'),
(2, 'MAU_1.jpg', '2', 'Kim Binh Mai', 'kim-binh-mai', '50000'),
(3, 'MAU_1.jpg', '1', 'Kim Binh Mai', 'kim-binh-mai', '50000'),
(4, 'MAU_1.jpg', '1', 'Kim Binh Mai', 'kim-binh-mai', '50000'),
(5, 'MAU_1.jpg', '1', 'clgt', 'ádsadsadasda', '5000'),
(15, 'ha', 'm', 't', 'tt', 'g'),
(16, 'MAU_1.jpg', 'SP 01', 'Mau thiep so 1', 'thong tin chi day', '5000'),
(17, 'MAU_1.jpg', 'Sp02', 'sáº£n pháº©m sá»‘ 2', 'cai cc', '10000'),
(18, 'MAU_1.jpg', 'sp03', 'San pham so 3', 'cai con cat', '100000'),
(19, 'MAU_1.jpg', 'sp04', 'san pham so 4', 'tÃ¢sfdas', '12312321'),
(20, 'MAU_1.jpg', 'Sp05', 'Sáº£n pháº©m sá»‘ 5', 'tttt', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `toroi`
--

CREATE TABLE IF NOT EXISTS `toroi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hinhanh` text,
  `masanpham` text NOT NULL,
  `tensanpham` text NOT NULL,
  `thongtin` text,
  `gia` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `toroi`
--

INSERT INTO `toroi` (`id`, `hinhanh`, `masanpham`, `tensanpham`, `thongtin`, `gia`) VALUES
(1, 'MAU_1.jpg', '1', 'Nhuc Bo Doan', 'NBD', '5000'),
(2, 'MAU_1.jpg', '2', 'Kim Binh Mai', 'kim-binh-mai', '50000'),
(3, 'MAU_1.jpg', '1', 'Kim Binh Mai', 'kim-binh-mai', '50000'),
(4, 'MAU_1.jpg', '1', 'Kim Binh Mai', 'kim-binh-mai', '50000'),
(5, 'MAU_1.jpg', '1', 'clgt', 'ádsadsadasda', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `level` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '12345', 2),
(2, 'admin', '12345', 2),
(3, 'kenny', '12345', 2),
(4, 'jacky', '12345', 1),
(5, 'Lena', '12345', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
