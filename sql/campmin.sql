-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2017 at 07:26 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendee`
--

CREATE TABLE `attendee` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `interest` varchar(1000) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `religion` varchar(20) DEFAULT NULL,
  `notes` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendee`
--

INSERT INTO `attendee` (`fname`, `lname`, `phone`, `email`, `interest`, `gender`, `religion`, `notes`) VALUES
('', '', '4108786548', 'kazmiseemab@gmail.com', '', 'T', 'Shia Islam ', 'True '),
('Seemab', 'Kazmi', '4108786548', 'kazmiseemab@gmail.com', 'Lector Kairos Becoming Catholic (R.C.I.A or Confirmation)IFYC Interfaith Leadership InstituteCatholic Relief Services (CRS) Leader', 'T', 'Shia Islam ', 'Yes miss '),
('Seemab', 'Kazmi', '4108786548', 'kazmiseemab@gmail.com', 'Lector AMDG Retreat Social Justice ProgramsIgnatianQ LGBTQPIA and Allies ConferenceRetreat Leader', 'F', 'Shia Islam ', 'Ji ');

-- --------------------------------------------------------

--
-- Table structure for table `choir`
--

CREATE TABLE `choir` (
  `fname` varchar(20) NOT NULL,
  `mName` varchar(20) DEFAULT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `cyear` varchar(4) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `experience` varchar(10) DEFAULT NULL,
  `voice` char(1) DEFAULT NULL,
  `instrument` varchar(30) DEFAULT NULL,
  `rmusic` varchar(10) DEFAULT NULL,
  `cantor` varchar(10) DEFAULT NULL,
  `folder` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choir`
--

INSERT INTO `choir` (`fname`, `mName`, `lname`, `address`, `cyear`, `phone`, `email`, `experience`, `voice`, `instrument`, `rmusic`, `cantor`, `folder`) VALUES
('Seemab', 'Qalab', 'Kazmi', '  Parkville MD 21234', '', '410', 'kazmiseemab@gmail.com', 'Yes', 'T', '', 'No', 'Yes', '2'),
('Syed ', 'Zaman', 'Kazmi', '  Parkville MD 21234', '', '410', 'kazmiseemab@gmail.com', 'Yes', 'A', '', 'Yes', 'Yes', '9');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` varchar(8) DEFAULT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `user` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `fname`, `lname`, `user`, `password`) VALUES
('165823', 'Zahara', 'Kazmi', 'zqkazmi', 'lovely23');

-- --------------------------------------------------------

--
-- Table structure for table `interested`
--

