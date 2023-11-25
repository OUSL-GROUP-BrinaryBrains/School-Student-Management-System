-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 25, 2023 at 08:49 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `level` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `level`) VALUES
(1, 'School Admin', 'admin@gmail.com', '123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0 undefined , 1 present , 2  absent',
  `student_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `status`, `student_id`, `date`) VALUES
(1, 2, 2, '2023-11-25'),
(2, 1, 3, '2023-11-25'),
(3, 1, 4, '2023-11-25'),
(4, 2, 5, '2023-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('00e4eab459602f4a193203fe5e9440f6381421fb', '::1', 1700940739, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303934303434353b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('0d0d68b1c7c02826acf7bb3569815bcc0d7ed5d6', '::1', 1700931811, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933313538373b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('1064bec5096f8098f741135c2b3ef6d74652e85c', '::1', 1700935510, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933353232383b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('19a7457d7a03de6c52b74bc96bf5e8622809c6dd', '::1', 1700932352, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933323038333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('21c85afabb55d84029c5f81dceff492bd614d5cd', '::1', 1700933614, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933333439393b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('24aaba67daabc25c6d7f493ab688968cc1fc22bb', '::1', 1700933373, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933333136313b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('262ca780d269b22540ddeae465c91b541d92ede9', '::1', 1700941048, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303934303734383b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b666c6173685f6d6573736167657c733a31323a22446174612055706461746564223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('3c1dc943fb4c466ebe0a5db1cdf6b5255713bb1b', '::1', 1700939018, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933383736323b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('3dace4107363221789438637d89af2ebe91edc74', '::1', 1700934181, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933333839333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('42806497fc6d48fc0bbcefb55f146eb1e12ffa6b', '::1', 1700934516, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933343231373b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('4c82b75d8c63c5c32cc520a8a471173ddeb09f25', '::1', 1700936189, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933353932333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('58e51727213910b209f258e0badeabdf1038d678', '::1', 1700938673, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933383434303b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('665b5e6efb6e9f82ae99654e359054b8b8a8029c', '::1', 1700938116, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933373833323b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('7029a07bab4e75f4e158efdd8a20fc3341c13709', '::1', 1700870845, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303837303630393b),
('81df7c3c34accbc99052534c52a97e0a400bc41f', '::1', 1700941533, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303934313335313b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('888f538da1f31984ce2d212af0146b900dee07fe', '::1', 1700937802, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933373532323b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('8bf9d63d60ac37ff5086ced1a1358be3b4db4795', '::1', 1700931235, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933303939333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('924ea5fdc045314f8ebbfa5b27766e961c9e2302', '::1', 1700932943, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933323830343b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('92a92806af29ed44452d56466f61f50a463055ef', '::1', 1700935184, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933343838373b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('a3f051969759dea27ac8ac93372c095b4d726ec0', '::1', 1700936957, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933363830373b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('a69974f03d44eb8049d36c1914d83b494f0712e6', '::1', 1700940438, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303934303134313b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b666c6173685f6d6573736167657c733a31323a22446174612055706461746564223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('b9469583328c8179601951767b627f5f063e5dee', '::1', 1700934579, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933343531383b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('bd3842563be706afc9be91137505e8a4da145835', '::1', 1700935867, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933353631333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('c57c9f20363eb9bdc0a7a32ff5c3dbff44b2c33a', '::1', 1700932709, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933323435333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('c695a0c3b1dd3f848dfc66057a7d40d6508a80dc', '::1', 1700941339, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303934313034393b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b666c6173685f6d6573736167657c733a31323a22446174612055706461746564223b5f5f63695f766172737c613a313a7b733a31333a22666c6173685f6d657373616765223b733a333a226f6c64223b7d),
('ca860b8e674a4d50e8410be27c19c18d287c0ab5', '::1', 1700938428, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933383133383b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('cc31f90b0075e48f850a38fcd52528f3d003151a', '::1', 1700939696, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933393430303b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('d3f3a59aa038f7a2a6b6c302f9cfb20283523c0b', '::1', 1700930123, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933303131333b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('e494650c029ddaf7b9eae39f3ea9f1181707e033', '::1', 1700939391, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933393038393b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('ef99e0fd6d53f80e51e8e4aaffc58e8065b91103', '::1', 1700937426, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933373136303b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b),
('fddaf28976dcc7bc51dc95bf8cd02bf3286b7107', '::1', 1700939922, 0x5f5f63695f6c6173745f726567656e65726174657c693a313730303933393731323b61646d696e5f6c6f67696e7c733a313a2231223b61646d696e5f69647c733a313a2231223b6c6f67696e5f757365725f69647c733a313a2231223b6e616d657c733a31323a225363686f6f6c2041646d696e223b6c6f67696e5f747970657c733a353a2241646d696e223b);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `name_numeric` longtext COLLATE utf8_unicode_ci NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `name`, `name_numeric`, `teacher_id`) VALUES
(3, 'Grade 1', '1', 2),
(4, 'Grade 2', '2', 1),
(5, 'Grade 3', '3', 2),
(6, 'Grade 4', '4', 1),
(7, 'Grade 5', '5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `class_routine`
--

CREATE TABLE `class_routine` (
  `class_routine_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `time_start` int(11) NOT NULL,
  `time_end` int(11) NOT NULL,
  `day` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `class_routine`
--

INSERT INTO `class_routine` (`class_routine_id`, `class_id`, `subject_id`, `time_start`, `time_end`, `day`) VALUES
(1, 1, 1, 8, 9, 'monday'),
(2, 1, 2, 9, 10, 'monday'),
(3, 7, 8, 8, 9, 'monday'),
(4, 7, 10, 8, 13, 'tuesday'),
(5, 7, 11, 8, 13, 'wednesday'),
(6, 7, 10, 8, 1, 'thursday');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` longtext COLLATE utf8_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `name`, `date`, `comment`) VALUES
(1, 'First Term Exam', '03/25/2022', '1st Term'),
(2, 'Second Term Exam', '08/25/2022', '2nd Term'),
(3, 'Third Term Exam', '11/21/2023', '3rd Term');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `grade_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `grade_point` longtext COLLATE utf8_unicode_ci NOT NULL,
  `mark_from` int(11) NOT NULL,
  `mark_upto` int(11) NOT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`grade_id`, `name`, `grade_point`, `mark_from`, `mark_upto`, `comment`) VALUES
