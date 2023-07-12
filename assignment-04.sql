-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 08, 2023 at 02:48 PM
-- Server version: 10.3.31-MariaDB-0+deb10u1
-- PHP Version: 7.3.31-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs230_u220088`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment4`
--

CREATE TABLE `assignment4` (
  `id` int(11) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Mobile` int(15) NOT NULL,
  `EAdd` varchar(30) NOT NULL,
  `Add1` varchar(30) NOT NULL,
  `Add2` varchar(30) NOT NULL,
  `Town` varchar(30) NOT NULL,
  `County` varchar(30) NOT NULL,
  `Eircode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assignment4`
--

INSERT INTO `assignment4` (`id`, `Title`, `Fname`, `Lname`, `Mobile`, `EAdd`, `Add1`, `Add2`, `Town`, `County`, `Eircode`) VALUES
(1, 'Mr', 'Derrick', 'Rose', 123456789, 'derrickrose@gmail.com', 'Ard Macha', 'Old Bawn', 'Tallaght', 'Dublin', 'D24 D24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment4`
--
ALTER TABLE `assignment4`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment4`
--
ALTER TABLE `assignment4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
