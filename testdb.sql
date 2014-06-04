-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 03, 2014 at 06:35 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE IF NOT EXISTS `advertisement` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `place_name` varchar(50) NOT NULL,
  `ad_title` varchar(500) NOT NULL,
  `ad_content` varchar(500) NOT NULL,
  `ad_contact` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`id`, `place_name`, `ad_title`, `ad_content`, `ad_contact`) VALUES
(52, 'First time', 'this istee', 'tee', 124),
(53, 'First time', 'this istee', 'tee', 124),
(54, 'First time', 'this istee', 'tee', 124),
(55, 'First time', 'this istee', 'tee', 124),
(56, 'First time', 'this istee', 'tee', 124),
(57, 'First time', 'this istee', 'tee', 124),
(58, 'First time', 'this istee', 'tee', 124),
(59, 'third time', 'Third time test', 'My name is Ishwor Khanal', 1234),
(60, 'First time', 'wow 40% offf', 'this is in the occasion of exam', 10000),
(61, 'First time', 'wow get it', 'this is test', 1234),
(62, 'Fourth time', '100% off', 'fourth test', 1234),
(63, 'sixth page', 'this is sixth 74% off', 'sfsd ', 1000),
(64, 'seventh', '7% off', 'dsfdsa', 124),
(65, 'seventh', 'new advertisement', '78% off', 1234),
(66, 'last time', 'wow 40% offf', 'asfds', 124),
(67, 'last time', 'new add', 'sdfsda', 447),
(68, 'modified tenth', 'wow finally found it', 'this is data ', 101),
(69, 'Eleventh', 'advertisement', 'sdfdsa', 124),
(70, 'First time', 'This is first time advertisement', 'Get it 50 %', 12345),
(71, 'Second time', 'advertisement starts here', 'this is ad', 41),
(72, 'twenteeth', 'this is absolutly free', 'get it', 124);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `topic` text NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `topic`, `details`) VALUES
(1, 'sdfas', 'asdfasdfas'),
(2, 'politics', 'about politics asdfasdfas'),
(3, 'politics', 'about politics asdfasdfas'),
(4, 'politicsasdfasdfasdfasdfasd', 'about politics asdfasdfaassadfasdfasdfas'),
(5, 'Exam', 'about exam'),
(8, 'Nepal ko chor', 'Binod chaudhari '),
(9, 'This is hot topic', 'detaisl is ');

-- --------------------------------------------------------

--
-- Table structure for table `create_homepage`
--

CREATE TABLE IF NOT EXISTS `create_homepage` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `userid` varchar(250) NOT NULL,
  `placename` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `phrase` varchar(100) NOT NULL,
  `webAddress` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `create_homepage`
--

INSERT INTO `create_homepage` (`id`, `userid`, `placename`, `location`, `description`, `phrase`, `webAddress`) VALUES
(74, 'ishwor@yahoo.com', 'firsttime', 'USA', 'this is content', 'a b c', 'firsttime.php'),
(75, 'sagar@yahoo.com', 'sagar', 'melbourne', 'this is the page created by sagar modified once\r\n', 'a b c d', 'sagar.php'),
(76, 'sagar@yahoo.com', 'pandey', 'Bundoora', 'this is created by sagar', 'one two', 'pandey.php'),
(77, 'ishwor@yahoo.com', 'second time', 'Canada', 'this is the page created by Ishwor', 'one two', 'second time.php');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `page_path` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `yourname` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `yourname`, `email`, `password`) VALUES
(41, 'ishwor', 'ishwor@yahoo.com', '098f6bcd4621d373cade4e832627b4f6'),
(42, 'Sagar', 'sagar@yahoo.com', '098f6bcd4621d373cade4e832627b4f6');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `start_bloggin_id` int(100) NOT NULL,
  `reply` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `start_bloggin`
--

CREATE TABLE IF NOT EXISTS `start_bloggin` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `topic` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
