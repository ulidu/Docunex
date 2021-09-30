-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 30, 2021 at 07:51 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `docunex`
--

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `document_ID` int NOT NULL AUTO_INCREMENT,
  `document_title` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `document_content` varchar(1000) NOT NULL,
  `document_caption` varchar(1000) NOT NULL,
  `document_author` varchar(1000) NOT NULL,
  `document_created_date` date NOT NULL,
  `document_category` varchar(1000) NOT NULL,
  `document_tag` varchar(500) NOT NULL,
  PRIMARY KEY (`document_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`document_ID`, `document_title`, `document_content`, `document_caption`, `document_author`, `document_created_date`, `document_category`, `document_tag`) VALUES
(39, 'dhdh', 'fhdfhd', 'dfhdfhdf', 'Robert De Niro', '2021-10-01', 'Documents', 'Array'),
(38, 'dfgs', 'gsxdg', 'sfdgsdgs', 'Robert De Niro', '2021-10-01', 'Documents', 'Array'),
(37, 'gchfth', 'fhfthrf', 'ghr', 'Robert De Niro', '2021-10-01', 'Documents', 'Array'),
(36, 'fghsrft', 'ghxfghhfgh', 'ghjfsgj', 'Robert De Niro', '2021-10-01', 'Documents', ''),
(35, 'fgd', 'fgdhfdgh', 'hghdh', 'Robert De Niro', '2021-09-30', 'Documents', 'Array'),
(34, 'fgd', 'fgdhfdgh', 'hghdh', 'Robert De Niro', '2021-09-30', 'Documents', 'Array'),
(33, 'nfgnfgn', 'nfgnfgnf', 'hcfgjhfg', 'Robert De Niro', '2021-09-30', 'Documents', 'Array'),
(32, 'regedrger', 'dfgedrgedrg', 'ergerger', 'Robert De Niro', '2021-09-30', 'Documents', ''),
(31, 'fxghrfthfyh', 'hrtdyhrtyjtyj', 'jtydjtydjytjtd', 'Robert De Niro', '2021-09-30', 'Documents', 'Array'),
(30, 'rthrth', 'hrthrth', 'rthrthrth', 'Robert De Niro', '2021-09-30', 'Documents', 'Array'),
(29, 'rthrth', 'hrthrth', 'rthrthrth', 'Robert De Niro', '2021-09-30', 'Documents', 'Array'),
(28, 'rthrth', 'hrthrth', 'rthrthrth', 'Robert De Niro', '2021-09-30', 'Documents', 'Array'),
(27, 'rthrth', 'hrthrth', 'rthrthrth', 'Robert De Niro', '2021-09-30', 'Documents', 'Array');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

DROP TABLE IF EXISTS `forum`;
CREATE TABLE IF NOT EXISTS `forum` (
  `forum_ID` int NOT NULL AUTO_INCREMENT,
  `topic_title` varchar(200) DEFAULT NULL,
  `topic_content` varchar(200) DEFAULT NULL,
  `topic_author` varchar(200) DEFAULT NULL,
  `topic_created_date` varchar(200) DEFAULT NULL,
  `topic_category` varchar(200) DEFAULT NULL,
  `topic_sub_category` varchar(200) DEFAULT NULL,
  `forum_status` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`forum_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`forum_ID`, `topic_title`, `topic_content`, `topic_author`, `topic_created_date`, `topic_category`, `topic_sub_category`, `forum_status`) VALUES
(50, 'gfhtfh', 'thrtrh', 'Robert De Niro', '2021-09-30 18:39:04', 'General', 'HR', 'closed'),
(51, 'dhtdhd', 'hdthdrth', 'Robert De Niro', '2021-09-30 18:45:31', 'General', 'HR', 'closed'),
(52, 'hfhftjrtyjrtfyjrjrtj', 'rtjrtjrtjrtj', 'Robert De Niro', '2021-09-30 21:59:48', 'General', 'HR', 'closed'),
(53, 'sgdh', 'afsfa', 'Robert De Niro', '2021-10-01 01:08:52', 'General', 'HR', 'closed');

-- --------------------------------------------------------

--
-- Table structure for table `forum_reply`
--

DROP TABLE IF EXISTS `forum_reply`;
CREATE TABLE IF NOT EXISTS `forum_reply` (
  `reply_ID` int NOT NULL AUTO_INCREMENT,
  `forum_ID` varchar(200) DEFAULT NULL,
  `reply_date` varchar(200) DEFAULT NULL,
  `reply_content` varchar(200) DEFAULT NULL,
  `replied_by` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`reply_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum_reply`
--

INSERT INTO `forum_reply` (`reply_ID`, `forum_ID`, `reply_date`, `reply_content`, `replied_by`) VALUES
(2, '50', '2021-09-30 18:39:21', 'rhtfhrtf', 'John Doe'),
(3, '50', '2021-09-30 18:39:25', 'gxhfth', 'John Doe'),
(4, '51', '2021-09-30 18:45:53', 'adwafsg', 'John Doe'),
(5, '51', '2021-09-30 18:45:58', 'rger', 'John Doe'),
(6, '51', '2021-09-30 18:46:02', 'fgdrg', 'John Doe'),
(7, '52', '2021-09-30 22:00:21', 'dfhdrhthht th t tejdfhd', 'John Doe'),
(8, '52', '2021-09-30 22:00:26', 'dhtfrjrf', 'John Doe');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
