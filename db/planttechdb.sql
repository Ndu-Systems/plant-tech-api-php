-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2019 at 09:19 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `planttechdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

CREATE TABLE `bed` (
  `BedId` varchar(225) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `LocationId` varchar(225) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `CreateUserId` varchar(225) NOT NULL,
  `CreateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifyUserId` varchar(225) NOT NULL,
  `ModifyDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `StatusId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`BedId`, `Name`, `LocationId`, `Quantity`, `CreateUserId`, `CreateDate`, `ModifyUserId`, `ModifyDate`, `StatusId`) VALUES
('221ce99c-8d55-11e9-bd99-80fa5b45280e', 'Bed A', '18', 10, 'sys', '2019-06-12 23:00:39', 'sys', '2019-06-13 06:50:05', 1),
('22e782de-8d55-11e9-bd99-80fa5b45280e', 'Bed A', '1', 10, 'sys', '2019-06-12 23:00:40', 'sys', '2019-06-12 23:00:40', 1),
('2485db32-8d55-11e9-bd99-80fa5b45280e', 'Bed A', '1', 10, 'sys', '2019-06-12 23:00:43', 'sys', '2019-06-12 23:00:43', 1),
('39ba4e7e-8d55-11e9-bd99-80fa5b45280e', 'Bed B', '1', 10, 'sys', '2019-06-12 23:01:19', 'sys', '2019-06-12 23:01:19', 1),
('414668cf-8d54-11e9-bd99-80fa5b45280e', 'Bed B v1', '1', 10, 'sys', '2019-06-12 22:54:22', 'ndu', '2019-06-12 22:54:22', 1),
('596c0852-8d54-11e9-bd99-80fa5b45280e', 'Bed A', '1', 10, 'sys', '2019-06-12 22:55:02', 'sys', '2019-06-12 22:55:02', 1),
('59cb780b-8d54-11e9-bd99-80fa5b45280e', 'Bed A', '1', 10, 'sys', '2019-06-12 22:55:03', 'sys', '2019-06-12 22:55:03', 1),
('5a2c1dee-8d54-11e9-bd99-80fa5b45280e', 'Bed A', '1', 10, 'sys', '2019-06-12 22:55:04', 'sys', '2019-06-12 22:55:04', 1),
('5a7c2bbf-8d54-11e9-bd99-80fa5b45280e', 'Bed A', '1', 10, 'sys', '2019-06-12 22:55:04', 'sys', '2019-06-12 22:55:04', 1),
('5b334630-8d54-11e9-bd99-80fa5b45280e', 'Bed A', '1', 10, 'sys', '2019-06-12 22:55:05', 'sys', '2019-06-12 22:55:05', 1),
('5b710993-8d54-11e9-bd99-80fa5b45280e', 'Bed A', '1', 10, 'sys', '2019-06-12 22:55:06', 'sys', '2019-06-12 22:55:06', 1),
('5bd1e082-8d54-11e9-bd99-80fa5b45280e', 'Bed A', '1', 10, 'sys', '2019-06-12 22:55:06', 'sys', '2019-06-12 22:55:06', 1),
('5c0b463e-8d54-11e9-bd99-80fa5b45280e', 'Bed A', '1', 10, 'sys', '2019-06-12 22:55:07', 'sys', '2019-06-12 22:55:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `MedicineId` varchar(225) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `CreateUserId` varchar(225) NOT NULL,
  `CreateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifyUserId` varchar(225) NOT NULL,
  `ModifyDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `StatusId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `PlantId` varchar(225) NOT NULL,
  `Name` varchar(55) NOT NULL,
  `Description` varchar(225) NOT NULL,
  `Views` int(11) NOT NULL,
  `MedicineId` varchar(225) NOT NULL,
  `CreateUserId` varchar(225) NOT NULL,
  `CreateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifyUserId` varchar(225) NOT NULL,
  `ModifyDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `StatusId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`PlantId`, `Name`, `Description`, `Views`, `MedicineId`, `CreateUserId`, `CreateDate`, `ModifyUserId`, `ModifyDate`, `StatusId`) VALUES
('33c5f566-8d59-11e9-bd99-80fa5b45280e', 'Plant 1', 'Test', 0, '1', 'sys', '2019-06-12 23:29:47', 'sys_update', '2019-06-13 06:48:28', 1),
('4fef47c2-8d59-11e9-bd99-80fa5b45280e', 'ffff', 'ffff', 0, 'ffff', 'ffff', '2019-06-12 23:30:34', 'ffff', '2019-06-12 23:30:34', 1),
('78e8c0bf-8d59-11e9-bd99-80fa5b45280e', 'ffff', 'ffff', 0, 'ffff', 'ffff', '2019-06-12 23:31:43', 'ffff', '2019-06-12 23:31:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `plantbed`
--

CREATE TABLE `plantbed` (
  `Id` varchar(225) NOT NULL,
  `PlantId` varchar(225) NOT NULL,
  `BedId` varchar(225) NOT NULL,
  `CreateUserId` varchar(225) NOT NULL,
  `CreateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifyUserId` varchar(225) NOT NULL,
  `ModifyDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `StatusId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plantbed`
