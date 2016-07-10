-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2016 at 03:04 AM
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
  `name` varchar(60) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `accelerated` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`id`, `name`, `degree`, `accelerated`) VALUES
(1, 'Accountancy', 'BS', 1),
(2, 'Actuarial Science', 'BS', 0),
(3, 'Aeronautical Management Technology (Air Traffic Management)', 'BS', 0),
(4, 'Aeronautical Management Technology (Air Transportation Manag', 'BS', 1),
(5, 'Aeronautical Management Technology (Professional Flight)', 'BS', 1),
(6, 'Aeronautical Management Technology (Unmanned Aerial Systems)', 'BS', 1),
(7, 'Aerospace Engineering (Aeronautics)', 'BS', 1),
(8, 'Aerospace Engineering (Astronautics)', 'BS', 1),
(9, 'Aerospace Engineering (Autonomous Vehicle Systems)', 'BS', 1),
(10, 'African and African American Studies', 'BA', 1),
(11, 'Agribusiness (Global Agribusiness)', 'BS', 0),
(12, 'Agribusiness (Preveterinary Medicine)', 'BS', 0),
(13, 'Air Traffic Management', 'BS', 1),
(14, 'American Indian Studies', 'BS', 1),
(15, 'American Studies', 'BA', 1),
(16, 'Anthropology', 'BS', 0),
(17, 'Applied Biological Science (Natural Resource Ecology)', 'BS', 0),
(18, 'Applied Biological Science (Preveterinary Medicine) ', 'BS', 0),
(19, 'Applied Biological Sciences (Applied Biological Sciences)', 'BS', 0),
(20, 'Applied Biological Sciences (Applied Ecology and Preveterina', 'BS', 1),
(21, 'Applied Biological Sciences (Secondary Education in Biology)', 'BS', 0),
(22, 'Applied Biological Sciences (Sustainable Horticulture)', 'BS', 0),
(23, 'Applied Computer Science', 'BS', 0),
(24, 'Applied Computing', 'BS', 0),
(25, 'Applied Mathematics', 'BS', 0),
(26, 'Applied Mathematics for Life and Social Sciences', 'BS', 0),
(27, 'Applied Physics', 'BS', 0),
(28, 'Applied Quantitative Science', 'BS', 0),
(29, 'Applied Science', 'BS', 1),
(30, 'Applied Science', 'BS', 0),
(31, 'Applied Science (Aviation)', 'BS', 0),
(32, 'Applied Science (Electronic Energy Systems)', 'BS', 0),
(33, 'Applied Science (Emergency Management)', 'BS', 0),
(34, 'Applied Science (Food Service Management)', 'BS', 0),
(35, 'Applied Science (Graphic Information Technology)', 'BS', 1),
(36, 'Applied Science (Health Innovation)', 'BS', 0),
(37, 'Applied Science (Health Sciences)', 'BS', 0),
(38, 'Applied Science (Internet and Web Development)', 'BS', 1),
(39, 'Applied Science (Manufacturing Technology and Management)', 'BS', 0),
(40, 'Applied Science (Medical Laboratory Science)', 'BS', 0),
(41, 'Applied Science (Operations Management)', 'BS', 0),
(42, 'Applied Science (Software and Computing Systems)', 'BS', 0),
(43, 'Applied Science (Technical Communication)', 'BS', 0),
(44, 'Architectural Studies', 'BS', 0),
(45, 'Art (Art Education)', 'BFA', 0),
(46, 'Art (Art History)', 'BA', 0),
(47, 'Art (Art Studies)', 'BA', 0),
(48, 'Art (Ceramics)', 'BFA', 0),
(49, 'Art (Drawing)', 'BFA', 0),
(50, 'Art (Fibers)', 'BFA', 0),
(51, 'Art (Intermedia)', 'BFA', 0),
(52, 'Art (Metals)', 'BFA', 0),
(53, 'Art (Museum Studies)', 'BS', 0),
(54, 'Art (Painting)', 'BFA', 0),
(55, 'Art (Photography)', 'BFA', 0),
(56, 'Art (Printmaking)', 'BFA', 0),
(57, 'Art (Sculpture)', 'BFA', 0),
(58, 'Arts', 'BA', 0),
(59, 'Asia Studies (East Asia)', 'BA', 0),
(60, 'Asia Studies (South Asia)', 'BA', 0),
(61, 'Asia Studies (Southeast Asia)', 'BA', 0),
(62, 'Asian Languages (Chinese)', 'BA', 0),
(63, 'Asian Languages (Japanese)', 'BA', 0),
(64, 'Asian Pacific American Studies', 'BA', 0);

-- --------------------------------------------------------

--
-- Table structure for table `majors_members`
--

