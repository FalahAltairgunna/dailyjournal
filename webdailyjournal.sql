-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2025 at 08:00 AM
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
-- Database: `webdailyjournal`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `isi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'Perpustakaan kampus', 'repudiandae vero quo nam! Totam illo Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum dignissimos et hic laudantium eos \r\neaque accusamus, corporis non minus magni, numquamvoluptas facere mollitia.', '20250111134154.jpg', '2025-01-11 13:41:54', 'admin'),
(2, 'Ruang kelas', 'repudiandae vero quo nam! Totam illo Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum dignissimos et hic laudantium eos \r\neaque accusamus, corporis non minus magni, numquamvoluptas facere mollitia.', 'ruangkelas.jpg', '2024-12-04 10:48:59', 'admin'),
(3, 'Kelompok belajar', 'repudiandae vero quo nam! Totam illo Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum dignissimos et hic laudantium eos \r\neaque accusamus, corporis non minus magni, numquamvoluptas facere mollitia.', '20241225131830.jpg', '2024-12-25 13:18:30', 'admin'),
(4, 'Auditorium', 'repudiandae vero quo nam! Totam illo Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum dignissimos et hic laudantium eos \r\neaque accusamus, corporis non minus magni, numquamvoluptas facere mollitia.', '20241225131845.jpg', '2024-12-25 13:18:45', 'admin'),
(5, 'Taman', 'repudiandae vero quo nam! Totam illo Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum dignissimos et hic laudantium eos \r\neaque accusamus, corporis non minus magni, numquamvoluptas facere mollitia.', '20241225131806.jpg', '2024-12-25 13:18:06', 'admin'),
(6, 'Ruang Lab', 'repudiandae vero quo nam! Totam illo Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum dignissimos et hic laudantium eos \r\neaque accusamus, corporis non minus magni, numquamvoluptas facere mollitia.', 'ruanglab.jpg', '2024-12-04 10:59:40', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gambar`, `tanggal`, `username`) VALUES
(1, '20250110214754.jpg', '2025-01-10 20:14:55', 'admin'),
(2, '20250110215502.jpg', '2025-01-10 20:14:55', 'admin'),
(3, '20250110215550.jpg', '2025-01-10 20:14:55', 'admin'),
(4, '20250110215602.jpg', '2025-01-10 20:14:55', 'admin'),
(5, '20250110215612.jpg', '2025-01-10 20:14:55', 'admin'),
(6, '20250111105124.jpg', '2025-01-10 20:17:24', 'admin'),
(7, '20250110214839.jpg', '2025-01-10 20:17:24', 'admin'),
(8, '20250110214849.jpg', '2025-01-10 20:17:24', 'admin'),
(9, '20250110214857.jpg', '2025-01-10 20:17:24', 'admin'),
(10, '20250110215452.jpg', '2025-01-10 20:17:24', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '20241211105452.jpg'),
(2, 'falah', '827ccb0eea8a706c4c34a16891f84e7b', '20241225131845.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
