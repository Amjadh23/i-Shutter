-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 27, 2022 at 10:45 PM
-- Server version: 8.0.19
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arenabadminton`
--
CREATE DATABASE IF NOT EXISTS `arenabadminton` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `arenabadminton`;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `Client Id` int NOT NULL,
  `Client Name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Client Phone No.` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Client Address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Booking Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Client Id`, `Client Name`, `Client Phone No.`, `Client Address`, `Booking Date`) VALUES
(1, 'Amjadh', '0172087080', 'Seri Margosa', '2022-11-28'),
(2, 'Adib', '0294384483', 'Sterling Condo', '2022-12-10'),
(3, 'Aina', '0123974894', 'Taman Cempaka', '2022-12-08'),
(4, 'Chong', '01453243523', 'Gunung Rapat', '2022-12-21'),
(5, 'Aiman Aizzat', '0178484734', 'Puncak Alam', '2022-12-31'),
(6, 'Vimalan', '0128487555', 'Taman Botani', '2022-12-05'),
(7, 'Sarvesh', '0184389545', 'Sunway City', '2022-12-20'),
(8, 'Azrinaz', '0124854834', 'Sungai Rokam', '2022-12-09'),
(9, 'Amiesha', '018493453', 'Teluk Gadung', '2022-12-10'),
(10, 'Muhammad Nurakmal Bin Nor Azmi', '0133129202', '2B7, Puncak Alam', '2022-11-28'),
(11, 'Muhammad Imran Fahmi Bin Anuar', '0176610322', 'Fasa 2, Puncak Alam', '2022-12-21'),
(12, 'Syazikri Saedi Bin Idris Saedi', '01128394171', 'Fasa 3, Puncak Alam', '2023-05-10'),
(13, 'Luqman Hafiy', '0199234627', 'Fasa 2, Puncak Alam', '2022-12-14'),
(14, 'Azri Hafiz', '0173315110', '2B6, Puncak Alam', '2023-11-15'),
(15, 'Muhammad Hazeeq', '0133123419', 'Batu Gajah', '2022-12-27'),
(16, 'Muhammad Syazrul', '0192388181', 'Ipoh, Perak', '2022-12-08'),
(18, 'Yathesh Ram', '0123131399', 'Sunway', '2022-11-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Client Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `Client Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
