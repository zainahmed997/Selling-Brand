-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2022 at 03:12 PM
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
-- Database: `btrend`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sub_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`id`, `name`, `price`, `discount`, `image`, `category`, `sub_category`) VALUES
(1, 'Mens Printed Summer Short-Sleeve Shirt', '10000', '70', 'upload-image/f1.jpg', 'Men', 'Summer Shirts'),
(2, 'Grant Chronograph Navy Leather', '7999', '0', 'upload-image/watch3.jpg', 'Accessories', 'Watches'),
(3, 'Voguish Chiffon Master Replica Women Dress', '8999', '0', 'upload-image/w7.jpg', 'Women', 'Dresses'),
(4, 'Red Fancy Handbag For Women', '2599', '0', 'upload-image/hb5.jpg', 'Accessories', 'Handbags'),
(5, 'Black Stylish Handbag For Women', '2599', '0', 'upload-image/hb2.jpg', 'Accessories', 'Handbags'),
(6, 'Mens Floral Printed Summer Short-Sleeve Shirt', '4799', '0', 'upload-image/f2.jpg', 'Men', 'Summer Shirts'),
(7, 'Mens Navy Blue Striped Slimfit Sweatshirt', '6500', '50', 'upload-image/polo3.jpg', 'Men', 'Sweatshirts'),
(8, 'Datejust 36mm Blue Dial Fluted Bazel Jubilee', '12499', '0', 'upload-image/watch1.jpg', 'Accessories', 'Watches'),
(9, 'Mens Striped Yellow Slimfit Sweatshirt', '6499', '0', 'upload-image/polo1.jpg', 'Men', 'Sweatshirts'),
(10, 'Mens Dark Blue Striped Slimfit Sweatshirt', '6499', '0', 'upload-image/polo2.jpg', 'Men', 'Sweatshirts'),
(11, 'Italian Leather Belt With Logo Buckle', '2399', '0', 'upload-image/belt3.jpg', 'Accessories', 'Belts'),
(12, 'Peach Glamour Formal Women Dress', '8999', '0', 'upload-image/w1.jpg', 'Women', 'Dresses'),
(13, 'Stylish Grey Embroidered Dress', '8999', '0', 'upload-image/w2.jpg', 'Women', 'Dresses'),
(14, 'Mustard Shalwar Kameez Embroidered Women Dress', '8499', '0', 'upload-image/w8.jpg', 'Women', 'Dresses'),
(15, 'Mens Black And White Slimfit Sweatshirt', '5999', '0', 'upload-image/polo6.jpg', 'Men', 'Sweatshirts'),
(16, 'Mens Floral Printed Short-Sleeve Shirt', '4799', '0', 'upload-image/f3.jpg', 'Men', 'Summer Shirts'),
(17, 'Trendy Fashion Handbag For Women', '2599', '0', 'upload-image/hb6.jpg', 'Accessories', 'Handbags'),
(18, 'Fossil Mens Brown Leather Belt', '1499', '0', 'upload-image/belt1.jpg', 'Accessories', 'Belts'),
(19, 'Mens Striped Slimfit Sweatshirt', '6499', '0', 'upload-image/polo4.jpg', 'Men', 'Sweatshirts'),
(20, 'FB-01 Chronograph Tan Eco Leather Watch', '7999', '0', 'upload-image/watch2.jpg', 'Accessories', 'Watches'),
(21, 'Unique Black Day & Date Chain Watch for Men XDD-7068', '9999', '0', 'upload-image/watch4.jpg', 'Accessories', 'Watches'),
(22, 'Mens Striped Peacock Blue Slimfit Sweatshirt', '5999', '0', 'upload-image/polo8.jpg', 'Men', 'Sweatshirts'),
(23, 'Grey Embroidered Stitched Bridal Dress', '9499', '0', 'upload-image/w6.jpg', 'Women', 'Dresses'),
(24, 'Black Descent Handbag For Women', '2499', '0', 'upload-image/hb4.jpg', 'Accessories', 'Handbags'),
(25, 'Mens Maroon Striped Slimfit Sweatshirt', '5999', '0', 'upload-image/polo7.jpg', 'Men', 'Sweatshirts'),
(26, 'Grey Embroidered Khaddar Women Dress', '8499', '0', 'upload-image/w9.jpg', 'Women', 'Dresses'),
(27, 'Zahra Embroidered Collection Women Dress', '8999', '0', 'upload-image/w4.jpg', 'Women', 'Dresses'),
(28, 'Black CATHY Casual Handbag For Women', '2599', '0', 'upload-image/hb3.jpg', 'Accessories', 'Handbags'),
(29, 'Black Formal Wear Mens Leather Belt', '2199', '0', 'upload-image/belt4.jpg', 'Accessories', 'Belts'),
(30, 'Stitch 3 Piece Bridal Women Dress', '8999', '0', 'upload-image/w10.jpg', 'Women', 'Dresses'),
(31, 'Mens Printed White Summer Short-Sleeve Shirt', '4799', '0', 'upload-image/f4.jpg', 'Men', 'Summer Shirts'),
(32, 'Edenrobe Embroidered Women Dress', '8999', '0', 'upload-image/w5.jpg', 'Women', 'Dresses'),
(33, 'Brown Vintage Mens Belt', '2199', '0', 'upload-image/belt2.jpg', 'Accessories', 'Belts'),
(34, 'Mens Striped White And Blue Slimfit Sweatshirt', '5999', '0', 'upload-image/polo5.jpg', 'Men', 'Sweatshirts'),
(37, 'Simple White Fancy Women Dress', '8499', '0', 'upload-image/w3.jpg', 'Women', 'Dresses'),
(39, 'White Leather Handbag For Women', '2599', '0', 'upload-image/hb1.jpg', 'Accessories', 'Handbags');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `type`, `name`, `email`, `feedback`) VALUES
(1, 'comments', 'basim', '', 'random message');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postal` varchar(100) NOT NULL,
  `pro_image` varchar(255) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_price` text NOT NULL,
  `pro_size` varchar(20) NOT NULL,
  `pro_quantity` int(5) NOT NULL,
  `pro_subtotal` text NOT NULL,
  `pro_gtotal` text NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `name`, `email`, `address`, `city`, `postal`, `pro_image`, `pro_name`, `pro_price`, `pro_size`, `pro_quantity`, `pro_subtotal`, `pro_gtotal`, `status`) VALUES
