-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 19, 2019 at 09:38 AM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

DROP TABLE IF EXISTS `assignment`;
CREATE TABLE IF NOT EXISTS `assignment` (
  `branch` varchar(10) NOT NULL,
  `session` varchar(15) NOT NULL,
  `last_date` varchar(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `code` varchar(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `assignment` varchar(999) NOT NULL,
  PRIMARY KEY (`assignment`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`branch`, `session`, `last_date`, `subject`, `code`, `title`, `assignment`) VALUES
('IT', '2016-20', '2019-05-04', 'Computer Architecture', 'CA-303', 'Assignment 1', 'file_upload/IT2016-20gaj.html.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `to_id` varchar(25) NOT NULL,
  `from_id` varchar(25) NOT NULL,
  `msg` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`msg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `to_id`, `from_id`, `msg`, `timestamp`, `status`) VALUES
(4, 'STU-002', 'TEA-003', 'helloo Student', '2019-05-09 02:35:08', 0),
(2, 'TEA-003', 'STU-002', 'dsgdg', '2019-05-09 02:28:37', 0),
(3, 'TEA-003', 'STU-002', 'helloo teacher', '2019-05-09 02:35:08', 0),
(14, 'TEA-003', 'STU-002', 'nhjj', '2019-05-09 14:03:27', 0),
(5, 'TEA-003', 'STU-002', 'zxcdhvfjb', '2019-05-09 02:56:33', 0),
(6, 'TEA-003', 'STU-002', 'dsdsdsd', '2019-05-09 03:03:13', 0),
(7, 'TEA-003', 'STU-002', 'zxcdhvfjb', '2019-05-09 03:04:45', 0),
(8, 'STU-002', 'TEA-003', 'zxcdhvfjb', '2019-05-09 03:02:45', 0),
(9, 'TEA-003', 'STU-002', '', '2019-05-09 03:13:06', 0),
(10, 'TEA-003', 'STU-002', '', '2019-05-09 03:14:07', 0),
(13, 'TEA-003', 'STU-002', 'qwerty', '2019-05-09 14:02:56', 0),
(15, 'STU-002', 'TEA-003', 'dre', '2019-05-09 14:11:12', 0),
(16, 'STU-002', 'TEA-003', 'dre', '2019-05-09 14:21:41', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

DROP TABLE IF EXISTS `notice`;
CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `teacher_id` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `notice` varchar(999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `teacher_id`, `title`, `notice`) VALUES
(1, 'TEA-003', 'ram ji chaal dekho', 'notice/campusonlineassessment.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `stu`
--

DROP TABLE IF EXISTS `stu`;
CREATE TABLE IF NOT EXISTS `stu` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `roll` int(7) NOT NULL,
  `dept` varchar(15) NOT NULL,
  `session` varchar(18) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu`
--

INSERT INTO `stu` (`id`, `user_id`, `name`, `dob`, `gender`, `mail`, `password`, `mobile`, `roll`, `dept`, `session`) VALUES
(1, 'STU-001', 'f', '2004-01-01', 'female', '', '12345', '7903611131', 1501039, 'IT', '2016-20'),
(2, 'STU-002', 'hdcus', '2019-02-01', 'male', 'frc@gmail.com', '12345', '7903611131', 1501032, 'IT', '2016-20'),
(3, 'STU-003', 'Gaju', '2016-07-15', 'male', 'gajuqw@gmail.com', '12345', '7903611131', 1501025, 'CSE', '2015-19');

-- --------------------------------------------------------

--
-- Table structure for table `tea`
--

DROP TABLE IF EXISTS `tea`;
CREATE TABLE IF NOT EXISTS `tea` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `teacher_id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(15) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `cid` varchar(15) NOT NULL,
  `depart` varchar(20) NOT NULL,
  `teapic` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tea`
--

INSERT INTO `tea` (`id`, `teacher_id`, `name`, `dob`, `gender`, `mail`, `password`, `mobile`, `cid`, `depart`, `teapic`) VALUES
(1, 'TEA-001', 'gajanand kumar', '2019-02-07', 'male', 'rt@gmail.com', '12345', '7903611131', 'hukoi', 'IT', 'teapic/1167297646t3.jpg'),
(2, 'TEA-002', 'gajanand kumar', '2019-02-07', 'male', 'gaja@gmail.com', '12345', '7903611131', 'hukoi', 'IT', 'teapic/710733976t1.jpg'),
(3, 'TEA-003', 'gajanand kumar', '2019-02-07', 'male', 'f@gmail.com', '12345', '7903611131', 'hukoi', 'IT', 'teapic/1044251920t1.jpg'),
(4, 'TEA-004', 'fthbyf', '2019-02-07', 'male', 'ft@gmail.com', '12345', '7903611131', 'hukoi', 'IT', 'teapic/532483033g5.jpg'),
(5, 'TEA-005', 'fty', '2019-02-07', 'male', 'fat@gmail.com', '12345', '7903611131', 'hukoi', 'IT', 'teapic/808732299g3.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
