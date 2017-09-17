-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2017 at 06:56 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cids`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_org`
--

CREATE TABLE `about_org` (
  `id` int(11) NOT NULL,
  `about_org_id` int(11) DEFAULT NULL,
  `summary` text,
  `description` text,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_org`
--

INSERT INTO `about_org` (`id`, `about_org_id`, `summary`, `description`, `added_date`, `updated_date`) VALUES
(1, 1, 'Hub4Growth has published â€˜Developing Employability and Entrepreneurship in Higher Education - Handbook 2017â€™. The publication includes interesting data and examples of good practice in enterprise and employability activities in Higher Education in three EU countries...1223', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;vision Description3&lt;span style=&quot;text-decoration: line-through;&quot;&gt;2323 &amp;nbsp; &amp;nbsp;&lt;/span&gt; &amp;nbsp; &amp;nbsp; &lt;span style=&quot;color: #ff0000;&quot;&gt;DACDACCCXZ&lt;/span&gt;c &amp;nbsp; &amp;nbsp;csdvczvczxvvcvcx&lt;span style=&quot;color: #0000ff;&quot;&gt;vxzvz xz vzvfdvzvzxvcxvxz&amp;nbsp;&lt;span style=&quot;background-color: #3366ff; color: #ffffff;&quot;&gt;vzvzdfvzxvzxcvzxcvxczvxczvvcv &amp;nbsp;z&amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;color: #0000ff;&quot;&gt;&lt;span style=&quot;background-color: #3366ff; color: #ffffff;&quot;&gt;&amp;nbsp; vsdvczxcvzxvczxc&lt;/span&gt;zvzxcvzxcvxzcvxczv&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;vzxcvxczvzxcvcxzvzxcv&lt;span style=&quot;color: #ffff00;&quot;&gt;x&lt;em&gt;&lt;strong&gt;czvxzcvzxcvxcz&lt;/strong&gt;&lt;/em&gt;&lt;em&gt;&lt;strong&gt;&lt;span style=&quot;color: #000000;&quot;&gt;zxcvxczvzxcvzxcv&lt;/span&gt;&lt;/strong&gt;&lt;/em&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;span style=&quot;color: #0000ff;&quot;&gt;&lt;span style=&quot;background-color: #3366ff; color: #ffffff;&quot;&gt;xcvzxcvxzcvvxxzcvzxcvvzxcvxzcv&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', '2017-09-13 17:08:17', '2017-09-16 20:12:23'),
(2, 2, 'contribution summary', 'contribution Description', '2017-09-13 17:09:26', '2017-09-14 11:48:52'),
(3, 3, 'collaboration summary', 'collaboration description', '2017-09-13 17:09:26', '2017-09-14 11:48:59'),
(4, 4, 'Research summary', 'Research description', '2017-09-13 17:09:26', '2017-09-14 11:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `about_org_id`
--

CREATE TABLE `about_org_id` (
  `id` int(11) NOT NULL,
  `about_title` text,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_org_id`
--

INSERT INTO `about_org_id` (`id`, `about_title`, `added_date`, `updated_date`) VALUES
(1, 'Vision and Mission', '2017-09-13 14:07:22', NULL),
(2, 'Contribution to National Development', '2017-09-13 14:07:22', NULL),
(3, 'Collaboration', '2017-09-13 14:07:22', NULL),
(4, 'Research & Technology', '2017-09-13 14:07:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `id` int(11) NOT NULL,
  `event_title` text,
  `event_summary` text,
  `event_description` text,
  `event_location` text,
  `event_date` date DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  `event_type` int(11) NOT NULL DEFAULT '1',
  `status` tinyint(4) DEFAULT '0',
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`id`, `event_title`, `event_summary`, `event_description`, `event_location`, `event_date`, `event_time`, `event_type`, `status`, `added_date`, `updated_date`) VALUES
(15, 'field vist', 'field vistsummary', 'field Description', 'tatopani', '2017-09-15', '02:30:00', 1, 0, '2017-09-15 19:12:46', NULL),
(502, 'Seminar', 'Seminar summary', 'Seminar Description', 'Kathmandu', '2017-09-16', '15:05:00', 1, 0, '2017-09-16 15:05:26', NULL),
(505, 'timeline1', 'timeline1 summary', 'timeline1 Description', 'ktm', '2017-09-15', '15:04:00', 2, 0, '2017-09-16 19:01:28', NULL),
(506, 'timeline2', 'timeline2 summary', 'timeline2 Description', 'Lalitpur', '2017-09-09', '15:02:00', 2, 0, '2017-09-16 19:02:03', NULL),
(507, 'timeline3', 'timeline3 summary', 'timeline3 Description', 'Bhaktapur', '2017-09-28', '03:02:00', 2, 0, '2017-09-16 19:02:43', NULL),
(508, 'timeline4', 'timeline4 summary', 'timeline4 Description', 'kathmandu', '2017-09-22', '14:57:00', 2, 0, '2017-09-16 19:03:18', NULL),
(509, 'timeline5', 'timeline5 summary', 'Timeline5 Description', 'kathmandu', '2017-09-11', '04:03:00', 2, 0, '2017-09-16 19:03:59', NULL),
(510, 'Timeline6', 'Timeline6 Summary', 'Timeline6 Description', 'kathmandu', '2017-09-14', '06:44:00', 2, 0, '2017-09-16 19:04:34', NULL),
(511, 'Timeline7', 'Timeline7 Summary', 'Timeline7 Description', 'Kavre', '2017-09-15', '06:01:00', 2, 0, '2017-09-16 19:05:09', NULL),
(514, 'event10', 'event10 summary', 'Event Description here . text style here', 'kathmandu', '2017-09-14', '00:00:00', 1, 0, '2017-09-16 20:00:53', NULL),
(515, 'rvgsgv', 'fvsvs', 'svsvsdvsdvsvssvfvsvsvsvsvsvsdvs s s vsdvsdfvsd s vsssdfsd s sgss &nbsp; s &nbsp; &nbsp;sgffgsfgsfgsfgsg sfg ssg s s s gsgsfgsffgsdhgh&nbsp; sg sdgsfdg sfd &nbsp; gsrgs gsg s gs gsfd', 'sfdvs', '2017-09-21', '00:00:00', 1, 0, '2017-09-16 20:04:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` text,
  `description` text,
  `status` tinyint(4) DEFAULT '1',
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banner_image`
--

CREATE TABLE `banner_image` (
  `id` int(11) NOT NULL,
  `banner_title` text COLLATE utf8_unicode_ci,
  `banner_id` int(11) DEFAULT NULL,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banner_info`
--

CREATE TABLE `banner_info` (
  `id` int(11) NOT NULL,
  `caption` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banner_info`
--

INSERT INTO `banner_info` (`id`, `caption`, `description`, `added_date`, `updated_date`) VALUES
(1, 'London Bridge', 'London ma bhayeko bridge', '2017-09-16 16:19:01', NULL),
(2, 'London Bridge', 'London ma bhayeko bridge', '2017-09-16 16:33:55', NULL),
(3, 'London Bridge', 'London ma bhayeko bridge', '2017-09-16 16:36:11', NULL),
(4, 'hello', 'hello', '2017-09-16 16:38:25', NULL),
(5, 'London Bridge', 'London ma bhayeko bridge', '2017-09-16 16:45:01', NULL),
(6, 'London Bridge', 'London ma bhayeko bridge', '2017-09-16 16:52:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `description` text,
  `email` varchar(150) DEFAULT NULL,
  `phone` text,
  `fax` varchar(150) DEFAULT NULL,
  `address` text,
  `pobox` varchar(150) DEFAULT NULL,
  `link` text,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `description`, `email`, `phone`, `fax`, `address`, `pobox`, `link`, `added_date`, `updated_date`) VALUES
(1, 'This is Our Contact Info1.', 'admin@test.com', '9876543210', '01-5512647', 'Pulchowk, Lalitpur, Nepal', '7765', 'https://www.facebook.com/nepal', '2017-09-12 15:54:55', '2017-09-16 13:10:01');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8_unicode_ci,
  `message` text COLLATE utf8_unicode_ci,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `fullname`, `email`, `subject`, `message`, `added_date`) VALUES
(1, 'Ansuman', 'smechailes@gmail.com', 'What is your goal?', 'I would like to know what is your goal.', '2017-08-26 10:47:11'),
(2, 'Binod', 'binod@gmail.com', 'hello', 'hello', '2017-08-26 14:24:22'),
(3, 'vavbasdv', 'sdavdawv', 'vdavasdv', 'dssvsda', '2017-09-16 20:53:15'),
(4, 'vavbasdv', 'sdavdawv', 'vdavasdv', 'dssvsda', '2017-09-16 20:54:01'),
(5, 'vasdvasd', 'fdbdfb@ga', 'vasdvsda', 'gadgadsg', '2017-09-16 20:55:22');

-- --------------------------------------------------------

--
-- Table structure for table `member_image`
--

CREATE TABLE `member_image` (
  `id` int(11) NOT NULL,
  `image_title` text COLLATE utf8_unicode_ci,
  `member_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member_image`
--

INSERT INTO `member_image` (`id`, `image_title`, `member_id`) VALUES
(3, 'Hub4Growth-164843201.jpg', NULL),
(4, 'Hub4Growth-228780728.jpg', NULL),
(5, 'Hub4Growth-436747300.jpg', 107),
(6, 'Hub4Growth-33083279.jpg', 110);

-- --------------------------------------------------------

--
-- Table structure for table `org_events`
--

CREATE TABLE `org_events` (
  `id` int(11) NOT NULL,
  `event_title` text COLLATE utf8_unicode_ci,
  `event_location` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `event_summary` text COLLATE utf8_unicode_ci,
  `event_description` text COLLATE utf8_unicode_ci,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `pos_title` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pos_description` text COLLATE utf8_unicode_ci,
  `message` text COLLATE utf8_unicode_ci,
  `added_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `name`, `pos_title`, `pos_description`, `message`, `added_by`, `status`, `added_date`, `updated_date`) VALUES
(1, '', 'CEO', 'Main person of company', NULL, 1, 1, '2017-08-26 14:59:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_password` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `role_id` tinyint(4) DEFAULT NULL,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `user_password`, `status`, `role_id`, `added_date`, `updated_date`) VALUES
(1, 'Admin', 'admin', 'e62a3f6cb73ede63968f989b2c9584f32ec8c420', 1, 1, '2017-08-26 11:06:43', '2017-09-12 14:52:58'),
(2, 'user', 'user', '12dea96fec20593566ab75692c9949596833adc9', NULL, NULL, '2017-09-15 15:43:35', '2017-09-15 15:49:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_org`
--
ALTER TABLE `about_org`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_org_id` (`about_org_id`);

--
-- Indexes for table `about_org_id`
--
ALTER TABLE `about_org_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_info`
--
ALTER TABLE `banner_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_image`
--
ALTER TABLE `member_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `org_events`
--
ALTER TABLE `org_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_org`
--
ALTER TABLE `about_org`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `about_org_id`
--
ALTER TABLE `about_org_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=516;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `banner_info`
--
ALTER TABLE `banner_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `org_events`
--
ALTER TABLE `org_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `about_org`
--
ALTER TABLE `about_org`
  ADD CONSTRAINT `about_org_ibfk_1` FOREIGN KEY (`about_org_id`) REFERENCES `about_org_id` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `org_events`
--
ALTER TABLE `org_events`
  ADD CONSTRAINT `org_events_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `positions`
--
ALTER TABLE `positions`
  ADD CONSTRAINT `positions_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
