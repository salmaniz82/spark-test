-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2017 at 09:31 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mymvc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `details` text NOT NULL,
  `author` varchar(200) NOT NULL,
  `published_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `details`, `author`, `published_date`) VALUES
(49, 'Basic Routing', 'Basic Routing will provide you quick birds eye view of your entire app easy to track your controller and method. It also provide you flexibility to set developer friendly name in your controller/methods while you keep user friendly route labels.', 'Farhan Ali Khan', '2017-08-17'),
(48, 'This is a new book updated', 'This is a proper edit details. zzz asdfasdfas', 'salman ahmed', '2017-08-24'),
(47, 'This is after the dynamic param feature added', 'Check the details.', 'Farhan Ali Khan', '2017-08-17'),
(45, 'Check\'s Sum', 'Check\'s Sum. ? $ < < // \'\'\' $$ sdfsf', 'Jibran Shahid', '2017-08-17'),
(43, 'Fundamentals of programming', 'This book covers the details essential for new beginners to programming world. zzzThis book covers the details essential for new beginners to programming woThis book covers the details essential for new beginners to programming world. zzzrld. zzzThis book covers the details essential for new beginners to programming world. zzzThis book covers the details essential for new beginners to programming world. zzz', 'Mani', '2017-08-14'),
(44, 'How ARe you ', 'This is how you will enter the basic text to be infiltered.', 'Jibran Shahid', '2017-08-07'),
(52, 'Check to see redirection in the action', 'This should redirect to books with some message', 'salman ahmed', '2017-08-15'),
(53, 'add some', 'alksdjflkajdf', 'salman ahmed', '2017-08-10'),
(54, 'Another Books', 'This is just a detail Edit by user himself.', 'Farhan Ali Khan', '2017-08-17'),
(56, 'This book is added later', 'Check the details here ... See if you can edit this one.', 'hammad', '2017-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'staff'),
(3, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `todo` varchar(250) NOT NULL,
  `date_created` date NOT NULL,
  `date_complited` date DEFAULT NULL,
  `is_complited` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `user_id`, `todo`, `date_created`, `date_complited`, `is_complited`) VALUES
(188, 3, 'adjust some thing', '2017-08-12', '2017-08-12', 0),
(189, 3, 'do any thing', '2017-08-12', '2017-08-12', 0),
(190, 3, 'check email', '2017-08-12', '2017-08-12', 1),
(206, 3, 'another one', '2017-08-12', '2017-08-12', 1),
(191, 11, 'hello', '2017-08-12', '2017-08-12', 1),
(193, 11, 'connect to database', '2017-08-12', '2017-08-12', 1),
(194, 1, 'asdfasd', '2017-08-12', NULL, 0),
(195, 1, 'asdfasd', '2017-08-12', NULL, 0),
(196, 1, 'asdfasdf', '2017-08-12', NULL, 0),
(197, 1, 'asdfasdf', '2017-08-12', NULL, 0),
(198, 1, 'asdfasdf', '2017-08-12', NULL, 0),
(199, 1, 'asdfasdf', '2017-08-12', NULL, 0),
(200, 1, 'asdfasdf', '2017-08-12', NULL, 0),
(201, 1, 'asdfasdf', '2017-08-12', NULL, 0),
(202, 1, 'asdfasdf', '2017-08-12', NULL, 0),
(203, 1, 'asdfasdfdas', '2017-08-12', NULL, 0),
(204, 1, 'asdfasdf', '2017-08-12', NULL, 0),
(205, 1, 'asdfasdf', '2017-08-12', NULL, 0),
(207, 1, 'Check Angular', '2017-08-12', '2017-08-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`) VALUES
(1, 1, 'Mani', 'salmaniz.82@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(2, 2, 'salman ahmed', 'sa@isystematic.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(3, 2, 'Farhan Ali Khan', 'farhansagar@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(4, 3, 'Jibran Shahid', 'jibran@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(5, 3, 'Shakeel Sheikh', 'shakeel@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(6, 3, 'Shahid Khan', 'shahid@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(7, 3, 'Gimmy', 'gimmy@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(8, 3, 'John Smith', 'john@domain.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(12, 3, 'taimoor', 'taimoor@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(11, 3, 'hammad', 'hammad@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
