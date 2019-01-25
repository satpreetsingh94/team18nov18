-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2019 at 10:57 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wsdesign`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comments` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `comments`) VALUES
(1, 'Gaurang P Patel', 'gaurangpatelm.3056@gmail.com', 'demo'),
(2, 'happy', 'happy123@gmail.com', 'hello happy..!!!'),
(3, 'hello', 'hello@gmail.com', 'this is demo'),
(4, 'gp', 'gp@gmail.com', 'hello this is new demo of new page'),
(5, 'gp', 'gp@gmail.com', 'hello this is new form demo'),
(6, 'gp', 'gp@gmail.com', 'hello this is new form demo'),
(7, 'gp', 'gp@gmail.com', 'hello this is button demo'),
(8, 'gaurang patel', 'gp@gmail.com', 'demo testing'),
(9, 'gaurang patel', 'gaurangpatelm.3056@gmail.com', 'demo insert');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fullname`, `password`, `emailid`, `contact`, `address`) VALUES
(1, 'Gaurang', 'Patel', 'gp@gmail.com', '8511242346', 'AT:mahisa'),
(3, 'happy', 'happy', 'happy123@gmail.com', '9876543210', 'hello  happy this is demo of insert'),
(4, 'mehul', 'patel', 'mehul@gmail.com', '987654321', 'austalia'),
(5, 'ashish', 'patel', 'ashis@gmail.com', '9876543210', 'this is a testing'),
(6, 'gaurang', 'patel', 'gp@gmail.com', '9898989898', 'anand'),
(7, 'gaurang', 'patel', 'gaurangpatelm.3056@gmail.com', '9898989898', 'testing'),
(8, 'gaurang', 'patel', 'gp@gmail.com', '9898989898', 'test'),
(9, 'happy', '12345', 'happy123@gmail.com', '9879878888', 'anand');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
