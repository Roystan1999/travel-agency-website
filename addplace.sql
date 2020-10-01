-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2020 at 08:12 PM
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
-- Database: `tweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `addplace`
--

CREATE TABLE `addplace` (
  `id` int(255) NOT NULL,
  `add_place` varchar(255) NOT NULL,
  `number_of_adults` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `Stay_amount` int(255) NOT NULL,
  `food_amount` varchar(255) NOT NULL,
  `number_of_days` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addplace`
--

INSERT INTO `addplace` (`id`, `add_place`, `number_of_adults`, `description`, `Stay_amount`, `food_amount`, `number_of_days`) VALUES
(1, 'murdehwar', 4, 'best place to visit in budget', 2000, '1000', '2'),
(2, 'murdehwar', 1, 'best place to visit in budget', 5000, '1000', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addplace`
--
ALTER TABLE `addplace`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addplace`
--
ALTER TABLE `addplace`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
