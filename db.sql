-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 28 sep. 2021 à 06:31
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bht_sarl`
--

-- --------------------------------------------------------

--
-- Structure de la table `bht_boutiques`
--

CREATE TABLE `bht_boutiques` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `quarter` varchar(100) NOT NULL,
  `added_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `bht_boutiques`
--

INSERT INTO `bht_boutiques` (`id`, `name`, `city`, `quarter`, `added_date`) VALUES
(1, 'BHT Sarl Ourbouga', 'Natitingou', 'Ourbouga', 0),
(2, 'BHT Sarl Ourbouga', 'Natitingou', 'Ourbouga', 0);

-- --------------------------------------------------------

--
-- Structure de la table `bht_category`
--

CREATE TABLE `bht_category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `comments` text DEFAULT NULL,
  `added_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `bht_category`
--

INSERT INTO `bht_category` (`id`, `category`, `comments`, `added_date`) VALUES
(2, 'Electronique', 'les outils électroniques ', '2021-10-04 22:03:22'),
(3, 'Mécanique ', 'les outils mécaniques ', '2021-10-04 22:03:22'),
(19, 'Agricole', 'Les outils informatiques', '2021-10-04 22:03:22'),
(20, 'Mobile', 'mobile clegan', '2021-10-04 22:03:22'),
(21, 'Electricité', 'Les produits électriques', '2021-10-04 22:03:22');

-- --------------------------------------------------------

--
-- Structure de la table `bht_customers`
--

