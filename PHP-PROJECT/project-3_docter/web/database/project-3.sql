-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2024 at 04:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-3`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(5) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `d_name` varchar(20) NOT NULL,
  `dep_name` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `time` varchar(15) NOT NULL,
  `massage` varchar(700) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `p_name`, `d_name`, `dep_name`, `phone`, `email`, `time`, `massage`, `date`) VALUES
(4, 'aditya', 'modi', 'physiotherapy-2', '6352839125', 'avadh@gmail.com', '6 to 8', '“Be kind, for everyone you meet.\"', '12-08-2023');

-- --------------------------------------------------------

--
-- Table structure for table `buy_m`
--

CREATE TABLE `buy_m` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `m_name` varchar(25) NOT NULL,
  `qun` varchar(10) NOT NULL,
  `mrp` varchar(25) NOT NULL,
  `total` varchar(10) NOT NULL,
  `e_date` varchar(10) NOT NULL,
  `img` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buy_m`
--

INSERT INTO `buy_m` (`id`, `name`, `m_name`, `qun`, `mrp`, `total`, `e_date`, `img`) VALUES
(54, 'adi', 'METASINE', '20', '10', '200', '2024-01-04', 'medi.jpeg'),
(55, 'adi', 'METASINE', '20', '10', '60', '2024-01-04', 'medi.jpeg'),
(56, 'adi', 'DOLO', '200', '102', '510', '2023-12-13', 'dolo.png'),
(57, 'adi', 'DOLO', '200', '102', '10200', '2023-12-13', 'dolo.png');

-- --------------------------------------------------------

--
-- Table structure for table `contect`
--

CREATE TABLE `contect` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `massage` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contect`
--

INSERT INTO `contect` (`id`, `name`, `email`, `phone`, `massage`) VALUES
(1, 'dharmik', 'dhaemiknadoda0711@gmail.com', '6352839125', '\"You will face many defeats in life, but never let yourself be defeated\"'),
(3, 'ayush', 'avadh@gmail.com', '6352839125', '\"You will face many defeats in life, but never let yourself be defeated\"'),
(4, 'anushka', 'anushka@gmail.com', '6352839125', '“Be kind, for everyone you meet.\"');

-- --------------------------------------------------------

--
-- Table structure for table `docter`
--

CREATE TABLE `docter` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `dep_name` varchar(25) NOT NULL,
  `img` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `docter`
--

INSERT INTO `docter` (`id`, `name`, `email`, `dep_name`, `img`) VALUES
(29, 'virat kohli', 'adi@gmail.com', 'ICU', 'd-1.jpg'),
(32, 'dharmik', 'adi@gmail.com', 'physiotherapy', 'd-1.jpg'),
(33, 'adi', 'adi@gmail.com', 'physiotherapy', 'd-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `feedback` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `role`, `feedback`) VALUES
(1, 'dharmik', 'manager', 'e is not only an Excellent Doctor , he is simple, superb Human being, Sober, approachable, a Great Social Worker,'),
(5, 'adi', 'manager', 'He is not only an Excellent Doctor , he is simple, superb Human being, Sober, approachable, a Great Social Worker, friendly approach with smiling face with his selfless service with his selfless services. Always amazing treatment. He is an extraordinary intelligent Doctor with human values.'),
(6, 'jemin', 'manager', 'He is not only an Excellent Doctor , he is simple, superb Human being, Sober, approachable, a Great Social Worker, friendly approach with smiling face with his selfless service with his selfless services. Always amazing treatment. He is an extraordinary intelligent Doctor with human values.');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `m_name` varchar(20) NOT NULL,
  `m_code` varchar(10) NOT NULL,
  `tabs` varchar(15) NOT NULL,
  `qun` varchar(20) NOT NULL,
  `e_date` varchar(15) NOT NULL,
  `mrp` varchar(100) NOT NULL,
  `rate` varchar(10) NOT NULL,
  `details` varchar(500) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `name`, `m_name`, `m_code`, `tabs`, `qun`, `e_date`, `mrp`, `rate`, `details`, `img`) VALUES
(13, 'ayush', 'DOLO', '01', '15', '20', '2023-12-21', '250', '5', 'best recovery ', 'dolo.png'),
(14, 'adi', 'DOLO', '03', '20', '200', '2023-12-13', '102', '5', 'best recovery ', 'dolo.png'),
(15, 'adi', 'METASINE', '20', '15', '20', '2024-01-04', '10', '5', 'best recovery ', 'medi.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phone_no`, `email`, `password`) VALUES
(7, 'dharmik', '6352839125', 'adi@gmail.com', 'qwe123'),
(8, 'dharmik', '5236987416', 'adi@gmail.com', '1q2w3e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buy_m`
--
ALTER TABLE `buy_m`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contect`
--
ALTER TABLE `contect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docter`
--
ALTER TABLE `docter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `buy_m`
--
ALTER TABLE `buy_m`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `contect`
--
ALTER TABLE `contect`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `docter`
--
ALTER TABLE `docter`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
