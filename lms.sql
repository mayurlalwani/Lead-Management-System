-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 30, 2015 at 10:31 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lms`
--
CREATE DATABASE IF NOT EXISTS `lms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lms`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_name` varchar(200) NOT NULL,
  `admin_pass` varchar(200) NOT NULL,
  `sec_que` varchar(200) NOT NULL,
  `sec_pass` varchar(200) NOT NULL,
  PRIMARY KEY (`admin_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `admin_pass`, `sec_que`, `sec_pass`) VALUES
('admin', 'admin', 'admin', 'admin'),
('nirajkanjani', 'nirajkanjani', 'nirajkanjani', 'nirajkanjani');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(200) NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `state_id`) VALUES
(1, 'Ahmedabad', 3),
(2, 'Surat', 3),
(3, 'vadodara', 3),
(4, 'Buffalo', 5);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `co_id` int(11) NOT NULL AUTO_INCREMENT,
  `co_name` varchar(200) NOT NULL,
  PRIMARY KEY (`co_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`co_id`, `co_name`) VALUES
(1, 'India'),
(2, 'Australia'),
(3, 'USA'),
(4, 'Canada'),
(5, 'Pakistan'),
(6, 'UK'),
(7, 'UAE');

-- --------------------------------------------------------

--
-- Table structure for table `leads_file`
--

