-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2016 at 09:53 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookshopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `BookId` int(10) NOT NULL,
  `BookName` varchar(255) NOT NULL,
  `AuthorName` varchar(255) NOT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `Price` double NOT NULL,
  `PublishedYear` int(10) DEFAULT NULL,
  `Edition` int(10) DEFAULT NULL,
  `BookImg` varchar(255) DEFAULT NULL,
  `Availability` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BookId`, `BookName`, `AuthorName`, `Category`, `Price`, `PublishedYear`, `Edition`, `BookImg`, `Availability`) VALUES
(1, 'Teach yourself C', 'Herbrt schildt', 'Programing', 120, 1990, 3, 'BookImg/Teach_yourself_C.jpg', 'YES'),
(2, 'Let us C', 'Y. P. Kanetkar', 'Programing', 150, 2000, 8, 'BookImg/Let_us_C.jpg', 'YES'),
(3, 'Java complete reference', 'Herbrt schildt', 'Programing', 200, 1996, 8, 'BookImg/java.png', 'YES'),
(4, 'Head first Java', ' Kathy Sierra and Bert Bates', 'Programing', 150, 2000, 2, 'BookImg/Head_first.jpg', 'YES'),
(5, 'Operating system concepts', 'Abraham silberschatz', 'Operating system', 180, 1990, 9, 'BookImg/Operating_system.jpg', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `BranchId` int(10) NOT NULL,
  `BranchName` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `ContactNo` varchar(255) NOT NULL,
  `BranchImg` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`BranchId`, `BranchName`, `Location`, `ContactNo`, `BranchImg`) VALUES
(1, 'Dhaka', 'Dhanmondi', '01677190809', 'BranchImg/book1.jpg'),
(3, 'Rajshahi', 'Laxmipur', '01556896939', 'BranchImg/book2.jpg'),
(4, 'Chittagong', 'nakhalpara', '01677190809', 'BranchImg/book3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `CustomerId` int(10) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactNo` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerId`, `UserName`, `Password`, `Address`, `ContactNo`) VALUES
(1, 'Asif', '12345', 'Keshobpur', '01677190809'),
(2, 'Sansa', '12345', 'Dhanmondi', '01556896939'),
(3, 'Masud', '123', 'Kathalbagan,Dhaka', '01778554422');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'asif', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `OrderId` int(10) NOT NULL,
  `CustomerName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactNo` varchar(255) NOT NULL,
  `BookName` varchar(255) NOT NULL,
  `BookName2` varchar(255) DEFAULT NULL,
  `BookName3` varchar(255) DEFAULT NULL,
  `OrderDate` date NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `BookId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderId`, `CustomerName`, `Address`, `ContactNo`, `BookName`, `BookName2`, `BookName3`, `OrderDate`, `CustomerId`, `BookId`) VALUES
(1, 'Asif', 'Kathalbagan,Dhaka', '01677190809', 'Let us C', 'Teach yourself C', 'Head first Java', '2016-02-12', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `StaffId` int(10) NOT NULL,
  `StaffName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactNo` varchar(11) NOT NULL,
  `BranchNo` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffId`, `StaffName`, `Address`, `ContactNo`, `BranchNo`) VALUES
(1, 'Atik', 'Kurigram', '01559774411', 3),
(2, 'Akib', 'Dhaka', '01859663322', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`BookId`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`BranchId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerId`), ADD UNIQUE KEY `UserName` (`UserName`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderId`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `BookId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `BranchId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `StaffId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
