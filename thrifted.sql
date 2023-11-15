-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 08:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thrifted`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `product_qty`, `created_at`) VALUES
(1, 8, 19, 2, '2022-12-02 17:47:16'),
(2, 8, 14, 1, '2022-12-02 17:54:36'),
(42, 1, 23, 7, '2022-12-07 07:28:59');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`) VALUES
(21, 'Clothing', 'Clothing', 'Clothing', 0, 1, '1669881851.jpg', '', '', '', '2022-12-01 07:47:25'),
(22, 'Laptops', 'Laptops', 'Laptops', 0, 1, '1669880896.jpg', '', '', '', '2022-12-01 07:48:16'),
(23, 'Mobiles', 'Mobiles', 'Mobiles', 0, 1, '1669881715.jpg', '', '', '', '2022-12-01 08:01:55'),
(24, 'Fitness', 'Fitness', 'Fitness', 0, 1, '1669882582.jpg', '', '', '', '2022-12-01 08:08:13'),
(34, 'Shoes', 'Shoes', 'Shoes', 0, 1, '1670213198.jpg', 'Shoes', 'Shoes', 'Shoes', '2022-12-05 04:06:38'),
(35, 'rolex', 'rolex', 'rolex', 0, 1, '1670299663.jpg', 'rolex', 'rolex', 'rolex', '2022-12-06 04:07:43'),
(36, 'Sneakers', 'Sneakers', 'Sneakers', 0, 1, '1670385852.png', 'Sneakers', 'Sneakers', 'Sneakers', '2022-12-07 04:04:12');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `tracking_no` varchar(255) NOT NULL,
  `user_id` int(191) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` mediumtext NOT NULL,
  `pincode` int(191) NOT NULL,
  `total_price` int(191) NOT NULL,
  `payment_mode` varchar(191) NOT NULL,
  `payment_id` varchar(191) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `comments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `tracking_no`, `user_id`, `name`, `email`, `phone`, `address`, `pincode`, `total_price`, `payment_mode`, `payment_id`, `status`, `comments`, `created_at`) VALUES
(1, 'dil961003010396', 1, 'dil', 'dol@gmail.com', '9803010396', 'dhobight', 123, 39000, '', '', 0, NULL, '2022-12-03 18:16:02'),
(2, 'dil430503010396', 1, 'dil', 'dol@gmail.com', '9803010396', 'dhobight', 123, 39000, '', '', 0, NULL, '2022-12-03 18:16:54'),
(3, 'dil670403010396', 1, 'dil', 'dol@gmail.com', '9803010396', 'dhobight', 123, 39000, '', '', 0, NULL, '2022-12-03 18:18:33'),
(4, 'priya619603010396', 1, 'priya', 'dolchhetri778@gmail.com', '9803010396', 'sad', 123, 39000, 'COD', '', 0, NULL, '2022-12-03 18:19:07'),
(5, 'Dil984803010396', 1, 'Dil', 'dolchhetri778@gmail.com', '9803010396', 'dfsaf', 0, 39000, 'COD', '', 0, NULL, '2022-12-03 18:22:02'),
(6, 'Dil330503010396', 1, 'Dil', 'dolchhetri778@gmail.com', '9803010396', 'Dhobighat, Lalitput', 7878, 5400, 'COD', '', 0, NULL, '2022-12-04 04:54:31'),
(7, 'Dilchhetri994203010396', 1, 'Dilchhetri', 'dolchhetri778@gmail.com', '9803010396', 'i can  do this very much\r\n', 7878, 600, 'COD', '', 0, NULL, '2022-12-04 05:37:24'),
(8, 'dil47684567890', 1, 'dil', 'dolchhetri778@gmail.com', '234567890', 'Dhobighat', 56236, 30000, 'COD', '', 0, NULL, '2022-12-04 10:36:15'),
(9, 'Dil554742', 1, 'Dil', 'do@gmail.com', '3242', '234', 23, 29000, 'COD', '', 0, NULL, '2022-12-04 16:38:29'),
(10, 'sdf8859', 1, 'sdf', 'dolchhetri778@gmail.com', 'da', 'asf', 0, 5000, 'COD', '', 0, NULL, '2022-12-04 17:17:16'),
(11, 'xdgh14253456789', 1, 'xdgh', 'dolchhetri778@gmail.com', '123456789', '8997', 7678, 100, 'COD', '', 0, NULL, '2022-12-05 01:02:50'),
(12, 'Dil732103010396', 1, 'Dil', 'dol@gmail.com', '9803010396', 'Dhobighat', 8787, 15000, 'COD', '', 0, NULL, '2022-12-05 02:06:03'),
(13, 'Dil872303010396', 1, 'Dil', 'dol@gmail.com', '9803010396', 'dhobighat', 10, 5000, '', '', 0, NULL, '2022-12-05 02:10:05'),
(14, 'animesh242703010396', 1, 'animesh', 'dol@gmail.com', '9803010396', 'Dhobighat', 123, 10000, 'COD', '', 0, NULL, '2022-12-05 03:30:01'),
(15, 'Khusbu80277641223', 1, 'Khusbu', 'khus123@gmail.com', '987641223', 'Gwarkhu, lalitpur', 45555, 10000, 'COD', '', 0, NULL, '2022-12-05 03:33:54'),
(16, 'animesh72624567896787', 1, 'animesh', 'dol@gmail.com', '234567896787', 'dhobighat', 7787, 359890, 'COD', '', 0, NULL, '2022-12-06 04:09:51'),
(17, 'animesh9148678', 1, 'animesh', '12@gmail.com', '45678', 'dhobighat', 9088, 20000, 'COD', '', 0, NULL, '2022-12-06 12:31:23'),
(18, 'Dil Bahadur Chhetri584803010396', 1, 'Dil Bahadur Chhetri', 'do@gmail.com', '9803010396', 'Dhobighat', 6565, 6170, 'COD', '', 0, NULL, '2022-12-07 05:30:40');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(191) NOT NULL,
  `prod_id` int(191) NOT NULL,
  `qty` int(191) NOT NULL,
  `price` int(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `prod_id`, `qty`, `price`, `created_at`) VALUES
