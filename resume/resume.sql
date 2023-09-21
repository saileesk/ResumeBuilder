-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 02:01 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `add_id` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `pin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`add_id`, `address`, `city`, `state`, `pin`) VALUES
(1, 'gwewd', 'Ghaziabad', 'Uttar Pradesh', '201005');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `e_id` int(11) NOT NULL,
  `sname` varchar(25) NOT NULL,
  `slocation` varchar(25) NOT NULL,
  `smonth` varchar(25) NOT NULL,
  `syear` varchar(25) NOT NULL,
  `emonth` varchar(25) NOT NULL,
  `eyear` varchar(25) NOT NULL,
  `degree` varchar(25) NOT NULL,
  `fos` varchar(25) NOT NULL,
  `des` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`e_id`, `sname`, `slocation`, `smonth`, `syear`, `emonth`, `eyear`, `degree`, `fos`, `des`) VALUES
(1, 'raghuvir', 'kandivali', 'may', '2015', 'june', '2021', 'Diploma', 'it', 'jfsbhfbsdhb');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `s_id` int(11) NOT NULL,
  `skill` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`s_id`, `skill`) VALUES
(1, 'java \r\nmysql\r\nphp');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `phone`, `pass`) VALUES
(1, 'sonam', 'singh', 'test123@gmail.com\r\n', '8928434971', 'Test@123');

-- --------------------------------------------------------

--
-- Table structure for table `workexp`
--

CREATE TABLE `workexp` (
  `exp_id` int(11) NOT NULL,
  `pname` varchar(25) NOT NULL,
  `cname` varchar(25) NOT NULL,
  `smonth` varchar(25) NOT NULL,
  `syear` varchar(25) NOT NULL,
  `emonth` varchar(25) NOT NULL,
  `eyear` varchar(25) NOT NULL,
  `prof_des` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workexp`
--

INSERT INTO `workexp` (`exp_id`, `pname`, `cname`, `smonth`, `syear`, `emonth`, `eyear`, `prof_des`) VALUES
(1, 'it manager ', 'icici prudential', 'may', '2015', 'june', '2021', 'dhdfhsdgbsbgv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
