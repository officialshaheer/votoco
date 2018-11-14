-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2018 at 10:22 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votoco`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(10) NOT NULL,
  `a_name` varchar(20) DEFAULT NULL,
  `a_pwd` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_pwd`) VALUES
(1, 'admin', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(10) NOT NULL,
  `c_id` varchar(20) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_department` varchar(20) NOT NULL,
  `position` varchar(30) NOT NULL,
  `votes` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `c_id`, `c_name`, `c_department`, `position`, `votes`) VALUES
(1, '2016/MCA/LE/01', 'SHAHEER S', 'MCA', 'CHAIRMAN', 59),
(2, '2016/MCA/LE/07', 'AJAY JUDE UNNI', 'MTECH', 'CHAIRMAN', 6),
(3, '2016/MCA/LE/02', 'RAHUL R', 'MCA', 'VICE-CHAIRPERSON', 48),
(4, '2016/MCA/LE/03', 'JEENA', 'MCA', 'SPORTS-SECRETARY', 45),
(5, '2016/MCA/LE/05', 'ATHIRA A S', 'MCA', 'ARTS-SECRETARY', 42),
(6, '2016/MCA/LE/04', 'GOUTHAM S', 'MCA', 'VICE-CHAIRPERSON', 6),
(7, '2016/MCA/LE/06', 'ARUNJITH R S', 'MCA', '3rdYEARREP', 45),
(8, '2016/MCA/LE/08', 'ADARSH A', 'EEE', 'CHAIRMAN', 2),
(9, '2016/MCA/LE/09', 'AZEEF A H', 'CIVIL', '1stYEARREP', 44),
(10, '2016/MCA/LE/10', 'MUNEER B L', 'MECH', '2ndYEARREP', 43),
(11, '2016/MCA/LE/11', 'ARYA JAYAKUMAR', 'Computer Science', '4thYEARREP', 43),
(12, '2016/MCA/LE/12', 'CHAITHANYA GANESH', 'MBA', 'MAGAZINE-EDITOR', 44),
(13, '2016/MCA/LE/022', 'VEENA R', 'MCA', 'ARTS-SECRETARY', 2);

-- --------------------------------------------------------

--
-- Table structure for table `systemlist`
--

CREATE TABLE `systemlist` (
  `system_id` int(11) NOT NULL,
  `system_hash` varchar(30) NOT NULL,
  `pwd` int(11) NOT NULL DEFAULT '123',
  `permission` varchar(10) NOT NULL DEFAULT 'FALSE',
  `node_status` varchar(30) DEFAULT 'not_active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `systemlist`
--

INSERT INTO `systemlist` (`system_id`, `system_hash`, `pwd`, `permission`, `node_status`) VALUES
(1, 'x0cgfahjfalwifmvalwafjwafiqjo', 123, 'FALSE', 'not_active'),
(2, 'x0cgfahjfalwifmvalwafjwafijgp', 123, 'FALSE', 'not_active'),
(3, 'x0cgfahjfalwifmvalwafjwafieee', 123, 'FALSE', 'not_active');

-- --------------------------------------------------------

--
-- Table structure for table `temp_voters`
--

CREATE TABLE `temp_voters` (
  `id` int(11) NOT NULL,
  `voters_id` varchar(20) NOT NULL,
  `position` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_voters`
--

INSERT INTO `temp_voters` (`id`, `voters_id`, `position`) VALUES
(109, '2016/MCA/LE/06', 'CHAIRMAN'),
(110, '2016/MCA/LE/06', 'VICE-CHAIRPERSON'),
(111, '2016/MCA/LE/06', 'ARTS-SECRETARY'),
(112, '2016/MCA/LE/06', 'SPORTS-SECRETARY'),
(113, '2016/MCA/LE/06', 'MAGAZINE-EDITOR'),
(114, '2016/MCA/LE/06', '1stYEARREP'),
(115, '2016/MCA/LE/06', '2ndYEARREP'),
(116, '2016/MCA/LE/06', '3rdYEARREP'),
(117, '2016/MCA/LE/06', '4thYEARREP'),
(118, '2016/MCA/LE/09', 'CHAIRMAN'),
(119, '2016/MCA/LE/09', 'VICE-CHAIRPERSON'),
(120, '2016/MCA/LE/09', 'ARTS-SECRETARY'),
(121, '2016/MCA/LE/09', 'SPORTS-SECRETARY'),
(122, '2016/MCA/LE/09', 'MAGAZINE-EDITOR'),
(123, '2016/MCA/LE/09', '1stYEARREP'),
(124, '2016/MCA/LE/09', '2ndYEARREP'),
(125, '2016/MCA/LE/09', '3rdYEARREP'),
(126, '2016/MCA/LE/09', '4thYEARREP'),
(136, '2016/MCA/LE/10', 'CHAIRMAN'),
(137, '2016/MCA/LE/10', 'VICE-CHAIRPERSON'),
(138, '2016/MCA/LE/10', 'ARTS-SECRETARY'),
(139, '2016/MCA/LE/10', 'SPORTS-SECRETARY'),
(140, '2016/MCA/LE/10', 'MAGAZINE-EDITOR'),
(141, '2016/MCA/LE/10', '1stYEARREP'),
(142, '2016/MCA/LE/10', '2ndYEARREP'),
(143, '2016/MCA/LE/10', '3rdYEARREP'),
(144, '2016/MCA/LE/10', '4thYEARREP'),
(163, '2016/MCA/LE/04', 'CHAIRMAN'),
(164, '2016/MCA/LE/04', 'ARTS-SECRETARY'),
(165, '2016/MCA/LE/04', 'VICE-CHAIRPERSON'),
(166, '2016/MCA/LE/04', 'SPORTS-SECRETARY'),
(167, '2016/MCA/LE/04', 'MAGAZINE-EDITOR'),
(168, '2016/MCA/LE/04', '2ndYEARREP'),
(169, '2016/MCA/LE/04', '3rdYEARREP'),
(170, '2016/MCA/LE/04', '4thYEARREP'),
(171, '2016/MCA/LE/04', '1stYEARREP'),
(172, '2016/MCA/LE/05', 'CHAIRMAN'),
(173, '2016/MCA/LE/05', 'VICE-CHAIRPERSON'),
(174, '2016/MCA/LE/05', 'ARTS-SECRETARY'),
(175, '2016/MCA/LE/05', 'SPORTS-SECRETARY'),
(176, '2016/MCA/LE/05', 'MAGAZINE-EDITOR'),
(177, '2016/MCA/LE/05', '1stYEARREP'),
(178, '2016/MCA/LE/05', '2ndYEARREP'),
(179, '2016/MCA/LE/05', '3rdYEARREP'),
(180, '2016/MCA/LE/05', '4thYEARREP'),
(181, '2016/MCA/LE/07', 'CHAIRMAN'),
(182, '2016/MCA/LE/07', 'VICE-CHAIRPERSON'),
(183, '2016/MCA/LE/07', 'ARTS-SECRETARY'),
(184, '2016/MCA/LE/07', 'SPORTS-SECRETARY'),
(185, '2016/MCA/LE/07', 'MAGAZINE-EDITOR'),
(186, '2016/MCA/LE/07', '1stYEARREP'),
(187, '2016/MCA/LE/07', '2ndYEARREP'),
(188, '2016/MCA/LE/07', '3rdYEARREP'),
(189, '2016/MCA/LE/07', '4thYEARREP'),
(217, '2016/MCA/LE/03', 'CHAIRMAN'),
(218, '2016/MCA/LE/03', 'VICE-CHAIRPERSON'),
(219, '2016/MCA/LE/03', 'ARTS-SECRETARY'),
(220, '2016/MCA/LE/03', 'SPORTS-SECRETARY'),
(221, '2016/MCA/LE/03', 'MAGAZINE-EDITOR'),
(222, '2016/MCA/LE/03', '1stYEARREP'),
(223, '2016/MCA/LE/03', '2ndYEARREP'),
(224, '2016/MCA/LE/03', '3rdYEARREP'),
(225, '2016/MCA/LE/03', '4thYEARREP'),
(226, '2016/MCA/LE/02', 'CHAIRMAN'),
(227, '2016/MCA/LE/02', 'VICE-CHAIRPERSON'),
(228, '2016/MCA/LE/02', 'ARTS-SECRETARY'),
(229, '2016/MCA/LE/02', 'SPORTS-SECRETARY'),
(230, '2016/MCA/LE/02', 'MAGAZINE-EDITOR'),
(231, '2016/MCA/LE/02', '1stYEARREP'),
(232, '2016/MCA/LE/02', '2ndYEARREP'),
(233, '2016/MCA/LE/02', '3rdYEARREP'),
(234, '2016/MCA/LE/02', '4thYEARREP'),
(281, '2016/MCA/LE/01', 'CHAIRMAN'),
(282, '2016/MCA/LE/01', 'VICE-CHAIRPERSON'),
(283, '2016/MCA/LE/01', 'ARTS-SECRETARY'),
(284, '2016/MCA/LE/01', 'SPORTS-SECRETARY'),
(285, '2016/MCA/LE/01', 'MAGAZINE-EDITOR'),
(286, '2016/MCA/LE/01', '1stYEARREP'),
(287, '2016/MCA/LE/01', '2ndYEARREP'),
(288, '2016/MCA/LE/01', '3rdYEARREP'),
(289, '2016/MCA/LE/01', '4thYEARREP');

-- --------------------------------------------------------

--
-- Table structure for table `voterslist`
--

CREATE TABLE `voterslist` (
  `id` int(10) NOT NULL,
  `voters_id` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `voting_status` varchar(10) NOT NULL DEFAULT 'FALSE',
  `voting_permission` varchar(20) NOT NULL DEFAULT 'GRANTED'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voterslist`
--

INSERT INTO `voterslist` (`id`, `voters_id`, `dob`, `voting_status`, `voting_permission`) VALUES
(1, '2016/MCA/LE/01', '29/10/1995', 'TRUE', 'GRANTED'),
(2, '2016/MCA/LE/02', '29/10/1995', 'TRUE', 'GRANTED'),
(3, '2016/MCA/LE/03', '29/10/1995', 'TRUE', 'GRANTED'),
(4, '2016/MCA/LE/04', '29/10/1995', 'TRUE', 'GRANTED'),
(5, '2016/MCA/LE/05', '29/10/1995', 'TRUE', 'GRANTED'),
(6, '2016/MCA/LE/06', '29/10/1995', 'TRUE', 'GRANTED'),
(7, '2016/MCA/LE/07', '29/10/1995', 'TRUE', 'GRANTED'),
(8, '2016/MCA/LE/08', '29/10/1995', 'TRUE', 'GRANTED'),
(9, '2016/MCA/LE/09', '29/10/1995', 'TRUE', 'GRANTED'),
(10, '2016/MCA/LE/10', '29/10/1995', 'TRUE', 'GRANTED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `a_id` (`a_id`,`a_name`,`a_pwd`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `systemlist`
--
ALTER TABLE `systemlist`
  ADD PRIMARY KEY (`system_id`);

--
-- Indexes for table `temp_voters`
--
ALTER TABLE `temp_voters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voterslist`
--
ALTER TABLE `voterslist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `systemlist`
--
ALTER TABLE `systemlist`
  MODIFY `system_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `temp_voters`
--
ALTER TABLE `temp_voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=290;

--
-- AUTO_INCREMENT for table `voterslist`
--
ALTER TABLE `voterslist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
