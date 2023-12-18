-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 01:19 AM
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
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `latest_notice`
--

CREATE TABLE `latest_notice` (
  `latest_notice_id` int(20) NOT NULL,
  `latest_notice_date` date NOT NULL,
  `latest_notice_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `latest_notice`
--

INSERT INTO `latest_notice` (`latest_notice_id`, `latest_notice_date`, `latest_notice_description`) VALUES
(122, '2023-02-12', 'Diploma in Engineering Result 2022 (Held in July-August, 2023)');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `students_id` int(20) NOT NULL,
  `students_name` varchar(255) NOT NULL,
  `students_roll` varchar(255) NOT NULL,
  `students_class` varchar(255) NOT NULL,
  `students_mobile` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`students_id`, `students_name`, `students_roll`, `students_class`, `students_mobile`) VALUES
(123456, 'Shawon Ali', '1', 'Diploma', '01636225557'),
(123457, 'Maria Sultana', '2', 'Nine', '01425857457'),
(123458, 'IVA KHANAM', '3', 'NINE', '01425857457'),
(123459, 'Jannatul Ferdousi', '10', 'Diploma', '01636225557'),
(123460, 'Sanjida Akter Koli', '12', 'Diploma', '01636225557');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teachers_id` int(20) NOT NULL,
  `teachers_name` varchar(255) NOT NULL,
  `teachers_department` varchar(255) NOT NULL,
  `teachers_mobile` varchar(255) NOT NULL,
  `teachers_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teachers_id`, `teachers_name`, `teachers_department`, `teachers_mobile`, `teachers_email`) VALUES
(5485, 'SHAWON ALI', 'Computer', '01636225557', 'shawon.cmt.cpik@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL,
  `user_first_name` varchar(255) NOT NULL,
  `user_last_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first_name`, `user_last_name`, `user_email`, `user_password`) VALUES
(1, 'SHAWON', 'ALI', 'shawon.cmt.cpik@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'Eyrin', 'Sultana', 'eyrin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'Shawon', 'Ali', 'shawon.cmt@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`students_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
