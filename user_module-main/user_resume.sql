-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2023 at 10:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_resume`
--

INSERT INTO `user_resume` (`id`, `fullname`, `position`, `address`, `summary`, `contacts`, `schools`, `school_address`, `school_sy`, `exp_company`, `exp_position`, `work_exp`, `work_address`, `exp_year`, `skills`, `cert_desc`, `cert_year`) VALUES
(2, 'Angelo Dellosa Perlota', 'Software Engineer', '126 L. Nadurata St. 4th Avenue Caloocan City', 'To secure a software engineering position in a dynamic organization where I can utilize my 5+ years of experience in software development, experience in coding and debugging, and proven ability to develop high-quality software applications.  Looking for a', 'angeloperlota38@gmail.com,  09472003653,  Angelo@linkedIn', 'Grace Park Elementary School Main,  Caloocan High School,  Caloocan Senior High School,  University Of Caloocan City ', '641 L. Nadurata St. 6th Avenue Caloocan City,  10 th avenue Caloocan City,  10 th avenue Caloocan City,  Biglang  Awa Streeth', '2006-2012,  2012-2018,  2018-2020,  2020- Current', 'Accenture,  Google', 'Senior Software Engineer,  Senior Software Engineer', 'Lead Developer,  Lead Developer of Pixle', '126 BGC St. 4th Avenue BGC City ,  San Francisco, Sillicon Valley', '2020-2021,  2021-Current', 'Python,  Mysql,  PHP,  Laravel,  React,  node.js,  Java,  C#', 'DICT Cloud Computing ,  DICT Bidata,  AWS Certified,  Cloud Engineer,  Scrum Master', '2022-2023,  2022,  2023,  2023,  2023-2024'),
(3, '1 1 1', '11', '1', '1', '1,  1,  1', '1,  1,  1,  1', '1,  1,  1,  1', '1,  1,  1,  1', '1,  2', '1,  2', '1,  2', '1,  2', '1,  2', '1', '1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_resume`
--
ALTER TABLE `user_resume`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_resume`
--
ALTER TABLE `user_resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
