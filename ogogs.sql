-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 03:00 PM
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
-- Database: `ogooluwa_db`
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
(1, 'admin', '1234', 'upload/IMG-20230221-WA0021_1690411442.jpg');

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
(4, 'Computer', 'HDHFVISIN', 'olusolaphilip066@gmail.com', 'female', 'dddd', 'Ekiti', 'eporo', '2023-08-28', 'uso', 'primary', '08105219630', 'jss1', 'upload/postcard12_1690906846.png', 'parent', 'olusola philip oluwaferanmi', '08105219630', 'johnsonmarcus752@gmail.com', 'says', '01-08-23 06:20PM'),
(5, 'Computer', 'HDHFVISIN', 'olusolaphilip066@gmail.com', 'female', 'dddd', 'Ekiti', 'eporo', '2023-08-28', 'uso', 'primary', '08105219630', 'jss1', 'upload/postcard12_1690906905.png', 'parent', 'olusola philip oluwaferanmi', '08105219630', 'johnsonmarcus752@gmail.com', 'says', '01-08-23 06:21PM'),
(6, 'Computer', 'HDHFVISIN', 'olusolaphilip066@gmail.com', 'female', 'dddd', 'Ekiti', 'eporo', '2023-08-28', 'uso', 'primary', '08105219630', 'jss1', 'upload/postcard12_1690906914.png', 'parent', 'olusola philip oluwaferanmi', '08105219630', 'johnsonmarcus752@gmail.com', 'says', '01-08-23 06:21PM'),
(7, 'Computer', 'HDHFVISIN', 'olusolaphilipd06e16@gmail.com', 'male', 'dddd', 'Ekiti', 'eporo', '2023-08-28', 'emure', 'nursery', '08105219630', 'jss1', 'upload/images (3)_1690907427.jpeg', 'parent', 'olusola philip oluwaferanmi', '08105219630', 'johnsonmarcus752@gmail.com', 'says', '01-08-23 06:30PM');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `document` varchar(500) NOT NULL,
  `dateP` varchar(255) NOT NULL,
  `dateS` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `timeP` varchar(10) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `name`, `class`, `document`, `dateP`, `dateS`, `subject`, `timeP`, `status`) VALUES
