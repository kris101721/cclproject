-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 02:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attsys-database`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `rno` int(10) NOT NULL,
  `date` date NOT NULL,
  `sub` varchar(10) NOT NULL,
  `time` varchar(20) NOT NULL,
  `att` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`rno`, `date`, `sub`, `time`, `att`) VALUES
(1, '2023-03-14', 'SPCC', '8:45-9:45', 'present'),
(2, '2023-03-14', 'SPCC', '8:45-9:45', 'present'),
(3, '2023-03-14', 'SPCC', '8:45-9:45', 'present'),
(4, '2023-03-14', 'SPCC', '8:45-9:45', 'present'),
(5, '2023-03-14', 'SPCC', '8:45-9:45', 'present'),
(6, '2023-03-14', 'SPCC', '8:45-9:45', 'present'),
(7, '2023-03-14', 'SPCC', '8:45-9:45', 'present'),
(8, '2023-03-14', 'SPCC', '8:45-9:45', 'present'),
(9, '2023-03-14', 'SPCC', '8:45-9:45', 'present'),
(10, '2023-03-14', 'SPCC', '8:45-9:45', 'present'),
(11, '2023-03-14', 'SPCC', '8:45-9:45', 'present'),
(12, '2023-03-14', 'SPCC', '8:45-9:45', 'present'),
(13, '2023-03-14', 'SPCC', '8:45-9:45', 'present'),
(14, '2023-03-14', 'SPCC', '8:45-9:45', 'present'),
(15, '2023-03-14', 'SPCC', '8:45-9:45', 'present'),
(16, '2023-03-14', 'SPCC', '8:45-9:45', 'present'),
(17, '2023-03-14', 'SPCC', '8:45-9:45', 'present');

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `roles` varchar(10) NOT NULL,
  `rno` int(10) DEFAULT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `branch` varchar(15) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pswd1` varchar(15) NOT NULL,
  `pswd2` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general`
--

INSERT INTO `general` (`roles`, `rno`, `fname`, `lname`, `branch`, `uname`, `email`, `pswd1`, `pswd2`, `status`) VALUES
('student', 16, 'Abhishek', 'N', 'Computer', 'abhishek', 'abhi@gmail.com', '1234', '1234', 'accepted'),
('admin', NULL, 'admin1', 'admin1', 'admin', 'admin1', 'admin1@gmail.com', '1234', '1234', 'accepted'),
('student', 1, 'Agrima', 'Kumar', 'Computer', 'agrima', 'ak@mail.com', '1234', '1234', 'accepted'),
('student', 9, 'Alex', 'M', 'Computer', 'alex', 'am@gmail.com', '1234', '1234', 'accepted'),
('student', 6, 'Bijith', 'M', 'Computer', 'bijith', 'bm@gmail.com', '1234', '1234', 'accepted'),
('faculty', 0, 'fac1', 'fac1', 'fac', 'bhakti', 'fac1@gmail.com', '1234', '1234', 'accepted'),
('student', 11, 'Justin', 'M', 'Computer', 'justin', 'jm1@gmail.com', '1234', '1234', 'accepted'),
('student', 8, 'Jonathan', 'M', 'Computer', 'jonathan', 'jm@gmail.com', '1234', '1234', 'accepted'),
('student', 10, 'Joel', 'V', 'Computer', 'joel', 'jvv@gmail.com', '1234', '1234', 'accepted'),
('student', 12, 'Kris', 'M', 'Computer', 'kris', 'km2@gmil.com', '1234', '1234', 'accepted'),
('student', 15, 'Kristen', 'Suresh', 'Computer', 'kristen', 'kristen@gmail.com', '1234', '1234', 'accepted'),
('student', 3, 'Kevin', 'V', 'Computer', 'kevin', 'kv@gmail.com', '1234', '1234', 'accepted'),
('student', 2, 'Lavanya', 'K', 'Computer', 'lavanya', 'lk@gmail.com', '1234', '1234', 'accepted'),
('student', 14, 'Ojas', 'M', 'Computer', 'ojas', 'om@gmail.com', '1234', '1234', 'accepted'),
('student', 17, 'Om', 'Naik', 'Computer', 'Om', 'omnaik@FCRIT.onmicro', '1234', '1234', 'accepted'),
('student', 7, 'Robin', 'M', 'Computer', 'robin', 'rm@gmail,com', '1234', '1234', 'accepted'),
('student', 4, 'Seadon', 'K', 'Computer', 'seadon', 'sk@gmail.com', '1234', '1234', 'accepted'),
('student', 5, 'Soham', 'M', 'Computer', 'soham', 'sm@gmail.com', '1234', '1234', 'accepted'),
('student', 13, 'Walter', 'M', 'Computer', 'walter', 'wm@gmail.com', '1234', '1234', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`) VALUES
(1, 'admin1', '1234'),
(2, 'admin2', '1234'),
(3, 'fac1', '1234'),
(4, 'fac2', '1234'),
(5, 'stud1', '1234'),
(6, 'stud2', '1234'),
(8, 'stud3', '1234'),
(9, 'stud4', '1234'),
(10, 'agrima', '1234'),
(11, 'abhishek', '1234'),
(12, 'alex', '1234'),
(13, 'bijith', '1234'),
(14, 'justin', '1234'),
(15, 'jonathan', '1234'),
(16, 'joel', '1234'),
(17, 'kris', '1234'),
(18, 'kristen', '1234'),
(19, 'kevin', '1234'),
(20, 'lavanya', '1234'),
(21, 'ojas', '1234'),
(22, 'Om', '1234'),
(23, 'robin', '1234'),
(24, 'seadon', '1234'),
(25, 'soham', '1234'),
(26, 'walter', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 4, '2022-03-14 18:29:47', 'no'),
(2, 5, '2022-03-14 18:27:40', 'no'),
(3, 4, '2022-03-14 22:13:12', 'no'),
(4, 5, '2022-03-15 17:48:56', 'no'),
(5, 4, '2022-03-15 14:46:12', 'no'),
(6, 5, '2022-03-15 18:34:49', 'no'),
(7, 5, '2022-03-16 07:46:38', 'no'),
(8, 5, '2022-03-16 07:49:26', 'no'),
(9, 5, '2022-03-16 08:01:46', 'no'),
(10, 4, '2022-03-16 08:03:34', 'no'),
(11, 5, '2022-03-16 08:39:52', 'no'),
(12, 4, '2022-03-16 08:39:49', 'no'),
(13, 4, '2022-03-17 22:41:20', 'no'),
(14, 4, '2022-03-17 23:33:11', 'no'),
(15, 4, '2022-03-18 08:16:39', 'no'),
(16, 5, '2022-03-18 08:27:20', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `roles` varchar(10) NOT NULL,
  `rno` int(10) DEFAULT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `branch` varchar(15) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pswd1` varchar(15) NOT NULL,
  `pswd2` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`roles`, `rno`, `fname`, `lname`, `branch`, `uname`, `email`, `pswd1`, `pswd2`, `status`) VALUES
('student', 16, 'Abhishek', 'N', 'Computer', 'abhishek', 'abhi@gmail.com', '1234', '1234', 'accepted'),
('admin', 0, 'admin2', 'admin2', 'admin', 'admin2', 'admin2@gmail.com', '1234', '1234', 'accepted'),
('student', 1, 'Agrima', 'Kumar', 'Computer', 'agrima', 'ak@mail.com', '1234', '1234', 'accepted'),
('student', 9, 'Alex', 'M', 'Computer', 'alex', 'am@gmail.com', '1234', '1234', 'accepted'),
('student', 6, 'Bijith', 'M', 'Computer', 'bijith', 'bm@gmail.com', '1234', '1234', 'accepted'),
('faculty', 0, 'fac1', 'fac1', 'fac', 'fac1', 'fac1@gmail.com', '1234', '1234', 'accepted'),
('faculty', 0, 'fac2', 'fac2', 'fac', 'fac2', 'fac2@gmail.com', '1234', '1234', 'accepted'),
('student', 11, 'Justin', 'M', 'Computer', 'justin', 'jm1@gmail.com', '1234', '1234', 'accepted'),
('student', 8, 'Jonathan', 'M', 'Computer', 'jonathan', 'jm@gmail.com', '1234', '1234', 'accepted'),
('student', 10, 'Joel', 'V', 'Computer', 'joel', 'jvv@gmail.com', '1234', '1234', 'accepted'),
('student', 12, 'Kris', 'M', 'Computer', 'kris', 'km2@gmil.com', '1234', '1234', 'accepted'),
('student', 15, 'Kristen', 'Suresh', 'Computer', 'kristen', 'kristen@gmail.com', '1234', '1234', 'accepted'),
('student', 3, 'Kevin', 'V', 'Computer', 'kevin', 'kv@gmail.com', '1234', '1234', 'accepted'),
('student', 2, 'Lavanya', 'K', 'Computer', 'lavanya', 'lk@gmail.com', '1234', '1234', 'accepted'),
('student', 14, 'Ojas', 'M', 'Computer', 'ojas', 'om@gmail.com', '1234', '1234', 'accepted'),
('student', 17, 'Om', 'Naik', 'Computer', 'Om', 'omnaik@FCRIT.onmicro', '1234', '1234', 'accepted'),
('student', 7, 'Robin', 'M', 'Computer', 'robin', 'rm@gmail,com', '1234', '1234', 'accepted'),
('student', 4, 'Seadon', 'K', 'Computer', 'seadon', 'sk@gmail.com', '1234', '1234', 'accepted'),
('student', 5, 'Soham', 'M', 'Computer', 'soham', 'sm@gmail.com', '1234', '1234', 'accepted'),
('student', 13, 'Walter', 'M', 'Computer', 'walter', 'wm@gmail.com', '1234', '1234', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `rno` int(10) NOT NULL,
  `aoa` int(3) NOT NULL,
  `dbms` int(3) NOT NULL,
  `mp` int(3) NOT NULL,
  `emiv` int(3) NOT NULL,
  `os` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rno`, `aoa`, `dbms`, `mp`, `emiv`, `os`) VALUES
(1, 90, 65, 87, 86, 56),
(2, 45, 67, 12, 67, 89),
(4, 90, 65, 87, 86, 56);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`rno`,`date`);

--
-- Indexes for table `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`rno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
