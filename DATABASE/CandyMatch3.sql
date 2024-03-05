-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 24, 2022 at 10:30 PM
-- Server version: 10.3.35-MariaDB-log-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CandyMatch3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `app_url` varchar(200) DEFAULT NULL,
  `purchaseCode` varchar(200) DEFAULT NULL,
  `api_key` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `app_url`, `api_key`, `purchaseCode`) VALUES
(1, 'admin', 'youremail@example.com', 'e10adc3949ba59abbe56e057f20f883e', 'https://play.google.com/store/apps/details?id=', '123456789', '');

-- --------------------------------------------------------

--
-- Table structure for table `deleteduser`
--

CREATE TABLE `deleteduser` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `deltime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deleteduser`
--

INSERT INTO `deleteduser` (`id`, `email`, `deltime`) VALUES
(1, 'test@gmail.com', '2021-12-11 21:42:05'),
(2, 'test@gmail.com', '2021-12-11 21:42:09'),
(7, 'test@gmail.com', '2021-12-11 21:42:26');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `reciver` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `feedbackdata` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `sender`, `reciver`, `title`, `feedbackdata`) VALUES
(1, 'test@gmail.com', 'Admin', 'Test', 'Test'),
(2, 'test@gmail.com', 'Admin', 'Test Title', 'this is a test message for feedback'),
(5, 'test@gmail.com', 'Admin', 'hello', 'helllo'),
(6, 'test@gmail.com', 'Admin', 'ok', 'pl');

-- --------------------------------------------------------

--
-- Table structure for table `frontend`
--

CREATE TABLE `frontend` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `playStore` varchar(100) NOT NULL,
  `youtubeLink` varchar(100) NOT NULL,
  `about` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frontend`
--

INSERT INTO `frontend` (`id`, `name`, `email`, `playStore`, `youtubeLink`, `about`, `facebook`, `instagram`, `twitter`) VALUES
(1, 'Candy Match 3', 'example@domain.com', 'https://play.google.com/store/apps/details?id=', 'https://youtube.com', 'Candy Match 3 Game is for making you earn money from your mobile phone from Playing this Amazing Gam', 'https://facebook.com', 'https://instagram.com', 'https://twitter.com');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `notiuser` varchar(50) NOT NULL,
  `notireciver` varchar(50) NOT NULL,
  `notitype` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `notiuser`, `notireciver`, `notitype`, `time`) VALUES
(1, 'test@gmail.com', 'Admin', 'Create Account', '2021-08-21 05:10:06'),
(2, 'test@gmail.com', 'Admin', 'Send Feedback', '2021-08-21 05:10:18'),
(3, 'andary@gmail.com', 'Admin', 'Create Account', '2021-09-18 21:30:50'),
(4, 'andary@gmail.com', 'Admin', 'Payment Request', '2021-09-18 22:12:15'),
(5, 'andary@gmail.com', 'Admin', 'Payment Request', '2021-09-18 22:42:28'),
(14, 'ibra@gmail.com', 'Admin', 'Create Account', '2022-05-26 05:13:33'),
(15, 'ibra@gmail.com', 'Admin', 'Send Feedback', '2022-05-29 20:47:00'),
(16, 'test@gmail.com', 'Admin', 'Sent From Contact Form', '2022-06-01 23:39:58'),
(17, 'test@gmail.com', 'Admin', 'Sent Feedback', '2022-08-15 23:32:39');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `method` varchar(50) NOT NULL,
  `mocions` varchar(50) NOT NULL,
  `confirm` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `sender`, `method`, `mocions`, `confirm`) VALUES
(1, 'andary@gmail.com', 'andary@gmail.com', '100000', '1'),
(2, 'andary@gmail.com', 'test@gmail.com', '100000', '0');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `withName` varchar(150) NOT NULL,
  `withMethod` varchar(200) NOT NULL,
  `withNote` varchar(500) NOT NULL,
  `pointsConv` varchar(300) DEFAULT NULL,
  `withMin` varchar(100) DEFAULT NULL,
  `appVersion` varchar(50) DEFAULT NULL,
  `giftPoints` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `withName`, `withMethod`, `withNote`, `pointsConv`, `withMin`, `appVersion`, `giftPoints`) VALUES
(1, 'PayPal', 'PayPal', '* You need to have account in PayPal to use it.', '10000 points = $1.00', '10000', '1.0.0', '15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mocions` varchar(50) NOT NULL,
  `deviceinfo` varchar(120) NOT NULL,
  `status` int(10) NOT NULL,
  `level` varchar(100) DEFAULT NULL,
  `achiev_1` varchar(1) DEFAULT NULL,
  `achiev_2` varchar(1) DEFAULT NULL,
  `achiev_3` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mocions`, `deviceinfo`, `status`, `level`) VALUES
(1, 'test', 'test@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '150', 'Model: SM-N960F', 1, '1'),
(2, 'andary', 'andary@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1030', 'Model: SM-N960F', 1, '1'),
(3, 'tester', 'tester@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '111', 'Model: SM-N960F', 1, '3'),
(13, 'ibra', 'ibra@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '37', 'Model: sdk_gphone64_arm64 /Serial: unknown /Hardware: ranchu /Id: SE1A.220203.002.A1', 1, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deleteduser`
--
ALTER TABLE `deleteduser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontend`
--
ALTER TABLE `frontend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deleteduser`
--
ALTER TABLE `deleteduser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `frontend`
--
ALTER TABLE `frontend`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
