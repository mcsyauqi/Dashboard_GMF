-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2018 at 04:59 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gmf`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `no_peg` int(10) NOT NULL,
  `nama_peg` varchar(50) NOT NULL,
  `dinas` enum('JKTTE','JKTTGW') NOT NULL DEFAULT 'JKTTE',
  `bidang` enum('JKTTEA','JKTTEC','JKTTED','JKTTEJ','JKTTEL','JKTTEN','JKTTEQ','JKTTER','JKTTEX','JKTTEZ') NOT NULL,
  `unit` enum('TEA-1','TEA-2','TEA-3','TEA-4','TEC-1','TED-1','TED-2','TED-3','TED-4','TED-5','TEL-1','TEL-2','TER-1','TER-2','TER-3','TER-4','TER-5') NOT NULL,
  `jabatan` enum('Development Engineer','Engineering Expert','General Manager','Manager','Secretary','Senior Aircraft Data Officer','Senior Development Engineer','Senior Technical Publication Officer','Technical Publication Officer','Trainee for Development Engineer','Vice President') NOT NULL,
  `pendidikan` varchar(50) NOT NULL DEFAULT '-',
  `tgl_masuk` date NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`no_peg`, `nama_peg`, `dinas`, `bidang`, `unit`, `jabatan`, `pendidikan`, `tgl_masuk`, `tgl_lahir`) VALUES
(111111, 'GMF', '', '', 'TEC-1', 'Vice President', '-', '2017-01-01', '0000-00-00'),
(222222, 'Ahmad Thariq Syauqi', '', '', 'TER-1', 'General Manager', 'S1 Teknologi Informasi', '2018-01-01', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id_status` int(11) NOT NULL,
  `no_peg` int(10) NOT NULL,
  `done_human` date NOT NULL,
  `due_human` date NOT NULL,
  `stat_human` tinyint(1) NOT NULL,
  `done_cas` date NOT NULL,
  `due_cas` date NOT NULL,
  `stat_cas` tinyint(1) NOT NULL,
  `done_fts` date NOT NULL,
  `stat_fts` tinyint(1) NOT NULL,
  `done_sms` date NOT NULL,
  `stat_sms` tinyint(1) NOT NULL,
  `done_ewis` date NOT NULL,
  `stat_ewis` date NOT NULL,
  `done_module` date NOT NULL,
  `stat_module` tinyint(1) NOT NULL,
  `done_gqs` date NOT NULL,
  `stat_gqs` tinyint(1) NOT NULL,
  `done_batk` date NOT NULL,
  `stat_batk` tinyint(1) NOT NULL,
  `done_basic` date NOT NULL,
  `stat_basic` tinyint(1) NOT NULL,
  `done_cont` date NOT NULL,
  `stat_cont` tinyint(1) NOT NULL,
  `done_typer` date NOT NULL,
  `stat_typer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id_status`, `no_peg`, `done_human`, `due_human`, `stat_human`, `done_cas`, `due_cas`, `stat_cas`, `done_fts`, `stat_fts`, `done_sms`, `stat_sms`, `done_ewis`, `stat_ewis`, `done_module`, `stat_module`, `done_gqs`, `stat_gqs`, `done_batk`, `stat_batk`, `done_basic`, `stat_basic`, `done_cont`, `stat_cont`, `done_typer`, `stat_typer`) VALUES
(1, 111111, '0000-00-00', '0000-00-00', 0, '0000-00-00', '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0),
(2, 222222, '0000-00-00', '0000-00-00', 0, '0000-00-00', '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', '0000-00-00', '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_admin` int(11) NOT NULL,
  `tipe` varchar(15) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `no_peg` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_admin`, `tipe`, `username`, `password`, `no_peg`) VALUES
(1, 'super_admin', 'gmf', '123', 111111),
(2, 'admin', 'syauqi', '123', 222222);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`no_peg`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id_status`),
  ADD KEY `no_peg` (`no_peg`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `no_peg` (`no_peg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `training`
--
ALTER TABLE `training`
  ADD CONSTRAINT `training_ibfk_1` FOREIGN KEY (`no_peg`) REFERENCES `pegawai` (`no_peg`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`no_peg`) REFERENCES `pegawai` (`no_peg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
