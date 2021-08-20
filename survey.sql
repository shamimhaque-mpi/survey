-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 20, 2021 at 01:05 PM
-- Server version: 8.0.26-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `pgm_lang` text NOT NULL,
  `year_of_experience` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `profession`, `pgm_lang`, `year_of_experience`) VALUES
(1, 'Shamim Haque', 'sdfds@gmail.com', 'developer', 'sdfds', 4),
(2, 'Shamim Haque', 'sdfds@gmail.com', 'developer', 'sdfds', 4),
(3, 'Shamim Haque', 'sdfds@gmail.com', 'developer', 'sdfds', 4),
(4, 'Shamim Haque', 'sdfds@gmail.com', 'developer', 'sdfds', 4),
(5, 'Shamim Haque', 'sdfds@gmail.com', 'developer', 'sdfds', 4),
(6, 'Shamim Haque', 'sdfds@gmail.com', 'developer', 'sdfdf', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
