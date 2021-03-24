-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 12:45 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional`
--

CREATE TABLE `additional` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `city` varchar(40) NOT NULL,
  `maritial` varchar(20) NOT NULL,
  `surgery` varchar(100) NOT NULL,
  `injury` varchar(100) NOT NULL,
  `allergy` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `additional`
--

INSERT INTO `additional` (`id`, `user_id`, `city`, `maritial`, `surgery`, `injury`, `allergy`, `weight`) VALUES
(1, 1, 'Mumbai', 'Married', ' Seafood', ' Traumatic injury', ' Facial', ''),
(2, 2, 'Mumbai', 'Married', 'legs', 'skull facture', 'Mushroom', '49'),
(4, 3, 'Mumbai', 'Married', ' Fish', ' Jaw Facture', ' Kidney', ''),
(5, 4, 'Mumbai', 'Married', ' Fish', ' Jaw Facture', ' Kidney', ''),
(6, 5, 'Nashik', 'Unmarried', ' Fish', ' Jaw Facture Rib Facture', ' Kidney', '67'),
(10, 6, 'Thane', 'Married', ' Fish', ' Facial Trauma', ' Brain', ''),
(13, 7, 'Mumbai', 'Married', '', '', '', ''),
(14, 11, 'Delhi', 'Unmarried', ' Eggs', ' Rib Facture', ' Kidney', '78'),
(15, 13, 'Nashik', 'Unmarried', ' Seafood', ' Rib Facture', ' Kidney', '45');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `doc_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(10) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(20) NOT NULL,
  `phn_no` int(10) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `user_id`, `doc_id`, `name`, `age`, `date`, `time`, `phn_no`, `message`) VALUES
(13, 1, 3, 'hjk', 123, 'Wed Dec 02 2020', '3AM-4PM', 890, 'hgjh'),
(14, 1, 3, 'hjk', 123, 'Wed Dec 02 2020', '3AM-4PM', 890, 'hgjh'),
(15, 1, 4, 'katha', 20, 'Wed Dec 02 2020', '3AM-4PM', 67, 'kzsdjla'),
(16, 1, 4, 'katha', 20, 'Wed Dec 02 2020', '3AM-4PM', 67, 'kzsdjla'),
(17, 1, 4, 'katha', 20, 'Wed Dec 02 2020', '3AM-4PM', 67, 'kzsdjla'),
(18, 1, 4, 'kkkaaka', 12, 'Wed Dec 02 2020', '11AM-12PM', 78, 'kajhdka'),
(19, 1, 4, 'kkkaaka', 12, 'Tue Dec 01 2020', '9AM-10AM', 78, 'kajhdka'),
(20, 1, 2, 'hendry', 12, 'Tue Dec 01 2020', '10AM-11AM', 67, 'katahaha'),
(21, 1, 6, 'rushi', 10, 'Sun Dec 06 2020', '3AM-4PM', 78, 'kshwakljehw'),
(22, 1, 3, 'kat', 20, 'Sat Dec 05 2020', '3AM-4PM', 12345, 'kahdkauhwd'),
(23, 4, 6, 'jashka', 12, 'Mon Dec 07 2020', '4AM-5PM', 23454566, 'awkjfhakjewf'),
(24, 1, 6, 'katha', 78, 'Thu Dec 10 2020', '11AM-12PM', 768, 'hgjhg'),
(25, 4, 5, 'kyo', 19, 'Sun Dec 13 2020', '9AM-10AM', 78987, 'jkljkl'),
(26, 4, 2, 'yuki', 20, 'Mon Dec 14 2020', '11AM-12PM', 980, 'hgjhg'),
(28, 4, 2, 'thooru', 18, 'Tue Dec 15 2020', '3AM-4PM', 678768, 'kawjhdak'),
(29, 13, 3, 'Katha', 20, 'Mon Dec 07 2020', '9AM-10AM', 123456, 'No'),
(31, 13, 6, 'Kyo', 17, 'Sun Dec 13 2020', '9AM-10AM', 728376, 'No'),
(33, 1, 7, 'Tooru', 27, 'Wed Dec 16 2020', '10AM-11AM', 12435, 'No'),
(34, 4, 7, 'Haji', 27, 'Thu Dec 17 2020', '11AM-12PM', 272163, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `doc_id` int(10) NOT NULL,
  `guest_name` varchar(50) NOT NULL,
  `guest_age` int(2) NOT NULL DEFAULT 0,
  `weight` int(2) NOT NULL,
  `guest_gender` varchar(1) NOT NULL DEFAULT 'M',
  `guest_currentcon` varchar(40) DEFAULT '0',
  `guest_gmail` varchar(40) NOT NULL,
  `guest_allergy` varchar(40) DEFAULT NULL,
  `problem` varchar(100) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `consultation` varchar(150) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`id`, `user_id`, `doc_id`, `guest_name`, `guest_age`, `weight`, `guest_gender`, `guest_currentcon`, `guest_gmail`, `guest_allergy`, `problem`, `title`, `description`, `consultation`, `flag`) VALUES
