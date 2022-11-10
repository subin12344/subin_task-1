-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 10, 2022 at 12:15 PM
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_customers`
--

INSERT INTO `my_customers` (`id`, `Name`, `Phone_number`, `Email_ID`, `Passport_ID`, `Expiry_Date`) VALUES
(1, 'subin', ' + 911234567890', 'subinstark24@gmail.com', 'ageqvg', '2022-11-01'),
(2, 'subin', ' + 11234567890', 'delhi@gmail.com', 'bhgygygr', '2022-11-29'),
(3, 'subin', ' + 11234567890', 'hbviojb@gmail.com', 'ASDFGGA', '2022-11-29'),
(4, 'subin', ' + 11234567890', 'subinstark24@gmail.com', 'asdfghgjkk', '2022-11-30'),
(5, 'rahul', ' + 911234567890', 'rahul@gmail.com', 'bij8ypijnpouh', '2022-11-25'),
(6, 'dubin', ' + 441234567890', 'subinstrk24@gmail.com', 'h bijpnb[okn[oi', '2022-11-21');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
