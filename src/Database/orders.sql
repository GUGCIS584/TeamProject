-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 12:08 PM
-- Server version: 5.7.21-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-team-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `supp_id` int(11) NOT NULL,
  `Date` varchar(255) DEFAULT NULL,
  `Product` varchar(255) DEFAULT NULL,
  `Price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `Quantities` int(11) NOT NULL DEFAULT '0',
  `Total` decimal(10,2) NOT NULL DEFAULT '0.00',
  `Total_Order` decimal(10,2) NOT NULL DEFAULT '0.00',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `supp_id`, `Date`, `Product`, `Price`, `Quantities`, `Total`, `Total_Order`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '13/02/1990', 'Product 1', '100.00', 2, '200.00', '400.00', NULL, NULL, NULL),
(2, 2, '112', 'product 1', '100.00', 2, '200.00', '300.00', '2018-12-10 16:51:11', '2018-12-10 16:51:11', NULL),
(3, 7, '12/12/2019', 'Test', '100.00', 2, '20.00', '100.00', '2018-12-13 06:54:09', '2018-12-13 06:54:09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
