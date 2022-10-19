-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 05:42 PM
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
-- Database: `database_pv`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_pv`
--

CREATE TABLE `form_pv` (
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(12) NOT NULL,
  `dob` date NOT NULL,
  `message` varchar(1000) NOT NULL,
  `submit` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form_pv`
--

INSERT INTO `form_pv` (`name`, `email`, `phone`, `dob`, `message`, `submit`, `id`) VALUES
('Selena Gomez', 'SG@gmail.com', 2147483647, '2022-10-10', 'AYOKKKK', '12:32:22pm', 3),
('Lalisa Manobal', 'swift@gmail.com', 2147483647, '2022-10-14', 'AYUUUUkkkkkk', '06:09:43am', 4),
('Alan', 'alanw@gmail.com', 2147483647, '2022-10-06', 'uuuuuu', '11:32:26am', 7),
('Novia Indah', 'nvind@gmail.com', 831526977, '2022-11-07', 'slebewww', '11:33:08am', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_pv`
--
ALTER TABLE `form_pv`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `EMAIL` (`email`,`phone`,`dob`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `Message` (`message`,`submit`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_pv`
--
ALTER TABLE `form_pv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
