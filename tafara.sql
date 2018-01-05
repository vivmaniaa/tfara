-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2015 at 01:15 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tafara`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
`bid` int(6) NOT NULL,
  `date` varchar(10) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `subheading` longtext NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`bid`, `date`, `heading`, `subheading`, `image`) VALUES
(1, '', 'E-bday Cards', 'The term URL - SAVER is used to refer to a record of the address of a file, Web page, or any other data that is used to enable quick access by a user any where any time. Read More', 'images/v1.jpg'),
(2, '', 'Love-Calculator', 'Test your perfect love % by using Love-Calculator (Fun & Entertainment ) web apps! Read More', 'images/v2.jpg'),
(4, '', 'URL-Saver', 'The term URL - SAVER is used to refer to a record of the address of a file, Web page, or any other data that is used to enable quick access by a user any where any time. Read More', 'images/v3.jpg'),
(5, '', 'E-Bday Cards', 'E-Birthday Cards is the best web apps for sending free online e-Cards to your loved ones. This apps also provide the facility to share bdaycard on your friends fb wall. Read More', 'images/v4.jpg'),
(6, '', 'Love-Calculator', 'Test your perfect love % by using Love-Calculator (Fun & Entertainment ) web apps! Read More', '0'),
(12, '', 'Hacking', ' should also add that you ve not seen the last of python either here. I still want to dive into some of the more ..', '0'),
(19, '', 'Hello this is varun dev', 'hello my name is varun dev bassically i belong to delhi as far as my qualification i have done x form cbse board ', '0'),
(20, '', 'Hi karan', 'This mi my fundamental story ', '0'),
(21, '2015-01-12', 'headin ', 'this is my new heading that will be able to choose right option on the given document provide by the authority development end the end of till session ', '0'),
(22, '12-01-15', 'Hello Edwin', 'this is my new heading that will be able to choose right option on the given document provide by the authority development end the end of till session', '0'),
(23, '12-01-15', 'Secure Page', 'headin linke suec ru pae gausef Welcome to the online portfolio of Varun Dev, MCA stundent and designer in Prolofic Dizine Pvt LtdWelcome to the online portfolio of Varun Dev, MCA stundent and designer in Prolofic Dizine Pvt Ltd', '0'),
(24, '12-01-15', 'levon', 'hello varun!', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
 ADD PRIMARY KEY (`bid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
MODIFY `bid` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
