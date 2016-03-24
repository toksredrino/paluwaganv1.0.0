-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2016 at 01:08 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hulog`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
`id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`) VALUES
(1, 'patricia', '0408');

-- --------------------------------------------------------

--
-- Table structure for table `efg`
--

CREATE TABLE IF NOT EXISTS `efg` (
`id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `kulang` int(11) NOT NULL,
  `advance` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `efg`
--

INSERT INTO `efg` (`id`, `name`, `kulang`, `advance`, `total`) VALUES
(1, 'Jo', 430, 0, 680),
(2, 'Alys', 220, 0, 890),
(3, 'Anj', 0, 730, 1840),
(4, 'Kath', 650, 0, 460),
(5, 'Pat', 80, 0, 1030),
(6, 'Kiko', 40, 0, 1070),
(7, 'Juls', 0, 30, 1140),
(9, 'Mama', 10, 0, 1100);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE IF NOT EXISTS `rate` (
`id` int(11) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id`, `rate`) VALUES
(1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `total_today`
--

CREATE TABLE IF NOT EXISTS `total_today` (
`today_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `today_total` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total_today`
--

INSERT INTO `total_today` (`today_id`, `date`, `today_total`) VALUES
(1, '2016-02-19', 1110);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `efg`
--
ALTER TABLE `efg`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total_today`
--
ALTER TABLE `total_today`
 ADD PRIMARY KEY (`today_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `efg`
--
ALTER TABLE `efg`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `total_today`
--
ALTER TABLE `total_today`
MODIFY `today_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
