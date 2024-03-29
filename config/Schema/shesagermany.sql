-- phpMyAdmin SQL Dump
-- version 4.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 18, 2015 at 06:43 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shesagermany`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `address_id` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `event_id`, `title`, `description`, `start_time`, `end_time`, `address_id`, `deleted`, `created`, `modified`) VALUES
(1, 8, 'Seminar: "Be your own boss"', 'Selfemployment and Starting up a Business An Option as a Professional in Germany ', '2013-05-09 13:30:00', '2013-05-09 19:00:00', 1, 0, '2015-03-06 23:00:00', '2015-03-06 23:00:00'),
(2, 8, 'Familien Grill', 'Familien Grill with Shesans, their families and friends', '2013-05-10 15:00:00', '2013-05-10 21:00:00', 2, 0, '2015-03-06 23:00:00', '2015-03-06 23:00:00'),
(3, 8, 'Football Tournament (OSSUCS)', 'Football Tournament (OSSUCS) involving other ex-student associations', '2013-05-11 10:00:00', '2013-05-11 17:00:00', 3, 0, '2015-03-06 23:00:00', '2015-03-06 23:00:00'),
(4, 8, 'Gala Night', 'Gala Night', '2013-05-11 21:00:00', '2013-05-12 06:00:00', 4, 0, '2015-03-06 23:00:00', '2015-03-06 23:00:00'),
(5, 8, 'Holy mass', 'Holy mass with the Cameroon Catholic Community', '2013-05-12 14:00:00', '2013-05-12 16:00:00', 5, 0, '2015-03-06 23:00:00', '2015-03-06 23:00:00'),
(6, 6, 'Seminar/Debate: Development Aid, Curse or Blessing for Sub-saharan Africa.', 'Leading experts in the field of development aid participate as panelists.', '2011-10-01 09:00:00', '2011-10-01 12:00:00', 6, 0, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(7, 6, 'SHESA Gold Cup Football Tournament', '', '2011-10-01 12:00:00', '2011-10-01 19:00:00', 7, 0, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(8, 6, 'Holy mass celebration', 'Holy mass celebration with Reverend Father Tatah Humphrey Mbuy', '2011-10-02 13:30:00', '2011-10-02 16:00:00', 5, 0, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(9, 6, 'Gala Night Sunday', 'Gala Night Sunday with the acclaimed Cameroonian soul singer Myra Maimoh, Germany''s best DJ Pokus Nr.1 and DJ Noufi Depago bringing you the best of Makossa, Coupé Decalé, Hip Hop, Ndombolo and more.', '2011-10-02 21:00:00', '2011-10-03 05:00:00', 4, 0, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
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
(22, 4, 'Mass celebrated by Bishop Nkuo of Kumbo Diocese', 'Mass celebrated by Bishop Nkuo of Kumbo Diocese', '2009-09-27 13:00:00', '2009-09-27 15:00:00', 15, 0, '2015-03-21 23:00:00', '2015-03-21 23:00:00'),
(23, 10, 'Seminar: Emerging Economy in Cameroon, Business and Investment Opportunities', 'The world’s view of Africa is very one-sided. The focus is on war, diseases, disasters, child mishandling and corruption. However, many African countries are making understated and surprising economic progress in recent years. Cameroon, for example, experienced a wave of innovation in the energy sector with the construction of water and gas power plants, the mining sector with iron ore and diamond mining and infrastructure (road and port construction). The result is new self-confidence among Cameroonians at home and abroad. The increasingly difficult economic situation in Europe and the USA further motivates Cameroonians in the Diaspora to consider returning home. The huge investment potentials offered by Cameroon need not be over-emphasized. Unfortunately, there is a lack of situational awareness, which can be attained locally in Cameroon. The seminar is Shesa Germany&#039;s contribution in providing the necessary information to facilitate investment in the Cameroonian economy. The Cameroonian government will give concrete information on the necessary steps to be followed while a panel board of experts will provide tips on how to concretize vague plans.', '2015-07-11 10:00:00', '2015-07-11 15:00:00', 16, 0, '2015-06-13 22:00:00', '2015-06-13 22:00:00'),
(25, 10, 'Family barbecue and football match', 'This will be a family barbecue with a football match.', '2015-07-11 16:00:00', '2015-07-11 18:00:00', 16, 0, '2015-06-13 22:00:00', '2015-06-13 22:00:00'),
(26, 10, 'Gala night featuring D.J Manu Killer', 'Gala night featuring D.J Manu Killer', '2015-07-11 10:00:00', '2015-07-12 05:00:00', 4, 0, '2015-06-13 22:00:00', '2015-06-13 22:00:00'),
(27, 10, 'Holy mass with CCC Mülheim', 'Holy mass with CCC Mülheim', '2015-07-12 14:00:00', '2015-07-12 16:00:00', 17, 0, '2015-06-13 22:00:00', '2015-06-13 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `activities_participants`
--

CREATE TABLE IF NOT EXISTS `activities_participants` (
  `id` int(11) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `participant_id` int(11) NOT NULL,
  `description` varchar(256) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activities_participants`
