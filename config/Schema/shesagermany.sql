-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 22. Mrz 2015 um 14:21
-- Server Version: 5.5.32-log
-- PHP-Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `shesagermany`
--
CREATE DATABASE IF NOT EXISTS `shesagermany` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `shesagermany`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `address_id` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_id` (`event_id`),
  KEY `address_id` (`address_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Daten für Tabelle `activities`
--

INSERT INTO `activities` (`id`, `event_id`, `title`, `description`, `start_time`, `end_time`, `address_id`, `deleted`, `created`, `modified`) VALUES
(1, 8, 'Seminar: "Be your own boss"', 'Selfemployment and Starting up a Business An Option as a Professional in Germany ', '2013-05-09 13:30:00', '0000-00-00 00:00:00', 1, 0, '2015-03-06 23:00:00', '2015-03-06 23:00:00'),
(2, 8, 'Familien Grill', 'Familien Grill with Shesans, their families and friends', '2013-05-10 15:00:00', '0000-00-00 00:00:00', 2, 0, '2015-03-06 23:00:00', '2015-03-06 23:00:00'),
(3, 8, 'Football Tournament (OSSUCS)', 'Football Tournament (OSSUCS) involving other ex-student associations', '2013-05-11 10:00:00', '0000-00-00 00:00:00', 3, 0, '2015-03-06 23:00:00', '2015-03-06 23:00:00'),
(4, 8, 'Gala Night', 'Gala Night', '2013-05-11 21:00:00', '0000-00-00 00:00:00', 4, 0, '2015-03-06 23:00:00', '2015-03-06 23:00:00'),
(5, 8, 'Holy mass', 'Holy mass with the Cameroon Catholic Community', '2013-05-12 14:00:00', '0000-00-00 00:00:00', 5, 0, '2015-03-06 23:00:00', '2015-03-06 23:00:00'),
(6, 6, 'Seminar/Debate: Development Aid, Curse or Blessing for Sub-saharan Africa.', 'Leading experts in the field of development aid participate as panelists.', '2011-10-01 09:00:00', '0000-00-00 00:00:00', 6, 0, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(7, 6, 'SHESA Gold Cup Football Tournament', '', '2011-10-01 12:00:00', '0000-00-00 00:00:00', 7, 0, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(8, 6, 'Holy mass celebration', 'Holy mass celebration with Reverend Father Tatah Humphrey Mbuy', '2011-10-02 13:30:00', '0000-00-00 00:00:00', 5, 0, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(9, 6, 'Gala Night Sunday', 'Gala Night Sunday with the acclaimed Cameroonian soul singer Myra Maimoh, Germany''s best DJ Pokus Nr.1 and DJ Noufi Depago bringing you the best of Makossa, Coupé Decalé, Hip Hop, Ndombolo and more.', '2011-10-02 21:00:00', '0000-00-00 00:00:00', 4, 0, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(10, 9, 'General assembly meeting', 'General assembly meeting', '2014-07-12 10:00:00', '2014-07-11 16:00:00', 8, 0, '2015-03-20 23:00:00', '2015-03-20 23:00:00'),
(11, 9, 'Inter-house football tournament with Grill event', 'Inter-house football tournament with Grill event', '2014-07-12 10:00:00', '2015-03-21 19:00:00', 8, 0, '2015-03-20 23:00:00', '2015-03-20 23:00:00'),
(12, 9, 'Holy Mass', 'Holy Mass celebration.', '2014-07-13 10:00:00', '2014-07-13 12:00:00', 9, 0, '2015-03-20 23:00:00', '2015-03-20 23:00:00'),
(13, 5, 'General Assembly meeting', 'General Assembly meeting', '2010-05-01 10:00:00', '2010-05-01 16:30:00', 10, 0, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(14, 5, 'Football match against Veteran FC Stuttgart', 'Football match against Veteran FC Stuttgart with BBQ ', '2010-05-01 17:00:00', '2010-05-01 19:00:00', 11, 0, '2015-03-20 23:00:00', '2015-03-20 23:00:00'),
(15, 5, 'Dinner with SHESANs, family and friends', 'Dinner with SHESANs, family and friends', '2010-05-01 20:00:00', '2010-05-01 23:00:00', 10, 0, '2015-03-20 23:00:00', '2015-03-20 23:00:00'),
(16, 5, 'Mass Service', 'Mass Service', '2010-05-02 11:00:00', '2010-05-02 13:00:00', 12, 0, '2015-03-20 23:00:00', '2015-03-20 23:00:00'),
(19, 4, 'Cameroon’s Diaspora and Development: Which Diaspora for whose development?', 'Cameroon’s Diaspora and Development: Which Diaspora for whose development?', '2009-09-26 11:00:00', '2009-09-26 14:00:00', 13, 0, '2015-03-21 23:00:00', '2015-03-21 23:00:00'),
(20, 4, 'Football match against Duisburg United e.V', 'Football match against Duisburg United e.V', '2009-09-26 15:00:00', '2009-09-26 17:00:00', 14, 0, '2015-03-21 23:00:00', '2015-03-21 23:00:00'),
(21, 4, 'Launching Gala', 'Launching Gala', '2009-09-26 21:00:00', '2009-09-27 06:00:00', 13, 0, '2015-03-21 23:00:00', '2015-03-21 23:00:00'),
(22, 4, 'Mass celebrated by Bishop Nkuo of Kumbo Diocese', 'Mass celebrated by Bishop Nkuo of Kumbo Diocese', '2009-09-27 13:00:00', '2009-09-27 15:00:00', 15, 0, '2015-03-21 23:00:00', '2015-03-21 23:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `activities_participants`
--

CREATE TABLE IF NOT EXISTS `activities_participants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_id` int(11) NOT NULL,
  `participant_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_id` (`activity_id`),
  KEY `participant_id` (`participant_id`),
  KEY `participant_id_2` (`participant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Daten für Tabelle `activities_participants`
--

INSERT INTO `activities_participants` (`id`, `activity_id`, `participant_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 3, 9),
(10, 3, 10),
(11, 3, 11),
(12, 3, 12),
(13, 3, 13),
(14, 3, 14),
(15, 3, 15),
(16, 3, 16),
(17, 3, 17),
(18, 4, 18),
(19, 5, 19),
(20, 7, 9),
(21, 7, 12),
(22, 7, 16),
(23, 7, 11),
(24, 7, 11),
(25, 7, 20),
(26, 7, 13),
(27, 7, 21),
(28, 7, 22),
(29, 7, 23),
(30, 7, 24);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `addresses`
--

CREATE TABLE IF NOT EXISTS `addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `street` varchar(50) DEFAULT NULL,
  `postal_code` varchar(10) DEFAULT NULL,
  `town` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Daten für Tabelle `addresses`
--

INSERT INTO `addresses` (`id`, `street`, `postal_code`, `town`, `state`, `country`, `created`, `modified`) VALUES
(1, 'Flachsmarkt 15', '47051', 'Duisburg', 'Nordrhein-Westfalen (NRW)', 'Germany', '2015-03-08 00:00:00', '2015-03-08 00:00:00'),
(2, 'Virchowstrasse 167a', '45147', 'Essen', 'Nordrhein-Westfalen (NRW)', 'Germany', '2015-03-08 00:00:00', '2015-03-08 00:00:00'),
(3, 'Kalkweg 153', '47055', 'Duisburg', 'Nordrhein-Westfalen (NRW)', 'Germany', '2015-03-08 00:00:00', '2015-03-08 00:00:00'),
(4, 'Bamlerstrasse 90', '45141', 'Duisburg', 'Nordrhein-Westfalen (NRW)', 'Germany', '2015-03-08 00:00:00', '2015-03-08 00:00:00'),
(5, 'Marienplatz 9', '45476', 'Mülheim an der Ruhr', 'Nordrhein-Westfalen (NRW)', 'Germany', '2015-03-08 00:00:00', '2015-03-08 00:00:00'),
(6, 'Neustadtstrasse 19', '45476', 'Mülheim an der Ruhr', 'Nordrhein-Westfalen (NRW)', 'Germany', '2015-03-11 00:00:00', '2015-03-11 00:00:00'),
(7, 'Pappenbuschstrasse 20', '45473', 'Mülheim an der Ruhr', 'Nordrhein-Westfalen (NRW)', 'Germany', '2015-03-11 00:00:00', '2015-03-11 00:00:00'),
(8, 'Döberitzer Weg 27', '13591', 'Berlin', 'Berlin', 'Germany', '2015-03-20 00:00:00', '2015-03-20 00:00:00'),
(9, 'Westfälische Straße 70a', '10709', 'Berlin', 'Berlin', 'Germany', '2015-03-20 00:00:00', '2015-03-20 00:00:00'),
(10, 'Wollgrasweg 11', '70599', 'Stuttgart-Plieningen ', 'Baden-Württemberg', 'Germany', '2015-03-21 00:00:00', '2015-03-21 00:00:00'),
(11, 'Dürrlewangstr 13', '70565', 'Stuttgart', ' Baden-Württember', 'Germany', '2015-03-21 00:00:00', '2015-03-21 00:00:00'),
(12, 'Paracelsusstraße 87', '70599', 'Stuttgart-Plieningen ', 'Baden-Württemberg', 'Germany', '2015-03-21 00:00:00', '2015-03-21 00:00:00'),
(13, 'Viehofplatz', '45127 ', 'Essen', 'Nordrhein-Westfalen (NRW)', 'Germany', '2015-03-22 00:00:00', '2015-03-22 00:00:00'),
(14, 'Paul-Esch-Str. 25', '47053', 'Duisburg', 'Nordrhein-Westfalen (NRW)', 'Germany', '2015-03-22 00:00:00', '2015-03-22 00:00:00'),
(15, 'Franziskanerstr. 69', '45139', 'Essen', 'Nordrhein-Westfalen (NRW)', 'Germany', '2015-03-22 00:00:00', '2015-03-22 00:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(128) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Daten für Tabelle `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `location`, `start`, `end`, `deleted`, `created`, `modified`) VALUES
(1, 'SHESA Germany e.V Launching General Assembly Erlangen', 'SHESA Germany e.V Launching General Assembly Erlangen', 'Erlangen, Germany', '2008-04-24', '2008-04-26', 0, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(2, 'General Assembly Berlin 2008', 'General Assembly Berlin', 'Berlin, Germany', '2008-10-03', '2018-10-05', 0, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(3, 'General Assembly Oldenburg', 'General Assembly Oldenburg', 'Essen, Germany', '2009-05-01', '2009-05-03', 0, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(4, 'Launching of SHESA Germany e.V', 'Launching of SHESA Germany e.V', 'Essen, Germany', '2009-09-26', '2009-09-27', 0, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(5, 'General Assembly Stuttgart', 'General Assembly Oldenburg', 'Oldenburg, Germany', '2010-05-01', '2010-05-02', 0, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(6, 'SHESA Germany e.V: Golden Jubilee of our Alma Matter Sacred Heart College Mankon', 'SHESA Germany e.V: Golden Jubilee of our Alma Matter Sacred Heart College Mankon', 'Duisburg/Essen, Germany', '2011-10-01', '2011-10-03', 0, '2015-03-06 23:00:00', '2015-03-06 23:00:00'),
(7, 'General Assembly Freiburg', 'General Assembly Freiburg', 'Freiburg, Germany', '2012-06-01', '2012-06-02', 0, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(8, 'Celebrating 5 Years of SHESA Germany e.V', 'One of the best Secondary and High Schools in Cameroon is the Catholic institution called "Sacred Heart College" which is located at Bamenda, the capital of the North West Region. Sacred Heart College, an all-boys college went into operation in 1961. Since then it has sent out thousands of ex-students, who have been making their impact in every work of life all over the world. A Sacred Heart ex-student is called a "Shesan". Shesans all over the world are organised in different Shesa Associations. In Germany Shesans are organised in the association called "SHESA Germany e. V." which was founded in 2008. From the 9th to 12th of May 2013 Shesa Germany is planning to celebrate its 5th anniversary by organising many different activities on each of the said days culminating in the Anniversary Gala on the night of May 11th 2013. This film is all about Shesa Germany and its intention is to publicize the planned activities as well as woo more Shesans to join their kind. Non-Shesans are also targeted because Shesans are very social and would very much love to celebrate together with their friends and well wishers. For more on the activities of Shesa Germany e. V. please feel free to contact us using the email link displayed in the film.', 'Duisburg/Essen, Germany', '2013-05-09', '2013-05-12', 0, '2015-03-06 23:00:00', '2015-03-06 23:00:00'),
(9, 'General Assemby Berlin 2014', 'General Assembly Berlin 2014', 'Berlin, Germany', '2014-07-11', '2014-07-13', 0, '2015-03-18 23:00:00', '2015-03-18 23:00:00'),
(10, 'SHESA Germany e.V event 2015', 'SHESA Germany e.V event 2015', 'Duisburg/Essen/Mülheim', '2015-07-11', '2015-07-12', 0, '2015-03-10 23:00:00', '2015-03-10 23:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `executive`
--

CREATE TABLE IF NOT EXISTS `executive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` enum('President','Vice President','Secretary General','Financial Secretary','Publicity Secretary','Adviser') NOT NULL,
  `term` year(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `image_profiles`
--

CREATE TABLE IF NOT EXISTS `image_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` enum('Dr.','Mr.','Mrs.') DEFAULT NULL,
  `name` varchar(128) NOT NULL,
  `body` text NOT NULL,
  `surname` varchar(128) NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `organizations`
--

CREATE TABLE IF NOT EXISTS `organizations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `participant_id` int(11) NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `participant_id` (`participant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Daten für Tabelle `organizations`
--

INSERT INTO `organizations` (`id`, `name`, `participant_id`, `created`, `modified`) VALUES
(1, 'SHESA Germany e.V', 9, '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(2, 'P.H.S Batibo', 10, '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(3, 'St. Bedes College Ashing-Kom', 11, '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(4, 'SOBA Foundation e.V', 12, '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(5, 'STESA Europe', 13, '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(6, 'Lycée de Dschang', 14, '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(7, 'B.H.S Buea', 15, '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(8, 'C.P.C Bali', 16, '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(9, 'PEMEXA Germany', 17, '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(10, 'Cameroon Catholic Community Mülheim an der Ruhr', 19, '2015-03-08 23:00:00', '2015-03-08 23:00:00'),
(11, 'CCAST Bambili Ex-Students Association', 20, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(12, 'Longla Ex-Students Association', 21, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(13, 'Choppers', 22, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(14, 'P.H.S Buea', 23, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(15, 'BIROCOL', 24, '2015-03-10 23:00:00', '2015-03-10 23:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` enum('person','organization') DEFAULT 'person',
  `role` enum('Moderator','Panelist','Team','DJ','MC','Other') NOT NULL,
  `description` text NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Daten für Tabelle `participants`
--

INSERT INTO `participants` (`id`, `type`, `role`, `description`, `created`, `modified`) VALUES
(1, 'person', 'Moderator', 'Moderator for the seminar "Be your own boss".', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(2, 'person', 'Panelist', 'Chamber of Commerce in Essen. Presented on the topic "Von der Idee zum Konzept sorgfältige Vorbereitung als Basis für eine erfolgreiche Gründung."', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(3, 'person', 'Panelist', 'Co-owner of private clinic for oncology.', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(4, 'person', 'Panelist', 'CEO Professional Business Solutions, PBS', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(5, 'person', 'Panelist', 'Founder and CEO of AfrikAktiv.', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(6, 'person', 'Panelist', 'Co-founder of horizon (www.horizononline.org)', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(7, 'person', 'Panelist', 'Founder and Editor-in-Chief of AFRICA POSITIVE magazine', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(8, 'person', 'Panelist', 'CEO Worldconcect Reisebüro', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(9, 'organization', 'Team', 'Sacred Heart College Mankon', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(10, 'organization', 'Team', 'P.H.S Batibo', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(11, 'organization', 'Team', 'St. Bedes College Ashing-Kom', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(12, 'organization', 'Team', 'SASSE College Buea', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(13, 'organization', 'Team', 'Starlight College Mankon', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(14, 'organization', 'Team', 'Lycée de Dschang', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(15, 'organization', 'Team', 'B.H.S Buea', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(16, 'organization', 'Team', 'C.P.C Bali', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(17, 'organization', 'Team', 'P.S.S Mankon', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(18, 'person', 'DJ', 'DJ for the gala night.', '2015-03-08 23:00:00', '2015-03-08 23:00:00'),
(19, 'organization', 'Other', 'CCC Mülheim', '2015-03-08 23:00:00', '2015-03-08 23:00:00'),
(20, 'organization', 'Team', 'CCAST Bambili Ex-Students Association', '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(21, 'organization', 'Team', 'Longla Ex-Students Association', '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(22, 'organization', 'Team', 'GBHS Bamenda', '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(23, 'organization', 'Team', 'P.H.S Buea', '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(24, 'organization', 'Team', 'BIROCOL', '2015-03-10 23:00:00', '2015-03-10 23:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `participants_projects`
--

CREATE TABLE IF NOT EXISTS `participants_projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `participant_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` enum('Dr.','Dr. Med.','Dr.-Ing.','Mr.','Mrs','Ms') DEFAULT NULL,
  `surname` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `participant_id` int(11) NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `participant_id` (`participant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Daten für Tabelle `people`
--

INSERT INTO `people` (`id`, `title`, `surname`, `name`, `participant_id`, `created`, `modified`) VALUES
(1, 'Dr. Med.', 'Sudan Enjema', 'Aweh', 1, '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(2, 'Dr.', 'Friedrich', 'Schreiber', 2, '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(3, 'Dr. Med.', 'Ivo', 'Azeh', 3, '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(4, 'Dr.-Ing.', 'Fru', 'Ndenge', 4, '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(5, 'Mrs', 'Enie Muyang', 'Tatah', 5, '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(6, 'Mr.', 'Caleb', 'Tamfu', 5, '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(7, 'Ms', 'Veye', 'Tatah', 7, '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(8, 'Mr.', 'Keneth', 'Najeme', 8, '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(9, NULL, 'Pokus', 'DJ', 18, '2015-03-08 23:00:00', '2015-03-08 23:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `phinxlog`
--

CREATE TABLE IF NOT EXISTS `phinxlog` (
  `version` bigint(20) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `from` date NOT NULL,
  `to` date DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `title` enum('Dr.','Mr.','Mrs.') DEFAULT NULL,
  `name` varchar(128) NOT NULL,
  `surname` varchar(128) NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_events` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `addresses_activities` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `activities_participants`
--
ALTER TABLE `activities_participants`
  ADD CONSTRAINT `activity_activity_participants` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `participants_activity_participants` FOREIGN KEY (`participant_id`) REFERENCES `participants` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `organizations`
--
ALTER TABLE `organizations`
  ADD CONSTRAINT `organizations_participants` FOREIGN KEY (`participant_id`) REFERENCES `participants` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints der Tabelle `people`
--
ALTER TABLE `people`
  ADD CONSTRAINT `participants_people` FOREIGN KEY (`participant_id`) REFERENCES `participants` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