--

INSERT INTO `plantbed` (`Id`, `PlantId`, `BedId`, `CreateUserId`, `CreateDate`, `ModifyUserId`, `ModifyDate`, `StatusId`) VALUES
('a3e4bc18-8d99-11e9-bd99-80fa5b45280e', '324324324', '43242344234234', 'sys', '2019-06-13 07:11:03', 'sys_update', '2019-06-13 07:22:04', 1),
('b3e72170-8d99-11e9-bd99-80fa5b45280e', 'ffff', 'ffff', 'ffff', '2019-06-13 07:11:29', 'ffff', '2019-06-13 07:11:29', 1),
('ba4f57d4-8d99-11e9-bd99-80fa5b45280e', 'ffff', 'ffff', 'ffff', '2019-06-13 07:11:40', 'ffff', '2019-06-13 07:11:40', 1),
('bab53fea-8d99-11e9-bd99-80fa5b45280e', 'ffff', 'ffff', 'ffff', '2019-06-13 07:11:41', 'ffff', '2019-06-13 07:11:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `plantseason`
--

CREATE TABLE `plantseason` (
  `Id` varchar(225) NOT NULL,
  `PlantId` varchar(225) NOT NULL,
  `SeasonId` int(11) NOT NULL,
  `CreateUserId` varchar(225) NOT NULL,
  `CreateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifyUserId` varchar(225) NOT NULL,
  `ModifyDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `StatusId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plantseason`
--

INSERT INTO `plantseason` (`Id`, `PlantId`, `SeasonId`, `CreateUserId`, `CreateDate`, `ModifyUserId`, `ModifyDate`, `StatusId`) VALUES
('0665f304-8dab-11e9-bd99-80fa5b45280e', '21344-s43243-g4324-42423', 0, 'sys', '2019-06-13 09:15:29', 'sys', '2019-06-13 09:17:34', 1),
('0f5d02b1-8dab-11e9-bd99-80fa5b45280e', '3214143', 2147483647, 'sys', '2019-06-13 09:15:44', 'sys', '2019-06-13 09:15:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `RoleId` varchar(225) NOT NULL,
  `Description` varchar(225) NOT NULL,
  `CreateUserId` varchar(225) NOT NULL,
  `CreateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifyUserId` varchar(225) NOT NULL,
  `ModifyDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `StatusId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `season`
--

CREATE TABLE `season` (
  `SeasonId` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `CreateUserId` varchar(225) NOT NULL,
  `CreateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifyUserId` varchar(225) NOT NULL,
  `ModifyDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `StatusId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `season`
--

INSERT INTO `season` (`SeasonId`, `Name`, `CreateUserId`, `CreateDate`, `ModifyUserId`, `ModifyDate`, `StatusId`) VALUES
(1, 'Summer', 'sys', '2019-06-13 09:05:30', 'sys', '2019-06-13 09:11:33', 1),
(2, '3214143', 'ffff', '2019-06-13 09:06:20', 'ffff', '2019-06-13 09:06:20', 1),
(3, '3214143', 'ffff', '2019-06-13 09:07:34', 'ffff', '2019-06-13 09:07:34', 1),
(15, '3214143', 'ffff', '2019-06-13 09:08:45', 'ffff', '2019-06-13 09:08:45', 1),
(17, '3214143', 'ffff', '2019-06-13 09:08:49', 'ffff', '2019-06-13 09:08:49', 1),
(18, '3214143', 'ffff', '2019-06-13 09:08:51', 'ffff', '2019-06-13 09:08:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Pin` varchar(4) NOT NULL,
  `Cell` varchar(15) DEFAULT NULL,
  `CreateUserId` varchar(225) NOT NULL,
  `CreateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifyUserId` varchar(225) NOT NULL,
  `ModifyDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `StatusId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE `userrole` (
  `Id` varchar(225) NOT NULL,
  `UserId` varchar(225) NOT NULL,
  `RoleId` int(11) NOT NULL,
  `CreateUserId` varchar(225) NOT NULL,
  `CreateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifyUserId` varchar(225) NOT NULL,
  `ModifyDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `StatusId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uses`
--

CREATE TABLE `uses` (
  `UseId` varchar(225) NOT NULL,
  `Description` varchar(225) NOT NULL,
  `MedicineId` varchar(225) NOT NULL,
  `CreateUserId` varchar(225) NOT NULL,
  `CreateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ModifyUserId` varchar(225) NOT NULL,
  `ModifyDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `StatusId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bed`
--
ALTER TABLE `bed`
  ADD PRIMARY KEY (`BedId`);

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`PlantId`);

--
-- Indexes for table `plantbed`
--
ALTER TABLE `plantbed`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `plantseason`
--
ALTER TABLE `plantseason`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `season`
--
ALTER TABLE `season`
  ADD PRIMARY KEY (`SeasonId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `season`
--
ALTER TABLE `season`
  MODIFY `SeasonId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
