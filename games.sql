-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 21, 2021 at 06:33 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game_catalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
CREATE TABLE IF NOT EXISTS `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `version` varchar(256) NOT NULL,
  `date-added` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `version`, `date-added`) VALUES
(1, 'Call of Duty (2010)', '2010', '2010-02-12'),
(2, 'Call of Duty (2013)', '2013', '2013-02-01 '),
(3, 'Call of Duty (2015)', '2015', '2015-03-03 '),
(4, 'Call of Duty (2017)', '2017', '2017-02-02 '),
(5, 'Call of Duty (2019)', '2019', '2019-03-03 '),
(6, 'Call of Duty (2020)', '2020', '2020-01-01 '),
(7, 'Mortal Combat (2010)', '2010', '2010-02-12'),
(8, 'Mortal Combat (2013)', '2013', '2013-02-01'),
(9, 'Mortal Combat (2015)', '2015', '2015-03-03'),
(10, 'Mortal Combat (2017)', '2017', '2017-02-02'),
(11, 'Mortal Combat (2019)', '2019', '2019-03-03'),
(12, 'Mortal Combat (2020)', '2020', '2020-01-01'),
(13, 'FIFA (2010)', '2010', '2010-02-12'),
(14, 'FIFA (2013)', '2013', '2013-02-01'),
(15, 'FIFA (2015)', '2015', '2015-03-03'),
(16, 'FIFA (2017)', '2017', '2017-02-02'),
(17, 'FIFA (2019)', '2019', '2019-03-03'),
(18, 'FIFA (2020)', '2020', '2020-01-01'),
(19, 'Just Cause (2010)', '2010', '2010-02-12'),
(20, 'Just Cause (2013)', '2013', '2013-02-01'),
(21, 'Just Cause (2015)', '2015', '2015-03-03'),
(22, 'Just Cause (2017)', '2017', '2017-02-02'),
(23, 'Just Cause (2019)', '2019', '2019-03-03'),
(24, 'Just Cause (2020)', '2020', '2020-01-01'),
(25, 'Apex Legend (2010)', '2010', '2010-02-12'),
(26, 'Apex Legend (2013)', '2013', '2013-02-01'),
(27, 'Apex Legend (2015)', '2015', '2015-03-03'),
(28, 'Apex Legend (2017)', '2017', '2017-02-02'),
(29, 'Apex Legend (2019)', '2019', '2019-03-03'),
(30, 'Apex Legend (2020)', '2020', '2020-01-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
