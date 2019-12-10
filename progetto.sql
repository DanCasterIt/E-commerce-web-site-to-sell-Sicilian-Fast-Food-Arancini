-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 25, 2016 at 04:18 PM
-- Server version: 5.7.12-0ubuntu1
-- PHP Version: 7.0.4-7ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `progetto`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `punto_vendita_vicino` (IN `lat` DOUBLE(9,6), IN `lon` DOUBLE(9,6), IN `distanza_max` SMALLINT)  BEGIN
   SELECT ID_punto_vendita,
   		  citta,
          indirizzo,
          ROUND((6371  * acos( cos( radians(lat) ) 
               * cos( radians(latitudine) ) 
               * cos( radians(longitudine) - radians(lon)) + sin(radians(lat)) 
               * sin( radians(latitudine)))
          ), 1) AS distanza
   FROM punto_vendita 
   HAVING distanza <= distanza_max
   ORDER BY distanza ASC
   LIMIT 1;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `amministratori`
--

CREATE TABLE `amministratori` (
  `ID_amministratore` int(10) UNSIGNED NOT NULL,
  `nome` char(50) NOT NULL,
  `cognome` char(50) NOT NULL,
  `password` char(50) NOT NULL,
  `mail` char(50) NOT NULL,
  `telefono` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amministratori`
--

INSERT INTO `amministratori` (`ID_amministratore`, `nome`, `cognome`, `password`, `mail`, `telefono`) VALUES
(0, 'Daniele', 'Castro', 'dc', 'danielecastro@hotmail.it', '3880516937'),
(1, 'Loris', 'Occhipinti', 'lo', 'loris.occhipinti@live.it', '3342757801');

-- --------------------------------------------------------

--
-- Table structure for table `arancini`
--

CREATE TABLE `arancini` (
  `prezzo` double DEFAULT NULL,
  `gusto` char(50) NOT NULL,
  `descrizione` text,
  `immagine` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arancini`
--

INSERT INTO `arancini` (`prezzo`, `gusto`, `descrizione`, `immagine`) VALUES
(3, 'burro', 'bonu e\'', 'burro.jpg'),
(5, 'funghi', 'hinchia!', 'funghi.jpg'),
(1.5, 'nutella', 'arancino dolce', 'nutella.jpeg'),
(1.98, 'pistacchio', 'esempio modifica', 'pistacchio.jpg'),
(4, 'pollo', 'patticulari', 'pollo.jpg'),
(1, 'ragu', 'sapi bellu', 'ragu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `clienti`
--

CREATE TABLE `clienti` (
  `ID_clienti` int(10) UNSIGNED NOT NULL,
  `nome` char(50) DEFAULT NULL,
  `cognome` char(50) DEFAULT NULL,
  `indirizzo` char(50) DEFAULT NULL,
  `citta` char(50) DEFAULT NULL,
  `password` char(50) DEFAULT NULL,
  `mail` char(50) DEFAULT NULL,
  `telefono` char(50) DEFAULT NULL,
  `cap` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clienti`
--

INSERT INTO `clienti` (`ID_clienti`, `nome`, `cognome`, `indirizzo`, `citta`, `password`, `mail`, `telefono`, `cap`) VALUES
(0, 'Daniele Jimmy', 'Lombardo', 'via vattelapesca n.1', 'Catania', 'password', 'a@b.c', '0957691111', NULL),
(1, 'Ettore Malfo', 'Bottino', 'via ovunque n.bho', 'Catania', 'fasrsi_donne_brutte', 'festini@pazzeschi.bumker', '0957696666', NULL),
(2, 'Valerio', 'Aloi', 'via cchi_ssacciu n.x', 'Catania', 'organizzatore', 'in@fondo_al.bar', '0957695555', NULL),
(3, 'Alberto', 'Faro', 'polifunzionale', 'Catania', 'af', 'albfaro@mail', '123', NULL),
(4, 'Loris', 'Occhipinti', 'via Etnea 299', 'Catania', 'lo', 'loris.occhipinti@live.com', '3342757801', '95125');

-- --------------------------------------------------------

--
-- Table structure for table `punto_vendita`
--

CREATE TABLE `punto_vendita` (
  `ID_punto_vendita` int(10) UNSIGNED NOT NULL,
  `latitudine` double UNSIGNED NOT NULL,
  `longitudine` double UNSIGNED NOT NULL,
  `indirizzo` char(50) DEFAULT NULL,
  `telefono` char(50) DEFAULT NULL,
  `citta` char(50) DEFAULT NULL,
  `e-mail` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `punto_vendita`
--

INSERT INTO `punto_vendita` (`ID_punto_vendita`, `latitudine`, `longitudine`, `indirizzo`, `telefono`, `citta`, `e-mail`) VALUES
(0, 37.523174, 15.086454099999969, 'via quieta n.16', '0957698888', 'Catania', 'bho@bho.bho'),
(1, 37.66468159999999, 14.82465609999997, 'via Paolo VI n.2', '0957692366', 'Adrano', 'salcastro@alice.it'),
(2, 36.9205449, 14.8244948, 'via Gianforma p.m. n.45', '0932901285', 'Modica', 'loris.occhipinti@live.com');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `ID_stock` int(10) UNSIGNED NOT NULL,
  `ID_punto_vendita` int(11) UNSIGNED DEFAULT NULL,
  `gusto` char(50) NOT NULL,
  `quantita` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`ID_stock`, `ID_punto_vendita`, `gusto`, `quantita`) VALUES
(0, 0, 'ragu', 22),
(1, 1, 'pollo', 9),
(2, 2, 'burro', 12),
(3, 2, 'ragu', 5),
(4, 2, 'pistacchio', 1),
(5, 0, 'funghi', 1),
(6, 0, 'burro', 36),
(7, 1, 'burro', 12),
(8, 2, 'nutella', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amministratori`
--
ALTER TABLE `amministratori`
  ADD PRIMARY KEY (`ID_amministratore`);

--
-- Indexes for table `arancini`
--
ALTER TABLE `arancini`
  ADD PRIMARY KEY (`gusto`);

--
-- Indexes for table `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`ID_clienti`);

--
-- Indexes for table `punto_vendita`
--
ALTER TABLE `punto_vendita`
  ADD PRIMARY KEY (`ID_punto_vendita`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`ID_stock`),
  ADD KEY `FK_arancini_punto_vendita` (`ID_punto_vendita`),
  ADD KEY `FK_stock_arancini` (`gusto`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `FK_arancini_punto_vendita` FOREIGN KEY (`ID_punto_vendita`) REFERENCES `punto_vendita` (`ID_punto_vendita`),
  ADD CONSTRAINT `FK_stock_arancini` FOREIGN KEY (`gusto`) REFERENCES `arancini` (`gusto`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
