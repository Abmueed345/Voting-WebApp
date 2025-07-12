-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2024 at 11:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Cnic` varchar(255) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Nominations` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`ID`, `Name`, `Email`, `Date`, `Cnic`, `Phone`, `Nominations`) VALUES
(1, 'Hafiz Abdul Mueed', 'abmueed204@gmail.com', '2024-10-10', '2345656667675554', 2147483647, '3'),
(2, 'Hassan ', 'hassan@1234gmail.com', '2024-10-10', '2345656667675554', 2147483647, '2'),
(3, 'Hassan ', 'hassan@1234gmail.com', '2024-10-10', '2345656667675554', 2147483647, '2'),
(4, 'jojo', 'abrar@123', '2024-10-08', '2345656667675554', 2147483647, 'Neymar'),
(5, 'jojo', 'abrar@123', '2024-10-08', '2345656667675554', 2147483647, 'Neymar'),
(6, 'khan', 'jojo@yahoo.com', '2024-10-17', '2345656667675554', 2147483647, 'Lionel Messi'),
(7, 'khan', 'jojo@yahoo.com', '2024-10-17', '2345656667675554', 2147483647, 'Lionel Messi'),
(8, 'Hafiz Abdul Mueed', 'abmueed204@gmail.com', '2024-10-12', '2345656667675554', 2147483647, 'Lionel Messi'),
(9, 'mueed', 'abmueed204@gmail.com', '2024-10-15', '2345656667675554', 2147483647, 'Cristiano Ronaldo'),
(10, 'mueed', 'abmueed204@gmail.com', '2024-10-05', '2345656667675554', 2147483647, 'Lionel Messi'),
(11, 'Hafiz Abdul Mueed', 'abmueed204@gmail.com', '2024-10-10', '2345656667675554', 2147483647, 'Lionel Messi'),
(12, 'Hassan ', 'jojo@yahoo.com', '2024-10-03', '2345656667675554', 2147483647, 'Lionel Messi'),
(13, 'Hassan ', 'hassan@1234gmail.com', '2024-10-05', '2345656667675554', 2147483647, 'Paul Pogba'),
(14, 'khan', 'hassan@1234gmail.com', '2024-10-04', '2345656667675554', 2147483647, 'Gonçalo Guedes'),
(15, 'ali', 'ali@gmail.com', '2024-09-29', '2345656667675554', 2147483647, 'Paul Pogba'),
(16, 'Hassan ', 'hassan@1234gmail.com', '2024-10-18', '2345656667675554', 2147483647, 'Kylian Mbappé'),
(17, 'Hafiz Abdul Mueed', 'ali@yahoo.com', '2024-10-16', '2345656667675554', 43535756, 'Kylian Mbappé'),
(18, 'Hassan ', 'samad@yahoo.com', '2024-10-08', '2345656667675554', 2147483647, 'Kylian Mbappé'),
(19, 'mueed', 'abmueed204@gmail.com', '2024-10-10', '2345656667675554', 2147483647, 'Gonçalo Guedes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `voter`
--
ALTER TABLE `voter`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
