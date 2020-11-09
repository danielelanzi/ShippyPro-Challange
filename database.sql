-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 06, 2020 at 06:25 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_flight`
--

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `id_airport` int(3) NOT NULL,
  `name` varchar(256) NOT NULL,
  `code` varchar(128) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`id_airport`, `name`, `code`, `lat`, `lng`) VALUES
(1, 'Roma', 'FCO', 41.7946, 12.2503),
(2, 'Barcellona', 'BCN', 41.303, 2.07593),
(3, 'Londra', 'STN', 51.8893, 0.262703),
(4, 'Parigi', 'CDG', 49.0032, 2.56702),
(5, 'Praga', 'PRG', 50.1062, 14.2666),
(6, 'Berlino', 'BER', 52.3786, 13.5206);

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `code_departure` int(3) NOT NULL,
  `code_arrival` int(3) NOT NULL,
  `price` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`code_departure`, `code_arrival`, `price`) VALUES
(1, 2, '10.00'),
(1, 3, '387.00'),
(1, 4, '51.00'),
(1, 5, '157.00'),
(1, 6, '34.00'),
(2, 1, '10.00'),
(2, 3, '387.00'),
(2, 4, '51.00'),
(2, 5, '157.00'),
(2, 6, '34.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`id_airport`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD KEY `code_departure` (`code_departure`),
  ADD KEY `code_arrival` (`code_arrival`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airport`
--
ALTER TABLE `airport`
  MODIFY `id_airport` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flight`
--
ALTER TABLE `flight`
  ADD CONSTRAINT `flight_ibfk_1` FOREIGN KEY (`code_departure`) REFERENCES `airport` (`id_airport`) ON UPDATE CASCADE,
  ADD CONSTRAINT `flight_ibfk_2` FOREIGN KEY (`code_arrival`) REFERENCES `airport` (`id_airport`) ON UPDATE CASCADE;
