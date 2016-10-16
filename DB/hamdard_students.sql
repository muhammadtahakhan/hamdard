-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2016 at 10:53 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hamdard_students`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_records`
--

CREATE TABLE `academic_records` (
  `academic_id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `passing_year` date NOT NULL,
  `total_marks` int(11) NOT NULL,
  `marks_obtained` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  `uni_board` varchar(20) NOT NULL,
  `attemps` int(11) NOT NULL,
  `enable_flag` varchar(2) NOT NULL DEFAULT 'Y',
  `last_update_date` date NOT NULL,
  `last_updated_by` int(11) NOT NULL,
  `creation_date` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `last_update_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `application_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `address` varchar(30) NOT NULL,
  `country` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `f_nic` varchar(20) NOT NULL,
  `f_dob` date NOT NULL,
  `f_email` varchar(20) NOT NULL,
  `f_mobile` varchar(20) NOT NULL,
  `f_phone` varchar(20) NOT NULL,
  `f_nationality` varchar(20) NOT NULL,
  `f_current_address` varchar(30) NOT NULL,
  `f_country` int(11) NOT NULL,
  `f_city` int(11) NOT NULL,
  `campus` varchar(20) NOT NULL,
  `test_center` int(11) NOT NULL,
  `student_type` varchar(20) NOT NULL,
  `f_income` int(11) NOT NULL,
  `f_perminant_Address` varchar(30) NOT NULL,
  `hostal_flag` int(11) NOT NULL,
  `enable_flag` varchar(2) NOT NULL DEFAULT 'Y',
  `last_updated_date` date NOT NULL,
  `last_updated_by` int(11) NOT NULL,
  `creation_date` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `last_update_login` int(11) NOT NULL,
  `print_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`application_id`, `name`, `nic`, `dob`, `email`, `mobile`, `phone`, `nationality`, `gender`, `address`, `country`, `city`, `f_name`, `f_nic`, `f_dob`, `f_email`, `f_mobile`, `f_phone`, `f_nationality`, `f_current_address`, `f_country`, `f_city`, `campus`, `test_center`, `student_type`, `f_income`, `f_perminant_Address`, `hostal_flag`, `enable_flag`, `last_updated_date`, `last_updated_by`, `creation_date`, `created_by`, `last_update_login`, `print_id`) VALUES
(1, 'tah', '123123', '0000-00-00', 'dfasf@yahoo.com', '098765432', '098765432', 'kjhkjhk', 'kjkjhkjh', 'kjhjkhkj', 1, 1, 'kjkjh', '09876543212456789', '0000-00-00', 'lkj@yahoo.cm', '098765432', '09876543', 'kjjkjkkjjk', '098765432lkjhgfd', 2, 2, 'knkkjnjk', 12, 'sdfghjkl', 23456, 'sdfghj45678', 0, '', '0000-00-00', 987987987, '0000-00-00', 2147483647, 2147483647, '98789789789789');

-- --------------------------------------------------------

--
-- Table structure for table `board_university`
--

CREATE TABLE `board_university` (
  `board_uni_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `slug` varchar(30) NOT NULL,
  `enable_flag` varchar(2) NOT NULL DEFAULT 'Y',
  `last_update_date` date NOT NULL,
  `last_updated_by` int(11) NOT NULL,
  `creation_date` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `last_update_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `slug` varchar(20) NOT NULL,
  `enable_flag` varchar(2) NOT NULL DEFAULT 'Y',
  `last_update_date` date NOT NULL,
  `last_updated_by` int(11) NOT NULL,
  `creation_date` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `last_update_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `slug` varchar(20) NOT NULL,
  `enable_flag` varchar(2) NOT NULL DEFAULT 'Y',
  `last_update` date NOT NULL,
  `last_update_by` int(11) NOT NULL,
  `creation_date` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `last_update_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1475758567),
('m130524_201442_init', 1475758578);

-- --------------------------------------------------------

--
-- Table structure for table `nationality`
--

CREATE TABLE `nationality` (
  `nationality_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `slug` varchar(20) NOT NULL,
  `enable_flag` varchar(2) NOT NULL DEFAULT 'Y',
  `last_update_date` date NOT NULL,
  `last_updated_by` int(11) NOT NULL,
  `creation_date` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `last_update_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `program_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `slug` varchar(20) NOT NULL,
  `enable_flag` varchar(2) NOT NULL DEFAULT 'Y',
  `last_update_date` date NOT NULL,
  `last_update_by` int(11) NOT NULL,
  `creation_date` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `lase_update_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `program_offer`
--

CREATE TABLE `program_offer` (
  `offer_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `enable_flag` varchar(2) NOT NULL DEFAULT 'Y',
  `last_update_date` date NOT NULL,
  `last_updated_by` int(11) NOT NULL,
  `creation_date` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `last_update_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `program_preferance`
--

CREATE TABLE `program_preferance` (
  `id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL,
  `first_preferance` varchar(20) NOT NULL,
  `secend_preferance` varchar(20) NOT NULL,
  `third_preferance` varchar(20) NOT NULL,
  `fourth_preferance` varchar(20) NOT NULL,
  `fifth_preferance` varchar(20) NOT NULL,
  `enable_flag` varchar(2) NOT NULL DEFAULT 'Y',
  `last_update_date` date NOT NULL,
  `last_updated_by` int(11) NOT NULL,
  `creation_date` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `last_update_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `session_id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `year` date NOT NULL,
  `enable_flag` varchar(2) NOT NULL DEFAULT 'Y',
  `last_update_date` date NOT NULL,
  `last_updated_by` int(11) NOT NULL,
  `creation_date` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `last_update_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test_centers`
--

CREATE TABLE `test_centers` (
  `test_center_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `locaion` varchar(50) NOT NULL,
  `enable_flag` int(11) NOT NULL,
  `last_update_date` date NOT NULL,
  `last_updated_by` int(11) NOT NULL,
  `creation_date` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `last_update_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'AqatJrc42GPAApWTdW7XlWaovT0h4JNt', '$2y$13$.05KrJglGh9FJ47p1CH6HePvxz5rAyXP4x/4DE0gsA3340UNbiv6a', NULL, 'admin@yahoo.com', 10, 1476035812, 1476035812);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_records`
--
ALTER TABLE `academic_records`
  ADD PRIMARY KEY (`academic_id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`application_id`);

--
-- Indexes for table `board_university`
--
ALTER TABLE `board_university`
  ADD PRIMARY KEY (`board_uni_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `nationality`
--
ALTER TABLE `nationality`
  ADD PRIMARY KEY (`nationality_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `program_offer`
--
ALTER TABLE `program_offer`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `program_preferance`
--
ALTER TABLE `program_preferance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `test_centers`
--
ALTER TABLE `test_centers`
  ADD PRIMARY KEY (`test_center_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_records`
--
ALTER TABLE `academic_records`
  MODIFY `academic_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `board_university`
--
ALTER TABLE `board_university`
  MODIFY `board_uni_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nationality`
--
ALTER TABLE `nationality`
  MODIFY `nationality_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `program_offer`
--
ALTER TABLE `program_offer`
  MODIFY `offer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `program_preferance`
--
ALTER TABLE `program_preferance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `test_centers`
--
ALTER TABLE `test_centers`
  MODIFY `test_center_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
