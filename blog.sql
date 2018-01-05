-- phpMyAdmin SQL Dump
-- version 3.4.3.1
-- http://www.phpmyadmin.net
--
-- Host: fdb13.biz.nf
-- Generation Time: Jul 21, 2015 at 12:41 PM
-- Server version: 5.5.38
-- PHP Version: 5.3.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `1886491_tfara`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `bid` int(6) NOT NULL AUTO_INCREMENT,
  `date` varchar(10) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `subheading` longtext NOT NULL,
  `image` varchar(100) NOT NULL,
  `hStyle` varchar(1000) NOT NULL,
  `hattr` varchar(1000) NOT NULL,
  `pStyle` varchar(1000) NOT NULL,
  `pattr` varchar(1000) NOT NULL,
  `divimage` varchar(1000) NOT NULL,
  `imagestyle` varchar(1000) NOT NULL,
  `imgalt` varchar(1000) NOT NULL,
  `imageatr` varchar(1000) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`bid`, `date`, `heading`, `subheading`, `image`, `hStyle`, `hattr`, `pStyle`, `pattr`, `divimage`, `imagestyle`, `imgalt`, `imageatr`) VALUES
(1, '', 'FACT 1', 'The term URL - SAVER is used to refer to a record of the address of a file, Web page, or any other data that is used to enable quick access by a user any where any time. Read More', 'images/v1.jpg', '', '', '', '', '', '', '', ''),
(2, '', 'Love-Calculator', 'Test your perfect love % by using Love-Calculator (Fun & Entertainment ) web apps! Read More', 'images/v2.jpg', '', '', '', '', '', '', '', ''),
(4, '', 'URL-Saver', 'The term URL - SAVER is used to refer to a record of the address of a file, Web page, or any other data that is used to enable quick access by a user any where any time. Read More', 'images/v4.jpg', '', '', '', '', '', '', '', ''),
(5, '', 'E-Bday Cards', 'E-Birthday Cards is the best web apps for sending free online e-Cards to your loved ones. This apps also provide the facility to share bdaycard on your friends fb wall. Read More', 'images/v5.jpg', '', '', '', '', '', '', '', ''),
(6, '', 'Love-Calculator', 'Test your perfect love % by using Love-Calculator (Fun & Entertainment ) web apps! Read More', 'images/v6.jpg', '', '', '', '', '', '', '', ''),
(12, '', 'Hacking', ' should also add that you ve not seen the last of python either here. I still want to dive into some of the more ..', 'images/v7.jpg', '', '', '', '', '', '', '', ''),
(19, '', 'Hello this is varun dev', 'hello my name is varun dev bassically i belong to delhi.', 'images/v8.jpg', '', '', '', '', '', '', '', ''),
(20, '', 'Hi karan', 'This mi my fundamental story ', 'images/v9.jpg', '', '', '', '', '', '', '', ''),
(21, '2015-01-12', 'headin ', 'this is my new heading that will be able to choose right option on the given document provide by the authority development end the end of till session ', 'images/v10.jpg', '', '', '', '', '', '', '', ''),
(22, '12-01-15', 'Hello Edwin', 'this is my new heading that will be able to choose right option on the given document provide by the authority development end the end of till session', 'images/v11.jpg', '', '', '', '', '', '', '', ''),
(23, '12-01-15', 'Secure Page', 'headin linke suec ru pae gausef Welcome to the online portfolio of Varun Dev, MCA stundent and designer in Prolofic Dizine Pvt LtdWelcome to the online portfolio of Varun Dev, MCA stundent and designer in Prolofic Dizine Pvt Ltd', 'images/v12.jpg', '', '', '', '', '', '', '', ''),
(24, '12-01-15', 'viv', 'You are too <a style="color: #ffbb00; font-weight: bold;">smart</a> to handle uff', 'images/v13.jpg', '', '', '', '', '', '', '', ''),
(25, '', 'Very New Post!', 'But what I should to do, depends on the current element Id.My question is that how can I detect which element called this function? I need to know its id.', 'images/v14.jpg', 'font-size: 2.5em; position: absolute; 	top: 0%; 	\nleft: 50%;', 'class="wow bounceInUp center animated" data-wow-delay="0.5s"  data-wow-duration="1s"', 'font-size: 2em; \nposition: absolute; 	top: 10%;', 'class=" wow swing animated "  data-wow-delay="1.5s"  data-wow-offset="0" ', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