--

INSERT INTO `activities_participants` (`id`, `activity_id`, `participant_id`, `description`) VALUES
(1, 1, 1, 'Moderator for the seminar "Be your own boss".'),
(2, 1, 2, 'Chamber of Commerce in Essen. Presented on the topic "Von der Idee zum Konzept sorgfältige Vorbereitung als Basis für eine erfolgreiche Gründung."'),
(3, 1, 3, 'Co-owner of private clinic for oncology.'),
(4, 1, 4, 'CEO Professional Business Solutions, PBS'),
(5, 1, 5, 'Founder and CEO of AfrikAktiv.'),
(6, 1, 6, 'Co-founder of horizon (www.horizononline.org)'),
(7, 1, 7, 'Founder and Editor-in-Chief of AFRICA POSITIVE magazine'),
(8, 1, 8, 'CEO Worldconcect Reisebüro'),
(9, 3, 9, 'Sacred Heart College Mankon, Cameroon'),
(10, 3, 10, 'P.H.S Batibo'),
(11, 3, 11, 'St. Bedes College Ashing-Kom'),
(12, 3, 12, 'SASSE College Buea'),
(13, 3, 13, 'Starlight College Mankon'),
(14, 3, 14, 'Lycée de Dschang'),
(15, 3, 15, 'B.H.S Buea'),
(16, 3, 16, 'C.P.C Bali'),
(17, 3, 17, 'P.S.S Mankon'),
(18, 4, 18, 'DJ for the gala night.'),
(19, 5, 19, 'CCC Mülheim'),
(20, 7, 9, 'Sacred Heart College Mankon'),
(21, 7, 12, 'SASSE College Buea'),
(22, 7, 16, 'C.P.C Bali'),
(23, 7, 11, 'St. Bedes College Ashing-Kom'),
(24, 7, 11, 'St. Bedes College Ashing-Kom'),
(25, 7, 20, 'CCAST Bambili Ex-Students Association'),
(26, 7, 13, 'Starlight College Mankon'),
(27, 7, 21, 'Longla Ex-Students Association'),
(28, 7, 22, 'GBHS Bamenda'),
(29, 7, 23, 'P.H.S Buea'),
(30, 7, 24, 'BIROCOL');

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE IF NOT EXISTS `addresses` (
  `id` int(11) NOT NULL,
  `street` varchar(50) DEFAULT NULL,
  `postal_code` varchar(10) DEFAULT NULL,
  `town` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `street`, `postal_code`, `town`, `state`, `country`, `created`, `modified`) VALUES
