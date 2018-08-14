-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 08, 2018 at 02:50 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sendy`
--

-- --------------------------------------------------------

--
-- Table structure for table `platforms`
--

--
-- Dumping data for table `platforms`
--

INSERT INTO `platforms` (`id`, `title`, `description`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Gitlab ', 'Gitlab for code collaboration, documentation and issue tracking\r\n', 'https://about.gitlab.com/', '2018-07-31 14:30:42', '2018-07-31 14:30:42'),
(2, 'Blossom ', 'Blossom for project management\r\n', 'https://www.blossom.co/', '2018-07-31 14:31:44', '2018-07-31 14:31:44'),
(3, 'Google Drive ', 'Google Drive for document sharing', 'https://drive.google.com/drive/u/0/my-drive', '2018-07-31 14:32:40', '2018-07-31 14:32:40'),
(4, 'Status Cake ', 'Status Cake for app monitoring', 'https://app.statuscake.com/Login/?redirect=/&nosession=true', '2018-07-31 14:34:28', '2018-07-31 14:34:28'),
(5, 'Happy apps \r\n', 'Happy apps for app monitoring\r\n', 'https://www.happyapps.io/', '2018-07-31 14:34:28', '2018-07-31 14:34:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `platforms`
--
ALTER TABLE `platforms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `platforms`
--
ALTER TABLE `platforms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
