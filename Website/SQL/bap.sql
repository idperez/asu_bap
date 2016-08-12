-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost

-- Generation Time: Aug 11, 2016 at 10:28 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

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
-- Table structure for table `prospectives`
--

CREATE TABLE `prospectives` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `time` datetime NOT NULL,
  `address` varchar(100) NOT NULL
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prospectives`
--

<<<<<<< HEAD
INSERT INTO `events` (`id`, `name`, `description`, `time`, `address`) VALUES
(1, 'Meet The Firms', '<p><em>Hello &nbsp;kj kj &nbsp;jkHello &nbsp;kj kj &nbsp;jkHello &nbsp;kj kj &nbsp;jkHello &nbsp;kj ', '1993-12-31 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `events_users`
--

CREATE TABLE `events_users` (
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `majors_users`
--

CREATE TABLE `majors_users` (
  `major_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `majors_users`
--

INSERT INTO `majors_users` (`major_id`, `user_id`) VALUES
(1, 1);

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
(0, 'http://www.crewbaseasia.com/wp-content/uploads/blank-user-300x225.jpg'),
(1, 'http://www.crewbaseasia.com/wp-content/uploads/blank-user-300x225.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prospectives`
--

CREATE TABLE `prospectives` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prospectives`
--

INSERT INTO `prospectives` (`id`, `first_name`, `last_name`, `email`, `time`) VALUES
(6, 'Isidro', 'Perez', 'isidro.perez@live.com', '2016-08-07 00:17:35.000000'),
(7, 'Josh', 'Test', 'isdr@gmail.com', '2016-08-07 04:22:38.000000'),
(8, 'Steph', 'Curry', 'st.e@gmail.com', '2016-08-07 04:24:29.000000'),
(9, 'Joe', 'Random', 'random.joe@gmail.com', '2016-08-07 04:39:02.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `title` varchar(25) NOT NULL,
  `linkedin` varchar(200) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `graduated` tinyint(1) NOT NULL,
  `graduation_year` varchar(25) NOT NULL,
  `graduation_semester` varchar(20) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `minor` varchar(50) NOT NULL,
  `level` varchar(40) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `bio` text NOT NULL,
  `photo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `title`, `linkedin`, `phone`, `graduated`, `graduation_year`, `graduation_semester`, `password`, `minor`, `level`, `state`, `city`, `bio`, `photo_id`) VALUES
(91, 'test', 'test', 'test@test123.com', '', '', '', 0, '', '', '16d7a4fca7442dda3ad93c9a726597e4', '', '1', '', '', '', 0),
(92, 'test', 'test', 'test@test12345.com', '', '', '', 0, '', '', '05a671c66aefea124cc08b76ea6d30bb', '', '1', '', '', '', 0),
(96, 'Isidro', 'Perez', 'isidro.perez1@live.com', 'Director of Technology', 'https://www.linkedin.com/in/isidro-perez-09645196?trk=hp-identity-photo', '', 0, '', '', '25d55ad283aa400af464c76d713c07ad', '', 'Officer', 'AZ', 'Phoenix', 'Eric works Firm’s Technology sector, serving clients in the semiconductor, software, Internet, services, waste and CleanTech industries. Eric served a three-year residency in Ernst & Young’s National Professional Practice Group where he consulted with engagement teams through the Southwest in connection with accounting, auditing and reporting issues, and is a member of Ernst & Young’s SEC Experts Network, helping engagement teams with SEC reporting concerns and complexities.', 0),
(97, 'Greg', 'Wilson', 'isidro.perez11@live.com', '', 'www.linkedin.com/in/isidro-perez-09645196?trk=nav_responsive_tab_profile_pic', '', 0, '0', 'Unknown', '25d55ad283aa400af464c76d713c07ad', '', 'Member', 'Prefer not to answer', '', 'Eric works Firmâ€™s Technology sector, serving clients in the semiconductor, software, Internet, services, waste and CleanTech industries. Eric served a three-year residency in Ernst & Youngâ€™s National Professional Practice Group where he consulted with engagement teams through the Southwest in connection with accounting, auditing and reporting issues, and is a member of Ernst & Youngâ€™s SEC Experts Network, helping engagement teams with SEC reporting concerns and complexities.', 0);
=======
INSERT INTO `prospectives` (`id`, `first_name`, `last_name`, `email`, `time`) VALUES
(1, '', 'Perez', 'isidro.perez@live.com', '2016-08-11 22:22:30.000000');
>>>>>>> cdd79cc1c27d9f289ba7e93767fb8b353e4ca79c

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prospectives`
--
<<<<<<< HEAD
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
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
-- Indexes for table `prospectives`
--
ALTER TABLE `prospectives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
=======
ALTER TABLE `prospectives`
>>>>>>> cdd79cc1c27d9f289ba7e93767fb8b353e4ca79c
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prospectives`
--
<<<<<<< HEAD
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `majors`
--
ALTER TABLE `majors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
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
--
-- AUTO_INCREMENT for table `prospectives`
--
ALTER TABLE `prospectives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

ALTER TABLE `prospectives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
