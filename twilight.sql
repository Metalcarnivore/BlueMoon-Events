-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 04, 2024 at 05:23 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twilight`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventdetails`
--

DROP TABLE IF EXISTS `eventdetails`;
CREATE TABLE IF NOT EXISTS `eventdetails` (
  `Event_id` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Eventname` varchar(50) NOT NULL,
  `Eventtype` varchar(20) NOT NULL,
  `DateofEvent` date DEFAULT NULL,
  `VenueLocation` varchar(50) NOT NULL,
  `venue_id` int DEFAULT NULL,
  PRIMARY KEY (`Event_id`),
  KEY `fk_UserDetails` (`Username`),
  KEY `venue_id` (`venue_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `eventdetails`
--

INSERT INTO `eventdetails` (`Event_id`, `Username`, `Eventname`, `Eventtype`, `DateofEvent`, `VenueLocation`, `venue_id`) VALUES
(20, 'HARIKRISHNAN A P', 'hari gothamb birthday', 'Engagement', '2024-01-18', 'ernakulam', 1),
(18, 'ayyapan', 'ttttt', 'Wedding', '2023-12-16', 'ernakulam', 1),
(19, 'HARIKRISHNAN A P', 'hari gothamb birthday', 'Birthday', '2024-01-02', 'ernakulam', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

DROP TABLE IF EXISTS `userdetails`;
CREATE TABLE IF NOT EXISTS `userdetails` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(25) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `MobileNo` varchar(10) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`user_id`, `Username`, `DOB`, `Email`, `MobileNo`, `Password`, `type`) VALUES
(1, 'HARIKRISHNAN A P', '2023-10-02', 'harikrishnanap3210@gmail.com', '1234567890', 'a9bcf1e4d7b95a22e2975c812d938889', ''),
(2, 'ayyapan', '2004-01-02', 'ayyapan@gmail.com', '1234567890', '25f9e794323b453885f5181f1b624d0b', ''),
(3, 'admin', '0000-00-00', '', '', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

DROP TABLE IF EXISTS `venue`;
CREATE TABLE IF NOT EXISTS `venue` (
  `venue_id` int NOT NULL AUTO_INCREMENT,
  `venue_name` varchar(50) NOT NULL,
  `venue_rate` varchar(50) NOT NULL,
  `venue_capacity` varchar(50) NOT NULL,
  `venue_classification` varchar(50) NOT NULL,
  `venue_location` varchar(50) NOT NULL,
  `venue_dis` varchar(250) NOT NULL,
  `venue_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `booking_status` enum('available','booked') NOT NULL DEFAULT 'available',
  PRIMARY KEY (`venue_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venue_id`, `venue_name`, `venue_rate`, `venue_capacity`, `venue_classification`, `venue_location`, `venue_dis`, `venue_image`, `booking_status`) VALUES
(1, 'Temple Hall', '3000', '1500', 'Elite', 'ernakulam', 'Big Auditoriam with Ample space for parking', 'uploads/wed3.jpg', 'available'),
(2, 'Parish Hall', '2000', '500', 'Normal', 'ernakulam', 'Big Auditoriam with Ample space for parking', 'uploads/wed2.jpg', 'available'),
(8, 'st joseph hall', '$200', '300', 'Coustamizable', 'kottayam', 'A premium hall including full ac', 'uploads/wed.jpg', 'available');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
