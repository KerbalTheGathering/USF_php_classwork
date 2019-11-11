-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 07, 2018 at 10:35 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitevisitors`
--
CREATE DATABASE IF NOT EXISTS `sitevisitors` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sitevisitors`;

-- --------------------------------------------------------

--
-- Table structure for table `pagevisits`
--

DROP TABLE IF EXISTS `pagevisits`;
CREATE TABLE IF NOT EXISTS `pagevisits` (
  `page_filename` varchar(250) DEFAULT NULL,
  `visit_date` date DEFAULT NULL,
  `visit_time` time DEFAULT NULL,
  `previous_page` varchar(250) DEFAULT NULL,
  `request_method` varchar(10) DEFAULT NULL,
  `remote_host` varchar(250) DEFAULT NULL,
  `remote_port` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pagevisits`
--

INSERT INTO `pagevisits` (`page_filename`, `visit_date`, `visit_time`, `previous_page`, `request_method`, `remote_host`, `remote_port`) VALUES
('contact_us.php', '2012-03-17', '10:32:29', 'index.php', 'GET', 'cis_lab_24.example.edu', 80),
('guest_book.php', '2012-03-17', '10:37:03', 'guest_book.php', 'POST', 'cis_lab_24.example.edu', 80),
('index.php', '2012-03-18', '10:37:03', 'www.example.com/dgosselin/links.html', 'GET', 'dgosselin.example.com', 80),
('links.php', '2012-03-18', '10:37:44', 'index.php', 'GET', 'dgosselin.example.com', 80),
('vacation.php', '2012-03-18', '15:52:51', 'www.google.com/search', 'GET', 'portal.example.net', 80),
('vacation.php', '2012-03-18', '15:53:02', 'www.google.com/search', 'GET', 'portal.example.net', 80),
('index.php', '2012-03-18', '23:33:31', '', 'GET', 'proxy.example.edu', 8080),
('vacation.php', '2012-03-18', '23:33:47', 'index.php', 'GET', 'proxy.example.edu', 8080),
('index.php', '2012-03-19', '03:51:14', '', 'GET', '172.23.19.203', 80),
('vacation.php', '2012-03-19', '03:51:14', 'index.php', 'GET', '172.23.19.203', 80),
('vacation_map.php', '2012-03-19', '03:51:14', 'vacation.php', 'GET', '172.23.19.203', 80),
('contact_us.php', '2012-03-19', '03:52:22', 'vacation_map.php', 'GET', '172.23.19.203', 80),
('contact_us.php', '2012-03-19', '03:54:40', 'contact_us.php', 'POST', '172.23.19.203', 80);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
