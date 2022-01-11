-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 02:35 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-law system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` varchar(14) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Emp_name` varchar(100) NOT NULL,
  `Job_title` varchar(100) NOT NULL,
  `Emp_DoB` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Panel_ID` varchar(14) NOT NULL,
  `Court_ID` varchar(14) NOT NULL,
  `Lawyer_ID` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `citizen`
--

CREATE TABLE `citizen` (
  `Citizen_ID` varchar(14) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `img` varchar(255) NOT NULL,
  `ID_Type` varchar(30) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Age` int(3) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Residitioanl_loc` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citizen`
--

INSERT INTO `citizen` (`Citizen_ID`, `Password`, `img`, `ID_Type`, `Name`, `Age`, `Gender`, `Residitioanl_loc`, `Email`, `Type`) VALUES
('12332112332145', 'ahmed', '', 'Citizenship', 'Ahmed Saeed', 25, 'Male', '2023-01', 'Mido.ipho@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `court`
--

CREATE TABLE `court` (
  `Court_ID` varchar(14) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Specializations` varchar(100) NOT NULL,
  `Working_hours` varchar(10) NOT NULL,
  `Working_days` varchar(100) NOT NULL,
  `Title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `documentation`
--

CREATE TABLE `documentation` (
  `Doc_ID` varchar(50) NOT NULL,
  `Upload_date` date NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Doc_Path` varchar(100) NOT NULL,
  `Doc_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `justice_member`
--

CREATE TABLE `justice_member` (
  `Member_ID` varchar(14) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Phone_no` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `justice_member`
--

INSERT INTO `justice_member` (`Member_ID`, `Password`, `First_Name`, `Last_Name`, `Phone_no`, `Email`, `Type`, `Gender`) VALUES
('12345678912345', '123456', 'Fares', 'sadfgas', '12345678912', 'Mido.iphone4@gmail.com', 'Judge', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `justice_panel`
--

CREATE TABLE `justice_panel` (
  `Panel_ID` varchar(14) NOT NULL,
  `Specialization` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Judgement` varchar(255) NOT NULL,
  `Member_ID` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `Lawyer_ID` varchar(14) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Specialization` varchar(50) NOT NULL,
  `Phone_No` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `PowerOfAttorney_Doc` varchar(100) NOT NULL,
  `License_No` varchar(30) NOT NULL,
  `License_expiryDate` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`Lawyer_ID`, `Password`, `FullName`, `Type`, `Specialization`, `Phone_No`, `Gender`, `Email`, `PowerOfAttorney_Doc`, `License_No`, `License_expiryDate`) VALUES
('12345678912345', '12345', 'Ahmed Khalifa', '', 'Intellectual Property Law', '01112554996', 'Male', 'Mido.iphone4@gmail.c', '', '14523652', '2023-03');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer_citizen`
--

CREATE TABLE `lawyer_citizen` (
  `Citizen_ID` varchar(14) NOT NULL,
  `Lawyer_ID` varchar(14) NOT NULL,
  `Number_Of_Lawyers` int(2) NOT NULL,
  `Number_Of_Citizens` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `law_case`
--

CREATE TABLE `law_case` (
  `Case_ID` varchar(14) NOT NULL,
  `Open_Date` date NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Close_Date` date NOT NULL,
  `Panel_ID` varchar(14) NOT NULL,
  `Admin_ID` varchar(14) NOT NULL,
  `Lawyer_ID` varchar(14) NOT NULL,
  `Court_ID` varchar(14) NOT NULL,
  `Doc_ID` varchar(14) NOT NULL,
  `Session_ID` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Invoice_ID` varchar(14) NOT NULL,
  `Invoice_amount` int(10) NOT NULL,
  `Payment_time` varchar(10) NOT NULL,
  `Payment_date` date NOT NULL,
  `Lawyer_ID` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `Session_ID` varchar(14) NOT NULL,
  `Session_Date` date NOT NULL,
  `Session_Time` varchar(10) NOT NULL,
  `Duration` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`),
  ADD KEY `Panel_ID` (`Panel_ID`),
  ADD KEY `Court_ID` (`Court_ID`),
  ADD KEY `Lawyer_ID` (`Lawyer_ID`);

--
-- Indexes for table `citizen`
--
ALTER TABLE `citizen`
  ADD PRIMARY KEY (`Citizen_ID`);

--
-- Indexes for table `court`
--
ALTER TABLE `court`
  ADD PRIMARY KEY (`Court_ID`);

--
-- Indexes for table `documentation`
--
ALTER TABLE `documentation`
  ADD PRIMARY KEY (`Doc_ID`);

--
-- Indexes for table `justice_member`
--
ALTER TABLE `justice_member`
  ADD PRIMARY KEY (`Member_ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `justice_panel`
--
ALTER TABLE `justice_panel`
  ADD PRIMARY KEY (`Panel_ID`),
  ADD KEY `Member_ID` (`Member_ID`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`Lawyer_ID`);

--
-- Indexes for table `lawyer_citizen`
--
ALTER TABLE `lawyer_citizen`
  ADD KEY `Citizen_ID` (`Citizen_ID`),
  ADD KEY `Lawyer_ID` (`Lawyer_ID`);

--
-- Indexes for table `law_case`
--
ALTER TABLE `law_case`
  ADD PRIMARY KEY (`Case_ID`),
  ADD KEY `Panel_ID` (`Panel_ID`),
  ADD KEY `Admin_ID` (`Admin_ID`),
  ADD KEY `Lawyer_ID` (`Lawyer_ID`),
  ADD KEY `Court_ID` (`Court_ID`),
  ADD KEY `Doc_ID` (`Doc_ID`),
  ADD KEY `Session_ID` (`Session_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Invoice_ID`),
  ADD KEY `Lawyer_ID` (`Lawyer_ID`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`Session_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`Panel_ID`) REFERENCES `justice_panel` (`Panel_ID`),
  ADD CONSTRAINT `admin_ibfk_2` FOREIGN KEY (`Court_ID`) REFERENCES `court` (`Court_ID`),
  ADD CONSTRAINT `admin_ibfk_3` FOREIGN KEY (`Lawyer_ID`) REFERENCES `lawyer` (`Lawyer_ID`);

--
-- Constraints for table `justice_panel`
--
ALTER TABLE `justice_panel`
  ADD CONSTRAINT `justice_panel_ibfk_1` FOREIGN KEY (`Member_ID`) REFERENCES `justice_member` (`Member_ID`);

--
-- Constraints for table `lawyer_citizen`
--
ALTER TABLE `lawyer_citizen`
  ADD CONSTRAINT `lawyer_citizen_ibfk_1` FOREIGN KEY (`Lawyer_ID`) REFERENCES `lawyer` (`Lawyer_ID`),
  ADD CONSTRAINT `lawyer_citizen_ibfk_2` FOREIGN KEY (`Citizen_ID`) REFERENCES `citizen` (`Citizen_ID`);

--
-- Constraints for table `law_case`
--
ALTER TABLE `law_case`
  ADD CONSTRAINT `law_case_ibfk_1` FOREIGN KEY (`Doc_ID`) REFERENCES `documentation` (`Doc_ID`),
  ADD CONSTRAINT `law_case_ibfk_2` FOREIGN KEY (`Session_ID`) REFERENCES `sessions` (`Session_ID`),
  ADD CONSTRAINT `law_case_ibfk_3` FOREIGN KEY (`Lawyer_ID`) REFERENCES `lawyer` (`Lawyer_ID`),
  ADD CONSTRAINT `law_case_ibfk_4` FOREIGN KEY (`Admin_ID`) REFERENCES `admin` (`Admin_ID`),
  ADD CONSTRAINT `law_case_ibfk_5` FOREIGN KEY (`Panel_ID`) REFERENCES `justice_panel` (`Panel_ID`),
  ADD CONSTRAINT `law_case_ibfk_6` FOREIGN KEY (`Court_ID`) REFERENCES `court` (`Court_ID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`Lawyer_ID`) REFERENCES `lawyer` (`Lawyer_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
