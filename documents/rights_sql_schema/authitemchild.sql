-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2014 at 12:50 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sats`
--

-- --------------------------------------------------------

--
-- Table structure for table `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) COLLATE utf8_bin NOT NULL,
  `child` varchar(64) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `authitemchild`
--

INSERT INTO `authitemchild` (`parent`, `child`) VALUES
('cultural_attache_role', 'CulturalAttache.profileCa.*'),
('CulturalAttache.profileCa.*', 'CulturalAttache.profileCa.Index'),
('CulturalAttache.profileCa.*', 'CulturalAttache.profileCa.Update'),
('CulturalAttache.profileCa.*', 'CulturalAttache.profileCa.View'),
('ministry_role', 'Ministry.Default.*'),
('Ministry.Default.*', 'Ministry.Default.Index'),
('ministry_role', 'Ministry.ManageCa.*'),
('Ministry.ManageCa.*', 'Ministry.ManageCa.Create'),
('Ministry.ManageCa.*', 'Ministry.ManageCa.Index'),
('Ministry.ManageCa.*', 'Ministry.ManageCa.Update'),
('Ministry.ManageCa.*', 'Ministry.ManageCa.View'),
('cultural_attache_role', 'User.Login.Login'),
('ministry_role', 'User.Login.Login'),
('cultural_attache_role', 'User.Logout.Logout'),
('ministry_role', 'User.Logout.Logout'),
('cultural_attache_role', 'User.Profile.Changepassword'),
('ministry_role', 'User.Profile.Changepassword'),
('cultural_attache_role', 'User.Profile.Edit'),
('ministry_role', 'User.Profile.Edit'),
('cultural_attache_role', 'User.Profile.Profile'),
('ministry_role', 'User.Profile.Profile');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `authitemchild`
--
ALTER TABLE `authitemchild`
  ADD CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
