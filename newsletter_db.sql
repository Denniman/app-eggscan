-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 04:03 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsletter_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `subscribers_tb`
--

CREATE TABLE `subscribers_tb` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `date_stamp` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers_tb`
--

INSERT INTO `subscribers_tb` (`id`, `email`, `date_stamp`) VALUES
(4, 'jolawdsfdefsdale28@gmail.com', 1594820615),
(5, 'jolawale28@gmail.com', 1594821050),
(6, 'jolawale28@gmail.com', 1594821118),
(7, 'jolawale28@gmail.com', 1594821136),
(8, 'df@gf.cvom', 1594821143),
(9, 'jolawdsfdefsdale28@gmail.com', 1594821189),
(10, 'wal@g.com', 1594821263),
(11, 'jolawale28@drol.com', 1594821270),
(12, 'wal@g.com', 1594821319),
(13, 'wale@g.com', 1594821323),
(14, 'jolawale28@gmail.com', 1594821450),
(15, 'id.nelson@gmail.com', 1594821465),
(16, 'jolawale28@drol.com', 1594821470),
(17, 'id.nelson@gmail.com', 1594821518),
(18, 'jolawale28@drol.comd', 1594821526),
(19, 'jolawale28@drol.comd', 1594821553),
(20, 'id.nelson@gmail.combg', 1594821724),
(21, 'wal@g.com', 1594821732),
(22, 'jolawdsfdefsdale28@gmail.com', 1594821759),
(23, 'jolawale28@gmail.com', 1594821803),
(24, 'id.nelson@gmail.combg', 1594821814);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subscribers_tb`
--
ALTER TABLE `subscribers_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subscribers_tb`
--
ALTER TABLE `subscribers_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
