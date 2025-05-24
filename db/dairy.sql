-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2019 at 03:48 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dairy`
--

-- --------------------------------------------------------

--
-- Table structure for table `collector_center`
--

CREATE TABLE `collector_center` (
  `id` int(11) NOT NULL,
  `collector_name` varchar(40) NOT NULL,
  `location` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collector_center`
--

INSERT INTO `collector_center` (`id`, `collector_name`, `location`) VALUES
(1, 'MUKAMIRA COLLECTION', 'NYABIHU'),
(2, 'KANAMA COLLECTION', 'RUBAVU'),
(3, 'BYANGABO COLLECTION', 'MUSANZE '),
(4, 'BIGOGWE COLLECTION', 'NYABIHU');

-- --------------------------------------------------------

--
-- Table structure for table `distribitor_center`
--

CREATE TABLE `distribitor_center` (
  `id` int(11) NOT NULL,
  `distributor_name` varchar(40) NOT NULL,
  `work_name` varchar(50) NOT NULL,
  `district` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distribitor_center`
--

INSERT INTO `distribitor_center` (`id`, `distributor_name`, `work_name`, `district`) VALUES
(1, 'NAEB', 'NAEB', 'KICUKIRO'),
(2, 'MUSANZE DISTRIBUTOR', 'NDAYI CLAUDE', 'MUSANZE'),
(4, 'GIKONDO DISTRIBUTOR', 'NDAYI CLAUDE', 'KIGALI'),
(5, 'GISENYI DISTRIBUTOR', 'NDAYI CLAUDE', 'RUBAVU'),
(6, 'MUKAMIRA DISTRIBUTOR', 'MUKAMIRA', 'NYABIHU');

-- --------------------------------------------------------

--
-- Table structure for table `input_milk`
--

CREATE TABLE `input_milk` (
  `user_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `supplies_id` int(11) NOT NULL,
  `litre` float NOT NULL,
  `litre_amount` float NOT NULL,
  `amount_sold` float NOT NULL,
  `paid` float NOT NULL,
  `unpaid` float NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT '0000-00-00 00:00:00.000000' ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input_milk`
--

INSERT INTO `input_milk` (`user_id`, `id`, `supplies_id`, `litre`, `litre_amount`, `amount_sold`, `paid`, `unpaid`, `time`) VALUES
(11, 1, 1, 4013, 300, 1203900, 903900, 300000, '2019-09-07 14:41:55.596737'),
(11, 2, 2, 3345, 300, 1003500, 973500, 30000, '2019-08-14 08:25:50.002998'),
(11, 3, 3, 1421, 300, 426300, 96300, 330000, '2019-08-14 08:34:12.076411'),
(11, 4, 4, 11733, 300, 3519900, 519900, 3000000, '2019-09-15 13:34:19.539511'),
(11, 5, 5, 1311, 300, 393300, 333300, 60000, '2019-08-14 08:26:01.662197'),
(11, 6, 6, 1136, 300, 340800, 340800, 0, '2019-08-12 11:17:31.490132'),
(21, 7, 7, 30, 300, 9000, 6000, 3000, '2019-08-14 06:25:03.237421'),
(21, 8, 8, 10, 300, 3000, 0, 3000, '2019-08-14 06:24:16.189317');

-- --------------------------------------------------------

--
-- Table structure for table `input_milk_daily_save`
--

CREATE TABLE `input_milk_daily_save` (
  `id` int(11) NOT NULL,
  `litre` varchar(8) NOT NULL,
  `litre_ather_case` varchar(10) NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `cheese_per` int(8) NOT NULL DEFAULT '0',
  `yoghort_per` int(8) NOT NULL DEFAULT '0',
  `ikivug_per` int(8) NOT NULL DEFAULT '0',
  `inshushu_per` int(3) NOT NULL DEFAULT '0',
  `cheese_enable` int(3) NOT NULL DEFAULT '1',
  `yoghort_enable` int(1) NOT NULL DEFAULT '1',
  `inshushu_enable` int(1) NOT NULL DEFAULT '1',
  `ikivug_enable` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input_milk_daily_save`
--

INSERT INTO `input_milk_daily_save` (`id`, `litre`, `litre_ather_case`, `date`, `cheese_per`, `yoghort_per`, `ikivug_per`, `inshushu_per`, `cheese_enable`, `yoghort_enable`, `inshushu_enable`, `ikivug_enable`) VALUES
(1, '137', '', '2019-07-16', 0, 0, 0, 0, 0, 0, 1, 1),
(2, '787', '', '2019-07-18', 212, 142, 0, 0, 0, 0, 1, 1),
(3, '200', '', '2019-07-19', 54, 36, 0, 0, 0, 0, 1, 1),
(4, '1000', '', '2019-07-21', 0, 40, 0, 0, 0, 0, 1, 1),
(5, '607', '', '2019-07-22', 1, 9, 12, 14, 0, 0, 1, 1),
(6, '450', '', '2019-07-26', 122, 81, 194, 20, 0, 0, 1, 1),
(7, '1016', '', '2019-07-30', 274, 183, 437, 0, 0, 0, 1, 1),
(8, '1000', '', '2019-07-31', 0, 0, 40, 5, 0, 0, 1, 1),
(9, '300', '', '2019-08-02', 81, 0, 129, 14, 0, 0, 1, 1),
(10, '1500', '', '2019-08-05', 0, 270, 645, 45, 0, 0, 1, 1),
(11, '320', '166.5', '2019-08-08', 40, 10, 200, 100, 0, 0, 1, 1),
(15, '139', '139', '2019-08-09', 36, 3, 58, 5, 0, 1, 0, 0),
(16, '2650', '2626.46', '2019-08-11', 0, 0, 0, 10, 0, 0, 0, 0),
(17, '40', '0.115', '2019-08-12', 0, 0, 0, 0, 0, 0, 0, 0),
(18, '1420', '1420', '2019-08-14', 0, 0, 596, 0, 1, 0, 0, 0),
(19, '1000', '0', '2019-09-07', 0, 0, 0, 0, 1, 1, 1, 1),
(20, '10000', '0', '2019-09-15', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mid` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(25) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`mid`, `name`, `phone`, `email`, `address`, `message`, `status`) VALUES
(3, 'nzabaheraheza jean claude', '', 'nzab@gmail.com', '', '  there are good product\r\n', ''),
(4, 'claude', '0782678095', 'claude@gmail.com', '', '  how the day mesuer\r\n\r\n', 'active'),
(6, 'ndayi', '8989898988', 'claude@gmail.com', 'kitambo', 'cpnti nue to to hard\r\n', 'active'),
(9, 'claude', '078121212', 'nclaude@gmail.com', 'Kigali', 'okkkk', 'active'),
(10, 'claude', '078121212', 'nclaude@gmail.com', 'Kigali', 'okkkk', 'active'),
(12, 'Mama', '07812123333', 'mama@gmail.com', 'gisenyi', 'yego', 'active'),
(13, 'claude', '07812123333', 'mama@gmail.com', 'Kigali', 'kb', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `online_buyed_product`
--

CREATE TABLE `online_buyed_product` (
  `id` int(5) NOT NULL,
  `p_id` int(5) NOT NULL COMMENT 'product id',
  `names` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL,
  `type` varchar(15) NOT NULL,
  `quantity` int(5) NOT NULL,
  `price` int(5) NOT NULL,
  `total_payment` int(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `online_buyed_product`
--

INSERT INTO `online_buyed_product` (`id`, `p_id`, `names`, `phone`, `mail`, `address`, `type`, `quantity`, `price`, `total_payment`, `date`) VALUES
(20, 203, 'Diane', '0732679190', 'Admin@gmail.com', 'kiboga', 'cheese', 55, 123, 6765, '0000-00-00'),
(21, 17, 'kabura', '0732679199', 'Admin@gmail.com', 'kirambo', 'yoghourt', 160, 400, 64000, '0000-00-00'),
(37, 49, 'ndag0', '0732679199', 'Admin@gmail.com', 'kirambo', 'IKIVUGUTO', 52, 2400, 124800, '0000-00-00'),
(38, 49, 'ndag0', '0732679199', 'Admin@gmail.com', 'kirambo', 'IKIVUGUTO', 52, 2400, 124800, '0000-00-00'),
(39, 233, 'ndayi', '0732679190', 'kagabo@gmail.com', 'byangabo', 'cheese', 50, 1000, 50000, '2019-11-08'),
(40, 233, 'ndayi', '0732679190', 'kagabo@gmail.com', 'byangabo', 'cheese', 50, 1000, 50000, '2019-11-08'),
(41, 19, 'ndayi', '0732679190', 'kagabo@gmail.com', 'kirambo', 'yoghourt', 50, 400, 20000, '2019-11-08'),
(42, 49, 'kamananga', '0732679400', 'kamanang@gmail.com', 'byangabo', 'IKIVUGUTO', 50, 2400, 40000, '0000-00-00'),
(43, 49, 'kamananga', '0732679400', 'kamanang@gmail.com', 'byangabo', 'IKIVUGUTO', 50, 2400, 40000, '0000-00-00'),
(44, 49, 'kamananga', '0732679400', 'kamanang@gmail.com', 'byangabo', 'IKIVUGUTO', 50, 2400, 40000, '0000-00-00'),
(45, 49, 'ndayi', '0732679199', 'kagabo@gmail.com', 'kirambo', 'IKIVUGUTO', 50, 2400, 40000, '0000-00-00'),
(46, 49, 'ndayi', '0732679199', 'kagabo@gmail.com', 'kirambo', 'IKIVUGUTO', 50, 2400, 40000, '0000-00-00'),
(47, 17, 'iriba', '0732679190', 'kagabo@gmail.com', 'kirambo', 'INSHUSHU', 55, 500, 44000, '2019-11-08'),
(48, 53, 'slvesttre twihahire', '0732679199', 'sivtwiha@gmail.com', 'butaro', 'IKIVUGUTO', 70, 16000, 56000, '2019-11-08'),
(49, 53, 'bimenya sop', '0782679199', 'Bimenya@gmail.com', 'tumba', 'IKIVUGUTO', 65, 16000, 52000, '2019-11-08'),
(50, 253, 'kabuye john', '0732679190', 'jkabuye@gmail.com', 'rubavu', 'cheese', 65, 1000, 65000, '2019-11-08'),
(51, 13, 'mukamana alice', '0732679190', 'mukalice@gmail.com', 'kiboga', 'yoghourt', 150, 200, 30000, '2019-11-08'),
(52, 53, 'alex', '0732679190', 'Alex@gmail.com', 'tumba', 'IKIVUGUTO', 60, 16000, 48000, '2019-12-08'),
(53, 30, 'muvandimwe', '0788820291', 'n@gmail.com', 'musanze', 'yoghourt', 100, 400, 40000, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `output_cheese`
--

CREATE TABLE `output_cheese` (
  `user_id` int(11) NOT NULL,
  `cheese_id` int(11) NOT NULL,
  `product_id` varchar(40) NOT NULL,
  `capacity` int(11) NOT NULL,
  `price` int(4) NOT NULL,
  `input_date` date NOT NULL,
  `expired_date` date NOT NULL,
  `life_time` date NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `output_cheese`
--

INSERT INTO `output_cheese` (`user_id`, `cheese_id`, `product_id`, `capacity`, `price`, `input_date`, `expired_date`, `life_time`, `status`) VALUES
(4, 14, '3CHEESE05-26-19', 1387, 1000, '2019-05-29', '2019-07-27', '0000-00-00', 'no expired'),
(11, 17, '3CHEESE11-07-19', 1000, 1000, '2019-11-07', '2019-07-27', '0000-00-00', 'no expired'),
(11, 22, '3CHEESE22-07-19', 163, 1000, '2019-07-22', '2019-09-22', '0000-00-00', 'no expired'),
(11, 23, '3CHEESE30-07-19', 311, 1000, '2019-07-30', '2019-09-30', '0000-00-00', 'no expired'),
(11, 24, '3CHEESE31-07-19', 250, 1000, '2019-07-31', '2019-10-01', '0000-00-00', 'no expired'),
(11, 25, '3CHEESE11-08-19', 436, 1000, '2019-08-11', '2019-10-11', '0000-00-00', 'no expired'),
(11, 26, '3CHEESE12-08-19', 10, 1000, '2019-08-12', '2019-10-12', '0000-00-00', 'no expired'),
(11, 27, '3CHEESE15-09-19', 2600, 1000, '2019-09-15', '2019-11-15', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `output_milk`
--

CREATE TABLE `output_milk` (
  `user_id` int(3) NOT NULL,
  `id` int(3) NOT NULL,
  `product_id` varchar(30) NOT NULL,
  `milk_type` varchar(30) NOT NULL,
  `capacity` int(5) NOT NULL,
  `price` int(6) NOT NULL,
  `input_date` date NOT NULL,
  `expired_date` date NOT NULL,
  `package` int(15) NOT NULL,
  `pack` varchar(3) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `output_milk`
--

INSERT INTO `output_milk` (`user_id`, `id`, `product_id`, `milk_type`, `capacity`, `price`, `input_date`, `expired_date`, `package`, `pack`, `status`) VALUES
(11, 10, '', 'INSHUSHU', 31, 500, '2019-05-22', '2019-07-07', 18, '', 'expired'),
(11, 17, '', 'INSHUSHU', 10, 500, '2019-07-31', '2019-10-01', 40, '', 'expired'),
(11, 46, '2IKIVUGUTO31-07-19', 'IKIVUGUTO', 110, 2400, '2019-07-31', '2019-10-01', 33, '3', 'expired'),
(11, 48, '2IKIVUGUTO31-07-19', 'IKIVUGUTO', 50, 4000, '2019-07-31', '2019-10-01', 10, '5', 'expired'),
(11, 49, '2IKIVUGUTO05-08-19', 'IKIVUGUTO', 46, 2400, '2019-08-05', '2019-10-05', 33, '3', 'expired'),
(11, 51, '2IKIVUGUTO05-08-19', 'IKIVUGUTO', 20, 16000, '2019-08-05', '2019-10-05', 11, '20', 'expired'),
(11, 52, '4INSHUSHU11-08-19', 'INSHUSHU', 88, 500, '2019-08-11', '2019-08-10', 88, '', 'expired'),
(11, 53, '2IKIVUGUTO11-08-19', 'IKIVUGUTO', 405, 16000, '2019-08-11', '2019-10-11', 30, '20', 'expired'),
(11, 54, '2IKIVUGUTO11-08-19', 'IKIVUGUTO', 400, 4000, '2019-08-11', '2019-10-11', 80, '5', 'expired'),
(11, 55, '2IKIVUGUTO11-08-19', 'IKIVUGUTO', 211, 2400, '2019-08-11', '2019-10-11', 70, '3', 'expired'),
(11, 56, '4INSHUSHU12-08-19', 'INSHUSHU', 9, 500, '2019-08-12', '2019-10-12', 9, '', 'expired'),
(11, 57, '2IKIVUGUTO12-08-19', 'IKIVUGUTO', 15, 2400, '2019-08-12', '2019-10-12', 5, '3', 'expired'),
(11, 58, '4INSHUSHU14-08-19', 'INSHUSHU', 11, 500, '2019-08-14', '2019-10-14', 11, '', 'expired'),
(11, 59, '4INSHUSHU15-09-19', 'INSHUSHU', 350, 500, '2019-09-15', '2019-11-15', 350, '', 'expired'),
(11, 60, '2IKIVUGUTO15-09-19', 'IKIVUGUTO', 4200, 4000, '2019-09-15', '2019-11-15', 840, '5', 'expired');

-- --------------------------------------------------------

--
-- Table structure for table `output_youghurt`
--

CREATE TABLE `output_youghurt` (
  `user_id` int(3) NOT NULL,
  `id` int(3) NOT NULL,
  `product_id` varchar(30) NOT NULL,
  `capacity` int(6) NOT NULL,
  `price` int(4) NOT NULL,
  `input_date` date NOT NULL,
  `expired_date` date NOT NULL,
  `package` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `output_youghurt`
--

INSERT INTO `output_youghurt` (`user_id`, `id`, `product_id`, `capacity`, `price`, `input_date`, `expired_date`, `package`, `status`) VALUES
(11, 13, '1YOGURT22-07-19', 50, 200, '2019-07-22', '2019-09-22', '250ml', 'expired'),
(11, 14, '1YOGURT22-07-19', 100, 400, '2019-07-22', '2019-09-22', '500ml', 'expired'),
(11, 15, '1YOGURT22-07-19', 200, 400, '2019-07-22', '2019-09-22', '500ml', 'expired'),
(11, 16, '1YOGURT30-07-19', 260, 200, '2019-07-30', '2019-09-30', '250ml', 'expired'),
(11, 17, '1YOGURT30-07-19', 900, 400, '2019-07-30', '2019-09-30', '500ml', 'expired'),
(0, 18, '1YOGURT22-03-19', 75, 200, '2019-05-22', '2019-05-22', '300', 'expired'),
(5, 19, '1YOGURT21-04-19', 450, 400, '2019-04-21', '2019-06-21', '1000', 'expired'),
(11, 20, '1YOGURT02-08-19', 60, 400, '2019-08-02', '2019-10-02', '500ml', 'expired'),
(11, 21, '1YOGURT02-08-19', 96, 200, '2019-08-02', '2019-10-02', '250ml', 'expired'),
(11, 22, '1YOGURT05-08-19', 300, 400, '2019-08-05', '2019-10-05', '500ml', 'expired'),
(11, 23, '1YOGURT09-08-19', 80, 200, '2019-08-09', '2019-08-10', '250ml', 'expired'),
(11, 24, '1YOGURT09-08-19', 88, 200, '2019-08-09', '2019-10-09', '250ml', 'expired'),
(11, 25, '1YOGURT11-08-19', 800, 200, '2019-08-11', '2019-10-11', '250ml', 'expired'),
(11, 26, '1YOGURT11-08-19', 672, 400, '2019-08-11', '2019-10-11', '500ml', 'expired'),
(11, 27, '1YOGURT12-08-19', 20, 200, '2019-08-12', '2019-10-12', '250ml', 'expired'),
(11, 28, '1YOGURT12-08-19', 20, 400, '2019-08-12', '2019-10-12', '500ml', 'expired'),
(11, 29, '1YOGURT14-08-19', 400, 200, '2019-08-14', '2019-10-14', '250ml', 'expired'),
(11, 30, '1YOGURT14-08-19', 212, 400, '2019-08-14', '2019-10-14', '500ml', 'expired'),
(11, 31, '1YOGURT15-09-19', 7200, 200, '2019-09-15', '2019-11-15', '250ml', 'expired');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `pid` int(11) NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`pid`, `type`) VALUES
(1, 'YOGURT'),
(2, 'IKIVUGUTO'),
(3, 'CHEESE'),
(4, 'INSHUSHU');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `rid` int(11) NOT NULL,
  `name` varchar(49) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `location` varchar(30) NOT NULL,
  `request` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`rid`, `name`, `phone`, `location`, `request`) VALUES
(1, 'claude', '07812123333', 'kirambo', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

CREATE TABLE `supplies` (
  `sid` int(11) NOT NULL,
  `names` varchar(40) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `address` varchar(60) NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplies`
--

INSERT INTO `supplies` (`sid`, `names`, `phone`, `mail`, `address`, `status`) VALUES
(1, 'claude', '0732679190', 'claude@gmail.com', 'claude@gmail.com', 'active'),
(2, 'alice', '0732679400', '', 'kirambo', 'active'),
(3, 'kaburame', '0732672000', 'kaburame@gmail.com', 'tumba', 'active'),
(4, 'kamananga', '0732679190', '', 'tumba', 'active'),
(5, 'yohana', '0728068111', '', 'rubavu', 'active'),
(6, 'analyst', '0732679190', '', 'tumba', 'active'),
(7, 'kamana Alex', '0732679190', 'kamanaalex@gmail.com', 'kanama', 'active'),
(8, 'emmy', '0782679199', 'emmy@gmail.com', 'tumba', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `supp_pay_log`
--

CREATE TABLE `supp_pay_log` (
  `id` int(11) NOT NULL,
  `supp_id` int(11) NOT NULL,
  `supp_name` varchar(30) NOT NULL,
  `u_id` varchar(4) NOT NULL,
  `litre` varchar(8) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `paid` varchar(8) NOT NULL,
  `todaypaid` varchar(8) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_success` varchar(20) NOT NULL DEFAULT 'ntarishurwa',
  `user_id_pay` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supp_pay_log`
--

INSERT INTO `supp_pay_log` (`id`, `supp_id`, `supp_name`, `u_id`, `litre`, `amount`, `paid`, `todaypaid`, `date`, `payment_success`, `user_id_pay`) VALUES
(30, 10, 'divine', '11', '201', '60300', '60300', '0', '2019-06-23 00:01:52', '', 0),
(31, 1, 'ndayi claude', '11', '27', '8100', '7500', '0', '2019-06-24 23:18:52', 'yishuwe', 11),
(32, 5, 'nza claude', '1', '80', '24000', '24000', '0', '2019-06-24 23:18:52', '', 0),
(33, 6, 'ndayi claude', '11', '128', '38400', '38400', '0', '2019-06-24 23:18:52', '', 0),
(34, 7, 'claude', '11', '362', '108600', '108600', '0', '2019-06-24 23:18:52', '', 0),
(35, 8, 'kagabo', '1', '120', '36000', '36000', '0', '2019-06-24 23:18:52', '', 0),
(36, 9, 'nza', '11', '1000', '300000', '300000', '0', '2019-06-24 23:18:53', '', 0),
(37, 2, 'sonolice', '11', '102', '30600', '0', '0', '2019-06-24 23:18:53', 'yishuwe', 11),
(38, 3, 'ndago', '11', '69', '20700', '0', '0', '2019-06-24 23:18:53', 'yishuwe', 11),
(39, 4, 'patrick', '11', '4', '1200', '0', '0', '2019-06-24 23:18:53', 'yishuwe', 11),
(40, 10, 'divine', '11', '207', '62100', '60300', '0', '2019-06-24 23:18:53', 'yishuwe', 11),
(41, 11, 'kabera', '0', '0', '0', '0', '0', '2019-06-24 23:18:53', '', 0),
(42, 12, 'kaburame', '11', '12', '3600', '0', '0', '2019-06-24 23:18:53', 'yishuwe', 11),
(43, 1, 'ndayi claude', '11', '27', '8100', '8100', '0', '2019-06-24 23:32:39', '', 0),
(44, 5, 'nza claude', '1', '80', '24000', '24000', '0', '2019-06-24 23:32:39', '', 0),
(45, 6, 'ndayi claude', '11', '138', '41400', '38400', '0', '2019-06-24 23:32:39', 'yishuwe', 11),
(54, 12, 'kaburame', '11', '55', '16500', '3600', '0', '2019-06-24 23:32:39', 'yishuwe', 11),
(55, 1, 'ndayi claude', '11', '35', '10500', '8100', '0', '2019-07-13 09:50:28', 'yishuwe', 11),
(56, 5, 'nza claude', '1', '80', '24000', '24000', '0', '2019-07-13 09:50:28', 'ntarishurwa', 0),
(57, 6, 'ndayi claude', '11', '138', '41400', '41400', '0', '2019-07-13 09:50:28', 'ntarishurwa', 0),
(58, 7, 'claude', '11', '362', '108600', '108600', '0', '2019-07-13 09:50:28', 'ntarishurwa', 0),
(59, 8, 'kagabo', '1', '120', '36000', '36000', '0', '2019-07-13 09:50:28', 'ntarishurwa', 0),
(60, 9, 'nza', '11', '1000', '300000', '300000', '0', '2019-07-13 09:50:28', 'ntarishurwa', 0),
(61, 2, 'sonolice', '11', '102', '30600', '30600', '0', '2019-07-13 09:50:28', 'ntarishurwa', 0),
(62, 3, 'ndago', '11', '79', '23700', '20700', '3000', '2019-07-13 09:50:28', 'ntarishurwa', 0),
(64, 10, 'divine', '11', '207', '62100', '62100', '0', '2019-07-13 09:50:28', 'ntarishurwa', 0),
(66, 12, 'kaburame', '11', '55', '16500', '16500', '0', '2019-07-13 09:50:28', 'ntarishurwa', 0),
(67, 1, 'claude', '11', '750', '225000', '0', '225000', '2019-07-30 15:48:33', 'ntarishurwa', 0),
(68, 2, 'alice', '11', '1835', '550500', '0', '0', '2019-07-30 15:48:33', 'yishuwe', 11),
(69, 3, 'kaburame', '11', '112', '33600', '0', '33600', '2019-07-30 15:48:33', 'ntarishurwa', 0),
(70, 4, 'kamananga', '11', '600', '180000', '0', '0', '2019-07-30 15:48:33', 'yishuwe', 19),
(71, 5, 'yohana', '11', '1000', '300000', '0', '300000', '2019-07-30 15:48:33', 'ntarishurwa', 0),
(72, 6, 'analyst', '11', '16', '4800', '0', '0', '2019-07-30 15:48:33', 'yishuwe', 11),
(73, 1, 'claude', '11', '3013', '903900', '225000', '678900', '2019-08-11 02:40:08', 'ntarishurwa', 0),
(74, 2, 'alice', '11', '3245', '973500', '550500', '423000', '2019-08-11 02:40:08', 'ntarishurwa', 0),
(75, 3, 'kaburame', '11', '321', '96300', '33600', '0', '2019-08-11 02:40:08', 'yishuwe', 19),
(76, 4, 'kamananga', '11', '1733', '519900', '180000', '339900', '2019-08-11 02:40:09', 'ntarishurwa', 0),
(77, 5, 'yohana', '11', '1111', '333300', '300000', '33300', '2019-08-11 02:40:09', 'ntarishurwa', 0),
(78, 6, 'analyst', '11', '1116', '334800', '4800', '0', '2019-08-11 02:40:09', 'yishuwe', 11),
(79, 1, 'claude', '11', '3013', '903900', '903900', '0', '2019-08-12 13:17:31', 'ntarishurwa', 0),
(80, 2, 'alice', '11', '3245', '973500', '973500', '0', '2019-08-12 13:17:31', 'ntarishurwa', 0),
(81, 3, 'kaburame', '11', '321', '96300', '96300', '0', '2019-08-12 13:17:31', 'ntarishurwa', 0),
(82, 4, 'kamananga', '11', '1733', '519900', '519900', '0', '2019-08-12 13:17:31', 'ntarishurwa', 0),
(83, 5, 'yohana', '11', '1111', '333300', '333300', '0', '2019-08-12 13:17:31', 'ntarishurwa', 0),
(84, 6, 'analyst', '11', '1136', '340800', '334800', '0', '2019-08-12 13:17:31', 'yishuwe', 19),
(85, 7, 'kamana Alex', '11', '20', '6000', '0', '0', '2019-08-12 13:17:31', 'yishuwe', 11),
(86, 8, 'emmy', '19', '0', '0', '0', '0', '2019-08-12 13:17:31', 'ntarishurwa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `names` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `names`, `username`, `phone`, `mail`, `password`, `type`) VALUES
(1, 'ndayi claude', 'nclaude', '0782679199', 'nclaude@gmail.com', '123', 'Cashier'),
(8, 'kagabo', 'kagabo', '0782679199', 'kagabo@gmail.com', '1234', 'Admin'),
(10, 'admin', 'Admin', '0732679199', 'Admin@gmail.com', '123', 'Admin'),
(11, 'user claude', 'Users', '0782679199', 'user@gmail.com', '123', 'Cashier'),
(14, 'patrick tune', 'patrick', '0783526792', 'patrick@gmail.com', '123', 'Admin'),
(18, 'divine', 'divine', '0783526750', 'divine@gmail.com', '123', 'Cashier'),
(19, 'david', 'david', '0732679190', 'david@gmail.com', '123', 'Cashier'),
(20, 'Aclaude', 'Aclaude', '0732679199', 'aclaude@gmail.com', '123', 'Admin'),
(21, 'Cclaude', 'Cclaude', '0732679190', 'cclaude@gmail.com', '123', 'Cashier');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collector_center`
--
ALTER TABLE `collector_center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distribitor_center`
--
ALTER TABLE `distribitor_center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input_milk`
--
ALTER TABLE `input_milk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input_milk_daily_save`
--
ALTER TABLE `input_milk_daily_save`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `online_buyed_product`
--
ALTER TABLE `online_buyed_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `output_cheese`
--
ALTER TABLE `output_cheese`
  ADD PRIMARY KEY (`cheese_id`);

--
-- Indexes for table `output_milk`
--
ALTER TABLE `output_milk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `output_youghurt`
--
ALTER TABLE `output_youghurt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `supplies`
--
ALTER TABLE `supplies`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `supp_pay_log`
--
ALTER TABLE `supp_pay_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collector_center`
--
ALTER TABLE `collector_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `distribitor_center`
--
ALTER TABLE `distribitor_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `input_milk`
--
ALTER TABLE `input_milk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `input_milk_daily_save`
--
ALTER TABLE `input_milk_daily_save`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `online_buyed_product`
--
ALTER TABLE `online_buyed_product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `output_cheese`
--
ALTER TABLE `output_cheese`
  MODIFY `cheese_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `output_milk`
--
ALTER TABLE `output_milk`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `output_youghurt`
--
ALTER TABLE `output_youghurt`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplies`
--
ALTER TABLE `supplies`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `supp_pay_log`
--
ALTER TABLE `supp_pay_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
