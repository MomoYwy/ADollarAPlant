-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 10:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adap`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `MemberID` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Age` int(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Phone Number` varchar(50) NOT NULL,
  `IC or Passport` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`MemberID`, `Username`, `Name`, `Age`, `Email`, `Gender`, `Phone Number`, `IC or Passport`, `Password`) VALUES
('M001', 'Amirah96', 'Amirah Devi', 28, 'amirah.devi@gmail.com', 'Female', '016-5586936', '960223-10-2587', 'Amirah0223'),
('M002', 'Rajendra99', 'Rajendra Tan', 25, 'rajendra.tan@yahoo.com', 'Male', '018-3339988', '990509-15-2266', 'Rajendra0509'),
('M003', 'Nurul94', 'Nurul Wong Mei Lin', 30, 'nurul.wongmeilin@hotmail.com', 'Female', '017-5855998', '940808-12-5969', 'Nurul@940808'),
('M004', 'Aryan93', 'Aryan Lim', 31, 'aryan.lim@gmail.com', 'Male', '017-8898989', '930205-18-1519', 'Aryan930205'),
('M005', 'Siti98', 'Siti Priya Abdullah', 26, 'siti.priya.abdullah@hotmail.com', 'Female', '011-25823255', '981015-14-5856', 'Sitipriya1015'),
('M006', 'Chen00', 'Chen Ming Jie', 24, 'chen.mingjie@yahoo.com', 'Male', '017-2556963', '001205-17-5588', 'Mingjie@001205'),
('M007', 'Farah89', 'Farah Krishnan', 35, 'farah.krishnan@gmail.com', 'Female', '014-2582558', '890805-15-5956', 'Farah@890805'),
('M008', 'Clement04', 'Clement Tan Yew Meng', 20, 'clement.tanyewmeng@gmail.com', 'Male', '011-89811888', '040828-14-0529', 'Clement040828'),
('M009', 'Aisha95', 'Aisha Subramanian', 29, 'aisha.subramanian@outlook.com', 'Female', '013-3936633', '950929-18-9695', 'Aisha@950929'),
('M010', 'Patel94', 'Muhammad Patel', 30, 'muhammad.patel@yahoo.com', 'Male', '019-5586963', '940228-18-5595', 'Patel@940228'),
('M011', 'Nicole00', 'Nicole Wong Mei Ling', 24, 'meiling.nicole@outlook.com', 'Female', '015-6339833', '001109-14-9966', 'Nicole001109'),
('M012', 'Arjun01', 'Arjun Chong', 23, 'arjun.chong@hotmail.com', 'Male', '012-6963355', '011010-15-0219', 'Arjun@1010'),
('M013', 'Zainab97', 'Zainab Ganesh', 27, 'zainab.ganesh@gmail.com', 'Male', '017-5054835', '970520-14-1407', 'Zainab@970520'),
('M014', 'Yasmin02', 'Yasmin Lim Wei Hua', 22, 'yasmin.limweihua@gmail.com', 'Female', '016-2324915', '020202-15-1849', 'Yasmin020202'),
('M015', 'Chong03', 'Chong Wei Chen', 21, 'weichen.chong@outlook.com', 'Male', '015-5455251', '030301-17-1478', 'Weichen@0301'),
('M016', 'Kavi93', 'Kavi Kumar Abdullah', 31, 'kavi.kumar.abdullah@yahoo.com', 'Male', '013-3030369', '930829-00-2114', 'Kavikumar0829'),
('M017', 'Liyana95', 'Liyana Chua', 29, 'liyana.chua@gmail.com', 'Female', '011-96961888', '950618-07-1210', 'Liyana950618'),
('M018', 'Ravi94', 'Ravi Wong', 30, 'ravi.wong@outlook.com', 'Male', '012-1014121', '940713-08-0239', 'Ravi@940713'),
('M019', 'Minghui92', 'Tan Ming Hui', 32, 'tan.minghui@hotmail.com', 'Female', '019-2248431', '921020-14-0291', 'Minghui921020'),
('M020', 'Hafizah98', 'Hafizah Krishnamurthy', 26, 'hafizah.krishnamurthy@gmail.com', 'Male', '013-5459651', '980402-14-1529', 'Hafizah980402');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`MemberID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
