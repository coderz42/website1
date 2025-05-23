-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2025 at 04:32 PM
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
-- Database: `phpdasarv`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `NIM` varchar(10) NOT NULL,
  `field_of_study` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `NIM`, `field_of_study`, `password`) VALUES
(1, 'Plankton', 'plankton@gmail.com', '095542351', 'Coding', '$2y$10$heQggy5v2ThCuyH3IuAMoumfFuNcalr5E8ihzO6XvRwZNPhwDwYJi'),
(2, 'Carl', 'carl@gmail.com', '095542276', 'Coding', '$2y$10$74UFUDriu8uEggnLDWtMMuWsoFcDJtxDx3roLggb.oXNkXlDMIzxu');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(10) NOT NULL,
  `student` char(10) NOT NULL,
  `teacher` char(10) NOT NULL,
  `grade1` decimal(5,0) NOT NULL,
  `grade2` decimal(5,0) NOT NULL,
  `grade3` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `student`, `teacher`, `grade1`, `grade2`, `grade3`) VALUES
(1, '143040023', '095542351', 90, 87, 96),
(2, '159803052', '095542351', 79, 87, 93),
(3, '133040321', '095542276', 90, 93, 89),
(4, '142647925', '095542276', 90, 93, 95);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `NRP` char(9) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Jurusan` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Jenis_Kelamin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `Nama`, `NRP`, `Email`, `Jurusan`, `Alamat`, `Jenis_Kelamin`) VALUES
(1, 'Budi Santoso Pratama  ', '143040023', 'santoso@gmail.com  ', 'Teknik Informatika  ', 'Desa Sukamaju, Bandung, Jawa Barat, 40123, Indonesia  ', 'Pria'),
(2, 'Putri Amalia Siregar ', '133040321', 'amalia@gmail.com ', 'Teknik Informatika', 'Kota Malang, Jawa Timur, 65112, Indonesia ', 'Perempuan '),
(3, 'Rina Putri Wijaya', '153040100', 'rina@gmail.com', 'Teknik Industri', 'Depok, Jawa Barat, 16412, Indonesia', 'Perempuan'),
(26, 'sds', 'assd', 'assd', 'asdsd', 'asdsd', 'ads');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `NIM` varchar(10) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `NIM`, `jurusan`, `password`) VALUES
(5, 'plankton', 'plankton@gmail.com', '095542351', 'math', '$2y$10$SUSuKfXaLfPjNpmmnOuGIOrCWXSC9QWrGHh5HJSub.cBAqp9k05.G'),
(6, 'henry', 'wills@gmail.com', '095570397', 'science', '$2y$10$/l67WdAIngbaQ14HMgV/durNxy/JG04Hi6ugo/htRihnG.JloUqhe'),
(7, 'adsds', 'asdsad', 'asdsd', 'science', '$2y$10$nIh0zBDzAQBjGX4RjoUyDO36MxRIQeKnfd9wCagDqua3S.3sKcXUO'),
(8, 'adasd', 'asdsad', '980787', 'science', '$2y$10$ahbkrypQPqRgZ1xADHqyQOm3HcO3oMxMWhrmynr/fiDD02BxEJv1i');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `field_of_study` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` enum('male','female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nrp`, `email`, `field_of_study`, `address`, `gender`) VALUES
(1, 'Budi Santoso Pratama', '143040023', 'santoso@gmail.com', 'Coding', 'Desa Sukamaju, Bandung, Jawa Barat, 40123, Indonesia', 'male'),
(2, 'Putri Amalia Siregar', '133040321', 'amalia@gmail.com', 'Informatics Engineering', 'Kota Malang, Jawa Timur, 65112, Indonesia', 'female'),
(3, 'Rina Ayu Lestari', '163051023', 'rina@gmail.com', 'Environmental Engineering', 'Depok, Jawa Barat', 'female'),
(4, 'Muhammad Rizky Pratama', '142647925', 'rizky@gmail.com', 'Agricultural Science', 'Boyolali, Jawa Tengah', 'male'),
(5, 'Siti Nurhaliza Putri', '159803052', 'siti@gmail.com', 'Computer Science', 'Surabaya, Jawa Timur', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nrp` (`nrp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
