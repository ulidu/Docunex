-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 30, 2021 at 01:10 PM
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
  PRIMARY KEY (`document_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`forum_ID`, `topic_title`, `topic_content`, `topic_author`, `topic_created_date`, `topic_category`, `topic_sub_category`, `forum_status`) VALUES
(50, 'gfhtfh', 'thrtrh', 'Robert De Niro', '2021-09-30 18:39:04', 'General', 'HR', 'closed');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum_reply`
--

INSERT INTO `forum_reply` (`reply_ID`, `forum_ID`, `reply_date`, `reply_content`, `replied_by`) VALUES
(2, '50', '2021-09-30 18:39:21', 'rhtfhrtf', 'John Doe'),
(3, '50', '2021-09-30 18:39:25', 'gxhfth', 'John Doe');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
