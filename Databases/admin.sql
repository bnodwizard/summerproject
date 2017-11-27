-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 06:03 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(50) NOT NULL,
  `picture` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `picture`, `name`, `date`, `price`, `message`) VALUES
(19, 'pokhara.jpg', '5 Days tour to Pokhara', 'In between Dashain and Tihar', 'Rs. 20000 per Person', 'One of the finest ways to soak up the natural splendor of Pokhara???the second city of Nepal?. With the wind at your back, cycle the legendary "Rainbow Tours" route equipped with pristine lakes, rustic villages, and the great Himalayas.From emerald hillsides and serene lakes, to the backdrop of the spectacular Himalayas, this ride ensures endless visual inspiration.'),
(20, 'chitwan.jpg', '	3-days Safari', 'In this Winter 2017', 'Rs.12000 per person', 'Explore nature at its most majestic on a 3-day safari to Chitwan National Park in southern Nepal. See Bengal Tigers, One-Horned Rhino and Asian Elephants. Home to more than 500 species of migratory birds, Chitwan is also a bird-watchers paradise.The park habitat also attracts more than 500 residential and migratory species of birds, and is a superb place to explore flora and fauna within a short period of time.'),
(21, 'mustang.jpg', '4-day Mustang Jeep Tour', 'This spring 2017', 'Rs.18000', 'Mustang jeep tour is special designed to those travelers who don?t have enough time to explore the spectacularly vast, arid valleys in Himalayas where the Tibetan culture continues to survive.  Ancient caves, historic monasteries and archaeological sites in the Upper Mustang situated northwest frontier bordering Tibet is being rank on Top tourist destination in the world. Mustang is the hinterland enriched with mainly barren ridges,');

-- --------------------------------------------------------

--
-- Table structure for table `packagebook`
--

CREATE TABLE `packagebook` (
  `id` int(50) NOT NULL,
  `packagebook` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` text NOT NULL,
  `message` text NOT NULL,
  `agree` varchar(50) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packagebook`
--

INSERT INTO `packagebook` (`id`, `packagebook`, `name`, `contact`, `message`, `agree`, `time`) VALUES
(1, '5 Days tour to Pokhara_19', 'binod', '9845114324', 'im in need of package', 'on', '2017-08-11 04:23:52'),
(2, '5 Days tour to Pokhara_19', 'binod', '9845114324', ',m lk', '', '2017-08-11 04:25:18'),
(3, '5 Days tour to Pokhara_19', 'binod', '9845114324', 'jkhkj', 'on', '2017-08-14 17:18:49'),
(4, '5 Days tour to Pokhara_19', 'binod', '9845114324', 'jkadniawd', '', '2017-08-20 01:45:04'),
(5, '5 Days tour to Pokhara_19', 'Binod Mishra', '9845114324', 'x xdz dx', '', '2017-09-01 05:35:56'),
(6, 'jkhwwdu_23', 'awd', '9999999999', 'wadawd', 'on', '2017-11-07 04:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email`, `password`) VALUES
('Binod Mishra', 'bnodwizard', 'wizard99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packagebook`
--
ALTER TABLE `packagebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `packagebook`
--
ALTER TABLE `packagebook`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
