-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 15, 2017 at 03:19 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dump`
--

-- --------------------------------------------------------

--
-- Table structure for table `actions`
--

CREATE TABLE `actions` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_bin NOT NULL,
  `actions_category_id` int(250) NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `actions_img_name` varchar(250) COLLATE utf8_bin NOT NULL,
  `actions_img_description` varchar(250) COLLATE utf8_bin NOT NULL,
  `accroche` text COLLATE utf8_bin NOT NULL,
  `actions_img_alt` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `actions`
--

INSERT INTO `actions` (`id`, `title`, `actions_category_id`, `content`, `actions_img_name`, `actions_img_description`, `accroche`, `actions_img_alt`) VALUES
(16, 'Lancement de la fabrique du numérique à Moulins ', 11, 'La “Fabrique du numérique”, labellisée “Grande école du numérique”, financée à 20% par l\'état et à 80% par les cotisations des entreprises, est gratuite et sans condition de niveau pour les bénéficiaires. Cette formation vise à former des personnes exclues de l\'emploi au développement web. En effet ce secteur est actuellement en tension et de nombreuses offres d\'emploi restent à ce jour non pourvues.<br/>\r\nEn 2017 vingt-trois stagiaires de tous milieux et de tout âge ont suivi une première session formation intensive de 8 mois. La pédagogie est basée sur l\'auto-formation selon le programme mis au point par simplon.co. Les apprenants peuvent cependant compter sur l\'appui d\'un formateur agréé par simplon.', 'promo.jpg', '', 'L\'accès à l\'emploi est l\'une des priorités de Face Territoire Bourbonnais. Dans cette optique l\'association lance une formation intensive dans le secteur en tension du développement web.', ''),
(17, 'Face permet la réalisation de Cv vidéos', 11, 'Pas facile de se démarquer lors de l\'envoi de candadidatures papiers. Pour favoriser l\'accès à l\'emploi FACE Territoire Bourbonnais permet aux personnes en recherche d\'emploi de sortir du lot avec un cv vidéo.', 'stephane.jpg', '', 'Face donne l\'opportunité aux candidats de \"taper dans l\'oeil\" du recruteur avec un cv vidéo.', ''),
(18, 'Les cafés d\'en face : le lieu d\'échange entre les jeunes et les entreprises', 11, '', 'cafe_d_en_face.png', '', 'Face fait le lien entre les entreprises et les étudiants par l\'organisation de rencontres entre chefs d\'entreprises et demandeurs d\'emploi.', ''),
(19, 'Le projet Civigaz enfin en territoire bourbonnais', 12, 'La sensibilisation des familles à la préservation de l\'énergie est au coeur du projet Civigaz. Ce projet a pour vocation de réduire les dépenses en gaz quelle qu\'en soit la cause (mauvaises habitudes de consommation, fuites...). Dans cette optique Civigaz vise à ouvrir le dialogue entre les foyers en situation de précarité energétique, les acteurs du projet Civigaz et, si besoin à orienter vers les structures adaptées. <br/>\r\nCette mission de sensiblisation à la préservation des énergies non renouvellables est confiée à des jeunes en service civique (durée 7 mois). Ce projet de transition énergétique est porté par FACE en partenariat avec GRDF. ', '', '', 'Face Territoire Bourbonnais lutte contre le gaspillage de l\'energie : en 2017 le club étend le projet civigaz de la fondation face au territoire bourbonnais.', '');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `contenu` longtext,
  `date` datetime DEFAULT NULL,
  `articles_category_id` int(11) DEFAULT NULL,
  `accroche` text NOT NULL,
  `articles_img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `date`, `articles_category_id`, `accroche`, `articles_img_name`) VALUES
