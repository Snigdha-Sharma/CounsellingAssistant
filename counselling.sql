-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2021 at 08:14 AM
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
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `UserName` varchar(25) NOT NULL,
  `Password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `username` varchar(100) NOT NULL,
  `Name` varchar(10000) NOT NULL,
  `Quota` varchar(100) NOT NULL,
  `HomeState` int(11) NOT NULL,
  `MainsRank` bigint(20) NOT NULL,
  `AdvancedRank` bigint(20) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `branch_id` int(11) NOT NULL,
  `Name` varchar(10000) DEFAULT NULL,
  `program_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`branch_id`, `Name`, `program_id`) VALUES
(1, 'Aerospace Engineering', 1),
(2, 'Agricultural and Food Engineering', 1),
(3, 'Biological Sciences and Bioengineering', 1),
(4, 'Bio Technology', 1),
(5, 'Biotechnology and Biochemical Engineering', 1),
(6, 'Ceramic Engineering', 1),
(7, 'Chemical Engineering', 1),
(8, 'Chemical Science and Technology', 1),
(9, 'Computer Science and Engineering', 1),
(10, 'Computer Science and Engineering', 1),
(11, 'Exploration Geophysics', 6),
(12, 'Civil Engineering', 1),
(13, 'Civil Engineering and M. Tech. in Structural Engineering', 2),
(14, 'Civil Engineering and M.Tech in Transportation Engineering', 2),
(15, 'Computer Science and Engineering', 2),
(16, 'Electrical Engineering and M.Tech Power Electronics and Drives', 2),
(17, 'Electrical Engineering', 1),
(18, 'Electronics and Communication Engineering', 1),
(19, 'Mechanical Engineering and M. Tech. in Mechanical System Design', 2),
(20, 'Mechanical Engineering and M. Tech. in Thermal Science & Engineering', 2),
(21, 'Mechanical Engineering with M.Tech. in Manufacturing Engineering', 2),
(22, 'Metallurgical and Materials Engineering', 1),
(23, 'Metallurgical and Materials Engineering', 2),
(24, 'Civil Engineering and M. Tech. in Structural Engineering', 2),
(25, 'Architecture', 7);

-- --------------------------------------------------------

--
-- Table structure for table `gender_type`
--

CREATE TABLE `gender_type` (
  `gender_type_id` int(100) NOT NULL,
  `Name` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gender_type`
--

INSERT INTO `gender_type` (`gender_type_id`, `Name`) VALUES
(1, 'Gender-Neutral'),
(2, 'Female-only (including Supernumerary)');

-- --------------------------------------------------------

--
-- Table structure for table `institutes`
--

CREATE TABLE `institutes` (
  `institute_id` int(255) NOT NULL,
  `Name` varchar(10000) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `state_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `institutes`
--

INSERT INTO `institutes` (`institute_id`, `Name`, `Type`, `state_id`) VALUES
(1, 'Dr. B R Ambedkar National Institute of Technology, Jalandhar', 'NIT', 20),
(2, 'Motilal Nehru National Institute of Technology Allahabad', 'NIT', 27),
(3, 'Malaviya National Institute of Technology Jaipur', 'NIT', 21),
(4, 'Maulana Azad National Institute of Technology Bhopal', 'NIT', 13),
(5, 'National Institute of Technology Agartala', 'NIT', 25),
(6, 'Indian Institute of Technology Bhubaneswar', 'IIT', 19),
(7, 'Indian Institute of Technology Bombay', 'IIT', 14),
(8, 'Indian Institute of Technology Mandi', 'IIT', 9),
(9, 'Indian Institute of Technology Delhi', 'IIT', 32),
(10, 'Indian Institute of Technology Indore', 'IIT', 13),
(11, 'Atal Bihari Vajpayee Indian Institute of Information Technology & Management Gwalior', 'IIIT', 13),
(12, 'Indian Institute of Information Technology(IIIT) Una, Himachal Pradesh', 'IIIT', 9),
(13, 'Indian Institute of Information Technology(IIIT), Vadodara, Gujrat', 'IIIT', 7),
(14, 'Indian Institute of Information Technology, Allahabad', 'IIIT', 27),
(15, 'Indian Institute of Information Technology, Design & Manufacturing, Kancheepuram', 'IIIT', 23),
(16, 'Birla Institute of Technology, Mesra, Ranchi', 'GFTI', 10),
(17, 'Punjab Engineering College, Chandigarh', 'GFTI', 20),
(18, 'Institute of Infrastructure, Technology, Research and Management-Ahmedabad', 'GFTI', 7),
(19, 'Mizoram University, Aizawl', 'GFTI', 17),
(20, 'School of Engineering, Tezpur University, Napaam, Tezpur', 'GFTI', 3),
(21, 'National Institute of Technology Raipur', 'NIT', 5);

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `SNo` int(100) NOT NULL,
  `NameOfCourse` varchar(1000) NOT NULL,
  `DurationOfCourse` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`SNo`, `NameOfCourse`, `DurationOfCourse`) VALUES
