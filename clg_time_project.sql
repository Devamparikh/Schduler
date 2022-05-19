-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 12:50 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clg_time_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `5_it`
--

CREATE TABLE `5_it` (
  `slot` int(99) NOT NULL,
  `time` varchar(255) NOT NULL,
  `Monday` text NOT NULL,
  `Tuesday` text NOT NULL,
  `Wednesday` text NOT NULL,
  `Thursday` text NOT NULL,
  `Friday` text NOT NULL,
  `Saturday` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `5_it`
--

INSERT INTO `5_it` (`slot`, `time`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`) VALUES
(1, '8:00 - 8:45', 'ADA - D H PATEL', 'ADA - D H PATEL', 'ADA - D H PATEL', 'ADA - D H PATEL', 'CS - P P TANK', 'CS - P P TANK'),
(2, '', 'CS - P P TANK', 'CS - P P TANK', 'IPDC - K B VORA', 'IPDC - K B VORA', 'ADA - D H PATEL', 'ADA - D H PATEL'),
(3, '', 'IPDC - K B VORA', 'ADA - D H PATEL', 'CS - P P TANK', 'ADA - D H PATEL', 'IPDC - K B VORA', 'IPDC - K B VORA'),
(4, '', 'ADA - D H PATEL', 'IPDC - K B VORA', 'ADA - D H PATEL', 'IPDC - K B VORA', 'CS - P P TANK', 'CS - P P TANK'),
(5, '', 'D1 - ADA - D H PATEL', 'D1 - IPDC - P P TANK', 'D1 - CS - P P TANK', 'D1 - CS - P P TANK', 'D1 - ADA - D H PATEL', 'D1 - IPDC - K B VORA'),
(6, '', 'D2 - CS - P P TANK', 'D2 - IPDC - K B VORA', 'D2 - ADA - D H PATEL', 'D2 - IPDC - K B VORA', 'D2 - ADA - D H PATEL', 'D2 - ADA - K B VORA');

-- --------------------------------------------------------

--
-- Table structure for table `c b sidpara`
--

CREATE TABLE `c b sidpara` (
  `slot` int(99) NOT NULL,
  `time` varchar(255) NOT NULL,
  `Monday` varchar(255) NOT NULL,
  `Tuesday` varchar(255) NOT NULL,
  `Wednesday` varchar(255) NOT NULL,
  `Thursday` varchar(255) NOT NULL,
  `Friday` varchar(255) NOT NULL,
  `Saturday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c b sidpara`
--

INSERT INTO `c b sidpara` (`slot`, `time`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`) VALUES
(1, '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', ''),
(6, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `d b rathod`
--

CREATE TABLE `d b rathod` (
  `slot` int(99) NOT NULL,
  `time` varchar(255) NOT NULL,
  `Monday` varchar(255) NOT NULL,
  `Tuesday` varchar(255) NOT NULL,
  `Wednesday` varchar(255) NOT NULL,
  `Thursday` varchar(255) NOT NULL,
  `Friday` varchar(255) NOT NULL,
  `Saturday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d b rathod`
--

INSERT INTO `d b rathod` (`slot`, `time`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`) VALUES
(1, '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', ''),
(6, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `dept_id` int(99) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `dept_short` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`dept_id`, `dept_name`, `dept_short`) VALUES
(1, 'Information Technology', 'it');

-- --------------------------------------------------------

--
-- Table structure for table `d h patel`
--

CREATE TABLE `d h patel` (
  `slot` int(99) NOT NULL,
  `time` varchar(255) NOT NULL,
  `Monday` varchar(255) NOT NULL,
  `Tuesday` varchar(255) NOT NULL,
  `Wednesday` varchar(255) NOT NULL,
  `Thursday` varchar(255) NOT NULL,
  `Friday` varchar(255) NOT NULL,
  `Saturday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `d h patel`
--

INSERT INTO `d h patel` (`slot`, `time`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`) VALUES
(1, '', 'ADA - 5th IT', 'ADA - 5th IT', 'ADA - 5th IT', 'ADA - 5th IT', '', ''),
(2, '', '', '', '', '', 'ADA - 5th IT', 'ADA - 5th IT'),
(3, '', '', 'ADA - 5th IT', '', 'ADA - 5th IT', '', ''),
(4, '', 'ADA - 5th IT', '', 'ADA - 5th IT', '', '', ''),
(5, '', 'D1 - ADA - 5th IT', '', 'D2 - ADA - 5th IT', '', 'D2 - ADA - 5th IT', ''),
(6, '', 'D1 - ADA - 5th IT', '', 'D2 - ADA - 5th IT', '', 'D2 - ADA - 5th IT', '');

-- --------------------------------------------------------

--
-- Table structure for table `d p upadhyay`
--

CREATE TABLE `d p upadhyay` (
  `slot` int(99) NOT NULL,
  `time` varchar(255) NOT NULL,
  `Monday` varchar(255) NOT NULL,
  `Tuesday` varchar(255) NOT NULL,
  `Wednesday` varchar(255) NOT NULL,
  `Thursday` varchar(255) NOT NULL,
  `Friday` varchar(255) NOT NULL,
  `Saturday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d p upadhyay`
--

INSERT INTO `d p upadhyay` (`slot`, `time`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`) VALUES
(1, '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', ''),
(6, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `d v mashru`
--

CREATE TABLE `d v mashru` (
  `slot` int(99) NOT NULL,
  `time` varchar(255) NOT NULL,
  `Monday` varchar(255) NOT NULL,
  `Tuesday` varchar(255) NOT NULL,
  `Wednesday` varchar(255) NOT NULL,
  `Thursday` varchar(255) NOT NULL,
  `Friday` varchar(255) NOT NULL,
  `Saturday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d v mashru`
--

INSERT INTO `d v mashru` (`slot`, `time`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`) VALUES
(1, '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', ''),
(6, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `k b vora`
--

CREATE TABLE `k b vora` (
  `slot` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `Monday` varchar(255) NOT NULL,
  `Tuesday` varchar(255) NOT NULL,
  `Wednesday` varchar(255) NOT NULL,
  `Thursday` varchar(255) NOT NULL,
  `Friday` varchar(255) NOT NULL,
  `Saturday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `k b vora`
--

INSERT INTO `k b vora` (`slot`, `time`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`) VALUES
(1, '', '', '', '', '', '', ''),
(2, '', '', '', 'IPDC - 5th IT', 'IPDC - 5th IT', '', ''),
(3, '', 'IPDC - 5th IT', '', '', '', 'IPDC - 5th IT', 'IPDC - 5th IT'),
(4, '', '', 'IPDC - 5th IT', '', 'IPDC - 5th IT', '', ''),
(5, '', '', 'D2 - IPDC - 5th IT', '', 'D2 - IPDC - 5th IT', '', 'D2 - ADA - 5th IT'),
(6, '', '', 'D2 - IPDC - 5th IT', '', 'D2 - IPDC - 5th IT', '', 'D2 - ADA - 5th IT');

-- --------------------------------------------------------

--
-- Table structure for table `p p tank`
--

CREATE TABLE `p p tank` (
  `slot` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `Monday` varchar(255) NOT NULL,
  `Tuesday` varchar(255) NOT NULL,
  `Wednesday` varchar(255) NOT NULL,
  `Thursday` varchar(255) NOT NULL,
  `Friday` varchar(255) NOT NULL,
  `Saturday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p p tank`
--

INSERT INTO `p p tank` (`slot`, `time`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`) VALUES
(1, '', 'CS - 5th IT', '', '', '', 'CS - 5th IT', 'CS - 5th IT'),
(2, '', 'CS - 5th IT', 'CS - 5th IT', '', '', '', ''),
(3, '', '', '', 'CS - 5th IT', '', '', ''),
(4, '', '', '', '', '', 'CS - 5th IT', 'CS - 5th IT'),
(5, '', 'D2 - CS - 5th IT', 'D1 - IPDC - 5th IT', 'D1 - CS - 5th IT', 'D1 - CS - 5th IT', '', ''),
(6, '', 'D2 - CS - 5th IT', 'D1 - IPDC - 5th IT', 'D1 - CS - 5th IT', 'D1 - CS - 5th IT', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE `professor` (
  `professor_id` int(99) NOT NULL,
  `professor_subject_id` int(99) NOT NULL,
  `professor_name` varchar(255) NOT NULL,
  `professor_contact` bigint(20) NOT NULL,
  `professor_email` text NOT NULL,
  `professor_dept_id` int(99) NOT NULL,
  `professor_post` varchar(255) NOT NULL,
  `professor_short` varchar(255) NOT NULL,
  `professor_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`professor_id`, `professor_subject_id`, `professor_name`, `professor_contact`, `professor_email`, `professor_dept_id`, `professor_post`, `professor_short`, `professor_pass`) VALUES
(1, 2, 'Dr. Darshana Patel', 9898015091, 'ithod@vvpedulink.ac.in', 1, 'HOD', 'D H PATEL', '1'),
(2, 1, 'Komil Vora', 9909065434, 'komil.vora.it@vvpedulink.ac.in', 1, 'Vise HOD', 'K B VORA', ''),
(3, 4, 'Pranav Tank', 9408726428, 'pranav.tank.it@vvpedulink.ac.in', 1, 'Assistant Professor', 'P P TANK', ''),
(4, 6, 'Chintan Sidpara', 9099070197, 'chintan.sidpara.it@vvpedulink.ac.in', 1, 'Assistant Professor', 'C B SIDPARA', ''),
(5, 3, 'Vijay Vyas', 9898096011, 'vijay.vyas.it@vvpedulink.ac.in', 1, 'Assistant Professor', 'V K VYAS', ''),
(6, 5, 'Rushabh Doshi', 9428316296, 'rushabh.doshi.it@vvpedulink.ac.in', 1, 'Assistant Professor', 'R D DOSHI', ''),
(7, 3, 'Darshan Upadhyay', 9979035739, 'darshan.upadhyay.it@vvpedulink.ac.in', 1, 'Assistant Professor', 'D P UPADHYAY', ''),
(8, 7, 'No Lecture', 0, '', 1, '', 'NO LECTURE', ''),
(42, 0, 'Dishita Mashru', 0, '', 1, 'Assistant Professor', 'D V MASHRU', ''),
(43, 0, 'Urja Makad', 0, '', 1, 'Assistant Professor', 'U O MAKAD', ''),
(44, 0, 'Dhaivatsinh Rathod', 0, '', 1, 'Assistant Professor', 'D B RATHOD', '');

-- --------------------------------------------------------

--
-- Table structure for table `r d doshi`
--

CREATE TABLE `r d doshi` (
  `slot` int(99) NOT NULL,
  `time` varchar(255) NOT NULL,
  `Monday` varchar(255) NOT NULL,
  `Tuesday` varchar(255) NOT NULL,
  `Wednesday` varchar(255) NOT NULL,
  `Thursday` varchar(255) NOT NULL,
  `Friday` varchar(255) NOT NULL,
  `Saturday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `r d doshi`
--

INSERT INTO `r d doshi` (`slot`, `time`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`) VALUES
(1, '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', ''),
(6, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `requests_id` int(11) NOT NULL,
  `requests_by` int(11) NOT NULL,
  `requests_to` int(11) NOT NULL,
  `requests_slot` int(11) NOT NULL,
  `requests_approve` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`requests_id`, `requests_by`, `requests_to`, `requests_slot`, `requests_approve`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 1, 3, 1),
(3, 1, 3, 5, 0),
(4, 1, 2, 2, 0),
(5, 1, 2, 2, 0),
(6, 1, 3, 2, 0),
(7, 1, 1, 1, 1),
(8, 1, 1, 1, 1),
(9, 1, 1, 1, 1),
(10, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sem`
--

CREATE TABLE `sem` (
  `sem_id` int(99) NOT NULL,
  `sem_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem`
--

INSERT INTO `sem` (`sem_id`, `sem_name`) VALUES
(1, '1st Semester'),
(2, '2nd Semester'),
(3, '3rd Semester'),
(4, '4th Semester'),
(5, '5th Semester'),
(6, '6th Semester'),
(7, '7th Semester'),
(8, '8th Semester');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(99) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_sem` int(99) NOT NULL,
  `subject_dept_id` int(99) NOT NULL,
  `subject_code` int(11) NOT NULL,
  `subject_short` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `subject_sem`, `subject_dept_id`, `subject_code`, `subject_short`) VALUES
(1, 'Integrated Personality Development Course', 5, 1, 3150005, 'IPDC'),
(2, 'Analysis and Design of Algorithms', 5, 1, 3150703, 'ADA'),
(3, 'Computer Networks', 5, 1, 3150710, 'CN'),
(4, 'Cyber Security', 5, 1, 3150714, 'CS'),
(5, 'Design Engineering', 5, 1, 3150001, 'DE'),
(6, 'Web Development', 5, 1, 3151606, 'WD'),
(7, 'No Lecture', 5, 1, 0, 'NO LECTURE');

-- --------------------------------------------------------

--
-- Table structure for table `u o makad`
--

CREATE TABLE `u o makad` (
  `slot` int(99) NOT NULL,
  `time` varchar(255) NOT NULL,
  `Monday` varchar(255) NOT NULL,
  `Tuesday` varchar(255) NOT NULL,
  `Wednesday` varchar(255) NOT NULL,
  `Thursday` varchar(255) NOT NULL,
  `Friday` varchar(255) NOT NULL,
  `Saturday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u o makad`
--

INSERT INTO `u o makad` (`slot`, `time`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`) VALUES
(1, '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', ''),
(6, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `v k vyas`
--

CREATE TABLE `v k vyas` (
  `slot` int(99) NOT NULL,
  `time` varchar(255) NOT NULL,
  `Monday` varchar(255) NOT NULL,
  `Tuesday` varchar(255) NOT NULL,
  `Wednesday` varchar(255) NOT NULL,
  `Thursday` varchar(255) NOT NULL,
  `Friday` varchar(255) NOT NULL,
  `Saturday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `v k vyas`
--

INSERT INTO `v k vyas` (`slot`, `time`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`) VALUES
(1, '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', ''),
(6, '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `5_it`
--
ALTER TABLE `5_it`
  ADD PRIMARY KEY (`slot`);

--
-- Indexes for table `c b sidpara`
--
ALTER TABLE `c b sidpara`
  ADD PRIMARY KEY (`slot`);

--
-- Indexes for table `d b rathod`
--
ALTER TABLE `d b rathod`
  ADD PRIMARY KEY (`slot`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `d h patel`
--
ALTER TABLE `d h patel`
  ADD PRIMARY KEY (`slot`);

--
-- Indexes for table `d p upadhyay`
--
ALTER TABLE `d p upadhyay`
  ADD PRIMARY KEY (`slot`);

--
-- Indexes for table `d v mashru`
--
ALTER TABLE `d v mashru`
  ADD PRIMARY KEY (`slot`);

--
-- Indexes for table `k b vora`
--
ALTER TABLE `k b vora`
  ADD PRIMARY KEY (`slot`);

--
-- Indexes for table `p p tank`
--
ALTER TABLE `p p tank`
  ADD PRIMARY KEY (`slot`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`professor_id`);

--
-- Indexes for table `r d doshi`
--
ALTER TABLE `r d doshi`
  ADD PRIMARY KEY (`slot`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`requests_id`);

--
-- Indexes for table `sem`
--
ALTER TABLE `sem`
  ADD PRIMARY KEY (`sem_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `u o makad`
--
ALTER TABLE `u o makad`
  ADD PRIMARY KEY (`slot`);

--
-- Indexes for table `v k vyas`
--
ALTER TABLE `v k vyas`
  ADD PRIMARY KEY (`slot`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `dept_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `professor_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `requests_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
