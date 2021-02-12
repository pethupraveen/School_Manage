-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2021 at 05:15 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cias`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_last_login`
--

CREATE TABLE `tbl_last_login` (
  `id` bigint(20) NOT NULL,
  `userId` bigint(20) NOT NULL,
  `sessionData` varchar(2048) NOT NULL,
  `machineIp` varchar(1024) NOT NULL,
  `userAgent` varchar(128) NOT NULL,
  `agentString` varchar(1024) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `createdDtm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_last_login`
--

INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES
(1, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 88.0.4324.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'Windows 10', '2021-02-10 14:11:26'),
(2, 3, '{\"role\":\"3\",\"roleText\":\"Employee\",\"name\":\"Employee\"}', '::1', 'Chrome 88.0.4324.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'Windows 10', '2021-02-10 14:12:39'),
(3, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 88.0.4324.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'Windows 10', '2021-02-10 14:13:20'),
(4, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 88.0.4324.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'Windows 10', '2021-02-10 14:13:27'),
(5, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 88.0.4324.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'Windows 10', '2021-02-10 14:15:45'),
(6, 3, '{\"role\":\"3\",\"roleText\":\"Employee\",\"name\":\"Employee\"}', '::1', 'Chrome 88.0.4324.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'Windows 10', '2021-02-10 20:31:06'),
(7, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 88.0.4324.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'Windows 10', '2021-02-10 20:31:48'),
(8, 3, '{\"role\":\"3\",\"roleText\":\"Employee\",\"name\":\"Employee\"}', '::1', 'Chrome 88.0.4324.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'Windows 10', '2021-02-10 21:06:32'),
(9, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 88.0.4324.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'Windows 10', '2021-02-10 21:06:39'),
(10, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 88.0.4324.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'Windows 10', '2021-02-11 11:06:59'),
(11, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 88.0.4324.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'Windows 10', '2021-02-11 16:08:35'),
(12, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 88.0.4324.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'Windows 10', '2021-02-11 19:34:13'),
(13, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 88.0.4324.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'Windows 10', '2021-02-12 12:20:08'),
(14, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 88.0.4324.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'Windows 10', '2021-02-12 16:50:43'),
(15, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 88.0.4324.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'Windows 10', '2021-02-12 19:26:13'),
(16, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 88.0.4324.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36', 'Windows 10', '2021-02-12 21:45:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` bigint(20) NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator'),
(2, 'Manager'),
(3, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `Student_ID` int(11) NOT NULL,
  `Student_Name` varchar(150) NOT NULL,
  `Fathers_Name` varchar(150) NOT NULL,
  `Mother_Name` varchar(150) NOT NULL,
  `Student_Blood_Group` varchar(150) NOT NULL,
  `Student_Mobile_No` varchar(150) NOT NULL,
  `Student_emailid` varchar(150) NOT NULL,
  `Parent_Contact_No` varchar(150) NOT NULL,
  `Date_of_Birth` varchar(150) NOT NULL,
  `Sex` varchar(150) NOT NULL,
  `Community` varchar(150) NOT NULL,
  `Caste` varchar(150) NOT NULL,
  `Nationality` varchar(150) NOT NULL,
  `Door_No` varchar(150) NOT NULL,
  `Street_Name` varchar(150) NOT NULL,
  `Area_Name` varchar(150) NOT NULL,
  `City` varchar(150) NOT NULL,
  `PinCode` varchar(150) NOT NULL,
  `State` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`Student_ID`, `Student_Name`, `Fathers_Name`, `Mother_Name`, `Student_Blood_Group`, `Student_Mobile_No`, `Student_emailid`, `Parent_Contact_No`, `Date_of_Birth`, `Sex`, `Community`, `Caste`, `Nationality`, `Door_No`, `Street_Name`, `Area_Name`, `City`, `PinCode`, `State`) VALUES
(1, 'Praveen', 'Pethu Manickam', 'Dhanalakshmi', 'o+', '9944406172', 'praveenkumar.pdknp@gmail.com', '9894928051', '26/04/1994', 'Male', '', '', '', '', '', '', '', '', ''),
(2, 'Praveen', 'Pethu Manickam', 'Dhanalakshmi', 'o+', '9944406172', 'praveenkumar.pdknp@gmail.com', '9894928051', '26/04/1994', 'Male', 'Hindu', 'Caste1', 'India', '302', 'Neruji Street', 'Mullai Nagar', 'Madurai', '625002', 'Tamil_Nadu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'admin@example.com', '$2a$04$nVftf3nwcsaEP3XjH9XTh./FBVOy7L9YGjv/SKYkJouQDp/Zd091K', 'System Administrator', '9890098900', 1, 0, 0, '2015-07-01 18:56:49', 1, '2018-01-05 05:56:34'),
(2, 'manager@example.com', '$2y$10$quODe6vkNma30rcxbAHbYuKYAZQqUaflBgc4YpV9/90ywd.5Koklm', 'Manager', '9890098900', 2, 0, 1, '2016-12-09 17:49:56', 1, '2018-01-12 07:22:11'),
(3, 'employee@example.com', '$2y$10$PD.3ISoDCk2pFZE4TZX7k.Qe8jB9igwfrec7NrQWtZ3uYfwOGLTii', 'Employee', '9890098900', 3, 0, 1, '2016-12-09 17:50:22', 1, '2021-02-10 09:42:10'),
(9, 'praveenkumar.pdknp@gmail.com', '$2y$10$aW0USlhLHqQ2R3fyPb9XJOqRH88mEAuPOCYuTX22UU083l.kKYS1y', 'Praveen', '9944406172', 3, 0, 1, '2021-02-10 09:48:59', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `Student_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
