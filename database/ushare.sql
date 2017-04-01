-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2017 at 05:46 AM
-- Server version: 5.7.11
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ushare`
--
-- CREATE DATABASE IF NOT EXISTS `ushare` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
-- USE `ushare`;

-- --------------------------------------------------------

--
-- Table structure for table `agree`
--

CREATE TABLE `agree` (
  `id_agree` int(11) NOT NULL,
  `agree` bit(1) DEFAULT NULL,
  `disagree` bit(1) DEFAULT NULL,
  `id_confess_agr` int(11) DEFAULT NULL,
  `id_user_agr` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agree`
--

INSERT INTO `agree` (`id_agree`, `agree`, `disagree`, `id_confess_agr`, `id_user_agr`) VALUES
(1, b'1', b'0', 1, 1),
(4, b'1', b'0', 2, 1),
(5, b'1', b'0', 8, 1),
(6, b'1', b'0', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `comment_text` text,
  `id_user_com` int(11) DEFAULT NULL,
  `id_confession_com` int(11) DEFAULT NULL,
  `comm_date` date NOT NULL,
  `comm_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comment`, `comment_text`, `id_user_com`, `id_confession_com`, `comm_date`, `comm_time`) VALUES
(1, 'hello :) ', 1, 1, '2017-03-17', '02:11am'),
(2, 'Hi', 1, 2, '2017-03-17', '02:12am'),
(3, 'hi', 1, 1, '2017-03-17', '02:12am'),
(4, 'Edi meow :) ', 1, 4, '2017-03-17', '01:37pm'),
(5, 'I\'m inlove with the shape of you', 2, 1, '2017-03-17', '01:53pm'),
(6, 'hello :) ', 2, 7, '2017-03-17', '10:07pm'),
(7, 'hello :) ', 2, 5, '2017-03-18', '09:37am'),
(8, 'Gagu!', 1, 8, '2017-03-18', '09:48am'),
(9, 'CC?', 1, 8, '2017-03-18', '09:48am'),
(10, 'TANGA ka!', 1, 8, '2017-03-18', '09:49am');

-- --------------------------------------------------------

--
-- Table structure for table `confession`
--

CREATE TABLE `confession` (
  `id_confession` int(11) NOT NULL,
  `id_request` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `confession_title` varchar(255) DEFAULT NULL,
  `confession_text` text,
  `hidden_name` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confession`
--

INSERT INTO `confession` (`id_confession`, `id_request`, `id_users`, `confession_title`, `confession_text`, `hidden_name`, `college`, `date`, `time`) VALUES
(1, 1, 1, 'Shape Of You', 'ASDFG LASDKJAHSDLASK:DJ AS:DJ ASD', 'keemo', 'College of Science', '2017-03-16', '05:11pm'),
(2, 2, 1, 'Supermarket Flowers', ' You are an angel in a shape of my mum.', 'keemo', 'College of Science', '2017-03-16', '05:36pm'),
(3, 3, 1, 'What Do I Know?', ' You know nothing John Snow!', 'Konoha Ninja', 'College of Science', '2017-03-17', '05:24am'),
(4, 4, 1, 'Ayoko na', 'Ayoko na', 'Alyssa Brila', 'College of Science', '2017-03-17', '05:35am'),
(5, 5, 2, 'Hello ', ' HI', 'Alyssa Brila', 'College of Science', '2017-03-17', '05:58am'),
(6, 6, 1, 'asdf', ' asdf', 'Diether Francia', 'College of Science', '2017-03-17', '10:46am'),
(7, 7, 2, 'Ang sakit ng ulo ko', ' myghaaaaaaad', 'Alyssa Brila', 'College of Science', '2017-03-17', '10:46am'),
(8, 12, 1, 'Umibig sa maling tao', ' Akala ko siya na,Yun pala hindi Umasa at Nag assume lang ako.\r\n\r\nako na kaibigan niya lang pa', 'Jose ang matibay na talong', 'College of Science', '2017-03-18', '01:48am'),
(9, 13, 1, 'Ang maliit kong kangkong', ' HAHAHAHHAHAHHAHAHA', 'ELLEN ANG MALIIT NA KANGKONG', 'College of Science', '2017-03-18', '01:53am');

-- --------------------------------------------------------

--
-- Table structure for table `confession_info`
--

CREATE TABLE `confession_info` (
  `id_confession_info` int(11) NOT NULL,
  `confession_approved` int(11) NOT NULL,
  `confession_requests` int(11) NOT NULL,
  `hidden_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confession_info`
--

INSERT INTO `confession_info` (`id_confession_info`, `confession_approved`, `confession_requests`, `hidden_name`) VALUES
(1, 2, 4, 'ELLEN ANG MALIIT NA KANGKONG'),
(2, 1, 3, 'Alyssa Brila'),
(3, 0, 0, 'jasver Salva'),
(4, 0, 0, 'maui'),
(5, 0, 0, 'melits');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `id_personal_info` int(11) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_no` varchar(20) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `forgot_question` varchar(255) NOT NULL,
  `forgot_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id_personal_info`, `display_name`, `first_name`, `last_name`, `middle_name`, `email`, `contact_no`, `birthdate`, `sex`, `forgot_question`, `forgot_password`) VALUES