(1, 'A', '', 75, 100, 'Distinction Pass'),
(2, 'B', '', 65, 74, 'Very Good Pass'),
(3, 'C', '', 55, 64, 'Credit Pass'),
(4, 'S', '', 40, 54, 'Ordinary Pass'),
(5, 'F', '', 0, 39, 'Failure');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `phrase_id` int(11) NOT NULL,
  `phrase` longtext COLLATE utf8_unicode_ci NOT NULL,
  `english` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`phrase_id`, `phrase`, `english`) VALUES
(1, 'login', 'login'),
(2, 'account_type', 'account type'),
(3, 'admin', 'admin'),
(4, 'teacher', 'teacher'),
(5, 'student', 'student'),
(6, 'parent', 'parent'),
(7, 'email', 'email'),
(8, 'password', 'password'),
(9, 'forgot_password ?', 'forgot password ?'),
(10, 'reset_password', 'reset password'),
(11, 'reset', 'reset'),
(12, 'admin_dashboard', 'admin dashboard'),
(13, 'account', 'account'),
(14, 'profile', 'profile'),
(15, 'change_password', 'change password'),
(16, 'logout', 'logout'),
(17, 'panel', 'panel'),
(18, 'dashboard_help', 'dashboard help'),
(19, 'dashboard', 'dashboard'),
(20, 'student_help', 'student help'),
(21, 'teacher_help', 'teacher help'),
(22, 'subject_help', 'subject help'),
(23, 'subject', 'subject'),
(24, 'class_help', 'class help'),
(25, 'class', 'class'),
(26, 'exam_help', 'exam help'),
(27, 'exam', 'exam'),
(28, 'marks_help', 'marks help'),
(29, 'marks-attendance', 'marks-attendance'),
(30, 'grade_help', 'grade help'),
(31, 'exam-grade', 'exam-grade'),
(32, 'class_routine_help', 'class routine help'),
(33, 'class_routine', 'class routine'),
(34, 'invoice_help', 'invoice help'),
(35, 'payment', 'payment'),
(36, 'book_help', 'book help'),
(37, 'library', 'library'),
(38, 'transport_help', 'transport help'),
(39, 'transport', 'transport'),
(40, 'dormitory_help', 'dormitory help'),
(41, 'dormitory', 'dormitory'),
(42, 'noticeboard_help', 'noticeboard help'),
(43, 'noticeboard-event', 'noticeboard-event'),
(44, 'bed_ward_help', 'bed ward help'),
(45, 'settings', 'settings'),
(46, 'system_settings', 'system settings'),
(47, 'manage_language', 'manage language'),
(48, 'backup_restore', 'backup restore'),
(49, 'profile_help', 'profile help'),
(50, 'manage_student', 'manage student'),
(51, 'manage_teacher', 'manage teacher'),
(52, 'noticeboard', 'noticeboard'),
(53, 'language', 'language'),
(54, 'backup', 'backup'),
(55, 'calendar_schedule', 'calendar schedule'),
(56, 'select_a_class', 'select a class'),
(57, 'student_list', 'student list'),
(58, 'add_student', 'add student'),
(59, 'roll', 'roll'),
(60, 'photo', 'photo'),
(61, 'student_name', 'student name'),
(62, 'address', 'address'),
(63, 'options', 'options'),
(64, 'marksheet', 'marksheet'),
(65, 'id_card', 'id card'),
(66, 'edit', 'edit'),
(67, 'delete', 'delete'),
(68, 'personal_profile', 'personal profile'),
(69, 'academic_result', 'academic result'),
(70, 'name', 'name'),
(71, 'birthday', 'birthday'),
(72, 'sex', 'sex'),
(73, 'male', 'male'),
(74, 'female', 'female'),
(75, 'religion', 'religion'),
(76, 'blood_group', 'blood group'),
(77, 'phone', 'phone'),
(78, 'father_name', 'father name'),
(79, 'mother_name', 'mother name'),
(80, 'edit_student', 'edit student'),
(81, 'teacher_list', 'teacher list'),
(82, 'add_teacher', 'add teacher'),
(83, 'teacher_name', 'teacher name'),
(84, 'edit_teacher', 'edit teacher'),
(85, 'manage_parent', 'manage parent'),
(86, 'parent_list', 'parent list'),
(87, 'parent_name', 'parent name'),
(88, 'relation_with_student', 'relation with student'),
(89, 'parent_email', 'parent email'),
(90, 'parent_phone', 'parent phone'),
(91, 'parrent_address', 'parrent address'),
(92, 'parrent_occupation', 'parrent occupation'),
(93, 'add', 'add'),
(94, 'parent_of', 'parent of'),
(95, 'profession', 'profession'),
(96, 'edit_parent', 'edit parent'),
(97, 'add_parent', 'add parent'),
(98, 'manage_subject', 'manage subject'),
(99, 'subject_list', 'subject list'),
(100, 'add_subject', 'add subject'),
(101, 'subject_name', 'subject name'),
(102, 'edit_subject', 'edit subject'),
(103, 'manage_class', 'manage class'),
(104, 'class_list', 'class list'),
(105, 'add_class', 'add class'),
(106, 'class_name', 'class name'),
(107, 'numeric_name', 'numeric name'),
(108, 'name_numeric', 'name numeric'),
(109, 'edit_class', 'edit class'),
(110, 'manage_exam', 'manage exam'),
(111, 'exam_list', 'exam list'),
(112, 'add_exam', 'add exam'),
(113, 'exam_name', 'exam name'),
(114, 'date', 'date'),
(115, 'comment', 'comment'),
(116, 'edit_exam', 'edit exam'),
(117, 'manage_exam_marks', 'manage exam marks'),
(118, 'manage_marks', 'manage marks'),
(119, 'select_exam', 'select exam'),
(120, 'select_class', 'select class'),
(121, 'select_subject', 'select subject'),
(122, 'select_an_exam', 'select an exam'),
(123, 'mark_obtained', 'mark obtained'),
(124, 'attendance', 'attendance'),
(125, 'manage_grade', 'manage grade'),
(126, 'grade_list', 'grade list'),
(127, 'add_grade', 'add grade'),
(128, 'grade_name', 'grade name'),
(129, 'grade_point', 'grade point'),
(130, 'mark_from', 'mark from'),
(131, 'mark_upto', 'mark upto'),
(132, 'edit_grade', 'edit grade'),
(133, 'manage_class_routine', 'manage class routine'),
(134, 'class_routine_list', 'class routine list'),
(135, 'add_class_routine', 'add class routine'),
(136, 'day', 'day'),
(137, 'starting_time', 'starting time'),
(138, 'ending_time', 'ending time'),
(139, 'edit_class_routine', 'edit class routine'),
(140, 'manage_invoice/payment', 'manage invoice/payment'),
(141, 'invoice/payment_list', 'invoice/payment list'),
(142, 'add_invoice/payment', 'add invoice/payment'),
(143, 'title', 'title'),
(144, 'description', 'description'),
(145, 'amount', 'amount'),
(146, 'status', 'status'),
(147, 'view_invoice', 'view invoice'),
(148, 'paid', 'paid'),
(149, 'unpaid', 'unpaid'),
(150, 'add_invoice', 'add invoice'),
(151, 'payment_to', 'payment to'),
(152, 'bill_to', 'bill to'),
(153, 'invoice_title', 'invoice title'),
(154, 'invoice_id', 'invoice id'),
(155, 'edit_invoice', 'edit invoice'),
(156, 'manage_library_books', 'manage library books'),
(157, 'book_list', 'book list'),
(158, 'add_book', 'add book'),
(159, 'book_name', 'book name'),
(160, 'author', 'author'),
(161, 'price', 'price'),
(162, 'available', 'available'),
(163, 'unavailable', 'unavailable'),
(164, 'edit_book', 'edit book'),
(165, 'manage_transport', 'manage transport'),
(166, 'transport_list', 'transport list'),
(167, 'add_transport', 'add transport'),
(168, 'route_name', 'route name'),
(169, 'number_of_vehicle', 'number of vehicle'),
(170, 'route_fare', 'route fare'),
(171, 'edit_transport', 'edit transport'),
(172, 'manage_dormitory', 'manage dormitory'),
(173, 'dormitory_list', 'dormitory list'),
(174, 'add_dormitory', 'add dormitory'),
(175, 'dormitory_name', 'dormitory name'),
(176, 'number_of_room', 'number of room'),
(177, 'manage_noticeboard', 'manage noticeboard'),
(178, 'noticeboard_list', 'noticeboard list'),
(179, 'add_noticeboard', 'add noticeboard'),
(180, 'notice', 'notice'),
(181, 'add_notice', 'add notice'),
(182, 'edit_noticeboard', 'edit noticeboard'),
(183, 'system_name', 'system name'),
(184, 'save', 'save'),
(185, 'system_title', 'system title'),
(186, 'paypal_email', 'paypal email'),
(187, 'currency', 'currency'),
(188, 'phrase_list', 'phrase list'),
(189, 'add_phrase', 'add phrase'),
(190, 'add_language', 'add language'),
(191, 'phrase', 'phrase'),
(192, 'manage_backup_restore', 'manage backup restore'),
(193, 'restore', 'restore'),
(194, 'mark', 'mark'),
(195, 'grade', 'grade'),
(196, 'invoice', 'invoice'),
(197, 'book', 'book'),
(198, 'all', 'all'),
(199, 'upload_&_restore_from_backup', 'upload & restore from backup'),
(200, 'manage_profile', 'manage profile'),
(201, 'update_profile', 'update profile'),
(202, 'new_password', 'new password'),
(203, 'confirm_new_password', 'confirm new password'),
(204, 'update_password', 'update password'),
(205, 'teacher_dashboard', 'teacher dashboard'),
(206, 'backup_restore_help', 'backup restore help'),
(207, 'student_dashboard', 'student dashboard'),
(208, 'parent_dashboard', 'parent dashboard'),
(209, 'view_marks', 'view marks'),
(210, 'delete_language', 'delete language'),
(211, 'settings_updated', 'settings updated'),
(212, 'update_phrase', 'update phrase'),
(213, 'login_failed', 'login failed'),
(214, 'live_chat', 'live chat'),
(215, 'client 1', 'client 1'),
(216, 'buyer', 'buyer'),
(217, 'purchase_code', 'purchase code'),
(218, 'system_email', 'system email'),
(219, 'option', 'option'),
(220, 'edit_phrase', 'edit phrase'),
(221, 'forgot_your_password', 'Forgot Your Password'),
(222, 'forgot_password', 'Forgot Password'),
(223, 'back_to_login', 'Back To Login'),
(224, 'return_to_login_page', 'Return to Login Page'),
(225, 'admit_student', 'Admit Student'),
(226, 'admit_bulk_student', 'Admit Bulk Student'),
(227, 'student_information', 'Student Information'),
(228, 'student_marksheet', 'Student Mark Sheet'),
(229, 'daily_attendance', 'Daily Attendance'),
(230, 'exam_grades', ''),
(231, 'message', ''),
(232, 'general_settings', ''),
(233, 'language_settings', ''),
(234, 'edit_profile', ''),
(235, 'event_schedule', ''),
(236, 'cancel', ''),
(237, 'addmission_form', ''),
(238, 'value_required', ''),
(239, 'select', ''),
(240, 'gender', ''),
(241, 'add_bulk_student', ''),
(242, 'student_bulk_add_form', ''),
(243, 'select_excel_file', ''),
(244, 'upload_and_import', ''),
(245, 'manage_classes', ''),
(246, 'manage_sections', ''),
(247, 'add_new_teacher', ''),
(248, 'section_name', ''),
(249, 'nick_name', ''),
(250, 'add_new_section', ''),
(251, 'add_section', ''),
(252, 'update', ''),
(253, 'section', ''),
(254, 'select_class_first', ''),
(255, 'parent_information', ''),
(256, 'relation', ''),
(257, 'add_form', ''),
(258, 'all_parents', ''),
(259, 'parents', ''),
(260, 'add_new_parent', ''),
(261, 'add_new_student', ''),
(262, 'all_students', ''),
(263, 'view_marksheet', ''),
(264, 'text_align', ''),
(265, 'clickatell_username', ''),
(266, 'clickatell_password', ''),
(267, 'clickatell_api_id', ''),
(268, 'sms_settings', ''),
(269, 'data_updated', ''),
(270, 'data_added_successfully', ''),
(271, 'edit_notice', ''),
(272, 'private_messaging', ''),
(273, 'messages', ''),
(274, 'new_message', ''),
(275, 'write_new_message', ''),
(276, 'recipient', ''),
(277, 'select_a_user', ''),
(278, 'write_your_message', ''),
(279, 'send', ''),
(280, 'current_password', ''),
(281, 'exam_marks', ''),
(282, 'marks_obtained', ''),
(283, 'total_marks', ''),
(284, 'comments', ''),
(285, 'theme_settings', ''),
(286, 'select_theme', ''),
(287, 'theme_selected', ''),
(288, 'language_list', ''),
(289, 'payment_cancelled', ''),
(290, 'study_material', ''),
(291, 'download', ''),
(292, 'select_a_theme_to_make_changes', ''),
(293, 'manage_daily_attendance', ''),
(294, 'select_date', ''),
(295, 'select_month', ''),
(296, 'select_year', ''),
(297, 'manage_attendance', ''),
(298, 'twilio_account', ''),
(299, 'authentication_token', ''),
(300, 'registered_phone_number', ''),
(301, 'select_a_service', ''),
(302, 'active', ''),
(303, 'disable_sms_service', ''),
(304, 'not_selected', ''),
(305, 'disabled', ''),
(306, 'present', ''),
(307, 'absent', ''),
(308, 'accounting', ''),
(309, 'income', ''),
(310, 'expense', ''),
(311, 'incomes', ''),
(312, 'invoice_informations', ''),
(313, 'payment_informations', ''),
(314, 'total', ''),
(315, 'enter_total_amount', ''),
(316, 'enter_payment_amount', ''),
(317, 'payment_status', ''),
(318, 'method', ''),
(319, 'cash', ''),
(320, 'check', ''),
(321, 'card', ''),
(322, 'data_deleted', ''),
(323, 'total_amount', ''),
(324, 'take_payment', ''),
(325, 'payment_history', ''),
(326, 'amount_paid', ''),
(327, 'due', ''),
(328, 'payment_successfull', ''),
(329, 'creation_date', ''),
(330, 'invoice_entries', ''),
(331, 'paid_amount', ''),
(332, 'send_sms_to_all', ''),
(333, 'yes', ''),
(334, 'no', ''),
(335, 'activated', ''),
(336, 'sms_service_not_activated', ''),
(337, 'add_study_material', ''),
(338, 'file', ''),
(339, 'file_type', ''),
(340, 'select_file_type', ''),
(341, 'image', ''),
(342, 'doc', ''),
(343, 'pdf', ''),
(344, 'excel', ''),
(345, 'other', ''),
(346, 'expenses', ''),
(347, 'add_new_expense', ''),
(348, 'add_expense', ''),
(349, 'edit_expense', ''),
(350, 'total_mark', ''),
(351, 'send_marks_by_sms', ''),
(352, 'send_marks', ''),
(353, 'select_receiver', ''),
(354, 'students', ''),
(355, 'marks_of', ''),
(356, 'for', ''),
(357, 'message_sent', ''),
(358, 'expense_category', ''),
(359, 'add_new_expense_category', ''),
(360, 'add_expense_category', ''),
(361, 'category', ''),
(362, 'select_expense_category', ''),
(363, 'message_sent!', ''),
(364, 'reply_message', ''),
(365, 'account_updated', ''),
(366, 'upload_logo', ''),
(367, 'upload', 'Upload'),
(368, 'study_material_info_saved_successfuly', ''),
(369, 'edit_study_material', ''),
(370, 'default_theme', ''),
(371, 'default', ''),
(372, 'acd_session', ''),
(373, 'academic_session', ''),
(374, 'online_admission', ''),
(375, 'session_list', ''),
(376, 'add_session', ''),
(377, 'is_open', ''),
(378, 'active_date', ''),
(379, 'edit_session', ''),
(380, 'student_application_list', ''),
(381, 'add_student_application', ''),
(382, 'pay_status', ''),
(383, 'from_date', ''),
(384, 'to_date', ''),
(385, 'start_date', ''),
(386, 'end_date', ''),
(387, 'Name', ''),
(388, 'name_bangla', ''),
(389, 'name_english', ''),
(390, 'fridom_fighter_son', ''),
(391, 'gardian_name', ''),
(392, 'upojati', ''),
(393, 'FFS', ''),
(394, 'fridom_fighter', ''),
(395, 'Nationality', ''),
(396, 'islam', ''),
(397, 'hindu', ''),
(398, 'present_address', ''),
(399, 'Parmanent_address', ''),
(400, 'Current_address', ''),
(401, 'technology', ''),
(402, 'textile', ''),
(403, 'electrical', ''),
(404, 'Academic_details', ''),
(405, 'SSC(General)', ''),
(406, 'SSC(Vocational)', ''),
(407, 'Trade(Two-Years)', ''),
(408, 'Dakhil(Vocational)', ''),
(409, 'Photo', ''),
(410, 'Name', ''),
(411, 'Photo', ''),
(412, 'Name', ''),
(413, 'Photo', ''),
(414, 'Name', ''),
(415, 'Photo', ''),
(416, 'Name', ''),
(417, 'Photo', ''),
(418, 'Name', ''),
(419, 'Photo', ''),
(420, 'Name', ''),
(421, 'Photo', ''),
(422, 'Name', ''),
(423, 'Photo', ''),
(424, 'Name', ''),
(425, 'Photo', ''),
(426, 'Name', ''),
(427, 'Actions', ''),
(428, 'Photo', ''),
(429, 'Name', ''),
(430, 'Photo', ''),
(431, 'Name', ''),
(432, 'Apply_Date', ''),
(433, 'Photo', ''),
(434, 'Name', ''),
(435, 'Photo', ''),
(436, 'Name', ''),
(437, 'Cell_No', ''),
(438, 'Photo', ''),
(439, 'Name', ''),
(440, 'Photo', ''),
(441, 'Full_Name', ''),
(442, 'Photo', ''),
(443, 'Photo', ''),
(444, 'Report', ''),
(445, 'Photo', ''),
(446, 'Photo', ''),
(447, 'Photo', ''),
(448, 'Photo', ''),
(449, 'Photo', ''),
(450, 'Photo', ''),
(451, 'Photo', ''),
(452, 'Photo', ''),
(453, 'Photo', ''),
(454, 'Photo', ''),
(455, 'Photo', ''),
(456, 'Photo', ''),
(457, 'Photo', ''),
(458, 'Photo', ''),
(459, 'Photo', ''),
(460, 'Photo', ''),
(461, 'Photo', ''),
(462, 'Photo', ''),
(463, 'Photo', ''),
(464, 'Photo', ''),
(465, 'Photo', ''),
(466, 'Photo', ''),
(467, 'Photo', ''),
(468, 'Photo', ''),
(469, 'Photo', ''),
(470, 'Photo', ''),
(471, 'Photo', ''),
(472, 'Photo', ''),
(473, 'Photo', ''),
(474, 'Photo', ''),
(475, 'Photo', ''),
(476, 'on', ''),
(477, 'Parent_Dashboard', ''),
(478, 'Parent_Dashboard', ''),
(479, 'Parent_Dashboard', ''),
(480, 'Class', '');

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `mark_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `mark_obtained` int(11) NOT NULL DEFAULT '0',
  `mark_total` int(11) NOT NULL DEFAULT '100',
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`mark_id`, `student_id`, `subject_id`, `class_id`, `exam_id`, `mark_obtained`, `mark_total`, `comment`) VALUES
(1, 2, 8, 7, 1, 30, 100, ''),
(2, 3, 8, 7, 1, 50, 100, ''),
(3, 4, 8, 7, 1, 45, 100, ''),
(4, 5, 8, 7, 1, 35, 100, ''),
(5, 2, 10, 7, 1, 89, 100, ''),
(6, 3, 10, 7, 1, 78, 100, ''),
(7, 4, 10, 7, 1, 50, 100, ''),
(8, 5, 10, 7, 1, 45, 100, ''),
(9, 2, 11, 7, 1, 90, 100, ''),
(10, 3, 11, 7, 1, 87, 100, ''),
(11, 4, 11, 7, 1, 70, 100, ''),
(12, 5, 11, 7, 1, 80, 100, '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `message_thread_code` longtext NOT NULL,
  `message` longtext NOT NULL,
  `sender` longtext NOT NULL,
  `timestamp` longtext NOT NULL,
  `read_status` int(11) NOT NULL DEFAULT '0' COMMENT '0 unread 1 read'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `message_thread_code`, `message`, `sender`, `timestamp`, `read_status`) VALUES
(11, 'bd436279ed06df0', 'Hello', 'Admin-1', '1700941243', 0);

-- --------------------------------------------------------

--
-- Table structure for table `message_thread`
--

CREATE TABLE `message_thread` (
  `message_thread_id` int(11) NOT NULL,
  `message_thread_code` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sender` longtext COLLATE utf8_unicode_ci NOT NULL,
  `reciever` longtext COLLATE utf8_unicode_ci NOT NULL,
  `last_message_timestamp` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `message_thread`
