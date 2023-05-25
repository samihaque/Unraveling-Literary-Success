-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 06:41 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `judge`
--

-- --------------------------------------------------------

--
-- Table structure for table `judge_rate`
--
CREATE DATABASE judge;
USE judge;

CREATE TABLE `judge_rate` (
  `id` int(40) NOT NULL,
  `group_members` varchar(200) NOT NULL,
  `group_number` varchar(200) NOT NULL,
  `project_title` varchar(200) NOT NULL,
  `judge_name` varchar(200) NOT NULL,
  `comments` varchar(200) NOT NULL,
  -- `dev_avg` varchar(200) NOT NULL,
  -- `acc_avg` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `judge_rate`
--

-- INSERT INTO `judge_rate` (`id`, `group_members`, `group_number`, `project_title`, `judge_name`, `comments`, `dev_avg`, `acc_avg`) VALUES
-- (1, '2', 'XYZ56743', 'Computer Science', 'John Smith', 'Nice Work you and your team are great work.', '7.75', '13'),
-- (3, '5', 'ABC10045', 'C Programming', 'Jennifer', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '8.5', '13.25');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `role` enum('superadmin','user') NOT NULL DEFAULT 'user',
  `is_active` enum('0','1') NOT NULL DEFAULT '1',
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`, `phone`, `role`, `is_active`, `create_date`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '8876599', 'superadmin', '1', '2020-12-11 21:14:15'),
(3, 'robo', 'robo', 'robo@gmail.com', '343434', 'user', '1', '2020-12-11 21:18:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `judge_rate`
--
ALTER TABLE `judge_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `judge_rate`
--
ALTER TABLE `judge_rate`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
