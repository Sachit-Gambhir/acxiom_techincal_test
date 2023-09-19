-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Sep 19, 2023 at 08:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `a_ip` varchar(255) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_user` varchar(255) NOT NULL,
  `a_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `a_ip`, `a_name`, `a_user`, `a_pass`) VALUES
(1, '127.0.0.1', 'Admin 1', 'admin', 'admin'),
(2, '127.0.0.1', 'Amarjeet', 'amar', '12345'),
(3, '127.0.0.1', 'Raman', 'rama', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_ip` varchar(255) NOT NULL,
  `u_name` text NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_pass` varchar(100) NOT NULL,
  `u_address` varchar(2000) NOT NULL,
  `u_contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_ip`, `u_name`, `u_email`, `u_pass`, `u_address`, `u_contact`) VALUES
(1, '127.0.0.1', 'Zoho CorporationsPvt. Ltd.', 'zoho@corp.com', 'zoho54', '456 Milenium Tower, Noida, New Delhi', '7458991235'),
(2, '127.0.0.1', 'Logers and Sons', 'logers@corp.com', 'logers', '23 3rd Floor Saket,New Delhi', '9987456123');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `v_id` int(11) NOT NULL,
  `v_ip` varchar(255) NOT NULL,
  `v_name` text NOT NULL,
  `v_user` varchar(100) NOT NULL,
  `v_pass` varchar(100) NOT NULL,
  `v_catg` text NOT NULL,
  `v_address` varchar(2000) NOT NULL,
  `v_contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`v_id`, `v_ip`, `v_name`, `v_user`, `v_pass`, `v_catg`, `v_address`, `v_contact`) VALUES
(1, '127.0.0.1', 'Sharma Baloons and Bros', 'sharmaji_', 'sharma', 'Decoration', 'T234/44 Depty Ganj, New Delhi', '8547963214'),
(2, '127.0.0.1', 'Rahgu Florist', 'rahgu_flower', 'raghu123', 'Florist', '92 Kailash Enclave, Harsh Vihar, New Delhi', '7845269301'),
(3, '127.0.0.1', 'Verma Lights', 'verma_light', 'verma123', 'Lighting', '32 Chawri Bazar, New Delhi', '8874596213'),
(4, '127.0.0.1', 'Om Ji Caterers', 'omji_12', 'omji123', 'Catering', '77 Tilak Nagar, New Delhi', '8745569123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
