-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2023 at 12:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Castle`
--

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `order_id` int(11) NOT NULL,
  `feel` text NOT NULL,
  `size` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `filepath` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `address` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `user_Id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `dob` date NOT NULL,
  `email` text NOT NULL,
  `phone_num` text NOT NULL,
  `gender` text NOT NULL,
  `usertype` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`user_Id`, `firstname`, `lastname`, `dob`, `email`, `phone_num`, `gender`, `usertype`, `password`) VALUES
(1, 'Safa', 'Ahmed', '2023-10-03', 'safa.ahmed@gmail.com', '01811857743', 'Female', 'vendor', 'c2def8f053556fcb3ae3ea9716731d0a'),
(2, 'Israt', 'Jahan', '2023-10-11', 'israt.jahan@gmail.com', '01899992223', 'Female', 'customer', 'c2def8f053556fcb3ae3ea9716731d0a'),
(3, 'Mohammed', 'Sidique', '2023-10-20', 'mohammed.sidique@gmail.com', '01894446223', 'Other', 'admin', 'c2def8f053556fcb3ae3ea9716731d0a'),
(4, 'Ali', 'Bulbul', '2023-10-18', 'ali.bulbul@gmail.com', '018940002235', 'Male', 'vendor', 'c2def8f053556fcb3ae3ea9716731d0a'),
(6, 'Sarfaraz', 'Islam', '2023-10-25', 'sarfaraz@gmail.com', '01811857743', 'Male', 'customer', 'c2def8f053556fcb3ae3ea9716731d0a'),
(7, 'Muhtasim', 'An-Nafi', '1998-03-10', 'muhtasim.nafi@gmail.com', '01811857743', 'Male', 'customer', 'c2def8f053556fcb3ae3ea9716731d0a');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_requests`
--

CREATE TABLE `vendor_requests` (
  `Company_Name` varchar(255) DEFAULT NULL,
  `Item_Sold` varchar(255) DEFAULT NULL,
  `Item_Type` varchar(255) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_requests`
--

INSERT INTO `vendor_requests` (`Company_Name`, `Item_Sold`, `Item_Type`, `Quantity`, `Price`, `Status`) VALUES
('abcompany', 'Paper', 'A4', 1000, 5000, 'Approved'),
('Christina\'s Cardboards', 'BackCover', 'A2', 60000, 8000, 'Approved'),
('Gaylico commercial Inks', 'Ink', 'Black', 60000, 8000, 'Pending'),
('abcompany', 'Ink', 'Black', 500, 5000, 'Approved'),
('PagesIntel', 'Ink', 'Pages', 3, 5000, 'Pending'),
('PagesIntel', 'Ink', 'Pages', 3, 5000, 'Pending'),
('Tanzim inc', 'Paper', 'A3', 1000, 5000, 'Pending'),
('Safa Limited', 'Paper', 'A5', 200, 10000, 'Pending'),
('abcompany', 'BackCover', 'Hard', 100, 20000, 'Pending'),
('abcompany', 'Paper', 'A7', 5, 5000, 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`user_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `User` (`User_Id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
