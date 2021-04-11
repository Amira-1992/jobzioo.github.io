-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour medica_recruit
CREATE DATABASE IF NOT EXISTS `medica_recruit` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `medica_recruit`;

-- Listage de la structure de la table medica_recruit. administrateur
CREATE TABLE IF NOT EXISTS `administrateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(16) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Listage des données de la table medica_recruit.administrateur : 1 rows
/*!40000 ALTER TABLE `administrateur` DISABLE KEYS */;
INSERT INTO `administrateur` (`id`, `user`, `pass`, `nom`, `email`, `telephone`) VALUES
	(1, 'amira', '0000', 'Naghmouchi Amira', 'info@medica-care.com', '+49 - 341 978 567 90');
/*!40000 ALTER TABLE `administrateur` ENABLE KEYS */;

-- Listage de la structure de la table medica_recruit. ausbildung
CREATE TABLE IF NOT EXISTS `ausbildung` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_candidat` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `description` longtext,
  PRIMARY KEY (`id`),
  KEY `FK_ausbildung_candidat` (`id_candidat`),
  CONSTRAINT `FK_ausbildung_candidat` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table medica_recruit.ausbildung : ~0 rows (environ)
/*!40000 ALTER TABLE `ausbildung` DISABLE KEYS */;
/*!40000 ALTER TABLE `ausbildung` ENABLE KEYS */;

