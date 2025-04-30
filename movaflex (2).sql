-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2025 at 07:20 PM
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
-- Database: `movaflex`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `product_brand` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_image_path` varchar(500) NOT NULL,
  `surface_material` varchar(255) NOT NULL,
  `filter` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_removed` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `product_brand`, `name`, `product_image_path`, `surface_material`, `filter`, `created_at`, `is_removed`) VALUES
(1, 'kokuyo', '2 Drawers with lock', 'inventory_product/kokuyo_brand/680fafad0ff77.jpg', 'steel', 'cabinet', '2025-04-28 16:41:17', 1),
(2, 'lamex', 'Cafe Chair and Club Chair', 'inventory_product/lamex_brand/680fb8607688d.jpg', 'fabric', 'chair', '2025-04-28 17:18:24', 0),
(3, 'lamex', 'Cafe Chair and Club Chair', 'inventory_product/lamex_brand/680fb86b722de.jpg', 'fabric', 'chair', '2025-04-28 17:18:35', 0),
(4, 'lamex', 'high chair, café chair.', 'inventory_product/lamex_brand/680fba4d338dd.jpg', 'fabric', 'chair', '2025-04-28 17:26:37', 0),
(5, 'lamex', 'café chair.', 'inventory_product/lamex_brand/680fbabaeece6.jpg', 'fabric', 'chair', '2025-04-28 17:28:26', 0),
(6, 'lamex', 'table', 'inventory_product/lamex_brand/680fc4d7814bc.jpg', 'metal', 'table', '2025-04-28 18:11:35', 0),
(14, 'alpha', '4 seater gang chair with back rest', 'inventory_product/alpha_brand/680ff4907572a.jpg', 'steel', 'chair', '2025-04-28 21:35:12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'test@example.com', '$2y$10$wCbvW490SKR.vNJxOkbeVOEgqFiwCENbQ0d6CpJzji90i8OK4cmgG'),
(20, 'superadmin@gmail.com', '$2y$10$DUQeLEdH5Ldsj/MbtF0Vce9WGCVjmw9w/kdPAwhjGtiS.sV1jVsyS');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `inventory` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
