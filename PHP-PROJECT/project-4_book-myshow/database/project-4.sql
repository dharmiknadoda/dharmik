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
-- Database: `project-4`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(5) NOT NULL,
  `img` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `img`) VALUES
(1, 'banner1.avif'),
(2, 'banner2.avif\"');

-- --------------------------------------------------------

--
-- Table structure for table `book_ticket`
--

CREATE TABLE `book_ticket` (
  `id` int(20) NOT NULL,
  `movie_id` varchar(20) NOT NULL,
  `movie_name` varchar(250) NOT NULL,
  `Seats` varchar(200) NOT NULL,
  `Time` varchar(250) NOT NULL,
  `price` varchar(350) NOT NULL,
  `ticket` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_ticket`
--

INSERT INTO `book_ticket` (`id`, `movie_id`, `movie_name`, `Seats`, `Time`, `price`, `ticket`) VALUES
(1, '1', 'animal', '1st', '8 To 12', '798', '2'),
(2, '1', '', '2st', '3 To 6', '798', '2');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `tour` varchar(25) NOT NULL,
  `language` varchar(25) NOT NULL,
  `date` varchar(10) NOT NULL,
  `location` varchar(10) NOT NULL,
  `poster` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `tour`, `language`, `date`, `location`, `poster`) VALUES
(2, 'king', 'canada', 'english', '2023-12-12', 'toranto', 'king.avif'),
(3, 'aditya gadhvi live', 'gujarat', 'english , hindi', '2023-12-27', 'surat', 'aditya.avif'),
(4, 'zakir khan', 'gujarat', 'Hindi', '2023-12-13', 'surat', 'jakir khan.avif'),
(5, 'sam', 'gujarat', 'Hindi', '2023-12-05', 'surat', 'sam.avif'),
(6, 'reel to real', 'gujarat', 'english , hindi', '2023-12-03', 'rajkort', 'reel.avif');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `movie` varchar(20) NOT NULL,
  `feedback` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `movie`, `feedback`) VALUES
(1, 'dharmik', 'dhaemiknadoda0711@gmail.com', 'animal', 'Parents need to know that Animal is an extremely violent Indian action drama full of gore, misogyny, and strong language. Ranbir Kapoor stars as Ranvijay Singh whose daddy issues and thirst for revenge lead him deep into a world of crime. The film has intense blood, gore, and violence throughout.'),
(4, 'adi', 'adi@gmail.com', 'sam bahadur', 'Parents need to know that Animal is an extremely violent Indian action drama full of gore, misogyny, and strong language. Ranbir Kapoor stars as Ranvijay Singh whose daddy issues and thirst for revenge lead him deep into a world of crime. The film has intense blood, gore, and violence throughout.'),
(5, 'adi', 'adi@gmail.com', 'sam bahadur', 'Parents need to know that Animal is an extremely violent Indian action drama full of gore, misogyny, and strong language. Ranbir Kapoor stars as Ranvijay Singh whose daddy issues and thirst for revenge lead him deep into a world of crime. The film has intense blood, gore, and violence throughout.');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(5) NOT NULL,
  `movie_name` varchar(15) NOT NULL,
  `view` varchar(20) NOT NULL,
  `language` varchar(100) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `date` varchar(15) NOT NULL,
  `poster` varchar(20) NOT NULL,
  `banner` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `movie_name`, `view`, `language`, `duration`, `type`, `date`, `poster`, `banner`) VALUES
(1, 'animal', '5D', 'english', '3H 21M', 'action,drama', '2023-12-18', 'animal.avif', 'banner.avif'),
(3, 'sam bahadur', '3D', 'english', '2H 21M', 'action,drama', '2023-12-18', 'sam.avif', 'sam-bahadur.avif'),
(4, 'jimma', '3D', 'english', '3H 21M', 'action,drama', '2023-12-21', 'jimma.avif', 'jimma-b.avif'),
(5, 'ekda', '5D', 'english', '3H 21M', 'action,drama', '2023-12-16', 'ekda.avif', 'jimma-b.avif'),
(6, 'wonka', '5D', 'Hindi', '3H 21M', 'action', '2023-12-21', 'wonka.avif', 'wonka-b.avif');

-- --------------------------------------------------------

--
-- Table structure for table `plays`
--

CREATE TABLE `plays` (
  `id` int(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  `tour` varchar(25) NOT NULL,
  `language` varchar(20) NOT NULL,
  `date` varchar(25) NOT NULL,
  `location` varchar(20) NOT NULL,
  `poster` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plays`
--

INSERT INTO `plays` (`id`, `name`, `tour`, `language`, `date`, `location`, `poster`) VALUES
(1, 'lagaani', 'canada', 'english', '2023-12-07', 'toranto', 'p1.avif'),
(2, 'Eka lagnac', 'gujarat', 'english', '2023-12-05', 'vadodara', 'p2.avif'),
(3, 'ram', 'gujarat', 'english', '2023-12-27', 'surat', 'p3.avif'),
(4, 'khushar', 'gujarat', 'Hindi', '2023-12-12', 'surat', 'p4.avif'),
(5, 'police', 'gujarat', 'english , hindi', '2023-12-13', 'toranto', 'p5.avif');

-- --------------------------------------------------------

--
-- Table structure for table `premieres`
--

CREATE TABLE `premieres` (
  `id` int(5) NOT NULL,
  `movie_name` varchar(20) NOT NULL,
  `view` varchar(20) NOT NULL,
  `language` varchar(25) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date` varchar(25) NOT NULL,
  `banner` varchar(15) NOT NULL,
  `poster` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `premieres`
--

INSERT INTO `premieres` (`id`, `movie_name`, `view`, `language`, `duration`, `type`, `date`, `banner`, `poster`) VALUES
(7, 'the persian', '3D', 'Hindi', '3H 21M', 'action,drama', '2023-12-22', 'b-1.avif', 'p-1.avif'),
(8, 'hetrez', '3D', 'english', '3H 21M', 'action,drama', '2023-12-21', 'b-2.avif', 'p-2.avif'),
(9, 'khuriyan', '5D', 'english , hindi', '2H 21M', 'action,drama', '2023-12-20', 'b-3.avif', 'p-3.avif'),
(10, 'mindo', '5D', 'Hindi', '2H 21M', 'action,drama', '', 'b-4.avif', 'p-4.avif'),
(11, 'blackberry', '3D', 'Hindi', '2H 21M', 'action,drama', '', 'b-5.avif', 'p-5.avif');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(5) NOT NULL,
  `movie_id` varchar(10) NOT NULL,
  `rating` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `movie_id`, `rating`) VALUES
(1, '1', '9'),
(2, '1', '3'),
(3, '1', '7'),
(4, '1', '2'),
(5, '1', '1'),
(6, '4', '3'),
(7, '2', '4'),
(8, '1', '9');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `phone_no` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `phone_no`, `email`, `password`) VALUES
(1, 'dharmik', '6352839125', 'dhaemiknadoda0711@gmail.com', '123qwe'),
(3, 'ayush', '5236987416', 'adi@gmail.com', '12345qwe');

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `tour` varchar(25) NOT NULL,
  `language` varchar(30) NOT NULL,
  `date` varchar(25) NOT NULL,
  `location` varchar(20) NOT NULL,
  `poster` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`id`, `name`, `tour`, `language`, `date`, `location`, `poster`) VALUES
(1, 'bike', 'gujarat', 'Hindi', '2023-12-12', 'surat', 's1.avif'),
(2, '21 day walking', 'gujarat', 'Hindi', '2023-12-08', 'surat', 's2.avif'),
(3, 'samurai', 'canada', 'english', '2023-12-16', 'toranto', 's3.avif'),
(4, 'kabbadi', 'gujarat', 'Hindi , gujarati', '2023-12-05', 'rajkort', 's5.avif'),
(5, 'fitness', 'gujarat', 'english', '2023-12-22', 'toranto', 's4.avif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_ticket`
--
ALTER TABLE `book_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plays`
--
ALTER TABLE `plays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `premieres`
--
ALTER TABLE `premieres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `book_ticket`
--
ALTER TABLE `book_ticket`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `plays`
--
ALTER TABLE `plays`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `premieres`
--
ALTER TABLE `premieres`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sport`
--
ALTER TABLE `sport`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
