-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2022 at 01:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'f65fed33feb4b932bcf434f0006c4986');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `p_id` int(100) NOT NULL,
  `p_name` varchar(255) DEFAULT NULL,
  `p_contact` int(11) DEFAULT NULL,
  `p_bloodgroup` varchar(255) DEFAULT NULL,
  `p_address` varchar(255) DEFAULT NULL,
  `p_time` varchar(255) DEFAULT NULL,
  `p_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`p_id`, `p_name`, `p_contact`, `p_bloodgroup`, `p_address`, `p_time`, `p_status`) VALUES
(1, 'Rifat', 1717638209, 'AB+', 'DMC', '10 am', 'need'),
(2, 'Rifat', 1717638209, 'AB+', 'DMC', '10 am', NULL),
(3, 'p1', 1717638208, 'B+', 'United Medical College', '12 pm, 18/11/2022', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `gender` varchar(255) DEFAULT NULL,
  `age` int(255) DEFAULT NULL,
  `bloodgroup` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `point` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `contactno`, `posting_date`, `gender`, `age`, `bloodgroup`, `address`, `status`, `point`) VALUES
(15, 'Robayet', 'Ahasan', 'greatrifat@gmail.com', 'Committee@1', '01717638209', '2022-09-14 16:21:10', 'Male', 20, 'B+', 'Dhaka', 'Available', NULL),
(16, 'Robayet', 'Robayet', 'greatrifatt@gmail.com', 'COMMITTEE@!', '0171763820', '2022-09-14 18:09:43', 'Male', 18, 'B+', 'Dhaka', 'Available', NULL),
(17, 'user1', 'user1', 'user@gmail.com', 'Committee@1', '01717638207', '2022-09-14 20:46:46', 'Female', 20, 'A+', 'Dhakaa', 'Available', NULL),
(18, 'dgdg', 'gdsg', 'greatrifattt@gmail.com', 'Test@1234', '01717638209', '2022-09-14 21:35:39', 'Male', 13, 'B-', 'Dhaka', 'Unavailable', NULL),
(19, 'Ovie ', 'Rahman', 'ovie@gmail.com', 'Ovie@1', '01717638207', '2022-09-17 11:06:19', 'Male', 20, 'O-', 'Barishal', 'Available', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`p_id`);

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
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
