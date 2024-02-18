-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2024 at 07:17 AM
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
  `DonationID` int(11) NOT NULL,
  `DonationAmount` double NOT NULL,
  `DonationMethod` varchar(50) DEFAULT NULL,
  `DonerID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`DonationID`, `DonationAmount`, `DonationMethod`, `DonerID`) VALUES
(1, 50, 'credit card', 1),
(2, 100, 'online banking', 2),
(3, 150, 'credit card', 3),
(4, 20, 'e-wallet', 4),
(5, 200, 'credit card', 5),
(6, 50, 'debit card', 6),
(7, 300, 'online banking', 7),
(8, 250, 'credit card', 8),
(9, 50, 'e-wallet', 9),
(10, 100, 'e-wallet', 10),
(11, 130, 'online banking', 11),
(12, 230, 'credit card', 12),
(13, 350, 'online banking', 13),
(14, 10, 'e-wallet', 14),
(15, 30, 'e-wallet', 15),
(16, 300, 'credit card', 16),
(17, 500, 'credit card', 17),
(18, 450, 'online banking', 18),
(19, 50, 'debit card', 19),
(20, 100, 'credit card', 20),
(21, 50, 'e-wallet', 21),
(22, 400, 'online banking', 22),
(23, 30, 'e-wallet', 23),
(24, 80, 'debit card', 24),
(25, 1000, 'credit card', 25),
(26, 350, 'e-wallet', 26),
(27, 320, 'online banking', 27),
(28, 530, 'credit card', 28),
(29, 330, 'debit card', 29),
(30, 520, 'credit card', 30);

-- --------------------------------------------------------

--
-- Table structure for table `doner`
--

CREATE TABLE `doner` (
  `DonerID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `MemberID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doner`
--

