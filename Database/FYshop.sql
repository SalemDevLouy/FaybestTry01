-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 10, 2023 at 09:12 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `catugorie`
--

DROP TABLE IF EXISTS `catugorie`;
CREATE TABLE IF NOT EXISTS `catugorie` (
  `codecat` varchar(100) NOT NULL,
  `namecat` varchar(250) NOT NULL,
  `Catimage` varchar(250) NOT NULL,
  PRIMARY KEY (`codecat`),
  UNIQUE KEY `codecat` (`codecat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catugorie`
--

INSERT INTO `catugorie` (`codecat`, `namecat`, `Catimage`) VALUES
('Accessory', 'Accessory', 'product-images/21.jfif'),
('Clouthes', 'Clouthes', 'product-images/15.jfif'),
('Shoes', 'Shoes', 'product-images/4.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `cust`
--

DROP TABLE IF EXISTS `cust`;
CREATE TABLE IF NOT EXISTS `cust` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `Adress` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust`
--

INSERT INTO `cust` (`id`, `name`, `email`, `username`, `Adress`, `password`) VALUES
(3, 'salem', 'admin@mail.com', 'saloma', 'zaoualia', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'farouk', 'far@gmail.com', 'farouk', 'n3ama', '25f9e794323b453885f5181f1b624d0b'),
(5, 'bilal', 'admin@mail.com', 'bilal', 'ouad souf', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'saloma', 'admin@mail.com', 'salem', 'zaoualia', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'admin', 'admin@mail.com', 'admin', '********', '5cc13486cc309f3a5d1fa33e77803cbc');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  `codecate` varchar(100) NOT NULL,
  `Fproduct` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `codecate` (`codecate`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`, `codecate`, `Fproduct`) VALUES
(4, 'Shoes-lv1', 'Shoes01', 400.00, 'product-images/1.jfif', 'Shoes', 0),
(5, 'Shoes-lv2', 'Shoes02', 350.00, 'product-images/2.jfif', 'Shoes', 0),
(6, 'Shoes-lv3', 'Shoes03', 250.00, 'product-images/3.jfif', 'Shoes', 1),
(7, 'Shoes-lvj4', 'Shoes04', 600.00, 'product-images/4.jfif', 'Shoes', 0),
(8, 'Shoes-lv5', 'Shoes05', 540.00, 'product-images/5.jfif', 'Shoes', 0),
(9, 'Shoes-lv9', 'Shoes06', 580.00, 'product-images/6.jfif', 'Shoes', 0),
(10, 'Shoes-lv7', 'Shoes07', 590.00, 'product-images/7.jfif', 'Shoes', 0),
(11, 'Shoes-lv8', 'Shoes08', 999.00, 'product-images/8.jfif', 'Shoes', 0),
(12, 'Shoes-lv6', 'Shoes09', 480.00, 'product-images/9.jfif', 'Shoes', 0),
(13, 'Shoes-lv45', 'Shoes10', 500.00, 'product-images/0.jfif', 'Shoes', 0),
(14, 'pants01', 'Clouthes01', 300.00, 'product-images/10.jfif', 'Clouthes', 0),
(15, 'T-Shirt01', 'Clouthes02', 320.00, 'product-images/11.jfif', 'Clouthes', 0),
(16, 'pants02', 'Clouthes03', 390.00, 'product-images/12.jfif', 'Clouthes', 0),
(17, 'T-Shirt02', 'Clouthes04', 600.00, 'product-images/13.jfif', 'Clouthes', 0),
(18, 'T-Shirt3', 'Clouthes05', 610.00, 'product-images/14.jfif', 'Clouthes', 0),
(19, 'pants03', 'Clouthes06', 650.00, 'product-images/15.jfif', 'Clouthes', 0),
(20, 'pants04', 'Clouthes07', 550.00, 'product-images/16.jfif', 'Clouthes', 1),
(21, 'T-Shirt4', 'Clouthes08', 900.00, 'product-images/17.jfif', 'Clouthes', 0),
(22, 'T-Shirt5', 'Clouthes09', 200.00, 'product-images/18.jfif', 'Clouthes', 0),
(23, 'Watch01', 'Accessory01', 950.00, 'product-images/19.jfif', 'Accessory', 0),
(24, 'Watch02', 'Accessory02', 980.00, 'product-images/20.jfif', 'Accessory', 0),
(25, 'Watch03', 'Accessory03', 950.00, 'product-images/21.jfif', 'Accessory', 1),
(26, 'Watch04', 'Accessory04', 790.00, 'product-images/22.jfif', 'Accessory', 0),
(27, 'Watch05', 'Accessory05', 890.00, 'product-images/23.png', 'Accessory', 0),
(28, 'Watch06', 'Accessory06', 780.00, 'product-images/24.jfif', 'Accessory', 1),
(29, 'Watch07', 'Accessory07', 850.00, 'product-images/25.jfif', 'Accessory', 0),
(30, 'Watch08', 'Accessory08', 870.00, 'product-images/26.jfif', 'Accessory', 0),
(31, 'Watch09', 'Accessory09', 880.00, 'product-images/27.jfif', 'Accessory', 0),
(32, 'Watch10', 'Accessory10', 999.00, 'product-images/28.jfif', 'Accessory', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

DROP TABLE IF EXISTS `sale`;
CREATE TABLE IF NOT EXISTS `sale` (
  `CodeP` varchar(100) NOT NULL,
  `Id` varchar(100) NOT NULL,
  `DatePay` date NOT NULL,
  `Quantity` int(11) NOT NULL,
  `TotalPrice` int(11) NOT NULL,
  KEY `CodeP` (`CodeP`),
  KEY `Id` (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `CodeP` varchar(100) NOT NULL,
  `TotalQuant` int(11) NOT NULL,
  KEY `CodeP` (`CodeP`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `CodeT` varchar(100) NOT NULL,
  `Typename` varchar(100) NOT NULL,
  PRIMARY KEY (`CodeT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `codecate` FOREIGN KEY (`codecate`) REFERENCES `catugorie` (`codecat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
