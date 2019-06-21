-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2019 at 12:08 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `prod_type` varchar(20) NOT NULL,
  `brand_type` varchar(20) NOT NULL,
  `file` varchar(500) NOT NULL,
  `prod_descr` varchar(500) NOT NULL,
  `cost` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `city`, `prod_type`, `brand_type`, `file`, `prod_descr`, `cost`) VALUES
(1, 'Nikon D5600', 'Mumbai', 'Electronics', 'Other', 'Nikon.jpg', 'Camera Made by Nikon To Click Beautiful Pictures', '78000'),
(2, 'Wings Of Fire', 'Mumbai', 'Books', 'Other', 'wingsoffire.jpeg', 'Inspirational Book Written By APJ abdul kalam', '200'),
(4, 'Xperia XZ2', 'Mumbai', 'Mobiles', 'Sony', 'xperia.jpg', 'Mobile Phone Made By Xiaomi', '78000'),
(7, 'LED Candles', 'Mumbai', 'Home_Accesories', 'Other', 'candles led.jpg', 'Beautiful LED Candle', '200'),
(10, 'Wallpaper Sticker', 'Panvel', 'Home_Accesories', 'Other', 'wallpaperStickers.jpeg', 'Waltop Wall Stickers Wallpaper Golden', '750'),
(14, 'I phone XR', 'Thane', 'Mobiles', 'Apple', 'iphonexr.jpg', 'Amazing Experience Mobile made by Apple', '75000'),
(18, 'test', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(19, 'test1', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(20, 'test2', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(21, 'test3', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(22, 'test4', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(23, 'test5', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(24, 'test6', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(25, 'test7', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(26, 'test8', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(27, 'test9', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(28, 'test10', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(29, 'test11', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(30, 'test12', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(31, 'test13', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(32, 'test14', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(33, 'test15', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(34, 'test16', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(35, 'test17', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(36, 'test18', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(37, 'test19', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(38, 'test20', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(39, 'test21', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(40, 'test22', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(41, 'test23', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(42, 'test24', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123'),
(43, 'test25', 'Mumbai', 'Other', 'Other', 'candles led.jpg', 'test', '123');

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE `reference` (
  `reference_id` int(20) NOT NULL,
  `prod_id` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`reference_id`, `prod_id`, `user_id`) VALUES
(11, '4', '3'),
(12, '3', '3'),
(13, '10', '3'),
(21, '14', '10'),
(58, '1', '3'),
(59, '7', '3'),
(60, '2', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `name`, `email`, `pwd`, `admin`) VALUES
(1, 'Adarsh', 'a@gmail.com', 'a12345', 0),
(2, 'Admin', 'a@gmail.com', 'a', 1),
(3, 'Darshan', 'd@gmail.com', 'd', 0),
(4, 'Deepak', 'd@gmail.com', 'd12345', 0),
(5, 'Priya', 'p@gmail.com', 'p12345', 0),
(6, 'snehar', 's@gmail.com', 's12345', 0),
(7, 'neha', 'n@gmail.com', 'n12345', 0),
(8, 'kjd', 'a@gmail.com', 'k123456', 0),
(9, 'adityaa', 'a@gmail.com', 'a12345', 0),
(10, 'Aditya', 'aditya@gmail.com', 'abc12345', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`),
  ADD UNIQUE KEY `prod_name` (`prod_name`);

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`reference_id`),
  ADD KEY `prod_id` (`prod_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `reference_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
