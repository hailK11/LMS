-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2017 at 03:38 PM
-- Server version: 5.7.19-log
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwp`
--

-- --------------------------------------------------------

--
-- Table structure for table `incharge`
--

CREATE TABLE `incharge` (
  `block` varchar(10) NOT NULL,
  `cno` varchar(10) NOT NULL,
  `inc_name` varchar(25) DEFAULT NULL,
  `inc_no` bigint(10) DEFAULT NULL,
  `inc_mail` varchar(50) DEFAULT NULL,
  `ast_name` varchar(25) DEFAULT NULL,
  `ast_no` bigint(10) DEFAULT NULL,
  `ast_mail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `incharge`
--

INSERT INTO `incharge` (`block`, `cno`, `inc_name`, `inc_no`, `inc_mail`, `ast_name`, `ast_no`, `ast_mail`) VALUES
('AB1', '205', 'Geetha S', NULL, NULL, 'Arun A', 7401777217, NULL),
('AB1', '206', 'Bharathi Raja S', NULL, NULL, 'Sivagnanam M', 9080746336, 'sivagnanam.m@vit.ac.in'),
('AB1', '207', 'Rekha D', NULL, NULL, 'Sivagnanam M', 9080746336, 'sivagnanam.m@vit.ac.in'),
('AB1', '208', 'Janaki Meena M', NULL, NULL, 'Jayakumar D', 9841230464, NULL),
('AB1', '209', 'Sajidha', NULL, NULL, 'Sathyanarayanan B', 9710283374, NULL),
('AB1', '210', 'Suganya', NULL, NULL, 'Sathyanarayanan B', 9710283374, NULL),
('AB1', '311', 'Subbulakshmi T', NULL, NULL, 'Saravana Kumar S', NULL, NULL),
('AB1', '313', 'Priyaadharshini M', NULL, NULL, 'Jayakumar D', NULL, NULL),
('AB1', '404A', 'Sivagami M', 9841562692, NULL, 'Robert L', NULL, NULL),
('AB1', '404B', 'Maheswari N', NULL, NULL, 'Robert L', NULL, NULL),
('AB1', '506', 'Rajesh Kanna B', NULL, NULL, 'Sathyanarayanan B', NULL, NULL),
('AB1', '605A', 'Prakash B', NULL, NULL, 'Arvinthsaran R M', 9894729978, NULL),
('AB1', '605B', 'Syed Ibrahim SP', NULL, NULL, 'Arvinthsaran R M', 9894729978, NULL),
('AB1', '613', 'Kumar R', NULL, NULL, 'Ponnurangam M', NULL, NULL),
('AB1', '614', 'Kumar R', NULL, NULL, 'Ponnurangam M', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `block` varchar(10) NOT NULL,
  `cno` varchar(10) NOT NULL,
  `l1` varchar(10) DEFAULT NULL,
  `l3` varchar(10) DEFAULT NULL,
  `l5` varchar(10) DEFAULT NULL,
  `l7` varchar(10) DEFAULT NULL,
  `l9` varchar(10) DEFAULT NULL,
  `l11` varchar(10) DEFAULT NULL,
  `l13` varchar(10) DEFAULT NULL,
  `l15` varchar(10) DEFAULT NULL,
  `l19` varchar(10) DEFAULT NULL,
  `l21` varchar(10) DEFAULT NULL,
  `l23` varchar(10) DEFAULT NULL,
  `l25` varchar(10) DEFAULT NULL,
  `l27` varchar(10) DEFAULT NULL,
  `l29` varchar(10) DEFAULT NULL,
  `l31` varchar(10) DEFAULT NULL,
  `l33` varchar(10) DEFAULT NULL,
  `l35` varchar(10) DEFAULT NULL,
  `l37` varchar(10) DEFAULT NULL,
  `l39` varchar(10) DEFAULT NULL,
  `l41` varchar(10) DEFAULT NULL,
  `l43` varchar(10) DEFAULT NULL,
  `l45` varchar(10) DEFAULT NULL,
  `l47` varchar(10) DEFAULT NULL,
  `l49` varchar(10) DEFAULT NULL,
  `l51` varchar(10) DEFAULT NULL,
  `l53` varchar(10) DEFAULT NULL,
  `l55` varchar(10) DEFAULT NULL,
  `l57` varchar(10) DEFAULT NULL,
  `l59` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`block`, `cno`, `l1`, `l3`, `l5`, `l7`, `l9`, `l11`, `l13`, `l15`, `l19`, `l21`, `l23`, `l25`, `l27`, `l29`, `l31`, `l33`, `l35`, `l37`, `l39`, `l41`, `l43`, `l45`, `l47`, `l49`, `l51`, `l53`, `l55`, `l57`, `l59`) VALUES
