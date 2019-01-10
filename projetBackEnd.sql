-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 10 Janvier 2019 à 16:29
-- Version du serveur :  5.7.24-0ubuntu0.18.04.1
-- Version de PHP :  7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetBackEnd`
--

-- --------------------------------------------------------

--
-- Structure de la table `Campagnes`
--

CREATE TABLE `Campagnes` (
  `ID` int(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `DateDebut` varchar(255) NOT NULL,
  `DateFin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Campagnes`
--

INSERT INTO `Campagnes` (`ID`, `Nom`, `DateDebut`, `DateFin`) VALUES
(1, 'Glenat', '20181225', '20190108'),
(2, 'Pika', '20190101', '20190115'),
(3, 'Kana', '20190108', '20190122'),
(4, 'Ki-oon', '20190108', '20190115');

-- --------------------------------------------------------

--
-- Structure de la table `Clients`
--

CREATE TABLE `Clients` (
  `ID` int(255) NOT NULL,
  `Login` varchar(255) NOT NULL,
  `MdP` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `CodePostal` varchar(255) NOT NULL,
  `Fixe` varchar(255) NOT NULL,
  `Portable` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Pays` varchar(255) NOT NULL,
  `Etat` varchar(255) NOT NULL,
  `DateInscription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Clients`
--

INSERT INTO `Clients` (`ID`, `Login`, `MdP`, `Nom`, `Prenom`, `Ville`, `Adresse`, `CodePostal`, `Fixe`, `Portable`, `Mail`, `Pays`, `Etat`, `DateInscription`) VALUES
(3, 'Arteak', 'aaa', 'Bonsignore', 'Benjamin', '45 route de Lyon', 'Saint-Chamond', '42400', '0477313240', '0637015128', 'benjamin.bonsignore@outlook.fr', 'France', '', '10/01/2019');

-- --------------------------------------------------------

--
-- Structure de la table `Produit`
--

CREATE TABLE `Produit` (
  `ID` int(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Campagne` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Produit`
--

INSERT INTO `Produit` (`ID`, `Nom`, `Campagne`) VALUES
(1, 'Dragon Ball Z', 'Glenat'),
(2, 'Bleach', 'Glenat'),
(3, 'One Piece', 'Glenat'),
(4, 'Fairy Tail', 'Pika'),
(5, 'Fate Stay Night', 'Pika'),
(6, 'Granblue Fantasy', 'Pika'),
(7, 'Assassination classroom', 'Kana'),
(8, 'Death Note', 'Kana'),
(9, 'Hunter X Hunter', 'Kana'),
(10, 'My Hero Academia', 'Ki-oon'),
(11, 'Final Fantasy Type-0', 'Ki-oon'),
(12, 'Warlord', 'Ki-oon');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Campagnes`
--
ALTER TABLE `Campagnes`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Clients`
--
ALTER TABLE `Clients`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Produit`
--
ALTER TABLE `Produit`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Campagnes`
--
ALTER TABLE `Campagnes`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `Clients`
--
ALTER TABLE `Clients`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `Produit`
--
ALTER TABLE `Produit`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
