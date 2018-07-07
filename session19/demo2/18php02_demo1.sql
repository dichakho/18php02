-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2018 at 04:39 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `18php02_demo1`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(8, 'bbbbbbbbbbbbbb'),
(12, 'JUNIORWORKS'),
(14, '776'),
(15, 'Canh777777'),
(16, 'abcdÄ‘d');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `published` datetime NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `image`, `price`, `published`, `created`, `updated`, `deleted`) VALUES
(1, 12, 'Laptop', 'Dep', 'anh1.jpg', 122, '2018-06-26 00:00:00', '2018-06-17 00:00:00', '2018-06-17 00:00:00', NULL),
(2, 14, 'JUNIORWORKS', 'âa', 'default.png', 1000, '2018-06-15 00:00:00', '2018-06-17 00:00:00', '2018-06-17 00:00:00', '2018-06-17 16:19:02'),
(3, 14, 'JUNIORWORKS1', 'Ã¢Ã¢', 'default.png', 1000, '2018-06-19 00:00:00', '2018-06-17 03:55:50', '2018-06-17 03:55:50', NULL),
(4, 16, 'JUNIORWORKS2', 'Ã¢aaaaaaa', 'default.png', 1000, '2018-06-12 00:00:00', '2018-06-17 03:58:52', '2018-06-17 03:58:52', '2018-06-17 16:31:53'),
(5, 8, 'JUNIORWORKS3', 'ttttt', 'default.png', 1000, '2018-06-21 00:00:00', '2018-06-17 04:00:14', '2018-06-17 04:00:14', NULL),
(6, 15, 'JUNIORWORKS99', '66666', 'default.png', 1000, '2018-06-28 00:00:00', '2018-06-17 04:06:35', '2018-06-17 04:06:35', '2018-06-17 16:19:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;