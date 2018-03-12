-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2018 at 11:36 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `primary`
--

-- --------------------------------------------------------

--
-- Table structure for table `base_config`
--

CREATE TABLE `base_config` (
  `cfg_tag` varchar(64) NOT NULL DEFAULT '' COMMENT 'Config Key Tag',
  `cfg_val` varchar(64) NOT NULL DEFAULT '' COMMENT 'Config Value',
  `cfg_opt1` varchar(64) NOT NULL DEFAULT '' COMMENT 'Config Additional Value',
  `cfg_opt2` varchar(64) NOT NULL DEFAULT '',
  `cfg_opt3` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `id_dash_arrange`
--

CREATE TABLE `id_dash_arrange` (
  `USER_ID` int(11) NOT NULL COMMENT 'INFOUSER.USERID',
  `PAGE_ID` int(11) NOT NULL COMMENT 'dashboard Page ID',
  `CELL_ID` varchar(64) NOT NULL COMMENT 'dashboard Frame ID',
  `ITEM_ID` int(11) NOT NULL COMMENT 'ID_DASH_INFOITEM.ITEM_ID',
  `CELL_DESCR` varchar(256) DEFAULT NULL COMMENT 'Description Frame',
  `CELL_TITLE` varchar(256) DEFAULT NULL COMMENT 'Title of Frame',
  `Opt01_Val` varchar(128) NOT NULL,
  `Opt01_Descr` varchar(128) NOT NULL,
  `Opt02_Val` varchar(128) NOT NULL,
  `Opt02_Descr` varchar(128) NOT NULL,
  `Opt03_Val` varchar(128) NOT NULL,
  `Opt03_Descr` varchar(128) NOT NULL,
  `Opt04_Val` varchar(128) NOT NULL,
  `Opt04_Descr` varchar(128) NOT NULL,
  `Opt05_Val` varchar(128) NOT NULL,
  `Opt05_Descr` varchar(128) NOT NULL,
  `Opt06_Val` varchar(128) NOT NULL,
  `Opt06_Descr` varchar(128) NOT NULL,
  `Opt07_Val` varchar(128) NOT NULL,
  `Opt07_Descr` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='IDEN Dashboard Arrange Display';

--
-- Dumping data for table `id_dash_arrange`
--

INSERT INTO `id_dash_arrange` (`USER_ID`, `PAGE_ID`, `CELL_ID`, `ITEM_ID`, `CELL_DESCR`, `CELL_TITLE`, `Opt01_Val`, `Opt01_Descr`, `Opt02_Val`, `Opt02_Descr`, `Opt03_Val`, `Opt03_Descr`, `Opt04_Val`, `Opt04_Descr`, `Opt05_Val`, `Opt05_Descr`, `Opt06_Val`, `Opt06_Descr`, `Opt07_Val`, `Opt07_Descr`) VALUES
(1, 1, 'cell_2', 1, '', 'CPU Top 5', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1, 1, 'cell_5', 2, '', 'Traffic Trend', '2', 'NODEID', '1039', 'IFIndex', '', '', '', '', '', '', '', '', '', ''),
(1, 1, 'cell_1', 3, '', 'Syatem Status', '1', 'NODEID', '', '', '', '', '', '', '', '', '', '', '', ''),
(1, 1, 'cell_7', 9, '', 'Input Traffic Top 7', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1, 1, 'cell_3', 5, '', 'Memory Top 3', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1, 1, 'cell_8', 6, 'Failure Status', 'Failure  Status', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(1, 1, 'cell_9', 9, '', 'Output Traffic Top 8', 'out', 'traffic_direction', '', '', '', '', '', '', '', '', '', '', '', ''),
(1, 1, 'cell_4', 8, '', 'Device Map', '0', 'GID', '', '', '', '', '', '', '', '', '', '', '', ''),
(1, 1, 'cell_6', 11, '', 'IP Usage Status', 'all', 'DIVISION', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 1, 'cell_2', 1, '', 'CPU Top 5', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 1, 'cell_1', 3, '', 'Syatem Status', '4', 'NODEID', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 1, 'cell_3', 5, '', 'Memory Top 3', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 1, 'cell_9', 12, '', 'IP Move Status', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 1, 'cell_4', 8, '', 'Device Map', '0', 'GID', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 1, 'cell_8', 6, '', 'Failure Status', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 1, 'cell_6', 11, '', 'IP Usage Status', 'all', 'DIVISION', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 1, 'cell_5', 2, '', 'Traffic Trend', '3', 'NODEID', '10116', 'IFIndex', '', '', '', '', '', '', '', '', '', ''),
(3, 1, 'cell_7', 9, '', 'Output Traffic Top 8', 'out', 'traffic_direction', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 1, 'cell_1', 3, NULL, 'Syatem Status', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 1, 'cell_2', 1, NULL, 'CPU Top 5', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 1, 'cell_3', 7, '', 'Group Failure ', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 1, 'cell_4', 8, NULL, 'Device Map', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 1, 'cell_5', 2, '', 'Traffic Trend', '5', 'NODEID', '14', 'IFIndex', '', '', '', '', '', '', '', '', '', ''),
(4, 1, 'cell_6', 11, '', 'IP Usage Status', '2', 'DIVISION', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 1, 'cell_7', 9, NULL, 'Input Traffic Top 7', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 1, 'cell_8', 6, NULL, 'Failure Status', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 1, 'cell_9', 12, NULL, 'IP Move Status', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 1, 'cell_1', 3, NULL, 'Syatem Status', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 1, 'cell_2', 1, NULL, 'CPU Top 5', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 1, 'cell_3', 5, NULL, 'Memory Top 3', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 1, 'cell_4', 8, NULL, 'Device Map', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 1, 'cell_5', 2, NULL, 'Traffic Trend', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 1, 'cell_6', 11, NULL, 'IP Usage Status', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 1, 'cell_7', 9, NULL, 'Traffic Top N', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 1, 'cell_8', 6, NULL, 'Failure Status', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 1, 'cell_9', 12, NULL, 'IP Move Status', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 1, 'cell_1', 3, '', 'Syatem Status', '1', 'NODEID', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 1, 'cell_2', 1, NULL, 'CPU Top 5', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 1, 'cell_3', 5, NULL, 'Memory Top 3', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 1, 'cell_4', 8, NULL, 'Device Map', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 1, 'cell_5', 2, '', 'Traffic Trend', '2', 'NODEID', '10102', 'IFIndex', '', '', '', '', '', '', '', '', '', ''),
(2, 1, 'cell_6', 11, '', 'IP Usage Status', '10', 'DIVISION', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 1, 'cell_7', 9, NULL, 'Traffic Top N', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 1, 'cell_8', 6, NULL, 'Failure Status', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 1, 'cell_9', 9, '', 'Output Traffic Top 8', 'out', 'traffic_direction', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `id_dash_infoitem`
--

CREATE TABLE `id_dash_infoitem` (
  `ITEM_ID` int(11) NOT NULL,
  `ITEM_NAME` varchar(128) DEFAULT NULL COMMENT 'Default Display Title',
  `ITEM_TYPE` int(11) NOT NULL COMMENT 'Display Type Of Contents',
  `ITEM_FILE` varchar(256) NOT NULL COMMENT 'Relative procedure',
  `VIEW_ORDER` smallint(6) DEFAULT NULL COMMENT 'Cell View Order',
  `REFRESH` int(11) NOT NULL COMMENT 'Cell must be refresh every interval',
  `ITEM_DESCR` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='IDEN Dashboard Function List';

--
-- Dumping data for table `id_dash_infoitem`
--

INSERT INTO `id_dash_infoitem` (`ITEM_ID`, `ITEM_NAME`, `ITEM_TYPE`, `ITEM_FILE`, `VIEW_ORDER`, `REFRESH`, `ITEM_DESCR`) VALUES
(1, 'CPU Top 5', 1, 'dash_cpu_topn.php', 0, 1, ''),
(2, 'Traffic Trend', 1, 'dash_traffic_chart.php', 0, 1, ''),
(3, 'System Status', 1, 'dash_node_status.php', 1, 1, ''),
(5, 'Memory Top 3', 1, 'dash_topn_memory.php', NULL, 1, ''),
(6, 'Failure List', 3, 'dash_fail_list.php', 0, 1, ''),
(7, 'Group Status', 1, 'dash_topn_fail_chart.php', NULL, 1, ''),
(8, 'Device Map', 2, 'dash_map.php', 0, 0, ''),
(9, 'Traffic Top N', 1, 'dash_topn_traff_in_chart.php', 0, 1, ''),
(11, 'IP Usage', 1, 'dash_ip_lease_chart.php', 0, 1, NULL),
(12, 'IP Lease', 1, 'dash_ip_move_list.php', 0, 1, NULL),
(13, 'Alarm Status', 1, 'dash_ip_alarm.php', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'char1', NULL, NULL),
(2, 'char2', NULL, NULL),
(3, 'char3', NULL, NULL),
(4, 'char4', NULL, NULL),
(5, 'char5', NULL, NULL),
(6, 'datatable', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_01_18_072920_create_settings_table', 2),
(4, '2018_01_18_073257_create_items_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `row` int(11) NOT NULL,
  `col` int(11) NOT NULL,
  `sizex` int(11) NOT NULL,
  `sizey` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `user_id`, `item_id`, `row`, `col`, `sizex`, `sizey`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 2, 2, NULL, NULL),
(2, 1, 2, 1, 5, 2, 5, NULL, NULL),
(3, 1, 3, 3, 4, 1, 1, NULL, NULL),
(4, 1, 4, 3, 1, 3, 4, NULL, NULL),
(5, 1, 5, 1, 4, 1, 1, NULL, NULL),
(6, 1, 6, 2, 4, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin2@gmail.com', '$2y$10$VFGakY5L8PmPuoZSmZ.zdOXvm6xaxSL2Hyc6Rd.2X6LJxSSpRfPVC', 'MM1mHDN6Dw1XHNPasVdU87tuiHXHRbkKOzXVyzJ76NUke6uniSI3YUbor9zQ', '2018-01-17 21:04:07', '2018-01-17 21:04:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `base_config`
--
ALTER TABLE `base_config`
  ADD UNIQUE KEY `cfg_tag` (`cfg_tag`);

--
-- Indexes for table `id_dash_arrange`
--
ALTER TABLE `id_dash_arrange`
  ADD KEY `USER_ID` (`USER_ID`);

--
-- Indexes for table `id_dash_infoitem`
--
ALTER TABLE `id_dash_infoitem`
  ADD PRIMARY KEY (`ITEM_ID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `id_dash_infoitem`
--
ALTER TABLE `id_dash_infoitem`
  MODIFY `ITEM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
