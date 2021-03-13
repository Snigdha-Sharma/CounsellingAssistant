-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 11:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `counselling`
--

-- --------------------------------------------------------

--
-- Table structure for table `rankings`
--

CREATE TABLE `rankings` (
  `SNo` int(11) NOT NULL,
  `opening_rank` int(11) DEFAULT NULL,
  `closing_rank` int(11) DEFAULT NULL,
  `institute_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `quota_id` int(11) DEFAULT NULL,
  `seat_type_id` int(11) DEFAULT NULL,
  `gender_type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rankings`
--

INSERT INTO `rankings` (`SNo`, `opening_rank`, `closing_rank`, `institute_id`, `branch_id`, `quota_id`, `seat_type_id`, `gender_type_id`) VALUES
(1, 24332, 37006, 16, 4, 1, 1, 1),
(2, 807, 2070, 7, 1, 1, 1, 1),
(3, 832, 1922, 7, 7, 1, 1, 1),
(4, 6836, 8816, 6, 12, 1, 1, 1),
(5, 13184, 14366, 6, 12, 1, 1, 2),
(6, 1297, 1532, 6, 12, 1, 9, 1),
(7, 9317, 9751, 6, 24, 1, 1, 1),
(8, 15881, 15881, 6, 24, 1, 1, 2),
(9, 242, 242, 6, 24, 1, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rankings`
--
ALTER TABLE `rankings`
  ADD PRIMARY KEY (`SNo`),
  ADD KEY `institute_id` (`institute_id`),
  ADD KEY `branch_id` (`branch_id`),
  ADD KEY `quota_id` (`quota_id`),
  ADD KEY `seat_type_id` (`seat_type_id`),
  ADD KEY `gender_type_id` (`gender_type_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rankings`
--
ALTER TABLE `rankings`
  ADD CONSTRAINT `rankings_ibfk_1` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`institute_id`),
  ADD CONSTRAINT `rankings_ibfk_2` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`branch_id`),
  ADD CONSTRAINT `rankings_ibfk_3` FOREIGN KEY (`quota_id`) REFERENCES `quota` (`quota_id`),
  ADD CONSTRAINT `rankings_ibfk_4` FOREIGN KEY (`seat_type_id`) REFERENCES `seat_type` (`seat_type_id`),
  ADD CONSTRAINT `rankings_ibfk_5` FOREIGN KEY (`gender_type_id`) REFERENCES `gender_type` (`gender_type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
