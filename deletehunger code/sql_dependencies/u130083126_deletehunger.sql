-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 14, 2024 at 12:04 AM
-- Server version: 10.11.7-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u130083126_deletehunger`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `use_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `use_name`, `password`, `location`) VALUES
(1, 'admin', 'admin@2024', 'admin/index.php');

-- --------------------------------------------------------

--
-- Table structure for table `community_users`
--

CREATE TABLE `community_users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `community_users`
--

INSERT INTO `community_users` (`id`, `email`, `password`, `name`, `username`) VALUES
(1, 'workaditya250@gmail.com', 'aditya@1234', 'aditya', 'adi'),
(2, 'sharmaaman103366@gmail.com', 'sharmaaman1036', 'aman', 'aman'),
(3, 'abhinav', 'abhinav', 'abhinavgupta9573@gmail.com', 'abhinav');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `venue` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `people` varchar(200) NOT NULL,
  `comments` varchar(200) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `venue`, `date`, `time`, `people`, `comments`, `status`, `name`) VALUES
(1, 'radisson blue noida', '11/5/24', '8pm', '200', 'hello1', 'completed', 'Raj halwai'),
(2, 'taj', '11/6/24', '9pm', '300', 'cry', 'completed', 'raj'),
(3, 'lal', '12/5/24', '10pm', '11', 'hello', 'cancelled', 'abhinav'),
(4, 'lalal', '11/5/24', '9pm', '800', 'try', 'completed', 'abhinav'),
(5, 'lila', '12/6/24', '7pm', '500', 'birthday party', 'completed', 'hira lal'),
(6, 'taj mahal', '12/4/24', '9pm', '300', 'birthday', 'cancelled', 'abhinav'),
(7, 'jw marriot', '12/5/24', '10pm', '200', 'birthday event', 'cancelled', 'abhinav'),
(8, 'lila', '12/5/24', '11pm', '222', 'marriage', 'completed', 'shyam'),
(9, 'red fort', '12/5/24', '7pm', '100', 'dndjadj', 'cancelled', 'abhinav'),
(10, 'red fort', '12/5/24', '8pm', '300', 'hello', 'cancelled', 'vaibhav'),
(11, 'gu', '13/4/24', '9am', '156', 'hackathon', 'completed', 'riya'),
(12, 'niu', '12/5/24', '7pm', '100', 'ttggbdyhxbxhhtr htx x tnbyvrtcsr', 'active', 'abhinav'),
(13, 'benett', '13/4/24', '7pm', '200', 'dsdgdgrf', 'cancelled', 'harshit'),
(14, 'amity', '13/4/24', '7pm', '100', 'fest', 'active', 'abhinav'),
(15, 'amity', '12/5/24', '7pm', '200', 'aaaa', 'active', 'abhinav'),
(16, 'gl bajaj', '13/4/24', '7pm', '200', 'fest', 'active', 'abhinav'),
(17, 'amity', '13/4/24', '8pm', '100', 'hackathon', 'cancelled', 'riya'),
(18, 'galgotia', '12/5/24', '8pm', '200', 'hackathon', 'completed', 'riya'),
(19, 'gl bajaj', '12/3/24', '8pm', '200', 'fest', 'active', 'riya'),
(20, 'gu', '11/5/24', '8pm', '500', 'fest', 'active', 'riya');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `location`) VALUES
(1, 'abhinav', 'abhinav@2024', 'caterers/index.php'),
(3, 'hira lal', 'plus@2023', 'caterers/index.php'),
(4, 'ram', 'ram@2024', 'caterers/index.php'),
(5, 'shyam', 'shyam@2024', 'caterers/index.php'),
(7, 'riya', 'riya@2024', 'caterers/index.php'),
(8, 'harshit', 'harshit@2024', 'caterers/index.php'),
(9, 'hira lal', 'plus@2023', 'caterers/index.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `community_users`
--
ALTER TABLE `community_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `community_users`
--
ALTER TABLE `community_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