--

INSERT INTO `message_thread` (`message_thread_id`, `message_thread_code`, `sender`, `reciever`, `last_message_timestamp`) VALUES
(1, 'bd436279ed06df0', 'Admin-1', 'parent-13', '');

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE `noticeboard` (
  `notice_id` int(11) NOT NULL,
  `notice_title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `notice` longtext COLLATE utf8_unicode_ci NOT NULL,
  `create_timestamp` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`notice_id`, `notice_title`, `notice`, `create_timestamp`) VALUES
(4, 'Urgent', 'This is Testing on Nov 26', 1700953200);

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `parent_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `profession` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`parent_id`, `name`, `email`, `password`, `phone`, `address`, `profession`) VALUES
(13, 'Riham\'s Parent', 'p_riham@gmail.com', '123', '+94752202440', 'Katankudy', 'Bussiness Man'),
(14, 'Zakir\'s Parent', 'p_zakir@gmail.com', '123', '+94752202441', 'Nintavur', 'Teacher'),
(15, 'Safran\'s Parent', 'p_safran@gmail.com', '123', '+94752202442', 'Pottuvil', 'Doctor'),
(16, 'Ilma\'s Parent', 'p_ilma@gmail.com', '123', '+94752202444', 'Katankudy', 'Engineer');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `nick_name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `name`, `nick_name`, `class_id`, `teacher_id`) VALUES
(8, 'A', 'Alpha', 7, 1),
(9, 'B', 'Beta', 7, 2),
(10, 'C', 'Charlie', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL,
  `type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES
