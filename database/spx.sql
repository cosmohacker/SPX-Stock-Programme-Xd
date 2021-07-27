-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 27, 2021 at 11:47 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spx`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `Comment_Id` int(11) NOT NULL,
  `User_UID` varchar(15) NOT NULL,
  `Unique_Id` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Created_At` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_At` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Contact_Id` int(11) NOT NULL,
  `User_UID` varchar(15) NOT NULL,
  `Subject` text NOT NULL,
  `Description` text NOT NULL,
  `Created_At` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_At` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `Login_Id` int(11) NOT NULL,
  `User_UID` varchar(15) NOT NULL,
  `Ip_Address` varchar(20) DEFAULT NULL,
  `Mac_Address` varchar(40) DEFAULT NULL,
  `Country` varchar(40) DEFAULT NULL,
  `City` varchar(40) DEFAULT NULL,
  `Device` varchar(40) DEFAULT NULL,
  `OS` varchar(40) DEFAULT NULL,
  `Browser` varchar(120) DEFAULT NULL,
  `Device_Name` varchar(40) DEFAULT NULL,
  `Is_Online` enum('0','1') DEFAULT NULL,
  `Longitude` text DEFAULT NULL,
  `Latitude` text DEFAULT NULL,
  `Created_At` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_At` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`Login_Id`, `User_UID`, `Ip_Address`, `Mac_Address`, `Country`, `City`, `Device`, `OS`, `Browser`, `Device_Name`, `Is_Online`, `Longitude`, `Latitude`, `Created_At`, `Updated_At`) VALUES
