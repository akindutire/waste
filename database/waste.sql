-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2018 at 08:20 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waste`
--

-- --------------------------------------------------------

--
-- Table structure for table `bd`
--

CREATE TABLE `bd` (
  `id` int(11) NOT NULL,
  `bd_type` text NOT NULL,
  `location` text NOT NULL,
  `tel` text NOT NULL,
  `charge` varchar(7) NOT NULL,
  `cardno` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bd`
--

INSERT INTO `bd` (`id`, `bd_type`, `location`, `tel`, `charge`, `cardno`) VALUES
(1, 'Bungalow', '56 Iloro Street', '08107926083', '67', 'WMS1901'),
(2, 'Bungalow', '57 Iloro Street', '08107926083', '67', 'WMS5992'),
(3, 'Bungalow', '58 Iloro Street', '124522d443', '56', 'WMS3133'),
(4, 'Bungalow', '59 Iloro Street', '08107926083', '12', 'WMS6254'),
(5, 'Bungalow', '90 Iloro Street', '08107926083', '500', 'WMS4905'),
(6, 'Bungalow', 'Kljhkl', '0888', '100', 'WMS1296');

-- --------------------------------------------------------

--
-- Table structure for table `daylist`
--

CREATE TABLE `daylist` (
  `id` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `my` varchar(25) NOT NULL,
  `cardno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daylist`
--

INSERT INTO `daylist` (`id`, `bid`, `date`, `my`, `cardno`) VALUES
(1, 3, 'Saturday September 2015', 'September 2015', 'WMS3133'),
(2, 4, 'Sunday September 2015', 'September 2015', 'WMS6254'),
(3, 1, 'Friday October 2015', 'October 2015', 'WMS1901'),
(4, 3, 'Friday October 2015', 'October 2015', 'WMS3133'),
(5, 2, 'Sunday October 2015', 'October 2015', 'WMS5992'),
(6, 4, 'Sunday October 2015', 'October 2015', 'WMS6254'),
(7, 1, 'Sunday October 2015', 'October 2015', 'WMS1901'),
(11, 1, 'Monday October 2015', 'October 2015', 'WMS1901'),
(12, 3, 'Monday October 2015', 'October 2015', 'WMS3133'),
(13, 5, 'Monday October 2015', 'October 2015', 'WMS4905'),
(14, 6, 'Monday October 2017', 'October 2017', 'WMS1296');

-- --------------------------------------------------------

--
-- Table structure for table `mt`
--

CREATE TABLE `mt` (
  `id` int(11) NOT NULL,
  `mt` text NOT NULL,
  `nofday` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ovchg`
--

CREATE TABLE `ovchg` (
  `id` int(11) NOT NULL,
  `bdid` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `my` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `performancetab`
--

CREATE TABLE `performancetab` (
  `id` int(11) NOT NULL,
  `ifr` text NOT NULL,
  `tg` text NOT NULL,
  `st` int(11) NOT NULL,
  `lm` varchar(78) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performancetab`
--

INSERT INTO `performancetab` (`id`, `ifr`, `tg`, `st`, `lm`) VALUES
(1, '1442093696', '1536788096', 1, '1507552211');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` text NOT NULL,
  `name` text NOT NULL,
  `mat` text NOT NULL,
  `password` text NOT NULL,
  `pix` text NOT NULL,
  `sex` text NOT NULL,
  `bk` varchar(2) NOT NULL,
  `dpt` text NOT NULL,
  `extrights` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `mat`, `password`, `pix`, `sex`, `bk`, `dpt`, `extrights`) VALUES
(1, 'Staff', 'Akinsuyi Allison Wilson', 'createaccount@cliqs.com', 'cbaac6303676c08e8dfa39d51d0d09e947878ad5', '1274882akinsuyi.jpg', 'Male', '0', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bd`
--
ALTER TABLE `bd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daylist`
--
ALTER TABLE `daylist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mt`
--
ALTER TABLE `mt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ovchg`
--
ALTER TABLE `ovchg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `performancetab`
--
ALTER TABLE `performancetab`
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
-- AUTO_INCREMENT for table `bd`
--
ALTER TABLE `bd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `daylist`
--
ALTER TABLE `daylist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mt`
--
ALTER TABLE `mt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ovchg`
--
ALTER TABLE `ovchg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `performancetab`
--
ALTER TABLE `performancetab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
