-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 24, 2018 at 12:23 PM
-- Server version: 5.6.36-82.0-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gffyj_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(200) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `admin_password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_username`, `mobile`, `admin_password`, `email`, `status`, `created_at`) VALUES
(21, 'admin', '7501507003', '$2y$10$.hT.UfRpk12AWa1/aA2IcOv/jqk8Ei80OXrAthuIcWrbrSVV7aad2', 'shuvam750@gmail.com', '', '2018-01-26 18:37:43'),
(22, 'bose756', '9874488496', '$2y$10$tR7GQpXCJWQmRPo/vm4VHut32tspxWjKB1uIQBV0BSGhIcO1QgiS2', 'boseabhishek975@gmail.com', '', '2018-01-26 19:40:09');

-- --------------------------------------------------------

--
-- Table structure for table `admin_setting`
--

CREATE TABLE IF NOT EXISTS `admin_setting` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `api_key` varchar(200) NOT NULL,
  `sms_key` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `domain_name` varchar(100) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_add` varchar(200) NOT NULL,
  `payment_auth_key` varchar(100) NOT NULL,
  `payment_secret_key` varchar(100) NOT NULL,
  `purchase_key` varchar(200) NOT NULL,
  `about_us` varchar(200) NOT NULL,
  `contact_us` varchar(200) NOT NULL,
  `banner1_text` varchar(200) NOT NULL,
  `banner1_image` varchar(200) NOT NULL,
  `banner2_text` varchar(200) NOT NULL,
  `banner2_image` varchar(200) NOT NULL,
  `banner3_text` varchar(200) NOT NULL,
  `banner3_image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `admin_setting`
--

INSERT INTO `admin_setting` (`id`, `username`, `password`, `api_key`, `sms_key`, `website`, `domain_name`, `email_id`, `mobile_number`, `company_name`, `company_add`, `payment_auth_key`, `payment_secret_key`, `purchase_key`, `about_us`, `contact_us`, `banner1_text`, `banner1_image`, `banner2_text`, `banner2_image`, `banner3_text`, `banner3_image`) VALUES
(5, 'boseabhishek975@gmail.com', '123456', 'recharge pai', 'authkey', 'paydo.in', 'paydo.in', 'shuvam750@gmail.com', '9874488496', 'microsoft', '', 'paymentkey', '', 'purchase_key', ' dfg mtym fgvbhvih                                              ', ' gkjhkjhklkjlkjl\r\n                        vbngty78u678                      ', 'banner1', 'url1', 'banner2', 'url2', 'banner3', 'url3');

-- --------------------------------------------------------

--
-- Table structure for table `bill_package`
--

