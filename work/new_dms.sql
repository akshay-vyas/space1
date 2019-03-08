-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 06, 2019 at 04:48 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_dms`
--

-- --------------------------------------------------------

--
-- Table structure for table `designation_details`
--

CREATE TABLE `designation_details` (
  `designation_id` int(11) NOT NULL,
  `designation_name` text NOT NULL,
  `designation_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation_details`
--

INSERT INTO `designation_details` (`designation_id`, `designation_name`, `designation_status`) VALUES
(2, 'technician', '0'),
(3, 'service adviser', '0'),
(4, 'final inspector', '0'),
(5, 'supervisor', '0'),
(6, 'sales executive', '0'),
(7, 'wash person', '0'),
(8, 'accountant', '0'),
(9, 'painter', '0'),
(10, 'tinker', '0'),
(11, 'electrician', '0'),
(12, 'xyz', '0'),
(13, 'xyz', '0');

-- --------------------------------------------------------

--
-- Table structure for table `employee_designation`
--

CREATE TABLE `employee_designation` (
  `employee_designation_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `employee_designation_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_designation`
--

INSERT INTO `employee_designation` (`employee_designation_id`, `employee_id`, `designation_id`, `employee_designation_status`) VALUES
(1, 17, 5, 0),
(2, 17, 2, 0),
(3, 17, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `employee_id` int(11) NOT NULL,
  `garage_id` int(11) NOT NULL,
  `employee_name` text NOT NULL,
  `employee_code` text NOT NULL,
  `employee_mobile` varchar(20) NOT NULL,
  `employee_email` varchar(60) NOT NULL,
  `employee_address` varchar(100) NOT NULL,
  `employee_country` text NOT NULL,
  `employee_state` text NOT NULL,
  `employee_city` text NOT NULL,
  `employee_landline` varchar(20) NOT NULL,
  `employee_birthdate` date NOT NULL,
  `employee_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`employee_id`, `garage_id`, `employee_name`, `employee_code`, `employee_mobile`, `employee_email`, `employee_address`, `employee_country`, `employee_state`, `employee_city`, `employee_landline`, `employee_birthdate`, `employee_status`) VALUES
(10, 1, 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', '2019-03-05', 0),
(11, 1, 'aaa', 'aaa', '09934343333', 'aaa@gmail.com', 'banglore', 'India', 'karnataka', 'banglore', 'karnataka', '2019-03-19', 0),
(12, 1, 'aaa', 'aaa', '09934343333', 'aaa@gmail.com', 'banglore', 'India', 'karnataka', 'banglore', 'karnataka', '2019-03-19', 0),
(15, 1, '', 'aaa', '', '', '', '', '', '', '', '0000-00-00', 0),
(16, 1, '', 'asd', '', '', '', '', '', '', '', '0000-00-00', 0),
(17, 1, 'kumar', '123', '9945047993', 'kumar@gmail.com', 'mys', 'india', 'karnataka', 'mys', '1111111', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `garage_info`
--

CREATE TABLE `garage_info` (
  `garage_id` int(11) NOT NULL,
  `registration_id` int(11) NOT NULL,
  `garage_name` text NOT NULL,
  `garage_address` varchar(100) NOT NULL,
  `garage_city` text NOT NULL,
  `garage_area` text NOT NULL,
  `garage_pincode` text NOT NULL,
  `garage_service_number` text NOT NULL,
  `garage_sales_number` text NOT NULL,
  `garage_gst` text NOT NULL,
  `garage_type` text NOT NULL,
  `garage_gst_number` text NOT NULL,
  `garage_sms_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `garage_info`
--

INSERT INTO `garage_info` (`garage_id`, `registration_id`, `garage_name`, `garage_address`, `garage_city`, `garage_area`, `garage_pincode`, `garage_service_number`, `garage_sales_number`, `garage_gst`, `garage_type`, `garage_gst_number`, `garage_sms_name`) VALUES
(1, 5, 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', '8123326329', '8123326329', 'NO', 'Two and Four Wheeler', '', 'BIIOTP'),
(4, 6, 'akshay garage', 'banglore', 'banglore', 'btm', '01', '8123619432', '8123619432', 'YES', 'Two and Four Wheeler', '', 'BIIOTP');

-- --------------------------------------------------------

--
-- Table structure for table `oem_details`
--

CREATE TABLE `oem_details` (
  `oem_id` int(11) NOT NULL,
  `oem_name` text NOT NULL,
  `oem_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oem_details`
--

INSERT INTO `oem_details` (`oem_id`, `oem_name`, `oem_status`) VALUES
(3, 'ok', '0'),
(4, 'honda', '0'),
(5, 'bajaj', '0'),
(6, 'YAMAHA', '0');

-- --------------------------------------------------------

--
-- Table structure for table `oem_vehicle_details`
--

CREATE TABLE `oem_vehicle_details` (
  `oem_vehicle_id` int(11) NOT NULL,
  `oem_id` int(11) NOT NULL,
  `oem_model` text NOT NULL,
  `oem_vehicle_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oem_vehicle_details`
--

INSERT INTO `oem_vehicle_details` (`oem_vehicle_id`, `oem_id`, `oem_model`, `oem_vehicle_status`) VALUES
(1, 0, 'activa', '0'),
(2, 0, '', '0'),
(3, 4, 'activa', '0'),
(4, 3, 'okay', '0'),
(5, 6, 'rx 100', '0');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `registration_id` int(11) NOT NULL,
  `owner_name` text NOT NULL,
  `owner_mobile` text NOT NULL,
  `owner_email` varchar(50) NOT NULL,
  `owner_password` varchar(20) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `owner_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`registration_id`, `owner_name`, `owner_mobile`, `owner_email`, `owner_password`, `registration_date`, `owner_status`) VALUES
(5, 'indu', '8123326329', 'indu@gmail.com', '123', '2019-02-26 06:16:39', '0'),
(6, 'akshay', '8123619432', 'akshay@gmail.com', '123', '2019-02-26 06:17:27', '0'),
(7, 'vyas', '8123619432', 'vyas@gmail.com', '123', '2019-02-26 06:18:03', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `designation_details`
--
ALTER TABLE `designation_details`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `employee_designation`
--
ALTER TABLE `employee_designation`
  ADD PRIMARY KEY (`employee_designation_id`);

--
-- Indexes for table `employee_details`
--
ALTER TABLE `employee_details`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `garage_info`
--
ALTER TABLE `garage_info`
  ADD PRIMARY KEY (`garage_id`);

--
-- Indexes for table `oem_details`
--
ALTER TABLE `oem_details`
  ADD PRIMARY KEY (`oem_id`);

--
-- Indexes for table `oem_vehicle_details`
--
ALTER TABLE `oem_vehicle_details`
  ADD PRIMARY KEY (`oem_vehicle_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`registration_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `designation_details`
--
ALTER TABLE `designation_details`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `employee_designation`
--
ALTER TABLE `employee_designation`
  MODIFY `employee_designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `garage_info`
--
ALTER TABLE `garage_info`
  MODIFY `garage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `oem_details`
--
ALTER TABLE `oem_details`
  MODIFY `oem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `oem_vehicle_details`
--
ALTER TABLE `oem_vehicle_details`
  MODIFY `oem_vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `registration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
