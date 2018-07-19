-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 23, 2017 at 07:21 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `details` text NOT NULL,
  `author` varchar(200) NOT NULL,
  `published_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `details`, `author`, `published_date`) VALUES
(61, 'cehck add', 'This is clean details', 'hammad', '2017-08-10'),
(49, 'Basic Routing', 'Basic Routing will provide you quick birds eye view of your entire app easy to track your controller and method. It also provide you flexibility to set developer friendly name in your controller/methods while you keep user friendly route labels.', 'Farhan Ali Khan', '2017-08-17'),
(48, 'This is a new book updated', 'This is a proper edit details. zzz asdfasdfas', 'salman ahmed', '2017-08-24'),
(47, 'This is after the dynamic param feature added', 'Check the details.', 'Farhan Ali Khan', '2017-08-17'),
(62, 'adding new book for testing', 'This is just to add new book after refactor', 'hammad', '2017-08-16'),
(45, 'Check\'s Sum', 'Check\'s Sum. ? $ < < // \'\'\' $$ sdfsf', 'Jibran Shahid', '2017-08-17'),
(43, 'Fundamentals of programming', 'This book covers the details essential for new beginners to programming world. zzzThis book covers the details essential for new beginners to programming woThis book covers the details essential for new beginners to programming world. zzzrld. zzzThis book covers the details essential for new beginners to programming world. zzzThis book covers the details essential for new beginners to programming world. zzz', 'Mani', '2017-08-14'),
(44, 'How ARe you ', 'This is how you will enter the basic text to be infiltered.', 'Jibran Shahid', '2017-08-07'),
(52, 'Check to see redirection in the action', 'This should redirect to books with some message', 'salman ahmed', '2017-08-15'),
(53, 'add some', 'alksdjflkajdf', 'salman ahmed', '2017-08-10'),
(54, 'Another Books', 'This is just a detail Edit by user himself.', 'Farhan Ali Khan', '2017-08-17'),
(59, 'New book added after spa integration 2', 'This to demonstrate that all exisiting funcitonaity is working after implementing Angular Integration.', 'Mani', '2017-08-17'),
(58, 'This is the book ccccc', 'We can add this thing over here ...', 'Mani', '2017-08-15'),
(56, 'This book is added later zzz', 'This book is also edited by me.', 'hammad', '2017-08-16'),
(60, 'new book added after refactoriszation', 'new book after refactor', 'hammad', '2017-08-16'),
(63, 'I will be adding a new book here', 'Chek if this this works editng a book', 'Mani', '2017-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`) VALUES
(1, NULL, 'Electronics'),
(2, 1, 'Cameras and Photography'),
(3, 1, 'Computers and Tablets'),
(4, 1, 'Cell Phones and Accessories'),
(5, 1, 'TV and Audio'),
(6, 2, 'Digital Cameras'),
(7, 2, 'Camcorders'),
(8, 2, 'Accessories'),
(9, 3, 'Laptops'),
(10, 3, 'Desktops'),
(11, 3, 'Netbooks'),
(12, 3, 'Tablets'),
(13, 4, 'Cell Phones'),
(14, 4, 'Smartphones'),
(15, 4, 'Accessories'),
(16, 5, 'Televisions'),
(17, 5, 'Home Audio'),
(18, 5, 'Speakers and Subwoofers'),
(19, 16, 'CRT'),
(20, 16, 'LCD'),
(21, 16, 'LED'),
(22, 16, 'Plasma'),
(23, 12, 'Android'),
(24, 12, 'iPad'),
(31, 30, 'Skirts'),
(32, 29, 'Jeans'),
(28, NULL, 'Garments'),
(29, 28, 'Men'),
(30, 28, 'Women'),
(33, 32, 'Denom'),
(34, 32, 'Levis');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `nameEN` varchar(200) NOT NULL,
  `nameAR` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `user_id`, `nameEN`, `nameAR`, `email`, `mobile`, `status`) VALUES
(2, 1, 'farhan', 'farhan', 'farhansaggar@hootmail.com', '321321321', 1),
(7, 3, 'check new', 'check new', 'user@domain.com', '1321321321', 0),
(5, 11, 'check add this', 'check add this', 'user@domain.com', '132132132132', 1),
(6, 3, 'farhan added new', 'farhan added nw ar', 'farhansagar@hotmail.com', '121323132121', 0),
(8, 3, 'taimoor', 'taimoor ar', 'taimoor@gmail.com', '232131321321', 1),
(9, 3, 'check add and clear', 'check clear and add', 'user@domain.com', '1321321321', 0),
(10, 1, 'testing add en', 'testing add ar', 'massni@gmail.com', '2321321213', 1);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

DROP TABLE IF EXISTS `features`;
CREATE TABLE IF NOT EXISTS `features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `featureEN` varchar(200) NOT NULL,
  `featureAR` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `featureEN`, `featureAR`, `status`, `user_id`) VALUES
(23, 'Navigation', 'سي بادجينغ على المقاعد', 1, 33);

-- --------------------------------------------------------

--
-- Table structure for table `lang`
--

DROP TABLE IF EXISTS `lang`;
CREATE TABLE IF NOT EXISTS `lang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_en` varchar(200) NOT NULL,
  `name_ar` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lang`
