-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour ddfb
CREATE DATABASE IF NOT EXISTS `ddfb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ddfb`;

-- Listage de la structure de la table ddfb. comptes
CREATE TABLE IF NOT EXISTS `comptes` (
  `id_compte` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(40) NOT NULL,
  `motDePasse` varchar(255) NOT NULL,
  `ID_NUMEN` char(13) NOT NULL,
  `dateChangement` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mail` char(50) DEFAULT NULL,
  `NOM` char(50) DEFAULT NULL,
  `PRENOM` char(50) NOT NULL DEFAULT 'Guignol',
  `tel` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_compte`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Listage des données de la table ddfb.comptes : ~4 rows (environ)
DELETE FROM `comptes`;
/*!40000 ALTER TABLE `comptes` DISABLE KEYS */;
INSERT INTO `comptes` (`id_compte`, `identifiant`, `motDePasse`, `ID_NUMEN`, `dateChangement`, `mail`, `NOM`, `PRENOM`, `tel`) VALUES
	(1, 'Dylan Desir', '$argon2id$v=19$m=65536,t=4,p=1$U3Vydjk5RWtCaUIyR1VtZA$/7DHvV++cA1S1cQ7RMpwUB9/8XTtSdRqrwRN/0WywhY', '1325469874512', '2022-11-28 16:27:43', 'nolandesir75@gmail.com', 'Desir', 'Dylan', '783910053'),
	(2, 'DDesir', '$argon2id$v=19$m=65536,t=4,p=1$bTNpN29FdTA4WEZ1NVJOVw$Km2jQAYc2f6TUrwEdIyZN98lSUelkYLvUlDuC0sZhLY', '13254698745HO', '2022-11-28 16:33:24', 'nolandesir75@gmail.com', 'Desir', 'Dylan', '783910053'),
	(3, 'DDesir', '$argon2id$v=19$m=65536,t=4,p=1$NVRTd3Uyai4zcWRUZU94Sg$dZwePsLjX3LwKNigz/Sni0Xr5aaWXVYZQyNagzYhjOk', '13254698745HO', '2022-11-28 16:35:03', 'nolandesir75@gmail.com', 'Desir', 'Dylan', '783910053'),
	(4, 'salim', '$2y$10$MwGk5f7YjAioBPHqE5j.geRBJPjsZp66wIZ0j392Eead6JyhD9s.q', '1234', '2022-12-05 16:23:16', 'abcd@gmail.com', 'dahoumane', 'Guignol', '0655248577');
/*!40000 ALTER TABLE `comptes` ENABLE KEYS */;

-- Listage de la structure de la table ddfb. eleves
CREATE TABLE IF NOT EXISTS `eleves` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(100) DEFAULT NULL,
  `PRENOM` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Listage des données de la table ddfb.eleves : ~7 rows (environ)
DELETE FROM `eleves`;
/*!40000 ALTER TABLE `eleves` DISABLE KEYS */;
INSERT INTO `eleves` (`ID`, `NOM`, `PRENOM`) VALUES
	(1, 'Abbas', 'Franck'),
	(2, 'Barriaud', 'Noemie'),
	(3, 'Bendjebbour', 'Ines'),
	(4, 'Bangoura', 'Fode'),
	(5, 'Lopes', 'Loretta'),
	(6, 'Dupond', 'Paul'),
	(9, 'Fethi', 'Flex');
/*!40000 ALTER TABLE `eleves` ENABLE KEYS */;

-- Listage de la structure de la table ddfb. identite
CREATE TABLE IF NOT EXISTS `identite` (
  `nom_candidat` varchar(14) DEFAULT NULL,
  `prenom_candidat` varchar(14) DEFAULT NULL,
  `ID_candidat` char(13) DEFAULT NULL,
  `code_bts` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table ddfb.identite : ~0 rows (environ)
DELETE FROM `identite`;
/*!40000 ALTER TABLE `identite` DISABLE KEYS */;
/*!40000 ALTER TABLE `identite` ENABLE KEYS */;

-- Listage de la structure de la table ddfb. id_prof
CREATE TABLE IF NOT EXISTS `id_prof` (
  `ID_NOM_PROF` varchar(60) DEFAULT NULL,
  `ID_PRENOM_PROF` varchar(60) DEFAULT NULL,
  `ID_NUMEN` char(13) DEFAULT NULL,
  `ID_NUMERO` smallint(10) DEFAULT NULL,
  `ID_MAIL` varchar(150) DEFAULT NULL,
  `ID_TEL` smallint(10) DEFAULT NULL,
  `MDP_PROF` varchar(24) DEFAULT NULL,
  `IDENTIFIANT` char(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table ddfb.id_prof : ~6 rows (environ)
DELETE FROM `id_prof`;
/*!40000 ALTER TABLE `id_prof` DISABLE KEYS */;
INSERT INTO `id_prof` (`ID_NOM_PROF`, `ID_PRENOM_PROF`, `ID_NUMEN`, `ID_NUMERO`, `ID_MAIL`, `ID_TEL`, `MDP_PROF`, `IDENTIFIANT`) VALUES
	('Bauras', 'Roberte', 'DDDDDDDDDDDDD', NULL, NULL, NULL, NULL, NULL),
	('Carissant', 'Christian', 'EEEEEEEEEEEEE', NULL, NULL, NULL, NULL, NULL),
	('D Amico', 'Gregory', 'AAAAAAAAAAAAA', NULL, NULL, NULL, NULL, NULL),
	('Robert', 'Timothée', 'ABC123ABDTRDA', NULL, NULL, NULL, NULL, NULL),
	('Roubeau', 'Dominique', 'BBBBBBBBBBBBB', NULL, NULL, NULL, NULL, NULL),
	('Vigny', 'Corinne', 'CCCCCCCCCCCCC', NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `id_prof` ENABLE KEYS */;

-- Listage de la structure de la table ddfb. note
CREATE TABLE IF NOT EXISTS `note` (
  `note_obtenu` float DEFAULT NULL,
  `le_coefficient` float DEFAULT NULL,
  `commentaire` longtext,
  `date_épreuve` smallint(6) DEFAULT NULL,
  `heure_de_convocation` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table ddfb.note : ~0 rows (environ)
DELETE FROM `note`;
/*!40000 ALTER TABLE `note` DISABLE KEYS */;
/*!40000 ALTER TABLE `note` ENABLE KEYS */;

-- Listage de la structure de la table ddfb. notes
CREATE TABLE IF NOT EXISTS `notes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOTE` float DEFAULT NULL,
  `COEFF` float DEFAULT NULL,
  `MATIERE` varchar(30) DEFAULT NULL,
  `APPRECIATION` longtext,
  `DATE_EVAL` date DEFAULT NULL,
  `FK_ID_CANDIDAT` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Listage des données de la table ddfb.notes : ~6 rows (environ)
DELETE FROM `notes`;
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
INSERT INTO `notes` (`ID`, `NOTE`, `COEFF`, `MATIERE`, `APPRECIATION`, `DATE_EVAL`, `FK_ID_CANDIDAT`) VALUES
	(1, 12, 1, 'Maths', 'Ensemble un peu juste', '2022-09-14', 3),
	(2, 18, 2, 'Francais', 'Excellent !', '2022-10-12', 1),
	(3, 16, 1, 'Histoire Géo', 'Très bien, continuez', '2022-10-23', 1),
	(4, 14, 1, 'Maths', 'Assez satisfaisant', '2022-09-14', 2),
	(5, 11, 2, 'Francais', 'Trop de hors sujet', '2022-10-12', 2),
	(6, 14, 2, 'Histoire Géo', 'Bien, soignez l ortograpphe', '2022-10-23', 2);
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;

-- Listage de la structure de la table ddfb. épreuve
CREATE TABLE IF NOT EXISTS `épreuve` (
  `libellé_épreuve_CCF` varchar(29) DEFAULT NULL,
  `libellé_du_BTS` varchar(39) DEFAULT NULL,
  `option_du_BTS` tinytext,
  `année_scolaire` smallint(4) DEFAULT NULL,
  `code_CCF` char(5) DEFAULT NULL,
  `la_durée` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table ddfb.épreuve : ~0 rows (environ)
DELETE FROM `épreuve`;
/*!40000 ALTER TABLE `épreuve` DISABLE KEYS */;
/*!40000 ALTER TABLE `épreuve` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
