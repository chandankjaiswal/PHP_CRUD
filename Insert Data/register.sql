-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 01:33 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_record`
--

CREATE TABLE `new_record` (
  `id` int(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(30) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `institute` varchar(100) NOT NULL,
  `skill` varchar(250) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `fileToUpload` varchar(250) NOT NULL,
  `submittedby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_record`
--

INSERT INTO `new_record` (`id`, `trn_date`, `name`, `age`, `email`, `mobile`, `qualification`, `institute`, `skill`, `experience`, `fileToUpload`, `submittedby`) VALUES
(12, '2023-07-01 13:30:16', 'Chandan Kumar', 29, 'chandaner6762@gmail.com', 2147483647, 'MCA', 'Pondicherry University', 'Web technology', '2', 'Fuzzy_Set_with_anno.pdf', 'Chandan'),
(13, '2023-07-01 13:32:13', 'Muskan Kumari', 24, 'muskan1234@gmail.com', 776765655, 'B.com', 'Bihar University', 'Operation ', '2', 'Graphics_Numerical_with_anno.pdf', 'Muskan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(7, 'Chandan', 'chandane6702@gmail.com', '2b3a6cfce57cd29c848f938eaad2bbe1', '2023-07-01 13:29:21'),
(8, 'Muskan', 'muskan1234@gmail.com', 'd55bac79f7c247e4054b7cc2785a0f47', '2023-07-01 13:31:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_record`
--
ALTER TABLE `new_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_record`
--
ALTER TABLE `new_record`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