(1, 'Biancake', 'Hakeem Polistico', 'Polistico', 'Andaya', 'hjpolistico@gmail.com', '09975864782', '1994-07-22', 'Male', 'Favorite Color', 'red'),
(2, 'Adrielle Kristine Nicolette Escaro', 'Adrielle Kristine Nicolette', 'Escaro', 'Mestiola', 'hjpolistico@gmail.com', '9975864782', '1998-06-24', 'Female', 'Favorite Food', 'Ramen'),
(3, 'Jasver salva', 'Jasver', 'salva', 'aasdf', 'jasversalva@gmail.com', '09971234567', '1998-06-24', 'Female', 'Hometown', 'Imus, Cavite'),
(4, 'Shiela May morales', 'Shiela May', 'morales', 'asdfasdf', 'shiela.morales@gmail.com', '09991234567', '1998-02-02', 'Female', 'Favorite Superhero', 'Powerpuff Girls'),
(5, 'Meliton lazaro', 'Meliton', 'lazaro', 'Diego', 'mel@gmail.com', '09123456789', '1998-06-24', 'Male', 'Favorite Color', 'black');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id_request` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `request_title` varchar(255) DEFAULT NULL,
  `request_text` text,
  `hidden_name` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(8) DEFAULT NULL,
  `approved` bit(1) NOT NULL,
  `declined` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id_request`, `id_users`, `request_title`, `request_text`, `hidden_name`, `college`, `date`, `time`, `approved`, `declined`) VALUES
