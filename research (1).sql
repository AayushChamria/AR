-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 06:34 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `research`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `EMAIL_ID` varchar(256) NOT NULL,
  `FACULTY` varchar(100) DEFAULT NULL,
  `SUBJECT` varchar(100) DEFAULT NULL,
  `TOT` varchar(200) DEFAULT NULL,
  `FULL_NAME` varchar(60) DEFAULT NULL,
  `DOB` varchar(20) DEFAULT NULL,
  `GENDER` varchar(10) DEFAULT NULL,
  `NATIONALITY` varchar(10) DEFAULT NULL,
  `STATUS` varchar(15) DEFAULT NULL,
  `LOCAL_ADDR` varchar(250) DEFAULT NULL,
  `LOCAL_TEL` bigint(10) DEFAULT NULL,
  `PERMT_ADDR` varchar(250) DEFAULT NULL,
  `PERMT_TEL` bigint(10) DEFAULT NULL,
  `RES_CATEGORY` varchar(50) DEFAULT NULL,
  `OCCUPATION` varchar(250) DEFAULT NULL,
  `OCCU_TEL` bigint(10) DEFAULT NULL,
  `NAME_OF_INSTITUTION` varchar(100) DEFAULT NULL,
  `PERIOD_PROFESSION` varchar(20) DEFAULT NULL,
  `NATURE_PROFESSION` varchar(20) DEFAULT NULL,
  `TOPIC_PHD` varchar(100) DEFAULT NULL,
  `PHD_TEACHER` varchar(50) DEFAULT NULL,
  `N_A_DEPARTMENT` varchar(150) DEFAULT NULL,
  `SUBMITTED_TOPIC` varchar(100) DEFAULT NULL,
  `PLACE` varchar(50) DEFAULT NULL,
  `DATE` varchar(20) DEFAULT NULL,
  `BROWSE` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`EMAIL_ID`, `FACULTY`, `SUBJECT`, `TOT`, `FULL_NAME`, `DOB`, `GENDER`, `NATIONALITY`, `STATUS`, `LOCAL_ADDR`, `LOCAL_TEL`, `PERMT_ADDR`, `PERMT_TEL`, `RES_CATEGORY`, `OCCUPATION`, `OCCU_TEL`, `NAME_OF_INSTITUTION`, `PERIOD_PROFESSION`, `NATURE_PROFESSION`, `TOPIC_PHD`, `PHD_TEACHER`, `N_A_DEPARTMENT`, `SUBMITTED_TOPIC`, `PLACE`, `DATE`, `BROWSE`) VALUES
