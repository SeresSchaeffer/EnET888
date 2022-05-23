-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 08:13 PM
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
(2, 'flxke', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '', '', 'fluke.danaipong@gmail.com', '', '', '', '', 'm'),
(3, 'new', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Chanasorn', 'Somthong', 'new@gmail.com', '3231232132312', '35/2 หอพัก The North (ห้อง 203) ซ.วงศ์สว่าง 11 ถ.วงศ์สว่าง แขวงวงศ์สว่าง เขตบางซื่อ กทม 10800', '05555555', '', 'm'),
(4, 'tar', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '', '', 'tar@gmail.com', '', '', '', '', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`Bank_ID`);

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
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
