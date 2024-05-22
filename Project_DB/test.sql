-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 07:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`firstname`, `lastname`, `email`, `password`, `number`) VALUES
('Alid', 'Shaikh', 'sajidshaikh@gmail.com', '12345678', 987654);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `add_feature` varchar(70) NOT NULL,
  `address` varchar(100) NOT NULL,
  `place` enum('Himalaya','Taj Mahal','Maldives','Pyramid of Giza','Iceland Aurora','Shaolin Temple','Russia','Colosseum Rome','Eiffel Tower','London','Statue of Liberty','Golden Gate Bridge','Aztec Pyramid','Easter Island','Torii Gate Japan','Chureito Pagoda') NOT NULL,
  `package` enum('Luxury Explorer','Discoverers Delight','Budget Explorer') NOT NULL,
  `number` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`name`, `email`, `add_feature`, `address`, `place`, `package`, `number`) VALUES
('Alid Sajid Shaikh', 'alidshaikh05@gmail.com', '              ', 'Yerwada pune 6', 'Torii Gate Japan', 'Luxury Explorer', 8),
('Zidan Tamboli', 'assad@gmial.com', '              ', 'hadapsar - 4002', 'Himalaya', 'Discoverers Delight', 3),
('ahetesham', 'Ahetesham@gmail.com', '             i am handy cap', '              al baik kay samnay , near shital petrol pump', 'London', 'Luxury Explorer', 2),
('Alid Sajid Shaikh', 'alidshaikh05@gmail.com', '              Annfjefbo', 'Yerwada , pune 411006', 'Taj Mahal', 'Budget Explorer', 5);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `number` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`firstName`, `lastName`, `email`, `password`, `number`) VALUES
('Zidan', 'Tamboli', 'alidshaikh05@gmail.com', '123456789', 12233445567),
('Alid', 'Shaikh', 'assad@gmial.com', '0987654321', 234561345),
('Alid', 'Shaikh', 'sajidshaikh@gmail.com', '343434', 987654),
('Alid', 'Shaikh', 'customer@gmail.com', 'customer', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--
-- Error reading structure for table test.review: #1932 - Table &#039;test.review&#039; doesn&#039;t exist in engine
-- Error reading data for table test.review: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `test`.`review`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `revive`
--

CREATE TABLE `revive` (
  `Name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `revive`
--

INSERT INTO `revive` (`Name`, `email`, `message`) VALUES
('Alid Sajid Shaikh', 'alidshaikh05@gmail.com', ''),
('', '', ''),
('faizan', 'alidshaikh05@gmail.com', 'bhaok landi kay');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
