-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 11 mars 2020 à 12:49
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ckmpro`
--

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE `connexion` (
  `id_client` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Mdp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telephone` int(10) NOT NULL,
  `categorie` varchar(25) NOT NULL,
  `message` varchar(300) NOT NULL,
  `question3D` varchar(100) NOT NULL,
  `questionNet` varchar(100) CHARACTER SET utf8 NOT NULL,
  `questionEV` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `email`, `telephone`, `categorie`, `message`, `question3D`, `questionNet`, `questionEV`) VALUES
(236, 'ducellier', 'anthony', 'rastaforeyes@leneuf.com', 245326945, '3D nettoyage', 'GF?VB  ', '', '', 0),
(237, 'ducellier', 'anthony', 'rastaforeyes@leneuf.com', 245326945, '3D nettoyage', 'SZDZD', '', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `galerie_img`
--

CREATE TABLE `galerie_img` (
  `id_img` int(3) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `galerie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `galerie_img`
--

INSERT INTO `galerie_img` (`id_img`, `photo`, `galerie`) VALUES
(21, 'http://localhost/CKMpro/img/logo.png', 'G3D'),
(22, 'http://localhost/CKMpro/img/14A89-tshirt4.jpg', 'G3D'),
(23, 'http://localhost/CKMpro/img/14A89-KEK.png', 'G3D'),
(24, 'http://localhost/CKMpro/img/14A89-KEK.png', 'G3D'),
(25, 'http://localhost/CKMpro/img/-23R56-tshirt2.jpg', 'EV'),
(26, 'http://localhost/CKMpro/img/-23R56-tshirt2.jpg', 'EV'),
(27, 'http://localhost/CKMpro/img/EV-23R56-tshirt2.jpg', 'EV'),
(28, 'http://localhost/ckmpro/img/EV-23R56-tshirt2.jpg', 'EV'),
(29, 'http://localhost/ckmpro/img/EV-23R56-tshirt2.jpg', 'EV'),
(30, 'http://localhost/ckmpro/img/EV-23R56-tshirt2.jpg', 'EV'),
(31, 'http://localhost/ckmpro/img/EV-23R56-tshirt2.jpg', 'EV'),
(32, 'http://localhost/ckmpro/img/GNET-14A89-KEK.png', 'GNET'),
(33, 'http://localhost/ckmpro/img/GNET-14A89-KEK.png', 'GNET'),
(34, 'http://localhost/ckmpro/img/3D-14A89-tshirt4.jpg', '3D');

-- --------------------------------------------------------

--
-- Structure de la table `gestion_client`
--

CREATE TABLE `gestion_client` (
  `id_client` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `mdp` varchar(25) NOT NULL,
  `confirm_mdp` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` int(10) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `ville` varchar(25) NOT NULL,
  `cp` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `gestion_commande`
--

CREATE TABLE `gestion_commande` (
  `id_commande` int(11) NOT NULL,
  `id_client` decimal(11,0) NOT NULL,
  `montant` int(11) NOT NULL,
  `date_enregistrement` datetime NOT NULL,
  `produit` varchar(200) NOT NULL,
  `ref_commande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `gestion_produit`
--

CREATE TABLE `gestion_produit` (
  `id_produit` int(11) NOT NULL,
  `référence` varchar(20) NOT NULL,
  `prix` int(4) NOT NULL,
  `tva` int(3) NOT NULL,
  `stock` int(10) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `catégorie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `galerie_img`
--
ALTER TABLE `galerie_img`
  ADD PRIMARY KEY (`id_img`);

--
-- Index pour la table `gestion_client`
--
ALTER TABLE `gestion_client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `gestion_commande`
--
ALTER TABLE `gestion_commande`
  ADD PRIMARY KEY (`id_commande`);

--
-- Index pour la table `gestion_produit`
--
ALTER TABLE `gestion_produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;

--
-- AUTO_INCREMENT pour la table `galerie_img`
--
ALTER TABLE `galerie_img`
  MODIFY `id_img` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `gestion_client`
--
ALTER TABLE `gestion_client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gestion_produit`
--
ALTER TABLE `gestion_produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
