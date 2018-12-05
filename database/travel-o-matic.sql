-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 06:45 AM
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
-- Database: `travel-o-matic`
--
CREATE DATABASE IF NOT EXISTS `travel-o-matic` DEFAULT CHARACTER SET utf16 COLLATE utf16_bin;
USE `travel-o-matic`;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) NOT NULL,
  `author` varchar(30) COLLATE utf16_bin NOT NULL,
  `city` varchar(20) COLLATE utf16_bin NOT NULL,
  `ZIP` varchar(10) COLLATE utf16_bin NOT NULL,
  `location` varchar(70) COLLATE utf16_bin NOT NULL,
  `image` varchar(255) COLLATE utf16_bin NOT NULL,
  `date` varchar(30) COLLATE utf16_bin NOT NULL,
  `time` varchar(20) COLLATE utf16_bin NOT NULL,
  `price` varchar(8) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `author`, `city`, `ZIP`, `location`, `image`, `date`, `time`, `price`) VALUES
(1, 'Kris Kristofferson', 'Vienna', '1150', 'Wiener Stadthalle', './img/event1.jpg', '', '20:00', '58,5'),
(3, 'Michael Jackson', 'Paris', '1001', 'Paris Stadium', 'https://www.billboard.com/files/styles/article_main_image/public/media/michael-jackson-Dangerous-Tour-2-billboard-1548.jpg', '2018-12-17', '20:00', '500');

-- --------------------------------------------------------

--
-- Table structure for table `fourth`
--

CREATE TABLE `fourth` (
  `new_ID` int(11) NOT NULL,
  `name` varchar(51) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `fourth`
--

INSERT INTO `fourth` (`new_ID`, `name`) VALUES
(1, 'Tamas'),
(2, 'Peter'),
(3, 'John'),
(4, 'Smith'),
(5, 'William'),
(6, 'Oscar'),
(7, 'Zoe'),
(8, 'Connor'),
(9, 'Brian'),
(10, 'Sylvia'),
(11, 'Max'),
(12, 'Alex'),
(13, 'Leslie'),
(14, 'James'),
(15, 'Oliver'),
(16, 'Marius'),
(17, 'Roman'),
(18, 'Frank'),
(19, 'Bell'),
(20, 'Centaur'),
(21, 'Sergio');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) NOT NULL,
  `name` varchar(30) COLLATE utf16_bin NOT NULL,
  `city` varchar(30) COLLATE utf16_bin NOT NULL,
  `ZIP` varchar(10) COLLATE utf16_bin NOT NULL,
  `address` varchar(30) COLLATE utf16_bin NOT NULL,
  `image` varchar(255) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `city`, `ZIP`, `address`, `image`) VALUES
(1, 'St Charles Church', 'Vienna', '1010', 'Karlsplatz 1', './img/loc1.jpg'),
(2, 'Zoo Vienna', 'Vienna', '1130', 'Maxingstrasse 13b', './img/loc2.jpg'),
(3, 'St Charles Church', 'Vienna', '1010', 'Karlsplatz 1', './img/loc1.jpg'),
(4, 'Zoo Vienna', 'Vienna', '1130', 'Maxingstrasse 13b', './img/loc2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(10) NOT NULL,
  `name` varchar(30) COLLATE utf16_bin NOT NULL,
  `city` varchar(20) COLLATE utf16_bin NOT NULL,
  `ZIP` varchar(10) COLLATE utf16_bin NOT NULL,
  `address` varchar(30) COLLATE utf16_bin NOT NULL,
  `image` varchar(255) COLLATE utf16_bin NOT NULL,
  `phone` varchar(40) COLLATE utf16_bin NOT NULL,
  `type` varchar(20) COLLATE utf16_bin NOT NULL,
  `weblink` varchar(50) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `city`, `ZIP`, `address`, `image`, `phone`, `type`, `weblink`) VALUES
(1, 'Lemon Leaf Thai ', 'Vienna', '1050', 'Kettenbruckengasse 19', './img/res1.png', '+43(1)5812308', 'Thai Food', 'http://www.lemonleaf.at'),
(2, 'SIXTA', 'Vienna', '1050', 'Schonbrunner Strasse 21', './img/res2.png', '+43(1)5852856l / +43(1)5852856', 'Austrian Food', 'http://www.sixta-restaurant.at/'),
(4, 'SIXTA', 'Vienna', '1050', 'Schonbrunner Strasse 21', './img/res2.png', '+43(1)5852856l / +43(1)5852856', 'Austrian Food', 'http://www.sixta-restaurant.at/');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(50) COLLATE utf16_bin NOT NULL,
  `password` varchar(255) COLLATE utf16_bin NOT NULL,
  `type` enum('admin','user') COLLATE utf16_bin NOT NULL DEFAULT 'user',
  `image` varchar(255) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`, `image`) VALUES
(1, 'Thomas Crown', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'user', 'img/user2.jpg'),
(6, 'Peter667', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'user', 'img/user3.jpg'),
(7, 'Mike1234', '6cf615d5bcaac778352a8f1f3360d23f02f34ec182e259897fd6ce485d7870d4', 'user', 'img/user4.jpg'),
(10, 'adminuser', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'admin', 'img/user1.jpg'),
(11, 'Amanda34', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'user', 'img/user5.jpg'),
(12, 'John Connor', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'user', 'img/user6.jpg'),
(13, 'Ryan9982', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'user', 'img/user1.jpg'),
(14, 'JackHunter', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'user', 'img/user2.jpg'),
(15, 'Peter642', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'user', 'img/user3.jpg'),
(16, 'William963', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'user', 'img/user4.jpg'),
(17, 'Jason531', '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8', 'admin', 'https://i.dailymail.co.uk/i/pix/2017/04/20/13/3F6B966D00000578-4428630-image-m-80_1492690622006.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fourth`
--
ALTER TABLE `fourth`
  ADD PRIMARY KEY (`new_ID`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
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
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fourth`
--
ALTER TABLE `fourth`
  MODIFY `new_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
