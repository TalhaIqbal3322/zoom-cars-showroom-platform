-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2024 at 02:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoom_motors`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_type` varchar(200) NOT NULL,
  `user_no` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `user_type`, `user_no`) VALUES
(1, 'admin@admin.com', 'MTIzNA==81dc9bdb52d04dc20036dbd8313ed055MTIzNA==', 'Admin', '000'),
(11, 'admin@site.com', '123', 'Admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_no` varchar(200) DEFAULT NULL,
  `car_name` varchar(200) DEFAULT NULL,
  `model_no` varchar(200) DEFAULT NULL,
  `body` varchar(200) DEFAULT NULL,
  `fuel_type` varchar(200) DEFAULT NULL,
  `transmission` varchar(200) DEFAULT NULL,
  `drive` varchar(200) DEFAULT NULL,
  `int_color` varchar(200) DEFAULT NULL,
  `ext_color` varchar(200) DEFAULT NULL,
  `door` varchar(200) DEFAULT NULL,
  `cylinders` varchar(200) DEFAULT NULL,
  `main_img` varchar(200) DEFAULT NULL,
  `full_desc` varchar(3000) DEFAULT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_no`, `car_name`, `model_no`, `body`, `fuel_type`, `transmission`, `drive`, `int_color`, `ext_color`, `door`, `cylinders`, `main_img`, `full_desc`, `status`) VALUES
(8, '868612', 'Toyota 20 Diesel A/T LHD', '2007', 'Sedan', 'Petrol', 'Auto', 'Left', 'Red', 'White', '4', '1', '544705.jpg', 'Very good family used car', 'Active'),
(9, '645915', 'Suzuki Mehran', '2005', 'Hatchback', 'Petrol', 'Manual', 'Left', 'White', 'White', '4', '1', '893811.jpg', '8/10 condition', 'Active'),
(10, '192693', 'Alto Car', '2009', 'Sedan', 'Diesel', 'Manual', 'Left', 'Red', 'White', '4', '1', '319424.jpg', 'asdas', 'Active'),
(11, '520061', 'Prado GX', '2023', 'Sedan', 'Diesel', 'Manual', 'Left', 'Red', 'White', '4', '1', '141226.jpg', 'Luxury car', 'Active'),
(12, '111059', ' Toyota 20 Diesel M/T RHD', '2008', 'sedan', 'petrol', 'Manual', 'Right', 'Beige', 'White', '4', '2', '111059images.jpg', 'Very good family used car', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `product_imgs`
--

CREATE TABLE `product_imgs` (
  `id` int(11) NOT NULL,
  `product_no` varchar(200) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_imgs`
--

INSERT INTO `product_imgs` (`id`, `product_no`, `img`) VALUES
(5, '868612', '111059images.jpg'),
(6, '645915', '382258wp12351712.webp'),
(7, '192693', '461016alto.jpg'),
(8, '520061', '2390302024-toyota-land-cruiser-prado-rendering.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_imgs`
--
ALTER TABLE `product_imgs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_imgs`
--
ALTER TABLE `product_imgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
