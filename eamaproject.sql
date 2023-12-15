-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 04:26 PM
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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(200) NOT NULL,
  `image_name` varchar(300) NOT NULL,
  `image_data` varchar(300) NOT NULL
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
  `pimage` varchar(300) NOT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Pname`, `pquantity`, `pdescription`, `pbrand`, `pcategory`, `pprice`, `psize`, `pimage`, `image_id`) VALUES
(1, '', 0, '', '', '', 0, 0, '', 0),
(2, 'silvercare', 10, 'high quality toothbrush', 'silvercare', '', 20, 1, '', 0),
(3, 'silvercare', 10, 'high quality toothbrush', 'silvercare', '', 20, 1, '', 0),
(4, 'silvercare', 10, 'high quality toothbrush', 'silvercare', '', 20, 200, '', 0),
(5, 'silvercare', 10, 'high quality toothbrush', 'silvercare', '', 20, 200, '', 0),
(7, 'sdasda', 32, 'dada', 'asdds', '', 123, 123, '', 0),
(8, 'dassdsa', 122, 'sdadas', 'dasdas', '', 123, 12, '', 0),
(9, 'fares', 44, 'hsdjkf', 'jbhds', '', 72, 0, '', 0),
(10, 'as', 22, 'asf', 'et', '', 22, 0, '', 0),
(11, 'asbd', 44, 'jhebr', 'jhb', '', 324, 0, '', 0),
(12, '', 0, '', '', '', 0, 0, '', 0),
(13, 'asd', 0, 'asf', 'asf', '', 0, 0, '', 0),
(14, 'hosss', 20, 'goof', 'fess', '', 100, 22, '', 0),
(16, 'bassem', 1, 'sad', 'sdbsd', '', 999, 11, '', 0),
(17, 'el bebo', 1, 'SJhbsf', 'sd', '', 99, 22, '', 0),
(18, 'ejke', 12, 'sdg', 'qwr', 'tooth brush', 21, 23, '', 0),
(19, 'dsgs', 222, 'xdgxdf', 'xgdf', 'tooth brush', 2, 0, '', 0),
(20, 'jkdg', 0, 'srtyerty', 'sdgydsg', 'skin care', 0, 0, '', 0),
(21, 'iugdsifuk', 34, 'dsg,jndgfkj', 'drg', 'skin care', 45354, 0, '', 0),
(22, '', 0, '', '', 'tooth brush', 0, 0, '', 0),
(23, '', 0, '', '', 'tooth brush', 0, 0, '', 0),
(24, '', 0, '', '', 'tooth brush', 0, 0, '', 0),
(25, '', 0, '', '', 'tooth brush', 0, 0, '', 0),
(26, '', 0, '', '', 'tooth brush', 0, 0, '', 0),
(27, '', 0, '', '', '', 0, 0, '', 0);

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
(8, 'fo2sh', 'fo2sh@gmail.com', 'fo2sh1', '$2y$10$wIyLymBeYQ3OBSH1zbt0Q.6tedzHIejW1fE7FVnRSM9wmQLgues7u', 'company'),
(9, 'moataz', 'moataz@gmail.com', 'zezo', '$2y$10$J3b6CA4Ro2RQyyjJkqZQR.Bx.4zIamnvL7rTuVGifmdZuNTLiwn5.', 'company'),
(10, 'ahmed', 'ahmed@gmail.com', 'dodo', '$2y$10$5gHZcRssC8ZiUSrtgROSSOQTfR1Qm4uhUbsAFaTgv/GTgjnQC1sZC', 'user'),
(11, 'abdelrahman', 'mansy@gmail.com', 'mansy', '$2y$10$zdRxCHuzpMeR.X5HYu45uO4OObZQJsB9KApdUYEbqJMDuD7ad5dMe', 'pharmacy'),
(12, 'mohamedhussam', 'hussam@gmail.com', 'mmm', '$2y$10$KQ5hZmpdsSVML8jc4tYbyOFBWMvsMCckWF6IE5DJzr55NXU2hwejO', 'user'),
(13, 'ayman', 'ayman@gmail.com', 'aymann', '$2y$10$28j9yPYEkL0zK8kVFfmDr.C8pYWyCK9MJOCcCBkVtkQnmlwlXNwJ.', 'company'),
(14, 'osama', 'osama@gmail.com', 'oss', '$2y$10$G7DG/WeqkBDbkeZLQO4c6OnhM2E86z2IVED.1GXk9ODiyyHlv/phy', 'user');

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
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products` (`image_id`);

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
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Usersid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`Usersid`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
