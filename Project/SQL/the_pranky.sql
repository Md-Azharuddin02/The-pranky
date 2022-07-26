-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 01:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_pranky`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(6) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(10) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `c_password` varchar(25) DEFAULT NULL,
  `reg_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `name`, `email`, `phone`, `password`, `c_password`, `reg_date`) VALUES
(1, 'saurabh', 'abc@gmail.cm', 1235469875, 'sam123', 'sam123', '2022-03-19 10:36:07'),
(17, 'kumar', 'kumar@gmail.com', 8585858585, 'sam@123', 'sam@123', '2022-04-23 18:15:52'),
(18, 'sam', 'sam21@gmail.com', 7894561232, '123', '123', '2022-04-24 06:51:45'),
(19, 'kum', 'sa@gmail.com', 7854785478, '1234', '1234', '2022-04-24 06:54:11'),
(20, 'sam', 'g@gmail.com', 7894561235, 'sam', 'sam', '2022-04-24 06:59:45'),
(21, 'ljgj', 'abc@gmail.com', 7894561232, '123', '123', '2022-04-24 07:20:26'),
(22, 'Saurabh Sharma', 'rudra@gmail.com', 9693290040, 'sam123', 'sam123', '2022-04-24 11:51:26'),
(23, 'Md Azharuddin', 'azhar@gmail.com', 9695895987, '123', '123', '2022-04-24 11:53:49');

-- --------------------------------------------------------

--
-- Table structure for table `user_jokes`
--

CREATE TABLE `user_jokes` (
  `sr` int(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `jokes` varchar(500) DEFAULT NULL,
  `post_time` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_jokes`
--

INSERT INTO `user_jokes` (`sr`, `username`, `category`, `jokes`, `post_time`, `email`) VALUES
(13, 'hlu', 'school-jokes', 'khdfh', '2022-03-25 09:42:55', ''),
(18, 'preet', '', 'hello baby wanna go high.', '2022-04-24 05:15:05', 'preet@gmail.com'),
(20, 'gagan', '', 'I love you\r\n', '2022-04-24 10:41:58', 'g@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `user_jokes`
--
ALTER TABLE `user_jokes`
  ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_jokes`
--
ALTER TABLE `user_jokes`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
