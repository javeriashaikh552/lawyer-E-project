-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2023 at 10:31 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `law`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(30) NOT NULL,
  `name` varchar(99) NOT NULL,
  `email` varchar(88) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL,
  `lawyer` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `email`, `Date`, `Time`, `lawyer`) VALUES
(3, 'karan khan', 'shafai@gmail.com', '2023-01-28', '06:38:00.000000', '71'),
(5, 'safak shaikh', 'shafai@gmail.com', '2023-01-17', '07:13:00.000000', '97'),
(6, 'karan khan', 'kk4455@gmail.com', '2023-01-04', '07:13:00.000000', '98'),
(7, 'shafak shaikh', 'shafai@gmail.com', '2023-01-11', '06:38:00.000000', '97'),
(8, 'shafak shaikh', 'shafai@gmail.com', '2023-01-11', '06:38:00.000000', '97'),
(10, 'ggfuyuyyu', 'bakshak@gmail.com', '2023-01-18', '10:58:00.000000', '98'),
(11, 'karan khan', 'kk4455@gmail.com', '2023-01-25', '07:13:00.000000', '96');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(30) NOT NULL,
  `client` varchar(66) NOT NULL,
  `city` varchar(66) NOT NULL,
  `address` varchar(66) NOT NULL,
  `email` varchar(66) NOT NULL,
  `phone` int(55) NOT NULL,
  `fax` varchar(66) NOT NULL,
  `password` varchar(77) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `client`, `city`, `address`, `email`, `phone`, `fax`, `password`) VALUES
(44, 'areeqa', 'karachi', 'dha 2', 'majeedgul014@gmail.com', 2147483647, '54667(555)33333', 'asddddd'),
(45, 'areeqa', 'lahore', 'dha 8', 'karankhan@gmail.com', 900657884, 'mkj', 'ssadee'),
(52, 'Areeqa', 'karachi', 'dha 2', 'syedaareeqa@gmail.com', 2147483647, '7777777', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(2, 'rayan ahmad', 'karankhan@gmail.com', 'physics', 'this is the correct place in the world'),
(27, 'shahid verma', 'vermagulshaikh@gmail.com', 'physics', 'ds');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `id` int(30) NOT NULL,
  `lawyer` varchar(66) NOT NULL,
  `city` varchar(66) NOT NULL,
  `address` varchar(66) NOT NULL,
  `email` varchar(66) NOT NULL,
  `mobile` int(22) NOT NULL,
  `fax` varchar(33) NOT NULL,
  `practice` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`id`, `lawyer`, `city`, `address`, `email`, `mobile`, `fax`, `practice`, `password`, `image`) VALUES
(96, 'Khalida Naseem', 'karachi', 'DHA', 'khalida@gmail.com', 2147483647, '', 'Divorce Law', '0090889', 'team-3.jpg'),
(97, 'zain Iqbal', 'lahore', 'Defence phase 5', 'zain@gmail.com', 2147483647, '54667(555)33333', 'Affidavit law', '455445', 'team-5.jpg'),
(98, 'Adam ', 'islamabad', 'bahria town', 'adama999@gmail.com', 2147483647, '54667(555)33333', 'Criminal law', '1234567', 'team-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(30) NOT NULL,
  `lawyer` varchar(66) NOT NULL,
  `city` varchar(44) NOT NULL,
  `service` varchar(66) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `lawyer`, `city`, `service`, `experience`, `image`) VALUES
(4, 'Khalida Naseem', 'lahore', 'dha', '2 year', 'contact.png');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `profession`, `description`) VALUES
(1, 'javeria', 'student', 'The staff and customer service are excellent and all the attorneys are top-notch. They truly care about getting the best results for their clients.\"'),
(2, 'Abbas Khan', 'Teacher', 'Higher Level Legal Law Firm. They helped me handle my case and get the refiling resolved efficiently.'),
(3, 'zara weheed', 'ACCA', 'As a lawyer, you need to be an expert in your field in order to successfully navigate the complicated waters of the legal ocean. If you’re an aspiring lawyer just starting on your journey, there are a lot of options.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(30) NOT NULL,
  `email` varchar(44) NOT NULL,
  `password` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(3, 'admin1@gmail.com', '12345'),
(4, 'admin2@gmail.com', '67890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
