-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 10:40 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enet888`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `Bank_ID` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`Bank_ID`, `Name`) VALUES
(1, 'ธนาคารกรุงเทพ'),
(2, 'ธนาคารกสิกรไทย'),
(3, 'ธนาคารกรุงไทย'),
(4, 'ธนาคารทหารไทยธนชาติ'),
(5, 'ธนาคารไทยพาณิชย์'),
(6, 'ธนาคารกรุงศรีอยุธยา'),
(7, 'ธนาคารออมสิน');

-- --------------------------------------------------------

--
-- Table structure for table `bank_account`
--

CREATE TABLE `bank_account` (
  `Account_Number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Bank_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bank_account`
--

INSERT INTO `bank_account` (`Account_Number`, `User_ID`, `Bank_ID`) VALUES
('1234567687896', 3, 4),
('12345623223', 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `checkout` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `User_ID`, `item_id`, `quantity`, `checkout`) VALUES
(17, 3, 1, 13, 1),
(18, 3, 1, 2, 1),
(19, 3, 1, 3, 1),
(20, 3, 1, 7, 1),
(21, 3, 1, 5, 1),
(22, 3, 0, 0, 1),
(23, 3, 1, 5, 1),
(24, 3, 1, 7, 1),
(25, 3, 1, 9, 1),
(26, 3, 1, 13, 1),
(27, 3, 1, 4, 1),
(28, 3, 1, 5, 1),
(30, 3, 6, 2, 1),
(31, 3, 3, 2, 1),
(32, 3, 4, 4, 2),
(35, 3, 4, 2, 0),
(37, 2, 3, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_price_old` int(11) NOT NULL,
  `instock` int(11) NOT NULL,
  `item_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_info` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `item_price`, `item_price_old`, `instock`, `item_image`, `item_info`) VALUES
(1, 'XS', 10, 100, 50, 'xsbox.jpg', 'เหลี่ยมทุกดอกแล้วบอกกล่องสุ่ม'),
(2, 'S', 50, 500, 50, 'sbox.jpg', 'เหลี่ยมทุกดอกแล้วบอกกล่องสุ่ม'),
(3, 'M', 1000, 2000, 50, 'mbox.jpg', 'เหลี่ยมทุกดอกแล้วบอกกล่องสุ่ม'),
(4, 'L', 2000, 3000, 50, 'lbox.jpg', 'เหลี่ยมทุกดอกแล้วบอกกล่องสุ่ม'),
(5, 'XL', 5000, 6000, 50, 'xlbox.jpg', 'เหลี่ยมทุกดอกแล้วบอกกล่องสุ่ม'),
(6, 'XXL', 9999, 15000, 50, 'xxlbox.jpg', 'เหลี่ยมทุกดอกแล้วบอกกล่องสุ่ม');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `item_id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`item_id`, `photo`) VALUES
(1, 'xsbox.jpg'),
(1, 'best99earphone.jpg'),
(1, '99-2.jpg'),
(1, '99-3.jpg'),
(2, 'sbox.jpg'),
(2, 'best199charger.jpg'),
(2, '199-2.jpg'),
(2, '199-3.jpg'),
(3, 'mbox.jpg'),
(3, 'best1999airpod2.jpg'),
(3, '1999-2.jpg'),
(3, '1999-3.jpg'),
(4, 'lbox.jpg'),
(4, 'best2999airpro.jpg'),
(4, '2999-2.jpg'),
(4, '2999-3.jpg'),
(5, 'xlbox.jpg'),
(5, 'best5999apple7.jpg'),
(5, '5999-2.jpg'),
(5, '5999-3.jpg'),
(6, 'xxlbox.jpg'),
(6, 'best9999iphone13.jpg'),
(6, '9999-2.jpg'),
(6, '9999-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ID_card` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `username`, `password`, `name`, `surname`, `email`, `ID_card`, `address`, `tel`, `Icon`, `role`) VALUES
(1, 'admin', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'admin', 'Somthong', 'admin@gmail.com', '1234567891234', 'ไม่บอกหรอก', '0966696247', '', 'a'),
(2, 'flxke', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Danaipong', 'Somthong', 'fluke.danaipong@gmail.com', 'fdfdsfdsfsd', '1634  JUSTIN HENDERSON NV 89011-4376 USA', '3270493274', '', 'm'),
(3, 'new', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Chanasorn', 'Somthong', 'new@gmail.com', '3231232132312', '35/2 หอพัก The North (ห้อง 203) ซ.วงศ์สว่าง 11 ถ.วงศ์สว่าง แขวงวงศ์สว่าง เขตบางซื่อ กทม 10800', '05555555', '', 'm'),
(4, 'tar', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Poramee', 'Somthong', 'tar@gmail.com', '', '1400  LODGEPOLE HENDERSON NV 89014-3017 USA', '09999999', '', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`Bank_ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `Bank_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
