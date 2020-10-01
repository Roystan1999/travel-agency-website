-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2020 at 08:03 PM
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
-- Database: `travel`
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
  `number_of_days` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addplace`
--

INSERT INTO `addplace` (`id`, `add_place`, `number_of_adults`, `description`, `Stay_amount`, `food_amount`, `number_of_days`, `pic`) VALUES
(1, 'Goa', 2, 'nightout,firecamp,parasailing', 13000, '7000', '5', 'upload/goa.jpg'),
(2, 'manali', 4, 'best place to visit in budget', 18000, '7000', '5', 'upload/manali.jpg'),
(3, 'leh ladak', 5, 'Leh is the most well-known city of Ladakh. Surrounded by towering mountain ranges and serene lakes, it offers a very different tourism experience to visitors. With its dry and barren landscape enlivened by the colourful Buddhist monasteries, Leh creates a', 17000, '8000', '6', 'upload/f.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `id` int(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`id`, `user`, `pass`) VALUES
(1, 'roy@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `enquiry` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `mobile`, `date`, `enquiry`) VALUES
(1, 'Abdulla murdeshwar', '9622245222', '2020-09-11', 'please tell me details regarding room facilities'),
(2, 'Devidas murdeshwar', '9622245222', '2020-09-24', 'nnx'),
(3, 'Lisha murdeshwar', '9622245222', '2020-10-06', 'z');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`) VALUES
('roy@gmail.', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `usersignup`
--

CREATE TABLE `usersignup` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersignup`
--

INSERT INTO `usersignup` (`id`, `username`, `email`, `phone`, `password`, `cpassword`) VALUES
(1, 'admin', 'roystandsouza9@gmail.com', '55555555555555555555555555555555555', '$2y$10$pNrBkUTc5GZsK5fs2.3BmecguLfoOyeiBwQi8yPHpKOZoqzK84gQS', '$2y$10$UtbQXMZMaAdr9Isdr19w4.BcCzW/FqLrQ0nQsJdHm9KkXHGKjcXAK'),
(2, '_roy_ds', 'admin1@gmail.com', 'x', '$2y$10$.J3f6VaSI1Mr85Ll93w7AODikge1udl8RVVSR81qALd0ngjUxWkam', '$2y$10$bDQ0ButlM0BO6i4ZPZJOaeOQ.rLveacryGAjsNOrnPHSK6wQqV/La'),
(3, 'admin', 'b@g.com', '55555555555555555555555555555555555', '$2y$10$H6o79D0UUxAsKlpGAi9K1uJqjfdugiNpdEi1dT14wlVQz1yFuwLgq', '$2y$10$84w09hroMQzrqtZ9IH7f.O3ETfuC7ZvqDxA3ureIHWAW797q1whSG'),
(4, 'roy', 'roy@gmail.com', '9876543215', '$2y$10$Wg8Q/Xi7qBdoRDwLrLIbYuGp5CIlWHiXNcQ41a6UsCyhiYHe.plCW', '$2y$10$teTTtWjO/VfyLmt/BZ8Gw.H30lZKGniLVnleiUHklzTfrucYrLu1q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addplace`
--
ALTER TABLE `addplace`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersignup`
--
ALTER TABLE `usersignup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addplace`
--
ALTER TABLE `addplace`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usersignup`
--
ALTER TABLE `usersignup`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
