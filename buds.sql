-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 07:22 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buds`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_list`
--

CREATE TABLE `application_list` (
  `ID` int(11) NOT NULL,
  `CompanyName` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `barangay_list`
--

CREATE TABLE `barangay_list` (
  `ID` int(11) NOT NULL,
  `Barangay` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barangay_list`
--

INSERT INTO `barangay_list` (`ID`, `Barangay`) VALUES
(1, 'Brgy. 1'),
(2, 'Brgy. 2'),
(3, 'Brgy. 3'),
(4, 'Brgy. 4'),
(5, 'Brgy. 5'),
(6, 'Brgy. 6'),
(7, 'Brgy. 7'),
(8, 'Brgy. 8'),
(9, 'Brgy. 9'),
(10, 'Brgy. 10'),
(11, 'Brgy. 11'),
(12, 'Brgy. 12'),
(13, 'Brgy. 13'),
(14, 'Brgy. 14'),
(15, 'Brgy. 15'),
(16, 'Brgy. 16'),
(17, 'Brgy. 17'),
(18, 'Brgy. 18'),
(19, 'Brgy. 19'),
(20, 'Brgy. 20'),
(21, 'Brgy. 21'),
(22, 'Brgy. 22'),
(23, 'Brgy. 23'),
(24, 'Brgy. 24'),
(25, 'Brgy. 25'),
(26, 'Brgy. 26'),
(27, 'Brgy. 27'),
(28, 'Brgy. 28'),
(29, 'Brgy. 29'),
(30, 'Brgy. 30'),
(31, 'Brgy. 31'),
(32, 'Brgy. 32'),
(33, 'Brgy. 33'),
(34, 'Brgy. 34'),
(35, 'Brgy. 35'),
(36, 'Brgy. 36'),
(37, 'Brgy. 37'),
(38, 'Brgy. 38'),
(39, 'Brgy. 39'),
(40, 'Brgy. 40'),
(41, 'Brgy. 41'),
(42, 'Brgy. 42'),
(43, 'Brgy. 43'),
(44, 'Brgy. 44'),
(45, 'Brgy. 45'),
(46, 'Brgy. 46'),
(47, 'Brgy. 47'),
(48, 'Brgy. 48'),
(49, 'Brgy. 49'),
(50, 'Brgy. 50'),
(51, 'Brgy. 51'),
(52, 'Brgy. 52'),
(53, 'Brgy. 53'),
(54, 'Brgy. 54'),
(55, 'Brgy. 55'),
(56, 'Brgy. 56'),
(57, 'Brgy. 57'),
(58, 'Brgy. 58'),
(59, 'Brgy. 59'),
(60, 'Brgy. 60'),
(61, 'Brgy. 61'),
(62, 'Brgy. 62'),
(63, 'Brgy. 63'),
(64, 'Brgy. 64'),
(65, 'Brgy. 65'),
(66, 'Brgy. 66'),
(67, 'Brgy. 67'),
(68, 'Brgy. 68'),
(69, 'Brgy. 69'),
(70, 'Brgy. 70'),
(71, 'Brgy. 71'),
(72, 'Brgy. 72'),
(73, 'Brgy. 73'),
(74, 'Brgy. 74'),
(75, 'Brgy. 75'),
(76, 'Brgy. 76'),
(77, 'Brgy. 77'),
(78, 'Brgy. 78'),
(79, 'Brgy. 79'),
(80, 'Brgy. 80'),
(81, 'Brgy. 81'),
(82, 'Brgy. 82'),
(83, 'Brgy. 83'),
(84, 'Brgy. 84'),
(85, 'Brgy. 85'),
(86, 'Brgy. 86'),
(87, 'Brgy. 87'),
(88, 'Brgy. 88'),
(89, 'Brgy. 89'),
(90, 'Brgy. 90'),
(91, 'Brgy. 91'),
(92, 'Brgy. 92'),
(93, 'Brgy. 93'),
(94, 'Brgy. 94'),
(95, 'Brgy. 95'),
(96, 'Brgy. 96'),
(97, 'Brgy. 97'),
(98, 'Brgy. 98'),
(99, 'Brgy. 99'),
(100, 'Brgy. 100'),
(101, 'Brgy. 101'),
(102, 'Brgy. 102'),
(103, 'Brgy. 103'),
(104, 'Brgy. 104'),
(105, 'Brgy. 105'),
(106, 'Brgy. 106'),
(107, 'Brgy. 107'),
(108, 'Brgy. 108'),
(109, 'Brgy. 109'),
(110, 'Brgy. 110'),
(111, 'Brgy. 111'),
(112, 'Brgy. 112'),
(113, 'Brgy. 113'),
(114, 'Brgy. 114'),
(115, 'Brgy. 115'),
(116, 'Brgy. 116'),
(117, 'Brgy. 117'),
(118, 'Brgy. 118'),
(119, 'Brgy. 119'),
(120, 'Brgy. 120'),
(121, 'Brgy. 121'),
(122, 'Brgy. 122'),
(123, 'Brgy. 123'),
(124, 'Brgy. 124'),
(125, 'Brgy. 125'),
(126, 'Brgy. 126'),
(127, 'Brgy. 127'),
(128, 'Brgy. 128'),
(129, 'Brgy. 129'),
(130, 'Brgy. 130'),
(131, 'Brgy. 131'),
(132, 'Brgy. 132'),
(133, 'Brgy. 133'),
(134, 'Brgy. 134'),
(135, 'Brgy. 135'),
(136, 'Brgy. 136'),
(137, 'Brgy. 137'),
(138, 'Brgy. 138'),
(139, 'Brgy. 139'),
(140, 'Brgy. 140'),
(141, 'Brgy. 141'),
(142, 'Brgy. 142'),
(143, 'Brgy. 143'),
(144, 'Brgy. 144'),
(145, 'Brgy. 145'),
(146, 'Brgy. 146'),
(147, 'Brgy. 147'),
(148, 'Brgy. 148'),
(149, 'Brgy. 149'),
(150, 'Brgy. 150'),
(151, 'Brgy. 151'),
(152, 'Brgy. 152'),
(153, 'Brgy. 153'),
(154, 'Brgy. 154'),
(155, 'Brgy. 155'),
(156, 'Brgy. 156'),
(157, 'Brgy. 157'),
(158, 'Brgy. 158'),
(159, 'Brgy. 159'),
(160, 'Brgy. 160'),
(161, 'Brgy. 161'),
(162, 'Brgy. 162'),
(163, 'Brgy. 163'),
(164, 'Brgy. 164'),
(165, 'Brgy. 165'),
(166, 'Brgy. 166'),
(167, 'Brgy. 167'),
(168, 'Brgy. 168'),
(169, 'Brgy. 169'),
(170, 'Brgy. 170'),
(171, 'Brgy. 171'),
(172, 'Brgy. 172'),
(173, 'Brgy. 173'),
(174, 'Brgy. 174'),
(175, 'Brgy. 175'),
(176, 'Brgy. 176'),
(177, 'Brgy. 177'),
(178, 'Brgy. 178'),
(179, 'Brgy. 179'),
(180, 'Brgy. 180'),
(181, 'Brgy. 181'),
(182, 'Brgy. 182'),
(183, 'Brgy. 183'),
(184, 'Brgy. 184'),
(185, 'Brgy. 185'),
(186, 'Brgy. 186'),
(187, 'Brgy. 187'),
(188, 'Brgy. 188');

-- --------------------------------------------------------

--
-- Table structure for table `brgyzone_list`
--

CREATE TABLE `brgyzone_list` (
  `ID` int(11) NOT NULL,
  `zone` int(11) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brgyzone_list`
--

INSERT INTO `brgyzone_list` (`ID`, `zone`, `barangay`, `location`) VALUES
(1, 1, 'Barangay 1', 'South'),
(2, 1, 'Barangay 2', 'South'),
(3, 1, 'Barangay 3', 'South'),
(4, 1, 'Barangay 4', 'South'),
(5, 1, 'Barangay 5', 'South'),
(6, 1, 'Barangay 6', 'South'),
(7, 1, 'Barangay 7', 'South'),
(8, 1, 'Barangay 8', 'South'),
(9, 1, 'Barangay 9', 'South'),
(10, 1, 'Barangay 10', 'South'),
(11, 1, 'Barangay 11', 'South'),
(12, 1, 'Barangay 12', 'South'),
(13, 2, 'Barangay 13', 'South'),
(14, 2, 'Barangay 14', 'South'),
(15, 2, 'Barangay 15', 'South'),
(16, 2, 'Barangay 16', 'South'),
(17, 2, 'Barangay 17', 'South'),
(18, 2, 'Barangay 18', 'South'),
(19, 2, 'Barangay 19', 'South'),
(20, 2, 'Barangay 20', 'South'),
(21, 2, 'Barangay 21', 'South'),
(22, 2, 'Barangay 22', 'South'),
(23, 2, 'Barangay 23', 'South'),
(24, 2, 'Barangay 24', 'South'),
(25, 3, 'Barangay 25', 'South'),
(26, 3, 'Barangay 26', 'South'),
(27, 3, 'Barangay 27', 'South'),
(28, 3, 'Barangay 28', 'South'),
(29, 3, 'Barangay 29', 'South'),
(30, 3, 'Barangay 30', 'South'),
(31, 3, 'Barangay 31', 'South'),
(32, 3, 'Barangay 32', 'South'),
(33, 3, 'Barangay 33', 'South'),
(34, 3, 'Barangay 34', 'South'),
(35, 3, 'Barangay 35', 'South'),
(36, 4, 'Barangay 36', 'South'),
(37, 4, 'Barangay 37', 'South'),
(38, 4, 'Barangay 38', 'South'),
(39, 4, 'Barangay 39', 'South'),
(40, 4, 'Barangay 40', 'South'),
(41, 4, 'Barangay 41', 'South'),
(42, 4, 'Barangay 42', 'South'),
(43, 4, 'Barangay 43', 'South'),
(44, 4, 'Barangay 44', 'South'),
(45, 4, 'Barangay 45', 'South'),
(46, 4, 'Barangay 46', 'South'),
(47, 4, 'Barangay 47', 'South'),
(48, 4, 'Barangay 48', 'South'),
(49, 5, 'Barangay 49', 'South'),
(50, 5, 'Barangay 50', 'South'),
(51, 5, 'Barangay 51', 'South'),
(52, 5, 'Barangay 52', 'South'),
(53, 5, 'Barangay 53', 'South'),
(54, 5, 'Barangay 54', 'South'),
(55, 5, 'Barangay 55', 'South'),
(56, 5, 'Barangay 56', 'South'),
(57, 5, 'Barangay 57', 'South'),
(58, 5, 'Barangay 58', 'South'),
(59, 6, 'Barangay 59', 'South'),
(60, 6, 'Barangay 60', 'South'),
(61, 6, 'Barangay 61', 'South'),
(62, 6, 'Barangay 62', 'South'),
(63, 6, 'Barangay 63', 'South'),
(64, 6, 'Barangay 64', 'South'),
(65, 6, 'Barangay 65', 'South'),
(66, 6, 'Barangay 66', 'South'),
(67, 6, 'Barangay 67', 'South'),
(68, 6, 'Barangay 68', 'South'),
(69, 6, 'Barangay 69', 'South'),
(70, 6, 'Barangay 70', 'South'),
(71, 7, 'Barangay 71', 'South'),
(72, 7, 'Barangay 72', 'South'),
(73, 7, 'Barangay 73', 'South'),
(74, 7, 'Barangay 74', 'South'),
(75, 7, 'Barangay 75', 'South'),
(76, 7, 'Barangay 76', 'South'),
(77, 7, 'Barangay 77', 'South'),
(78, 7, 'Barangay 78', 'South'),
(79, 7, 'Barangay 79', 'South'),
(80, 7, 'Barangay 80', 'South'),
(81, 8, 'Barangay 81', 'South'),
(82, 8, 'Barangay 82', 'South'),
(83, 8, 'Barangay 83', 'South'),
(84, 8, 'Barangay 84', 'South'),
(85, 8, 'Barangay 85', 'South'),
(86, 8, 'Barangay 86', 'South'),
(87, 8, 'Barangay 87', 'South'),
(88, 8, 'Barangay 88', 'South'),
(89, 8, 'Barangay 89', 'South'),
(90, 8, 'Barangay 90', 'South'),
(91, 8, 'Barangay 91', 'South'),
(92, 8, 'Barangay 92', 'South'),
(93, 8, 'Barangay 93', 'South'),
(94, 9, 'Barangay 94', 'South'),
(95, 9, 'Barangay 95', 'South'),
(96, 9, 'Barangay 96', 'South'),
(97, 9, 'Barangay 97', 'South'),
(98, 9, 'Barangay 98', 'South'),
(99, 9, 'Barangay 99', 'South'),
(100, 9, 'Barangay 100', 'South'),
(101, 9, 'Barangay 101', 'South'),
(102, 9, 'Barangay 102', 'South'),
(103, 9, 'Barangay 103', 'South'),
(104, 9, 'Barangay 104', 'South'),
(105, 9, 'Barangay 105', 'South'),
(106, 10, 'Barangay 106', 'South'),
(107, 10, 'Barangay 107', 'South'),
(108, 10, 'Barangay 108', 'South'),
(109, 10, 'Barangay 109', 'South'),
(110, 10, 'Barangay 110', 'South'),
(111, 10, 'Barangay 111', 'South'),
(112, 10, 'Barangay 112', 'South'),
(113, 10, 'Barangay 113', 'South'),
(114, 10, 'Barangay 114', 'South'),
(115, 10, 'Barangay 115', 'South'),
(116, 10, 'Barangay 116', 'South'),
(117, 10, 'Barangay 117', 'South'),
(118, 10, 'Barangay 118', 'South'),
(119, 10, 'Barangay 119', 'South'),
(120, 10, 'Barangay 120', 'South'),
(121, 11, 'Barangay 121', 'South'),
(122, 11, 'Barangay 122', 'South'),
(123, 11, 'Barangay 123', 'South'),
(124, 11, 'Barangay 124', 'South'),
(125, 11, 'Barangay 125', 'South'),
(126, 11, 'Barangay 126', 'South'),
(127, 11, 'Barangay 127', 'South'),
(128, 11, 'Barangay 128', 'South'),
(129, 11, 'Barangay 129', 'South'),
(130, 11, 'Barangay 130', 'South'),
(131, 11, 'Barangay 131', 'South'),
(132, 12, 'Barangay 132', 'South'),
(133, 12, 'Barangay 133', 'South'),
(134, 12, 'Barangay 134', 'South'),
(135, 12, 'Barangay 135', 'South'),
(136, 12, 'Barangay 136', 'South'),
(137, 12, 'Barangay 137', 'South'),
(138, 12, 'Barangay 138', 'South'),
(139, 12, 'Barangay 139', 'South'),
(140, 12, 'Barangay 140', 'South'),
(141, 12, 'Barangay 141', 'South'),
(142, 13, 'Barangay 142', 'South'),
(143, 13, 'Barangay 143', 'South'),
(144, 13, 'Barangay 144', 'South'),
(145, 13, 'Barangay 145', 'South'),
(146, 13, 'Barangay 146', 'South'),
(147, 13, 'Barangay 147', 'South'),
(148, 13, 'Barangay 148', 'South'),
(149, 13, 'Barangay 149', 'South'),
(150, 13, 'Barangay 150', 'South'),
(151, 13, 'Barangay 151', 'South'),
(152, 13, 'Barangay 152', 'South'),
(153, 13, 'Barangay 153', 'South'),
(154, 13, 'Barangay 154', 'South'),
(155, 13, 'Barangay 155', 'South'),
(156, 14, 'Barangay 156', 'South'),
(157, 14, 'Barangay 157', 'South'),
(158, 14, 'Barangay 158', 'South'),
(159, 14, 'Barangay 159', 'South'),
(160, 14, 'Barangay 160', 'South'),
(161, 14, 'Barangay 161', 'South'),
(162, 14, 'Barangay 162', 'South'),
(163, 14, 'Barangay 163', 'South'),
(164, 14, 'Barangay 164', 'South'),
(165, 15, 'Barangay 165', 'North'),
(166, 15, 'Barangay 166', 'North'),
(167, 15, 'Barangay 167', 'North'),
(168, 15, 'Barangay 168', 'North'),
(169, 15, 'Barangay 169', 'North'),
(170, 15, 'Barangay 170', 'North'),
(171, 15, 'Barangay 171', 'North'),
(172, 15, 'Barangay 172', 'North'),
(173, 15, 'Barangay 173', 'North'),
(174, 15, 'Barangay 174', 'North'),
(175, 15, 'Barangay 175', 'North'),
(176, 15, 'Barangay 176', 'North'),
(177, 15, 'Barangay 177', 'North'),
(178, 15, 'Barangay 178', 'North'),
(179, 15, 'Barangay 179', 'North'),
(180, 15, 'Barangay 180', 'North'),
(181, 15, 'Barangay 181', 'North'),
(182, 15, 'Barangay 182', 'North'),
(183, 15, 'Barangay 183', 'North'),
(184, 15, 'Barangay 184', 'North'),
(185, 15, 'Barangay 185', 'North'),
(186, 15, 'Barangay 186', 'North'),
(187, 15, 'Barangay 187', 'North'),
(188, 15, 'Barangay 188', 'North');

-- --------------------------------------------------------

--
-- Table structure for table `business_applicant`
--

CREATE TABLE `business_applicant` (
  `bus_applicant` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `pos_vacant` varchar(255) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `business_carousel`
--

CREATE TABLE `business_carousel` (
  `bus_carou_id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `photos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `business_links`
--

CREATE TABLE `business_links` (
  `bus_link_id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `bus_fb` varchar(255) NOT NULL,
  `bus_ig` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_links`
--

INSERT INTO `business_links` (`bus_link_id`, `bus_id`, `bus_fb`, `bus_ig`) VALUES
(1, 1, 'https://www.facebook.com/cedric.cruz.22/', 'https://www.instagram.com/cruzcedric22/'),
(4, 6, 'https://www.facebook.com/cedric.cruz.22/', 'https://www.instagram.com/cruzcedric22/');

-- --------------------------------------------------------

--
-- Table structure for table `business_list`
--

CREATE TABLE `business_list` (
  `bus_id` bigint(20) NOT NULL,
  `ownerId` int(11) NOT NULL,
  `BusinessName` varchar(255) NOT NULL,
  `Businesslogo` varchar(255) NOT NULL,
  `BusinessEmail` varchar(255) NOT NULL,
  `BusinessBranch` varchar(255) NOT NULL,
  `BusinessEstablish` varchar(255) NOT NULL,
  `BusinessDescrip` text NOT NULL,
  `BusinessNumber` varchar(255) NOT NULL,
  `BusinessOpenHour` varchar(255) NOT NULL,
  `BusinessCloseHour` varchar(255) NOT NULL,
  `BusinessAddress` varchar(255) NOT NULL,
  `BusinessBrgy` varchar(255) NOT NULL,
  `BusinessCategory` varchar(255) DEFAULT NULL,
  `BusinessSubCategory` varchar(255) NOT NULL,
  `BusinessStatus` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_list`
--

INSERT INTO `business_list` (`bus_id`, `ownerId`, `BusinessName`, `Businesslogo`, `BusinessEmail`, `BusinessBranch`, `BusinessEstablish`, `BusinessDescrip`, `BusinessNumber`, `BusinessOpenHour`, `BusinessCloseHour`, `BusinessAddress`, `BusinessBrgy`, `BusinessCategory`, `BusinessSubCategory`, `BusinessStatus`, `remarks`) VALUES
(1, 8, 'Tapsilog', 'img/logo/logo_vot.png', 'cruzcedric66@gmail.com', 'Biglang awa branch', '2023-09-10', 'Tech solutions', '09219476808', '11:09', '03:09', '120 M.HIZON ST 10th avenue', '1', '1', '1', '', ''),
(6, 7, 'Mangahan', '64ff49b9f3978.png', 'cruzcedric66@gmail.com', 'Biglang awa branch', '2023-09-12', 'Tech solutions', '09219476808', '00:12', '00:13', '120 M.HIZON ST 10th avenue', '2', '2', '14', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `business_location`
--

CREATE TABLE `business_location` (
  `bus_loc_id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `bus_lat` varchar(255) NOT NULL,
  `bus_long` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_location`
--

INSERT INTO `business_location` (`bus_loc_id`, `bus_id`, `bus_lat`, `bus_long`) VALUES
(1, 1, '14.652390', '120.975536'),
(5, 6, '14.660805', '120.971784');

-- --------------------------------------------------------

--
-- Table structure for table `business_post`
--

CREATE TABLE `business_post` (
  `bus_post_id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `post_title` int(11) NOT NULL,
  `post_desc` int(11) NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `business_requirement`
--

CREATE TABLE `business_requirement` (
  `bus_req_id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `bus_brgyclearance` varchar(255) NOT NULL,
  `bus_dtipermit` varchar(255) NOT NULL,
  `bus_sanitarypermit` varchar(255) NOT NULL,
  `bus_cedula` varchar(255) NOT NULL,
  `bus_mayorpermit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_requirement`
--

INSERT INTO `business_requirement` (`bus_req_id`, `bus_id`, `bus_brgyclearance`, `bus_dtipermit`, `bus_sanitarypermit`, `bus_cedula`, `bus_mayorpermit`) VALUES
(1, 1, 'img/requirements/img_ucc.png', 'img/requirements/img_ucc.png', 'ssssimg/requirements/img_ucc.png', 'img/requirements/img_ucc.png', 'img/requirements/img_ucc.png'),
(2, 6, '64ff49ba06165.png', '64ff49ba0616a.jpg', '64ff49ba0616b.png', '64ff49ba0616c.jpg', '64ff49ba0616d.png');

-- --------------------------------------------------------

--
-- Table structure for table `business_reviews`
--

CREATE TABLE `business_reviews` (
  `bus_rev_id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category_list`
--

CREATE TABLE `category_list` (
  `ID` bigint(20) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_list`
--

INSERT INTO `category_list` (`ID`, `category`) VALUES
(1, 'Business Service'),
(2, 'Entertainment and Media'),
(3, 'Finances and Insurance'),
(4, 'Food and Drinks'),
(5, 'Health and Beauty'),
(6, 'Manufacturing & Industry'),
(7, 'Shopping'),
(8, 'Tourism and Accommodation'),
(9, 'Tradesmen and Construction'),
(10, 'Transport and Motoring'),
(11, 'Property');

-- --------------------------------------------------------

--
-- Table structure for table `district_list`
--

CREATE TABLE `district_list` (
  `ID` int(11) NOT NULL,
  `District` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district_list`
--

INSERT INTO `district_list` (`ID`, `District`) VALUES
(1, '1st'),
(2, '2nd'),
(3, '3rd');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `email`, `password`, `userType`) VALUES
(8, 'cruzcedric66@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2'),
(9, 'jalynguts01@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', '2');

-- --------------------------------------------------------

--
-- Table structure for table `owner_list`
--

CREATE TABLE `owner_list` (
  `ID` int(11) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `contactNumber` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Sex` varchar(255) NOT NULL,
  `Birthday` date NOT NULL,
  `Age` int(11) NOT NULL,
  `owner_name` varchar(255) DEFAULT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner_list`
--

INSERT INTO `owner_list` (`ID`, `Surname`, `Firstname`, `MiddleName`, `Email`, `contactNumber`, `Address`, `Sex`, `Birthday`, `Age`, `owner_name`, `photo`) VALUES
(1, 'Gutierrez', 'Jalyn', 'Maclang', 'jalynguts01@gmail.com', '09553254794', 'caloocan city', 'Female', '2001-12-01', 22, '', ''),
(2, 'Gutierrez', 'Wow', 'Maclang', 'jalynguts@gmail.com', '09553254794', 'baltazar', 'Male', '2023-09-04', 32, '', ''),
(7, 'cruz', 'cedric', 'Dela Cruz', 'cruzcedric66@gmail.com', '123', '120 M.HIZON ST 10th avenue', 'Male', '2023-09-08', 21, NULL, ''),
(8, 'colmo', 'Jalyn', 'Maclang', 'jalynguts01@gmail.com', '09553254794', '191 b. baltazar st. 10th ave brgy. 63 Caloocan CIty', 'Female', '2001-12-01', 22, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `post_event`
--

CREATE TABLE `post_event` (
  `ID` int(11) NOT NULL,
  `Events` varchar(255) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory_list`
--

CREATE TABLE `subcategory_list` (
  `ID` int(11) NOT NULL,
  `catId` int(11) NOT NULL,
  `subCategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory_list`
--

INSERT INTO `subcategory_list` (`ID`, `catId`, `subCategory`) VALUES
(1, 1, 'Training Center'),
(2, 1, 'Retail Services'),
(3, 1, 'Market Search'),
(4, 1, 'Laundry and Dry Cleaning'),
(5, 1, 'Housekeeping Service'),
(6, 1, 'Animal Shelters'),
(7, 1, 'Warehousing'),
(8, 1, 'Baby Sitters'),
(9, 1, 'Advertising'),
(10, 1, 'Health and Safety'),
(11, 1, 'Marketing'),
(12, 1, 'Consultants'),
(13, 1, 'Ac Repair Services'),
(14, 2, 'Arts and Crafts'),
(15, 2, 'Film, Televison and Video'),
(16, 2, 'Music'),
(17, 2, 'Fashion'),
(18, 2, 'Photography'),
(19, 3, 'Legal Services'),
(20, 3, 'Money Service Business'),
(21, 3, 'Banking Equipment'),
(22, 3, 'Personal Finance'),
(23, 3, 'Banks, Credit Unions'),
(24, 3, 'Insurance Company'),
(25, 3, 'Pawnshops'),
(26, 4, 'Restaurants'),
(27, 4, 'Catering Equipment'),
(28, 4, 'Farmers Market'),
(29, 4, 'Food Retailers'),
(30, 4, 'Supermarket'),
(31, 4, 'Catering'),
(32, 4, 'Cafes'),
(33, 4, 'Food Distributors'),
(34, 4, 'Food Manufacturing'),
(35, 4, 'Wine and Beer'),
(36, 5, 'Doctors and Clinics'),
(37, 5, 'Health Care'),
(38, 5, 'Hairdessers'),
(39, 5, 'Beauty Proffesional'),
(40, 5, 'Medical Equipment'),
(41, 5, 'Beauty Product'),
(42, 5, 'Nursing and Care'),
(43, 5, 'Pharmacies'),
(44, 5, 'Fitness'),
(45, 5, 'Massage Therapist'),
(46, 5, 'Dentists'),
(47, 5, 'Opticians'),
(48, 6, 'Industrial Services'),
(49, 6, 'Furniture Manufacturers'),
(50, 6, 'Automotive'),
(51, 6, 'Paper Products'),
(52, 6, 'Carpentry'),
(53, 6, 'Electrical Services'),
(54, 6, 'Oil and Gas Companies'),
(55, 6, 'Industrial Automation'),
(56, 6, 'Steel Products'),
(57, 7, 'Gadgets'),
(58, 7, 'Hardware Stores'),
(59, 7, 'Jewellery'),
(60, 7, 'Mobile Phone Shops'),
(61, 7, 'Music'),
(62, 7, 'Clothing and Accessories'),
(63, 7, 'Furniture'),
(64, 7, 'Books'),
(65, 7, 'Optical Shop'),
(66, 7, 'Pet Shop'),
(67, 8, 'Hotels'),
(68, 8, 'Travel Agents'),
(69, 8, 'Apartments'),
(70, 8, 'Hotel and Motel Equipment'),
(71, 9, 'Construction'),
(72, 9, 'Construction Equipment'),
(73, 9, 'Decorators'),
(74, 9, 'Handyman'),
(75, 9, 'Plumbers'),
(76, 9, 'Plumbing Services'),
(77, 9, 'Glass Manufacturing'),
(78, 10, 'Motorbikes'),
(79, 10, 'Vehicle Sales'),
(80, 10, 'Bicycles'),
(81, 10, 'Package Shipping'),
(82, 10, 'Auto Services'),
(83, 10, 'Bus Line'),
(84, 10, 'Transport'),
(85, 10, 'Car Rental'),
(86, 10, 'Driving School'),
(87, 10, 'Vehicle Manufacturers'),
(88, 10, 'Auto Supplies'),
(89, 10, 'Car Wash'),
(90, 11, 'Real Estate Agents'),
(91, 11, 'Property Management'),
(92, 11, 'Rental Property'),
(93, 11, 'Building Maintenance'),
(94, 11, 'Interior Design'),
(95, 11, 'Commercial Property'),
(96, 11, 'Renovation'),
(97, 11, 'Auctions'),
(98, 11, 'Security'),
(99, 11, 'Warehouses'),
(100, 11, 'Fire Safety Equipment'),
(101, 11, 'Apartment Rentals');

-- --------------------------------------------------------

--
-- Table structure for table `user_category`
--

CREATE TABLE `user_category` (
  `iD` int(11) NOT NULL,
  `userDesccription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_category`
--

INSERT INTO `user_category` (`iD`, `userDesccription`) VALUES
(1, 'CEIPO'),
(2, 'Business'),
(3, 'User'),
(4, 'super admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_resume`
--

CREATE TABLE `user_resume` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `summary` tinytext NOT NULL,
  `contacts` varchar(500) NOT NULL,
  `schools` varchar(500) NOT NULL,
  `school_address` varchar(1000) NOT NULL,
  `school_sy` varchar(500) NOT NULL,
  `exp_company` varchar(500) NOT NULL,
  `exp_position` varchar(255) NOT NULL,
  `work_exp` varchar(1000) NOT NULL,
  `work_address` varchar(500) NOT NULL,
  `exp_year` varchar(255) NOT NULL,
  `skills` varchar(500) NOT NULL,
  `cert_desc` varchar(500) NOT NULL,
  `cert_year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_resume`
--

INSERT INTO `user_resume` (`id`, `fullname`, `position`, `address`, `summary`, `contacts`, `schools`, `school_address`, `school_sy`, `exp_company`, `exp_position`, `work_exp`, `work_address`, `exp_year`, `skills`, `cert_desc`, `cert_year`) VALUES
(2, 'Angelo Dellosa Perlota', 'Software Engineer', '126 L. Nadurata St. 4th Avenue Caloocan City', 'To secure a software engineering position in a dynamic organization where I can utilize my 5+ years of experience in software development, experience in coding and debugging, and proven ability to develop high-quality software applications.  Looking for a', 'angeloperlota38@gmail.com,  09472003653,  Angelo@linkedIn', 'Grace Park Elementary School Main,  Caloocan High School,  Caloocan Senior High School,  University Of Caloocan City ', '641 L. Nadurata St. 6th Avenue Caloocan City,  10 th avenue Caloocan City,  10 th avenue Caloocan City,  Biglang  Awa Streeth', '2006-2012,  2012-2018,  2018-2020,  2020- Current', 'Accenture,  Google', 'Senior Software Engineer,  Senior Software Engineer', 'Lead Developer,  Lead Developer of Pixle', '126 BGC St. 4th Avenue BGC City ,  San Francisco, Sillicon Valley', '2020-2021,  2021-Current', 'Python,  Mysql,  PHP,  Laravel,  React,  node.js,  Java,  C#', 'DICT Cloud Computing ,  DICT Bidata,  AWS Certified,  Cloud Engineer,  Scrum Master', '2022-2023,  2022,  2023,  2023,  2023-2024'),
(3, '1 1 1', '11', '1', '1', '1,  1,  1', '1,  1,  1,  1', '1,  1,  1,  1', '1,  1,  1,  1', '1,  2', '1,  2', '1,  2', '1,  2', '1,  2', '1', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `zone_list`
--

CREATE TABLE `zone_list` (
  `ID` int(11) NOT NULL,
  `Zone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zone_list`
--

INSERT INTO `zone_list` (`ID`, `Zone`) VALUES
(1, 'Zone 1'),
(2, 'Zone 2'),
(3, 'Zone 3'),
(4, 'Zone 4'),
(5, 'Zone 5'),
(6, 'Zone 6'),
(7, 'Zone 7'),
(8, 'Zone 8'),
(9, 'Zone 9'),
(10, 'Zone 10'),
(11, 'Zone 11'),
(12, 'Zone 12'),
(13, 'Zone 13'),
(14, 'Zone 14'),
(15, 'Zone 15'),
(16, 'Zone 16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangay_list`
--
ALTER TABLE `barangay_list`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `brgyzone_list`
--
ALTER TABLE `brgyzone_list`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `business_links`
--
ALTER TABLE `business_links`
  ADD PRIMARY KEY (`bus_link_id`);

--
-- Indexes for table `business_list`
--
ALTER TABLE `business_list`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `business_location`
--
ALTER TABLE `business_location`
  ADD PRIMARY KEY (`bus_loc_id`);

--
-- Indexes for table `business_requirement`
--
ALTER TABLE `business_requirement`
  ADD PRIMARY KEY (`bus_req_id`);

--
-- Indexes for table `business_reviews`
--
ALTER TABLE `business_reviews`
  ADD PRIMARY KEY (`bus_rev_id`);

--
-- Indexes for table `category_list`
--
ALTER TABLE `category_list`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `district_list`
--
ALTER TABLE `district_list`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `owner_list`
--
ALTER TABLE `owner_list`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `post_event`
--
ALTER TABLE `post_event`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subcategory_list`
--
ALTER TABLE `subcategory_list`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_category`
--
ALTER TABLE `user_category`
  ADD PRIMARY KEY (`iD`);

--
-- Indexes for table `user_resume`
--
ALTER TABLE `user_resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zone_list`
--
ALTER TABLE `zone_list`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangay_list`
--
ALTER TABLE `barangay_list`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `brgyzone_list`
--
ALTER TABLE `brgyzone_list`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `business_links`
--
ALTER TABLE `business_links`
  MODIFY `bus_link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `business_list`
--
ALTER TABLE `business_list`
  MODIFY `bus_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `business_location`
--
ALTER TABLE `business_location`
  MODIFY `bus_loc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `business_requirement`
--
ALTER TABLE `business_requirement`
  MODIFY `bus_req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `business_reviews`
--
ALTER TABLE `business_reviews`
  MODIFY `bus_rev_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_list`
--
ALTER TABLE `category_list`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `district_list`
--
ALTER TABLE `district_list`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `owner_list`
--
ALTER TABLE `owner_list`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post_event`
--
ALTER TABLE `post_event`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategory_list`
--
ALTER TABLE `subcategory_list`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `user_category`
--
ALTER TABLE `user_category`
  MODIFY `iD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_resume`
--
ALTER TABLE `user_resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `zone_list`
--
ALTER TABLE `zone_list`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
