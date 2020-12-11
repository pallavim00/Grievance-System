-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 02:35 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grievance-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id_college` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id_college`, `name`) VALUES
(1, 'Shree LR Tiwari College of Engineering'),
(2, 'D.J.Sanghvi College of Engineering'),
(3, 'Vidyavardhini\'s College of Engineering and Technology'),
(4, 'K.J.Somaiya College of Engineering'),
(5, 'Thakur College of Engineering and Technology'),
(6, 'Thakur College of Engineering and Technology'),
(7, 'Xavier Institute of Technology'),
(8, 'St.Francis Institute of Technology'),
(9, 'Atharva College of Engineering and Technology'),
(10, 'Rizvi College of Engineering '),
(11, 'Don Bosco Institute of Technology'),
(12, 'Rajiv Gandhi Institute of Technology'),
(13, 'Veermata Jijabai Technology Institute of Technology'),
(14, 'Sardar Patel Institute of Technology');

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE `committee` (
  `username` varchar(10) NOT NULL,
  `institutename` varchar(50) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `committee`
--

INSERT INTO `committee` (`username`, `institutename`, `emailid`, `password`) VALUES
('bhumika', '2', '1234', '12345678'),
('devansh', '1', '12345', '12345678'),
('jash', 'shree l r tiwari', 'jash@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `query_post`
--

CREATE TABLE `query_post` (
  `id_query` int(11) NOT NULL,
  `level` varchar(15) NOT NULL,
  `query_title` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `id_college` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query_post`
--

INSERT INTO `query_post` (`id_query`, `level`, `query_title`, `description`, `id_college`) VALUES
(10, 'department', 'Regarding Dustbins', 'There are no dustbins in our college and we are suffering a lot from it plz help us out from thia problem as early as possible', 1);

-- --------------------------------------------------------

--
-- Table structure for table `query_upvotes`
--

CREATE TABLE `query_upvotes` (
  `id_upvote` int(11) NOT NULL,
  `id_query` int(11) NOT NULL,
  `student_username` varchar(15) NOT NULL,
  `timestamp` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `query_upvotes`
--

INSERT INTO `query_upvotes` (`id_upvote`, `id_query`, `student_username`, `timestamp`) VALUES
(14, 10, 'DS649', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `username` varchar(15) NOT NULL,
  `studentname` varchar(15) NOT NULL,
  `id_college` int(11) NOT NULL,
  `departmentname` varchar(10) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `contactno` int(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`username`, `studentname`, `id_college`, `departmentname`, `emailid`, `contactno`, `password`) VALUES
('DS649', 'Devansh Shah', 1, 'IT', 'dshah@gmail.com', 2147483647, '12345678'),
('shahsc2006', 'jash', 7, 'civil', 'WF', 2455, '$2y$10$hHcr2kstcVynxu5r1jf8QesLB4Ch1QYSq1hH.k.xwr54A6lbCdpcO'),
('y_abc', 'yash', 1, 'IT', 'yash@gmail.com', 946531585, 'yash12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id_college`);

--
-- Indexes for table `committee`
--
ALTER TABLE `committee`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `emailid` (`emailid`);

--
-- Indexes for table `query_post`
--
ALTER TABLE `query_post`
  ADD PRIMARY KEY (`id_query`);

--
-- Indexes for table `query_upvotes`
--
ALTER TABLE `query_upvotes`
  ADD PRIMARY KEY (`id_upvote`),
  ADD UNIQUE KEY `unique_upvotes` (`id_query`,`student_username`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email-id` (`emailid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id_college` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `query_post`
--
ALTER TABLE `query_post`
  MODIFY `id_query` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `query_upvotes`
--
ALTER TABLE `query_upvotes`
  MODIFY `id_upvote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `query_upvotes`
--
ALTER TABLE `query_upvotes`
  ADD CONSTRAINT `query_upvotes_ibfk_1` FOREIGN KEY (`id_query`) REFERENCES `query_post` (`id_query`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
