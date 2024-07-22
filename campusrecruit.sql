-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2022 at 11:30 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campusrecruit`
--

-- --------------------------------------------------------

--
-- Table structure for table `addrule`
--

CREATE TABLE `addrule` (
  `id` int(100) NOT NULL,
  `rule` varchar(1000) NOT NULL,
  `cemail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addrule`
--

INSERT INTO `addrule` (`id`, `rule`, `cemail`) VALUES
(1, 'Students should be regular and punctual in attending the classes and all activities connected with the college.', 'Stjoseph12colege@gmail.com'),
(2, ' No student is allowed to enter the classroom or leave the class room during class hours without the permission of the principal.', 'Stjoseph12colege@gmail.com'),
(3, 'They are not permitted to go out during lunch break.', 'Stjoseph12colege@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `id` int(100) NOT NULL,
  `aemail` varchar(1000) NOT NULL,
  `pass` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`id`, `aemail`, `pass`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(100) NOT NULL,
  `branch` varchar(1000) NOT NULL,
  `cmail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `branch`, `cmail`) VALUES
(1, 'MCA', 'Stjoseph12colege@gmail.com'),
(4, 'MBA', 'Stjoseph12colege@gmail.com'),
(5, 'BCA', 'Stjoseph12colege@gmail.com'),
(6, 'BCA', 'sdm123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `clgregister`
--

CREATE TABLE `clgregister` (
  `id` int(100) NOT NULL,
  `cname` varchar(1000) NOT NULL,
  `caddr` varchar(1000) NOT NULL,
  `city` varchar(1000) NOT NULL,
  `pin` varchar(500) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(2022) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clgregister`
--

INSERT INTO `clgregister` (`id`, `cname`, `caddr`, `city`, `pin`, `mobile`, `email`, `pass`) VALUES
(1, 'St.Joseph College', 'Manglore, Vamanjoor\r\nDakshina Kannada\r\nKarnataka', 'Mangalore', '575005', '8546947441', 'Stjoseph12colege@gmail.com', '123'),
(2, 'SDM', 'pvs', 'mangalore', '575001', '8956458523', 'sdm123@gmail.com', 'Sdm@123456'),
(3, 'canara', 'pva', 'mangaluru', '575001', '7845963215', 'canara@gmail.com', 'Canara@123456');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(100) NOT NULL,
  `photo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `photo`) VALUES
(1, 'admincv_bg.jpg'),
(2, 'admina5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rc`
--

CREATE TABLE `rc` (
  `id` int(100) NOT NULL,
  `compname` varchar(1000) NOT NULL,
  `job` varchar(1000) NOT NULL,
  `loc` varchar(1000) NOT NULL,
  `CTC` varchar(500) NOT NULL,
  `criteria` varchar(100) NOT NULL,
  `process` varchar(2000) NOT NULL,
  `ebranch` varchar(100) NOT NULL,
  `ldate` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rc`
--

INSERT INTO `rc` (`id`, `compname`, `job`, `loc`, `CTC`, `criteria`, `process`, `ebranch`, `ldate`, `cname`) VALUES
(1, 'Infosys', 'Full Stack Web Development', 'Manglore', '2', 'Atleast 6months of Experience', 'Aptitude\r\nProgramming\r\nTesting\r\nInterview', ' MCA BCA', '04-12-2022', 'Stjoseph12colege@gmail.com'),
(2, 'Wipro', 'Full Stack Web Development', 'Manglore', '2', 'Good In English, Hindi ', 'Aptitude\r\nProgramming\r\nInterview\r\nHR', ' MCA', '01-11-2022', 'Stjoseph12colege@gmail.com'),
(3, 'Hash Infotecch', 'Android Development', 'Manglore', '2', 'Number of Android Application , Experience in android', 'Android', ' MCA BCA', '04/05/2023', 'Stjoseph12colege@gmail.com'),
(4, 'Hash Infotech', 'Software Engineer', 'Manglore', '2', 'Good in PHP, MYASQL, JAVA, JAVASCRIPT', 'Interview, HR Round', ' BCA', '12/09/2022', 'sdm123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `regstu`
--

CREATE TABLE `regstu` (
  `id` int(100) NOT NULL,
  `cid` varchar(1000) NOT NULL,
  `semail` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `selects` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regstu`
--

INSERT INTO `regstu` (`id`, `cid`, `semail`, `status`, `selects`) VALUES
(1, '1', 'Akhilesh@gmail.com', 'Registered', ''),
(2, '2', 'Akhilesh@gmail.com', 'Registered', 'selected'),
(3, '4', 'sourajrai@gmail.com', 'Registered', 'selected');

-- --------------------------------------------------------

--
-- Table structure for table `sturegister`
--

CREATE TABLE `sturegister` (
  `id` int(100) NOT NULL,
  `fname` varchar(1000) NOT NULL,
  `usn` varchar(1000) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `mobile` varchar(1000) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `clgname` varchar(1000) NOT NULL,
  `course` varchar(1000) NOT NULL,
  `gender` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `pincode` varchar(1000) NOT NULL,
  `hobbies` varchar(1000) NOT NULL,
  `prgmskill` varchar(1000) NOT NULL,
  `classXclg` varchar(1000) NOT NULL,
  `classXper` varchar(1000) NOT NULL,
  `classXyr` varchar(1000) NOT NULL,
  `puclg` varchar(1000) NOT NULL,
  `puperc` varchar(1000) NOT NULL,
  `puyear` varchar(1000) NOT NULL,
  `graclg` varchar(1000) NOT NULL,
  `graperc` varchar(1000) NOT NULL,
  `grayear` varchar(1000) NOT NULL,
  `masclg` varchar(1000) NOT NULL,
  `masperc` varchar(1000) NOT NULL,
  `masyear` varchar(1000) NOT NULL,
  `obj` varchar(100) NOT NULL,
  `project` varchar(1000) NOT NULL,
  `lang` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sturegister`
--

INSERT INTO `sturegister` (`id`, `fname`, `usn`, `dob`, `email`, `password`, `mobile`, `photo`, `clgname`, `course`, `gender`, `address`, `pincode`, `hobbies`, `prgmskill`, `classXclg`, `classXper`, `classXyr`, `puclg`, `puperc`, `puyear`, `graclg`, `graperc`, `grayear`, `masclg`, `masperc`, `masyear`, `obj`, `project`, `lang`) VALUES
(1, 'Akhilesh Karantha', '4SN19MCA', '12-4-2000', 'Akhilesh@gmail.com', '123', '6932587412', 'Akhilesh Karanthavikram rao.jpg', 'Stjoseph12colege@gmail.com', 'MCA', 'Male', 'Manglore', '575005', 'Reading', 'c,c++,java,python,php', 'SDMM', '80', '2015', 'SDMM', '90', '2017', 'SDMM', '92', '2019', 'St.Joseph', '90', '2022', 'reading', 'placement portal, child adoption, career builder', 'c,c++,java, python'),
(2, 'souraj rai', '123', '2001-09-25com', 'sourajrai@gmail.com', 'Sourajrai@12345', '7676849125', 'souraj rai20210908_181940.jpg', 'sdm123@gmail.com', 'BCA', 'Male', 'mangaldevi', '575001', 'drawing', 'java,c++', 'aloyisus', '75', '2012', 'aloysius', '85', '2014', 'SDM', '86', '2017', 'Joseph', '78', '2019', 'to do better', 'web based', 'java,c++');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addrule`
--
ALTER TABLE `addrule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alogin`
--
ALTER TABLE `alogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clgregister`
--
ALTER TABLE `clgregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rc`
--
ALTER TABLE `rc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regstu`
--
ALTER TABLE `regstu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sturegister`
--
ALTER TABLE `sturegister`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addrule`
--
ALTER TABLE `addrule`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `alogin`
--
ALTER TABLE `alogin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clgregister`
--
ALTER TABLE `clgregister`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rc`
--
ALTER TABLE `rc`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `regstu`
--
ALTER TABLE `regstu`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sturegister`
--
ALTER TABLE `sturegister`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
