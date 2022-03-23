-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 23 مارس 2022 الساعة 18:15
-- إصدار الخادم: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- بنية الجدول `comments`
--

CREATE TABLE `comments` (
  `postID` int(11) NOT NULL,
  `commentID` int(11) NOT NULL,
  `commentDesc` varchar(500) NOT NULL,
  `commentAuthor` varchar(500) NOT NULL,
  `commentTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `comments`
--

INSERT INTO `comments` (`postID`, `commentID`, `commentDesc`, `commentAuthor`, `commentTime`) VALUES
(7, 19, '          ', 'admin', '2022-03-22 05:54:10'),
(7, 20, '          jehad', 'admin', '2022-03-23 11:00:26'),
(6, 21, '          ', 'admin', '2022-03-23 11:26:42'),
(7, 22, '          ', 'admin', '2022-03-23 11:43:03'),
(7, 23, '          ', 'admin', '2022-03-23 14:12:53'),
(7, 24, '          ', 'admin', '2022-03-23 15:12:37');

-- --------------------------------------------------------

--
-- بنية الجدول `posts`
--

CREATE TABLE `posts` (
  `postID` int(11) NOT NULL,
  `postTitle` varchar(200) NOT NULL,
  `postDesc` varchar(10000) NOT NULL,
  `postTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `postTag` varchar(40) NOT NULL,
  `postAuthor` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `posts`
--

INSERT INTO `posts` (`postID`, `postTitle`, `postDesc`, `postTime`, `postTag`, `postAuthor`) VALUES
(6, 'ACM', '<p><img alt=\"indecision\" src=\"http://localhost/Rwaodphp/PHP_Challenges/challeng9/blog/ckeditor/plugins/smiley/images/whatchutalkingabout_smile.png\" style=\"height:23px; width:23px\" title=\"indecision\" />Sardar Vallabhbhai National Institute Of Technology, Surat is one of the 17 Regional Engineering Colleges that were established as joint venture of the Government of India and the Government of Gujarat. It was established in June 1961 with facilities to run Bachelor&#39;s Degree Programmes in Civil, Electrical and Mechanical Engineering disciplines. It is now changed to National Institute of Technology along with other RECs.&nbsp;<br />\r\n<br />\r\n<br />\r\n<img alt=\"indecision\" src=\"http://localhost/Rwaodphp/PHP_Challenges/challeng9/blog/ckeditor/plugins/smiley/images/whatchutalkingabout_smile.png\" style=\"height:23px; width:23px\" title=\"indecision\" /></p>\r\n', '2022-03-23 11:26:38', 'acm', 'qt'),
(7, 'Jehad', '<p><strong><img alt=\"heart\" src=\"http://localhost/Rwaodphp/PHP_Challenges/challeng9/blog/ckeditor/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" />Problem Statement</strong><br />\r\nGiven an array of stock prices for each day. We need to find out maximum profit that can be earned by one transaction (Buy and sell only one time).<br />\r\n<strong>Example :&nbsp;</strong><br />\r\nTake an example Stock Prices :&nbsp;<strong>100 &ndash; &nbsp;80 &ndash; 120 &ndash; 130 &ndash; 70 &nbsp;&ndash; 60 &nbsp;&ndash; &nbsp;100 &nbsp;&ndash; &nbsp;125.</strong><br />\r\nSo Buy stock at Rs.&nbsp;<strong>60</strong>&nbsp;and sell it at&nbsp;<strong>125</strong>. Maximum profit is&nbsp;<strong>65</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n', '2022-03-23 15:12:52', 'DP', 'qt'),
(17, 'd', '<p>dd</p>\r\n', '2022-03-23 11:30:01', 'd', 'admin'),
(21, 'Coding Acadmey', '<p>This is how to apply to it</p>\r\n', '2022-03-23 15:14:01', '', 'admin');

-- --------------------------------------------------------

--
-- بنية الجدول `posts_buffer`
--

CREATE TABLE `posts_buffer` (
  `postID` int(11) NOT NULL,
  `postTitle` varchar(100) NOT NULL,
  `postDesc` varchar(5000) NOT NULL,
  `postTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `postTag` varchar(20) NOT NULL,
  `postAuthor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `posts_buffer`
--

INSERT INTO `posts_buffer` (`postID`, `postTitle`, `postDesc`, `postTime`, `postTag`, `postAuthor`) VALUES
(17, 'hi', '<p>jjjj</p>\r\n', '2022-03-23 15:17:35', '', 'admin');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `emailid` varchar(40) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usertype` varchar(50) NOT NULL DEFAULT 'normal'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `password`, `emailid`, `createdon`, `usertype`) VALUES
(1, 'jehad', 'Jehad', 'qt', 'qt@gmail.com', '2022-03-23 15:19:30', 'normal'),
(2, 'rtkasodariya', 'jehad', '123', '123@gmail.com', '2022-03-23 15:16:46', 'normal'),
(5, 'expcode', 'Expert Code', 'jehad', 'expcode@gmail.com', '2022-03-23 15:17:04', 'normal'),
(6, 'admin', 'admin', 'admin', 'admin@admin.com', '2015-08-22 13:34:00', 'admin');

-- --------------------------------------------------------

--
-- بنية الجدول `user_post`
--

CREATE TABLE `user_post` (
  `postAuthor` varchar(40) NOT NULL,
  `postID` int(11) NOT NULL,
  `postLikes` int(11) NOT NULL DEFAULT 0,
  `postDisLikes` int(11) NOT NULL,
  `postComments` int(11) NOT NULL DEFAULT 0,
  `postViews` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='User and Post relation Table';

--
-- إرجاع أو استيراد بيانات الجدول `user_post`
--

INSERT INTO `user_post` (`postAuthor`, `postID`, `postLikes`, `postDisLikes`, `postComments`, `postViews`) VALUES
('qt', 1, 4, 0, 0, 20),
('qt', 6, 0, 0, 0, 134),
('qt', 7, 0, 0, 0, 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD UNIQUE KEY `commentID` (`commentID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postID`),
  ADD UNIQUE KEY `postTitle` (`postTitle`);

--
-- Indexes for table `posts_buffer`
--
ALTER TABLE `posts_buffer`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`postID`),
  ADD UNIQUE KEY `postID` (`postID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `posts_buffer`
--
ALTER TABLE `posts_buffer`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
