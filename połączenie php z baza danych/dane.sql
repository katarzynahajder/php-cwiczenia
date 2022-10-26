-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 05:00 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uczen`
--

-- --------------------------------------------------------

--
-- Table structure for table `dane`
--

CREATE TABLE `dane` (
  `imie` varchar(30) NOT NULL,
  `nazwisko` varchar(30) NOT NULL,
  `klasa` varchar(30) NOT NULL,
  `srednia` varchar(30) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dane`
--

INSERT INTO `dane` (`imie`, `nazwisko`, `klasa`, `srednia`, `id`) VALUES
('Jan', 'Kowalski', '2TG', '4.16', 1),
('Adam', 'Grabarz', '4TI', '4.89', 2),
('Kamila', 'Nowak', '2TG', '3.68', 3),
('Aleksandra', 'Majkut', '1TH', '4.28', 4),
('Maciej', 'Urbański', '3TE', '4.50', 5),
('Gabriel', 'Rutkowski', '2TE', '4.05', 6),
('Iga', 'Mróz', '2TI', '4.47', 7),
('Fabian', 'Kozłowski', '4TK', '5.12', 8),
('Jagoda', 'Pietrzak', '3TB', '4.25', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dane`
--
ALTER TABLE `dane`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dane`
--
ALTER TABLE `dane`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
