-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 05:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`add_id`, `address`, `city`, `state`, `pin`) VALUES
(1, 'gwewd', 'Ghaziabad', 'Uttar Pradesh', '201005'),
(9, 'mumbai', 'virar', 'maharashtra', '401303'),
(9, '', '', '', ''),
(9, '', '', '', ''),
(0, '', '', '', ''),
(0, '', '', '', ''),
(9, 'mumbai', 'virar', 'maharashtra', '401303'),
(10, 'mumbai', 'virar', 'maharashtra', '401303');

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
  `degree` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`e_id`, `sname`, `slocation`, `smonth`, `syear`, `emonth`, `eyear`, `degree`) VALUES
(1, 'raghuvir', 'kandivali', 'may', '2015', 'june', '2021', 'Diploma'),
(9, 'aadarsh', 'virar', 'jan', '2000', 'dec', '2001', 'mca'),
(9, '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', ''),
(9, 'viva', 'virar', 'jan', '2000', 'dec', '2001', 'mca'),
(10, 'viva', 'virar', 'jan', '2000', 'dec', '2001', 'mca');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `s_id` int(11) NOT NULL,
  `skill` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`s_id`, `skill`) VALUES
(1, 'java \r\nmysql\r\nphp'),
(9, 'html, css '),
(9, ''),
(0, ''),
(9, 'html,css\r\n'),
(10, 'Html,Css,js');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `phone`, `pass`) VALUES
(1, 'sonam', 'singh', 'test123@gmail.com\r\n', '8928434971', 'Test@123'),
(9, 'Aadi', 'Choudhari', 'aadarsh@gmail.com', '9890978788', '1234'),
(10, 'Aadi', 'Choudhari', 'aadarsh17@gmail.com', '9890978788', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `cpassword`, `date`) VALUES
(1, 'Adarsh', '$2y$10$y0i1jnytblLSrzCPCP1UFOG1BsZwljv9RRydy2jkXsP', '', '2023-08-16 14:16:44'),
(2, 'sailee', '$2y$10$If/nmmMUJ7XTK124Jzwf5uZF0Lhr5AhI9m2PXP.gAD1', '', '2023-08-16 14:18:46'),
(3, 'Adarsh123', '12345', '12345', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workexp`
--

INSERT INTO `workexp` (`exp_id`, `pname`, `cname`, `smonth`, `syear`, `emonth`, `eyear`, `prof_des`) VALUES
(1, 'it manager ', 'icici prudential', 'may', '2015', 'june', '2021', 'dhdfhsdgbsbgv'),
(9, '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', ''),
(0, '', '', '', '', '', '', ''),
(9, 'devloper', 'tcs', 'jan', '2005', 'dec', '2006', 'devops'),
(10, 'devloper', 'tcs', 'jan', '2005', 'dec', '2006', 'developing app');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
