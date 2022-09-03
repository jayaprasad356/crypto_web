-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2022 at 09:26 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crypto`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_settings`
--

CREATE TABLE `app_settings` (
  `id` int(11) NOT NULL,
  `min_balance` int(11) DEFAULT NULL,
  `max_users` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app_settings`
--

INSERT INTO `app_settings` (`id`, `min_balance`, `max_users`) VALUES
(1, 50, 10);

-- --------------------------------------------------------

--
-- Table structure for table `badges`
--

CREATE TABLE `badges` (
  `id` int(11) NOT NULL,
  `badge` text DEFAULT NULL,
  `badge_value` text DEFAULT NULL,
  `from_value` text DEFAULT NULL,
  `to_value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `badges`
--

INSERT INTO `badges` (`id`, `badge`, `badge_value`, `from_value`, `to_value`) VALUES
(1, 'bronze', '5', '1', '2'),
(2, 'silver', '45', '2', '3'),
(3, 'gold', '100', '3', '4'),
(4, 'diamond', '25', '4', '5'),
(5, 'platinum', '45', '5', '6');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `date_created` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `description`, `date_created`) VALUES
(1, 'hi', 'gello', NULL),
(2, 'hello', 'how are you', NULL),
(3, 'hi', 'helllo', NULL),
(4, 'Hello', 'This is Test Notification', NULL),
(5, 'fdf', 'dfdfd', '2022-07-18 21:50:25'),
(6, 'Test', 'Good evening', '2022-07-29 18:16:28'),
(7, 'Hi', 'Sprint Test', '2022-08-12 08:34:54'),
(8, 'Hi', 'Test Sprint', '2022-08-12 08:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reward` int(11) NOT NULL,
  `steps` int(11) NOT NULL,
  `reward_date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rewards`
--

INSERT INTO `rewards` (`id`, `user_id`, `reward`, `steps`, `reward_date`) VALUES
(1, 1, 500, 500, '2022-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `reward_settings`
--

CREATE TABLE `reward_settings` (
  `id` int(11) NOT NULL,
  `step` text DEFAULT NULL,
  `reward` text DEFAULT NULL,
  `bronze` text DEFAULT NULL,
  `silver` text DEFAULT NULL,
  `gold` text DEFAULT NULL,
  `diamond` text DEFAULT NULL,
  `platinum` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reward_settings`
--

INSERT INTO `reward_settings` (`id`, `step`, `reward`, `bronze`, `silver`, `gold`, `diamond`, `platinum`) VALUES
(1, '2000', '1', '50', '5', '90', '70', '1'),
(2, '4000', '2', '567', '7', '9', '8', '9'),
(3, '6000', '200', '89', '90', '66', '8', '78'),
(4, '8000', '200', '65', '34', '87', '77', '87'),
(5, '10000', '200', '55', '78', '78', '89', '90'),
(6, '12000', '400', '33', '67', '88', '90', '88'),
(7, '14000', '500', '8', '9', '67', '89', '34'),
(8, '16000', '600', '3', '45', '65', '54', '45'),
(9, '18000', '700', '3', '5', '6', '9', '3'),
(10, '20000', '300', '43', '56', '87', '875', '76');

-- --------------------------------------------------------

--
-- Table structure for table `steps`
--

CREATE TABLE `steps` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` text DEFAULT NULL,
  `steps` int(11) DEFAULT NULL,
  `calories` int(11) DEFAULT NULL,
  `earn` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `steps`
--

INSERT INTO `steps` (`id`, `user_id`, `date`, `steps`, `calories`, `earn`) VALUES
(46, 12, '2022-07-18', 100, 30, 10),
(47, 13, '2022-07-20', 13, 0, 13),
(48, 13, '2022-07-21', 19, 1, 19),
(49, 13, '2022-07-22', 2736, 91, 2736),
(50, 13, '2022-07-23', 132, 4, 132),
(51, 14, '2022-07-27', 48, 2, 48),
(52, 14, '2022-07-28', 473, 15, 473),
(53, 13, '2022-07-29', 16, 1, 16),
(54, 14, '2022-07-30', 10, 0, 10),
(55, 14, '2022-07-31', 626, 20, 626),
(56, 13, '2022-08-10', 44, 1, 44),
(57, 22, '2022-08-11', 1392, 64, 1392),
(58, 21, '2022-08-12', 12, 0, 12),
(59, 21, '2022-08-13', 335, 12, 335),
(60, 22, '2022-08-14', 716, 33, 716),
(61, 26, '2022-08-15', 62, 2, 62),
(62, 25, '2022-08-16', 810, 29, 810),
(63, 22, '2022-08-18', 103, 4, 103),
(64, 24, '2022-08-20', 3518, 137, 3518),
(65, 29, '2022-08-23', 120, 4, 120);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `wallet_balance` int(11) DEFAULT NULL,
  `wallet_address` text DEFAULT NULL,
  `steps` int(11) DEFAULT NULL,
  `reward` int(11) DEFAULT NULL,
  `registered_date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `weight`, `height`, `age`, `wallet_balance`, `wallet_address`, `steps`, `reward`, `registered_date`) VALUES
(1, 'Jaya Prasad', 'jp@gmail.com', '12345678', NULL, 45, 34, 45, 0, '0xd1e665da42619b45681fffca178d84c5e207143a', 113056, 0, NULL),
(2, 'Prasad', 'jp1@gmail.com', '12345678', 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Vijay', 'vjdeveloper2020@gmail.com', '123456', 'Male', 48, 160, 20, NULL, NULL, NULL, NULL, NULL),
(4, 'Prasad', 'prasad@gmail.com', '12345678', 'Male', 50, 165, 20, NULL, NULL, NULL, NULL, NULL),
(5, 'Prasad', 'erer@gmail.com', '12345678', 'male', NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-06-30'),
(6, 'Prasad', 'jj@gmail.com', '12345678', 'male', NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-06-30'),
(7, 'Prasad', 'jje@gmail.com', '12345678', 'male', NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-06-30'),
(8, 'test', 'xojefa4789@meidir.com', '12345', 'Male', NULL, NULL, NULL, NULL, NULL, 125, 200, '2022-06-30'),
(10, 'Testuser', 'rofiwe1399@shbiso.com', '12345', 'Male', NULL, NULL, NULL, 0, '0x58838932f053d9cda50385b47dd08229ddf2d85a', 0, 0, '2022-07-01'),
(11, 'tester', 'sowir38656@lenfly.com', '123456', 'Male', NULL, NULL, NULL, 0, '0x58838932f053d9cda50385b47dd08229ddf2d85a', 66464, 0, '2022-07-01'),
(12, 'Makein', 'makeinappdevelopment@gmail.com', '12345678', 'Male', 50, 155, 25, 0, '0xd1e665da42619b45681fffca178d84c5e207143a', 585, 200, '2022-07-01'),
(13, 'Rozar', 'thesprintapps@gmail.com', '000000', 'Male', 60, 172, 21, NULL, NULL, 6018, 200, '2022-07-02'),
(14, 'Alex jones', 'gautamsinghji95@gmail.com', 'gautam@199', 'Male', 60, 167, 20, NULL, NULL, 7541, 700, '2022-07-02'),
(15, 'Punk', 'bansalji800@gmail.com', 'bansal123', 'Male', 90, 156, 24, NULL, NULL, 1301, 500, '2022-07-02'),
(16, 'Jai Lakshmi Jha', 'jailakshmijha6552@gmail.com', 'Sandeep@123', 'Female', 67, 155, 40, NULL, NULL, 0, 0, '2022-07-02'),
(17, 'Alex hisake', 'thesprintappyt@gmail.com', 'Sprint@123', 'Male', 74, 185, 21, NULL, NULL, 2039, 0, '2022-07-28'),
(18, 'Alex Jones', 'tamzida19@gmail.com', 'Password@1', 'Male', 70, 180, 24, NULL, NULL, 0, 0, '2022-08-07'),
(19, 'test01', 'misogi0100@gmail.com', 'misogi01test', 'Male', 50, 150, 19, NULL, NULL, 45, 200, '2022-08-07'),
(20, 'Miri Amir', 'miriamir751@gmail.com', 'Fallout4', 'Male', 70, 180, 21, NULL, NULL, 0, 0, '2022-08-10'),
(21, 'Rozar', 'dewaansingh822@gmail.com', '000333', 'Male', 60, 182, 60, NULL, NULL, 7443, 200, '2022-08-11'),
(22, 'Henrico', 'hen2601@outlook.com', 'Henric0@sprint', 'Male', 80, 180, 26, NULL, NULL, 14040, 200, '2022-08-11'),
(23, 'Cj', 'catherinesantos0217@gmail.com', '@Sprintblossom17', 'Female', 56, 162, 32, NULL, NULL, 119, 200, '2022-08-12'),
(24, 'jesus torres', 'jesust07@gmail.com', '1Km45%ytest', 'Male', 70, 173, 29, NULL, NULL, 3518, 0, '2022-08-12'),
(25, 'Archit Garg', 'garchit33@gmail.com', 'Archit@123', 'Male', 67, 163, 25, NULL, NULL, 5408, 0, '2022-08-15'),
(26, 'Mxjed', 'mxjedsada@gmail.com', 'madmax77', 'Male', 65, 173, 25, NULL, NULL, 124, 200, '2022-08-15'),
(27, 'Muhammad Irpansyah', 'muhammadirpansyah0109@gmail.com', 'Dewvan010915', 'Male', 54, 162, 23, NULL, NULL, 6559, 0, '2022-08-15'),
(28, 'shamcom', 'sham.elmohamedy@gmail.com', 'Sy4mt35t', 'Male', 58, 160, 25, NULL, NULL, 0, 0, '2022-08-22'),
(29, 'andy', 'anbu1668899@yahoo.com', 'Lixiaoteng', 'Male', 68, 170, 29, NULL, NULL, 240, 200, '2022-08-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_settings`
--
ALTER TABLE `app_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `badges`
--
ALTER TABLE `badges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reward_settings`
--
ALTER TABLE `reward_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `steps`
--
ALTER TABLE `steps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_settings`
--
ALTER TABLE `app_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `badges`
--
ALTER TABLE `badges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reward_settings`
--
ALTER TABLE `reward_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `steps`
--
ALTER TABLE `steps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
