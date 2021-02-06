-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 04:44 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ID` int(11) NOT NULL,
  `DATE_TXT` text NOT NULL,
  `DATE_FORMAT` date NOT NULL,
  `EMP_ID` text NOT NULL,
  `NAME` text NOT NULL,
  `WORKING_TYPE` text NOT NULL,
  `START_TIME` text NOT NULL,
  `END_TIME` text NOT NULL,
  `STORE_ID` text NOT NULL,
  `STORE_NAME` text NOT NULL,
  `CREATED_DATE_TIME` datetime NOT NULL,
  `UPDATED_DATE_TIME` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ID`, `DATE_TXT`, `DATE_FORMAT`, `EMP_ID`, `NAME`, `WORKING_TYPE`, `START_TIME`, `END_TIME`, `STORE_ID`, `STORE_NAME`, `CREATED_DATE_TIME`, `UPDATED_DATE_TIME`) VALUES
(1, '2019-10-15', '2019-10-15', '1237780', 'kimmy ', 'working time', '8:00', '19:00', 'RAJD6000883', 'Junbo Store', '2021-02-06 20:48:24', '2021-02-06 20:48:24'),
(2, '2019-10-15', '2019-10-15', '1237780', 'kimmy ', 'lunch', '12:00', '13:00', '', '', '2021-02-06 20:48:24', '2021-02-06 20:48:24'),
(3, '2019-10-15', '2019-10-15', '1237780', 'kimmy ', 'break', '15:00', '15:30', '', '', '2021-02-06 20:48:24', '2021-02-06 20:48:24'),
(4, '2019-10-15', '2019-10-15', '1237780', 'kimmy ', 'training', '16:00', '17:00', 'RAJD6000883', 'Multiplex samsung', '2021-02-06 20:48:24', '2021-02-06 20:48:24'),
(5, '2019-10-15', '2019-10-15', '1237780', 'kimmy ', 'route', '18:00', '19:00', 'RAJD6000883', 'ABC Mart', '2021-02-06 20:48:24', '2021-02-06 20:48:24'),
(6, '2019-10-16', '2019-10-16', '1237780', 'kimmy ', 'day off', '', '', '', '', '2021-02-06 20:48:24', '2021-02-06 20:48:24'),
(7, '2019-10-17', '2019-10-17', '1237780', 'kimmy ', 'leave', '', '', '', '', '2021-02-06 20:48:24', '2021-02-06 20:48:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
