-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 28 sep. 2023 à 16:34
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `myshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` int(5) NOT NULL,
  `reservation_text` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `title`, `description`, `price`, `city`, `postal_code`, `reservation_text`, `image`) VALUES
(9, 'Nike Air Max 90', 'ghsdugfus', 100, 'Paris', 75012, 'fzeefzea', 'télécharger (3).jpg'),
(10, 'Nike Air Force 1', 'frzegegher', 120, 'Paris', 75012, 'rtghezge', 'AF1.jpg'),
(18, 'Nike Air Max plus 3', 'zrgtrynjurjtee', 170, 'Paris', 75016, '', 'OIP (11).jpg'),
(19, 'Puma Mercedes Petronas', 'cdefzarzehyetrtsd', 120, 'Paris', 75002, '', 'Chaussures-de-sports-automobiles-Maco-SL-2.webp'),
(20, 'Nike TN Air Max Plus Unity Berlin', 'grethrzjkhtrttrety', 190, 'Carrières-sur-Seine', 78420, '', 'R (3).jpg'),
(21, 'Adidas Stan Smith', 'vrtbzhyaetrurze', 90, 'Houilles', 78800, '', 'OIP (12).jpg'),
(22, 'Nike Dunk Low', 'lfokjfbfvggotguizerf', 100, 'Bordeaux', 33300, '', 'OIP (13).jpg'),
(23, 'Nike React Vision', 'gthjyuhtgrtyhyjhgtjyhgrds', 120, 'Paris', 75015, '', 'c6c1b0a3-60ed-40d2-9aca-341468fb222e.webp'),
(24, 'Air Jordan 1 Mid', 'qsdfghjklllmlkjhytrtyuiop', 120, 'Paris', 75010, '', 'fc27224e-573c-4c0a-a14d-ac3a2a8f32b2.webp'),
(25, 'Nike Vapor Max Plus', 'zdfedgrdgrdgrdgrdgrdgrn', 200, 'Paris', 75002, '', '12218601-6303-49ca-8611-180dc1115e46.webp'),
(26, 'Yeezy Boost 350 V2 Zebra ', 'azreztrytyutrezrthjythgrtuyil', 500, 'Paris', 75006, '', '17649170_500_A.jpg'),
(27, 'Puma Sneakers RS-X Triple', 'devfdbfjuki', 120, 'Poissy', 78300, '', 'Sneakers-RS-X-Triple.jpg'),
(28, 'Nike x Sacai Vaporwafle', 'vbntyutyurytrtytuilu', 180, 'Paris', 75004, '', 's-l1600.jpg'),
(31, 'Nike Blazer', 'ezrgthgfhytèygt', 100, 'Paris', 75017, '', 'jd_668423_a.webp'),
(32, 'Nike Zoom Fly 5', 'frgthy', 120, 'Paris', 75018, '', 'nike-zoom-fly-5-500924-dm8974-001.jpeg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
