-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 04:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubaynhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_year`
--

CREATE TABLE `academic_year` (
  `id` int(11) NOT NULL,
  `academic_year` varchar(40) DEFAULT NULL,
  `ay_status` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_year`
--

INSERT INTO `academic_year` (`id`, `academic_year`, `ay_status`) VALUES
(1, '2020-2021', '1'),
(6, '2022-2023', '1');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_fname` varchar(40) DEFAULT NULL,
  `admin_mname` varchar(40) DEFAULT NULL,
  `admin_lname` varchar(40) DEFAULT NULL,
  `admin_ext` varchar(40) DEFAULT NULL,
  `admin_position` varchar(40) DEFAULT NULL,
  `admin_gender` varchar(40) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `admin_username` varchar(40) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL,
  `status` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_fname`, `admin_mname`, `admin_lname`, `admin_ext`, `admin_position`, `admin_gender`, `email`, `admin_username`, `admin_password`, `status`) VALUES
(1, 'default', NULL, 'admin', NULL, NULL, NULL, NULL, 'default', '1234', NULL),
(2, 'Kevin', 'M', 'Durant', '', 'Administrative Officer', 'Male', 'kevin@gmail.com', 'kevin123', '$2y$10$Jfb6r0uGwswEmGUJvOhaMu7B8tRcqV5Zv2r6UPj7Bl.EnObSL1jsO', 1),
(3, 'Glenn Mark ', 'V', 'Dela Sala', '', 'Head Of Office', 'Male', 'admin@gmail.com', 'glenn123', '$2y$10$Q77o2EfFeNO.VCKhEt3ZX.iaaQziR7J5L/EhcZEbwwiIo/bZ5l8yK', 1);

-- --------------------------------------------------------

--
-- Table structure for table `last_school`
--

