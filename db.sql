-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql104.epizy.com
-- Generation Time: Dec 30, 2022 at 07:03 PM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_33293363_neptune`
--

-- --------------------------------------------------------

--
-- Table structure for table `bht_category`
--

CREATE TABLE `bht_category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `comments` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bht_category`
--

INSERT INTO `bht_category` (`id`, `category`, `comments`) VALUES
(2, 'Electronique', 'les outils électroniques '),
(3, 'Mécanique ', 'les outils mécaniques '),
(19, 'Agricole', 'Les outils informatiques'),
(20, 'Mobile', 'mobile clegan'),
(21, 'Electricité', 'Les produits électriques'),
(22, 'Informatique', '');

-- --------------------------------------------------------

--
-- Table structure for table `bht_customers`
--

CREATE TABLE `bht_customers` (
  `id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `added_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Les clients';

--
-- Dumping data for table `bht_customers`
--

INSERT INTO `bht_customers` (`id`, `names`, `contact`, `added_date`) VALUES
(1, 'FICO Alda', 98654721, '2021-09-30 12:31:55'),
(2, 'TOURE Djawad', 98541023, '2021-09-30 12:31:55'),
(3, 'ADAM Assoumaîlatou', 53027085, '2021-09-30 16:09:42');

-- --------------------------------------------------------

--
-- Table structure for table `bht_opinions`
--

CREATE TABLE `bht_opinions` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `city` varchar(60) NOT NULL,
  `quarter` varchar(80) NOT NULL,
  `contact` varchar(30) DEFAULT NULL,
  `opinion` text NOT NULL,
  `added_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bht_opinions`
--

INSERT INTO `bht_opinions` (`id`, `name`, `surname`, `city`, `quarter`, `contact`, `opinion`, `added_date`) VALUES
(1, 'John', 'Doe', 'Natitingou', 'Ourbouga', '98541023', 'Je pense que le produit iphone 7 est tellement bon. Mais le seul problème c\'est que le prix est un peu chère.', '2021-10-02 00:11:45'),
(4, 'Matri', 'Illiassou', 'Natitingou', 'Yimporima', '12587463', 'Je pense que le produit iphone 7 est tellement bon. Mais le seul problème c\'est que le prix est un peu chère.', '2021-10-02 00:12:42');

-- --------------------------------------------------------

--
-- Table structure for table `bht_produits`
--

CREATE TABLE `bht_produits` (
  `id` int(11) NOT NULL COMMENT 'Identifiant unique d''un produit',
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `manufacturer` varchar(100) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `totalStock` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `state` varchar(5) NOT NULL,
  `publish_date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bht_produits`
--

INSERT INTO `bht_produits` (`id`, `name`, `category_id`, `manufacturer`, `price`, `totalStock`, `description`, `state`, `publish_date`, `user_id`) VALUES
(2, 'Samsung Galaxy S10', 2, 'Samsung ', 280000, 15, 'Le nouveau produit de samsung', '0', '2021-09-27 10:33:55', 1),
(3, 'Huawei P30', 2, 'Huawei', 300000, 20, 'Le nouveau produit de huawei. Il est tellement sophistiqué et fiable !', '0', '2021-09-27 10:36:44', 1),
(4, 'Pocket Wifi', 2, 'MTN', 19000, 32, 'Un pocket wifi commercialisé par MTN Bénin', '0', '2021-09-27 10:39:17', 1),
(7, 'HP 4959', 2, 'HP', 150000, 50, 'Hp imprimante', '', '2021-09-28 20:46:27', 1),
(8, 'USB Type B 8Go', 2, 'Sandisk', 5000, 20, 'Une clé usb de 8Go', '', '2021-09-28 21:43:32', 1),
(9, 'iPhone 7', 2, 'Apple', 20000, 10, '', '', '2021-09-28 21:48:17', 1),
(10, 'PC Dell Laptop', 2, 'Dell', 345000, 5, 'Pc Dell nouveau produit', '', '2021-09-28 21:51:09', 1),
(11, 'Nokia K6', 20, 'Nokia', 10000, 23, '', '', '2021-09-29 00:59:39', 1),
(12, 'TECNO Pop 2F', 20, 'Tecno', 45000, 5, '', '', '2021-09-30 16:48:57', 1),
(19, 'Imprimante 3D', 2, 'HP', 220000, 3, '', '', '2021-09-30 19:27:28', 1),
(23, 'iPhone 14', 20, 'Apple', 700000, 8, 'C\'est le nouveau de la branch Apple', '', '2022-12-30 19:08:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bht_users`
--

CREATE TABLE `bht_users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `registry_date` datetime NOT NULL DEFAULT current_timestamp(),
  `contact` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bht_users`
--

INSERT INTO `bht_users` (`id`, `name`, `surname`, `role`, `registry_date`, `contact`, `password`, `last_login`, `status`) VALUES
(8, 'ALASSANE', 'Kabirou', 'administrateur', '2021-10-03 15:14:50', '95181019', '$2y$10$v6nkZjRw4zHP4F0YAlBkzOJS8wL/k7ru/UuVBj8j5hZmXeUjpQTK.', '2021-10-03 03:10:39', 1),
(9, 'GitHub', 'User', 'administrateur', '2022-12-30 18:46:32', '90010203', '$2y$10$ikOd0aq5B6hTw4N3yaD42OXAQ2dSSGAW4zpkaTaLvpNt5J1Oz7XY6', NULL, 0),
(10, 'KIDJE', 'Elfried Fortunatus', 'administrateur', '2022-12-30 18:52:50', '96457545', '$2y$10$9r33mwQlKRYLuGJZPmttiusrZ1tPqrgxgQ/Dzn9h4NEvGkFbH91yy', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bht_ventes`
--

CREATE TABLE `bht_ventes` (
  `id` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `shopping_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bht_ventes`
--

INSERT INTO `bht_ventes` (`id`, `id_produit`, `id_customer`, `id_user`, `quantity`, `shopping_date`) VALUES
(1, 11, 3, 1, 1, '2021-09-30 23:15:28'),
(2, 2, 1, 1, 1, '2021-09-30 23:20:17'),
(3, 4, 2, 1, 1, '2021-10-01 18:45:35'),
(10, 11, 1, 3, 1, '2021-10-03 11:04:06'),
(11, 2, 2, 3, 2, '2021-10-03 11:46:49'),
(12, 2, 3, 3, 2, '2021-10-03 12:39:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bht_category`
--
ALTER TABLE `bht_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bht_customers`
--
ALTER TABLE `bht_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bht_opinions`
--
ALTER TABLE `bht_opinions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bht_produits`
--
ALTER TABLE `bht_produits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_category` (`category_id`),
  ADD KEY `fk_id_user` (`user_id`);

--
-- Indexes for table `bht_users`
--
ALTER TABLE `bht_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bht_ventes`
--
ALTER TABLE `bht_ventes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_produit` (`id_produit`),
  ADD KEY `fk_id_customer` (`id_customer`),
  ADD KEY `fk_id_user_vente` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bht_category`
--
ALTER TABLE `bht_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `bht_customers`
--
ALTER TABLE `bht_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bht_opinions`
--
ALTER TABLE `bht_opinions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bht_produits`
--
ALTER TABLE `bht_produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant unique d''un produit', AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `bht_users`
--
ALTER TABLE `bht_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bht_ventes`
--
ALTER TABLE `bht_ventes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
