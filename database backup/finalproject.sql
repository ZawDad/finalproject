-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2016 at 05:23 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1482440421),
('m130524_201442_init', 1482440431);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `street_address` varchar(200) NOT NULL,
  `parish` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `first_name`, `last_name`, `gender`, `street_address`, `parish`, `email`) VALUES
(1, 'Shawn D.', 'Wright', 'Male', 'Lot 125, 3 West, Greater Portmore', 'St. Catherine', 'sdwlive@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'shawnd', '-B0PcQvJcMI1MXXMmB-P0J2ZIuXeJFjx', '$2y$13$2DG6s6GAyBz4ppj2cYnOU..Lx8PtW4mPHdE0bN./hEVMlpMxgqNHW', '', 'sdwlive@gmail.com', 10, 1482440601, 1482440601),
(2, 'test', '8bst573rj_ppZ0Kz0sp1RPocXXSOuEnf', '$2y$13$aojn/SGdtMDaS36f5nNd8uBbEb0dhiFqSI9edAzb3M57WU1wih.ii', NULL, 'test@hotmail.com', 10, 1482539726, 1482539726),
(3, 'lady', 'ZFAMscsIfjDn4VzfaHSUZw1Gu0ih4Fte', '$2y$13$SDZM5bfLTC3Uvs.pLqu8COtLbmZZ49GV28dGg9OCBVSn7paFYmwq2', NULL, 'lady@ok.com', 10, 1482540899, 1482540899),
(4, 'test3', 'YKNNXw6x3HHbwd7Z4fBqre9i9uGn1avD', '$2y$13$5H.jFn3tx91KqP.BvLotTuEj0fKC3ck.xoQmYNS3v/PzpEOVppSGO', NULL, 'test3@g.com', 10, 1482541470, 1482541470),
(5, 'test4', 'W2fPOJ178YLcWaw6lg4bQFRbk2A5cygh', '$2y$13$SZTUSvredohIwPpLPrSeH.5.8piOBsJfIAFwhsNXM3iFxuHRxftwm', NULL, 't4@g.com', 10, 1482542084, 1482542084);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
