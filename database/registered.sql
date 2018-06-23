-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2016 at 09:07 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE IF NOT EXISTS `registered` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `wildlife` text NOT NULL,
  `portrait` text NOT NULL,
  `still` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`username`, `password`, `fullname`, `address`, `wildlife`, `portrait`, `still`, `email`, `phone`) VALUES
('13-23005-1', '1234', 'shakil azizul hakim', 'dhaka', 'uploads/usb_desktop_1680x1050_hd-wallpaper-1005050.png', 'uploads/8718953thinkJava.jpg', 'uploads/1280_Programmer.jpg', 'shakil.wave@gmail.com', '01675250067'),
('13-23005-2', '1234', 'shakil', 'dhaka', 'uploads/ab8fc0b26e3fa86c1b82a4bb4e7539c1.jpeg', 'uploads/android_bugdroid_desktop_1920x1080_hd-wallpaper-1087433.jpg', 'uploads/command_microsoft_windows_desktop_1024x768_hd-wallpaper-1057279.jpg', 'shakil.dido@yahoo.com', '01719385999'),
('13-23005-3', '1234', 'shakil', 'dhaka', 'uploads/apple_inc_logos_desktop_1920x1200_hd-wallpaper-922898.jpg', 'uploads/android_desktop_960x854_hd-wallpaper-1078720.jpg', 'uploads/Programmer Table.jpg', 'shakil.wave@gmail.com', '01675250067'),
('13-23005-4', '1324', 'shakil azizul hakim', 'dhaka', 'uploads/wallpaper-29.jpg', 'uploads/windows_desktop_1280x1024_hd-wallpaper-1097194.jpg', 'uploads/windows_logos_desktop_1680x1050_hd-wallpaper-1030429.jpg', 'shakil.dido@yahoo.com', '01675250067');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD UNIQUE KEY `username` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
