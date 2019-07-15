-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2018 at 07:02 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `new_invoice`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_head`
--

CREATE TABLE IF NOT EXISTS `acc_head` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `head_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `acc_head`
--

INSERT INTO `acc_head` (`id`, `user_id`, `head_desc`) VALUES
(1, 1, 'Assets Purchase\r\n'),
(2, 1, 'Bank Charges\r\n'),
(3, 1, 'Computer Rent \r\n'),
(4, 1, 'Drawings\r\n'),
(5, 1, 'Electricity Expenses\r\n'),
(6, 1, 'Event Expenses\r\n'),
(7, 1, 'Internet Expenses\r\n'),
(8, 1, 'Loan Repayment \r\n'),
(9, 1, 'Office Expenses\r\n'),
(10, 1, 'Office Rent\r\n'),
(11, 1, 'Printing & Stationery\r\n'),
(12, 1, 'Printing Job Expenses\r\n'),
(13, 1, 'Printing Purchase\r\n'),
(14, 1, 'Professional Fees\r\n'),
(15, 1, 'Recruitment Expenses\r\n'),
(16, 1, 'Refreshment Expenses\r\n'),
(17, 1, 'Repair & Maintainence\r\n'),
(18, 1, 'Salary\r\n'),
(19, 1, 'Tally Subscription \r\n'),
(20, 1, 'Taxes\r\n'),
(21, 1, 'Telephone Expenses\r\n'),
(22, 1, 'Travelling Expenses\r\n'),
(23, 1, 'Website Related\r\n'),
(24, 1, 'Personal EX.\r\n'),
(25, 2, 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `challan_invoice`
--

CREATE TABLE IF NOT EXISTS `challan_invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cha_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `challan_invoice`
--

INSERT INTO `challan_invoice` (`id`, `cha_id`, `cust_id`) VALUES
(1, 1, 5),
(2, 3, 5),
(3, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `channel_partner`
--

CREATE TABLE IF NOT EXISTS `channel_partner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(64) NOT NULL,
  `create-date` date NOT NULL,
  `update-date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `channel_partner`
--

INSERT INTO `channel_partner` (`id`, `name`, `email`, `mobile`, `photo`, `address`, `password`, `create-date`, `update-date`, `status`) VALUES
(1, 'minakshi ', 'minu@gmail.com', '98745632110', 'img/Chrysanthemum.jpg', 'asc', '3333', '2018-02-28', '2018-03-03', 0),
(2, 'minaksi', 'minu@gmail.com', '12345687910', '', 'karvenagar', '4444', '2018-03-01', '0000-00-00', 1),
(3, 'ragini', 'ragini@gmail.com', '1256398742', '', 'nbgfjkl', '5555', '2018-03-01', '0000-00-00', 1),
(4, 'ghfjdgn', 'minu@gamil.com', '42456354353', '', 'yrhfxhfghfg', '12345', '2018-03-01', '2018-03-08', 1),
(5, 'rrhgfgh', 'ragi@gmail.com', '	12345687910', '', 'gghh', '', '2018-03-01', '0000-00-00', 0),
(6, 'ragini', 'ragini1995@gmail.com', '8007764386', 'img/default.jpg', 'sinhgad road', '1995', '2018-03-01', '2018-03-01', 0),
(7, 'test', 'test.ebc@gmail.com', '9874522103', 'img/Chrysanthemum.jpg', 'Testing address', '1234', '2018-03-05', '2018-03-05', 0),
(8, '', '', '', 'img/default.jpg', '', '', '2018-03-12', '0000-00-00', 0),
(9, 'EBC Solution pvt ltd', 'ebc@gmail.com', '48452698565', 'img/default.jpg', 'tddytfgh', '8888', '2018-03-12', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `commission`
--

CREATE TABLE IF NOT EXISTS `commission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `cpid` int(11) NOT NULL,
  `cpname` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `pack_amt` decimal(10,0) NOT NULL,
  `commission_per` varchar(20) NOT NULL,
  `total_comp_amt` decimal(53,2) NOT NULL,
  `comm_amount` decimal(53,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `commission`
--

INSERT INTO `commission` (`id`, `uid`, `cpid`, `cpname`, `date`, `pack_amt`, `commission_per`, `total_comp_amt`, `comm_amount`) VALUES
(3, 8, 1, 'minakshi ', '2018-03-15', '3000', '30%', '2100.00', '900.00'),
(5, 10, 0, 'ty', '2018-03-16', '2500', '10%', '2250.00', '250.00'),
(6, 11, 3, 'ragini', '2018-03-12', '2500', '10%', '2250.00', '250.00');

-- --------------------------------------------------------

--
-- Table structure for table `common`
--

CREATE TABLE IF NOT EXISTS `common` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `series_id` varchar(255) DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `customer_identification` varchar(50) DEFAULT NULL,
  `customer_email` varchar(100) DEFAULT NULL,
  `invoice_state` varchar(255) NOT NULL,
  `in_state_code` varchar(255) NOT NULL,
  `ship_cont_person` varchar(255) NOT NULL,
  `ship_email` varchar(255) NOT NULL,
  `ship_state` varchar(255) NOT NULL,
  `ship_state_code` varchar(255) NOT NULL,
  `invoicing_address` longtext,
  `shipping_address` longtext,
  `contact_person` varchar(100) DEFAULT NULL,
  `cust_gst_no` varchar(255) DEFAULT NULL,
  `terms` longtext,
  `bank_details` varchar(255) NOT NULL,
  `notes` text,
  `base_amount` decimal(53,2) NOT NULL,
  `discount_amount` decimal(53,2) NOT NULL,
  `net_amount` decimal(53,2) NOT NULL,
  `gross_amount` decimal(53,2) NOT NULL,
  `amt_words` text NOT NULL,
  `paid_amount` decimal(53,2) NOT NULL,
  `due_amt` decimal(53,2) NOT NULL,
  `tax_amount` decimal(53,2) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `draft` tinyint(1) DEFAULT '1',
  `closed` tinyint(1) DEFAULT '0',
  `sent_by_email` tinyint(1) DEFAULT '0',
  `number` varchar(255) DEFAULT NULL,
  `recurring_invoice_id` bigint(20) DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `days_to_due` mediumint(9) DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT '0',
  `max_occurrences` int(11) DEFAULT NULL,
  `must_occurrences` int(11) DEFAULT NULL,
  `period` int(11) DEFAULT NULL,
  `period_type` varchar(8) DEFAULT NULL,
  `starting_date` date DEFAULT NULL,
  `finishing_date` date DEFAULT NULL,
  `last_execution_date` date DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `del_status` int(11) NOT NULL COMMENT '1-active 0-delete',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `common`
--

INSERT INTO `common` (`id`, `user_id`, `series_id`, `customer_id`, `customer_name`, `customer_identification`, `customer_email`, `invoice_state`, `in_state_code`, `ship_cont_person`, `ship_email`, `ship_state`, `ship_state_code`, `invoicing_address`, `shipping_address`, `contact_person`, `cust_gst_no`, `terms`, `bank_details`, `notes`, `base_amount`, `discount_amount`, `net_amount`, `gross_amount`, `amt_words`, `paid_amount`, `due_amt`, `tax_amount`, `status`, `type`, `draft`, `closed`, `sent_by_email`, `number`, `recurring_invoice_id`, `issue_date`, `due_date`, `days_to_due`, `enabled`, `max_occurrences`, `must_occurrences`, `period`, `period_type`, `starting_date`, `finishing_date`, `last_execution_date`, `created_at`, `updated_at`, `del_status`) VALUES
(1, 1, '6', 5, 'EBC Solutions Pvt. Ltd.', '', 'amit@e-bc.in', 'Maharashtra', '27', 'Amit Ranawade', 'amit@e-bc.in', 'Maharashtra', '27', 'Pune', 'Pune', 'Amit Ranawade', '27BJFH54155JK', '1. Please pay your invoice within seven days\r\n2. Cheque and DD to be drawn on E Business Canvas\r\n3. Subject to Pune Jurisdiction\r\n\r\nThank you for your business', 'E Business Canvas\r\nBranch Name : Anand Nagar,Sinhgad Road\r\nA/C No.:0641102000016737\r\nIFSC code:IBKL0000641', 'Thank You..', '29500.00', '2950.00', '26550.00', '29736.00', 'Twenty-Nine Thousand, Seven Hundred and Thirty-Six', '0.00', '29736.00', '3186.00', 'Pending', 'Challan', 1, 0, 0, 'AS-1', NULL, '2018-02-02', '2018-02-28', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-02 07:14:06', '0000-00-00 00:00:00', 0),
(2, 1, '4', 1, 'RR Parkon', '', 'ashutosh@gmail.com', 'Maharashtra', '27', 'Ashutosh Shirole', 'ashutosh@gmail.com', 'Maharashtra', '27', 'Pune', 'Khopoli', 'Ashutosh Shirole', '27KBKG5461H', '1. Please pay your invoice within seven days\r\n2. Cheque and DD to be drawn on E Business Canvas\r\n3. Subject to Pune Jurisdiction\r\n\r\nThank you for your business', 'E Business Canvas\r\nBranch Name : Anand Nagar,Sinhgad Road\r\nA/C No.:0641102000016737\r\nIFSC code:IBKL0000641', 'Thank You', '250000.00', '12500.00', '237500.00', '249375.00', 'Two Hundred and Forty-Nine Thousand, Three Hundred and Seventy-Five', '35000.00', '214375.00', '11875.00', 'Pending', 'Invoice', 1, 0, 0, 'SD-1', NULL, '2018-02-02', '2018-02-28', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-02 07:16:16', '0000-00-00 00:00:00', 0),
(3, 1, '6', 5, 'EBC Solutions Pvt. Ltd.', '', 'amit@e-bc.in', 'Maharashtra', '27', 'Amit Ranawade', 'amit@e-bc.in', 'Maharashtra', '27', 'Pune', 'Pune', 'Amit Ranawade', '27BJFH54155JK', '1. Please pay your invoice within seven days\r\n2. Cheque and DD to be drawn on E Business Canvas\r\n3. Subject to Pune Jurisdiction\r\n\r\nThank you for your business', 'E Business Canvas\r\nBranch Name : Anand Nagar,Sinhgad Road\r\nA/C No.:0641102000016737\r\nIFSC code:IBKL0000641', 'Thank You', '1400.00', '70.00', '1330.00', '1489.60', 'One Thousand, Four Hundred and Eighty-Nine Rupees Six Zero', '0.00', '1489.60', '159.60', 'Pending', 'Challan', 1, 0, 0, 'AS-2', NULL, '2018-02-02', '2018-02-26', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-02 07:17:45', '0000-00-00 00:00:00', 0),
(5, 1, '6', 5, 'EBC Solutions Pvt. Ltd.', '', 'amit@e-bc.in', 'Maharashtra', '27', 'Amit Ranawade', 'amit@e-bc.in', 'Maharashtra', '27', 'Pune', 'Pune', 'Amit Ranawade', '27BJFH54155JK', '1. Please pay your invoice within seven days\r\n2. Cheque and DD to be drawn on E Business Canvas\r\n3. Subject to Pune Jurisdiction\r\n\r\nThank you for your business', 'E Business Canvas\r\nBranch Name : Anand Nagar,Sinhgad Road\r\nA/C No.:0641102000016737\r\nIFSC code:IBKL0000641', 'Thank You', '1100.00', '55.00', '1045.00', '1233.10', 'One Thousand, Two Hundred and Thirty-Three Rupees One Zero', '0.00', '1233.10', '188.10', 'Pending', 'Challan', 1, 0, 0, 'AS-3', NULL, '2018-02-01', '2018-02-28', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-03 12:39:06', '0000-00-00 00:00:00', 0),
(6, 1, '3', 1, 'RR Parkon', '', 'ashutosh@gmail.com', 'Maharashtra', '27', 'Ashutosh Shirole', 'ashutosh@gmail.com', 'Maharashtra', '27', 'Pune', 'Pune', 'Ashutosh Shirole', '27KBKG5461H', '1. Please pay your invoice within seven days\r\n2. Cheque and DD to be drawn on E Business Canvas\r\n3. Subject to Pune Jurisdiction\r\n\r\nThank you for your business', 'E Business Canvas\r\nBranch Name : Anand Nagar,Sinhgad Road\r\nA/C No.:0641102000016737\r\nIFSC code:IBKL0000641', '', '3915100.00', '75045.30', '3840054.70', '3983764.55', 'Three Million, Nine Hundred and Eighty-Three Thousand, Seven Hundred and Sixty-Four Rupees Five Five', '0.00', '3983764.55', '143709.85', 'Pending', 'Invoice', 1, 0, 0, 'WD-2', NULL, '2018-02-14', '2018-02-14', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-14 08:46:29', '2018-02-23 05:31:48', 0),
(7, 1, '2', 2, 'Tri Polarcon', '', 'rahul@e-bc.in', 'Maharashtra', '27', 'Rahul Chokshi', 'rahul@e-bc.in', 'Maharashtra', '27', 'Pune', 'Pune', 'Rahul Chokshi', '27DJDD321NA', '1. Please pay your invoice within seven days\r\n2. Cheque and DD to be drawn on E Business Canvas\r\n3. Subject to Pune Jurisdiction\r\n\r\nThank you for your business', 'E Business Canvas\r\nBranch Name : Anand Nagar,Sinhgad Road\r\nA/C No.:0641102000016737\r\nIFSC code:IBKL0000641', '', '1900.00', '0.00', '1900.00', '2040.00', 'Two Thousand and Forty', '0.00', '0.00', '140.00', 'Pending', 'Estimate', 1, 0, 0, 'PR-1', NULL, '2018-02-22', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-22 11:30:58', '2018-02-22 12:21:40', 0),
(8, 1, '2', 2, 'Tri Polarcon', '', 'rahul@e-bc.in', 'Maharashtra', '27', 'Rahul Chokshi', 'rahul@e-bc.in', 'Maharashtra', '27', 'Pune', 'Pune', 'Rahul Chokshi', '27DJDD321NA', '1. Please pay your invoice within seven days\r\n2. Cheque and DD to be drawn on E Business Canvas\r\n3. Subject to Pune Jurisdiction\r\n\r\nThank you for your business', 'E Business Canvas\r\nBranch Name : Anand Nagar,Sinhgad Road\r\nA/C No.:0641102000016737\r\nIFSC code:IBKL0000641', '', '900.00', '0.00', '900.00', '990.00', 'Nine Hundred and Ninety', '0.00', '990.00', '90.00', 'Pending', 'Profarma-Invoice', 1, 0, 0, 'PR-1', NULL, '2018-02-22', '2018-02-23', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-22 11:31:12', '0000-00-00 00:00:00', 1),
(9, 2, '5', 6, 'Ushakal ', '21HGVS21', 'amit@e-bc.in', 'Maharashtra', '27', 'Amit', 'amit@e-bc.in', 'Maharashtra', '27', 'Pune', 'Pune', 'Amit', '27DDBUE211KB', '1. Please pay your invoice within seven days\r\n2. Cheque and DD to be drawn on E Business Canvas\r\n3. Subject to Pune Jurisdiction\r\n\r\nThank you for your business', 'E Business Canvas\r\nBranch Name : Anand Nagar,Sinhgad Road\r\nA/C No.:0641102000016737\r\nIFSC code:IBKL0000641', '', '7500.00', '0.00', '7500.00', '8700.00', 'Eight Thousand, Seven Hundred', '1600.00', '8000.00', '1200.00', 'Pending', 'Invoice', 1, 0, 0, 'DM-1', NULL, '2018-02-24', '2018-02-28', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-24 12:15:46', '2018-02-24 12:41:50', 0),
(11, 2, '7', 7, 'Tata Technologies', '', 'raj@gmail.com', 'Maharashtra', '27', 'Raj', 'raj@gmail.com', 'Maharashtra', '27', 'Pune', 'Pune', 'Raj', '27KFND5234', '1. Please pay your invoice within seven days\r\n2. Cheque and DD to be drawn on E Business Canvas\r\n3. Subject to Pune Jurisdiction\r\n\r\nThank you for your business', 'E Business Canvas\r\nBranch Name : Anand Nagar,Sinhgad Road\r\nA/C No.:0641102000016737\r\nIFSC code:IBKL0000641', 'Thank You..', '3750.00', '187.50', '3562.50', '3990.00', 'Three Thousand, Nine Hundred and Ninety', '0.00', '0.00', '427.50', 'Pending', 'Estimate', 1, 0, 0, '11', NULL, '2018-02-26', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-26 10:05:43', '2018-02-26 10:22:32', 0),
(12, 2, '7', 7, 'Tata Technologies', '', 'raj@gmail.com', 'Maharashtra', '27', 'Raj', 'raj@gmail.com', 'Maharashtra', '27', 'Pune', 'Pune', 'Raj', '27KFND5234', '1. Please pay your invoice within seven days\r\n2. Cheque and DD to be drawn on E Business Canvas\r\n3. Subject to Pune Jurisdiction\r\n\r\nThank you for your business', 'E Business Canvas\r\nBranch Name : Anand Nagar,Sinhgad Road\r\nA/C No.:0641102000016737\r\nIFSC code:IBKL0000641', 'Thank You..', '3750.00', '187.50', '3562.50', '3990.00', 'Three Thousand, Nine Hundred and Ninety', '0.00', '3990.00', '427.50', 'Pending', 'Profarma-Invoice', 1, 0, 0, '11', NULL, '2018-02-26', '2018-02-28', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-26 10:50:01', '2018-02-26 11:12:39', 0),
(13, 2, '7', 7, 'Tata Technologies', '', 'raj@gmail.com', 'Maharashtra', '27', 'Raj', 'raj@gmail.com', 'Maharashtra', '27', 'Pune', 'Pune', 'Raj', '27KFND5234', '1. Please pay your invoice within seven days\r\n2. Cheque and DD to be drawn on E Business Canvas\r\n3. Subject to Pune Jurisdiction\r\n\r\nThank you for your business', 'E Business Canvas\r\nBranch Name : Anand Nagar,Sinhgad Road\r\nA/C No.:0641102000016737\r\nIFSC code:IBKL0000641', 'Thank You..', '3750.00', '187.50', '3562.50', '3990.00', 'Three Thousand, Nine Hundred and Ninety', '990.00', '3000.00', '427.50', 'Pending', 'Invoice', 1, 0, 0, '11', NULL, '2018-02-26', '2018-02-28', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-02-26 11:19:33', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `company_phone` varchar(255) NOT NULL,
  `gst_no` varchar(255) NOT NULL,
  `pan_no` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `state_code` int(11) NOT NULL,
  `company_url` varchar(100) NOT NULL,
  `company_address` varchar(500) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `terms` text NOT NULL,
  `bank_details` text NOT NULL,
  `cutomers` enum('No','Yes') NOT NULL DEFAULT 'Yes',
  `estimates` enum('No','Yes') NOT NULL DEFAULT 'Yes',
  `product` enum('No','Yes') NOT NULL DEFAULT 'Yes',
  `voucher` enum('No','Yes') NOT NULL DEFAULT 'Yes',
  `get_purchase` enum('No','Yes') NOT NULL DEFAULT 'Yes',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `user_id`, `company_name`, `company_email`, `company_phone`, `gst_no`, `pan_no`, `state`, `state_code`, `company_url`, `company_address`, `logo`, `terms`, `bank_details`, `cutomers`, `estimates`, `product`, `voucher`, `get_purchase`) VALUES
(1, 1, 'EBC Solutions Pvt. Ltd', 'admin@e-bc.in', '+91-20-24250209', '27CHJPS3320M1ZY', '', 'Maharashtra', 27, 'www.e-bc.in', 'Flat No.3, Vishnu Complex,1st Floor, Sinhagad Road, Pune', 'img/ebc_logo.png', '1. Please pay your invoice within seven days\n2. Cheque and DD to be drawn on E Business Canvas\n3. Subject to Pune Jurisdiction\n\nThank you for your business', 'E Business Canvas\r\nBranch Name : Anand Nagar,Sinhgad Road\r\nA/C No.:0641102000016737\r\nIFSC code:IBKL0000641', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(2, 2, 'Abgensets Pvt. Ltd', 'ab@gmail.com', '9874563251', '27HGDH25846NDJ', '65BJHD3123', 'Maharashtra', 27, 'abgensets.co.in', 'Pune', 'img/finallogo.png', '1. Please pay your invoice within seven days\r\n2. Cheque and DD to be drawn on AB Gensets Pvt. Ltd\r\n3. Subject to Pune Jurisdiction\r\n\r\nThank you for your business', 'Sate Bank of India\r\nAcc No: 98657431000\r\nIFSC: SBI00002018\r\nBranch: Kothrud pune.', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE IF NOT EXISTS `currency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `symbol` varchar(255) NOT NULL,
  `price` decimal(53,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `name_slug` varchar(100) DEFAULT NULL,
  `identification` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact_person` varchar(100) DEFAULT NULL,
  `invoice_state` varchar(255) NOT NULL,
  `in_state_code` varchar(255) NOT NULL,
  `ship_cont_person` varchar(255) NOT NULL,
  `ship_email` varchar(255) NOT NULL,
  `ship_state` varchar(255) NOT NULL,
  `ship_state_code` varchar(255) NOT NULL,
  `invoicing_address` longtext,
  `shipping_address` longtext,
  `gst_no` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `user_id`, `name`, `name_slug`, `identification`, `email`, `contact_person`, `invoice_state`, `in_state_code`, `ship_cont_person`, `ship_email`, `ship_state`, `ship_state_code`, `invoicing_address`, `shipping_address`, `gst_no`) VALUES
(1, 1, 'RR Parkon', 'RRParkon', '', 'ashutosh@gmail.com', 'Ashutosh Shirole', 'Maharashtra', '27', 'Ashutosh Shirole', 'ashutosh@gmail.com', 'Maharashtra', '27', 'Pune', 'Pune', '27KBKG5461H'),
(2, 1, 'Tri Polarcon', 'TriPolarcon', '', 'rahul@e-bc.in', 'Rahul Chokshi', 'Maharashtra', '27', 'Rahul Chokshi', 'rahul@e-bc.in', 'Maharashtra', '27', 'Pune', 'Pune', '27DJDD321NA'),
(3, 1, 'Aradhya Enterprices', 'AradhyaEnterprices', '', 'tejas@gmail.com', 'Tejas Dixit', 'Maharashtra', '27', 'Tejas Dixit', 'tejas@gmail.com', 'Maharashtra', '27', 'Pune', 'Pune', '27JFLS1545822'),
(4, 1, 'Planora', 'Planora', '', 'tejas@gmail.com', 'Tejas', 'Maharashtra', '27', 'Tejas', 'tejas@gmail.com', 'Maharashtra', '27', 'Pune', 'Pune', '27BHGH63HF'),
(5, 1, 'EBC Solutions Pvt. Ltd.', 'EBCSolutionsPvt.Ltd.', '', 'amit@e-bc.in', 'Amit Ranawade', 'Maharashtra', '27', 'Amit Ranawade', 'amit@e-bc.in', 'Maharashtra', '27', 'Pune', 'Pune', '27BJFH54155JK'),
(6, 2, 'Ushakal Tech Reinvention', 'Ushakal Tech Reinvention', '21HGVS21', 'amit@e-bc.in', 'Amit Rana', 'Maharashtra', '27', 'Amit', 'amit@e-bc.in', 'Maharashtra', '27', 'Pune', 'Pune', '27DDBUE211KB'),
(7, 2, 'Tata Technologies', 'TataTechnologies', '', 'raj@gmail.com', 'Raj', 'Maharashtra', '27', 'Raj', 'raj@gmail.com', 'Maharashtra', '27', 'Pune', 'Pune', '27KFND5234');

-- --------------------------------------------------------

--
-- Table structure for table `gst_purches`
--

CREATE TABLE IF NOT EXISTS `gst_purches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `party_name` varchar(255) NOT NULL,
  `gst_no` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `hsn_code` varchar(255) NOT NULL,
  `basic_amt` decimal(53,2) NOT NULL,
  `tax_amt` decimal(53,2) NOT NULL,
  `total_amt` decimal(53,2) NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gst_purches`
--

INSERT INTO `gst_purches` (`id`, `user_id`, `date`, `invoice_no`, `party_name`, `gst_no`, `state`, `hsn_code`, `basic_amt`, `tax_amt`, `total_amt`, `created_at`) VALUES
(1, 2, '2018-02-26', '45', 'Ram Enterprices', '27HJDF5415LDK', 'Maharashra', '865411', '10500.00', '1260.00', '11760.00', '2018-02-26'),
(3, 2, '2017-12-02', '12', 'test', '27JGDB212124B', 'Maharashtra', '6998511', '120.00', '14.40', '134.40', '2018-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `quantity` decimal(53,2) NOT NULL,
  `discount` decimal(53,2) NOT NULL DEFAULT '0.00',
  `disc_amt` decimal(53,2) NOT NULL,
  `tax_amt` decimal(53,2) NOT NULL,
  `common_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `description` varchar(20000) DEFAULT NULL,
  `unitary_cost` decimal(53,2) NOT NULL,
  `price` decimal(53,2) NOT NULL,
  `hsn_code` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1-active 0-deactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `quantity`, `discount`, `disc_amt`, `tax_amt`, `common_id`, `product_id`, `description`, `unitary_cost`, `price`, `hsn_code`, `session`, `status`) VALUES
(1, '1.00', '10.00', '2950.00', '3186.00', 1, 8, 'HP-15BS-542', '29500.00', '29736.00', '548111', '2018-02-000909-STO', 1),
(2, '1.00', '5.00', '12500.00', '11875.00', 2, 1, 'DMS', '250000.00', '249375.00', '54211', '2018-02-000911-STO', 1),
(3, '1.00', '5.00', '70.00', '159.60', 3, 9, 'HP-Laptop Bag 15.2 inch', '1400.00', '1489.60', '54611', '2018-02-000913-STO', 1),
(5, '2.00', '5.00', '55.00', '188.10', 5, 10, 'Microsoft', '550.00', '1233.10', '6325411', '2018-02-000918-STO', 1),
(6, '1.00', '50.00', '75000.00', '13500.00', 6, 2, 'Tri-Polarcon Android App', '150000.00', '88500.00', '5421100000', '2018-02-000924-STO', 1),
(7, '2.00', '0.00', '0.00', '36000.00', 6, 2, 'Tri-Polarcon Android App', '150000.00', '336000.00', '5421100000', '2018-02-000924-STO', 1),
(8, '2.00', '0.00', '0.00', '84000.00', 6, 2, 'Tri-Polarcon Android App', '150000.00', '384000.00', '5421100000', '2018-02-000924-STO', 1),
(9, '1.00', '0.00', '0.00', '7500.00', 6, 2, 'Tri-Polarcon Android App', '150000.00', '157500.00', '5421100000', '2018-02-000924-STO', 1),
(10, '20.00', '0.00', '0.00', '0.00', 6, 2, 'Tri-Polarcon Android App', '150000.00', '3000000.00', '5421100000', '2018-02-000924-STO', 1),
(11, '50.00', '0.00', '0.00', '90.00', 7, 7, 'I-Cards', '15.00', '840.00', '145211', '2018-02-000928-STO', 1),
(12, '10.00', '0.00', '0.00', '0.00', 7, 7, 'Folder', '15.00', '150.00', '145211', '2018-02-000928-STO', 1),
(13, '50.00', '0.00', '0.00', '90.00', 8, 7, 'I-Cards', '15.00', '840.00', '145211', '2018-02-000928-STO65', 1),
(14, '10.00', '0.00', '0.00', '0.00', 8, 7, 'Folder', '15.00', '150.00', '145211', '2018-02-000928-STO522', 1),
(15, '500.00', '0.00', '0.00', '50.00', 7, 7, 'cretificates', '2.00', '1050.00', '145211', '2018-02-000928-STO', 1),
(16, '1.00', '0.30', '45.30', '2709.85', 6, 2, 'Invoice app', '15100.00', '17764.55', '5421100000', '2018-02-000924-STO', 1),
(17, '1.00', '0.00', '0.00', '900.00', 9, 3, 'Purchase', '5000.00', '5900.00', '14522', '2018-02-000932-STO', 1),
(18, '1.00', '0.00', '0.00', '300.00', 9, 3, 'Hosting', '2500.00', '2800.00', '14522', '2018-02-000932-STO', 1),
(20, '1.00', '0.00', '0.00', '66.00', 10, 10, 'Microsoft', '550.00', '616.00', '6325411', '2018-02-000939-STO', 1),
(21, '15.00', '0.00', '0.00', '91.80', 10, 14, 'Test product', '51.00', '856.80', '542111', '2018-02-000941-STO', 1),
(23, '5.00', '0.00', '0.00', '150.00', 10, 15, 'T-Shirt', '250.00', '1400.00', '25411', '2018-02-000942-STO', 1),
(24, '15.00', '5.00', '187.50', '427.50', 11, 15, 'T-Shirt', '250.00', '3990.00', '25411', '2018-02-000943-STO', 1),
(25, '15.00', '5.00', '187.50', '427.50', 12, 15, 'T-Shirt', '250.00', '3990.00', '25411', '2018-02-000943-STO199', 1),
(26, '15.00', '5.00', '187.50', '427.50', 13, 15, 'T-Shirt', '250.00', '3990.00', '25411', '2018-02-000943-STO199297', 1);

-- --------------------------------------------------------

--
-- Table structure for table `item_tax`
--

CREATE TABLE IF NOT EXISTS `item_tax` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `tax_value` decimal(53,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `item_tax`
--

INSERT INTO `item_tax` (`id`, `item_id`, `tax_value`) VALUES
(1, 1, '12.00'),
(2, 2, '5.00'),
(3, 3, '12.00'),
(5, 5, '18.00'),
(6, 6, '18.00'),
(7, 7, '12.00'),
(8, 8, '28.00'),
(9, 9, '5.00'),
(10, 11, '12.00'),
(11, 13, '12.00'),
(12, 14, '0.00'),
(13, 15, '5.00'),
(14, 16, '18.00'),
(15, 17, '18.00'),
(16, 18, '12.00'),
(18, 20, '12.00'),
(19, 21, '12.00'),
(21, 23, '12.00'),
(22, 24, '12.00'),
(23, 25, '12.00'),
(24, 26, '12.00');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE IF NOT EXISTS `leads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cp_id` int(10) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  `client_mobile` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact_person` varchar(50) NOT NULL,
  `createdate` date NOT NULL,
  `updatedate` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `cp_id`, `client_name`, `client_email`, `client_mobile`, `city`, `contact_person`, `createdate`, `updatedate`, `status`) VALUES
(1, 1, 'ragini', 'ragini@gmail.com', '80079143685', 'Pune', 'test', '2018-03-05', '2018-03-05', 1),
(2, 1, 'abcd', 'abcd@gmail.com', '800776435985', '', '', '2018-03-05', '0000-00-00', 0),
(3, 1, 'ebc', 'ebc@gmail.com', '800776435985', '', '', '2018-03-05', '0000-00-00', 0),
(4, 1, 'ebc@gmail.com', 'ebc@gmail.com', '800776435985', '', '', '2018-03-05', '0000-00-00', 1),
(6, 1, 'ebc@gmail.com', 'ebc@gmail.com', '800776435985', '', '', '2018-03-05', '0000-00-00', 1),
(7, 1, 'ebc@gmail.com', 'ebc@gmail.com', '800776435985', '', '', '2018-03-05', '0000-00-00', 1),
(8, 1, 'ebc', 'ebc@gmail.com', '800776435985', '', '', '2018-03-05', '0000-00-00', 0),
(9, 7, 'acc', 'wbc@gmail.com', '9874563210', '', '', '2018-03-05', '2018-03-05', 1),
(10, 1, 'ebc', 'a@gmail.com', '1848465562', '', '', '2018-03-05', '0000-00-00', 0),
(11, 1, 'hgfh', 'ebc12@gmail.com', '8654253252525', 'pune', 'jytjhgj', '2018-03-07', '2018-03-07', 0),
(12, 1, 'hhnjh', 'a12@gmail.com', '198452136865', 'pune', 'hgjhgj', '2018-03-08', '0000-00-00', 1),
(13, 1, 'abcde', 'ebcde@gmail.com', '843219865236', 'pune', 'menull', '2018-03-12', '0000-00-00', 1),
(14, 3, 'test', 'test@gmail.com', '21986523653', 'pune', 'menull', '2018-03-12', '0000-00-00', 1),
(15, 3, 'test1', 'test1@gmail.com', '19841549852', 'pune', 'menull', '2018-03-12', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mode`
--

CREATE TABLE IF NOT EXISTS `mode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `mode` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `mode`
--

INSERT INTO `mode` (`id`, `user_id`, `mode`) VALUES
(1, 1, 'Mode\r\n'),
(2, 1, 'Cash\r\n'),
(3, 1, 'Cheque BC\r\n'),
(4, 1, 'Cheque EBC\r\n'),
(5, 1, 'Card POS\r\n'),
(6, 1, 'Direct Debit\r\n'),
(7, 1, 'NEFT\r\n'),
(8, 1, 'EBC A/C\r\n'),
(9, 1, 'BC A/C\r\n'),
(10, 1, 'EBC Pvt.Ltd A/C\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `new_payment`
--

CREATE TABLE IF NOT EXISTS `new_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `packageid` int(11) NOT NULL,
  `fix_commission` decimal(10,0) NOT NULL,
  `comp_amount` decimal(10,0) NOT NULL,
  `packg_cost` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `new_payment`
--

INSERT INTO `new_payment` (`id`, `u_id`, `startdate`, `enddate`, `packageid`, `fix_commission`, `comp_amount`, `packg_cost`, `description`) VALUES
(1, 11, '2018-03-03', '2018-03-22', 1, '500', '2000', '2500.00', 'hello'),
(3, 10, '2018-03-13', '2018-03-23', 1, '500', '2000', '2500.00', 'hello'),
(4, 10, '2018-03-10', '2018-03-16', 2, '600', '2400', '3000.00', 'fii'),
(5, 8, '2018-03-12', '2018-03-31', 2, '600', '2400', '3000.00', 'fii'),
(6, 9, '2018-03-12', '2018-03-27', 2, '600', '2400', '3000.00', 'fii');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(50) NOT NULL,
  `cost` decimal(53,2) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_name`, `cost`, `description`, `status`) VALUES
(1, 'invoice', '2500.00', 'hello', 1),
(2, 'Invoice And CRM', '3000.00', 'fii', 1),
(3, 'nbfgjk', '635445.00', 'tyhfg', 0),
(4, 'ytyfjf', '4724.00', 'tytdg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `invoice_id` bigint(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amount` decimal(53,2) DEFAULT NULL,
  `notes` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `invoice_id`, `date`, `amount`, `notes`) VALUES
(1, 4, '2018-02-20', '1200.00', 'Cash'),
(2, 2, '2018-02-07', '10000.00', 'Cash'),
(3, 2, '2018-02-07', '15000.00', 'Cash'),
(4, 2, '2018-02-14', '10000.00', 'Cash'),
(5, 9, '2018-02-24', '900.00', 'Cash'),
(6, 9, '2018-02-24', '700.00', 'Cash'),
(7, 13, '2018-02-26', '990.00', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `reference` varchar(100) NOT NULL,
  `hsn_code` varchar(255) NOT NULL,
  `description` longtext,
  `base_price` decimal(53,2) NOT NULL,
  `units` int(11) DEFAULT NULL,
  `sold` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `session` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `user_id`, `reference`, `hsn_code`, `description`, `base_price`, `units`, `sold`, `created_at`, `updated_at`, `session`) VALUES
(1, 1, 'Software', '54211', 'DMS', '250000.00', NULL, 3, '2018-01-24 08:07:58', '2018-02-02 07:16:09', '2018-02-000911-STO'),
(2, 1, 'Android App', '5421100000', 'Invoice app', '15100.00', NULL, 28, '2018-01-24 08:40:40', '2018-02-23 05:31:29', '2018-02-000924-STO'),
(3, 1, 'Domain ', '14522', 'Hosting', '2500.00', NULL, 7, '2018-01-24 13:13:03', '2018-02-24 12:41:48', '2018-02-000932-STO'),
(4, 1, 'Web Development', '25411', 'Web Site Development', '30000.00', NULL, 1, '2018-01-25 10:24:02', '2018-01-25 11:15:14', '2018-01-000825-STO'),
(5, 1, 'Visiting Cards', '9989', 'Lvory 400 GSM, Spot Lamination Both Side', '1.90', NULL, 500, '2018-01-27 06:50:34', '2018-01-27 06:53:05', '2018-01-000845-STO'),
(6, 1, 'Himalaya', '154111', 'Leamon', '40.00', NULL, 20, '2018-01-27 07:55:03', '2018-02-03 07:48:23', '2018-02-000916-STO'),
(7, 1, 'Printing', '145211', 'cretificates', '2.00', NULL, 10, '2018-01-30 06:18:56', '2018-02-22 12:21:22', '2018-02-000928-STO'),
(8, 1, 'Laptop', '548111', 'HP-15BS-542', '29500.00', NULL, 3, '2018-02-01 11:01:10', '2018-02-02 07:13:59', '2018-02-000909-STO'),
(9, 1, 'Bag', '54611', 'HP-Laptop Bag 15.2 inch', '1400.00', NULL, 3, '2018-02-01 11:02:23', '2018-02-26 08:43:28', '2018-02-000939-STO'),
(10, 1, 'Keyboard', '6325411', 'Microsoft', '550.00', NULL, 2, '2018-02-03 12:38:58', '2018-02-26 08:50:32', '2018-02-000939-STO'),
(11, 1, 'Mouse', '2581212', 'HP', '250.00', NULL, NULL, '2018-02-07 11:20:17', '0000-00-00 00:00:00', ''),
(12, 1, 'Data sheet', '874511', 'For daily information storage', '50.00', NULL, NULL, '2018-02-26 11:17:59', '0000-00-00 00:00:00', ''),
(13, 2, 'Notice Board', '564111', 'High quality woolen boards.', '550.00', NULL, NULL, '2018-02-26 11:21:59', '2018-02-26 11:43:19', ''),
(14, 0, 'test', '542111', 'Test product', '51.00', NULL, NULL, '2018-02-26 09:49:28', '0000-00-00 00:00:00', '2018-02-000941-STO'),
(15, 2, 'Cloths', '25411', 'T-Shirt', '250.00', NULL, 15, '2018-02-26 09:55:11', '2018-02-26 10:05:36', '2018-02-000943-STO');

-- --------------------------------------------------------

--
-- Table structure for table `purches_tax`
--

CREATE TABLE IF NOT EXISTS `purches_tax` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `purches_id` int(11) NOT NULL,
  `tax_value` decimal(53,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `purches_tax`
--

INSERT INTO `purches_tax` (`id`, `purches_id`, `tax_value`) VALUES
(1, 1, '12.00'),
(2, 3, '12.00');

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE IF NOT EXISTS `series` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `first_number` int(11) DEFAULT NULL COMMENT 'This is for Invoices',
  `estimates` int(11) NOT NULL,
  `profarmas` int(11) NOT NULL,
  `challans` int(11) NOT NULL DEFAULT '1',
  `enabled` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`id`, `user_id`, `name`, `value`, `first_number`, `estimates`, `profarmas`, `challans`, `enabled`) VALUES
(1, 1, 'Soap', 'SP-', 2, 1, 1, 1, 1),
(2, 1, 'Printing', 'PR-', 1, 2, 2, 1, 1),
(3, 1, 'Web Design', 'WD-', 3, 1, 1, 1, 1),
(4, 1, 'S/W Development', 'SD-', 2, 1, 1, 1, 1),
(5, 1, 'Domain', 'DM-', 2, 1, 1, 1, 1),
(6, 1, 'Assests', 'AS-', 1, 2, 1, 4, 1),
(7, 1, 'Test', '1', 2, 2, 2, 1, 1),
(8, 2, 'Electronics', 'EL-', 1, 1, 1, 1, 1),
(9, 2, 'Jewelry', 'JW-', 1, 1, 1, 1, 1),
(10, 2, 'Cloths', 'CL-', 1, 1, 1, 1, 1),
(11, 2, 'Decorates', 'DC-', 1, 1, 1, 1, 1),
(12, 2, 'Gifts', 'GF-', 1, 1, 1, 1, 1),
(13, 2, 'Plastics', 'PL-', 1, 1, 1, 1, 1),
(14, 2, 'Assests', 'AST-', 1, 1, 1, 1, 1),
(15, 7, 'Web Service', 'WS', 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `is_triple` tinyint(1) DEFAULT NULL,
  `triple_namespace` varchar(100) DEFAULT NULL,
  `triple_key` varchar(100) DEFAULT NULL,
  `triple_value` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tagging`
--

CREATE TABLE IF NOT EXISTS `tagging` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tag_id` bigint(20) NOT NULL,
  `taggable_model` varchar(30) DEFAULT NULL,
  `taggable_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE IF NOT EXISTS `tax` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `sgst` varchar(255) DEFAULT NULL,
  `cgst` varchar(255) NOT NULL,
  `value` decimal(53,2) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1' COMMENT '1-active 0-inactive',
  `is_default` tinyint(1) DEFAULT '0' COMMENT '1-active 0-inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`id`, `name`, `sgst`, `cgst`, `value`, `active`, `is_default`) VALUES
(1, 'GST', 'SGST @ 2.5% ', ' CGST @ 2.5%', '5.00', 1, 1),
(2, 'GST', 'SGST @ 6%', ' CGST @ 6%', '12.00', 1, 1),
(3, 'GST', 'SGST @ 9%', 'CGST @ 9%', '18.00', 1, 1),
(4, 'GST', 'SGST @ 14%', 'CGST @ 14%', '28.00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_session`
--

CREATE TABLE IF NOT EXISTS `tbl_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_session`
--

INSERT INTO `tbl_session` (`id`, `session_id`) VALUES
(1, '949');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sign_up`
--

CREATE TABLE IF NOT EXISTS `tbl_sign_up` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comp_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `record_date` date NOT NULL,
  `status` enum('Active','Deactive') NOT NULL DEFAULT 'Deactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_sign_up`
--

INSERT INTO `tbl_sign_up` (`id`, `comp_name`, `name`, `contact_no`, `email`, `password`, `record_date`, `status`) VALUES
(1, 'Infosys ', 'Tejas Dixit', '9632587410', 'tejas.ebc@gmail.com', '123', '2018-02-24', 'Deactive'),
(2, 'E-zest', 'Ashutosh', '8956231470', 'ashutosh@e-bc.in', '123', '2018-02-24', 'Deactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_states`
--

CREATE TABLE IF NOT EXISTS `tbl_states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `first_digit` varchar(255) NOT NULL,
  `state_code` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `tbl_states`
--

INSERT INTO `tbl_states` (`id`, `name`, `first_digit`, `state_code`) VALUES
(1, 'Andhra Pradesh', 'AP', 28),
(2, 'Arunachal Pradesh', 'AR', 12),
(3, 'Assam', 'AS', 18),
(4, 'Bihar', 'BR', 10),
(5, 'Chhattisgarh', 'CG', 4),
(6, 'Goa', 'GA', 30),
(7, 'Gujarat', 'GJ', 24),
(8, 'Haryana', 'HR', 6),
(9, 'Himachal Pradesh', 'HP', 2),
(10, 'Jammu and Kashmir', 'JK', 1),
(11, 'Jharkhand', 'JH', 20),
(12, 'Karnataka', 'KA', 29),
(13, 'Kerala', 'KL', 32),
(14, 'Madhya Pradesh', 'MP', 23),
(15, 'Maharashtra', 'MH', 27),
(16, 'Manipur', 'MN', 14),
(17, 'Meghalaya', 'ML', 17),
(18, 'Mizoram', 'MZ', 15),
(19, 'Nagaland', 'NL', 13),
(20, 'Orissa', 'OR', 21),
(21, 'Punjab', 'PB', 3),
(22, 'Rajasthan', 'RJ', 8),
(23, 'Sikkim', 'SK', 11),
(24, 'Tamil Nadu', 'TN', 33),
(25, 'Tripura', 'TR', 16),
(26, 'Uttarakhand', 'UK', 5),
(27, 'Uttar Pradesh', 'UP', 9),
(28, 'West Bengal', 'WB', 19),
(29, 'Telangana', 'TS', 36),
(30, 'Andhra Pradesh (New)', 'AD', 37),
(31, 'Andaman and Nicobar Islands', 'AN', 35),
(32, 'Chandigarh', 'CH', 22),
(33, 'Dadra and Nagar Haveli', 'DH', 26),
(34, 'Daman and Diu', 'DD', 25),
(35, 'Delhi', 'DL', 7),
(36, 'Lakshadweep', 'LD', 31),
(37, 'Pondicherry', 'PY', 34);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comp_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `is_active` tinyint(1) DEFAULT '0',
  `is_super_admin` tinyint(1) DEFAULT '0',
  `last_login` date DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `payment_status` int(11) NOT NULL DEFAULT '0' COMMENT '1-received,0-not received',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `comp_name`, `name`, `username`, `password`, `contact`, `is_active`, `is_super_admin`, `last_login`, `created_at`, `updated_at`, `start_date`, `end_date`, `payment_status`) VALUES
(1, 'EBC Solution''s Pvt. Ltd.', 'Shyam Gadekar', '1', 'admin', '9632587411', 1, 1, NULL, '0000-00-00', '2018-02-24', '2018-03-08', '2018-03-16', 0),
(2, 'Ab Gensets Pvt. Ltd', 'Tejas Dixit', 'tejas.ebc@gmail.com', '1234', '8965745123', 1, 0, NULL, '2018-02-24', '2018-02-27', '0000-00-00', '0000-00-00', 0),
(3, 'E-zest', 'Ashutosh', 'ashutosh@e-bc.in', '1234', '9857463210', 1, 0, NULL, '2018-02-24', '0000-00-00', '0000-00-00', '0000-00-00', 1),
(4, 'TCS', 'Sourabh ', 'admin@e-bc.in', '1234', '7896541230', 1, 0, NULL, '2018-02-24', '0000-00-00', '0000-00-00', '0000-00-00', 0),
(5, 'Tech mahindra', 'Rahul', 'rahul@e-bc.in', '1234', '8523697410', 1, 0, NULL, '2018-02-24', '0000-00-00', '0000-00-00', '0000-00-00', 1),
(6, 'test', 'Tejas Dixit', 'test@gmail.com', '1233', '1232131322', 1, 0, NULL, '2018-02-24', '0000-00-00', '0000-00-00', '0000-00-00', 1),
(7, 'EBC Services', 'Amit Ranawade Patil', 'amit@e-bc.in', 'abcd', '8308404455', 1, 0, NULL, '2018-02-27', '0000-00-00', '0000-00-00', '0000-00-00', 1),
(8, 'ragini', 'test', 'ragini@gmail.com', '1234', '80079143685', 1, 0, NULL, '2018-03-08', '0000-00-00', '2018-03-08', '0000-00-00', 1),
(10, '	test', '', '	test@gmail.com', '8888', '	21986523653', 1, 0, NULL, '2018-03-14', '0000-00-00', '0000-00-00', '0000-00-00', 1),
(11, 'test1', 'menull', 'test1@gmail.com', '7777', '19841549852', 1, 0, NULL, '2018-03-13', '0000-00-00', '0000-00-00', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nb_display_results` smallint(6) DEFAULT NULL,
  `language` varchar(3) DEFAULT NULL,
  `country` varchar(2) DEFAULT NULL,
  `search_filter` varchar(30) DEFAULT NULL,
  `series` varchar(50) DEFAULT NULL,
  `hash` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_id`, `first_name`, `last_name`, `email`, `nb_display_results`, `language`, `country`, `search_filter`, `series`, `hash`) VALUES
(1, 1, 'Shyam', 'Gadekar', 'shyam@e-bc.in', NULL, 'en', 'in', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE IF NOT EXISTS `voucher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `particular` varchar(255) DEFAULT NULL,
  `acc_head_id` int(11) DEFAULT NULL,
  `project_client` varchar(255) DEFAULT NULL,
  `bill_no` varchar(255) DEFAULT NULL,
  `amount` decimal(53,2) DEFAULT NULL,
  `mode_id` int(11) DEFAULT NULL,
  `cheque_no` varchar(255) DEFAULT NULL,
  `cheque_date` date DEFAULT NULL,
  `voucher_no` varchar(255) DEFAULT NULL,
  `hsn_code` varchar(255) DEFAULT NULL,
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id`, `user_id`, `particular`, `acc_head_id`, `project_client`, `bill_no`, `amount`, `mode_id`, `cheque_no`, `cheque_date`, `voucher_no`, `hsn_code`, `created_date`, `updated_date`) VALUES
(1, 2, 'Salary', 18, 'Ashutosh', '', '7000.00', 7, '', '2018-02-26', '', '56411', '2018-02-26', '0000-00-00'),
(2, 2, 'Daily Travelling', 22, 'Abhishek Bankar', '125', '2500.00', 4, '365412800', '2018-02-26', '', '5411', '2018-02-26', '2018-02-26');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
