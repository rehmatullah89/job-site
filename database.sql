-- phpMyAdmin SQL Dump
-- version 2.11.8.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 29, 2009 at 04:19 PM
-- Server version: 4.1.20
-- PHP Version: 4.3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


-- --------------------------------------------------------

--
-- Table structure for table `mobagi_employer`
--

CREATE TABLE IF NOT EXISTS `mobagi_employer` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(20) NOT NULL default '',
  `password` varchar(50) NOT NULL default '',
  `email` varchar(40) NOT NULL default '',
  `firstname` varchar(10) default NULL,
  `lastname` varchar(10) default NULL,
  `middlename` varchar(10) default NULL,
  `title` varchar(15) NOT NULL default '',
  `address` varchar(20) default NULL,
  `city` varchar(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mobagi_employer`
--

INSERT INTO `mobagi_employer` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `middlename`, `title`, `address`, `city`) VALUES
(2, 'Moe', '8c6ae142dcaf7a80bda8e0fe217f1156a4842ca8', 'm_obegi87@hotmail.com', 'Mohamad', 'Obagi', '', 'employer', 'mousaytbe', 'beirut'),
(3, 'mayayeta', 'dca8d0e62f74667ee93e142c7e74a1b9ba4ed943', 'mayayeta@hotmail.com', 'maya', 'barbeesh', '', 'employer', 'da7ye', 'beirut');

-- --------------------------------------------------------

--
-- Table structure for table `mobagi_jobs`
--

CREATE TABLE IF NOT EXISTS `mobagi_jobs` (
  `title` varchar(20) NOT NULL default '',
  `description` text NOT NULL,
  `username` varchar(20) NOT NULL default '',
  `industry` varchar(20) NOT NULL default '',
  `role` varchar(20) NOT NULL default '',
  `career` varchar(20) NOT NULL default '',
  `location` varchar(20) NOT NULL default '',
  KEY `title` (`title`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobagi_jobs`
--

INSERT INTO `mobagi_jobs` (`title`, `description`, `username`, `industry`, `role`, `career`, `location`) VALUES
('tasd', 'dasdasdas', 'Moe', 'ads', 'das', 'ads', 'das'),
('tasd', 'dasdasdas', 'Moe', 'ads', 'das', 'ads', 'das'),
('Web developer', '', 'Moe', 'Computer science', 'Programmer', '', 'Lebanon');

-- --------------------------------------------------------

--
-- Table structure for table `mobagi_jobseeker`
--

CREATE TABLE IF NOT EXISTS `mobagi_jobseeker` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(20) NOT NULL default '',
  `password` varchar(50) NOT NULL default '',
  `email` varchar(40) NOT NULL default '',
  `firstname` varchar(10) default NULL,
  `lastname` varchar(10) default NULL,
  `middlename` varchar(10) default NULL,
  `title` varchar(15) NOT NULL default '',
  `address` varchar(20) default NULL,
  `city` varchar(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mobagi_jobseeker`
--

INSERT INTO `mobagi_jobseeker` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `middlename`, `title`, `address`, `city`) VALUES
(1, 'moe', '8c6ae142dcaf7a80bda8e0fe217f1156a4842ca8', 'm_obegi87@hotmail.co', 'Mohamad', 'Obagi', '', 'Mr', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mobagi_resume`
--

CREATE TABLE IF NOT EXISTS `mobagi_resume` (
  `username` varchar(20) NOT NULL default '',
  `title` varchar(10) NOT NULL default '',
  `resume` longtext NOT NULL,
  `skills` longtext NOT NULL,
  `experience` longtext NOT NULL,
  `education` longtext NOT NULL,
  `language` varchar(15) NOT NULL default '',
  `salary` varchar(15) NOT NULL default '',
  `degree` varchar(15) NOT NULL default '',
  `location` varchar(15) NOT NULL d