CREATE TABLE `last_school` (
  `no` int(11) NOT NULL,
  `school_name` varchar(100) DEFAULT NULL,
  `school_id` varchar(40) DEFAULT NULL,
  `school_address` varchar(40) DEFAULT NULL,
  `stud_id_no` varchar(40) DEFAULT NULL,
  `district` varchar(40) DEFAULT NULL,
  `division` varchar(40) DEFAULT NULL,
  `region` varchar(40) DEFAULT NULL,
  `teacher` varchar(40) DEFAULT NULL,
  `grade` varchar(40) DEFAULT NULL,
  `section` varchar(40) DEFAULT NULL,
  `school_year` varchar(40) DEFAULT NULL,
  `academic_status` varchar(40) DEFAULT NULL,
  `average` int(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `last_school`
--

INSERT INTO `last_school` (`no`, `school_name`, `school_id`, `school_address`, `stud_id_no`, `district`, `division`, `region`, `teacher`, `grade`, `section`, `school_year`, `academic_status`, `average`) VALUES
(2, 'Tubay National High School', '131578', 'Poblacion 2, Tubay, Agusan del Norte', '2', 'Tubay District I', 'Agusan del Norte', 'Caraga', 'Louie Kane S Regala ', 'Grade 7', 'Diamond', '2022-2023', 'Incomplete', 0);

-- --------------------------------------------------------

--
-- Table structure for table `myschool`
--

CREATE TABLE `myschool` (
  `no` int(11) NOT NULL,
  `school_name` varchar(100) DEFAULT NULL,
  `school_id` varchar(40) DEFAULT NULL,
  `school_address` varchar(100) DEFAULT NULL,
  `district` varchar(40) DEFAULT NULL,
  `division` varchar(40) DEFAULT NULL,
  `region` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myschool`
--

INSERT INTO `myschool` (`no`, `school_name`, `school_id`, `school_address`, `district`, `division`, `region`) VALUES
(1, 'Tubay National High School', '131578', 'Poblacion 2, Tubay, Agusan del Norte', 'Tubay District I', 'Agusan del Norte', 'Caraga');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `rec_no` int(11) NOT NULL,
  `stud_id_no` int(11) DEFAULT NULL,
  `grade` varchar(40) DEFAULT NULL,
  `section` varchar(40) DEFAULT NULL,
  `school_year` varchar(40) DEFAULT NULL,
  `subject` varchar(40) DEFAULT NULL,
  `first_grading` float(8,2) DEFAULT NULL,
  `second_grading` float(8,2) DEFAULT NULL,
  `third_grading` float(8,2) DEFAULT NULL,
  `fourth_grading` float(8,2) DEFAULT NULL,
  `final_grade` float(8,2) DEFAULT NULL,
  `remarks` varchar(40) DEFAULT NULL,
  `remedial` float(8,2) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`rec_no`, `stud_id_no`, `grade`, `section`, `school_year`, `subject`, `first_grading`, `second_grading`, `third_grading`, `fourth_grading`, `final_grade`, `remarks`, `remedial`, `created_at`, `updated_at`) VALUES
(3, 2, 'Grade 7', 'Diamond', '2022-2023', 'Filipino', 88.00, 89.00, 0.00, 0.00, 44.00, '', 0.00, '2022-12-12 09:33:49', '2023-08-01 21:14:52'),
(4, 2, 'Grade 7', 'Diamond', '2022-2023', 'English', 99.00, 88.00, 0.00, 0.00, 47.00, '', 0.00, '2022-12-12 09:33:49', '2023-08-01 21:15:37'),
(6, 2, 'Grade 7', 'Diamond', '2022-2023', 'Mathematics', 87.00, 89.00, 0.00, 0.00, 44.00, '', 0.00, '2022-12-12 10:45:43', '2024-05-14 20:41:17'),
(7, 2, 'Grade 7', 'Diamond', '2022-2023', 'Science', 88.00, 98.00, 98.00, 98.00, 96.00, '', 0.00, '2022-12-12 10:45:43', '2024-05-14 20:41:58'),
(8, 2, 'Grade 7', 'Diamond', '2022-2023', 'Araling Panlipunan (ap)', 86.00, 0.00, 0.00, 0.00, 22.00, '', 0.00, '2022-12-12 10:45:43', '2023-08-01 21:12:02'),
(9, 2, 'Grade 7', 'Diamond', '2022-2023', 'Edukasyon Sa Pagpapakatao (esp)', 88.00, 0.00, 0.00, 0.00, 22.00, '', 0.00, '2022-12-12 10:45:43', '2023-08-01 21:12:02'),
(10, 2, 'Grade 7', 'Diamond', '2022-2023', 'Technology And Livelihood Education (tle', 94.00, 0.00, 0.00, 0.00, 24.00, '', 0.00, '2022-12-12 10:45:43', '2023-08-01 21:12:02'),
(11, 2, 'Grade 7', 'Diamond', '2022-2023', 'Mapeh', 87.00, 0.00, 0.00, 0.00, 22.00, '', 0.00, '2022-12-12 10:45:43', '2023-08-01 21:12:02'),
(12, 2, 'Grade 7', 'Diamond', '2022-2023', 'Music', 88.00, 90.00, 0.00, 0.00, 0.00, '', 0.00, '2022-12-12 10:45:43', '2024-05-14 20:45:30'),
(13, 2, 'Grade 7', 'Diamond', '2022-2023', 'Arts', 89.00, 0.00, 0.00, 0.00, 0.00, '', 0.00, '2022-12-12 10:45:43', '2023-08-01 21:12:02'),
(14, 2, 'Grade 7', 'Diamond', '2022-2023', 'Physical Education', 84.00, 0.00, 0.00, 0.00, 0.00, '', 0.00, '2022-12-12 10:45:43', '2023-08-01 21:12:02'),
(15, 2, 'Grade 7', 'Diamond', '2022-2023', 'Health', 87.00, 0.00, 0.00, 0.00, 0.00, '', 0.00, '2022-12-12 10:45:43', '2023-08-01 21:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `room_no` int(11) NOT NULL,
  `grade_level` varchar(40) DEFAULT NULL,
  `section` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`room_no`, `grade_level`, `section`) VALUES
(1, 'Grade 7', 'Pearl'),
(2, 'Grade 7', 'Topaz'),
(3, 'Grade 7', 'Diamond'),
(4, 'Grade 8', 'Emerald'),
(5, 'N/a', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_no` int(11) NOT NULL,
  `fname` varchar(40) DEFAULT NULL,
  `mname` varchar(40) DEFAULT NULL,
  `lname` varchar(40) DEFAULT NULL,
  `ext` varchar(40) DEFAULT NULL,
  `lrn` varchar(40) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `elementary` varchar(40) DEFAULT NULL,
  `elem_school_id` varchar(40) DEFAULT NULL,
  `elem_school_address` varchar(100) DEFAULT NULL,
  `average` float(8,2) DEFAULT NULL,
  `birthdate` varchar(40) DEFAULT NULL,
  `birthplace` varchar(40) DEFAULT NULL,
  `age` varchar(40) DEFAULT NULL,
  `gender` varchar(40) DEFAULT NULL,
  `status` varchar(40) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_no`, `fname`, `mname`, `lname`, `ext`, `lrn`, `address`, `elementary`, `elem_school_id`, `elem_school_address`, `average`, `birthdate`, `birthplace`, `age`, `gender`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Kobe', 'James', 'Gulay', 'Jr', '283837442223', 'Poblacion 1, Tubay Adn', 'Tubay Central Elementary School', '121414', 'Poblacion 1', 88.00, '2010-04-12', 'Poblacion 1, Tubay, Adn', '13', 'Male', '1', '2022-12-12 09:33:18', '2022-12-12 11:09:36');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_no` int(11) NOT NULL,
  `subject` varchar(40) DEFAULT NULL,
  `description` varchar(40) DEFAULT NULL,
  `grade` varchar(40) DEFAULT NULL,
  `section` varchar(40) DEFAULT NULL,
  `component` varchar(40) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_no`, `subject`, `description`, `grade`, `section`, `component`, `created_at`, `updated_at`) VALUES
(1, 'Filipino', 'Filipino', 'Grade 7', 'Topaz', 'None', '2022-12-12 08:06:48', '2022-12-12 08:06:48'),
(2, 'English', 'English', 'Grade 7', 'Topaz', 'None', '2022-12-12 08:06:59', '2022-12-12 08:06:59'),
(4, 'Mathematics', 'Mathematics', 'Grade 7', 'Topaz', 'None', '2022-12-12 10:43:07', '2022-12-12 10:43:07'),
(5, 'Science', 'Science', 'Grade 7', 'Topaz', 'None', '2022-12-12 10:43:16', '2022-12-12 10:43:16'),
(6, 'Araling Panlipunan (ap)', 'Araling Panlipunan (ap)', 'Grade 7', 'Topaz', 'None', '2022-12-12 10:43:37', '2022-12-12 10:43:37'),
(7, 'Edukasyon Sa Pagpapakatao (esp)', 'Edukasyon Sa Pagpapakatao (esp)', 'Grade 7', 'Topaz', 'None', '2022-12-12 10:43:51', '2022-12-12 10:43:51'),
(8, 'Technology And Livelihood Education (tle', 'Technology And Livelihood Education (tle', 'Grade 7', 'Topaz', 'None', '2022-12-12 10:44:06', '2022-12-12 10:44:06'),
(9, 'Mapeh', 'Mapeh', 'Grade 7', 'Topaz', 'None', '2022-12-12 10:44:20', '2022-12-12 10:44:20'),
(10, 'Music', 'Music', 'Grade 7', 'Topaz', 'Mapeh', '2022-12-12 10:44:40', '2022-12-12 10:44:40'),
(11, 'Arts', 'Arts', 'Grade 7', 'Topaz', 'Mapeh', '2022-12-12 10:44:56', '2022-12-12 10:44:56'),
(12, 'Physical Education', 'Physical Education', 'Grade 7', 'Topaz', 'Mapeh', '2022-12-12 10:45:10', '2022-12-12 10:45:10'),
(13, 'Health', 'Health', 'Grade 7', 'Topaz', 'Mapeh', '2022-12-12 10:45:20', '2022-12-12 10:45:20'),
(14, 'Filipino', 'Filipino', 'Grade 7', 'Pearl', 'None', '2022-12-12 11:13:01', '2022-12-12 11:13:01'),
(15, 'English', 'English', 'Grade 7', 'Pearl', 'None', '2022-12-12 11:13:11', '2022-12-12 11:13:11');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(40) DEFAULT NULL,
  `user_mname` varchar(40) DEFAULT NULL,
  `user_lname` varchar(40) DEFAULT NULL,
  `position` varchar(40) DEFAULT NULL,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(40) CHARACTER SET latin7 COLLATE latin7_general_cs DEFAULT NULL,
  `user_ext` varchar(40) DEFAULT NULL,
  `grade_level` varchar(40) DEFAULT NULL,
  `section` varchar(40) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_fname`, `user_mname`, `user_lname`, `position`, `username`, `password`, `user_ext`, `grade_level`, `section`, `email`, `status`) VALUES
(1, 'Louie Kane', 'S', 'Regala', 'Teacher I', 'louie123', 'Kane1234', '', 'Grade 7', 'Diamond', 'louie@gmail.com', '1'),
(2, 'Janessa Claire', 'Masculino', 'Quinones', 'Teacher I', 'janessa123', 'Janessa123', '', 'Grade 7', 'Pearl', 'janessa@gmail.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_year`
--
ALTER TABLE `academic_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `last_school`
--
ALTER TABLE `last_school`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `myschool`
--
ALTER TABLE `myschool`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`rec_no`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`room_no`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_year`
--
ALTER TABLE `academic_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `last_school`
--
ALTER TABLE `last_school`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `myschool`
--
ALTER TABLE `myschool`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `rec_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `room_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
