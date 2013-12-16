-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 16 dec 2013 om 09:28
-- Serverversie: 5.6.12-log
-- PHP-versie: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `nom`
--
CREATE DATABASE IF NOT EXISTS `nom` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `nom`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `koffers`
--

CREATE TABLE IF NOT EXISTS `koffers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `object` varchar(255) NOT NULL,
  `videosource` varchar(255) NOT NULL,
  `audiosource` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `cast` varchar(255) NOT NULL,
  `year` smallint(4) DEFAULT '0',
  `category1` tinyint(2) DEFAULT '0',
  `category2` tinyint(2) DEFAULT '0',
  `category3` tinyint(2) DEFAULT '0',
  `rating` float DEFAULT '0',
  `tags` varchar(255) NOT NULL,
  `featured` tinyint(1) DEFAULT '0',
  `savedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