CREATE TABLE `majors_members` (
  `major_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `majors_members`
--

INSERT INTO `majors_members` (`major_id`, `member_id`) VALUES
(1, 1);

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
  `graduated` tinyint(1) NOT NULL,
  `graduation_year` varchar(25) NOT NULL,
  `graduation_semester` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `minor` varchar(50) NOT NULL,
  `level` varchar(40) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `bio` text NOT NULL,
  `photo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `email`, `title`, `linkedin`, `phone`, `graduated`, `graduation_year`, `graduation_semester`, `password`, `minor`, `level`, `state`, `city`, `bio`, `photo_id`) VALUES
(1, 'Isidro', 'Perez', 'isidro.perez@live.com', 'admin', 'https://www.linkedin.com/in/isidro-perez-09645196?trk=hp-identity-name', '7608777804', 0, '2016', '', 'test', '', '', '', '', '', 1),
(5, 'Jeb', 'Johnson', 'jebby.joe@icloud.com', 'Director of Software', 'https://www.linkedin.com/in/kaitlinfayemitchell?authType=NAME_SEARCH&authToken=8h9U&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CentityType%3AentityHistoryName%2CclickedEntityId%3Amynet', '7608777804', 0, '2017', '', 'jeb', '', '', '', '', '', 1),
(7, '', '', 'working@live.com', '', '', '', 0, '', '', '$2y$10$ZTdjZGUxMmI2ZTU2MzYzMungwaJZFWt64jPQZcJcJYUHAuE05rsvS', '', '', '', '', '', 1),
(9, 'Doug', 'Carrol', 'dcarrol@gmail.com', '', '', '', 0, '', '', '$2y$10$M2EyZjg2YWFlZTRjNGY1YOB.OEP22JaYXXM5Dnb6QX0YrYnsDHJti', '', 'Candidate', '', '', '', 1),
(10, 'Tommy', 'Murphey', 'tmurph@asu.edu', '', '', '', 0, '', '', '$2y$10$ZDQ3MmQzMzVjYmY4MDhhMOpltW2KvxvB2hc1C1xSgDQHmuK8fZdV6', '', 'Candidate', '', '', '', 1),
(11, 'Greg', 'Perez', 'gregsocal@gmail.com', 'Manager', '', '(760) 877-7804', 0, '2017', '', '$2y$10$MGY1NzI5ZDhmZGQyYzRhN.WFo6DrEzUMEUdG7lZBA1FomC6Ei1mum', '', 'Candidate', '', '', '', 1),
(12, 'Isidro', 'Perez', 'isidro.perez.espn@gmail.com', 'Manager', 'https://linkedin.com', '7608777804', 0, '2017', '', '$2y$10$NzQxZTgyMTY3NzVhNmRkNuYqXH2tXOxR5uWHb8k.3XIqGUPG.kVLS', '', 'admin', '', '', '', 1),
(13, 'Drew', 'Demechko', 'isd@isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(14, 'Dre', 'Demechko', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(15, 'Dre', 'Demechko', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(16, 'Dre', 'Demechko', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(17, 'Dre', 'Demechko', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(18, 'Dre', 'Demechko', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(19, 'Dre', 'Demechko', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(20, 'Dre', 'Demechko', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(21, 'Dre', 'Demechko', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(22, 'Dre', 'Demechko', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(23, 'Dre', 'Demechko', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(24, 'Dre', 'Demechko', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(25, 'Dre', 'Alan', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(26, 'Dre', 'Alan', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(27, 'Dre', 'Alan', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(28, 'Dre', 'Bri', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(29, 'Dre', 'Bri', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(30, 'Dre', 'Zi', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(31, 'Dre', 'Zi', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(32, 'Dre', 'Li', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(33, 'Dre', 'Li', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(34, 'Dre', 'Li', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(35, 'Dre', 'Mom', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(36, 'Dre', 'Mom', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(37, 'Dre', 'Mom', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(38, 'Dre', 'Yi', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(39, 'Dre', 'Yi', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(40, 'Dre', 'Yi', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(41, 'Dre', 'Yi', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(42, 'Dre', 'Vin', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(43, 'Dre', 'Vin', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(44, 'Dre', 'Vin', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(45, 'Dre', 'Vin', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(46, 'Dre', 'Eer', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(47, 'Dre', 'Eer', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(48, 'Dre', 'Eer', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(49, 'Dre', 'Eer', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(50, 'Dre', 'Eer', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(51, 'Dre', 'Eer', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(52, 'Dre', 'Eer', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(53, 'Dre', 'Eer', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(54, 'Dre', 'Eer', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(55, 'Dre', 'Eer', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(56, 'Dre', 'Fun', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(57, 'Dre', 'Fun', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1),
(58, 'Dre', 'Fun', 'isd.com', '', '', '', 0, '', '', 'test', '', 'Officer', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `minors`
--

CREATE TABLE `minors` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `url`) VALUES
(1, 'http://www.crewbaseasia.com/wp-content/uploads/blank-user-300x225.jpg');

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
-- Indexes for table `minors`
--
ALTER TABLE `minors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `majors`
--
ALTER TABLE `majors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `minors`
--
ALTER TABLE `minors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
