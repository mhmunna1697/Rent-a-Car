-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2019 at 09:48 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `billing_information`
--

CREATE TABLE `billing_information` (
  `bill_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing_information`
--

INSERT INTO `billing_information` (`bill_id`, `car_id`, `client_id`, `price`) VALUES
(20, 11, 29, 1000),
(21, 11, 31, 1000),
(22, 14, 34, 2000),
(23, 11, 41, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `car_name` varchar(255) NOT NULL,
  `car_type` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `hire_cost` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `car_type`, `image`, `hire_cost`, `capacity`, `status`) VALUES
(11, 'corolla axio', 'toyota', 'car_d27465a7-efef-4234-b208-a1f427bd9a2e_640_0.jpg', 1000, 5, 'Available'),
(12, 'toyota premio', 'toyota', 'pre.jpg', 1500, 4, 'Available'),
(13, 'Allion', 'Toyota', 'BF953830_770277.jpg', 1200, 4, 'Available'),
(14, 'Hiace', 'Toyota', 'hia.jpg', 2000, 10, 'Available'),
(16, 'Range rover', 'Range rover', 'range.jpg', 10000, 3, 'Available'),
(17, 'Xcorolla', 'Toyota', 'hqdefault.jpg', 800, 4, 'Available'),
(19, 'corolla axio', 'toyota', 'BF953830_770277.jpg', 1000, 4, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_no` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `car_id` int(11) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `mpesa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `fname`, `email`, `id_no`, `phone`, `location`, `gender`, `car_id`, `status`, `mpesa`) VALUES
(21, 'inti', 'inti@gmail.com', 234234, 1795355849, 'mohakhali', 'Male', 11, 'Approved', 'hskdjhajksd'),
(24, 'Shahriar', 'shahriar1359@gmail.com', 1351531351, 1850500623, 'dadfafsda', 'Male', NULL, 'Available', 'gsajdh'),
(27, 'Fahad', 'fahad@gmail.com', 12345, 1611806535, 'asdfg', 'Male', 14, 'Approved', 'gsajdh'),
(30, 'Auvi', 'auvi@gmail.com', 123456, 1812434444, 'asdfg', 'Male', 16, 'Approved', 'qwerty'),
(31, 'Shuvo', 'shuvo@gmail.com', 12345, 1997186506, 'dadfafsda', 'Male', 14, 'Approved', 'gsajdh'),
(32, 'Rivan', 'rivana@gmail.com', 12345, 1628312807, 'asdfg', 'Male', 14, 'Approved', 'gsajdh'),
(33, 'Zerif', 'zerif@gmail.com', 123456, 1521400450, 'dadfafsda', 'Male', 16, 'Approved', 'qwerty'),
(35, 'Mahin', 'mahin@gmail.com', 123456, 1997186506, 'asdfg', 'Male', 16, 'Approved', 'qwerty'),
(36, 'Ayon', 'ayon@gmail.com', 123456, 1850500623, 'asdfg', 'Male', 16, 'Approved', 'qwerty'),
(37, 'Abir', 'abir@gmail.com', 12345, 1628312807, 'asdfg', 'Male', 14, 'Approved', 'gsajdh'),
(38, 'Ishita miss', 'miss@gmail.com', 12345, 2147483647, 'asdfg', 'Female', 14, 'Approved', 'gsajdh'),
(39, 'Shah', 'shah@gmail.com', 9999, 1521400450, 'asdfg', 'Male', 14, 'Approved', 'qwerty'),
(40, 'najeefa miss', 'najeefamiss@gmail.com', 12345, 1611806535, 'asdfg', 'Male', 14, 'Approved', 'gsajdh'),
(41, 'Shahriar', 'shuvo@gmail.com', 12345, 1521400450, 'asdfg', 'Male', 11, 'Pending', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
  `hire_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `billing_information`
--
ALTER TABLE `billing_information`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `hire`
--
ALTER TABLE `hire`
  ADD PRIMARY KEY (`hire_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `billing_information`
--
ALTER TABLE `billing_information`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `hire`
--
ALTER TABLE `hire`
  MODIFY `hire_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
