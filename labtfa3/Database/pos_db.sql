-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2026 at 05:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `email`, `phone`, `created_at`) VALUES
(1, 'Cruz, Aryanne Chelsea', 'cruz.aryannechelsea@example.com', '+63 917 000 0000', '2026-10-02 20:09:41'),
(2, 'Jay Pritchett', 'jay.pritchett@closetsclosets.com', '+1 310 555 0101', '2026-10-02 20:09:41'),
(3, 'Gloria Delgado-Pritchett', 'gloria.pritchett@example.com', '+1 310 555 0102', '2026-10-02 20:09:41'),
(4, 'Phil Dunphy', 'phil.dunphy@realty.com', '+1 310 555 0103', '2026-10-02 20:09:41'),
(5, 'Claire Dunphy', 'claire.dunphy@pritchclosets.com', '+1 310 555 0104', '2026-10-02 20:09:41'),
(6, 'Luke Dunphy', 'luke.dunphy@example.com', '+1 310 555 0105', '2026-10-02 20:09:41'),
(7, 'Haley Dunphy', 'haley.dunphy@nerp.com', '+1 310 555 0106', '2026-10-02 20:09:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `created_at`) VALUES
(1, 'cruz_admin', 'Aryanne Chelsea Cruz', '2026-10-02 20:09:41'),
(2, 'mitchell_law', 'Mitchell Pritchett', '2026-10-02 20:09:41'),
(3, 'cam_fizzbo', 'Cameron Tucker', '2026-10-02 20:09:41'),
(4, 'alex_genius', 'Alex Dunphy', '2026-10-02 20:09:41'),
(5, 'manny_poet', 'Manny Delgado', '2026-10-02 20:09:41'),
(6, 'stella_mascot', 'Stella Pritchett', '2026-10-02 20:09:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
