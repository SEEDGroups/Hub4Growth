-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2017 at 06:26 AM
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
(1, 1, 'Hub4Growth has published â€˜Developing Employability and Entrepreneurship in Higher Education - Handbook 2017â€™. The publication includes interesting data and examples of good practice in enterprise and employability activities in Higher Education in three EU countries...', 'vision Description', '2017-09-13 17:08:17', '2017-09-16 17:18:37'),
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
(501, 'test', NULL, NULL, 'everywhere', NULL, NULL, 1, 0, '2017-09-16 14:42:30', NULL),
(502, 'Seminar', 'Seminar summary', 'Seminar Description', 'Kathmandu', '2017-09-16', '15:05:00', 1, 0, '2017-09-16 15:05:26', NULL),
(503, 'Building Construct', 'Construction summary', 'Construction Description', 'Lalitpur', '2017-09-10', '14:30:00', 1, 0, '2017-09-16 15:06:42', NULL),
(504, 'timeline1', 'timeline1 summary', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;&lt;span style=&quot;background-color: #ff0000;&quot;&gt;timeline1&lt;/span&gt; &lt;span style=&quot;color: #33cccc;&quot;&gt;description&lt;/span&gt;&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 'kathmandu', '2017-09-13', '14:52:00', 2, 0, '2017-09-17 15:06:36', NULL),
(505, 'timeline1', 'timeline1 summary', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;&lt;span style=&quot;background-color: #ff0000;&quot;&gt;timeline1&lt;/span&gt; &lt;span style=&quot;color: #33cccc;&quot;&gt;description&lt;/span&gt;&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 'kathmandu', '2017-09-13', '14:52:00', 2, 0, '2017-09-17 15:08:23', NULL),
(506, 'Timeline3', 'Timeline3 summary here', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Timeline3 Description here&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 'Lalitpur', '2017-09-14', '00:00:00', 2, 0, '2017-09-17 15:23:32', NULL),
(507, 'Timeline4', 'Timeline4 Summary here', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;`Timeline4 Description&lt;span style=&quot;color: #00ccff;&quot;&gt; Here&lt;/span&gt;&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 'Bhaktapur', '2017-09-20', '00:00:00', 2, 0, '2017-09-17 15:24:33', NULL),
(508, 'Timeline5', 'Timeline4 Summary here', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Timeline4 Description Here&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 'London', '2017-09-04', '00:00:00', 2, 0, '2017-09-17 15:25:05', NULL),
(509, 'Timeline6', 'Timeline6 Summary here', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;Timeline6 description Here.&lt;span style=&quot;background-color: #000000; color: #ffffff;&quot;&gt; you can input any kind of text&lt;/span&gt; with any&lt;span style=&quot;color: #0000ff;&quot;&gt; color with&lt;em&gt;&lt;strong&gt;&amp;nbsp;&lt;span style=&quot;color: #000000;&quot;&gt;With &lt;span style=&quot;text-decoration: line-through;&quot;&gt;style&lt;/span&gt;&lt;/span&gt;&lt;/strong&gt;&lt;/em&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 'Paris', '2017-09-08', '00:00:00', 2, 0, '2017-09-17 15:27:53', NULL),
(510, 'Timeline7', 'Timeline7 Summary', '&lt;!DOCTYPE html&gt;\r\n&lt;html&gt;\r\n&lt;head&gt;\r\n&lt;/head&gt;\r\n&lt;body&gt;\r\n&lt;p&gt;&lt;em style=&quot;background-color: #ffffff; color: #626262;&quot;&gt;Timeline7 description here. &amp;nbsp;&lt;/em&gt;&lt;span style=&quot;text-decoration: line-through;&quot;&gt;&lt;em&gt;Timeline7 description here. &amp;nbsp;&lt;/em&gt;&lt;/span&gt;&lt;em style=&quot;background-color: #ffffff; color: #626262;&quot;&gt;Timeline7 description here. &amp;nbsp;&lt;/em&gt;&lt;/p&gt;\r\n&lt;/body&gt;\r\n&lt;/html&gt;', 'kathmandu', '2017-09-30', '00:00:00', 2, 0, '2017-09-17 15:32:10', NULL);

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

--
-- Dumping data for table `banner_image`
--

INSERT INTO `banner_image` (`id`, `banner_title`, `banner_id`, `added_date`, `updated_date`) VALUES
(0, 'Hub4Growth-763894352.jpg', 17, '2017-09-16 19:06:19', NULL),
(0, 'Hub4Growth-91394576.jpg', 18, '2017-09-16 19:10:57', NULL),
(0, 'Hub4Growth-840255018.jpg', 19, '2017-09-16 19:12:35', NULL),
(0, 'Hub4Growth-13352050.jpg', 20, '2017-09-16 19:13:19', NULL),
(0, 'Hub4Growth-95320402.jpg', 21, '2017-09-16 19:13:43', NULL),
(0, 'Hub4Growth-442092773.jpg', 22, '2017-09-17 11:23:17', NULL);

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
(19, 'Meeting of Hub4Growth', 'Board members with other faculities', '2017-09-16 19:12:35', NULL),
(20, 'Radio Program in kantipur', 'Radio Program in kantipur', '2017-09-16 19:13:19', NULL),
(21, 'General meeting of Hub4Growth', 'General meeting of Hub4Growth', '2017-09-16 19:13:43', NULL),
(22, 'London Bridge', 'London Bridge', '2017-09-17 11:23:17', NULL);

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
(1, 'This is Our New Contact Info.', '', '9876543210', '', '', '7765', 'fb.com/cids', '2017-09-12 15:54:55', NULL),
(2, 'segs', '', 'sgsfd', '', '', 'gsfgs', '', '2017-09-12 15:58:45', NULL),
(3, '', 'fafadf', 'fadf', 'fadsfad', 'fad', 'afadf', '', '2017-09-12 16:02:17', NULL),
(4, '', 'info@cids.com', '0987654321', '014478332', 'Pulchowk,Lalitpur', '6532', 'fb.com/cidsnepal', '2017-09-12 16:03:50', NULL),
(5, '', 'info@cids.com', '0987654321', '014478332', 'Pulchowk,Lalitpur', '6532', 'fb.com/cidsnepal', '2017-09-12 16:04:29', NULL),
(6, 'dsaf', 'new@cids.com', '9801234567', '5357463', 'ktm', '1242', 'fb.com/cids', '2017-09-12 16:08:01', NULL),
(7, 'efa', 'fjiab@jhsaobvo', 'ue387238', '878987987', 'shfi', '7878', 'ahdfoua/afca', '2017-09-12 16:32:59', NULL),
(8, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec arcu vestibulum, elementum ligula a, finibus augue. Donec euismod, velit et rutrum pulvinar, turpis diam luctus enim, quis egestas neque ex sit amet ipsum. Nunc sit amet interdum massa. Ut tincidunt est eros, sed scelerisque lacus pellentesque ut. Sed augue arcu, auctor non aliquet quis, ultrices quis ante. Donec imperdiet metus ac magna finibus sodales. Donec iaculis urna sollicitudin auctor rhoncus.', 'info@cids.com', '+977-9841806109, +977-9851215787', '+977-1-5525830', 'Pulchowk, Lalitpur, Nepal', '1157', 'https://www.facebook.com/nepal', '2017-09-12 16:53:43', NULL);

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
(2, 'Binod', 'binod@gmail.com', 'hello', 'hello', '2017-08-26 14:24:22');

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
(6, 'Hub4Growth-33083279.jpg', 110),
(7, 'Hub4Growth-685600345.jpg', 111),
(8, 'Hub4Growth-123745189.jpg', 112);

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
  `type` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `name`, `pos_title`, `pos_description`, `message`, `added_by`, `type`, `status`, `added_date`, `updated_date`) VALUES
(107, 'Tej Binod Pandey', 'Researcher', 'A TYPE OF RESSEARCHER', 'dummy text', NULL, 1, 1, '2017-09-16 10:38:05', '2017-09-16 13:23:20'),
(110, 'Samyam Bro', 'Chairperson', 'Chair ma basne manche', 'Chair aaram dai hos', NULL, 0, 1, '2017-09-16 14:20:35', NULL),
(111, 'Ansuman', 'Developer', 'Developer', 'dummy text', NULL, 1, 0, '2017-09-16 18:54:29', NULL),
(112, 'asdfadf', 'asdfa', 'sdfgsdfgs', 'dummy text', NULL, 1, 1, '2017-09-17 13:15:48', NULL);

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
(1, 'Admin', 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', 1, 1, '2017-08-26 11:06:43', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=511;
--
-- AUTO_INCREMENT for table `banner_info`
--
ALTER TABLE `banner_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `member_image`
--
ALTER TABLE `member_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `org_events`
--
ALTER TABLE `org_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

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
