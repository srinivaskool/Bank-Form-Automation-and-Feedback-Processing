-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 11, 2019 at 08:53 AM
-- Server version: 5.6.43-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imarcat`
--

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `great` varchar(255) NOT NULL,
  `satisfied` varchar(255) NOT NULL,
  `bad` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `great`, `satisfied`, `bad`, `time`) VALUES
(1, 'Great Experience ', 'Satisfied Experience ', 'Bad Experience ', '2019-07-08 17:06:55'),
(2, '1', '0', '0', '2019-07-08 17:09:34'),
(3, '0', '1', '0', '2019-07-08 17:09:35'),
(4, '1', '0', '0', '2019-07-08 17:09:36'),
(5, '0', '0', '1', '2019-07-08 17:09:37'),
(6, '1', '0', '0', '2019-07-08 17:09:38'),
(7, '0', '1', '0', '2019-07-08 17:09:38'),
(8, '0', '0', '1', '2019-07-09 02:19:06'),
(9, '1', '0', '0', '2019-07-09 02:19:07'),
(10, '0', '1', '0', '2019-07-09 02:19:08'),
(11, '1', '0', '0', '2019-07-09 08:10:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
