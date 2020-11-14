-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2020 at 12:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trip`
--

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `SerialNo` int(4) NOT NULL,
  `Name` text NOT NULL,
  `Age` int(3) NOT NULL,
  `Gender` text NOT NULL,
  `Email` varchar(22) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `DT` datetime NOT NULL DEFAULT current_timestamp(),
  `Other` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`SerialNo`, `Name`, `Age`, `Gender`, `Email`, `Phone`, `DT`, `Other`) VALUES
(1, 'TestName', 23, 'Male', 'sankalpshukla966@gmail', '9521647593', '2020-10-05 02:25:47', 'This is my first ever database '),
(2, 'Testcase2', 35, 'Female', 'star@mail.com', '852096333', '2020-10-05 12:48:12', 'asdfghjklasdfghjkllqwertyuiop'),
(3, 'testcase3 ', 25, 'male', 'star01@mail.com', '7418529639', '2020-10-06 22:43:22', 'ffffffffffffffffahhhhhhhhhhhhh'),
(0, 'Sankalp', 55, 'male', 'iamakashbhati@gmail.co', '0637701098', '2020-10-06 23:36:33', 'sssssssssssssssssssssssssssssss'),
(0, 'Sankalp', 55, 'male', 'iamakashbhati@gmail.co', '0637701098', '2020-10-07 01:24:17', 'sssssssssssssssssssssssssssssss'),
(0, 'dfg', 88, 'female', 'rsankalpshukla_18462@a', '9928891983', '2020-10-07 01:29:51', 'sssssssssssssssss'),
(0, 'payal', 22, 'female', 'payalyadav@gmail.com', '3898939811', '2020-10-07 01:38:44', 'system '),
(0, 'payal', 22, 'female', 'payalyadav@gmail.com', '3898939811', '2020-10-07 01:39:27', 'system '),
(0, 'Sankalp', 55, 'male', 'ia@gmail.com', '0637701098', '2020-10-07 01:39:58', 'yeeyeyeyeye');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
