-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2013 at 06:08 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

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
-- Table structure for table `thiep`
--

CREATE TABLE IF NOT EXISTS `thiep` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MaSanPham` text NOT NULL,
  `TenSanPham` text NOT NULL,
  `ThongTinSanPham` text,
  `Gia` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `thiep`
--

INSERT INTO `thiep` (`ID`, `MaSanPham`, `TenSanPham`, `ThongTinSanPham`, `Gia`) VALUES
(1, 'xxx', 'xxxx', 'fff', 'aaaa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