(9, 'Revenez plus tard', '', NULL, 13, 'Pas d\'actualité ni de rendez vous pour le moment.', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `contentType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `titre`, `contentType`) VALUES
(11, 'Aide au retour à l\'emploi', 'actions'),
(12, 'Energie', 'actions'),
(13, 'Actualité', 'posts'),
(14, 'Rendez-vous', 'posts');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `address` text NOT NULL,
  `cp` text NOT NULL,
  `contactIdentity` text NOT NULL,
  `contactNumber` varchar(250) NOT NULL,
  `contactMail` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `cp`, `contactIdentity`, `contactNumber`, `contactMail`) VALUES
(1, 'Hôtel d\'entreprises, 18 rue des Tanneries', '03000 Moulins', 'Madame Christine Berger', '06-73-65-04-95', 'c.berger@fondationface.org');

-- --------------------------------------------------------

--
-- Table structure for table `img_paths`
--

CREATE TABLE `img_paths` (
  `img_path_id` int(11) NOT NULL,
  `img_path` varchar(250) NOT NULL,
  `img_page` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_paths`
--

INSERT INTO `img_paths` (`img_path_id`, `img_path`, `img_page`) VALUES
(1, 'img/actions/', 'actions');

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `title`, `content`) VALUES
(1, 'Pourquoi nous rejoindre?', '<ul>\r\n<li>pour faire partie d\'un réseau d\'entreprises engagées sur le territoire;</li>\r\n<li>pour partager les bonnes pratiques de RSE;</li>\r\n<li>pour contribuer à la dynamique économique et sociale locale;</li>\r\n</ul>'),
(2, 'Comment soutenir nos actions?', '<ul>\r\n<li>par l\'adhésion (déductible d\'impôts);</li>\r\n<li>par le don (déductible d\'impôts);</li>\r\n<li>par le versement d\'une partie de la Taxe d\'Apprentissage;</li>\r\n<li>par le Mécénat;</li>\r\n<ul>');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `newsdate` date NOT NULL,
  `title` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `fromwhere` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `newsdate`, `title`, `link`, `fromwhere`) VALUES
(1, '2017-05-11', 'Les stagiaires de Face ont planché hier douze heures sur un projet de solution numérique', 'http://www.lamontagne.fr/moulins/economie/innovation/2017/05/11/les-stagiaires-de-face-ont-planche-hier-douze-heures-sur-un-projet-de-solution-numerique_12397449.html', 'La Montagne'),
(2, '2017-01-23', 'Le club d’entrepreneurs Face territoire bourbonnais a présenté son programme d’actions 2017', 'http://www.lamontagne.fr/moulins/economie/emploi/2017/01/23/le-club-dentrepreneurs-face-territoire-bourbonnais-a-presente-son-programme-dactions-2017_12253076.html', 'La Montagne'),
(3, '2016-09-17', 'Le club d’entrepreneurs FACE veut développer l\'emploi dans le numérique', 'http://www.lamontagne.fr/moulins/economie/2016/09/17/le-club-dentrepreneurs-face-veut-developper-l-emploi-dans-le-numerique_12075130.html', 'La Montagne'),
(4, '2015-06-20', 'Le club Face Territoire bourbonnais a été lancé hier dans les locaux du CNCS', 'http://www.lamontagne.fr/moulins/social/2015/06/20/le-club-face-territoire-bourbonnais-a-ete-lance-hier-dans-les-locaux-du-cncs_11488852.html', 'La Montagne'),
(5, '2015-06-15', 'Lancement à Moulins de la Fondation Agir Contre l’Exclusion', 'http://www.lamontagne.fr/moulins/economie/social/2015/06/18/lancement-a-moulins-de-la-fondation-agir-contre-lexclusion_11485932.html', 'La Montagne'),
(11, '2016-02-18', 'Face, un réseau national d\'entreprises', '', 'La Montagne'),
(12, '2016-09-25', 'Un véhicule offert à Face', 'http://www.lamontagne.fr/auvergne/actualite/departement/allier/allier-local/2016/09/25/un-vehicule-offert-a-face_12085833-7477.html', 'La Montagne'),
(13, '2016-10-23', 'La fabrique inaugurée', '', 'La Montagne'),
(15, '2016-02-18', '25 jeunes sans qualification vont pouvoir apprendre la programmation informatique, à Moulins', 'http://www.lamontagne.fr/moulins/economie/2016/02/18/25-jeunes-sans-qualification-vont-pouvoir-apprendre-la-programmation-informatique-a-moulins_11788407.html', 'La Montagne'),
(16, '2016-09-29', '20 postes de codeurs à la clé', '', 'La Semaine de l\'Allier');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `content`) VALUES
(1, 'Ce site appartient à ', '<p>Association FACE Territoire Bourbonnais</p>\r\n<p>Siret : 814 390 894 00016</p>\r\n<p>Domicilié : 18 rue des Tanneries</p>\r\n<p> 03000 Moulins</p>'),
(3, 'Directeur de publication', '<p>Nom : Christine Berger</p>\r\n<p><span class=\" glyphicon glyphicon-envelope\"></span> Mail : c.berger@fondationface.org</p>\r\n<p><span class=\" glyphicon glyphicon-phone\"></span> : 06-73-65-04-95</p>'),
(4, 'Hébergeur', '<p>Nom hébergeur</p>\r\n<p>Domicilié : adresse</p>\r\n<p>code postal</p>\r\n<p><span class=\'glyphicon glyphicon-phone\'></span> téléphone</p>');

