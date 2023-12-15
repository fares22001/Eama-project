-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 05:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eamaproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `Pname` varchar(255) NOT NULL,
  `pquantity` int(255) NOT NULL,
  `pdescription` varchar(255) NOT NULL,
  `pbrand` varchar(255) NOT NULL,
  `pcategory` varchar(255) NOT NULL,
  `pprice` int(255) NOT NULL,
  `psize` int(255) NOT NULL,
  `pimage` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Pname`, `pquantity`, `pdescription`, `pbrand`, `pcategory`, `pprice`, `psize`, `pimage`) VALUES
(43, 'silvercare', 20, 'High quality toothbrush', 'silvercare', 'Tooth brush', 200, 10, '../public/img/image_657469a38aa10.jpg'),
(44, 'cotoneve', 20, 'High quality cotton buds', 'cotoneve', 'Cotton buds', 100, 20, '../public/img/image_65746a61b7f5a.jpeg'),
(45, 'sunbright', 30, 'very good wipes', 'sunbright', 'Wipes', 50, 20, '../public/img/image_65746a9e7de58.jpg'),
(46, 'cotoneve', 10, 'High quality', 'cotoneve', 'Makeup remover', 85, 20, '../public/img/image_65746db681b1a.png'),
(47, 'Banat', 10, 'Amazing', 'Banat', 'Tooth brush', 110, 20, '../public/img/image_65746ded3e34c.jpg'),
(48, 'silvercare', 10, 'amazing', 'silvercare', 'Tooth brush', 200, 21, '../public/img/image_65746e133ce57.jpg'),
(50, 'silvercare', 10, 'verygood', 'silvercare', 'Tooth brush', 20, 90, '../public/img/image_657c711654e5d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Usersid` int(255) NOT NULL,
  `UsersName` varchar(200) NOT NULL,
  `UsersEmail` varchar(200) NOT NULL,
  `UsersUid` varchar(200) NOT NULL,
  `UsersPwd` varchar(200) NOT NULL,
  `UsersRole` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Usersid`, `UsersName`, `UsersEmail`, `UsersUid`, `UsersPwd`, `UsersRole`) VALUES
(16, 'fares', 'fares@gmail.com', 'fares12', '$2y$10$qhlOS5J2utYE80efj3fGfO0SNVrYDlB/dUR575SQ60I3Ryz4.2HIe', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Usersid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Usersid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`Usersid`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
