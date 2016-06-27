-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2016 at 10:30 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bap`
--

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `undergraduate_program` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `title` varchar(25) NOT NULL,
  `linkedin` varchar(200) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `picture_path` varchar(50) DEFAULT NULL,
  `graduated` tinyint(1) NOT NULL,
  `graduation_year` varchar(25) NOT NULL,
  `graduation_semester` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(40) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `email`, `title`, `linkedin`, `phone`, `picture_path`, `graduated`, `graduation_year`, `graduation_semester`, `password`, `level`, `state`, `city`, `bio`) VALUES
(1, 'Isidro', 'Perez', 'isidro.perez@live.com', 'admin', 'https://www.linkedin.com/in/isidro-perez-09645196?trk=hp-identity-name', '7608777804', '', 0, '2016', '', 'test', '', '', '', ''),
(5, 'Jeb', 'Johnson', 'jebby.joe@icloud.com', 'Director of Software', 'https://www.linkedin.com/in/kaitlinfayemitchell?authType=NAME_SEARCH&authToken=8h9U&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CentityType%3AentityHistoryName%2CclickedEntityId%3Amynet', '7608777804', '', 0, '2017', '', 'jeb', '', '', '', ''),
(7, '', '', 'working@live.com', '', '', '', '', 0, '', '', '$2y$10$ZTdjZGUxMmI2ZTU2MzYzMungwaJZFWt64jPQZcJcJYUHAuE05rsvS', '', '', '', ''),
(9, 'Doug', 'Carrol', 'dcarrol@gmail.com', '', '', '', '', 0, '', '', '$2y$10$M2EyZjg2YWFlZTRjNGY1YOB.OEP22JaYXXM5Dnb6QX0YrYnsDHJti', 'Candidate', '', '', ''),
(10, 'Tommy', 'Murphey', 'tmurph@asu.edu', '', '', '', '', 0, '', '', '$2y$10$ZDQ3MmQzMzVjYmY4MDhhMOpltW2KvxvB2hc1C1xSgDQHmuK8fZdV6', 'Candidate', '', '', ''),
(11, 'Greg', 'Perez', 'gregsocal@gmail.com', 'Manager', '', '(760) 877-7804', 'Perez, Isidro.jpg', 0, '2017', '', '$2y$10$MGY1NzI5ZDhmZGQyYzRhN.WFo6DrEzUMEUdG7lZBA1FomC6Ei1mum', 'Candidate', '', '', ''),
(12, 'Isidro', 'Perez', 'isidro.perez.espn@gmail.com', 'Manager', 'https://linkedin.com', '7608777804', '12698303_586016908240094_506217921181787247_o.jpg', 0, '2017', '', '$2y$10$NzQxZTgyMTY3NzVhNmRkNuYqXH2tXOxR5uWHb8k.3XIqGUPG.kVLS', 'admin', '', '', ''),
(13, 'Drew', 'Demechko', 'isd@isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(14, 'Dre', 'Demechko', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(15, 'Dre', 'Demechko', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(16, 'Dre', 'Demechko', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(17, 'Dre', 'Demechko', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(18, 'Dre', 'Demechko', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(19, 'Dre', 'Demechko', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(20, 'Dre', 'Demechko', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(21, 'Dre', 'Demechko', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(22, 'Dre', 'Demechko', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(23, 'Dre', 'Demechko', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(24, 'Dre', 'Demechko', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(25, 'Dre', 'Alan', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(26, 'Dre', 'Alan', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(27, 'Dre', 'Alan', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(28, 'Dre', 'Bri', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(29, 'Dre', 'Bri', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(30, 'Dre', 'Zi', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(31, 'Dre', 'Zi', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(32, 'Dre', 'Li', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(33, 'Dre', 'Li', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(34, 'Dre', 'Li', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(35, 'Dre', 'Mom', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(36, 'Dre', 'Mom', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(37, 'Dre', 'Mom', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(38, 'Dre', 'Yi', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(39, 'Dre', 'Yi', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(40, 'Dre', 'Yi', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(41, 'Dre', 'Yi', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(42, 'Dre', 'Vin', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(43, 'Dre', 'Vin', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(44, 'Dre', 'Vin', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(45, 'Dre', 'Vin', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(46, 'Dre', 'Eer', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(47, 'Dre', 'Eer', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(48, 'Dre', 'Eer', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(49, 'Dre', 'Eer', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(50, 'Dre', 'Eer', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(51, 'Dre', 'Eer', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(52, 'Dre', 'Eer', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(53, 'Dre', 'Eer', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(54, 'Dre', 'Eer', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(55, 'Dre', 'Eer', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(56, 'Dre', 'Fun', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(57, 'Dre', 'Fun', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', ''),
(58, 'Dre', 'Fun', 'isd.com', '', '', '', NULL, 0, '', '', 'test', 'Officer', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `members_majors`
--

CREATE TABLE `members_majors` (
  `id` int(11) NOT NULL,
  `major_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members_minors`
--

CREATE TABLE `members_minors` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `minor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members_profile_photo`
--

CREATE TABLE `members_profile_photo` (
  `picture_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `minors`
--

CREATE TABLE `minors` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members_majors`
--
ALTER TABLE `members_majors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members_minors`
--
ALTER TABLE `members_minors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members_profile_photo`
--
ALTER TABLE `members_profile_photo`
  ADD PRIMARY KEY (`picture_id`);

--
-- Indexes for table `minors`
--
ALTER TABLE `minors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `members_profile_photo`
--
ALTER TABLE `members_profile_photo`
  MODIFY `picture_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
