-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 08, 2022 at 05:18 AM
-- Server version: 10.5.13-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u743445510_crypto`
--

-- --------------------------------------------------------

--
-- Table structure for table `steps`
--

CREATE TABLE `steps` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` text DEFAULT NULL,
  `steps` int(11) DEFAULT NULL,
  `calories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `steps`
--

INSERT INTO `steps` (`id`, `user_id`, `date`, `steps`, `calories`) VALUES
(2, 1, '2022-06-06', 5, 45),
(3, 1, '2022-06-08', 50, 450);

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
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `weight`, `height`, `age`) VALUES
(1, 'Jaya Prasad', 'jp@gmail.com', '12345678', NULL, 45, 34, 45),
(2, 'Prasad', 'jp1@gmail.com', '12345678', 'male', NULL, NULL, NULL),
(3, 'Vijay', 'vjdeveloper2020@gmail.com', '123456', 'Male', 48, 160, 20),
(4, 'Prasad', 'prasad@gmail.com', '12345678', 'Male', 50, 165, 20);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `steps`
--
ALTER TABLE `steps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