(1, 'Bachelor of Technology', 4),
(2, 'Bachelor and Master of Technology (Dual Degree)', 5),
(3, 'B.Tech. + M.Tech./MS (Dual Degree)', 5),
(4, 'Integrated B. Tech. and M. Tech. /MBA', 5),
(5, 'Bachelor of Science and Master of Science (Dual Degree)', 5),
(6, 'Integrated Master of Science', 5),
(7, 'Bachelor of Architecture', 5);

-- --------------------------------------------------------

--
-- Table structure for table `quota`
--

CREATE TABLE `quota` (
  `quota_id` int(100) NOT NULL,
  `Name` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quota`
--

INSERT INTO `quota` (`quota_id`, `Name`) VALUES
(1, 'All India'),
(2, 'Other State'),
(3, 'Home State');

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
(9, 242, 242, 6, 24, 1, 2, 1),
(10, 357, 941, 16, 25, 1, 1, 1),
(11, 373, 373, 16, 25, 1, 2, 1),
(12, 159, 172, 16, 25, 1, 9, 1),
(13, 195, 255, 16, 25, 1, 5, 1),
(14, 59, 59, 16, 25, 1, 7, 1),
(15, 1227, 2725, 16, 25, 3, 1, 1),
(16, 290, 354, 16, 25, 3, 9, 1),
(17, 284, 420, 16, 25, 3, 5, 1),
(18, 150, 283, 16, 25, 3, 7, 1),
(19, 24332, 37006, 16, 4, 1, 1, 1),
(20, 742, 742, 16, 4, 1, 2, 1),
(21, 6115, 6244, 16, 4, 1, 9, 1),
(22, 237, 237, 16, 4, 1, 10, 1),
(23, 6635, 7401, 16, 4, 1, 5, 1),
(24, 2996, 3051, 16, 4, 1, 7, 1),
(25, 37552, 50331, 16, 4, 3, 1, 1),
(26, 8755, 9090, 16, 4, 3, 9, 1),
(27, 9862, 11516, 16, 4, 3, 5, 1),
(28, 6901, 13419, 16, 4, 3, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `region_id` int(11) NOT NULL,
  `Region_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`region_id`, `Region_Name`) VALUES
(1, 'North India'),
(2, 'South India'),
(3, 'East India'),
(4, 'West India'),
(5, 'Central India'),
(6, 'North Eastern India');

-- --------------------------------------------------------

--
-- Table structure for table `seat_type`
--

