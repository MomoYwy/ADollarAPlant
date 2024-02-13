-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2024 at 02:38 PM
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
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `DonationID` varchar(50) NOT NULL,
  `DonationAmount` double NOT NULL,
  `DonationMethod` varchar(50) DEFAULT NULL,
  `DonerID` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`DonationID`, `DonationAmount`, `DonationMethod`, `DonerID`) VALUES
('DT001', 50, 'credit card', 'D001'),
('DT002', 100, 'online banking', 'D002'),
('DT003', 150, 'credit card', 'D003'),
('DT004', 20, 'e-wallet', 'D004'),
('DT005', 200, 'credit card', 'D005'),
('DT006', 50, 'debit card', 'D006'),
('DT007', 300, 'online banking', 'D007'),
('DT008', 250, 'credit card', 'D008'),
('DT009', 50, 'e-wallet', 'D009'),
('DT010', 100, 'e-wallet', 'D010'),
('DT011', 130, 'online banking', 'D011'),
('DT012', 230, 'credit card', 'D012'),
('DT013', 350, 'online banking', 'D013'),
('DT014', 10, 'e-wallet', 'D014'),
('DT015', 30, 'e-wallet', 'D015'),
('DT016', 300, 'credit card', 'D016'),
('DT017', 500, 'credit card', 'D017'),
('DT018', 450, 'online banking', 'D018'),
('DT019', 50, 'debit card', 'D019'),
('DT020', 100, 'credit card', 'D020'),
('DT021', 50, 'e-wallet', 'D021'),
('DT022', 400, 'online banking', 'D022'),
('DT023', 30, 'e-wallet', 'D023'),
('DT024', 80, 'debit card', 'D024'),
('DT025', 1000, 'credit card', 'D025'),
('DT026', 350, 'e-wallet', 'D026'),
('DT027', 320, 'online banking', 'D027'),
('DT028', 530, 'credit card', 'D028'),
('DT029', 330, 'debit card', 'D029'),
('DT030', 520, 'credit card', 'D030');

-- --------------------------------------------------------

--
-- Table structure for table `doner`
--

