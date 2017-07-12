-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2017 at 11:12 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `catagory` varchar(20) NOT NULL,
  `album` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `username`, `catagory`, `album`, `image`) VALUES
(2, 'admin', 'default', '', '39742_S_Blood-Donor_1454261183.jpg'),
(3, 'admin', 'default', '', 'onlinelogomaker-060915-1026060915-1027_1454261502.png'),
(4, 'admin', 'default', '', '6_1454261633.jpg'),
(5, 'admin', 'Technology', 'default', '5_1454262147.jpg'),
(6, 'admin', 'Default', 'default', '8_1454263118.jpg'),
(11, 'login', 'Default', 'default', '7777_1454270720.JPG'),
(12, 'login', 'Technology', 'default', '888_1454270737.jpg'),
(13, 'login', 'Flower', 'default', 'Chrysanthemum_1454270749.jpg'),
(14, 'login', 'Nature', 'default', 'Lighthouse_1454270765.jpg'),
(15, 'www', 'Technology', 'default', 'rsz_ashraful_alam_1499691198.jpg'),
(16, 'www', 'Technology', 'default', '4034_Adobe_Illustrator_Cs1024_768_1499691234.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dob` varchar(11) NOT NULL,
  `mobile` int(12) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `firstname`, `lastname`, `dob`, `mobile`, `gender`, `email`, `username`, `password`) VALUES
(67, 'new ', 'user', '1992-04-01', 1670520890, 'Male', 'admin@admin.com', 'admin', 'admin'),
(68, 'login', 'new', '2016-02-16', 123458, 'Male', 'mrobin132@gmail.com', 'login', 'login'),
(69, 'Md. Ashraful', 'Alam', '2017-07-20', 1670520890, 'Male', 'robinkhanbd@yahoo.com', 'www', 'www');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(67, 'admin', 'admin', 'admin@admin.com'),
(68, 'login', 'login', 'mrobin132@gmail.com'),
(69, 'www', 'www', 'robinkhanbd@yahoo.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
