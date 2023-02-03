-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 05:51 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flaws`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appoint_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `appoint_date` text NOT NULL,
  `appoint_time` text NOT NULL,
  `service_id` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appoint_id`, `patient_id`, `appoint_date`, `appoint_time`, `service_id`, `email`, `status`) VALUES
(1, 1, '30-9-2022', '11:00 AM', 1, 'tricore012@gmail.com', 'DECLINE'),
(2, 2, '4-10-2022', '03:00 PM', 3, 'testing@gmail.com', 'COMPLETE'),
(3, 3, '12-10-2022', '10:00 AM', 2, 'juanworld012@gmail.com', 'PAID'),
(4, 4, '10-10-2022', '12:00 PM', 3, 'elthon.john.patac.caranza@gmail.com', 'UNPAID'),
(5, 4, '10-10-2022', '12:00 PM', 3, 'elthon.john.patac.caranza@gmail.com', 'UNPAID'),
(6, 5, '17-10-2022', '09:00 AM', 25, 'jobelyninsonespejo@gmail.com', 'PAID'),
(7, 5, '17-10-2022', '09:00 AM', 25, 'jobelyninsonespejo@gmail.com', 'PAID'),
(8, 5, '17-10-2022', '09:00 AM', 25, 'jobelyninsonespejo@gmail.com', 'PROCESSING'),
(9, 5, '17-10-2022', '', 0, 'jobelyninsonespejo@gmail.com', 'PROCESSING'),
(10, 5, '18-10-2022', '09:00 AM', 15, 'jobelyninsonespejo@gmail.com', 'PROCESSING'),
(11, 5, '17-10-2022', '', 0, 'jobelyninsonespejo@gmail.com', 'PROCESSING'),
(12, 5, '17-10-2022', '', 0, 'jobelyninsonespejo@gmail.com', 'PROCESSING'),
(13, 5, '18-10-2022', '09:00 AM', 14, 'jobelyninsonespejo@gmail.com', 'PROCESSING'),
(14, 6, '24-10-2022', '12:00 PM', 14, 'thomasbrixxcarlos@gmail.com', 'PAID'),
(15, 8, '20-10-2022', '09:00 AM', 15, 'jamesdlcrz190@gmail.com', 'PAID'),
(16, 9, '25-10-2022', '09:00 AM', 14, 'jobelyn.inson.e@bulsu.edu.ph', 'PAID'),
(17, 10, '21-10-2022', '10:00 AM', 20, 'luisgrcia190@gmail.com', 'PAID'),
(18, 11, '31-10-2022', '10:00 AM', 26, 'thomasnfriends30@gmail.com', 'PAID'),
(19, 5, '7-11-2022', '09:00 AM', 0, 'jobelyninsonespejo@gmail.com', 'PROCESSING'),
(20, 5, '7-11-2022', '10:00 AM', 10, 'jobelyninsonespejo@gmail.com', 'PROCESSING'),
(21, 5, '10-11-2022', '10:00 AM', 15, 'jobelyninsonespejo@gmail.com', 'PROCESSING'),
(22, 1, '30-11-2022', '10:00 AM', 10, 'tricore012@gmail.com', 'PROCESSING'),
(23, 1, '29-11-2022', '10:00 AM', 15, 'tricore012@gmail.com', 'PROCESSING'),
(24, 5, '29-11-2022', '09:00 AM', 15, 'jobelyninsonespejo@gmail.com', 'PAID'),
(25, 6, '30-11-2022', '11:00 AM', 14, 'thomasbrixxcarlos@gmail.com', 'PAID'),
(26, 2, '29-11-2022', '09:00 AM', 15, 'testing@gmail.com', 'PAID'),
(27, 2, '30-11-2022', '11:00 AM', 20, 'testing@gmail.com', 'PAID'),
(28, 2, '30-11-2022', '12:00 PM', 19, 'testing@gmail.com', 'PAID'),
(29, 5, '29-11-2022', '09:00 AM', 10, 'jobelyninsonespejo@gmail.com', 'PAID'),
(30, 5, '5-12-2022', '09:00 AM', 14, 'jobelyninsonespejo@gmail.com', 'PAID'),
(31, 13, '5-12-2022', '09:00 AM', 15, 'acads.juliannerosegatchalian@gmail.com', 'PAID'),
(32, 13, '5-12-2022', '', 0, 'acads.juliannerosegatchalian@gmail.com', 'UNPAID'),
(33, 14, '7-12-2022', '09:00 AM', 14, 'jobeinson12345@gmail.com', 'PAID'),
(34, 5, '7-12-2022', '09:00 AM', 14, 'jobelyninsonespejo@gmail.com', 'UNPAID'),
(35, 6, '8-12-2022', '09:00 AM', 10, 'thomasbrixxcarlos@gmail.com', 'UNPAID'),
(36, 6, '5-12-2022', '12:00 PM', 10, 'thomasbrixxcarlos@gmail.com', 'UNPAID'),
(37, 1, '8-12-2022', '12:00 PM', 14, 'tricore012@gmail.com', 'PROCESSING');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `region` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `code` int(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`user_id`, `fullname`, `email`, `password`, `contact`, `address`, `region`, `city`, `code`, `status`, `date_created`) VALUES
(1, 'Gerald Mico Facistol', 'tricore012@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '09166513189', '10 U206 TARRAVILLE SUBDIVISION', 'Metro Manila', 'Quezon City', 8147, 'VALID', '2022-09-27'),
(2, 'Gerald Mico Testing', 'testing@gmail.com', 'baff8366006e6317ee48cd8a29056c8e', '09166513189', 'tricore012@gmail.com', 'Bulacan', 'Malolos', 8409, 'VALID', '2022-09-29'),
(3, 'Testing lang', 'juanworld012@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '09166513189', '10 U206 TARRAVILLE SUBDIVISION', 'Bulacan', 'Paombong', 7002, 'VALID', '2022-10-07'),
(4, 'Elthon John P Caranza', 'elthon.john.patac.caranza@gmail.com', '2a860ffa089c33c1082269dd10fb9dcf', '09926931559', 'BLK 78 Lot 22 ST Louie deca homes marilao bulacan ', 'Bulacan', 'Marilao', 8894, 'VALID', '2022-10-07'),
(5, 'alex', 'jobelyninsonespejo@gmail.com', 'b75bd008d5fecb1f50cf026532e8ae67', '09936762399', '#618 HULO STREET', 'Bulacan', 'Meycauayan', 8768, 'VALID', '2022-10-12'),
(6, 'Thom', 'thomasbrixxcarlos@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '09324647186', 'Longos', 'Bulacan', 'Malolos', 7122, 'VALID', '2022-10-12'),
(7, 'James Dela Cruz', 'formypersonaluse@gmail.com', 'b75bd008d5fecb1f50cf026532e8ae67', '09936762399', '#618 Hulo Street', 'Bulacan', 'Meycauayan', 8864, 'INVALID', '2022-10-14'),
(8, 'James Dela Cruz', 'jamesdlcrz190@gmail.com', '9ba36afc4e560bf811caefc0c7fddddf', '09285620412', '#618 Hulo Street Brgy, IBA', 'Bulacan', 'Meycauayan', 9641, 'VALID', '2022-10-14'),
(9, 'Jobelyn E. Inson', 'jobelyn.inson.e@bulsu.edu.ph', 'c986ae7a793d7e8f20b4633702541ae1', '09936762399', 'Hulo Street Brgy, IBA', 'Bulacan', 'Meycauayan', 8230, 'VALID', '2022-10-14'),
(10, 'Luis Garcia', 'luisgrcia190@gmail.com', 'e6ba4060d7bc5a577715be0c5352a6f1', '09936762399', '#618 Hulo Street Barangay IBA', 'Bulacan', 'Meycauayan', 7388, 'VALID', '2022-10-14'),
(11, 'Brixx Carlos', 'thomasnfriends30@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '09324647186', 'Longos', 'Bulacan', 'Malolos', 9902, 'VALID', '2022-10-14'),
(12, 'Jobe', 'jobelyn.inson.e@bulsu.edu.ph', 'c986ae7a793d7e8f20b4633702541ae1', '09614695877', '#618 HULO STREET', 'Bulacan', 'Meycauayan', 7665, 'INVALID', '2022-11-07'),
(13, 'Julianne Rose Gatchalian', 'acads.juliannerosegatchalian@gmail.com', '8c6624a2297d4f8746511362c64483df', '09184409499', '406 San Jose', 'Bulacan', 'Calumpit', 9818, 'VALID', '2022-11-28'),
(14, 'Jobelyn Inson', 'jobeinson12345@gmail.com', 'c986ae7a793d7e8f20b4633702541ae1', '09184409499', '#618 Hulo St. Brgy. IBA', 'Bulacan', 'Meycauayan', 8875, 'VALID', '2022-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchaseid` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `total` double NOT NULL,
  `date_purchase` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchaseid`, `customer`, `total`, `date_purchase`) VALUES
(1, 'tricore012@gmail.com', 2500, '2022-09-27 04:36:56'),
(2, 'testing@gmail.com', 1250, '2022-09-29 19:21:31'),
(3, 'Mico', 410, '2022-09-29 19:25:58'),
(4, 'Mico again', 2275, '2022-09-29 19:26:32'),
(5, 'jobelyninsonespejo@gmail.com', 80, '2022-10-17 06:27:15'),
(6, 'thomasbrixxcarlos@gmail.com', 220, '2022-11-07 10:31:56'),
(7, 'i DONT KNOW', 2800, '2022-11-23 19:35:47'),
(8, 'thomasbrixxcarlos@gmail.com', 660, '2022-11-24 01:32:58'),
(9, 'thomasbrixxcarlos@gmail.com', 85, '2022-11-24 01:34:07'),
(10, 'thomasbrixxcarlos@gmail.com', 2040, '2022-11-24 01:34:35'),
(11, 'thomasbrixxcarlos@gmail.com', 220, '2022-11-24 01:34:46'),
(12, 'thomasbrixxcarlos@gmail.com', 1000, '2022-11-24 01:35:26'),
(13, 'thomasbrixxcarlos@gmail.com', 680, '2022-11-24 01:35:35'),
(14, 'acads.juliannerosegatchalian@gmail.com', 0, '2022-11-28 13:26:29'),
(15, 'acads.juliannerosegatchalian@gmail.com', 220, '2022-11-28 13:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(15) NOT NULL,
  `service_name` text NOT NULL,
  `service_type` text NOT NULL,
  `service_image` text NOT NULL,
  `service_price_range` text NOT NULL,
  `service_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_type`, `service_image`, `service_price_range`, `service_desc`) VALUES
(10, 'VENEERS', '1', '', '5000', 'Direct Composite 5K, Indirect Composite Porcelain 5K-30K'),
(14, 'ORAL PROPHYLAXIS ', '1', '', '800', 'Minimum Fee 800,\r\nHeavy 1.5K, \r\nFlouride Treatment 1.5K (testing)'),
(15, 'DENTAL EXTRACTIONS', '4', '', '800', 'Simple ext. 800,\r\nImpacted Minimum 10k\r\n'),
(19, 'PROSTHODONTICS', '4', '', '4000', 'Jacket crown 4K/unit, Non-precious metal 7K, Tilite 12K'),
(20, 'REMOVABLE ', '5', '', '5000', 'Acrylic Anterior 5K,\r\nAnterior & Posterior 7.5K,\r\nPosterior 7.5K'),
(21, 'COMPLETE DENTURE ', '5', '', '12000', 'Acrylic Complete Denture 12K,\r\nPorcelain Complete Denture 20K'),
(23, 'RADIOLOGY ', '5', '', '500', 'Periapical 500,\r\nPanoramic 1K,\r\nCephalometric 1.2K'),
(24, 'ORTHODONTICS BRACES ', '5', '', '50000', 'Conventional 50K,\r\nSelf-Ligating 65K,\r\nCeramics 85K'),
(25, 'RETAINERS', '5', '', '4000', 'Conventional 4K,\r\nRe-bonding per bracket 500,\r\nBracket replacement 500-1K'),
(26, 'WHITENING', '5', '', '12000', 'Conventional 12K,\r\nLight Activated 20K');

-- --------------------------------------------------------

--
-- Table structure for table `service_category`
--

CREATE TABLE `service_category` (
  `service_type` int(11) NOT NULL,
  `category_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_category`
--

INSERT INTO `service_category` (`service_type`, `category_name`) VALUES
(1, 'VANEER 1 '),
(2, 'VANEER 2 '),
(3, 'TESTING CATEGORY'),
(4, 'AEROSOL GENERATING PROCEDURES'),
(5, 'NON-AEROSOL GENERATING PROCEDURES'),
(6, 'AEROSOL GENERATING PROCEDURES'),
(7, 'NON-AEROSOL GENERATING PROCEDURES');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_archive`
--

CREATE TABLE `tbl_archive` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(250) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `item_quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category`) VALUES
(1, 'TOOTH_BRUSH'),
(2, 'DENTAL_CARE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `title`, `start`, `end`) VALUES
(1, 'PATIENT-tricore012@gmail.com', '2022-09-30 00:00:00', '2022-09-30 00:00:00'),
(2, 'PATIENT-testing@gmail.com', '2022-10-04 00:00:00', '2022-10-04 00:00:00'),
(3, 'PATIENT-juanworld012@gmail.com', '2022-10-12 00:00:00', '2022-10-12 00:00:00'),
(4, 'PATIENT-elthon.john.patac.caranza@gmail.com', '2022-10-10 00:00:00', '2022-10-10 00:00:00'),
(5, 'PATIENT-elthon.john.patac.caranza@gmail.com', '2022-10-10 00:00:00', '2022-10-10 00:00:00'),
(6, 'PATIENT-jobelyninsonespejo@gmail.com', '2022-10-17 00:00:00', '2022-10-17 00:00:00'),
(7, 'PATIENT-jobelyninsonespejo@gmail.com', '2022-10-17 00:00:00', '2022-10-17 00:00:00'),
(8, 'PATIENT-jobelyninsonespejo@gmail.com', '2022-10-17 00:00:00', '2022-10-17 00:00:00'),
(9, 'PATIENT-jobelyninsonespejo@gmail.com', '2022-10-17 00:00:00', '2022-10-17 00:00:00'),
(10, 'PATIENT-jobelyninsonespejo@gmail.com', '2022-10-18 00:00:00', '2022-10-18 00:00:00'),
(11, 'PATIENT-jobelyninsonespejo@gmail.com', '2022-10-17 00:00:00', '2022-10-17 00:00:00'),
(12, 'PATIENT-jobelyninsonespejo@gmail.com', '2022-10-17 00:00:00', '2022-10-17 00:00:00'),
(13, 'PATIENT-jobelyninsonespejo@gmail.com', '2022-10-18 00:00:00', '2022-10-18 00:00:00'),
(14, 'PATIENT-thomasbrixxcarlos@gmail.com', '2022-10-24 00:00:00', '2022-10-24 00:00:00'),
(15, 'PATIENT-jamesdlcrz190@gmail.com', '2022-10-20 00:00:00', '2022-10-20 00:00:00'),
(16, 'PATIENT-jobelyn.inson.e@bulsu.edu.ph', '2022-10-25 00:00:00', '2022-10-25 00:00:00'),
(17, 'PATIENT-luisgrcia190@gmail.com', '2022-10-21 00:00:00', '2022-10-21 00:00:00'),
(18, 'PATIENT-thomasnfriends30@gmail.com', '2022-10-31 00:00:00', '2022-10-31 00:00:00'),
(19, 'PATIENT-jobelyninsonespejo@gmail.com', '2022-11-07 00:00:00', '2022-11-07 00:00:00'),
(20, 'PATIENT-jobelyninsonespejo@gmail.com', '2022-11-07 00:00:00', '2022-11-07 00:00:00'),
(21, 'PATIENT-jobelyninsonespejo@gmail.com', '2022-11-10 00:00:00', '2022-11-10 00:00:00'),
(22, 'PATIENT-tricore012@gmail.com', '2022-11-30 00:00:00', '2022-11-30 00:00:00'),
(23, 'PATIENT-tricore012@gmail.com', '2022-11-29 00:00:00', '2022-11-29 00:00:00'),
(24, 'PATIENT-jobelyninsonespejo@gmail.com', '2022-11-29 00:00:00', '2022-11-29 00:00:00'),
(25, 'PATIENT-thomasbrixxcarlos@gmail.com', '2022-11-30 00:00:00', '2022-11-30 00:00:00'),
(26, 'PATIENT-testing@gmail.com', '2022-11-29 00:00:00', '2022-11-29 00:00:00'),
(27, 'PATIENT-testing@gmail.com', '2022-11-30 00:00:00', '2022-11-30 00:00:00'),
(28, 'PATIENT-testing@gmail.com', '2022-11-30 00:00:00', '2022-11-30 00:00:00'),
(29, 'PATIENT-jobelyninsonespejo@gmail.com', '2022-11-29 00:00:00', '2022-11-29 00:00:00'),
(30, 'PATIENT-jobelyninsonespejo@gmail.com', '2022-12-05 00:00:00', '2022-12-05 00:00:00'),
(31, 'PATIENT-acads.juliannerosegatchalian@gmail.com', '2022-12-05 00:00:00', '2022-12-05 00:00:00'),
(32, 'PATIENT-acads.juliannerosegatchalian@gmail.com', '2022-12-05 00:00:00', '2022-12-05 00:00:00'),
(33, 'PATIENT-jobeinson12345@gmail.com', '2022-12-07 00:00:00', '2022-12-07 00:00:00'),
(34, 'PATIENT-jobelyninsonespejo@gmail.com', '2022-12-07 00:00:00', '2022-12-07 00:00:00'),
(35, 'PATIENT-thomasbrixxcarlos@gmail.com', '2022-12-08 00:00:00', '2022-12-08 00:00:00'),
(36, 'PATIENT-thomasbrixxcarlos@gmail.com', '2022-12-05 00:00:00', '2022-12-05 00:00:00'),
(37, 'PATIENT-tricore012@gmail.com', '2022-12-08 00:00:00', '2022-12-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `name` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `customer_id`, `amount`, `name`, `payment_type`, `order_status`, `order_at`) VALUES
(1, 2, 1250, 'Gerald Mico Mico devcore', 'PICKUP', 'CANCEL', '2022-11-30 17:50:02'),
(2, 2, 3680, 'Gerald Mico Mico devcore', 'PICKUP', 'CANCEL', '2022-11-30 17:52:18'),
(3, 2, 4000, 'Gerald Mico Mico devcore', 'PICKUP', 'PENDING', '2022-11-30 19:12:00'),
(4, 2, 6000, 'Gerald Mico Mico devcore', 'PICKUP', 'PENDING', '2022-11-30 19:24:49'),
(5, 2, 2000, 'Gerald Mico Mico devcore', 'PICKUP', 'PENDING', '2022-11-30 19:25:48'),
(6, 2, 8000, 'Gerald Mico Mico devcore', 'PICKUP', 'PENDING', '2022-11-30 19:26:20'),
(7, 1, 1020, 'Gerald Mico Mico devcore', 'PICKUP', 'PENDING', '2022-12-01 19:09:35'),
(8, 1, 1360, 'Gerald Mico Mico devcore', 'PICKUP', 'PENDING', '2022-12-01 19:12:36'),
(9, 2, 330, 'Gerald Mico Mico devcore', 'PICKUP', 'PENDING', '2022-12-02 14:24:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_item`
--

CREATE TABLE `tbl_order_item` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `item_price` double NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_item`
--

INSERT INTO `tbl_order_item` (`id`, `order_id`, `product_id`, `item_price`, `quantity`) VALUES
(1, 1, 3, 230, 4),
(2, 1, 8, 110, 3),
(3, 2, 3, 230, 16),
(4, 3, 2, 1000, 4),
(5, 4, 2, 1000, 6),
(6, 5, 2, 1000, 2),
(7, 6, 2, 1000, 8),
(8, 7, 4, 340, 3),
(9, 8, 4, 340, 4),
(10, 9, 7, 110, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_response` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(250) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `item_quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `category`, `code`, `description`, `image`, `price`, `item_quantity`) VALUES
(4, 'ORAL B MOUTHWASH 500ml', 'DENTAL_CARE', 'GLOSS-6731', 'ORAL B MOUTHWASH 500ml', 'upload/1669825954.png', 340.00, 20),
(5, 'Oral B Kids Electricbrush', 'TOOTH_BRUSH', 'GLOSS-8802', 'Oral B Kids Electricbrush', 'upload/1669826109.png', 1020.00, 20),
(6, 'Oral B Kids Electricbrush', 'TOOTH_BRUSH', 'GLOSS-8312', 'Oral B Kids Electricbrush', 'upload/1669826135.png', 1020.00, 20),
(7, 'oral b kids toothpaste', 'DENTAL_CARE', 'GLOSS-9618', 'oral b kids toothpaste', 'upload/1669826166.png', 110.00, 20),
(8, 'oral b kids toothpaste', 'DENTAL_CARE', 'GLOSS-8614', 'oral b kids toothpaste', 'upload/1669826210.png', 110.00, 20),
(9, 'Listerine cool mint pocket mis', 'DENTAL_CARE', 'GLOSS-8498', 'Listerine cool mint pocket mis', 'upload/1669826289.png', 450.00, 20),
(10, 'Internal brush', 'TOOTH_BRUSH', 'GLOSS-8388', 'Internal brush', 'upload/1669826319.png', 130.00, 20),
(11, 'dentek wax for braces', 'DENTAL_CARE', 'GLOSS-9869', 'dentek wax for braces', 'upload/1669826353.png', 220.00, 20),
(13, 'COLGATE (TEST)', 'DENTAL_CARE', '', 'COLGATE', 'upload/1669825685.png', 85.00, 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`) VALUES
(2, 'admin', 'admin', 'admin'),
(3, 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appoint_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchaseid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `service_category`
--
ALTER TABLE `service_category`
  ADD PRIMARY KEY (`service_type`);

--
-- Indexes for table `tbl_archive`
--
ALTER TABLE `tbl_archive`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appoint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchaseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `service_category`
--
ALTER TABLE `service_category`
  MODIFY `service_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_archive`
--
ALTER TABLE `tbl_archive`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