CREATE TABLE `interested` (
  `fname` varchar(20) NOT NULL,
  `mname` text,
  `lname` varchar(20) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `interest` varchar(30) DEFAULT NULL,
  `notes` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interested`
--

INSERT INTO `interested` (`fname`, `mname`, `lname`, `phone`, `email`, `interest`, `notes`) VALUES
('Zahara', 'K', 'Kazmi', '4104919809', 'zqkazmi@loyola.edu', '    Chapel Choir', 't'),
('', '', '', '', '', '    ', '');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `pname` varchar(30) DEFAULT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(8) NOT NULL,
  `location` varchar(30) NOT NULL,
  `semester` varchar(4) NOT NULL,
  `attendance` int(2) NOT NULL,
  `etype` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`pname`, `date`, `time`, `location`, `semester`, `attendance`, `etype`) VALUES
('Speed Faithing ', '09-27-2016', '7:00 PM', '4th floor ', 'FA16', 20, 'Interfaith'),
('Speed Faithing ', '09-27-2016', '7:00 PM', '4th floor ', 'FA16', 20, 'Interfaith'),
('Speed Faithing ', '09-27-2016', '7:00 PM', '4th floor ', 'FA16', 20, 'Interfaith');

-- --------------------------------------------------------

--
-- Table structure for table `retreat`
--

CREATE TABLE `retreat` (
  `rName` varchar(30) DEFAULT NULL,
  `semester` varchar(4) DEFAULT NULL,
  `fname` varchar(20) NOT NULL,
  `mName` varchar(20) DEFAULT NULL,
  `lname` varchar(20) NOT NULL,
  `cyear` year(4) NOT NULL,
  `studentId` varchar(7) DEFAULT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `bdate` varchar(10) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `experience` varchar(10) NOT NULL,
  `efname` varchar(20) NOT NULL,
  `elname` varchar(20) NOT NULL,
  `erelation` varchar(20) NOT NULL,
  `eAddress` varchar(100) NOT NULL,
  `ephone` varchar(10) NOT NULL,
  `payment` varchar(20) DEFAULT NULL,
  `dietary` varchar(50) NOT NULL,
  `disability` varchar(50) DEFAULT NULL,
  `outreach` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retreat`
--

INSERT INTO `retreat` (`rName`, `semester`, `fname`, `mName`, `lname`, `cyear`, `studentId`, `gender`, `email`, `phone`, `address`, `bdate`, `religion`, `experience`, `efname`, `elname`, `erelation`, `eAddress`, `ephone`, `payment`, `dietary`, `disability`, `outreach`) VALUES
(NULL, NULL, 'Seemab', 'Q', 'Kazmi', 2017, '1658238', 'M', 'kazmiseemab@gmail.com', '4108786548', 'Seton', '08-21-1995', 'Islam', 'No', 'Seemab', 'Kazmi', 'Myself', '8401 Nunley Drive Apt A  Parkville MD 21234', '4108786548', 'Pay in Person', 'Diet', 'None', 'Other'),
(NULL, NULL, 'Zahara', 'Q', 'Kazmi', 2017, '1658338', 'F', 'kazmiseemab@gmail.com', '4108786548', 'Seton', '08-22-1965', 'Islam', 'Yes', 'Syeda', 'Sakina', 'Mom', '8401 Nunley Drive  Apt A Parkville MD 21234', '4108786548', 'Pay in Person', 'Vegetarian', 'None', 'Campus Flyer/Poster'),
('Kairos', 'FA17', 'Zahara', 'Qalab', 'Kazmi', 2017, '1658238', 'M', 'zqkazmi@loyola.edu', '4104919809', 'Seton', '08-21-1996', 'Islam', 'Yes', 'Seemab', 'Kazmi', 'sis', '8401 Nunley Drive Apt A  Parkville MD 21234', '4108786548', 'Pay in Person', 'Diet', '', 'Other'),
('Kairos', 'FA17', 'Zahara', 'Qalab', 'Kazmi', 2017, '1658238', 'M', 'zqkazmi@loyola.edu', '4104919809', 'Seton', '08-21-1996', 'Islam', 'Yes', 'Seemab', 'Kazmi', 'sis', '8401 Nunley Drive Apt A  Parkville MD 21234', '4108786548', 'Pay in Person', 'Diet', '', 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `wedding`
--

CREATE TABLE `wedding` (
  `wdate` varchar(10) NOT NULL,
  `wtime` varchar(8) NOT NULL,
  `rdate` varchar(10) NOT NULL,
  `rtime` varchar(8) NOT NULL,
  `gfname` varchar(20) NOT NULL,
  `glname` varchar(20) NOT NULL,
  `greligion` varchar(30) NOT NULL,
  `gAddress` varchar(100) NOT NULL,
  `gphone` varchar(10) NOT NULL,
  `gemail` varchar(30) NOT NULL,
  `caffli` varchar(20) NOT NULL,
  `gchurch` varchar(30) NOT NULL,
  `gcaddress` varchar(100) DEFAULT NULL,
  `bfname` varchar(20) NOT NULL,
  `blname` varchar(20) NOT NULL,
  `breligion` varchar(30) NOT NULL,
  `bAddress` varchar(100) NOT NULL,
  `bphone` varchar(10) NOT NULL,
  `bemail` varchar(30) NOT NULL,
  `baffli` varchar(20) NOT NULL,
  `bchurch` varchar(30) NOT NULL,
  `bcaddress` varchar(100) DEFAULT NULL,
  `cfname` varchar(20) NOT NULL,
  `clname` varchar(20) NOT NULL,
  `parish` varchar(30) NOT NULL,
  `paddress` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `ctype` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `interested`
--
ALTER TABLE `interested`
  ADD PRIMARY KEY (`fname`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
