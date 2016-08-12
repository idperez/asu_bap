-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2016 at 04:24 PM
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
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `time` datetime NOT NULL,
  `hours` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `closed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `description`, `time`, `hours`, `type`, `closed`) VALUES
(2, 'TestEvent', 'TestEvent Description', '0000-00-00 00:00:00', 1, '', 0),
(5, 'Test', 'test', '0000-00-00 00:00:00', 3, 'Opportunity', 0),
(100, '', '', '0000-00-00 00:00:00', 0, '', 0),
(102, '', '', '0000-00-00 00:00:00', 0, '', 1),
(103, '', '', '0000-00-00 00:00:00', 0, '', 1),
(104, 'TestEvent', '<p><strong>test123</strong></p>', '0000-00-00 00:00:00', 2, 'Event', 1),
(105, 'TestEvent2', '<p><strong>test</strong></p>', '2016-05-10 01:00:00', 2, 'Event', 1),
(106, '', '', '0000-00-00 00:00:00', 0, '', 1),
(107, '', '', '0000-00-00 00:00:00', 0, '', 1),
(108, '', '', '0000-00-00 00:00:00', 0, '', 1),
(109, 'Test', '<p><strong>Test</strong></p>', '0000-00-00 00:00:00', 5, 'Event', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events_users`
--

CREATE TABLE `events_users` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `present` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_users`
--

INSERT INTO `events_users` (`id`, `event_id`, `user_id`, `present`) VALUES
(4, 104, 94, 0),
(6, 104, 95, 1),
(7, 105, 95, 0),
(8, 104, 99, 1),
(9, 109, 95, 1);

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
  `major` varchar(250) NOT NULL,
  `minor` varchar(250) NOT NULL,
  `level` varchar(40) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `bio` text NOT NULL,
  `photo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `title`, `linkedin`, `phone`, `graduated`, `graduation_year`, `graduation_semester`, `password`, `major`, `minor`, `level`, `state`, `city`, `bio`, `photo_id`) VALUES
(91, 'test', 'test', 'test@test123.com', '', '', '', 0, '0', 'Unknown', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '1', 'Prefer not to answer', '', '', 0),
(92, 'test', 'test', 'test@test12345.com', '', '', '', 0, '', '', '05a671c66aefea124cc08b76ea6d30bb', '', '', '1', '', '', '', 0),
(93, 'Drew', 'Demechko', 'test@test1.com', '', 'www.linkedin.com', '4053127191', 0, '0', 'Unknown', 'b670eab762c7013782d240ea562305e8', '', '', '1', 'Prefer not to answer', '', '', 0),
(94, 'Drew', 'Demechko', 'test@test12.com', '', 'www.linkedin.com', '4053127191', 0, '0', 'Unknown', 'b670eab762c7013782d240ea562305e8', '', '', 'Member', 'Prefer not to answer', '', '', 0),
(95, 'test', 'test', 'testee@test.com', '', '', '', 0, '0', 'Unknown', '16d7a4fca7442dda3ad93c9a726597e4', 'TestMajor, testmajor2', 'testminor', 'Officer', 'Prefer not to answer', '', '', 0),
(96, 'test', 'test', 'test@testee.com', '', 'www.linkedin.com', '4053127191', 0, '0', 'Unknown', 'd41d8cd98f00b204e9800998ecf8427e', '', '', 'Candidate', 'Prefer not to answer', '', '', 0),
(97, 'test', 'test', 'drew.a.demechko@gmail.com', '', 'www.linkedin.com', '4053127191', 0, '0', 'Unknown', 'd41d8cd98f00b204e9800998ecf8427e', '', '', 'Member', 'Prefer not to answer', '', '', 0),
(98, 'test', 'test', 'ddemechko@uco.edu', '', 'www.linkedin.com', '4053127191', 0, '0', 'Unknown', 'd41d8cd98f00b204e9800998ecf8427e', '', '', 'Member', 'Prefer not to answer', '', '', 0),
(99, 'test', 'test', 'test@test124.com', '', '', '', 0, '0', 'Unknown', '16d7a4fca7442dda3ad93c9a726597e4', '', '', 'Candidate', 'Prefer not to answer', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events_users`
--
ALTER TABLE `events_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `events_users`
--
ALTER TABLE `events_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
