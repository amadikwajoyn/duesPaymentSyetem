-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2018 at 08:42 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pay_dues`
--

-- --------------------------------------------------------
CREATE DATABASE IF NOT EXISTS `pay_dues` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pay_dues`;

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Dept_payment` varchar(255) NOT NULL,
  `polo` varchar(255) NOT NULL,
  `constitution` varchar(255) NOT NULL,
  `canivar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Dept_payment`, `polo`, `constitution`, `canivar`) VALUES
('500', '1500', '500', '200');

-- --------------------------------------------------------

--
-- Table structure for table `dues`
--

CREATE TABLE `dues` (
  `id` int(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dues`
--

INSERT INTO `dues` (`id`, `title`, `amount`) VALUES
(1, 'polo', 1500),
(2, 'carnivar', 200),
(3, 'polo', 1500),
(4, 'carnivar', 200);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(255) NOT NULL,
  `userid` int(255) NOT NULL,
  `dueid` int(255) NOT NULL,
  `reference_number` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `session` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(80) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `Username`, `password`, `role`) VALUES
(1, 'Amadikwa Joy N.', 'amadkwajoyn@gmail.com', '08165537257', 'Umuerim Nekede', '16h/0037/cs', '654321joy', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dues`
--
ALTER TABLE `dues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
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
-- AUTO_INCREMENT for table `dues`
--
ALTER TABLE `dues`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
