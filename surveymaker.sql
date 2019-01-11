-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 11 Janvier 2019 à 21:03
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `surveymaker`
--

-- --------------------------------------------------------

--
-- Structure de la table `enquete`
--

CREATE TABLE IF NOT EXISTS `enquete` (
  `id_enquete` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_enquete`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `enquetes`
--

CREATE TABLE IF NOT EXISTS `enquetes` (
  `id_enquete` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_enquete`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id_question` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) DEFAULT NULL,
  `question_id_param` int(11) DEFAULT NULL,
  `reponse_id_param` int(11) DEFAULT NULL,
  `sondage_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  PRIMARY KEY (`id_question`),
  KEY `fk_question_sondage1` (`sondage_id`),
  KEY `fk_question_section1` (`section_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- Contenu de la table `question`
--

INSERT INTO `question` (`id_question`, `question`, `question_id_param`, `reponse_id_param`, `sondage_id`, `section_id`) VALUES
(1, 'Quelle est la profession de ton tutel', NULL, NULL, 6, 18),
(2, 'quel est votre nom', NULL, NULL, 6, 18),
(3, 'quel est votre promotion', NULL, NULL, 6, 18),
(4, 'comment jugez-vous les frais acadÃ©miques', NULL, NULL, 6, 19),
(8, 'quel est votre age', NULL, NULL, 8, 22),
(9, 'quel est votre profession', NULL, NULL, 8, 22),
(10, 'combien de mega achetez-vous chaque jours', NULL, NULL, 8, 23),
(11, 'quel tÃ©lÃ©phone utilisez-vous', NULL, NULL, 8, 23),
(12, 'quel est votre nom', NULL, NULL, 9, 24),
(13, 'quel est votre profession', NULL, NULL, 9, 24),
(14, 'quelle formation avez-vous deja faite jusque ', NULL, NULL, 9, 25),
(15, 'que voudriez-vous faire dans votre carriÃ¨re de developpeur', NULL, NULL, 9, 26),
(16, 'qu''est-ce qui vous a motivÃ© Ã  apprendre la programmation', NULL, NULL, 9, 27),
(17, 'Quel est votre Ã¢ge?', NULL, NULL, 10, 28),
(18, 'Quelle est votre profession?', NULL, NULL, 10, 28),
(19, 'Comment jugez-vous la sÃ©curitÃ© dans votre milieu?', NULL, NULL, 10, 29),
(20, 'Vous sentez-vous en sÃ©curitÃ© de marcher pendant la nuit?', NULL, NULL, 10, 29),
(21, 'Qui assure la sÃ©curitÃ© dans votre village?', NULL, NULL, 10, 30),
(22, 'Vous sentez-vous en confiance avec l''organisation ou la personne qui assure la sÃ©curitÃ© dans votre village?', NULL, NULL, 10, 30),
(23, 'Si non, combien de fois vous Ãªtes-vous fait agressÃ© par la personne sensÃ© assurer votre sÃ©curitÃ©?', NULL, NULL, 10, 30),
(24, 'quel est votre nom', NULL, NULL, 11, 31),
(25, 'quelle est votre profession', NULL, NULL, 11, 31),
(26, 'quel est votre unoversitÃ©', NULL, NULL, 11, 31),
(27, 'dans quelle facultÃ© Ãªtes-vous', NULL, NULL, 11, 31),
(28, 'connaissez vous le prof wass misonia ', NULL, NULL, 11, 31),
(30, 'quelle est votre profession', NULL, NULL, 11, 31),
(31, 'quelle est votre universitÃ©', 30, 81, 11, 31),
(32, 'your name', NULL, NULL, 12, 32),
(33, '', NULL, NULL, 12, 32),
(34, 'your age', NULL, NULL, 12, 32),
(35, '', NULL, NULL, 12, 32),
(36, '', NULL, NULL, 12, 32),
(37, '', NULL, NULL, 12, 32),
(38, '', NULL, NULL, 12, 32),
(39, '', NULL, NULL, 12, 32),
(40, '', NULL, NULL, 12, 32),
(41, 'quel est votre sexe', NULL, NULL, 12, 32),
(42, 'quel est votre nom', NULL, NULL, 13, 35),
(43, 'quel est votre etat civil', NULL, NULL, 13, 35),
(44, 'quelle est votre universitÃ©', NULL, NULL, 13, 35),
(45, '', 0, 93, 13, 35),
(46, 'quelle est votre profession', NULL, NULL, 13, 35),
(47, 'quel est votre sexe', NULL, NULL, 13, 36),
(48, 'avez-vous d''enseignant prÃ©fÃ©rÃ©', NULL, NULL, 13, 36),
(49, 'vjhgjhg', NULL, NULL, 13, 35),
(50, 'vjhgjhg', NULL, NULL, 13, 35),
(51, 'vjhgjhg', NULL, NULL, 13, 35),
(52, 'vjhgjhg', NULL, NULL, 13, 35),
(53, 'vjhgjhg', NULL, NULL, 13, 35),
(54, 'vjhgjhg', NULL, NULL, 13, 35),
(55, 'qu''est ce que tu px me reprocher par rapport la gentillesse', NULL, NULL, 14, 40),
(56, 'qu''est ce que tu px me reprocher par rapport la gentillesse', NULL, NULL, 14, 40),
(57, 'qu''est ce que tu px me reprocher par rapport  a la gentillesse', NULL, NULL, 14, 40),
(58, 'est ce que je suis un homme integre', NULL, NULL, 14, 41),
(59, 'est ce que je suis un homme integre', NULL, NULL, 14, 41),
(60, 'est ce que je suis simple ', NULL, NULL, 14, 42),
(61, 'est ce que je suis accessible', NULL, NULL, 14, 43),
(62, 'quel est votre age', NULL, NULL, 15, 44),
(63, 'quelle est votre profession', 62, 0, 15, 44),
(64, ' etes-vous de quel universitÃ©', 63, 128, 15, 44),
(65, 'quel est votre nom', NULL, NULL, 18, 49),
(66, 'quel est votre nom', NULL, NULL, 18, 49),
(67, 'quel est votre age', NULL, NULL, 18, 50),
(68, 'commune', NULL, NULL, 20, 53),
(69, 'quartier', NULL, NULL, 20, 53),
(70, 'combien y a-t-il des personnes dans la maison', NULL, NULL, 20, 54),
(71, 'combien y a-t-il de femmes dans la maison', NULL, NULL, 20, 54),
(72, 'combien y a-t-il d''hommesdans la maison', NULL, NULL, 20, 54),
(73, 'quel est l''age de l''enfant le plus agÃ©', NULL, NULL, 20, 54),
(74, 'quel est l''age de l''enfant le moins agÃ©', NULL, NULL, 20, 54),
(75, 'a', NULL, NULL, 21, 55),
(76, 'a', NULL, NULL, 21, 56),
(77, 'question multiple', NULL, NULL, 22, 57),
(78, 'question unique', NULL, NULL, 22, 57),
(79, 'Sexe', NULL, NULL, 23, 58),
(80, 'Niveau d''Ã©tude', NULL, NULL, 23, 58),
(81, 'Profession', NULL, NULL, 23, 58),
(82, 'Pourquoi avez-vous choisi CPN pour votre formation', NULL, NULL, 23, 59),
(83, 'Comment jugez-vous votre niveau d''anglais parlÃ©', NULL, NULL, 23, 59),
(84, 'Comment jugez-vous votre niveau d''anglais ecrit', NULL, NULL, 23, 59),
(85, 'Comment jugez-vous votre niveau d''anglais lire', NULL, NULL, 23, 59),
(86, 'Comment jugez-vous votre niveau d''anglais ecoutÃ©', NULL, NULL, 23, 59),
(87, 'Sexe', NULL, NULL, 24, 60),
(88, 'Niveau d''Ã©tude', NULL, NULL, 24, 60),
(89, 'Est-ce que cette maladie vous rend faible moralement', NULL, NULL, 24, 61),
(90, 'Comment jugez-vous la faÃ§on dont on vous traite Ã  la maison', NULL, NULL, 24, 62),
(91, 'Comment jugez-vous la faÃ§on dont on vous traite Ã  la maison', NULL, NULL, 24, 62),
(92, 'Comment jugez-vous la faÃ§on dont on vous traite au centre hospitalier', NULL, NULL, 24, 63);

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE IF NOT EXISTS `reponse` (
  `id_reponse` int(11) NOT NULL AUTO_INCREMENT,
  `reponse` varchar(5000) DEFAULT 'rpsNULL',
  `question_id` int(11) NOT NULL,
  `enquetes_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_reponse`),
  KEY `fk_reponse_question1` (`question_id`),
  KEY `fk_reponse_enquetes1` (`enquetes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=317 ;

--
-- Contenu de la table `reponse`
--

INSERT INTO `reponse` (`id_reponse`, `reponse`, `question_id`, `enquetes_id`, `user_id`) VALUES
(46, 'karl', 12, NULL, NULL),
(47, 'etudiant', 13, NULL, NULL),
(48, 'formation academique', 14, NULL, NULL),
(49, 'crÃ©Ã©r votre propre boite', 15, NULL, NULL),
(50, 'vos parents', 16, NULL, NULL),
(51, 'PrÃ©mices', 24, NULL, NULL),
(52, 'libÃ©rale', 25, NULL, NULL),
(53, 'ULPGL', 26, NULL, NULL),
(54, 'FSTA', 27, NULL, NULL),
(55, 'Entre 20 ans et 25 ans', 17, NULL, NULL),
(56, 'Agent de l''Etat', 18, NULL, NULL),
(57, 'bonne', 19, NULL, NULL),
(58, 'Oui', 20, NULL, NULL),
(59, 'Personne', 21, NULL, NULL),
(60, 'oui', 22, NULL, NULL),
(61, 'Moins de 2 fois', 23, NULL, NULL),
(62, 'kfjg,dfkgsd,', 55, NULL, NULL),
(63, 'uhbuhbuh', 56, NULL, NULL),
(64, 'jkfgfdj', 57, NULL, NULL),
(65, ',ofkfmlsdk', 58, NULL, NULL),
(66, 'kvfv,erÃ¹k', 59, NULL, NULL),
(67, 'kfvljfdkcmlokfk', 60, NULL, NULL),
(68, 'okfsdvsdvlm', 61, NULL, NULL),
(69, 'Entre 20 ans et 25 ans', 17, NULL, NULL),
(70, 'Agent de l''Etat', 18, NULL, NULL),
(71, 'bonne', 19, NULL, NULL),
(72, 'Oui', 20, NULL, NULL),
(73, 'Personne', 21, NULL, NULL),
(74, 'non', 22, NULL, NULL),
(75, 'Moins de 2 fois', 23, NULL, NULL),
(76, 'Entre 20 ans et 25 ans', 17, NULL, NULL),
(77, 'Agent de l''Etat', 18, NULL, NULL),
(78, 'Moins bonne', 19, NULL, NULL),
(79, 'Oui', 20, NULL, NULL),
(80, 'Personne', 21, NULL, NULL),
(81, 'oui', 22, NULL, NULL),
(82, 'entre 2 fois et 4 fois', 23, NULL, NULL),
(83, 'jhkjh', 12, NULL, NULL),
(84, 'etudiant', 13, NULL, NULL),
(85, 'formation academique', 14, NULL, NULL),
(86, 'crÃ©Ã©r votre propre boite', 15, NULL, NULL),
(87, 'vos visions', 16, NULL, NULL),
(88, 'Entre 20 ans et 25 ans', 17, NULL, NULL),
(89, 'Agent de l''Etat', 18, NULL, NULL),
(90, 'MÃ©diocre', 19, NULL, NULL),
(91, 'Oui', 20, NULL, NULL),
(92, 'Personne', 21, NULL, NULL),
(93, 'oui', 22, NULL, NULL),
(94, 'Moins de 2 fois', 23, NULL, NULL),
(95, 'Moins de 20 ans', 17, NULL, NULL),
(96, 'Array', 18, NULL, NULL),
(97, 'TrÃ¨s bonne', 19, NULL, NULL),
(98, 'Oui', 20, NULL, NULL),
(99, 'Array', 21, NULL, NULL),
(100, 'oui', 22, NULL, NULL),
(101, 'Moins de 2 fois', 23, NULL, NULL),
(102, 'Moins de 20 ans', 17, NULL, NULL),
(103, 'Array', 18, NULL, NULL),
(104, 'Moins bonne', 19, NULL, NULL),
(105, 'Oui', 20, NULL, NULL),
(106, 'Array', 21, NULL, NULL),
(107, 'non', 22, NULL, NULL),
(108, 'Moins de 2 fois', 23, NULL, NULL),
(109, 'rpsNULL', 17, NULL, NULL),
(110, 'rpsNULL', 18, NULL, NULL),
(111, 'rpsNULL', 19, NULL, NULL),
(112, 'rpsNULL', 20, NULL, NULL),
(113, 'rpsNULL', 21, NULL, NULL),
(114, 'rpsNULL', 22, NULL, NULL),
(115, 'rpsNULL', 23, NULL, NULL),
(116, 'rpsNULL', 17, NULL, NULL),
(117, 'rpsNULL', 18, NULL, NULL),
(118, 'rpsNULL', 19, NULL, NULL),
(119, 'rpsNULL', 20, NULL, NULL),
(120, 'rpsNULL', 21, NULL, NULL),
(121, 'rpsNULL', 22, NULL, NULL),
(122, 'rpsNULL', 23, NULL, NULL),
(123, 'Array', 18, NULL, NULL),
(124, 'Array', 21, NULL, NULL),
(125, 'Moins de 20 ans', 17, NULL, NULL),
(126, 'rpsNULL', 18, NULL, NULL),
(127, 'Moins de 20 ans', 17, NULL, NULL),
(128, 'rpsNULL', 18, NULL, NULL),
(129, 'bonne', 19, NULL, NULL),
(130, 'Non', 20, NULL, NULL),
(131, 'rpsNULL', 21, NULL, NULL),
(132, 'oui', 22, NULL, NULL),
(133, 'Moins de 2 fois', 23, NULL, NULL),
(134, 'rpsNULL', 65, NULL, NULL),
(135, 'rpsNULL', 66, NULL, NULL),
(136, '25-30', 67, NULL, NULL),
(137, 'Moins de 20 ans', 17, NULL, NULL),
(138, 'rpsNULL', 18, NULL, NULL),
(139, 'Moins bonne', 19, NULL, NULL),
(140, 'Oui', 20, NULL, NULL),
(141, 'rpsNULL', 21, NULL, NULL),
(142, 'non', 22, NULL, NULL),
(143, 'entre 2 fois et 4 fois', 23, NULL, NULL),
(144, 'Moins de 20 ans', 17, NULL, NULL),
(145, 'rpsNULL', 18, NULL, NULL),
(146, 'MÃ©diocre', 19, NULL, NULL),
(147, 'Oui', 20, NULL, NULL),
(148, 'rpsNULL', 21, NULL, NULL),
(149, 'oui', 22, NULL, NULL),
(150, 'Moins de 2 fois', 23, NULL, NULL),
(151, 'rpsNULL', 12, NULL, NULL),
(152, 'etudiant', 13, NULL, NULL),
(153, 'formation academique', 14, NULL, NULL),
(154, 'crÃ©Ã©r votre propre boite', 15, NULL, NULL),
(155, 'vos parents', 16, NULL, NULL),
(156, 'rpsNULL', 12, NULL, NULL),
(157, 'eleve', 13, NULL, NULL),
(158, 'autoformation', 14, NULL, NULL),
(159, 'travailler dans les grandes entreprises du mo', 15, NULL, NULL),
(160, 'vos visions', 16, NULL, NULL),
(161, 'rpsNULL', 12, NULL, NULL),
(162, 'eleve', 13, NULL, NULL),
(163, 'cours en ligne', 14, NULL, NULL),
(164, 'travailler dans les grandes entreprises du mo', 15, NULL, NULL),
(165, 'vos visions', 16, NULL, NULL),
(166, 'goma', 68, NULL, NULL),
(167, 'mabanga', 69, NULL, NULL),
(168, 'rpsNULL', 74, NULL, NULL),
(169, 'rpsNULL', 70, NULL, NULL),
(170, 'rpsNULL', 71, NULL, NULL),
(171, 'rpsNULL', 72, NULL, NULL),
(172, 'rpsNULL', 73, NULL, NULL),
(173, 'goma', 68, NULL, NULL),
(174, 'mabanga', 69, NULL, NULL),
(175, 'rpsNULL', 74, NULL, NULL),
(176, 'rpsNULL', 70, NULL, NULL),
(177, 'rpsNULL', 71, NULL, NULL),
(178, 'rpsNULL', 72, NULL, NULL),
(179, 'rpsNULL', 73, NULL, NULL),
(180, 'karisimbi', 68, NULL, NULL),
(181, 'le volcan', 69, NULL, NULL),
(182, 'rpsNULL', 74, NULL, NULL),
(183, 'rpsNULL', 70, NULL, NULL),
(184, 'rpsNULL', 71, NULL, NULL),
(185, 'rpsNULL', 72, NULL, NULL),
(186, 'rpsNULL', 73, NULL, NULL),
(187, 'rpsNULL', 12, NULL, NULL),
(188, 'etudiant', 13, NULL, NULL),
(189, 'formation academique', 14, NULL, NULL),
(190, 'crÃ©Ã©r votre propre boite', 15, NULL, NULL),
(191, 'vos visions', 16, NULL, NULL),
(192, 'rpsNULL', 12, NULL, NULL),
(193, 'agent de l''etat', 13, NULL, NULL),
(194, 'cours en ligne', 14, NULL, NULL),
(195, 'devenir consultant privÃ©', 15, NULL, NULL),
(196, 'vos parents', 16, NULL, NULL),
(197, 'rpsNULL', 77, NULL, NULL),
(198, 'a', 78, NULL, NULL),
(199, 'rpsNULL', 77, NULL, NULL),
(200, 'b', 78, NULL, NULL),
(201, 'rpsNULL', 77, NULL, NULL),
(202, 'a', 78, NULL, NULL),
(203, 'rpsNULL', 77, NULL, NULL),
(204, 'c', 78, NULL, NULL),
(205, 'rpsNULL', 77, NULL, NULL),
(206, 'a', 78, NULL, NULL),
(207, 'rpsNULL', 77, NULL, NULL),
(208, 'b', 78, NULL, NULL),
(209, 'M', 79, NULL, NULL),
(210, 'Grade', 80, NULL, NULL),
(211, 'Etudiant', 81, NULL, NULL),
(212, 'La qualitÃ© de la formation', 82, NULL, NULL),
(213, 'Bas', 83, NULL, NULL),
(214, 'Bas', 84, NULL, NULL),
(215, 'Moyen', 85, NULL, NULL),
(216, 'Moyen', 86, NULL, NULL),
(217, 'M', 79, NULL, NULL),
(218, 'Grade', 80, NULL, NULL),
(219, 'Etudiant', 81, NULL, NULL),
(220, 'La qualitÃ© de la formation', 82, NULL, NULL),
(221, 'Bas', 83, NULL, NULL),
(222, 'Bas', 84, NULL, NULL),
(223, 'Moyen', 85, NULL, NULL),
(224, 'Moyen', 86, NULL, NULL),
(225, 'F', 79, NULL, NULL),
(226, 'Grade', 80, NULL, NULL),
(227, 'Travailleur', 81, NULL, NULL),
(228, 'La gratuitÃ© de la formation', 82, NULL, NULL),
(229, 'Moyen', 83, NULL, NULL),
(230, 'Moyen', 84, NULL, NULL),
(231, 'Moyen', 85, NULL, NULL),
(232, 'Moyen', 86, NULL, NULL),
(233, 'M', 79, NULL, NULL),
(234, 'diplome', 80, NULL, NULL),
(235, 'Travailleur', 81, NULL, NULL),
(236, 'La qualitÃ© de la formation', 82, NULL, NULL),
(237, 'Moyen', 83, NULL, NULL),
(238, 'ElevÃ©', 84, NULL, NULL),
(239, 'ElevÃ©', 85, NULL, NULL),
(240, 'Bas', 86, NULL, NULL),
(241, 'F', 79, NULL, NULL),
(242, 'Licence', 80, NULL, NULL),
(243, 'CommerÃ§ant', 81, NULL, NULL),
(244, 'La gratuitÃ© de la formation', 82, NULL, NULL),
(245, 'Moyen', 83, NULL, NULL),
(246, 'Bas', 84, NULL, NULL),
(247, 'ElevÃ©', 85, NULL, NULL),
(248, 'Moyen', 86, NULL, NULL),
(249, 'a', 75, NULL, NULL),
(250, 'a', 76, NULL, NULL),
(251, 'a', 75, NULL, NULL),
(252, 'b', 76, NULL, NULL),
(253, 'b', 75, NULL, NULL),
(254, 'a', 76, NULL, NULL),
(255, 'a', 75, NULL, NULL),
(256, 'a', 76, NULL, NULL),
(257, 'M', 87, NULL, NULL),
(258, 'Diplome', 88, NULL, NULL),
(259, 'Oui', 89, NULL, NULL),
(260, 'Bonne', 90, NULL, NULL),
(261, 'Bonne', 91, NULL, NULL),
(262, 'Bonne', 92, NULL, NULL),
(263, 'F', 87, NULL, NULL),
(264, 'Licence', 88, NULL, NULL),
(265, 'Non', 89, NULL, NULL),
(266, 'Mauvaise', 90, NULL, NULL),
(267, 'Bonne', 91, NULL, NULL),
(268, 'Moyenne', 92, NULL, NULL),
(269, 'M', 87, NULL, NULL),
(270, 'Licence', 88, NULL, NULL),
(271, 'Oui', 89, NULL, NULL),
(272, 'Moyenne', 90, NULL, NULL),
(273, 'Mauvaise', 91, NULL, NULL),
(274, 'Moyenne', 92, NULL, NULL),
(275, 'M', 87, NULL, NULL),
(276, 'Licence', 88, NULL, NULL),
(277, 'Oui', 89, NULL, NULL),
(278, 'Moyenne', 90, NULL, NULL),
(279, 'Moyenne', 91, NULL, NULL),
(280, 'Bonne', 92, NULL, NULL),
(281, 'F', 87, NULL, NULL),
(282, 'Diplome', 88, NULL, NULL),
(283, 'Non', 89, NULL, NULL),
(284, 'Mauvaise', 90, NULL, NULL),
(285, 'Moyenne', 91, NULL, NULL),
(286, 'Bonne', 92, NULL, NULL),
(287, 'M', 87, NULL, NULL),
(288, 'Au-delÃ ', 88, NULL, NULL),
(289, 'Oui', 89, NULL, NULL),
(290, 'Moyenne', 90, NULL, NULL),
(291, 'Moyenne', 91, NULL, NULL),
(292, 'Bonne', 92, NULL, NULL),
(293, 'M', 87, NULL, NULL),
(294, 'Grade', 88, NULL, NULL),
(295, 'Oui', 89, NULL, NULL),
(296, 'Mauvaise', 90, NULL, NULL),
(297, 'Moyenne', 91, NULL, NULL),
(298, 'Moyenne', 92, NULL, NULL),
(299, 'M', 87, NULL, NULL),
(300, 'Au-delÃ ', 88, NULL, NULL),
(301, 'Non', 89, NULL, NULL),
(302, 'Mauvaise', 90, NULL, NULL),
(303, 'Bonne', 91, NULL, NULL),
(304, 'Moyenne', 92, NULL, NULL),
(305, 'F', 87, NULL, NULL),
(306, 'Pas de diplome', 88, NULL, NULL),
(307, 'Oui', 89, NULL, NULL),
(308, 'Mauvaise', 90, NULL, NULL),
(309, 'Mauvaise', 91, NULL, NULL),
(310, 'Moyenne', 92, NULL, NULL),
(311, 'F', 87, NULL, NULL),
(312, 'Grade', 88, NULL, NULL),
(313, 'Non', 89, NULL, NULL),
(314, 'Mauvaise', 90, NULL, NULL),
(315, 'Bonne', 91, NULL, NULL),
(316, 'Bonne', 92, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `reponse_multiple`
--

CREATE TABLE IF NOT EXISTS `reponse_multiple` (
  `id_reponse_multiple` int(11) NOT NULL AUTO_INCREMENT,
  `valeur` varchar(255) DEFAULT NULL,
  `reponse_id` int(11) NOT NULL,
  PRIMARY KEY (`id_reponse_multiple`),
  KEY `fk_reponse_multiple_reponse` (`reponse_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Contenu de la table `reponse_multiple`
--

INSERT INTO `reponse_multiple` (`id_reponse_multiple`, `valeur`, `reponse_id`) VALUES
(1, 'CommerÃ§ant', 128),
(2, 'MenagÃ¨re', 128),
(3, 'Enseignant', 128),
(4, 'Agent de l''Etat', 128),
(5, 'Les FARDC', 131),
(6, 'La police', 131),
(7, 'la Monusco', 131),
(8, 'Personne', 131),
(9, 'Aksenti', 134),
(10, 'Oscar', 135),
(11, 'CommerÃ§ant', 138),
(12, 'MenagÃ¨re', 138),
(13, 'Enseignant', 138),
(14, 'Agent de l''Etat', 138),
(15, 'Les FARDC', 141),
(16, 'La police', 141),
(17, 'la Monusco', 141),
(18, 'Personne', 141),
(19, 'CommerÃ§ant', 145),
(20, 'MenagÃ¨re', 145),
(21, 'Enseignant', 145),
(22, 'Agent de l''Etat', 145),
(23, 'Les FARDC', 148),
(24, 'La police', 148),
(25, 'la Monusco', 148),
(26, 'Personne', 148),
(27, 'karl', 151),
(28, 'karl', 156),
(29, 'Eric', 161),
(30, '4', 168),
(31, '3', 169),
(32, '3', 170),
(33, '4', 171),
(34, '4', 172),
(35, '11', 175),
(36, '3', 176),
(37, '3', 177),
(38, '3', 178),
(39, '4', 179),
(40, '4', 182),
(41, '3', 183),
(42, '4', 184),
(43, '13', 185),
(44, '10', 186),
(45, 'karl', 187),
(46, 'Eric', 192),
(47, 'a', 197),
(48, 'b', 197),
(49, 'c', 197),
(50, 'a', 199),
(51, 'b', 199),
(52, 'c', 199),
(53, 'a', 201),
(54, 'b', 201),
(55, 'c', 201),
(56, 'a', 203),
(57, 'b', 203),
(58, 'c', 203),
(59, 'a', 205),
(60, 'b', 205),
(61, 'c', 205),
(62, 'a', 207),
(63, 'b', 207),
(64, 'c', 207);

-- --------------------------------------------------------

--
-- Structure de la table `reponse_proposee`
--

CREATE TABLE IF NOT EXISTS `reponse_proposee` (
  `id_reponse_proposee` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) DEFAULT NULL,
  `cle` varchar(45) DEFAULT NULL,
  `valeur` varchar(45) DEFAULT NULL,
  `question_id` int(11) NOT NULL,
  PRIMARY KEY (`id_reponse_proposee`),
  KEY `fk_reponse_proposee_question1` (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=209 ;

--
-- Contenu de la table `reponse_proposee`
--

INSERT INTO `reponse_proposee` (`id_reponse_proposee`, `type`, `cle`, `valeur`, `question_id`) VALUES
(1, 'radio', 'mAxHt', 'karl', 2),
(2, 'radio', 'KIPJG', 'pascal', 2),
(3, 'radio', 'UOclT', 'alvin', 2),
(4, 'radio', 'kZyTs', 'g1', 3),
(5, 'radio', 'fjfol', 'g2', 3),
(6, 'radio', 'KYgAI', 'g3', 3),
(7, 'radio', 'Havhj', 'tech1', 3),
(8, 'radio', 'NiXFz', 'tech2', 3),
(9, 'radio', 'NohfF', 'cher', 4),
(10, 'radio', 'fEtvW', 'moyen', 4),
(11, 'radio', 'cDsQm', 'moins cher', 4),
(12, 'text', 'sKQqG', '', 8),
(13, 'radio', 'njcmr', 'etudiant', 9),
(14, 'radio', 'rTfVl', 'enseignant', 9),
(15, 'radio', 'qCBya', 'sans emploi', 9),
(16, 'radio', 'aLvxg', '10', 10),
(17, 'radio', 'qNGCQ', '20', 10),
(18, 'radio', 'srSvQ', '50', 10),
(19, 'radio', 'YJmdt', '100', 10),
(20, 'radio', 'Michr', '500', 10),
(21, 'radio', 'zcpZB', '1024', 10),
(22, 'radio', 'xfIRN', 'itel', 11),
(23, 'radio', 'YkeLr', 'samsung', 11),
(24, 'radio', 'lOfRM', 'nokia', 11),
(25, 'radio', 'EPESD', 'iphone', 11),
(26, 'radio', 'wROuz', 'tecno', 11),
(27, 'text', 'NqMqQ', '', 12),
(28, 'radio', 'GFKDu', 'etudiant', 13),
(29, 'radio', 'GFKDu', 'eleve', 13),
(30, 'radio', 'GFKDu', 'agent de l''etat', 13),
(31, 'radio', 'GFKDu', 'travail pour son propre compte', 13),
(32, 'radio', 'GFKDu', 'employe', 13),
(33, 'radio', 'GFKDu', 'sans emploi', 13),
(34, 'radio', 'wmeIA', 'formation academique', 14),
(35, 'radio', 'wmeIA', 'autoformation', 14),
(36, 'radio', 'wmeIA', 'cours en ligne', 14),
(37, 'radio', 'wmeIA', 'aide d''un proche', 14),
(38, 'radio', 'KzYLN', 'crÃ©Ã©r votre propre boite', 15),
(39, 'radio', 'KzYLN', 'travailler dans les grandes entreprises du mo', 15),
(40, 'radio', 'KzYLN', 'devenir consultant privÃ©', 15),
(41, 'radio', 'mHhQX', 'vos parents', 16),
(42, 'radio', 'mHhQX', 'vos visions', 16),
(43, 'radio', 'mHhQX', 'votre entourage, amis, freres', 16),
(44, 'radio', 'mHhQX', 'un enseignant', 16),
(45, 'radio', 'kkMqx_17', 'Moins de 20 ans', 17),
(46, 'radio', 'kkMqx_17', 'Entre 20 ans et 25 ans', 17),
(47, 'radio', 'kkMqx_17', 'Entre 25 et 30 ans', 17),
(48, 'radio', 'kkMqx_17', 'Plus de 30 ans', 17),
(49, 'checkbox', 'zeyZb_18', 'CommerÃ§ant', 18),
(50, 'checkbox', 'zeyZb_18', 'MenagÃ¨re', 18),
(51, 'checkbox', 'zeyZb_18', 'Enseignant', 18),
(52, 'checkbox', 'zeyZb_18', 'Agent de l''Etat', 18),
(53, 'radio', 'RvcdA_19', 'TrÃ¨s bonne', 19),
(54, 'radio', 'RvcdA_19', 'bonne', 19),
(55, 'radio', 'RvcdA_19', 'Moins bonne', 19),
(56, 'radio', 'RvcdA_19', 'MÃ©diocre', 19),
(57, 'radio', 'iljFp_20', 'Oui', 20),
(58, 'radio', 'iljFp_20', 'Non', 20),
(59, 'checkbox', 'SlKvw_21', 'Les FARDC', 21),
(60, 'checkbox', 'SlKvw_21', 'La police', 21),
(61, 'checkbox', 'SlKvw_21', 'la Monusco', 21),
(62, 'checkbox', 'SlKvw_21', 'Personne', 21),
(63, 'radio', 'piMDH_22', 'oui', 22),
(64, 'radio', 'piMDH_22', 'non', 22),
(65, 'radio', 'StCMf_23', 'Moins de 2 fois', 23),
(66, 'radio', 'StCMf_23', 'entre 2 fois et 4 fois', 23),
(67, 'radio', 'StCMf_23', 'Plus de 4 fois', 23),
(68, 'text', 'ITRPX_24', '', 24),
(78, 'radio', 'ktpig_27', 'FSCG', 27),
(80, 'radio', 'qJlpp_30', 'Enseignant', 30),
(81, 'radio', 'qJlpp_30', 'etudiant', 30),
(82, 'radio', 'qJlpp_30', 'Agent de l''Etat', 30),
(83, 'radio', 'qJlpp_30', 'travail pour son propre compte', 30),
(84, 'radio', 'PsdzY_31', 'ULPGL', 31),
(85, 'radio', 'PsdzY_31', 'ISIG', 31),
(86, 'radio', 'PsdzY_31', 'ISC', 31),
(87, 'radio', 'PsdzY_31', 'ISA', 31),
(88, 'text', 'rmnVa_32', '', 32),
(89, 'number', 'WKnRK_34', '', 34),
(90, 'radio', 'pVMLN_41', 'M', 41),
(91, 'radio', 'pVMLN_41', 'F', 41),
(92, 'text', 'LbRbX_42', '', 42),
(93, 'radio', 'vafwi_43', 'mariÃ©', 43),
(94, 'radio', 'vafwi_43', 'celibataire', 43),
(95, 'radio', 'vafwi_43', 'divorce', 43),
(96, 'radio', 'vafwi_43', 'veuf', 43),
(97, 'radio', 'BzGiU_44', 'ULPGL', 44),
(98, 'radio', 'BzGiU_44', 'ISA', 44),
(99, 'radio', 'PTxAL_45', 'bhbjhhkj', 45),
(100, 'radio', 'PTxAL_45', 'bjbjk', 45),
(101, 'radio', 'LLZkd_46', 'enseignant', 46),
(102, 'radio', 'LLZkd_46', 'Agent de l''Etat', 46),
(103, 'radio', 'iJWeL_47', 'M', 47),
(104, 'radio', 'iJWeL_47', 'F', 47),
(105, 'radio', 'aWHjL_48', 'Oui', 48),
(106, 'radio', 'aWHjL_48', 'Non', 48),
(107, 'radio', 'eoTLC_49', 'bnvbvjhjh', 49),
(108, 'radio', 'eoTLC_49', 'ghgjhjgghjh', 49),
(109, 'radio', 'WdMcT_50', 'bnvbvjhjh', 50),
(110, 'radio', 'WdMcT_50', 'ghgjhjgghjh', 50),
(111, 'radio', 'ozGTx_51', 'bnvbvjhjh', 51),
(112, 'radio', 'ozGTx_51', 'ghgjhjgghjh', 51),
(113, 'radio', 'djWNQ_52', 'bnvbvjhjh', 52),
(114, 'radio', 'djWNQ_52', 'ghgjhjgghjh', 52),
(115, 'radio', 'tMsNW_53', 'bnvbvjhjh', 53),
(116, 'radio', 'tMsNW_53', 'ghgjhjgghjh', 53),
(117, 'radio', 'MbHNa_54', 'bnvbvjhjh', 54),
(118, 'radio', 'MbHNa_54', 'ghgjhjgghjh', 54),
(119, 'text', 'MZYWe_55', '', 55),
(120, 'text', 'BvSkq_56', '', 56),
(121, 'text', 'kHnHL_57', '', 57),
(122, 'text', 'JhrhP_58', '', 58),
(123, 'text', 'ZxfJc_59', '', 59),
(124, 'text', 'fqIJH_60', '', 60),
(125, 'text', 'SnCcJ_61', '', 61),
(126, 'number', 'rArqL_62', '', 62),
(127, 'radio', 'wjiZY_63', 'Enseignant', 63),
(128, 'radio', 'wjiZY_63', 'etudiant', 63),
(129, 'radio', 'wjiZY_63', 'CommerÃ§ant', 63),
(130, 'radio', 'CoaVK_64', 'Enseignant', 64),
(131, 'radio', 'CoaVK_64', 'etudiant', 64),
(132, 'radio', 'CoaVK_64', 'CommerÃ§ant', 64),
(133, 'text', 'ZQNNz_65', '', 65),
(134, 'text', 'uKjMq_66', '', 66),
(135, 'radio', 'PNzTp_67', '15-20', 67),
(136, 'radio', 'PNzTp_67', '21-25', 67),
(137, 'radio', 'PNzTp_67', '25-30', 67),
(138, 'radio', 'PNzTp_67', '30-50', 67),
(139, 'radio', 'jNFhS_68', 'goma', 68),
(140, 'radio', 'jNFhS_68', 'karisimbi', 68),
(141, 'radio', 'nCdbI_69', 'mabanga', 69),
(142, 'radio', 'nCdbI_69', 'le volcan', 69),
(143, 'radio', 'nCdbI_69', 'katoyi', 69),
(144, 'radio', 'nCdbI_69', 'himbi', 69),
(145, 'radio', 'nCdbI_69', 'kyeshero', 69),
(146, 'radio', 'nCdbI_69', 'ndosho', 69),
(147, 'radio', 'nCdbI_69', 'birere', 69),
(148, 'number', 'lV6va_70', '', 70),
(149, 'number', 'kLCl3_71', '', 71),
(150, 'number', 'W6ZNL_72', '', 72),
(151, 'number', '1zZ0w_73', '', 73),
(152, 'number', 'mZ69g_74', '', 74),
(153, 'radio', 'peMmM_75', 'a', 75),
(154, 'radio', 'peMmM_75', 'b', 75),
(155, 'radio', 'zYuLy_76', 'a', 76),
(156, 'radio', 'zYuLy_76', 'b', 76),
(157, 'checkbox', '7N99u_77', 'a', 77),
(158, 'checkbox', '7N99u_77', 'b', 77),
(159, 'checkbox', '7N99u_77', 'c', 77),
(160, 'radio', 'JcLU0_78', 'a', 78),
(161, 'radio', 'JcLU0_78', 'b', 78),
(162, 'radio', 'JcLU0_78', 'c', 78),
(163, 'radio', 'QYwSS_79', 'M', 79),
(164, 'radio', 'QYwSS_79', 'F', 79),
(165, 'radio', '5yxzE_80', 'Pas de diplome', 80),
(166, 'radio', '5yxzE_80', 'diplome', 80),
(167, 'radio', '5yxzE_80', 'Grade', 80),
(168, 'radio', '5yxzE_80', 'Licence', 80),
(169, 'radio', '5yxzE_80', 'Au-delÃ ', 80),
(170, 'radio', 'Qp9SX_81', 'Eleve', 81),
(171, 'radio', 'Qp9SX_81', 'Etudiant', 81),
(172, 'radio', 'Qp9SX_81', 'Travailleur', 81),
(173, 'radio', 'Qp9SX_81', 'CommerÃ§ant', 81),
(174, 'radio', 'Qp9SX_81', 'Autres', 81),
(175, 'radio', 'T8Ks1_82', 'La qualitÃ© de la formation', 82),
(176, 'radio', 'T8Ks1_82', 'La gratuitÃ© de la formation', 82),
(177, 'radio', 'T8Ks1_82', 'Respect de l''informateur', 82),
(178, 'radio', 'T8Ks1_82', 'Autres', 82),
(179, 'radio', 'vJrTi_83', 'ElevÃ©', 83),
(180, 'radio', 'vJrTi_83', 'Moyen', 83),
(181, 'radio', 'vJrTi_83', 'Bas', 83),
(182, 'radio', '7nqK5_84', 'ElevÃ©', 84),
(183, 'radio', '7nqK5_84', 'Moyen', 84),
(184, 'radio', '7nqK5_84', 'Bas', 84),
(185, 'radio', 'sNCsf_85', 'ElevÃ©', 85),
(186, 'radio', 'sNCsf_85', 'Moyen', 85),
(187, 'radio', 'sNCsf_85', 'Bas', 85),
(188, 'radio', 'rS2ym_86', 'ElevÃ©', 86),
(189, 'radio', 'rS2ym_86', 'Moyen', 86),
(190, 'radio', 'rS2ym_86', 'Bas', 86),
(191, 'radio', 'HZmun_87', 'M', 87),
(192, 'radio', 'HZmun_87', 'F', 87),
(193, 'radio', 'l7eWY_88', 'Pas de diplome', 88),
(194, 'radio', 'l7eWY_88', 'Diplome', 88),
(195, 'radio', 'l7eWY_88', 'Grade', 88),
(196, 'radio', 'l7eWY_88', 'Licence', 88),
(197, 'radio', 'l7eWY_88', 'Au-delÃ ', 88),
(198, 'radio', 'PgdzM_89', 'Oui', 89),
(199, 'radio', 'PgdzM_89', 'Non', 89),
(200, 'radio', 'eu0tJ_90', 'Bonne', 90),
(201, 'radio', 'eu0tJ_90', 'Moyenne', 90),
(202, 'radio', 'eu0tJ_90', 'Mauvaise', 90),
(203, 'radio', 'Woarm_91', 'Bonne', 91),
(204, 'radio', 'Woarm_91', 'Moyenne', 91),
(205, 'radio', 'Woarm_91', 'Mauvaise', 91),
(206, 'radio', 'voi7U_92', 'Bonne', 92),
(207, 'radio', 'voi7U_92', 'Moyenne', 92),
(208, 'radio', 'voi7U_92', 'Mauvaise', 92);

-- --------------------------------------------------------

--
-- Structure de la table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `id_section` int(11) NOT NULL AUTO_INCREMENT,
  `section` varchar(255) DEFAULT NULL,
  `sondage_id` int(11) NOT NULL,
  PRIMARY KEY (`id_section`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Contenu de la table `section`
--

INSERT INTO `section` (`id_section`, `section`, `sondage_id`) VALUES
(1, 'Identite du repondant', 0),
(2, 'gestion des ressources humaines', 0),
(3, NULL, 0),
(4, 'fghfjgjhgjhgjkguytughbhvgfhfgh', 0),
(5, 'dann is here', 0),
(6, 'he is reading english', 0),
(7, NULL, 0),
(8, NULL, 0),
(9, NULL, 0),
(10, NULL, 0),
(11, NULL, 0),
(12, NULL, 0),
(13, NULL, 0),
(14, NULL, 0),
(15, NULL, 0),
(16, NULL, 0),
(17, NULL, 0),
(18, 'identite du repondant', 6),
(19, 'gestion de la finance', 6),
(20, 'GRH', 6),
(21, 'GRM', 6),
(22, 'identite du repondant', 8),
(23, 'questions proprement dites', 8),
(24, 'identite du repondant', 9),
(25, 'formation', 9),
(26, 'aspiration', 9),
(27, 'motivation', 9),
(28, 'identite du repondant', 10),
(29, 'Question par rapport Ã  la sÃ©curitÃ© dans le village', 10),
(30, 'Question par rapport aux agences qui assurent la securite dans le village', 10),
(31, 'section1', 11),
(32, 'section1', 12),
(33, 'sectionÃ©', 12),
(34, 'ryyeiyr', 12),
(35, 'identite du repondant', 13),
(36, 'section1', 13),
(37, 'section', 13),
(38, 'section3', 13),
(39, 'section4', 13),
(40, 'est ce que je suis gentil', 14),
(41, 'est ce que je suis un homme d''honneur', 14),
(42, 'est ce que je suis simple', 14),
(43, 'est ce que je suis integre', 14),
(44, 'identite du repondant', 15),
(45, 'section1', 15),
(46, 'section2', 15),
(47, 'identite du repondant', 17),
(48, 'questions proprement dites', 17),
(49, 'identite du repondant', 18),
(50, 'questions proprement dites', 18),
(51, 'section de test 1', 19),
(52, 'section de test 2', 19),
(53, 'localisation du mÃ©nage de la famille', 20),
(54, 'habitants dans le mÃ©nage', 20),
(55, 'b', 21),
(56, 'c', 21),
(57, 'multiple', 22),
(58, 'PrÃ©sentation du candidat', 23),
(59, 'questionnaire proprement-dit', 23),
(60, 'Identification du rÃ©pondant', 24),
(61, 'Qestions rÃ©latives Ã  la personne', 24),
(62, 'Questions relatives au traitement familial', 24),
(63, 'Questions relatives au traitement hospitalier', 24);

-- --------------------------------------------------------

--
-- Structure de la table `sondage`
--

CREATE TABLE IF NOT EXISTS `sondage` (
  `id_sondage` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `description` text,
  `statut` varchar(45) NOT NULL DEFAULT 'Non dÃ©ployÃ©',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_sondage`),
  KEY `fk_sondage_user` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `sondage`
--

INSERT INTO `sondage` (`id_sondage`, `nom`, `description`, `statut`, `user_id`) VALUES
(1, 'gestion des Ã©tudiants', 'gestion des etudiants', 'En cours', 18),
(2, 'gestion administrative de l''universitÃ©', 'gestion administrative de l''universitÃ©', 'non dÃ©ployÃ©', 18),
(3, 'connexion internet', 'connexion internet Ã  la plage est bonne', 'non dÃ©ployÃ©', 17),
(4, 'dsdsdsd', 'efrtrtytuyiuiukjhghfgfgdfdf', 'non dÃ©ployÃ©', 17),
(5, 'jhjkhfjhkqflhjdfkqjlf', 'jhfjdhjhfjksfjlhdjfhdjfhjd', 'non dÃ©ployÃ©', 17),
(6, 'hgjhgjhjkhklkjkjkljgfgdfgsdf', 'vgvjkk,jkjghhfgdgfghkl', 'non dÃ©ployÃ©', 17),
(7, 'Reveil matinal', 'RÃ©veil matinal', 'non dÃ©ployÃ©', 18),
(8, 'Reveil matinal', 'matinalRevmatinalReveil matinalReveil matinalReveil matinalReveil matinalReveil matinalReveil matinalReveil matinalReveil matinalReveil matinalReveil matinalReveil matinalReveil matinalReveil matinalReveil matinalReveil matinalReveil matinalReveil matinalReveil matinalReveil matinalReveil matinalReveil matinalReveil matinalReveil matinal', 'non dÃ©ployÃ©', 18),
(9, 'Programmeurs', 'programmeurs et les programmeusesprogrammeurs et les programmeusesprogrammeurs et les programmeusesprogrammeurs et les programmeusesprogrammeurs et les programmeusesprogrammeurs et les programmeuses', 'AchevÃ©', 19),
(10, 'Questionnaire d''enquÃªte ', 'ce questionnaire est orientÃ© vers les chefs des mÃ©nages pour rÃ©pondre auw questions par rapport Ã  leur sÃ©curitÃ© dans le village', 'non dÃ©ployÃ©', 20),
(11, 'comÃ©die', 'je fais de la comÃ©die', 'non dÃ©ployÃ©', 21),
(12, 'TEST', 'test', 'non dÃ©ployÃ©', 22),
(13, 'universite', 'jklfjqdklfjkldjklfsqkdjkf', 'non dÃ©ployÃ©', 23),
(14, 'auto evaluation ', 'je veux savoir si je suis conservateur ou liberal ', 'non dÃ©ployÃ©', 24),
(15, 'enquete', 'hjkhqjkfhjkhqjhdfkljkldsfjklsdjf', 'non dÃ©ployÃ©', 25),
(16, 'la nuit', 'kjlsjkjflsjkldjfsjkfjklsjdfkljsdkfjkjflkjfkldjfkljsklfjsdkljfksjfksdjklfjsdkl', 'non dÃ©ployÃ©', 18),
(17, 'sondage universitaire', 'sondage universitaire', 'non dÃ©ployÃ©', 23),
(18, 'Aksanti Oscar', 'Akkkkkkkkkkkkkkk\r\nAkkkkkkkkkkkkkkk\r\nAkkkkkkkkkkkkkkk', 'non dÃ©ployÃ©', 26),
(19, 'TEST', 'un sondage de test lors de la rÃ©alisation des diagrammes de sÃ©quence du cas d''utilisation : Concevoir Questionnaire', 'non dÃ©ployÃ©', 26),
(20, 'Recensement des familles de la ville de goma', 'ceci est un recensement initiÃ© par le gouvernement provincial.Nous demandons Ã  tous les habitants de la ville d''Ãªtre coperatifs. Merci', 'AchevÃ©', 19),
(21, 'a', 'a', 'AchevÃ©', 19),
(22, 'multiple', 'multiple', 'En cours', 19),
(23, 'Congo Peace Network', 'ce questionnaire vous est principalement prÃ©sentÃ© pour que nous sachions votre niveau afin que nous poussions adapter la matiÃ¨re Ã  vous donner', 'non dÃ©ployÃ©', 19),
(24, 'EnquÃªte sur les sÃ©ropositifs', 'cette vise Ã  connaitre les conditions de vie des personnes vivant avec le VIH/SIDA', 'AchevÃ©', 19);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  `type` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `email`, `telephone`, `type`, `password`) VALUES
(1, 'Karl', 'karlemusingo@gmail.com', '0977849995', 'enqueteur', '12345'),
(6, 'karl', 'MaheshParashar@tutorialspoint.com', '0977849995', 'global', '1234'),
(7, 'espoir', 'espoir@gmail.com', '0656565598', 'global', '123456'),
(8, 'espoir', 'espoir@gmail.com', '0656565598', 'global', '123456'),
(9, 'espoir', 'espoir@gmail.com', '0656565598', 'global', '123456'),
(10, 'espoir', 'espoir@gmail.com', '0656565598', 'global', '123456'),
(11, 'alain', 'MaheshParashar@tutorialspoint.com', '46544645468456', 'global', '123456789'),
(12, 'alain', 'MaheshParashar@tutorialspoint.com', '46544645468456', 'global', '123456789'),
(13, 'alain', 'MaheshParashar@tutorialspoint.com', '46544645468456', 'global', '123456789'),
(14, 'marx', 'marx@gmail.com', '0977849995', 'enqueteur', 'e10adc3949ba59abbe56e057f20f883e'),
(15, 'marx1', 'marx1@gmail.com', '0977849995', 'enqueteur', 'fcea920f7412b5da7be0cf42b8c93759'),
(16, 'eric', 'eric@gmail.com', '09878546555', 'enqueteur', 'e10adc3949ba59abbe56e057f20f883e'),
(17, 'elie', 'elie@gmail.com', '123456789', 'enqueteur', '25f9e794323b453885f5181f1b624d0b'),
(18, 'debo', 'debo@gmail.com', '25852', 'enqueteur', 'fc43ae19277e37478bca2828bc6dffd3'),
(19, 'karl', 'karlemusingo@gmail.com', '147852369', 'enqueteur', '98dae0e08c01f9e64dc3f9650eb5a714'),
(20, 'RUFFIN', 'rrrrrrrrrr', '0970502161', 'enqueteur', '1bbd886460827015e5d605ed44252251'),
(21, 'PrÃ©mices', 'premices.tuvere@gmail.com', '0996674572', 'global', '91f5bb2203d98950b9b63676c5d8b239'),
(22, 'alvin', 'aljo@gkrk.jgj', '0999999999', 'enqueteur', 'e10adc3949ba59abbe56e057f20f883e'),
(23, 'Karl', 'karlemusingo@gmail.com', '0977849995', 'enqueteur', '25f9e794323b453885f5181f1b624d0b'),
(24, 'erik', 'eric@gmail.com', '555445555', 'enqueteur', '309928d4b100a5d75adff48a9bfc1ddb'),
(25, 'karl', 'karlemusingo@gmail.com', '0999999999', 'enqueteur', '25f9e794323b453885f5181f1b624d0b'),
(26, 'Aksanti Oscar', 'aksenti@gmjkk.com', '555445555', 'enqueteur', '25f9e794323b453885f5181f1b624d0b');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `fk_question_section1` FOREIGN KEY (`section_id`) REFERENCES `section` (`id_section`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_question_sondage1` FOREIGN KEY (`sondage_id`) REFERENCES `sondage` (`id_sondage`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD CONSTRAINT `fk_reponse_enquetes1` FOREIGN KEY (`enquetes_id`) REFERENCES `enquetes` (`id_enquete`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reponse_question1` FOREIGN KEY (`question_id`) REFERENCES `question` (`id_question`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `reponse_multiple`
--
ALTER TABLE `reponse_multiple`
  ADD CONSTRAINT `fk_reponse_multiple_reponse` FOREIGN KEY (`reponse_id`) REFERENCES `reponse` (`id_reponse`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `reponse_proposee`
--
ALTER TABLE `reponse_proposee`
  ADD CONSTRAINT `fk_reponse_proposee_question1` FOREIGN KEY (`question_id`) REFERENCES `question` (`id_question`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sondage`
--
ALTER TABLE `sondage`
  ADD CONSTRAINT `fk_sondage_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
