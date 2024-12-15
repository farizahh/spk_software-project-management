-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2024 at 08:03 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` smallint(6) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama`) VALUES
(1, 'JIRA'),
(2, 'ProofHub'),
(3, 'Asana'),
(4, 'Trello'),
(5, 'Microsoft Project'),
(6, 'TeamGantt'),
(7, 'Wrike'),
(8, 'Basecamp'),
(9, 'ClickUp'),
(10, 'Monday.com');

-- --------------------------------------------------------

--
-- Table structure for table `evaluasi`
--

CREATE TABLE `evaluasi` (
  `id_kriteria` tinyint(4) NOT NULL,
  `id_alternatif` smallint(6) NOT NULL,
  `value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `evaluasi`
--

INSERT INTO `evaluasi` (`id_kriteria`, `id_alternatif`, `value`) VALUES
(1, 1, 9),
(1, 2, 8),
(1, 3, 8),
(1, 4, 7),
(1, 5, 10),
(1, 6, 7),
(1, 7, 8),
(1, 8, 7),
(1, 9, 9),
(1, 10, 8),
(2, 1, 8),
(2, 2, 7),
(2, 3, 8),
(2, 4, 6),
(2, 5, 9),
(2, 6, 7),
(2, 7, 8),
(2, 8, 6),
(2, 9, 8),
(2, 10, 7),
(3, 1, 7),
(3, 2, 9),
(3, 3, 9),
(3, 4, 10),
(3, 5, 6),
(3, 6, 8),
(3, 7, 7),
(3, 8, 9),
(3, 9, 9),
(3, 10, 8),
(4, 1, 9),
(4, 2, 8),
(4, 3, 9),
(4, 4, 8),
(4, 5, 9),
(4, 6, 7),
(4, 7, 8),
(4, 8, 7),
(4, 9, 8),
(4, 10, 8),
(5, 1, 8),
(5, 2, 7),
(5, 3, 8),
(5, 4, 7),
(5, 5, 9),
(5, 6, 8),
(5, 7, 9),
(5, 8, 6),
(5, 9, 8),
(5, 10, 8),
(6, 1, 7),
(6, 2, 8),
(6, 3, 9),
(6, 4, 10),
(6, 5, 6),
(6, 6, 8),
(6, 7, 7),
(6, 8, 9),
(6, 9, 9),
(6, 10, 8);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` tinyint(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `bobot` float NOT NULL,
  `atribut` set('benefit','cost') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama`, `bobot`, `atribut`) VALUES
(1, 'functionality', 0.3794, 'benefit'),
(2, 'usability', 0.1024, 'benefit'),
(3, 'efficiency', 0.2488, 'benefit'),
(4, 'reliability', 0.1604, 'benefit'),
(5, 'portability', 0.0434, 'benefit'),
(6, 'maintainability', 0.0655, 'cost');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `evaluasi`
--
ALTER TABLE `evaluasi`
  ADD PRIMARY KEY (`id_kriteria`,`id_alternatif`),
  ADD KEY `id_alternatif` (`id_alternatif`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `evaluasi`
--
ALTER TABLE `evaluasi`
  ADD CONSTRAINT `evaluasi_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `evaluasi_ibfk_2` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
