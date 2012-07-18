-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2012 at 10:46 AM
-- Server version: 5.1.63
-- PHP Version: 5.3.6-13ubuntu3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `game_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `TopScorers`
--

CREATE TABLE IF NOT EXISTS `TopScorers` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(10) NOT NULL,
  `highScore` int(11) NOT NULL,
  `gameType` text NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `TopScorers`
--

INSERT INTO `TopScorers` (`userID`, `userName`, `highScore`, `gameType`, `dateTime`) VALUES
(36, 'ghezal', 100, '2D', '2012-07-12 14:12:02'),
(35, 'jan', 97, '2D', '2012-07-12 14:10:48'),
(34, 'games', 70, '1D', '2012-07-12 14:06:20'),
(33, 'ahmad', 91, '2D', '2012-07-12 09:26:50'),
(37, 'niaz', 94, '3D', '2012-07-12 14:15:24');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
