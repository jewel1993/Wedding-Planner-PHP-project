-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 28, 2017 at 09:57 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `happy_wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `fname`, `lname`, `email`, `pass`) VALUES
(1, 'admin', 'admin', 'admin', 'jeweldeepak@gmail.com', '54321');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `uid` int(30) DEFAULT NULL,
  `pid` int(30) DEFAULT NULL,
  `quantity` int(30) DEFAULT NULL,
  `isOrdered` int(10) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`uid`, `pid`, `quantity`, `isOrdered`, `date`, `time`) VALUES
(11, 301, 4, 1, '2017-06-26', '11:41:25'),
(11, 361, 3, 1, '2017-06-26', '11:41:25'),
(11, 309, 1, 0, '0000-00-00', '00:00:00'),
(11, 357, 5, 0, '0000-00-00', '00:00:00'),
(11, 307, 5, 0, '0000-00-00', '00:00:00'),
(13, 301, 5, 1, '2017-06-27', '02:08:45'),
(13, 362, 3, 1, '2017-06-27', '02:08:45'),
(13, 361, 7, 1, '2017-06-27', '02:08:45'),
(13, 301, 0, 0, '0000-00-00', '00:00:00'),
(11, 304, 2, 0, '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` varchar(300) NOT NULL,
  `faq` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `answer` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `msg`, `faq`, `date`, `time`, `answer`) VALUES
(6, 'Harsha', 'harsha@gmail.com', 'Do I Need to Hire a Wedding Planner?', 1, '2017-06-26', '13:55:55', 'Planning a wedding can be stressful.In addition to working within your budget, and saving you from costly mistakes, a planner will save you time and money.'),
(7, 'Bharath', 'bharath@gmail.com', 'Can I Afford a Wedding Planner?', 1, '2017-06-26', '13:56:22', 'A wedding planner should be a part of your overall budget, not an extra expense.'),
(8, 'Jayaram', 'jayaram@gmail.com', 'Are you available on my wedding date?', 0, '2017-06-26', '13:57:17', ''),
(10, 'Annesh', 'annesh@gmail.com', 'What is the cost of the average wedding you plan?', 1, '2017-06-26', '14:00:40', 'Check their range of prices and if they have a minimum wedding budget they will work with.'),
(11, 'Koushik', 'k@gmail.com', 'Have you planned any other weddings at our site?', 0, '2017-06-26', '14:02:01', ''),
(12, 'Vikash', 'vikash@gmail.com', 'How many people on your staff will be at the wedding?', 1, '2017-06-26', '14:03:28', 'Find out how many assistants, coordinators and event stylists your planner will also bring on the day of, so you can be sure everything is handled and you can relax and enjoy the day.');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `type` int(10) NOT NULL,
  `location` varchar(120) NOT NULL,
  `price` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=371 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `type`, `location`, `price`, `name`) VALUES
