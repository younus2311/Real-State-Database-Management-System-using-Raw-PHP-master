-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2016 at 01:26 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jhalgldr_jubayer`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountant`
--

CREATE TABLE `accountant` (
  `NAME` varchar(50) NOT NULL,
  `Accountant_Id` varchar(50) NOT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountant`
--

INSERT INTO `accountant` (`NAME`, `Accountant_Id`, `Email`) VALUES
('Kamal Akter', '145', 'kamal@yazi.com');

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `Project_Id` varchar(50) NOT NULL,
  `Project_Budget` varchar(50) NOT NULL,
  `Labour_Cost` varchar(50) NOT NULL,
  `Total_AD_Cost` varchar(50) NOT NULL,
  `Insurance_Cost` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`Project_Id`, `Project_Budget`, `Labour_Cost`, `Total_AD_Cost`, `Insurance_Cost`) VALUES
('142', '$1000K', '$500K', '$30K', '$100K'),
('161', '$3500K', '$350K', '$35K', '$400K');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_Id` varchar(50) NOT NULL,
  `Project_id` varchar(50) NOT NULL,
  `Project_Location` varchar(50) NOT NULL,
  `Project_Name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_Id`, `Project_id`, `Project_Location`, `Project_Name`) VALUES
('01', '142', 'Basundhara', 'NSU');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_Id` varchar(50) NOT NULL,
  `Employee_Name` varchar(50) NOT NULL,
  `Employee_Address` varchar(50) NOT NULL,
  `Employee_Salary` varchar(50) NOT NULL,
  `Employee_Email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_Id`, `Employee_Name`, `Employee_Address`, `Employee_Salary`, `Employee_Email`) VALUES
('111', 'Hasan Karim', 'Kamalapur', '$300', 'hasan@yazi.com');

-- --------------------------------------------------------

--
-- Table structure for table `mkt_officer`
--

CREATE TABLE `mkt_officer` (
  `NAME` varchar(50) NOT NULL,
  `Officer_Id` varchar(50) NOT NULL,
  `Billboard_Cost` varchar(50) DEFAULT NULL,
  `Total_Ad_Cost` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mkt_officer`
--

INSERT INTO `mkt_officer` (`NAME`, `Officer_Id`, `Billboard_Cost`, `Total_Ad_Cost`) VALUES
('Gani Mia', '555', '$250K', '$450K');

-- --------------------------------------------------------

--
-- Table structure for table `project_creation`
--

CREATE TABLE `project_creation` (
  `Project_Name` varchar(50) DEFAULT NULL,
  `Project_Id` varchar(50) NOT NULL,
  `Project_Location` varchar(50) DEFAULT NULL,
  `Estimated_Time` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_creation`
--

INSERT INTO `project_creation` (`Project_Name`, `Project_Id`, `Project_Location`, `Estimated_Time`) VALUES
('AIUB', '161', 'Banani', '3 Years'),
('NSU', '142', 'Basundhara', '5 years');

-- --------------------------------------------------------

--
-- Table structure for table `project_manager`
--

CREATE TABLE `project_manager` (
  `Project_id` varchar(50) NOT NULL,
  `Manager_Id` varchar(50) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Project_Name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_manager`
--

INSERT INTO `project_manager` (`Project_id`, `Manager_Id`, `Email`, `Project_Name`) VALUES
('142', '101', 'hasan@nsu.com', 'NSU'),
('161', '105', 'kasem@gmail.com', 'AIUB');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(0, 'adibobaid', 'adibobaid7@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(0, 'adibobaid', 'adbr@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(0, 'adibobaid', 'adbr@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(0, 'adibobaid', 'adbr@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(0, 'jubaiyer', 'jubayer@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(0, 'Jubayer Alam', 'jubayer@xyz.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD KEY `Project_Id` (`Project_Id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD KEY `Project_id` (`Project_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD KEY `Employee_Id` (`Employee_Id`);

--
-- Indexes for table `project_creation`
--
ALTER TABLE `project_creation`
  ADD PRIMARY KEY (`Project_Id`);

--
-- Indexes for table `project_manager`
--
ALTER TABLE `project_manager`
  ADD KEY `Project_id` (`Project_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