CREATE TABLE IF NOT EXISTS `leads_file` (
  `leadfileid` int(11) NOT NULL AUTO_INCREMENT,
  `leadfilepath` varchar(200) NOT NULL,
  `leadfilename` text NOT NULL,
  `uid` int(11) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `desc` text NOT NULL,
  `sellamount` bigint(20) NOT NULL,
  PRIMARY KEY (`leadfileid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `leads_file`
--

INSERT INTO `leads_file` (`leadfileid`, `leadfilepath`, `leadfilename`, `uid`, `amount`, `desc`, `sellamount`) VALUES
(1, '../leadsfile/uid-10-uid-2-test.csv', 'test1', 10, 50, ' hello world', 60),
(2, '../leadsfile/uid-14-500ACE.xlsx', '500 Payday Long Forms', 14, 200, '500 payday long forms 6 months old ', 240),
(3, '../leadsfile/uid-13-5kpdlf.xlsx', '5000 payday long forms', 13, 2000, '5000 payday long forms max 6 months old ', 2400),
(4, '../leadsfile/uid-12-1000china.xlsx', '1000 payday long forms', 12, 400, '1000 fresh payday long forms ', 480),
(5, '../leadsfile/uid-11-debt.xlsx', 'Debt Settlement leads', 11, 100, ' Debt Settlement Leads', 120),
(6, '../leadsfile/uid-10-home owner 2012.xlsx', 'Home owner data', 10, 300, 'home owner data ', 360);

-- --------------------------------------------------------

--
-- Table structure for table `leads_usa`
--

CREATE TABLE IF NOT EXISTS `leads_usa` (
  `lead_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(256) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip` text NOT NULL,
  `dob` varchar(200) NOT NULL,
  `homephone` text NOT NULL,
  `workphone` text NOT NULL,
  `ssn` text NOT NULL,
  `dlno` varchar(200) NOT NULL,
  `dlstate` varchar(200) NOT NULL,
  `employmentstatus` varchar(200) NOT NULL,
  `empname` varchar(200) NOT NULL,
  `incometype` varchar(200) NOT NULL,
  `income` text NOT NULL,
  `payperiod` varchar(200) NOT NULL,
  `empyears` text NOT NULL,
  `empmonths` text NOT NULL,
  `resyears` text NOT NULL,
  `resmonths` text NOT NULL,
  `ipaddress` varchar(200) NOT NULL,
  `bankname` varchar(200) NOT NULL,
  `accountno` text NOT NULL,
  `routingno` text NOT NULL,
  `credit_debit_card_no` text NOT NULL,
  `cvv` text NOT NULL,
  `expirydate` text NOT NULL,
  PRIMARY KEY (`lead_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `leads_usa`
--

INSERT INTO `leads_usa` (`lead_id`, `firstname`, `lastname`, `email`, `address`, `city`, `state`, `zip`, `dob`, `homephone`, `workphone`, `ssn`, `dlno`, `dlstate`, `employmentstatus`, `empname`, `incometype`, `income`, `payperiod`, `empyears`, `empmonths`, `resyears`, `resmonths`, `ipaddress`, `bankname`, `accountno`, `routingno`, `credit_debit_card_no`, `cvv`, `expirydate`) VALUES
(1, '0.01', '0.01', '0.01', '0.01', '0.01', '0.01', '0.01', '0.01', '0.01', '0.01', '0.01', '0.01', '0.01', '0.01', '0.01', '0.01', '0.01', '0.01', '0.01', '0.01', '0.01', '0.01', '0.01', '0.01', '0.01', '0.01', '0.01', '0.02', '0.01'),
(2, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(3, 'Lisa', 'Robbins', 'LisaARobbins@dayrep.com', '3105 North Bend River Road', 'Morehead', 'KY', '40351', '12/27/1978', '606-783-9087', '606-783-9087', '401-12-2991', 'l200096002', 'KY', 'Retired', 'Retired', 'benefits', '1000', 'weekly', '2', '8', '6', '4', '207.182.158.171', 'neighbors', '10000914248', '281082384', '5150 8294 4176 6374', '255', '2015/07'),
(4, 'Sara', 'Stewart', 'SaraKStewart@teleworm.us', '4300 Joy Lane', 'Woodland Hills', 'CA', '91303', '11/18/1963', '818-595-4186', '818-595-4186', '566-57-9895', '3563519', 'CA', 'employed', 'Walmart', 'job', '2500', 'bi-weekly', '4', '3', '2', '1', '66.35.68.146', 'first national bank texas', '417630647', '111906271', '4916 3716 7001 0743', '468', '2013/12'),
(5, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(6, 'Carl', 'Laflamme', 'CarlJLaflamme@teleworm.us', '2116 Hillview Drive', 'Oakland', 'CA', '94612', '8/24/1985', '707-210-9013', '707-210-9013', '550-52-0676', 'u137268016', 'CA', 'Retired', 'Retired', 'benefits', '1800', 'monthly', '5', '6', '7', '8', '50.22.206.179', 'JP Morgan', '9837706384', '281088763', '5405 9957 1200 8409', '855', '2013/05'),
(7, 'Sara', 'Stewart', 'SaraKStewart@teleworm.us', '4300 Joy Lane', 'Woodland Hills', 'CA', '91303', '11/18/1963', '818-595-4186', '818-595-4186', '566-57-9895', '3563519', 'CA', 'employed', 'Walmart', 'job', '2500', 'bi-weekly', '4', '3', '2', '1', '66.35.68.146', 'first national bank texas', '417630647', '111906271', '4916 3716 7001 0743', '468', '2013/12'),
(8, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(9, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(10, 'Lisa', 'Robbins', 'LisaARobbins@dayrep.com', '3105 North Bend River Road', 'Morehead', 'KY', '40351', '12/27/1978', '606-783-9087', '606-783-9087', '401-12-2991', 'l200096002', 'KY', 'Retired', 'Retired', 'benefits', '1000', 'weekly', '2', '8', '6', '4', '207.182.158.171', 'neighbors', '10000914248', '281082384', '5150 8294 4176 6374', '255', '2015/07'),
(11, 'Carl', 'Laflamme', 'CarlJLaflamme@teleworm.us', '2116 Hillview Drive', 'Oakland', 'CA', '94612', '8/16/1952', '707-210-9013', '707-210-9013', '550-52-0676', 'u137268016', 'CA', 'Retired', 'Retired', 'benefits', '1800', 'monthly', '5', '6', '7', '8', '50.22.206.179', 'JP Morgan', '9837706384', '281088763', '5405 9957 1200 8409', '855', '2013/05'),
(12, 'Sara', 'Stewart', 'SaraKStewart@teleworm.us', '4300 Joy Lane', 'Woodland Hills', 'CA', '91303', '11/18/1963', '818-595-4186', '818-595-4186', '566-57-9895', '3563519', 'CA', 'employed', 'Walmart', 'job', '2500', 'bi-weekly', '4', '3', '2', '1', '66.35.68.146', 'first national bank texas', '417630647', '111906271', '4916 3716 7001 0743', '468', '2013/12'),
(13, 'Russel', 'Meyer', 'russelmeyer@gmail.com', '4247 Pick Street', 'Yuma', 'CO', '80759', '2/23/1968', '970-630-2865', '', '523-37-7864', '', '', 'employed', 'Bell', 'job', '5300', 'monthly', '6', '4', '2', '5', '66.50.26.234', '', '', '', '4532 1893 5364 2788', '612', '2013/08'),
(14, 'Robert', 'Rouillard', 'robert@yahoo.com', '1339 Lynn Avenue', 'Appleton', 'WI', '54913', '6/11/1954', '715-525-8686', '715-525-8686', '396-60-9429', '', '', 'Retired', 'Retired', 'benefits', '1700', 'weekly', '7', '5', '6', '3', '61.147.82.178', '', '', '', '4485 1049 0307 2425', '699', '2017/10'),
(15, 'Russel', 'Meyer', 'russelmeyer@gmail.com', '4247 Pick Street', 'Yuma', 'CO', '80759', '2/23/1968', '970-630-2865', '', '523-37-7864', '', '', 'employed', 'Bell', 'job', '5300', 'monthly', '6', '4', '2', '5', '66.50.26.234', '', '', '', '4532 1893 5364 2788', '612', '2013/08'),
(16, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(17, 'Lisa', 'Robbins', 'LisaARobbins@dayrep.com', '3105 North Bend River Road', 'Morehead', 'KY', '40351', '12/27/1978', '606-783-9087', '606-783-9087', '401-12-2991', 'l200096002', 'KY', 'Retired', 'Retired', 'benefits', '1000', 'weekly', '2', '8', '6', '4', '207.182.158.171', 'neighbors', '10000914248', '281082384', '5150 8294 4176 6374', '255', '2015/07'),
(18, 'Sara', 'Stewart', 'SaraKStewart@teleworm.us', '4300 Joy Lane', 'Woodland Hills', 'CA', '91303', '11/18/1963', '818-595-4186', '818-595-4186', '566-57-9895', '3563519', 'CA', 'employed', 'Walmart', 'job', '2500', 'bi-weekly', '4', '3', '2', '1', '66.35.68.146', 'first national bank texas', '417630647', '111906271', '4916 3716 7001 0743', '468', '2013/12'),
(19, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(20, 'Carl', 'Laflamme', 'CarlJLaflamme@teleworm.us', '2116 Hillview Drive', 'Oakland', 'CA', '94612', '8/24/1985', '707-210-9013', '707-210-9013', '550-52-0676', 'u137268016', 'CA', 'Retired', 'Retired', 'benefits', '1800', 'monthly', '5', '6', '7', '8', '50.22.206.179', 'JP Morgan', '9837706384', '281088763', '5405 9957 1200 8409', '855', '2013/05'),
(21, 'Sara', 'Stewart', 'SaraKStewart@teleworm.us', '4300 Joy Lane', 'Woodland Hills', 'CA', '91303', '11/18/1963', '818-595-4186', '818-595-4186', '566-57-9895', '3563519', 'CA', 'employed', 'Walmart', 'job', '2500', 'bi-weekly', '4', '3', '2', '1', '66.35.68.146', 'first national bank texas', '417630647', '111906271', '4916 3716 7001 0743', '468', '2013/12'),
(22, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(23, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(24, 'Lisa', 'Robbins', 'LisaARobbins@dayrep.com', '3105 North Bend River Road', 'Morehead', 'KY', '40351', '12/27/1978', '606-783-9087', '606-783-9087', '401-12-2991', 'l200096002', 'KY', 'Retired', 'Retired', 'benefits', '1000', 'weekly', '2', '8', '6', '4', '207.182.158.171', 'neighbors', '10000914248', '281082384', '5150 8294 4176 6374', '255', '2015/07'),
(25, 'Carl', 'Laflamme', 'CarlJLaflamme@teleworm.us', '2116 Hillview Drive', 'Oakland', 'CA', '94612', '8/16/1952', '707-210-9013', '707-210-9013', '550-52-0676', 'u137268016', 'CA', 'Retired', 'Retired', 'benefits', '1800', 'monthly', '5', '6', '7', '8', '50.22.206.179', 'JP Morgan', '9837706384', '281088763', '5405 9957 1200 8409', '855', '2013/05'),
(26, 'Sara', 'Stewart', 'SaraKStewart@teleworm.us', '4300 Joy Lane', 'Woodland Hills', 'CA', '91303', '11/18/1963', '818-595-4186', '818-595-4186', '566-57-9895', '3563519', 'CA', 'employed', 'Walmart', 'job', '2500', 'bi-weekly', '4', '3', '2', '1', '66.35.68.146', 'first national bank texas', '417630647', '111906271', '4916 3716 7001 0743', '468', '2013/12'),
(27, 'Russel', 'Meyer', 'russelmeyer@gmail.com', '4247 Pick Street', 'Yuma', 'CO', '80759', '2/23/1968', '970-630-2865', '', '523-37-7864', '', '', 'employed', 'Bell', 'job', '5300', 'monthly', '6', '4', '2', '5', '66.50.26.234', '', '', '', '4532 1893 5364 2788', '612', '2013/08'),
(28, 'Robert', 'Rouillard', 'robert@yahoo.com', '1339 Lynn Avenue', 'Appleton', 'WI', '54913', '6/11/1954', '715-525-8686', '715-525-8686', '396-60-9429', '', '', 'Retired', 'Retired', 'benefits', '1700', 'weekly', '7', '5', '6', '3', '61.147.82.178', '', '', '', '4485 1049 0307 2425', '699', '2017/10'),
(29, 'Russel', 'Meyer', 'russelmeyer@gmail.com', '4247 Pick Street', 'Yuma', 'CO', '80759', '2/23/1968', '970-630-2865', '', '523-37-7864', '', '', 'employed', 'Bell', 'job', '5300', 'monthly', '6', '4', '2', '5', '66.50.26.234', '', '', '', '4532 1893 5364 2788', '612', '2013/08'),
(30, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(31, 'Lisa', 'Robbins', 'LisaARobbins@dayrep.com', '3105 North Bend River Road', 'Morehead', 'KY', '40351', '12/27/1978', '606-783-9087', '606-783-9087', '401-12-2991', 'l200096002', 'KY', 'Retired', 'Retired', 'benefits', '1000', 'weekly', '2', '8', '6', '4', '207.182.158.171', 'neighbors', '10000914248', '281082384', '5150 8294 4176 6374', '255', '2015/07'),
(32, 'Sara', 'Stewart', 'SaraKStewart@teleworm.us', '4300 Joy Lane', 'Woodland Hills', 'CA', '91303', '11/18/1963', '818-595-4186', '818-595-4186', '566-57-9895', '3563519', 'CA', 'employed', 'Walmart', 'job', '2500', 'bi-weekly', '4', '3', '2', '1', '66.35.68.146', 'first national bank texas', '417630647', '111906271', '4916 3716 7001 0743', '468', '2013/12'),
(33, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(34, 'Carl', 'Laflamme', 'CarlJLaflamme@teleworm.us', '2116 Hillview Drive', 'Oakland', 'CA', '94612', '8/24/1985', '707-210-9013', '707-210-9013', '550-52-0676', 'u137268016', 'CA', 'Retired', 'Retired', 'benefits', '1800', 'monthly', '5', '6', '7', '8', '50.22.206.179', 'JP Morgan', '9837706384', '281088763', '5405 9957 1200 8409', '855', '2013/05'),
(35, 'Sara', 'Stewart', 'SaraKStewart@teleworm.us', '4300 Joy Lane', 'Woodland Hills', 'CA', '91303', '11/18/1963', '818-595-4186', '818-595-4186', '566-57-9895', '3563519', 'CA', 'employed', 'Walmart', 'job', '2500', 'bi-weekly', '4', '3', '2', '1', '66.35.68.146', 'first national bank texas', '417630647', '111906271', '4916 3716 7001 0743', '468', '2013/12'),
(36, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(37, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(38, 'Lisa', 'Robbins', 'LisaARobbins@dayrep.com', '3105 North Bend River Road', 'Morehead', 'KY', '40351', '12/27/1978', '606-783-9087', '606-783-9087', '401-12-2991', 'l200096002', 'KY', 'Retired', 'Retired', 'benefits', '1000', 'weekly', '2', '8', '6', '4', '207.182.158.171', 'neighbors', '10000914248', '281082384', '5150 8294 4176 6374', '255', '2015/07'),
(39, 'Carl', 'Laflamme', 'CarlJLaflamme@teleworm.us', '2116 Hillview Drive', 'Oakland', 'CA', '94612', '8/16/1952', '707-210-9013', '707-210-9013', '550-52-0676', 'u137268016', 'CA', 'Retired', 'Retired', 'benefits', '1800', 'monthly', '5', '6', '7', '8', '50.22.206.179', 'JP Morgan', '9837706384', '281088763', '5405 9957 1200 8409', '855', '2013/05'),
(40, 'Sara', 'Stewart', 'SaraKStewart@teleworm.us', '4300 Joy Lane', 'Woodland Hills', 'CA', '91303', '11/18/1963', '818-595-4186', '818-595-4186', '566-57-9895', '3563519', 'CA', 'employed', 'Walmart', 'job', '2500', 'bi-weekly', '4', '3', '2', '1', '66.35.68.146', 'first national bank texas', '417630647', '111906271', '4916 3716 7001 0743', '468', '2013/12'),
(41, 'Russel', 'Meyer', 'russelmeyer@gmail.com', '4247 Pick Street', 'Yuma', 'CO', '80759', '2/23/1968', '970-630-2865', '', '523-37-7864', '', '', 'employed', 'Bell', 'job', '5300', 'monthly', '6', '4', '2', '5', '66.50.26.234', '', '', '', '4532 1893 5364 2788', '612', '2013/08'),
(42, 'Robert', 'Rouillard', 'robert@yahoo.com', '1339 Lynn Avenue', 'Appleton', 'WI', '54913', '6/11/1954', '715-525-8686', '715-525-8686', '396-60-9429', '', '', 'Retired', 'Retired', 'benefits', '1700', 'weekly', '7', '5', '6', '3', '61.147.82.178', '', '', '', '4485 1049 0307 2425', '699', '2017/10'),
(43, 'Russel', 'Meyer', 'russelmeyer@gmail.com', '4247 Pick Street', 'Yuma', 'CO', '80759', '2/23/1968', '970-630-2865', '', '523-37-7864', '', '', 'employed', 'Bell', 'job', '5300', 'monthly', '6', '4', '2', '5', '66.50.26.234', '', '', '', '4532 1893 5364 2788', '612', '2013/08'),
(44, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(45, 'Lisa', 'Robbins', 'LisaARobbins@dayrep.com', '3105 North Bend River Road', 'Morehead', 'KY', '40351', '12/27/1978', '606-783-9087', '606-783-9087', '401-12-2991', 'l200096002', 'KY', 'Retired', 'Retired', 'benefits', '1000', 'weekly', '2', '8', '6', '4', '207.182.158.171', 'neighbors', '10000914248', '281082384', '5150 8294 4176 6374', '255', '2015/07'),
(46, 'Sara', 'Stewart', 'SaraKStewart@teleworm.us', '4300 Joy Lane', 'Woodland Hills', 'CA', '91303', '11/18/1963', '818-595-4186', '818-595-4186', '566-57-9895', '3563519', 'CA', 'employed', 'Walmart', 'job', '2500', 'bi-weekly', '4', '3', '2', '1', '66.35.68.146', 'first national bank texas', '417630647', '111906271', '4916 3716 7001 0743', '468', '2013/12'),
(47, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(48, 'Carl', 'Laflamme', 'CarlJLaflamme@teleworm.us', '2116 Hillview Drive', 'Oakland', 'CA', '94612', '8/24/1985', '707-210-9013', '707-210-9013', '550-52-0676', 'u137268016', 'CA', 'Retired', 'Retired', 'benefits', '1800', 'monthly', '5', '6', '7', '8', '50.22.206.179', 'JP Morgan', '9837706384', '281088763', '5405 9957 1200 8409', '855', '2013/05'),
(49, 'Sara', 'Stewart', 'SaraKStewart@teleworm.us', '4300 Joy Lane', 'Woodland Hills', 'CA', '91303', '11/18/1963', '818-595-4186', '818-595-4186', '566-57-9895', '3563519', 'CA', 'employed', 'Walmart', 'job', '2500', 'bi-weekly', '4', '3', '2', '1', '66.35.68.146', 'first national bank texas', '417630647', '111906271', '4916 3716 7001 0743', '468', '2013/12'),
(50, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(51, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(52, 'Lisa', 'Robbins', 'LisaARobbins@dayrep.com', '3105 North Bend River Road', 'Morehead', 'KY', '40351', '12/27/1978', '606-783-9087', '606-783-9087', '401-12-2991', 'l200096002', 'KY', 'Retired', 'Retired', 'benefits', '1000', 'weekly', '2', '8', '6', '4', '207.182.158.171', 'neighbors', '10000914248', '281082384', '5150 8294 4176 6374', '255', '2015/07'),
(53, 'Carl', 'Laflamme', 'CarlJLaflamme@teleworm.us', '2116 Hillview Drive', 'Oakland', 'CA', '94612', '8/16/1952', '707-210-9013', '707-210-9013', '550-52-0676', 'u137268016', 'CA', 'Retired', 'Retired', 'benefits', '1800', 'monthly', '5', '6', '7', '8', '50.22.206.179', 'JP Morgan', '9837706384', '281088763', '5405 9957 1200 8409', '855', '2013/05'),
(54, 'Sara', 'Stewart', 'SaraKStewart@teleworm.us', '4300 Joy Lane', 'Woodland Hills', 'CA', '91303', '11/18/1963', '818-595-4186', '818-595-4186', '566-57-9895', '3563519', 'CA', 'employed', 'Walmart', 'job', '2500', 'bi-weekly', '4', '3', '2', '1', '66.35.68.146', 'first national bank texas', '417630647', '111906271', '4916 3716 7001 0743', '468', '2013/12'),
(55, 'Russel', 'Meyer', 'russelmeyer@gmail.com', '4247 Pick Street', 'Yuma', 'CO', '80759', '2/23/1968', '970-630-2865', '', '523-37-7864', '', '', 'employed', 'Bell', 'job', '5300', 'monthly', '6', '4', '2', '5', '66.50.26.234', '', '', '', '4532 1893 5364 2788', '612', '2013/08'),
(56, 'Robert', 'Rouillard', 'robert@yahoo.com', '1339 Lynn Avenue', 'Appleton', 'WI', '54913', '6/11/1954', '715-525-8686', '715-525-8686', '396-60-9429', '', '', 'Retired', 'Retired', 'benefits', '1700', 'weekly', '7', '5', '6', '3', '61.147.82.178', '', '', '', '4485 1049 0307 2425', '699', '2017/10'),
(57, 'Russel', 'Meyer', 'russelmeyer@gmail.com', '4247 Pick Street', 'Yuma', 'CO', '80759', '2/23/1968', '970-630-2865', '', '523-37-7864', '', '', 'employed', 'Bell', 'job', '5300', 'monthly', '6', '4', '2', '5', '66.50.26.234', '', '', '', '4532 1893 5364 2788', '612', '2013/08'),
(58, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(59, 'Lisa', 'Robbins', 'LisaARobbins@dayrep.com', '3105 North Bend River Road', 'Morehead', 'KY', '40351', '12/27/1978', '606-783-9087', '606-783-9087', '401-12-2991', 'l200096002', 'KY', 'Retired', 'Retired', 'benefits', '1000', 'weekly', '2', '8', '6', '4', '207.182.158.171', 'neighbors', '10000914248', '281082384', '5150 8294 4176 6374', '255', '2015/07'),
(60, 'Sara', 'Stewart', 'SaraKStewart@teleworm.us', '4300 Joy Lane', 'Woodland Hills', 'CA', '91303', '11/18/1963', '818-595-4186', '818-595-4186', '566-57-9895', '3563519', 'CA', 'employed', 'Walmart', 'job', '2500', 'bi-weekly', '4', '3', '2', '1', '66.35.68.146', 'first national bank texas', '417630647', '111906271', '4916 3716 7001 0743', '468', '2013/12'),
(61, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(62, 'Carl', 'Laflamme', 'CarlJLaflamme@teleworm.us', '2116 Hillview Drive', 'Oakland', 'CA', '94612', '8/24/1985', '707-210-9013', '707-210-9013', '550-52-0676', 'u137268016', 'CA', 'Retired', 'Retired', 'benefits', '1800', 'monthly', '5', '6', '7', '8', '50.22.206.179', 'JP Morgan', '9837706384', '281088763', '5405 9957 1200 8409', '855', '2013/05'),
(63, 'Sara', 'Stewart', 'SaraKStewart@teleworm.us', '4300 Joy Lane', 'Woodland Hills', 'CA', '91303', '11/18/1963', '818-595-4186', '818-595-4186', '566-57-9895', '3563519', 'CA', 'employed', 'Walmart', 'job', '2500', 'bi-weekly', '4', '3', '2', '1', '66.35.68.146', 'first national bank texas', '417630647', '111906271', '4916 3716 7001 0743', '468', '2013/12'),
(64, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(65, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(66, 'Lisa', 'Robbins', 'LisaARobbins@dayrep.com', '3105 North Bend River Road', 'Morehead', 'KY', '40351', '12/27/1978', '606-783-9087', '606-783-9087', '401-12-2991', 'l200096002', 'KY', 'Retired', 'Retired', 'benefits', '1000', 'weekly', '2', '8', '6', '4', '207.182.158.171', 'neighbors', '10000914248', '281082384', '5150 8294 4176 6374', '255', '2015/07'),
(67, 'Carl', 'Laflamme', 'CarlJLaflamme@teleworm.us', '2116 Hillview Drive', 'Oakland', 'CA', '94612', '8/16/1952', '707-210-9013', '707-210-9013', '550-52-0676', 'u137268016', 'CA', 'Retired', 'Retired', 'benefits', '1800', 'monthly', '5', '6', '7', '8', '50.22.206.179', 'JP Morgan', '9837706384', '281088763', '5405 9957 1200 8409', '855', '2013/05'),
(68, 'Sara', 'Stewart', 'SaraKStewart@teleworm.us', '4300 Joy Lane', 'Woodland Hills', 'CA', '91303', '11/18/1963', '818-595-4186', '818-595-4186', '566-57-9895', '3563519', 'CA', 'employed', 'Walmart', 'job', '2500', 'bi-weekly', '4', '3', '2', '1', '66.35.68.146', 'first national bank texas', '417630647', '111906271', '4916 3716 7001 0743', '468', '2013/12'),
(69, 'Russel', 'Meyer', 'russelmeyer@gmail.com', '4247 Pick Street', 'Yuma', 'CO', '80759', '2/23/1968', '970-630-2865', '', '523-37-7864', '', '', 'employed', 'Bell', 'job', '5300', 'monthly', '6', '4', '2', '5', '66.50.26.234', '', '', '', '4532 1893 5364 2788', '612', '2013/08'),
(70, 'Robert', 'Rouillard', 'robert@yahoo.com', '1339 Lynn Avenue', 'Appleton', 'WI', '54913', '6/11/1954', '715-525-8686', '715-525-8686', '396-60-9429', '', '', 'Retired', 'Retired', 'benefits', '1700', 'weekly', '7', '5', '6', '3', '61.147.82.178', '', '', '', '4485 1049 0307 2425', '699', '2017/10'),
(71, 'Russel', 'Meyer', 'russelmeyer@gmail.com', '4247 Pick Street', 'Yuma', 'CO', '80759', '2/23/1968', '970-630-2865', '', '523-37-7864', '', '', 'employed', 'Bell', 'job', '5300', 'monthly', '6', '4', '2', '5', '66.50.26.234', '', '', '', '4532 1893 5364 2788', '612', '2013/08'),
(72, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(73, 'Lisa', 'Robbins', 'LisaARobbins@dayrep.com', '3105 North Bend River Road', 'Morehead', 'KY', '40351', '12/27/1978', '606-783-9087', '606-783-9087', '401-12-2991', 'l200096002', 'KY', 'Retired', 'Retired', 'benefits', '1000', 'weekly', '2', '8', '6', '4', '207.182.158.171', 'neighbors', '10000914248', '281082384', '5150 8294 4176 6374', '255', '2015/07'),
(74, 'Sara', 'Stewart', 'SaraKStewart@teleworm.us', '4300 Joy Lane', 'Woodland Hills', 'CA', '91303', '11/18/1963', '818-595-4186', '818-595-4186', '566-57-9895', '3563519', 'CA', 'employed', 'Walmart', 'job', '2500', 'bi-weekly', '4', '3', '2', '1', '66.35.68.146', 'first national bank texas', '417630647', '111906271', '4916 3716 7001 0743', '468', '2013/12'),
(75, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(76, 'Carl', 'Laflamme', 'CarlJLaflamme@teleworm.us', '2116 Hillview Drive', 'Oakland', 'CA', '94612', '8/24/1985', '707-210-9013', '707-210-9013', '550-52-0676', 'u137268016', 'CA', 'Retired', 'Retired', 'benefits', '1800', 'monthly', '5', '6', '7', '8', '50.22.206.179', 'JP Morgan', '9837706384', '281088763', '5405 9957 1200 8409', '855', '2013/05'),
(77, 'Sara', 'Stewart', 'SaraKStewart@teleworm.us', '4300 Joy Lane', 'Woodland Hills', 'CA', '91303', '11/18/1963', '818-595-4186', '818-595-4186', '566-57-9895', '3563519', 'CA', 'employed', 'Walmart', 'job', '2500', 'bi-weekly', '4', '3', '2', '1', '66.35.68.146', 'first national bank texas', '417630647', '111906271', '4916 3716 7001 0743', '468', '2013/12'),
(78, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(79, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(80, 'Lisa', 'Robbins', 'LisaARobbins@dayrep.com', '3105 North Bend River Road', 'Morehead', 'KY', '40351', '12/27/1978', '606-783-9087', '606-783-9087', '401-12-2991', 'l200096002', 'KY', 'Retired', 'Retired', 'benefits', '1000', 'weekly', '2', '8', '6', '4', '207.182.158.171', 'neighbors', '10000914248', '281082384', '5150 8294 4176 6374', '255', '2015/07'),
(81, 'Carl', 'Laflamme', 'CarlJLaflamme@teleworm.us', '2116 Hillview Drive', 'Oakland', 'CA', '94612', '8/16/1952', '707-210-9013', '707-210-9013', '550-52-0676', 'u137268016', 'CA', 'Retired', 'Retired', 'benefits', '1800', 'monthly', '5', '6', '7', '8', '50.22.206.179', 'JP Morgan', '9837706384', '281088763', '5405 9957 1200 8409', '855', '2013/05'),
(82, 'Sara', 'Stewart', 'SaraKStewart@teleworm.us', '4300 Joy Lane', 'Woodland Hills', 'CA', '91303', '11/18/1963', '818-595-4186', '818-595-4186', '566-57-9895', '3563519', 'CA', 'employed', 'Walmart', 'job', '2500', 'bi-weekly', '4', '3', '2', '1', '66.35.68.146', 'first national bank texas', '417630647', '111906271', '4916 3716 7001 0743', '468', '2013/12'),
(83, 'Russel', 'Meyer', 'russelmeyer@gmail.com', '4247 Pick Street', 'Yuma', 'CO', '80759', '2/23/1968', '970-630-2865', '', '523-37-7864', '', '', 'employed', 'Bell', 'job', '5300', 'monthly', '6', '4', '2', '5', '66.50.26.234', '', '', '', '4532 1893 5364 2788', '612', '2013/08'),
(84, 'Robert', 'Rouillard', 'robert@yahoo.com', '1339 Lynn Avenue', 'Appleton', 'WI', '54913', '6/11/1954', '715-525-8686', '715-525-8686', '396-60-9429', '', '', 'Retired', 'Retired', 'benefits', '1700', 'weekly', '7', '5', '6', '3', '61.147.82.178', '', '', '', '4485 1049 0307 2425', '699', '2017/10'),
(85, 'Russel', 'Meyer', 'russelmeyer@gmail.com', '4247 Pick Street', 'Yuma', 'CO', '80759', '2/23/1968', '970-630-2865', '', '523-37-7864', '', '', 'employed', 'Bell', 'job', '5300', 'monthly', '6', '4', '2', '5', '66.50.26.234', '', '', '', '4532 1893 5364 2788', '612', '2013/08'),
(86, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(87, 'Lisa', 'Robbins', 'LisaARobbins@dayrep.com', '3105 North Bend River Road', 'Morehead', 'KY', '40351', '12/27/1978', '606-783-9087', '606-783-9087', '401-12-2991', 'l200096002', 'KY', 'Retired', 'Retired', 'benefits', '1000', 'weekly', '2', '8', '6', '4', '207.182.158.171', 'neighbors', '10000914248', '281082384', '5150 8294 4176 6374', '255', '2015/07'),
(88, 'Sara', 'Stewart', 'SaraKStewart@teleworm.us', '4300 Joy Lane', 'Woodland Hills', 'CA', '91303', '11/18/1963', '818-595-4186', '818-595-4186', '566-57-9895', '3563519', 'CA', 'employed', 'Walmart', 'job', '2500', 'bi-weekly', '4', '3', '2', '1', '66.35.68.146', 'first national bank texas', '417630647', '111906271', '4916 3716 7001 0743', '468', '2013/12'),
(89, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(90, 'Carl', 'Laflamme', 'CarlJLaflamme@teleworm.us', '2116 Hillview Drive', 'Oakland', 'CA', '94612', '8/24/1985', '707-210-9013', '707-210-9013', '550-52-0676', 'u137268016', 'CA', 'Retired', 'Retired', 'benefits', '1800', 'monthly', '5', '6', '7', '8', '50.22.206.179', 'JP Morgan', '9837706384', '281088763', '5405 9957 1200 8409', '855', '2013/05'),
(91, 'Sara', 'Stewart', 'SaraKStewart@teleworm.us', '4300 Joy Lane', 'Woodland Hills', 'CA', '91303', '11/18/1963', '818-595-4186', '818-595-4186', '566-57-9895', '3563519', 'CA', 'employed', 'Walmart', 'job', '2500', 'bi-weekly', '4', '3', '2', '1', '66.35.68.146', 'first national bank texas', '417630647', '111906271', '4916 3716 7001 0743', '468', '2013/12'),
(92, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(93, 'Patricia', 'Smolen', 'PatriciaRSmolen@teleworm.us', '2502 Lords Way', 'Atwood', 'TN', '38220', '5/17/1992', '731-662-6705', '731-662-6705', '763-01-0265', 'u137268016', 'TN', 'employed', 'KMART', 'job', '4000', 'daily', '6', '2', '8', '4', '216.244.71.142', 'st  louis community credit union', '10511459', '281082423', '5320 2229 7670 6004', '816', '2013/03'),
(94, 'Lisa', 'Robbins', 'LisaARobbins@dayrep.com', '3105 North Bend River Road', 'Morehead', 'KY', '40351', '12/27/1978', '606-783-9087', '606-783-9087', '401-12-2991', 'l200096002', 'KY', 'Retired', 'Retired', 'benefits', '1000', 'weekly', '2', '8', '6', '4', '207.182.158.171', 'neighbors', '10000914248', '281082384', '5150 8294 4176 6374', '255', '2015/07'),
(95, 'Carl', 'Laflamme', 'CarlJLaflamme@teleworm.us', '2116 Hillview Drive', 'Oakland', 'CA', '94612', '8/16/1952', '707-210-9013', '707-210-9013', '550-52-0676', 'u137268016', 'CA', 'Retired', 'Retired', 'benefits', '1800', 'monthly', '5', '6', '7', '8', '50.22.206.179', 'JP Morgan', '9837706384', '281088763', '5405 9957 1200 8409', '855', '2013/05'),
(96, 'Sara', 'Stewart', 'SaraKStewart@teleworm.us', '4300 Joy Lane', 'Woodland Hills', 'CA', '91303', '11/18/1963', '818-595-4186', '818-595-4186', '566-57-9895', '3563519', 'CA', 'employed', 'Walmart', 'job', '2500', 'bi-weekly', '4', '3', '2', '1', '66.35.68.146', 'first national bank texas', '417630647', '111906271', '4916 3716 7001 0743', '468', '2013/12'),
(97, 'Russel', 'Meyer', 'russelmeyer@gmail.com', '4247 Pick Street', 'Yuma', 'CO', '80759', '2/23/1968', '970-630-2865', '', '523-37-7864', '', '', 'employed', 'Bell', 'job', '5300', 'monthly', '6', '4', '2', '5', '66.50.26.234', '', '', '', '4532 1893 5364 2788', '612', '2013/08'),
(98, 'Robert', 'Rouillard', 'robert@yahoo.com', '1339 Lynn Avenue', 'Appleton', 'WI', '54913', '6/11/1954', '715-525-8686', '715-525-8686', '396-60-9429', '', '', 'Retired', 'Retired', 'benefits', '1700', 'weekly', '7', '5', '6', '3', '61.147.82.178', '', '', '', '4485 1049 0307 2425', '699', '2017/10'),
(99, 'Russel', 'Meyer', 'russelmeyer@gmail.com', '4247 Pick Street', 'Yuma', 'CO', '80759', '2/23/1968', '970-630-2865', '', '523-37-7864', '', '', 'employed', 'Bell', 'job', '5300', 'monthly', '6', '4', '2', '5', '66.50.26.234', '', '', '', '4532 1893 5364 2788', '612', '2013/08');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `newsid` int(11) NOT NULL,
  `news` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`newsid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsid`, `news`, `time`) VALUES
(1, 'This is Group No:8 From HLICA Welcome to My Website Update on', '2015-03-26 05:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `add` varchar(200) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `zip` int(11) NOT NULL,
  `atype` varchar(20) NOT NULL,
  `rtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`uid`, `uname`, `pwd`, `fname`, `lname`, `email`, `phone`, `add`, `city`, `state`, `country`, `zip`, `atype`, `rtime`) VALUES
(1, 'nirajkanjani', '1234412344', 'Niraj', 'Kanjani', 'nirajkanjani@gmail.com', 8000002443, '20 mukta madhu', '1', '3', '1', 380008, 'Buyer', '2013-01-04 19:54:41'),
(2, '', '1234412344', '', '', '', 0, '', '', '', '', 0, '', '2013-01-04 19:55:46'),
(3, '', 'ekta', 'ekta', 'ekta', 'ekta@gmail.com', 9377168445, 'paldi', '2', '2', '1', 380001, 'Buyer', '2013-01-22 10:56:00'),
(4, '', 'abc', 'abc', 'abc', 'abc@gmail.com', 988888888, 'asb', '1', '1', '1', 380061, 'Buyer', '2013-02-23 14:19:37'),
(5, '', 'mikael', 'mikael', 'markzak', 'mikaelmarkzak@gmail.com', 9898624209, 'gokul society', '1', '3', '1', 380008, 'Buyer', '2013-02-25 12:07:33'),
(6, '', 'jhonson', 'jhonson', 'thomas', 'jhonsonthomas@gmail.com', 8736134874, 'gujarat flats', '1', '3', '1', 380005, 'Buyer', '2013-02-25 12:09:41'),
(7, '', 'dwyane', 'dwyane', 'jhonson', 'dwyanejhonson@yahoo.com', 9832637421, 'shivranjini', '1', '3', '1', 380025, 'Buyer', '2013-02-25 12:10:56'),
(8, '', 'paul', 'Paul', 'Cranford', 'paulcranford@gmail.com', 8027212505, '4833 Selah Way', '4', '5', '3', 5404, 'Buyer', '2013-02-25 12:13:15'),
(9, '', 'mcnew', 'Douglas', 'McNew', 'mcnew@rediffmail.com', 6312594704, '1239 Clark Street', '4', '5', '3', 11968, 'Buyer', '2013-02-25 12:14:40'),
(10, '', 'ruth', 'Ruth', 'Temple', 'ruthtemple@hotmail.com', 4076288489, '3010 Linden Avenue', '2', '3', '1', 286312, 'Seller', '2013-02-25 12:16:26'),
(11, '', 'kimberly', 'Kimberly', 'Tremblay', 'kimberly@in.com', 8185972163, '4667 Joy Lane', '1', '3', '1', 380004, 'Seller', '2013-02-25 12:17:55'),
(12, '', 'michael', 'Michael', 'Russ', 'michael@facebook.com', 5732673194, '3591 Penn Street', '1', '3', '1', 634362, 'Seller', '2013-02-25 12:19:40'),
(13, '', 'deborah', 'Deborah', 'Nix', 'deborah@yahoo.com', 2486976371, '1291 Cunningham Court', '1', '3', '1', 380015, 'Seller', '2013-02-25 12:21:01'),
(14, '', 'tommy', 'Tommy', 'Campbell', 'tommy@gmail.com', 8178310529, '3099 Baker Avenue', '1', '3', '1', 380018, 'Seller', '2013-02-25 12:22:26'),
(15, 'jiteshL', 'J', 'jitesh', 'lakhwani', 'jiteshlakhwani@yahoo.com', 8866983810, 'fdshfjdshf', '1', '3', '1', 382340, 'Buyer', '2015-03-26 09:21:35'),
(39, '', '1234567890', 'lumia710', 'asdfghj', 'sagar1309@live.com', 123456, 'dddsdsd', '1', '3', '1', 4324, 'Buyer', '2015-03-27 10:14:41'),
(43, '', 'dddddddd', 'dg3332', '222442', 'gdg@dgd.com', 9223372036854775807, 'dgdgd', '1', '7', '1', 63525, 'Buyer', '2015-03-27 11:12:11');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `reportid` int(11) NOT NULL AUTO_INCREMENT,
  `buyer` text NOT NULL,
  `seller` text NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`reportid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sold_files`
--

CREATE TABLE IF NOT EXISTS `sold_files` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `fileid` int(11) NOT NULL,
  `buyerid` int(11) NOT NULL,
  `solddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `sold_files`
--

INSERT INTO `sold_files` (`sid`, `fileid`, `buyerid`, `solddate`) VALUES
(1, 1, 1, '2013-01-21 10:18:48'),
(5, 1, 3, '2013-01-22 10:56:41'),
(6, 1, 5, '2013-02-25 12:30:28'),
(7, 5, 5, '2013-02-25 12:30:42'),
(8, 6, 5, '2013-02-25 12:31:14'),
(9, 3, 6, '2013-02-25 12:32:19'),
(10, 4, 6, '2013-02-25 12:32:31'),
(11, 4, 7, '2013-02-25 12:33:00'),
(12, 2, 9, '2013-02-25 12:35:08'),
(13, 5, 9, '2013-02-25 12:35:20'),
(14, 2, 9, '2013-02-25 12:35:33'),
(15, 2, 1, '2015-03-28 11:39:28'),
(16, 5, 1, '2015-03-28 11:39:42');

-- --------------------------------------------------------

--
-- Table structure for table `sold_leads`
--

CREATE TABLE IF NOT EXISTS `sold_leads` (
  `slid` int(11) NOT NULL AUTO_INCREMENT,
  `fieldname` varchar(200) NOT NULL,
  `noof` int(11) NOT NULL,
  `buyerid` int(11) NOT NULL,
  `solddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`slid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `sold_leads`
--

INSERT INTO `sold_leads` (`slid`, `fieldname`, `noof`, `buyerid`, `solddate`) VALUES
(2, 'lastname,email,address', 10, 1, '2013-01-21 10:54:20'),
(3, 'address,city', 10, 1, '2013-01-21 10:56:39'),
(4, 'zip,dob,homephone', 8, 1, '2013-01-21 10:57:37'),
(6, 'lastname,email', 2, 1, '2013-01-22 10:27:30'),
(7, 'firstname,lastname,email', 40, 3, '2013-01-22 10:57:11'),
(8, 'state,zip,dob,homephone', 40, 5, '2013-02-25 12:30:16'),
(9, 'lead_id,email,state,zip,dob,workphone,ssn,dlno,employmentstatus,cvv', 30, 6, '2013-02-25 12:32:07'),
(10, 'lead_id,firstname,lastname,email,address,city,state,zip,dob,homephone,workphone,ssn,dlno,dlstate,employmentstatus,empname,incometype,income,payperiod,empyears,empmonths,resyears,resmonths,ipaddress,ba', 34, 8, '2013-02-25 12:34:36'),
(11, 'lead_id,email,address,city,dob,ssn', 40, 9, '2013-02-25 12:36:06'),
(12, 'firstname,lastname,email', 5, 1, '2015-03-23 05:41:08'),
(13, 'firstname,lastname,email,dob', 10, 1, '2015-03-23 09:51:20'),
(14, 'firstname,lastname,email,address,city,dob,homephone,ipaddress', 13, 15, '2015-03-27 10:46:37'),
(15, 'firstname,email,dob,income', 99, 43, '2015-03-27 11:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(200) NOT NULL,
  `co_id` int(11) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `co_id`) VALUES
(1, 'Maharashtra', 1),
(2, 'Dehli', 1),
(3, 'Gujarat', 1),
(4, 'Rajastan', 1),
(5, 'New York', 3),
(6, 'Texas', 3),
(7, 'New Jersey', 3),
(8, 'Alabama', 3),
(9, 'colarado', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
