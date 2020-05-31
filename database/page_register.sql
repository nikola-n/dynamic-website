-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 25, 2019 at 01:09 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `page_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link_cover` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `about` mediumtext,
  `mobile` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `before_contact` mediumtext,
  `service_product` varchar(255) NOT NULL,
  `social_id` int(11) NOT NULL,
  `pictures_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pictures_id` (`pictures_id`),
  KEY `social_id` (`social_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

DROP TABLE IF EXISTS `pictures`;
CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic1` varchar(255) DEFAULT NULL,
  `pic2` varchar(255) DEFAULT NULL,
  `pic3` varchar(255) DEFAULT NULL,
  `text1` mediumtext,
  `text2` mediumtext,
  `text3` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

DROP TABLE IF EXISTS `social`;
CREATE TABLE IF NOT EXISTS `social` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `linkedin` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `google_plus` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_ibfk_1` FOREIGN KEY (`pictures_id`) REFERENCES `pictures` (`id`),
  ADD CONSTRAINT `pages_ibfk_2` FOREIGN KEY (`social_id`) REFERENCES `social` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
