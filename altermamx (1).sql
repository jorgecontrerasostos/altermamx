-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 02:05 AM
-- Server version: 8.0.22
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `altermamx`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `name`, `description`, `venue`, `date`) VALUES
(1, 'Conferencia Mensual', 'Conferencia del mes de enero del 2021', 'Audiorio general', '2021-01-30');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `name`, `description`, `price`) VALUES
(3, 'Studio Photoshoot', 'Indoor photoshoot', '$1599'),
(4, 'Outdoor Photoshoot', 'Outdoor photoshoot on any location of your choosing', '$1999');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@altermamx.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(3, 'Jorge', 'jorge@mail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(5, 'Jorge', 'jorge@mail.com', '12345'),
(6, 'Luis', 'luis@mail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'Roberto', 'rober@mail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, 'Pedro', 'pedro@mail.com', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `userEvents`
--

CREATE TABLE `userEvents` (
  `userEvent_id` int NOT NULL,
  `event_id` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userEvents`
--

INSERT INTO `userEvents` (`userEvent_id`, `event_id`, `user_id`) VALUES
(1, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `userServices`
--

CREATE TABLE `userServices` (
  `userService_id` int NOT NULL,
  `service_id` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userServices`
--

INSERT INTO `userServices` (`userService_id`, `service_id`, `user_id`) VALUES
(1, 3, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `userEvents`
--
ALTER TABLE `userEvents`
  ADD PRIMARY KEY (`userEvent_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `userServices`
--
ALTER TABLE `userServices`
  ADD PRIMARY KEY (`userService_id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `userEvents`
--
ALTER TABLE `userEvents`
  MODIFY `userEvent_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userServices`
--
ALTER TABLE `userServices`
  MODIFY `userService_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `userEvents`
--
ALTER TABLE `userEvents`
  ADD CONSTRAINT `userevents_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `userevents_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`);

--
-- Constraints for table `userServices`
--
ALTER TABLE `userServices`
  ADD CONSTRAINT `userservices_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `service` (`service_id`),
  ADD CONSTRAINT `userservices_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
