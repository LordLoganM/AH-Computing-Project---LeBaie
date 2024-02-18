-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2024 at 10:53 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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

CREATE TABLE `contactus` (
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `issueDescription` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guestbasket`
--

CREATE TABLE `guestbasket` (
  `guestProdBasket` varchar(30) NOT NULL,
  `guestBasketCategory` varchar(20) NOT NULL,
  `guestBasPrice` float(4,2) NOT NULL,
  `image` longblob NOT NULL,
  `orderTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productName` varchar(30) NOT NULL,
  `productCategory` varchar(20) NOT NULL,
  `condition` varchar(20) NOT NULL,
  `price` float(4,2) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productName`, `productCategory`, `condition`, `price`, `description`, `image`) VALUES
('3DS', 'electronics', 'excellent', 30.00, ' One of the greatest game consoles of the 21st century ', 0x53637265656e73686f7420323032342d30312d3237203137353632382e706e67),
('Anti Gov Garment', 'clothing', 'excellent', 90.00, ' A tshirt made ethically in our great kingdom, created in support of our friends over in reform ', 0x53637265656e73686f7420323032342d30312d3237203137333331342e706e67),
('Comp Sci T-shirt', 'clothing', 'good', 13.00, ' A representation of how the leBaie founder feels about computer science after completing his project ', 0x53637265656e73686f7420323032342d30312d3237203137333231392e706e67),
('Lighting Mcqueen', 'vehicle', 'excellent', 99.99, 'a 1 to 1 replica of guy from cars 1 and 2 (1L engine)', 0x53637265656e73686f7420323032342d30312d3237203138303734302e706e67),
('Medal of Honour ', 'games', 'meh', 10.00, ' One of the greatest games of my time (delivery only)', 0x494d475f313435332e6a7067),
('Modern Warfare 3 ', 'games', 'poor', 60.00, ' This is a first-person shooter in which players assume the role of military operatives tasked with thwarting the plans of a terrorist leader. Players complete mission objectives and engage in battles that take place in modern-day locations across th', 0x494d475f313434392e6a7067),
('porsche', 'vehicle', 'poor', 99.99, ' the car you could buy with colin laws price of insurance', 0x53637265656e73686f7420323032342d30312d3237203138303631382e706e67),
('Programming Jumper', 'clothing', 'excellent', 35.00, ' A jumper that relates without computer scientists throughout our great nation ', 0x53637265656e73686f7420323032342d30312d3237203137333234382e706e67),
('Radio', 'electronics', 'poor', 90.00, ' Rumour has it the radio was owned by an early eildh fleming', 0x53637265656e73686f7420323032342d30312d3237203137353530342e706e67),
('supercar', 'vehicle', 'good', 13.00, ' rumoured to be logan muirs first car after his big sucess with lebaie', 0x53637265656e73686f7420323032342d30312d3237203138303431392e706e67),
('Watch Dogs ', 'games', 'good', 36.00, ' One of the first AC games that i questioned my sanity in ', 0x494d475f313435322e6a7067);

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
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`email`),
  ADD KEY `username` (`username`);

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contactus`
--
ALTER TABLE `contactus`
  ADD CONSTRAINT `contactus_ibfk_1` FOREIGN KEY (`username`) REFERENCES `registration` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
