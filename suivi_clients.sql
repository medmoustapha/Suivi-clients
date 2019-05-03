-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Lun 04 Juillet 2016 à 12:45
-- Version du serveur: 5.5.20
-- Version de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `suivi_clients`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `Id_commentaire` int(10) NOT NULL AUTO_INCREMENT,
  `Id_Rapport` int(10) NOT NULL,
  `Id_Employe` varchar(30) NOT NULL,
  `auteur` varchar(30) NOT NULL,
  `Memo` text NOT NULL,
  `datec` varchar(10) NOT NULL,
  `heurec` time NOT NULL,
  PRIMARY KEY (`Id_commentaire`),
  KEY `Id_Rapport` (`Id_Rapport`,`Id_Employe`),
  KEY `Id_Employe` (`Id_Employe`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`Id_commentaire`, `Id_Rapport`, `Id_Employe`, `auteur`, `Memo`, `datec`, `heurec`) VALUES
(86, 1, 'emall', 'bouhe', 'SociÃ©tÃ© Orabank en mauritanie', '04-07-2016', '06:01:00'),
(87, 3, 'emall', 'bouhe', 'MÃ©thode Merise', '04-07-2016', '00:00:00'),
(88, 3, 'emall', 'bouhe', 'Explication de mÃ©thode Merise', '04-07-2016', '06:06:00'),
(89, 7, 'sidi', 'vave', 'langage html', '04-07-2016', '06:40:00');

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE IF NOT EXISTS `employe` (
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profil` varchar(30) NOT NULL,
  `fonction` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `num_tel` varchar(15) NOT NULL,
  `num_br` varchar(5) NOT NULL,
  PRIMARY KEY (`login`),
  KEY `login` (`login`),
  KEY `login_2` (`login`),
  KEY `login_3` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `employe`
--

INSERT INTO `employe` (`nom`, `prenom`, `login`, `password`, `profil`, `fonction`, `email`, `num_tel`, `num_br`) VALUES
('ahmed', 'mohamed', 'ahmed', '202cb962ac59075b964b07152d234b70', 'chargÃ© client', 'employÃ©', 'ahmed@yahoo.fr', '', ''),
('bouhe', 'MED M''BARECK', 'emall', '25d55ad283aa400af464c76d713c07ad', 'chargÃ© client', 'employÃ©', 'benina@gmail.com', '48626068', ''),
('vave', 'med', 'sidi', '25d55ad283aa400af464c76d713c07ad', 'directeur', 'DG', 'betich@gmail.com', '28626068', '4'),
('vave', 'ahmed', 'vave', '3763627f8d75d9e16e37cd71738368f8', 'admine', 'directeur_gener', 'medmostafaa@gmail.com', '48626068', '02');

-- --------------------------------------------------------

--
-- Structure de la table `rapport`
--

CREATE TABLE IF NOT EXISTS `rapport` (
  `Id_Rapport` int(10) NOT NULL AUTO_INCREMENT,
  `Id_Employe` varchar(30) NOT NULL,
  `auteur` varchar(30) NOT NULL,
  `Memo` text NOT NULL,
  `date` varchar(10) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `heure` varchar(8) NOT NULL,
  PRIMARY KEY (`Id_Rapport`),
  KEY `Id_Rapport` (`Id_Rapport`),
  KEY `Id_Employe` (`Id_Employe`),
  KEY `Id_Rapport_2` (`Id_Rapport`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `rapport`
--

INSERT INTO `rapport` (`Id_Rapport`, `Id_Employe`, `auteur`, `Memo`, `date`, `titre`, `heure`) VALUES
(1, 'emall', 'bouhe', 'Orabank Mauritanie (ex BACIM Bank) a Ã©tÃ© crÃ©Ã©e fin 2001 avec un capital de 1 000 000 000 dâ€™ouguiyas. Depuis son acquisition par le groupe ECP,  ce capital qui nâ€™a cessÃ© dâ€™augmenter est passÃ© Ã  6 921 350 000 dâ€™ouguiyas en 2012. \r\nGrÃ¢ce Ã  cette intÃ©gration, la banque a Ã©tÃ© recapitalisÃ©e et a changÃ© sa dÃ©nomination sociale pour devenir Â« Orabank Mauritanie Â» Ã  partir du 30 Septembre 2012. Le capital de la banque est dÃ©tenu Ã  hauteur de 97% par ECP et Oragroup SA.\r\nOrabank Mauritanie sâ€™appuie sur un effectif de 97 personnes et dispose de 6 agences dont 3 dans la capitale Nouakchott, une Ã  Nouadhibou (capitale Ã©conomique), une Ã  kiffa et une Ã  NÃ©ma Ã  lâ€™Est du pays. Orabank Mauritanie est une banque commerciale dont les activitÃ©s sont essentiellement tournÃ©es vers la clientÃ¨le des particuliers, professions libÃ©rales, PME, grandes entreprises et collectivitÃ©s locales.\r\nAvec une large gamme de produits bancaires, Orabank Mauritanie dispose dâ€™une offre de services qui lui permet de fidÃ©liser, de dÃ©velopper et de diversifier sa clientÃ¨le. La qualitÃ© de ces services permet aujourdâ€™hui Ã  la banque dâ€™envisager lâ€™avenir avec plus de sÃ©rÃ©nitÃ© et dâ€™assurance.\r\n', '04-07-2016', 'Orabank', '05:56'),
(2, 'emall', 'bouhe', 'La phase de conception dâ€™un systÃ¨me dâ€™information nÃ©cessite des mÃ©thodes permettant de mettre en place un modÃ¨le sur lequel on va s''appuyer. La modÃ©lisation consiste Ã  crÃ©er une reprÃ©sentation virtuelle d''une rÃ©alitÃ© de faÃ§on Ã  faire ressortir les points auxquels on s''intÃ©resse.\r\nCe type de mÃ©thode est appelÃ© analyse. Il en existe plusieurs, celle utilisÃ©e au cours de ce stage, sâ€™appuie sur la mÃ©thode MERISE. \r\nElle permet la conception, le dÃ©veloppement et la rÃ©alisation de projets informatiques. \r\nLe but de cette mÃ©thode est d''arriver Ã  concevoir un systÃ¨me d''information. La mÃ©thode Merise  est basÃ©e sur la sÃ©paration des donnÃ©es et des traitements Ã  effectuer en plusieurs modÃ¨les conceptuels et physiques. Elle permet une longÃ©vitÃ© au modÃ¨le.\r\n', '04-07-2016', 'Conception', '06:02'),
(3, 'emall', 'bouhe', 'MERISE (MÃ©thode d''Ã‰tude et de RÃ©alisation Informatique pour les SystÃ¨mes d''Entreprise) est certainement le langage de spÃ©cification le plus rÃ©pandu dans la communautÃ© de l''informatique des systÃ¨mes d''information, et plus particuliÃ¨rement dans le domaine des bases de donnÃ©es. Une reprÃ©sentation Merise permet de valider des choix par rapport aux objectifs, de quantifier les solutions retenues, de mettre en Å“uvre des techniques d''optimisation et enfin de guider jusqu''Ã  l''implÃ©mentation.\r\nUn des concepts clÃ©s de la mÃ©thode Merise est la sÃ©paration des donnÃ©es et des traitements.\r\n\r\nMerise propose une dÃ©marche, dite par niveaux, dans laquelle il s''agit de hiÃ©rarchiser les prÃ©occupations de modÃ©lisation qui sont de trois ordres : la conception, l''organisation et la technique. En effet, pour aborder la modÃ©lisation d''un systÃ¨me, il convient de l''analyser en premier lieu de faÃ§on globale et de se concentrer sur sa fonction : c''est-Ã -dire de s''interroger sur ce qu''il fait avant de dÃ©finir comment il le fait. Ces niveaux de modÃ©lisation sont organisÃ©s dans une double approche donnÃ©es/traitements. ', '04-07-2016', 'Merise', '06:05'),
(4, 'emall', 'bouhe', 'Power AMC est un logiciel pour la conception et de modÃ©lisation       graphique de modÃ¨le de base de donnÃ©es.il Ã©tait base sur la mÃ©thodologie Merise\r\nPrincipales fonctionnalitÃ©s\r\n C''est un logiciel qui Ã  Ã©tÃ© conÃ§u par SDP. Il s''appelait Ã  l''origine  AMC  Designo.  \r\nDepuis 1956, il est centre nÃ©vralgique du systÃ¨me Sybase. Power AMC vous permet de rÃ©aliser tous les types de modÃ¨les informatiques.  \r\nC''est l''un des seuls logiciels qui vous permet de travailler avec la mÃ©thode Merise qui est une mÃ©thode  d''analyse, de conception et de gestion de projet informatique adaptÃ©e pour gÃ©rer des projets internes, dans un domaine bien prÃ©cis.\r\n', '04-07-2016', 'Power AMC', '06:08'),
(5, 'ahmed', 'ahmed', 'Notepad++ est un programme conÃ§u spÃ©cifiquement pour l''Ã©dition de code source.il est compatible avec plusieurs langage de programmation. EntiÃ¨rement codÃ© en C++ avec win32api et STL, il utilise Scintilla comme une de ses composantes. Pour Ã©viter les erreurs ou juste pour mettre en Ã©vidence certaines lignes de code, il est possible de faire des colorations syntaxiques et des reliefs syntaxiques. Chaque utilisateur peut du reste dÃ©finir le langage qu''il veut utiliser.', '04-07-2016', 'Notepad++', '06:13'),
(6, 'ahmed', 'ahmed', 'PHP est un langage de script. Outil que lâ€™on utilise gÃ©nÃ©ralement pour crÃ©er des pages web dynamiques. PHP est Rapide, Gratuit, Facile Ã  utiliser, Fonctionne sur de nombreux systÃ¨mes dâ€™exploitation, Large assistance technique, ConÃ§u pour supporter les bases de donnÃ©es, Configurable.\r\nPHP (officiellement, ce sigle est un acronyme rÃ©cursif pour "PHP: Hypertext Preprocessor") est un langage de scripts gÃ©nÃ©raliste, Open Source, et spÃ©cialement conÃ§u pour le dÃ©veloppement d''applications web. Il peut Ãªtre intÃ©grÃ© facilement Ã  vos pages HTML.\r\nLe code PHP que vous allez insÃ©rer dans vos pages WEB sera repÃ©rÃ© par un serveur WEB (si il est muni de l''extension PHP) qu''il l''enverra Ã  PHP pour l''interprÃ©ter (je parle bien d''interprÃ©tation et non de compilation).\r\n', '04-07-2016', 'PHP', '06:14'),
(7, 'ahmed', 'ahmed', 'HTML est le langage universel utilisÃ© pour communiquer sur le Web.\r\nSi PHP rÃ©alise les traitements et interactions avec MySQL, câ€™est le langage HTML qui, au final, permet de mettre en forme les diffÃ©rents Ã©crans de lâ€™application, dâ€™afficher des images, des tableaux ou des formulaires. Tout ce qui relÃ¨ve de lâ€™affichage lui incombe.\r\nL''HyperText Markup Language (HTML) (littÃ©ralement LANGAGE HYPERTEXTE A BALISES) est un langage Ã  balises utilisÃ© pour la crÃ©ation de contenu et la structuration sÃ©mantique des pages web. Une page web est comprise de nombreux Ã©lÃ©ments HTML, chacun de ces Ã©lÃ©ments a un sens particulier dans le contexte de la page. Certains Ã©lÃ©ments se suffisent Ã  eux-mÃªmes, tandis que d''autres doivent Ãªtre imbriquÃ©s pour crÃ©er une structure de plus en plus complexe afin d''accueillir votre contenu. Les navigateurs Web interprÃ¨tent le HTML pour construire le contenu de la page, et ils interprÃ¨tent le code HTML en relation avec le code CSS pour l''apparence du contenu.\r\nLes balises HTML permettent dâ€™indiquer la faÃ§on dont doit Ãªtre prÃ©sentÃ©  le document et les liens quâ€™il Ã©tablit avec dâ€™autres documents.\r\n', '04-07-2016', 'HTML', '06:15'),
(8, 'ahmed', 'ahmed', 'Il sâ€™agit dâ€™une interface graphique dont la base de donnÃ©es est indÃ©pendante de celle  dâ€™Orabank.\r\nâ€¢	Objectif :\r\n        -Collection lâ€™activitÃ© quotidienne de chargÃ© clientÃ¨les\r\n        -Permettre aux chargÃ©s clientÃ¨les dâ€™envoyer le rapport quotidien Ã  leur supÃ©rieur\r\n        -Permettre aux directeurs de rÃ©pondre par commentaire aux rapports de chargÃ© clientÃ¨les\r\nâ€¢	CaractÃ©ristique :\r\n        -Une application client/serveur\r\n        -CrÃ©er par langage PHP\r\n        -Base de donnÃ©es indÃ©pendantes pour les bases de donnÃ©es de l''entreprise\r\nâ€¢	Profils dâ€™utilisation :\r\n        -Administrateur  qui permet de crÃ©er un compte pou chaque utilisateur de cette application et peut commenter sur les rapports reÃ§us\r\n        -Directeur quelconque peut aussi commenter les rapports reÃ§us\r\n        -ChargÃ© clientÃ¨les   crÃ©er un rapport globale qui contient les besoins et les problÃ¨mes de    son groupe de clients et aussi commenter v', '04-07-2016', 'Cahier des charges', '06:21'),
(9, 'ahmed', 'ahmed', 'Le modÃ¨le conceptuel des donnÃ©es (MCD) dÃ©crit les entitÃ©s du monde rÃ©el, en termes d''objets, de propriÃ©tÃ©s et de relations, indÃ©pendamment de toute technique d''organisation et d''implantation des donnÃ©es. Ce modÃ¨le se concrÃ©tise par un schÃ©ma entitÃ©s-associations reprÃ©sentant la structure du systÃ¨me d''information, du point de vue des donnÃ©es', '04-07-2016', 'ModÃ©le Conceptul de donneÃ©s', '06:45'),
(10, 'ahmed', 'ahmed', 'Le modÃ¨le logique des donnÃ©es (MLD) prÃ©cise le modÃ¨le conceptuel par des choix    organisationnels. il s''agit d''une transcription (Ã©galement appelÃ©e  dÃ©rivation) du MCD dans un formalisme adaptÃ© Ã  une  implÃ©mentation ultÃ©rieure,  au niveau physique, sous forme de  base de donnÃ©es relationnelle ou rÃ©seau. Les chois techniques dâ€™implÃ©mentation (choix dâ€™un SGBD) ne seront effectuÃ©s quâ€™au niveau suivant.', '04-07-2016', 'ModÃ©le Logique de donnÃ©es', '06:46'),
(11, 'ahmed', 'ahmed', 'Le modÃ¨le physique des donnÃ©es (MPD) permet d''Ã©tablir la maniÃ¨re concrÃ¨te dont le systÃ¨me sera mis en place (SGBD retenu).', '04-07-2016', 'MedÃ©le Physique de donnÃ©es', '06:46');

-- --------------------------------------------------------

--
-- Structure de la table `rapport_lu`
--

CREATE TABLE IF NOT EXISTS `rapport_lu` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Id_Emplye` varchar(30) NOT NULL,
  `Id_Rapport` int(10) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Contenu de la table `rapport_lu`
--

INSERT INTO `rapport_lu` (`Id`, `Id_Emplye`, `Id_Rapport`) VALUES
(1, 'vave', 8),
(2, 'vave', 7),
(3, 'vave', 5),
(4, 'vave', 4),
(90, 'sidi', 8),
(91, 'sidi', 7),
(92, 'sidi', 7),
(93, 'sidi', 6);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`Id_Rapport`) REFERENCES `rapport` (`Id_Rapport`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commentaire_ibfk_2` FOREIGN KEY (`Id_Employe`) REFERENCES `employe` (`login`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `rapport`
--
ALTER TABLE `rapport`
  ADD CONSTRAINT `rapport_ibfk_1` FOREIGN KEY (`Id_Employe`) REFERENCES `employe` (`login`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