CREATE TABLE `bht_customers` (
  `id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `contact` int(11) DEFAULT NULL,
  `added_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Les clients';

--
-- Déchargement des données de la table `bht_customers`
--

INSERT INTO `bht_customers` (`id`, `names`, `contact`, `added_date`) VALUES
(1, 'FICO Alda', 98654721, '2021-09-30 12:31:55'),
(2, 'TOURE Djawad', 98541023, '2021-09-30 12:31:55'),
(3, 'ADAM Assoumaîlatou', 53027085, '2021-09-30 16:09:42'),
(16, 'SAMBIENI Blaise', 96857412, '2021-10-04 10:54:41'),
(18, 'SOHOU Judicael', 56894512, '2021-10-04 16:37:14'),
(24, 'FOUSSENI Illiasou', 50784010, '2021-10-04 16:59:23'),
(26, 'NEW Customer', 56897412, '2021-10-05 05:34:54'),
(27, 'Customer', 59596666, '2021-09-27 09:29:28'),
(34, 'Customer New', 65947210, '2021-09-27 12:31:02'),
(35, 'Customer New II', 65947210, '2021-09-27 12:32:40');

-- --------------------------------------------------------

--
-- Structure de la table `bht_notifications`
--

CREATE TABLE `bht_notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `raison` tinytext DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `bht_opinions`
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
-- Déchargement des données de la table `bht_opinions`
--

INSERT INTO `bht_opinions` (`id`, `name`, `surname`, `city`, `quarter`, `contact`, `opinion`, `added_date`) VALUES
(5, 'ALASSANE', 'Blaise', 'Natitingou', 'Yimporima', '65947210', 'Je kiffe trop vos produits', '2021-10-05 05:50:11');

-- --------------------------------------------------------

--
-- Structure de la table `bht_produits`
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
-- Déchargement des données de la table `bht_produits`
--

INSERT INTO `bht_produits` (`id`, `name`, `category_id`, `manufacturer`, `price`, `totalStock`, `description`, `state`, `publish_date`, `user_id`) VALUES
(2, 'Samsung Galaxy S8', 2, 'Samsung ', 270000, 42, 'Le nouveau produit de samsung', '0', '2021-12-27 10:33:55', 1),
(3, 'Huawei P30', 2, 'Huawei Inc', 305000, 15, 'Le nouveau produit de huawei. Il est tellement sophistiqué et fiable !', '0', '2021-09-27 10:36:44', 1),
(4, 'Pocket Wifi', 2, 'MTN', 19000, 39, 'Un pocket wifi commercialisé par MTN Bénin', '0', '2021-09-27 10:39:17', 3),
(7, 'HP 4959', 2, 'HP', 150000, 50, 'Hp imprimante', '', '2021-09-28 20:46:27', 1),
(8, 'USB Type B 8Go', 2, 'Sandisk', 5000, 30, 'Une clé usb de 8Go', '', '2021-09-28 21:43:32', 1),
(9, 'iPhone 7', 2, 'Apple', 20000, 17, '', '', '2021-09-28 21:48:17', 1),
(10, 'PC Dell Laptop', 2, 'Dell Inc', 345000, 12, 'Pc Dell nouveau produit. Top !', '', '2021-09-28 21:51:09', 3),
(11, 'Nokia K6', 20, 'Nokia', 10000, 25, '', '', '2021-09-29 00:59:39', 1),
(12, 'TECNO Pop 2F', 20, 'Tecno', 45000, 18, '', '', '2021-09-30 16:48:57', 1),
(19, 'Imprimante 3D', 2, 'HP', 220000, 2, '', '', '2021-09-30 19:27:28', 1),
(23, 'Tecno Spark 4', 20, 'Tecno', 50000, 15, '', '', '2021-10-02 08:55:40', 1),
(49, 'Test', 2, 'Teit', 2500, 10, '', '', '2021-09-27 07:43:49', 1),
(53, 'TECNO Pop 3F', 20, 'Tecno', 47000, 14, '', '', '2021-09-27 11:16:07', 1),
(54, 'Test II', 2, 'Teit', 1200, 10, '', '', '2021-09-27 14:30:01', 1);

-- --------------------------------------------------------

--
-- Structure de la table `bht_users`
--

CREATE TABLE `bht_users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `registry_date` datetime NOT NULL DEFAULT current_timestamp(),
  `contact` varchar(15) NOT NULL,
  `email` varchar(225) NOT NULL COMMENT 'Adresse email de l''utilisateur ',
  `boutique` int(11) NOT NULL COMMENT 'Boutique de l''utilisateur',
  `password` varchar(255) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `bht_users`
--

INSERT INTO `bht_users` (`id`, `name`, `surname`, `role`, `registry_date`, `contact`, `email`, `boutique`, `password`, `last_login`, `status`) VALUES
(1, 'BHT', 'Admin', 'administrateur', '2021-09-27 00:51:04', '96457545', '', 1, '$2y$10$fcQSFLegwbxpNNYCreIS6e1255fmSLIGjQdqx.LsBYY903QAjakim', '2021-09-27 07:18:23', 1),
(2, 'SAMBIENI', 'Blaise', 'standard', '2021-10-02 17:34:17', '97587463', '', 1, '$2y$10$kkO3dH5LjezeDjfgKHfVQuod6U4TL1FouiihOyHoFGZVZxE3seAM2', '2021-10-04 10:10:36', 0),
(3, 'FOUSSENI', 'Illiassou', 'administrateur', '2021-10-02 17:38:41', '52587466', '', 1, '$2y$10$jWYZWTFMGuYuVoi8.j7MLecb6WsiWaqkmnRT6jW/YvyBhGP9m2lqa', '2021-10-05 10:52:41', 0),
(7, 'DOKPO', 'Kevin Jr', 'standard', '2021-10-02 19:32:36', '66587711', '', 1, '$2y$10$3aJawKftO4/9CXt.GCixMu/cBr6DZCzsAtlzwuPiba1m84.0Zi6DW', '2021-10-05 10:36:19', 0),
(8, 'ALASSANE', 'Kabirou', 'standard', '2021-10-03 15:14:50', '95181019', '', 1, '$2y$10$bfmDv.gLzgLzrQdaWAv7e.NA3JJcZ2cH93FSCEss1aOf8DntDA5x.', '2021-09-28 03:59:18', 1);

-- --------------------------------------------------------

--
-- Structure de la table `bht_ventes`
--

CREATE TABLE `bht_ventes` (
  `id` int(11) NOT NULL,
  `id_produit` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `shopping_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `bht_ventes`
--

INSERT INTO `bht_ventes` (`id`, `id_produit`, `id_customer`, `id_user`, `quantity`, `type`, `shopping_date`) VALUES
(1, 11, 3, 1, 1, 'ventes', '2021-09-30 23:15:28'),
(2, 2, 1, 1, 1, 'ventes', '2021-09-30 23:20:17'),
(3, 4, 2, 1, 1, 'ventes', '2021-10-01 18:45:35'),
(10, 11, 1, 3, 1, 'ventes', '2021-10-03 11:04:06'),
(11, 2, 2, 3, 2, 'ventes', '2021-10-03 11:46:49'),
(12, 2, 3, 3, 2, 'ventes', '2021-10-03 12:39:06'),
(13, 4, 1, 1, 5, 'ventes', '2021-10-01 17:52:01'),
(14, 23, 2, 1, 1, 'ventes', '2021-10-02 08:56:20'),
(18, 10, 1, 2, 1, 'ventes', '2021-10-04 10:51:23'),
(19, 23, 16, 2, 1, 'ventes', '2021-10-04 10:54:41'),
(21, 11, 18, 3, 1, 'ventes', '2021-10-04 16:37:14'),
(23, 4, 1, 3, 2, 'ventes', '2021-10-04 16:54:09'),
(24, 4, 1, 3, 2, 'ventes', '2021-10-04 16:54:09'),
(25, 19, 1, 3, 1, 'ventes', '2021-10-04 16:55:20'),
(26, 19, 1, 3, 1, 'ventes', '2021-10-04 16:55:20'),
(27, 12, 24, 3, 1, 'ventes', '2021-10-04 16:59:23'),
(29, 10, 2, 3, 1, 'ventes', '2021-10-04 21:02:51'),
(31, 2, 26, 3, 1, 'ventes', '2021-10-05 05:34:54'),
(32, 2, 1, 1, 1, 'ventes', '2021-09-27 09:38:06'),
(33, 4, 1, 1, 1, 'ventes', '2021-09-27 09:41:42'),
(34, 3, 1, 1, 2, 'ventes', '2021-09-27 09:41:42'),
(35, 11, 1, 1, 1, 'ventes', '2021-09-27 09:41:43'),
(36, 4, 1, 1, 1, 'ventes', '2021-09-27 09:41:43'),
(37, 3, 1, 1, 2, 'ventes', '2021-09-27 09:41:43'),
(38, 11, 1, 1, 1, 'ventes', '2021-09-27 09:41:43'),
(39, 4, 1, 1, 1, 'ventes', '2021-09-27 09:41:44'),
(40, 3, 1, 1, 2, 'ventes', '2021-09-27 09:41:44'),
(50, 2, 3, 1, 1, 'proforma', '2021-09-27 11:19:50'),
(52, 8, 18, 1, 1, 'proforma', '2021-09-27 11:22:41'),
(53, 19, 18, 1, 1, 'ventes', '2021-09-27 11:22:58'),
(54, 10, 34, 1, 1, 'ventes', '2021-09-27 12:31:02'),
(56, 19, 18, 1, 1, 'ventes', '2021-09-27 14:50:53');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bht_boutiques`
--
ALTER TABLE `bht_boutiques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bht_category`
--
ALTER TABLE `bht_category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bht_customers`
--
ALTER TABLE `bht_customers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bht_notifications`
--
ALTER TABLE `bht_notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_user_not` (`user_id`);

--
-- Index pour la table `bht_opinions`
--
ALTER TABLE `bht_opinions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bht_produits`
--
ALTER TABLE `bht_produits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_category` (`category_id`),
  ADD KEY `fk_id_user` (`user_id`);

--
-- Index pour la table `bht_users`
--
ALTER TABLE `bht_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_boutique` (`boutique`);

--
-- Index pour la table `bht_ventes`
--
ALTER TABLE `bht_ventes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_produit` (`id_produit`),
  ADD KEY `fk_id_customer` (`id_customer`),
  ADD KEY `fk_id_user_vente` (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bht_boutiques`
--
ALTER TABLE `bht_boutiques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `bht_category`
--
ALTER TABLE `bht_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `bht_customers`
--
ALTER TABLE `bht_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `bht_notifications`
--
ALTER TABLE `bht_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `bht_opinions`
--
ALTER TABLE `bht_opinions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `bht_produits`
--
ALTER TABLE `bht_produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identifiant unique d''un produit', AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `bht_users`
--
ALTER TABLE `bht_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `bht_ventes`
--
ALTER TABLE `bht_ventes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bht_notifications`
--
ALTER TABLE `bht_notifications`
  ADD CONSTRAINT `fk_id_user_not` FOREIGN KEY (`user_id`) REFERENCES `bht_users` (`id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `bht_produits`
--
ALTER TABLE `bht_produits`
  ADD CONSTRAINT `fk_id_category` FOREIGN KEY (`category_id`) REFERENCES `bht_category` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_user` FOREIGN KEY (`user_id`) REFERENCES `bht_users` (`id`);

--
-- Contraintes pour la table `bht_users`
--
ALTER TABLE `bht_users`
  ADD CONSTRAINT `fk_id_boutique` FOREIGN KEY (`boutique`) REFERENCES `bht_boutiques` (`id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `bht_ventes`
--
ALTER TABLE `bht_ventes`
  ADD CONSTRAINT `fk_id_customer` FOREIGN KEY (`id_customer`) REFERENCES `bht_customers` (`id`),
  ADD CONSTRAINT `fk_id_produit` FOREIGN KEY (`id_produit`) REFERENCES `bht_produits` (`id`),
  ADD CONSTRAINT `fk_id_user_vente` FOREIGN KEY (`id_user`) REFERENCES `bht_users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