-- --------------------------------------------------------

--
-- Table structure for table `pageforcategories`
--

CREATE TABLE `pageforcategories` (
  `id` int(11) NOT NULL,
  `pagename` varchar(255) NOT NULL,
  `nametoshow` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pageforcategories`
--

INSERT INTO `pageforcategories` (`id`, `pagename`, `nametoshow`) VALUES
(1, 'posts', 'Actualité/rendez-vous'),
(2, 'actions', 'actions');

-- --------------------------------------------------------

--
-- Table structure for table `presentations`
--

CREATE TABLE `presentations` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presentations`
--

INSERT INTO `presentations` (`id`, `title`, `content`) VALUES
(1, 'Présentation', '<p>L\'association FACE Territoire Bourbonnais est née en Juillet 2015.\r\n\r\nIl s\'agit d\'un club d\'entrepreneurs sous forme associative en accord avec les collectivités locales, regroupant des entreprises qui souhaitent participer au développement économique et social du territoire. FACE TERRITOIRE BOURBONNAIS doit être un facilitateur, un révélateur de talents pour arriver à la réussite professionnelle.</p>\r\n\r\n<p>\r\nIl est une déclinaison locale de <a href=\'http://www.fondationface.org/\'>FACE, Fondation Agir Contre l\'Exclusion</a>, fondation de grands groupes nationaux, ayant pour vocation de favoriser l\'engagement social et sociétal des entreprises pour lutter contre toutes formes d\'exclusion, de discrimination et de pauvreté, par une approche globale et innovante de la RSE ou Responsabilité Sociale d\'Entreprise. </p>\r\n\r\n \r\n<p>\r\nEn octobre 2016, FACE TERRITOIRE BOURBONNAIS a répondu à un appel à projet sur la création de formations aux métiers du numérique, dans le cadre d\'une opération nationale baptisée \"la Grande Ecole Du Numérique\".  </p>\r\n\r\n \r\n<p>\r\nNotre club a été retenu pour proposer d\'ici la fin 2016 une formation courte (8 mois) et non diplômante au métier de développeur WEB à l\'attention de 23 bénéficiaires, demandeurs d\'emploi et/ou éloignés des parcours scolaires traditionnels.</p>\r\n\r\n<p>\r\nLe Club FACE TERRITOIRE BOURBONNAIS est aussi un lieu de réflexion et d\'échanges entre dirigeants d\'entreprises\r\n</p>'),
(5, 'Les grandes actions du Club', '<ul>\r\n<li>création de formations courtes et spécifiques aux besoins des entreprises (appel à projet de la <a href=\"index.php?p=actions.show&id=16&category=3\">Grande Ecole du Numérique</a> ;</li>\r\n<li>détection de talents locaux ;</li>\r\n<li>créer et développer les <a href=\"index.php?p=actions.show&id=17&category=3\">CV Vidéos</a> et Offres vidéos (CV à l\'envers) ;</li>\r\n<li>les Cafés d\'En Face pour échanger entre les jeunes et chefs d\'entreprises ;</li>\r\n<li>contribuer à l\'insertion professionnelle et sociale des demandeurs d\'emploi, jeunes et séniors en favorisant le parrainage ;</li>\r\n<li>concevoir, expérimenter, développer et accompagner les entreprises dans le développement des pratiques RSE;</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img_paths`
--
ALTER TABLE `img_paths`
  ADD PRIMARY KEY (`img_path_id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pageforcategories`
--
ALTER TABLE `pageforcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presentations`
--
ALTER TABLE `presentations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actions`
--
ALTER TABLE `actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `img_paths`
--
ALTER TABLE `img_paths`
  MODIFY `img_path_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pageforcategories`
--
ALTER TABLE `pageforcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `presentations`
--
ALTER TABLE `presentations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
