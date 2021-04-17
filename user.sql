-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 02:24 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name1` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name1`, `email`, `balance`) VALUES
(1, 'Vivek Goswami', 'vivekgg85@gmail.com', 53759),
(2, 'Husky', 'husky@dogemail.com', 124538),
(3, 'Ragdoll', 'ragdoll@catmail.com', 69350),
(4, 'Munchkin Cat', 'munchkitty@catmail.com', 39937),
(5, 'Shibe', 'shibe@dogemail.com', 983039),
(6, 'Samoyed', 'clouddog@dogemail.com', 8029760),
(7, 'Norwegian Forest', 'furrymeow@catmail.com', 144238),
(8, 'Golden British Shorthair', 'hosicocat@cutemail.com', 9353020),
(9, 'Golden Retriever', 'goodboi@dogemail.com', 854817),
(10, 'Alaskan Malamute', 'snowbark@dogemail.com', 238773);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
