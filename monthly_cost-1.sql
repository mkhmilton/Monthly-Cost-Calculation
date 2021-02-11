-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2019 at 11:39 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monthly_cost`
--

-- --------------------------------------------------------

--
-- Table structure for table `dailyexpenses`
--

CREATE TABLE `dailyexpenses` (
  `id` int(11) NOT NULL,
  `Expensesdate` date NOT NULL,
  `category` varchar(250) NOT NULL,
  `amount` int(11) NOT NULL,
  `earningamount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dailyexpenses`
--

INSERT INTO `dailyexpenses` (`id`, `Expensesdate`, `category`, `amount`, `earningamount`) VALUES
(2, '2019-05-27', 'Electronic', 400, 4300),
(3, '2019-05-27', 'Electronic', 400, 3000),
(5, '2019-05-27', 'Cloths', 2300, 4000),
(6, '2019-05-27', 'Other', 3000, 4000),
(7, '2019-05-28', 'Food', 240, 500),
(8, '2019-05-21', 'Electronic', 367, 2300),
(9, '2019-05-28', 'Food', 2500, 3900),
(10, '2019-05-23', 'Electronic', 2457, 6908);

-- --------------------------------------------------------

--
-- Table structure for table `resinfo`
--

CREATE TABLE `resinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resinfo`
--

INSERT INTO `resinfo` (`id`, `name`, `email`, `phone`, `password`, `country`) VALUES
(1, 'tushar', 'tusharahmed16135@gmail.com', '01627456738', '81dc9bdb52d04dc20036dbd8313ed055', 'Bangladesh'),
(2, 'tushar', 'tusharahmed16135@gmail.com', '01627456738', '81dc9bdb52d04dc20036dbd8313ed055', 'Bangladesh'),
(3, 'mehedi', 'mehedi23@gmail.com', '01627456738', '81dc9bdb52d04dc20036dbd8313ed055', 'Bangladesh'),
(4, 'ana', 'ana@gmail.com', '01627456738', '81dc9bdb52d04dc20036dbd8313ed055', 'Bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dailyexpenses`
--
ALTER TABLE `dailyexpenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resinfo`
--
ALTER TABLE `resinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dailyexpenses`
--
ALTER TABLE `dailyexpenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `resinfo`
--
ALTER TABLE `resinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
