-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2016 at 01:12 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `url` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `title` varchar(50) NOT NULL,
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
(100, 'Zac', 'Sorel', 'zachary.sorel@gmail.com', 'Treasurer', 'https://www.linkedin.com/in/zachary-sorel-8161a8a1', '', 0, '1', 'Spring', 'c991ef93d699ab0b2b41eb6d1c97f957', 'Accountancy', '', 'Officer', 'Massachusetts', 'Boston', '<p>Zac is originally from Boston, Massachusetts but grew up mostly in Gilbert, Arizona. He is a Senior studying Accountancy and will pursue a Master&rsquo;s in Accountancy upon graduating with his Bachelor&rsquo;s Degree. Zac previously worked for Wells Fargo Bank and recently completed an internship in accounting and finance with Godaddy.com. He plans to pursue a career in public accounting in an audit function. Zac has been involved with Beta Alpha Psi for one academic year, and he credits it for helping him achieve his goals both academically and in pursuing a career.</p>', 0),
(102, 'George', 'Kemper', 'george.kemper@asu.edu', 'Director of Recruiting', 'https://www.linkedin.com/in/georgewkemper', '', 0, '1', 'Unknown', '66f736a34b4601897b0bc934053f7e20', 'Accountancy', '', 'Officer', 'Arizona', '', '', 0),
(103, 'Allison', 'McClelland', 'allison.mcclelland@asu.edu', 'Director of Internal Communications', 'https://www.linkedin.com/in/allisonmcclelland?authType=NAME_SEARCH&authToken=-xZZ&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A299733474%2CauthType%3ANAME_SEARCH%2Cidx', '', 0, '1', 'Spring', '27d89df1abc506e06bdd563b5793056e', 'Accountancy', '', 'Officer', 'Arizona', 'Tempe', '<p>Allison is&nbsp;from right here in Tempe, Arizona, and I wouldn&rsquo;t have it any other way. She is a senior this year, studying Accountancy. Some of her most recent professional experiences include an accounting internship at the ASU Foundation (a nonprofit that manages the school&rsquo;s donations), a job as a Community Assistant with Barrett, The Honors College, a new job as an ACC 360 TA this semester, teaching WPC 101 this semester, and the successful completion of her honors thesis this past semester. Allison is interested in pursuing tax after graduation, and will be applying for the MTax program this Fall. Her hobbies outside of everything ASU include hiking, family, animals, and baking sweets! Allison has been in BAP since the first semester of her sophomore year.</p>', 0),
(104, 'Kaitlin', 'Culver', 'ksculver@asu.edu', 'Director of External Operations', 'https://www.linkedin.com/in/kaitlin-culver-b66aa193', '', 0, '0', 'Unknown', '0d486c2a519ba592c62a5450a0e0bc09', 'Accountancy, Psychology ', '', 'Officer', 'Arizona', 'Gilbert', '<p>Kaitlin is&nbsp;a senior from Gilbert, Arizona majoring in Accountancy and Psychology. For the past four years, Kaitlin has been an administrative assistant at Culver Equipment. Kaitlin is interested in the field of public accounting, specifically the Audit service line. When she''s not at school or work, she enjoys going hiking and camping and always trying to find new places to explore. Beta Alpha Psi has helped her immensely in learning more about the field of accounting and the opportunities that are available. Kaitlin only learned of Beta Alpha Psi in January of 2016 and became a member and officer in April of 2016.</p>', 0),
(105, 'Jordan', 'Yovanovich', 'jordan.yovanovich@asu.edu', 'Vice President', 'https://www.linkedin.com/in/hunter-moisson-a27a1426', '', 0, '1', 'Spring', 'f6e28487943f895fbdea5112fe91f0c1', 'Accountancy', '', 'Officer', 'Arizona', 'Tempe', '', 0),
(106, 'Hunter', 'Moisson', 'hunter.moisson@asu.edu', 'President', 'https://www.linkedin.com/in/hunter-moisson-a27a1426', '', 0, '1', 'Spring', '9ad0cd69093887f576e9496b68b7460d', 'Accountancy', '', 'Officer', 'Arizona', 'Tempe', '', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
