-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 08, 2022 at 10:17 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `products_list`
--

DROP TABLE IF EXISTS `products_list`;
CREATE TABLE IF NOT EXISTS `products_list` (
  `products_list_id` int NOT NULL AUTO_INCREMENT,
  `products_list_productName` char(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `products_list_productCode` char(15) DEFAULT NULL,
  `products_list_productPrice` double DEFAULT NULL,
  `products_list_productColor` char(20) DEFAULT NULL,
  PRIMARY KEY (`products_list_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `products_list`
--

INSERT INTO `products_list` (`products_list_id`, `products_list_productName`, `products_list_productCode`, `products_list_productPrice`, `products_list_productColor`) VALUES
(1, '1-iphone-10', 'i10', 70000, 'gray'),
(2, '1-iphone-9', 'i9', 60000, 'red'),
(3, '1-iphone-7', 'i7', 50000, 'yellow'),
(4, '1-iphone-6', 'i5', 40000, 'gray');

-- --------------------------------------------------------

--
-- Table structure for table `products_sales`
--

DROP TABLE IF EXISTS `products_sales`;
CREATE TABLE IF NOT EXISTS `products_sales` (
  `products_sales_id` int NOT NULL AUTO_INCREMENT,
  `products_listSales_id` int DEFAULT NULL,
  `products_sales_detail_id` int DEFAULT NULL,
  `products_sales_vat` double DEFAULT NULL,
  `products_sales_pWithVat` double DEFAULT NULL,
  `products_sales_discount` double DEFAULT NULL,
  `products_sales_finalPrice` double DEFAULT NULL,
  `products_sales_quantity` int DEFAULT NULL,
  `products_sales_subTotal` double DEFAULT NULL,
  PRIMARY KEY (`products_sales_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `products_sales`
--

INSERT INTO `products_sales` (`products_sales_id`, `products_listSales_id`, `products_sales_detail_id`, `products_sales_vat`, `products_sales_pWithVat`, `products_sales_discount`, `products_sales_finalPrice`, `products_sales_quantity`, `products_sales_subTotal`) VALUES
(1, 1, 1, 5, 73500, 5, 69825, 2, 139650),
(2, 2, 2, 5, 63000, 5, 59850, 3, 179550),
(3, 2, 2, 4, 52000, 5, 49400, 5, 247000),
(4, 2, 2, 3, 41200, 5, 39140, 3, 117420);

-- --------------------------------------------------------

--
-- Table structure for table `products_sales_detail`
--

DROP TABLE IF EXISTS `products_sales_detail`;
CREATE TABLE IF NOT EXISTS `products_sales_detail` (
  `products_sales_detail_id` int NOT NULL AUTO_INCREMENT,
  `products_sales_detail_salesPerson` char(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `products_sales_detail_loginUser` char(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `products_sales_detail_sellingDate` date DEFAULT NULL,
  `products_sales_detail_deliveryDate` date DEFAULT NULL,
  `products_sales_detail_mobile` char(15) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `products_sales_detail_customerName` char(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `products_sales_detail_customerAddress` char(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `products_sales_detail_discount` double DEFAULT NULL,
  `products_sales_detail_totalPrice` double DEFAULT NULL,
  `products_sales_detail_deliveryCharge` int DEFAULT NULL,
  `products_sales_detail_finalPrice` double DEFAULT NULL,
  PRIMARY KEY (`products_sales_detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `products_sales_detail`
--

INSERT INTO `products_sales_detail` (`products_sales_detail_id`, `products_sales_detail_salesPerson`, `products_sales_detail_loginUser`, `products_sales_detail_sellingDate`, `products_sales_detail_deliveryDate`, `products_sales_detail_mobile`, `products_sales_detail_customerName`, `products_sales_detail_customerAddress`, `products_sales_detail_discount`, `products_sales_detail_totalPrice`, `products_sales_detail_deliveryCharge`, `products_sales_detail_finalPrice`) VALUES
(1, 'robi', 'ICT', '2022-01-06', '2022-01-06', '019878788', 'The roy', 'Mirpur', 5, 139650, 100, 139650),
(2, 'gramin', 'ICT', '2022-01-06', '2022-01-06', '019878787', 'The chobi', 'Mirpur', 5, 543970, 100, 543970);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
