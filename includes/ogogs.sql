-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2023 at 07:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ogogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `username`, `password`, `img`) VALUES
(1, 'admin', '1234', 'upload/IMG-20221011-WA0059_1691089948.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(50) NOT NULL,
  `surname` text NOT NULL,
  `othernames` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` text NOT NULL,
  `nation` text NOT NULL,
  `state` text NOT NULL,
  `town` text NOT NULL,
  `dob` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `section` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `class` varchar(50) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `guardians_name` varchar(100) NOT NULL,
  `guardians_phone` varchar(50) NOT NULL,
  `guardians_email` varchar(100) NOT NULL,
  `guardians_address` varchar(200) NOT NULL,
  `dateposted` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `surname`, `othernames`, `email`, `gender`, `nation`, `state`, `town`, `dob`, `branch`, `section`, `phone`, `class`, `pic`, `relationship`, `guardians_name`, `guardians_phone`, `guardians_email`, `guardians_address`, `dateposted`) VALUES
(1, 'Computer', 'HDHFVISIN', 'Odunayoalade111@gmail.com', 'male', 'dddd', 'ondo', 'Owo', '2023-07-19', 'emure', 'nursery', '08105219630', 'jss1', 'upload/IMG-20230221-WA0031_1689066179.jpg', 'parent', 'ALADE philip ODUNAYO', '08105219630', 'meccomputer2@gmail.com', 'oke ogun11', '11-07-23 11:02AM'),
(2, 'Computer', 'HDHFVISIN', 'olusolaphilip066@gmail.com', 'male', 'dddd', 'Ekiti', 'eporo', '2023-08-23', 'emure', 'primary', '08105219630', 'jss1', 'upload/images (5)_1690905852.jpeg', 'uncle', 'olusola philip oluwaferanmi', '08105219630', 'johnsonmarcus752@gmail.com', 'says', '01-08-23 06:04PM'),
(3, 'Computer', 'HDHFVISIN', 'olusolaphilip066@gmail.com', 'female', 'dddd', 'Ekiti', 'eporo', '2023-08-28', 'uso', 'primary', '08105219630', 'jss1', 'upload/postcard12_1690906805.png', 'parent', 'olusola philip oluwaferanmi', '08105219630', 'johnsonmarcus752@gmail.com', 'says', '01-08-23 06:20PM'),
(4, 'Computer', 'HDHFVISIN', 'olusolaphilip066@gmail.com', 'female', 'dddd', 'Ekiti', 'eporo', '2023-08-28', 'uso', 'primary', '08105219630', 'jss1', 'upload/postcard12_1690906846.png', 'parent', 'olusola philip oluwaferanmi', '08105219630', 'johnsonmarcus752@gmail.com', 'says', '01-08-23 06:20PM');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(255) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `document` varchar(500) NOT NULL,
  `dateP` varchar(255) NOT NULL,
  `dateS` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `student_name` varchar(255) DEFAULT NULL,
  `doc_submitted` varchar(255) DEFAULT NULL,
  `submitted_at` datetime DEFAULT NULL,
  `timeP` varchar(10) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `staff_name`, `class`, `document`, `dateP`, `dateS`, `subject`, `student_name`, `doc_submitted`, `submitted_at`, `timeP`, `status`) VALUES
(1, 'samuel john', 'jss2', 'upload/imagename_1696253109_1696254015_1696495181.png', '', '2023-10-31', 'Maths', NULL, NULL, NULL, '09:40', 'published'),
(2, 'ALADE22 ODUNAYO22', 'jss2', 'upload/IMG-20221223-WA0013_1696495246.jpg', '', '2023-10-19', 'English', NULL, NULL, NULL, '03:04', 'published'),
(3, 'samuel john', 'jss3', 'upload/class_1696253833_1696495435.sql', '', '2023-10-14', 'Biology', NULL, NULL, NULL, '09:46', 'published'),
(4, 'samuel john', 'jss3', 'upload/class_1696253833_1696495508.sql', '', '2023-10-14', 'Maths', NULL, NULL, NULL, '09:48', 'published'),
(5, 'ALADE22 ODUNAYO22', 'jss3', 'upload/IMG-20221223-WA0015_1696525063.jpg', '', '2023-10-27', 'computer', NULL, NULL, NULL, '07:09', 'published');

-- --------------------------------------------------------

--
-- Table structure for table `assign_subject`
--

CREATE TABLE `assign_subject` (
  `id` int(20) UNSIGNED NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinytext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0:active, 1:inactive\r\n',
  `created_at` datetime DEFAULT NULL,
  `is_delete` tinytext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0:not, 1:yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_subject`
--

INSERT INTO `assign_subject` (`id`, `class`, `subject`, `status`, `created_at`, `is_delete`) VALUES
(1, 'jss2', 'Maths', '0', '2023-10-02 23:02:59', '0'),
(2, 'jss2', 'English', '0', '2023-10-02 23:03:10', '0'),
(3, 'jss3', 'Biology', '0', '2023-10-02 00:03:48', '0');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinytext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0:active, 1:inactive\r\n',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_delete` tinytext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0:not, 1:yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`, `status`, `created_at`, `updated_at`, `is_delete`) VALUES
(2, 'jss1', '0', '2023-10-02 00:04:14', NULL, '0'),
(3, 'jss2', '0', '2023-09-29 12:12:45', NULL, '0'),
(4, 'jss3', '0', '2023-09-29 12:12:34', NULL, '0'),
(5, 'ss4', '0', '2023-09-28 20:42:04', NULL, '0'),
(6, 'primary 3', '1', '2023-10-02 02:21:57', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `date`) VALUES
(19, 'olusola philip oluwaferanmi', 'olusolaphilip066@gmail.com', 'web development', 'JN  M ,M M, M M MM ', '0000-00-00'),
(20, 'olusola philip oluwaferanmi', 'olusolaphilip066@gmail.com', 'WEB DESIGN', 'wscdscdfvdfdf', '2023-10-03'),
(21, 'ALADE philip ODUNAYO', 'Odunayoalade111@gmail.com', 'dssa', 'ascdsava', '2023-10-06'),
(22, 'olusola philip oluwaferanmi', 'olusolaphilip066@gmail.com', 'd  xz', 'sx xz z', '2023-10-06'),
(23, 'olusola philip oluwaferanmi', 'olusolaphilip066@gmail.com', 'web development', 'sdsds', '2023-10-06'),
(24, 'olusola philip oluwaferanmi', 'olusolaphilip066@gmail.com', 'zxvzxcv', 'zvczxv', '2023-10-06'),
(26, 'student joshua alade', 'student@gmail.com', 'sdvasdvsvsa', 'sacvadsavsac', '2023-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(33) NOT NULL,
  `event_time` varchar(10) NOT NULL,
  `event_img` varchar(500) NOT NULL,
  `event_title` varchar(250) NOT NULL,
  `event_message` varchar(5000) NOT NULL,
  `event_location` varchar(250) NOT NULL,
  `event_poster_img` varchar(255) NOT NULL,
  `event_poster_name` varchar(255) NOT NULL,
  `event_tag` varchar(255) NOT NULL,
  `event_date` text NOT NULL,
  `event_status` varchar(255) NOT NULL,
  `time_posted` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_time`, `event_img`, `event_title`, `event_message`, `event_location`, `event_poster_img`, `event_poster_name`, `event_tag`, `event_date`, `event_status`, `time_posted`) VALUES
(25, '13:33', 'upload/IMG-20210929-WA0038_1694521821.jpg', 'Rufus Giwa Polytechnic Suspended Exam Due to Unpaid Lecturers Fee.', '<p>klcio ikk </p>', 'First molac, owo ondo state.', '', 'dfdfdfdfbbnnn', '', '2023-09-20', 'drafted', '13:14'),
(26, '13:55', 'upload/IMG-20221223-WA0011_1696596945.jpg', 'hjhjkmmn  m,', '&lt;p&gt;hvvujkvbjb&lt;/p&gt;', 'First molac, owo ondo state.', '', 'jgvjkjb', '', '2023-10-30', 'published', '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(200) NOT NULL,
  `gallery_img` varchar(200) NOT NULL,
  `category` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `gallery_img`, `category`) VALUES
(70, 'upload/banner1_1695758592.jpg', 'laboratory');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `title` varchar(250) NOT NULL,
  `subtitle` varchar(250) NOT NULL,
  `summary` varchar(5000) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `tag` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `subtitle`, `summary`, `pic`, `content`, `date`, `time`, `tag`, `status`) VALUES
(21, 'welcome', 'Rufus Giwa Polytechnic ', 'Rufus Giwa Polytechnic Suspended Exam Due to Unpaid Lecturers Fee.', 'upload/1694525422_IMG-20210827-WA0008.jpg', '<p>yhvgiuuuujbjkjjkbkjb</p>', '2023-09-15', '02:30:00', '', 'drafted'),
(22, 'AMISSION', 'Rufus Giwa Polytechnic ', 'Rufus Giwa Polytechnic Suspended Exam Due to Unpaid Lecturers Fee.', 'upload/1696167572_1689695186_IMG-20221223-WA0096.jpg', '<p>nnnnnnm,,.m&nbsp; nn n nn n nn mn</p>', '2023-10-21', '17:39:00', '', 'published');

-- --------------------------------------------------------

--
-- Table structure for table `pin_table`
--

CREATE TABLE `pin_table` (
  `id` int(100) NOT NULL,
  `pin_user` varchar(255) NOT NULL,
  `pin` mediumint(100) NOT NULL,
  `serial` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `datep` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pin_table`
--

INSERT INTO `pin_table` (`id`, `pin_user`, `pin`, `serial`, `status`, `datep`) VALUES
(1, '', 423294, '788432FK00', 'NULL', '01-08-2023'),
(2, '', 95842, '473902RP01', 'NULL', '01-08-2023'),
(3, '', 548322, '031793KE02', 'NULL', '01-08-2023'),
(4, '', 795440, '290273TB03', 'NULL', '01-08-2023'),
(5, '', 536878, '832322IS04', 'NULL', '01-08-2023'),
(6, '', 392978, '222927FQ05', 'NULL', '01-08-2023'),
(7, '', 278567, '227833RD06', 'NULL', '01-08-2023'),
(8, '', 724930, '920442CB07', 'NULL', '01-08-2023'),
(9, '', 377284, '098734QJ08', 'NULL', '01-08-2023'),
(10, '', 347738, '378832NQ09', 'NULL', '01-08-2023'),
(11, '', 527380, '928033NP010', 'NULL', '01-08-2023'),
(12, 'ogooluwa/2023/student/01', 870529, '334133PI011', 'USED', '01-08-2023'),
(14, 'ogooluwa/2023/student/01', 45792, '229843PM013', 'USED', '01-08-2023'),
(15, 'ogooluwa/2023/student/00', 526935, '374438PD014', 'USED', '01-08-2023'),
(16, 'ogooluwa/2023/student/3489GO', 568274, '384377UY015', 'USED', '01-08-2023'),
(17, 'ogooluwa/2023/NTS/8096DW', 949083, '383839RL016', 'USED', '01-08-2023'),
(21, '', 27078, '400333SA00', 'NULL', '27-09-2023'),
(22, '', 859320, '347293JP01', 'NULL', '27-09-2023'),
(23, '', 655027, '702923TB02', 'NULL', '27-09-2023'),
(24, '', 574205, '212734DT03', 'NULL', '27-09-2023'),
(25, '', 73354, '134038VS04', 'NULL', '27-09-2023'),
(26, 'ogooluwa/2023/TS/9730VR', 328758, '043248YT00', 'USED', '27-09-2023'),
(27, 'ogooluwa/2023/student/37831', 390269, '037304MF01', 'USED', '27-09-2023'),
(28, 'ogooluwa/2023/student/16281', 904757, '322312LP02', 'USED', '27-09-2023'),
(31, '', 704288, '793240TE00', 'NULL', '02-10-2023'),
(32, '', 537228, '232930BZ01', 'NULL', '02-10-2023'),
(33, 'ogooluwa/2023/TS/1366BL', 348490, '273488JV00', 'USED', '02-10-2023');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(100) NOT NULL,
  `serial` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `lg` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `year_employed` int(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(500) NOT NULL,
  `datep` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `serial`, `username`, `firstname`, `middlename`, `lastname`, `gender`, `dob`, `state`, `lg`, `town`, `email`, `phone`, `location`, `category`, `year_employed`, `password`, `img`, `datep`) VALUES
(16, '043248YT00', 'ogooluwa/2023/TS/9730VR', 'samuel', 'philip', 'john', 'male', '2023-09-13', 'ondo', 'Ekiti', 'Owo', 'staff@gmail.com', '08105219630', 'owo ondo state', 'TS', 5, '81dc9bdb52d04dc20036dbd8313ed055', 'upload/IMG-20230219-WA0005_1688812969_1695878101.jpg', '28-09-2023'),
(17, '273488JV00', 'ogooluwa/2023/TS/1366BL', 'ALADE22', 'philip22', 'ODUNAYO22', 'female', '2023-10-18', 'ondo22', 'Ekiti', 'Owo', 'Odunayoalade111@gmail.com', '08105219630', 'alafiatayo', 'TS', 5, '81dc9bdb52d04dc20036dbd8313ed055', 'upload/IMG-20221011-WA0057_1687978333_1696335995.jpg', '03-10-2023');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(100) NOT NULL,
  `serial` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `lg` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(500) NOT NULL,
  `datep` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `serial`, `username`, `firstname`, `middlename`, `lastname`, `gender`, `class`, `dob`, `state`, `lg`, `town`, `email`, `phone`, `location`, `password`, `img`, `datep`) VALUES
(1, '334133PI011', 'ogooluwa/2023/student/02', 'samuel', 'joshua', 'alade1', 'female', '', '2023-09-28', 'Ekiti', 'eeeeeeeeee', 'eporo', 'johnsonmarcus752@gmail.com', '08105219630', 'says', 'd41d8cd98f00b204e9800998ecf8427e', 'upload/banner1 (1)_1695821695.jpg', '0000-00-00 00:00:00'),
(2, '334133PI011', 'ogooluwa/2023/student/02', 'samuel', 'joshua', 'alade1', 'female', '', '2023-09-28', 'Ekiti', 'eeeeeeeeee', 'eporo', 'johnsonmarcus752@gmail.com', '08105219630', 'says', '81dc9bdb52d04dc20036dbd8313ed055', 'upload/banner1 (1)_1695821695.jpg', '0000-00-00 00:00:00'),
(4, '348393OJ03', 'ogooluwa/2023/student/93751', 'ALxxADE111111', '1111', 'ODzxx11111UNAYO', 'male', '', '2023-09-22', 'ondo', 'ondo2', 'Owo', 'Odunayoalade111@gmail.com', '08105219630', 'qwewrewrwr', 'd41d8cd98f00b204e9800998ecf8427e', 'upload/banner1 (1)_1695822336.jpg', '0000-00-00 00:00:00'),
(5, '322312LP02', 'ogooluwa/2023/student/16281', 'ALADE', 'philip', 'ODUNAYO', 'female', 'jss2', '2023-09-13', 'ondo', 'owo', 'Owo', 'Odunayoalade111@gmail.com', '08105219630', 'qwewrewrwr', 'd41d8cd98f00b204e9800998ecf8427e', 'upload/service1_1695822665.jpg', '0000-00-00 00:00:00'),
(6, '037304MF01', 'ogooluwa/2023/student/37831', 'student', 'joshua', 'alade', 'male', 'jss2', '2023-09-22', 'Ekiti', 'ondo', 'eporo', 'student@gmail.com', '081052196301', 'says', '81dc9bdb52d04dc20036dbd8313ed055', 'upload/s2_1695827691.jpg', '0000-00-00 00:00:00'),
(7, '', 'ogooluwa//student/58041', 'olusoladsd22', 'philipdes22', 'oluwaferanmidsd22', 'female', 'jss3', '2023-10-04', 'Ekiti', 'Ekiti', 'eporod', 'olusolaphilipdd066@gmail.com', '08105219630444', 'location', '81dc9bdb52d04dc20036dbd8313ed055', 'upload/prop_1696206702.jpg', '2023-10-02 02:31:42');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinytext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0:active, 1:inactive\r\n',
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `status`, `created_at`) VALUES
(6, 'Maths', '0', '2023-09-28 20:04:58'),
(7, 'English', '0', '2023-09-28 20:25:32'),
(8, 'Biology', '0', '2023-09-28 20:33:07'),
(9, 'computer', '0', '2023-09-29 12:14:20'),
(10, 'Agric ', '0', '2023-09-29 12:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `submit_assign`
--

CREATE TABLE `submit_assign` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(22) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submitted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submit_assign`
--

INSERT INTO `submit_assign` (`id`, `student_name`, `staff_name`, `class`, `subject`, `document`, `submitted_at`) VALUES
(1, 'student alade', 'ALADE22 ODUNAYO22', 'jss2', 'English', 'upload/service1 (1)_1696272958_1696519169.jpg', '2023-10-05 17:19:29'),
(2, 'student alade', 'ALADE22 ODUNAYO22', 'jss2', 'English', 'upload/imagename_1696253109_1696519367.png', '2023-10-05 17:22:47'),
(3, 'olusoladsd oluwaferanmidsd', 'samuel john', 'jss3', 'Maths', 'upload/IMG-20221223-WA0013_1696519534.jpg', '2023-10-05 17:25:34'),
(4, 'student alade', 'ALADE22 ODUNAYO22', 'jss2', 'English', 'upload/class_1696253833_1696522125.sql', '2023-10-05 18:08:45'),
(5, 'student alade', 'ALADE22 ODUNAYO22', 'jss2', 'English', 'upload/staff_1696254307_1696522208.sql', '2023-10-05 18:10:08'),
(7, 'student alade', 'ALADE22 ODUNAYO22', 'jss2', 'English', 'upload/imagename_1696253109_1696254015_1696522461.png', '2023-10-05 18:14:21'),
(8, 'olusoladsd oluwaferanmidsd', 'samuel john', 'jss3', 'Biology', 'upload/IMG-20221223-WA0017_1696524744.jpg', '2023-10-05 18:52:24'),
(9, 'student alade', 'samuel john', 'jss2', 'Maths', 'upload/class_1696253833_1696524842.sql', '2023-10-05 18:54:02'),
(10, 'olusoladsd oluwaferanmidsd', 'ALADE22 ODUNAYO22', 'jss3', 'computer', 'upload/IMG-20221223-WA0018_1696525157.jpg', '2023-10-05 18:59:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_subject`
--
ALTER TABLE `assign_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pin_table`
--
ALTER TABLE `pin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit_assign`
--
ALTER TABLE `submit_assign`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `assign_subject`
--
ALTER TABLE `assign_subject`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pin_table`
--
ALTER TABLE `pin_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `submit_assign`
--
ALTER TABLE `submit_assign`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