INSERT INTO `doner` (`DonerID`, `Name`, `Email`, `MemberID`) VALUES
(1, 'Stephy Lim', 'stephylim@gmail.com', NULL),
(2, 'Janice Lee', 'janice@hotmail.com', NULL),
(3, 'Lee Qian Wei', 'qianwei@yahoo.com', NULL),
(4, 'Alvin Tan', 'alvin00@gmail.com', NULL),
(5, 'Norhasanah', 'hasanah@outlook.com', NULL),
(6, 'Kumar', 'kumr04@yahoo.com', NULL),
(7, 'Ritheek Shivaraj', 'ritheek04@gmail.com', NULL),
(8, 'Nicoles Tan', 'nicoles01@gmail.com', NULL),
(9, 'Amirah Devi', 'amirah.devi@gmail.com', 1),
(10, 'Will Tan', 'willtan94@hotmail.com', NULL),
(11, 'Noor Atikah', 'nooratikah89@yahoo.com', NULL),
(12, 'Vegnesh Rao', 'vegnesh04@outlook.com', NULL),
(13, 'Siti Priya Abdullah', 'siti.priya.abdullah@hotmail.com', 5),
(14, 'Dinesh', 'dinesh00@yahoo.com', NULL),
(15, 'Chen Ming Jie', 'chen.mingjie@yahoo.com', 6),
(16, 'Husna', 'husna00@outlook.com', NULL),
(17, 'Chin Huan Ching', 'huanching@gmail.com', NULL),
(18, 'Kelly Wong', 'kellywong90@yahoo.com', NULL),
(19, 'Wilson Lai Wei Sheng', 'wilson.lai98@hotmail.com', NULL),
(20, 'Hafizah Krishnamurthy', 'hafizah.krishnamurthy@gmail.com', 20),
(21, 'Nurul Wong Mei Lin', 'nurul.wongmeilin@hotmail.com', 3),
(22, 'Rex Yeep', 'rex.yeep@gmail.com', NULL),
(23, 'Kavi Kumar Abdullah', 'kavi.kumar.abdullah@yahoo.com', 16),
(24, 'Zainab Ganesh', 'zainab.ganesh@gmail.com', 13),
(25, 'Tan Mei Mei', 'meimei90@gmail.com', NULL),
(26, 'Cody Lee', 'codylee@outlook.com', NULL),
(27, 'Nizan Foo', 'nizanfoo@yahoo.com', NULL),
(28, 'Rajendra Tan', 'rajendra.tan@yahoo.com', 2),
(29, 'Janice Wong', 'janice.wong99@gmail.com', NULL),
(30, 'Rachel Yong', 'rachel.yong@hotmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `EventID` int(11) NOT NULL,
  `EventName` varchar(50) NOT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `NumberofVolunteer` int(11) DEFAULT NULL,
  `Venue` varchar(50) DEFAULT NULL,
  `OrganizerID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`EventID`, `EventName`, `Date`, `Time`, `NumberofVolunteer`, `Venue`, `OrganizerID`) VALUES
(1, 'Run for Hope 2022', '2022-02-10', '10:00:00', 11000, 'Bukit Jalil', 1),
(2, 'Hopeful Hearts Charity Gala', '2022-02-27', '10:00:00', 15000, 'Sungai Long', 2),
(3, 'Helping Hands 10K Charity Run', '2022-03-01', '10:00:00', 20000, 'Kuchai Lama', 3),
(4, 'Artisans for Change Art Auction', '2022-03-25', '15:00:00', 23000, 'Balakong', 4),
(5, 'Unity in Diversity Festival', '2022-03-10', '10:00:00', 12000, 'Sungai Besi', 5),
(6, 'Dance for a Cause Marathon', '2022-03-28', '17:00:00', 8800, 'Semenyih', 6),
(7, 'Tech Innovators Charity Hackathon', '2022-04-09', '10:00:00', 12900, 'Johor Bahru', 7),
(8, 'Fashion with Compassion Show', '2022-04-29', '18:00:00', 11100, 'Sri Petaling', 8),
(9, 'Family Fun Fair & Fundraiser', '2022-05-01', '10:00:00', 23000, 'Bukit Bintang', 9),
(10, 'Harmony Concert for Hope', '2022-05-25', '10:00:00', 15500, 'Petaling Jaya', 10),
(11, 'Foodies Unite Charity Food Fest', '2022-06-06', '10:00:00', 22300, 'Sungai Besi', 5),
(12, 'Paws for a Cause Pet Parade', '2022-06-30', '10:00:00', 21900, 'Kuchai Lama', 3),
(13, 'Mind Matters Mental Health Symposium', '2022-07-09', '10:00:00', 12900, 'Bukit Bintang', 9),
(14, 'Trivia Night for Education', '2022-07-29', '18:00:00', 21100, 'Sungai Long', 2),
(15, 'Green Revolution Eco-Friendly Expo', '2022-08-07', '10:00:00', 11200, 'Sri Petaling', 8),
(16, 'Community Clean-Up Challenge', '2022-08-29', '10:00:00', 18800, 'Semenyih', 6),
(17, 'Crafting for a Cause DIY Fair', '2022-09-09', '12:00:00', 13500, 'Petaling Jaya', 10),
(18, 'Sports for All Tournament', '2022-09-30', '10:00:00', 23000, 'Kuchai Lama', 3),
(19, 'Bookworms Charity Book Sale', '2022-10-10', '10:00:00', 32000, 'Sri Petaling', 8),
(20, 'Dine Out for Charity Week', '2022-10-30', '10:00:00', 18800, 'Petaling Jaya', 10),
(21, 'Green Thumb Plant-a-Thon', '2022-11-01', '10:00:00', 21400, 'Sungai Long', 2),
(22, 'Silent Disco for Social Causes', '2022-11-22', '10:00:00', 13500, 'Johor Bahru', 7),
(23, 'Teen Tech Throwdown', '2022-12-02', '10:00:00', 23000, 'Bukit Jalil', 1),
(24, 'Laughs for a Cause Comedy Night', '2022-12-20', '18:00:00', 23000, 'Sungai Besi', 5),
(25, 'Wellness Warrior Fitness Challenge', '2023-01-01', '10:00:00', 12200, 'Semenyih', 6),
(26, 'Yoga for Charity in the Park', '2023-01-30', '10:00:00', 13500, 'Kuchai Lama', 3),
(27, 'Karaoke for a Cure', '2023-02-12', '17:00:00', 10000, 'Balakong', 4),
(28, 'Vintage Car Show for Veterans', '2023-03-20', '10:00:00', 19500, 'Bukit Jalil', 1),
(29, 'Cook-Off for a Cause: Chefs Unite', '2023-04-05', '10:00:00', 18800, 'Sungai Besi', 5),
(30, 'Through the Lens Photography Exhibition', '2023-04-30', '10:00:00', 15500, 'Petaling Jaya', 10),
(31, 'Stargazing Night for STEM Education', '2023-05-05', '17:00:00', 23000, 'Balakong', 4),
(32, 'Hunt for Hunger Scavenger Challenge', '2023-06-12', '10:00:00', 13200, 'Sri Petaling', 8),
(33, 'Home and Garden Expo', '2023-07-29', '10:00:00', 23000, 'Sungai Long', 2),
(34, 'Magic Show for Kids', '2023-08-15', '20:00:00', 15500, 'Balakong', 4),
(35, 'Bollywood Dance Night for Diversity', '2023-09-05', '17:00:00', 12500, 'Johor Bahru', 7),
(36, 'Tech Expo for Education', '2023-10-20', '10:00:00', 21400, 'Bukit Jalil', 1),
(37, 'Motorsports Weekend for Medical Research', '2023-11-01', '10:00:00', 13500, 'Semenyih', 6),
(38, 'Outdoor Adventure Challenge', '2023-11-20', '10:00:00', 23000, 'Bukit Bintang', 9),
(39, 'Culinary Arts Showcase for Charity', '2023-12-12', '14:00:00', 15500, 'Johor Bahru', 7),
(40, 'Sustainable Living Workshop Series', '2024-01-11', '10:00:00', 12900, 'Bukit Bintang', 9);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `MemberID` int(11) NOT NULL,
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
(1, 'Amirah96', 'Amirah Devi', 28, 'amirah.devi@gmail.com', 'Female', '016-5586936', '960223-10-2587', 'Amirah0223'),
(2, 'Rajendra99', 'Rajendra Tan', 25, 'rajendra.tan@yahoo.com', 'Male', '018-3339988', '990509-15-2266', 'Rajendra0509'),
(3, 'Nurul94', 'Nurul Wong Mei Lin', 30, 'nurul.wongmeilin@hotmail.com', 'Female', '017-5855998', '940808-12-5969', 'Nurul@940808'),
(4, 'Aryan93', 'Aryan Lim', 31, 'aryan.lim@gmail.com', 'Male', '017-8898989', '930205-18-1519', 'Aryan930205'),
(5, 'Siti98', 'Siti Priya Abdullah', 26, 'siti.priya.abdullah@hotmail.com', 'Female', '011-25823255', '981015-14-5856', 'Sitipriya1015'),
(6, 'Chen00', 'Chen Ming Jie', 24, 'chen.mingjie@yahoo.com', 'Male', '017-2556963', '001205-17-5588', 'Mingjie@001205'),
(7, 'Farah89', 'Farah Krishnan', 35, 'farah.krishnan@gmail.com', 'Female', '014-2582558', '890805-15-5956', 'Farah@890805'),
(8, 'Clement04', 'Clement Tan Yew Meng', 20, 'clement.tanyewmeng@gmail.com', 'Male', '011-89811888', '040828-14-0529', 'Clement040828'),
(9, 'Aisha95', 'Aisha Subramanian', 29, 'aisha.subramanian@outlook.com', 'Female', '013-3936633', '950929-18-9695', 'Aisha@950929'),
(10, 'Patel94', 'Muhammad Patel', 30, 'muhammad.patel@yahoo.com', 'Male', '019-5586963', '940228-18-5595', 'Patel@940228'),
(11, 'Nicole00', 'Nicole Wong Mei Ling', 24, 'meiling.nicole@outlook.com', 'Female', '015-6339833', '001109-14-9966', 'Nicole001109'),
(12, 'Arjun01', 'Arjun Chong', 23, 'arjun.chong@hotmail.com', 'Male', '012-6963355', '011010-15-0219', 'Arjun@1010'),
(13, 'Zainab97', 'Zainab Ganesh', 27, 'zainab.ganesh@gmail.com', 'Male', '017-5054835', '970520-14-1407', 'Zainab@970520'),
(14, 'Yasmin02', 'Yasmin Lim Wei Hua', 22, 'yasmin.limweihua@gmail.com', 'Female', '016-2324915', '020202-15-1849', 'Yasmin020202'),
(15, 'Chong03', 'Chong Wei Chen', 21, 'weichen.chong@outlook.com', 'Male', '015-5455251', '030301-17-1478', 'Weichen@0301'),
(16, 'Kavi93', 'Kavi Kumar Abdullah', 31, 'kavi.kumar.abdullah@yahoo.com', 'Male', '013-3030369', '930829-00-2114', 'Kavikumar0829'),
(17, 'Liyana95', 'Liyana Chua', 29, 'liyana.chua@gmail.com', 'Female', '011-96961888', '950618-07-1210', 'Liyana950618'),
(18, 'Ravi94', 'Ravi Wong', 30, 'ravi.wong@outlook.com', 'Male', '012-1014121', '940713-08-0239', 'Ravi@940713'),
(19, 'Minghui92', 'Tan Ming Hui', 32, 'tan.minghui@hotmail.com', 'Female', '019-2248431', '921020-14-0291', 'Minghui921020'),
(20, 'Hafizah98', 'Hafizah Krishnamurthy', 26, 'hafizah.krishnamurthy@gmail.com', 'Male', '013-5459651', '980402-14-1529', 'Hafizah980402');

-- --------------------------------------------------------

--
-- Table structure for table `organizer`
--

CREATE TABLE `organizer` (
  `OrganizerID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `PhoneNumber` varchar(50) DEFAULT NULL,
  `MemberID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organizer`
--

INSERT INTO `organizer` (`OrganizerID`, `Name`, `Email`, `PhoneNumber`, `MemberID`) VALUES
(1, 'Muhammad Patel', 'muhammad.patel@yahoo.com', '019-5586963', 10),
(2, 'Tan Ming Hui', 'tan.minghui@hotmail.com', '019-2248431', 19),
(3, 'Ravi Wong', 'ravi.wong@outlook.com', '012-1014121', 18),
(4, 'Nurul Wong Mei Lin', 'nurul.wongmeilin@hotmail.com', '017-5855998', 3),
(5, 'Aryan Lim', 'aryan.lim@gmail.com', '017-8898989', 4),
(6, 'Farah Krishnan', 'farah.krishnan@gmail.com', '014-2582558', 7),
(7, 'Kavi Kumar Abdullah', 'kavi.kumar.abdullah@yahoo.com', '013-3030369', 16),
(8, 'Liyana Chua', 'liyana.chua@gmail.com', '011-96961888', 17),
(9, 'Aisha Subramanian', 'aisha.subramanian@outlook.com', '013-3936633', 9),
(10, 'Amirah Devi', 'amirah.devi@gmail.com', '016-5586936', 1);

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
  ADD KEY `OrganizerID` (`OrganizerID`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `DonationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `doner`
--
ALTER TABLE `doner`
  MODIFY `DonerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `EventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `MemberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `organizer`
--
ALTER TABLE `organizer`
  MODIFY `OrganizerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`OrganizerID`) REFERENCES `organizer` (`OrganizerID`);

--
-- Constraints for table `organizer`
--
ALTER TABLE `organizer`
  ADD CONSTRAINT `organizer_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `member` (`MemberID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
