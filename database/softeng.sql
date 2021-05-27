-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 12:26 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softeng`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `booking_name` varchar(255) NOT NULL,
  `phone_no` int(8) NOT NULL,
  `email` varchar(255) NOT NULL,
  `checkin_date` date NOT NULL DEFAULT current_timestamp(),
  `stay_duration` int(2) NOT NULL,
  `status` enum('Received','Accepted','Rejected','') NOT NULL DEFAULT 'Received'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `booking_name`, `phone_no`, `email`, `checkin_date`, `stay_duration`, `status`) VALUES
(1, 'Gerald Koh', 80312241, 'geraldkoh@email.com', '2021-01-22', 16, 'Received'),
(2, 'Xuegang  Su', 62641709, 'onest1983@email.com', '2021-06-01', 17, 'Received');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(12) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_no` varchar(10) NOT NULL,
  `tenant_name` varchar(255) DEFAULT NULL,
  `status` enum('Empty','Occupied','Reserved','') NOT NULL DEFAULT 'Empty'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_no`, `tenant_name`, `status`) VALUES
(1, '1-01', 'Alexie Schowalter', 'Occupied'),
(2, '1-02', 'Jenifer Gerhold', 'Occupied'),
(3, '1-03', 'Ted McLaughlin', 'Occupied'),
(4, '1-04', 'Maegan Rolfson', 'Occupied'),
(5, '1-05', 'Sabrina Gleichner', 'Occupied'),
(6, '2-06', '', 'Empty'),
(7, '2-07', '', 'Empty'),
(8, '2-08', '', 'Empty'),
(9, 'Master', 'Mike Kasem', 'Reserved');

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `id` int(11) NOT NULL,
  `tenant_name` varchar(255) NOT NULL,
  `phone_no` int(8) NOT NULL,
  `email` varchar(255) DEFAULT 'unknown@email.com',
  `address` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL DEFAULT 'Singapore',
  `checkin_date` date NOT NULL,
  `member_status` enum('Active','Inactive','Left','') NOT NULL DEFAULT 'Active',
  `payment_status` enum('Paid','Unpaid','','') NOT NULL DEFAULT 'Paid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `tenant_name`, `phone_no`, `email`, `address`, `nationality`, `checkin_date`, `member_status`, `payment_status`) VALUES
(1, 'Alexie Schowalter', 66239988, 'leffler.marcos@yahoo.com', 'Blk 764E Jalan Daniel Walk ## ### 902320\r\n', 'Singapore', '2021-05-15', 'Active', 'Unpaid'),
(2, 'Jenifer Gerhold', 75580228, 'kurt40@schultz.org', 'Blk 579A Emard Highway Bridge ## ## 884367', 'Singapore', '2021-05-09', 'Inactive', 'Unpaid'),
(3, 'Ted McLaughlin', 63650336, 'eloy.haley@hotmail.com', '801 Klein Way Grove 064167', 'Singapore', '2021-05-10', 'Active', 'Unpaid'),
(4, 'Maegan Rolfson', 74372928, 'schaden.mikayla@hotmail.com', 'Blk 209D Daniel Avenue Place 0# ### 370111', 'Singapore', '2021-05-04', 'Active', 'Paid'),
(5, 'Sabrina Gleichner', 61637921, 'cmclaughlin@hotmail.com', 'Blk 990H Beer Road Link 0# ## 882833', 'Singapore', '2021-05-23', 'Active', 'Paid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
