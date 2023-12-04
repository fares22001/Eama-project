-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2023 at 09:01 PM
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
  `user_id` int(255) NOT NULL,
  `id` int(255) NOT NULL
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
  `psize` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Pname`, `pquantity`, `pdescription`, `pbrand`, `pcategory`, `pprice`, `psize`) VALUES
(1, '', 0, '', '', '', 0, 0),
(2, 'silvercare', 10, 'high quality toothbrush', 'silvercare', '', 20, 1),
(3, 'silvercare', 10, 'high quality toothbrush', 'silvercare', '', 20, 1),
(4, 'silvercare', 10, 'high quality toothbrush', 'silvercare', '', 20, 200),
(5, 'silvercare', 10, 'high quality toothbrush', 'silvercare', '', 20, 200),
(7, 'sdasda', 32, 'dada', 'asdds', '', 123, 123),
(8, 'dassdsa', 122, 'sdadas', 'dasdas', '', 123, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
