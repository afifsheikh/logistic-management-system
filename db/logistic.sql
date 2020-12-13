-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 10:29 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logistic`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `total_sale` int(11) DEFAULT NULL,
  `tax` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `p_id`, `total_sale`, `tax`) VALUES
(1, 37, 9000, 300),
(2, 40, 1308, 300),
(3, 41, 1384, 300),
(4, 42, 859, 300),
(5, 43, 810, 300);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `p_id` int(10) NOT NULL,
  `u_id` int(11) NOT NULL,
  `rec_id` int(11) NOT NULL,
  `qty` int(10) DEFAULT NULL,
  `length` int(10) DEFAULT NULL,
  `width` int(10) DEFAULT NULL,
  `height` int(10) DEFAULT NULL,
  `weight` int(10) DEFAULT NULL,
  `desc` varchar(30) DEFAULT NULL,
  `hash` varchar(30) DEFAULT NULL,
  `send_loc` varchar(50) DEFAULT NULL,
  `rec_loc` varchar(50) DEFAULT NULL,
  `del` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`p_id`, `u_id`, `rec_id`, `qty`, `length`, `width`, `height`, `weight`, `desc`, `hash`, `send_loc`, `rec_loc`, `del`) VALUES
(16, 31, 0, 2, 1, 1, 1, 1, 'platea', 'VOxuRBqZWMdWJGyAYO2WWaF5lX', 'e', 'e', ''),
(17, 36, 0, 2, 1, 1, 1, 1, '1', 'VOxuRBqZWMdWJGyAYO2WWaF5lX', '7', '3', ''),
(18, 31, 0, 2, 2, 2, 22, 2, 'item 1', 'ZUbByMtGJves1cZnsf7SN1QqRq', 'addr 1', 'addr 2', ''),
(19, 31, 0, 1, 1, 1, 11, 1, 'ITEM 2', 'ZUbByMtGJves1cZnsf7SN1QqRq', 'asdASD', 'DSAdsa', ''),
(20, 42, 0, 1, 1, 1, 11, 1, 'sad', 'VOxuRBqZWMdWJGyAYO2WWaF5lX', '1', '1', ''),
(21, 43, 0, 1, 1, 1, 1, 11, 'QWE', 'VOxuRBqZWMdWJGyAYO2WWaF5lX', '1', '1', ''),
(22, 44, 0, 2, 4, 2, 2, 10, 'item1', 'VOxuRBqZWMdWJGyAYO2WWaF5lX', '1', '1', 'deleted'),
(23, 45, 6, 1, 3, 3, 4, 50, 'item 2', 'VOxuRBqZWMdWJGyAYO2WWaF5lX', '1', '1', ''),
(24, 47, 6, 1, 1, 1, 1, 1, 'item 3', 'VOxuRBqZWMdWJGyAYO2WWaF5lX', '1', '1', 'deleted'),
(25, 48, 6, 1, 20, 30, 20, 2, 'glass set', 'VOxuRBqZWMdWJGyAYO2WWaF5lX', '123 W. Meadowbrook Road Forest Hills, NY', 'Passage Key Trl Xenia, Ohio(OH)', ''),
(26, 49, 6, 1, 20, 30, 20, 10, 'steel box', 'VOxuRBqZWMdWJGyAYO2WWaF5lX', '123 W. Meadowbrook Road Forest Hills, NY', ' 7432 Plumb Branch Lane Niagara Falls, CA', 'deleted'),
(27, 50, 6, 1, 20, 50, 50, 30, 'chair', 'VOxuRBqZWMdWJGyAYO2WWaF5lX', ' Street: P.O. Gohad Pur, City: Sialkot', 'Shah Abdal Power House, City: Sialkot', 'deleted'),
(28, 52, 51, 1, 12, 23, 45, 23, 'metal rod', 'bCHxMJizCDRuQI39xtO7Ou9Q0y', 'pujari house 123 abc', 'gaddi house 123 abc', ''),
(29, 62, 57, 1, 1, 1, 1, 1, 'sen item', 'oRTzWvHyy9oRu7hGrhQ6AolkRO', 'A', 'B', 'deleted'),
(30, 64, 6, 1, 1, 1, 1, 1, 'testitem', 'VOxuRBqZWMdWJGyAYO2WWaF5lX', 'q', '1', 'deleted'),
(32, 66, 57, 1, 1, 1, 1, 1, 'test3 item', 'oRTzWvHyy9oRu7hGrhQ6AolkRO', 'a', 'b', 'deleted'),
(33, 69, 68, 1, 12, 12, 12, 2, 'goods', 'yUyWDqJrUkDSYMPJa9UblFlqTu', 'ert', 'qwe', ''),
(34, 71, 70, 1, 12, 44, 23, 32, 'lamp', 'CdpHJyU6r2Phd5AuZsprzuxWjd', 'arsalan house at 12 street', 'hassan tower flat 506 floor 1st', ''),
(35, 73, 72, 2, 23, 32, 12, 32, 'cricket kit', 'Uz99lVcG3fhcpjKpeyxb5gwR2E', 'house no 3 street 2 block 5 defence', 'omer house 12 er town karachi', ''),
(36, 74, 6, 1, 1, 1, 1, 1, 'television', 'VOxuRBqZWMdWJGyAYO2WWaF5lX', 'house 2 street 5 block 6 nazimabad', 'house 2 street 7 block 8 garden', ''),
(37, 75, 51, 2, 33, 5, 4, 44, 'statue', 'bCHxMJizCDRuQI39xtO7Ou9Q0y', '2580 Clark Lindenhurst NY ', 'garden street 12 house r444', ''),
(38, 77, 76, 2, 3, 54, 12, 34, 'gym kits', 'OxMNxQUuD8lrpRMAULsVo6NmG1', 'Park Way. Cupertino, CA 95014. United States', ' Inc 410 Terry Ave N Seattle, WA', ''),
(39, 78, 76, 2, 12, 12, 3, 3, 'bicycle', 'OxMNxQUuD8lrpRMAULsVo6NmG1', 'house# r-345 bufferzone, NK', ' Inc 410 Terry Ave N Seattle, WA', ''),
(40, 79, 6, 2, 2, 2, 2, 2, 'football', 'VOxuRBqZWMdWJGyAYO2WWaF5lX', 'Shahrah-Sher Shah Suri Service Rd N, Shadman Town ', 'Block 9, Block N North Nazimabad Town, Karachi,', ''),
(41, 80, 76, 2, 15, 34, 34, 1, 'iPhone 11 Pro Max', 'OxMNxQUuD8lrpRMAULsVo6NmG1', 'Block 9, Block N North Nazimabad Town, Karachi,', ' Inc 410 Terry Ave N Seattle, WA', 'deleted'),
(42, 84, 82, 1, 2, 22, 33, 2, 'box', 'TFcRbiJR1gUF1nX5k7c4FhTllE', 'asda', 'asdas', ''),
(43, 86, 85, 1, 2, 3, 3, 2, 'drum set with sticks', 'vR5LOy6uq6rQXmcJwvJ4DcMlDG', 'house #R-13 block 5, Gulshan', 'malir road no 6 house 12', '');

-- --------------------------------------------------------

--
-- Table structure for table `p_status`
--

CREATE TABLE `p_status` (
  `s_id` int(10) NOT NULL,
  `timestamp` varchar(30) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `p_id` int(10) DEFAULT NULL,
  `u_id` int(10) DEFAULT NULL,
  `rec_id` int(10) NOT NULL,
  `hash` varchar(30) DEFAULT NULL,
  `longitude` varchar(30) DEFAULT NULL,
  `latitude` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_status`