(1, 'system_name', 'School Student Management System'),
(2, 'system_title', 'School Student Management System'),
(3, 'address', 'Colombo'),
(4, 'phone', '0771234567'),
(7, 'system_email', 'binarybrains@gmail.com'),
(20, 'active_sms_service', 'clickatell'),
(11, 'language', 'english'),
(16, 'skin_colour', 'default');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `birthday` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sex` longtext COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL,
  `father_name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `mother_name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `class_id` longtext COLLATE utf8_unicode_ci NOT NULL,
  `section_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `roll` longtext COLLATE utf8_unicode_ci NOT NULL,
  `transport_id` int(11) NOT NULL,
  `dormitory_id` int(11) NOT NULL,
  `dormitory_room_number` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `birthday`, `sex`, `religion`, `blood_group`, `address`, `phone`, `email`, `password`, `father_name`, `mother_name`, `class_id`, `section_id`, `parent_id`, `roll`, `transport_id`, `dormitory_id`, `dormitory_room_number`) VALUES
(2, 'Riham', '01/14/1999', 'Female', '', '', 'Katankudy', '0752202440', 'riham@gmail.com', '123', '', '', '7', 8, 13, '001', 0, 0, ''),
(3, 'Zakir', '12/31/1998', 'Male', '', '', 'Nintavur', '0752202441', 'zakir@gmail.com', '123', '', '', '7', 8, 14, '002', 0, 0, ''),
(4, 'Safran', '06/17/1998', 'Male', '', '', 'Pottuvil', '0752202442', 'safran@gmail.com', '123', '', '', '7', 8, 15, '003', 0, 0, ''),
(5, 'Ilma', '11/17/1998', 'Female', '', '', 'Katankudy', '0752202443', 'ilma@gmail.com', '123', '', '', '7', 10, 16, '004', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `name`, `class_id`, `teacher_id`) VALUES
(8, 'Maths', 7, 1),
(10, 'English', 7, 2),
(11, 'Science', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `birthday` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sex` longtext COLLATE utf8_unicode_ci NOT NULL,
  `religion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `blood_group` longtext COLLATE utf8_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` longtext COLLATE utf8_unicode_ci NOT NULL,
  `email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `name`, `birthday`, `sex`, `religion`, `blood_group`, `address`, `phone`, `email`, `password`) VALUES
(1, 'Kasun', '07/13/1989', 'Male', '', '', 'Kandy', '+94772201111', 't_kasun@mail.com', '123'),
(2, 'Savithree', '08/13/1989', 'Female', '', '', 'Colombo', '+94772202440', 't_savithree@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `class_routine`
--
ALTER TABLE `class_routine`
  ADD PRIMARY KEY (`class_routine_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`phrase_id`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`mark_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `message_thread`
--
ALTER TABLE `message_thread`
  ADD PRIMARY KEY (`message_thread_id`);

--
-- Indexes for table `noticeboard`
--
ALTER TABLE `noticeboard`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`parent_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `class_routine`
--
ALTER TABLE `class_routine`
  MODIFY `class_routine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `phrase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=481;

--
-- AUTO_INCREMENT for table `mark`
--
ALTER TABLE `mark`
  MODIFY `mark_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `message_thread`
--
ALTER TABLE `message_thread`
  MODIFY `message_thread_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `noticeboard`
--
ALTER TABLE `noticeboard`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `parent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
