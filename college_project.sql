-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 12:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `CID` int(11) NOT NULL,
  `CName` varchar(250) NOT NULL,
  `CAffiliated` varchar(250) NOT NULL,
  `CAddress` varchar(250) NOT NULL,
  `CProvince` varchar(250) NOT NULL,
  `CDuration` int(11) NOT NULL DEFAULT 4,
  `CFees` int(11) NOT NULL,
  `CWebsite` varchar(250) NOT NULL,
  `CContact` int(11) NOT NULL,
  `CMail` varchar(250) NOT NULL,
  `CType` varchar(250) NOT NULL,
  `About` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`CID`, `CName`, `CAffiliated`, `CAddress`, `CProvince`, `CDuration`, `CFees`, `CWebsite`, `CContact`, `CMail`, `CType`, `About`) VALUES
(22, 'Ambikeshwari College', 'tribhuvan', 'Ghorahi, Nepal', 'province 3', 4, 800000, 'https://amc.edu.np/', 82563545, 'amcd2069@gmail.com', 'private', 'Ambikeshwari is dedicated one of the unique institution designed to disseminate quality and practical education to students in a conducting learning environment . It provides highly advanced latest new courses of management humanities and science and technology. Ambikeshwari Campus has highly young qualified energetic , dynamic , competent and versatile academicians and scholars. It has been possible only through highly competent and professional teachers, responsible management and well resourced labs dedicated to creative experiments . In keeping with modern trends, the campus believes in the principle of learning by doing . The education provided by the campus students centric and tailored to meet the challenges of the new world .'),
(23, 'Amrit Science Campus', 'tribhuvan', 'Lainchaur, Kathmandu', 'province 3', 4, 400000, 'www.amritcampus.edu.np/', 4411637, 'amritcampus@ntc.net.np', 'public', 'Amrit Science Campus (ASCOL), the only pure science college in Nepal, originally known as Public Science College (PUSCOL), was named after its founder principal and a Chemistry Professor, late Amrit Prasad Pradhan who established this institution with an attempt to promote the study of science and technology in Nepal.\r\nSituated at the heart of Kathmandu valley, it is a government college under the Institute of Science and Technology and affiliated with Tribhuwan University. With more than 1000 students enrolled for their higher educational studies, the Campus has been successful in imparting paramount knowledge and quality education for the graduate and postgraduate degree.'),
(24, 'AIMS College', 'kathmandu', 'Biratnagar', 'province 1', 4, 600000, 'www.aimsnp.edu.np', 537060, 'aimscollegebrt@gmail.com', 'public', 'AIMS College is for the global learners and enthusiasts for learning Computer Science, Information technology, Management and Hotel Management courses which are under Tribhuvan University. It is leb by the dynamic team of well known and experienced academic professionals who have spent long time in teaching profession.'),
(25, 'ACHS College of IT and Computer Science', 'tribhuvan', 'Dhobidhara, Kathmandu', 'province 3', 4, 600000, 'https://achsnepal.edu.np/', 4437318, 'info@achsnepal.edu.np', 'private', 'ACHS acronym for Asian College of Higher Studies is a reputed and top College of Information technology and Computer Science that was established in 2010. It is centrally located at Dhobidhara, Kathmandu in a sound infrastructure. This College provides its students with knowledge of Management, Computer Science and Information technology disciplines. It helps to prepare leaders to face challenges of a dynamic and diverse world who can contribute towards the socio-economic development of the nation. With strong core values ACHS College gives a great opportunity to be a part of its learning environment with benchmarks such as five stars rating on the student teacher ratio per class, ranked 91 out of Top 100 Universities of the World. It has a sound professional environment with a career development cell as an extension.'),
(26, 'Patan college', 'purbanchal', 'Quaerat est facere a', 'province 5', 79, 1, 'https://www.ryfejomapozize.co.uk', 6, 'zanozus@mailinator.com', 'public', 'Ab quibusdam quia do'),
(27, 'Laddin Moses', 'purbanchal', 'Dolore cumque occaec', 'province 4', 21, 22, 'https://www.suhywujynobuq.us', 41, 'tylaxafys@mailinator.com', 'private', 'Odio reprehenderit'),
(28, 'Roach', 'midwestern', 'Non eveniet cumque', 'province 1', 47, 20, 'https://www.zejazohogupepy.ca', 54, 'ziwyxek@mailinator.com', 'private', 'Qui reiciendis magna'),
(29, 'Chavez', 'pokhara', 'Obcaecati et repelle', 'province 6', 13, 24, 'https://www.hoxobefiwibemuh.ws', 17, 'kipynedev@mailinator.com', 'public', 'Non pariatur Amet');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `ID` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `UserName` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Number` int(11) NOT NULL,
  `Password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`ID`, `Name`, `UserName`, `Email`, `Number`, `Password`) VALUES
(1, '0', '0', '0', 760, '0'),
(2, '0', '0', '0', 594, '0'),
(3, 'Julian Cox', 'mukeq', 'wumemanic@mailinator.com', 654, 'Pa$$w0rd!'),
(7, 'Zelda Jennings', 'saqacuh', 'fehuh@mailinator.com', 360, '$2y$10$s23mbiX5RG7WcnWgT8WnpupJqWEXhMHxmamZPCg1c/7yvAno5v3HS'),
(8, 'Rina Hensley', 'bysevusaz', 'pucus@mailinator.com', 619, '$2y$10$RI4M1hKS4hn00VmMbxVR8eDaeYOu8LanseZ7aTHWhfMibEKnJ1nbq'),
(9, 'Isaac Baird', 'rahyzu', 'kufak@mailinator.com', 932, '$2y$10$GuEBLNEjH2Ovg1RXxe/kAuxrOdxAcFztXTTRyuar/b.Np8qjDJIGO'),
(10, 'Signe Ingram', 'xycapiha', 'rovigih@mailinator.com', 146, '$2y$10$ycNz8VG3.LnZGfoyl7GT5OOoZGPqN/Cc6gp5EQj5Y6QIv3EoJ3kzS'),
(11, 'deep', 'deep', 'deep@mail.com', 2147483647, '$2y$10$pn0gNZihcYfz6MFfnWsH/ek6ENrh8PfgWjGBy.wbrGvjKPl.C3Enq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
