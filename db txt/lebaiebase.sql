-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 02:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lebaiebase`
--

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `productBasket` varchar(30) NOT NULL,
  `basketCategory` varchar(20) NOT NULL,
  `basPrice` float(4,2) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--
-- Error reading structure for table lebaiebase.contactus: #1932 - Table &#039;lebaiebase.contactus&#039; doesn&#039;t exist in engine
-- Error reading data for table lebaiebase.contactus: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `lebaiebase`.`contactus`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `guestbasket`
--

CREATE TABLE `guestbasket` (
  `guestProdBasket` varchar(30) NOT NULL,
  `guestBasketCategory` varchar(20) NOT NULL,
  `guestBasPrice` float(4,2) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productName` varchar(30) NOT NULL,
  `productCategory` varchar(20) NOT NULL,
  `price` float(4,2) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productName`, `productCategory`, `price`, `image`) VALUES
('3DS', 'electronics', 30.00, 0x53637265656e73686f7420323032342d30312d3237203137353632382e706e67),
('Anti Gov Garment', 'clothing', 90.00, 0x53637265656e73686f7420323032342d30312d3237203137333331342e706e67),
('Comp Sci T-shirt', 'clothing', 13.00, 0x53637265656e73686f7420323032342d30312d3237203137333231392e706e67),
('Lighting Mcqueen', 'vehicle', 99.99, 0x53637265656e73686f7420323032342d30312d3237203138303734302e706e67),
('Medal of Honour ', 'games', 10.00, 0x494d475f313435332e6a7067),
('Modern Warfare 3 ', 'games', 60.00, 0x494d475f313434392e6a7067),
('Porsche', 'vehicle', 99.99, 0x53637265656e73686f7420323032342d30312d3237203138303631382e706e67),
('Programming Jumper', 'clothing', 35.00, 0x53637265656e73686f7420323032342d30312d3237203137333234382e706e67),
('Radio', 'electronics', 90.00, 0x53637265656e73686f7420323032342d30312d3237203137353530342e706e67),
('Supercar', 'vehicle', 13.00, 0x53637265656e73686f7420323032342d30312d3237203138303431392e706e67),
('Watch Dogs ', 'games', 36.00, 0x494d475f313435322e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `username` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`username`, `firstname`, `surname`, `DOB`, `password`) VALUES
('log', 'lof', 'm', '2012-12-06', '1234'),
('logan muir', 'logan', 'muir', '2006-07-01', 'pass'),
('loganMuir', 'Logan', 'Mug', '1995', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`productBasket`);

--
-- Indexes for table `guestbasket`
--
ALTER TABLE `guestbasket`
  ADD PRIMARY KEY (`guestProdBasket`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productName`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
