-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2024 at 03:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `Id` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `role` varchar(20) NOT NULL,
  `bus_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`Id`, `username`, `password`, `email`, `phone_no`, `role`, `bus_name`) VALUES
('A12jfjbjgi', 'rhktgh', 'hcgyfn', 'grugjrg@nehfue.com.in', 6281518215, 'bus incharge', 'D'),
('A21126501', 'anits_admin', 'anits@123@', 'admin@anits.edu.in', 6543245686, 'admin', ''),
('A21126504', 'Ramesh', 'gdtdt', 'fsfrs@gmail.com', 6464563527, 'bus incharge', 'F'),
('A21126510', 'Raj', 'raj@264744', 'raj@anits.edu.in', 7573747365, 'student', 'D'),
('A21126516', 'Krish', 'krish@@', 'lkrish@anits.edu.in', 6778753354, 'student', 'D'),
('A21126554', 'chandra', 'chandra@2004', 'chandra@anits.edu.in', 7665544662, 'student', 'D'),
('A21126565', 'Yogendra', 'yogh@2004@', 'yg@gmail.com', 7655434564, 'bus incharge', 'G');

-- --------------------------------------------------------

--
-- Table structure for table `student_login_details`
--

CREATE TABLE `student_login_details` (
  `Id` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `role` varchar(20) NOT NULL,
  `bus_name` varchar(10) NOT NULL,
  `stop` varchar(20) NOT NULL,
  `total_amount` double NOT NULL,
  `paid_amount` double NOT NULL,
  `to_be_paid` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student_login_details`
--

INSERT INTO `student_login_details` (`Id`, `username`, `password`, `email`, `phone_no`, `role`, `bus_name`, `stop`, `total_amount`, `paid_amount`, `to_be_paid`) VALUES
('A21126510', 'Raj', 'raj@264744', 'raj@anits.edu.in', 7573747365, 'student', 'D', 'maddilapalem', 36000, 30000, 6000),
('A21126516', 'Krish', 'krish@@', 'lkrish@anits.edu.in', 6778753354, 'student', 'D', 'Maddilapalem', 36000, 18000, 18000),
('A21126554', 'chandra', 'chandra@2004', 'chandra@anits.edu.in', 7665544662, 'student', 'D', 'rama talkies', 42000, 42000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_no` (`phone_no`);

--
-- Indexes for table `student_login_details`
--
ALTER TABLE `student_login_details`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
