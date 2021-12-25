-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2021 at 10:34 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loanmangementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_assets`
--

CREATE TABLE `login_assets` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_assets`
--

INSERT INTO `login_assets` (`id`, `username`, `password`) VALUES
(1, '97d9de758e20f8e5a74c21ba389fb562', '97d9de758e20f8e5a74c21ba389fb562');

-- --------------------------------------------------------

--
-- Table structure for table `retailer_list`
--

CREATE TABLE `retailer_list` (
  `id` int(11) NOT NULL,
  `userId` varchar(100) NOT NULL,
  `retailerId` varchar(100) NOT NULL,
  `retailer_name` varchar(100) NOT NULL,
  `retailer_image` varchar(200) NOT NULL,
  `retailer_about` varchar(500) NOT NULL,
  `date_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `retailer_list`
--

INSERT INTO `retailer_list` (`id`, `userId`, `retailerId`, `retailer_name`, `retailer_image`, `retailer_about`, `date_time`) VALUES
(1, '97d9de758e20f8e5a74c21ba389fb562', 'anktjs', 'Ankit Jaiswal', 'ankit_yadav.jpg', 'Provisional store', ''),
(2, '97d9de758e20f8e5a74c21ba389fb562', 'prvnjs', 'Pravin Jaiswal', 'praveen_jaiswal.jpg', 'Genral store', ''),
(3, '97d9de758e20f8e5a74c21ba389fb562', 'vbtst', 'Vegetable store', 'vegetable_store.jpg', 'Vegetable store', ''),
(4, '97d9de758e20f8e5a74c21ba389fb562', 'dlyd', 'Ram Dularey Yadav', 'person.png', 'Provisional store', ''),
(5, '97d9de758e20f8e5a74c21ba389fb562', 'antgpt', 'Anita Gupta', 'person.png', 'Medical Cum Genral Store', ''),
(6, '97d9de758e20f8e5a74c21ba389fb562', 'kslst', 'Khushahal Seth', 'khushahal_seth.jpg', 'Jwellery Store', ''),
(7, '97d9de758e20f8e5a74c21ba389fb562', 'shbyd', 'Sahab Yadav', 'person.png', 'Vegetable Store', '');

-- --------------------------------------------------------

--
-- Table structure for table `retailer_messages`
--

CREATE TABLE `retailer_messages` (
  `id` int(11) NOT NULL,
  `userId` varchar(100) NOT NULL,
  `retailerId` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `date_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `retailer_messages`
--

INSERT INTO `retailer_messages` (`id`, `userId`, `retailerId`, `status`, `amount`, `message`, `date_time`) VALUES
(2, '97d9de758e20f8e5a74c21ba389fb562', 'prvnjs', 'loan', '220', 'loan', '14/12/2021'),
(3, '97d9de758e20f8e5a74c21ba389fb562', 'anktjs', 'loan', '484', 'LOAN', '08/12/2021'),
(4, '97d9de758e20f8e5a74c21ba389fb562', 'anktjs', 'loan', '60', 'Loan', '18/12/2021'),
(5, '97d9de758e20f8e5a74c21ba389fb562', 'prvnjs', 'loan', '200', 'Cash Loan', '16/12/2021'),
(6, '97d9de758e20f8e5a74c21ba389fb562', 'dlyd', 'loan', '4558', 'Purchase Loan', '16/08/2020'),
(7, '97d9de758e20f8e5a74c21ba389fb562', 'dlyd', 'paid', '-2000', 'Paid', '02/10/2021'),
(8, '97d9de758e20f8e5a74c21ba389fb562', 'antgpt', 'loan', '200', 'loan', '12/11/2021'),
(9, '97d9de758e20f8e5a74c21ba389fb562', 'antgpt', 'loan', '130', 'loan', '20/12/2021'),
(10, '97d9de758e20f8e5a74c21ba389fb562', 'kslst', 'loan', '6000', 'loan', '16/06/2019'),
(20, '97d9de758e20f8e5a74c21ba389fb562', 'vbtst', 'loan', '551', 'Purchase', '28-Aug-2021 01:27:06 AM'),
(22, '97d9de758e20f8e5a74c21ba389fb562', 'shbyd', 'loan', '65', 'Purchase Vegetable', '23-Dec-2021 08:50:05 PM');

-- --------------------------------------------------------

--
-- Table structure for table `user_assets`
--

CREATE TABLE `user_assets` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `mob_no` varchar(15) NOT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_assets`
--

INSERT INTO `user_assets` (`id`, `username`, `name`, `image`, `mob_no`, `address`) VALUES
(1, '97d9de758e20f8e5a74c21ba389fb562', 'Adarsh Pandey', 'adarsh.jpg', '+91 9118723203', 'Narpatpur Narayanpur Chaubeypur varanasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_assets`
--
ALTER TABLE `login_assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retailer_list`
--
ALTER TABLE `retailer_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `retailer_messages`
--
ALTER TABLE `retailer_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_assets`
--
ALTER TABLE `user_assets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_assets`
--
ALTER TABLE `login_assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `retailer_list`
--
ALTER TABLE `retailer_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `retailer_messages`
--
ALTER TABLE `retailer_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user_assets`
--
ALTER TABLE `user_assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
