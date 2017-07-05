-- phpMyAdmin SQL Dump
-- version 4.2.8
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2016 at 06:30 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `docfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--

CREATE TABLE IF NOT EXISTS `bookmark` (
`id` int(20) NOT NULL,
  `doc_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `contact` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookmark`
--

INSERT INTO `bookmark` (`id`, `doc_id`, `user_id`, `fullname`, `specialization`, `contact`) VALUES
(5, 3, 2, 'juan dela cruz', 'Dermatologist', '09059037872');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
`doc_id` bigint(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `undergrad` varchar(50) NOT NULL,
  `educ_id` int(255) NOT NULL,
  `prof_state` varchar(1000) NOT NULL,
  `specialization` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `hospital` varchar(200) NOT NULL,
  `clinic_add` varchar(200) NOT NULL,
  `clinic_hours` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `name`, `first_name`, `last_name`, `middle_name`, `username`, `password`, `sex`, `undergrad`, `educ_id`, `prof_state`, `specialization`, `email`, `address`, `contact`, `hospital`, `clinic_add`, `clinic_hours`) VALUES
(1, 'james adrian', 'james', 'andog', 'galarpe', 'admin', 'admin', 'female', 'msu', 0, '', 'brain', 'james@gmail.com', 'iligan', '123', 'st. mary', 'iligan', '10pm-2pm'),
(2, 'yan andog', 'yan', 'andog', 'cabanas', 'yan', 'yan', 'male', 'yan', 0, '', 'nose', 'yan@gmail.com', 'iligan', '123', 'yan', 'iligan', '1pm'),
(3, 'juan dela cruz', 'Juan', 'dela cruz', 'martinez', 'juan', 'juan', 'other', 'DLSU', 0, '', 'Dermatologist', 'juan@gmail.com', 'Tubod', '09059037872', 'Adventist Medical Center College', 'AMCC', '9am'),
(4, 'Yang Sastine Cabanas', 'Yang', 'Cabanas', 'Sastine', 'yang', 'yang', 'female', 'UST', 0, 'hi po!', 'Dermatologist', 'yang@gmail.com', 'surigao', '0997', 'St. Luke', 'Manila', '11pm'),
(5, 'f`s', 'wew', 'wew', 'wew', '', '', 'male', '', 0, '', '', '', '', '', '', '', ''),
(6, 'wa wa wa', 'wa', 'wa', 'wa', 'wa', 'wa', 'male', '', 0, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
`educ_id` int(255) NOT NULL,
  `undergrad` varchar(200) NOT NULL,
  `postgrad1` varchar(200) NOT NULL,
  `postgrad2` varchar(200) NOT NULL,
  `postgrad3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `tag` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `password`, `type`, `tag`, `email`, `username`, `contact`) VALUES
(1, '$name', '$password', '$type', 0, '$email', '$r_username', '$r_pnum'),
(2, 'james adrian', 'admin', 'patient', 0, 'james@gmail.com', 'admin', '123'),
(3, 'yan andog', 'yan', 'doctor', 0, 'yan@gmail.com', 'yan', '123'),
(4, 'juan dela cruz', 'juan', 'doctor', 0, 'juan@gmail.com', 'juan', '09059037872'),
(5, 'YangSastineCabanas', 'yang', 'doctor', 0, 'yang@gmail.com', 'yang', '0997'),
(6, 'ikaw', 'ako', 'patient', 0, 'ako@gmail.com', 'ako', '1234'),
(7, 'f`s', '', 'doctor', 0, '', '', ''),
(8, 'wa wa wa', 'wa', 'doctor', 0, '', 'wa', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookmark`
--
ALTER TABLE `bookmark`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
 ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
 ADD PRIMARY KEY (`educ_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookmark`
--
ALTER TABLE `bookmark`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
MODIFY `doc_id` bigint(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
MODIFY `educ_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
