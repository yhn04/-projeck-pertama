-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2024 at 09:00 PM
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
-- Database: `db_jadwal`
--

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id` int(11) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jam` text NOT NULL,
  `sks` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `dosen` varchar(100) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id`, `nama_matkul`, `hari`, `jam`, `sks`, `semester`, `dosen`, `kelas`) VALUES
(23, '  Metodologi Penelitian dan Publikasi', 'Senin', '07:45 - 10:00', 2, 5, 'Aggy Pramana Gusman, S.Kom, M.Kom', 'E-learning'),
(24, ' Pemodelan dan Simulasi', 'Senin', '13:00 - 15:30', 3, 5, 'R. Ayu Mahessya, S.Kom, M.Kom', 'D8'),
(25, ' Jaringan Komputer Lanjut', 'Senin', '16:00 - 18:00', 3, 5, 'Yeviki Maisyah Putra, S.Kom, M.Kom', 'D11'),
(26, 'Machine Learning', 'Selasa', '10:15 - 12:30', 3, 5, ' Eka Praja Wiyata Mandala, S.Kom, M.Kom', 'F14'),
(27, 'Data Mining', 'Selasa', '13:00 - 15:30', 3, 5, ' Irzal Arief Wisky, S.Kom, M.Kom', 'D11'),
(28, ' Aljabar Linier dan Matriks', 'Rabu', '07:45 - 10:00', 3, 5, ' Annisak Izzaty Jamhur, S.Kom, M.Kom', 'D10'),
(29, ' Organisasi dan Arsitektur Komputer', 'Rabu', '13:00 - 15:30', 3, 3, 'Okta Andrica Putra, S.Kom, M.Kom', 'D14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