(301, 1, 'images/stage_decoration/1.jpg', 44, 'Wedding Stage 1'),
(303, 3, 'images/gate/1.jpg', 90, 'Gate Decoration 1'),
(304, 4, 'images/reception/1.jpg', 345, 'Reception Style 1'),
(305, 5, 'images/card/1.jpg', 10, 'Invitation Card 1'),
(306, 6, 'images/dress/1.jpg', 125, 'Wedding Dress 1'),
(307, 1, 'images/stage_decoration/2.jpg', 445, 'Wedding Stage 2'),
(308, 2, 'images/car/4.jpg', 32, 'Car Decoration 4'),
(309, 1, 'images/stage_decoration/8.jpg', 150, 'Wedding Stage 8'),
(310, 4, 'images/reception/5.jpg', 165, 'Reception Style 5'),
(311, 5, 'images/card/2.jpg', 12, 'Invitation Card 2'),
(312, 1, 'images/stage_decoration/3.jpg', 49, 'Wedding Stage 3'),
(313, 6, 'images/dress/5.jpg', 180, 'Wedding Dress 5'),
(314, 4, 'images/reception/2.jpg', 425, 'Reception Style 2'),
(315, 2, 'images/car/2.jpg', 40, 'Car Decoration 2'),
(316, 3, 'images/gate/6.jpg', 135, 'Gate Decoration 6'),
(317, 5, 'images/card/5.jpg', 11, 'Invitation Card 5'),
(318, 6, 'images/dress/7.jpg', 110, 'Wedding Dress 7'),
(319, 5, 'images/card/6.jpg', 15, 'Invitation Card 6'),
(320, 1, 'images/stage_decoration/9.jpg', 50, 'Wedding Stage 9'),
(321, 2, 'images/car/7.jpg', 36, 'Car Decoration 7'),
(322, 3, 'images/gate/4.jpg', 70, 'Gate Decoration 4'),
(323, 5, 'images/card/3.jpg', 15, 'Invitation Card 3'),
(324, 1, 'images/stage_decoration/5.jpg', 125, 'Wedding Stage 5'),
(325, 2, 'images/car/5.jpg', 67, 'Car Decoration 5'),
(326, 3, 'images/gate/7.jpg', 65, 'Gate Decoration 7'),
(327, 1, 'images/stage_decoration/4.jpg', 75, 'Wedding Stage 4'),
(328, 2, 'images/car/9.jpg', 33, 'Car Decoration 9'),
(329, 3, 'images/gate/8.jpg', 125, 'Gate Decoration 8'),
(330, 6, 'images/dress/2.jpg', 128, 'Wedding Dress 2'),
(331, 4, 'images/reception/6.jpg', 185, 'Reception Style 6'),
(332, 3, 'images/gate/5.jpg', 130, 'Gate Decoration 5'),
(333, 3, 'images/gate/10.jpg', 145, 'Gate Decoration 10'),
(334, 2, 'images/car/11.jpg', 50, 'Car Decoration 11'),
(335, 1, 'images/stage_decoration/6.jpg', 135, 'Wedding Stage 6'),
(336, 6, 'images/dress/4.jpg', 148, 'Wedding Dress 4'),
(337, 6, 'images/dress/11.jpg', 128, 'Wedding Dress 11'),
(338, 6, 'images/dress/8.jpg', 170, 'Wedding Dress 8'),
(339, 4, 'images/reception/8.jpg', 385, 'Reception Style 8'),
(340, 5, 'images/card/4.jpg', 16, 'Invitation Card 4'),
(341, 6, 'images/dress/9.jpg', 155, 'Wedding Dress 9'),
(342, 2, 'images/car/8.jpg', 35, 'Car Decoration 8'),
(343, 4, 'images/reception/9.jpg', 345, 'Reception Style 9'),
(344, 4, 'images/reception/4.jpg', 265, 'Reception Style 4'),
(345, 1, 'images/stage_decoration/7.jpg', 86, 'Wedding Stage 7'),
(346, 3, 'images/gate/9.jpg', 155, 'Gate Decoration 9'),
(347, 5, 'images/card/10.jpg', 12, 'Invitation Card 10'),
(348, 2, 'images/car/6.jpg', 26, 'Car Decoration 6'),
(349, 4, 'images/reception/7.jpg', 285, 'Reception Style 7'),
(350, 6, 'images/dress/3.jpg', 138, 'Wedding Dress 3'),
(351, 4, 'images/reception/10.jpg', 525, 'Reception Style 10'),
(352, 1, 'images/stage_decoration/10.jpg', 80, 'Wedding Stage 10'),
(353, 2, 'images/car/3.jpg', 42, 'Car Decoration 3'),
(354, 6, 'images/dress/10.jpg', 158, 'Wedding Dress 10'),
(355, 5, 'images/card/8.jpg', 10, 'Invitation Card 8'),
(356, 5, 'images/card/9.jpg', 9, 'Invitation Card 9'),
(357, 3, 'images/gate/2.jpg', 120, 'Gate Decoration 2'),
(358, 1, 'images/stage_decoration/11.jpg', 90, 'Wedding Stage 11'),
(359, 6, 'images/dress/6.jpg', 130, 'Wedding Dress 6'),
(360, 2, 'images/car/10.jpg', 47, 'Car Decoration 10'),
(361, 4, 'images/reception/3.jpg', 225, 'Reception Style 3'),
(362, 5, 'images/card/7.jpg', 13, 'Invitation Card 7'),
(363, 3, 'images/gate/3.jpg', 110, 'Gate Decoration 3'),
(364, 7, 'images/parlour/1.jpg', 40, 'Parlour Design 1'),
(366, 7, 'images/parlour/2.jpg', 46, 'Parlour Design 2'),
(368, 7, 'images/parlour/3.jpg', 47, 'Parlour Design 3'),
(369, 7, 'images/parlour/4.jpg', 57, 'Parlour Design 4'),
(370, 7, 'images/parlour/5.jpg', 47, 'Parlour Design 5');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `uname` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `image` varchar(100) DEFAULT 'images/users/3.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `fname`, `lname`, `email`, `pass`, `image`) VALUES
(11, 'jewel1993', 'JEWEL', 'SENGUPTA', 'jewelsengupta@gmail.com', '12345', 'images/users/20131219_154837.jpg'),
(12, 'rupesh23', 'Rupesh', 'Kumar', 'r@gmail.com', '12', ''),
(13, 'deepak', 'Deepak', 'Bhure', 'deeapk@gmail.com', '12345', 'images/users/IMG_8794.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
  `uid` int(30) DEFAULT NULL,
  `pid` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`uid`, `pid`) VALUES
(11, 301),
(11, 307);