-- Listage de la structure de la table medica_recruit. candidat
CREATE TABLE IF NOT EXISTS `candidat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nationality` char(50) DEFAULT NULL,
  `first_name` char(50) DEFAULT NULL,
  `last_name` char(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `job_type` char(50) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `details` longtext NOT NULL,
  `certificate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Listage des données de la table medica_recruit.candidat : ~3 rows (environ)
/*!40000 ALTER TABLE `candidat` DISABLE KEYS */;
INSERT INTO `candidat` (`id`, `nationality`, `first_name`, `last_name`, `email`, `password`, `picture`, `job_type`, `phone`, `details`, `certificate`) VALUES
	(1, 'Tunisie', 'ahmed', 'hamza', 'ahmed@live.fr', '1234', 'assets/img/candidats/7980a23d14235cee0573d555a7a5eb7d4341.png', '1', '56324189', '', ''),
	(2, 'Tunisie', 'ali', 'maaroufi', 'ali.maaroufi@gmail.com', '1111', 'assets/img/candidats/93d94a07a70c5aa9b094306c61f3c0af1455.png', '2', '55213028', '', ''),
	(4, 'Tunisie', 'Amira', 'Mechrgui', 'amira@gmail.com', '1111', 'assets/img/candidats/733f051b632f1f56e8680d4c6d68e5c26948.png', '4', '21456203', '\'hjkehzkdjhezjkd\'', 'assets/img/candidats/59b2900aa03cb2182a51cdb520b535b62290.png'),
	(5, 'Tunisie', 'Naghmouchi', 'Amira', 'amira@live.fr', '123456', 'assets/img/candidats/ec81ac444f6eb4c60a482f3814533db85490.png', '3', '58639329', 'dehjdhjkehzdkjezd', 'assets/img/candidats/a37477e14a1920bebe1232b64c3202186339.jpg');
/*!40000 ALTER TABLE `candidat` ENABLE KEYS */;

-- Listage de la structure de la table medica_recruit. categorie
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_domain` int(11) NOT NULL DEFAULT '0',
  `libelle` char(50) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Listage des données de la table medica_recruit.categorie : ~13 rows (environ)
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
INSERT INTO `categorie` (`id`, `id_domain`, `libelle`, `icon`) VALUES
	(1, 3, 'Doctor', 'assets/img/160431442_721679775186995_8751795058854556287_n.jpg'),
	(2, 3, 'Nurse', 'assets/img/161542214_723404995211067_7344286511997144557_n.jpg'),
	(3, 3, 'Apprenticeship', 'assets/img/160566892_485240439173430_5821883773694000696_n.jpg'),
	(4, 3, 'Pediatric Nurse', 'assets/img/152048260_814717992417370_5892367077496235004_f.jpg'),
	(5, 3, 'Geriatric Nurse', 'assets/img/152048260_814717992417370_5892367077496235004_g.jpg'),
	(6, 3, 'Physioterapiste', 'assets/img/152048260_814717992417370_5892367077496235004_p.jpg'),
	(7, 3, 'Midwife', 'assets/img/152048260_814717992417370_5892367077496235004_m.jpg'),
	(8, 3, 'Radiolog Techniker', 'assets/img/gtxImageStore627711735593091287.jpg'),
	(9, 3, 'Anestheologist tek', 'assets/img/how-to-become-a-certified-anesthesia-technologist-800x534.jpg'),
	(10, 3, 'Dentist', 'assets/img/152048260_814717992417370_5892367077496235004_n.jpg'),
	(11, 3, 'zahnmedizinische/r Fach', 'assets/img/160426673_363725714698461_6405569018298639369_n.jpg'),
	(12, 3, 'PTA', 'assets/img/unnamed.jpg'),
	(13, 3, 'Nurse Promotion 2021', 'assets/img/71063314_2561949080693155_548910031748202496_n.png'),
	(14, 3, 'Orthoptist', 'assets/img/157612199_3482840788491259_1661120970258950767_n.jpg'),
	(15, 3, 'Zahntechniker assistent', 'assets/img/AdobeStock_45850234.jpg');
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;

-- Listage de la structure de la table medica_recruit. contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `date` date NOT NULL,
  `sujet` varchar(300) NOT NULL,
  `contenu` longtext NOT NULL,
  `reponse` longtext NOT NULL,
  `lue` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_client` (`id_client`),
  CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `candidat` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- Listage des données de la table medica_recruit.contact : ~0 rows (environ)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` (`id`, `id_client`, `date`, `sujet`, `contenu`, `reponse`, `lue`) VALUES
	(1, 1, '2020-12-09', 'contact 1', 'apropos. ......', '', 0);
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Listage de la structure de la table medica_recruit. favoris
CREATE TABLE IF NOT EXISTS `favoris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_candidat` int(11) DEFAULT NULL,
  `id_hospital` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `learn` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_favoris_candidat` (`id_candidat`),
  KEY `FK_favoris_hospital` (`id_hospital`),
  CONSTRAINT `FK_favoris_candidat` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`id`),
  CONSTRAINT `FK_favoris_hospital` FOREIGN KEY (`id_hospital`) REFERENCES `hospital` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Listage des données de la table medica_recruit.favoris : ~0 rows (environ)
/*!40000 ALTER TABLE `favoris` DISABLE KEYS */;
INSERT INTO `favoris` (`id`, `id_candidat`, `id_hospital`, `date`, `learn`) VALUES
	(1, 1, 2, '2021-04-02', 0);
/*!40000 ALTER TABLE `favoris` ENABLE KEYS */;

-- Listage de la structure de la table medica_recruit. fuhrerschein
CREATE TABLE IF NOT EXISTS `fuhrerschein` (
  `id` int(11) NOT NULL,
  `id_candidat` int(11) DEFAULT NULL,
  `libelle` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_fuhrerschein_candidat` (`id_candidat`),
  CONSTRAINT `FK_fuhrerschein_candidat` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table medica_recruit.fuhrerschein : ~0 rows (environ)
/*!40000 ALTER TABLE `fuhrerschein` DISABLE KEYS */;
/*!40000 ALTER TABLE `fuhrerschein` ENABLE KEYS */;

-- Listage de la structure de la table medica_recruit. hospital
CREATE TABLE IF NOT EXISTS `hospital` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `description` longtext,
  `adress` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Listage des données de la table medica_recruit.hospital : ~2 rows (environ)
/*!40000 ALTER TABLE `hospital` DISABLE KEYS */;
INSERT INTO `hospital` (`id`, `title`, `description`, `adress`, `website`, `email`, `password`, `logo`) VALUES
	(2, 'Fair Doctors', 'Fair Doctors has developed from a traditional family business into an innovative association of competent dentists without neglecting its original values. Our goal is and remains a fair, inexpensive and high-quality dental care. In order to permanently implement the highest quality standards, we therefore constantly invest in training and further education.', 'Buchheimer Str. 26, 51063 Köln, Allemagne', 'https://fair-doctors.de/', 'hallo@fair-doctors.de', 'fd123', '../assets/img/hospitals/4cffa05431abed2381f10408ca5d04ba4922.png'),
	(3, 'The University Hospital', '\'\'Founded in 1805, the Tübingen University Hospital is one of the 34 university hospitals in Germany that contribute to the successful combination of high-performance medicine, research and teaching. We are a reliable partner in four of the six German Centres for Health Research initiated by the Federal Government. We welcome patients from all over the world who are treated in our clinics and wish to benefit from our high standards in research, patient care and nursing.\'\'', '112 rescue service germany', 'https://www.medizin.uni-tuebingen.de/', 'service@med.uni-tuebingen.de', 'mut111', '../assets/img/hospitals/7598ae721950766cc46b41ae7db771686275.png'),
	(4, 'h1', 'hfjrgmlktyù', 'hzjdhzkj', 'hsjzhks', 'a@live.fr', '0000', '../assets/img/hospitals/f7b23211acebf383b735081d8c46f49a4382.gif');
/*!40000 ALTER TABLE `hospital` ENABLE KEYS */;

-- Listage de la structure de la table medica_recruit. interssen
CREATE TABLE IF NOT EXISTS `interssen` (
  `id` int(11) NOT NULL,
  `id_candidat` int(11) DEFAULT NULL,
  `libelle` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_interssen_candidat` (`id_candidat`),
  CONSTRAINT `FK_interssen_candidat` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table medica_recruit.interssen : ~0 rows (environ)
/*!40000 ALTER TABLE `interssen` DISABLE KEYS */;
/*!40000 ALTER TABLE `interssen` ENABLE KEYS */;

-- Listage de la structure de la table medica_recruit. kenntnisse
CREATE TABLE IF NOT EXISTS `kenntnisse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_candidat` int(11) DEFAULT NULL,
  `libelle` text,
  PRIMARY KEY (`id`),
  KEY `FK_KENNTNISSE_candidat` (`id_candidat`),
  CONSTRAINT `FK_KENNTNISSE_candidat` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table medica_recruit.kenntnisse : ~0 rows (environ)
/*!40000 ALTER TABLE `kenntnisse` DISABLE KEYS */;
/*!40000 ALTER TABLE `kenntnisse` ENABLE KEYS */;

-- Listage de la structure de la table medica_recruit. praktika
CREATE TABLE IF NOT EXISTS `praktika` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_candidat` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  KEY `FK__candidat` (`id_candidat`),
  CONSTRAINT `FK__candidat` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table medica_recruit.praktika : ~0 rows (environ)
/*!40000 ALTER TABLE `praktika` DISABLE KEYS */;
/*!40000 ALTER TABLE `praktika` ENABLE KEYS */;

-- Listage de la structure de la table medica_recruit. sprachkenntnisse
CREATE TABLE IF NOT EXISTS `sprachkenntnisse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_candidat` int(11) NOT NULL DEFAULT '0',
  `language` varchar(50) DEFAULT NULL,
  `livel` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_sprachkenntnisse_candidat` (`id_candidat`),
  CONSTRAINT `FK_sprachkenntnisse_candidat` FOREIGN KEY (`id_candidat`) REFERENCES `candidat` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Listage des données de la table medica_recruit.sprachkenntnisse : ~0 rows (environ)
/*!40000 ALTER TABLE `sprachkenntnisse` DISABLE KEYS */;
/*!40000 ALTER TABLE `sprachkenntnisse` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
administrateur