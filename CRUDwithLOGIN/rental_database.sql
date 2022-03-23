-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 02:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent`
--
CREATE DATABASE IF NOT EXISTS `rent` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `rent`;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user_id`, `car_id`, `date_from`, `date_to`) VALUES
(2, 6, 1, '2222-01-01', '2222-01-02'),
(3, 6, 1, '2222-01-01', '2222-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `model` varchar(30) NOT NULL,
  `seats` int(11) NOT NULL,
  `color` varchar(30) NOT NULL,
  `make` year(4) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `picture`, `model`, `seats`, `color`, `make`, `price`, `status`) VALUES
(1, '6239de8c20bcf.jpg', 'Mercedes E Class', 5, 'White', 2021, 14, 'Reserved'),
(2, '6239c69a765cf.jpg', 'Audi A4', 5, 'Red', 2020, 14, 'Available'),
(3, '6239c7c7c9726.jpg', 'Jeep Renegade', 5, 'green', 2022, 18, 'Available'),
(4, '6239c83753f4d.jpg', 'VW Tiguan', 5, 'green', 2021, 16, 'Available'),
(5, '6239c8439bf07.jpg', 'Citroen Berlingo', 7, 'Silver', 2020, 14, 'Available'),
(6, '6239c8511d96e.png', 'VW Cady', 7, 'Black', 2019, 16, 'Available'),
(7, '6239c85ea3dcf.jpg', 'Mercedes C Class', 5, 'Black', 2021, 14, 'Available'),
(8, '6239c87646391.jpg', 'BMW 3series', 5, 'Blue', 2021, 16, 'Available'),
(9, '6239c8816e6be.jpg', 'Skoda Oktavia', 5, 'Silver', 2021, 12, 'Available'),
(10, '6239c88d05122.jpg', 'VW Passat CC', 5, 'Black', 2022, 18, 'Available'),
(11, '6239c902dab5a.jpg', 'BMW 5series', 5, 'Black', 2021, 17, 'Available'),
(12, '6239c90f04dec.jpg', 'BMW X5', 5, 'Blue', 2021, 17, 'Available'),
(13, '6239c91bd6c60.jpg', 'Ford Galaxy', 7, 'Blue', 2020, 15, 'Available'),
(14, '6239c92878e00.jpg', 'Honda CR-V', 7, 'Red', 2022, 19, 'Available'),
(15, '6239c93fa6840.jpg', 'Opel Zafira', 7, 'Red', 2021, 15, 'Available'),
(20, '6239debc25ac2.jpg', 'VW Cady', 2, 'Black', 2022, 11, 'Reserved'),
(21, '623a39914f512.jpg', 'Ford Mondeo', 7, 'Blue', 2022, 11, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `picture` varchar(255) NOT NULL,
  `status` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `birthdate`, `picture`, `status`) VALUES
(1, 'Ivan', 'Maksimov', 'ivan_@mail.com', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '1321-02-05', '6239a4f934dcf.jpeg', 'adm'),
(2, 'dfdd', 'dff', 'dfff@dfff.dff', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '2021-02-05', '623a37edb1b2f.jpeg', 'user'),
(5, 'ada', 'adada', 'ada@ada.ada', 'e2288e14c03e6aa159cf2193b3c23c60264068f25367b66fd4ac268fb2c16bb9', '2022-03-01', '623a389cb9cef.jpg', 'user'),
(6, 'asa', 'asasa', 'asa@asa.asa', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '2022-03-01', '623a38c70ca3d.png', 'user'),
(7, 'aaa', 'asa', 'aaa@asa.asa', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '2022-03-01', '623a38ebeeb4a.jpg', 'user'),
(8, 'ddd', 'ddd', 'ddd@asa.asa', '96cae35ce8a9b0244178bf28e4966c2ce1b8385723a96a6b838858cdd6ca0a1e', '2022-03-01', 'avatar.png', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `car_id` (`car_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