(1, 1, 1, 'name', 77, 88, 'M', 'q1', 'email', 'q2', 'Phychiatrist', 'title', 'desc', '', 1),
(2, 1, 2, 'Kalash Duryodhan Nikose', 1, 1, 'M', 'dd', 'kalashkimi@gmail.com', 'dd', 'Cardiovascular Surgeon', 'dd', 'dd', 'efahegjhgfale', 1),
(3, 4, 6, 'katha', 20, 49, 'F', 'Yes', 'katha@hotmail.com', 'No', 'Cardiovascular Surgeon', 'qwueyi', 'akjwdhakjwb', 'hello I think you should have this and that medicine', 1),
(4, 1, 4, 'rushi', 23, 13, 'M', 'q2elkqj', 'jk@bts.com', 'wdkjqlde', 'Cosmetologist', 'jnfwljen', 'ahekjwq', '', 0),
(5, 1, 6, 'hendry', 77, 66, 'F', 'ytiy', 'kjs@fh.com', 'hgiyg', 'Physician', 'khgkhj', 'jbkjb km', 'tara', 1),
(6, 1, 5, 'jhjhuj', 67, 45, 'M', 'kttf', 'v@bts.com', 'uytilyt', 'Phychiatrist', 'hkjh', 'yutuyt', '', 1),
(7, 4, 3, 'harry', 67, 45, 'F', 'hghkjhg', 'v@bts.com', 'vjhg', 'Physician', 'hgjh', 'hggjhgg', '', 0),
(10, 4, 6, 'v', 56, 23, 'M', 'sjdfksd', 'v@bts.com', 'fish', 'Cardiovascular Surgeon', 'msa,', 'hey how you doing', 'the docid should be 2', 1),
(11, 4, 5, 'jkjkjkj', 67, 7, 'M', 'hghjhk', 'jkjkj@we.ckn', 'hhkjg', 'Phychiatrist', 'gfhgf', 'hgjhgkjh', 'doc_id = 5', 1),
(12, 12, 0, 'Yu', 17, 38, 'M', 'No', 'yu@ew.com', 'Allergy of Fish', 'Phychiatrist', 'Feeling nausea', 'Constant Headache , Lack of sleep', '', 0),
(13, 13, 7, 'Shardul', 20, 60, 'M', 'No', 'shardul@gmail.com', 'No', 'Phychiatrist', 'Lack of sleep', 'Anxeity', 'syuadg', 1),
(14, 13, 0, 'Katha', 20, 45, 'F', 'No', 'katha@hotmail.com', 'No', 'Cardiovascular Surgeon', 'chest pain', 'nothing', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) NOT NULL,
  `userdoc_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `specialization` varchar(30) NOT NULL,
  `degree` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `userdoc_id`, `name`, `specialization`, `degree`, `city`, `address`) VALUES
(1, 5, 'Dr Adhikari Samiran', 'Phychiatrist', 'MBBS,MD', 'Mumbai', ''),
(2, 6, 'Dr Jandial Puneet', 'Cardiovascular Surgeon', 'MBBS,MS,MCh', 'Nagpur', ''),
(3, 7, 'Dr Chaterjee Vibhu', 'Physician', 'MBBS,MD', 'Pune', ''),
(4, 8, 'Dr Davalbhakta Ashish', 'Cosmetologist', 'MBBS,MS,MCh', 'Pune', ''),
(5, 9, 'Dr Chawdur Rupasri', 'Phychiatrist', 'MBBS,MD', 'Mumbai', ''),
(6, 10, 'Dr Adbe Vinod', 'Physician', 'MBBS,MD,DNB', 'Nagpur', ''),
(7, 14, 'Dr Kalash Nikose', 'Phychiatrist', 'MBBS,MD', 'Nagpur', '');

-- --------------------------------------------------------

--
-- Table structure for table `labbook`
--

CREATE TABLE `labbook` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `lab_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(10) NOT NULL,
  `date` varchar(50) NOT NULL,
  `test` varchar(40) NOT NULL,
  `ph_no` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labbook`
--

INSERT INTO `labbook` (`id`, `user_id`, `lab_id`, `name`, `age`, `date`, `test`, `ph_no`, `email`, `message`) VALUES
(1, 1, 1, 'katha', 14, 'Fri Dec 04 2020', 'test2', 124, 'katha@h.com', 'lakhdakjdh'),
(2, 1, 3, 'rushi', 20, 'Mon Dec 07 2020', 'test2', 67876, 'kjs@fh.com', 'adhiawdk'),
(3, 1, 2, 'tooru', 27, 'Tue Dec 15 2020', 'test2', 1234567, 'tooru@gmail.com', 'katha'),
(4, 4, 4, 'iwa', 27, 'Mon Dec 14 2020', 'test3', 987654, 'iwa@gmail.com', 'katha'),
(5, 13, 2, 'Katha', 20, 'Wed Dec 16 2020', 'test3', 1235678, 'katha@h.com', 'No'),
(6, 13, 2, 'kalash', 20, 'Wed Dec 16 2020', 'test1', 368, 'katha@hotmail.com', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `labtest`
--

CREATE TABLE `labtest` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ph_no` varchar(30) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labtest`
--

INSERT INTO `labtest` (`id`, `name`, `ph_no`, `mail`, `city`, `address`) VALUES
(1, 'ICMR-National Institute of Virology', '123-145-567', 'info@gmaol.com', 'Pune', ''),
(2, 'Seth GS Medical College & KEM Hospital', '987-765-432', 'info@gmaol.com', 'Mumbai', ''),
(3, 'Kasturba Hospital for Infectious Diseases', '123-456-789', 'info@gmaol.com', 'Mumbai', ''),
(4, 'Indira Gandhi Govt. Medical College', '987-765-432', 'info@gmaol.com', 'Nagpur', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `bloodgrp` varchar(20) NOT NULL,
  `address` varchar(70) NOT NULL,
  `past_medication` varchar(200) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `email`, `password`, `gender`, `dob`, `bloodgrp`, `address`, `past_medication`, `role`) VALUES
(1, 'katha', 'katha@hotmail.com', 'katha', 'Female', '2000-10-19', 'B+ve', 'Block Number 6, Madhumati Apartment, Near MSEB, Behind Vishwambar Hote', 'akjhdsakjfh,w vut4eaiuvyfg lbeviygr', 'User'),
(2, 'rushi', 'r@git.lkj', '', 'Male', '2020-12-17', 'O+ve', 'jhgkjg', 'hgjhfj', 'Doctor'),
(3, 'kjadla', 'v@bts.com', 'ghj', 'Male', '2020-12-23', 'B+ve', 'rsyhfsd', 'yrduhtd', 'Doctor'),
(4, 'kp', 'kp@bts.1d', '123', 'Female', '2020-12-21', 'B+ve', 'hgkhg', 'hgihgiyg', 'User'),
(5, 'Dr Adhikari Samiran', 'adhikari@gmail.com', 'das', '', '', '', '', '', 'Doctor'),
(6, 'Dr Jandial Puneet', 'jandial@gmail.com', 'djp', '', '', '', '', '', 'Doctor'),
(7, 'Dr Chaterjee Vibhu', 'chaterjee@gmail.com', 'dcv', '', '', '', '', '', 'Doctor'),
(8, 'Dr Davalbhakta Ashish', 'davalbhakta@gmail.com', 'dda', '', '', '', '', '', 'Doctor'),
(9, 'Dr Chawdur Rupasri', 'chawdur@gmail.com', 'dcr', '', '', '', '', '', 'Doctor'),
(10, 'Dr Adbe Vinod', 'adbe@gmail.com', 'dav', '', '', '', '', '', 'Doctor'),
(11, 'harry', 'harry@gmail.com', 'qwerty', 'Male', '2020-12-17', 'B+ve', 'jshadkjsdh', 'akwgda,ygwf,', 'User'),
(12, 'patel', 'patel@gmail.com', 'patel', 'Female', '2020-12-24', 'B+ve', 'hgjhgdfs', 'hgjytiyuerd', 'User'),
(13, 'Katha Patel', 'katha@gmail.com', 'katha', 'Female', '2000-10-19', 'B+ve', 'Pune', 'NA', 'User'),
(14, 'Dr Kalash Nikose', 'kalash@gmail.com', 'kalash', '', '', '', '', '', 'Doctor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additional`
--
ALTER TABLE `additional`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`,`doc_id`),
  ADD KEY `doc_id` (`doc_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `doc_id` (`doc_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labbook`
--
ALTER TABLE `labbook`
  ADD PRIMARY KEY (`id`,`lab_id`),
  ADD KEY `lab_id` (`lab_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `labtest`
--
ALTER TABLE `labtest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additional`
--
ALTER TABLE `additional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `labbook`
--
ALTER TABLE `labbook`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `labtest`
--
ALTER TABLE `labtest`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `additional`
--
ALTER TABLE `additional`
  ADD CONSTRAINT `additional_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `doctors` (`id`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `consultation_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `labbook`
--
ALTER TABLE `labbook`
  ADD CONSTRAINT `labbook_ibfk_1` FOREIGN KEY (`lab_id`) REFERENCES `labtest` (`id`),
  ADD CONSTRAINT `labbook_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