--

INSERT INTO `lang` (`id`, `name_en`, `name_ar`) VALUES
(1, 'salman en', 'salman ar'),
(2, 'salman en 2', 'salman ar 2'),
(3, 'salman 4', 'hello'),
(4, 'salman en 4', 'salman en 5'),
(5, 'hello world', '?????'),
(6, 'wilson', 'wilson'),
(7, 'hello', 'هالو دنيا'),
(8, 'hello', 'هالو دنيا');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `contents` text NOT NULL,
  `featureImage` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `contents`, `featureImage`) VALUES
(1, 'home', '/', '<p class=\"desc\">This is a minimal MVC - Framework written in PHP using OOD i.e Object Oriented Design. its constanly going under fine tuning and refractoring We opplogize if you encountered any incovenience while using this framwork This is usefull when available framework and CMS is just an overkill for you application or simple doest have the flexibilty.</p>\r\n<p class=\"desc\">This will give you flavour of MVC and yet keep the door open customization and flexibility. Future plans to have support for the following features. Routing, Controller Mapping and CRUD Functionality already added and working</p>\r\n<ul class=\"features\">\r\n<li>- Routing handling with anonymous function (done)</li>\r\n<li>- Routing handling with contollers and method (done)</li>\r\n<li>- Basic Authentication i.e login / registration (done)</li>\r\n<li>- RESTFUL Route Processing (done)</li>\r\n<li>- Route Parameters generation and accessabality (done)</li>\r\n<li>- Basic Database CRUD Support (done)</li>\r\n<li>- JSON API (done : at core level its working need to make it more robust )</li>\r\n<li>- Role Based Authorization</li>\r\n<li>- Adding Active Class&nbsp;</li>\r\n<li>- Middleware</li>\r\n<li>- Form Validation</li>\r\n<li>- CSRF Protection</li>\r\n<li>- SQl Injection Protection</li>\r\n<li>- Database Relationship Mapping</li>\r\n<li>- JWT Authentication</li>\r\n<li>- Local for Multilang Feature</li>\r\n<li>- CMS Built Test Is on Going</li>\r\n<li>- CMS Ideally will be working on how can pages be added or removed from backend including menu bulding.</li>\r\n<li>- Social login i.e facebook</li>\r\n<li>- Cart Manger</li>\r\n<li>- Dynamic Menu Bulding</li>\r\n<li>- Ecommerce Site&nbsp;</li>\r\n<li>- Payment Integration</li>\r\n<li>- Multilevel Category Support</li>\r\n</ul>\r\n<p class=\"desc\">Different nature of build test is going on using this framework as weak points are discovered these are addressed for better solution</p>\r\n<p class=\"desc\">So far so good it\'s already doing things very simple and easy</p>', 'someimage.png'),
(2, 'products', '/products', 'This is the content for products\r\nThis is the content for products\r\nThis is the content for products\r\nThis is the content for products\r\nThis is the content for productsThis is the content for products\r\nThis is the content for products', 'someimage.png'),
(3, 'services', '/services', '<p>Why I even think to go into the troulble for creating my own MVC framwork when we already have some ready made polished and well known framework available.</p>\r\n<p>The reason is very simple whenever we have to develop any application we have list of available options like Wordpress, CodeIgnitor, JoomLa or Laravel.</p>\r\n<p>They are no doubt very big names and do very well what they meant for but the problem what I am trying to address is different I am not trying to compete with these technologies and if I be honest I will never be able to but what if you have a situation when you have to build something on your own and don\'t have a time to a deep dive of learning curve for getting familar with available technologies.</p>\r\n<p>If you have somethig realy big you should go ahead.</p>\r\n<p>When I first start learn about MVC stuff somewhere in the middle I felt lost somewhere not sure what I was doing then I encountered with Laravel despite all common features which all framework offers I was really amazed by the routing system that laravel provides it provides a birds eye view of your entire application what is there and where each request is going handled and closures on the fly.<br /><br />I took inspiration from laravel RESTFUL routing system and luckily I got it not as much as they did but still its work amazing well to suit the bare minimum requirement the routing of laravel has lot more feature.</p>\r\n<p>Then I thought why do things avoiding the headaches of procedural coding and do things in more elegant the best MVC offers is &nbsp;a seperation of concerns solves many issues that you may encounter unexpectedly.</p>\r\n<p>In this framworking routing system with closure and mapping each request to decided controller method is working so then I felt lacking database integration to this it was done then I felt why not add a authentication system&nbsp;</p>\r\n<p>Then it was done it was looking prety well then I thought why not test it by making some routine test projects as i moved forward then I encountered some weakness and points for improvements and still I am in a journey my aid is not to make it complicated but to keep it simple as natural as possible.</p>\r\n<p>So that developers who are used to procedural way of doing will still feel comformatable by not introducing too much built in method and functionality but the seperation of concerns is the key I as was developing test projects I was having fun then I realized how powerful and clean this is going.</p>\r\n<p>&nbsp;</p>\r\n<p>Hello world</p>', 'someimage.png'),
(4, 'contact', '/contact', '<p>this is the content for contact page</p>\r\n<p>Contact details have changed</p>', 'some-image-contact.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `detail` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `thumb` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `detail`, `category_id`, `thumb`) VALUES
(1, 'HP 8000', 'VEry good desktop PC by HP', 10, NULL),
(2, 'Canon D40', 'DSLR Camera by Canon', 2, NULL),
(3, 'LG v10', 'very nice phone by LG', 14, NULL),
(4, 'Lenevo', 'Model 660 9t0', 9, NULL),
(5, 'Sony Vega', 'Sony Vegas Details is here .. ', 16, NULL),
(6, 'Kenwood 7j', 'This is all about kenwood 7j', 17, NULL),
(7, 'LG v10', 'LG V10', 23, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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

DROP TABLE IF EXISTS `todos`;
CREATE TABLE IF NOT EXISTS `todos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `todo` varchar(250) NOT NULL,
  `date_created` date NOT NULL,
  `date_complited` date DEFAULT NULL,
  `is_complited` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=665 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`id`, `user_id`, `todo`, `date_created`, `date_complited`, `is_complited`) VALUES
(641, 1, 'add some', '2017-08-25', NULL, 0),
(642, 11, 'add', '2017-08-25', '2017-08-25', 1),
(644, 1, 'CHECK', '2017-09-11', NULL, 0),
(645, 1, 'check 2', '2017-09-11', NULL, 0),
(646, 1, 'hello', '2017-09-11', '2017-10-14', 0),
(650, 1, 'hello another one', '2017-09-29', '2017-10-14', 0),
(651, 1, 'check this', '2017-10-14', '2017-10-28', 0),
(652, 1, 'add test one', '2017-10-14', '2017-10-30', 0),
(653, 1, 'adding on the fly', '2017-10-14', NULL, 0),
(654, 1, 'hello', '2017-10-30', NULL, 0),
(655, 1, 'new one added', '2017-10-30', '2017-10-30', 1),
(656, 1, 'hamza adding todo via json', '2017-11-01', NULL, 0),
(657, 11, 'add another', '2017-11-04', '2017-11-04', 0),
(658, 1, 'hello from postman', '2017-11-04', NULL, 0),
(659, 1, 'added via postman 2', '2017-11-04', NULL, 0),
(660, 1, 'add', '2017-11-09', NULL, 0),
(661, 2, ' the lateest with curl ', '2017-08-10', '2017-11-10', 1),
(662, 1, 'hello', '2017-12-10', NULL, 0),
(664, 1, 'adding with angular', '2017-12-10', '2017-12-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

DROP TABLE IF EXISTS `user_token`;
CREATE TABLE IF NOT EXISTS `user_token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `user_id`, `token`) VALUES
(1, 11, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjExIiwibmFtZSI6ImhhbW1hZCIsImVtYWlsIjoiaGFtbWFkQGdtYWlsLmNvbSIsInJvbGVfaWQiOiIzIn0=.XsZ3qcAPBg9i3sKcoVe5WmidyEEu/kd/XklkPYPHN8E='),
(2, 1, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjEiLCJuYW1lIjoiTWFuaSIsImVtYWlsIjoic2FsbWFuaXouODJAZ21haWwuY29tIiwicm9sZV9pZCI6IjEifQ==.uqDZZ60AlplG0DQ08YLbT9wxCHgY/XMKszpu+UjrU2U='),
(7, 3, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjMiLCJuYW1lIjoiRmFyaGFuIEFsaSBLaGFuIiwiZW1haWwiOiJmYXJoYW5zYWdhckBob3RtYWlsLmNvbSIsInJvbGVfaWQiOiIyIn0=.0bLIv5CZywg/GJRBcDX9tfemk3LE2hQ7FtDqV6i/exE=');

-- --------------------------------------------------------

--
-- Table structure for table `validity`
--

DROP TABLE IF EXISTS `validity`;
CREATE TABLE IF NOT EXISTS `validity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `casename` varchar(200) CHARACTER SET latin1 NOT NULL,
  `endDate` date NOT NULL,
  `endTime` time NOT NULL,
  `startDate` date NOT NULL,
  `startTime` time NOT NULL,
  `status` varchar(200) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `validity`
--

INSERT INTO `validity` (`id`, `casename`, `endDate`, `endTime`, `startDate`, `startTime`, `status`) VALUES
(1, 'case 01', '2017-10-18', '13:01:00', '2017-10-11', '01:01:00', 'EXPIRED'),
(2, 'case 02', '2017-11-01', '15:01:00', '2017-10-31', '10:58:00', 'ok');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