CREATE TABLE `seat_type` (
  `seat_type_id` int(100) NOT NULL,
  `Name` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat_type`
--

INSERT INTO `seat_type` (`seat_type_id`, `Name`) VALUES
(1, 'OPEN'),
(2, 'OPEN (PwD)'),
(3, 'OBC-NCL'),
(4, 'OBC-NCL (PwD)'),
(5, 'SC'),
(6, 'SC (PwD)'),
(7, 'ST'),
(8, 'ST (PwD)'),
(9, 'EWS'),
(10, 'EWS (PwD)');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `state_id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `region_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `Name`, `region_id`) VALUES
(1, 'Andhra Pradesh', 2),
(2, 'Arunachal Pradesh', 6),
(3, 'Assam', 6),
(4, 'Bihar', 3),
(5, 'Chattisgarh', 5),
(6, 'Goa', 4),
(7, 'Gujarat', 4),
(8, 'Haryana', 1),
(9, 'Himachal Pradesh', 1),
(10, 'Jharkhand', 3),
(11, 'Karnataka', 2),
(12, 'Kerala', 2),
(13, 'Madhya Pradesh', 5),
(14, 'Maharashtra', 4),
(15, 'Manipur', 6),
(16, 'Meghalaya', 6),
(17, 'Mizoram', 6),
(18, 'Nagaland', 6),
(19, 'Odisha', 3),
(20, 'Punjab', 1),
(21, 'Rajasthan', 1),
(22, 'Sikkim', 6),
(23, 'Tamil Nadu', 2),
(24, 'Telangana', 2),
(25, 'Tripura', 6),
(26, 'Uttarakhand', 1),
(27, 'Uttar Pradesh', 5),
(28, 'West Bengal', 3),
(29, 'Andaman and Nicobar Islands', 2),
(30, 'Chandigarh', 1),
(31, 'Dadra and Nagar Haveli and Daman and Diu', 4),
(32, 'Delhi', 1),
(33, 'Ladakh', 1),
(34, 'Puducherry', 2),
(35, 'Lakshadweep', 2),
(36, 'Jammu and Kashmir', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `Username` varchar(25) NOT NULL,
  `Password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`branch_id`),
  ADD KEY `program_id` (`program_id`);

--
-- Indexes for table `gender_type`
--
ALTER TABLE `gender_type`
  ADD PRIMARY KEY (`gender_type_id`);

--
-- Indexes for table `institutes`
--
ALTER TABLE `institutes`
  ADD PRIMARY KEY (`institute_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`SNo`);

--
-- Indexes for table `quota`
--
ALTER TABLE `quota`
  ADD PRIMARY KEY (`quota_id`);

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
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`region_id`);

--
-- Indexes for table `seat_type`
--
ALTER TABLE `seat_type`
  ADD PRIMARY KEY (`seat_type_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`state_id`),
  ADD KEY `region_id` (`region_id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gender_type`
--
ALTER TABLE `gender_type`
  MODIFY `gender_type_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `institutes`
--
ALTER TABLE `institutes`
  MODIFY `institute_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `SNo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `quota`
--
ALTER TABLE `quota`
  MODIFY `quota_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seat_type`
--
ALTER TABLE `seat_type`
  MODIFY `seat_type_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `branches`
--
ALTER TABLE `branches`
  ADD CONSTRAINT `branches_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programs` (`SNo`);

--
-- Constraints for table `institutes`
--
ALTER TABLE `institutes`
  ADD CONSTRAINT `state_id` FOREIGN KEY (`state_id`) REFERENCES `states` (`state_id`);

--
-- Constraints for table `rankings`
--
ALTER TABLE `rankings`
  ADD CONSTRAINT `rankings_ibfk_1` FOREIGN KEY (`institute_id`) REFERENCES `institutes` (`institute_id`),
  ADD CONSTRAINT `rankings_ibfk_2` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`branch_id`),
  ADD CONSTRAINT `rankings_ibfk_3` FOREIGN KEY (`quota_id`) REFERENCES `quota` (`quota_id`),
  ADD CONSTRAINT `rankings_ibfk_4` FOREIGN KEY (`seat_type_id`) REFERENCES `seat_type` (`seat_type_id`),
  ADD CONSTRAINT `rankings_ibfk_5` FOREIGN KEY (`gender_type_id`) REFERENCES `gender_type` (`gender_type_id`);

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `region_id` FOREIGN KEY (`region_id`) REFERENCES `regions` (`region_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
