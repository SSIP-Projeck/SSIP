-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 08:32 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courses`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data`
--

CREATE TABLE `tbl_data` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(65) NOT NULL,
  `jurusan` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data`
--

INSERT INTO `tbl_data` (`id`, `nama_lengkap`, `jurusan`, `email`) VALUES
(3, 'aliefbagaskara', 'Law', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(65) NOT NULL,
  `nim` int(11) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `nama_lengkap`, `nim`, `jurusan`, `email`) VALUES
(2, 'mesa', 98764, 'Sistem Informasi', 'mesa@mesa.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `nama`, `username`, `password`) VALUES
(18, 'admin', 'admin', 'admin'),
(19, 'aliefba', 'alief', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_data`
--
ALTER TABLE `tbl_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_data`
--
ALTER TABLE `tbl_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
