-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2017 at 06:34 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `civilian`
--

CREATE TABLE `civilian` (
  `Cid` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Mobile_no` int(10) NOT NULL,
  `Email_id` varchar(20) NOT NULL,
  `Aadhar_Card_Verification` int(12) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `civilian`
--

INSERT INTO `civilian` (`Cid`, `Name`, `Password`, `Mobile_no`, `Email_id`, `Aadhar_Card_Verification`, `Address`, `City`, `State`) VALUES
('0', 'ronak', 'kill', 0, 'yokerrekoy@g.com', 123, 'add1', 'state', 'India'),
('61', 'raj', 'rajpass', 7, 'raj@gmail.com', 123, 'raj ka add', 'Vadodra', 'Gujarat'),
('663', 'ronak', 'kill', 890231, 'yokerrekoy28@g.com', 123, 'add1', 'state', 'India'),
('782', 'Ronak', 'kill', 1231232, 'yoker@g.com', 123, 'add1', 'state', 'India'),
('793', 'rocker', 'kill', 909012, 'rocker@g.com', 123, 'add1', 'state', 'India'),
('875', 'ronak', 'kill', 90920010, 'yokerrekoy@g.com', 123, 'add1', 'state', 'India'),
('C1', 'user', 'user', 131, 'user@g.com', 123, 'add1', 'state', 'India'),
('C123', 'anme', 'asjdk', 234234, 'ronak@g.com', 123, 'add1', 'state', 'India'),
('C2', 'user', 'user', 131, 'user@g.com', 123, 'add1', 'state', 'India'),
('C3', 'rounak', 'kill', 131, 'rounak@123', 123, 'add1', 'state', 'India'),
('C4', 'asjk', 'jska', 898, 'jdask', 123, 'add1', 'state', 'India'),
('C5', 'user', 'user', 123, 'user', 123, 'add1', 'state', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `Did` varchar(20) NOT NULL,
  `Item` varchar(20) NOT NULL,
  `Cid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Eid` int(11) NOT NULL,
  `Name` int(11) NOT NULL,
  `Address` int(11) NOT NULL,
  `Oid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Name` varchar(20) NOT NULL,
  `Email id` varchar(20) NOT NULL,
  `Description` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--

CREATE TABLE `myguests` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `organisation`
--

CREATE TABLE `organisation` (
  `Oid` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email_id` varchar(20) NOT NULL,
  `Mobile no` int(10) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Dropoff` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisation`
--

INSERT INTO `organisation` (`Oid`, `Name`, `Password`, `Email_id`, `Mobile no`, `Address`, `Dropoff`, `City`, `State`) VALUES
('123', '', '', '', 0, '', 'drop', '', 'Gujarat'),
('377', '', '', '', 0, '', 'drop', '', 'Gujarat'),
('528', 'orgy', 'orgy', 'orgy@gg.com', 90909, 'orgy adad', 'drop', 'NULL', 'Gujarat'),
('690', 'orgy', 'orgy', 'orgy@g.com', 9090, 'orgyadd', 'drop', '', 'Gujarat'),
('hell2', 'name', 'pass', 'email', 12, 'add', 'drop', 'state', 'country'),
('hello', 'name', 'pass', 'email', 12, 'add', 'drop', 'state', 'country'),
('hello12', 'name', 'pass', 'email', 12, 'add', 'drop', 'state', 'country'),
('hello122', 'asdhj', 'hjs', 'hjs', 889, 'add', 'drop', 'state', 'country'),
('o5', 'org', 'kill', 'org', 123, 'add', 'drop', 'state', 'country'),
('oid', 'org', 'pass', 'emai@ds', 231, 'kdla', 'sadjk', 'jaskd', 'sjkd');

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE `pro` (
  `id` int(5) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`id`, `name`, `email`) VALUES
(1, 'ronak', 'ronak@4coupon.in'),
(1, 'q', 'jdj@d.com'),
(1, 'ronak', 'ronak@4coupon.in');

-- --------------------------------------------------------

--
-- Table structure for table `reciever`
--

CREATE TABLE `reciever` (
  `rid` varchar(20) NOT NULL,
  `Item` varchar(20) NOT NULL,
  `Oid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `vid` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email id` varchar(20) NOT NULL,
  `Eid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `civilian`
--
ALTER TABLE `civilian`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD KEY `Did` (`Did`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Eid`),
  ADD KEY `Oid` (`Oid`);

--
-- Indexes for table `myguests`
--
ALTER TABLE `myguests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organisation`
--
ALTER TABLE `organisation`
  ADD PRIMARY KEY (`Oid`);

--
-- Indexes for table `reciever`
--
ALTER TABLE `reciever`
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`vid`),
  ADD KEY `Eid` (`Eid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myguests`
--
ALTER TABLE `myguests`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `fk_did_id` FOREIGN KEY (`Did`) REFERENCES `civilian` (`Cid`);

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `fk_oid_id` FOREIGN KEY (`Oid`) REFERENCES `organisation` (`Oid`);

--
-- Constraints for table `reciever`
--
ALTER TABLE `reciever`
  ADD CONSTRAINT `fk_rid_id` FOREIGN KEY (`rid`) REFERENCES `organisation` (`Oid`);

--
-- Constraints for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD CONSTRAINT `fk_eid_id` FOREIGN KEY (`Eid`) REFERENCES `event` (`Eid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
