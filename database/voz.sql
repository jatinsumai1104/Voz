-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 08:56 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voz`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `block_no` varchar(30) NOT NULL,
  `street` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `pincode` int(6) NOT NULL,
  `state` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `town` varchar(25) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` int(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `block_no`, `street`, `city`, `pincode`, `state`, `country`, `town`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 'A-303, Atharva Aptmt', 'Ganeshnagar', 'Thane', 421503, 'Maharashtra', 'India', 'Badlapur', '2019-12-31 14:14:47', '2019-12-31 14:14:47', 0),
(2, 'Room 3, R.S. Jadhav Chawl', 'Ganeshnagar', 'Mumbai', 400085, 'Maharashtra', 'India', 'Bhandup', '2019-12-31 14:14:47', '2019-12-31 14:14:47', 0),
(3, 'B-39/1', 'Deonar Colony', 'Mumbai', 400043, 'Maharashtra', 'India', 'Govandi', '2019-12-31 14:14:47', '2019-12-31 14:14:47', 0),
(4, 'B-202 Om Adardh C.H.S', 'Deonar Colony', 'Mumbai', 400043, 'Maharashtra', 'India', 'Govandi', '2019-12-31 14:14:47', '2019-12-31 14:14:47', 0),
(5, '115/3960, Geet Govind CHS', 'Tilak Nagar', 'Mumbai', 400089, 'Maharashtra', 'India', 'Chembur', '2019-12-31 14:14:47', '2019-12-31 14:14:47', 0),
(6, '7/1002, Ozone Valley', 'Parshik Nagar', 'Thane', 400605, 'Maharashtra', 'India', 'Kalwa', '2019-12-31 14:14:47', '2019-12-31 14:14:47', 0),
(7, 'B-12, Pramod Swapna', 'Gokhale Road', 'Mumbai', 400081, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:47', '2019-12-31 14:14:47', 0),
(8, '4, William Mansion', 'Majiwada', 'Thane', 400601, 'Maharashtra', 'India', 'Thane', '2019-12-31 14:14:47', '2019-12-31 14:14:47', 0),
(9, '578, Anand Nagar', 'Kopri Bridge', 'Thane', 400603, 'Maharashtra', 'India', 'Thane', '2019-12-31 14:14:47', '2019-12-31 14:14:47', 0),
(10, 'B/502, Satguru Sharan', 'Chaphekar Bandhu Road', 'Mumbai', 400080, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:47', '2019-12-31 14:14:47', 0),
(11, 'B/301, Grace', 'Vasant Oscar', 'Mumbai', 400080, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:47', '2019-12-31 14:14:47', 0),
(12, '180/2787/8B', 'Tagore Nagar', 'Mumbai', 400083, 'Maharashtra', 'India', 'Vikroli', '2019-12-31 14:14:47', '2019-12-31 14:14:47', 0),
(13, 'C/5, Nemvihar CHS', 'Murar Road', 'Mumbai', 400080, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:47', '2019-12-31 14:14:47', 0),
(14, 'CTC/456, Sainath Wadi', 'Powai Chowk', 'Mumbai', 400082, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:47', '2019-12-31 14:14:47', 0),
(15, '1/13, Jain Society', 'Camalane', 'Mumbai', 400086, 'Maharashtra', 'India', 'Ghatkopar', '2019-12-31 14:14:47', '2019-12-31 14:14:47', 0),
(16, '602, 10A', 'Hariyali Village', 'Mumbai', 400042, 'Maharashtra', 'India', 'Kanjurmarg', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(17, '108/ Raj Sneha', 'SN Road', 'Mumbai', 400080, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(18, '6, Vanik Niwas', 'Gurukul lane', 'Mumbai', 400077, 'Maharashtra', 'India', 'Ghatkopar', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(19, '7, Vimal Villa', 'Dr Ambedkar Road', 'Mumbai', 400019, 'Maharashtra', 'India', 'Matunga', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(20, '89/2658, Police Lane', 'PL Road', 'Mumbai', 400080, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(21, '10, Ghanshyam Bhuvan', 'Devi Dayal Road', 'Mumbai', 400080, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(22, 'Plot No-1011', 'Gaurishankar Khimji Chawl', 'Mumbai', 400080, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(23, '502, Shanti Villa', 'Ganesh Gawde Road', 'Mumbai', 400080, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(24, '23, Hira Sadan', 'RRT Road', 'Mumbai', 400080, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(25, '69/C, Shree KL Niwas Gruh', 'Mazgoan Road', 'Mumbai', 400080, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(26, 'Ram ratan Compund', 'SL Road', 'Mumbai', 400080, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(27, '3/304, Shri Ram Nagar CHS', 'PK Road', 'Mumbai', 400080, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(28, '301, Rugved Bhavan', 'GVS Road No. 1', 'Mumbai', 400081, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(29, 'B/3, 20, Swaroop CHS', 'Mhada', 'Mumbai', 400081, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(30, '2, Amravan Society', 'Thakurwadi', 'Mumbai', 421202, 'Maharashtra', 'India', 'Dombivili', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(31, 'A-501, Priyanka CHS', 'Mhada', 'Mumbai', 400081, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(32, 'B-303, Shiv Shakti Apts', 'Dr. RP Road', 'Mumbai', 400080, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(33, '4, Sanjiv Sadan', 'BP Cross', 'Mumbai', 400080, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(34, 'A/3, Sujata Apt', 'Vidhalya Marg', 'Mumbai', 400081, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(35, 'A-1, Kavita Kiran CHS', 'Neelam Nagar', 'Mumbai', 400081, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(36, 'C-105, Jalaram Park', 'LBS Road', 'Mumbai', 400078, 'Maharashtra', 'India', 'Bhandup', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(37, 'C-5, Anubhav Society', 'Zaver Road', 'Mumbai', 400080, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(38, 'B/203, Raj Rajeshwari', 'PK Road', 'Mumbai', 400081, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(39, '10/11, Gajanan Niwas', 'SD Road', 'Mumbai', 400081, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(40, 'H/6, Gurupushyamrut Society', 'SD Road', 'Mumbai', 400081, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(41, '3/5, Beena Kumari', 'MP Road', 'Mumbai', 400081, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:48', '2019-12-31 14:14:48', 0),
(42, '1876/C41', 'Shiv Colony', 'Mumbai', 400708, 'Maharashtra', 'India', 'Airoli', '2019-12-31 14:14:49', '2019-12-31 14:14:49', 0),
(43, 'B/6, Neeldhara', '60 feet Road', 'Mumbai', 400077, 'Maharashtra', 'India', 'Ghatkopar', '2019-12-31 14:14:49', '2019-12-31 14:14:49', 0),
(44, 'A-904, Orbit Tower', 'Garodia Nagar', 'Mumbai', 400077, 'Maharashtra', 'India', 'Ghatkopar', '2019-12-31 14:14:49', '2019-12-31 14:14:49', 0),
(45, '503/204, Udhyan Darshan', 'RN Narkar Road', 'Mumbai', 400075, 'Maharashtra', 'India', 'Ghatkopar', '2019-12-31 14:14:49', '2019-12-31 14:14:49', 0),
(46, '209/5659 Anita Kutir', 'Odean Cinema', 'Mumbai', 400077, 'Maharashtra', 'India', 'Ghatkopar', '2019-12-31 14:14:49', '2019-12-31 14:14:49', 0),
(47, '505, Shobha Suman', 'MM Malviya Road', 'Mumbai', 400080, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:49', '2019-12-31 14:14:49', 0),
(48, 'B/4, Dattguru Society', 'JN Road', 'Mumbai', 400080, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:49', '2019-12-31 14:14:49', 0),
(49, 'A-4, Gala Nagar', 'JN Road', 'Mumbai', 400080, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:49', '2019-12-31 14:14:49', 0),
(50, 'Krushna Vijay Niwas', 'Shivaji Nagar', 'Thane', 400603, 'Maharashtra', 'India', 'Thane', '2019-12-31 14:14:49', '2019-12-31 14:14:49', 0),
(51, 'A/16, Chhatrapati Shivaji', 'Kopri Colony', 'Thane', 400603, 'Maharashtra', 'India', 'Thane', '2019-12-31 14:14:49', '2019-12-31 14:14:49', 0),
(52, '1,4, Jai Bhawani Marg', 'Mulund colony', 'Mumbai', 400082, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:49', '2019-12-31 14:14:49', 0),
(53, 'C/G Gokul Ashish', 'Dr RP Road', 'Mumbai', 400080, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:49', '2019-12-31 14:14:49', 0),
(54, 'A/7, Plot 14, Geetanjali', 'Mhada colony', 'Mumbai', 400081, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:49', '2019-12-31 14:14:49', 0),
(55, 'B/501, Vasant Vihar Apt', 'GP Road', 'Mumbai', 400080, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:49', '2019-12-31 14:14:49', 0),
(56, 'B-18, Om Adishakti', 'DP Road', 'Mumbai', 400081, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:49', '2019-12-31 14:14:49', 0),
(57, 'C/6, Om Adishakti', 'Vidhalaya Marg', 'Mumbai', 400081, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:49', '2019-12-31 14:14:49', 0),
(58, '1916, Powai Chowk', 'Mulund Colony', 'Mumbai', 400082, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:49', '2019-12-31 14:14:49', 0),
(59, '55, Vanaria', 'Nahur Road', 'Mumbai', 400080, 'Maharashtra', 'India', 'Mulund', '2019-12-31 14:14:49', '2019-12-31 14:14:49', 0),
(60, 'B/104, Sneh Bandhan', 'Mhada', 'Mumbai', 400081, 'Maharashtra', 'India', 'Mulund', '2019-12-31 15:13:35', '2019-12-31 15:13:35', 0),
(61, '104, Vaity Apt', 'Chafekar Bandhu Marg', 'Mumbai', 400081, 'Maharashtra', 'India', 'Mulund', '2019-12-31 15:13:35', '2019-12-31 15:13:35', 0),
(62, 'B/204, Navjeevan Society', 'Sector-19', 'Mumbai', 400708, 'Maharashtra', 'India', 'Airoli', '2019-12-31 15:13:35', '2019-12-31 15:13:35', 0),
(63, 'D/904, Sainath Tower', 'Neelam Nagar', 'Mumbai', 400081, 'Maharashtra', 'India', 'Mulund', '2019-12-31 15:13:35', '2019-12-31 15:13:35', 0),
(64, '303 B, Sainath Heights', 'Neelam Nagar', 'Mumbai', 400081, 'Maharashtra', 'India', 'Mulund', '2019-12-31 15:13:35', '2019-12-31 15:13:35', 0),
(65, '2, Sai Niwas Chawl', 'Gavdevi Road', 'Mumbai', 400078, 'Maharashtra', 'India', 'Bhandup', '2019-12-31 15:13:35', '2019-12-31 15:13:35', 0);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `appointment` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `contact_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_patient`
--

CREATE TABLE `doctor_patient` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(11) NOT NULL,
  `symptoms` longtext NOT NULL,
  `diagonsis` longtext NOT NULL,
  `prescription` longtext NOT NULL,
  `advice` longtext NOT NULL,
  `case_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address_id` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` datetime NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` blob NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_patient`
--
ALTER TABLE `doctor_patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor_patient`
--
ALTER TABLE `doctor_patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
