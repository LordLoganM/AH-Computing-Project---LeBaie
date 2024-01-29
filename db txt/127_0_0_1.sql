-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2024 at 10:46 PM
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
CREATE DATABASE IF NOT EXISTS `lebaiebase` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `lebaiebase`;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--
-- Error reading structure for table lebaiebase.contactus: #1932 - Table &#039;lebaiebase.contactus&#039; doesn&#039;t exist in engine
-- Error reading data for table lebaiebase.contactus: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `lebaiebase`.`contactus`&#039; at line 1

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
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"lebaiebase\",\"table\":\"products\"},{\"db\":\"lebaiebase\",\"table\":\"registration\"},{\"db\":\"simplebreaks\",\"table\":\"holiday\"},{\"db\":\"simplebreaks\",\"table\":\"hotel\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'simplebreaks', 'hotel', '{\"sorted_col\":\"`hotel`.`hotelRef` ASC\"}', '2023-09-22 23:50:42');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2023-12-18 22:30:32', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"en_GB\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `simplebreaks`
--
CREATE DATABASE IF NOT EXISTS `simplebreaks` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `simplebreaks`;

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE `holiday` (
  `title` varchar(30) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `dateOfDeparture` date NOT NULL,
  `nights` int(1) NOT NULL,
  `hotelRef` varchar(4) NOT NULL
) ;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`title`, `destination`, `country`, `dateOfDeparture`, `nights`, `hotelRef`) VALUES
('Barcelona Pricebuster', 'Catalonia', 'Spain', '2013-07-13', 3, 'H102'),
('Beautiful Berlin', 'Berlin', 'Germany', '2013-07-30', 4, 'H108'),
('Capital Spain', 'Madrid', 'Spain', '2013-07-12', 3, 'H110'),
('Catalonia Caper', 'Catalonia', 'Spain', '2013-06-25', 3, 'H101'),
('Catalonia Crystal', 'Catalonia', 'Spain', '2013-06-30', 3, 'H101'),
('Catalonia on a budget', 'Catalonia', 'Spain', '2013-07-26', 3, 'H102'),
('Edinburgh City Break', 'Edinburgh', 'Scotland', '2013-07-13', 2, 'H133'),
('Eternal City', 'Trastevere, Rome', 'Italy', '2013-07-05', 5, 'H122'),
('France Fantastic', 'Ile De France', 'France', '2013-08-16', 5, 'H113'),
('French Attractions', 'Ile De France', 'France', '2013-08-08', 4, 'H112'),
('French Experience', 'Ile De France', 'France', '2013-07-14', 6, 'H113'),
('Geloland', 'Windsor', 'England', '2013-07-23', 4, 'H118'),
('Germany Afresh', 'Brandenburg', 'Germany', '2013-08-12', 5, 'H108'),
('Glorious Paris', 'Champs ?lys?es', 'France', '2013-07-15', 4, 'H114'),
('Glorious Spain', 'Madrid', 'Spain', '2013-07-14', 5, 'H109'),
('Italy Glory', 'Trastevere, Rome', 'Italy', '2013-07-03', 2, 'H124'),
('Italy Heaven', 'Lazio', 'Italy', '2013-08-03', 4, 'H121'),
('Italy Luxury', 'Trastevere, Rome', 'Italy', '2013-07-04', 3, 'H123'),
('Italy Package', 'Fiumicino', 'Italy', '2013-06-05', 5, 'H125'),
('La vie fran?aise', 'Ile De France', 'France', '2013-08-03', 5, 'H113'),
('Lisbon Package', 'Sintra', 'Portugal', '2013-06-13', 6, 'H130'),
('London Attractions', 'Kensington', 'England', '2013-08-04', 2, 'H115'),
('London Highlights', 'Kensington', 'England', '2013-07-07', 4, 'H119'),
('London on a budget', 'Islington', 'England', '2013-07-27', 3, 'H115'),
('London Package', 'Hammersmith', 'England', '2013-07-01', 3, 'H116'),
('London Traveller', 'Greenwich', 'England', '2013-08-15', 4, 'H116'),
('Lovely Lisbon', 'Lisbon', 'Portugal', '2013-06-06', 3, 'H130'),
('Madrid Attractions', 'Arg?elles', 'Spain', '2013-08-14', 5, 'H109'),
('Madrid City Break', 'Madrid', 'Spain', '2013-07-03', 2, 'H109'),
('Madrid Summer Madness', 'Arg?elles', 'Spain', '2013-08-15', 7, 'H110'),
('Old England', 'Canary Wharf', 'England', '2013-07-20', 4, 'H117'),
('Paris and Surroundings', 'Ile De France', 'France', '2013-07-01', 3, 'H112'),
('Paris Luxury', 'Champs ?lys?es', 'France', '2013-08-23', 2, 'H114'),
('Paris on a budget', 'Ile De France', 'France', '2013-08-01', 3, 'H111'),
('Paris Package', 'Quartier Latin', 'France', '2013-08-02', 5, 'H113'),
('Paris Paradise', 'Paris', 'France', '2013-06-05', 3, 'H114'),
('Portugal on a budget', 'Lisbon', 'Portugal', '2013-07-03', 2, 'H131'),
('Portugal Relax', 'Silver Coast', 'Portugal', '2013-07-20', 5, 'H128'),
('Portugal Sun', 'Sintra', 'Portugal', '2013-07-20', 3, 'H129'),
('Portugal Tour', 'Silver Coast', 'Portugal', '2013-06-20', 5, 'H129'),
('Regal London', 'Canary Wharf', 'England', '2013-07-07', 5, 'H120'),
('Religious Rome', 'Vatican City', 'Italy', '2013-06-03', 4, 'H127'),
('Roman Route', 'Lazio', 'Italy', '2013-06-04', 4, 'H126'),
('Romantic Rome', 'Rome', 'Italy', '2013-07-10', 4, 'H127'),
('Scenic Scotland', 'East Coast', 'Scotland', '2013-08-20', 4, 'H135'),
('Scotland Attractions', 'East Coast', 'Scotland', '2013-07-06', 5, 'H133'),
('Scottish Glory', 'Lothian', 'Scotland', '2013-06-23', 4, 'H132'),
('Scottish Luxury', 'Edinburgh', 'Scotland', '2013-08-14', 4, 'H134'),
('Scottish Package', 'Lothian', 'Scotland', '2013-06-30', 3, 'H132'),
('Seven Hills', 'Lisbon Area', 'Portugal', '2013-07-13', 5, 'H131'),
('Sorbonne Special', 'Quartier Latin', 'France', '2013-07-14', 4, 'H111'),
('Spanish Beach', 'Catalonia', 'Spain', '2013-08-05', 5, 'H104'),
('Spanish Luxury', 'Catalonia', 'Spain', '2013-08-04', 3, 'H103'),
('Spanish Siesta', 'Madrid', 'Spain', '2013-06-17', 5, 'H109'),
('Spanish Sun', 'Catalonia', 'Spain', '2013-08-12', 5, 'H104'),
('Tartan Experience', 'East Coast', 'Scotland', '2013-07-20', 4, 'H136'),
('Theatre Break', 'London West End', 'England', '2013-08-03', 3, 'H117'),
('Vibrant Paris', 'Quartier Latin', 'France', '2013-07-30', 5, 'H112'),
('Wimbledon Winner', 'Wimbledon', 'England', '2013-07-01', 6, 'H120');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotelRef` varchar(4) NOT NULL,
  `hotelName` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `starRating` int(1) NOT NULL,
  `pricePerNight` float(4,2) NOT NULL,
  `kilometersFromAirport` float(3,1) NOT NULL
) ;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotelRef`, `hotelName`, `city`, `starRating`, `pricePerNight`, `kilometersFromAirport`) VALUES
('bogg', '', '', 5, 4.00, 7.0),
('ets', 'Lomond', '', 3, 5.00, 9.0),
('H101', 'Catalonia Inn', 'Barcelona', 2, 40.00, 11.1),
('H102', 'Barce Bunkhouse', 'Barcelona', 1, 25.00, 15.3),
('H103', 'Casa Luxor', 'Barcelona', 5, 99.99, 13.4),
('H104', 'Villa Grande', 'Barcelona', 5, 95.00, 12.7),
('H105', 'Catalonia Lux', 'Barcelona', 5, 75.00, 12.3),
('H106', 'Die Wand Hotel', 'Berlin', 4, 70.00, 14.0),
('H107', 'Den Baumkronen', 'Berlin', 1, 30.00, 15.6),
('H108', 'Der Wald', 'Berlin', 3, 60.00, 16.3),
('H109', 'Hotel Tranquilo', 'Madrid', 5, 95.00, 15.6),
('H110', 'Empera', 'Madrid', 3, 62.00, 14.1),
('H111', 'Napolean Ville', 'Paris', 2, 48.00, 18.3),
('H112', 'Maison De Jean', 'Paris', 1, 35.00, 17.7),
('H113', 'Hotel Saint-Jean', 'Paris', 3, 59.00, 18.0),
('H114', 'Champs-Elysees Star Residence', 'Paris', 5, 99.99, 19.0),
('H115', 'Sleepy Inn', 'London', 1, 39.00, 14.8),
('H116', 'Eastern Hotel', 'London', 2, 47.00, 6.5),
('H117', 'The Westroy', 'London', 3, 55.00, 22.5),
('H118', 'Number 9', 'London', 3, 58.00, 18.5),
('H119', 'Tower Turrets', 'London', 5, 99.99, 17.0),
('H120', 'St James House', 'London', 5, 99.99, 16.0),
('H121', 'Hotel Vicori', 'Rome', 4, 85.00, 34.5),
('H122', 'Hotel Fario', 'Rome', 4, 80.00, 18.6),
('H123', 'Hotel Geno', 'Rome', 4, 78.00, 22.9),
('H124', 'Darios', 'Rome', 3, 65.00, 23.0),
('H125', 'Avanti', 'Rome', 2, 45.00, 26.8),
('H126', 'Hotel Evoli', 'Rome', 3, 64.00, 28.3),
('H127', 'Hotel Sereno', 'Rome', 4, 82.00, 25.4),
('H128', 'Paz', 'Lisbon', 3, 67.00, 10.0),
('H129', 'Feriado', 'Lisbon', 3, 68.00, 12.3),
('H130', 'Lisboa Bay', 'Lisbon', 3, 62.00, 16.0),
('H131', 'Lado Colina', 'Lisbon', 2, 55.00, 25.0),
('H132', 'Hotel Caledonia', 'Edinburgh', 3, 57.00, 14.5),
('H133', 'Castle View', 'Edinburgh', 4, 65.00, 9.8),
('H134', 'Princes Hotel', 'Edinburgh', 5, 89.00, 13.5),
('H135', 'The Holyrood', 'Edinburgh', 3, 59.00, 10.7),
('H136', 'Classic Hotel', 'Edinburgh', 4, 72.00, 12.0),
('H137', 'Liffey House', 'Dublin', 3, 55.00, 13.0),
('H138', 'Dublin Apartments', 'Dublin', 1, 29.00, 14.5),
('H139', 'Central Road Hotel', 'Dublin', 3, 65.00, 10.1),
('H140', 'Trinty Towers', 'Dublin', 4, 76.00, 12.6),
('H666', 'KMS', 'Pot', 2, 5.00, 7.0),
('Test', '', '', 2, 0.00, 3.0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `holiday`
--
ALTER TABLE `holiday`
  ADD PRIMARY KEY (`title`),
  ADD KEY `hotelRef` (`hotelRef`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotelRef`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `holiday`
--
ALTER TABLE `holiday`
  ADD CONSTRAINT `holiday_ibfk_1` FOREIGN KEY (`hotelRef`) REFERENCES `hotel` (`hotelRef`);
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
