-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2020 at 09:32 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `interest_tb`
--

CREATE TABLE `interest_tb` (
  `id` int(11) NOT NULL,
  `pcode` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interest_tb`
--

INSERT INTO `interest_tb` (`id`, `pcode`, `name`, `mobile`, `email`, `place`) VALUES
(1, '1002', 'qqq', '9876543211', 'b@gmail.com', 'sdsds'),
(2, '1003', 'qqq', '9876543211', 'b@gmail.com', 'sdsds'),
(3, '1002', 'qqq', '9876543211', 'b@gmail.com', 'sdsds');

-- --------------------------------------------------------

--
-- Table structure for table `plan_tb`
--

CREATE TABLE `plan_tb` (
  `id` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plan_tb`
--

INSERT INTO `plan_tb` (`id`, `pname`, `duration`, `price`) VALUES
(1, 'Basic', '1 Month', '100'),
(2, 'Standard', '3 Month', '300'),
(3, 'Premium', '6 Month', '500');

-- --------------------------------------------------------

--
-- Table structure for table `product_tb`
--

CREATE TABLE `product_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ptype` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `bhk` varchar(100) NOT NULL,
  `bathroom` varchar(100) NOT NULL,
  `sqft` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `paddress` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_tb`
--

INSERT INTO `product_tb` (`id`, `name`, `mobile`, `place`, `email`, `ptype`, `photo`, `bhk`, `bathroom`, `sqft`, `price`, `paddress`) VALUES
(1002, 'ssss', '9876543210', 'kannur', 's@gmail.com', 'home', 'h2.jpg', '4', '3', '2500', '3000000', 'aaaaaaaaaaaaa'),
(1003, 'ssss', '9876543210', 'kannur', 's@gmail.com', 'home', 'h3.jpg', '5', '3', '3000', '4000000', 'cvggfgdfg'),
(1004, 'adhil', '0123', 'thrissur', 'adhil@gmail.com', 'home', 'h4.jpg', '4', '3', '3000', '4500000', 'dsfsdfdf'),
(1005, 'adhil', '0123', 'thrissur', 'adhil@gmail.com', 'home', 'home1.jpg', '5', '3', '2500', '3500000', 'hkghjgjhj'),
(1006, 'Rizwan', '9874561230', 'Iritty', 'rizwan@gmail.com', 'land', 'land.jpg', '', '', '5000', '7000000', 'rrwerewrer');

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`id`, `user`, `name`, `mobile`, `place`, `email`, `password`, `pname`, `price`) VALUES
(1, 'Buyer', 'qqq', '9876543211', 'sdsds', 'b@gmail.com', '123', 'Basic', '100'),
(2, 'Seller', 'ssss', '9876543210', 'kannur', 's@gmail.com', '111', 'Standard', '300'),
(3, 'Seller', 'adhil', '0123', 'thrissur', 'adhil@gmail.com', '124', 'Standard', '300'),
(4, 'Seller', 'Rizwan', '9874561230', 'Iritty', 'rizwan@gmail.com', '009', 'Premium', '500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interest_tb`
--
ALTER TABLE `interest_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_tb`
--
ALTER TABLE `plan_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tb`
--
ALTER TABLE `product_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `interest_tb`
--
ALTER TABLE `interest_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `plan_tb`
--
ALTER TABLE `plan_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_tb`
--
ALTER TABLE `product_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
