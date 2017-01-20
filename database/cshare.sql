-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2013 at 12:52 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cshare`
--
CREATE DATABASE IF NOT EXISTS `cshare` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cshare`;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(500) NOT NULL DEFAULT 'temp',
  `file_type` varchar(50) NOT NULL,
  `size` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `username` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `file_name`, `file_type`, `size`, `date`, `username`) VALUES
(7, 'lbp2900.pdf', 'application/pdf', 862909, '2013-10-16', '(Ajay)'),
(8, 'Tobii_Using_EyeTracking_to_Test_Mobile_Devices_WhitePaper.pdf', 'application/pdf', 1893478, '2013-10-16', '(Ajay)'),
(9, 'ewastereport2.pdf', 'application/pdf', 2063212, '2013-10-16', '(Ashok)'),
(10, 'Exp_04.pdf', 'application/pdf', 126887, '2013-10-16', '(Ashok)'),
(12, 'birth.doc', 'application/msword', 40448, '2013-10-16', '(Ashok)'),
(13, 'cooltext1199219920.png', 'image/png', 19023, '2013-10-16', '(Ashok)'),
(14, 'cooltext1201775524.png', 'image/png', 19289, '2013-10-16', '(Ashok)'),
(15, 'EyeTrackingTechnicalpaper (2).pdf', 'application/pdf', 450562, '2013-10-16', '(Ashok)'),
(16, 'ieee_smc99_hci-eyegaze.pdf', 'application/pdf', 978140, '2013-10-16', '(Ajay)'),
(17, '16Hz-20kHz-Exp-1f-5sec.mp3', 'audio/mp3', 40818, '2013-10-16', '(Ajay)'),
(18, 'small.mp4', 'video/mp4', 383631, '2013-10-16', '(Ajay)'),
(19, '16Hz-1600Hz-Exp-1f-10sec.mp3', 'audio/mp3', 60568, '2013-10-16', '(Ashok)'),
(20, '11561.jpg', 'image/jpeg', 1996241, '2013-10-16', '(Ajay)'),
(21, 'DSC_0391.jpg', 'image/jpeg', 761093, '2013-10-16', '(Ajay)'),
(22, 'DSC_0406.jpg', 'image/jpeg', 776292, '2013-10-16', '(Ajay)'),
(23, '424771_438151109564490_408666623_n-1.jpg', 'image/jpeg', 97827, '2013-10-16', '(Ajay)'),
(24, 'startlogo.png', 'image/png', 22817, '2013-10-17', '(Ajay)');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE IF NOT EXISTS `user_data` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(25) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `Password` varchar(100) NOT NULL COMMENT 'minimum 6 characters',
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'contain @ sign',
  `date` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `tempuser` varchar(25) NOT NULL,
  `temppass` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Password` (`Password`),
  FULLTEXT KEY `f_name` (`f_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `f_name`, `l_name`, `Password`, `email`, `date`, `gender`, `tempuser`, `temppass`) VALUES
(30, '(Ajay)', '(Thorve)', 'abcd', '(ajaytm123@gmail.com)', '1994-05-15', '(male)', '', ''),
(31, '(Ashok)', '(Yadav)', '123', '(yashok42@gmail.com)', '1993-07-20', '(male)', '', ''),
(35, '(a)', '(a)', 'a', '(a)', '2013-09-12', '(male)', '', ''),
(38, '(pallavi)', '(Thorve)', 'adsa', '(palthorve2015@gmail.com)', '2013-10-23', '(female)', '', ''),
(39, '(Anil)', '(Thorve)', '123456', '(anilthoorve@gmail.com)', '1967-12-12', '(male)', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
