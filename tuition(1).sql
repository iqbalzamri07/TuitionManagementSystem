-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2018 at 04:57 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tuition`
--

-- --------------------------------------------------------

--
-- Table structure for table `learn`
--

CREATE TABLE `learn` (
  `Stu_Email` varchar(50) NOT NULL,
  `Subject_Code` char(6) NOT NULL,
  `Time_Table` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `learn`
--

INSERT INTO `learn` (`Stu_Email`, `Subject_Code`, `Time_Table`) VALUES
('adib@gmail.com', 'BIO', ''),
('hadriizz@gmail.com', 'BI', ''),
('hadriizz@gmail.com', 'BM', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Staff_Email` varchar(20) NOT NULL,
  `Staff_Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_Email`, `Staff_Password`) VALUES
('admin', 'admin'),
('admin', 'password'),
('admin', 'admin'),
('admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Stu_Email` varchar(50) NOT NULL,
  `Stu_Password` varchar(50) NOT NULL,
  `Stu_IC` varchar(14) NOT NULL,
  `Stu_Name` varchar(40) NOT NULL,
  `Stu_Sex` char(1) NOT NULL,
  `Stu_SchoolName` varchar(30) NOT NULL,
  `Stu_Address` varchar(70) NOT NULL,
  `Stu_Category` varchar(10) NOT NULL,
  `Stu_Num_H` varchar(10) NOT NULL,
  `Stu_Num_Hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Stu_Email`, `Stu_Password`, `Stu_IC`, `Stu_Name`, `Stu_Sex`, `Stu_SchoolName`, `Stu_Address`, `Stu_Category`, `Stu_Num_H`, `Stu_Num_Hp`) VALUES
('adib@gmail.com', 'farhana', '98011731', 'adib rahim', 'M', 'SMKA SULTAN', 'LOT 468 MElaka', 'FORM 1', '0152151', '04252626'),
('hadriizz@gmail.com', '123', '9802040214', 'Izz Hadri Bin Hamidi', 'M', 'SMK Seri Tanjung', 'Jasin Melaka', 'Form2', '01321123', '062672271');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `Subject_Code` char(6) NOT NULL,
  `Subject_Name` varchar(20) NOT NULL,
  `Subject_Module` char(2) NOT NULL,
  `Subject_Price` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`Subject_Code`, `Subject_Name`, `Subject_Module`, `Subject_Price`) VALUES
('BI', 'Bahasa Inggeris', 'M2', '50.00'),
('BIO', 'Biologi', 'M8', '100.00'),
('BM', 'Bahasa Malaysia', 'M1', '50.00'),
('FZ', 'Fizik', 'M5', '60.00'),
('SC', 'Sains', 'M4', '30.00');

-- --------------------------------------------------------

--
-- Table structure for table `teach`
--

CREATE TABLE `teach` (
  `Tcr_Email` varchar(50) NOT NULL,
  `Subject_Code` char(6) NOT NULL,
  `Time_Table` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Tcr_Email` varchar(50) NOT NULL,
  `Tcr_Password` varchar(50) NOT NULL,
  `Tcr_IC` varchar(14) NOT NULL,
  `Tcr_Name` varchar(40) NOT NULL,
  `Tcr_Status` char(10) NOT NULL,
  `Tcr_Address` varchar(70) NOT NULL,
  `Tcr_TelNum` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `learn`
--
ALTER TABLE `learn`
  ADD PRIMARY KEY (`Stu_Email`,`Subject_Code`),
  ADD KEY `Subject_Code` (`Subject_Code`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Stu_Email`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`Subject_Code`);

--
-- Indexes for table `teach`
--
ALTER TABLE `teach`
  ADD PRIMARY KEY (`Tcr_Email`,`Subject_Code`),
  ADD KEY `Subject_Code` (`Subject_Code`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Tcr_Email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `learn`
--
ALTER TABLE `learn`
  ADD CONSTRAINT `learn_ibfk_1` FOREIGN KEY (`Stu_Email`) REFERENCES `student` (`Stu_Email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `learn_ibfk_2` FOREIGN KEY (`Subject_Code`) REFERENCES `subject` (`Subject_Code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teach`
--
ALTER TABLE `teach`
  ADD CONSTRAINT `teach_ibfk_1` FOREIGN KEY (`Tcr_Email`) REFERENCES `teacher` (`Tcr_Email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teach_ibfk_2` FOREIGN KEY (`Subject_Code`) REFERENCES `subject` (`Subject_Code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