--

INSERT INTO `p_status` (`s_id`, `timestamp`, `status`, `p_id`, `u_id`, `rec_id`, `hash`, `longitude`, `latitude`) VALUES
(7, '01/11/2020 15:13:48', 'on going', 22, 44, 0, 'VOxuRBqZWMdWJGyAYO2WWaF5lX', NULL, NULL),
(8, '01/11/2020 15:15:03', 'accepted', 23, 45, 0, 'VOxuRBqZWMdWJGyAYO2WWaF5lX', '67.061264', '24.949991'),
(10, '01/11/2020 15:51:09', 'on going', 24, 47, 0, 'VOxuRBqZWMdWJGyAYO2WWaF5lX', NULL, NULL),
(12, '06/11/2020 20:20:21', 'accepted', 26, 49, 0, 'VOxuRBqZWMdWJGyAYO2WWaF5lX', '67.076751', '24.931585'),
(13, '07/11/2020 15:13:14', 'on going', 27, 50, 0, 'VOxuRBqZWMdWJGyAYO2WWaF5lX', NULL, NULL),
(14, '07/11/2020 18:28:50', 'returning', 28, 52, 0, 'bCHxMJizCDRuQI39xtO7Ou9Q0y', '67.076751', '24.931585'),
(19, '08/11/2020 17:42:14', 'on going', 29, 62, 0, 'oRTzWvHyy9oRu7hGrhQ6AolkRO', NULL, NULL),
(20, '08/11/2020 18:45:41', 'on going', 30, 64, 0, 'VOxuRBqZWMdWJGyAYO2WWaF5lX', NULL, NULL),
(22, '08/11/2020 18:55:30', 'on going', 32, 66, 0, 'oRTzWvHyy9oRu7hGrhQ6AolkRO', NULL, NULL),
(23, '09/11/2020 23:22:16', 'returning', 33, 69, 68, 'yUyWDqJrUkDSYMPJa9UblFlqTu', '67.061470', '24.950057'),
(24, '10/11/2020 23:21:19', 'on going', 34, 71, 70, 'CdpHJyU6r2Phd5AuZsprzuxWjd', '67.061470', '24.950057'),
(25, '10/11/2020 23:59:27', 'accepted', 35, 73, 72, 'Uz99lVcG3fhcpjKpeyxb5gwR2E', '67.061470', '24.950057'),
(26, '11/11/2020 00:10:31', 'on going', 36, 74, 6, 'VOxuRBqZWMdWJGyAYO2WWaF5lX', '67.061470', '24.950057'),
(27, '11/11/2020 00:28:42', 'on going', 37, 75, 51, 'bCHxMJizCDRuQI39xtO7Ou9Q0y', '67.061470', '24.950057'),
(28, '21/11/2020 16:11:03', 'on going', 38, 77, 76, 'OxMNxQUuD8lrpRMAULsVo6NmG1', '67.061470', '24.950057'),
(29, '21/11/2020 16:20:31', 'on going', 39, 78, 76, 'OxMNxQUuD8lrpRMAULsVo6NmG1', NULL, NULL),
(30, '21/11/2020 16:25:42', 'on going', 40, 79, 6, 'VOxuRBqZWMdWJGyAYO2WWaF5lX', NULL, NULL),
(31, '21/11/2020 16:31:10', 'on going', 41, 80, 76, 'OxMNxQUuD8lrpRMAULsVo6NmG1', NULL, NULL),
(32, '07/12/2020 22:42:02', 'returning', 42, 84, 82, 'TFcRbiJR1gUF1nX5k7c4FhTllE', '67.040191', '24.945728'),
(33, '13/12/2020 16:19:20', 'on going', 43, 86, 85, 'vR5LOy6uq6rQXmcJwvJ4DcMlDG', '67.040191', '24.945728');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_encrypt`
--

CREATE TABLE `tbl_encrypt` (
  `id` int(255) NOT NULL,
  `hash_val` varchar(80) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_encrypt`