CREATE TABLE IF NOT EXISTS `bill_package` (
  `operator` varchar(100) NOT NULL,
  `trial` varchar(100) NOT NULL,
  `basic` varchar(100) NOT NULL,
  `pro` varchar(100) NOT NULL,
  PRIMARY KEY (`operator`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_package`
--

INSERT INTO `bill_package` (`operator`, `trial`, `basic`, `pro`) VALUES
('Ajmer Vidyut Vitran Nigam - RAJASTHAN', '2', '3', '2'),
('APDCL - ASSAM', '2', '3', '2'),
('BESCOM - BENGALURU', '2', '3', '2'),
('BEST Undertaking - MUMBAI', '2', '3', '2'),
('BSES Rajdhani - DELHI', '2', '3', '2'),
('BSES Yamuna - DELHI', '2', '3', '2'),
('CESC - WEST BENGAL', '2', '3', '2'),
('CSEB - CHHATTISGARH', '2', '3', '2'),
('DHBVN - HARYANA', '2', '3', '2'),
('DNHPDCL - DADRA & NAGAR HAVELI', '2', '3', '2'),
('India Power', '2', '3', '2'),
('Jaipur Vidyut Vitran Nigam - RAJASTHAN', '2', '3', '2'),
('Jamshedpur Utilities & Services (JUSCO)', '2', '3', '2'),
('Jodhpur Vidyut Vitran Nigam - RAJASTHAN', '2', '3', '2'),
('Madhya Kshetra Vitaran - MADHYA PRADESH', '2', '3', '2'),
('MSEDC - MAHARASHTRA', '2', '3', '2'),
('Noida Power - NOIDA', '2', '3', '2'),
('Odisha Discoms - ODISHA', '2', '3', '2'),
('Paschim Kshetra Vitaran - MADHYA PRADESH', '2', '3', '2'),
('Reliance Energy - MUMBAI', '2', '3', '2'),
('Southern Power - ANDHRA PRADESH', '2', '3', '2'),
('Southern Power - TELANGANA', '2', '3', '2'),
('Tata Power - DELHI', '2', '3', '2'),
('Torrent Power', '2', '3', '2'),
('TSECL - TRIPURA', '2', '3', '2'),
('Tata AIG General Insurance', '2', '3', '2'),
('Tata AIA Life Insurance', '2', '3', '2'),
('IndiaFirst Life Insurance', '2', '3', '2'),
('ICICI Prudential Life Insurance', '2', '3', '2'),
('Bharti AXA Life Insurance', '2', '3', '2'),
('VIDEOCON DTH', '1', '3', '4'),
('Adani Gas', '3', '3', '2'),
('Gujarat Gas', '3', '3', '2'),
('Indraprastha Gas', '3', '3', '2'),
('Mahanagar Gas', '3', '3', '2'),
('Haryana City Gas', '3', '3', '2'),
('Sabarmati Gas', '3', '3', '2'),
('Siti Energy Gas - Uttar Pradesh', '3', '3', '2'),
('Tripura Natural Gas', '3', '3', '2');

-- --------------------------------------------------------

--
-- Table structure for table `bill_set_comm`
--

CREATE TABLE IF NOT EXISTS `bill_set_comm` (
  `operator` varchar(200) NOT NULL,
  `0` int(20) NOT NULL,
  `10%` int(20) NOT NULL,
  `20%` int(20) NOT NULL,
  `30%` int(30) NOT NULL,
  `40%` int(40) NOT NULL,
  `50%` int(50) NOT NULL,
  `60%` int(60) NOT NULL,
  `70%` int(70) NOT NULL,
  `80%` int(80) NOT NULL,
  `90%` int(90) NOT NULL,
  `100%` int(100) NOT NULL,
  PRIMARY KEY (`operator`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_set_comm`
--

INSERT INTO `bill_set_comm` (`operator`, `0`, `10%`, `20%`, `30%`, `40%`, `50%`, `60%`, `70%`, `80%`, `90%`, `100%`) VALUES
('Ajmer Vidyut Vitran Nigam - RAJASTHAN', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('APDCL - ASSAM', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('BESCOM - BENGALURU', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('BEST Undertaking - MUMBAI', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('BSES Rajdhani - DELHI', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('BSES Yamuna - DELHI', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('CESC - WEST BENGAL', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('CSEB - CHHATTISGARH', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('DHBVN - HARYANA', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('DNHPDCL - DADRA & NAGAR HAVELI', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('India Power', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Jaipur Vidyut Vitran Nigam - RAJASTHAN', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Jamshedpur Utilities & Services (JUSCO)', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Jodhpur Vidyut Vitran Nigam - RAJASTHAN', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Madhya Kshetra Vitaran - MADHYA PRADESH', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('MSEDC - MAHARASHTRA', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Noida Power - NOIDA', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Odisha Discoms - ODISHA', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Paschim Kshetra Vitaran - MADHYA PRADESH', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Reliance Energy - MUMBAI', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Southern Power - ANDHRA PRADESH', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Southern Power - TELANGANA', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Tata Power - DELHI', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Torrent Power', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('TSECL - TRIPURA', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Tata AIG General Insurance', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Tata AIA Life Insurance', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('IndiaFirst Life Insurance', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('ICICI Prudential Life Insurance', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Bharti AXA Life Insurance', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('VIDEOCON DTH', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Adani Gas', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Gujarat Gas', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Indraprastha Gas', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Mahanagar Gas', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Haryana City Gas', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Sabarmati Gas', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Siti Energy Gas - Uttar Pradesh', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Tripura Natural Gas', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100);

-- --------------------------------------------------------

--
-- Table structure for table `data_card`
--

CREATE TABLE IF NOT EXISTS `data_card` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `amount` int(11) NOT NULL,
  `charge` varchar(100) NOT NULL,
  `old_balance` varchar(100) NOT NULL,
  `current_balance` varchar(100) NOT NULL,
  `dist_comm` varchar(30) NOT NULL,
  `agent_comm` varchar(30) NOT NULL,
  `operatorName` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `mode` varchar(100) NOT NULL,
  `date` varchar(200) NOT NULL,
  `orderId` varchar(20) NOT NULL,
  `opTxid` varchar(20) NOT NULL,
  `errorCode` int(11) NOT NULL,
  `resText` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `data_card`
--

INSERT INTO `data_card` (`id`, `mobile`, `username`, `amount`, `charge`, `old_balance`, `current_balance`, `dist_comm`, `agent_comm`, `operatorName`, `status`, `mode`, `date`, `orderId`, `opTxid`, `errorCode`, `resText`) VALUES
(28, '9874488496', '7501507003', 10, '9.91', '', '', '0.01', '0.09', 'Tata Photon+', 'REFUND', 'pro', '2018-03-14 05:50:11', '59621835', '0', 112, 'Invalid order id'),
(29, '9874488496', '9038695445', 10, '9.92', '', '1188.44', '0.02', '0.08', 'Reliance NetConnect', 'REFUND', 'pro', '2018-03-15 11:45:20', '59729125', '0', 114, 'Invalid order id');

-- --------------------------------------------------------

--
-- Table structure for table `dispute`
--

CREATE TABLE IF NOT EXISTS `dispute` (
  `id_recharge` int(100) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `charge` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `operatorName` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `benifit` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `now_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `orderId` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `opTxid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `errorCode` int(11) NOT NULL,
  `resText` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `under` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1400 ;

--
-- Dumping data for table `dispute`
--

INSERT INTO `dispute` (`id_recharge`, `id`, `mobile`, `username`, `amount`, `charge`, `operatorName`, `benifit`, `now_status`, `status`, `date`, `orderId`, `opTxid`, `errorCode`, `resText`, `under`) VALUES
(1605, 1379, '7396624019', '9989557887', 50, '48.8', 'Airtel', '', 'FAILED', 'Disputed', '2018-03-18 07:12:53', '60240819', '', 107, 'Insufficient Balance', ''),
(1598, 1380, '7718588614', '8670706976', 28, '27.328', 'vodafone', '', 'SUCCESS', 'Disputed', '2018-03-18 07:13:59', '60237844', '1803181902270107', 200, 'Recharge Success', ''),
(0, 1377, '', '', 0, '', '', '', '', 'Disputed', '2018-03-18 05:09:06', '', '', 0, '', ''),
(1515, 1383, '7478785084', '7407777002', 20, '19.46', 'vodafone', '', 'REFUND', 'Disputed', '2018-03-18 07:21:47', '60168938', '0', 112, 'Invalid order id', ''),
(1332, 1375, '9207621378', '9847295481', 29, '28.304', 'Idea', '', 'Disputed', 'Disputed', '2018-03-18 02:58:09', '59971161', '0', 112, 'Invalid order id', ''),
(1481, 1376, '9703750743', '9885099678', 130, '127.27', 'vodafone', '', 'REFUND', 'Disputed', '2018-03-18 04:17:02', '60144061', '0', 112, 'Invalid order id', ''),
(276, 1384, '4123211776', '9848004537', 159, '155.661', 'SUN DTH', '', 'PENDING', 'Disputed', '2018-03-18 07:43:34', '60250549', '0', 201, 'Recharge Pending', ''),
(275, 1385, '1126317567', '8011259330', 500, '488', 'TATA SKY DTH', '', 'REFUND', 'Disputed', '2018-03-18 07:43:57', '60250236', '0', 112, 'Invalid order id', ''),
(1644, 1386, '7731889357', '9989557887', 449, '438.224', 'Idea', '', 'PENDING', 'Disputed', '2018-03-18 08:34:36', '60263458', '', 201, 'Recharge Pending', ''),
(1644, 1387, '7731889357', '9989557887', 449, '438.224', 'Idea', '', 'PENDING', 'Disputed', '2018-03-18 08:35:19', '60263458', '', 201, 'Recharge Pending', ''),
(1644, 1388, '7731889357', '9989557887', 449, '438.224', 'Idea', '', 'PENDING', 'Disputed', '2018-03-18 08:37:53', '60263458', '', 201, 'Recharge Pending', ''),
(1652, 1389, '8016048964', '8512977311', 18, '17.6598', 'Airtel', '', 'PENDING', 'Disputed', '2018-03-18 10:03:22', '60275619', '', 201, 'Recharge Pending', '8512977311'),
(1332, 1390, '9207621378', '9847295481', 29, '28.304', 'Idea', '', 'Disputed', 'Disputed', '2018-03-18 10:36:25', '59971161', '0', 112, 'Invalid order id', ''),
(1656, 1391, '9042355669', '9095764318', 10, '9.68', 'Tata Docomo Topup', '', 'PENDING', 'Disputed', '2018-03-19 02:41:08', '60279622', '', 201, 'Recharge Pending', ''),
(1637, 1392, '9631476778', '9953402294', 50, '49.04', 'Airtel', '', 'PENDING', 'Disputed', '2018-03-19 09:33:03', '60257270', '', 201, 'Recharge Pending', '8512080699'),
(1680, 1393, '9163982504', '8910551935', 10, '9.76', 'Airtel', '', 'PENDING', 'Disputed', '2018-03-19 09:42:56', '60289794', '', 201, 'Recharge Pending', '8013653265'),
(1687, 1394, '9073228829', '7477317795', 15, '14.685', 'vodafone', '', 'FAILED', 'Disputed', '2018-03-19 09:51:33', '60291223', '', 105, 'Same Recharge After 30 minutes', ''),
(1702, 1395, '9774088725', '8910551935', 38, '37.088', 'vodafone', '', 'FAILED', 'Disputed', '2018-03-19 10:23:05', '60303938', '', 107, 'Insufficient Balance', '8013653265'),
(1703, 1396, '9774088725', '8910551935', 38, '37.088', 'vodafone', '', 'FAILED', 'Disputed', '2018-03-19 10:35:34', '60305464', '', 107, 'Insufficient Balance', '8013653265'),
(1708, 1397, '9562252330', '9847295481', 30, '29.28', 'Idea', '', 'FAILED', 'Disputed', '2018-03-19 11:05:27', '60312668', '', 107, 'Insufficient Balance', ''),
(839, 1398, '8801009880', '8801009880', 10, '', 'Airtel', '', 'SUCCESS', 'Disputed', '2018-03-19 11:57:20', '59334331', '482434463', 200, 'Recharge Success', ''),
(1713, 1399, '9822000615', '8482820036', 199, '194.224', 'Idea', '', 'FAILED', 'Disputed', '2018-03-19 12:05:05', '60323657', '', 107, 'Insufficient Balance', '');

-- --------------------------------------------------------

--
-- Table structure for table `dis_users`
--

CREATE TABLE IF NOT EXISTS `dis_users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `dis_mobile` varchar(200) NOT NULL,
  `dis_password` varchar(200) NOT NULL,
  `package` varchar(200) NOT NULL,
  `set_comm` int(11) NOT NULL,
  `balance` varchar(1000) NOT NULL,
  `email` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `account_type` varchar(100) NOT NULL,
  `pv_balance` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

-- --------------------------------------------------------

--
-- Table structure for table `dth`
--

CREATE TABLE IF NOT EXISTS `dth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `amount` int(11) NOT NULL,
  `charge` varchar(100) NOT NULL,
  `old_balance` varchar(100) NOT NULL,
  `current_balance` varchar(100) NOT NULL,
  `dist_comm` varchar(30) NOT NULL,
  `agent_comm` varchar(20) NOT NULL,
  `operatorName` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `mode` varchar(100) NOT NULL,
  `date` varchar(200) NOT NULL,
  `orderId` varchar(10) NOT NULL,
  `opTxid` varchar(20) NOT NULL,
  `errorCode` int(10) NOT NULL,
  `resText` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=284 ;

--
-- Dumping data for table `dth`
--

INSERT INTO `dth` (`id`, `mobile`, `username`, `amount`, `charge`, `old_balance`, `current_balance`, `dist_comm`, `agent_comm`, `operatorName`, `status`, `mode`, `date`, `orderId`, `opTxid`, `errorCode`, `resText`) VALUES
(122, '3010695317', '8766970539', 230, '', '', '', '', '', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-11 03:56:51', '59151624', '0', 112, 'Invalid order id'),
(121, '3010695317', '8766970539', 230, '', '', '', '', '', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-11 03:55:03', '59151458', '0', 112, 'Invalid order id'),
(42, '96168838', '7579224098', 300, '', '', '', '', '', 'VIDEOCON DTH', 'REFUND', 'pro', '2018-02-24 11:53:01', '57050658', '0', 112, 'Invalid order id'),
(43, '1080884859', '7579224098', 200, '', '', '', '', '', 'TATA SKY DTH', 'REFUND', 'pro', '2018-02-24 13:07:07', '57062806', '0', 112, 'Invalid order id'),
(123, '210436012', '8455062126', 190, '', '', '', '', '', 'VIDEOCON DTH', 'REFUND', 'pro', '2018-03-11 05:58:40', '59169019', '0', 112, 'Invalid order id'),
(46, '203937975', '8609517329', 10, '', '', '', '', '', 'VIDEOCON DTH', 'REFUND', 'basic', '2018-02-28 12:44:53', '57695357', '', 204, 'Recharge Failed'),
(96, '209455517', '9205869388', 210, '', '', '', '', '', 'VIDEOCON DTH', 'SUCCESS', 'pro', '2018-03-09 13:16:07', '58904105', '3104289945', 200, 'Recharge Success'),
(47, '02512267794', '8609517329', 150, '', '', '', '', '', 'DISH DTH', 'REFUND', 'basic', '2018-02-28 13:44:57', '57709589', '0', 112, 'Invalid order id'),
(48, '3010435105', '7002197851', 110, '', '', '', '', '', 'AIRTEL DTH', 'REFUND', 'pro', '2018-02-28 15:17:47', '57729205', '0', 112, 'Invalid order id'),
(49, '173909254', '7002197851', 275, '', '', '', '', '', 'VIDEOCON DTH', 'REFUND', 'pro', '2018-03-01 12:39:55', '57830508', '0', 112, 'Invalid order id'),
(50, '01518486535', '9205869388', 384, '', '', '', '', '', 'DISH DTH', 'REFUND', 'pro', '2018-03-01 15:42:06', '57870643', '0', 112, 'Invalid order id'),
(55, '3001861710', '9596265371', 235, '', '', '', '', '', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-03 15:01:20', '58155787', '0', 112, 'Invalid order id'),
(51, '50833537', '8970321121', 300, '', '', '', '', '', 'VIDEOCON DTH', 'REFUND', 'pro', '2018-03-02 13:16:51', '57958019', '0', 112, 'Invalid order id'),
(52, '1265604411', '7002697036', 700, '', '', '', '', '', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-03 08:49:56', '58079603', '0', 112, 'Invalid order id'),
(53, '10461966920', '9205869388', 159, '', '', '', '', '', 'SUN DTH', 'REFUND', 'pro', '2018-03-03 13:14:24', '58126259', '0', 112, 'Invalid order id'),
(54, '182955059', '9205869388', 165, '', '', '', '', '', 'VIDEOCON DTH', 'REFUND', 'pro', '2018-03-03 13:25:47', '58129548', '0', 112, 'Invalid order id'),
(56, '3001861710', '9596265371', 235, '', '', '', '', '', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-03 15:23:28', '58159691', '0', 112, 'Invalid order id'),
(57, '3001861710', '9596265371', 220, '', '', '', '', '', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-03 15:24:17', '58159830', '0', 112, 'Invalid order id'),
(58, '10429947855', '9205869388', 159, '', '', '', '', '', 'SUN DTH', 'SUCCESS', 'pro', '2018-03-04 01:46:28', '58173075', '186370549', 200, 'Recharge Success'),
(59, '10470440149', '9205869388', 504, '', '', '', '', '', 'SUN DTH', 'SUCCESS', 'pro', '2018-03-04 03:18:27', '58178797', '186371887', 200, 'Recharge Success'),
(60, '1170602179', '7002697036', 100, '', '', '', '', '', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-05 10:25:36', '58379679', 'TP1803051144463671', 200, 'Recharge Success'),
(61, '1093597167', '9810134787', 300, '', '', '', '', '', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-05 11:08:37', '58385696', 'TP1803051144483290', 200, 'Recharge Success'),
(62, '10208747705', '7002697036', 200, '', '', '', '', '', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-05 12:09:26', '58395003', '0', 112, 'Invalid order id'),
(63, '1086784608', '7002697036', 240, '', '', '', '', '', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-05 12:58:10', '58404516', 'TP1803051144564992', 200, 'Recharge Success'),
(64, '02513138647', '8609517329', 75, '', '', '', '', '', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-05 14:32:23', '58426104', 'ROER68299869', 200, 'Recharge Success'),
(65, '02511581445', '8609517329', 141, '', '', '', '', '', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-05 14:41:36', '58428208', 'ROER68302959', 200, 'Recharge Success'),
(66, '3005581005', '7002425190', 235, '', '', '', '', '', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-05 14:42:36', '58428413', '199910519', 200, 'Recharge Success'),
(67, '188293948', '8609517329', 208, '', '', '', '', '', 'VIDEOCON DTH', 'SUCCESS', 'pro', '2018-03-05 15:00:28', '58432008', '3093121218', 200, 'Recharge Success'),
(68, '122925570', '8609517329', 215, '', '', '', '', '', 'VIDEOCON DTH', 'SUCCESS', 'pro', '2018-03-05 15:07:44', '58433416', '3093127731', 200, 'Recharge Success'),
(69, '202427342', '8609517329', 139, '', '', '', '', '', 'VIDEOCON DTH', 'SUCCESS', 'pro', '2018-03-06 02:57:11', '58451634', '3096789263', 200, 'Recharge Success'),
(70, '156881937', '8766970539', 100, '', '', '', '', '', 'VIDEOCON DTH', 'REFUND', 'pro', '2018-03-06 08:29:35', '58493079', '', 200, 'Recharge Success'),
(71, '01523020150', '8609517329', 105, '', '', '', '', '', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-06 12:06:30', '58517227', 'ROER68392653', 200, 'Recharge Success'),
(72, '3008420979', '7002425190', 510, '', '', '', '', '', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-06 12:15:57', '58518828', '248196499,', 200, 'Recharge Success'),
(73, '1260842248', '8876572515', 240, '', '', '', '', '', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-06 13:03:35', '58528164', '0', 112, 'Invalid order id'),
(74, '1260842248', '8876572515', 240, '', '', '', '', '', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-06 13:04:53', '58528499', '0', 112, 'Invalid order id'),
(75, '1133115910', '7002197851', 110, '', '', '', '', '', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-06 13:28:13', '58533743', '', 107, 'Insufficient Balance'),
(76, '1136115910', '7002197851', 110, '', '', '', '', '', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-06 13:33:53', '58535180', '0', 112, 'Invalid order id'),
(77, '115647415', '8609517329', 100, '', '', '', '', '', 'VIDEOCON DTH', 'REFUND', 'pro', '2018-03-06 13:35:47', '58535764', '0', 112, 'Invalid order id'),
(78, '1136115910', '7002197851', 110, '', '', '', '', '', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-06 13:41:47', '58537338', '0', 112, 'Invalid order id'),
(79, '1136115910', '7002197851', 110, '', '', '', '', '', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-06 14:29:55', '58548743', 'TP1803061145225643', 200, 'Recharge Success'),
(80, '1260844335', '8876572515', 300, '', '', '', '', '', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-06 14:39:54', '58550861', 'TP1803061145237758', 200, 'Recharge Success'),
(81, '01528049562', '8609517329', 105, '', '', '', '', '', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-07 02:42:04', '58575211', 'ROER68474452', 200, 'Recharge Success'),
(85, '3011237913', '8609517329', 154, '', '', '', '', '', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-07 13:51:46', '58655926', '0', 114, 'Invalid order id'),
(82, '115647415', '8609517329', 100, '', '', '', '', '', 'VIDEOCON DTH', 'SUCCESS', 'pro', '2018-03-07 03:10:36', '58578263', '3099184892', 200, 'Recharge Success'),
(83, '1229507536', '8609517329', 139, '', '', '', '', '', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-07 03:41:57', '58582747', 'TP1803071145372818', 200, 'Recharge Success'),
(84, '1230333294', '8609517329', 139, '', '', '', '', '', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-07 13:43:33', '58653157', '0', 112, 'Invalid order id'),
(86, '198330767', '8609517329', 100, '', '', '', '', '', 'VIDEOCON DTH', 'SUCCESS', 'pro', '2018-03-08 12:53:20', '58773177', '3101723991', 200, 'Recharge Success'),
(87, '01519561581', '8609517329', 140, '', '', '', '', '', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-08 13:18:59', '58777805', 'ROER68690255', 200, 'Recharge Success'),
(88, '3005416033', '8876572515', 200, '', '', '', '', '', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-08 13:50:50', '58784040', '0', 112, 'Invalid order id'),
(89, '3005416033', '8876572515', 200, '', '', '', '', '', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-08 13:53:34', '58784498', '0', 112, 'Invalid order id'),
(90, '3005416033', '8876572515', 200, '', '', '', '', '', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-08 13:54:45', '58784684', '248737760', 200, 'Recharge Success'),
(91, '01523020197', '8609517329', 200, '', '', '', '', '', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-08 14:23:37', '58790003', 'ROER68716516', 200, 'Recharge Success'),
(92, '1205585902', '8609517329', 139, '', '', '', '', '', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-08 14:25:13', '58790285', 'TP1803081146247651', 200, 'Recharge Success'),
(93, '3022095874', '8766970539', 200, '', '', '', '', '', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-08 15:26:23', '58800887', '248786532,', 200, 'Recharge Success'),
(94, '3022095874', '8766970539', 200, '', '', '', '', '', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-08 15:27:17', '58801001', '0', 112, 'Invalid order id'),
(95, '3022095874', '8766970539', 200, '', '', '', '', '', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-08 15:30:45', '58801450', '0', 112, 'Invalid order id'),
(97, '3024219161', '8609517329', 200, '', '', '', '', '', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-10 04:56:46', '58969700', '249041863,', 200, 'Recharge Success'),
(98, '154632184', '9205869388', 166, '', '', '', '', '', 'VIDEOCON DTH', 'SUCCESS', 'pro', '2018-03-10 05:16:18', '58972810', '3106284868_167.58', 200, 'Recharge Success'),
(99, '135497472', '8609517329', 105, '', '', '', '', '', 'VIDEOCON DTH', 'SUCCESS', 'pro', '2018-03-10 05:20:24', '58973384', '3106286805_111.93', 200, 'Recharge Success'),
(100, '01527079167', '8609517329', 41, '', '', '', '', '', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-10 05:48:02', '58978275', 'ROER68895323', 200, 'Recharge Success'),
(101, '188522720', '9205869388', 100, '', '', '', '', '', 'VIDEOCON DTH', 'SUCCESS', 'pro', '2018-03-10 09:28:54', '59007612', '3106442867_100.55', 200, 'Recharge Success'),
(102, '01523706376', '8876572515', 250, '', '', '', '', '', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-10 09:58:10', '59010500', 'ROER68923861', 200, 'Recharge Success'),
(103, '10530038768', '9205869388', 159, '', '', '', '', '', 'SUN DTH', 'SUCCESS', 'pro', '2018-03-10 05:53:43', '59029487', '187032676', 200, 'Recharge Success'),
(104, '01526787592', '8609517329', 41, '', '', '', '', '', 'DISH DTH', 'REFUND', 'pro', '2018-03-10 06:40:16', '59037331', '', 204, 'Recharge Failed'),
(105, '01526787592', '8609517329', 100, '', '', '', '', '', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-10 06:41:46', '59037676', 'ROER68957346', 200, 'Recharge Success'),
(106, '1226632246', '8609517329', 139, '', '', '', '', '', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-10 06:57:24', '59041665', 'TP1803101147217117', 200, 'Recharge Success'),
(107, '3023536963', '8609517329', 154, '', '', '', '', '', 'DISH DTH', 'REFUND', 'pro', '2018-03-10 06:59:39', '59042314', '0', 112, 'Invalid order id'),
(108, '1157160720', '8609517329', 250, '', '', '', '', '', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-10 07:26:41', '59048021', 'TP1803101147252586', 200, 'Recharge Success'),
(109, '10461966896', '9205869388', 209, '', '', '', '', '', 'SUN DTH', 'SUCCESS', 'pro', '2018-03-10 08:02:07', '59058402', '187066831', 200, 'Recharge Success'),
(124, '210436012', '8455062126', 190, '', '', '', '', '', 'VIDEOCON DTH', 'REFUND', 'pro', '2018-03-11 06:01:29', '59169612', '0', 112, 'Invalid order id'),
(125, '02137179470', '8455062126', 190, '', '', '', '', '', 'DISH DTH', 'REFUND', 'pro', '2018-03-11 06:05:31', '59170601', '0', 114, 'Invalid order id'),
(126, '73641842', '8766970539', 160, '', '', '', '', '', 'VIDEOCON DTH', 'REFUND', 'pro', '2018-03-11 06:12:15', '59171896', '0', 112, 'Invalid order id'),
(127, '73641842', '8766970539', 160, '', '', '', '', '', 'VIDEOCON DTH', 'REFUND', 'pro', '2018-03-11 06:13:34', '59172191', '0', 112, 'Invalid order id'),
(128, '02137109510', '9596265371', 220, '', '', '', '', '', 'DISH DTH', 'REFUND', 'pro', '2018-03-11 06:48:36', '59180494', '0', 112, 'Invalid order id'),
(116, '3008221091', '7377503954', 150, '', '', '', '', '', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-11 09:42:19', '59101246', '249255960,', 200, 'Recharge Success'),
(129, '01516768691', '9941520948', 100, '', '', '', '', '', 'DISH DTH', 'REFUND', 'pro', '2018-03-11 07:06:28', '59184943', '0', 112, 'Invalid order id'),
(130, '200815724', '8766970539', 300, '', '', '', '', '', 'VIDEOCON DTH', 'REFUND', 'pro', '2018-03-11 07:35:07', '59192018', '0', 112, 'Invalid order id'),
(131, '01521604561', '8455062126', 180, '', '', '', '', '', 'DISH DTH', 'REFUND', 'pro', '2018-03-12 08:55:26', '59220410', '0', 112, 'Invalid order id'),
(132, '1036650552', '8766970539', 110, '', '', '', '', '', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-12 12:56:25', '59264842', '0', 112, 'Invalid order id'),
(133, '1036650552', '8766970539', 110, '', '', '', '', '', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-12 12:59:18', '59265360', '0', 114, 'Invalid order id'),
(134, '01521604561', '8455062126', 180, '', '', '', '', '', 'DISH DTH', 'REFUND', 'pro', '2018-03-12 02:54:55', '59283409', '0', 112, 'Invalid order id'),
(135, '1157601475', '8340464271', 299, '', '', '', '', '6.279', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-12 04:46:01', '59295564', 'TP1803121148097744', 200, 'Recharge Success'),
(136, '3021271810001', '8512977311', 199, '', '', '', '', '4.179', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-12 06:01:31', '59308836', '0', 112, 'Invalid order id'),
(137, '3021271810001', '8512977311', 199, '', '', '', '', '4.179', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-12 06:02:21', '59309000', '0', 112, 'Invalid order id'),
(138, '3021271810001', '8512977311', 199, '', '', '', '', '4.179', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-12 06:04:46', '59309458', '0', 112, 'Invalid order id'),
(139, '3021271810001', '8512977311', 200, '', '', '', '', '4.2', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-12 06:05:16', '59309538', '0', 112, 'Invalid order id'),
(140, '3021271810-001', '8512977311', 199, '', '', '', '', '4.179', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-12 06:10:16', '59310652', '0', 112, 'Invalid order id'),
(141, '3021271810-001', '8512977311', 199, '', '', '', '', '4.179', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-12 06:17:15', '59312163', '0', 112, 'Invalid order id'),
(142, '3021271810001', '8512977311', 199, '', '', '', '', '4.179', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-12 06:17:43', '59312236', '0', 112, 'Invalid order id'),
(143, '1084669702', '8801009880', 10, '', '', '', '', '0.21', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-12 07:53:07', '59335863', '', 204, 'Recharge Failed'),
(144, '626262626262626', '7501507003', 90, '', '', '', '', '2.16', 'SUN DTH', 'REFUND', 'pro', '2018-03-13 09:31:18', '59387226', '0', 112, 'Invalid order id'),
(149, '3012761266', '9707490933', 160, '', '', '', '0.768', '3.072', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-13 07:17:10', '59504601', '249851604,', 200, 'Recharge Success'),
(145, '415g4h6gfh', '9038695445', 10, '', '', '', '0.03', '0.12', 'VIDEOCON DTH', 'REFUND', 'trial', '2018-03-13 12:32:29', '59427443', '0', 112, 'Invalid order id'),
(146, '5262d626d216216216262', '7501507003', 50, '', '', '', '', '1.2', 'SUN DTH', 'REFUND', 'pro', '2018-03-13 03:15:06', '59455961', '0', 112, 'Invalid order id'),
(147, '42354614', '8455062126', 150, '', '', '', '', '3.15', 'VIDEOCON DTH', 'SUCCESS', 'pro', '2018-03-13 06:16:19', '59488205', '3113498579', 200, 'Recharge Success'),
(148, '3018051448', '9596265371', 200, '', '', '', '', '4.2', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-13 06:41:59', '59495780', '249830586,', 200, 'Recharge Success'),
(150, '43379953', '9101005762', 320, '', '', '', '1.536', '6.144', 'VIDEOCON DTH', 'REFUND', '', '2018-03-13 07:35:22', '59509420', '0', 112, 'Invalid order id'),
(151, '57838931', '8766970539', 100, '', '', '', '', '2.1', 'VIDEOCON DTH', 'REFUND', 'pro', '2018-03-13 07:39:43', '59510434', '0', 112, 'Invalid order id'),
(152, '3004628493', '9707490933', 250, '', '', '', '1.2', '4.8', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-13 07:52:03', '59513639', '0', 112, 'Invalid order id'),
(153, '3004628493', '9707490933', 250, '', '', '', '1.2', '4.8', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-13 07:54:59', '59514308', '0', 112, 'Invalid order id'),
(154, '015277421333', '9516435029', 283, '', '', '', '', '5.943', 'DISH DTH', 'REFUND', 'pro', '2018-03-13 08:07:22', '59516680', '0', 112, 'Invalid order id'),
(155, '015277421333', '9516435029', 283, '', '', '', '', '5.943', 'DISH DTH', 'REFUND', 'pro', '2018-03-13 08:09:50', '59517136', '0', 112, 'Invalid order id'),
(156, '015277421333', '9516435029', 200, '', '', '', '', '4.2', 'DISH DTH', 'REFUND', 'pro', '2018-03-13 08:14:31', '59518066', '0', 114, 'Invalid order id'),
(157, '015277421333', '9516435029', 250, '', '', '', '', '5.25', 'DISH DTH', 'REFUND', 'pro', '2018-03-13 08:15:03', '59518117', '0', 112, 'Invalid order id'),
(158, '8962887886', '9516435029', 283, '', '', '', '', '5.943', 'DISH DTH', 'REFUND', 'pro', '2018-03-13 08:16:48', '59518429', '0', 112, 'Invalid order id'),
(159, '8962887886', '9516435029', 250, '', '', '', '', '5.25', 'DISH DTH', 'REFUND', 'pro', '2018-03-13 08:17:22', '59518516', '0', 112, 'Invalid order id'),
(160, '43379953', '9101005762', 320, '', '', '', '1.536', '6.144', 'VIDEOCON DTH', 'REFUND', '', '2018-03-13 08:22:13', '59519555', '0', 114, 'Invalid order id'),
(161, '3004628493', '9707490933', 245, '', '', '', '1.176', '4.704', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-13 08:55:48', '59525141', '254657903', 200, 'Recharge Success'),
(162, '1084669702', '8801009880', 40, '', '', '', '', '0.84', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-13 10:29:19', '59534338', 'TP1803131148898442', 200, 'Recharge Success'),
(163, '43379953', '9101005762', 320, '', '', '', '1.536', '6.144', 'VIDEOCON DTH', 'SUCCESS', 'pro', '2018-03-14 07:57:36', '59540328', '3115592933-PRAFULLA', 200, 'Recharge Success'),
(164, '1096661598', '9101005762', 300, '', '', '', '1.44', '5.76', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-14 08:01:02', '59540556', 'TP1803141148924713', 200, 'Recharge Success'),
(165, '1054490667', '9101005762', 100, '', '', '', '0.48', '1.92', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-14 09:43:51', '59553790', 'TP1803141148947649', 200, 'Recharge Success'),
(166, '1076451507', '9101005762', 100, '', '', '', '0.48', '1.92', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-14 10:13:03', '59558288', 'TP1803141148957681', 200, 'Recharge Success'),
(167, '3005174668', '9707490933', 200, '', '', '', '0.96', '3.84', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-14 10:27:13', '59560629', '249939767,', 200, 'Recharge Success'),
(168, '01512675014', '8512977311', 100, '', '', '', '', '2.1', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-14 12:49:30', '59583758', 'ROER69438784', 200, 'Recharge Success'),
(169, '01512675014', '8512977311', 100, '', '', '', '', '2.1', 'DISH DTH', 'REFUND', 'pro', '2018-03-14 12:49:32', '59583765', '0', 112, 'Invalid order id'),
(170, '01512675014', '8512977311', 100, '', '', '', '', '2.1', 'DISH DTH', 'REFUND', 'pro', '2018-03-14 12:49:33', '59583771', '0', 112, 'Invalid order id'),
(171, '01512675014', '8512977311', 100, '', '', '', '', '2.1', 'DISH DTH', 'REFUND', 'pro', '2018-03-14 12:49:54', '59583806', '0', 112, 'Invalid order id'),
(172, '01527160018', '9516435029', 293, '', '', '', '', '6.153', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-14 02:55:29', '59597861', 'ROER69451716', 200, 'Recharge Success'),
(173, 'vbnbvmn', '7501507003', 10, '9.865', '', '', '0.015', '0.135', 'VIDEOCON DTH', 'REFUND', 'pro', '2018-03-14 05:39:59', '59619771', '0', 112, 'Invalid order id'),
(174, '178480403', '9101005762', 100, '98.08', '', '', '0.48', '1.92', 'VIDEOCON DTH', 'SUCCESS', 'pro', '2018-03-14 05:49:31', '59621729', '3115874698-MANIK', 200, 'Recharge Success'),
(175, '3017199293', '7002425190', 200, '195.8', '', '', '', '4.2', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-14 05:50:19', '59621867', '50066477', 200, 'Recharge Success'),
(176, '1082461813', '9101005762', 300, '294.24', '', '', '1.44', '5.76', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-14 05:54:19', '59622630', 'TP1803141149171999', 200, 'Recharge Success'),
(177, 'bnmbm', '7501507003', 10, '9.865', '', '', '0.015', '0.135', 'VIDEOCON DTH', 'REFUND', 'pro', '2018-03-14 06:11:33', '59626795', '0', 112, 'Invalid order id'),
(178, '1216673945', '9516435029', 150, '146.85', '', '', '', '3.15', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-14 07:04:57', '59642507', 'TP1803141149247035', 200, 'Recharge Success'),
(179, '01510237385', '8455062126', 100, '97.9', '', '', '', '2.1', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-14 07:10:44', '59644433', 'ROER69502251', 200, 'Recharge Success'),
(180, '140103507', '8606521254', 400, '390.4', '', '', '', '9.6', 'VIDEOCON DTH', 'SUCCESS', 'pro', '2018-03-14 07:11:45', '59644752', '3115960304-RAMESH', 200, 'Recharge Success'),
(181, '1196367518', '9707490933', 300, '294.24', '', '', '1.44', '5.76', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-14 07:44:22', '59653577', 'TP1803141149297512', 200, 'Recharge Success'),
(182, '171736928', '8606521254', 100, '97.6', '', '', '', '2.4', 'VIDEOCON DTH', 'SUCCESS', 'pro', '2018-03-14 09:05:04', '59670902', '3116073881', 200, 'Recharge Success'),
(183, '1121916587', '9101005762', 300, '294.24', '', '', '1.44', '5.76', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-15 09:24:27', '59698170', 'TP1803151149463267', 200, 'Recharge Success'),
(184, '10064054140', '9848004537', 159, '155.661', '', '', '', '3.339', 'SUN DTH', 'SUCCESS', 'pro', '2018-03-15 10:26:07', '59710463', '187509973', 200, 'Recharge Success'),
(185, '3025134413', '9848004537', 150, '146.85', '', '', '', '3.15', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-15 10:35:03', '59712521', '254982682', 200, 'Recharge Success'),
(186, '3024907174', '9848004537', 150, '146.85', '', '', '', '3.15', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-15 10:39:06', '59713417', '250205238,', 200, 'Recharge Success'),
(187, '1040402511', '7005488382', 399, '390.621', '', '', '3.591', '8.379', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-15 11:09:19', '59720463', 'TP1803151149499910', 200, 'Recharge Success'),
(188, '415654646', '9038695445', 10, '9.88', '', '1188.48', '0.03', '0.12', 'VIDEOCON DTH', 'REFUND', 'pro', '2018-03-15 11:43:15', '59728564', '', 204, 'Recharge Failed'),
(189, '9038695445', '9038695445', 10, '9.88', '', '35.28', '0.03', '0.12', 'SUN DTH', 'REFUND', 'pro', '2018-03-15 01:11:12', '59748084', '0', 112, 'Invalid order id'),
(190, '3025134413', '9848004537', 20, '19.58', '', '2515.669', '', '0.42', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-15 01:25:25', '59750774', '0', 112, 'Invalid order id'),
(191, '3025134413', '9848004537', 50, '48.95', '', '2486.299', '', '1.05', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-15 01:53:26', '59756372', '0', 112, 'Invalid order id'),
(192, '3025134413', '9848004537', 100, '97.9', '', '2437.349', '', '2.1', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-15 01:54:01', '59756460', '50255736', 200, 'Recharge Success'),
(193, '41124419247', '9848004537', 159, '155.661', '', '2213.158', '', '3.339', 'SUN DTH', 'SUCCESS', 'pro', '2018-03-15 03:24:04', '59769649', '187544604', 200, 'Recharge Success'),
(194, '10530406023', '9848004537', 159, '155.661', '', '2045.749', '', '3.339', 'SUN DTH', 'SUCCESS', 'pro', '2018-03-15 04:32:05', '59782166', '187552634', 200, 'Recharge Success'),
(195, '129036861', '9880609360', 100, '97.6', '', '871.12', '', '2.4', 'VIDEOCON DTH', 'SUCCESS', 'pro', '2018-03-15 05:36:30', '59796298', '3116397389', 200, 'Recharge Success'),
(196, '1191387081', '9707490933', 100, '98.08', '', '416.1204', '0.48', '1.92', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-15 05:47:09', '59798906', 'TP1803151149672022', 200, 'Recharge Success'),
(197, '3014910369', '7001688783', 170, '165.41', '', '733.1774', '0', '4.59', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-15 05:52:14', '59800225', '50319838', 200, 'Recharge Success'),
(198, '03014784483', '8011259330', 200, '195.2', '', '2795.04', '', '4.8', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-15 05:56:32', '59801381', '0', 112, 'Invalid order id'),
(199, '3014784483', '8011259330', 200, '195.2', '', '2795.04', '', '4.8', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-15 05:57:29', '59801589', '50322075', 200, 'Recharge Success'),
(200, '1087610935', '9707490933', 100, '98.08', '', '318.0404', '0.48', '1.92', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-15 06:14:29', '59805983', '0', 112, 'Invalid order id'),
(201, '1087610935', '9707490933', 100, '98.08', '', '318.0404', '0.48', '1.92', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-15 06:18:48', '59806926', '0', 112, 'Invalid order id'),
(202, '1255321174', '8011259330', 200, '195.2', '', '2599.84', '', '4.8', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-15 06:30:11', '59809493', '', 200, 'Recharge Success'),
(203, '3024756319', '7477317795', 199, '194.821', '', '104.56', '', '4.179', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-15 07:06:12', '59818332', '250358686,', 200, 'Recharge Success'),
(204, '3003076508', '8888175682', 300, '294.33', '', '8471.8985', '2.43', '5.67', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-15 08:36:11', '59839284', '50412211', 200, 'Recharge Success'),
(205, '02137284506', '9064084470', 235, '230.5585', '', '1732.1597', '1.9035', '4.4415', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-15 08:58:19', '59842717', 'ROER69669545', 200, 'Recharge Success'),
(206, '1023470659', '8888175682', 250, '245.275', '', '8226.6235', '2.025', '4.725', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-15 09:10:12', '59844366', 'TP1803151149865405', 200, 'Recharge Success'),
(207, '01525959688', '9064084470', 495, '485.6445', '', '1246.5152', '4.0095', '9.3555', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-15 09:26:12', '59846377', 'ROER69674218', 200, 'Recharge Success'),
(208, '1215722842', '8750264893', 100, '97.84', '', '25.256', '0.24', '2.16', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-16 07:44:17', '59854457', 'TP1803161149923368', 200, 'Recharge Success'),
(209, '01521138536', '8455062126', 200, '195.8', '', '59.45', '', '4.2', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-16 09:33:45', '59863662', 'ROER69685101', 200, 'Recharge Success'),
(210, '9874488496', '9038695445', 10, '9.88', '40.8', '30.92', '0.03', '0.12', 'VIDEOCON DTH', 'REFUND', 'pro', '2018-03-16 05:28:28', '59950928', '0', 112, 'Invalid order id'),
(211, '1164690065', '8011259330', 259, '252.784', '2580.32', '2327.536', '', '6.216', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-16 05:40:23', '59953577', '0', 112, 'Invalid order id'),
(212, '1164690065', '8011259330', 259, '252.784', '2580.32', '2327.536', '', '6.216', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-16 05:40:55', '59953663', '0', 112, 'Invalid order id'),
(213, '1164690065', '8011259330', 259, '252.784', '2580.32', '2327.536', '', '6.216', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-16 05:41:44', '59953882', '0', 114, 'Invalid order id'),
(254, '149904382', '9141437070', 100, '100', '1197', '1097', '2.4', '0', 'VIDEOCON DTH', 'REFUND', 'pro', '2018-03-18 10:58:29', '60170674', '0', 112, 'Invalid order id'),
(214, '3021838317', '9885099678', 300, '293.7', '4082.019', '3788.319', '', '6.3', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-16 05:55:05', '59956960', '0', 112, 'Invalid order id'),
(215, '10530404937', '9848004537', 159, '155.661', '1614.989', '1459.328', '', '3.339', 'SUN DTH', 'REFUND', 'pro', '2018-03-16 05:55:58', '59957107', '0', 112, 'Invalid order id'),
(216, '10530404937', '9848004537', 159, '155.661', '1614.989', '1459.328', '', '3.339', 'SUN DTH', 'REFUND', 'pro', '2018-03-16 06:00:37', '59958011', '0', 112, 'Invalid order id'),
(217, '21291400', '9885099678', 100, '97.9', '4082.019', '3984.119', '', '2.1', 'VIDEOCON DTH', 'REFUND', 'pro', '2018-03-16 06:28:51', '59964617', '0', 114, 'Invalid order id'),
(218, '01523518504', '9885099678', 283, '277.057', '4082.019', '3804.962', '', '5.943', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-16 06:44:34', '59968696', 'ROER69758101', 200, 'Recharge Success'),
(219, '02513138836', '7477317795', 141, '138.039', '1165.129', '1027.09', '', '2.961', 'DISH DTH', 'REFUND', 'pro', '2018-03-16 07:44:20', '59984539', '0', 112, 'Invalid order id'),
(220, '1016169391', '8011259330', 200, '195.2', '2472.96', '2277.76', '', '4.8', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-16 08:15:34', '59992678', '0', 112, 'Invalid order id'),
(221, '01523797414', '9953402294', 398, '390.3584', '653.2896', '262.9312', '1.9104', '7.6416', 'DISH DTH', 'REFUND', 'pro', '2018-03-16 08:35:13', '59997532', '0', 112, 'Invalid order id'),
(222, '52981217', '9141437070', 198, '198', '2001', '1803', '4.752', '0', 'VIDEOCON DTH', 'SUCCESS', 'pro', '2018-03-17 02:11:25', '60071644', '3122662202', 200, 'Recharge Success'),
(223, '1002661237', '9141437070', 228, '228', '1673', '1445', '5.472', '0', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-17 03:51:58', '60080750', 'TP1803171150600844', 200, 'Recharge Success'),
(224, '1201430889', '9885099678', 100, '97.9', '3707.062', '3609.162', '', '2.1', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-17 04:44:35', '60086972', '0', 112, 'Invalid order id'),
(225, '3019231071', '9885099678', 300, '293.7', '3707.062', '3413.362', '', '6.3', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-17 05:51:42', '60096776', '255641303', 200, 'Recharge Success'),
(226, '01525908047', '9885099678', 100, '97.9', '3413.362', '3315.462', '', '2.1', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-17 05:59:17', '60098162', 'ROER69881672', 200, 'Recharge Success'),
(227, '01509256277', '9706901319', 200, '195.2', '416.752', '221.552', '', '4.8', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-17 06:34:26', '60106319', 'ROER69891842', 200, 'Recharge Success'),
(228, '01523797414', '9953402294', 398, '390.3584', '623.8656', '233.5072', '1.9104', '7.6416', 'DISH DTH', 'REFUND', 'pro', '2018-03-17 06:50:11', '60110849', '0', 112, 'Invalid order id'),
(229, '3012547958', '9831305864', 200, '195.2', '746.032', '550.832', '', '4.8', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-17 07:02:51', '60114322', '0', 112, 'Invalid order id'),
(230, '3025091580', '9848004537', 160, '156.64', '1605.199', '1448.559', '', '3.36', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-17 07:40:59', '60125045', '0', 112, 'Invalid order id'),
(231, '1142270345', '9707490933', 100, '98.08', '514.2004', '416.1204', '0.48', '1.92', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-17 08:09:55', '60131391', 'TP1803171150812001', 200, 'Recharge Success'),
(232, '52061098', '9885099678', 330, '323.07', '3286.092', '2963.022', '', '6.93', 'VIDEOCON DTH', 'SUCCESS', 'pro', '2018-03-17 08:13:50', '60132117', '3122941929', 200, 'Recharge Success'),
(233, '01510408212', '8888175682', 199, '195.2389', '7791.137', '7595.8981', '1.6119', '3.7611', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-17 08:21:37', '60133502', 'ROER69931838', 200, 'Recharge Success'),
(234, '1210776314', '9265066057', 300, '293.52', '314.104', '20.584', '1.62', '6.48', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-17 08:33:17', '60135651', 'TP1803171150835773', 200, 'Recharge Success'),
(235, '100923900', '9141437070', 248, '248', '1445', '1197', '5.952', '0', 'VIDEOCON DTH', 'SUCCESS', 'pro', '2018-03-17 08:44:57', '60137484', '3122971562', 200, 'Recharge Success'),
(236, '66041556', '9141437070', 378, '378', '1197', '819', '9.072', '0', 'VIDEOCON DTH', 'REFUND', 'pro', '2018-03-17 08:45:36', '60137600', '0', 114, 'Invalid order id'),
(237, '66041556', '9141437070', 378, '378', '1197', '819', '9.072', '0', 'VIDEOCON DTH', 'REFUND', 'pro', '2018-03-17 08:46:32', '60137764', '0', 112, 'Invalid order id'),
(238, '10530391621', '9141437070', 1103, '1103', '1197', '94', '26.472', '0', 'SUN DTH', 'REFUND', 'pro', '2018-03-17 08:47:41', '60137961', '0', 112, 'Invalid order id'),
(239, '3007481471', '9706901319', 199, '194.224', '221.552', '27.328', '', '4.776', 'AIRTEL DTH', 'Disputed', 'pro', '2018-03-17 08:55:20', '60139194', '0', 112, 'Invalid order id'),
(240, '66041556', '9141437070', 378, '378', '1197', '819', '9.072', '0', 'VIDEOCON DTH', 'REFUND', 'pro', '2018-03-17 09:01:03', '60140043', '0', 112, 'Invalid order id'),
(241, '3008014282', '8482820036', 200, '195.2', '1840.768', '1645.568', '', '4.8', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-17 09:09:27', '60141050', '0', 112, 'Invalid order id'),
(242, '01524210397', '8888175682', 200, '196.22', '7497.7881', '7301.5681', '1.62', '3.78', 'DISH DTH', 'Disputed', 'pro', '2018-03-17 09:12:36', '60141461', '0', 112, 'Invalid order id'),
(243, '01524210397', '8888175682', 300, '294.33', '7497.7881', '7203.4581', '2.43', '5.67', 'DISH DTH', 'Disputed', 'pro', '2018-03-17 09:14:17', '60141691', '0', 112, 'Invalid order id'),
(244, '3017058970', '9885099678', 300, '293.7', '2714.356', '2420.656', '', '6.3', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-17 09:32:58', '60143672', '0', 112, 'Invalid order id'),
(245, '1102733100', '8482820036', 299, '291.824', '1788.064', '1496.24', '', '7.176', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-17 09:42:30', '60144619', '0', 112, 'Invalid order id'),
(246, '1102733100', '8482820036', 299, '291.824', '1788.064', '1496.24', '', '7.176', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-17 09:45:42', '60144859', '0', 112, 'Invalid order id'),
(247, '1201790407', '8888175682', 300, '294.33', '7497.7881', '7203.4581', '2.43', '5.67', 'TATA SKY DTH', 'Disputed', 'pro', '2018-03-17 09:45:53', '60144889', '0', 112, 'Invalid order id'),
(248, '01516768691', '9941520948', 100, '97.9', '911.617', '813.717', '', '2.1', 'DISH DTH', 'REFUND', 'pro', '2018-03-17 10:16:53', '60147217', '0', 112, 'Invalid order id'),
(249, '66041556', '9141437070', 378, '378', '1197', '819', '9.072', '0', 'VIDEOCON DTH', 'REFUND', 'pro', '2018-03-17 11:49:00', '60149834', '0', 112, 'Invalid order id'),
(250, '1210834972', '9848004537', 260, '254.54', '1605.199', '1350.659', '', '5.46', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-18 08:48:55', '60156544', '0', 114, 'Invalid order id'),
(251, '1210834972', '9848004537', 260, '254.54', '1605.199', '1350.659', '', '5.46', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-18 09:11:20', '60159024', '0', 112, 'Invalid order id'),
(252, '42509304004', '9141437070', 259, '259', '1197', '938', '6.216', '0', 'SUN DTH', 'REFUND', 'pro', '2018-03-18 09:29:46', '60160619', '0', 112, 'Invalid order id'),
(253, '1132416254', '8011259330', 200, '195.2', '1844.496', '1649.296', '', '4.8', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-18 10:32:18', '60167348', '0', 114, 'Invalid order id'),
(255, '3007481471', '9706901319', 199, '194.224', '221.552', '27.328', '', '4.776', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-18 11:08:44', '60171907', '250956668,', 200, 'Recharge Success'),
(256, '1132416254', '8011259330', 200, '195.2', '1844.496', '1649.296', '', '4.8', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-18 11:31:17', '60174506', 'TP1803181151019352', 200, 'Recharge Success'),
(257, '01527303834', '8888175682', 180, '176.598', '7497.7881', '7321.1901', '1.458', '3.402', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-18 11:59:41', '60177863', 'ROER69979972', 200, 'Recharge Success'),
(258, '01524210397', '8888175682', 200, '196.22', '7321.1901', '7124.9701', '1.62', '3.78', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-18 12:33:39', '60181080', 'ROER69985495', 200, 'Recharge Success'),
(259, '1201790407', '8888175682', 300, '294.33', '7124.9701', '6830.6401', '2.43', '5.67', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-18 12:35:48', '60181271', 'TP1803181151061512', 200, 'Recharge Success'),
(260, '3017625688', '9141437070', 238, '238', '1197', '959', '5.712', '0', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-18 12:37:25', '60181407', '250981327', 200, 'Recharge Success'),
(261, '3021985549', '9141437070', 198, '198', '959', '761', '4.752', '0', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-18 02:13:32', '60190759', '251008003', 200, 'Recharge Success'),
(262, '3023402599', '9880609360', 200, '195.2', '871.12', '675.92', '', '4.8', 'SUN DTH', 'REFUND', 'pro', '2018-03-18 03:32:54', '60198237', '0', 112, 'Invalid order id'),
(263, '3023402599', '9880609360', 200, '195.2', '871.12', '675.92', '', '4.8', 'SUN DTH', 'REFUND', 'pro', '2018-03-18 03:34:28', '60198396', '0', 112, 'Invalid order id'),
(264, '1002812624', '9141437070', 298, '298', '761', '463', '7.152', '0', 'TATA SKY DTH', 'SUCCESS', 'pro', '2018-03-18 04:52:14', '60207672', 'TP1803181151185577', 200, 'Recharge Success'),
(265, '115772479', '9141437070', 398, '398', '463', '65', '9.552', '0', 'VIDEOCON DTH', 'SUCCESS', 'pro', '2018-03-18 04:55:07', '60208168', '3125121363', 200, 'Recharge Success'),
(266, '01500847279', '9348202220', 200, '198.38', '953.081', '754.701', '3.78', '1.62', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-18 05:13:39', '60211410', 'ROER70016327', 200, 'Recharge Success'),
(267, '3024418984', '9848004537', 160, '156.64', '1595.409', '1438.769', '', '3.36', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-18 05:32:50', '60215199', '255903308', 200, 'Recharge Success'),
(268, '3018283290', '9885099678', 200, '195.8', '1313.526', '1117.726', '', '4.2', 'AIRTEL DTH', 'REFUND', 'pro', '2018-03-18 06:09:38', '60223487', '0', 112, 'Invalid order id'),
(269, '89829645', '9101005762', 500, '490.4', '2480.232', '1989.832', '2.4', '9.6', 'VIDEOCON DTH', 'SUCCESS', 'pro', '2018-03-18 06:28:40', '60228291', '3125179721', 200, 'Recharge Success'),
(270, '02511582984', '8011259330', 300, '292.8', '1600.496', '1307.696', '', '7.2', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-18 06:30:56', '60228984', 'ROER70033064', 200, 'Recharge Success'),
(271, '3023830454', '9848004537', 160, '156.64', '1438.769', '1282.129', '', '3.36', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-18 06:50:52', '60234570', '251081626', 200, 'Recharge Success'),
(272, '01524824346', '8011259330', 270, '263.52', '1132.992', '869.472', '', '6.48', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-18 06:58:42', '60236727', 'ROER70042192', 200, 'Recharge Success'),
(273, '3018708923', '9885099678', 160, '156.64', '1108.915', '952.275', '', '3.36', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-18 07:26:21', '60245236', '251103136', 200, 'Recharge Success'),
(274, '1126317567', '8011259330', 500, '488', '849.952', '361.952', '', '12', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-18 07:40:36', '60249913', '0', 112, 'Invalid order id'),
(275, '1126317567', '8011259330', 500, '488', '849.952', '361.952', '', '12', 'TATA SKY DTH', 'REFUND', 'pro', '2018-03-18 07:41:41', '60250236', '0', 112, 'Invalid order id'),
(276, '41232117766', '9848004537', 159, '155.661', '1282.129', '1126.468', '', '3.339', 'SUN DTH', 'SUCCESS', 'pro', '2018-03-18 07:42:33', '60250549', '187936000', 200, 'Recharge Success'),
(277, '015246647696', '8670706976', 180, '175.68', '1751.152', '1575.472', '', '4.32', 'DISH DTH', 'REFUND', 'pro', '2018-03-18 08:03:38', '60256175', '0', 112, 'Invalid order id'),
(278, '01526048201', '9953402294', 293, '287.3744', '409.0704', '121.696', '1.4064', '5.6256', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-18 08:06:30', '60256837', 'ROER70064795', 200, 'Recharge Success'),
(279, '3010145709', '7001688783', 150, '150', '431.0664', '281.0664', '4.05', '0', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-18 08:10:23', '60257791', '251122946,', 200, 'Recharge Success'),
(280, '01524664769', '8670706976', 180, '175.68', '1751.152', '1575.472', '', '4.32', 'DISH DTH', 'SUCCESS', 'pro', '2018-03-18 08:12:19', '60258293', 'ROER70066295', 200, 'Recharge Success'),
(281, '3024483379', '9848004537', 160, '156.64', '1126.468', '969.828', '', '3.36', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-18 08:42:27', '60265595', '251133894', 200, 'Recharge Success'),
(282, '3010469956', '9101005762', 150, '147.12', '1989.832', '1842.712', '0.72', '2.88', 'AIRTEL DTH', 'SUCCESS', 'pro', '2018-03-18 08:52:46', '60267705', '256018342', 200, 'Recharge Success'),
(283, '42704550864', '9848004537', 159, '155.661', '969.828', '814.167', '', '3.339', 'SUN DTH', 'SUCCESS', 'pro', '2018-03-18 09:52:17', '60275558', '187943694', 200, 'Recharge Success');

-- --------------------------------------------------------

--
-- Table structure for table `electric`
--

CREATE TABLE IF NOT EXISTS `electric` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `amount` int(11) NOT NULL,
  `charge` varchar(100) NOT NULL,
  `old_balance` varchar(100) NOT NULL,
  `current_balance` varchar(100) NOT NULL,
  `dist_comm` varchar(30) NOT NULL,
  `agent_comm` varchar(30) NOT NULL,
  `operatorName` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL,
  `mode` varchar(100) NOT NULL,
  `date` varchar(200) NOT NULL,
  `orderId` varchar(20) NOT NULL,
  `opTxid` varchar(20) NOT NULL,
  `errorCode` int(11) NOT NULL,
  `resText` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `electric`
--

INSERT INTO `electric` (`id`, `mobile`, `username`, `amount`, `charge`, `old_balance`, `current_balance`, `dist_comm`, `agent_comm`, `operatorName`, `status`, `mode`, `date`, `orderId`, `opTxid`, `errorCode`, `resText`) VALUES
(32, '021528796238/4175/06', '8879343340', 100, '', '', '', '', '', 'MSEDC - MAHARASHTRA', 'REFUND', 'pro', '2018-03-09 06:16:38', '58845469', '', 204, 'Recharge Failed'),
(33, '021528796238/06/4175', '8879343340', 100, '', '', '', '', '', 'MSEDC - MAHARASHTRA', 'REFUND', 'pro', '2018-03-09 06:17:24', '58845547', '', 204, 'Recharge Failed'),
(40, '049087011835', '8482971244', 240, '', '', '', '', '', 'MSEDC - MAHARASHTRA', 'REFUND', 'pro', '2018-03-11 06:29:12', '59176518', '0', 112, 'Invalid order id'),
(39, '049087011835', '8482971244', 240, '', '', '', '', '', 'MSEDC - MAHARASHTRA', 'Disputed', 'pro', '2018-03-11 06:28:42', '59176311', '0', 112, 'Invalid order id'),
(41, '54687134', '9038695445', 10, '', '', '', '0.8', '2.8', 'Ajmer Vidyut Vitran Nigam - RAJASTHAN', 'REFUND', 'pro', '2018-03-12 05:33:33', '59303324', '', 204, 'Recharge Failed'),
(42, '2598787bkj8jh78i7u97oio', '9038695445', 10, '', '', '', '0.6', '2.6', 'Ajmer Vidyut Vitran Nigam - RAJASTHAN', 'REFUND', 'pro', '2018-03-12 06:06:48', '59309908', '0', 112, 'Invalid order id'),
(43, '102034251', '8801009880', 10, '', '', '', '2', '', 'Southern Power - TELANGANA', 'REFUND', 'pro', '2018-03-12 07:51:44', '59335434', '', 204, 'Recharge Failed'),
(44, '3790650000', '9516435029', 136, '', '', '', '2', '', 'Madhya Kshetra Vitaran - MADHYA PRADESH', 'REFUND', 'pro', '2018-03-13 11:02:02', '59405705', '', 204, 'Recharge Failed'),
(45, '3790650000', '9516435029', 136, '', '', '', '2', '', 'Madhya Kshetra Vitaran - MADHYA PRADESH', 'REFUND', 'pro', '2018-03-13 11:04:20', '59406184', '', 204, 'Recharge Failed'),
(46, '3790650000', '9516435029', 136, '', '', '', '2', '', 'Madhya Kshetra Vitaran - MADHYA PRADESH', 'REFUND', 'pro', '2018-03-13 06:31:29', '59492401', '', 204, 'Recharge Failed'),
(47, '055000017207', '9101005762', 10, '', '', '', '0.6', '2.6', 'APDCL - ASSAM', 'REFUND', '', '2018-03-13 06:35:18', '59493569', '', 204, 'Recharge Failed'),
(48, '3790650000', '9516435029', 136, '', '', '', '2', '', 'Madhya Kshetra Vitaran - MADHYA PRADESH', 'REFUND', 'pro', '2018-03-14 11:10:06', '59566925', '', 204, 'Recharge Failed'),
(49, '4198495675', '7501507003', 10, '10', '', '', '0.4', '2.4', 'Ajmer Vidyut Vitran Nigam - RAJASTHAN', 'REFUND', 'pro', '2018-03-14 05:58:30', '59623496', '', 204, 'Recharge Failed'),
(50, '548451545848787', '7501507003', 10, '12.4', '', '', '0.4', '2.4', 'Adani Gas', 'REFUND', 'pro', '2018-03-14 06:05:37', '', '0', 112, 'Invalid order id'),
(51, '548451545848787', '7501507003', 10, '12.4', '', '', '0.4', '2.4', 'Adani Gas', 'REFUND', 'pro', '2018-03-14 06:09:45', '', '0', 112, 'Invalid order id'),
(52, '548451545848787', '7501507003', 10, '12.4', '', '', '0.4', '2.4', 'Adani Gas', 'REFUND', 'pro', '2018-03-14 06:11:04', '', '0', 112, 'Invalid order id'),
(53, '4198495675', '7501507003', 10, '12.4', '', '', '0.4', '2.4', 'Ajmer Vidyut Vitran Nigam - RAJASTHAN', 'REFUND', 'pro', '2018-03-14 06:14:48', '59627615', '', 204, 'Recharge Failed'),
(54, '51000423174', '9707490933', 55, '57.83', '', '', '0.6', '2.6', 'APDCL - ASSAM', 'REFUND', 'pro', '2018-03-14 06:15:03', '59627684', '', 204, 'Recharge Failed'),
(55, '9874488496', '9038695445', 10, '12.6', '', '1185.76', '0.6', '2.6', 'Ajmer Vidyut Vitran Nigam - RAJASTHAN', 'REFUND', 'pro', '2018-03-15 11:59:46', '59732388', '', 204, 'Recharge Failed'),
(56, '123123123123', '9880609360', 231, '233', '', '737.72', '', '2', 'BESCOM - BENGALURU', 'REFUND', 'pro', '2018-03-15 03:31:57', '59771216', '', 204, 'Recharge Failed'),
(57, '055000017270', '9101005762', 82, '84.6', '1553.248', '1468.648', '', '', 'APDCL - ASSAM', 'REFUND', 'pro', '2018-03-18 08:26:25', '60154367', '0', 112, 'Invalid order id'),
(58, '055000017270', '9101005762', 82, '84.6', '1550.648', '1466.048', '', '', 'APDCL - ASSAM', 'REFUND', 'pro', '2018-03-18 08:28:30', '60154547', '0', 112, 'Invalid order id'),
(59, '178254', '9844198679', 249, '251', '1951.2', '1700.2', '', '', 'BESCOM - BENGALURU', 'Disputed', 'pro', '2018-03-18 08:39:40', '60155704', '0', 112, 'Invalid order id'),
(60, '055000017270', '9101005762', 82, '84.6', '2505.048', '2420.448', '', '', 'APDCL - ASSAM', 'REFUND', 'pro', '2018-03-18 08:41:30', '60155883', '0', 112, 'Invalid order id'),
(61, '055000017270', '9101005762', 82, '84.6', '2502.448', '2417.848', '', '', 'APDCL - ASSAM', 'REFUND', 'pro', '2018-03-18 09:10:43', '60158915', '0', 114, 'Invalid order id'),
(62, '301195587', '8670706976', 10, '12', '1780.48', '1768.48', '', '', 'CESC - WEST BENGAL', 'REFUND', 'pro', '2018-03-18 05:55:50', '60220088', '', 204, 'Recharge Failed'),
(63, '178254', '9844198679', 294, '296', '1566.16', '1270.16', '', '', 'BESCOM - BENGALURU', 'REFUND', 'pro', '2018-03-19 07:33:20', '60281746', '', 204, 'Recharge Failed'),
(64, '178254', '9844198679', 294, '296', '1564.16', '1268.16', '', '', 'BESCOM - BENGALURU', 'REFUND', 'pro', '2018-03-19 08:46:21', '60287626', '', 204, 'Recharge Failed');

-- --------------------------------------------------------

--
-- Table structure for table `gas`
--

CREATE TABLE IF NOT EXISTS `gas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `charge` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `old_balance` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `current_balance` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dist_comm` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `agent_comm` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `operatorName` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `benifit` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mode` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `orderId` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `opTxid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `errorCode` int(11) NOT NULL,
  `resText` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `gas`
--

INSERT INTO `gas` (`id`, `mobile`, `username`, `amount`, `charge`, `old_balance`, `current_balance`, `dist_comm`, `agent_comm`, `operatorName`, `benifit`, `status`, `mode`, `date`, `orderId`, `opTxid`, `errorCode`, `resText`) VALUES
(29, '5484515458', '7501507003', 10, '12.4', '', '', '0.4', '2.4', 'Adani Gas', '', 'REFUND', 'pro', '2018-03-14 06:12:43', '59627082', '', 204, 'Recharge Failed'),
(30, '8759759506', '9038695445', 10, '12.6', '', '1173.16', '0.6', '2.6', 'Haryana City Gas', '', 'REFUND', 'pro', '2018-03-15 12:00:27', '59732578', '', 204, 'Recharge Failed');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE IF NOT EXISTS `insurance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `amount` int(11) NOT NULL,
  `charge` varchar(100) NOT NULL,
  `old_balance` varchar(100) NOT NULL,
  `current_balance` varchar(100) NOT NULL,
  `dist_comm` varchar(30) NOT NULL,
  `agent_comm` varchar(30) NOT NULL,
  `operatorName` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL,
  `mode` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `orderId` varchar(20) NOT NULL,
  `opTxid` varchar(20) NOT NULL,
  `errorCode` int(11) NOT NULL,
  `resText` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`id`, `mobile`, `username`, `amount`, `charge`, `old_balance`, `current_balance`, `dist_comm`, `agent_comm`, `operatorName`, `status`, `mode`, `date`, `orderId`, `opTxid`, `errorCode`, `resText`) VALUES
(11, '23319094', '9038695445', 10, '', '', '', '0.8', '2.8', 'Bharti AXA Life Insurance', 'REFUND', '', '2018-03-12 04:13:05', '59291779', '0', 114, 'Invalid order id'),
(12, '23319094', '9038695445', 10, '', '', '', '', '', 'Bharti AXA Life Insurance', 'REFUND', '', '2018-03-12 04:15:59', '59292145', '', 204, 'Recharge Failed'),
(13, '23319094', '9038695445', 10, '', '', '', '2', '', 'Bharti AXA Life Insurance', 'REFUND', 'pro', '2018-03-12 04:19:34', '59292490', '0', 112, 'Invalid order id'),
(14, '126345654546', '7501507003', 10, '12.4', '', '', '0.4', '2.4', 'Bharti AXA Life Insurance', 'REFUND', 'pro', '2018-03-14 06:13:41', '59627322', '', 204, 'Recharge Failed'),
(15, '8759759506', '9038695445', 10, '12.6', '', '1170.56', '0.6', '2.6', 'Bharti AXA Life Insurance', 'REFUND', 'pro', '2018-03-15 12:01:48', '59732912', '', 204, 'Recharge Failed'),
(16, '528453145454', '9038695445', 10, '12.6', '', '1167.96', '0.6', '2.6', 'Tata AIA Life Insurance', 'REFUND', 'pro', '2018-03-15 12:05:55', '59733821', '', 204, 'Recharge Failed');

-- --------------------------------------------------------

--
-- Table structure for table `land_line`
--

CREATE TABLE IF NOT EXISTS `land_line` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `charge` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `old_balance` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `current_balance` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dist_comm` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `agent_comm` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `operatorName` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `benifit` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mode` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `orderId` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `opTxid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `errorCode` int(11) NOT NULL,
  `resText` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=33 ;

--
-- Dumping data for table `land_line`
--

INSERT INTO `land_line` (`id`, `mobile`, `username`, `amount`, `charge`, `old_balance`, `current_balance`, `dist_comm`, `agent_comm`, `operatorName`, `benifit`, `status`, `mode`, `date`, `orderId`, `opTxid`, `errorCode`, `resText`) VALUES
(29, '6589787641', '7501507003', 10, '10', '', '', '0', '0', 'RELIANCE INFOCOM LANDLINE', '', 'REFUND', '', '2018-03-14 05:51:03', '59621983', '0', 112, 'Invalid order id'),
(30, '2598798789', '7501507003', 10, '10', '', '', '0', '0', 'RELIANCE INFOCOM LANDLINE', '', 'REFUND', 'pro', '2018-03-14 05:54:09', '59622612', '0', 112, 'Invalid order id'),
(31, '898787545', '7501507003', 10, '9.91', '', '', '0.01', '0.09', 'RELIANCE INFOCOM LANDLINE', '', 'REFUND', 'pro', '2018-03-14 05:57:31', '59623270', '0', 112, 'Invalid order id'),
(32, '9874488496', '9038695445', 10, '10', '', '1188.36', '0', '0', 'TATA DOCOMO CDMA LANDLINE', '', 'REFUND', 'pro', '2018-03-15 11:56:36', '59731622', '0', 112, 'Invalid order id');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `operator` varchar(100) NOT NULL,
  `trial` varchar(100) NOT NULL,
  `basic` varchar(100) NOT NULL,
  `pro` varchar(100) NOT NULL,
  PRIMARY KEY (`operator`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`operator`, `trial`, `basic`, `pro`) VALUES
('vodafone', '4', '3', '3'),
('Uninor Special', '4', '3', '4'),
('Uninor', '4', '3', '4'),
('Tata Indicom', '4', '3', '4'),
('Tata Docomo Topup', '4', '3', '4'),
('Tata Docomo Special', '4', '3', '4'),
('TATA DOCOMO CDMA LANDLINE', '4', '3', '4'),
('Reliance Jio', '4', '3', '5'),
('Reliance GSM', '4', '3', '4'),
('Reliance CDMA', '4', '3', '4'),
('MTS', '4', '3', '4'),
('Loop Mobile', '4', '3', '4'),
('Idea', '4', '3', '3'),
('Bsnl Topup', '4', '3', '4'),
('Airtel', '4', '3', '3'),
('Aircel', '4', '3', '4'),
('VIDEOCON DTH', '3', '2', '3'),
('TATA SKY DTH', '3', '2', '3'),
('SUN DTH', '3', '2', '3'),
('DISH DTH', '3', '2', '3'),
('BIG TV DTH', '3', '2', '3'),
('AIRTEL DTH', '3', '2', '3'),
('Vodafone Postpaid', '2', '1', '2'),
('Vodafone 3G', '2', '1', '2'),
('TIKONA INTERNET LANDLINE', '2', '1', '2'),
('Tata Walky Postpaid', '2', '1', '2'),
('Tata Photon+', '2', '1', '2'),
('Tata Photon Whiz', '2', '1', '2'),
('Tata Indicom Postpaid', '2', '1', '2'),
('Tata Docomo GSM Postpaid', '2', '1', '2'),
('Reliance NetConnect+', '2', '1', '2'),
('Reliance NetConnect 3G', '2', '1', '2'),
('Reliance NetConnect', '2', '1', '2'),
('RELIANCE INFOCOM LANDLINE', '2', '1', '2'),
('Reliance GSM Postpaid', '2', '1', '2'),
('Reliance CDMA Postpaid', '2', '1', '2'),
('MTS MBrowse', '2', '1', '2'),
('MTS MBlaze', '2', '1', '2'),
('MTNL Mumbai Datacard', '2', '1', '2'),
('MTNL DELHI LANDLINE', '2', '1', '2'),
('MTNL Delhi Datacard', '2', '1', '2'),
('Loop Postpaid', '2', '1', '2'),
('Idea Postpaid', '2', '1', '2'),
('Bsnl Postpaid', '2', '1', '2'),
('BSNL LANDLINE', '2', '1', '2'),
('BSNL Datacard', '2', '1', '2'),
('Airtel Postpaid', '2', '1', '2'),
('AIRTEL LANDLINE', '2', '1', '2'),
('Aircel Pocket Internet', '2', '1', '2'),
('Bsnl Special', '4', '2', '4');

-- --------------------------------------------------------

--
-- Table structure for table `postpaid`
--

CREATE TABLE IF NOT EXISTS `postpaid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `charge` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `old_balance` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `current_balance` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dist_comm` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `agent_comm` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `operatorName` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `benifit` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mode` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `orderId` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `opTxid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `errorCode` int(11) NOT NULL,
  `resText` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6000 ;

-- --------------------------------------------------------

--
-- Table structure for table `recharge`
--

CREATE TABLE IF NOT EXISTS `recharge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `charge` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `old_balance` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `current_balance` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dist_comm` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `agent_comm` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `operatorName` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `benifit` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mode` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `orderId` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `opTxid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `errorCode` int(11) NOT NULL,
  `resText` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1723 ;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rtyp` varchar(255) NOT NULL,
  `num` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `typ` varchar(255) NOT NULL,
  `usr` varchar(255) NOT NULL,
  `tm` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `frm` varchar(255) NOT NULL,
  `trx` varchar(255) NOT NULL,
  `dtm` varchar(255) NOT NULL,
  `msg` blob,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `rtyp`, `num`, `amount`, `typ`, `usr`, `tm`, `status`, `frm`, `trx`, `dtm`, `msg`) VALUES
(1, 'Mobile Recharge', '01818606162', '20', 'Prepaid', '11', '1463856268', '1', 'Test', 'Test', '1463856564', 0x54657374),
(2, 'Mobile Recharge', '01616606162', '49', 'Prepaid', '13', '1463856407', '2', '', '', '1463856458', 0x54657374),
(3, 'Mobile Recharge', '01818606162', '100', 'Prepaid', '12', '1463856577', '2', '', '', '1463856615', 0x5465737420),
(4, 'Mobile Recharge', '01732050900', '400', 'Prepaid', '14', '1463858295', '1', '0998', 'BD71052201210002', '1463858683', 0x5375636365737366756c),
(5, 'Mobile Recharge', '01916211551', '200', 'Prepaid', '14', '1463858675', '1', '7494', 'AB052201260002', '1463858865', 0x5375636365737366756c),
(6, 'bKash', '01865709999', '10200', 'Personal', '15', '1463892385', '1', '1388', '4815335637', '1463893273', 0x5375636365737366756c20),
(7, 'bKash', '01795313974', '2040', 'Personal', '14', '1463900824', '1', '9924', '4816218107', '1463900933', 0x5375636365737366756c20),
(8, 'bKash', '01865915436', '5100', 'Personal', '14', '1463907257', '1', '9944', '4816846392', '1463908475', 0x5375636365737366756c20),
(9, 'bKash', '01858659658', '2040', 'Personal', '22', '1463911835', '1', '9924', '4817146841', '1463912135', 0x636f6d706c65746564),
(10, 'bKash', '01821997454', '25000', 'Personal', '22', '1463911898', '2', '', '', '1463912026', 0x6c696d697420657863656564656420),
(11, 'bKash', '01720293406', '10200', 'Personal', '22', '1463911995', '1', '9924', '4817161907', '1463912307', 0x636f6d706c65746564),
(12, 'bKash', '01687512872', '1020', 'Personal', '22', '1463935573', '1', '9924', '4820090542', '1463936173', 0x5375636365737366756c20),
(13, 'bKash', '01752291220', '8160', 'Personal', '25', '1463950452', '1', '9924', '4820440862', '1463959040', 0x5375636365737366756c20),
(14, 'bKash', '01821997454', '25000', 'Personal', '22', '1463969837', '1', '9924', '4821020493', '1463976260', 0x5375636365737366756c20),
(15, 'bKash', '01912318545 ', '10200', 'Personal', '24', '1463978631', '1', '9924', '4821304254', '1463979009', 0x5375636365737366756c20),
(16, 'bKash', '01748916987', '10200', 'Personal', '14', '1463985810', '1', '9924', '4822024932', '1463986677', 0x5375636365737366756c20),
(17, 'bKash', '01718033709', '3060', 'Personal', '14', '1463990696', '1', '9924', '4822301946', '1463990931', 0x5375636365737366756c20),
(18, 'bKash', '01865709999', '15300', 'Personal', '15', '1463996855', '1', '3890', '4822697719', '1463997321', 0x5375636365737366756c20),
(19, 'bKash', '01869348210', '5100', 'Personal', '22', '1464010371', '1', '9924', '4824227066', '1464010589', 0x5375636365737366756c20),
(20, 'bKash', '01825593606', '2040', 'Personal', '22', '1464011623', '2', '', '', '1464012139', 0x496e76616c696420626b617368204163636f756e74204e6f),
(21, 'bKash', '01820548561', '3060', 'Personal', '22', '1464012163', '1', '9924', '4824527597', '1464012281', 0x5375636365737366756c20),
(22, 'bKash', '01863572761', '2040', 'Personal', '22', '1464013055', '1', '9924', '4824687160', '1464013204', 0x5375636365737366756c20),
(23, 'bKash', '01776703526', '2000', 'Personal', '16', '1464015757', '1', '9924', '4825091475', '1464016091', 0x5375636365737366756c20),
(24, 'Mobile Recharge', '01799642817', '200', 'Prepaid', '16', '1464038660', '1', '0998', 'BD81052408120171', '1464056037', 0x5375636365737366756c20),
(25, 'bKash', '01771717421', '3550', 'Personal', '22', '1464045883', '1', '9924', '4826242934', '1464056399', 0x5375636365737366756c20),
(26, 'bKash', '01624546044', '1530', 'Personal', '22', '1464046029', '1', '9924', '4826238949', '1464056303', 0x5375636365737366756c20),
(27, 'bKash', '01685134692', '2040', 'Personal', '22', '1464046099', '1', '9924', '4826238353', '1464056205', 0x5375636365737366756c20),
(28, 'bKash', '01738157710', '10200', 'Personal', '22', '1464046345', '1', '9924', '4826221247', '1464056098', 0x5375636365737366756c20),
(29, 'bKash', '01851119134', '5100', 'Personal', '16', '1464061455', '1', '3545', '4826650087', '1464061801', 0x5375636365737366756c20),
(30, 'bKash', '01727962232', '3060', 'Personal', '14', '1464068119', '1', '9924', '4827412081', '1464068815', 0x5375636365737366756c20),
(31, 'bKash', '01834842871', '25000', 'Personal', '14', '1464077846', '1', '9924', '4828212465', '1464077989', 0x5375636365737366756c20),
(32, 'bKash', '01774700688', '25000', 'Personal', '14', '1464077930', '1', '3890', '4828239951', '1464078356', 0x5375636365737366756c20),
(33, 'bKash', '01834842871', '1000', 'Personal', '14', '1464079693', '1', '6162', '4828365475', '1464080155', 0x5375636365737366756c20),
(34, 'bKash', '01711017870', '15300', 'Personal', '27', '1464085961', '1', '9924', '4828859534', '1464086445', 0x5375636365737366756c20),
(35, 'Mobile Recharge', '01736041795', '300', 'Prepaid', '16', '1464088438', '1', '0998', 'BD1105241710124', '1464088938', 0x5375636365737366756c20),
(36, 'bKash', '01758280598', '2040', 'Personal', '16', '1464090691', '1', '9924', '4829324669', '1464090835', 0x5375636365737366756c20),
(37, 'Mobile Recharge', '01882249870', '100', 'Prepaid', '22', '1464108704', '1', '4712', 'R160524.2254.130075', '1464108946', 0x5375636365737366756c20),
(38, 'Mobile Recharge', '01743174685', '200', 'Prepaid', '25', '1464119245', '1', '9698', 'BD81052506340037', '1464136576', 0x5375636365737366756c20),
(39, 'bKash', '01794314265', '10200', 'Personal', '22', '1464142897', '1', '9924', '4832395090', '1464143433', 0x5375636365737366756c20),
(40, 'bKash', '01780520227', '24500', 'Personal', '15', '1464147125', '1', '9924', '4832698529', '1464150941', 0x5375636365737366756c20),
(41, 'bKash', '01736800712', '15300', 'Personal', '26', '1464153806', '1', '9924', '4833475023', '1464154294', 0x5375636365737366756c20),
(42, 'bKash', '01712763430', '14280', 'Personal', '26', '1464165607', '1', '9924', '4834487519', '1464166064', 0x5375636365737366756c20),
(43, 'bKash', '01776703526', '3060', 'Personal', '16', '1464168855', '1', '9924', '4834725552', '1464176383', 0x5375636365737366756c20),
(44, 'Mobile Recharge', '01736615692', '211', 'Prepaid', '16', '1464184384', '1', '9698', 'BD51052519580164', '1464184775', 0x5375636365737366756c20),
(45, 'bKash', '01782121151', '1020', 'Personal', '16', '1464184736', '1', '9924', '4836593384', '1464184906', 0x5375636365737366756c20),
(46, 'bKash', '01728213004', '1020', 'Personal', '22', '1464187417', '1', '9924', '4837001612', '1464187830', 0x5375636365737366756c20),
(47, 'bKash', '01826138423', '10200', 'Personal', '26', '1464188742', '1', '9924', '4837283722', '1464190867', 0x5375636365737366756c20),
(48, 'bKash', '01617866680', '3060', 'Personal', '26', '1464188792', '1', '9924', '4837277097', '1464190765', 0x5375636365737366756c20),
(49, 'Mobile Recharge', '01798068346', '200', 'Prepaid', '14', '1464194529', '1', '9698', 'BD62052523110016', '1464196299', 0x5375636365737366756c20),
(50, 'Mobile Recharge', '01712617001', '200', 'Prepaid', '14', '1464194665', '1', '9698', 'BD92052523090123', '1464196220', 0x5375636365737366756c20),
(51, 'Mobile Recharge', '01747660439', '100', 'Prepaid', '14', '1464194731', '1', '9698', 'BD81052523080079', '1464196149', 0x5375636365737366756c20),
(52, 'Mobile Recharge', '01746048697', '100', 'Prepaid', '14', '1464194778', '1', '9698', 'BD91052523070005', '1464196057', 0x5375636365737366756c20),
(53, 'bKash', '01780520227', '16300', 'Personal', '30', '1464210957', '1', '9924', '4838147711', '1464227875', 0x5375636365737366756c20),
(54, 'bKash', '01791997602', '5100', 'Personal', '26', '1464238421', '1', '9924', '4839199443', '1464239321', 0x5375636365737366756c20),
(55, 'Mobile Recharge', '01912751111', '11', 'Prepaid', '1', '1464455903', '0', '', '', '', NULL),
(56, 'Mobile Recharge', '09874488496', '50', 'Prepaid', '1', '1512984032', '0', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `set_comm`
--

CREATE TABLE IF NOT EXISTS `set_comm` (
  `operator` varchar(200) NOT NULL,
  `0` int(20) NOT NULL,
  `10%` int(20) NOT NULL,
  `20%` int(20) NOT NULL,
  `30%` int(30) NOT NULL,
  `40%` int(40) NOT NULL,
  `50%` int(50) NOT NULL,
  `60%` int(60) NOT NULL,
  `70%` int(70) NOT NULL,
  `80%` int(80) NOT NULL,
  `90%` int(90) NOT NULL,
  `100%` int(100) NOT NULL,
  PRIMARY KEY (`operator`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `set_comm`
--

INSERT INTO `set_comm` (`operator`, `0`, `10%`, `20%`, `30%`, `40%`, `50%`, `60%`, `70%`, `80%`, `90%`, `100%`) VALUES
('vodafone', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Vodafone 3G', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Airtel', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Aircel', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Idea', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Bsnl Topup', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Bsnl Special', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Reliance CDMA', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Reliance GSM', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Tata Docomo Topup', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Tata Docomo Special', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Tata Indicom', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('MTS', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Uninor', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Uninor Special', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Loop Mobile', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Ajmer Vidyut Vitran Nigam - RAJASTHAN', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Adani Gas', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Vodafone Postpaid', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Airtel Postpaid', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Reliance Jio', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('VIDEOCON DTH', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('SUN DTH', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('BIG TV DTH', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('TATA SKY DTH', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('DISH DTH', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('AIRTEL DTH', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('APDCL - ASSAM', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('BESCOM - BENGALURU', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('BEST Undertaking - MUMBAI', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('BSES Rajdhani - DELHI', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('BSES Yamuna - DELHI', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('CESC - WEST BENGAL', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('CSEB - CHHATTISGARH', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('DHBVN - HARYANA', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('DNHPDCL - DADRA & NAGAR HAVELI', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('India Power', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Jaipur Vidyut Vitran Nigam - RAJASTHAN', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Jamshedpur Utilities & Services (JUSCO)', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Jodhpur Vidyut Vitran Nigam - RAJASTHAN', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Madhya Kshetra Vitaran - MADHYA PRADESH', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('MSEDC - MAHARASHTRA', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Noida Power - NOIDA', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Odisha Discoms - ODISHA', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Paschim Kshetra Vitaran - MADHYA PRADESH', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Reliance Energy - MUMBAI', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Southern Power - ANDHRA PRADESH', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Southern Power - TELANGANA', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Tata Power - DELHI', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Torrent Power', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('TSECL - TRIPURA', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('MTS MBlaze', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Reliance NetConnect', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Reliance NetConnect+', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Reliance NetConnect 3G', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('MTS MBrowse', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Tata Photon+', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Tata Photon Whiz', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Aircel Pocket Internet', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('BSNL Datacard', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('MTNL Delhi Datacard', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('MTNL Mumbai Datacard', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('RELIANCE INFOCOM LANDLINE', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Tata Docomo GSM Postpaid', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('Tata Indicom Postpaid', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('TATA DOCOMO CDMA LANDLINE', 0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100);

-- --------------------------------------------------------

--
-- Table structure for table `statement`
--

CREATE TABLE IF NOT EXISTS `statement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `under` varchar(200) NOT NULL,
  `admin` varchar(200) NOT NULL,
  `ref_no` int(11) NOT NULL,
  `payment_id` varchar(100) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `payment_mode` varchar(100) NOT NULL,
  `request_id` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `response_code` varchar(30) NOT NULL,
  `transaction_Id` varchar(100) NOT NULL,
  `amount` varchar(25) NOT NULL,
  `date` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `hash_value` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `pin_code` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `payment_date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=363 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `package` varchar(200) NOT NULL,
  `balance` varchar(100) NOT NULL,
  `money_bal` int(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `Aadhaar` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `pancard` varchar(100) NOT NULL,
  `ekyc` varchar(100) NOT NULL,
  `set_comm` varchar(100) NOT NULL,
  `under` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `account_type` varchar(100) NOT NULL,
  `pv_balance` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=340 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
