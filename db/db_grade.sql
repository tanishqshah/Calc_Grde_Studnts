-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 02:55 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_grade`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `iwp` int(100) NOT NULL,
  `bac` int(100) NOT NULL,
  `pdc` int(100) NOT NULL,
  `mi` int(100) NOT NULL,
  `isaa` int(100) NOT NULL,
  `final` int(100) NOT NULL,
  `regno` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `name`, `iwp`, `bac`, `pdc`, `mi`, `isaa`, `final`, `regno`) VALUES
(8, 'Tanishq shah', 90, 91, 82, 82, 82, 85, '19BCE2067'),
(9, 'Vansh', 91, 21, 93, 73, 99, 75, '19BCE0987'),
(10, 'Anurag', 91, 82, 74, 99, 74, 84, '19BCE0345'),
(11, 'Kartik', 99, 91, 91, 82, 83, 89, '19BCE2002'),
(20, 'XYZ', 82, 82, 82, 82, 82, 82, '19bce2026'),
(21, 'Harshit', 94, 83, 84, 89, 86, 87, '19BCE0289'),
(22, 'Rohab Gupta', 50, 55, 51, 54, 40, 50, '19BCE1001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stud_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
