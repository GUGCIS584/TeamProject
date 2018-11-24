-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 09:34 PM
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
CREATE DATABASE IF NOT EXISTS `project-team-system` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `project-team-system`;

-- --------------------------------------------------------

--
-- Table structure for table `facultydetails`
--

DROP TABLE IF EXISTS `facultydetails`;
CREATE TABLE `facultydetails` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `typeofjob`  enum('part-time','full-time') NOT NULL,
  `subject_total` enum('1','2','3','4','5') NOT NULL,
  `subject_name1` varchar(255) NOT NULL,
  `subject_name2` varchar(255) NOT NULL,
  `subject_name3` varchar(255) NOT NULL,
  `subject_name4` varchar(255) NOT NULL,
  `subject_name5` varchar(255) NOT NULL,
  `yearly_salary` float NOT NULL,
  `pay_per_subject` float NOT NULL,
  `hours` float NOT NULL,
  `faculty_total` float NOT NULL


) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

DROP TABLE IF EXISTS `studentdetails`;
CREATE TABLE `studentdetails` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL,
  `noc` varchar(255) NOT NULL,
  `fpc` varchar(255) NOT NULL,
  `ws` varchar(255) NOT NULL,
  `noh` varchar(255) NOT NULL,
  `tow` varchar(255) NOT NULL,
  `pph` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--
-- Table structure of `Supplier`
DROP TABLE IF EXISTS `Supplier`;
CREATE TABLE `Supplier` (
  `supp_id` int(100) NOT NULL,
  `supp_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `product` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantities` varchar(100) NOT NULL,
  `Subject_total` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Indexes for dumped tables
--

--
-- Indexes for table `facultydetails`
--
ALTER TABLE `facultydetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentdetails`
--
ALTER TABLE `studentdetails`
  ADD PRIMARY KEY (`id`);


-- Indexes for table `Supplier`
--
ALTER TABLE `Supplier`
  ADD PRIMARY KEY (`supp_id`);


--
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facultydetails`
--
ALTER TABLE `facultydetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `studentdetails`
--
ALTER TABLE `studentdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
--
-- AUTO_INCREMENT for table `Supplier`
--
ALTER TABLE `Supplier`
  MODIFY `supp_id` int(100) NOT NULL AUTO_INCREMENT;