--

INSERT INTO `tbl_encrypt` (`id`, `hash_val`, `timestamp`, `deleted`) VALUES
(2, '12VC30REtMjJw', '2020-12-14 02:10:41', 'deleted'),
(3, '12VC30REtMjJw', '2020-12-14 02:10:48', 'deleted'),
(4, '11y5TbXqNKJ5o', '2020-12-14 02:11:01', 'deleted'),
(5, '11y5TbXqNKJ5o', '2020-12-14 02:11:07', 'deleted'),
(6, '11y5TbXqNKJ5o', '2020-12-14 01:03:15', ''),
(7, '21S8lgat9ZC2I', '2020-12-14 01:03:15', ''),
(8, '11y5TbXqNKJ5o', '2020-12-14 02:12:16', 'deleted'),
(9, '11y5TbXqNKJ5o', '2020-12-14 01:03:15', ''),
(10, '11y5TbXqNKJ5o', '2020-12-14 01:03:15', ''),
(11, '11y5TbXqNKJ5o', '2020-12-14 01:03:15', ''),
(12, '11y5TbXqNKJ5o', '2020-12-14 01:03:15', ''),
(13, '11y5TbXqNKJ5o', '2020-12-14 01:03:15', ''),
(14, '11y5TbXqNKJ5o', '2020-12-14 01:03:15', ''),
(15, '11y5TbXqNKJ5o', '2020-12-14 02:12:06', 'deleted'),
(16, '41e42a8f26cb9de61d770e7166def80417860604', '2020-12-14 01:03:15', ''),
(17, 'af89eeadc986c91c6b5cdf420d1aee2060afdf5d', '2020-12-14 01:03:15', ''),
(18, '233d2373a9b549107936c909e12ddb71c4ba7757', '2020-12-14 01:03:15', ''),
(19, '64598e09b53295ed5b67ce81e65c1652ad833b99', '2020-12-14 01:03:15', ''),
(20, '50d82b879e57304909514ab2c01593d5d4af48dd', '2020-12-14 01:03:15', ''),
(21, '04d4b8e90a25d0efe93018b62fd6fa9ff67f50a6', '2020-12-14 01:03:15', ''),
(22, 'f5c3b4ab47d0f4aa5444377c35414f5d57f15853', '2020-12-14 01:03:15', ''),
(23, 'a6e1c554518274ed29f0bcd1969a9b9714f063da', '2020-12-14 01:03:15', ''),
(24, '441ec45e6d15f0383c3ab249243aeb35d192be2d', '2020-12-14 01:03:15', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(10) NOT NULL,
  `userName` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  `cnic` varchar(14) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `contactNo` varchar(14) DEFAULT NULL,
  `valid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `userName`, `pass`, `role`, `cnic`, `address`, `contactNo`, `valid`) VALUES
(1, 'admin', 'admin', 'admin', NULL, NULL, NULL, ''),
(6, 'afif', 'VOxuRBqZWMdWJGyAYO2WWaF5lX', 'receiver', '12345', 'asdf', '2345', ''),
(36, 'saniya', 'ZUbByMtGJves1cZnsf7SN1QqRq', 'sender', '123', 'SWDCFV', '234', ''),
(42, 'salman', 'u1zXwfP5oXmf9i0wpN2hV5E5rF', 'sender', '123', 'asd', '123', ''),
(43, 'MUNEEB', 'NHbRHvss9a9RaDz6dGgHRCDC9n', 'sender', '1', '12', '1', ''),
(44, 'ebbu', '66WMeGyZoBnzbNQKw8GqjzEdVz', 'sender', '1', 'qwe', '1', ''),
(45, 'rabi', 'ypPcQKeWaqkVTYu7Ew7UMABlLw', 'sender', '42101456345785', 'shipowner society house# 123 street 9', '03346545876', ''),
(47, 'zain', 'E9aPBxBTXXWhNHJ00vEAveylk6', 'sender', '1', '1', '1', ''),
(49, 'abdullah', 'oi2T2QoYrwta2qnNUtrQdkc1kr', 'sender', '42101234645631', '123 W. Meadowbrook Road Forest Hills, NY', '3213476978', ''),
(50, 'asif', 'IsgPVRFZcVTFQ0KN2yWqYb1Y55', 'sender', '42101234543824', ' Street: P.O. Gohad Pur, City: Sialkot', '3163476567', ''),
(51, 'gaddi', 'bCHxMJizCDRuQI39xtO7Ou9Q0y', 'receiver', '42101123536771', 'gaddi house 123 abc', '3343747968', ''),
(52, 'pujari', 'A2TetwNNSbhA6pLwb5RHAHOzcx', 'sender', '42101534531231', 'pujari house 123 abc', '5321234543', ''),
(53, 'admin1', 'admin', 'admin', '4210112345670', 'block N, imran heights street 9 north nazimabad', '3123465756', ''),
(57, 'rec', 'oRTzWvHyy9oRu7hGrhQ6AolkRO', 'receiver', '1', '1', '1', ''),
(62, 'sen', 'CMw5fcvlXMw43ME5lSOvZ9keIv', 'sender', '1', 'asd', '1', ''),
(64, 'test', 'wDJXIVZ1OQXvmD3zOQhiN1CfX4', 'sender', '1', '1', '1', ''),
(65, 'test2', 'q4hp9ssslu9K1VZqt5reJgbllK', 'sender', '1', '1', '1', ''),
(66, 'test3', 'a9NQCcqYWKuEHxjYOBx1glB3FV', 'sender', '1', '1', '1', ''),
(67, 'rtest', 'pHF97aD9p8wgAF3K2rVT9oThkG', 'receiver', '1', '1', '1', ''),
(68, 'fifaa', 'yUyWDqJrUkDSYMPJa9UblFlqTu', 'receiver', '4210123456701', 'fifa house at 12', '3345676567', 'Y'),
(69, 'afifa', 'YIVkqyDE2giHcO3S6k1CZyedl7', 'sender', '42101234543981', 'afifa shout jhjhfh 212', '3354565768', ''),
(70, 'hassan', 'CdpHJyU6r2Phd5AuZsprzuxWjd', 'receiver', '42101234569821', 'hassan house at 12 street', '3325684755', ''),
(71, 'arsalan', 'OT37rIoqTrrMEOdcPuLjDz3T3N', 'sender', '4210123434591', 'arsalan house at 12 street', '3213465765', ''),
(72, 'mohib', 'Uz99lVcG3fhcpjKpeyxb5gwR2E', 'receiver', '4210156784991', 'site area 5 street 2 block 2', '3323454768', ''),
(73, 'omer', '6njsPk40dlFumpU6NFby6kH5qs', 'sender', '4210134554331', 'house no 3 street 2 block 5 defence', '3343454567', ''),
(74, 'fahad', '7MwW8MDXPPZx55jEtoXQK96lbf', 'sender', '4210123456791', 'house 2 street 5 block 6 nazimabad', '3345566789', 'Y'),
(75, 'mujtaba', '1PbFpMU8g8H6BlWR4Qou8nxK8n', 'sender', '42101234543231', '2580 Clark Lindenhurst NY ', '3354567876', ''),
(76, 'ali', 'OxMNxQUuD8lrpRMAULsVo6NmG1', 'receiver', '4210146567554', ' Inc 410 Terry Ave N Seattle, WA', '3356454567', 'Y'),
(77, 'faisal', 'GN8yiTGErr04aaMEddzCvHSncJ', 'sender', '4210145655677', 'Park Way. Cupertino, CA 95014. United States', '3123456789', 'N'),
(78, 'bilal', 'IeMhQKMYlwKE3Wzxi0g48vnSMc', 'sender', '4210133456766', 'house# r-345 bufferzone, NK', '3115675849', 'N'),
(79, 'arshad', 'oYuoFHsudDCIu5en7csj2ZvIuo', 'sender', '4210143547658', 'Shahrah-Sher Shah Suri Service Rd N, Shadman Town ', '3345675456', ''),
(80, 'afzal', 'n0tYVT3bHTp9cY0llzXAnlDEtS', 'sender', '4210134445678', 'Block 9, Block N North Nazimabad Town, Karachi,', '3224564534', 'N'),
(81, 'serd', 'zHUoxlpmeoUFpwvVcAco9AejzF', 'receiver', '123', 'asdf', '123', ''),
(82, 'des', 'TFcRbiJR1gUF1nX5k7c4FhTllE', 'receiver', '123', 'qwr', '123', ''),
(83, 'fifaaa123', 'aKvsnXlJFwyewxyWPjuPvuu2A7', 'receiver', '1234567891011', 'hassu ghr ', '1234676', ''),
(84, 'ejaaz', 'keSRaol2V4j3oxO0A9drjQUdGT', 'sender', '4210132498765', 'ZXCFGBHJKL', '3312630987', ''),
(85, 'hamza', 'vR5LOy6uq6rQXmcJwvJ4DcMlDG', 'receiver', '4210123454555', 'malir road no 6 house 12', '3012345667', 'Y'),
(86, 'munna', 'UqCpfmBwHREZyLrsgou2xeVTmR', 'sender', '4211023455785', 'house #R-13 block 5, Gulshan', '3154567857', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `p_status`
--
ALTER TABLE `p_status`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `user_fk` (`u_id`),
  ADD KEY `package_fk` (`p_id`);

--
-- Indexes for table `tbl_encrypt`
--
ALTER TABLE `tbl_encrypt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `p_status`
--
ALTER TABLE `p_status`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_encrypt`
--
ALTER TABLE `tbl_encrypt`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `package` (`p_id`);

--
-- Constraints for table `p_status`
--
ALTER TABLE `p_status`
  ADD CONSTRAINT `package_fk` FOREIGN KEY (`p_id`) REFERENCES `package` (`p_id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
