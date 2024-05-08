-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2024 at 05:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL COMMENT 'FOREIGN KEY',
  `admin_Name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `community groups`
--

CREATE TABLE `community groups` (
  `group_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL COMMENT 'FOREIGN KEY',
  `group_Name` varchar(300) NOT NULL,
  `group_Type` varchar(300) NOT NULL,
  `member_Count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `educational_resource`
--

CREATE TABLE `educational_resource` (
  `resourceID` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `date_posted` date DEFAULT NULL,
  `user_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `educational_resource`
--

INSERT INTO `educational_resource` (`resourceID`, `title`, `content`, `date_posted`, `user_ID`) VALUES
(0, 'ASFADFSFDSDFSFAD', 'ASDFADFSASDFASFDASDDF', '2024-04-15', 2);

-- --------------------------------------------------------

--
-- Table structure for table `forum posts`
--

CREATE TABLE `forum posts` (
  `forumPost_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL COMMENT 'FOREIGN KEY',
  `forum_Category` varchar(300) NOT NULL,
  `date_Posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `partner_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL COMMENT 'FOREIGN KEY',
  `partner_Name` varchar(300) NOT NULL,
  `contact_Email` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resource posts`
--

CREATE TABLE `resource posts` (
  `resourcePost_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL COMMENT 'FOREIGN KEY',
  `resource_Category` varchar(300) NOT NULL,
  `date_Posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_ID` int(11) NOT NULL,
  `user_Type` varchar(300) NOT NULL,
  `user_Name` varchar(300) NOT NULL,
  `user_Email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_ID`, `user_Type`, `user_Name`, `user_Email`, `password`) VALUES
(1, '', 'cheyene', 'cheyeneuy@gmail.com', '1234'),
(2, '', 'you', 'you@gmail.com', '123'),
(3, '', 'elaine', 'elaine@gmail.com', '123'),
(4, '', 'daphne', 'daphne@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `community groups`
--
ALTER TABLE `community groups`
  ADD PRIMARY KEY (`group_ID`);

--
-- Indexes for table `educational_resource`
--
ALTER TABLE `educational_resource`
  ADD PRIMARY KEY (`resourceID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `forum posts`
--
ALTER TABLE `forum posts`
  ADD PRIMARY KEY (`forumPost_ID`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`partner_ID`);

--
-- Indexes for table `resource posts`
--
ALTER TABLE `resource posts`
  ADD PRIMARY KEY (`resourcePost_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `community groups`
--
ALTER TABLE `community groups`
  MODIFY `group_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum posts`
--
ALTER TABLE `forum posts`
  MODIFY `forumPost_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `partner_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resource posts`
--
ALTER TABLE `resource posts`
  MODIFY `resourcePost_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `educational_resource`
--
ALTER TABLE `educational_resource`
  ADD CONSTRAINT `educational_resource_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`user_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
