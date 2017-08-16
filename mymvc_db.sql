-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2017 at 04:48 PM
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
(59, 'New book added after spa integration', 'This to demonstrate that all exisiting funcitonaity is working after implementing Angular Integration.', 'Mani', '2017-08-17'),
(58, 'This is the book ccccc', 'We can add this thing over here ...', 'Mani', '2017-08-15'),
(56, 'This book is added later zzz', 'This book is also edited by me.', 'hammad', '2017-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `contents` text NOT NULL,
  `featureImage` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `contents`, `featureImage`) VALUES
(1, 'home', '/', '<p class="desc">This is a minimal MVC - Framework written in PHP using OOD i.e Object Oriented Design. its constanly going under fine tuning and refractoring We opplogize if you encountered any incovenience while using this framwork This is usefull when available framework and CMS is just an overkill for you application or simple doest have the flexibilty.</p>\r\n<p class="desc">This will give you flavour of MVC and yet keep the door open customization and flexibility. Future plans to have support for the following features. Routing, Controller Mapping and CRUD Functionality already added and working</p>\r\n<ul class="features">\r\n<li>- Routing handling with anonymous function (done)</li>\r\n<li>- Routing handling with contollers and method (done)</li>\r\n<li>- Basic Authentication i.e login / registration (done)</li>\r\n<li>- RESTFUL Route Processing (done)</li>\r\n<li>- Route Parameters generation and accessabality (done)</li>\r\n<li>- Basic Database CRUD Support (done)</li>\r\n<li>- JSON API (done : at core level its working need to make it more robust )</li>\r\n<li>- Role Based Authorization</li>\r\n<li>- Adding Active Class&nbsp;</li>\r\n<li>- Middleware</li>\r\n<li>- Form Validation</li>\r\n<li>- CSRF Protection</li>\r\n<li>- SQl Injection Protection</li>\r\n<li>- Database Relationship Mapping</li>\r\n<li>- JWT Authentication</li>\r\n<li>- Local for Multilang Feature</li>\r\n<li>- CMS Built Test Is on Going</li>\r\n<li>- CMS Ideally will be working on how can pages be added or removed from backend including menu bulding.</li>\r\n<li>- Social login i.e facebook</li>\r\n<li>- Cart Manger</li>\r\n<li>- Dynamic Menu Bulding</li>\r\n<li>- Ecommerce Site&nbsp;</li>\r\n<li>- Payment Integration</li>\r\n<li>- Multilevel Category Support</li>\r\n</ul>\r\n<p class="desc">Different nature of build test is going on using this framework as weak points are discovered these are addressed for better solution</p>\r\n<p class="desc">So far so good it\'s already doing things very simple and easy</p>', 'someimage.png'),
(2, 'products', '/products', 'This is the content for products\r\nThis is the content for products\r\nThis is the content for products\r\nThis is the content for products\r\nThis is the content for productsThis is the content for products\r\nThis is the content for products', 'someimage.png'),
(3, 'services', '/services', '<p>Why I even think to go into the troulble for creating my own MVC framwork when we already have some ready made polished and well known framework available.</p>\r\n<p>The reason is very simple whenever we have to develop any application we have list of available options like Wordpress, CodeIgnitor, JoomLa or Laravel.</p>\r\n<p>They are no doubt very big names and do very well what they meant for but the problem what I am trying to address is different I am not trying to compete with these technologies and if I be honest I will never be able to but what if you have a situation when you have to build something on your own and don\'t have a time to a deep dive of learning curve for getting familar with available technologies.</p>\r\n<p>If you have somethig realy big you should go ahead.</p>\r\n<p>When I first start learn about MVC stuff somewhere in the middle I felt lost somewhere not sure what I was doing then I encountered with Laravel despite all common features which all framework offers I was really amazed by the routing system that laravel provides it provides a birds eye view of your entire application what is there and where each request is going handled and closures on the fly.<br /><br />I took inspiration from laravel RESTFUL routing system and luckily I got it not as much as they did but still its work amazing well to suit the bare minimum requirement the routing of laravel has lot more feature.</p>\r\n<p>Then I thought why do things avoiding the headaches of procedural coding and do things in more elegant the best MVC offers is &nbsp;a seperation of concerns solves many issues that you may encounter unexpectedly.</p>\r\n<p>In this framworking routing system with closure and mapping each request to decided controller method is working so then I felt lacking database integration to this it was done then I felt why not add a authentication system&nbsp;</p>\r\n<p>Then it was done it was looking prety well then I thought why not test it by making some routine test projects as i moved forward then I encountered some weakness and points for improvements and still I am in a journey my aid is not to make it complicated but to keep it simple as natural as possible.</p>\r\n<p>So that developers who are used to procedural way of doing will still feel comformatable by not introducing too much built in method and functionality but the seperation of concerns is the key I as was developing test projects I was having fun then I realized how powerful and clean this is going.</p>', 'someimage.png'),
(4, 'contact', '/contact', '<p>this is the content for contact page</p>\r\n<p>When the page is updated when done it must return to public area and show the updated area. zz</p>', 'some-image-contact.png');

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
(222, 1, 'Inserted with SPA with curl', '2017-08-13', '2017-08-13', 0),
(240, 1, 'alksjdflkdas', '2017-08-13', '2017-08-13', 1),
(234, 1, 'todo api implemented', '2017-08-13', '2017-08-13', 1),
(235, 1, 'tested working fine with ', '2017-08-13', NULL, 0),
(221, 1, 'Checking status code', '2017-08-13', '2017-08-13', 1),
(246, 1, 'asdfasdf', '2017-08-13', NULL, 0),
(213, 1, 'asdfasdf', '2017-08-13', NULL, 0),
(214, 1, 'asdfadf', '2017-08-13', NULL, 0),
(215, 1, 'asdfasdf', '2017-08-13', NULL, 0),
(216, 1, 'asdfasdf', '2017-08-13', '2017-08-13', 0),
(245, 1, 'laksjdfl', '2017-08-13', NULL, 0),
(218, 1, 'check after seperation', '2017-08-13', '2017-08-13', 0),
(219, 1, 'Inserted with SPA with curl', '2017-08-13', '2017-08-13', 0),
(220, 1, 'Added Via Terminal', '2017-08-13', '2017-08-13', 0),
(223, 1, 'changes were done in branches', '2017-08-13', '2017-08-13', 0),
(238, 1, 'pakistan zindabad', '1947-08-14', '2017-08-13', 1),
(247, 1, 'asdfa', '2017-08-13', NULL, 0),
(248, 1, 'asdasdf', '2017-08-13', NULL, 0),
(239, 1, 'Hello world', '1947-08-14', NULL, 0),
(249, 3, 'asdfasd', '2017-08-13', NULL, 0),
(250, 3, 'asdfasdf', '2017-08-13', NULL, 0),
(251, 3, 'asdfasdf', '2017-08-13', '2017-08-13', 1),
(252, 3, 'asdfa', '2017-08-13', '2017-08-13', 1),
(253, 3, 'asdfa', '2017-08-13', '2017-08-13', 0),
(254, 3, 'check if this works', '2017-08-13', '2017-08-13', 0),
(255, 11, 'add some todo', '2017-08-13', '2017-08-14', 0),
(256, 11, 'add some todo', '2017-08-13', '2017-08-14', 0),
(257, 11, 'where can you add these todos', '2017-08-13', '2017-08-14', 0),
(258, 11, 'check this', '2017-08-13', '2017-08-14', 0),
(259, 11, 'one', '2017-08-13', '2017-08-14', 0),
(274, 1, 'sdfdf', '2017-08-15', NULL, 0),
(275, 1, 'sdfsdf', '2017-08-15', NULL, 0),
(276, 1, 'sdfsdf', '2017-08-15', NULL, 0),
(277, 1, 'sdfsdf', '2017-08-15', NULL, 0),
(278, 1, 'decoded', '2017-08-15', NULL, 0),
(279, 1, 'seldom', '2017-08-15', NULL, 0),
(280, 1, 'welcome', '2017-08-15', NULL, 0),
(281, 1, 'wilson', '2017-08-15', NULL, 0),
(282, 1, 'heloween', '2017-08-15', NULL, 0),
(283, 1, 'add', '2017-08-15', NULL, 0),
(284, 1, 'add', '2017-08-15', NULL, 0),
(285, 1, 'check and see', '2017-08-15', NULL, 0),
(286, 1, 'what is what and what is not', '2017-08-15', NULL, 0),
(287, 1, 'see who is uusing what', '2017-08-15', NULL, 0),
(288, 1, 'if you can do it all can do it', '2017-08-15', NULL, 0),
(289, 1, 'see me', '2017-08-15', NULL, 0),
(290, 1, 'what is not', '2017-08-15', NULL, 0),
(291, 1, 'hello and welcome to my kindom', '2017-08-15', NULL, 0),
(292, 1, 'this is working realy amazingly well', '2017-08-15', NULL, 0),
(293, 1, 'how to set only one record at a time', '2017-08-15', NULL, 0),
(294, 1, 'this is not what i wanted to do', '2017-08-15', NULL, 0),
(295, 1, 'i just want to have a only only record updated', '2017-08-15', NULL, 0),
(296, 1, 'you must have the very last id', '2017-08-15', NULL, 0),
(297, 1, 'you need to have last id of todo', '2017-08-15', NULL, 0),
(298, 1, 'suppose you have id of 30', '2017-08-15', NULL, 0),
(299, 1, 'that new record will have id of 31', '2017-08-15', NULL, 0),
(300, 1, 'so you need udpate your list where id is greater then 30', '2017-08-15', NULL, 0),
(301, 1, 'this way all the users you have added record id of > 30 will all have it', '2017-08-15', NULL, 0),
(302, 1, 'sdasdfa', '2017-08-15', NULL, 0),
(303, 1, 'asdfasdf', '2017-08-15', NULL, 0),
(304, 1, 'asdfasdf', '2017-08-15', NULL, 0),
(305, 1, 'asdfasdf', '2017-08-15', NULL, 0),
(306, 1, 'asdfasdf', '2017-08-15', NULL, 0),
(307, 1, 'asdfasdf', '2017-08-15', NULL, 0),
(308, 1, 'asdfasdf', '2017-08-15', NULL, 0),
(309, 1, 'asdfasdf', '2017-08-15', NULL, 0),
(310, 1, 'asdfasdf', '2017-08-15', NULL, 0),
(311, 1, 'asdfasdf', '2017-08-15', NULL, 0),
(312, 1, 'asdfasdf', '2017-08-15', NULL, 0),
(313, 1, 'asdfasdf', '2017-08-15', NULL, 0),
(314, 1, 'asdfasdf', '2017-08-15', NULL, 0),
(315, 1, 'asdfasdf', '2017-08-15', NULL, 0),
(316, 1, 'asdfasdf', '2017-08-15', NULL, 0),
(317, 1, 'asdfasdf', '2017-08-15', NULL, 0),
(318, 1, 'asdfasdf', '2017-08-15', NULL, 0),
(319, 1, 'sdlfkldkf;ldkff', '2017-08-15', NULL, 0),
(320, 1, 'asdfasdf', '2017-08-15', NULL, 0),
(321, 1, 'asdfaf', '2017-08-15', NULL, 0),
(322, 1, 'asdfaf', '2017-08-15', NULL, 0),
(323, 1, 'asdfasdf', '2017-08-15', NULL, 0),
(324, 1, 'asdfasdf', '2017-08-15', NULL, 0),
(325, 1, 'asdfasdf', '2017-08-15', NULL, 0),
(326, 1, 'hello', '2017-08-15', NULL, 0),
(327, 1, 'this is amazing thing to happen all the time', '2017-08-15', '2017-08-15', 1),
(328, 1, 'wow', '2017-08-15', NULL, 0),
(329, 1, 'I add one more', '2017-08-15', NULL, 0),
(330, 1, 'check add', '2017-08-15', NULL, 0),
(331, 1, 'check add', '2017-08-15', NULL, 0),
(332, 1, 'sdfsdf', '2017-08-15', NULL, 0),
(333, 1, 'asdfasdf', '2017-08-15', NULL, 0),
(334, 1, 'check add', '2017-08-15', NULL, 0),
(335, 1, 'check add', '2017-08-15', NULL, 0),
(336, 1, 'need to switch user id for other users', '2017-08-15', NULL, 0),
(337, 1, 'check email', '2017-08-15', NULL, 0),
(338, 1, 'check email', '2017-08-15', NULL, 0),
(339, 1, 'do some important work', '2017-08-15', '2017-08-15', 1),
(340, 1, 'check add', '2017-08-15', NULL, 0),
(341, 1, 'add todo via angular', '2017-08-15', '2017-08-15', 0),
(342, 1, 'test', '2017-08-15', '2017-08-15', 0),
(343, 1, 'check', '2017-08-15', '2017-08-15', 0),
(344, 1, 'check add after ui router implementation', '2017-08-15', NULL, 0),
(345, 1, 'this is how you will add', '2017-08-15', NULL, 0),
(346, 1, 'add with angular', '2017-08-15', NULL, 0),
(347, 1, 'added with web', '2017-08-15', NULL, 0),
(348, 1, 'latest thing added', '2017-08-15', NULL, 0),
(349, 1, 'added via angular', '2017-08-15', NULL, 0),
(350, 1, 'add new', '2017-08-15', NULL, 0),
(351, 1, 'check this', '2017-08-15', NULL, 0),
(352, 1, 'add', '2017-08-15', NULL, 0),
(353, 1, 'new one', '2017-08-15', NULL, 0),
(354, 1, 'see to hapen in your eyes', '2017-08-15', NULL, 0),
(355, 1, 'quick fast & very much snappy data insertion', '2017-08-15', NULL, 0);

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
(11, 3, 'hammad', 'hammad@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(13, 3, '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=356;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
