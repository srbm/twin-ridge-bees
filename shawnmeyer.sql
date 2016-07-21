-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 21, 2016 at 02:33 PM
-- Server version: 5.7.12
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shawnmeyer`
--

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `unit` varchar(11) NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`id`, `name`, `unit`, `price`) VALUES
(1, 'tomatoes', 'lb', '2.00'),
(2, 'zuccini', 'lb', '2.00'),
(3, 'honey', 'pint', '10.00'),
(4, 'green beans', 'lb', '3.00'),
(4, 'green beans', 'lb', '3.00'),
(5, 'roma green beans', 'lb', '2.00'),
(6, 'hlaf runner green beans', 'lb', '2.00'),
(7, 'Tenderette green beans', 'lb', '2.00'),
(8, 'crooked neck yellow squash', 'lb', '2.00'),
(9, 'straight yellow squash', 'lb', '2.00'),
(10, 'white onions', 'lb', '2.00'),
(11, 'cherokee purple herloom tomato', 'lb', '2.00'),
(12, 'roma tomato', 'lb', '2.00'),
(13, 'yellow heirloom tomato', 'lb', '2.00'),
(14, 'german pink tomato', 'lb', '2.00'),
(15, 'heirloom tree tomato', 'lb', '2.00'),
(16, 'green tomato', 'ea', '1.00'),
(17, 'golden queen corn', 'dozen', '3.00'),
(18, 'bodacious corn', 'dozen', '3.00'),
(19, 'okra', '10 spears', '1.00'),
(20, 'sugar snap beans', 'lb', '2.00'),
(21, 'broccoli', 'lb', '2.00'),
(22, 'cabbage', 'head', '3.00'),
(23, 'cucumber', 'lb', '2.00'),
(24, 'green peppers', 'ea', '1.00'),
(25, 'rainbow peppers', 'ea', '1.00'),
(26, 'jalapeno peppers', '4', '1.00'),
(27, 'banana peppers', '4', '1.00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
