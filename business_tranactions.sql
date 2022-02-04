-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 04:16 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `business_tranactions`
--

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `entry_id` int(10) NOT NULL,
  `entry` longtext NOT NULL,
  `entry_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`entry_id`, `entry`, `entry_date`) VALUES
(3, 'Mopholosi - 20', '2021-07-11 15:16:16'),
(5, 'Mopholosi - 20', '2021-07-11 15:19:15'),
(6, 'Mopholosi - 20', '2021-07-11 15:21:51'),
(8, 'edwin - 30', '2021-07-11 16:09:50'),
(9, 'edwin - 30', '2021-07-11 16:10:42'),
(10, 'edwin - 30', '2021-07-11 16:11:16');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `transaction_id` int(10) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `purchase_amount` int(10) NOT NULL,
  `purchase_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`transaction_id`, `product_description`, `purchase_amount`, `purchase_date`) VALUES
(9, 'Fkue Kit', 30, '2021-07-11 14:00:00'),
(10, 'Cuppaccino', 30, '2021-07-11 14:00:42'),
(13, 'Cuppaccino', 30, '2021-07-11 15:18:57'),
(14, 'Cuppaccino', 15, '2021-07-11 16:03:32'),
(15, 'Cuppaccino', 10, '2021-07-11 16:04:08'),
(16, 'Fkue Kit', 30, '2021-07-11 16:08:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`entry_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `entry_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `transaction_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
