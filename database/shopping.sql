-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2021 at 11:01 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `itemID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartID`, `userID`, `itemID`) VALUES
(6, 1, 17);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'sneakers'),
(2, 'bags'),
(3, 'dress'),
(4, 'jewelry');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `shippingName` int(11) NOT NULL,
  `orderDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `detailID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `itemID` int(11) NOT NULL,
  `price` float(10,2) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `itemID` int(11) NOT NULL,
  `brand` varchar(10) NOT NULL,
  `name` varchar(500) NOT NULL,
  `price` float(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `itemDescription` varchar(500) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `itemUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`itemID`, `brand`, `name`, `price`, `image`, `itemDescription`, `categoryID`, `itemUpdate`) VALUES
(1, 'DIOR', 'Addict French', 1150.00, './assets/sneakers/1.jpg', 'BLUE TOILE DE JOUY TECHNICAL ', 1, '2021-07-12 16:42:35'),
(2, 'DIOR', 'B22', 1300.00, './assets/sneakers/2.jpg', 'BLACK TECHNICAL MESH & CALFSKIN', 1, '2021-07-12 16:44:37'),
(3, 'DIOR', 'B23 Dior & Kenny', 1400.00, './assets/sneakers/3.jpg', 'HIGH-TOP OBLIQUE CANVAS \r\nMULTICOLOR MOTIF', 1, '2021-07-15 13:20:59'),
(4, 'DIOR', 'B23 Dior & Kenny', 8300.00, './assets/sneakers/4.jpg', 'HIGH-TOP MULTICOLOR MOTIF \r\nRESIN PEARL EMBROIDERY', 1, '2021-07-15 13:20:59'),
(5, 'DIOR', 'B23 High-Top Reflective', 1200.00, './assets/sneakers/5.jpg', 'GRAY DIOR OBLIQUE CANVAS', 1, '2021-07-15 13:26:06'),
(6, 'DIOR', 'B27 Mid-Top', 1250.00, './assets/sneakers/6.jpg', 'WHITE & LIGHT\r\nBLUE SMOOTH CALFSKIN ', 1, '2021-07-15 13:26:06'),
(7, 'DIOR', 'B27 Mid-Top', 1250.00, './assets/sneakers/7.jpg', 'WHITE & NEON PINK\r\nSMOOTH CALFSKIN', 1, '2021-07-15 13:29:45'),
(8, 'DIOR', 'D-Connect', 1150.00, './assets/sneakers/8.jpg', 'INDIGO BLUE \r\nDIOR PALMS\r\nPRINTED TECHNICAL', 1, '2021-07-15 13:29:45'),
(9, 'BVLGARI', 'B.Zero 1 Necklace', 10050.00, './assets/jewelry/bvlgari/1.png', 'GOLD ', 4, '2021-07-15 13:33:42'),
(10, 'BVLGARI', 'Diva\'s Dream Bracelet', 12450.00, './assets/jewelry/bvlgari/2.png', 'GOLD', 4, '2021-07-15 13:33:43'),
(11, 'BVLGARI', 'Diva\'s Dream Earrings', 33880.00, './assets/jewelry/bvlgari/3.png', 'GOLD', 4, '2021-07-15 17:27:55'),
(12, 'BVLGARI', 'Diva\'s Dream Necklace', 21200.00, './assets/jewelry/bvlgari/4.png', 'GOLD', 4, '2021-07-15 17:27:55'),
(13, 'TIFFANY&CO', 'Diamond Vine Ring', 3900.00, './assets/jewelry/tiffany&co/1.jpg', 'HIGH LEVEL', 4, '2021-07-15 17:30:37'),
(14, 'TIFFANY&CO', 'Paloma', 775.00, './assets/jewelry/tiffany&co/2.jpg', 'PICASSO OLIVE LEAF', 4, '2021-07-15 17:30:37'),
(15, 'TIFFANY&CO', 'Tripple Drop Earrings', 3400.00, './assets/jewelry/tiffany&co/3.jpg', 'ROSE GOLD', 4, '2021-07-15 17:35:12'),
(16, 'TIFFANY&CO', 'Schlumberge Stone Ring ', 10500.00, './assets/jewelry/tiffany&co/4.jpg', 'STONE', 4, '2021-07-15 17:35:12'),
(17, 'DIOR', '30 Montaigne Bag', 3800.00, './assets/bags/1.jpg', 'BLUE', 2, '2021-07-15 17:39:53'),
(18, 'DIOR', 'Dior Book Tote', 3250.00, './assets/bags/2.jpg', 'BLUE', 2, '2021-07-15 17:39:53'),
(19, 'DIOR', 'Dior Wicket Bucket', 5300.00, './assets/bags/3.jpg', 'BLUE', 2, '2021-07-15 17:42:22'),
(20, 'DIOR', 'Lady Dior MyABC ', 4900.00, './assets/bags/4.jpg', 'RASPBERRY', 2, '2021-07-15 17:42:22'),
(21, 'DIOR', 'Medium Lady Dior', 5200.00, './assets/bags/5.jpg', 'GRAY', 2, '2021-07-15 17:45:16'),
(22, 'DIOR', 'Medium Lady D-lite', 4900.00, './assets/bags/6.jpg', 'GRAY', 2, '2021-07-15 17:45:16'),
(23, 'DIOR', 'Mini Lady Dior', 4300.00, './assets/bags/7.jpg', 'BLACK', 2, '2021-07-15 17:46:55'),
(24, 'DIOR', 'Saddle Bag', 4500.00, './assets/bags/8.jpg', 'BEIGE', 2, '2021-07-15 17:46:55'),
(25, 'DIOR', 'Dioriviera \'Los Angeles\'', 1450.00, './assets/dress/1.webp', 'POLO SHIRT DRESS WHITE & NAVY BLUE', 3, '2021-07-15 17:50:16'),
(26, 'DIOR', 'Dioriviera Mid-Length', 5700.00, './assets/dress/2.webp', 'DRESS NAVY BLUE', 3, '2021-07-15 17:50:16'),
(27, 'DIOR', 'Long Dress', 4700.00, './assets/dress/3.webp', 'BLUE & WHITE', 3, '2021-07-15 17:53:51'),
(28, 'DIOR', 'Mid-Length Pleated ', 3200.00, './assets/dress/4.webp', 'SKIRT BLUE\r\nCOTTON DENIM', 3, '2021-07-15 17:53:51'),
(29, 'DIOR', 'Mid-Length', 3100.00, './assets/dress/5.webp', 'SKIRT NAVY BLUE', 3, '2021-07-15 17:55:21'),
(30, 'DIOR', 'Short Dress', 2800.00, './assets/dress/6.webp', 'NAVY BLUE', 3, '2021-07-15 17:55:21'),
(31, 'DIOR', 'Short Hooded ', 2000.00, './assets/dress/7.webp', 'DRESS NAVY BLUE', 3, '2021-07-15 17:56:37'),
(32, 'DIOR', 'Short Hooded', 4000.00, './assets/dress/8.webp', 'DRESS RASPBERRY', 3, '2021-07-15 17:56:37');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `register` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `firstName`, `lastName`, `email`, `phone`, `address`, `register`) VALUES
(1, 'Ngan', 'Dinh', 'alexisren1610@gmail.com', '0849248868', 'VIET NAM', '2021-07-12 16:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cartID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `itemID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `foreign key` (`itemID`),
  ADD KEY `userid` (`userID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `user_pk` (`userID`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`detailID`),
  ADD KEY `order_pk` (`orderID`),
  ADD KEY `item_pk` (`itemID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`itemID`),
  ADD KEY `category_pk` (`categoryID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD KEY `wish_cart` (`cartID`),
  ADD KEY `wish_user` (`userID`),
  ADD KEY `wish_item` (`itemID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `detailID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `itemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`itemID`) REFERENCES `product` (`itemID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userid` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `user_pk` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `item_pk` FOREIGN KEY (`itemID`) REFERENCES `product` (`itemID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_pk` FOREIGN KEY (`orderID`) REFERENCES `order` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `category_pk` FOREIGN KEY (`categoryID`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wish_cart` FOREIGN KEY (`cartID`) REFERENCES `cart` (`cartID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wish_item` FOREIGN KEY (`itemID`) REFERENCES `product` (`itemID`) ON DELETE CASCADE,
  ADD CONSTRAINT `wish_user` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
