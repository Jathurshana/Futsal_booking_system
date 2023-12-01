-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 26, 2022 at 05:00 PM
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
-- Database: `futsal`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(10) NOT NULL,
  `bookday` date NOT NULL,
  `shift` varchar(10) NOT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `timecheck` int(30) DEFAULT NULL,
  `confirm_key` int(5) DEFAULT NULL,
  `vno` int(20) DEFAULT NULL,
  `vimgloc` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user`, `bookday`, `shift`, `contact`, `email`, `timecheck`, `confirm_key`, `vno`, `vimgloc`) VALUES
(4, 'hhuh', '2022-11-25', '17-18', '14141414141', 'ji@gmail.com', 1669388213, 1, NULL, NULL),
(5, 'hhuh', '2022-11-25', '18-19', '14141414141', 'ji@gmail.com', 1669388222, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` enum('male','female','other','') NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `gender`, `address`, `email`, `contact`, `password`) VALUES
(1, 'admin', 'admin', 'male', 'bkt', 'kiran', '1234567890', 'admin'),
(3, 'hhuh', 'ji', 'male', 'ji', 'ji@gmail.com', '14141414141', '1414');

-- --------------------------------------------------------

--
-- Table structure for table `team_reg`
--

DROP TABLE IF EXISTS `team_reg`;
CREATE TABLE IF NOT EXISTS `team_reg` (
  `sn` int(5) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(100) NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
