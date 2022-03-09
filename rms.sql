-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 03:26 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `username`, `email`, `mobile`, `password`) VALUES
(1, 'b', 'b@yahoo.com', 3549089, '6643521711328a1e282daf5a5da43970eb11a089'),
(3, 't2', 't2@yahoo.com', 2147483647, 'd2f75e8204fedf2eacd261e2461b2964e3bfd5be'),
(4, 't1', 't1@yahoo.com', 2147483647, 'afc97ea131fd7e2695a98ef34013608f97f34e1d'),
(5, 'q', 'q@gmail.com', 12345, '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(6, 'f', 'f@gmail.com', 1234567, '1c6637a8f2e1f75e06ff9984894d6bd16a3a36a9'),
(7, 'j', 'j@gmail.com', 12345678, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(8, 'l', 'l@gmail.com', 3549089, 'afc97ea131fd7e2695a98ef34013608f97f34e1d'),
(13, 'm', 'm@gmail.com', 3549089, '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(14, 'maria', 'maria@gmail.com', 2147483647, '3c4a80dbdfac57d174d1cab8d11d03ad91888820'),
(15, 'mn', 'mn@gmail.com', 1234567890, '2cfe534aa66900e81f6f20b02826b6132d2df8de');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(255) NOT NULL,
  `foodname` varchar(255) NOT NULL,
  `foodtype` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `foodname`, `foodtype`, `description`, `price`) VALUES
(1, 'pizza', 'fastfood', 'barbeque ,cheesy', '500.00'),
(2, 'chicken fry (4 pcs)', 'fastfood', 'crispy,spicy', '260.00'),
(3, 'Handi Dum Biryani with chicken (1:3)', 'Biryani ', 'most wanted', '875.00'),
(4, 'Faluda', 'dessert ', 'cold,fruit mixed ', '210.00'),
(5, 'Mixed Fried Rice (1:3)', 'Rice', 'chiken,shrimp,beef option available', '595.00'),
(6, 'korean sticky chicken', 'Chicken ', 'spicy chicken item ', '200.00'),
(7, 'Nachos ', 'snack ', 'cheesy,crispy', '350.00'),
(8, 'Burger', 'snack', 'cheesy,chicken burger ', '150.00'),
(9, 'korean Ramen', 'snack ', 'spicy, chicken flavored', '300.00'),
(10, 'Cold Coffee ', 'Coffee ', 'choclate,caramel,strawberry', '110.00'),
(11, 'fish fry', 'appetizer', 'spicy', '350.00');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(255) NOT NULL,
  `food` varchar(255) NOT NULL,
  `food_id` int(255) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(10) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `customer_id` int(10) DEFAULT NULL,
  `cus_email` varchar(255) NOT NULL,
  `cus_mobile` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `food`, `food_id`, `price`, `quantity`, `total`, `customer`, `customer_id`, `cus_email`, `cus_mobile`) VALUES
(22, 'Burger', 8, '150.00', 2, '300.00', 'maria', 14, 'maria@gmail.com', '2147483647'),
(22, 'Burger', 8, '150.00', 2, '300.00', 'maria', 14, 'maria@gmail.com', '2147483647'),
(20, 'Mixed Fried Rice (1:3)', 5, '595.00', 2, '1190.00', 'maria', 14, 'maria@gmail.com', '2147483647'),
(19, 'korean Ramen', 9, '300.00', 2, '600.00', 'maria', 14, 'maria@gmail.com', '2147483647'),
(23, 'fish fry', 11, '350.00', 2, '700.00', 'maria', 14, 'maria@gmail.com', '2147483647'),
(31, 'Cold Coffee ', 10, '110.00', 2, '220.00', 'maria', 14, 'maria@gmail.com', '2147483647'),
(25, 'korean Ramen', 9, '300.00', 2, '600.00', 'maria', 14, 'maria@gmail.com', '2147483647'),
(32, 'pizza', 1, '500.00', 2, '1000.00', 'maria', 14, 'maria@gmail.com', '2147483647'),
(27, 'Handi Dum Biryani with chicken (1:3)', 3, '875.00', 2, '1750.00', 'maria', 14, 'maria@gmail.com', '2147483647'),
(28, 'chicken fry (4 pcs)', 2, '260.00', 2, '520.00', 'mn', 15, 'mn@gmail.com', '1234567890'),
(29, 'Mixed Fried Rice (1:3)', 5, '595.00', 2, '1190.00', 'mn', 15, 'mn@gmail.com', '1234567890'),
(33, 'chicken fry (4 pcs)', 2, '260.00', 2, '520.00', 'mn', 15, 'mn@gmail.com', '1234567890'),
(34, 'pizza', 1, '500.00', 1, '500.00', 'maria', 14, 'maria@gmail.com', '2147483647');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `r_id` int(255) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `timeslot` varchar(255) NOT NULL,
  `cus_email` varchar(255) NOT NULL,
  `cus_mobile` varchar(255) NOT NULL,
  `guest_no` int(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`r_id`, `customer_id`, `username`, `timeslot`, `cus_email`, `cus_mobile`, `guest_no`, `date`) VALUES
(13, 15, 'mn', '11:00AM-12:00PM', 'mn@gmail.com', '1234567890', 12, '2021-05-06'),
(12, 14, 'maria', '11:00AM-12:00PM', 'maria@gmail.com', '2147483647', 10, '2021-05-02'),
(11, 15, 'mn', '12:00PM-13:00PM', 'mn@gmail.com', '1234567890', 2, '2021-05-01'),
(10, 14, 'maria', '11:00AM-12:00PM', 'maria@gmail.com', '1234567890', 5, '2021-05-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `o1` (`food_id`),
  ADD KEY `o2` (`customer_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `r1` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `r_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
