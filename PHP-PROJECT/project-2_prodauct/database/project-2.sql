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
-- Database: `project-2`
--

-- --------------------------------------------------------

--
-- Table structure for table `contect`
--

CREATE TABLE `contect` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `subject` varchar(10) NOT NULL,
  `comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contect`
--

INSERT INTO `contect` (`id`, `name`, `email`, `subject`, `comment`) VALUES
(1, 'dharmik', 'adi@gmail.com', 'cricket', 'aa'),
(2, 'ayush', 'ayush@gmail.com', 'manager', 'They are typically made of cotton textile in a sto'),
(3, 'adi', 'adi@gmail.com', 'manager', 'You will face many defeats in life, but never let ');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `feedback` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`) VALUES
(1, 'dharmik', 'He is not only an Excellent Doctor , he is simple, superb Human being, Sober, approachable, a Great Social Worker, friendly approach with smiling face with his selfless service with his selfless services. Always amazing treatment. He is an extraordinary intelligent Doctor with human values.'),
(2, 'dharmik', 'He is not only an Excellent Doctor , he is simple, superb Human being, Sober, approachable, a Great Social Worker, friendly approach with smiling face with his selfless service with his selfless services. Always amazing treatment. He is an extraordinary intelligent Doctor with human values.'),
(3, 'dharmik', 'Parents need to know that Animal is an extremely violent Indian action drama full of gore, misogyny, and strong language. Ranbir Kapoor stars as Ranvijay Singh whose daddy issues and thirst for revenge lead him deep into a world of crime. The film has intense blood, gore, and violence throughout.');

-- --------------------------------------------------------

--
-- Table structure for table `oreder`
--

CREATE TABLE `oreder` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` varchar(25) NOT NULL,
  `qut` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oreder`
--

INSERT INTO `oreder` (`id`, `name`, `price`, `qut`) VALUES
(10, 'BOOK', '1000', '3'),
(11, 'BOOK', '1000', '5');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `name` varchar(10) NOT NULL,
  `price` int(50) DEFAULT NULL,
  `date` varchar(10) NOT NULL,
  `img` varchar(50) DEFAULT NULL,
  `detail` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`name`, `price`, `date`, `img`, `detail`) VALUES
('BOOK', 1000, '2023-12-06', 't-shirt.jpeg', 'A book is a medium for recording information in the form of writing or images, typically composed of many pages (made of papyrus, parchment, vellum, or paper) bound together and protected by a cover.'),
('T-SHIRT', 1000, '2023-12-06', 't-shirt-2.jpeg', 'A book is a medium for recording information in the form of writing or images, typically composed of many pages (made of papyrus, parchment, vellum, or paper) bound together and protected by a cover.'),
('BOOK-2', 1000, '2023-12-06', 't-shirt-3.jpeg', 'They are typically made of cotton textile in a stockinette or jersey knit, which has a distinctively pliable texture compared to shirts made of woven cloth. Some modern versions have a body made from a continuously knitted tube, produced on a circular knitting machine, such that the torso has no side seams.'),
('book-5', 2000, '2023-12-09', 'd-1.jpg', 'A book is a medium for recording information in the form of writing or images, typically composed of many pages (made of papyrus, parchment, vellum, or paper) bound together and protected by a cover.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `role` varchar(10) NOT NULL,
  `img` varchar(15) NOT NULL,
  `massage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone_no`, `role`, `img`, `massage`) VALUES
(46, 'ayush', 'ayush@gmail.com', '123qwe', '6352839125', 'manager', 'me.jpg', '“Be kind, for everyone you meet.\"'),
(47, 'adi', 'adi12@gmail.com', 'qwe123', '6352839125', 'manager', 'pic-1.jpeg', '“Be kind, for everyone you meet.\"'),
(48, 'ayush', 'ayush@gmail.com', '1q2w3e', '5236987416', 'manager', 'pic-2.jpeg', '“Be kind, for everyone you meet.\"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contect`
--
ALTER TABLE `contect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oreder`
--
ALTER TABLE `oreder`
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
-- AUTO_INCREMENT for table `contect`
--
ALTER TABLE `contect`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oreder`
--
ALTER TABLE `oreder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