(1, 'Flachsmarkt 15', '47051', 'Duisburg', 'Nordrhein-Westfalen (NRW)', 'Germany', '2015-03-08 00:00:00', '2015-03-08 00:00:00'),
(2, 'Virchowstrasse 167a', '45147', 'Essen', 'Nordrhein-Westfalen (NRW)', 'Germany', '2015-03-08 00:00:00', '2015-03-08 00:00:00'),
(3, 'Kalkweg 153', '47055', 'Duisburg', 'Nordrhein-Westfalen (NRW)', 'Germany', '2015-03-08 00:00:00', '2015-03-08 00:00:00'),
(4, 'Bamlerstrasse 90', '45141', 'Essen', 'Nordrhein-Westfalen (NRW)', 'Germany', '2015-03-08 00:00:00', '2015-03-08 00:00:00'),
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
(15, 'Franziskanerstr. 69', '45139', 'Essen', 'Nordrhein-Westfalen (NRW)', 'Germany', '2015-03-22 00:00:00', '2015-03-22 00:00:00'),
(16, 'Begegnungsstätte Kloster Saarn, Klosterstraße 53', '45481', 'Mülheim an der Ruhr', 'Nordrhein-Westfalen (NRW)', 'Germany', '2015-06-14 00:00:00', '2015-06-14 00:00:00'),
(17, 'Eberhardstraße 40', '45476', 'Mülheim an der Ruhr', 'Nordrhein-Westfalen (NRW)', 'Germany', '2015-06-14 00:00:00', '2015-06-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(128) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `promoted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `location`, `start`, `end`, `deleted`, `promoted`, `created`, `modified`) VALUES
(1, 'SHESA Germany e.V Launching General Assembly Erlangen', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'Erlangen, Germany', '2008-04-24', '2008-04-26', 1, 0, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(2, 'General Assembly Berlin 2008', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'Berlin, Germany', '2008-10-03', '2008-10-05', 1, 0, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(3, 'General Assembly Oldenburg', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'Essen, Germany', '2009-05-01', '2009-05-03', 1, 0, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(4, 'Launching of SHESA Germany e.V', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'Essen, Germany', '2009-09-26', '2009-09-27', 1, 0, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(5, 'General Assembly Stuttgart', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'Oldenburg, Germany', '2010-05-01', '2010-05-02', 1, 0, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(6, 'SHESA Germany e.V: Golden Jubilee of our Alma Matter Sacred Heart College Mankon', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'Duisburg/Essen, Germany', '2011-10-01', '2011-10-03', 1, 0, '2015-03-06 23:00:00', '2015-03-06 23:00:00'),
(7, 'General Assembly Freiburg', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'Freiburg, Germany', '2012-06-01', '2012-06-02', 1, 0, '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(8, 'Celebrating 5 Years of SHESA Germany e.V', 'Shesa Germany e. V. celebrated its 5th Jubilee from May 9th to 12th. The jubilee activities begann with a seminar on the very popular topic of "SELF-EMPLOYMENT" or "BE YOUR OWN BOSS" in Germany (and the world at large) which was organised on May 9th at the premises of the Chamber of Commerce of the State of Nordrhein-Westfalen at Duisburg. The keynote speaker was Mr. Friedrich Schreiber of the same institution. A panel discussion followed with the participation of some renowned entrepreneurs of Cameroonian origin, namely: Ms Veye Tatah, Founder and Editor-in-Chief of AFRICA POSITIVE; Mrs. Enie Muyang Tatah, Founder and CEO of AfrikAktiv, AfrikaFestival Tübingen; Dr. Ivo Azeh, Co-Proprietor of a private clinic for oncology; Dr.-Ing Fru Ndenge, CEO Professional Business Solutions, PBS GmbH; Mr. Caleb Tamfu, Co-founder of HORIZON; Mr. Kenneth Najeme, CEO Worldconnect Resiebüro. The panel discussions were moderated by Dr. med. Susan Enjema Aweh. It was a very successful discussion and exchange of ideas with participants remaining highly concentrated and active even after the official closing of the seminar at 19:30 hrs after roughly 5 hours! The take away message was the necessity for networking amongst all interested African and non-african groups to foster our personal developments and that of our families and society.', 'Duisburg/Essen, Germany', '2013-05-09', '2013-05-12', 0, 0, '2015-03-06 23:00:00', '2015-03-06 23:00:00'),
(9, 'General Assemby Berlin 2014', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.', 'Berlin, Germany', '2014-07-11', '2014-07-13', 1, 0, '2015-03-18 23:00:00', '2015-03-18 23:00:00'),
(10, 'SHESA Germany e.V. Convention 2015', 'SHESA Germany e.V. will celebrate its annual convention from July 11 to July 12, 2015. The convention will bring together SHESANs in Germany and abroad, families, friends and guests. It commences on Saturday, July 11, from 10am till 3pm with a seminar entitled: <strong>Emerging Economy in Cameroon, Business and Investment Opportunities.</strong> Participants and panelists will include colleagues from the Cameroon government and leading experts in this field. A family barbecue alongside a casual football match will follow at 4pm. The Gala Night, featuring <strong>DJ. Manu Killer</strong>  will start at 10pm, as the perfect way to conclude the Saturday program. Holy mass will be celebrated with CCC Mülheim on Sunday, July 12, 2015 to grace the convention.\r\n\r\n<br><br>\r\n<em>Contact:</em> <strong>015218129920 / 015216995224 / 01799469539 / <a href="mailto:info@shesagermany.org">info@shesagermany.org</a></strong>\r\n\r\n ', 'Mülheim an der Ruhr / Essen', '2015-07-11', '2015-07-12', 0, 1, '2015-03-10 23:00:00', '2015-03-10 23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `executive`
--

CREATE TABLE IF NOT EXISTS `executive` (
  `id` int(11) NOT NULL,
  `position` enum('President','Vice President','Secretary General','Financial Secretary','Publicity Secretary','Adviser') NOT NULL,
  `term` year(4) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `image_profiles`
--

CREATE TABLE IF NOT EXISTS `image_profiles` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL,
  `title` enum('Dr.','Mr.','Mrs.') DEFAULT NULL,
  `name` varchar(128) NOT NULL,
  `body` text NOT NULL,
  `surname` varchar(128) NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE IF NOT EXISTS `organizations` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `participant_id` int(11) NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `organizations`
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
-- Table structure for table `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
  `id` int(11) NOT NULL,
  `person_id` int(11) DEFAULT NULL,
  `organization_id` int(11) DEFAULT NULL,
  `type` enum('person','organization') DEFAULT 'person',
  `role` enum('Moderator','Panelist','Team','DJ','MC','Other') NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `person_id`, `organization_id`, `type`, `role`, `created`, `modified`) VALUES
(1, 1, NULL, 'person', 'Moderator', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(2, 2, NULL, 'person', 'Panelist', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(3, 3, NULL, 'person', 'Panelist', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(4, 4, NULL, 'person', 'Panelist', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(5, 5, NULL, 'person', 'Panelist', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(6, 6, NULL, 'person', 'Panelist', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(7, 7, NULL, 'person', 'Panelist', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(8, 8, NULL, 'person', 'Panelist', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(9, NULL, 1, 'organization', 'Team', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(10, NULL, 2, 'organization', 'Team', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(11, NULL, 3, 'organization', 'Team', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(12, NULL, 4, 'organization', 'Team', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(13, NULL, 5, 'organization', 'Team', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(14, NULL, 6, 'organization', 'Team', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(15, NULL, 7, 'organization', 'Team', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(16, NULL, 8, 'organization', 'Team', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(17, NULL, 9, 'organization', 'Team', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(18, 9, NULL, 'person', 'DJ', '2015-03-08 23:00:00', '2015-03-08 23:00:00'),
(19, NULL, 10, 'organization', 'Other', '2015-03-08 23:00:00', '2015-03-08 23:00:00'),
(20, NULL, 11, 'organization', 'Team', '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(21, NULL, 12, 'organization', 'Team', '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(22, NULL, 13, 'organization', 'Team', '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(23, NULL, 14, 'organization', 'Team', '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(24, NULL, 15, 'organization', 'Team', '2015-03-10 23:00:00', '2015-03-10 23:00:00'),
(25, 5, NULL, 'person', 'Moderator', '2015-04-05 22:00:00', '2015-04-05 22:00:00'),
(26, NULL, NULL, 'person', 'Panelist', '2015-04-05 22:00:00', '2015-04-05 22:00:00'),
(27, NULL, NULL, 'person', 'Panelist', '2015-04-05 22:00:00', '2015-04-05 22:00:00'),
(28, NULL, NULL, 'person', 'Panelist', '2015-04-05 22:00:00', '2015-04-05 22:00:00'),
(29, 10, NULL, 'person', 'Other', '2015-03-07 23:00:00', '2015-03-07 23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `participants_projects`
--

CREATE TABLE IF NOT EXISTS `participants_projects` (
  `id` int(11) NOT NULL,
  `participant_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `description` varchar(256) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `participants_projects`
--

INSERT INTO `participants_projects` (`id`, `participant_id`, `project_id`, `description`) VALUES
(1, 9, 1, 'Sacred Heart College Mankon, Cameroon'),
(2, 9, 2, 'Sacred Heart College Mankon, Cameroon'),
(3, 9, 3, 'Sacred Heart College Mankon, Cameroon'),
(4, 9, 4, 'Sacred Heart College Mankon, Cameroon'),
(5, 9, 5, 'Sacred Heart College Mankon, Cameroon'),
(6, 9, 6, 'Sacred Heart College Mankon, Cameroon'),
(7, 9, 7, 'Sacred Heart College Mankon, Cameroon'),
(8, 9, 8, 'Sacred Heart College Mankon, Cameroon'),
(9, 9, 9, 'Sacred Heart College Mankon, Cameroon'),
(10, 9, 10, 'Sacred Heart College Mankon, Cameroon'),
(11, 29, 2, 'Ask Docta!');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `id` int(11) NOT NULL,
  `title` enum('Dr.','Dr. Med.','Dr.-Ing.','Mr.','Mrs','Ms') DEFAULT NULL,
  `surname` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `title`, `surname`, `name`, `created`, `modified`) VALUES
(1, 'Dr. Med.', 'Aweh', 'Susan Enjema', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(2, 'Dr.', 'Schreiber', 'Friedrich', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(3, 'Dr. Med.', 'Azeh', 'Ivo', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(4, 'Dr.-Ing.', 'Ndenge', 'Fru', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(5, 'Mrs', 'Tatah', 'Enie Muyang', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(6, 'Mr.', 'Tamfu', 'Caleb', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(7, 'Ms', 'Tatah', 'Veye', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(8, 'Mr.', 'Najeme', 'Keneth', '2015-03-07 23:00:00', '2015-03-07 23:00:00'),
(9, NULL, 'Pokus', 'DJ', '2015-03-08 23:00:00', '2015-03-08 23:00:00'),
(10, 'Dr. Med.', 'Ngassa', 'Emmanuel Anyangwe', '2015-05-09 22:00:00', '2015-05-09 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `phinxlog`
--

CREATE TABLE IF NOT EXISTS `phinxlog` (
  `version` bigint(20) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `start` date NOT NULL,
  `end` date DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `start`, `end`, `deleted`, `created`, `modified`) VALUES
(1, 'Mentorship Program', 'Personal developmental relationship\r\nMore experienced or knowledgeable person\r\nLess experienced or knowledgeable person\r\nRelationship Dialogue\r\nExperience and knowledge tranfer\r\nResults  Widening a first-timer`s knowledge\r\nMaximising his potentials\r\nMinimising mistakes\r\nEducational and professional development\r\nPsychosocial and Financial Advisory Support\r\n\r\nCategories\r\nMedical and Pharmaceutical Sciences\r\nEngineering Sciences\r\nBusiness and Finance\r\n\r\nMENTOR – The Mentor accompanies his protégée on a continual base, supporting him with answers to his problems and challenges based on experience. He catalyzes the efforts and successes of his mentee. A physical meeting of Mentor and Mentee would be of much advantage. So doing, both partners get to know each other better\r\n\r\nMENTEE – The Mentee should be open to advice and not reluctant to share the problems they encounter. Readiness to take to challenge would be of much advantage', '2014-01-01', '2015-12-31', 0, '2015-04-17 22:00:00', '2015-04-17 22:00:00'),
(2, 'Yearly Award For A Project By A Registered SG Member', 'SHESA Germany shall be awarding a total of 500 Euros for the design and implementation of a project\r\n\r\nTarget are registered SG members\r\n\r\nProposals can be from any field as long as they pertain in one way or the other to the development of fellow Cameroonians or Cameroon both back home and/or in Germany Members can build up a team for a single project\r\n\r\n1: Submitting your Projects. Dateline Sun JUNE 15, 2014 at 23:59 hrs\r\n\r\n2: Short presentation on at least 3 projects at the GA in Berlin\r\n\r\n3: Voting of the Best Project by the GA and award of first 250 Euros\r\n\r\n4: The Award of the next 250 Euros is done on or before Dec. 31, 2014 after a clear proof that a greater part of the project has been implemented\r\n\r\n\r\nThe path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother''s keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.', '2014-01-01', '2014-11-24', 0, '2015-04-17 22:00:00', '2015-04-17 22:00:00'),
(3, 'Yearly SG Scholarship To SAHECO Students', 'Project Description\r\nWe intend to give yearly prizes to the brightest and best–improved students in every class in SAHECO based on yearly academic results. \r\nThese prizes should be tailored to the yearly income of SG.\r\nThe awarding ceremony could be accompanied by talks from SHESANS from Germany on diverse orientational themes.\r\n\r\nWhy Is It Important?\r\nSG is a daughter of SAHECO and it’s only natural for us to take care of our mother. \r\nFuture SG members can only come from SAHECO. So the sustainability of AG is directly dependent on the sustainability of SAHECO.\r\nSAHECO is known for its academic excellence which we intend to honour and promote\r\n\r\nWhat are its benefits?\r\nThe immediate financial benefit for the designated students themselves is obvious.\r\nSG would always be in very close ties with, and would indirectly have constant knowledge about the academic progress of SAHECO. \r\nWith a properly chosen strategy the program would help the awareness of the young students to what awaits them after college.\r\nSG would feel good about itself being a good daughter of SAHECO\r\nTimeline\r\nOur man in Bamenda will inform the school authorities about the prize, inquire what other prizes are being awarded already , and give feedback to the team.\r\nIf approved by SG and the school authorities, the project could start late this year.\r\nTeam to decide allocation of the money ( ca. 750€) shortly.', '2014-01-01', '2015-05-21', 0, '2015-04-17 22:00:00', '2015-04-17 22:00:00'),
(4, 'Hold on to your butts', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don''t know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I''m breaking now. We said we''d say it was the snow that killed the other two, but it wasn''t. Nature is lethal but it doesn''t hold a candle to man.\r\n\r\n\r\nThe path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother''s keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.', '2015-04-01', '2015-04-01', 1, '2015-04-17 22:00:00', '2015-04-17 22:00:00'),
(5, 'Hold on to your butts', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don''t know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I''m breaking now. We said we''d say it was the snow that killed the other two, but it wasn''t. Nature is lethal but it doesn''t hold a candle to man.\r\n\r\n\r\nThe path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother''s keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.', '2015-04-01', '2015-04-01', 1, '2015-04-17 22:00:00', '2015-04-17 22:00:00'),
(6, 'Hold on to your butts', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don''t know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I''m breaking now. We said we''d say it was the snow that killed the other two, but it wasn''t. Nature is lethal but it doesn''t hold a candle to man.\r\n\r\n\r\nThe path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother''s keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.', '2015-04-01', '2015-04-01', 1, '2015-04-17 22:00:00', '2015-04-17 22:00:00'),
(7, 'Hold on to your butts', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don''t know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I''m breaking now. We said we''d say it was the snow that killed the other two, but it wasn''t. Nature is lethal but it doesn''t hold a candle to man.\r\n\r\n\r\nThe path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother''s keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.', '2015-04-01', '2015-04-01', 1, '2015-04-17 22:00:00', '2015-04-17 22:00:00'),
(8, 'Hold on to your butts', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don''t know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I''m breaking now. We said we''d say it was the snow that killed the other two, but it wasn''t. Nature is lethal but it doesn''t hold a candle to man.\r\n\r\n\r\nThe path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother''s keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.', '2015-04-01', '2015-04-01', 1, '2015-04-17 22:00:00', '2015-04-17 22:00:00'),
(9, 'Hold on to your butts', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don''t know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I''m breaking now. We said we''d say it was the snow that killed the other two, but it wasn''t. Nature is lethal but it doesn''t hold a candle to man.\r\n\r\n\r\nThe path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother''s keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.', '2015-04-01', '2015-04-01', 1, '2015-04-17 22:00:00', '2015-04-17 22:00:00'),
(10, 'Hold on to your butts', 'You think water moves fast? You should see ice. It moves like it has a mind. Like it knows it killed the world once and got a taste for murder. After the avalanche, it took us a week to climb out. Now, I don''t know exactly when we turned on each other, but I know that seven of us survived the slide... and only five made it out. Now we took an oath, that I''m breaking now. We said we''d say it was the snow that killed the other two, but it wasn''t. Nature is lethal but it doesn''t hold a candle to man.\r\n\r\n\r\nThe path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother''s keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.', '2015-04-01', '2015-04-01', 1, '2015-04-17 22:00:00', '2015-04-17 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `title` enum('Dr.','Mr.','Mrs.') DEFAULT NULL,
  `name` varchar(128) NOT NULL,
  `surname` varchar(128) NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `address_id` (`address_id`);

--
-- Indexes for table `activities_participants`
--
ALTER TABLE `activities_participants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_id` (`activity_id`),
  ADD KEY `participant_id` (`participant_id`),
  ADD KEY `participant_id_2` (`participant_id`);

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `executive`
--
ALTER TABLE `executive`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `image_profiles`
--
ALTER TABLE `image_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `participant_id` (`participant_id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `participants_people` (`person_id`),
  ADD KEY `fk_organizations` (`organization_id`);

--
-- Indexes for table `participants_projects`
--
ALTER TABLE `participants_projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `participant_id` (`participant_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `activities_participants`
--
ALTER TABLE `activities_participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `executive`
--
ALTER TABLE `executive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `image_profiles`
--
ALTER TABLE `image_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `participants_projects`
--
ALTER TABLE `participants_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_events` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `addresses_activities` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `activities_participants`
--
ALTER TABLE `activities_participants`
  ADD CONSTRAINT `activity_activity_participants` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `participants_activity_participants` FOREIGN KEY (`participant_id`) REFERENCES `participants` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `organizations`
--
ALTER TABLE `organizations`
  ADD CONSTRAINT `organizations_participants` FOREIGN KEY (`participant_id`) REFERENCES `participants` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `fk_organizations` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_people` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `participants_projects`
--
ALTER TABLE `participants_projects`
  ADD CONSTRAINT `project_participant` FOREIGN KEY (`participant_id`) REFERENCES `participants` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `project_project` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;