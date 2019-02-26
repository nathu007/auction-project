-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2019 at 01:09 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_signup`
--

CREATE TABLE `admin_signup` (
  `date` date NOT NULL,
  `time` time NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_signup`
--

INSERT INTO `admin_signup` (`date`, `time`, `name`, `email`, `password`) VALUES
('2018-10-29', '21:07:56', 'nathu', 'nathachaudhary9@gmail.com', 'nhc'),
('2018-10-30', '11:42:42', 'urvish', 'urvish@d.com', 'nhc'),
('2018-11-02', '12:12:38', 'bharat', 'bharat@gmail.com', '123'),
('2018-11-22', '14:16:40', 'urvish', 'ur@gmail.com', 'ur'),
('2018-11-22', '14:20:45', 'bharat', 'bh@gmail.com', 'bh');

-- --------------------------------------------------------

--
-- Table structure for table `auction_item`
--

CREATE TABLE `auction_item` (
  `id` int(10) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL,
  `category` varchar(50) NOT NULL,
  `item_title` varchar(50) NOT NULL,
  `min_bid` int(20) NOT NULL,
  `uname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `id` int(5) NOT NULL,
  `time` datetime DEFAULT NULL,
  `uname` varchar(50) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `bid` int(10) NOT NULL,
  `auction_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`id`, `time`, `uname`, `uemail`, `bid`, `auction_id`) VALUES
(165, '2018-11-22 16:53:50', 'nathu', 'nathu@gmail.com', 10, 6),
(166, '2018-11-23 02:01:15', 'nathu', 'nathu@gmail.com', 100, 21),
(167, '2018-11-23 02:02:17', 'nathu', 'nathu@gmail.com', 150, 21),
(168, '2018-11-23 02:02:25', 'nathu', 'nathu@gmail.com', 170, 21),
(169, '2018-11-23 02:02:31', 'nathu', 'nathu@gmail.com', 190, 21),
(170, '2018-11-23 02:02:37', 'nathu', 'nathu@gmail.com', 200, 21),
(171, '2018-11-23 02:16:29', 'nathu', 'nathu@gmail.com', 10, 2),
(172, '2018-11-23 02:16:36', 'nathu', 'nathu@gmail.com', 50, 2),
(173, '2018-11-23 02:16:43', 'nathu', 'nathu@gmail.com', 90, 2),
(174, '2018-11-23 02:16:49', 'nathu', 'nathu@gmail.com', 100, 2),
(175, '2018-11-23 02:16:54', 'nathu', 'nathu@gmail.com', 200, 2),
(176, '2018-11-24 13:57:02', 'nathu', 'nathu@gmail.com', 10, 4),
(177, '2018-11-24 13:57:12', 'nathu', 'nathu@gmail.com', 10, 18),
(178, '2018-11-24 13:57:28', 'nathu', 'nathu@gmail.com', 10, 19),
(179, '2018-11-24 13:57:43', 'nathu', 'nathu@gmail.com', 10, 20),
(180, '2018-11-24 13:59:41', 'bharat', 'bh123444@gmail.com', 20, 4),
(181, '2018-11-24 14:40:14', 'nathu', 'nathu@gmail.com', 1000, 19),
(182, '2018-11-24 14:40:50', 'nathu', 'nathu@gmail.com', 1500, 19),
(183, '2018-11-24 14:45:02', 'nathu', 'nathu@gmail.com', 4, 22),
(184, '2018-11-24 14:45:31', 'nathu', 'nathu@gmail.com', 150, 22);

-- --------------------------------------------------------

--
-- Table structure for table `cust_address`
--

CREATE TABLE `cust_address` (
  `pid` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `add1` varchar(100) NOT NULL,
  `add2` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` int(6) NOT NULL,
  `wname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust_address`
--

INSERT INTO `cust_address` (`pid`, `name`, `email`, `phone`, `add1`, `add2`, `city`, `pincode`, `wname`) VALUES
(24, 'nathu', 'thehindimania.web@gmail.com', 2147483647, 'at post kherva', 'dist mehsana', 'mehsana', 384012, ''),
(24, 'hj', 'trdyghj@h.vc', 2147483647, 'gdfhgjhj', 'gfhjk', 'yuijotyu', 456678, ''),
(24, 'fthj', 'gdh@fhfgh', 3454, 'grhtd', 'efrdfgrr', 'frrht', 3464, ''),
(24, 'fthj', 'gdh@fhfgh', 3454, 'grhtd', 'efrdfgrr', 'frrht', 3464, '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'nathu', 'davidshown9@protonmail.com', 'hello', 'kuch nai'),
(2, 'urvish', 'demo@demo.com', 'something bad', 'hello sir');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `uid` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `uname` varchar(50) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `upass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`uid`, `date`, `time`, `uname`, `uemail`, `upass`) VALUES
(4, '2018-10-31', '17:00:00', 'nathu', 'nathu@gmail.com', 'nhc'),
(5, '2018-11-02', '11:43:38', 'urvish', 'urvish@gmail.com', '123'),
(6, '2018-11-22', '17:21:33', 'nathu', 'nathachaudhary9@gmail.com', 'nhc'),
(7, '2018-11-22', '17:23:44', 'gjhg', 'dfhgthtygh@dg.com', 'nhc'),
(8, '2018-11-22', '17:29:58', 'dsjcds', 'sdcjhdsn@dfj.com', 'hc'),
(9, '2018-11-24', '13:58:22', 'bh', 'bh@gmail.com', 'bh'),
(10, '2018-11-24', '13:59:06', 'bharat', 'bh123444@gmail.com', 'bh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auction_item`
--
ALTER TABLE `auction_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auction_item`
--
ALTER TABLE `auction_item`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