CREATE TABLE `doner` (
  `DonerID` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `MemberID` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doner`
--

INSERT INTO `doner` (`DonerID`, `Name`, `Email`, `MemberID`) VALUES
('D001', 'Stephy Lim', 'stephylim@gmail.com', NULL),
('D002', 'Janice Lee', 'janice@hotmail.com', NULL),
('D003', 'Lee Qian Wei', 'qianwei@yahoo.com', NULL),
('D004', 'Alvin Tan', 'alvin00@gmail.com', NULL),
('D005', 'Norhasanah', 'hasanah@outlook.com', NULL),
('D006', 'Kumar', 'kumr04@yahoo.com', NULL),
('D007', 'Ritheek Shivaraj', 'ritheek04@gmail.com', NULL),
('D008', 'Nicoles Tan', 'nicoles01@gmail.com', NULL),
('D009', 'Amirah Devi', 'amirah.devi@gmail.com', 'M001'),
('D010', 'Will Tan', 'willtan94@hotmail.com', NULL),
('D011', 'Noor Atikah', 'nooratikah89@yahoo.com', NULL),
('D012', 'Vegnesh Rao', 'vegnesh04@outlook.com', NULL),
('D013', 'Siti Priya Abdullah', 'siti.priya.abdullah@hotmail.com', 'M005'),
('D014', 'Dinesh', 'dinesh00@yahoo.com', NULL),
('D015', 'Chen Ming Jie', 'chen.mingjie@yahoo.com', 'M006'),
('D016', 'Husna', 'husna00@outlook.com', NULL),
('D017', 'Chin Huan Ching', 'huanching@gmail.com', NULL),
('D018', 'Kelly Wong', 'kellywong90@yahoo.com', NULL),
('D019', 'Wilson Lai Wei Sheng', 'wilson.lai98@hotmail.com', NULL),
('D020', 'Hafizah Krishnamurthy', 'hafizah.krishnamurthy@gmail.com', 'M020'),
('D021', 'Nurul Wong Mei Lin', 'nurul.wongmeilin@hotmail.com', 'M003'),
('D022', 'Rex Yeep', 'rex.yeep@gmail.com', NULL),
('D023', 'Kavi Kumar Abdullah', 'kavi.kumar.abdullah@yahoo.com', 'M016'),
('D024', 'Zainab Ganesh', 'zainab.ganesh@gmail.com', 'M013'),
('D025', 'Tan Mei Mei', 'meimei90@gmail.com', NULL),
('D026', 'Cody Lee', 'codylee@outlook.com', NULL),
('D027', 'Nizan Foo', 'nizanfoo@yahoo.com', NULL),
('D028', 'Rajendra Tan', 'rajendra.tan@yahoo.com', 'M002'),
('D029', 'Janice Wong', 'janice.wong99@gmail.com', NULL),
('D030', 'Rachel Yong', 'rachel.yong@hotmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `EventID` varchar(50) NOT NULL,
  `EventName` varchar(50) NOT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `NumberofVolunteer` int(11) DEFAULT NULL,
  `Venue` varchar(50) DEFAULT NULL,
  `organizerID` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`EventID`, `EventName`, `Date`, `Time`, `NumberofVolunteer`, `Venue`, `organizerID`) VALUES
('OG001', 'Run for Hope 2022', '2022-02-10', '10:00:00', 11000, 'Bukit Jalil', 'OG001'),
('OG002', 'Hopeful Hearts Charity Gala', '2022-02-27', '10:00:00', 15000, 'Sungai Long', 'OG002'),
('OG003', 'Helping Hands 10K Charity Run', '2022-03-01', '10:00:00', 20000, 'Kuchai Lama', 'OG003'),
('OG004', 'Artisans for Change Art Auction', '2022-03-25', '15:00:00', 23000, 'Balakong', 'OG004'),
('OG005', 'Unity in Diversity Festival', '2022-03-10', '10:00:00', 12000, 'Sungai Besi', 'OG005'),
('OG006', 'Dance for a Cause Marathon', '2022-03-28', '17:00:00', 8800, 'Semenyih', 'OG006'),
('OG007', 'Tech Innovators Charity Hackathon', '2022-04-09', '10:00:00', 12900, 'Johor Bahru', 'OG007'),
('OG008', 'Fashion with Compassion Show', '2022-04-29', '18:00:00', 11100, 'Sri Petaling', 'OG008'),
('OG009', 'Family Fun Fair & Fundraiser', '2022-05-01', '10:00:00', 23000, 'Bukit Bintang', 'OG009'),
('OG010', 'Harmony Concert for Hope', '2022-05-25', '10:00:00', 15500, 'Petaling Jaya', 'OG010'),
('OG011', 'Foodies Unite Charity Food Fest', '2022-06-06', '10:00:00', 22300, 'Sungai Besi', 'OG005'),
('OG012', 'Paws for a Cause Pet Parade', '2022-06-30', '10:00:00', 21900, 'Kuchai Lama', 'OG003'),
('OG013', 'Mind Matters Mental Health Symposium', '2022-07-09', '10:00:00', 12900, 'Bukit Bintang', 'OG009'),
('OG014', 'Trivia Night for Education', '2022-07-29', '18:00:00', 21100, 'Sungai Long', 'OG002'),
('OG015', 'Green Revolution Eco-Friendly Expo', '2022-08-07', '10:00:00', 11200, 'Sri Petaling', 'OG008'),
('OG016', 'Community Clean-Up Challenge', '2022-08-29', '10:00:00', 18800, 'Semenyih', 'OG006'),
('OG017', 'Crafting for a Cause DIY Fair', '2022-09-09', '12:00:00', 13500, 'Petaling Jaya', 'OG010'),
('OG018', 'Sports for All Tournament', '2022-09-30', '10:00:00', 23000, 'Kuchai Lama', 'OG003'),
('OG019', 'Bookworms Charity Book Sale', '2022-10-10', '10:00:00', 32000, 'Sri Petaling', 'OG008'),
('OG020', 'Dine Out for Charity Week', '2022-10-30', '10:00:00', 18800, 'Petaling Jaya', 'OG010'),
('OG021', 'Green Thumb Plant-a-Thon', '2022-11-01', '10:00:00', 21400, 'Sungai Long', 'OG002'),
('OG022', 'Silent Disco for Social Causes', '2022-11-22', '10:00:00', 13500, 'Johor Bahru', 'OG007'),
('OG023', 'Teen Tech Throwdown', '2022-12-02', '10:00:00', 23000, 'Bukit Jalil', 'OG001'),
('OG024', 'Laughs for a Cause Comedy Night', '2022-12-20', '18:00:00', 23000, 'Sungai Besi', 'OG005'),
('OG025', 'Wellness Warrior Fitness Challenge', '2023-01-01', '10:00:00', 12200, 'Semenyih', 'OG006'),
('OG026', 'Yoga for Charity in the Park', '2023-01-30', '10:00:00', 13500, 'Kuchai Lama', 'OG003'),
('OG027', 'Karaoke for a Cure', '2023-02-12', '17:00:00', 10000, 'Balakong', 'OG004'),
('OG028', 'Vintage Car Show for Veterans', '2023-03-20', '10:00:00', 19500, 'Bukit Jalil', 'OG009');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `MemberID` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Age` int(3) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `PhoneNumber` varchar(50) DEFAULT NULL,
  `ICorPassport` varchar(50) DEFAULT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`MemberID`, `Username`, `Name`, `Age`, `Email`, `Gender`, `PhoneNumber`, `ICorPassport`, `Password`) VALUES
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

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE `organizer` (
  `OrganizerID` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `PhoneNumber` varchar(50) DEFAULT NULL,
  `MemberID` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`OrganizerID`, `Name`, `Email`, `PhoneNumber`, `MemberID`) VALUES
