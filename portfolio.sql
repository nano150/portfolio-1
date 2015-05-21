-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2015 at 07:23 PM
-- Server version: 5.5.43
-- PHP Version: 5.3.10-1ubuntu3.18

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `title`, `content`) VALUES
(1, 'about', '<p>a very minimal, personal portfolio site script coded with codeigniter. it uses a template library which very basic and open to develop, admin panel to change contents. i will improve it a little more, adding my github page, surely you can suggest or ask anything you want.</p>\r\n\r\n<p>a very minimal, personal portfolio site script coded with codeigniter. it uses a template library which very basic and open to develop, admin panel to change contents. i will improve it a little more, adding my github page, surely you can suggest or ask anything you want.</p>\r\n'),
(2, 'project', '<p>a very minimal, personal portfolio site script coded with codeigniter. it uses a template library which very basic and open to develop, admin panel to change contents. i will improve it a little more, adding my github page, surely you can suggest or ask anything you want.</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(3, 'contact', '<p>email</p>\r\n\r\n<p>facebook</p>\r\n\r\n<p>linkedin</p>\r\n\r\n<p>bla bla</p>\r\n\r\n<p>...</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `desc` varchar(300) NOT NULL,
  `keyw` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`title`, `author`, `desc`, `keyw`, `admin_name`, `admin_password`) VALUES
('ugur kymclr', 'ugur kymclr', 'site description bla bla ', 'php, web developer, back-end', 'admin', '$2y$10$xZKeb03vWkg6n./gnMQBruoNd4oMMjxh5V9Owq9KP71Nn/GsRs6Su');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
