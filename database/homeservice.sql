-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 05:07 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `a_login_id` int(11) NOT NULL,
  `a_name` varchar(60) NOT NULL,
  `a_email` varchar(60) NOT NULL,
  `a_password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`a_login_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123456');

-- --------------------------------------------------------

--
-- Table structure for table `assets_id`
--

CREATE TABLE `assets_id` (
  `pid` int(11) NOT NULL,
  `pname` varchar(60) NOT NULL,
  `pdop` date NOT NULL,
  `pava` int(11) NOT NULL,
  `ptotal` int(11) NOT NULL,
  `poriginalcost` int(11) NOT NULL,
  `psellingcost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assets_id`
--

INSERT INTO `assets_id` (`pid`, `pname`, `pdop`, `pava`, `ptotal`, `poriginalcost`, `psellingcost`) VALUES
(1, 'keybord', '0000-00-00', 3, 15, 300, 500),
(2, 'computer', '2022-11-30', 2, 5, 15000, 18000),
(3, 'paint', '2022-11-16', 0, 5, 500, 600);

-- --------------------------------------------------------

--
-- Table structure for table `assignwork`
--

CREATE TABLE `assignwork` (
  `rno` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `request_info` text NOT NULL,
  `request_desc` text NOT NULL,
  `request_name` varchar(60) NOT NULL,
  `request_add1` text NOT NULL,
  `request_add2` text NOT NULL,
  `request_city` varchar(60) NOT NULL,
  `request_state` varchar(60) NOT NULL,
  `request_zip` int(11) NOT NULL,
  `request_email` varchar(60) NOT NULL,
  `request_mobile` bigint(20) NOT NULL,
  `assign_tech` varchar(60) NOT NULL,
  `assign_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignwork`
--

INSERT INTO `assignwork` (`rno`, `request_id`, `request_info`, `request_desc`, `request_name`, `request_add1`, `request_add2`, `request_city`, `request_state`, `request_zip`, `request_email`, `request_mobile`, `assign_tech`, `assign_date`) VALUES
(1, 13, 'laptop screen binking', 'laptop screen blinking', 'rahul', '123', 'krishna park', 'ahmedabad', 'gujarat', 382445, 'patel@gmail.com', 7894561237, 'gaurav', '2022-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tb`
--

CREATE TABLE `customer_tb` (
  `custid` int(11) NOT NULL,
  `custname` varchar(60) NOT NULL,
  `custadd` varchar(60) NOT NULL,
  `cpname` varchar(60) NOT NULL,
  `cpquantity` int(11) NOT NULL,
  `cpeach` int(11) NOT NULL,
  `cptotal` int(11) NOT NULL,
  `cpdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_tb`
--

INSERT INTO `customer_tb` (`custid`, `custname`, `custadd`, `cpname`, `cpquantity`, `cpeach`, `cptotal`, `cpdate`) VALUES
(1, 'gaurav patel', 'abc', 'keybord', 0, 500, 500, '2022-11-13'),
(3, 'gaurav patel', 'kolkata', 'computer', 3, 18000, 54000, '2022-11-20'),
(4, 'rahul', 'ahmedabad', 'keybord', 1, 500, 500, '2022-11-18'),
(5, 'rohan', 'Goa', 'paint', 5, 600, 3000, '2022-11-17');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `r_login_id` int(20) NOT NULL,
  `r_name` varchar(25) NOT NULL,
  `r_email` varchar(30) DEFAULT NULL,
  `r_password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`r_login_id`, `r_name`, `r_email`, `r_password`) VALUES
(1, 'bhavesh', 'patel@gmail.com', '12345'),
(2, 'jeet', 'jeet@gmail.com', '123456789'),
(3, 'gaurav', 'guarav@gmail.com', '12345123'),
(5, 'harsh', 'harsh@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `submitrequest`
--

CREATE TABLE `submitrequest` (
  `request_id` int(11) NOT NULL,
  `request_info` text NOT NULL,
  `request_desc` text NOT NULL,
  `request_name` varchar(60) NOT NULL,
  `request_add1` text NOT NULL,
  `request_add2` text NOT NULL,
  `request_city` varchar(60) NOT NULL,
  `request_state` varchar(60) NOT NULL,
  `request_zip` int(11) NOT NULL,
  `request_email` varchar(60) NOT NULL,
  `request_mobile` bigint(20) NOT NULL,
  `request_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submitrequest`
--

INSERT INTO `submitrequest` (`request_id`, `request_info`, `request_desc`, `request_name`, `request_add1`, `request_add2`, `request_city`, `request_state`, `request_zip`, `request_email`, `request_mobile`, `request_date`) VALUES
(13, 'laptop screen binking', 'laptop screen blinking', 'rahul', '123', 'krishna park', 'ahmedabad', 'gujarat', 382445, 'patel@gmail.com', 7894561237, '2022-11-12'),
(15, 'mobile is not working', 'mobile is not working i do not know about it', 'bhavesh', '45', 'shree park society', 'Ahmedabad', 'Gujarat', 382440, 'patelbhavesh@gmail.com', 7894561230, '2022-11-12'),
(16, 'tubelight not work', 'tubelight not work', 'jeet', '1234', 'vatva', 'Ahmedabad', 'Gujarat', 382440, 'pateljeet@gmail.com', 7894561230, '2022-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `technician_tb`
--

CREATE TABLE `technician_tb` (
  `empid` int(11) NOT NULL,
  `empName` varchar(60) NOT NULL,
  `empCity` varchar(60) NOT NULL,
  `empMobile` bigint(20) NOT NULL,
  `empEmail` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technician_tb`
--

INSERT INTO `technician_tb` (`empid`, `empName`, `empCity`, `empMobile`, `empEmail`) VALUES
(2, 'bhavesh', 'Ahmedabad', 7894561230, 'bhavesh@gmail.com'),
(4, 'gaurav patel', 'Ahmedabad', 7894561230, 'patelbhavesh@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`a_login_id`);

--
-- Indexes for table `assets_id`
--
ALTER TABLE `assets_id`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `assignwork`
--
ALTER TABLE `assignwork`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `customer_tb`
--
ALTER TABLE `customer_tb`
  ADD PRIMARY KEY (`custid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`r_login_id`),
  ADD UNIQUE KEY `r_email` (`r_email`);

--
-- Indexes for table `submitrequest`
--
ALTER TABLE `submitrequest`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `technician_tb`
--
ALTER TABLE `technician_tb`
  ADD PRIMARY KEY (`empid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `a_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assets_id`
--
ALTER TABLE `assets_id`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assignwork`
--
ALTER TABLE `assignwork`
  MODIFY `rno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_tb`
--
ALTER TABLE `customer_tb`
  MODIFY `custid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `r_login_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `submitrequest`
--
ALTER TABLE `submitrequest`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `technician_tb`
--
ALTER TABLE `technician_tb`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