('OG001', 'Muhammad Patel', 'muhammad.patel@yahoo.com', '019-5586963', 'M010'),
('OG002', 'Tan Ming Hui', 'tan.minghui@hotmail.com', '019-2248431', 'M019'),
('OG003', 'Ravi Wong', 'ravi.wong@outlook.com', '012-1014121', 'M018'),
('OG004', 'Nurul Wong Mei Lin', 'nurul.wongmeilin@hotmail.com', '017-5855998', 'M003'),
('OG005', 'Aryan Lim', 'aryan.lim@gmail.com', '017-8898989', 'M004'),
('OG006', 'Farah Krishnan', 'farah.krishnan@gmail.com', '014-2582558', 'M007'),
('OG007', 'Kavi Kumar Abdullah', 'kavi.kumar.abdullah@yahoo.com', '013-3030369', 'M016'),
('OG008', 'Liyana Chua', 'liyana.chua@gmail.com', '011-96961888', 'M017'),
('OG009', 'Aisha Subramanian', 'aisha.subramanian@outlook.com', '013-3936633', 'M009'),
('OG010', 'Amirah Devi', 'amirah.devi@gmail.com', '016-5586936', 'M001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`DonationID`),
  ADD KEY `DonerID` (`DonerID`);

--
-- Indexes for table `doner`
--
ALTER TABLE `doner`
  ADD PRIMARY KEY (`DonerID`),
  ADD KEY `MemberID` (`MemberID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`EventID`),
  ADD KEY `organizerID` (`organizerID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`MemberID`);

--
-- Indexes for table `organizer`
--
ALTER TABLE `organizer`
  ADD PRIMARY KEY (`OrganizerID`),
  ADD KEY `MemberID` (`MemberID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`DonerID`) REFERENCES `doner` (`DonerID`);

--
-- Constraints for table `doner`
--
ALTER TABLE `doner`
  ADD CONSTRAINT `doner_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`);

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`organizerID`) REFERENCES `organizer` (`OrganizerID`);

--
-- Constraints for table `organizer`
--
ALTER TABLE `organizer`
  ADD CONSTRAINT `organizer_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
