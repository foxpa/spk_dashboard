-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2024 at 02:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE `admin_reg` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin1@gmail.com', '123'),
(2, 'il', 'il@gmail.com', '$2y$10$ROO65mIEknErvE8eWBGxHef5Q65fmGNd5jicIVBlyrU8tTaDhsV4W'),
(3, 'afifah', 'afifahalia62@gmail.com', '$2y$10$Fmb5BgE8GsUqNyBAIjluMuU8DmI93Y.vo2fh22H7mSqfs7C/n1ky2');

-- --------------------------------------------------------

--
-- Table structure for table `cat_spec`
--

CREATE TABLE `cat_spec` (
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL,
  `schools` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cat_spec`
--

INSERT INTO `cat_spec` (`id`, `category`, `schools`) VALUES
(1, 'Kelas Pendidikan Khas Penglihatan', 'Sekolah Kebangsaan Kampung Sireh, Kota Bharu'),
(2, 'Kelas Pendidikan Khas Penglihatan', 'Sekolah Menengah Kebangsaan Mulong, Kota Bharu'),
(3, 'Kelas Pendidikan Khas Pendengaran', 'Sekolah Kebangsaan Tengku Indera Petra, Kota Bharu'),
(4, 'Kelas Pendidikan Khas Pendengaran', 'Sekolah Kebangsaan Pauh Sembilan, Bachok'),
(5, 'Kelas Pendidikan Khas Pendengaran', 'Sekolah Menengah Kebangsaan Ismail Petra , Kota Bharu'),
(6, 'Kelas Pendidikan Khas Pendengaran', 'Sekolah Menengah Kebangsaan Long Yunus , Bachok'),
(7, 'Kelas Pendidikan Khas Disleksia', 'Sekolah Kebangsaan Kubang Kerian 3, Kota Bharu'),
(8, 'Kelas Pendidikan Khas Disleksia', 'Sekolah Kebangsaan Sultan Ibrahim (1), Pasir Mas'),
(9, 'Kelas Pendidikan Khas Disleksia', 'Sekolah Kebangsaan Kubang Kerian 3, Kota Bharu'),
(10, 'Kelas Pendidikan Khas Disleksia', 'Sekolah Kebangsaan Sultan Ibrahim (1), Pasir Mas'),
(11, 'Kelas Pendidikan Khas Disleksia', 'Sekolah Kebangsaan Kamil (1), Pasir Puteh'),
(12, 'Kelas Pendidikan Khas Disleksia', 'Sekolah Kebangsaan Kuala Krai, Kuala Krai'),
(13, 'Kelas Pendidikan Khas Disleksia', 'Sekolah Kebangsaan Gua Musang, Gua Musang'),
(14, 'Kelas Pendidikan Khas Pendengaran/Pembelajaran/penglihatan', 'Sekolah Kebangsaan Pendidikan Khas Kelantan, Pasir Mas');

-- --------------------------------------------------------

--
-- Table structure for table `org_chart`
--

CREATE TABLE `org_chart` (
  `id` int(11) NOT NULL,
  `img_path` varchar(200) NOT NULL,
  `img_title` varchar(100) NOT NULL,
  `is_active` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `org_chart`
--

INSERT INTO `org_chart` (`id`, `img_path`, `img_title`, `is_active`) VALUES
(1, 'imgOrganization chart.png', 'org', '1');

-- --------------------------------------------------------

--
-- Table structure for table `slists`
--

CREATE TABLE `slists` (
  `id` int(11) NOT NULL,
  `school_code` varchar(100) NOT NULL,
  `s_name` varchar(200) NOT NULL,
  `pk_name` varchar(200) NOT NULL,
  `phone_num` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `district` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slists`
--

INSERT INTO `slists` (`id`, `school_code`, `s_name`, `pk_name`, `phone_num`, `address`, `district`) VALUES
(1, 'DBA4182', 'Sekolah Kebangsaan Tok Bali', 'Mohd. Kamil bin Husain', '01117838368', 'Sekolah Kebangsaan Tok Bali,Pejabat Pos Cherang Ruku Pasir Puteh', 'pp'),
(2, 'DBA4254', 'Sekolah Kebangsaan Bukit Jawa', 'Siti Noorzaihasra binti Muhamad', '0169594886', 'SK bukit jawa,16810 Selising, Kelantan', 'pp'),
(3, 'DBA4255', 'Sekolah Kebangsaan Bukit Merbau', 'Azma binti Mustapha', '0199955755', 'SK Bukit Merbau Jalan Selising - Kok Lanas, 16810 Selising, Kelantan', 'pp'),
(4, 'DBA4258', 'Sekolah Kebangsaan Cherang Ruku', 'Norkarimah binti Mohamad', '01155006054', 'SK Cherang Ruku Pekan Cherang Ruku, 16700 Cherang Ruku, Kelantan', 'pp'),
(5, 'DBA4260', 'Sekolah Kebangsaan Dalam Ru', 'Tuan Asaari bin Tuan Daud', '0104476780', 'SK Dalam Ru KG Dalam Rhu Pasir Puteh', 'pp'),
(6, 'DBA4261', 'Sekolah Kebangsaan Gaal', 'Azman bin Yasin', '0129521484', 'SK Gaal Jalan Jerteh, 16800 Pasir Puteh, Kelantan', 'pp'),
(7, 'DBA4265', 'Sekolah Kebangsaan Jeram', 'Mazarulliati binti Mat Lazin', '0199958963', 'SK Jeram 16800 Pasir Puteh, Kelantan', 'pp'),
(8, 'DBA4272', 'Sekolah Kebangsaan Padang Pak Amat', 'Rosmini binti Daud', '01110609466', 'SK Padang Pak Amat Sekolah Kebangsaan, Kampung Jereneh, 16800 Pasir Puteh, Kelantan', 'pp'),
(9, 'DBA4273', 'Sekolah Kebangsaan Panggong', 'Wan Muhammad Shahir bin Wan Abdullah', '0169619309', 'SK Panggong Kampong Panggong Pasir Puteh', 'pp'),
(10, 'DBA4278', 'Sekolah Kebangsaan Sungai Petai', 'Mohd Rohaizad bin Ab Rahman', '01110634995', 'SK Sungai Petai,Kampung Sungai Petai 16800, Pasir Puteh,Kelantan', 'pp'),
(11, 'DBA4282', 'Sekolah Kebangsaan Tualang Tinggi', 'Khairul Anuar bin Bharudin', '0183795949', 'SK Tualang Tinggi,16810 Selising, Kelantan', 'pp'),
(1, 'DBA8002', 'Sekolah Kebangsaan Gua Musang', 'Nurul Huda binti Abd Rahim', '0132230654', 'SK Gua Musang Pekan Gua Musang, 18300 Gua Musang, Kelantan', 'gm'),
(2, 'DBA8004', 'Sekolah Kebangsaan Limau Kasturi', 'Mohd Khairuddin bin Othman', '0193880367', 'Sekolah Kebangsaan Limau Kasturi ,18300 Gua Musang, Kelantan', 'gm'),
(3, 'DBA8005', 'Sekolah Kebangsaan Paloh 1&2', 'Mohammad Saiful Azwa bin Jusuh', '0139799800', 'SK Paloh,Rkt. Paloh 1, Kelantan, 18300 Gua Musang', 'gm'),
(4, 'DBA8010', 'Sekolah Kebangsaan Jerek', 'Norhayati binti Awang', '0199703241', 'SK Jerek 234, 18300, Kelantan', 'gm'),
(5, 'DBA8017', 'Sekolah Kebangsaan Ciku Tiga', 'Rusnina binti Makhtar', '0148351550', 'SK Ciku Tiga Felda Chiku 3 Gua Musang', 'gm'),
(6, 'DBA8022', 'Sekolah Kebangsaan Sri Wangi', 'Norazami binti Ibrahim', '01125672445', 'sekolah kebangsaan sri wangi,18300 Gua Musang, Kelantan ', 'gm'),
(7, 'DBAA001', 'Sekolah Kebangsaan Kuala Betis', 'Wan \'Abdu Hayyi bin Wan Mansor ', '0129151869', 'SK Kuala Betis (Skubest) 484, 18300 Gua Musang, Kelantan', 'gm'),
(8, 'DBAA004', 'Sekolah Kebangsaan Pos Brooke', 'Ahmad Syahir bin Che Azmi', '0179879880', 'SK Pos Brooke Kampung Pos Brooke, Gua Musang, Kelantan', 'gm'),
(12, 'DBB4284', 'Sekolah Kebangsaan Kamil 1', 'Nik Nor Haryani binti Nik Ab Rahman', '0199333488', 'SK Kamil 1 Pasir Puteh,Kelantan', 'pp'),
(13, 'DBB4413', 'Sekolah Kebangsaan Kamil 2', 'Mona Losani binti A Rasid', '0129551497', 'SK Kamil 2 Pasir Puteh,Kelantan', 'pp'),
(14, 'DEA4286', 'Sekolah Menengah Kebangsaan Bukit Jawa', 'Afezah binti Zakaria', '0139815892', 'SMK Bukit Jawa,16810 Selising, Kelantan', 'pp'),
(15, 'DEA4291', 'Sekolah Menengah Kebangsaan Gaal', 'Siti Raznee binti Mansor', '0129901710', 'SMK Gaal,16800 Pasir Puteh, Kelantan', 'pp'),
(16, 'DEA4292', 'Sekolah Menengah Kebangsaan Jeram', 'Rosliza binti Razali', '01110863977', 'SMK Jeram,16800 Pasir Puteh, Kelantan', 'pp'),
(17, 'DEA4294', 'Sekolah Menengah Kebangsaan Cherang Ruku', 'Nik Mud bin Nik Him', '0123149421', 'SMK Cherang Ruku Pekan Cherang Ruku, 16700 Cherang Ruku, Kelantan', 'pp'),
(18, 'DEA4295', 'Sekolah Menengah Kebangsaan Padang Pak Amat', 'Zainudin bin Mohamad', '0199315873', 'Sekolah Menengah Kebangsaan Padang Pak Amat, 16800 Pasir Puteh, Kelantan', 'pp'),
(19, 'DEA4297', 'Sekolah Menengah Kebangsaan Seri Aman', 'Zaini binti Halias', '0199805644', 'SMK Seri Aman,Jalan Taman Kobena Pasir Puteh', 'pp'),
(20, 'DEA4298', 'Sekolah Menengah Kebangsaan Selising', 'Zahariman bin Md Nor', '0179862031', 'SMK Selising,16810 Selising, Kelantan', 'pp'),
(9, 'DEA8001', 'Sekolah Menengah Kebangsaan Tengku Indra Petra', 'Haji Nilman bin Haji Othman@Seman', '01116805555', 'Smk Tengku Indera Petra, Jln Persiaran Raya, 18300 Gua Musang', 'gm'),
(10, 'DEA8002', 'Sekolah Menengah Kebangsaan Bandar Chiku', 'Raja Zamilah binti Raja Yaacob', '0163302493', 'SMK Bandar Chiku, 18300 Gua Musang, Kelantan', 'gm'),
(11, 'DEA8005', 'Sekolah Menengah Kebangsaan Tengku Bendahara', 'Rosmainy binti Rahim', '0111325134', 'SMK Tengku Bendehara,Kg Jerek Jereks, Jerek, 18300 Gua Musang, Kelantan', 'gm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `cat_spec`
--
ALTER TABLE `cat_spec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `org_chart`
--
ALTER TABLE `org_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slists`
--
ALTER TABLE `slists`
  ADD PRIMARY KEY (`school_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_reg`
--
ALTER TABLE `admin_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cat_spec`
--
ALTER TABLE `cat_spec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `org_chart`
--
ALTER TABLE `org_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
