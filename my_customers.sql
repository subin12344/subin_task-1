-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 11, 2022 at 11:38 AM
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
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `my_customers`
--

DROP TABLE IF EXISTS `my_customers`;
CREATE TABLE IF NOT EXISTS `my_customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) DEFAULT NULL,
  `Phone_number` varchar(100) DEFAULT NULL,
  `Email_ID` varchar(100) DEFAULT NULL,
  `Passport_ID` varchar(100) DEFAULT NULL,
  `Expiry_Date` date DEFAULT NULL,
  `deletes` varchar(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_customers`
--

INSERT INTO `my_customers` (`id`, `Name`, `Phone_number`, `Email_ID`, `Passport_ID`, `Expiry_Date`, `deletes`) VALUES
(12, 'subin', ' + 919080693943', 'subinstark24@gmail.com', 'DFGHYRT', '2022-11-15', '1'),
(13, 'subin', ' + 911234567890', 'subinstark24@gmail.com', 'CGDHJPOIOBG', '2022-11-08', '1'),
(14, 'subin', ' + 911234567890', 'subinstark24@gmail.com', 'CGDHJPOIOBG', '2022-11-08', '0'),
(15, 'haridhas', ' + 9691234567890', 'subinstark24@gmail.com', 'VHNJNKMKNJN', '2022-11-22', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
