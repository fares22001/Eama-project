-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 03:08 PM
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
(49, 'sunbright', 10, 'very good', 'sunbright', 'Wipes', 30, 20, '../public/img/image_65746e48604da.jpg');

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
(1, 'mohamed', 'mohamed@gmail.com', 'mooo', '$2y$10$oxT7EDXLuo4DxZWUmfaaVO4JVYo.fIKKSG6ke3Fu.I7JeylYSLp/G', 'user'),
(3, 'jana', 'jana@gmail.com', 'janaa', '$2y$10$SO9ASWrfkFbNv5IPDKrwEeAtFOfIlAc4dkmIObxVBILUNEnja0QjG', 'user'),
(4, 'fares', 'fares@gmail.com', 'fess', '$2y$10$oqn2e6twiVGU5HN9I/8af.IUE37GVnTSw5EH6c/TvYQ8NA2b/rlra', 'pharmacy'),
(5, 'bebo', 'bebo@gmail.com', 'bulk', '$2y$10$h.Cz6vNAbgGVTd1HagTw9u1/8Smn37S2ct3uu48IA88yeH4uFTR4q', 'user'),
(6, 'omar', 'omar@gmail.com', 'bakary', '$2y$10$zPDuf2zufiyRG7YMc/W1i.dHxEI0eB/lQgUSiOb7Wog6QfVvXQ8JK', 'company'),
(7, 'khaled', 'khaled@gmail.com', 'zatona', '$2y$10$1CMrHEBdv.atf0fNeVYo5eoK8sKhK7CTCXMzyb9noNaOp96wPTi2G', 'company'),
(8, 'fares', 'fares2100380@miuegypt.edu.eg', 'fares1', '$2y$10$m4gBCG.qkddiMfP5wurQOeodgEGucS0u4ldFBOqxOLlJbGQBRMpd.', 'user'),
(9, 'elbebo', 'elbebo@gmail.com', 'elbebo2', 'bebo1234', 'company'),
(10, 'menna', 'menna@gmail.com', 'menna1', 'menna12345', 'user'),
(11, 'mohamed12', 'mo@gmail.com', 'mo123', '$2y$10$fUqDtjH.7dpR8PSkrtxJzuRJT9SS/8NBs/vcqrNHlc.hNNwsy1x7C', 'pharmacy'),
(12, 'farooos', 'farooos@gmail.com', 'farooos12', '12345678', 'company'),
(13, 'yassin', 'yassin@gmail.com', 'yassin12', '12345678', 'user'),
(14, 'hameed', 'hameed@gmail.com', 'hameed1', '$2y$10$EzmZvucTBSL1UwVUGNRPkuOqIdZAA2GKW0SvI4FzVa0AfkmnHy9NO', 'company');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Usersid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
