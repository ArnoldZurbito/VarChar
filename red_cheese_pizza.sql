-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2016 at 04:37 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `varchar`
--

-- --------------------------------------------------------

--
-- Table structure for table `crew`
--

CREATE TABLE IF NOT EXISTS `crew` (
  `crew_id` int(50) NOT NULL AUTO_INCREMENT,
  `Crew_Lname` varchar(500) NOT NULL,
  `Crew_Mname` varchar(500) NOT NULL,
  `Crew_Fname` varchar(500) NOT NULL,
  `User_ID` int(50) NOT NULL,
  PRIMARY KEY (`crew_id`),
  KEY `User_ID` (`User_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `crew`
--

INSERT INTO `crew` (`crew_id`, `Crew_Lname`, `Crew_Mname`, `Crew_Fname`, `User_ID`) VALUES
(1, 'Barbudo', 'L', 'Barbs', 1002),
(2, 'Zurbito', 'P', 'Arnold', 1003);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `Cus_ID` int(70) NOT NULL AUTO_INCREMENT,
  `Cus_Lname` varchar(500) NOT NULL,
  `Street` varchar(50) NOT NULL,
  `Municipality` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `Cus_Mname` varchar(600) NOT NULL,
  `Cus_Fname` varchar(600) NOT NULL,
  `User_ID` int(50) NOT NULL,
  PRIMARY KEY (`Cus_ID`),
  KEY `User_ID` (`User_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cus_ID`, `Cus_Lname`, `Street`, `Municipality`, `City`, `Contact`, `Cus_Mname`, `Cus_Fname`, `User_ID`) VALUES
(1, 'Sementela', 'Idontknow', 'Albay', 'Legazpi', '09090909090', 'P', 'MaryRose', 1004),
(2, 'Lita', 'Cabangan', 'Albay', 'Legazpi', '0909080808', 'M', 'Nikki', 1005);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `manager_id` int(50) NOT NULL AUTO_INCREMENT,
  `Manager_Fname` varchar(500) NOT NULL,
  `Manager_Lname` varchar(500) NOT NULL,
  `Manager_Mname` varchar(500) NOT NULL,
  `User_ID` int(50) NOT NULL,
  PRIMARY KEY (`manager_id`),
  UNIQUE KEY `User_ID` (`User_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_id`, `Manager_Fname`, `Manager_Lname`, `Manager_Mname`, `User_ID`) VALUES
(1, 'Arnold', 'Zurbito', 'P', 1001);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(50) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_image` varchar(800) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_description` varchar(5000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Quantity` int(50) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `product_description`, `Quantity`) VALUES
(1, 'Corsair md54', 'Combat.jpg', 'Original tohhh!!!!!!!!!SADddddttttrtyrtuiutyuiiiiiiiiiiiiiiiiighggg', 214),
(2, 'Corsair Sha1', 'Metallic.jpg', 'Local tohh!!!bro', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE IF NOT EXISTS `user_account` (
  `User_ID` int(50) NOT NULL AUTO_INCREMENT,
  `Email` varchar(900) NOT NULL,
  `Password` varchar(900) NOT NULL,
  `Account_Type` varchar(500) NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10003 ;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`User_ID`, `Email`, `Password`, `Account_Type`) VALUES
(1001, 'zurbito_arnold@gmail.com', 'passwordko', 'MANAGER'),
(1002, 'barbz@gmail.com', 'passwordmo', 'CREW'),
(1003, 'arnold_zurbito@yahoo.com', 'passwordmo', 'CREW'),
(1004, 'chensementela@gmail.com', 'passwordnyo', 'CUSTOMER'),
(1005, 'nikkilita@gmail.com', 'passwordnyo', 'CUSTOMER'),
(1007, 'ae@yahoo.com', 'f7ce80c45d242369e815ea77f12d786f23f18b66', 'CUSTOMER'),
(1008, 'ad@gmail.com', 'aaa3be95a9682e90c21cbbc4861a787fa80e5b26', 'CUSTOMER'),
(1009, 'gh@yahoo.com', '346825e1e0d530131bb18d56d97f8ee4983be5f4', 'CUSTOMER'),
(1010, 'dr@yahoo.com', 'fba9f1c9ae2a8afe7815c9cdd492512622a66302', 'CUSTOMER'),
(1011, 'awe@yahoo.com', '864ba8b3f5aa1acae1bf829077f932acef385d74', 'CUSTOMER'),
(1012, 'ss@yah.com', '72ff39ff2e1eea7f1d2e07a523b8c8d8c3b8a4e6', 'CUSTOMER'),
(1013, 'ako@yahoo.com', 'bb2bdab1fc7edc317d7aff1aebbb4c571ef4aa68', 'CUSTOMER'),
(10002, 'se@yahoo.coe', '08e02d827446f7fe647672cbc95dab2c71f3d0ee', 'CUSTOMER');

-- --------------------------------------------------------

--
-- Table structure for table `_order`
--

CREATE TABLE IF NOT EXISTS `_order` (
  `order_id` int(50) NOT NULL AUTO_INCREMENT,
  `address_deliver` varchar(500) NOT NULL,
  `confirmation` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL,
  `time_order` varchar(600) NOT NULL,
  `time_deliver` varchar(500) NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `payment_method` varchar(500) NOT NULL,
  `payable` int(50) NOT NULL,
  `Cus_ID` int(11) NOT NULL,
  `User_ID` int(50) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `Cus_ID` (`Cus_ID`),
  KEY `User_ID` (`User_ID`),
  KEY `User_ID_3` (`User_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `_order`
--

INSERT INTO `_order` (`order_id`, `address_deliver`, `confirmation`, `status`, `time_order`, `time_deliver`, `order_quantity`, `payment_method`, `payable`, `Cus_ID`, `User_ID`) VALUES
(1, 'Arimbay,Legazpi City', 'TKE-KMS', 'Pending', '01-30-2016 09:10:20', '', 10, 'Smart Padala', 8900, 1, 1004),
(2, 'Rawis, Legazpi City', 'HJK-LKJ', 'Delivered', '01-03-2016 10:20:20', '01-03-2016 11:03:10', 4, 'GCash', 3980, 1, 1004),
(3, 'Sto. Dominggo, Legazpi City', 'TKE-KMS', 'Delivered', '01-06-2016 02:10:20', '01-06-2016 03-30-19', 2, 'Smart Padala', 4560, 1, 1004),
(4, 'Rizal St. F Aquende Drive Legazpi City', 'HJK-LKJ', 'Delivered', '01-29-2016 01:34:39', '01-29-2016 02:10:28', 3, 'GCash', 2345, 2, 1005);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `crew`
--
ALTER TABLE `crew`
  ADD CONSTRAINT `crew_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user_account` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user_account` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user_account` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `_order`
--
ALTER TABLE `_order`
  ADD CONSTRAINT `_order_ibfk_1` FOREIGN KEY (`Cus_ID`) REFERENCES `customer` (`Cus_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `_order_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `user_account` (`User_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
