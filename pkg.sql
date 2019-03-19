-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2019 at 03:33 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkg`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `org` varchar(50) NOT NULL,
  `nop` varchar(20) NOT NULL,
  `nob` varchar(20) NOT NULL,
  `em` varchar(50) NOT NULL,
  `atvt` varchar(300) NOT NULL,
  `tm` date NOT NULL,
  `tk` date NOT NULL,
  `mm` time NOT NULL,
  `mk` time NOT NULL,
  `room` tinyint(2) NOT NULL DEFAULT '0',
  `room1` tinyint(2) NOT NULL DEFAULT '0',
  `room2` tinyint(2) NOT NULL DEFAULT '0',
  `room3` tinyint(3) NOT NULL DEFAULT '0',
  `zno` smallint(3) NOT NULL DEFAULT '0',
  `zcm` varchar(50) NOT NULL DEFAULT 'NA',
  `dno` smallint(3) NOT NULL DEFAULT '0',
  `dcm` varchar(50) NOT NULL DEFAULT 'NA',
  `mno` smallint(3) NOT NULL DEFAULT '0',
  `mcm` varchar(50) NOT NULL DEFAULT 'NA',
  `pno` smallint(3) NOT NULL DEFAULT '0',
  `pcm` varchar(50) NOT NULL DEFAULT 'NA',
  `cont` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `trn_date`) VALUES
(6, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '2018-09-07 04:43:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
