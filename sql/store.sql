-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2024 at 05:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `image`) VALUES
(1, 'Dunk Lows Panda', 8300.00, 'img/dunk lows panda.jpg'),
(2, 'Dunk Lows', 12000.00, 'img/dunk lows.jpg'),
(3, 'Dunk Highs', 14000.00, 'img/dunk high.jpg'),
(4, 'Air Jordan 1 Mid SE', 12500.00, 'img/air jordan 1 mid se.jpg'),
(5, 'Air Max 1 Essential', 13000.00, 'img/air max 1.jpg'),
(6, 'Nike Air Max Excee', 13000.00, 'img/air max excee.jpg'),
(7, 'Nike Air Max 90', 8000.00, 'img/air max 2.jpg'),
(8, 'Air Max SC Trend', 10000.00, 'img/air max 3.jpg'),
(9, 'Air Jordan 1 Mid', 12000.00, 'img/mid 1.jpg'),
(10, 'Air Jordan 1 Low SE', 10000.00, 'img/air jordan se low.jpg'),
(11, 'Air Jordan 5 SE', 15000.00, 'img/retro high.jpg'),
(12, 'Air Force 1 Shadow', 9000.00, 'img/air force.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Vishwa', 'vish@gmail.com', '708175b3fdb269c4ebe8e7751bb3fccd', '9283746352', 'Bengaluru', 'JP Nagar 2nd Phase'),
(2, 'Vishal', 'vishal@gmail.com', '72eea11febe23ae3dcab2bf59794c54c', '9120394750', 'Chennai', 'T Nagar'),
(3, 'Ram', 'ram@gmail.com', '1b7b4c38f626766bbdcfc895e2c514f6', '9718273679', 'Delhi', 'PMO'),
(4, 'Raj', 'raj@gmail.com', '1537c1dea8479ff52bc68336e323385f', '9281736475', 'Bengaluru', 'Basavangudi'),
(5, 'Ravi', 'ravi@gmail.com', 'f4690de2554616f5b853d35f5a7970d4', '9182712098', 'Chennai', 'abc'),
(6, 'Vishwadutt', 'vishwadutt99@gmail.com', '8231ac09972b51e692a5f515f8349a29', '9741301718', 'Bengaluru', 'Jayanagar 3rd Block'),
(7, 'Tanishq', 'tanishqkaull@gmail.com', 'dadd64a0396035e52f31d3c1b8b3b701', '8238422122', 'surat', 'C/409 Green Avenue Apt, Opp joggers park, Ghoddod Road'),
(8, 'Riddhima Sharma', 'riddsafterhours@gmail.com', '79b6476b26c5276553750973310aba10', '9876543211', 'Jaipur', 'S 20 Tonk Road,Jaipur,Rajasthan'),
(9, 'Lokesh', 'lokesh24@gmail.com', '8363ecddf654c896bb5571dd2ec9b024', '9374557569', 'Surat ', 'kaheiduhewi'),
(10, 'Neti Sharma', 'neti@gmail.com', 'c5f01a42ac59e74b01ae7eb6ca2c4f15', '9876543211', 'Jaipur', 'S-20, C scheme,Jaipur ,Rajasthan-302016');

-- --------------------------------------------------------

--
-- Table structure for table `user_item`
--

CREATE TABLE `user_item` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed','','') NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_item`
--

INSERT INTO `user_item` (`id`, `user_id`, `item_id`, `status`, `date_time`) VALUES
(1, 1, 2, 'Confirmed', '2020-06-07 21:08:35'),
(2, 1, 10, 'Confirmed', '2020-06-07 21:08:38'),
(3, 3, 7, 'Confirmed', '2020-06-07 21:09:06'),
(4, 3, 12, 'Confirmed', '2020-06-07 21:09:10'),
(5, 5, 5, 'Confirmed', '2020-06-07 21:22:01'),
(6, 5, 1, 'Confirmed', '2020-06-07 21:22:03'),
(7, 7, 11, 'Confirmed', '2024-07-17 15:41:56'),
(10, 7, 4, 'Confirmed', '2024-07-17 15:43:15'),
(13, 7, 2, 'Confirmed', '2024-07-17 17:09:48'),
(14, 7, 3, 'Confirmed', '2024-07-17 17:09:52'),
(15, 7, 1, 'Confirmed', '2024-07-17 17:09:55'),
(16, 8, 3, 'Confirmed', '2024-07-17 18:03:36'),
(17, 9, 2, 'Confirmed', '2024-07-22 20:36:00'),
(18, 9, 3, 'Confirmed', '2024-07-22 20:36:19'),
(19, 10, 10, 'Confirmed', '2024-07-22 21:16:38'),
(20, 10, 1, 'Confirmed', '2024-07-22 21:16:41'),
(21, 10, 5, 'Confirmed', '2024-07-22 21:16:44'),
(22, 10, 12, 'Confirmed', '2024-07-22 21:16:48'),
(23, 10, 6, 'Confirmed', '2024-07-22 21:17:10'),
(24, 10, 8, 'Confirmed', '2024-07-22 21:17:13'),
(25, 10, 9, 'Confirmed', '2024-07-22 21:17:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_item`
--
ALTER TABLE `user_item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_item`
--
ALTER TABLE `user_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
