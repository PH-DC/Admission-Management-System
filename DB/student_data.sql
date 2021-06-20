-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 02:44 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `Sadmission` year(4) NOT NULL,
  `Sname` text NOT NULL,
  `Sdob` date NOT NULL,
  `Sadd` varchar(150) NOT NULL,
  `Sphone` bigint(20) NOT NULL,
  `Smobile` bigint(20) NOT NULL,
  `Smail` varchar(150) NOT NULL,
  `Senrollid` int(11) NOT NULL,
  `Sbranch` varchar(150) NOT NULL,
  `Sscholar` text NOT NULL,
  `Sfeestat` text NOT NULL,
  `Senrollstat` text NOT NULL,
  `Sdocumentstat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`Sadmission`, `Sname`, `Sdob`, `Sadd`, `Sphone`, `Smobile`, `Smail`, `Senrollid`, `Sbranch`, `Sscholar`, `Sfeestat`, `Senrollstat`, `Sdocumentstat`) VALUES
(2019, 'Test Student', '2002-01-02', 'Somewhere on Earth', 912345678, 912345678, 'teststudent@mail.com', 2147483647, 'Computer Engineering', 'is Eligible', 'Partial', 'Regular', 'All Documents');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