(1, '92fVglfBniiEmuM', '127.0.0.1', '7A-79-19-67-D4-B5', '', '', 'Array', 'Windows 10', 'Chrome', 'device name', '1', '', '', '2021-07-09 20:18:15', NULL),
(2, '92fVglfBniiEmuM', '127.0.0.1', '7A-79-19-67-D4-B5', '', '', 'SYSTEM', 'Windows 10', 'Chrome', 'device name', '1', '', '', '2021-07-09 20:19:23', NULL),
(3, '92fVglfBniiEmuM', '127.0.0.1', '7A-79-19-67-D4-B5', '', '', 'device', 'Windows 10', 'Chrome', 'device name', '1', '', '', '2021-07-09 20:29:22', NULL),
(4, '92fVglfBniiEmuM', '127.0.0.1', '7A-79-19-67-D4-B5', '', '', 'device', 'Windows 10', 'Chrome', 'device name', '1', '', '', '2021-07-09 20:32:59', NULL),
(5, '92fVglfBniiEmuM', '127.0.0.1', '7A-79-19-67-D4-B5', '', '', 'device', 'Windows 10', 'Chrome', 'device name', '1', '', '', '2021-07-09 20:34:53', NULL),
(6, '92fVglfBniiEmuM', '127.0.0.1', '7A-79-19-67-D4-B5', '', '', 'device', 'Windows 10', 'Chrome', 'device name', '1', '', '', '2021-07-10 11:05:14', NULL),
(7, '92fVglfBniiEmuM', '127.0.0.1', '7A-79-19-67-D4-B5', '', '', 'device', 'Windows 10', 'Chrome', 'device name', '1', '', '', '2021-07-12 08:49:05', NULL),
(8, '92fVglfBniiEmuM', '127.0.0.1', '7A-79-19-67-D4-B5', '', '', 'device', 'Windows 10', 'Chrome', 'device name', '1', '', '', '2021-07-12 08:49:06', NULL),
(9, '92fVglfBniiEmuM', '127.0.0.1', '7A-79-19-67-D4-B5', '', '', 'device', 'Windows 10', 'Chrome', 'device name', '1', '', '', '2021-07-12 08:49:16', NULL),
(10, '92fVglfBniiEmuM', '127.0.0.1', '7A-79-19-67-D4-B5', '', '', 'device', 'Windows 10', 'Chrome', 'device name', '1', '', '', '2021-07-12 08:50:10', NULL),
(11, '92fVglfBniiEmuM', '127.0.0.1', '7A-79-19-67-D4-B5', '', '', 'device', 'Windows 10', 'Chrome', 'device name', '1', '', '', '2021-07-12 08:50:53', NULL),
(12, '92fVglfBniiEmuM', '127.0.0.1', '7A-79-19-67-D4-B5', '', '', 'device', 'Windows 10', 'Chrome', 'device name', '1', '', '', '2021-07-12 08:52:30', NULL),
(13, '92fVglfBniiEmuM', '127.0.0.1', '7A-79-19-67-D4-B5', '', '', 'device', 'Windows 10', 'Chrome', 'device name', '1', '', '', '2021-07-12 08:52:31', NULL),
(14, '92fVglfBniiEmuM', '127.0.0.1', '7A-79-19-67-D4-B5', '', '', 'device', 'Windows 10', 'Chrome', 'device name', '1', '', '', '2021-07-12 09:28:39', NULL),
(15, '92fVglfBniiEmuM', '127.0.0.1', '', '', '', 'device', 'Linux', 'Chrome', 'device name', '1', '', '', '2021-07-18 21:26:59', NULL),
(16, '92fVglfBniiEmuM', '127.0.0.1', '', '', '', 'device', 'Linux', 'Chrome', 'device name', '1', '', '', '2021-07-18 21:59:51', NULL),
(17, '92fVglfBniiEmuM', '127.0.0.1', '', '', '', 'device', 'Linux', 'Chrome', 'device name', '1', '', '', '2021-07-19 16:29:47', NULL),
(18, '92fVglfBniiEmuM', '127.0.0.1', '', '', '', 'device', 'Linux', 'Chrome', 'device name', '1', '', '', '2021-07-19 17:39:41', NULL),
(19, '92fVglfBniiEmuM', '127.0.0.1', '', '', '', 'device', 'Linux', 'Chrome', 'device name', '1', '', '', '2021-07-20 18:52:34', NULL),
(20, '92fVglfBniiEmuM', '127.0.0.1', '', '', '', 'device', 'Linux', 'Chrome', 'device name', '1', '', '', '2021-07-20 20:14:41', NULL),
(21, '92fVglfBniiEmuM', '127.0.0.1', '', '', '', 'device', 'Linux', 'Chrome', 'device name', '1', '', '', '2021-07-21 02:09:16', NULL),
(22, '92fVglfBniiEmuM', '127.0.0.1', '', '', '', 'device', 'Linux', 'Chrome', 'device name', '1', '', '', '2021-07-21 15:56:19', NULL),
(23, '92fVglfBniiEmuM', '127.0.0.1', '', '', '', 'device', 'Linux', 'Chrome', 'device name', '1', '', '', '2021-07-21 17:55:41', NULL),
(24, '92fVglfBniiEmuM', '127.0.0.1', '', '', '', 'device', 'Linux', 'Chrome', 'device name', '1', '', '', '2021-07-27 20:08:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `Photo_Id` int(11) NOT NULL,
  `Unique_Id` varchar(15) NOT NULL,
  `User_UID` varchar(15) NOT NULL,
  `Post_Id` int(11) DEFAULT NULL,
  `Product_Id` int(11) DEFAULT NULL,
  `Photo` text NOT NULL,
  `AI_Alt` text NOT NULL,
  `Created_At` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_At` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Post_Id` int(11) NOT NULL,
  `User_UID` varchar(15) NOT NULL,
  `Unique_Id` varchar(15) NOT NULL,
  `Created_At` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_At` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_Id` int(11) NOT NULL,
  `Unique_Id` varchar(15) NOT NULL,
  `Barcode` varchar(20) NOT NULL,
  `Product_Code` text NOT NULL,
  `Name` text NOT NULL,
  `In_Stock` varchar(10) NOT NULL,
  `Damaged` varchar(10) NOT NULL,
  `Sold` varchar(10) NOT NULL,
  `In_Shipping` varchar(10) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `Currency` varchar(20) NOT NULL,
  `Serial_Number` text NOT NULL,
  `Weight` varchar(20) NOT NULL,
  `Dimension` varchar(70) NOT NULL,
  `Origin` varchar(40) NOT NULL,
  `Company` varchar(60) NOT NULL,
  `Adder_UID` varchar(15) NOT NULL,
  `Updater_UID` varchar(15) NOT NULL,
  `Visible` enum('0','1') NOT NULL,
  `Rating` varchar(10) NOT NULL,
  `Description` text DEFAULT NULL,
  `Product_Link` text DEFAULT NULL,
  `Company_Link` text DEFAULT NULL,
  `Created_At` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_At` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_Id` int(11) NOT NULL,
  `Unique_Id` varchar(15) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Email` varchar(72) NOT NULL,
  `Password` text NOT NULL,
  `Email_Verification` varchar(6) NOT NULL,
  `SMS_Verification` varchar(6) NOT NULL,
  `Active` enum('0','1') NOT NULL DEFAULT '1',
  `Created_By_UID` varchar(15) NOT NULL,
  `Cipher_Key` text NOT NULL,
  `Created_At` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_At` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_Id`, `Unique_Id`, `Username`, `Email`, `Password`, `Email_Verification`, `SMS_Verification`, `Active`, `Created_By_UID`, `Cipher_Key`, `Created_At`, `Updated_At`) VALUES
(1, '92fVglfBniiEmuM', 'cosmohacker', 'cosmohacker@outlook.com', '7uSL4MPuSoQNLVXAKUzFOg==', '029725', '678519', '1', 'noone', 'LPZH94QGDU66oMKqNl6HTdAtTvSseHPys9tEvHiW', '2021-07-07 11:30:57', NULL),
(2, '9olKCRn7plEoHBe', 'hackerpanty', 'hackerpanty@outlook.com', 'sOROeG7DLWq8UM6iFFlmGw==', '077235', '338091', '1', 'noone', 'RUoPYdA5nqAwc7cVcUEaVZ3Sdv2jexH27PB2IoWD', '2021-07-07 11:31:28', NULL),
(3, 'aaJZheZd8E1T215', 'alexifjames', 'alexifjames@hotmail.com', '6M6kUz+tNyYIiMS3hwx+7Q==', '054722', '655526', '1', 'noone', 'BSNJj26a7tEg33cTPCbqSt4uJyoujc1CXA9Y4qzY', '2021-07-07 18:16:04', NULL),
(4, 'mHLXP0S0FokNwR8', 'apex', 'apex@outlook.com', 'ZvopT/b4FH3mCJS1AzprAQ==', '701340', '324070', '1', 'noone', 'tlQb0JEpkP2wSXhlY3a035vXGvVHMbvZ2tsjjPiA', '2021-07-12 09:23:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_information`
--

CREATE TABLE `users_information` (
  `Users_Information_Id` int(11) NOT NULL,
  `User_UID` varchar(15) NOT NULL,
  `Unique_Id` varchar(15) NOT NULL,
  `Name` varchar(40) DEFAULT NULL,
  `Surname` varchar(40) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Profession` varchar(100) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `University` varchar(50) DEFAULT NULL,
  `Photo` text DEFAULT NULL,
  `Wallpaper` text DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `Postal_Code` varchar(10) DEFAULT NULL,
  `About` text DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Website` text DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Created_At` timestamp NOT NULL DEFAULT current_timestamp(),
  `Updated_At` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_information`
--

INSERT INTO `users_information` (`Users_Information_Id`, `User_UID`, `Unique_Id`, `Name`, `Surname`, `Birthday`, `Profession`, `Country`, `City`, `University`, `Photo`, `Wallpaper`, `Address`, `Postal_Code`, `About`, `Phone`, `Website`, `Gender`, `Created_At`, `Updated_At`) VALUES
(1, '92fVglfBniiEmuM', 'N5twzzqnBXS3Dbe', 'Yağızcan', 'Yavuz', '2001-05-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-07 11:30:57', NULL),
(2, '9olKCRn7plEoHBe', 'iYwHY5nN5INTP4W', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-07 11:31:28', NULL),
(3, 'aaJZheZd8E1T215', 'urlGdeuihKO2Nol', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-07 18:16:04', NULL),
(4, 'mHLXP0S0FokNwR8', 'osAFIkIqY7jgcEh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-12 09:23:08', NULL),
(5, 'xodzTQFrKJktv2o', 'EYauKs8Xday8OGx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-12 09:44:46', NULL),
(6, 'YMEkUzYJ3vF8uAZ', 'MSl1ebSkNOADOaI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-21 02:17:15', NULL),
(7, 'A5Np3QzMBEkEsXB', 'xvs6VAxDTMYkuHa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-21 02:26:43', NULL),
(8, '9Xw695FRH3731Do', 'Gp2FITh4cRLNpr1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-21 15:56:50', NULL),
(9, 'CjfocY1M1BbpQjS', 'k8rOgKIXRuF2NSh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-21 16:00:17', NULL),
(10, 'FTNW9gS5MouW1jD', '8yT1d1YsUkOAiw9', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-21 16:03:08', NULL),
(11, 'L2rPlURBYcHTyEJ', 'lzgqHyKH2eEcnMg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-21 16:04:31', NULL),
(12, 'GP1LBquvlidsNpU', 'Y0zkvf9madlgPZh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-21 16:06:32', NULL),
(13, 'D8fF64RqR4SvZwT', 'qv43E7LIuzje6OO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-21 16:07:35', NULL),
(14, 'qU12QlEVZAQ7Dor', 'vPeFtEn2H037abM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-21 16:08:24', NULL),
(15, '6QZKy0pq0Qa11ZC', 'zLClTX94eE1tU9w', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-21 16:09:22', NULL),
(16, 'gplxbScv9ppfZpe', 'ZEHYDHncHO9NGt1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-21 16:10:39', NULL),
(17, 'H2Rr3Sf6ZgWAilZ', 'iSa8ZJEXyYVhi2K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-21 16:11:36', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`Comment_Id`),
  ADD UNIQUE KEY `Unique_Id` (`Unique_Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Contact_Id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`Login_Id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`Photo_Id`),
  ADD UNIQUE KEY `Unique_Id` (`Unique_Id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Post_Id`),
  ADD UNIQUE KEY `Unique_Id` (`Unique_Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_Id`),
  ADD UNIQUE KEY `Unique_Id` (`Unique_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_Id`),
  ADD UNIQUE KEY `Unique_Id` (`Unique_Id`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `users_information`
--
ALTER TABLE `users_information`
  ADD PRIMARY KEY (`Users_Information_Id`),
  ADD UNIQUE KEY `User_Id` (`User_UID`),
  ADD UNIQUE KEY `Unique_Id` (`Unique_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `Comment_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Contact_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `Login_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `Photo_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Post_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_information`
--
ALTER TABLE `users_information`
  MODIFY `Users_Information_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
