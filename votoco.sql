-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2018 at 11:21 AM
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
(1, '2016/MCA/LE/01', 'SHAHEER S', 'MCA', 'CHAIRMAN', 2),
(2, '2016/MCA/LE/07', 'AJAY JUDE UNNI', 'MTECH', 'CHAIRMAN', 0),
(3, '2016/MCA/LE/02', 'RAHUL R', 'MCA', 'VICE-CHAIRPERSON', 2),
(4, '2016/MCA/LE/03', 'JEENA', 'MCA', 'SPORTS-SECRETARY', 2),
(5, '2016/MCA/LE/05', 'ATHIRA A S', 'MCA', 'ARTS-SECRETARY', 2),
(6, '2016/MCA/LE/04', 'GOUTHAM S', 'MCA', 'VICE-CHAIRPERSON', 0),
(7, '2016/MCA/LE/06', 'ARUNJITH R S', 'MCA', '3rdYEARREP', 2),
(8, '2016/MCA/LE/08', 'ADARSH A', 'EEE', 'CHAIRMAN', 0),
(9, '2016/MCA/LE/09', 'AZEEF A H', 'CIVIL', '1stYEARREP', 2),
(10, '2016/MCA/LE/10', 'MUNEER B L', 'MECH', '2ndYEARREP', 2),
(11, '2016/MCA/LE/11', 'ARYA JAYAKUMAR', 'Computer Science', '4thYEARREP', 2),
(12, '2016/MCA/LE/12', 'CHAITHANYA GANESH', 'MBA', 'MAGAZINE-EDITOR', 2);

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
(1, 'x0cgfahjfalwifmvalwafjwafiqjo', 123, 'TRUE', 'active'),
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
(488, '2016/MCA/LE/01', 'CHAIRMAN'),
(489, '2016/MCA/LE/01', 'VICE-CHAIRPERSON'),
(490, '2016/MCA/LE/01', 'ARTS-SECRETARY'),
(491, '2016/MCA/LE/01', 'SPORTS-SECRETARY'),
(492, '2016/MCA/LE/01', 'MAGAZINE-EDITOR'),
(493, '2016/MCA/LE/01', '1stYEARREP'),
(494, '2016/MCA/LE/01', '2ndYEARREP'),
(495, '2016/MCA/LE/01', '3rdYEARREP'),
(496, '2016/MCA/LE/01', '4thYEARREP'),
(515, '2016/MCA/LE/02', 'CHAIRMAN'),
(516, '2016/MCA/LE/02', 'VICE-CHAIRPERSON'),
(517, '2016/MCA/LE/02', 'ARTS-SECRETARY'),
(518, '2016/MCA/LE/02', 'SPORTS-SECRETARY'),
(519, '2016/MCA/LE/02', 'MAGAZINE-EDITOR'),
(520, '2016/MCA/LE/02', '1stYEARREP'),
(521, '2016/MCA/LE/02', '2ndYEARREP'),
(522, '2016/MCA/LE/02', '3rdYEARREP'),
(523, '2016/MCA/LE/02', '4thYEARREP'),
(524, '2016/MCA/LE/03', 'CHAIRMAN'),
(525, '2016/MCA/LE/03', 'VICE-CHAIRPERSON'),
(526, '2016/MCA/LE/03', 'ARTS-SECRETARY'),
(527, '2016/MCA/LE/03', 'SPORTS-SECRETARY'),
(528, '2016/MCA/LE/03', 'MAGAZINE-EDITOR'),
(529, '2016/MCA/LE/03', '1stYEARREP'),
(530, '2016/MCA/LE/03', '2ndYEARREP'),
(531, '2016/MCA/LE/03', '3rdYEARREP'),
(532, '2016/MCA/LE/03', '4thYEARREP');

-- --------------------------------------------------------

--
-- Table structure for table `voterslist`
--

CREATE TABLE `voterslist` (
  `id` int(10) NOT NULL,
  `voters_id` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `voting_status` varchar(10) NOT NULL DEFAULT 'FALSE',
  `voting_permission` varchar(20) NOT NULL DEFAULT 'GRANTED',
  `node_votedfrom` varchar(30) NOT NULL DEFAULT 'Not Voted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voterslist`
--

INSERT INTO `voterslist` (`id`, `voters_id`, `dob`, `voting_status`, `voting_permission`, `node_votedfrom`) VALUES
(1, '2016/MCA/LE/01', '29/10/1995', 'TRUE', 'GRANTED', 'Not Voted'),
(2, '2016/MCA/LE/02', '29/10/1995', 'TRUE', 'GRANTED', 'Not Voted'),
(3, '2016/MCA/LE/03', '29/10/1995', 'TRUE', 'GRANTED', 'Not Voted'),
(4, '2016/MCA/LE/04', '29/10/1995', 'FALSE', 'REVOKED', 'Not Voted'),
(5, '2016/MCA/LE/05', '29/10/1995', 'FALSE', 'REVOKED', 'Not Voted'),
(6, '2016/MCA/LE/06', '29/10/1995', 'FALSE', 'REVOKED', 'Not Voted'),
(7, '2016/MCA/LE/07', '29/10/1995', 'FALSE', 'REVOKED', 'Not Voted'),
(8, '2016/MCA/LE/08', '29/10/1995', 'FALSE', 'REVOKED', 'Not Voted'),
(9, '2016/MCA/LE/09', '29/10/1995', 'FALSE', 'REVOKED', 'Not Voted'),
(10, '2016/MCA/LE/10', '29/10/1995', 'FALSE', 'REVOKED', 'Not Voted');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `systemlist`
--
ALTER TABLE `systemlist`
  MODIFY `system_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `temp_voters`
--
ALTER TABLE `temp_voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=533;

--
-- AUTO_INCREMENT for table `voterslist`
--
ALTER TABLE `voterslist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