('aayush@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('abc@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('abcde@gmail.com', 'Technology', 'Computer', 'Web Development', 'Aayush Chamria', '2000-06-22', 'Male', 'Indian', 'Unmarried', 'Thane', 9833018224, 'Thnae', 9833018224, 'General', 'None', 9876543210, 'Dy Patil', '2', 'Job', 'Web Development', 'ABC', 'Nerul', 'no', 'Thane', '2020-04-07', 'File/Authentication System.pdf'),
('rekhachamria@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_document`
--

CREATE TABLE `student_document` (
  `selection_rpt` varchar(100) DEFAULT NULL,
  `rac_rpt` varchar(100) DEFAULT NULL,
  `interview_rpt` varchar(100) DEFAULT NULL,
  `delay_ltr` varchar(100) DEFAULT NULL,
  `admsn_ltr` varchar(100) DEFAULT NULL,
  `univ_ltr` varchar(100) DEFAULT NULL,
  `guide_ltr` varchar(100) DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `btech_marks` varchar(100) DEFAULT NULL,
  `btech_certi` varchar(100) DEFAULT NULL,
  `mtech_marks` varchar(100) DEFAULT NULL,
  `mtech_certi` varchar(100) DEFAULT NULL,
  `caste_certi` varchar(100) DEFAULT NULL,
  `caste_validity` varchar(100) DEFAULT NULL,
  `non_creamy` varchar(100) DEFAULT NULL,
  `marr_gazette` varchar(100) DEFAULT NULL,
  `topic_prop` varchar(100) DEFAULT NULL,
  `fee_rcpt` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_document`
--

INSERT INTO `student_document` (`selection_rpt`, `rac_rpt`, `interview_rpt`, `delay_ltr`, `admsn_ltr`, `univ_ltr`, `guide_ltr`, `experience`, `btech_marks`, `btech_certi`, `mtech_marks`, `mtech_certi`, `caste_certi`, `caste_validity`, `non_creamy`, `marr_gazette`, `topic_prop`, `fee_rcpt`, `email`) VALUES
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aayush@gmail.com'),
('docs/Resume_SOW-converted.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abc@gmail.com'),
('docs/Resume_SOW-converted.pdf', 'docs/sem1.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'abcde@gmail.com'),
(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rekhachamria@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student_marks`
--

CREATE TABLE `student_marks` (
  `Email_ID` varchar(256) NOT NULL,
  `btech_univ` varchar(256) DEFAULT NULL,
  `btech_year` year(4) DEFAULT NULL,
  `btech_subj` text DEFAULT NULL,
  `btech_grade` varchar(100) DEFAULT NULL,
  `btech_cgp` float DEFAULT NULL,
  `mtech_univ` text DEFAULT NULL,
  `mtech_year` year(4) DEFAULT NULL,
  `mtech_subj` text DEFAULT NULL,
  `mtech_grade` varchar(100) DEFAULT NULL,
  `mtech_cgp` float DEFAULT NULL,
  `mphil_univ` varchar(256) DEFAULT NULL,
  `mphil_year` year(4) DEFAULT NULL,
  `mphil_subj` text DEFAULT NULL,
  `mphil_grade` varchar(100) DEFAULT NULL,
  `mphil_cgp` float DEFAULT NULL,
  `dip_univ` text DEFAULT NULL,
  `dip_year` year(4) DEFAULT NULL,
  `dip_subj` text DEFAULT NULL,
  `dip_grade` varchar(100) DEFAULT NULL,
  `dip_cgp` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_marks`
--

INSERT INTO `student_marks` (`Email_ID`, `btech_univ`, `btech_year`, `btech_subj`, `btech_grade`, `btech_cgp`, `mtech_univ`, `mtech_year`, `mtech_subj`, `mtech_grade`, `mtech_cgp`, `mphil_univ`, `mphil_year`, `mphil_subj`, `mphil_grade`, `mphil_cgp`, `dip_univ`, `dip_year`, `dip_subj`, `dip_grade`, `dip_cgp`) VALUES
('aayush@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('abc@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('abcde@gmail.com', 'DY Patil', 2020, 'Comps', 'A', 9.63, NULL, NULL, 'Comps', 'A', 9.13, 'Dy Patil', 2024, NULL, 'A', 9.36, NULL, 0000, 'Comps', 'A', 9.45),
('rekhachamria@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_submit_status`
--

CREATE TABLE `student_submit_status` (
  `EMAIL_ID` varchar(256) NOT NULL,
  `FORM_STATUS` varchar(11) NOT NULL,
  `DOC_STATUS` varchar(10) NOT NULL,
  `MARKS_STATUS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_submit_status`
--

INSERT INTO `student_submit_status` (`EMAIL_ID`, `FORM_STATUS`, `DOC_STATUS`, `MARKS_STATUS`) VALUES
('aayush@gmail.com', '', '', ''),
('abc@gmail.com', '', '', ''),
('abcde@gmail.com', '1', '1', '1'),
('rekhachamria@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `E-mail` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`E-mail`, `Password`) VALUES
('aayush@gmail.com', 'aayush'),
('abc@gmail.com', 'abc'),
('abcde@gmail.com', 'abcde'),
('rekhachamria@gmail.com', 'qwerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD UNIQUE KEY `EMAIL_ID` (`EMAIL_ID`);

--
-- Indexes for table `student_document`
--
ALTER TABLE `student_document`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `student_marks`
--
ALTER TABLE `student_marks`
  ADD PRIMARY KEY (`Email_ID`),
  ADD UNIQUE KEY `Email_ID` (`Email_ID`);

--
-- Indexes for table `student_submit_status`
--
ALTER TABLE `student_submit_status`
  ADD PRIMARY KEY (`EMAIL_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`E-mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
