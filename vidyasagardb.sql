-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 09:54 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vidyasagardb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(50) DEFAULT NULL,
  `admin_pass` varchar(100) DEFAULT NULL,
  `admin_name` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_pass`, `admin_name`) VALUES
(1, 'admin@gmail.com', 'admin', 'Rakesh');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(100) NOT NULL,
  `s_id` varchar(100) NOT NULL,
  `candidate_name` text NOT NULL,
  `father_name` text NOT NULL,
  `mother_name` text NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `photo_name` varchar(100) NOT NULL,
  `signature_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(100) NOT NULL,
  `s_id` varchar(100) NOT NULL,
  `course_name` varchar(50) DEFAULT NULL,
  `board` varchar(50) DEFAULT NULL,
  `pass_year1` text DEFAULT NULL,
  `pass_year2` text NOT NULL,
  `f_year` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `c_address`
--

CREATE TABLE `c_address` (
  `id` int(100) NOT NULL,
  `s_id` varchar(100) NOT NULL,
  `r_village` varchar(50) DEFAULT NULL,
  `r_post_office` varchar(50) DEFAULT NULL,
  `r_district` text DEFAULT NULL,
  `r_pin` int(10) DEFAULT NULL,
  `r_state` text DEFAULT NULL,
  `p_village` varchar(50) DEFAULT NULL,
  `p_post_office` varchar(50) DEFAULT NULL,
  `p_district` text DEFAULT NULL,
  `p_pin` int(10) DEFAULT NULL,
  `p_state` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `c_education`
--

CREATE TABLE `c_education` (
  `id` int(100) NOT NULL,
  `s_id` varchar(100) NOT NULL,
  `exam_name1` text DEFAULT NULL,
  `board_name1` varchar(50) DEFAULT NULL,
  `passing_year1` text DEFAULT NULL,
  `full_marks1` int(11) DEFAULT NULL,
  `marks_obtained1` int(11) DEFAULT NULL,
  `percentage1` int(11) DEFAULT NULL,
  `exam_name2` text DEFAULT NULL,
  `board_name2` varchar(50) DEFAULT NULL,
  `passing_year2` text DEFAULT NULL,
  `full_marks2` int(11) DEFAULT NULL,
  `marks_obtained2` int(11) DEFAULT NULL,
  `percentage2` int(11) DEFAULT NULL,
  `exam_name3` text DEFAULT NULL,
  `board_name3` varchar(50) DEFAULT NULL,
  `passing_year3` text DEFAULT NULL,
  `full_marks3` int(11) DEFAULT NULL,
  `marks_obtained3` int(11) DEFAULT NULL,
  `percentage3` int(11) DEFAULT NULL,
  `exam_name4` text DEFAULT NULL,
  `board_name4` varchar(50) DEFAULT NULL,
  `passing_year4` text DEFAULT NULL,
  `full_marks4` int(11) DEFAULT NULL,
  `marks_obtained4` int(11) DEFAULT NULL,
  `percentage4` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_address`
--
ALTER TABLE `c_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_education`
--
ALTER TABLE `c_education`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c_address`
--
ALTER TABLE `c_address`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c_education`
--
ALTER TABLE `c_education`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
