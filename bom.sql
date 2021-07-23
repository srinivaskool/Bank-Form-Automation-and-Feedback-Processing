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
-- Table structure for table `bom`
--

CREATE TABLE `bom` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` bigint(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `account_number` bigint(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `interest_rate` varchar(255) NOT NULL,
  `deposit_balance` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bom`
--

INSERT INTO `bom` (`id`, `name`, `contact`, `pan`, `account_number`, `email_id`, `interest_rate`, `deposit_balance`) VALUES
(1, 'Srinivas Konduri', 8367770505, 'AEF3WOF7', 12345678901, 'ajachintu@gmail.com', '3.5', '30500'),
(2, 'Aakash Sunkara', 8374893274, 'I4HFDY46S', 73547326490, 'aakash@gmail.com', '3.5', '2500'),
(3, 'Sarthak Dwivedi', 7234725423, 'Y47HV5O7', 45654635460, 'sarthak@gmail.com', '3.5', '100000'),
(4, 'Rajesh Shankar', 7267934423, 'IYDFHVO7', 83453283344, 'rajesh@gmail.com', '3.5', '6000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bom`
--
ALTER TABLE `bom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bom`
--
ALTER TABLE `bom`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
