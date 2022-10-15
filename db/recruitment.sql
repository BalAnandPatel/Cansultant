-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2022 at 04:56 AM
-- Server version: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `recruitment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(155) NOT NULL,
  `full_name` varchar(155) DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `password` varchar(155) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `created_by` varchar(155) DEFAULT NULL,
  `updated_by` varchar(155) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
`id` int(155) NOT NULL,
  `exam_name` varchar(200) DEFAULT NULL,
  `type` varchar(155) DEFAULT NULL,
  `amount` double(255,2) DEFAULT NULL,
  `total_mark` double(255,2) DEFAULT NULL,
  `status` varchar(155) DEFAULT NULL,
  `exam_date` timestamp NULL DEFAULT NULL,
  `result_date` timestamp NULL DEFAULT NULL,
  `admit_card_date` timestamp NULL DEFAULT NULL,
  `created_by` varchar(155) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `exam_name`, `type`, `amount`, `total_mark`, `status`, `exam_date`, `result_date`, `admit_card_date`, `created_by`, `created_on`) VALUES
(1, 'UPTET', 'MCQS', 500.00, 400.00, '1', '2022-10-21 18:30:00', '2022-10-24 18:30:00', '2022-10-12 18:30:00', 'USER', '2022-10-11 18:30:00'),
(2, 'CTET', 'MCQS', 500.00, 400.00, '1', '2022-10-21 18:30:00', '2022-10-24 18:30:00', '2022-10-12 18:30:00', 'USER', '2022-10-11 18:30:00'),
(3, 'UPPCL', 'MCQS', 500.00, 400.00, '1', '2022-10-21 18:30:00', '2022-10-24 18:30:00', '2022-10-12 18:30:00', 'USER', '2022-10-11 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
`pid` int(11) NOT NULL,
  `user_id` varchar(155) DEFAULT NULL,
  `amount` double(255,2) DEFAULT NULL,
  `transaction_id` varchar(155) DEFAULT NULL,
  `status` varchar(155) DEFAULT NULL,
  `request_id` varchar(155) DEFAULT NULL,
  `created_by` varchar(155) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
`id` int(11) NOT NULL,
  `full_name` varchar(155) DEFAULT NULL,
  `dob` timestamp NULL DEFAULT NULL,
  `gender` varchar(155) DEFAULT NULL,
  `marital_status` varchar(155) DEFAULT NULL,
  `father_name` varchar(155) DEFAULT NULL,
  `mother_name` varchar(155) DEFAULT NULL,
  `status` varchar(155) DEFAULT NULL,
  `password` varchar(155) DEFAULT NULL,
  `result` varchar(155) DEFAULT NULL,
  `admit_card` varchar(155) DEFAULT NULL,
  `spouse_name` varchar(155) DEFAULT NULL,
  `cor_address` text,
  `address1` text,
  `address2` text,
  `address3` text,
  `district` text,
  `state` text,
  `pincode` text,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `h_qualification` varchar(200) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `passing_date` timestamp NULL DEFAULT NULL,
  `h_percentage` double(255,2) DEFAULT NULL,
  `grade` varchar(155) DEFAULT NULL,
  `languages` varchar(155) DEFAULT NULL,
  `is_read` varchar(155) DEFAULT NULL,
  `is_write` varchar(155) DEFAULT NULL,
  `is_speak` varchar(155) DEFAULT NULL,
  `alternate_mobile` varchar(155) DEFAULT NULL,
  `zone` varchar(155) DEFAULT NULL,
  `post` varchar(155) DEFAULT NULL,
  `postcode` varchar(155) DEFAULT NULL,
  `disability_cat` varchar(155) DEFAULT NULL,
  `disability_type` varchar(155) DEFAULT NULL,
  `ex_serviceman` varchar(155) DEFAULT NULL,
  `exam_name` varchar(200) DEFAULT NULL,
  `serving_defence_per` varchar(155) DEFAULT NULL,
  `service_period` varchar(155) DEFAULT NULL,
  `religion` varchar(155) DEFAULT NULL,
  `nationality` varchar(155) DEFAULT NULL,
  `category` varchar(155) DEFAULT NULL,
  `state_exam1` varchar(155) DEFAULT NULL,
  `center_exam1` varchar(155) DEFAULT NULL,
  `state_exam2` varchar(155) DEFAULT NULL,
  `center_exam2` varchar(155) DEFAULT NULL,
  `registration_no` varchar(155) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL,
  `created_by` varchar(155) DEFAULT NULL,
  `updated_by` varchar(155) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `full_name`, `dob`, `gender`, `marital_status`, `father_name`, `mother_name`, `status`, `password`, `result`, `admit_card`, `spouse_name`, `cor_address`, `address1`, `address2`, `address3`, `district`, `state`, `pincode`, `mobile`, `email`, `h_qualification`, `subject`, `passing_date`, `h_percentage`, `grade`, `languages`, `is_read`, `is_write`, `is_speak`, `alternate_mobile`, `zone`, `post`, `postcode`, `disability_cat`, `disability_type`, `ex_serviceman`, `exam_name`, `serving_defence_per`, `service_period`, `religion`, `nationality`, `category`, `state_exam1`, `center_exam1`, `state_exam2`, `center_exam2`, `registration_no`, `created_on`, `created_by`, `updated_by`, `updated_on`) VALUES
(14, 'MOH MAYA', '2022-10-12 18:30:00', 'FEMALE', 'Unmarried', 'abc', 'xyz', '0', '13102022', '0', '0', '', 'ADDRESS LINE ONE', 'BESIDE SMART DIAGNOSTIC CENTRE,UMARPUR, SUNDAR NAGAR', 'JAMAITHA', '', 'JAUNPUR', 'UTTAR PRADESH', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'B.TECH', '1990-11-20 18:30:00', 92.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '9889999000', NULL, NULL, NULL, 'NO', 'NO', 'No', 'UPTET', 'No', '0', 'HINDU', 'INDIAN', 'OBC', NULL, NULL, NULL, NULL, '1112640342', '2022-10-13 09:23:56', 'USER', NULL, NULL),
(13, 'MOH MAYA', '2022-10-12 18:30:00', 'FEMALE', 'Unmarried', 'sachindra', 'sunita', '0', '13102022', '0', '0', '', 'JAMAITH', 'BESIDE SMART DIAGNOSTIC CENTRE,UMARPUR, SUNDAR NAGAR', 'JAUNPUR', '', 'JAUNPUR', 'UTTAR PRADESH', '222002', '7886889999', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'B.TECH', '2017-06-05 18:30:00', 82.70, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '989899878', NULL, NULL, NULL, 'NO', 'NO', 'No', 'UPTET', 'No', '0', 'HINDU', 'INDIAN', '', NULL, NULL, NULL, NULL, '1130347939', '2022-10-13 09:18:32', 'USER', NULL, NULL),
(12, 'SHIKHA', '1989-12-31 18:30:00', 'FEMALE', 'Unmarried', 'S', 's', '0', '01011990', '0', '0', '', 'ADDRESS LINE ONE', 'JAMAITHA', 'JAUNPUR', '', 'JAUNPUR', 'TRIPURA', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'B.TECH', '0000-00-00 00:00:00', 90.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '898798999', NULL, NULL, NULL, 'NO', 'NO', 'No', 'CTET', 'No', '0', 'HINDU', 'INDIAN', 'OBC', NULL, NULL, NULL, NULL, '1168904199', '2022-10-12 11:32:39', 'USER', NULL, NULL),
(11, 'SHIKHA', '1989-12-31 18:30:00', 'FEMALE', 'Unmarried', 'S', 's', '0', '01011990', '0', '0', '', 'ADDRESS LINE ONE', 'JAMAITHA', 'JAUNPUR', '', 'JAUNPUR', 'TRIPURA', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'B.TECH', '0000-00-00 00:00:00', 90.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '898798999', NULL, NULL, NULL, 'NO', 'NO', 'No', 'CTET', 'No', '0', 'HINDU', 'INDIAN', 'OBC', NULL, NULL, NULL, NULL, '1237419461', '2022-10-12 11:30:05', 'USER', NULL, NULL),
(10, 'SHIKHA', '1989-12-31 18:30:00', 'FEMALE', 'Unmarried', 'S', 's', '0', '01011990', '0', '0', '', 'ADDRESS LINE ONE', 'JAMAITHA', 'JAUNPUR', '', 'JAUNPUR', 'TRIPURA', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'B.TECH', '0000-00-00 00:00:00', 90.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '898798999', NULL, NULL, NULL, 'NO', 'NO', 'No', 'CTET', 'No', '0', 'HINDU', 'INDIAN', 'OBC', NULL, NULL, NULL, NULL, '1075473159', '2022-10-12 11:28:34', 'USER', NULL, NULL),
(9, 'SHIKHA', '1989-12-31 18:30:00', 'FEMALE', 'Unmarried', 'S', 's', '0', '01011990', '0', '0', '', 'ADDRESS LINE ONE', 'JAMAITHA', 'JAUNPUR', '', 'JAUNPUR', 'TRIPURA', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'B.TECH', '0000-00-00 00:00:00', 90.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '898798999', NULL, NULL, NULL, 'NO', 'NO', 'No', 'CTET', 'No', '0', 'HINDU', 'INDIAN', 'OBC', NULL, NULL, NULL, NULL, '1342263455', '2022-10-12 11:27:24', 'USER', NULL, NULL),
(8, 'SHIKHA', '1989-12-31 18:30:00', 'FEMALE', 'Unmarried', 'S', 's', '0', '01011990', '0', '0', '', 'ADDRESS LINE ONE', 'JAMAITHA', 'JAUNPUR', '', 'JAUNPUR', 'TRIPURA', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'B.TECH', '0000-00-00 00:00:00', 90.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '898798999', NULL, NULL, NULL, 'NO', 'NO', 'No', 'CTET', 'No', '0', 'HINDU', 'INDIAN', 'OBC', NULL, NULL, NULL, NULL, '1175974724', '2022-10-12 11:25:54', 'USER', NULL, NULL),
(15, 'MOH MAYA', '2019-11-10 18:30:00', 'FEMALE', 'Unmarried', 'S', 'SSS', '0', '11112019', '0', '0', '', 'ADDRESS LINE ONE', 'BESIDE SMART DIAGNOSTIC CENTRE,UMARPUR, SUNDAR NAGAR', 'JAMAITHA', '', 'JAUNPUR', 'TRIPURA', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'B.TECH', '1990-11-20 18:30:00', 91.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '909899990', NULL, NULL, NULL, 'NO', 'NO', 'No', 'UPTET', 'No', '0', 'HINDU', 'INDIAN', 'OBC', NULL, NULL, NULL, NULL, '1036090961', '2022-10-13 09:27:53', 'USER', NULL, NULL),
(16, 'MOH MAYA', '2022-10-12 18:30:00', 'FEMALE', 'Unmarried', 's', 's', '0', '13102022', '0', '0', '', 'ADDRESS LINE ONE', 'IHJ', 'NJN', 'KJJJ', 'JJJ', 'TRIPURA', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'BTECH', '2019-11-10 18:30:00', 90.90, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '45678989', NULL, NULL, NULL, 'NO', 'NO', 'No', 'UPTET', 'No', '0', 'HINDU', 'INDIAN', 'OBC', NULL, NULL, NULL, NULL, '1123915639', '2022-10-13 09:31:26', 'USER', NULL, NULL),
(17, 'MOH MAYA', '2022-10-12 18:30:00', 'FEMALE', 'Unmarried', 'ss', 'ss', '0', '13102022', '0', '0', '', 'ADDRESS LINE ONE', 'BESIDE SMART DIAGNOSTIC CENTRE,UMARPUR, SUNDAR NAGAR', 'ADD', 'DDD3', 'DDDD', 'TRIPURA', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'BTECH', '2022-10-13 18:30:00', 92.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '56789089', NULL, NULL, NULL, 'NO', 'NO', 'No', 'UPTET', 'No', '0', 'HINDU', 'INDIAN', 'OBC', NULL, NULL, NULL, NULL, '1141948606', '2022-10-13 09:34:14', 'USER', NULL, NULL),
(18, 'MOH MAYA', '2022-10-12 18:30:00', 'FEMALE', 'Unmarried', 'fff', 'mmm', '0', '13102022', '0', '0', '', 'ADDRESS LINE ONE', 'ADD1', 'ADD2', 'ADD3', 'DDDD', 'TRIPURA', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'BTECH', '2022-10-12 18:30:00', 90.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '567890', NULL, NULL, NULL, 'NO', 'NO', 'No', 'UPTET', 'No', '0', 'HINDU', 'INDIAN', 'OBC', NULL, NULL, NULL, NULL, '1337583143', '2022-10-13 09:37:24', 'USER', NULL, NULL),
(19, 'MOH MAYA', '2022-10-01 18:30:00', 'FEMALE', 'Unmarried', 's', 'ss', '0', '02102022', '0', '0', '', 'ADDRESS LINE ONE', 'IO', 'OO', 'OO', 'OO', 'TRIPURA', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'OOO', '2022-10-13 18:30:00', 99.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '6789', NULL, NULL, NULL, 'NO', 'NO', 'No', 'UPTET', 'No', '0', 'OOO', 'OO', 'OO', NULL, NULL, NULL, NULL, '1250196463', '2022-10-13 09:41:55', 'USER', NULL, NULL),
(20, 'HH', '2022-10-12 18:30:00', 'FEMALE', 'Unmarried', 'hh', 'hh', '0', '13102022', '0', '0', '', 'ADDRESS LINE ONE', 'GHH', 'HHH', 'HHHH', 'HHHH', 'HHH', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'HHH', '2022-10-12 18:30:00', 90.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '678888888', NULL, NULL, NULL, 'NO', 'NO', 'No', 'CTET', 'No', '0', 'HHHH', 'HHHH', 'HHHH', NULL, NULL, NULL, NULL, '1167152211', '2022-10-13 09:45:46', 'USER', NULL, NULL),
(21, 'MOH MAYA', '2022-10-12 18:30:00', 'FEMALE', 'Unmarried', 'hhhHHH', 'hhhh', '0', '13102022', '0', '0', '', 'ADDRESS LINE ONE', '7676YUUYYU', 'YUUIY8778', '898UUI', 'IUYHHJ', '898998', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', '980IJ', '2022-10-12 18:30:00', 90.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '66777878', NULL, NULL, NULL, 'NO', 'NO', 'No', 'CTET', 'No', '0', '8989989', '9889JKJKJ', '899898', NULL, NULL, NULL, NULL, '1102065840', '2022-10-13 09:47:25', 'USER', NULL, NULL),
(22, 'S', '2022-10-12 18:30:00', 'FEMALE', 'Unmarried', 'FF', 'MM', '0', '13102022', '0', '0', '', 'NEAR SMART DIAGNOSTIC CENTRE, INFRONT OF GOMTI HOTEL SUNDAR NAGAR UMARPUR', 'BESIDE SMART DIAGNOSTIC CENTRE,UMARPUR, SUNDAR NAGAR', 'UIIIJJJNN', '', 'JJJ', 'UTTAR PRADESH', '222002', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'HIU', '2022-10-12 18:30:00', 90.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '6789999', NULL, NULL, NULL, 'NO', 'NO', 'No', 'CTET', 'No', '0', 'KKKLKL', 'LKLKLKLK', 'KLLKKL', NULL, NULL, NULL, NULL, '1233527544', '2022-10-13 09:52:16', 'USER', NULL, NULL),
(23, 'MOH MAYA', '2022-10-06 18:30:00', 'FEMALE', 'Unmarried', 'f', 'd', '0', '07102022', '0', '0', '', 'ADDRESS LINE ONE', 'BESIDE SMART DIAGNOSTIC CENTRE,UMARPUR, SUNDAR NAGAR', 'YRY', 'AFCDAFAFD', 'SFGSFGS', 'TRIPURA', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'JYYHJ', '2022-10-05 18:30:00', 90.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '01334557989', NULL, NULL, NULL, 'NO', 'NO', 'No', 'CTET', 'No', '0', 'SFGSF', 'INDIAN', 'SFGFG', NULL, NULL, NULL, NULL, '1094131835', '2022-10-13 10:00:37', 'USER', NULL, NULL),
(24, 'MOH MAYA', '2022-10-12 18:30:00', 'FEMALE', 'Unmarried', 's', 's', '0', '13102022', '0', '0', '', 'ADDRESS LINE ONE', 'BESIDE SMART DIAGNOSTIC CENTRE,UMARPUR, SUNDAR NAGAR', 'JHHJJKK', 'JJKJKJK', 'KJKJKJKJ', 'TRIPURA', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'HJJHJH', '2022-10-11 18:30:00', 90.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '9009099009', NULL, NULL, NULL, 'NO', 'NO', 'No', 'CTET', 'No', '0', 'JKJKJJ', 'JKKJKJKJ', 'JKKJKJ', NULL, NULL, NULL, NULL, '1047891855', '2022-10-13 10:16:18', 'USER', NULL, NULL),
(25, 'GHHHJ', '2022-10-06 18:30:00', 'FEMALE', 'Unmarried', 'ghhggh', 'hghh', '0', '07102022', '0', '0', '', 'ADDRESS LINE ONE', 'LKKKJKJLKLKL', 'KKLKLKLKL', '', 'KKKLKLLK', 'TRIPURA', 'kl', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'BTECH', '2022-10-05 18:30:00', 90.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '76788899', NULL, NULL, NULL, 'NO', 'NO', 'No', 'CTET', 'No', '0', 'O00909KKLLKLK', 'KLLKLKLK', 'KLKLKKK', NULL, NULL, NULL, NULL, '1075886127', '2022-10-13 10:19:08', 'USER', NULL, NULL),
(26, 'GHGH', '2022-10-04 18:30:00', 'FEMALE', 'Unmarried', 'JHHJ', 'HJHJHHJ', '0', '05102022', '0', '0', '', 'ADDRESS LINE ONE', 'KJJJJKKJKJ', 'JHHJ7878', '990KKK', '089IUOJKKJ', 'TRIPURA', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'NMBHJJ', '2022-10-05 18:30:00', 90.90, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '8787998990', NULL, NULL, NULL, 'NO', 'NO', 'No', 'CTET', 'No', '0', 'OBC', 'NNNN', 'NNNN', NULL, NULL, NULL, NULL, '1327283954', '2022-10-13 10:22:39', 'USER', NULL, NULL),
(27, 'MOH MAYA', '2022-10-04 18:30:00', 'FEMALE', 'Unmarried', 'ggg', 'ggg', '0', '05102022', '0', '0', '', 'ADDRESS LINE ONE', 'IJJIKJJKJIO9', '9809IKJJKJK', '9090IKJK', '9090KKKL', 'TRIPURA', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'KJKJJIH', '2022-10-05 18:30:00', 90.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '7989090909', NULL, NULL, NULL, 'NO', 'NO', 'No', 'CTET', 'No', '0', 'III9IK', 'IOOI99', 'KLKKIO9', NULL, NULL, NULL, NULL, '1146341091', '2022-10-13 10:28:39', 'USER', NULL, NULL),
(28, 'RTFGH', '2022-10-04 18:30:00', 'FEMALE', 'Unmarried', '67uhjhjhHH', 'HUHH', '0', '05102022', '0', '0', '', 'ADDRESS LINE ONE', 'BESIDE SMART DIAGNOSTIC CENTRE,UMARPUR, SUNDAR NAGAR', 'BNBHHUUI', 'JIJIIUIIO', 'IOIOIOIOI', 'TRIPURA', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'JKJKJ', '2022-10-11 18:30:00', 90.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '07860111590', NULL, NULL, NULL, 'NO', 'NO', 'No', 'CTET', 'No', '0', 'JHHHHJ', 'JKJKJKJK', 'JKJKJKJK', NULL, NULL, NULL, NULL, '1125930426', '2022-10-13 10:35:50', 'USER', NULL, NULL),
(29, 'MOH MAYA', '2022-10-11 18:30:00', 'FEMALE', 'Unmarried', 'ss', 'ss', '0', '12102022', '0', '0', '', 'ADDRESS LINE ONE', 'BESIDE SMART DIAGNOSTIC CENTRE,UMARPUR, SUNDAR NAGAR', 'JAMAITHA', 'JAUNPUR', 'JAUNPUR', 'TRIPURA', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'BTECH', '2022-10-02 18:30:00', 90.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '01334557989', NULL, NULL, NULL, 'NO', 'NO', '0', 'UPTET', 'No', '0', 'HINDU', 'INDIAN', 'OBC', NULL, NULL, NULL, NULL, '1267090637', '2022-10-14 04:37:19', 'USER', NULL, NULL),
(30, 'MOH MAYA', '2022-10-18 18:30:00', 'FEMALE', 'Unmarried', 'DDD', 'MMM', '0', '19102022', '0', '0', '', 'ADDRESS LINE ONE', 'BESIDE SMART DIAGNOSTIC CENTRE,UMARPUR, SUNDAR NAGAR', 'LKJJKLKL', '', 'KKLJLKJ', 'TRIPURA', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'BTECH', '2022-10-12 18:30:00', 90.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '89899009', NULL, NULL, NULL, 'NO', 'NO', '0', 'UPTET', 'No', '0', 'KJLJLKJ', 'LJLLK', 'JHGKJ', NULL, NULL, NULL, NULL, '1097473128', '2022-10-14 04:47:15', 'USER', NULL, NULL),
(31, 'MOH MAYA', '2022-10-11 18:30:00', 'FEMALE', 'Unmarried', 'fff', 'sss', '0', '12102022', '0', '0', '', 'ADDRESS LINE ONE', '9809990KJHJ', 'JJJKKJ', 'JKJKJKKJ', 'NKJKJKJ', 'JJKJKJK', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'NJJNK', '2022-10-04 18:30:00', 98.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '8898998', NULL, NULL, NULL, 'NO', 'NO', 'No', 'UPTET', 'No', '0', 'KJJKKJ', 'JKKJJK', 'KJKJJK', NULL, NULL, NULL, NULL, '1290354540', '2022-10-14 04:51:41', 'USER', NULL, NULL),
(32, 'MOH MAYA', '2022-10-11 18:30:00', 'FEMALE', 'Unmarried', 'ff', 'hjhhj', '0', '12102022', '0', '0', '', 'ADDRESS LINE ONE', 'KJKJKJ', 'BHJHJ', 'JKJKJKJK', 'JKJJ', 'TRIPURA', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'BTECH', '2022-10-04 18:30:00', 89.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '89898989', NULL, NULL, NULL, 'NO', 'NO', 'No', 'UPTET', 'No', '0', 'JKJKKJ', 'KJKJKJ', 'LKJJJLK', NULL, NULL, NULL, NULL, '1107872430', '2022-10-14 04:53:49', 'USER', NULL, NULL),
(33, 'MOH MAYA', '2022-10-11 18:30:00', 'FEMALE', 'Unmarried', 'ghghhggh', 'hhghhj', '0', '12102022', '0', '0', '', 'ADDRESS LINE ONE', 'BESIDE SMART DIAGNOSTIC CENTRE,UMARPUR, SUNDAR NAGAR', 'YUYU7YUUY', 'HKHHKJK', 'KJJKJK', 'TRIPURA', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'BTECH', '2022-10-14 18:30:00', 90.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '76898978998', NULL, NULL, NULL, 'NO', 'NO', 'No', 'UPTET', 'No', '0', 'JKJJKJK', 'JKKJJK', 'KJJKJ', NULL, NULL, NULL, NULL, '1353864121', '2022-10-14 04:55:31', 'USER', NULL, NULL),
(34, 'MOH MAYA', '2022-10-05 18:30:00', 'FEMALE', 'Unmarried', 'ff', 'kjkjkj', '0', '06102022', '0', '0', '', 'ADDRESS LINE ONE', 'JHJJKJK', 'JKJKJK', 'JKJKJK', 'KJKJ', 'J', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'BBHJ', '2022-10-14 18:30:00', 90.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '87877887', NULL, NULL, NULL, 'NO', 'NO', 'No', 'UPTET', 'No', '0', 'JHH', 'NKJKJJ', 'JJKKJHJ', NULL, NULL, NULL, NULL, '1301266926', '2022-10-14 04:58:20', 'USER', NULL, NULL),
(35, 'GJHGJHGH', '2022-10-11 18:30:00', '0', 'Unmarried', 'hhh', 'gfh', '0', '12102022', '0', '0', '', 'ADDRESS LINE ONE', 'BESIDE SMART DIAGNOSTIC CENTRE,UMARPUR, SUNDAR NAGAR', 'JHHJJH', '', 'HJHHJ', 'TRIPURA', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'MTECH', '2022-10-11 18:30:00', 89.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '01334557989', NULL, NULL, NULL, 'NO', 'NO', 'No', 'select', 'No', '0', 'THFH', 'GFFGFG', 'FGFG', NULL, NULL, NULL, NULL, '1112765484', '2022-10-14 05:01:34', 'USER', NULL, NULL),
(36, 'MOH MAYA', '2022-10-05 18:30:00', 'FEMALE', 'Unmarried', 'fgfsg', 'hgjhgj', '0', '06102022', '0', '0', '', 'ADDRESS LINE ONE', 'BESIDE SMART DIAGNOSTIC CENTRE,UMARPUR, SUNDAR NAGAR', 'HGHG', 'HHGH', 'HH', 'TRIPURA', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'UYGUG', '2022-10-12 18:30:00', 90.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '89778879879', NULL, NULL, NULL, 'NO', 'NO', 'Yes', 'UPTET', 'Yes', '0', 'BHJHGJ', 'LJGHJGJH', 'JKHJJH', NULL, NULL, NULL, NULL, '1225793766', '2022-10-14 05:05:45', 'USER', NULL, NULL),
(37, 'SHIKHA SHARMA', '1994-11-20 18:30:00', 'FEMALE', 'Unmarried', 'Sachindra nath sharma', 'sunita sharma', '0', '21111994', '0', '0', '', 'NEAR SMART DIAGNOSTIC CENTRE, INFRONT OF GOMTI HOTEL SUNDAR NAGAR UMARPUR', 'BESIDE SMART DIAGNOSTIC CENTRE,UMARPUR, SUNDAR NAGAR', 'ADDRESS LINE ONE', '', 'JAUNPUR', 'TRIPURA', '2646882', '7860111590', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'BTECH', '2022-10-04 18:30:00', 89.90, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '76687870', NULL, NULL, NULL, 'NO', 'NO', 'No', 'UPPCL', 'No', '0', 'HINDU', 'INDIAN', 'OBC', NULL, NULL, NULL, NULL, '1189577663', '2022-10-14 11:25:49', 'USER', NULL, NULL),
(38, 'KJKLJH', '2022-09-28 18:30:00', 'FEMALE', 'Unmarried', 'jkhkjh', 'hjjkh', '0', '29092022', '0', '0', '', '8897HKJHJK', '98798798UHJKHK', '987897UJK', '987987O8IUHJLKJ', '87878OIJKLKJ', 'UOIU8I8', '8977898', '878978979', 'jkhjk@gmail.com', 'UNDER GRADUATION', 'BETC', '2022-10-06 18:30:00', 89.00, 'First', 'ENGLISH', 'Yes', 'Yes', 'Yes', '8798688', NULL, NULL, NULL, 'NO', 'NO', 'No', 'UPPCL', 'No', '0', '8798UJ', 'IJKKHJBBN', '8U8789OUIO', NULL, NULL, NULL, NULL, '1078113655', '2022-10-14 11:34:50', 'USER', NULL, NULL),
(39, 'MOH MAYA', '2022-10-27 18:30:00', 'FEMALE', 'Unmarried', 'jhijh', 'hijhk', '0', '28102022', '0', '0', '', 'ADDRESS LINE ONE', 'KNKJHJKK', 'KJHKJHKJ', 'KJHKJHKJ', 'KJHKJH', 'TRIPURA', '2646882', '01334557989', 'shikhasharma9050@gmail.com', 'UNDER GRADUATION', 'JKJGH', '2022-10-20 18:30:00', 89.00, 'First', 'HINDI', 'Yes', 'Yes', 'Yes', '90889809', NULL, NULL, NULL, 'NO', 'NO', 'No', 'CTET', 'No', '0', 'KJHKJHKJ', 'KJHKJHK', 'JHKHKJHKJ', NULL, NULL, NULL, NULL, '1277452397', '2022-10-14 11:37:30', 'USER', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
`rid` int(155) NOT NULL,
  `user_id` varchar(155) DEFAULT NULL,
  `total_mark` double(255,2) DEFAULT NULL,
  `mark_obtained` double(255,2) DEFAULT NULL,
  `exam_name` varchar(155) DEFAULT NULL,
  `status` varchar(155) DEFAULT NULL,
  `grade` varchar(155) DEFAULT NULL,
  `created_by` varchar(155) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
 ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
 ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(155) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
MODIFY `id` int(155) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
MODIFY `rid` int(155) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
