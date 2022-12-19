-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 03:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topup`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id_game` int(4) NOT NULL,
  `nama_game` varchar(15) NOT NULL,
  `Publisher` varchar(15) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id_game`, `nama_game`, `Publisher`, `image`) VALUES
(101, 'Valorant', 'Riot Games', 'VALORANT_1'),
(102, 'Mobile Legends', 'Moonton', 'ml'),
(103, 'PUBGM', 'Level Infinite', 'pubgm'),
(104, 'Genshin Impact', 'COGNOSPHERE', 'genshin'),
(105, 'CODM', 'Garena Mobile', 'codm'),
(106, 'Garena AOV', 'MOBA Games', 'aov1'),
(107, 'LOL Wild Rift', 'Riot Games', 'wildrift');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(4) NOT NULL,
  `player_id` varchar(30) NOT NULL,
  `item_beli` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL DEFAULT current_timestamp(),
  `id_user` int(11) NOT NULL,
  `id_game` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `player_id`, `item_beli`, `email`, `tanggal_transaksi`, `id_user`, `id_game`) VALUES
(1, 'asdasd', '100 Points', 'marshallrifqi3@gmail.com', '2022-12-16 17:31:44', 0, 0),
(2, 'asdasd', '100 Points', 'marshallrifqi3@gmail.com', '2022-12-16 17:31:44', 0, 0),
(3, 'asdasd', '100 Points', 'marshallrifqi3@gmail.com', '2022-12-16 17:31:44', 0, 0),
(4, 'asdasd', '100 Points', 'marshallrifqi3@gmail.com', '2022-12-16 17:31:44', 0, 0),
(5, 'asdasd', '100 Points', 'marshallrifqi3@gmail.com', '2022-12-16 17:31:44', 0, 0),
(6, 'agung#agung', '100 Points', 'marshallrifqi3@gmail.com', '2022-12-16 17:31:44', 0, 0),
(7, '89898121', '100 UC', 'marshallrifqi3@gmail.com', '2022-12-16 17:31:44', 0, 0),
(8, 'asdasd', '100 UC', 'marshallrifqi3@gmail.com', '2022-12-16 17:31:44', 0, 0),
(9, 'asdasd', '100 UC', 'marshallrifqi3@gmail.com', '2022-12-16 17:31:44', 0, 0),
(10, 'asdasd', '100 UC', 'marshallrifqi3@gmail.com', '2022-12-16 17:31:44', 0, 0),
(11, 'agung#agung', '100 Points', 'marshallrifqi3@gmail.com', '2022-12-16 17:33:32', 0, 0),
(12, 'agung#agung', '100 Points', 'marshallrifqi3@gmail.com', '2022-12-16 17:35:12', 0, 0),
(13, 'agung#agung', '100 Points', 'marshallrifqi3@gmail.com', '2022-12-16 17:36:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tanggal_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `tanggal_input`) VALUES
(1, 'Samudi', 'samudi.smx@nusamandiri.ac.id', 'default.jpg', '', 1, 1, 1605230493),
(3, 'Maruloh, M.Kom', 'maruloh.mru@bsi.ac.id', 'default.jpg', '$2y$10$beSdsua15A.A.tmiLIsmfuQCLWGdptUwjXlGI2u2kqxlpPXpXqZ72', 1, 1, 1554219788),
(13, 'Rizkiyah', 'kiki.hidayah@gmail.com', 'pro1557648081.jpg', '$2y$10$237zpGsuPlkDaH0z0kMhKOcP.1pmMx8cxrUXGgh2ErFPQZ5Eb8p72', 1, 1, 1557609676),
(14, 'Eni Irfiani', 'eni.enf@bsi.ac.id', 'default.jpg', '$2y$10$pVXQd4Hs4yrtWjIjhyngge2tsG5nWbL.B956XbElPOM0Q0EsSip.a', 1, 1, 1563868032),
(15, 'Andriansah', 'andriansah.aiy@bsi.ac.id', 'default.jpg', '$2y$10$perspnO9EwfN24C1UnIlVuJl9WfZazMq.KynnKNcTdqprkVSfcmiC', 1, 1, 1563868080),
(16, 'Imam Khotib', 'imamkhotib0@gmail.com', 'default.jpg', '$2y$10$G6Z.Bq1htczywNfgmC0Ti.WTidif/a7ztpgMOyj1r7v6UWJzDSOmW', 1, 1, 1564436443),
(18, 'Imam Nawawi', 'imam.imw@gmail.com', 'pro1557486527.jpg', '$2y$10$jLgqE1IBWTdVFuBfgq4u/upFdTkdRmKSigfZ7M8qHbjkTmnf26D5a', 1, 1, 1554218983),
(20, 'admin', 'admin@gmail.com', 'default.jpg', '$2y$10$OUdplwh2TzyyQL8Q5Mx5EOLmP0y71YSQ5LT.dGxO4.W3f7LWwm2qO', 2, 1, 1652783336),
(21, 'MARSHALL RIFQI SAPUTRA', 'marshallrifqi3@gmail.com', 'pro1670642339.jpg', '$2y$10$GIPRDISLu5UNFd.ZncZ3PODastx2NEzYnYMjVZdIX8xWNbifY6gEa', 2, 1, 1668500833),
(22, 'Marshall Saputra', 'marshallrifqi2@gmail.com', 'default.jpg', '$2y$10$/fGNrcn65qf6sA1XQ.wdsutUWg3H7q4Gwq7rWoi/XaMSRm6P8Rega', 2, 0, 1668569776),
(23, 'Agung', 'marshallrifqi32@gmail.com', 'default.jpg', '$2y$10$lkbcmV7O.smWbwsqap9KK.jSyTWUOsgrBiGfuP3/sdfGeuEY79ZBq', 2, 1, 1671192525);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id_game`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_user` (`id_user`,`id_game`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
