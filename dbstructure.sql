-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2013 at 11:37 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test2`
--

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Videosource` varchar(255) NOT NULL,
  `Thumbnailsource` varchar(255) NOT NULL,
  `Tags` varchar(255) NOT NULL,
  `Setting` varchar(255) NOT NULL,
  `Characters` varchar(255) NOT NULL,
  `Year` int(11) NOT NULL,
  `Emotion` int(11) NOT NULL,
  `Happiness` int(11) NOT NULL,
  `Amusing` int(11) NOT NULL,
  `Rating` tinyint(4) NOT NULL,
  UNIQUE KEY `ID` (`ID`,`Videosource`,`Thumbnailsource`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