(68, '6324e4880b1ef', 'Saad ur rehman', 'saad@gmail.com', 'Al Asif, near sumaira chock', 'Karachi', '76453', 'admin/upload-image/polo2.jpg', 'Mens Dark Blue Striped Slimfit Sweatshirt', '6,499', 'Medium', 1, '6,499', '16,498', 'Pending'),
(69, '6324e4880b1ef', 'Saad ur rehman', 'saad@gmail.com', 'Al Asif, near sumaira chock', 'Karachi', '76453', 'admin/upload-image/watch4.jpg', 'Unique Black Day & Date Chain Watch for Men XDD-7068', '9,999', 'Medium', 1, '9,999', '16,498', 'Pending'),
(72, '63482223e413d', 'Muhammad Basim Qureshi', 'basim@gmail.com', 'dastagir Ayub Manzil', 'Karachi', '75662', 'admin/upload-image/w3.jpg', 'Simple White Fancy Women Dress', '8,499', 'Medium', 3, '25,497', '25,497', 'Pending'),
(73, '634823ad7e9d7', 'Muhammad Basim Qureshi', 'basim@gmail.com', 'Dastagir Ayub Manzil', 'Karachi', '462232', 'admin/upload-image/hb5.jpg', 'Red Fancy Handbag For Women', '2,599', 'Medium', 1, '2,599', '2,599', 'Pending'),
(74, '6348580a23f53', 'Saad ur Rehman', 'saad@gmail.com', 'Sumaira Chowk', 'Karachi', '428461', 'admin/upload-image/f3.jpg', 'Mens Floral Printed Short-Sleeve Shirt', '4,799', 'Medium', 1, '4,799', '24,797', 'Pending'),
(75, '6348580a23f53', 'Saad ur Rehman', 'saad@gmail.com', 'Sumaira Chowk', 'Karachi', '428461', 'admin/upload-image/watch4.jpg', 'Unique Black Day & Date Chain Watch for Men XDD-7068', '9,999', 'Medium', 2, '19,998', '24,797', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `confirm`) VALUES
(164, 'basim', 'basim@gmail.com', '123', '789'),
(166, 'Ali', 'ali@gmail.com', '789', '789'),
(167, 'saad', 'saad@gmail.com', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
