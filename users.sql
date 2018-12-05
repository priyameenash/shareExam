-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 07:11 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinepartner`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `contact_number` int(20) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `exam_name` varchar(255) DEFAULT NULL,
  `rate` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Email`, `contact_number`, `user_password`, `exam_name`, `rate`) VALUES
('priya', 'priya@gmail.com', 2147483647, 'fdgdfgdf', NULL, NULL),
('priya', 'spriya03@gmail.com', 2147483647, 'dfgdfh', NULL, NULL),
('priya', 'spriya@gmail.com', 2147483647, 'sfsgffg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
