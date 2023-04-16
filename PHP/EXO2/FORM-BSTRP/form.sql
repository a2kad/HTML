-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 16, 2023 at 03:57 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `secteur` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `mobile`, `secteur`, `desc`, `password`) VALUES
(3, 'Tricia', 'Gaither', '05.33.98.15.29', 'Agroalimentaire', 'Souhaitait admiration executeurs me je. Peut sons jeta trop tot bas dur. Du pans donc sa voix avis paix. Condamnait ce et eu legerement construits frisottent sa. Six par livides attenua peu diables. Trahison interdit va remparts le trouvent comptait. Iii', '08c4621b71ae241eac22a6f8e1fb243b'),
(4, 'Alice', 'Nichols', '01.36.71.96.67', 'Commerce / N&eacute;goce / Distribution', 'Peu bataille oui magasins premiere derniere derriere uns. Asiatiques tot sur commandant tristement toi peu. Ifs peu chez avis afin joie tot tout poil. Peu nations encourt non express peu. Des frissonner gourmettes ordonnance six est. Dit ces vers hors voi', '1cdd916c103b73022c02abbb0b54b871'),
(5, 'Robert', 'Jackson', '01.82.04.06.02', 'Informatique / T&eacute;l&eacute;coms', 'Consumait tu tranchees feeriques eu frontiere. Pressaient en infiniment va victorieux ca gouverneur. Ces trophees repartit repondit pourquoi six moi. Mort net dela main dur eaux cuir. Le de je vent vous veut elle pied. Ouvre salle non etale vif jeu aides ', '650bd8fda5f208906f2dc6ea3b6a901f'),
(6, 'Ernest', 'Lalonde', '01.84.30.28.44', 'Machines et &eacute;quipements / Automobile', 'Art tot sentiment seulement mon citadelle ameliorer. Forces livree voulut eux sol rachat hetres ras quitta. Les dit poudre couler blancs glisse galons. Lupanars physique appareil lampions pressent et en. Va couleurs se ca mourants bravoure tu. Souffrance ', '911e03abfe6a73d80e5da1e5b0d6bd24'),
(10, 'Donatien', 'Deniger', '04.70.52.66.77', 'Textile / Habillement / Chaussure', 'Car rebord formes brunes forges aimait peu sur bottes. Entendu pu animaux enfants sa caillou premier. Au je republique ecouterent pressentit paraissent. Tu devenir soldats souleve phrases bonheur qu abattre. Eparses fin les bon est propice ensuite groupes', 'd104043158bd9fc57e0bba1745f50063'),
(12, 'Reshetnikov', 'Ruslan', '01.80.93.90.69', 'Transports / Logistique', 'Chez on prit et on deux. Sous mene ici uns tout cet bon. Prenaient me consumait tiendrons ai parlaient connaitre frontiere. Poussiere indicible cuirasses agreerait cartouche des comprends que toi.', '911e03abfe6a73d80e5da1e5b0d6bd24'),
(14, 'Mallory', 'Piedalue', '01.80.18.23.73', 'BTP / Mat&eacute;riaux de construction', 'Etonnement de he poussaient gouverneur de avancaient sa compagnies. Le tire de hein mais hate voix tuer. Relevent treillis nul les remporte ici mon. Succedent moi ici eux toutefois peu dernieres echangent messieurs. Peu les maintenant ans des republique e', '2b812007cd829a79e8d09f22ee51ed5b'),
(15, 'Gustave', 'Lapointe', '04.96.10.95.41', '&Eacute;lectronique / &Eacute;lectricit&eacute;', 'Fumee glace ici dur vin halte avait abord. Tenacite drapeaux posseder le jeunesse vaudrait on et doctrine il. Oui eclat que talus ici parmi mal canon. Du je fievre genoux verdit grille claire va. Gardent ils dociles minutes conflit fer. Aimons de soldat m', '34821c8fffa06f9b7f135737ce08d90f'),
(16, 'Nicolas', 'Jalbert', '02.50.04.28.32', 'Textile / Habillement / Chaussure', 'Relevent treillis nul les remporte ici mon. Succedent moi ici eux toutefois peu dernieres echangent messieurs. Peu les maintenant ans des republique electrique vieillards gourmettes ordonnance. Bon hauts aux fer eut chose monte. Sur comprendre sol fer att', 'e24b312f819219ec10b8b391a44d4974');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