(1, 'ALADE philip ODUNAYO', 'SS2', 'upload/CDCFIB Immigration Recruitment_1688105401.pdf', '', '2023-06-03', 'English', '16:49', 'published'),
(2, 'olusola philip oluwaferanmi', 'SS2', 'upload/1_1688105350.xlsx', '', '2023-06-23', 'Math', '00:19', 'published'),
(3, 'Odunayo11 Philip11 Alade11', 'SS1', 'upload/Recommendation Dele-Afolbi_1688105308.pdf', '', '2023-06-15', 'WEB DESIGN', '08:08', 'published'),
(4, 'samuel joshua alade111', 'SS3', 'upload/Recommendation Dele-Afolbi corrected_1688105214.docx', '', '2023-06-03', 'Math', '12:01', 'published'),
(5, 'samuel joshua jss1', 'JSS1', 'upload/ogo oluwa Admission Form_1688105199.pdf', '', '2023-06-03', 'Math', '12:01', 'published'),
(6, 'samuel joshua jss2', 'JSS2', 'upload/Recommendation Dele-Afolbi_1688105187.pdf', '', '2023-06-03', 'Math', '12:01', 'published');

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
(1, 'Oluyemi Samson O.', 'Admission process', 'Admission process', 'kijhghghf hfhgfhf hjffffffffffff  ffffjjjjjjjjj fj3jjjjjjjjjqwj287yheduidjnd     bjbjbbsduhbnjb', '2023-06-23'),
(2, 'muhamadu buhari', 'oluyemisamson101@gmail.com', 'Admission payment', 'mmmmmmmmmmmmmmmmmmmmmmmmmmmm  ,mmmmmmmmmmmmmmmmm knk mmmmmmmmmm', '2023-06-23'),
(3, 'muhamadu esther', 'esther101@gmail.com', 'School fees', 'jjjjjjjjjjjjjjjjjjjj ffffffffffffffffffffffffffffff kkkkkkkkkkkkkkkkkkk', '2023-06-23'),
(4, 'muhamadu osinbanjo', 'olaniyooooooo@gmail.com', 'School picturwe', 'dururfhjfhjndshhhhhhhhhhhhhhhhhhhhhhhh jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj         ', '2023-06-23'),
(5, '', '', '', '', '2023-06-23'),
(6, 'muhamadu osinbanjo', 'olaniyooooooo@gmail.com', 'School picturwe', 'dururfhjfhjndshhhhhhhhhhhhhhhhhhhhhhhh jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj         ', '2023-06-23'),
(7, 'muhamadu osinbanjo', 'olaniyooooooo@gmail.com', 'School picturwe', 'dururfhjfhjndshhhhhhhhhhhhhhhhhhhhhhhh jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj         ', '2023-06-23'),
(8, 'muhamadu osinbanjo', 'olaniyooooooo@gmail.com', 'School picturwe', 'dururfhjfhjndshhhhhhhhhhhhhhhhhhhhhhhh jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj         ', '2023-06-23'),
(9, 'yusuf nupe', 'oyusudf@gmail.com', 'School verify', 'nnnnnnnnnnnnnnnnnnnb nnnnnnnnnnnnnn', '2023-06-23'),
(10, 'ALADE philip ODUNAYO', 'Odunayoalade111@gmail.com', 'jdjjdjjdjd', 'h bdjbjsbdjbsjdb jsd', '2023-06-23'),
(11, '', '', '', '', '2030-06-23'),
(12, 'ddd', 'dd@g', 'dd', 'dd', '2030-06-23'),
(13, 'eee', 'Odunayoalade111@gmail.com', 'rrr', 'rrr', '2030-06-23'),
(18, 'ALADE philip ODUNAYO', 'Odunayoalade111@gmail.com', 'WEB DESIGN', 'Donec ultrices faucibus rutrum. Phasellus sodales vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci. Donec ultrices faucibus rutrum. Phasellus sodales vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci. Donec ultrices faucibus rutrum. Phasellus sodales vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci.\r\n\r\nPorttitor eu consequat risus. Mauris sed congue orci. Donec ultrices faucibus rutrum. Phasellus sodales vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci. Donec ultrices faucibus rutrum. Phasellus sodales vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci.\r\n\r\nSodales vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci. Donec ultrices faucibus rutrum. Phasellus sodales vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci.\r\n\r\n 3 attachments — Download all attachments | View all images', '2030-06-23');

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
(17, '11:30', 'upload/images (4)_1690908665.jpeg', 'welcomenn11', '<p>bshdcisidisd</p>', 'knsndkncksd', '', 'odunayo', '', '2023-06-21', 'published', '13:00'),
(20, '11:00', 'upload/IMG-20230219-WA0007_1690581008.jpg', 'Rufus Giwa Polytechnn b  ', '<p>ffffffffffffffff</p>', 'First molac, owo ondo state.', '', 'dfdfdfdfbbnnn', '', '2023-06-17', 'published', '08:52'),
(21, '23:22', 'upload/Picture1_1690980700.png', 'welcomenjj j knkniknkn', '<p>kjnoi lknkin</p>', 'siudcisic', '', 'odunayo1', '', '2023-06-01', 'published', '14:51');

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
(56, 'upload/IMG-20230221-WA0036_1690445621.jpg', 'laboratory'),
(58, 'upload/IMG-20230220-WA0015_1690394139.jpg', 'classroom'),
(59, 'upload/IMG-20230221-WA0101_1690226006.jpg', 'hostel'),
(60, 'upload/IMG-20230221-WA0031_1690445915.jpg', 'laboratory'),
(61, 'upload/IMG-20230221-WA0036_1690467486.jpg', 'library'),
(62, 'upload/IMG-20230221-WA0000_1690467081.jpg', 'classroom');

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
(14, 'AMISSIONeee', 'Easy online application11', 'Apply for admission from the comfort of your house11', 'upload/1690060555_IMG-20230219-WA0007.jpg', '<p>we are raedy for ya!11</p>', '2026-06-23', '13:56:00', 'admission,application', 'published'),
(16, ' Aut autem officia error, necessitatibus dolores quasi ratione laudantium fugiat optio suscipit.', 'Rufus Giwa Polytechnic ', 'Rufus Giwa Polytechnic Suspended Exam Due to Unpaid Lecturers Fee.', 'upload/1690909166_images (4).jpeg', '<p>jkjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj</p><p>jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj</p>', '2027-06-23', '06:00:00', '', 'published'),
(19, 'WHAT IS GOING ON HERE', 'cc', 'Rufus Giwa Polytechnic Suspended Exam Due to Unpaid Lecturers Fee.', 'upload/1690581076_IMG-20230219-WA0008.jpg', '<p>cccc</p>', '2023-05-31', '21:32:00', 'cccc', 'published'),
(20, 'Rufus Giwa Polytechnic Suspended Exam Due to Unpaid Lecturers Fee.Rufus Giwa Polytechnic Suspended Exam Due to Unpaid Lecturers Fee.Rufus Giwa Polytechnic Suspended Exam Due to Unpaid Lecturers Fee.Rufus Giwa Polytechnic Suspended Exam Due to Unpaid ', 'idi sdns indisnd i nsidnsid', 'd', 'upload/1690445495_IMG-20230221-WA0047.jpg', 'Rufus Giwa Polytechnic Suspended Exam Due to Unpaid Lecturers Fee.Rufus Giwa Polytechnic Suspended Exam Due to Unpaid Lecturers Fee.Rufus Giwa Polytechnic Suspended Exam Due to Unpaid Lecturers Fee.Rufus Giwa Polytechnic Suspended Exam Due to Unpaid Lecturers Fee.', '2023-06-02', '21:38:00', 'dd', 'published');

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
(12, '', 870529, '334133PI011', 'NULL', '01-08-2023'),
(13, '', 409792, '722722IZ012', 'NULL', '01-08-2023'),
(14, '', 45792, '229843PM013', 'NULL', '01-08-2023'),
(15, '', 526935, '374438PD014', 'NULL', '01-08-2023'),
(16, '', 568274, '384377UY015', 'NULL', '01-08-2023'),
(17, 'ogooluwa/2023/NTS/8096DW', 949083, '383839RL016', 'USED', '01-08-2023'),
(19, '', 727895, '912437AM018', 'NULL', '01-08-2023');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(100) NOT NULL,
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

INSERT INTO `staff` (`id`, `serial`, `username`, `firstname`, `middlename`, `lastname`, `gender`, `dob`, `state`, `lg`, `town`, `email`, `phone`, `location`, `category`, `year_employed`, `password`, `img`, `datep`) VALUES
(14, '383839RL016', 'ogooluwa/2023/NTS/7076GR', 'samuel', 'joshua', 'alade', 'male', '2023-08-09', 'Ekiti', 'Ekiti', 'eporo', 'johnsonmarcus752@gmail.comdd', '08105219630vv', 'says', 'NTS', 5, '81dc9bdb52d04dc20036dbd8313ed055', 'upload/download (1)_1690907850.png', '01-08-2023');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pin_table`
--
ALTER TABLE `pin_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
