-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 03, 2013 at 04:09 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `review40`
--

-- --------------------------------------------------------

--
-- Table structure for table `affiliated_member`
--

CREATE TABLE `affiliated_member` (
  `name` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `discount` varchar(250) NOT NULL,
  `con` varchar(250) NOT NULL,
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `affiliated_member`
--

INSERT INTO `affiliated_member` (`name`, `city`, `address`, `description`, `discount`, `con`) VALUES
('Excel Center', 'Chittagong', 'Jalil building(Groud Floor), near Mirza pole, Muradpur', 'Coaching Center', '5% to 10%', 'Service'),
('Fatema Pharmacy & Surgical', 'Chittagong', 'agrabad', 'sa', 's', 'sa'),
('Crown Foods Restaurants', 'Chittagong', 'Chittagong Manila Plaza, 4079/A Arakan Road, Bahaddarhat', 'Restaurent', '5%', 'all product'),
('Wellfood', 'Chittagong', 'GEC', 'food', '10%', 'buffet'),
('wellpark', 'chittagong', 'chittagong', 'whatever', '10%', 'n/a');

-- --------------------------------------------------------

--
-- Table structure for table `affiliated_member_contact`
--

CREATE TABLE `affiliated_member_contact` (
  `name` varchar(250) NOT NULL,
  `contact_no` varchar(250) NOT NULL,
  PRIMARY KEY  (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `affiliated_member_contact`
--

INSERT INTO `affiliated_member_contact` (`name`, `contact_no`) VALUES
('Crown Foods Restaurants', '01711320045'),
('Excel Center', '01819602309'),
('Fatema Pharmacy & Surgical', 'saa'),
('Wellfood', '01676634622'),
('wellpark', '01921676767');

-- --------------------------------------------------------

--
-- Table structure for table `card_member`
--

CREATE TABLE `card_member` (
  `card` varchar(250) NOT NULL,
  `member` varchar(250) NOT NULL,
  `mem_address` varchar(250) NOT NULL,
  `mem_contact` varchar(250) NOT NULL,
  `mem_email` varchar(250) NOT NULL,
  `activation_date` date NOT NULL,
  `expire_date` date NOT NULL,
  `status` varchar(250) NOT NULL,
  PRIMARY KEY  (`card`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_member`
--

INSERT INTO `card_member` (`card`, `member`, `mem_address`, `mem_contact`, `mem_email`, `activation_date`, `expire_date`, `status`) VALUES
('123456789012345', 'munrat', 'ctg', '01676634622', 'afifmoonrat@yahoo.com', '2013-02-24', '2014-02-24', 'valid');

-- --------------------------------------------------------

--
-- Table structure for table `review_admin`
--

CREATE TABLE `review_admin` (
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_admin`
--

INSERT INTO `review_admin` (`username`, `password`, `status`) VALUES
('jitu', 'jitu420', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `review_categories`
--

CREATE TABLE `review_categories` (
  `name` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `website` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `details` text NOT NULL,
  `map` varchar(5000) NOT NULL,
  `title_image` varchar(250) NOT NULL,
  `slider_1` varchar(250) NOT NULL,
  `slider_2` varchar(250) NOT NULL,
  `slider_3` varchar(250) NOT NULL,
  PRIMARY KEY  (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_categories`
--

INSERT INTO `review_categories` (`name`, `city`, `location`, `website`, `price`, `details`, `map`, `title_image`, `slider_1`, `slider_2`, `slider_3`) VALUES
('peninsula', 'chittagong', 'bonani', 'n/a', '5000', 'The Peninsula Chittagong Hotel offers a premier setting for conferences, meetings, and corporate events. Treat your colleagues to a gracious environment, where personalized service is the standard. For your next important event, choose from our wide range of meetings rooms and venue options.', '<iframe width="400" height="150" frameborder="0" scrolling="no" marginheight="0"  marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode  =&amp;q=+O.+R.+Nizam+Road+R.+A.,+Chittagong,+Chittagong+Division,+Bangladesh&amp;aq=&amp;  sll=22.170592,91.934692&amp;sspn=1.021202,1.234589&amp;ie=UTF8&amp;hq=&amp;hnear=O.+R.+Nizam+Road+R.+A.,  +Chittagong,+Chittagong+Division,+Bangladesh&amp;t=m&amp;ll=22.359582,91.821778&amp;spn=0.006946,0.00912&amp;  z=16&amp;output=embed"></iframe><br /><small><a class="link" href="http://maps.google.com/maps?f=q&amp;source=embed&amp;  hl=en&amp;geocode=&amp;q=+O.+R.+Nizam+Road+R.+A.,+Chittagong,+Chittagong+Division,+Bangladesh&amp;aq=&amp;sll=22.170592,  91.934692&amp;sspn=1.021202,1.234589&amp;ie=UTF8&amp;hq=&amp;hnear=O.+R.+Nizam+Road+R.+A.,+Chittagong,+Chittagong+Division,  +Bangladesh&amp;t=m&amp;ll=22.359582,91.821778&amp;spn=0.006946,0.00912&amp;z=16"></iframe>', 'upload/slde1.jpg', 'upload/slde2.jpg', 'upload/slde3.jpg', 'upload/slde4.jpg'),
('radisson', 'chittagong', 'GEC', 'www.review40.com', '20000', 'n/a', '<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=GEC,+CDA+Avenue,+Chittagong,+Chittagong+Division,+Bangladesh&amp;aq=0&amp;oq=GEC+chi&amp;sll=37.0625,-95.677068&amp;sspn=36.231745,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=GEC,+CDA+Ave,+Pahartali,+Chittagong,+Chittagong+Division,+Bangladesh&amp;t=m&amp;z=14&amp;ll=22.359031,91.821236&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=GEC,+CDA+Avenue,+Chittagong,+Chittagong+Division,+Bangladesh&amp;aq=0&amp;oq=GEC+chi&amp;sll=37.0625,-95.677068&amp;sspn=36.231745,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=GEC,+CDA+Ave,+Pahartali,+Chittagong,+Chittagong+Division,+Bangladesh&amp;t=m&amp;z=14&amp;ll=22.359031,91.821236" style="color:#0000FF;text-align:left">View Larger Map</a></small>', 'upload/slider-img1.jpg', 'upload/img1.jpg', 'upload/ad1.gif', 'upload/card.jpg'),
('wellpark', 'chittagong', 'GEC', 'www.review40.com', '5000.00', 'n/a', 'n/a', ' ', ' ', ' ', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `review_panel`
--

CREATE TABLE `review_panel` (
  `name` varchar(250) NOT NULL,
  `genre` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_panel`
--

INSERT INTO `review_panel` (`name`, `genre`) VALUES
('wellpark', 'hotel'),
('peninsula', 'hotel'),
('radisson', 'hotel');

-- --------------------------------------------------------

--
-- Table structure for table `subscribed_member`
--

CREATE TABLE `subscribed_member` (
  `email` varchar(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `dname` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `image_name` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  PRIMARY KEY  (`dname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribed_member`
--

INSERT INTO `subscribed_member` (`email`, `fname`, `lname`, `pass`, `dname`, `city`, `image_name`, `url`) VALUES
('afifmoonrat@yahoo.com', 'Afif', 'munrat', 'munni@420', 'munrat', 'Chittagong', 'card.jpg', 'upload/card.jpg'),
('suraiya.akther7@gmail.com', 'suraiya', 'akther', 'moon143', 'sanju', 'Chittagong', 'traveller.jpg', 'upload/traveller.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_review`
--

CREATE TABLE `user_review` (
  `review_item` varchar(250) NOT NULL,
  `reviewer_name` varchar(250) NOT NULL,
  `review_title` varchar(250) NOT NULL,
  `review` text NOT NULL,
  `travel_date` varchar(250) NOT NULL,
  `travel_type` varchar(250) NOT NULL,
  `ratings` int(11) NOT NULL,
  `total_review` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_review`
--

INSERT INTO `user_review` (`review_item`, `reviewer_name`, `review_title`, `review`, `travel_date`, `travel_type`, `ratings`, `total_review`) VALUES
('hotel', '', 'My awesome experience', 'If you ever desired to enjoy the comfort of a 5 star hotel......then you should definitely pay a visit at peninsula hotel', '04/26/2013', '', 0, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `affiliated_member`
--
ALTER TABLE `affiliated_member`
  ADD CONSTRAINT `affiliated_member_ibfk_1` FOREIGN KEY (`name`) REFERENCES `affiliated_member_contact` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
