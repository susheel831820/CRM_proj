-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220527.6201c7f2ba
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 10:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xyz_crmdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocation`
--

CREATE TABLE `allocation` (
  `token_no` int(11) NOT NULL,
  `serviceman_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allocation`
--

INSERT INTO `allocation` (`token_no`, `serviceman_id`) VALUES
(7, 3),
(8, 25),
(9, 3),
(10, 3),
(11, 25),
(12, 3),
(13, 26),
(15, 26);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Sno` int(100) NOT NULL,
  `Ac_type` varchar(10) NOT NULL,
  `usr_id` varchar(20) NOT NULL,
  `pass` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Sno`, `Ac_type`, `usr_id`, `pass`, `email`, `name`) VALUES
(1, 'user', 'xyz12', 'xyz@123', 'xyz444@gma', 'xyz lmn'),
(2, 'admin', 'kapil12', 'kapil@123', 'kapil222@g', 'kapil verma'),
(3, 'service', 'rajeev12', 'rajeev@123', 'rajeev3@gm', 'rajeev singh'),
(8, 'user', 'rahul12', 'rahul@123', 'rahul123@gmail.com', 'rahul singh'),
(10, 'user', 'anil12', 'golu@123', 'anilkapoor123@gmail.com', 'anil kapoor'),
(14, 'user', 'susheel23', 'Golu@123', 'susheeelverma123@gmail.com', 'Susheel Verma'),
(15, 'user', 'anil44', 'Golu@345', 'anilkappor444@gmail.com', 'anil kapoor '),
(16, 'user', 'susheel45', 'golu', 'susheelverma444@gmail.com', 'susheel verma'),
(17, 'user', 'ankit12', 'ankit@1`23', 'ankitkumar444@gmail.com', 'ankit kumar'),
(18, 'user', 'user123', 'golu', 'susheel123@gmail.com', '1231321'),
(23, 'user', 'susheel34', 'golu@123', 'susheel123@gmail.com', 'susheelverma'),
(24, 'user', 'ankit34', 'golu@123', 'ankit123@gmail.com', 'ankit'),
(25, 'service', 'serviceman1', 'golu@123', 'golu123@gmial.com', 'kangan chourasiya'),
(26, 'service', 'serviceman2', 'golu@123', 'serviceman444@gmial.com', 'kangaaroo kumar');

-- --------------------------------------------------------

--
-- Table structure for table `request_table`
--

CREATE TABLE `request_table` (
  `token_no` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Phone` text NOT NULL,
  `Alt-phone_no` text NOT NULL,
  `Email` text NOT NULL,
  `Bill_no` text NOT NULL,
  `Brand` text NOT NULL,
  `Model` text NOT NULL,
  `Address` text NOT NULL,
  `Description` text NOT NULL,
  `Photo` text NOT NULL,
  `Status` text NOT NULL,
  `Sno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_table`
--

INSERT INTO `request_table` (`token_no`, `Name`, `Phone`, `Alt-phone_no`, `Email`, `Bill_no`, `Brand`, `Model`, `Address`, `Description`, `Photo`, `Status`, `Sno`) VALUES
(7, 'anil kapoor', '7054551420', '8245152015', 'anil222@gmail.com', '22554477885545845', 'samsung', 'm11', '471/12 b maa lahar enclavew colony near iti jhansi ', 'pin problem', 'photoxyz.jpg', 'closed', 1),
(8, 'aniket verma', '9794364863', '4574852451', 'aniketverma444@gmail.com', '224155781584558', 'samsung', 'a51', '578/12 b kochha bhavan jhansi', 'display not shown', 'photoxyz.jpg', 'closed', 1),
(9, 'labda', '5577485242', '1545211522', 'LAbra222@gmail.com', '224', ' ', ' ', '', '', 'photoxyz.jpg', 'on going', 1),
(10, 'susheel verma', '6633562540', '5544778485', 'susheelverma444@gmail.com', '4515241524515245152', 'oppo', 'A54', '4852/12 b avash vikash colony', 'disply problem', 'photoxyz.jpg', 'Confirm', 1),
(11, 'gappu gowal', '7855454582', '78457784558', 'gappu333@gmail.com', '4455778844559966', 'oppo', 'A54', '457/12 b ,maa lahar enclave colony and the togathere sumbition', 'display error', 'photoxyz.jpg', 'Picked up', 1),
(12, 'tempary kumar', '8318204215', '9511527515', 'susheelverma333@gmail.com', '1222451515323616513313', 'realmi', 'realme GT Neo 3', 'susheel verma 547/12 b maa laher enclave colony', 'dhakken nahi hai', 'photoxyz.jpg', 'Confirm', 1),
(15, 'kammo darling', '7735554612', '', 'kammo333@gmail.com', '12215514443562', 'samsung', 'a51', 'youtube', 'youtube nhhi chal rha\r\n', 'photoxyz.jpg', 'closed', 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allocation`
--
ALTER TABLE `allocation`
  ADD PRIMARY KEY (`token_no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `request_table`
--
ALTER TABLE `request_table`
  ADD PRIMARY KEY (`token_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `request_table`
--
ALTER TABLE `request_table`
  MODIFY `token_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