(1, 1, 'Shape Of You', 'ASDFG LASDKJAHSDLASK:DJ AS:DJ ASD', 'keemo', 'College of Science', '2017-03-16', '05:10pm', b'1', b'0'),
(2, 1, 'Supermarket Flowers', ' You are an angel in a shape of my mum.', 'keemo', 'College of Science', '2017-03-17', '01:34am', b'1', b'0'),
(3, 1, 'What Do I Know?', ' You know nothing John Snow!', 'Konoha Ninja', 'College of Science', '2017-03-17', '01:24pm', b'1', b'0'),
(4, 1, 'Ayoko na', 'Ayoko na', 'Alyssa Brila', 'College of Science', '2017-03-17', '01:35pm', b'1', b'0'),
(5, 2, 'Hello ', ' HI', 'Alyssa Brila', 'College of Science', '2017-03-17', '01:57pm', b'1', b'0'),
(6, 1, 'asdf', ' asdf', 'Diether Francia', 'College of Science', '2017-03-17', '05:34pm', b'1', b'0'),
(7, 2, 'Ang sakit ng ulo ko', ' myghaaaaaaad', 'Alyssa Brila', 'College of Science', '2017-03-17', '06:39pm', b'1', b'0'),
(8, 2, 'asdfasdf', ' asdfasdfasdfa', 'Alyssa Brila', 'College of Science', '2017-03-17', '06:40pm', b'0', b'0'),
(9, 2, 'ASDF', ' ASDFA', 'Alyssa Brila', 'College of Science', '2017-03-17', '06:40pm', b'0', b'0'),
(10, 2, 'potangina mo naman', ' potangina mo naman ', 'Alyssa Brila', 'College of Science', '2017-03-17', '06:42pm', b'0', b'0'),
(11, 2, 'Grenade', 'I want to bomb you', 'Bruno', 'College of Science', '2017-07-22', '10:22 am', b'0', b'0'),
(12, 1, 'Umibig sa maling tao', ' Akala ko siya na,Yun pala hindi Umasa at Nag assume lang ako.\r\n\r\nako na kaibigan niya lang pa', 'Jose ang matibay na talong', 'College of Science', '2017-03-18', '09:46am', b'1', b'0'),
(13, 1, 'Ang maliit kong kangkong', ' HAHAHAHHAHAHHAHAHA', 'ELLEN ANG MALIIT NA KANGKONG', 'College of Science', '2017-03-18', '09:51am', b'1', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id_student_info` int(11) NOT NULL,
  `student_no` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `year_graduated` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id_student_info`, `student_no`, `course`, `college`, `year_graduated`) VALUES
(1, '14-038-015', 'BS in Information System', 'College of Science', ''),
(2, '14-038-027', 'BS in Information System', 'College of Science', ''),
(3, '14-038-016', 'BS in Information System', 'College of Science', ''),
(4, '14-038-069', 'bSIS', 'College of Science', ''),
(5, '14-038-022', 'BS in Information System', 'College of Science', '');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `id_suggestion` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `suggestion_text` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`id_suggestion`, `id_users`, `name`, `email`, `suggestion_text`) VALUES
(1, 2, 'Adrielle Kristine Nicolette Escaro', 'hjpolistico@gmail.com', 'hello'),
(2, 1, 'Biancake', 'biancake@gmail.com', 'hello po');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `log` bit(1) DEFAULT NULL,
  `admin` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`, `cpassword`, `firstname`, `lastname`, `log`, `admin`) VALUES
(1, 'hakeem', 'hakeem', 'hakeem', 'hakeem', 'polistico', b'1', b'1'),
(2, 'adrii', 'adrii', 'adrii', 'Adrielle Kristine Nicolette', 'Escaro', b'0', b'0'),
(3, 'jassy', 'jassy', 'jassy', 'Jasver', 'salva', b'0', b'0'),
(4, 'shiela', 'admin', 'admin', 'Shiela May', 'morales', b'0', b'0'),
(5, 'mel', 'mel', 'mel', 'Meliton', 'lazaro', b'0', b'0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agree`
--
ALTER TABLE `agree`
  ADD PRIMARY KEY (`id_agree`),
  ADD KEY `fk_id_confess_agr_idx` (`id_confess_agr`),
  ADD KEY `fk_id_user_agr_idx` (`id_user_agr`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `fk_id_user_req_idx` (`id_user_com`),
  ADD KEY `fk_confession_com_idx` (`id_confession_com`);

--
-- Indexes for table `confession`
--
ALTER TABLE `confession`
  ADD PRIMARY KEY (`id_confession`);

--
-- Indexes for table `confession_info`
--
ALTER TABLE `confession_info`
  ADD PRIMARY KEY (`id_confession_info`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id_personal_info`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id_request`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id_student_info`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`id_suggestion`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agree`
--
ALTER TABLE `agree`
  MODIFY `id_agree` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `confession`
--
ALTER TABLE `confession`
  MODIFY `id_confession` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `confession_info`
--
ALTER TABLE `confession_info`
  MODIFY `id_confession_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `id_personal_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id_student_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `id_suggestion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