(1, 3, 14, 1, 24000, '2022-12-03 18:18:33'),
(2, 3, 19, 3, 5000, '2022-12-03 18:18:33'),
(3, 4, 14, 1, 24000, '2022-12-03 18:19:07'),
(4, 4, 19, 3, 5000, '2022-12-03 18:19:07'),
(5, 5, 14, 1, 24000, '2022-12-03 18:22:02'),
(6, 5, 19, 3, 5000, '2022-12-03 18:22:02'),
(7, 6, 15, 4, 100, '2022-12-04 04:54:31'),
(8, 6, 19, 1, 5000, '2022-12-04 04:54:31'),
(9, 7, 15, 6, 100, '2022-12-04 05:37:24'),
(10, 8, 19, 6, 5000, '2022-12-04 10:36:15'),
(11, 9, 14, 1, 24000, '2022-12-04 16:38:29'),
(12, 9, 19, 1, 5000, '2022-12-04 16:38:29'),
(13, 10, 19, 1, 5000, '2022-12-04 17:17:16'),
(14, 11, 15, 1, 100, '2022-12-05 01:02:50'),
(15, 12, 19, 3, 5000, '2022-12-05 02:06:03'),
(16, 13, 19, 1, 5000, '2022-12-05 02:10:05'),
(17, 14, 16, 1, 10000, '2022-12-05 03:30:01'),
(18, 15, 19, 2, 5000, '2022-12-05 03:33:54'),
(19, 16, 23, 1, 9900, '2022-12-06 04:09:51'),
(20, 16, 22, 10, 25000, '2022-12-06 04:09:51'),
(21, 16, 21, 10, 9999, '2022-12-06 04:09:51'),
(22, 17, 19, 4, 5000, '2022-12-06 12:31:23'),
(23, 18, 24, 5, 1234, '2022-12-07 05:30:40');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `small_description` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `original_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keywords` mediumtext NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `image`, `qty`, `status`, `trending`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`) VALUES
(19, 21, 'black top', 'black top', 'black + top', 'Blacktop or asphalt concrete is a composite material used to surface roads. The word blacktop can also be used to refer directly to a paved road.', 24213, 5000, '1669996028.jpg', -9, 0, 1, 'black top', ' black top', 'black top', '2022-12-02 15:47:08'),
(21, 34, 'Nike Air Max', 'Nike Air Max', 'Nike Air Max', 'VIENNA, AUSTRIA - AUGUST 10, 2017: Nike Air Max Thea white and black sneaker on white background.', 10000, 9999, '1670213272.jpg', 0, 0, 1, 'VIENNA, AUSTRIA - AUGUST 10, 2017: Nike Air Max Thea white and black sneaker on white background.', 'VIENNA, AUSTRIA - AUGUST 10, 2017: Nike Air Max Thea white and black sneaker on white background.', 'VIENNA, AUSTRIA - AUGUST 10, 2017: Nike Air Max Thea white and black sneaker on white background.', '2022-12-05 04:07:52'),
(22, 34, 'Shoe Adidas ', 'Shoe Adidas ', 'Shoe Adidas ', 'Clip Arts Related To : Sneakers Nike Air Max Shoe Adidas - nike png download - 3144*3144 - Free Transparent Sneakers png Download.', 20000, 25000, '1670213572.png', -9, 0, 1, 'sexy', 'Clip Arts Related To : Sneakers Nike Air Max Shoe Adidas - nike png download - 3144*3144 - Free Transparent Sneakers png Download.', 'Clip Arts Related To : Sneakers Nike Air Max Shoe Adidas - nike png download - 3144*3144 - Free Transparent Sneakers png Download.', '2022-12-05 04:12:52'),
(23, 35, 'rolex classic m15 1978', 'rolex classic m15 1978', 'rolex classic m15 1978', 'rolex classic m15 1978', 99000, 9900, '1670299725.png', 0, 0, 1, 'rolex classic m15 1978', 'rolex classic m15 1978', 'rolex classic m15 1978', '2022-12-06 04:08:45'),
(24, 36, 'adidas max-100', 'adidas max-100', 'adidas max-100', 'adidas max-100', 1245, 1234, '1670385960.png', -3, 0, 1, 'adidas max-100', 'adidas max-100', 'adidas max-100', '2022-12-07 04:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `role_as`, `created_at`) VALUES
(1, 'Dil', 'dol@gmail.com', 2147483647, '1234', 1, '2022-11-27 16:54:37'),
(8, 'dol', 'do@gmail.com', 123456789, 'qwerty', 0, '2022-11-27 16:55:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
