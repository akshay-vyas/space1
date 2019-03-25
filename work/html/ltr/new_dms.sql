-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 25, 2019 at 08:39 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

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
-- Table structure for table `customer_information`
--

CREATE TABLE `customer_information` (
  `customer_id` int(11) NOT NULL,
  `garage_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_mobile` varchar(15) NOT NULL,
  `customer_email` varchar(60) NOT NULL,
  `customer_address` varchar(150) NOT NULL,
  `customer_aadharcard_no` varchar(20) NOT NULL,
  `customer_pancard_no` varchar(20) NOT NULL,
  `customer_gst_no` varchar(30) NOT NULL,
  `customer_alternate_mobile` varchar(15) NOT NULL,
  `customer_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_information`
--

INSERT INTO `customer_information` (`customer_id`, `garage_id`, `customer_name`, `customer_mobile`, `customer_email`, `customer_address`, `customer_aadharcard_no`, `customer_pancard_no`, `customer_gst_no`, `customer_alternate_mobile`, `customer_status`) VALUES
(2, 1, 'indush', '8123326329', 'indush@gmail.com', '#99', '12345', '1234', '123', '8123619432', '0');

-- --------------------------------------------------------

--
-- Table structure for table `designation_details`
--

CREATE TABLE `designation_details` (
  `designation_id` int(11) NOT NULL,
  `designation_name` varchar(25) NOT NULL,
  `designation_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation_details`
--

INSERT INTO `designation_details` (`designation_id`, `designation_name`, `designation_status`) VALUES
(1, 'Technician', '0'),
(2, 'Service Advisor', '0'),
(3, 'Final Inspector', '0'),
(4, 'Supervisor', '0'),
(5, 'Sales Executive', '0'),
(6, 'Washperson', '0'),
(7, 'Accountant', '0'),
(8, 'Painter', '0'),
(9, 'Tinker', '0'),
(10, 'Electrician', '0');

-- --------------------------------------------------------

--
-- Table structure for table `employee_designation`
--

CREATE TABLE `employee_designation` (
  `employee_designation_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `employee_designation_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_designation`
--

INSERT INTO `employee_designation` (`employee_designation_id`, `employee_id`, `designation_id`, `employee_designation_status`) VALUES
(1, 1, 1, 'Active'),
(2, 1, 2, 'Active'),
(3, 1, 3, 'Active'),
(4, 1, 4, 'Active'),
(5, 1, 5, 'Active'),
(6, 1, 6, 'Active'),
(7, 1, 7, 'Active'),
(8, 1, 8, 'Active'),
(9, 1, 9, 'Active'),
(10, 1, 10, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE `employee_details` (
  `employee_id` int(11) NOT NULL,
  `garage_id` int(11) NOT NULL,
  `employee_name` varchar(50) NOT NULL,
  `employee_code` varchar(20) NOT NULL,
  `employee_mobile` varchar(13) NOT NULL,
  `employee_email` varchar(50) NOT NULL,
  `employee_address` text NOT NULL,
  `employee_country` varchar(20) NOT NULL,
  `employee_state` varchar(30) NOT NULL,
  `employee_city` varchar(30) NOT NULL,
  `employee_landline` varchar(20) NOT NULL,
  `employee_birthday` date NOT NULL,
  `employee_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_details`
--

INSERT INTO `employee_details` (`employee_id`, `garage_id`, `employee_name`, `employee_code`, `employee_mobile`, `employee_email`, `employee_address`, `employee_country`, `employee_state`, `employee_city`, `employee_landline`, `employee_birthday`, `employee_status`) VALUES
(1, 1, 'akshay vyas', '1', '8123619432', 'the@gmail.com', 'safas', 'India', 'karnataka', 'banglore', '080', '2016-01-01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `garage_details`
--

CREATE TABLE `garage_details` (
  `garage_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `garage_name` varchar(100) NOT NULL,
  `garage_address` text NOT NULL,
  `garage_city` varchar(50) NOT NULL,
  `garage_area` varchar(50) NOT NULL,
  `garage_pincode` varchar(7) NOT NULL,
  `garage_service_number` varchar(13) NOT NULL,
  `garage_sales_number` varchar(13) NOT NULL,
  `garage_gst_status` varchar(6) NOT NULL,
  `garage_gst_number` varchar(25) NOT NULL,
  `garage_service_type` varchar(20) NOT NULL,
  `garage_sms_name` varchar(7) NOT NULL,
  `garage_details_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `garage_details`
--

INSERT INTO `garage_details` (`garage_id`, `owner_id`, `garage_name`, `garage_address`, `garage_city`, `garage_area`, `garage_pincode`, `garage_service_number`, `garage_sales_number`, `garage_gst_status`, `garage_gst_number`, `garage_service_type`, `garage_sms_name`, `garage_details_status`) VALUES
(1, 1, 'garage name', 'address', 'city', 'garage_area', '999999', '8123326329', '8123619432', 'no', '90', '2', 'BIISMS', 'active'),
(2, 2, 'bmw', 'koramangala', 'bangalore', 'garage_area', '560034', '9945047994', '9945047993', 'yes', '908', '2', 'BIISMS', 'active'),
(3, 3, 'indu garage', '#21', 'mysore', 'garage_area', '570025', '8122326329', '8122326329', 'no', '123456789', '4', 'BIISMS', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `garage_owner`
--

CREATE TABLE `garage_owner` (
  `owner_id` int(11) NOT NULL,
  `owner_name` text NOT NULL,
  `owner_mobile` text NOT NULL,
  `owner_email` text NOT NULL,
  `owner_password` int(11) NOT NULL,
  `owner_registered_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `login_type` text NOT NULL,
  `owner_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `garage_owner`
--

INSERT INTO `garage_owner` (`owner_id`, `owner_name`, `owner_mobile`, `owner_email`, `owner_password`, `owner_registered_date`, `login_type`, `owner_status`) VALUES
(1, 'garage owner', '8123619432', 'garage@gmail.com', 123, '2019-03-08 08:24:38', 'garage', 'active'),
(2, 'vipul', '9945047993', 'vipul@gmail.com', 123, '2019-03-08 08:48:41', 'garage', 'active'),
(3, 'indu', '8122326329', 'indu@gmail.com', 123, '2019-03-13 07:59:00', 'garage', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `oem_details`
--

CREATE TABLE `oem_details` (
  `oem_id` int(11) NOT NULL,
  `oem_name` varchar(30) NOT NULL,
  `oem_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oem_details`
--

INSERT INTO `oem_details` (`oem_id`, `oem_name`, `oem_status`) VALUES
(1, 'Honda', '0');

-- --------------------------------------------------------

--
-- Table structure for table `oem_model_details`
--

CREATE TABLE `oem_model_details` (
  `oem_model_id` int(11) NOT NULL,
  `oem_id` int(11) NOT NULL,
  `oem_model_name` varchar(40) NOT NULL,
  `oem_model_type` varchar(15) NOT NULL,
  `oem_model_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oem_model_details`
--

INSERT INTO `oem_model_details` (`oem_model_id`, `oem_id`, `oem_model_name`, `oem_model_type`, `oem_model_status`) VALUES
(1, 1, 'dio', 'submit1', '0'),
(2, 1, 'dio', 'submit1', '0'),
(3, 1, 'activa', 'two wheele', '0'),
(4, 1, 'dio', 'four wheeler', '0');

-- --------------------------------------------------------

--
-- Table structure for table `repair_types`
--

CREATE TABLE `repair_types` (
  `repair_id` int(11) NOT NULL,
  `repair_name` varchar(30) NOT NULL,
  `repair_id_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repair_types`
--

INSERT INTO `repair_types` (`repair_id`, `repair_name`, `repair_id_status`) VALUES
(1, 'General Service', '0'),
(5, 'Paid Service', '0'),
(6, 'Repeat Job', '0'),
(7, 'Warranty Job', '0'),
(8, 'AMC', '0'),
(9, 'Accident Job', '0'),
(10, 'Running Repair', '0'),
(11, 'Free Service 1', '0'),
(12, 'Free Service 2', '0'),
(13, 'Free Service 3', '0'),
(14, 'Free Service 4', '0'),
(15, 'Free Service 5', '0');

-- --------------------------------------------------------

--
-- Table structure for table `service_details`
--

CREATE TABLE `service_details` (
  `service_id` int(11) NOT NULL,
  `garage_id` int(11) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `service_labour_charge` int(10) NOT NULL,
  `service_gst_percentage` int(6) NOT NULL,
  `service_gst_amount` int(10) NOT NULL,
  `service_total_amount` int(10) NOT NULL,
  `service_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_details`
--

INSERT INTO `service_details` (`service_id`, `garage_id`, `service_name`, `service_labour_charge`, `service_gst_percentage`, `service_gst_amount`, `service_total_amount`, `service_status`) VALUES
(1, 3, 'part1', 100, 18, 100, 200, '0'),
(2, 3, 'h', 0, 0, 7, 7, '0'),
(3, 1, 'ok', 10, 5, 14, 142, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `spares_details`
--

CREATE TABLE `spares_details` (
  `spare_id` int(11) NOT NULL,
  `garage_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `spare_part_name` varchar(50) NOT NULL,
  `spare_part_no` varchar(50) NOT NULL,
  `oem_id` int(11) NOT NULL,
  `oem_model_id` int(11) NOT NULL,
  `spare_gstin` varchar(50) NOT NULL,
  `spare_hsn` varchar(50) NOT NULL,
  `spare_amount` varchar(15) NOT NULL,
  `spare_gst_percentage` varchar(6) NOT NULL,
  `spare_gst_amount` varchar(15) NOT NULL,
  `spare_total_amount` varchar(15) NOT NULL,
  `spare_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spares_details`
--

INSERT INTO `spares_details` (`spare_id`, `garage_id`, `vendor_id`, `spare_part_name`, `spare_part_no`, `oem_id`, `oem_model_id`, `spare_gstin`, `spare_hsn`, `spare_amount`, `spare_gst_percentage`, `spare_gst_amount`, `spare_total_amount`, `spare_status`) VALUES
(2, 1, 5, 'wheel', '2', 1, 2, '123', '456', '1000', '5', '50', '1050', '0'),
(4, 1, 5, 'wheel', '2', 1, 3, '090', '456', '1000', '5', '50', '1050', '0'),
(5, 1, 7, 'oil diffuser', '10', 1, 1, '9999999999', '8888888888', '900', '8', '400', '1400', '0'),
(6, 1, 5, 'lopk', 'lopk', 1, 2, '0909', 'hjkl', '99', '9', '80', '100', '0'),
(7, 3, 13, 'ok', 'ok', 1, 2, '12', '123', '1233', '123', '123', '123', '0'),
(8, 3, 14, 'bosh1', '8946', 1, 4, '12', '123', '', '1233', '1423', '1420', '0');

-- --------------------------------------------------------

--
-- Table structure for table `spares_quantity_details`
--

CREATE TABLE `spares_quantity_details` (
  `spare_quantity_id` int(11) NOT NULL,
  `spare_id` int(11) NOT NULL,
  `spare_quantity` varchar(10) NOT NULL,
  `spare_quantity_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spares_quantity_details`
--

INSERT INTO `spares_quantity_details` (`spare_quantity_id`, `spare_id`, `spare_quantity`, `spare_quantity_status`) VALUES
(1, 5, '10', '0'),
(2, 2, '5', '0'),
(3, 8, '152', '0'),
(4, 7, '14', '0');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_contact_information`
--

CREATE TABLE `vendor_contact_information` (
  `vendor_contact_id` int(11) NOT NULL,
  `garage_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `vendor_contact_name` varchar(50) NOT NULL,
  `vendor_contact_mobile` varchar(12) NOT NULL,
  `vendor_contact_email` varchar(50) NOT NULL,
  `vendor_contact_landline` varchar(15) NOT NULL,
  `vendor_contact_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_contact_information`
--

INSERT INTO `vendor_contact_information` (`vendor_contact_id`, `garage_id`, `vendor_id`, `vendor_contact_name`, `vendor_contact_mobile`, `vendor_contact_email`, `vendor_contact_landline`, `vendor_contact_status`) VALUES
(1, 0, 0, '$vendor_company_name', '$vendor_cont', '$vendor_contact_email', '$vendor_contact', '0'),
(2, 1, 0, 'vmware', '9686836131', 'sindhu@gmail.com', '77777777777', '0'),
(3, 1, 0, 'slk', '9686836141', 'nand@gmail.com', '22222', '0'),
(4, 1, 0, 'bosch', '9686836171', 'rathan@gmail.com', '111111111111111', '0'),
(5, 1, 10, 'bosch', '9686836171', 'rathan@gmail.com', '111111111111111', '0'),
(6, 1, 11, 'sindhu', '', '', '', '0'),
(7, 1, 12, '', '', '', '', '0'),
(8, 1, 0, 'tata', 'tata', 'tata@gmail.com', 'tata', '0'),
(9, 1, 0, 'tata', 'tata', 'tata@gmail.com', 'tata', '0'),
(10, 1, 0, 'tata', 'tata', 'tata@gmail.com', 'tata', '0'),
(11, 1, 6, 'tata', 'tata', 'tata@gmail.com', 'tata', '0'),
(12, 3, 13, 'vyas', '08123619433', 'vyas@gmail.com', '023', '0'),
(13, 3, 13, 'ok', '8562315232', 'ok@gmail.com', '15321', '0'),
(14, 3, 14, 'nike', '852369897', 'nike@gmail.com', '987', '0'),
(15, 3, 14, 'nke', '894562', 'nke@gmail.com', '456332', '0');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_information`
--

CREATE TABLE `vendor_information` (
  `vendor_id` int(11) NOT NULL,
  `garage_id` int(11) NOT NULL,
  `vendor_company_name` varchar(50) NOT NULL,
  `vendor_mobile` varchar(13) NOT NULL,
  `vendor_email` varchar(50) NOT NULL,
  `vendor_address` varchar(100) NOT NULL,
  `vendor_landline_no` varchar(15) NOT NULL,
  `vendor_gst_no` varchar(25) NOT NULL,
  `vendor_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_information`
--

INSERT INTO `vendor_information` (`vendor_id`, `garage_id`, `vendor_company_name`, `vendor_mobile`, `vendor_email`, `vendor_address`, `vendor_landline_no`, `vendor_gst_no`, `vendor_status`) VALUES
(4, 1, 'bosch', '9999999999', 'bosch@gmail.com', '#1111', '8888888', '123', '0'),
(5, 1, 'hp', '8888888888', 'hp@gmail.com', 'bang', '7777777777', '123', '0'),
(6, 1, 'tata', '9945047993', 'tata@gmx.in', 'mys', '8354673845', '234', '0'),
(7, 1, 'vmware', '9345637822', 'vmware@gmail.com', 'hasan', '55555555555', '66666666666', '0'),
(8, 1, 'slk', '111111111', '11111111', 'bang', '8888888', 'w123', '0'),
(9, 1, 'bosch', '9999999999', 'bosch@gmail.com', '#1111', '8888888', '123', '0'),
(10, 1, 'bosch', '9999999999', 'bosch@gmail.com', '#1111', '8888888', '66666666666', '0'),
(11, 1, 'tata', '', '', '', '', '', '0'),
(12, 1, '', '', '', '', '', '', '0'),
(13, 3, 'bii', '812332613', 'indushree135@gmail.com', 'bangargetta', '080', '08963', '0'),
(14, 3, 'bosh', '814756322', 'bosh@gmail.com', 'oopo', '2833', '14523', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_information`
--
ALTER TABLE `customer_information`
  ADD PRIMARY KEY (`customer_id`);

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
-- Indexes for table `garage_details`
--
ALTER TABLE `garage_details`
  ADD PRIMARY KEY (`garage_id`);

--
-- Indexes for table `garage_owner`
--
ALTER TABLE `garage_owner`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `oem_details`
--
ALTER TABLE `oem_details`
  ADD PRIMARY KEY (`oem_id`);

--
-- Indexes for table `oem_model_details`
--
ALTER TABLE `oem_model_details`
  ADD PRIMARY KEY (`oem_model_id`);

--
-- Indexes for table `repair_types`
--
ALTER TABLE `repair_types`
  ADD PRIMARY KEY (`repair_id`);

--
-- Indexes for table `service_details`
--
ALTER TABLE `service_details`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `spares_details`
--
ALTER TABLE `spares_details`
  ADD PRIMARY KEY (`spare_id`);

--
-- Indexes for table `spares_quantity_details`
--
ALTER TABLE `spares_quantity_details`
  ADD PRIMARY KEY (`spare_quantity_id`);

--
-- Indexes for table `vendor_contact_information`
--
ALTER TABLE `vendor_contact_information`
  ADD PRIMARY KEY (`vendor_contact_id`);

--
-- Indexes for table `vendor_information`
--
ALTER TABLE `vendor_information`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_information`
--
ALTER TABLE `customer_information`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `designation_details`
--
ALTER TABLE `designation_details`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `employee_designation`
--
ALTER TABLE `employee_designation`
  MODIFY `employee_designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `employee_details`
--
ALTER TABLE `employee_details`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `garage_details`
--
ALTER TABLE `garage_details`
  MODIFY `garage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `garage_owner`
--
ALTER TABLE `garage_owner`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `oem_details`
--
ALTER TABLE `oem_details`
  MODIFY `oem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `oem_model_details`
--
ALTER TABLE `oem_model_details`
  MODIFY `oem_model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `repair_types`
--
ALTER TABLE `repair_types`
  MODIFY `repair_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `service_details`
--
ALTER TABLE `service_details`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `spares_details`
--
ALTER TABLE `spares_details`
  MODIFY `spare_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `spares_quantity_details`
--
ALTER TABLE `spares_quantity_details`
  MODIFY `spare_quantity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vendor_contact_information`
--
ALTER TABLE `vendor_contact_information`
  MODIFY `vendor_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `vendor_information`
--
ALTER TABLE `vendor_information`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