('AB1', '205', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('AB1', '206', 'SWE1007', NULL, NULL, 'SWE3001', NULL, 'SWE1007', 'CSE2003', NULL, NULL, NULL, NULL, 'CSE2003', 'CSE5704', NULL, NULL, NULL, NULL, 'SWE1007', NULL, NULL, 'SWE3001', 'CSE2003', NULL, 'CSE2003', 'SWE3001', NULL, 'CSE2003', NULL, NULL),
('AB1', '207', NULL, NULL, 'CSE2006', 'CSE2006', 'CSE2006', NULL, NULL, NULL, NULL, 'SWE1003', NULL, NULL, NULL, 'CSE2006', 'CSE2006', 'CSE2006', NULL, 'CSE2006', 'CSE1003', NULL, 'CSE2006', 'SWE1003', NULL, NULL, 'CSE2006', NULL, 'SWE1003', 'CSE2006', NULL),
('AB1', '208', NULL, 'CSE4027', NULL, 'ITA5702', 'ITA5704', 'SWE430', NULL, NULL, NULL, NULL, NULL, NULL, 'CSE6701', 'CSE5706', 'CSE5702', NULL, NULL, 'SWE513', NULL, NULL, 'SWE513', NULL, NULL, 'CSE4020', NULL, NULL, 'SWE2001', NULL, NULL),
('AB1', '209', NULL, 'CSE1701', 'SWE513', NULL, 'CSE1701', 'SWE513', NULL, NULL, NULL, 'CSE1701', 'CSE1004', NULL, NULL, NULL, 'CSE1002', NULL, NULL, NULL, NULL, NULL, 'SWE2001', 'ITA6003', NULL, 'CSE1002', NULL, NULL, 'CSE1002', NULL, NULL),
('AB1', '210', 'CSE1002', 'CSE1002', NULL, 'CSE1002', 'SWE2001', NULL, NULL, NULL, NULL, 'CSE1002', 'SWE1008', NULL, 'CSE1002', 'CSE1002', 'CSE1002', NULL, NULL, 'CSE3002', NULL, NULL, 'CSE1701', 'CSE1002', NULL, 'CSE1701', NULL, NULL, 'CSE1701', 'CSE1002', NULL),
('AB1', '311', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CSE6714', 'CSE5002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CSE6714', NULL, NULL, NULL, NULL, NULL),
('AB1', '313', NULL, 'CSE3002', NULL, 'CSE3002', 'CSE4001', 'CSE3002', NULL, NULL, 'SWE408', 'CSE3002', 'CSE6004', NULL, 'CSE4001', 'SWE408', 'CSE4001', NULL, NULL, 'SWE408', 'CSE4001', NULL, 'CSE3018', 'CSE4001', NULL, 'SWE408', NULL, NULL, NULL, 'CSE3002', NULL),
('AB1', '404A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SWE314', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('AB1', '404B', 'CSE1701', 'CSE1701', NULL, 'CSE1701', 'CSE1701', 'SWE1009', 'CSE1701', NULL, 'CSE1701', 'CSE1701', NULL, 'CSE1701', 'CSE1701', NULL, 'CSE1701', 'CSE1701', NULL, 'CSE1701', 'CSE1701', NULL, 'CSE1701', NULL, NULL, 'CSE1701', 'CSE1701', NULL, 'CSE1701', 'CSE1701', NULL),
('AB1', '506', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('AB1', '605A', 'CSE1701', 'CSE1701', NULL, 'CSE1701', 'CSE1701', 'CSE2005', NULL, NULL, NULL, 'CSE1701', NULL, NULL, 'CSE1701', NULL, 'CSE1701', 'CSE1701', NULL, 'CSE1701', 'CSE1701', NULL, 'CSE1701', NULL, NULL, 'CSE1701', 'CSE1701', NULL, 'CSE1701', 'CSE1701', NULL),
('AB1', '605B', NULL, NULL, 'ITA5008', 'SWE1004', NULL, 'CSE6003', 'ITA5008', NULL, NULL, NULL, NULL, 'CSE5703', 'CSE2004', NULL, 'SWE1004', 'SWE513', NULL, 'SWE408', 'SWE1004', NULL, 'CSE5701', 'SWE408', NULL, 'SWE513', NULL, NULL, 'CSE2004', NULL, NULL),
('AB1', '613', NULL, NULL, NULL, 'CSE3001', NULL, NULL, 'CSE3001', NULL, 'SWE2008', 'CSE3001', NULL, NULL, NULL, NULL, NULL, 'CSE3001', NULL, 'CSE3001', NULL, NULL, 'CSE3001', NULL, NULL, 'SWE3006', NULL, NULL, NULL, NULL, NULL),
('AB1', '614', 'CSE1701', 'CSE1701', 'CSE1002', 'CSE1701', 'CSE1701', NULL, NULL, NULL, NULL, 'CSE1701', 'ITA5704', NULL, 'CSE1701', 'CSE1701', 'CSE1701', 'CSE1002', NULL, 'CSE1701', NULL, NULL, 'CSE1701', NULL, NULL, 'CSE1701', 'CSE1002', NULL, 'CSE1701', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `name` varchar(25) NOT NULL,
  `no` varchar(10) NOT NULL,
  `dat` varchar(10) NOT NULL,
  `tfr` varchar(5) NOT NULL,
  `tto` varchar(5) NOT NULL,
  `det` varchar(100) NOT NULL,
  `sno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`name`, `no`, `dat`, `tfr`, `tto`, `det`, `sno`) VALUES
('xyz', 'AB1-210', '2017-11-06', '08:30', '14:45', 'asdfg', 14),
('e', '6', '2017-10-25', '3', '4', 'ert', 26),
('hv', 'AB1-205', '2017-11-24', '00:59', '13:00', 'khv', 28),
('t', 'AB1-205', '2017-11-01', '08:00', '17:00', 'testing', 29),
('A', 'AB1-205', '2017-11-02', '00:00', '16:00', 'g', 31),
('d', 'AB1-205', '2017-11-03', '09:00', '16:00', 'd', 32),
('f', 'AB1-205', '2017-11-25', '09:00', '16:00', 'f', 34),
('g', 'AB1-205', '2017-11-25', '09:00', '16:00', 'a', 35),
('de', 'AB1-205', '2017-12-02', '09:00', '16:00', '1', 42),
('q', 'AB1-205', '2017-11-11', '09:00', '16:00', 'qwe', 43),
('s', 'AB1-205', '2017-11-14', '07:07', '17:01', 's', 44),
('qwee', 'AB1-205', '2017-11-22', '13:00', '16:00', 'qe', 46),
('ytr', 'AB1-210', '2017-11-24', '01:15', '06:00', 'wewee', 47);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `incharge`
--
ALTER TABLE `incharge`
  ADD PRIMARY KEY (`block`,`cno`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`block`,`cno`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lab`
--
ALTER TABLE `lab`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`block`,`cno`) REFERENCES `incharge` (`block`, `cno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
