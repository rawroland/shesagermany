-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 08. Mrz 2015 um 17:32
-- Server Version: 5.5.41-0ubuntu0.14.04.1
-- PHP-Version: 5.5.9-1ubuntu4.6

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
  `date_time` datetime NOT NULL,
  `address_id` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Daten für Tabelle `activities`
--

INSERT INTO `activities` (`id`, `event_id`, `title`, `description`, `date_time`, `address_id`, `deleted`, `created`, `modified`) VALUES
(1, 1, 'Seminar: "Be your own boss"', 'Selfemployment and Starting up a Business \r\nAn Option as a Professional in Germany ', '2013-05-09 13:30:00', 1, 0, '2015-03-06 23:00:00', '2015-03-06 23:00:00'),
(2, 1, 'Familien Grill', 'Familien Grill with Shesans, their families and friends', '2013-05-10 14:00:00', 2, 0, '2015-03-06 23:00:00', '2015-03-06 23:00:00'),
(3, 1, 'Football Tournament (OSSUCS)', 'Football Tournament (OSSUCS) involving other ex-student associations', '2013-05-11 11:00:00', 3, 0, '2015-03-06 23:00:00', '2015-03-06 23:00:00'),
(4, 1, 'Gala Night', 'Gala Night', '2013-05-11 22:00:00', 4, 0, '2015-03-06 23:00:00', '2015-03-06 23:00:00'),
(5, 1, 'Holy mass', 'Holy mass with the Cameroon Catholic Community', '2013-05-12 14:00:00', 5, 0, '2015-03-06 23:00:00', '2015-03-06 23:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `activities_participants`
--

CREATE TABLE IF NOT EXISTS `activities_participants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_id` int(11) NOT NULL,
  `participant_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

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
(17, 3, 17);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Daten für Tabelle `addresses`
--

INSERT INTO `addresses` (`id`, `street`, `postal_code`, `town`, `state`, `country`, `created`, `modified`) VALUES
(1, 'Flachsmarkt 15', '47051', 'Duisburg', 'Nordrhein-Westfalen (NRW)', 'Germany', '2015-03-08 00:00:00', '2015-03-08 00:00:00'),
(2, 'Virchowstrasse 167a', '45147', 'Essen', 'Nordrhein-Westfalen (NRW)', 'Germany', '2015-03-08 00:00:00', '2015-03-08 00:00:00'),
(3, 'Kalkweg 153', '47055', 'Duisburg', 'Nordrhein-Westfalen (NRW)', 'Germany', '2015-03-08 00:00:00', '2015-03-08 00:00:00'),
(4, 'Bamlerstrasse 90', '45141', 'Duisburg', 'Nordrhein-Westfalen (NRW)', 'Germany', '2015-03-08 00:00:00', '2015-03-08 00:00:00'),
(5, 'Marienplatz 9', '45476', 'Mülheim an der Ruhr', 'Nordrhein-Westfalen (NRW)', 'Germany', '2015-03-08 00:00:00', '2015-03-08 00:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(128) NOT NULL,
  `date` date NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `location`, `date`, `deleted`, `created`, `modified`) VALUES
(1, 'Celebrating 5 Years of SHESA Germany e.V', 'One of the best Secondary and High Schools in Cameroon is the Catholic institution called "Sacred Heart College" which is located at Bamenda, the capital of the North West Region. Sacred Heart College, an all-boys college went into operation in 1961. Since then it has sent out thousands of ex-students, who have been making their impact in every work of life all over the world. A Sacred Heart ex-student is called a "Shesan". Shesans all over the world are organised in different Shesa Associations. In Germany Shesans are organised in the association called "SHESA Germany e. V." which was founded in 2008. From the 9th to 12th of May 2013 Shesa Germany is planning to celebrate its 5th anniversary by organising many different activities on each of the said days culminating in the Anniversary Gala on the night of May 11th 2013. This film is all about Shesa Germany and its intention is to publicize the planned activities as well as woo more Shesans to join their kind. Non-Shesans are also targeted because Shesans are very social and would very much love to celebrate together with their friends and well wishers. For more on the activities of Shesa Germany e. V. please feel free to contact us using the email link displayed in the film.', 'Duisburg/Essen, Germany', '2013-05-09', 0, '2015-03-06 23:00:00', '2015-03-06 23:00:00');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

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
(9, 'PEMEXA Germany', 17, '2015-03-07 23:00:00', '2015-03-07 23:00:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` enum('person','organization') DEFAULT 'person',
  `role` enum('Moderator','Panelist','Team') NOT NULL,
  `description` text NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

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
(17, 'organization', 'Team', 'P.S.S Mankon', '2015-03-07 23:00:00', '2015-03-07 23:00:00');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

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
(8, 'Mr.', 'Keneth', 'Najeme', 8, '2015-03-07 23:00:00', '2015-03-07 23:00:00');

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;