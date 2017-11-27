-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 06:04 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `userid` varchar(50) NOT NULL COMMENT 'userid',
  `name` varchar(50) NOT NULL COMMENT 'name',
  `email` varchar(50) NOT NULL COMMENT 'email',
  `password` varchar(50) NOT NULL COMMENT 'password',
  `address` varchar(500) NOT NULL COMMENT 'address',
  `contact` varchar(50) NOT NULL COMMENT 'contact',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userid`, `name`, `email`, `password`, `address`, `contact`, `date`) VALUES
('binod', 'Binod Mishra', 'redrokmishra@gmail.com', '6a3bb292cb401f8217b65a0843227109816447b3', 'Banasthali', '9845114324', '2017-11-07 23:48:47'),
('bnodwizard', 'Binod Mishra', 'redrokmishra@gmail.com', '9e14b82ef997ca4391bc2e8c4ea0c25c18810c7c', 'banasthali', '9845114324', '2017-08-06 16:18:43'),
('bnodwizarda', 'Binod Mishra', 'redrokmishra@gmail.com', '9e14b82ef997ca4391bc2e8c4ea0c25c18810c7c', 'balaju', '9845114324', '2017-10-11 12:00:21'),
('wizard', 'binod', 'redrokmishra@gmail.com', 'af2c41eb4e034ed0a417d1ec637082072a4d3aae', 'banasthali', '9845114324', '2017-08-10 09:50:52'),
('wizardddd', 'Binod Mishra', 'redrokmishra@gmail.com', 'af2c41eb4e034ed0a417d1ec637082072a4d3aae', 'Banasthali', '9845114324', '2017-11-08 11:10:44');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `id` int(20) NOT NULL,
  `userid` varchar(50) NOT NULL COMMENT 'userid',
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `contact` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `number` int(10) NOT NULL COMMENT 'seat number',
  `PNR` varchar(13) NOT NULL COMMENT 'PNR',
  `date` date NOT NULL COMMENT 'date of booking',
  `froma` varchar(50) NOT NULL,
  `toa` varchar(50) NOT NULL,
  `bookdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`id`, `userid`, `name`, `email`, `address`, `contact`, `message`, `number`, `PNR`, `date`, `froma`, `toa`, `bookdate`) VALUES
(3, 'bnodwizard', 'saugat', 'redrokmishra@gmail.com', 'maipi', 9845114324, 'jhdiuawd', 8, '2017-11-08-8', '2017-11-08', 'kathmandu', 'pokhara', '2017-11-07 03:53:29'),
(5, 'bnodwizard', 'Binod', 'redrokmishra@gmail.com', 'Et officiis natus officia quibusdam eligendi esse est ad amet earum soluta corrupti qui quis Nam in', 9845114324, 'awdad', 30, '2017-11-13-30', '2017-11-13', 'kathmandu', 'chitwan', '2017-11-07 17:38:18'),
(6, 'bnodwizard', 'Binod', 'redrokmishra@gmail.com', 'Banasthali', 9889878778, '', 22, '2017-11-08-22', '2017-11-08', 'kathmandu', 'chitwan', '2017-11-07 17:41:12'),
(7, 'bnodwizard', 'Binod', 'redrokmishra@gmail.com', 'Banasthali', 9845114324, 'hgjygyu', 16, '2017-11-09-16', '2017-11-09', 'kathmandu', 'chitwan', '2017-11-08 05:11:02'),
(8, 'bnodwizard', 'Binod', 'redrokmishra@gmail.com', 'Banasthali', 9845114324, 'i need a confortable seat.', 11, '2017-11-09-11', '2017-11-09', 'kathmandu', 'pokhara', '2017-11-08 15:54:19'),
(9, 'bnodwizard', 'Binod', 'redrokmishra@gmail.com', 'Banasthali', 9845114324, 'i need a confortable seat.', 12, '2017-11-09-12', '2017-11-09', 'kathmandu', 'pokhara', '2017-11-08 15:54:19'),
(10, 'bnodwizard', 'Binod', 'redrokmishra@gmail.com', 'Banasthali', 9845114324, 'i need a confortable seat.', 15, '2017-11-09-15', '2017-11-09', 'kathmandu', 'pokhara', '2017-11-08 15:54:19'),
(11, 'bnodwizard', 'Binod', 'redrokmishra@gmail.com', 'Banasthali', 9845114324, 'i need a confortable seat.', 16, '2017-11-09-16', '2017-11-09', 'kathmandu', 'pokhara', '2017-11-08 15:54:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
